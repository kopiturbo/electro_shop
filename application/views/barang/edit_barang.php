<section id="main-content">
  <section class="wrapper">
  <div class="row">
  <div class="col-lg-12">
    <h3 class="page-header"><i class="fa fa-files-o"></i> Edit Produk</h3>
  </div>
  </div>
  <!-- Form validations -->
  <div class="row">
  <div class="col-lg-12">
  <section class="panel">
    <div class="panel-body">
      <div class="form">
        <?php if ($dataEdit) {
            $id = $dataEdit->id_produk;
            $nama = $dataEdit->nama_produk;
            $deskripsi = $dataEdit->deskripsi;
            $harga = $dataEdit->harga;
            $gambar = $dataEdit->gambar;
            $kategori = $dataEdit->kategori;
          }else{
            $nama = "";
            $deskripsi = "";
            $harga = "";
            $gambar = "";
            $kategori = "";
          } ?>
        <form class="form-validate form-horizontal" id="feedback_form" method="post" action="<?php echo base_url('produk/update/'.$id) ?>">
          <?php echo validation_errors(); ?>
          <div class="form-group ">
            <label for="cname" class="control-label col-lg-2">Nama Produk <span class="required"></span></label>
            <div class="col-lg-10">
              <input class="form-control" id="cname" name="nama_produk" type="text" value="<?php echo $nama ?>">
            </div>
          </div>
          <div class="form-group ">
            <label for="cdeskripsi" class="control-label col-lg-2">Deskripsi <span class="required"></span></label>
            <div class="col-lg-10">
              <textarea class="form-control " id="cdeskripsi" type="text" name="deskripsi"><?php echo $deskripsi ?></textarea>
            </div>
          </div>
          <div class="form-group ">
            <label for="charga" class="control-label col-lg-2">Harga <span class="required"></span></label>
            <div class="col-lg-10">
              <input class="form-control " id="charga" type="text" name="harga" value="<?php echo $harga ?>">
            </div>
          </div>
          <div class="form-group ">
            <label for="cgambar" class="control-label col-lg-2">Gambar <span class="required"></span></label>
            <div class="col-lg-10">
              <input class="form-control" id="subject" name="gambar" minlength="5" type="text" value="<?php echo $gambar ?>">
            </div>
          </div>
          <div class="form-group ">
            <label for="ckategori" class="control-label col-lg-2">Kategori <span class="required"></span></label>
            <div class="col-lg-10">
              <input class="form-control " id="ckategori" name="kategori" value="<?php echo $kategori ?>">
            </div>
          </div>
          <div class="form-group">
            <div class="col-lg-offset-2 col-lg-10">
              <button class="btn btn-primary" type="submit" name="submit">Update</button>
            </div>
          </div>
        </form>
      </div>
  </section>
</section>