/**
 * Created by 3002 on 11/8/2016.
 */

$(document).ready(function () {
    $(".add-to-cart").click(function () {
        var id = $(this).attr("data-id");
        $.post("/cart/addAjax/"+id, {}, function(data){
            $("#cart-count").html(data);
        });
        return false;
    })
});
