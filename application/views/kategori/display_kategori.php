<section id="main-content">
  <section class="wrapper">
    <div class="row">
      <div class="col-lg-12">
        <h3 class="page-header"><i class="fa fa-table"></i> Table Kategori</h3>
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
                <th><i class="icon_pin_alt"></i> Id Kategori</th>
                <th><i class="icon_calendar"></i> Nama Kategori</th>
              </tr>
              <tr>
            </tbody>
            <tbody>
              <?php 
                foreach ($tbl_kategori as $row) {
              ?>
                  <tr>
                    <td><?php echo $row['id'] ?></td>
                    <td><?php echo $row['nama_kategori'] ?></td>

                    <td>
                      <a class="btn btn-primary" href="<?php echo base_url();?>kategori/tambah_kategori"><i class="icon_plus_alt2"></i></a>
                      <a class="btn btn-success" href="<?php echo base_url('kategori/edit_kategori/'.$row['id']);?>"><i class="icon_check_alt2"></i></a>
                      <a class="btn btn-danger" href="<?php echo base_url('kategori/hapus_kategori/'.$row['id']);?>" onClick="return confirm('yakin ?')"><i class="icon_close_alt2"></i></a>
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