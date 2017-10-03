<h2><?php echo $title; ?></h2>

<?php foreach ($article as $articleItem): ?>

    <h3><?php echo $articleItem['title']; ?></h3>
    <div class="main">
        <?php echo $articleItem['contents'];?>
        <?php echo $articleItem['time'];?>
    </div>
    <p><a href="<?php echo site_url('article/'.$articleItem['id']); ?>">View article</a></p>

<?php endforeach; ?>
