
<div class="cwf-container">
  <p><?php echo $cwf_message; ?></p>
  <div class="cwf-bar">
    <div class="cwf-percent" style="width:<?php echo $cwf_width_bar; ?>%">
      <span class="cwf-total-cart"><?php echo $cwf_currency . number_format((float)$cwf_total_cart, 2, '.', ''); ?></span>
    </div>
    <?php if ($cwf_rest > 0) : ?>
    <span class="cwf-goal-amount"><?php echo $cwf_currency . number_format((float)$cwf_goal_amount, 2, '.', ''); ?></span>
    <?php endif; ?>
  </div>
  <?php if ($cwf_rest > 0) : ?>
  <p><a href="<?php echo $cwf_shop_url; ?>" class="cwf-button">Shop Now</a></p>
  <?php endif ?>
</div>
