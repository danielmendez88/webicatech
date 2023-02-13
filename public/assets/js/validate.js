$(function(){
    console.log("hola");
$.validator.addMethod("CURP", function (value, element) {
    if (value !== '') {
        var patt = new RegExp("^[A-Z][A,E,I,O,U,X][A-Z]{2}[0-9]{2}[0-1][0-9][0-3][0-9][M,H][A-Z]{2}[B,C,D,F,G,H,J,K,L,M,N,Ñ,P,Q,R,S,T,V,W,X,Y,Z]{3}[0-9,A-Z][0-9]$");
        return patt.test(value);
    } else {
        return false;
    }
}, "Ingrese una CURP valida");
$.validator.addMethod("phoneMX", function(phone_number, element) {
    phone_number = phone_number.replace(/\s+/g, "");
    return this.optional(element) || phone_number.length > 9 &&
    phone_number.match(/^(\+?1-?)?(\([2-9]\d{2}\)|[2-9]\d{2})?[2-9]\d{2}?\d{4}$/);
}, "Por favor especifique un número valido de teléfono");

$('#form_sid').validate({
    rules: {
        nombre: {
            required: true,
            minlength: 3
        },
        apellidoPaterno: {
            required: true,
            minlength: 3
        },
        apellidoMaterno: {
            required: true,
            minlength: 3
        },
        sexo: {
            required: true
        },
        curp: {
            required: true,
            CURP: true
        },
        fecha_nacimiento: {
            required: true,
            //date: true
        },
        telefono: {
            required: true,
            phoneMX: true
        },
        domicilio: {
            required: true
        },
        colonia: {
            required: true
        },
        cp: {
            required: true,
            number: true
        },
        estado: {
            required: true
        },
        municipio: {
            required: true
        },
        estado_civil: {
            required: true
        },
        discapacidad: {
            required: true
        },

    },
    messages: {
        nombre: {
            required: 'Por favor ingrese su nombre',
            minlength: jQuery.validator.format("Por favor, al menos {0} caracteres son necesarios")
        },
        apellidoPaterno: {
            required: 'Por favor ingrese su apellido'
        },
        apellidoMaterno: {
            required: 'Por favor ingrese su apellido'
        },
        sexo: {
            required: 'Por favor Elegir su genero'
        },
        curp: {
            required: 'Por favor Ingresé la curp',
        },
        fecha_nacimiento: {
            required: 'Por favor, seleccione fecha',
            //date: 'Formato de fecha no valido'
        },
        telefono: {
            required: 'Por favor, ingrese telefóno',
        },
        domicilio: {
            required: 'Por favor, ingrese su domicilio'
        },
        colonia: {
            required: 'Por favor, ingrese la colonia'
        },
        cp: {
            required: 'Por favor, ingrese el código postal',
            number: 'Acepta sólo números'
        },
        estado: {
            required: 'Por favor, seleccione un estado'
        },
        municipio: {
            required: 'Por favor, seleccione el municipio'
        },
        estado_civil: {
            required: 'Por favor, seleccione su estado civil'
        },
        discapacidad: {
            required: 'Por favor seleccione una opción'
        },

    }
});
});
