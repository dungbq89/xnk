<?php

?>
<header><h1><?php echo htmlentities($article['title']) ?></h1>
</header>

<div class="container posts-archives">
    <div class="row">
        <div class="col-sm-8">
            <article id="post-211"
                     class="post-211 post type-post status-publish format-gallery hentry category-kids category-toys tag-spring post_format-post-format-gallery">
                <h2 class="entry-title"><?php echo $article['header'] ?></h2>

                <div class="entry-meta">
                    <span class="date"><i class="fa fa-calendar"></i><time datetime="2018-01-13T17:08:58+00:00">March
                            13, 2014
                        </time></span>
<!--                    <span class="author"><i class="fa fa-user"></i>By Hleb Poltanovich</span>-->
<!--                    <span class="comments"><i class="fa fa-comment"></i><a href="#comments"> No Comments</a></span>-->
<!--                    <span-->
<!--                        class="entry-categories"><i class="fa fa-tag"></i>Posted in <a-->
<!--                            href="http://www.coffeecreamthemes.com/themes/magicreche/wordpress/category/kids/"-->
<!--                            rel="category tag">Kids</a>, <a-->
<!--                            href="http://www.coffeecreamthemes.com/themes/magicreche/wordpress/category/toys/"-->
<!--                            rel="category tag">Toys</a></span>-->
<!--                    <span class="entry-tags"><i-->
<!--                            class="fa fa-tags"></i>Tags: <a-->
<!--                            href="http://www.coffeecreamthemes.com/themes/magicreche/wordpress/tag/spring/" rel="tag">spring</a></span>-->
                </div>

                <div class="entry-content">
                    <div>
                        <?php echo $article['body'] ?>
                    </div>
                </div>
            </article>
        </div>

        <?php include_component('pageNews', 'catNewNav') ?>
    </div>
</div>