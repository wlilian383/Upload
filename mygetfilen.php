<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=big5">
<title>Upload a file</title>
</head>
<body><h3>�W�ǵ��G<hr></h3>

<?php
	sizemb=round($size/1024000,2);
	echo "<BLOCKQUOTE>";
	echo "�ɮ������G".$type."<br>";
	echo "�ɮפj�p�G".$sizemb."MB<br>";
	echo "�ɮצW�١G".$nameEcho."<br>";
	echo "�Ȧs�W�١G".$tmp_name."<br>";
	if($_FILES["upfile"]["size"]>0 && $_FILES["upfile"]["size"]<1024000){
  		move_uploaded_file($_FILES["upfile"]["tmp_name"],"file\\".$_FILES["upfile"]["name"]);
  		echo "�W�Ǧ��\";
 	}
	else
	{
  		echo "�ɮ׬����ɮשΤӤj�A�W�ǥ���";
 	}
	echo "</BLOCKQUOTE>";
?>
<hr>
</body>
</html>