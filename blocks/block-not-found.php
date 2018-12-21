<main id="<?php spock()->theSlug() ?>">

  <div class="octopus">
    <img src="<?php echo get_template_directory_uri() ?>/resources/assets/images/logo-easywp-octopus.svg"
         width="30"
         alt="EasyWP"/>
  </div>

  <section>

    <h3 class="cds-mb-8">
      <?php block_field('title') ?>
    </h3>

    <div class="cds-color-slate-blue cds-mb-48 description cds-align-center cds-max-width-480">
        <?php block_field('subtitle') ?>
    </div>

    <div class="links">

      <a class="cds-color-stack-grey"
         href="/">
        Home
      </a>

      <a class="cds-color-stack-grey ewp-need-help"
         href="#">Get Support
      </a>

      <a class="cds-color-stack-grey"
         target="_blank"
         href="//twitter.com/easywp">
        Follow us on Twitter
      </a>

    </div>

  </section>

</main>