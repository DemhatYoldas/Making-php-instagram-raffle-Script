
function messageManagement(success,error) {
    if (success)
    {
        alertify.success("İşlem Başarılı");
    } else {
        alertify.error(error);
    }
}

$(document).ready(function(){
    $("#insertFormShow").click(function(){
        $("#insertForm").fadeToggle();
    });
});

$(document).ready(function() {
    $('#example').DataTable( {
        dom: 'Bfrtip',
        buttons: [
            'copy', 'csv', 'excel', 'pdf', 'print'
        ]
    } );
} );

