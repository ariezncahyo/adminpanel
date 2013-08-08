<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<script src="ckeditor/ckeditor.js"></script>
<script>

			// Replace the <textarea id="editor"> with an CKEditor
			// instance, using default configurations.
			CKEDITOR.replace( 'editor', {
				uiColor: '#fff',
				toolbar: [
					[ 'Bold', 'Italic', '-', 'NumberedList', 'BulletedList', '-', 'Link', 'Unlink' ],
					[ 'FontSize', 'TextColor', 'BGColor' ]
				]
			});

		</script>


</head>

<body>
<?php 
	$value = $_POST['editor1'];
	print($value);

?>
<form action="" method="post">
<textarea class="ckeditor" id="editor" name="editor1"></textarea>
<script>

			// Replace the <textarea id="editor"> with an CKEditor
			// instance, using default configurations.
			CKEDITOR.replace( 'editor1', {
				uiColor: '',
			});

		</script>
<input type="submit" value="submit" />
</form>
</body>
</html>