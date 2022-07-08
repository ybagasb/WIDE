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
          <a class="btn btn-success" href="<?php echo base_url('index.php/komentar/create') ?>" role="button">Create Komentar</a>
        <table class="table table-striped text-center">
          <thead>
            <tr>
              <th>No</th>
              <th>Tanggal</th>
              <th>Komentar</th>
              <th>User Id</th>
              <th>Wisata Id</th>
              <th>Rating</th>
              <th>Action</th>
            </tr>
          </thead>
          <tbody>
            <?php
            $nomor = 1;
            foreach ($list_komentar as $obj) {
            ?>
              <tr>
                <td><?= $nomor ?></td>
                <td><?= $obj->tanggal ?></td>
                <td><?= $obj->isi ?></td>
                <td><?= $obj->users_id ?></td>
                <td><?= $obj->wisata_id ?></td>
                <td><?= $obj->nilai_rating_id ?></td>
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