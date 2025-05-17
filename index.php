<?php get_header(); ?>

<main>
    <?php if (have_posts()) : ?>
<div class="pagination">
    <?php previous_posts_link('上一页'); ?>
    <?php next_posts_link('下一页'); ?>
</div>
<?php while (have_posts()) : the_post(); ?>
    <article>
        <?php if (is_single()) : ?>
            <nav class="breadcrumb">
                <a href="<?php echo home_url(); ?>">主页</a> /
                <a href="<?php echo get_year_link(get_the_date('Y')); ?>"><?php echo get_the_date('Y'); ?></a> /
                <a href="<?php echo get_month_link(get_the_date('Y'), get_the_date('m')); ?>"><?php echo get_the_date('m'); ?></a> /
                <a href="<?php echo get_day_link(get_the_date('Y'), get_the_date('m'), get_the_date('d')); ?>"><?php echo get_the_date('d'); ?></a> /
                <?php the_title(); ?>
            </nav>
            <?php endif; ?>
            <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
            <?php if (is_home() || is_single()) : ?>

            <p><img src="<?php echo get_avatar_url(get_the_author_meta('ID'), ['size' => 32]); ?>" class="author-avatar" alt="作者头像"> 创建人: <a href="<?php echo get_author_posts_url(get_the_author_meta('ID')); ?>"><?php the_author(); ?></a> | 创建日期: <?php echo get_the_date(); ?> | 更新日期: <?php echo get_the_modified_date(); ?> | 标签: <?php the_tags('', ', ', ''); ?></p>
            <?php endif; ?>
            <?php the_post_thumbnail(); ?>
            <?php if (is_single() || is_page()) : ?>
                <?php the_content(); ?>
            <?php if (is_single()) : ?>
                <?php comments_template(); ?>
            <?php endif; ?>
            <?php else : ?>
                <?php the_excerpt(); ?>
                <a href="<?php the_permalink(); ?>" class="read-more">Read More</a>
            <?php endif; ?>
        </article>
    <?php endwhile; ?>
<div class="pagination">
    <?php previous_posts_link('上一页'); ?>
    <?php next_posts_link('下一页'); ?>
</div>
<?php endif; ?>
</main>

<?php get_footer(); ?>

<div id="back-to-top" onclick="topFunction()">Top</div>