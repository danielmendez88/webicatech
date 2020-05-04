$(function(){
    $('input[type=text]').val (function(){
        console.log(this.value);
        return this.value.toUpperCase();
    })

    $('textarea').val(function(){
        console.log("hola");
        return this.value.toUpperCase();
    })
});
