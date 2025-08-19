<?= $this->extend('layouts/main'); ?>
<?= $this->section('content'); ?>
<div class="my-3 p-3 bg-body rounded shadow-sm">
    <div class="d-flex justify-content-between border-bottom py-2">
        <h3 class="pb-2 mb-0">Data Pegawai</h3>
        <a href="/pegawai/create" class="btn btn-secondary">Tambah data</a>
    </div>
    <div class="pt-3">
        <table class="table table-bordered table-striped">
            <thead>
                <tr>
                    <th>No.</th>
                    <th>Nama Pegawai</th>
                    <th>Alamat</th>
                    <th>Telepon</th>
                    <th>Jabatan</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($pegawai as $key => $row) { ?>
                    <tr>
                        <td><?= $key + 1; ?></td>
                        <td><?= $row->nama_pegawai; ?></td>
                        <td><?= $row->alamat; ?></td>
                        <td><?= $row->telepon; ?></td>
                        <td><?= $row->nama_jabatan; ?></td>
                        <td>
                            <a href="/pegawai/edit/<?= $row->id; ?>" class="btn btn-warning">Edit</a>
                            <form action="/pegawai/delete/<?= $row->id; ?>" method="post" style="display:inline;">
                                <?= csrf_field(); ?>
                                <button type="submit" class="btn btn-danger" onclick="return confirm('Yakin hapus data?')">Hapus</button>
                            </form>
                        </td>
                    </tr>              
               <?php } ?>
            </tbody>
        </table>
    </div>
</div>
<?= $this->endSection(); ?>
