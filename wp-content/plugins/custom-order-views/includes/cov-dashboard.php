<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
<div class="container py-3 cov-wrap">
  <div class="row">
    <div class="col-12">
      <h1><?php echo get_admin_page_title(); ?></h1>
    </div>
  </div>
  <div class="row">
    <div class="col-10">
      <?php
        $cov_args = array( 
          'limit' => -1,
          'orderby' => 'date',
          'order' => 'DESC'
        );
        $cov_orders = wc_get_orders( $cov_args );
      ?>
      <table class="table table-bordered table-responsive table-striped table-hover caption-top">
        <caption>Order lists</caption>
        <thead class="table-dark">
          <tr>
            <th class="col-1">ID</th>
            <th>Customer name</th>
            <th class="col-3 text-center">Date Created</th>
            <th class="col-2 text-end">Total</th>
          </tr>
        </thead>
        <tbody class="table-group-divider">
          <?php foreach( $cov_orders as $cov_order ) : ?>
          <tr>
            <td><?php echo '#' . $cov_order->get_id(); ?></td>
            <td><?php echo $cov_order->get_billing_first_name() . ' ' . $cov_order->get_billing_last_name(); ?></td>
            <td class="text-center"><?php echo date_format( $cov_order->get_date_created(), 'm/d/Y H:i:s' ); ?></td>
            <td class="text-end"><?php echo $cov_order->get_currency() . ' ' . $cov_order->get_total(); ?></td>
          </tr>
          <?php endforeach; ?>
        </tbody>
      </table>
    </div>
  </div>
</div>
