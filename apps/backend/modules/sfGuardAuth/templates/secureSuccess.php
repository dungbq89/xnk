<?php use_helper('I18N') ?>

<?php include_partial('tmcTwitterBootstrap/assets') ?>
<?php include_component('tmcTwitterBootstrap', 'header') ?>

<div id="login" class="container">
  <div class="hero-unit">
    <div class="pull-left login-left">
      <?php include_partial('logo') ?>
    </div>
    <div class="pull-left login-right">
      <h2><?php echo __('Quản Trị Nội dung', null, 'tmcTwitterBootstrapPlugin') ?></span></h2>

      <p class="error_list"><?php echo __('Bạn không có quyền truy cập chức năng này!', null, 'tmcTwitterBootstrapPlugin') ?></p>

      <?php if (sfConfig::get('app_sfGuardPlugin_secure_links', true)): ?>
        <div id="links">
          <?php if (!include_slot('secure_links')): ?>
            <ul>
              <li><?php echo link_to(__('Trang Quản Trị', null, 'sfGuardPlugin'), '@homepage') ?></li>                      
    <!--                            <li><?php // echo link_to(__('Trang trước', null, 'sfGuardPlugin'), 'history.go(-1)')  ?></li>-->
              <li><?php echo link_to(__('Thoát', null, 'sfGuardPlugin'), '@sf_guard_signout') ?></li>
            </ul>
          <?php endif ?>
          <div class="clear"></div>
        </div>
      <?php endif ?>
    </div>
    <div class="clearfix"></div>
  </div>
</div>
