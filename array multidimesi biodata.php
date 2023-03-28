<?php
$biodata = array(
    "nama" => "Kenandra Aurello",
    "umur" => date("y")-date("y", mktime(0,0,0,7,4,2003)),
    "npm" => "21081010184",
    "asal_kota" => "Surabaya",
    "ttl" => "Surabaya, 04 Juli 2003",
    "email" => "kentud@gmail.com",
    "hobi" => "NgeGame",
    "universitas" => "UPN Veteran Jatim"
);
?>

<!DOCTYPE html>
<html>
<head>
<title>Biodata 2</title>
<style>
.wrap{
background-color:rgba(210, 14, 106, 0.7);
width: 800px;
color:bisque;
margin: 20px auto;
padding:15px;
}
</style>
</head>
<body style="background: url(rickmorty.jpeg);background-size:cover;background-attachment: fixed;">
<div class="wrap">
<h1 class="class" align="center">BIODATA DIRI</h1><hr/ align="center" width="25%" style="border-top: 3px double #8c8b8b;">
<table>
<tr><td rowspan="10" width="100px">
<img src="img bio.jpeg" width="200px" style="display: block;border-radius: 50%;border-color:white;margin-right:30px" border="2px" ></td></tr>
<?php foreach ($biodata as $key => $value) { ?>
    <tr>
        <td><b><?= ucfirst(str_replace("_", " ", $key)) ?></b></td>
        <td>:</td>
        <td><?= $value ?></td>
    </tr>
<?php } ?>
</table>
</div>
</body>
</html>