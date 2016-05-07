$(document).ready(function(){
    $("#form-excel").submit(function(e){
       e.preventDefault();
       $.subirArchivo();
    });
    $.cargarTabla();
});

$.cargarTabla = function(){
    $("#tabla").load("./controlador/CargarTabla.php");
}

$.subirArchivo =  function(){
    var data = new FormData($("#form-excel")[0]);
    $.ajax({
        url:"./controlador/SubirArchivo.php",
        type:'POST',
        data:data,
        cache:false,
        contentType: false,
        processData: false,
        error:function(error){
            console.log(error);
        },
        success:function(resp){
            if(resp == 1){
                alert("Bien, Datos Insertados");
            }else
            if(resp == 2){
                alert("Mal, Datos no insertados");
            }else
            if(resp == 3){
                alert("Archivo debe ser Excel");
            }else{
                alert("Se ha producido un grave error");
            }
            $.cargarTabla();
        }
    })
}

