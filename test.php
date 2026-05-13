<!DOCTYPE html>
<html>
<body>

<form method="post">
    NIM : <input type="number" name="nim"><br>
    Nama : <input type="text" name="nama"><br>
    <button type="submit" name="kirim">Kirim</button>
</form>

<?php
if(isset($_POST['kirim'])){
    echo "NIM : ".$_POST['nim']."<br>";
    echo "Nama : ".$_POST['nama'];
}
?>

</body>
</html>