<?php slot('title') ?>
<?php echo sprintf('%s', 'We can do it, You can do it better') ?>
<?php end_slot() ?>

<?php
$listStudent = $pager->getResults();
$n = count($listStudent);
?>
<div class="container posts-archives">
    <div class="row">
        <!--        <div class="col-sm-8">-->
        <section id="latest-posts" class="post-18 page type-page status-publish hentry">
            <div class="container">
                <?php
                if ($n > 0) {
                    $dem = 1;
                    foreach ($listStudent as $doc) {
                        $path = ($doc->getImage() != '') ? '/uploads/' . sfConfig::get('app_article_images') . $doc->getImage() : sfConfig::get('app_image_default', 'http://nehobcity.com/images/default.jpg');
                        $pathDoc =  url_for2('detailStudent', array('id'=>$doc['id']));
                        if ($dem % 3 == 1) echo '<div class="block-line">';
                        ?>
                        <div>
                            <div class="item blog-item">
                                <article class="post">

                                    <div class="post-thumb">
                                        <div class="post-thumb-img">
                                            <a href="<?php echo $pathDoc ?>">
                                                <img width="750" height="422"
                                                     src="<?php echo VtHelper::getThumbUrl($path, 321, 184, 'video_default'); ?>"
                                                     class="attachment-blog size-blog wp-post-image post-thumb-image"
                                                     alt=""/>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="entry-content">
                                        <div class="entry-content-p" style="padding-top: 10px !important;">
                                            <p style="color: #e75d5d; font-size: 16px; font-weight: bold;"><a href="<?php echo $pathDoc; ?>"><?php echo htmlspecialchars($doc->name) ?></a></p>
                                        </div>

                                        <div class="excerpt-content">
                                            <article>
                                                <p>
                                                    <?php echo $doc->description ?>
                                                </p>

                                            </article>
                                        </div>
                                    </div>
                                </article>
                            </div>
                        </div>
                        <?php
                        if ($dem % 3 == 0) echo '</div>';
                        if ($n <= 3 && $dem == $n) echo '</div>';
                        $dem++;
                    }
                }
                ?>
                <?php
                if ($pager->getLastPage() > 1) {
                    ?>
                    <div style="clear: both">

                        <?php if ($pager && $pager->haveToPaginate()): ?>
                            <div class="paging-bottom-style1">
                                <ul class="pagination">
                                    <?php if ($pager->getPage() >= 2): ?>
                                        <li><a href="<?php echo url_for1('@listStudent') ?>">
                                                <i class="fa fa-angle-left"></i></a></li>
                                    <?php endif; ?>
                                    <?php foreach ($pager->getLinks() as $page): ?>
                                        <li>
                                            <a href="<?php echo url_for1('@listStudent?page=' . $page) ?>"
                                               class="<?php echo $page == $pager->getPage() ? 'active' : '' ?>">
                                                <?php echo $page ?></a></li>
                                    <?php endforeach; ?>
                                    <?php if ($pager->getPage() < $pager->getLastPage()): ?>
                                        <li>
                                            <a href="<?php echo url_for1('@listStudent?page=' . $pager->getLastPage()) ?>"><i
                                                    class="fa fa-angle-right"></i></a></li>
                                    <?php endif; ?>
                                </ul>
                            </div>
                        <?php endif; ?>

                    </div>
                <?php } ?>
            </div>
        </section>
    </div>
</div>
