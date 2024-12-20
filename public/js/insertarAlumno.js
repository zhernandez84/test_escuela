$(document).ready(function() {
    
    $("#btnInsertarAlumno").click(function() {
       
        var txt_id = $('#txt_id').val();
        var txt_nombre = $('#txt_nombre').val();
        var txt_paterno = $('#txt_paterno').val();
        var txt_materno = $('#txt_materno').val();
        var fecha = $('#fecha').val();
        var genero = $('#genero').val();

        if(txt_materno.trim()==''){
            txt_materno=null;
        }
        
        if ( txt_id == ''|| txt_nombre=='' || txt_paterno=='' || fecha =='' || genero==0) {              
            alert('Faltan datos');        
        }else{
            $.ajax({
                data: {
                    txt_id: txt_id,
                    txt_nombre: txt_nombre,
                    txt_paterno:txt_paterno,
                    txt_materno: txt_materno,
                    fecha: fecha,
                    genero: genero
                },
                type: 'POST',                
                cache: false,
                url: BASE_PATH+'InsertarAlumnoA',
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
