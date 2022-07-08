<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>Komentar</h1>
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
        <h3 class="card-title">Wisata <b>Depok</b></h3>

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
        <table class="table table-striped">
            <tr>
                <td>Id</td>
                <td><?=$wisata->id?></td>
            </tr>
            <tr>
                <td>Nama Wisata</td>
                <td><?=$wisata->nama?></td>
            </tr>
            <tr>
                <td>Alamat</td>
                <td><?=$wisata->alamat?></td>
            </tr>
            <tr>
                <td>Latlong</td>
                <td><?=$wisata->latlong?></td>
            </tr>
            <tr>
                <td>Id Jenis</td>
                <td><?=$wisata->jenis_id?></td>
            </tr>
            <tr>
                <td>Rating Skor</td>
                <td><?=$wisata->skor_rating?></td>
            </tr>
            <tr>
                <td>Harga Tiket</td>
                <td><?=$wisata->harga_tiket?></td>
            </tr>
            <tr>
              <td>
              Foto 1 : <?=$wisata->foto1?>
              <br/>
              <?php
              echo form_open_multipart('wisata/upload');
              ?>
              <input type="hideen" name="id" value="<?=$wisata->id?>"/>
              <input type="file" name="fotowst" size="20"/>
              <input type="submit" class="btn btn-success mt-3" value="Upload"/>

              <?php echo form_close()?>

              </td>
              <td>
              <?php
              $filegambar = base_url('/uploads/'.$wisata->foto1);
              //echo $filegambar;
              $array = get_headers($filegambar);
              $string = $array[0];
              if(strpos($string,"200"))
              {
                //echo 'url exists';
                echo '<img class="img-fluid" src="'.$filegambar.'"class="img-thumbnail" alt=""/>';
              }
              else
              {
                //echo 'url does not exist';
                echo '<img src="'.base_url('/uploads/noimage.png').'" alt=""/>';
              }
              ?>
              </td>
            </tr>
            <tr>
                <td>Id Kecamatan</td>
                <td><?=$wisata->kecamatan_id?></td>
            </tr>
            <tr>
                <td>Website</td>
                <td><?=$wisata->website?></td>
            </tr>
            <tr>
                <td>Fasilitas</td>
                <td><?=$wisata->fasilitas?></td>
            </tr>
        </table>
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
