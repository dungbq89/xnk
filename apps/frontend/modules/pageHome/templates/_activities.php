<section id="gallery" class="post-14 page type-page status-publish hentry">
    <div class="container">
        <hgroup class="page-title">
            <h2 style="text-transform: uppercase;">Hoạt động</h2>
        <ul id="gallery-1" class="gallery gallery-columns-4 gallery-size-gallery">
            <?php if(isset($values) && count($values)){
                foreach ($values as $value){
                    $path = '/uploads/' . sfConfig::get('app_article_images') . $value['image'];
                    ?>
                    <li class="gallery-item col-sm-3"><a
                                href="<?php echo VtHelper::getPathImage($value['image'], sfConfig::get('app_article_images', 'category_images')) ?>"
                                title="<?php echo $value['name'] ?>" class="fancybox" data-fancybox-group="gallery-1" rel="gallery"><img
                                    src="<?php echo VtHelper::getThumbUrl($path, 380, 240, 'default') ?>"><span><i
                                        class="fa fa-search fa-3x"></i></span></a></li>
                    <?php
                }
            } ?>
        </ul>
    </div>
</section>