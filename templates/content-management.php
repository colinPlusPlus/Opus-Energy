<?php
/**
 * This file adds the Management_Team template to the Enterprise Pro Theme.
 *
 * @author Colin Williams
 * @package Opus Custom Theme
 * @subpackage Customizations
 */

global $opus_row_index;

if ( !isset( $opus_row_index) || $opus_row_index % 3 == 0 ){
  printf( '<div class = "%s">' , 'row' );
  printf( '<div class = "%s">', 'col-md-4' );
}
else{
  printf( '<div class = "%s">', 'col-md-4' );

}

$opus_row_index += 1;

printf( '<img src="%s" alt="%s" class="%s" >' , get_field('person_picture') ,  get_field('person_name') , 'br5px' );
printf( '<a href="#%s" data-toggle="%s" >', get_the_ID(), 'modal' );
printf( '<h3>%s</h3>', get_field('person_name') );
printf( '<h5>%s</h5>', the_field('person_job_title') );
echo '</a>';

?>
<!-- Modal -->
<div class="modal fade" id="<?php the_ID() ?>" tabindex="-1" role="dialog" aria-labelladby="<?php the_title() ?>">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h3 class="modal-title" id="myModalLabel"><?php the_field('person_name'); ?></h3>
        <h4 class="modal-title"> <?php the_field('person_job_title'); ?></h4>
      </div>
      <div class="modal-body">
        <img src= "<?php the_field('person_picture') ?>" class="modal-img" />
        <?php the_field('person_bio'); ?>
      </div>
      <div class="modal-footer">
        <?php if ( get_previous_post() ): ?>
          <button type="button" class="btn btn-default" data-toggle="modal" data-target="#<?php echo get_previous_post()->ID ?>" data-dismiss="modal">Previous</button>
        <?php endif; ?>
        <?php if ( get_next_post() ): ?>
          <button type="button" class="btn btn-default" data-toggle="modal" data-target="#<?php echo get_next_post()->ID ?>" data-dismiss="modal" >Next</button>
        <?php endif; ?>
      </div>
    </div>
  </div>
</div>
<?php

echo '</div>';
if ( isset( $opus_row_index) && $opus_row_index % 3 == 0 ){
  echo '</div>';
}
