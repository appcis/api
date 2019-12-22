$(function () {

    $('button.desactiver').click(function () {
        $('input:hidden[name="statut"]').val(0);
        $('input:hidden[name="active"]').val(0);
        $(this).closest('form').submit();
    });

    $('button.activer').click(function () {
        $('input:hidden[name="statut"]').val(1);
        $('input:hidden[name="active"]').val(1);
        $(this).closest('form').submit();
    });

    $('tr[data-href]').click(function (e) {
        $(location).attr('href', $(e.currentTarget).data('href'));
    })

});
