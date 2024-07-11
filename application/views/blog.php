<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title>Document</title>
</head>
<body>
  <h1>Artikel Terbaru</h1>
  <?php if (isset($blogs)): ?>
    <?php foreach($blogs as $key=>$blog):?>
      <div class="blog">
        <h2>
          <a href="<?php echo site_url('blog/detail/'.$blog['url']);?>">
            <?php echo $blog['title'];?>
          </a>
        </h2>
        <?php echo $blog['content'];?>
      </div>
    <?php endforeach; ?>
  <?php else: ?>
    <p>Belum ada artikel terbaru.</p>
  <?php endif; ?>
</body>
</html>