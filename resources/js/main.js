$(function () {

    $('button.desactiver').click(function () {
        $('input:hidden[name="statut"]').val(0);
        $(this).closest('form').submit();
    });

    $('button.activer').click(function () {
        $('input:hidden[name="statut"]').val(1);
        $(this).closest('form').submit();
    });

});
