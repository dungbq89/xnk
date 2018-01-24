<?php
/**
 * Created by PhpStorm.
 * User: conghuyvn8x
 * Date: 1/13/2018
 * Time: 9:50 PM
 */
if (!empty($adVertises)) {
    echo '<div class="row banner-item">';
    foreach ($adVertises as $adv) {
        $path = '/uploads/' . sfConfig::get('app_advertise_images') . $adv['file_path'];
        ?>
        <div class="item">
            <a href="<?php echo $adv['link'] ?>" data-img="<?php echo $path ?>">
                <img
                    src="<?php echo VtHelper::getThumbUrl($path, 321, 184, 'image_default'); ?>">
            </a>
        </div>
        <?php
    }
    echo '</div>';
}
?>
