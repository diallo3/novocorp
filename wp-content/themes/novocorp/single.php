<?php 

$context = Timber::get_context(); 
$post = new TimberPost(); 
$context["post"] = $post;

// $context["acf"] = get_field_objects($data["post"]->ID);
Timber::render("/views/singles/single.twig", $context); 

?>