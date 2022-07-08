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
            <?php echo form_open('wisata/save')?>
            <div class="form-group row">
                <label for="id" class="col-4 col-form-label"></label> 
                <div class="col-8">
                <input id="id" name="id" type="hidden" class="form-control">
                </div>
            </div>
            <div class="form-group row">
                <label for="nama" class="col-4 col-form-label">Nama Wisata</label> 
                <div class="col-8">
                <input id="nama" name="nama" type="text" class="form-control">
                </div>
            </div>
            <div class="form-group row">
                <label for="alamat" class="col-4 col-form-label">Alamat Wisata</label> 
                <div class="col-8">
                <input id="alamat" name="alamat" type="text" class="form-control">
                </div>
            </div>
            <div class="form-group row">
                <label for="latlong" class="col-4 col-form-label">Koordinat</label> 
                <div class="col-8">
                <input id="latlong" name="latlong" type="text" class="form-control">
                </div>
            </div>
            <div class="form-group row">
                <label for="jenis_id" class="col-4 col-form-label">Jenis Wisata</label> 
                <div class="col-8">
                <select id="jenis_id" name="jenis_id" class="custom-select">
                    <option value="1">Kolam Renang</option>
                    <option value="2">Taman Kota</option>
                    <option value="3">Pemancingan</option>
                </select>
                </div>
            </div>
            <div class="form-group row">
                <label for="skor_rating" class="col-4 col-form-label">Rating</label> 
                <div class="col-8">
                <input id="skor_rating" name="skor_rating" type="text" class="form-control" aria-describedby="skor_ratingHelpBlock"> 
                <span id="skor_ratingHelpBlock" class="form-text text-muted">Skor 1 - 5, gunakan tanda (.) sebagai pengganti tanda koma.</span>
                </div>
            </div>
            <div class="form-group row">
                <label for="harga_tiket" class="col-4 col-form-label">Harga Tiket</label> 
                <div class="col-8">
                <input id="harga_tiket" name="harga_tiket" type="text" class="form-control">
                </div>
            </div>
            <div class="form-group row">
                <label for="foto1" class="col-4 col-form-label">Foto 1</label> 
                <div class="col-8">
                <input id="foto1" name="foto1" type="text" class="form-control">
                </div>
            </div>
            <div class="form-group row">
                <label for="foto2" class="col-4 col-form-label">Foto 2</label> 
                <div class="col-8">
                <input id="foto2" name="foto2" type="text" class="form-control">
                </div>
            </div>
            <div class="form-group row">
                <label for="foto3" class="col-4 col-form-label">Foto 3</label> 
                <div class="col-8">
                <input id="foto3" name="foto3" type="text" class="form-control">
                </div>
            </div>
            <div class="form-group row">
                <label class="col-4">Kecamatan</label> 
                <div class="col-8">
                <div class="custom-control custom-radio custom-control-inline">
                    <input name="kecamatan_id" id="kecamatan_id_0" type="radio" class="custom-control-input" value="1"> 
                    <label for="kecamatan_id_0" class="custom-control-label">Beji</label>
                </div>
                <div class="custom-control custom-radio custom-control-inline">
                    <input name="kecamatan_id" id="kecamatan_id_1" type="radio" class="custom-control-input" value="2"> 
                    <label for="kecamatan_id_1" class="custom-control-label">Pancoran Mas</label>
                </div>
                </div>
            </div>
            <div class="form-group row">
                <label for="fasilitas" class="col-4 col-form-label">Website</label> 
                <div class="col-8">
                <input id="fasilitas" name="website" type="text" class="form-control">
                </div>
            </div> 
            <div class="form-group row">
                <label for="fasilitas" class="col-4 col-form-label">Fasilitas</label> 
                <div class="col-8">
                <input id="fasilitas" name="fasilitas" type="text" class="form-control">
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