<br>
<br>
<h1 style="text-align: center;font-size: 25px">HOŞGELDİNİZ</h1>
<br>
<!-- Doktor için login-->
<h3 style="text-align: center;font-size: 25px;">DOKTOR GİRİŞ</h3>
<div class="x">
<form method="POST">
  
<table>
 <br>
<tr>
 <td>Kullanıcı Adı:</td>
 <td><input type="text" name="txtKadi" style="border-radius: 1px;"></td>


</tr>
<tr><td></td></tr>
<tr><td></td></tr>
<td><label style="float: right;">Şifre:</label></td>
<td><input type="password" name="txtSifre" style="border-radius: 1px;"></td>
<tr><td></td>

<td><input type="submit" name="btnGiris" value="Giriş" src="/ok.jpg"></td>
</tr>
</table>


 </form>

<?php
if (isset($_POST["btnGiris"])) {
$kadi=$_POST["txtKadi"];
$sifre=$_POST["txtSifre"];
if ($kadi=="" or $sifre=="") {
 echo "Kullanıcı adı veya şifre boş geçilemez.";

}
else{

$baglanti=mysqli_connect("localhost","root","","hastane") or die("Mysql bağlantısı gerçekleşmedi");
$sql=mysqli_query($baglanti,"select *from login") or die("Veritabanı tablosuna ulaşılamadı.");
if ($row=mysqli_fetch_assoc($sql)) {
 
if ($row["kullanici"]==$kadi and $row["sifre"]==$sifre) {
 
//echo "Giriş başarılı";
header("location: doktoranasayfa.php");

}
else{


 echo "Kullanıcı adı veya şifre yanlış";
 
}

}

}


}


?>

</div>
<style type="text/css">
 
.x{


 margin:auto;
 margin-top: 40px;
 width: 320px;
 height: auto;
 background: #c7c7cc;
 padding: 15px;
 border-radius: 10px;
}
*{

 box-sizing: border-box;
}
input[type=submit]{
width: 100%;
margin-top: 15px;
background: #009999;
color: white;
border-radius: 10px;border-style: none;
height: 35px;

}


</style>




