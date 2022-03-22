$('#modelPreComision').on('show.bs.modal', (e) => {
    const target = $(e.relatedTarget);
    let dato = target.data('bannersecundario');
    let modal = $(this);
    modal.find('.modal-body .form-row');
    document.getElementById("imagenes_convocatoria").src = dato;
    $('#btnverconvocatoria').attr("href", "/convocatorias/"+btoa(unescape(encodeURIComponent(dato))));
});