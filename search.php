<?php get_header(); ?>
<style>
    .search-highlight {
        background:#FFFF00
    }
</style>
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

        </div>

        <div class="pb-5 border-b border-primary-200">
            <h1 class="text-xl lg:text-2xl VazirmatnBold mb-2">
نتایج جستجو برای واژه "<?php echo get_search_query(); ?>"
</h1>
        </div>

        <!-- categories -->

        <div
            class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-4 2xl:grid-cols-5 gap-4 lg:gap-6 p-4 lg:p-0"
        >
            <?php
            global $query_string;
            $query_args = explode("&", $query_string);
            $search_query = array('post_type' => array( 'products', 'news' ,'magezine' , 'adwords' , 'productionunit' ));

            foreach($query_args as $key => $string) {
                $query_split = explode("=", $string);
                $search_query[$query_split[0]] = urldecode($query_split[1]);
            } // foreach

            $the_query = new WP_Query($search_query);
            if ( $the_query->have_posts() ) :
             while ( $the_query->have_posts() ) : $the_query->the_post();
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
                        <?php echo wp_trim_words(get_the_excerpt(), 15); ?>
                    </p>
                    <a
                        class="flex text-white border border-transparent bg-primary-700 p-2 rounded justify-center items-center text-sm hover:bg-transparent hover:text-primary-700 hover:border-primary-700 transition-all duration-300"
                        href="<?php the_permalink(); ?>"
                    >اطلاعات بیشتر</a
                    >
                </div>
           <?php endwhile; ?>

<?php wp_reset_postdata(); ?>

<?php else : ?>
    <p><?php _e( 'نتیجه ای یافت نشد' ); ?></p>

        </div>
    </div>

    <!-- pageNumber -->
    <?php
    $total_pages = $the_query->max_num_pages;

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
    <?php endif; ?>
    <?php wp_reset_postdata(); ?>
</section>
<?php get_footer(); ?>
