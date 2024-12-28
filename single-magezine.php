<?php get_header(); ?>

<!-- content -->
<section class="relative mb-10 lg:mb-[100px]">
    <!-- breadCrumbs & title -->
    <div class="py-7 lg:py-10 p-4 lg:px-28 lg:mx-auto">
        <div class="flex items-center mb-6 lg:px-0">
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
            <a class="text-xs VazirmatnBold" href="https://test3.faradev.ir/samed/fa/%d9%85%d8%a7%d9%87%d9%86%d8%a7%d9%85%d9%87-%d9%87%d8%a7-2/">ماهنامه</a>
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
            <a
                    class="text-xs VazirmatnBold max-w-40 truncate text-secondry-500"
                    href="#"
            ><?php the_title(); ?></a
            >
        </div>
        <div>
            <h1 class="text-base lg:text-2xl VazirmatnBold text-neutral-800">
                <?php the_title(); ?>
            </h1>
            <div class="text-sm lg:text-base VazirmatnLight text-neutral-800 mt-3">
                <?php the_content(); ?>
            </div>
        </div>
    </div>
    <!-- breadCrumbs & title -->

    <!-- boxes -->

    <!-- closerAria with inner img tag -->
    <div
            id="closerAria"
            class="fixed w-full h-full top-0 right-0 bg-[#00000096] z-30 hidden justify-center items-center"
    >
        <img
                id="pol"
                class="relative w-5/6 lg:w-1/3 showSingleImage"
                src=""
                alt=""
        />
    </div>

    <div
            class="p-4 lg:px-28 grid grid-cols-2 md:grid-cols-4 lg:grid-cols-6 gap-4 lg:gap-6"
    >


        <?php
        $mahnamegalleryimages=get_field('mahname_gallery');
        foreach ($mahnamegalleryimages

                 as $mahnamegalleryimage) :
            $image_id = $mahnamegalleryimage['ID'];
            $image_src = $mahnamegalleryimage['url'];
            $image_caption = $mahnamegalleryimage['caption'];
            ?>

            <div id="showImages" class="flex flex-col gap-2">
                <img class="rounded cursor-pointer" src="<?php echo $image_src;  ?>" alt="" />
                <h4 class="text-xs lg:text-sm text-neutral-800"><?php echo $image_caption; ?></h4>
            </div>
        <?php endforeach; ?>
    </div>

    <!-- boxes -->
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
<script src="<?php bloginfo('template_url'); ?>/js/main.js"></script>
<script>
    const showImages = document.querySelectorAll("#showImages img");
    const showSingleImage = document.querySelector(".showSingleImage");
    const closerAria = document.querySelector("#closerAria");
    const pol = document.querySelector("#pol");

    showImages.forEach((image, index) => {
        image.addEventListener("click", () => {
            let imgSrc = image.getAttribute('src');

            closerAria.style.display = "flex";
            showSingleImage.src = imgSrc;
        });
    });
    window.addEventListener("mouseup", function (event) {
        if (event.target != pol && event.target.parentNode != pol) {
            closerAria.style.display = "none";
        }
    });
</script>
<?php get_footer(); ?>
