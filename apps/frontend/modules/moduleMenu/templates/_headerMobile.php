<header id="masthead" class="site-header navbar-large navbar navbar-fixed-top navbar-default" role="banner">
    <div class="container">
        <div class="branding navbar-header" itemscope itemtype="http://schema.org/WPHeader">
            <button class="navicon navbar-toggle" type="button" data-toggle="collapse"
                    data-target=".navbar-collapse">
                <span class="sr-only">Toggle Navigation</span><span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="<?php echo url_for('@homepage') ?>" rel="home">
                <img width="90" height="90" src="/images/xnk.png" class="site-logo"/> <span class="site-title-text"></span></a>
        </div>
        <nav id="site-navigation" class="menu-container navbar-collapse collapse" role="navigation" itemscope
             itemtype="http://schema.org/SiteNavigationElement"><h2 class="screen-reader-text sr-only"
                                                                    role="navigation" itemscope>
                Menu</h2>
            <ul id="menu-navigation" class="menu nav nav navbar-nav navbar-right" role="navigation" itemscope
                itemtype="">
                <li id="menu-item-1707"
                    class="menu-item menu-item-type-custom menu-item-object-custom current-menu-item current_page_item menu-item-home menu-item-1707 active menu-item-has-icon menu-item-has-description"
                    role="navigation" itemscope itemtype="" itemprop="name">
                    <a title target rel href="<?php echo url_for('@homepage') ?>" itemprop="url"><span
                                class="glyphicon glyphicon-home" role="navigation" itemscope></span>Trang chủ<br/><span
                                class="menu-item-description" role="navigation" itemscope
                                itemtype="http://schema.org/SiteNavigationElement">Tôi nên biết</span></a></li>

                <li id="menu-item-1706"
                    class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1715 menu-item-has-icon menu-item-has-description"
                    role="navigation" itemscope itemtype="" itemprop="name">
                    <a title target rel href="<?php echo url_for1('@category_new?slug=tu-hoc') ?>" itemprop="url"><span
                                class="glyphicon glyphicon-home" role="navigation" itemscope ></span>Tự học<br/><span
                                class="menu-item-description" role="navigation" itemscope
                                itemtype="http://schema.org/SiteNavigationElement">Tôi cần đọc</span></a>
                </li>

                <li id="menu-item-1606"
                    class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1715 menu-item-has-icon menu-item-has-description"
                    role="navigation" itemscope itemtype="" itemprop="name">
                    <a title target rel href="<?php echo url_for1('@introduction') ?>" itemprop="url"><span
                                class="glyphicon glyphicon-home" role="navigation" itemscope ></span>Khóa huấn luyện<br/><span
                                class="menu-item-description" role="navigation" itemscope
                                itemtype="http://schema.org/SiteNavigationElement">Tôi được huấn luyện</span></a>
                </li>

                <li id="menu-item-1708"
                    class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1715 menu-item-has-icon menu-item-has-description"
                    role="navigation" itemscope itemtype="" itemprop="name">
                    <a title target rel href="<?php echo url_for1('@videopage') ?>" itemprop="url"><span
                                class="glyphicon glyphicon-home" role="navigation" itemscope ></span>Videos<br/><span
                                class="menu-item-description" role="navigation" itemscope
                                itemtype="http://schema.org/SiteNavigationElement">Tôi cần xem</span></a>
                </li>

                <li id="menu-item-17069"
                    class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1715 menu-item-has-icon menu-item-has-description"
                    role="navigation" itemscope itemtype="" itemprop="name">
                    <a title target rel href="<?php echo url_for1('@category_new?slug=ky-nang') ?>" itemprop="url"><span
                                class="glyphicon glyphicon-home" role="navigation" itemscope ></span>Kỹ năng<br/><span
                                class="menu-item-description" role="navigation" itemscope
                                itemtype="http://schema.org/SiteNavigationElement">Tôi cần luyện tập</span></a>
                </li>

                <li id="menu-item-1700"
                    class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1715 menu-item-has-icon menu-item-has-description"
                    role="navigation" itemscope itemtype="" itemprop="name">
                    <a title target rel href="<?php echo url_for1('@listDocument') ?>" itemprop="url"><span
                                class="glyphicon glyphicon-home" role="navigation" itemscope ></span>Kho tài liệu<br/><span
                                class="menu-item-description" role="navigation" itemscope
                                itemtype="http://schema.org/SiteNavigationElement">Tôi cần lưu trữ</span></a>
                </li>

                <li id="menu-item-1701"
                    class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1715 menu-item-has-icon menu-item-has-description"
                    role="navigation" itemscope itemtype="" itemprop="name">
                    <a title target rel href="<?php echo url_for1('@listDocument') ?>" itemprop="url"><span
                                class="glyphicon glyphicon-home" role="navigation" itemscope ></span>Cảm nhận học viên<br/><span
                                class="menu-item-description" role="navigation" itemscope
                                itemtype="http://schema.org/SiteNavigationElement">Cảm nhận của tôi</span></a>
                </li>

            </ul>
        </nav>
    </div>
</header>