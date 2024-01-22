<?php 
$comingSoon = get_field('coming_soon');
// echo '<pre style="color: #fff;">';
// print_r($comingSoon);
// echo '</pre>';

if( $comingSoon[0] == 'soon' ) { 
  $coming_soon_title = get_field('coming_soon_title');
  $coming_soon_description = get_field('coming_soon_description');
  // $coming_soon_image = get_field("coming_soon","option");
  // $bgcolor = get_field("coming_soon_bgcolor","option");
  // $bg_color = ($bgcolor) ? $bgcolor : '#FF7F30';
  ?>
  <div class="coming-soon coming-soon-wrap">
  	
      <?php //if( $texts && array_filter($texts) ) { ?>
  		<div class="cs-text">
      <h2><?php echo $coming_soon_title; ?></h2>
  			<?php if ($coming_soon_description) { ?><p><?php echo $coming_soon_description; ?></p><?php } ?>
  		</div>
      <?php //} ?>
  	
  	
  </div>
<?php } ?>