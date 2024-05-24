<h1>Detail Data Kendaraan</h1>

<table class="table table-bordered w-50">
        <tr>
            <td>
                Merek
            </td>
            <td>
                <!-- Menampilkan Merek -->
                <?= $kendaraan['merek'] ?>
            </td>
        </tr>
        <tr>
            <td>
                Tahun Keluaran
            </td>
            <td>
                <!-- Menampilkan Tahun Keluaran -->
                <?= $kendaraan['tahun_keluaran'] ?>
            </td>
        </tr>
        <tr>
            <td>
                Harga Sewa
            </td>
            <td>
                <!-- Menampilkan Harga Sewa -->
                Rp. <?= $kendaraan['harga_sewa'] ?>
            </td>
        </tr>
        <tr>
            <td>
                Created At
            </td>
            <td>
                <!-- Menampilkan Harga Sewa -->
                <?= $kendaraan['created_at'] ?>
            </td>
        </tr>
        <tr>
            <td>
                Last Update
            </td>
            <td>
                <!-- Menampilkan Harga Sewa -->
                <?= $kendaraan['updated_at'] ?>
            </td>
        </tr>
    </table>

<a href="<?= url("/kendaraan") ?>" class="btn btn-secondary">Kembali</a>
<a href="<?= url("/kendaraan/edit?id={$kendaraan['id']}") ?>" class="btn btn-primary">Edit</a>