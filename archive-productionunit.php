<?php /* Template Name: آرشیو واحد های تولیدی  */ ?>
<?php get_header(); ?>
<section class="relative lg:h-fit lg:pb-28 bg-primary-100">
    <div
        class="bg-center bg-cover absolute w-full h-[822px] lg:h-full top-0 right-0"
        style="background-image: url(<?php the_post_thumbnail_url(); ?>)"
    >
        <div class="bg-[#12122599] absolute w-full h-full top-0 right-0"></div>
    </div>

    <div class="p-4 lg:px-28 lg:mx-auto relative">
        <!-- breadCrumbs & title -->
        <div class="py-7 lg:py-10">
            <div class="flex items-center mb-6 lg:px-0">
                <a class="text-xs VazirmatnBold text-neutral-50" href="<?php echo home_url() ?>"
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
                            class="stroke-neutral-50"
                            stroke-width="1.5"
                            stroke-linecap="round"
                            stroke-linejoin="round"
                        />
                    </svg>
                </i>
                <a class="text-xs VazirmatnBold text-neutral-50" href="#"
                >درباره‌ی ما</a
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
                            class="stroke-neutral-50"
                            stroke-width="1.5"
                            stroke-linecap="round"
                            stroke-linejoin="round"
                        />
                    </svg>
                </i>
                <a
                    class="text-xs VazirmatnBold max-w-40 truncate text-secondry-500"
                    href="#"
                ><?php the_title(); ?></a
                >
            </div>
            <div>
                <h1 class="text-2xl lg:text-[32px] VazirmatnBold text-neutral-50">
                   <?php the_title(); ?>
                </h1>
                <div class="text-sm lg:text-base VazirmatnLight text-neutral-50 mt-4">
                   <?php the_content(); ?>
                </div>
            </div>
        </div>
        <!-- breadCrumbs & title -->

        <!-- cards -->
        <div class="flex flex-col lg:flex-row gap-6 relative mt-10">
            <?php
            // Example argument that defines three posts per page.
            $args = array(
                'post_type' => 'productionunit',
                'posts_per_page' => 12,

            );

            // Variable to call WP_Query.
            $the_query = new WP_Query( $args );

            if ( $the_query->have_posts() ) :

            // Start the Loop
            while ( $the_query->have_posts() ) : $the_query->the_post();
            ?>
            <div
                class="basis-1/3 p-4 shadow-md rounded h-fit hover:shadow-2xl hover:scale-105 transition-all duration-300 bg-neutral-50"
            >
                <img class="rounded" src="<?php the_post_thumbnail_url(); ?>" alt="" />
                <h4
                    class="text-sm lg:text-base mt-2 VazirmatnBold text-neutral-800"
                >
                    <?php the_title(); ?>
               </h4>
                <p class="text-xs lg:text-sm mb-5 text-neutral-800">
                    <?php echo wp_trim_words(get_the_excerpt(), 15); ?>
                </p>
                <a
                    id="aHover"
                    href="<?php the_permalink(); ?>"
                    class="flex text-primary-500 w-fit hover:text-secondry-500 py-2 transition-color duration-500"
                >
                    ادامه مطلب
                    <i>
                        <svg
                            xmlns="http://www.w3.org/2000/svg"
                            width="20"
                            height="21"
                            viewBox="0 0 20 21"
                            fill="none"
                        >
                            <path
                                class="transition-color duration-500"
                                d="M5.83301 14.6668V6.3335M5.83301 6.3335H14.1663M5.83301 6.3335L14.1663 14.6668"
                                stroke="#8989C5"
                                stroke-width="1.5"
                                stroke-linecap="round"
                                stroke-linejoin="round"
                            />
                        </svg>
                    </i>
                </a>
            </div>
            <?php endwhile; endif; ?>
        </div>
    </div>
</section>

<section
    class="bg-primary-100 p-4 lg:px-28 lg:mx-auto pb-20 lg:pb-32 lg:pt-20"
>
    <div class="grid grid-cols-1 lg:grid-cols-3 gap-6">
        <?php $query = new wp_Query(array('post_type' => 'footer')); ?>
        <?php if ($query->have_posts()) : while ($query->have_posts()) :
        $query->the_post(); ?>
        <div class="flex flex-col gap-y-4">
            <!-- title & details -->
            <div class="flex flex-col gap-y-4 mb-4">
                <h3 class="text-xl lg:text-2xl text-neutral-800 VazirmatnMedium">
                    اطلاعات بیشتر درباره‌ی واحدها
                </h3>
                <p class="text-sm lg:text-base text-neutral-800 VazirmatnLight">
                   <?php the_field('productionunit_text') ?>
                </p>
            </div>
            <!-- line -->
            <div
                class="hidden lg:block relative border-t border-e h-full border-secondry-500"
            >
                <div
                    class="w-6 h-6 absolute rounded-full bg-secondry-500 -top-3 right-0"
                ></div>
            </div>
            <!-- /line -->
            <!-- buttons -->
            <div class="flex gap-2 justify-center lg:justify-start">
                <a
                    href="<?php the_field('contactus_page_link') ?>"
                    class="p-2 flex w-full justify-center items-center border rounded text-secondry-500 border-secondry-500 cursor-pointer"
                >صدای مشتریان</a
                >
                <a
                    href="#"
                    class="p-2 flex w-full justify-center items-center border rounded bg-secondry-500 text-white border-secondry-500 hover:bg-transparent hover:text-secondry-500 transition-all duration-500 cursor-pointer"
                >تماس با واحد فروش</a
                >
            </div>
            <?php endwhile; endif; ?>
        </div>
        <?php
        // Example argument that defines three posts per page.
        $args = array(
            'post_type' => 'productionunit',
            'posts_per_page' => 2,

        );

        // Variable to call WP_Query.
        $the_query = new WP_Query( $args );

        if ( $the_query->have_posts() ) :

        // Start the Loop
        while ( $the_query->have_posts() ) : $the_query->the_post();
        ?>
        <div
            class="basis-1/3 p-4 shadow-md rounded h-fit hover:shadow-2xl hover:scale-105 transition-all duration-300 bg-neutral-50"
        >
            <img class="rounded" src="<?php the_post_thumbnail_url(); ?>" alt="" />
            <h4 class="text-sm lg:text-base mt-2 VazirmatnBold text-neutral-800">
             <?php the_title(); ?>
            </h4>
            <p class="text-xs lg:text-sm mb-5 text-neutral-800">
                <?php echo wp_trim_words(get_the_excerpt(), 15); ?>
            </p>
            <a
                id="aHover"
                href="<?php the_permalink(); ?>"
                class="flex text-primary-500 w-fit hover:text-secondry-500 py-2 transition-color duration-500"
            >
                ادامه مطلب
                <i>
                    <svg
                        xmlns="http://www.w3.org/2000/svg"
                        width="20"
                        height="21"
                        viewBox="0 0 20 21"
                        fill="none"
                    >
                        <path
                            class="transition-color duration-500"
                            d="M5.83301 14.6668V6.3335M5.83301 6.3335H14.1663M5.83301 6.3335L14.1663 14.6668"
                            stroke="#8989C5"
                            stroke-width="1.5"
                            stroke-linecap="round"
                            stroke-linejoin="round"
                        />
                    </svg>
                </i>
            </a>
        </div>
      <?php endwhile; endif; ?>
    </div>
</section>
<?php get_footer(); ?>
