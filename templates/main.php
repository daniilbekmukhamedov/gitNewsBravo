<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8" />
		<title><?=$title?></title>
		<link rel="stylesheet" href="styles/styles.css" />
		<?=out_admin("\t\t".'<link rel="stylesheet" href="styles/admin.css" />'."\n")?>
		<?=out_admin("\t\t".'<script src="https://cdn.tiny.cloud/1/k9nuudmlc5pz8gqer28fvmpn8ux8klgyqkumar9opigdbb8x/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>
		<script>
			tinymce.init({
			selector: "textarea",
			plugins: "a11ychecker advcode casechange export formatpainter linkchecker autolink lists checklist media mediaembed pageembed permanentpen powerpaste table advtable tinycomments tinymcespellchecker",
			toolbar: "a11ycheck addcomment showcomments casechange checklist code export formatpainter pageembed permanentpen table",
			toolbar_mode: "floating",
			tinycomments_mode: "embedded",
			tinycomments_author: "Author name",
			});
		</script>'."\n")?>
	</head>
	
	<body>
		<div id="header">
			<div id="headerWrap"><?=load_template('header.php')?>
				
				<div id="navigation"><?=load_template('navigation.php')?></div>
			</div>
		</div>
	
		<div id="wrapper">
			<div id="content-wrap">
				<div id="content"><?=$content?></div>
				<!-- <div id="sidebar"><?=load_template("sidebar.php")?></div> -->
			</div>
		</div>
	</body>
</html>