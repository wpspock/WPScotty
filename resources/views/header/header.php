<?php
/**
 * Default header content.
 */
?>
<header id="spock-header" class="<?php spock()->header()->class() ?>">

  <div class="site-branding-container">

      <?php
      // You may also use the compact version:
      //
      // spock()->header()
      //     ->logo()
      //     ->title()
      //     ->description()
      //     ->menu();
      ?>

      <?php spock()->header()->logo() ?>

      <?php spock()->header()->title() ?>

      <?php spock()->header()->description() ?>

      <?php spock()->header()->menu() ?>

  </div>

    <?php //spock()->header()->featureImage() ?>

</header>