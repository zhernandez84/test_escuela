$(document).ready(function() {
    $("#btnBuscarCalificacion").click(function() {
        var id = $('#txt_id').val();
        var grado = $('#txt_grado').val();
        var mes = $('#cmb_mes').val();
        var year = $('#cmb_year').val();
        
        if ( id == 0 || grado==0) {              
            alert('Faltan datos');        
        }else{
            $.ajax({
                data: {
                    id: id,
                    grado: grado,
                    mes: mes,
                    year: year
                },
                type: 'POST',                
                cache: false,
                url: BASE_PATH+'buscarCalificacionA',
                success: function(response) {
                  //  var obj = jQuery.parseJSON(response);
                   // console.log("ok"+obj);
                   $('#miElemento2').html(response);
                    console.log(response)
                }
            });
           
        }
    });
});
