<header><h1><?php echo (isset($catName) && $catName != '') ? $catName : 'We can do it, You can do it better' ?></h1>
</header>

<div class="container posts-archives">
    <div class="row">
        <?php include_partial('pageNews/catNewContent', array(
            'listArticle' => $listArticle,
            'pager' => $pager,
            'cat' => $category,
        )) ?>

        <?php include_component('pageNews', 'catNewNav') ?>
    </div>
</div>