$(document).ready(function(){

    $('.cart-btn').on("click", function (){
    
    if($(this).hasClass('btn-primary')) {
        $(this).removeClass('btn-primary').addClass('btn-danger');
        $(this).val('Remove from cart');
    } else {
        $(this).removeClass('btn-danger').addClass('btn-primary');
        $(this).val('Add to cart');
    }
    
    });

});