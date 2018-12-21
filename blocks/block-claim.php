<section class="claim">

  <div class="grid-columns">

    <div>

      <h1><?php block_field( 'title' ) ?></h1>

      <p><?php block_field( 'subtitle' ) ?></p>

    </div>

  </div>

  <div class="grid-columns get-started">

    <div class="paper-plane big-left"></div>
    <div class="paper-plane small-left"></div>
    <div class="paper-plane big-right"></div>
    <div class="paper-plane small-right-top"></div>
    <div class="paper-plane small-bottom"></div>

    <div class="grid-columns">

      <div class="price">
        <div class="price-detail">
          <sup>$</sup>
          <span><?php echo provider('homepage')->starter->plans->monthly->price->amount ?></span>
          <span>/mo</span>
        </div>
        <p>Renews for $<?php echo provider('homepage')->starter->plans->monthly->renewalPrice->amount ?>/mo</p>
        <a href="<?php echo provider('homepage')->startedUrl ?>"
           id="e2e_button_get_started"
           class="cds-button cds-size-huge cds-button-primary">
          Get Started
        </a>
        <div class="cds-mt-16">
          <a id="e2e_link_view_all_plans"
             href="#no-excuse">View all plans</a>
        </div>
      </div>

      <div class="list-of-features">
        <ul>
          <?php block_field( 'features' ) ?>
        </ul>
      </div>

    </div>

  </div>

</section>