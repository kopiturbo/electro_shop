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
            $id = $dataEdit->id;
            $nama = $dataEdit->nama;
            $email = $dataEdit->email;
            $alamat = $dataEdit->alamat;
            $telp = $dataEdit->telp;
          }else{
            $nama = "";
            $email = "";
            $alamat = "";
            $telp = "";
          } ?>
        <form class="form-validate form-horizontal" id="feedback_form" method="post" action="<?php echo base_url('konsumen/update/'.$id) ?>">
          <?php echo validation_errors(); ?>
          <div class="form-group ">
            <label for="cname" class="control-label col-lg-2">Nama Konsumen <span class="required"></span></label>
            <div class="col-lg-10">
              <input class="form-control" id="cname" name="nama_kons" type="text" value="<?php echo $nama ?>">
            </div>
          </div>
          <div class="form-group ">
            <label for="cdeskripsi" class="control-label col-lg-2">Email <span class="required"></span></label>
            <div class="col-lg-10">
              <textarea class="form-control " id="cdeskripsi" type="text" name="email"><?php echo $email ?></textarea>
            </div>
          </div>
          <div class="form-group ">
            <label for="charga" class="control-label col-lg-2">Alamat <span class="required"></span></label>
            <div class="col-lg-10">
              <input class="form-control " id="charga" type="text" name="alamat" value="<?php echo $alamat ?>">
            </div>
          </div>
          <div class="form-group ">
            <label for="cgambar" class="control-label col-lg-2">Telp <span class="required"></span></label>
            <div class="col-lg-10">
              <input class="form-control" id="subject" name="telp" minlength="5" type="text" value="<?php echo $telp ?>">
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