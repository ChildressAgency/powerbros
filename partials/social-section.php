<?php
  $facebook = get_field('facebook', 'option');
  $twitter = get_field('twitter', 'option');
  $instagram = get_field('instagram', 'option');
  $linkedin = get_field('linkedin', 'option');
?>
<div class="social">
  <?php if($facebook): ?>
    <a href="<?php echo $facebook; ?>" target="_blank"><i class="fa fa-facebook-official"></i></a>
  <?php endif; if($twitter): ?>
    <a href="<?php echo $twitter; ?>" target="_blank"><i class="fa fa-twitter"></i></a>
  <?php endif; if($instagram): ?>
    <a href="<?php echo $instagram; ?>" target="_blank"><i class="fa fa-instagram"></i></a>
  <?php endif; if($linkedin): ?>
    <a href="<?php echo $linkedin; ?>" target="_blank"><i class="fa fa-linkedin"></i></a>
  <?php endif; ?>
</div>