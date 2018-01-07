<div class="main-contents">
    <h2 class="main-contents"><?php echo $title; ?></h2>
    
    <div>
        <div class="container-fluid">
            <div class="row">
                <div class="col-xs-2">
                </div>
                <div class="col-xs-8">
                    <?php foreach ($article as $articleItem): ?>
                        <section class="card">
                            <a href="<?php echo site_url('article/'.$articleItem['id']); ?>">
                                <img class="card-img" src="
                                <?php
                                    if (file_exists($articleItem['image'])) {
                                        echo $articleItem['image'];
                                    } else {
                                        echo "/assets/dist/image/noimage.gif";
                                    }
                                ?>
                                " alt="">
                                <div class="card-content">
                                    <h1 class="card-title"><?php echo $articleItem['title']; ?></h1>
                                    <div class="card-text">
                                        <?php echo $articleItem['time'];?>
                                    </div>
                                </div>
                            </a>
                        </section>
                    <?php endforeach; ?>
                </div>
                <div class="col-xs-2">
                </div>
            </div>
        </div>
    </div>
</div>
