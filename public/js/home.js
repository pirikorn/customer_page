$(document).ready( function () {
    $('#customerTable').DataTable({
        pageLength : 15,
        language: {
            lengthMenu: 'Display <select>'+
              '<option value="15">15</option>'+
              '<option value="30">30</option>'+
              '<option value="45">45</option>'+
              '<option value="60">60</option>'+
              '<option value="-1">All</option>'+
              '</select> records'
        },
    });
    $('.show_confirm').click(function(event) {
        var form =  $(this).closest("form");
        event.preventDefault();
        swal({
            title: `Are you sure you want to delete this record?`,
            text: "If you delete this, it will be gone forever.",
            icon: "warning",
            buttons: true,
            dangerMode: true,
        })
        .then((willDelete) => {
          if (willDelete) {
            form.submit();
          }
        });
    });
});
