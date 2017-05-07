<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=big5">
<title>Upload a file</title>
</head>
<body><h3>上傳結果<hr></h3>

<?php
	sizemb=round($size/1024000,2);
	echo "<BLOCKQUOTE>";
	echo "檔案類型：".$type."<br>";
	echo "檔案大小：".$sizemb."MB<br>";
	echo "檔案名稱：".$nameEcho."<br>";
	echo "暫存名稱：".$tmp_name."<br>";
	if($_FILES["upfile"]["size"]>0 && $_FILES["upfile"]["size"]<1024000){
  		move_uploaded_file($_FILES["upfile"]["tmp_name"],"file\\".$_FILES["upfile"]["name"]);
  		echo "上傳成功";
 	}
	else
	{
  		echo "檔案為空檔案或太大，上傳失敗";
 	}
	echo "</BLOCKQUOTE>";
?>
<hr>
</body>
</html>