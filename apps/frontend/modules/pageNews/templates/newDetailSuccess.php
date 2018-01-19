<?php slot('title') ?>
<?php echo sprintf('%s', htmlentities($article['title'])) ?>
<?php end_slot() ?>

<header><h1><?php echo htmlentities($article['title']) ?></h1>
</header>

<div class="container posts-archives">
    <div class="row">
        <div class="col-sm-8">
            <article id="post-211"
                     class="post-211 post type-post status-publish format-gallery hentry category-kids category-toys tag-spring post_format-post-format-gallery">
                <h2 class="entry-title"><?php echo $article['header'] ?></h2>

                <div class="entry-meta">
                    <span class="date"><i class="fa fa-calendar"></i><time datetime="2018-01-13T17:08:58+00:00">
                            <?php echo VtHelper::getDateNew($article['created_at']) ?>
                        </time></span>

                    <div class="fb-like" data-href="<?php echo sfConfig::get('app_site_host') . url_for1('@news_detail?slug=' . $article['slug']) ?>" data-layout="button_count" data-action="like" data-size="small" data-show-faces="false" data-share="true"></div>


                </div>

                <div class="entry-content">
                    <div>
                        <?php echo $article['body'] ?>
                    </div>
                </div>
                <div class="entry-content">
                    <div class="fb-comments"
                         data-href="<?php echo 'http://nehobcity.xyz' . url_for1('@news_detail?slug=' . $article['slug']) ?>"
                         data-colorscheme="light"
                         data-numposts="5" data-width="500"></div>
                </div>

            </article>
        </div>

        <?php include_component('pageNews', 'catNewNav', array('type' => 3)) ?>
    </div>
</div>