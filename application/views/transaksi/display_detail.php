<section id="main-content">
  <section class="wrapper">
    <div class="row">
      <div class="col-lg-12">
        <h3 class="page-header"><i class="fa fa-table"></i> Table Detail Order</h3>
      </div>
    </div>
    <div class="row">
      <div class="col-lg-12">
        <section class="panel">

          <table class="table table-striped table-advance table-hover">
            <tbody>
              <tr>
                <th><i class="icon_pin_alt"></i> Id</th>
                <th><i class="icon_calendar"></i> Order Id</th>
                <th><i class="icon_profile"></i> Id Produk</th>
                 <th><i class="icon_profile"></i> Jumlah</th>
                  <th><i class="icon_profile"></i> Harga</th>
              </tr>
              <tr>
            </tbody>
            <tbody>
              <?php 
                foreach ($tbl_detail_order as $row) {
              ?>
                  <tr>
                    <td><?php echo $row['id'] ?></td>
                    <td><?php echo $row['order_id'] ?></td>
                    <td><?php echo $row['produk'] ?></td>
                    <td><?php echo $row['qty'] ?></td>
                    <td><?php echo $row['harga'] ?></td>

                    <td>
                      <a class="btn btn-primary" href="#"><i class="icon_plus_alt2"></i></a>
                      <a class="btn btn-success" href="#"><i class="icon_check_alt2"></i></a>
                      <a class="btn btn-danger" href="#"><i class="icon_close_alt2"></i></a>
                    </td>
                  </tr>

              <?php } ?>
            </tbody>

          </table>
        </section>
      </div>
    </div>
  </section>
</section>