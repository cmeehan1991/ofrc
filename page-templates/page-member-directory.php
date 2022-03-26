<?php 
/**
 * Template Name: Member Directory
 */
get_header();

?>
<div class="member-profile-container">

 <?php 
 if(!is_user_logged_in()){
	 get_template_part( 'template-parts/template', 'member-login' );
 }else{
	get_template_part('template-parts/template', 'member-profile-archive');
 }
 
 ?>
 
</div>
<div class="loading-indicator">
  <i class="fas fa-spinner fa-3x fa-pulse"></i>
</div>
<?php 
get_footer();