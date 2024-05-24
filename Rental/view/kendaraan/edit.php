<h1>Edit Data Kendaraan</h1>
<form action="<?= url("/kendaraan/update?id={$kendaraan['id']}") ?>" method="POST">
<div class="row">
            <div class="col-4 form-group">
                <label>Merek</label>
                <!-- Input untuk Merek dengan nilai awal dari database -->
                <input type="text" class="form-control" name="merek" value="<?= $kendaraan['merek'] ?>">
            </div>
        </div>
        <div class="row">
            <div class="col-4 form-group">
                <label>Tahun keluaran</label>
                <!-- Input untuk tahun keluaran dengan nilai awal dari database -->
                <input type="number" class="form-control" name="tahun_keluaran" value="<?= $kendaraan['tahun_keluaran'] ?>">
            </div>
        </div>
        <div class="row">
            <div class="col-4 form-group">
                <label>Harga Sewa</label>
                <!-- Input untuk harga sewa dengan nilai awal dari database -->
                <input type="number" class="form-control" name="harga_sewa" value="<?= $kendaraan['harga_sewa'] ?>">
            </div>
        </div>
    
    <a href="<?= url("/kendaraan/show?id={$kendaraan['id']}") ?>" class="btn btn-secondary">Kembali</a>
    <input type="submit" value="Simpan" class="btn btn-primary">
</form>