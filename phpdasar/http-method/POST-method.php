<html>

<body>
<form method="POST" action="">
Nama: <input type="text" name="nama"><br> Email: <input type="text" name="email"><br>
<input type="submit" name="submit" value="Submit">
</form>

<?php
if ($_POST) {
echo 'Nama: ' . $_POST['nama']; echo '<br>';
echo 'Email: ' . $_POST['email'];
}
?>
</body>

</html>
