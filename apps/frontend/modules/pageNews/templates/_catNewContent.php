<?php
/**
 * Created by PhpStorm.
 * User: conghuyvn8x
 * Date: 1/13/2018
 * Time: 9:50 PM
 */
$n = count($listArticle);
?>

<div class="col-sm-8">

    <div class="block-line">
        <?php if ($n > 0) {
            for ($i = 0; $i < ($n > 3 ? 3 : $n); $i++) {
                $new = $listArticle[$i];
                $path = '/uploads/' . sfConfig::get('app_article_images') . $new->image_path;
                ?>
                <div>
                    <div class="item blog-item">
                        <article class="post">
                            <h2 class="entry-title"><a
                                    href="<?php echo url_for1('@news_detail?slug=' . $new->slug) ?>"
                                    rel="bookmark"><?php echo htmlspecialchars($new->title) ?></a></h2>

                            <div class="entry-meta">
                            <span class="date"><i class="fa fa-calendar"></i><time datetime="2018-01-11T01:29:26+00:00">
                                    March 14, 2014
                                </time></span><br/>
                                <span class="author"><i class="fa fa-user"></i>By Hleb Poltanovich</span><br/>
                            <span class="comments"><i class="fa fa-comment"></i><a href="#comments"> 1
                                    Comment</a></span><span class="entry-categories"><i class="fa fa-tag"></i>Posted in <a
                                        href="http://www.coffeecreamthemes.com/themes/magicreche/wordpress/category/activities/"
                                        rel="category tag">Activities</a></span><span class="entry-tags"><i
                                        class="fa fa-tags"></i>Tags: <a
                                        href="http://www.coffeecreamthemes.com/themes/magicreche/wordpress/tag/summer/"
                                        rel="tag">summer</a></span></div>
                            <div class="post-thumb">
                                <a
                                    href="<?php echo url_for1('@news_detail?slug=' . $new->slug) ?>" rel="bookmark">
                                    <img width="750" height="422"
                                         src="<?php echo VtHelper::getThumbUrl($path, 370, 200, 'image_370_200') ?>"
                                         class="attachment-blog size-blog wp-post-image" alt=""/>
                                </a>
                            </div>
                            <!--                            <div class="entry-content">-->
                            <!--                                <div>-->
                            <!--                                    <p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac-->
                            <!--                                        turpis-->
                            <!--                                        egestas. Mauris pretium neque imperdiet semper pellentesque. Proin bibendum,-->
                            <!--                                        quam-->
                            <!--                                        vel egestas ullamcorper, sapien orci eleifend nisl, placerat tincidunt quam nibh-->
                            <!--                                        ut-->
                            <!--                                        purus. Integer quam purus, scelerisque vitae aliquam sed, tincidunt eget libero.-->
                            <!--                                        Morbi nunc enim, rhoncus ut rutrum vitae, dapibus at eros.</p></div>-->
                            <!--                                <div class="post-more"><a-->
                            <!--                                        href="<?php //echo url_for1('@news_detail?slug=' . $new->slug) ?>"-->
                            <!--                                        class="btn btn-primary">Read more</a></div>-->
                            <!--                            </div>-->
                        </article>
                    </div>
                </div>
                <?php
            }
        } ?>
    </div>

    <?php
    if ($n > 3) {
        for ($i = 3; $i < $n; $i++) {
            $new = $listArticle[$i];
            $path = '/uploads/' . sfConfig::get('app_article_images') . $new->image_path;
            ?>
            <article class="posts-archives-item" id="post-<?php echo $new->id ?>"
                     class="post-<?php echo $new->id ?> post type-post status-publish format-image has-post-thumbnail hentry category-activities tag-summer post_format-post-format-image">
<!--                <h2 class="entry-title"><a-->
<!--                        href="--><?php //echo url_for1('@news_detail?slug=' . $new->slug) ?><!--" rel="bookmark">-->
<!--                        --><?php //echo htmlspecialchars($new->title) ?>
<!--                    </a></h2>-->


                <div class="<?php echo ($i % 2 == 0) ? 'post-content-item-right' : 'post-content-item-left' ?>">
                    <div class="post-thumb">
                        <a
                            href="<?php echo url_for1('@news_detail?slug=' . $new->slug) ?>" rel="bookmark">
                            <img
                                src="<?php echo VtHelper::getThumbUrl($path, 370, 200, 'image_370_200') ?>"
                                class="attachment-blog size-blog wp-post-image" alt=""/></a>
                    </div>
                    <div class="entry-content">
                        <div class="entry-content-p">
                            <p> <?php echo htmlspecialchars($new->header) ?> </p>
                        </div>

                        <div class="excerpt-content">
                            <article>
                                <p>This is what an ordinary post looks like, and you’re reading a custom excerpt right now. Have fun looking around the theme, and don’t forget to check it out on your phone!</p>

                                <div class="more-link-wrapper">
                                    <a class="more-link" href="<?php echo url_for1('@news_detail?slug=' . $new->slug) ?>">
                                        Read the post
                                        </a></div>
                            </article>
                        </div>

<!--                        <div class="post-more"><a-->
<!--                                href="--><?php //echo url_for1('@news_detail?slug=' . $new->slug) ?><!--"-->
<!--                                class="btn btn-primary">Read more</a></div>-->
                    </div>
                    <div class="clearfix"></div>
                </div>
                <div class="entry-meta">
                    <span class="date"><i class="fa fa-calendar"></i><time datetime="2018-01-13T04:13:03+00:00">March
                            14, 2014
                        </time></span>
                    <span class="author"><i class="fa fa-user"></i>By Hleb Poltanovich</span>
                    <span class="comments"><i class="fa fa-comment"></i><a href="#comments"> 1 Comment</a></span><span
                        class="entry-categories"><i class="fa fa-tag"></i>Posted in <a
                            href="http://www.coffeecreamthemes.com/themes/magicreche/wordpress/category/activities/"
                            rel="category tag">Activities</a></span><span class="entry-tags"><i class="fa fa-tags"></i>Tags: <a
                            href="http://www.coffeecreamthemes.com/themes/magicreche/wordpress/tag/summer/"
                            rel="tag">summer</a></span></div>

            </article>
            <?php
        }
    }
    ?>

    <div style="clear: both">

        <?php if ($pager && $pager->haveToPaginate()): ?>
            <div class="paging-bottom-style1">
                <ul class="pagination">
                    <?php if ($pager->getPage() >= 2): ?>
                        <li><a href="<?php echo url_for1('@category_new?slug=' . $cat->slug) ?>">
                                <i class="fa fa-angle-left"></i></a></li>
                    <?php endif; ?>
                    <?php foreach ($pager->getLinks() as $page): ?>
                        <li>
                            <a href="<?php echo url_for1('@category_new?slug=' . $cat->slug . '&page=' . $page) ?>"
                               class="<?php echo $page == $pager->getPage() ? 'active' : '' ?>">
                                <?php echo $page ?></a></li>
                    <?php endforeach; ?>
                    <?php if ($pager->getPage() < $pager->getLastPage()): ?>
                        <li>
                            <a href="<?php echo url_for1('@category_new?slug=' . $cat->slug . '&page=' . $pager->getLastPage()) ?>"><i
                                    class="fa fa-angle-right"></i></a></li>
                    <?php endif; ?>
                </ul>
            </div>
        <?php endif; ?>

    </div>
</div>
