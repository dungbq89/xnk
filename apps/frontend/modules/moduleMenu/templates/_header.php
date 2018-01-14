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
                    <a title="Home" href="/">Trang chủ</a>
                </li>
                <li id="menu-item-314"
                    class="menu-item menu-item-type-post_type menu-item-object-page menu-item-home current-menu-item page_item page-item-9 current_page_item menu-item-314">
                    <a title="Home" href="<?php echo url_for1('@category_new?slug=tu-hoc') ?>">Tự học</a>
                </li>
                <li id="menu-item-314"
                    class="menu-item menu-item-type-post_type menu-item-object-page menu-item-home current-menu-item page_item page-item-9 current_page_item menu-item-314">
                    <a title="Home" href="<?php echo url_for1('@videopage') ?>">Videos</a>
                </li>
                <li id="menu-item-314"
                    class="menu-item menu-item-type-post_type menu-item-object-page menu-item-home current-menu-item page_item page-item-9 current_page_item menu-item-314">
                    <a title="Home" href="<?php echo url_for1('@category_new?slug=ky-nang') ?>">Kỹ năng</a>
                </li>
                <li id="menu-item-314"
                    class="menu-item menu-item-type-post_type menu-item-object-page menu-item-home current-menu-item page_item page-item-9 current_page_item menu-item-314">
                    <a title="Home" href="<?php echo url_for1('@listDocument') ?>">Kho tài liệu</a>
                </li>
            </ul>
        </div>
    </div>
</div>