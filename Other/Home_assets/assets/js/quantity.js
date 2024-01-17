 /**=====================
     Quantity js
==========================**/
//  $('.qty-right-plus').click(function () {
//      if ($(this).prev().val() < 9) {
//          $(this).prev().val(+$(this).prev().val() + 1);
//      }
//  });
//  $('.qty-left-minus').click(function () {
//      if ($(this).next().val() > 1) {
//          if ($(this).next().val() > 1) $(this).next().val(+$(this).next().val() - 1);
//      }
//  });
$(document).ready(function() {
    $('.qty-left-minus').click(function() {
        var input = $(this).next('.qty-input');
        var qty = parseInt(input.val());
        if (qty > 1) {
            qty--;
            input.val(qty);
            updateTotal(input.data('product-id'), qty);
        }
    });
    $('.qty-right-plus').click(function() {
        var input = $(this).prev('.qty-input');
        var qty = parseInt(input.val());
        qty++;
        input.val(qty);
        updateTotal(input.data('product-id'), qty);
    });
});
