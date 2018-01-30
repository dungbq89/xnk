<link rel='stylesheet' href='/css/bootstrap.min.3.3.4.css' type='text/css' media='all'/>
<style>
    .navbar-default .navbar-nav>li>a{
        color: #333;
        font-weight: 400;
        text-transform: none;
        padding: 0px 3px;
    }
    .navbar-default .navbar-nav>li>a:hover{
        color: #337ab7;
    }

    .menu-header-1{
        padding: 30px 10px;
    }
    .menu-item{
        padding: 0px 10px;
    }
    #menu-main-menu a.menu-header-1{
        padding: 30px 10px;
    }
    #menu-main-menu p.menu-header-2{
        color: #999;
        font-size: 11px;
        font-style: italic;
        font-weight: 400;
        text-transform: none;
    }
    p.menu-header-2:hover{
        color: #337ab7;
    }
</style>
<div class="navbar navbar-default navbar-fixed-top">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse"><span
                    class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button>
            <a class="navbar-brand" href="<?php echo url_for('@homepage') ?>"><img height="90px"
                                                                                   src="/images/xnk.png"
                                                                                   alt="Lớp học gia sư XNK"></a>
        </div>
        <div class="navbar-collapse collapse">
            <ul id="menu-main-menu" class="nav navbar-nav navbar-right">
                <li id="menu-item-314"
                    class="menu-item menu-item-type-post_type menu-item-object-page menu-item-home current-menu-item page_item page-item-9 current_page_item menu-item-314 active">
                    <a  class="menu-header-1"
                        title="Home" href="<?php echo url_for('@homepage') ?>">
                        <span class="glyphicon glyphicon-home" role="navigation" itemscope></span>
                        Trang chủ
                        <p class="menu-item-description menu-header-2">
                            Tôi nên biết</p>
                    </a>
                </li>


                <li id="menu-item-260"
                    class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-260 dropdown">
                    <a title="About" href="javascript:void(0)"
                       data-toggle="dropdown" class="dropdown-toggle menu-header-1" aria-haspopup="true">
                        <span class="glyphicon glyphicon-file" role="navigation" itemscope itemtype="http://schema.org/SiteNavigationElement"></span>
                        Tự học<span class="fa fa-caret-down"></span>

                        <p class="menu-item-description menu-header-2"> Tôi cần đọc</p>
                    </a>

                    <ul role="menu" class=" dropdown-menu">
                        <?php
                        if(isset($listChild) && count($listChild)){
                            foreach ($listChild as $child){
                                ?>
                                <li id="menu-item-267"
                                    class="menu-item menu-item-type-post_type menu-item-object-page menu-item-267"><a
                                            title="Stuff"
                                            href="<?php echo url_for('category_new',array('slug'=>$child['slug'])); ?>"><?php echo $child['name']; ?></a>
                                </li>
                                <?php
                            }
                        }

                        ?>

                    </ul>
                </li>

                <li id="menu-item-141" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-141">
                    <a class="menu-header-1"
                        title="Shortcodes"
                        href="<?php echo url_for1('@introduction') ?>">
                        <span class="glyphicon glyphicon-bullhorn" role="navigation" itemscope ></span>
                        Khóa huấn luyện
                        <p class="menu-item-description menu-header-2">Tôi được huấn luyện</p>
                    </a>
                </li>
                <li id="menu-item-141" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-141">
                    <a class="menu-header-1"
                        title="Shortcodes"
                        href="<?php echo url_for1('@listDocument') ?>">
                        <span class="glyphicon glyphicon-heart" role="navigation" itemscope ></span>
                        Cảm nhận học viên
                        <p class="menu-item-description menu-header-2">Cảm nhận của tôi</p>
                    </a>
                </li>
                <li id="menu-item-141" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-141">
                    <a class="menu-header-1"
                        title="Shortcodes"
                        href="<?php echo url_for1('@videopage') ?>">
                        <span class="glyphicon glyphicon-facetime-video" role="navigation" itemscope ></span>
                        Videos
                        <p class="menu-item-description menu-header-2">Tôi cần xem</p>
                    </a>
                </li>
                <li id="menu-item-141" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-141">
                    <a class="menu-header-1"
                        title="Shortcodes"
                        href="<?php echo url_for1('@category_new?slug=ky-nang') ?>">
                        <span class="glyphicon glyphicon-user" role="navigation" itemscope ></span>
                        Kỹ năng
                        <p class="menu-item-description menu-header-2">Tôi cần luyện tập</p>
                    </a>
                </li>
                <li id="menu-item-141" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-141">
                    <a class="menu-header-1"
                        title="Shortcodes"
                        href="<?php echo url_for1('@listDocument') ?>">
                        <span class="glyphicon glyphicon-th" role="navigation" itemscope ></span>
                        Kho tài liệu
                        <p class="menu-item-description menu-header-2">Tôi cần lưu trữ</p>
                    </a>
                </li>

<!---->
<!---->
<!---->
<!--                <li id="menu-item-2478"-->
<!--                    class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-2478 dropdown">-->
<!--                    <a title="Schedule" href="#" data-toggle="dropdown" class="dropdown-toggle" aria-haspopup="true">Schedule-->
<!--                        <span class="caret"></span></a>-->
<!--                    <ul role="menu" class=" dropdown-menu">-->
<!--                        <li id="menu-item-2479"-->
<!--                            class="menu-item menu-item-type-post_type menu-item-object-page menu-item-2479"><a-->
<!--                                title="Schedule Section"-->
<!--                                href="http://www.coffeecreamthemes.com/themes/magicreche/wordpress/#schedule">Schedule-->
<!--                                Section</a></li>-->
<!--                        <li id="menu-item-2480"-->
<!--                            class="menu-item menu-item-type-post_type menu-item-object-page menu-item-2480"><a-->
<!--                                title="Timetable for WordPress"-->
<!--                                href="http://www.coffeecreamthemes.com/themes/magicreche/wordpress/timetable-for-wordpress/">Timetable-->
<!--                                for WordPress</a></li>-->
<!--                        <li id="menu-item-2481"-->
<!--                            class="menu-item menu-item-type-post_type menu-item-object-page menu-item-2481"><a-->
<!--                                title="Timetable for WordPress sample 2"-->
<!--                                href="http://www.coffeecreamthemes.com/themes/magicreche/wordpress/timetable-for-wordpress-sample-2/">Timetable-->
<!--                                for WordPress sample 2</a></li>-->
<!--                        <li id="menu-item-2482"-->
<!--                            class="menu-item menu-item-type-post_type menu-item-object-page menu-item-2482"><a-->
<!--                                title="Timetable for WordPress sample 3"-->
<!--                                href="http://www.coffeecreamthemes.com/themes/magicreche/wordpress/timetable-for-wordpress-sample-3/">Timetable-->
<!--                                for WordPress sample 3</a></li>-->
<!--                        <li id="menu-item-2483"-->
<!--                            class="menu-item menu-item-type-post_type menu-item-object-page menu-item-2483"><a-->
<!--                                title="Timetable for WordPress sample 4"-->
<!--                                href="http://www.coffeecreamthemes.com/themes/magicreche/wordpress/timetable-for-wordpress-sample-4/">Timetable-->
<!--                                for WordPress sample 4</a></li>-->
<!--                        <li id="menu-item-2484"-->
<!--                            class="menu-item menu-item-type-post_type menu-item-object-page menu-item-2484"><a-->
<!--                                title="Timetable for WordPress sample 5"-->
<!--                                href="http://www.coffeecreamthemes.com/themes/magicreche/wordpress/timetable-for-wordpress-sample-5/">Timetable-->
<!--                                for WordPress sample 5</a></li>-->
<!--                    </ul>-->
<!--                </li>-->
<!---->
<!--                <li id="menu-item-141" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-141"><a-->
<!--                        title="Shortcodes"-->
<!--                        href="http://www.coffeecreamthemes.com/themes/magicreche/wordpress/shortcodes/">Shortcodes</a>-->
<!--                </li>-->
<!---->
<!--                <li id="menu-item-139" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-139"><a-->
<!--                        title="Blog" href="http://www.coffeecreamthemes.com/themes/magicreche/wordpress/blog/">Blog</a>-->
<!--                </li>-->
<!---->
<!--                <li id="menu-item-292" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-292"><a-->
<!--                        title="Contact" href="http://www.coffeecreamthemes.com/themes/magicreche/wordpress/#contact-us">Contact</a>-->
<!--                </li>-->
            </ul>
        </div>

    </div>
</div>