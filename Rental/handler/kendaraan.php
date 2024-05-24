<?php

function index($db)
{
    // dd($_SERVER);
    require BASE_PROJECT_PATH . "/repository/kendaraan.php";
    $r = getAllKendaraan($db);

    masterView('kendaraan/index', ['kendaraan' => $r]);
}

function show($db)
{
    require BASE_PROJECT_PATH . "/repository/kendaraan.php";
    $r = findKendaraanByID($db, $_GET['id']);

    masterView('kendaraan/show', ['kendaraan' => $r]);
}

function create($db)
{
    masterView('kendaraan/insert');
}

function store($db)
{
    require BASE_PROJECT_PATH . "/repository/kendaraan.php";

    $j = newKendaraan($db, $_POST);

    header("Location: " . url("/kendaraan"));
    die();
}

function edit($db)
{
    require BASE_PROJECT_PATH . "/repository/kendaraan.php";
    $r = findKendaraanByID($db, $_GET['id']);

    masterView('kendaraan/edit', ['kendaraan' => $r]);
}

function update($db)
{
    $id = $_GET['id'];

    require BASE_PROJECT_PATH . "/repository/kendaraan.php";

    $j = updateKendaraanByID($db, $id, $_POST);

    header("Location: " . url("/kendaraan/show?id={$id}"));
    die();
}

function destroy($db)
{
    $id = $_GET['id'];

    require BASE_PROJECT_PATH . "/repository/kendaraan.php";

    $j = deleteKendaraan($db, $id);

    header("Location: " . url("/kendaraan"));
    die();
}
