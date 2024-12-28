<?php /* Template Name: دیگر صفحات  */ ?>
<?php get_header(); ?>
<?php while ( have_posts() ) : the_post(); ?>

    <!-- content -->
    <section class="pb-20 lg:pb-40 lg:pt-10">
        <div class="lg:px-28 lg:mx-auto">
            <div class="pt-5 px-4 lg:px-0">
                <div class="lg:px-0 flex items-center pb-5">
                    <a class="text-xs VazirmatnBold text-neutral-800" href="<?php echo home_url() ?>"
                    >صفحه اصلی</a
                    >
                    <i>
                        <svg
                            xmlns="http://www.w3.org/2000/svg"
                            width="20"
                            height="20"
                            viewBox="0 0 20 20"
                            fill="none"
                        >
                            <path
                                d="M12.5 15L7.5 10L12.5 5"
                                stroke="#2E303B"
                                stroke-width="1.5"
                                stroke-linecap="round"
                                stroke-linejoin="round"
                            />
                        </svg>
                    </i>

                    <a class="text-xs VazirmatnBold text-secondry-500" href="<?php the_permalink(); ?>"
                    ><?php the_title(); ?></a
                    >
                </div>
                <h1
                    class="text-xl lg:text-2xl lg:px-0 mb-5 border-b VazirmatnBold pb-5"
                >
                    <?php the_title(); ?>
                </h1>
            </div>

            <div class="lg:gap-x-6 lg:pt-6">
                <?php the_content(); ?>
            </div>
        </div>
    </section>
    <!-- content -->
<?php endwhile; ?>
<?php get_footer(); ?>