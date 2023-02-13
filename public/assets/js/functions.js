$(document).ready(function (){
	$('.endeos-unslider').unslider({
		speed: 800,
		delay: 4000,
		keys: true,
		dots: true,
		fluid: true
    });

    $("#fecha_nacimiento").datepicker({
        changeMonth: true,
        changeYear: true,
        format: 'dd-mm-yy'
    });
});
