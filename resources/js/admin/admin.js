import $ from 'jquery';
window.$ = window.jQuery = $;

const csrfToken = $('meta[name="csrf_token"]').attr('content');
let deleteUrl = null;

$('.delete-item').on('click', function(event){
    event.preventDefault();

    deleteUrl = $(this).attr('href');

    $('#modal-danger').modal('show');
});

$('.delete-confirm').on('click', function(event) {
    event.preventDefault();

    $.ajax({
        method: "DELETE",
        url: deleteUrl,
        data: {
            _token: csrfToken,
        },
        beforeSend: function() {
            $('.delete-confirm').text('Deleting...');
        },
        success: function(data){

        },
        error: function(xhr, status, error) {

        },
    });
});
