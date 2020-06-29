<?php get_header();?>

<?php 
  $posts = get_posts();
  if($posts):
    ?>
<?php foreach($posts as $post):
setup_postdata($post);
?>

<?php $post_id = get_the_ID();
  $images = acf_photo_gallery('gallery', $post_id);

  // for($i = 0; $i <= count($images);$i++){
  //     echo '<p>' . $images[$i]['full_image_url'] . '</p>';
  // }
  
?>


<?php endforeach?>

<?php wp_reset_postdata();?>

<?php endif?>



<?php get_footer();?>