$(document).ready(function() {
    
    $("#btnInsertarCalificacion").click(function() {
        
        var id = $('#txt_id').val();
        var materia = $('#txt_materia').val();
        var calificacion = $('#txt_calificacion').val();
        var grado = $('#txt_grado').val();
        var mes = $('#cmb_mes').val();
        var year = $('#cmb_year').val();
        
        if ( id == 0 || grado==0 || materia==0 || calificacion=='') {              
            alert('Faltan datos');        
        }else{
            $.ajax({
                data: {
                    id: id,
                    materia: materia,
                    calificacion:calificacion,
                    grado: grado,
                    mes: mes,
                    year: year
                },
                type: 'POST',                
                cache: false,
                url: BASE_PATH+'InsertarCalificacionA',
                success: function(response) {
                    var obj = jQuery.parseJSON(response);
                   // var obj = JSON.parse(response);
                   codigo= obj.cod;
                   mensaje=obj.msj;
                    console.log("ok"+obj.msj);
                    alert("Respuesta:\n"+mensaje);
                    window.location.href = BASE_PATH+'/home';                  
                }
            });
           
        }
    });
});
