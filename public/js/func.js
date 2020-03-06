$('#speciality_id').change(function (){
    $.each($("#speciality_id option:selected"), function(){
        speciality_id = $(this).val();
    });
    $.ajax({
        type: "post",
        url: "/getProfessionals",
        dataType: 'json',
        data: {
            speciality_id: speciality_id
        },
        success: function (response) {
            if(response.success) {
                let profissionals = response.content;
                $('.cards *').remove();
                profissionals.forEach(profissional => {
                    let dr = $('.model .dr').clone();
                    if(profissional.nome != null){
                        $(dr).find('.username span').text('Dr. ' + profissional.nome);
                        $(dr).find('.CRM span').text('CRM: ' + profissional.documento_conselho);
                        $(dr).find('.btnAgendar').attr('id', profissional.profissional_id);
                        $('.cards').append(dr);
                    }
                });
            }
        }
    });
});

function mostrarForm(btnAgendar) {
    $('.form-agendar').show();
    $('input[name="professional_id"]').val($(btnAgendar).attr('id'));
    $('input[name="speciality_id"]').val($('#speciality_id').val());
}
