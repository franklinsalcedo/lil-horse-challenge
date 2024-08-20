const cwfCalcWidth = (t, g) => {
  let percent = (t * 100) / g;
  percent = Math.round(percent);
  return percent;
}

const cwfUpdateMessage = (total) => {
  let message = '',
    goal = 100,
    discount = 10,
    discountType = 'percent',
    discountText = (discountType == 'percent') ? discount+'%' : '$'+parseFloat(discount).toFixed(2);
    rest = goal - total,
    barWidth = (rest > 0) ? cwfCalcWidth(total, goal) : 100;
  message = (rest > 0) ? 'You are $'+parseFloat(rest).toFixed(2)+' away from getting '+discountText+' off this order' : '<strong>Great! You have '+discountText+' off on this order!</strong>';
  barWidth = barWidth+'%';
  jQuery('.cwf-message').html(message);
  jQuery('.cwf-total-cart').html('$'+parseFloat(total).toFixed(2));
  if(rest <= 0)
    jQuery('.cwf-goal-amount').addClass('cwf-hide');
  else
    jQuery('.cwf-goal-amount').removeClass('cwf-hide');
  jQuery('.cwf-percent').css('width',barWidth);
}

jQuery(document.body).on('removed_from_cart updated_cart_totals', function () {
  jQuery.ajax({
    url: ajax_object.ajaxurl,
    method: 'POST',
    async: true,
    data: {
      action: 'get_cart_total',
    },
    success: (response) => {
      cwfUpdateMessage(response);
    },
    error: (response) => {
      console.log('Failed. See logs for details');
    }
  });
});
