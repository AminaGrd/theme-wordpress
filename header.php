<?php
$category = get_queried_object();
$this_slug = $category->slug;  // renvoi le slug DE LA PAGE
$this_id = $category->term_id; // renvoi l'ID DE LA PAGE
$this_name = $category->name;  // renvoi le name DE LA PAGE
if (!isset($this_name)||empty($this_name)) {
    $this_name = get_the_title();
}
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <title><?php echo $this_name; ?> | <?= get_bloginfo( 'name' ); ?></title> -->
    <?php wp_head(); ?>
    
</head>
<body <?php body_class(); ?>>
    <?php wp_body_open(); ?>

    <?php get_template_part( 'template-parts/nav' ); ?>

    <script>
        const bodyTitle = document.title.replace(' | Expérience Industries', '');
        console.log('bodyTitle : ', bodyTitle);
    </script>

    <?php
    if (is_front_page() ===  true) {
        get_template_part( 'template-parts/headOfLanding' );
    } else {
        ?>
        <h1 class="page_title"><script>document.write(bodyTitle);</script></h1>
        <?php
    }
?>

    <div class="content">