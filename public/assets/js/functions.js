$(document).ready(function (){
	$('.endeos-unslider').unslider({
		speed: 800,
		delay: 4000,
		keys: true,
		dots: true,
		fluid: true
    });
    $('input[type=text]').val(function(){
        return this.value.toUpperCase();
    })

    console.log("hola");
    alert("HI"+$.ui.version);

    $("#fecha_nacimiento").datepicker({
        changeMonth: true,
        changeYear: true,
        format: 'dd-mm-yy'
    });
});
