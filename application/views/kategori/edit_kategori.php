<section id="main-content">
  <section class="wrapper">
  <div class="row">
  <div class="col-lg-12">
    <h3 class="page-header"><i class="fa fa-files-o"></i> Edit Kategori</h3>
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
            $nama = $dataEdit->nama_kategori;
          }else{
            $nama = "";
          } ?>
        <form class="form-validate form-horizontal" id="feedback_form" method="post" action="<?php echo base_url('kategori/update/'.$id) ?>">
          <?php echo validation_errors(); ?>
          <div class="form-group ">
            <label for="cname" class="control-label col-lg-2">Nama Kategori <span class="required"></span></label>
            <div class="col-lg-10">
              <input class="form-control" id="cname" name="nama_kategori" type="text" value="<?php echo $nama ?>">
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