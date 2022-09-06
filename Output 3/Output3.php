<form action="" method="post" enctype="multipart/form-data"> 
  	Select image to upload:
  	<input type="file" name="fileToUpload"><br>
  	<input type="submit" value="Upload" name="submit">
</form>

<?php  
	if (isset($_POST['submit'])){
		$foto = $_FILES['fileToUpload']['name'];
		$tmp_name = $_FILES['fileToUpload']['tmp_name'];

		move_uploaded_file($tmp_name, 'images/'.$foto);
?>
<table border="1" cellspacing="">
	<tr>
		<td align="center">FOTO</td>
	</tr>
	<tr>
		<td><img src="images/<?php echo $foto?>" style="width: 200px"></td>
	</tr>
</table>

<?php } ?>