<div class="dashboard-wrapper">
    <div class="container-fluid dashboard-content">
        <div class="row">
            <div class="col-xl-12">
                <div class="page-header">
                    <h2 class="pageheader-title">Perbarui Data Persyaratan</h2>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-xl-12">
                <div class="card">
                    <div class="card-header">Perbarui Data Persyaratan</div>
                    <div class="card-body">
                        <form action="<?= base_url('persyaratan/update') ?>" method="post">
                            <input type="hidden" name="id" value="<?= $persyaratan->id ?>">
                            <div class="form-group row">
                                <label class="col-md-2">Nama Persyaratan</label>
                                <div class="col-md-10">
                                    <input type="text" name="nama_persyaratan" value="<?= $persyaratan->nama_persyaratan ?>" required class="form-control">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-md-2">Keterangan</label>
                                <div class="col-md-10">
                                    <input type="text" name="keterangan" value="<?= $persyaratan->keterangan ?>" required class="form-control">
                                </div>
                            </div>
                            <a href="<?= base_url('persyaratan') ?>" class="btn btn-danger btn-sm float-right">Batal</a>
                            <button type="submit" class="btn btn-info btn-sm float-right mr-1">Simpan</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>