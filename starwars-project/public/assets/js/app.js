$(document).ready(function(){
    var pathArray = window.location.pathname.split( '/' );
    var pathname = "";
    for (i = 0; i < pathArray.length - 2; i++) {
        pathname += pathArray[i];
        pathname += '/';
    }
    var url = pathname + "add-product";

    $('a[data-product]').click(function(){
        $.ajax({
            url: url,
            type: "post",
            data: {'productId':$(this).data('product'),'quantity':$('select[name=quantity]').val(), '_token': $('input[name=_token]').val()},
            success: function(){
                location.reload();
            }
        });
    });
});