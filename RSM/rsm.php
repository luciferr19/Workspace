<html>
<head>
<title>Form Pendaftaran</title>
  <body bgcolor="#C0C0C0">
  <DIV ALIGN = "LEFT">
  <p><b> <font=couriernew color=black>
  </body>
<br><br>
<center><h1>FORM PENDAFTARAN PEGAWAI</h1></center>
<br><br>
<form action="proses.php" method="post">
<table border="0" align="left">
<tr>
<td>Nama</td><td> : </td>
<td> <input type="text" name="nama" size="40"> </td>
</tr>
<tr>
<td>Alamat</td><td> : </td>
<td> <input type="text" name="alamat" size="50"> </td>
</tr>
<tr>
<td>Kota</td><td> : </td>
<td> <input type="text" name="kota" size="40"> </td>
</tr>
<tr>
<td>Jenis Kelamin</td><td> : </td>
<td> <input type="radio" name="jenis_kelamin" value="Laki-laki">Laki-laki<br> 
     <input type="radio" name="jenis_kelamin" value="Perempuan">Perempuan<br>
</td>
</tr>
<tr>
<td>Pendidikan</td><td> : </td>
<td> <select name="pendidikan">
    <option value="s1">S1</option>
    <option value="s2">S2</option>
    <option value="s3">S3</option>
  </select> 
</td>
</tr>
<tr>
<td>Skill</td><td> : </td>
<td><input type="checkbox" name="skill" value="Editing">Editing<br>
<input type="checkbox" name="skill" value="Programmer">Programmer<br>
<input type="checkbox" name="skill" value="Analysis">Analysis<br>
</td>
</tr>
<tr>
<td>Pengalaman</td><td> : </td>
<td> <textarea name="Pengalaman" cols="25" rows="5" ></textarea></textarea </td>
</tr>
<tr>
  <td colspan="3" align="center">
</tr>
</p>
</td>
</tr>
<tr>
<td colspan="3" align="center">
  <br>
  <br>
  <input type="submit" value="Simpan" />
  <input type="reset" value="Batal" /> 
</td>  
</tr>
</table>
</form>
</head>
</html>