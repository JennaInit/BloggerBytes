<?php get_header(); ?>

<div id="content">
    <main>
        <h2><?php echo get_queried_object()->name; ?></h2>
        <p><?php echo get_queried_object()->description; ?></p>
<div id="activity-box">
<?php
    $id = get_queried_object()->term_id;
    $type = get_queried_object()->taxonomy;
    $subcats = get_term_children($id, $type);
    foreach($subcats as $cat);
        $cat_object = get_term_by('id', $cat, $type);
?>
        <h3><a href ="<?php echo get_term_link($cat, $type);?>"><?php echo $cat_object->name; ?></a></h3>
        <p><?php echo $cat_object->description; ?></p>

    </main>
    <?php get_sidebar(); ?>
    </div> <!-----Content----->
<?php get_footer(); ?>
