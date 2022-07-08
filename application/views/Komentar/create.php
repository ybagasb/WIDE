<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1><?=$judul?></h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Blank Page</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">

      <!-- Default box -->
      <div class="card">
        <div class="card-header">
          <h3 class="card-title">Pengisian Komentar</h3>
          <div class="card-tools">
            <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
              <i class="fas fa-minus"></i>
            </button>
            <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
              <i class="fas fa-times"></i>
            </button>
          </div>
        </div>
        <div class="card-body">
          <div class="container">
            <?php echo form_open('komentar/save')?>
                <div class="form-group row">
                    <label for="id" class="col-4 col-form-label"></label> 
                    <div class="col-8">
                    <input id="id" type="hidden" name="id" type="text" class="form-control">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="tanggal"  class="col-4 col-form-label">Tanggal</label> 
                    <div class="col-8">
                    <div class="input-group">
                        <div class="input-group-prepend">
                        <div class="input-group-text">
                            <i class="fa fa-address-card"></i>
                        </div>
                        </div> 
                        <input id="tanggal" type="date" name="tanggal" type="text" class="form-control">
                    </div>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="isi" class="col-4 col-form-label">Komentar</label> 
                    <div class="col-8">
                    <input id="isi" name="isi" cols="40" rows="5" class="form-control"></input>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="users_id" class="col-4 col-form-label">Users ID</label> 
                    <div class="col-8">
                    <input id="users_id" type="number" name="users_id" type="text" class="form-control">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="wisata_id" class="col-4 col-form-label">Wisata ID</label> 
                    <div class="col-8">
                    <input id="wisata_id" type="number" name="wisata_id" type="text" class="form-control">
                    </div>
                </div>
                <div class="form-group row">
                  <label class="col-4">Rating</label> 
                  <div class="col-8">
                    <div class="custom-control custom-radio custom-control-inline">
                      <input name="nilai_rating_id" id="nilai_rating_id_0" type="radio" class="custom-control-input" value="1"> 
                      <label for="nilai_rating_id_0" class="custom-control-label">1</label>
                    </div>
                    <div class="custom-control custom-radio custom-control-inline">
                      <input name="nilai_rating_id" id="nilai_rating_id_1" type="radio" class="custom-control-input" value="2"> 
                      <label for="nilai_rating_id_1" class="custom-control-label">2</label>
                    </div>
                    <div class="custom-control custom-radio custom-control-inline">
                      <input name="nilai_rating_id" id="nilai_rating_id_2" type="radio" class="custom-control-input" value="3"> 
                      <label for="nilai_rating_id_2" class="custom-control-label">3</label>
                    </div>
                    <div class="custom-control custom-radio custom-control-inline">
                      <input name="nilai_rating_id" id="nilai_rating_id_3" type="radio" class="custom-control-input" value="4"> 
                      <label for="nilai_rating_id_3" class="custom-control-label">4</label>
                    </div>
                    <div class="custom-control custom-radio custom-control-inline">
                      <input name="nilai_rating_id" id="nilai_rating_id_4" type="radio" class="custom-control-input" value="5"> 
                      <label for="nilai_rating_id_4" class="custom-control-label">5</label>
                    </div>
                  </div>
                </div> 
                <div class="form-group row">
                    <div class="offset-4 col-8">
                    <button name="submit" type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </div>
              <?php echo form_close()?>
          </div>

        </div>
        <!-- /.card-body -->
        <div class="card-footer">
          Footer
        </div>
        <!-- /.card-footer-->
      </div>
      <!-- /.card -->

    </section>
    <!-- /.content -->
  </div>