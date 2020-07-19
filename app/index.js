$(function(){

    let edit = false;

    getBooks();
    $('#bk-result').hide();

    // Buscar Libro
    $("#search_id").keyup(function (e) { 
        if ($('#search_id').val()) {

            let searchValue = $("#search_id").val();
            /* console.log(searchValue); */

            $.ajax({
                url: 'backend/search_book.php',
                type: 'POST',
                data: { searchValue },
                /* dataType: "dataType", */
                success: function (response) {
                    let bks = JSON.parse(response);
                    let template = '';
                    /* console.log(bks); */
                    bks.forEach(bk => {
                        template +=  `
                            <li>${bk.name_book}</li>
                        `;        
                    });

                    $('#container').html(template);
                    $('#bk-result').show();
                }
            });

        }
    });

    // Añadir un libro
    $('#book-form').submit(function (e) { 
        
        e.preventDefault();

        const dataBooks = {
            id: $('#bookId').val(),
            name: $('#name_book').val(),
            description: $('#description_book').val(),
            author: $('#author_book').val(),
            publication: $('#publication_year_book').val(),
        };

        const url = edit === false ? 'backend/add_book.php' : 'backend/edit_book.php';

        $.post(
            url, 
            dataBooks,
            function (res) {
                console.log(res);
                getBooks();
                $('#book-form').trigger('reset');
                /* console.log(res); */
            }
        );
    });

    // Eliminar un libro
    $(document).on('click', '.delete_book', function(){
        if(confirm('Deseas Eliminar este Libro?')) {
            const element = $(this)[0].parentElement.parentElement;
            const book_id = $(element).attr('book_id');
            $.post('backend/delete_book.php', {book_id}, (response) => {
                getBooks();
            });
        } 
    });

    // Editar Libro
    $(document).on('click', '.book-edit', function(){
        const element = $(this)[0].parentElement.parentElement.parentElement;
        const book_id = $(element).attr('book_id'); 
        $.post('backend/getonly_book.php', {book_id}, function (response) {
          const book = JSON.parse(response);
          $('#bookId').val(book.id_books);
          $('#name_book').val(book.name_book);
          $('#description_book').val(book.description_book);
          $('#author_book').val(book.author_book);
          $('#publication_year_book').val(book.publication_year_book);
          edit = true;
        }); 
      });

    // Obtener Libros
    function getBooks() {
        $.ajax({
          url: 'backend/list_book.php',
          type: 'GET',
          success: function(res) {
            const books = JSON.parse(res);
            let template = '';
            books.forEach(bk => {
            template += `
                <div class="card text-white bg-warning mb-3 mr-2" style="max-width: 18rem;" book_id="${bk.id_books}">
                    <div class="card-header inline-block">
                        <strong class="mr-auto">${bk.author_book}</strong>
                        -
                        <span class="badge badge-success"><small>${bk.publication_year_book}</small></span>
                        <button type="button" class="ml-2 mb-1 close delete_book">
                          <span aria-hidden="true">&times;</span>
                        </button>
                      </button></div>
                      <div class="card-body">
                        <h4 class="card-title">
                            <a href="#" class="book-edit">${bk.name_book}</a>
                        </h4>
                        <p class="card-text">${bk.description_book}</p>
                    </div>
                </div>
                    `
            });
            $('#bk-item').html(template);
            
          }
        });
    }



}); 