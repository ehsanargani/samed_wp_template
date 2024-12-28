<?php get_header(); ?>
<!-- content -->
<section class="relative">
    <div class="px-4 lg:px-0 sm:container mx-auto">
        <!-- breadCrumb & title -->
        <div class="flex items-center py-5 lg:px-0">
            <a class="text-xs VazirmatnBold text-neutral-800" href="#"
            >صفحه اصلی</a
            >
            <i class="">
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
            <a class="text-xs VazirmatnBold text-secondry-500" href="#"
            > <?php echo get_queried_object()->name; ?></a
            >
        </div>

        <div class="pb-5 border-b border-primary-200">
            <h1 class="text-xl lg:text-2xl VazirmatnBold mb-2"> <?php echo get_queried_object()->name; ?></h1>
            <p class="text-sm lg:text-base VazirmatnLight text-justify">
                <?php echo get_queried_object()->description; ?>
            </p>
        </div>

        <!-- categories -->

        <div
                class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-4 2xl:grid-cols-5 gap-4 lg:gap-6 p-4 lg:p-0"
        >
<?php


$queried_object = get_queried_object();




            $loop = new WP_Query( array(  'tax_query' => array (
                array (
                    'taxonomy' => $queried_object->taxonomy,
                    'field' => 'slug',
                    'terms' => $queried_object->slug,
                ),
            ), 'post_type' => 'products',
                'posts_per_page'=>8,'paged' => $paged
            ) ); ?>
                <?php

                if( $loop->have_posts() ) :
                    while ( $loop->have_posts() ) : $loop->the_post();

                        ?>
            <div
                    class="p-4 shadow-md rounded h-fit hover:shadow-2xl hover:scale-105 transition-all duration-300"
            >
                <img class="rounded w-full" src="<?php the_post_thumbnail_url(); ?>" alt="" />
                <h4
                        class="text-sm lg:text-base mt-2 VazirmatnBold text-neutral-800"
                >
                  <?php the_title(); ?>
                </h4>
                <p class="text-xs lg:text-sm mb-5 text-neutral-800">
                    <?php echo wp_trim_words(get_the_excerpt(), 10); ?>
                </p>
                <a
                        class="flex text-white border border-transparent bg-primary-700 p-2 rounded justify-center items-center text-sm hover:bg-transparent hover:text-primary-700 hover:border-primary-700 transition-all duration-300"
                        href="<?php the_permalink(); ?>"
                >اطلاعات بیشتر</a
                >
            </div>
            <?php
                    endwhile;

            ?>


        </div>
    </div>

    <!-- pageNumber -->
    <div
            class="flex gap-x-2 mt-14 mb-28 justify-center py-5 items-center bg-primary-100"
    >
        <?php
        $total_pages = $loop->max_num_pages;

        if ($total_pages > 1){
            ?>

            <?php
            $current_page = max(1, get_query_var('paged'));
            $links= paginate_links(array(
                'base' => get_pagenum_link(1) . '%_%',
                'format' => '/page/%#%',
                'current' => $current_page,
                'total' => $total_pages,
                'type'      => 'array',
            ));
            ?>
            <div
                    class="flex gap-x-2 mt-14 mb-28 justify-center py-5 items-center bg-primary-100"
            >

                <?php foreach ($links as $link) : ?>
                    <?php echo $link; ?>



                <?php endforeach; ?>








            </div>
            <?php
        }
        ?>
    </div>
    <?php endif; ?>
</section>
<!-- content -->
<?php get_footer(); ?>
