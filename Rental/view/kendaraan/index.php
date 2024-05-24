<h1>Ini Kendaraan</h1>
<a href="<?= url("/kendaraan/create") ?>" class="btn btn-success my-3">Tambah Data</a>
<table class="table table-bordered">
    <thead class="bg-primary  text-white">
        <tr>
            <th>ID</th>
            <th>Merek</th>
            <th>Tahun Keluaran</th>
            <th>Harga Sewa</th>
            <th>Aksi</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($kendaraan as $k => $v) : ?>
            <tr>
                <td><?= $v['id'] ?></td>
                <td><?= $v['merek'] ?></td>
                <td><?= $v['tahun_keluaran'] ?></td>
                <td>Rp. <?= $v['harga_sewa'] ?></td>
                <td>
                    <a href="<?= url("/kendaraan/show?id={$v['id']}") ?>" class="btn btn-sm btn-info">Detail</a>
                    <a href="#" onclick="event.preventDefault(); document.getElementById('delete-form-<?= $v['id'] ?>').submit();" class="btn btn-sm btn-danger">Delete</a>
                    <form id="delete-form-<?= $v['id'] ?>" action="<?= url("/kendaraan/destroy?id={$v['id']}") ?>" method="POST" style="display: none;"></form>
                </td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>