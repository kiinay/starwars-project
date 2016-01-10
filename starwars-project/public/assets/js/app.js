$(document).ready(function(){
    $('a[data-product]').click(function(){
        $.ajax({
            url: '/Dropbox/School/ProFinal/starwars-project/public/add-product',
            type: "post",
            data: {'productId':$(this).data('product'),'quantity':$('select[name=quantity]').val(), '_token': $('input[name=_token]').val()},
            success: function(){
                location.reload();
            }
        });
    });
});