<?php  /* Template Name:آرشیو ماهنامه ها  */ ?>
<?php get_header(); ?>
<!-- content -->
<section class="relative">
    <div class="px-4 lg:px-28 lg:mx-auto">
        <div class="py-7 lg:py-10">
            <div class="flex items-center mb-4 lg:px-0">
                <a class="text-xs VazirmatnBold text-neutral-800" href="<?php echo home_url() ?>"
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
                >ماهنامه</a
                >
            </div>
            <h1 class="text-xl lg:text-2xl VazirmatnBold text-neutral-800">
                ماهنامه های ما را دنبال کنید
            </h1>
        </div>
    </div>

    <div
        class="p-4 lg:px-28 lg:flex gap-x-2 grid grid-flow-col justify-stretch bg-primary-100 lg:mb-4"
    >
          <button id="tab1" onClick="JavaScript:selectTab(1);"
           
            class="px-2 py-2 text-center  text-sm rounded hover:bg-transparent border  hover:text-secondry-500 hover:border-secondry-500  transition-all duration-200 tabactive"
        >نمایش همه
        
        </button>
        <button id="tab2" onClick="JavaScript:selectTab(2);"
            
            class="px-2 py-2 text-center  text-sm rounded hover:bg-transparent border  hover:text-secondry-500 hover:border-secondry-500  transition-all duration-200"
        >جدیدترین اخبار
        </button>
        <button id="tab3" onClick="JavaScript:selectTab(3);"
           
            class="px-2 py-2 text-center  text-sm rounded hover:bg-transparent border  hover:text-secondry-500 hover:border-secondry-500  transition-all duration-200"
        >
            پربازدیدترین اخبار
        
        </button>
    </div>
<div id="tab1Content" style="display: block;">
    <!-- news -->

    <div
        class="p-4 lg:px-28 grid grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-4 lg:gap-6"
    >
        <?php
        // Example argument that defines three posts per page.
        $args = array(
            'posts_per_page' => 8,
            'post_type' => 'magezine',
            'paged' => $paged
        );

        // Variable to call WP_Query.
        $the_query = new WP_Query( $args );

        if ( $the_query->have_posts() ) :

            // Start the Loop
            while ( $the_query->have_posts() ) : $the_query->the_post();
                ?>
                <div
                    id="animated"
                    class="animated border border-pirmary-300 rounded p-2 lg:p-4 flex flex-col justify-between"
                >
                    <div class="h-60 bg-cover bg-no-repeat">
                        <div
                            class="bg-cover bg-center h-40 w-full rounded transition-all duration-700"
                            style="background-image: url(<?php the_post_thumbnail_url(); ?>)"
                        ></div>
                        <p class="pt-3 text-sm transition-all mb-2 duration-300">
                            <?php the_title(); ?>
                        </p>
                    </div>

                    <div class="grid grid-cols-1 lg:grid-cols-2 gap-2 mt-4">
                        <a
                            href="<?php the_field('mahname_file') ?>"
                            class="text-white text-sm rounded p-2 flex justify-center items-center bg-primary-700 transition-color duration-500"
                        >
                            دانلود PDF
                        </a>
                        <a
                            href="<?php the_permalink(); ?>"
                            class="text-primary-700 text-sm rounded p-2 flex justify-center items-center border border-primary-700 transition-color duration-500"
                        >
                            نمایش ماهنامه
                        </a>
                    </div>
                </div>
            <?php endwhile;  ?>
    </div>

    <!-- news -->

    <div
        class="flex gap-x-2 justify-center mt-10 mb-10 lg:mb-32 py-5 items-center bg-primary-100"
    >
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
    </div>
    <?php endif; ?>
</div>
   <div id="tab2Content" style="display: none;">
    <!-- news -->

    <div
        class="p-4 lg:px-28 grid grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-4 lg:gap-6"
    >
        <?php
        // Example argument that defines three posts per page.
        $args = array(
            'posts_per_page' => 8,
            'post_type' => 'magezine',
            'paged' => $paged
        );

        // Variable to call WP_Query.
        $the_query = new WP_Query( $args );

        if ( $the_query->have_posts() ) :

            // Start the Loop
            while ( $the_query->have_posts() ) : $the_query->the_post();
                ?>
                <div
                    id="animated"
                    class="animated border border-pirmary-300 rounded p-2 lg:p-4 flex flex-col justify-between"
                >
                    <div class="h-60 bg-cover bg-no-repeat">
                        <div
                            class="bg-cover bg-center h-40 w-full rounded transition-all duration-700"
                            style="background-image: url(<?php the_post_thumbnail_url(); ?>)"
                        ></div>
                        <p class="pt-3 text-sm transition-all mb-2 duration-300">
                            <?php the_title(); ?>
                        </p>
                    </div>

                    <div class="grid grid-cols-1 lg:grid-cols-2 gap-2 mt-4">
                        <a
                            href="<?php the_field('mahname_file') ?>"
                            class="text-white text-sm rounded p-2 flex justify-center items-center bg-primary-700 transition-color duration-500"
                        >
                            دانلود PDF
                        </a>
                        <a
                            href="<?php the_permalink(); ?>"
                            class="text-primary-700 text-sm rounded p-2 flex justify-center items-center border border-primary-700 transition-color duration-500"
                        >
                            نمایش ماهنامه
                        </a>
                    </div>
                </div>
            <?php endwhile;  ?>
    </div>

    <!-- news -->

    <div
        class="flex gap-x-2 justify-center mt-10 mb-10 lg:mb-32 py-5 items-center bg-primary-100"
    >
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
    </div>
    <?php endif; ?>
</div>

<div id="tab3Content" style="display: none;">
    <!-- news -->

    <div
        class="p-4 lg:px-28 grid grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-4 lg:gap-6"
    >
        <?php
        // Example argument that defines three posts per page.
        $args = array(
            'posts_per_page' => 8,
            'post_type' => 'magezine',
            'paged' => $paged,
            'meta_key'=>'popular_posts', 
     'orderby'=>'meta_value_num', 
     'order'=>'DESC',
        );

        // Variable to call WP_Query.
        $the_query = new WP_Query( $args );

        if ( $the_query->have_posts() ) :

            // Start the Loop
            while ( $the_query->have_posts() ) : $the_query->the_post();
                ?>
                <div
                    id="animated"
                    class="animated border border-pirmary-300 rounded p-2 lg:p-4 flex flex-col justify-between"
                >
                    <div class="h-60 bg-cover bg-no-repeat">
                        <div
                            class="bg-cover bg-center h-40 w-full rounded transition-all duration-700"
                            style="background-image: url(<?php the_post_thumbnail_url(); ?>)"
                        ></div>
                        <p class="pt-3 text-sm transition-all mb-2 duration-300">
                            <?php the_title(); ?>
                        </p>
                    </div>

                    <div class="grid grid-cols-1 lg:grid-cols-2 gap-2 mt-4">
                        <a
                            href="<?php the_field('mahname_file') ?>"
                            class="text-white text-sm rounded p-2 flex justify-center items-center bg-primary-700 transition-color duration-500"
                        >
                            دانلود PDF
                        </a>
                        <a
                            href="<?php the_permalink(); ?>"
                            class="text-primary-700 text-sm rounded p-2 flex justify-center items-center border border-primary-700 transition-color duration-500"
                        >
                            نمایش ماهنامه
                        </a>
                    </div>
                </div>
            <?php endwhile;  ?>
    </div>

    <!-- news -->

    <div
        class="flex gap-x-2 justify-center mt-10 mb-10 lg:mb-32 py-5 items-center bg-primary-100"
    >
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
    </div>
    <?php endif; ?>
</div>


</section>

<section>
    <div class="p-4 pb-20 lg:p-0 lg:px-28 grid grid-cols-2 lg:grid-cols-4 gap-4 lg:gap-6">
        <div
                class="flex flex-col justify-between col-span-2 lg:col-span-1 mb-2 lg:mb-0 lg:border-s-2 border-secondry-500"
        >
            <?php $query = new wp_Query(array('post_type' => 'footer')); ?>
            <?php if ($query->have_posts()) : while ($query->have_posts()) :
                $query->the_post(); ?>
                <!-- redLine -->
                <div class="w-1/2 border-t-2 border-secondry-500 relative mb-2 hidden lg:block">
                    <div class="w-5 h-5 bg-secondry-500 absolute rounded-full -bottom-[10px] -left-5"></div>
                </div>
                <!-- redLine -->
                <h3 class="text-xl lg:text-2xl VazirmatnBold text-neutral-800 lg:ms-4">
                    ماهنامه‌های ما را دنبال کنید
                </h3>

                <p class="my-4 text-neutral-800 text-sm lg:text-base lg:ms-4">
                    <?php the_field('mahname_text') ?>
                </p>

                <a href="<?php the_field('mahname_link') ?>" class="flex text-primary-700 w-fit lg:ms-4">
                    نمایش همه‌ی ماهنامه ها
                    <i class="ms-2">
                        <svg
                                xmlns="http://www.w3.org/2000/svg"
                                width="20"
                                height="21"
                                viewBox="0 0 20 21"
                                fill="none"
                        >
                            <path
                                    d="M5.83337 14.6668V6.3335M5.83337 6.3335H14.1667M5.83337 6.3335L14.1667 14.6668"
                                    stroke="#343469"
                                    stroke-width="1.5"
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                            />
                        </svg>
                    </i>
                </a>
            <?php endwhile; endif; ?>
        </div>
        <?php
        // Example argument that defines three posts per page.
        $args = array(
            'posts_per_page' => 3,
            'post_type' => 'magezine',

        );

        // Variable to call WP_Query.
        $the_query = new WP_Query( $args );

        if ( $the_query->have_posts() ) :

            // Start the Loop
            while ( $the_query->have_posts() ) : $the_query->the_post();
                ?>
                <div
                        id="animated"
                        class="animated border border-pirmary-300 rounded p-2 lg:p-4 flex flex-col justify-between"
                >
                    <div class="h-60 bg-cover bg-no-repeat">
                        <div
                                class="bg-cover bg-center h-40 w-full rounded transition-all duration-700"
                                style="background-image: url(<?php the_post_thumbnail_url(); ?>)"
                        ></div>
                        <p class="pt-3 text-sm transition-all mb-2 duration-300">
                            <?php the_title(); ?>
                        </p>
                    </div>

                    <div class="grid grid-cols-1 lg:grid-cols-2 gap-2 mt-4">
                        <a
                                href="<?php the_field('mahname_file') ?>"
                                class="text-white text-sm rounded p-2 flex justify-center items-center bg-primary-700 transition-color duration-500"
                        >
                            دانلود PDF
                        </a>
                        <a
                                href="<?php the_permalink(); ?>"
                                class="text-primary-700 text-sm rounded p-2 flex justify-center items-center border border-primary-700 transition-color duration-500"
                        >
                            نمایش ماهنامه
                        </a>
                    </div>
                </div>
            <?php endwhile; endif; ?>
    </div>
    <div class="border-s-2 border-secondry-500 h-[108px] ms-28 hidden lg:block"></div>
</section>

<!-- content -->
<!-- content -->
<script>
   
function selectTab(tabIndex) {
//Hide All Tabs
document.getElementById('tab1Content').style.display="none";
document.getElementById('tab2Content').style.display="none";
document.getElementById('tab3Content').style.display="none";

//Show the Selected Tab
document.getElementById('tab' + tabIndex + 'Content').style.display="block";  
if(tabIndex==1){
document.getElementById('tab' + 2 ).classList.remove("tabactive");
document.getElementById('tab' + 3 ).classList.remove("tabactive");
}
else if(tabIndex==2){
document.getElementById('tab' + 1 ).classList.remove("tabactive");
document.getElementById('tab' + 3 ).classList.remove("tabactive");
}
else if(tabIndex==3){
document.getElementById('tab' + 1 ).classList.remove("tabactive");
document.getElementById('tab' + 2 ).classList.remove("tabactive");
}
document.getElementById('tab' + tabIndex ).classList.add("tabactive");
}

</script>
<?php get_footer(); ?>
