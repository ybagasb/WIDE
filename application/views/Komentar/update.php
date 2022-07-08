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
            <?php
                $hidden = ['idedit'=>$kmntredit->id];
            ?>
            <?php echo form_open('komentar/save','', $hidden)?>
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
                        <input id="tanggal" type="date" name="tanggal" type="text" value="<?=$kmntredit->tanggal?>" class="form-control">
                    </div>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="isi" class="col-4 col-form-label">Komentar</label> 
                    <div class="col-8">
                    <textarea id="isi" name="isi" cols="40" rows="5" value="<?=$kmntredit->isi?>" class="form-control"></textarea>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="users_id" class="col-4 col-form-label">Users ID</label> 
                    <div class="col-8">
                    <input id="users_id" type="number" name="users_id" type="text" value="<?=$kmntredit->users_id?>" class="form-control">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="wisata_id" class="col-4 col-form-label">Wisata ID</label> 
                    <div class="col-8">
                    <input id="wisata_id" type="number" name="wisata_id" type="text" value="<?=$kmntredit->wisata_id?>" class="form-control">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="nilai_rating_id" class="col-4 col-form-label">Nilai Rating</label> 
                    <div class="col-8">
                    <input id="nilai_rating_id" type="number" name="nilai_rating_id" type="text" value="<?=$kmntredit->nilai_rating_id?>" class="form-control">
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