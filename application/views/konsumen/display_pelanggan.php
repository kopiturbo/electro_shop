<section id="main-content">
  <section class="wrapper">
    <div class="row">
      <div class="col-lg-12">
        <h3 class="page-header"><i class="fa fa-table"></i> Table Konsumen</h3>
      </div>
    </div>
    <?php if($this->session->flashdata('info')): ?>
     <div class="alert alert-success fade in"><?php echo $this->session->flashdata('info'); ?></div>
   <?php endif; ?>
    <div class="row">
      <div class="col-lg-12">
        <section class="panel">

          <table class="table table-striped table-advance table-hover">
            <tbody>
              <tr>
                <th><i class="icon_pin_alt"></i> Id Konsumen</th>
                <th><i class="icon_calendar"></i> Nama Konsumen</th>
                <th><i class="icon_mail_alt"></i> Email</th>
                <th><i class="icon_pin_alt"></i> Alamat</th>
                <th><i class="icon_mobile"></i> Telp</th>
              </tr>
              <tr>
            </tbody>
            <tbody>
              <?php 
                foreach ($tbl_pelanggan as $row) {
              ?>
                  <tr>
                    <td><?php echo $row['id'] ?></td>
                    <td><?php echo $row['nama'] ?></td>
                    <td><?php echo $row['email'] ?></td>
                    <td><?php echo $row['alamat'] ?></td>
                    <td><?php echo $row['telp'] ?></td>
                    <td>
                      <a class="btn btn-primary" href="<?php echo base_url();?>Konsumen/tambah_konsumen"><i class="icon_plus_alt2"></i></a>
                      <a class="btn btn-success" href="<?php echo base_url('konsumen/edit_konsumen/'.$row['id']);?>"><i class="icon_check_alt2"></i></a>
                      <a class="btn btn-danger" href="<?php echo base_url('Konsumen/hapus_konsumen/'.$row['id']);?>" onClick="return confirm('yakin ?')"><i class="icon_close_alt2"></i></a>
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