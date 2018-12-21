<a id="no-excuse"
   name="no-excuse"></a>
<section class="no-excuses">

  <div class="grid-columns">

    <h2>No Excuses</h2>

  </div>

  <div class="grid-columns">
    <p class="description">Start today with our flexible pricing.</p>
  </div>

  <div class="select-period">

    <div style="grid-template-columns: repeat(2, 1fr);"
         class="cds-selection-tabs">
      <div data-value="month"
           id="bill-monthly"
           class="cds-selection-tab-options">
        <div data-value="month">Bill monthly</div>
      </div>
      <div data-value="year"
           id="bill-yearly"
           class="cds-selection-tab-options selected">
        <div data-value="year">Bill yearly</div>
      </div>
    </div>
  </div>

  <div class="scrollable">

    <div class="grid-columns outset prices monthly">

        <?php foreach( provider('homepage')->products->each() as $product ) : ?>

            <?php $plan = $product->plans->monthly; ?>

        <div class="price-sheet">
          <div class="price-sheet-blue">

            <strong><?php echo  $product->name ?></strong>

            <div class="price-detail">
              <sup>$</sup>
              <span><?php echo $plan->renewalPrice->quotient ?></span>
              <sup>.<?php echo $plan->renewalPrice->remainder ?></sup>
            </div>

            <strong class="cds-color-green">First Month $<?php echo  $plan->price->amount ?></strong>

            <a class="cds-button cds-size-huge cds-button-primary"
               href="<?php echo provider('homepage')->dashboardPurchaseUrl ?>?pricing_plan=<?php echo $plan->slug ?>"
               id="e2e_button_get_started_montly">Get Started
            </a>

            <small>
              Renews every month. By clicking ”Get Started” you agree to our <a target="_blank"
                                                                                id="e2e_link_terms_monthly"
                                                                                href="https://www.namecheap.com/legal/apps/easywp-ghost-tos.aspx">Terms
                and Conditions</a>
            </small>

          </div>
          <ul>
            <li><?php echo $product->storage ?></li>
            <li><?php echo $product->visitors ?></li>
          </ul>
        </div>

      <?php endforeach; ?>

    </div>

    <div class="grid-columns outset prices yearly">

        <?php foreach( provider('homepage')->products->each() as $product ) : ?>

            <?php $plan = $product->plans->yearly; ?>

        <div class="price-sheet">
          <div class="price-sheet-blue">

            <strong><?php echo  $product->name ?></strong>

            <div class="price-detail">
              <sup>$</sup>
              <span><?php echo  $plan->price->quotient ?></span>
              <sup>.<?php echo  $plan->price->remainder ?></sup>
            </div>

            <?php
              $a = $plan->price->amount;
              $b = $plan->renewalPrice->amount;
              $r = $a/$b;
              $m = round($r,2);
              $p = round($m * 100);
              $result = round(100 - $p);
              // todo path
              $result = ($result == 49) ? 50 : $result;
              ?>

            <p class="first-year">$<?php echo  $plan->renewalPrice->amount ?></p>
            <strong class="cds-color-green">Save <?php echo $result ?>% on First Year</strong>

            <a class="cds-button cds-size-huge cds-button-primary"
               href="<?php echo provider('homepage')->dashboardPurchaseUrl ?>?pricing_plan=<?php echo $plan->slug ?>"
               id="e2e_button_get_started_montly">Get Started
            </a>

            <small>
              Renews for $<?php echo $plan->renewalPrice->amount?>/year. By clicking ”Get Started” you agree to our
              <a target="_blank"
                 id="e2e_link_terms_monthly"
                 href="https://www.namecheap.com/legal/apps/easywp-ghost-tos.aspx">Terms
                and
                Conditions</a>
            </small>

          </div>
          <ul>
            <li><?php echo $product->storage ?></li>
            <li><?php echo $product->visitors ?></li>
          </ul>
        </div>

      <?php endforeach; ?>

    </div>

  </div>

  <div class="all-plans-include">
    <p>All plans also include:</p>
    <div class="grid-columns features">
      <div class="list">
        <ul>
          <li>1x WordPress website installed and ready to go</li>
          <li>Powered by Namecheap Cloud</li>
          <li>Easy Backup and Restore</li>
          <li>SFTP Files Access</li>
        </ul>

        <ul>
          <li>Temporary EasyWP free domain</li>
          <li>Support for your Namecheap domains</li>
          <li>30-days money back guarantee</li>
          <li>24/7 Namecheap Support included</li>
        </ul>

      </div>

    </div>
  </div>


</section>