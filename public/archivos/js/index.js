$("#form-action").submit(function(e){
    e.preventDefault();
    $.enviar();
});

$.enviar =  function(){
    var data = new FormData($("#form-action")[0]);
    $.ajax({
        url:'registrar',
        data:data,
        type:'POST',
        cache:false,
        contentType: false,
        processData: false,
        error:function(error){
            console.log(error);
        },
        success: function (resp) {
            console.log(resp);
        }
    });
}