$("document").ready(function(){
   $.cargarChat(); 
});

$("#form-action").submit(function(e){
    e.preventDefault();
    $.enviar();
});

$.enviar =  function(){
    var data = new FormData($("#form-action")[0]);
    $.ajax({
        url:'registrar/registrar',
        data:data,
        type:'POST',
        cache:false,
        contentType: false,
        processData: false,
        error:function(error){
            console.log(error);
        },
        success: function (resp) {
            var resp = JSON.parse(resp);
            $.cargarChat();
        }
    });
}

$.cargarChat = function(){
    $("#mensajes").load("registrar/listar");
} 