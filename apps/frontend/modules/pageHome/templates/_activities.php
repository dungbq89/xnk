<section id="meet-our-stuff" class="post-11 page type-page status-publish hentry">
    <div class="container">
        <hgroup class="page-title">
            <h2 style="text-transform: uppercase;">Hoạt động</h2>
        </hgroup>

        <div class="col-sm-4">
            <div class="teaser icon-box" style="color:#fff">
                <div class="icon img-circle" style="background-color:#fff;"><img alt=""
                                                                                 src="/tvdt/themes/magicreche/wordpress/wp-content/uploads/2014/03/icon-horse.png">
                </div>
                <div class="box" style="background-color:#F1A733">
                    <h3>Wobblers</h3>

                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris suscipit, ante ut
                        consequat tempor, sapien urna adipiscing leo, vitae lacinia ante nibh.</p>

                    <div class="arrow" style="background-color:#F1A733"></div>
                </div>
            </div>
        </div>

<!--            <div class="owl-carousel staff-carousel" data-visible="4">-->
                <?php
                if(isset($values) && count($values)){
                foreach ($values as $value){
                $path = '/uploads/' . sfConfig::get('app_article_images') . $value['image'];
                ?>
                <div class="col-sm-4">
                    <div class="item staff-item">
                        <img width="150" height="150" style=""
                             src="<?php echo VtHelper::getThumbUrl($path, 70, 250, 'default') ?>"
                             class="attachment-staff size-staff wp-post-image" alt=""
                             sizes="(max-width: 150px) 100vw, 150px">

        <p style="padding: 0px 5px;"><?php echo $value['description']; ?></p>
<!--    </div>-->
    </div>
    <?php
    }
    }
    ?>


    </div>
    </div>
</section>