<?php  /* Template Name:افتخارات  */ ?>
<?php get_header(); ?>
    <!-- content -->
    <section class="relative mb-10">
        <!-- breadCrumbs & title -->
        <div class="py-7 lg:py-10 p-4 lg:p-0 container mx-auto">
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
                <a class="text-xs VazirmatnBold text-neutral-800" href="#"
                ><?php the_title(); ?></a
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
                <a
                    class="text-xs VazirmatnBold max-w-40 truncate text-secondry-500"
                    href="#"
                ><?php the_title(); ?></a
                >
            </div>
            <div>
                <h1 class="text-xl lg:text-[32px] VazirmatnBold text-neutral-800">
                    <?php the_title(); ?>
                </h1>
                <p class="text-sm lg:text-base VazirmatnLight text-neutral-800 mt-4">
                   <?php the_content(); ?>
                </p>
            </div>
        </div>
        <!-- breadCrumbs & title -->
    </section>

    <section class="bg-primary-900 pt-12 pb-16">
        <div class="lg:py-10 p-4 lg:p-0 container mx-auto">
            <div>
                <h1 class="text-xl lg:text-[32px] VazirmatnBold text-neutral-50">
                    گواهینامه ها و افتخارات
                </h1>
                <p class="text-sm lg:text-base VazirmatnLight text-neutral-50 mt-6">
                    لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ، و با
                    استفاده از طراحان گرافیک است، چاپگرها و متون بلکه روزنامه و مجله در
                    ستون سطرآنچنان که لازم است، و برای شرایط فعلی تکنولوژی مورد نیاز، و
                    کاربردهای متنوع با هدف بهبود ابزارهای کاربردی می باشد
                </p>
            </div>
        </div>

        <!-- slider -->
        <swiper-container
            class="lg:p-0 rounded lg:w-full h-fit"
            dir="ltr"
            loop="true"
            autoplay-delay="2500"
            space-between="10"
            slides-per-view="auto"
            disableOnInteraction="true"
        >
            <?php $query = new wp_Query(array('post_type' => 'adwords')); ?>
            <?php if ($query->have_posts()) : while ($query->have_posts()) :
            $query->the_post(); ?>
            <swiper-slide
            ><img class="rounded" src="<?php the_post_thumbnail_url('full'); ?>" alt="" />
            </swiper-slide>
            <?php endwhile; endif; ?>

        </swiper-container>
    </section>

    <section class="bg-primary-100 py-8 lg:py-[104px]">
        <div class="p-4 lg:p-0 container mx-auto">
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

            <div class="lg:border-e border-secondry-500">
                <!-- title & line -->
                <div class="flex lg:h-[55px]">
                    <div class="h-full">
                        <h3
                            class="text-neutral-800 text-2xl lg:text-[32px] VazirmatnBold w-full lg:w-fit me-4 h-full flex items-end"
                        >
                            افتخارات
                        </h3>
                    </div>
                    <!-- line -->
                    <div
                        class="hidden lg:block border-t border-s border-secondry-500 w-full relative"
                    >
                        <div
                            class="w-5 h-5 absolute bg-secondry-500 rounded-full -right-[10px] bottom-0"
                        ></div>
                    </div>
                    <!-- /line -->
                </div>
                <!-- title & line -->
                <h4 class="mt-4 lg:mt-10 text-base lg:text-xl">
                    از سال ۱۳۹۸ تا ۱۴۰۰
                </h4>
            </div>

            <!-- certificate items section 1 -->
            <div id="showImages" class="grid grid-cols-2 lg:grid-cols-6 gap-6 mt-6">

                <?php $query = new wp_Query(array('post_type' => 'adwords','posts_per_page' => 6,'tax_query' => array(
                    array(
                        'taxonomy' => 'adwords_category',
                        'field'    => 'slug', // term_id, slug
                        'terms'    => 'از-سال-۱۳۹۸-تا-۱۴۰۰',
                    )))); ?>
                <?php if ($query->have_posts()) : while ($query->have_posts()) :
                $query->the_post(); ?>
                <img
                    class="cursor-pointer"
                    src="<?php the_post_thumbnail_url('full'); ?>"
                    alt=""
                />
                <?php endwhile; endif; ?>

            </div>

        </div>

        <hr class="lg:container mx-auto border-secondry-500 my-6 lg:my-8" />

        <div class="p-4 lg:p-0 container mx-auto">
            <h4 class="lg:mt-10 text-base lg:text-xl">از سال ۱۳۹۵ تا ۱۳۹۷</h4>

            <!-- certificate items section 2 -->
            <div id="showImages" class="grid grid-cols-2 lg:grid-cols-6 gap-6 mt-6">
                <?php $query = new wp_Query(array('post_type' => 'adwords','posts_per_page' => 6,'tax_query' => array(
                    array(
                        'taxonomy' => 'adwords_category',
                        'field'    => 'slug', // term_id, slug
                        'terms'    => 'از-سال-۱۳۹۵-تا-۱۳۹۷	',
                    )))); ?>
                <?php if ($query->have_posts()) : while ($query->have_posts()) :
                $query->the_post(); ?>
                <img
                    class="cursor-pointer"
                    src="<?php the_post_thumbnail_url('full'); ?>"
                    alt=""
                />
                <?php endwhile; endif; ?>
            </div>

        </div>

        <hr class="lg:container mx-auto border-secondry-500 my-6 lg:my-8" />

        <div class="p-4 lg:p-0 container mx-auto">
            <h4 class="lg:mt-10 text-base lg:text-xl">از سال ۱۳۹۰ تا ۱۳۹۴</h4>

            <!-- certificate items section 3 -->
            <div id="showImages" class="grid grid-cols-2 lg:grid-cols-6 gap-6 mt-6">
                <?php $query = new wp_Query(array('post_type' => 'adwords','posts_per_page' => 6,'tax_query' => array(
                    array(
                        'taxonomy' => 'adwords_category',
                        'field'    => 'slug', // term_id, slug
                        'terms'    => 'از-سال-۱۳۹۰-تا-۱۳۹۴',
                    )))); ?>
                <?php if ($query->have_posts()) : while ($query->have_posts()) :
                $query->the_post(); ?>
                <img
                    class="cursor-pointer"
                    src="<?php the_post_thumbnail_url('full'); ?>"
                    alt=""
                />
                <?php endwhile; endif; ?>
            </div>

        </div>
    </section>

    <section class="bg-primary-900 pb-8">
        <div class="p-4 lg:p-0 container mx-auto">
            <h4 class="pt-4 lg:pt-8 text-base lg:text-xl text-neutral-50">
                از سال ۱۳۸۰ تا ۱۳۸۹
            </h4>

            <!-- certificate items section 4 -->
            <div id="showImages" class="grid grid-cols-2 lg:grid-cols-6 gap-6 mt-6">
                <?php $query = new wp_Query(array('post_type' => 'adwords','posts_per_page' => 6,'tax_query' => array(
                    array(
                        'taxonomy' => 'adwords_category',
                        'field'    => 'slug', // term_id, slug
                        'terms'    => 'از-سال-۱۳۸۰-تا-۱۳۸۹',
                    )))); ?>
                <?php if ($query->have_posts()) : while ($query->have_posts()) :
                $query->the_post(); ?>
                <img
                    class="cursor-pointer"
                    src="<?php the_post_thumbnail_url('full'); ?>"
                    alt=""
                />
                <?php endwhile; endif; ?>
            </div>

        </div>

        <hr class="lg:container mx-auto border-secondry-500 my-6 lg:my-8" />

        <div class="p-4 lg:p-0 container mx-auto">
            <h4 class="lg:mt-10 text-base lg:text-xl text-neutral-50">
                از سال ۱۳۶۹ تا ۱۳۷۹
            </h4>

            <!-- certificate items section 5 -->
            <div id="showImages" class="grid grid-cols-2 lg:grid-cols-6 gap-6 mt-6">
                <?php $query = new wp_Query(array('post_type' => 'adwords','posts_per_page' => 6,'tax_query' => array(
                    array(
                        'taxonomy' => 'adwords_category',
                        'field'    => 'slug', // term_id, slug
                        'terms'    => 'از-سال-۱۳۶۹-تا-۱۳۷۹',
                    )))); ?>
                <?php if ($query->have_posts()) : while ($query->have_posts()) :
                $query->the_post(); ?>
                <img
                    class="cursor-pointer"
                    src="<?php the_post_thumbnail_url('full'); ?>"
                    alt=""
                />
                <?php endwhile; endif; ?>

            </div>

        </div>
    </section>
    <!-- content -->

    <script src="<?php bloginfo('template_url'); ?>/js/main.js"></script>
    <script src="<?php bloginfo('template_url'); ?>/js/index/swiper-element-bundle.min.js"></script>
    <script>
        const swiperEl = document.querySelector("swiper-container");
        const showImages = document.querySelectorAll("#showImages img");
        const showSingleImage = document.querySelector(".showSingleImage");
        const closerAria = document.querySelector("#closerAria");
        const pol = document.querySelector("#pol");

        Object.assign(swiperEl, {
            slidesPerView: 2,
            spaceBetween: 10,

            breakpoints: {
                992: {
                    slidesPerView: 5,
                    spaceBetween: 30,
                },
            },
        });
        swiperEl.initialize();

        showImages.forEach((image, index) => {
            image.addEventListener("click", () => {
                let imgSrc = image.getAttribute("src");

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