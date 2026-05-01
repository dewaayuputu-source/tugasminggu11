<?php
include_once dirname(__DIR__) . "/controllers/AnggotaControllerS.php";

$controller = new AnggotaController();

$id = $_GET['id'];
$data = $controller->model->getById($id);
$row = $data->fetch_assoc();

if(isset($_POST['update'])) {
    $controller->model->update(
        $id,
        $_POST['nama'],
        $_POST['pangkat'],
        $_POST['jabatan']
    );
    header("Location: ../index.php");
}
?>

<h2>Edit Data Anggota</h2>
<form method="POST">
Nama :
<input type="text" name="nama" value="<?= $row['nama']; ?>">
<br><br>

Pangkat :
<input type="text" name="pangkat" value="<?= $row['pangkat']; ?>">
<br><br>

Jabatan :
<input type="text" name="jabatan" value="<?= $row['jabatan']; ?>">
<br><br>

<button type="submit" name="update">Update</button>
</form>