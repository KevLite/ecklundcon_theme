<?php get_header()?>

<div>
    <?php while(have_posts()): the_post()?>     
    <h2><?php the_title()?></h2> by <a href="<?php echo the_author_posts_link()?>"><?php the_author()?></a> at <?php the_time()?>
        <?php the_content('Click here for more!')?>
    <?php endwhile;?>
</div>

<?php get_sidebar()?>
<?php get_footer()?>