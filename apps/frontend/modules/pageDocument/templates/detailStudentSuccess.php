<?php slot('title') ?>
<?php echo sprintf('%s', htmlentities($student['name'])) ?>
<?php end_slot() ?>

<!--<header><h1>--><?php //echo htmlentities($student['title']) ?><!--</h1>-->
<!--</header>-->

<div class="container posts-archives">

    <?php include_component('pageNews', 'bannerItem') ?>

    <div class="row">
        <div class="col-sm-8">
            <article id="post-211"
                     class="post-211 post type-post status-publish format-gallery hentry category-kids category-toys tag-spring post_format-post-format-gallery">
                <h2 class="entry-title" style="font-weight: bold; font-size: 18px;"><?php echo $student['name'] ?></h2>

                <div class="entry-content" style="overflow: hidden;">
                    <div style="">
                        <?php echo $student['body'] ?>
                    </div>
                </div>

                <div class="entry-content">
                    <div class="fb-comments"
                         data-href="<?php echo sfConfig::get('app_seo_url') . url_for2('detailStudent', array('id'=>$student['id'])) ?>"
                         data-colorscheme="light"
                         data-numposts="5" data-width="500"></div>
                </div>

            </article>
        </div>

        <?php include_component('pageNews', 'catNewNav', array('type' => 3)) ?>
    </div>
</div>