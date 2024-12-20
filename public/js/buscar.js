$(document).ready(function() {
    $("#btnBuscar").click(function() {
        var search = $('#txt_buscar').val();
        if ( search == '') {  
            
            alert('Faltan datos');
        
        }else{
            console.log(BASE_PATH+'buscarAlumno');
            $.ajax({
                data: {
                    valor: search
                },
                type: 'GET',                
                cache: false,
                url: BASE_PATH+'buscarAlumno',
                success: function(response) {
                  //  var obj = jQuery.parseJSON(response);
                   // console.log("ok"+obj);
                   $('#miElemento').html(response);
                    console.log(response)
                }
            });
           
        }
    });
});
