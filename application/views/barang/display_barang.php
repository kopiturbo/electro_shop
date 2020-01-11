<section id="main-content">
  <section class="wrapper">
    <div class="row">
      <div class="col-lg-12">
        <h3 class="page-header"><i class="fa fa-table"></i> Table Produk</h3>
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
                <th><i class="icon_pin_alt"></i> Id Produk</th>
                <th><i class="icon_calendar"></i> Nama Produk</th>
                <th><i class="icon_mail_alt"></i> Deskripsi</th>
                <th><i class="icon_mobile"></i> Harga</th>
                <th><i class="icon_mobile"></i> Gambar</th>
                <th><i class="icon_cogs"></i> Kategori</th>
                <th><i class="icon_cogs"></i> Action</th>
              </tr>
              <tr>
            </tbody>
            <tbody>
              <?php 
                foreach ($tbl_produk as $row) {
              ?>
                  <tr>
                    <td><?php echo $row['id_produk'] ?></td>
                    <td><?php echo $row['nama_produk'] ?></td>
                    <td><?php 
                          $deskripsi = $row['deskripsi'];
                          $potong = substr($deskripsi,0, 50);
                          echo $potong;
                        ?></td>
                    <td><?php echo $row['harga'] ?></td>
                    <td><?php echo $row['gambar'] ?></td>
                    <td><?php echo $row['kategori'] ?></td>
                    <td>
                      <a class="btn btn-primary" href="<?php echo base_url();?>produk/tambah_barang"><i class="icon_plus_alt2"></i></a>
                      <a class="btn btn-success" href="<?php echo base_url('produk/edit_barang/'.$row['id_produk']);?>"><i class="icon_check_alt2"></i></a>
                      <a class="btn btn-danger" href="<?php echo base_url('produk/hapus_barang/'.$row['id_produk']);?>" onClick="return confirm('yakin ?')"><i class="icon_close_alt2"></i></a>
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