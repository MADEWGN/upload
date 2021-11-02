<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Simpan Data</title>
</head>
<body>
<h2> HUGO CMS - PHP </h2>
<table>
<form method="post" action="">
    <tr><td>Nama</td><td><input type="mardown" name="nama" style="width:300px"></td></tr>
<tr><td>gambar</td><td><input type="text" name="gambar" style="width:300px"></td></tr>
    <tr><td>Isi</td><td><textarea name="data" style="width:300px"></textarea></td></tr>
    <tr><td></td><td><input type="submit" name="ok" value="Simpan"></td></tr>
</form>
</table>

 <a href="/post/hasil.html"nofollow noopener noreferrer">berhasil di simpan</a>

</body>
</html>

<?php
if(isset($_POST['ok'])){
    if(empty($_POST['nama']) || empty($_POST['data'])){
        print "Lengkapi form";
    }else{
        $nama=$_POST['nama'];
        $data=$_POST['data'];
        $tanggal=date("h:i:s");
        $buka=fopen("hasil.html",'a');
        fwrite($buka,"title: ${nama} <br> ");
        fwrite($buka,"dibuat : ${tanggal} <br> ");
        fwrite($buka," isi : ${data} <br> ");
        fwrite($buka,"<hr>");
        fclose($buka);
        print "data berhasil disimpan";
    }
}?>
