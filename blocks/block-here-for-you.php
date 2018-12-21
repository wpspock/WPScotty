<section class="here-for-you">

  <div class="grid-columns">
    <h2><?php block_field( 'title' ) ?></h2>
  </div>

  <div class="grid-columns">
    <div class="info-chat">

      <p><?php block_field( 'description-line-1' ) ?><br/>
          <?php block_field( 'description-line-2' ) ?>
      </p>

      <a href="#"
         id="e2e_link_button_chat_with_person"
         class="cds-button cds-size-big ewp-need-help"><?php block_field( 'chat' ) ?></a>

    </div>
  </div>

  <div class="grid-columns">
    <div class="questions">

      <p><?php block_field( 'questions-title' ) ?></p>

      <ul>
          <?php block_field( 'questions' ) ?>
      </ul>

      <a href="<?php block_field( 'view-all-url' ) ?>"
         id="e2e_link_view_all_questions"
         class="link"
         target="_blank"><?php block_field( 'view-all' ) ?></a>

    </div>
  </div>

</section>