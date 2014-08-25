<?php
	if(isset($_POST['submit']))
	{
		$txtname = $_POST['editor1'];
		if (empty($txtname))
		{
			$txtname = " ";
		}
		
		include('lib/dompdf/dompdf_config.inc.php');
		
		$dompdf = new DOMPDF();
		$htmldoc = $txtname;
		
		
		$dompdf->load_html($htmldoc);
		$dompdf->set_paper('A4');
		$dompdf->render();
		$dompdf->stream('online document editor.pdf');
		
		
	}

?>
<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
	<title>Online Document Editor</title>
	<link rel="icon" type="image/ico" href="images/logo.png"/>
	<script src="lib/ckeditor/ckeditor.js"></script>
	<link rel="stylesheet" type="text/css" href="css/style.css" />	
</head>
<body >	
	<div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
		<div class="container-fluid">
			<div class="navbar-header">
			  <a class="navbar-brand" href="/">
				<b><span class="glyphicon glyphicon-fire"></span> Online Document Editor </b>
			  </a>
			</div>
		</div>		
	</div> 


	<div class="Editor">
		<form action="" method="post">
		
			<textarea   class="ckeditor" name="editor1">
				
			</textarea>
			<input type="submit" name="submit" hidden="true"/>
		</form>
	</div>

</body>
</html>
