<div class="dashboard-wrapper">
    <div class="container-fluid dashboard-content">
        <div class="row">
            <div class="col-xl-12">
                <div class="page-header">
                    <h2 class="pageheader-title">Data Persyaratan</h2>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-xl-12">
                <div class="card">
                    <div class="card-header">
                        <a href="<?= base_url('persyaratan/create') ?>" class="btn btn-success btn-sm float-right"><i class="fas fa-plus"></i> Tambah Data</a>
                    </div>
                    <div class="card-body">
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Nama Persyaratan</th>
                                    <th>Keterangan</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $no = 1;
                                foreach ($persyaratan as $p): ?>
                                    <tr>
                                        <td><?= $no++ ?></td>
                                        <td><?= $p->nama_persyaratan ?></td>
                                        <td><?= $p->keterangan ?></td>
                                        <td>
                                            <a href="<?= base_url('persyaratan/update/' . $p->id) ?>" class="btn btn-info btn-sm">Ubah</a>
                                            <a href="<?= base_url('persyaratan/delete/' . $p->id) ?>" class="btn btn-danger btn-sm" onclick="return confirm('Yakin ingin menghapus?')">Hapus</a>
                                        </td>
                                    </tr>
                                <?php endforeach; ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>