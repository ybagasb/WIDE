<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>Wisata di kota Depok</h1>
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
        <?php
        if ($this->session->userdata('ROLE') == 'administrator') {
        ?>
          <a class="btn btn-success" href="<?php echo base_url('index.php/wisata/create') ?>" role="button">Tambah Wisata</a>
        <?php
        }
        ?>
        <table class="table table-striped text-center">
          <thead>
            <tr>
              <th>No</th>
              <th>Nama Wisata</th>
              <th>Alamat</th>
              <th>Rating Skor</th>
              <th>Harga Tiket</th>
              <th>Website</th>
              <th>Action</th>
            </tr>
          </thead>
          <tbody>
            <?php
            $nomor = 1;
            foreach ($list_wisata as $obj) {
            ?>
              <tr>
                <td><?= $nomor ?></td>
                <td><?= $obj->nama ?></td>
                <td><?= $obj->alamat ?></td>
                <td><?= $obj->skor_rating ?></td>
                <td><?= $obj->harga_tiket ?></td>
                <td><?= $obj->website ?></td>
                <td>
                  <a href="view?id=<?= $obj->id ?>" style="text-decoration: none"><button type="button" class="btn btn-secondary">View</button></a>
                  <?php
                  if ($this->session->userdata('ROLE') == 'administrator') {
                  ?>
                    <a href="edit?id=<?= $obj->id ?>" style="text-decoration: none"><button type="button" class="btn btn-secondary">Edit</button></a>
                    <a href="delete?id=<?= $obj->id ?>" style="text-decoration: none" onclick="if(!confirm('Anda yakin hapus komentar ini?')){return false}"><button type="button" class="btn btn-secondary">Delete</button></a>
                  <?php
                  }
                  ?>
                </td>
              </tr>
            <?php
              $nomor++;
            } ?>
          </tbody>
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