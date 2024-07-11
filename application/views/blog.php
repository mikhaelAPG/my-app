<html>
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<h1>Artikel Terbaru</h1>
	<?php foreach($blogs as $key=>$blog):?>
	<div class="blog">
		<h2><?php echo $blog['title'];?></h2>
		<?php echo $blog['content'];
		endforeach;
	?>	
</body>
</html>