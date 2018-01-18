<?php
/**
 * Created by PhpStorm.
 * User: conghuyvn8x
 * Date: 1/13/2018
 * Time: 9:50 PM
 */
?>

<div class="col-sm-4 sidebar" id="pageNewNav">
    <aside id="search-3" class="widget widget_search">
        <div class="searchbox">
            <form role="search" method="get" id="searchform"
                  action="<?php echo url_for1('@article_search') ?>">
                <input type="text" placeholder="To search type and hit enter&hellip;" class="form-control" value=""
                       name="s">
                <input type="hidden" name="type" value="<?php echo $type ?>">

            </form>
        </div>
    </aside>
    <hr>
    <aside id="recent-posts-3" class="widget widget_recent_entries"><h5>Quảng cáo</h5>
        <ul>
            <li>
                <a href="http://www.coffeecreamthemes.com/themes/magicreche/wordpress/image-post/">
                    <img src="http://nehobcity.xyz/cache/uploads/article/8f/2e/e8/5a5b6d1b86256_321_184.jpg">
                </a>
            </li>
        </ul>
    </aside>
    <hr>
    <aside id="recent-posts-3" class="widget widget_recent_entries"><h5>CÁC BÀI VIẾT MỚI</h5>
        <ul>
            <?php if (!empty($listNews)) {
                foreach ($listNews as $new) {
                    ?>
                    <li>
                        <p class="post-title">
                            <a href="<?php echo url_for1('@news_detail?slug=' . $new['slug']) ?>">
                                <?php echo htmlentities($new['title']) ?>
                            </a>
                        </p>
                    </li>
                    <?php
                }
            } ?>
        </ul>
    </aside>
    <hr>
    <aside id="recent-posts-3" class="widget widget_recent_entries"><h5>NHIỀU LƯỢT XEM NHẤT</h5>
        <ul>
            <?php if (!empty($listViews)) {
                foreach ($listViews as $new) {
                    ?>
                    <li>
                        <p class="post-title">
                            <a href="<?php echo url_for1('@news_detail?slug=' . $new['slug']) ?>">
                                <?php echo htmlentities($new['title']) ?>
                            </a>
                        </p>
                    </li>
                    <?php
                }
            } ?>
        </ul>
    </aside>
    <hr>
    <aside id="recent-posts-3" class="widget widget_recent_entries"><h5>CÁC WEBSITE LIÊN KẾT</h5>
        <ul>
            <li>
                <a href="http://www.coffeecreamthemes.com/themes/magicreche/wordpress/image-post/">Image
                    Post</a>
            </li>
            <li>
                <a href="http://www.coffeecreamthemes.com/themes/magicreche/wordpress/gallery-post/">Gallery
                    Post</a>
            </li>
            <li>
                <a href="http://www.coffeecreamthemes.com/themes/magicreche/wordpress/audio-post/">Audio
                    Post</a>
            </li>
            <li>
                <a href="http://www.coffeecreamthemes.com/themes/magicreche/wordpress/video-post/">Video
                    Post</a>
            </li>
            <li>
                <a href="http://www.coffeecreamthemes.com/themes/magicreche/wordpress/video-post-2/">Video
                    Post</a>
            </li>
        </ul>
    </aside>
    <hr>

</div>
