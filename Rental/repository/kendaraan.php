<?php


function getAllKendaraan($db)
{
    $sql = <<<SQL
    SELECT 
        *
    FROM tb_kendaraan
    ORDER BY tahun_keluaran DESC;
    SQL;

    $result =  mysqli_query($db, $sql);

    $data = [];

    while ($row = mysqli_fetch_assoc($result)) {
        $data[] = $row;
    }

    return $data;
}

function findKendaraanByID($db, $id)
{
    $sql = <<<SQL
    SELECT 
        *
    FROM tb_kendaraan
    WHERE id = $id
    LIMIT 1;
    SQL;

    $result =  mysqli_query($db, $sql);

    if (mysqli_num_rows($result) == 0) {
        return null;
    }

    return mysqli_fetch_assoc($result);
}

function newKendaraan($db, $data)
{
    $sql = <<<SQL
    INSERT INTO `tb_kendaraan` 
    VALUES (
        NULL,
        '{$data['merek']}',
        '{$data['tahun_keluaran']}',
        '{$data['harga_sewa']}',
        NOW(),
        NOW()
    )
    SQL;

    if (mysqli_query($db, $sql)) {
        return mysqli_insert_id($db);
    } else {
        return null;
    }
}


function updateKendaraanByID($db, $id, $data)
{
    $sql = <<<SQL
    UPDATE tb_kendaraan
    SET 
        merek = '{$data['merek']}',
        tahun_keluaran = '{$data['tahun_keluaran']}',
        harga_sewa = '{$data['harga_sewa']}',
        updated_at = NOW()
    WHERE id = $id;
    SQL;

    if (mysqli_query($db, $sql)) {
        return $id;
    } else {
        return null;
    }
}

function deleteKendaraan($db, $id)
{
    $sql = <<<SQL
    DELETE FROM tb_kendaraan WHERE id = $id;
    SQL;

    if (mysqli_query($db, $sql)) {
        return true;
    } else {
        return false;
    }
}
