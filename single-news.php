<?php get_header(); ?>
<style>
    .mySlides2 {display: none;}

    .slideshow-container {

        position: relative;
        margin: auto;
    }
    /* Fading animation */
    .fade {
        animation-name: fade;
        animation-duration: 1.5s;
    }

    @keyframes fade {
        from {opacity: .4}
        to {opacity: 1}
    }

    /* On smaller screens, decrease text size */
    @media only screen and (max-width: 300px) {
        .text {font-size: 11px}
    }
</style>
<section class="px-4 container mx-auto">
    <!-- breadCrumbs & title -->
    <div class="py-7 lg:py-10">
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
            <a class="text-xs VazirmatnBold" href="https://test3.faradev.ir/samed/fa/%d8%a2%d8%b1%d8%b4%db%8c%d9%88-%d8%a7%d8%ae%d8%a8%d8%a7%d8%b1/">اخبار</a>
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
                href="<?php the_permalink(); ?>"
            ><?php the_title(); ?></a
            >
        </div>
        <div>
            <h1 class="text-base lg:text-2xl VazirmatnBold text-neutral-800">
                <?php the_title(); ?>
            </h1>
            <p class="text-sm lg:text-base VazirmatnLight text-neutral-800 mt-3">
                <?php the_excerpt(); ?>
            </p>
        </div>
    </div>
    <!-- breadCrumbs & title -->

    <!-- slider&details -->
    <div class="flex gap-6 flex-col lg:flex-row">
        <div
            id="sliderInterval"
            class="basis-1/2 bg-slate-300 bg-center bg-cover min-h-80 rounded transition-all duration-500"
            style="background-image: url()"
        ></div>





        <div class="basis-1/2 flex flex-col gap-4 justify-between">
            <div class="order-2 lg:order-1">
                <?php the_field('news_excerpt'); ?>
            </div>
            <div
                class="flex gap-x-2 order-1 lg:order-2 justify-center lg:justify-start"
            >
                <button
                    id="next"
                    type="button"
                    class="p-1 flex justify-center items-center border border-primary-700 rounded"
                >
                    <svg
                        xmlns="http://www.w3.org/2000/svg"
                        width="20"
                        height="20"
                        viewBox="0 0 20 20"
                        fill="none"
                    >
                        <path
                            d="M7.5 15L12.5 10L7.5 5"
                            stroke="#444859"
                            stroke-width="1.5"
                            stroke-linecap="round"
                            stroke-linejoin="round"
                        />
                    </svg>
                </button>
                <button
                    id="previus"
                    type="button"
                    class="p-1 flex justify-center items-center border border-primary-700 rounded"
                >
                    <svg
                        xmlns="http://www.w3.org/2000/svg"
                        width="20"
                        height="20"
                        viewBox="0 0 20 20"
                        fill="none"
                    >
                        <path
                            d="M12.5 15L7.5 10L12.5 5"
                            stroke="#444859"
                            stroke-width="1.5"
                            stroke-linecap="round"
                            stroke-linejoin="round"
                        />
                    </svg>
                </button>
            </div>
        </div>
    </div>
    <!-- slider&details -->

    <!-- use list for it paragraph -->

    <!-- use list for it paragraph -->



    <div class="lg:py-[100px]  gap-6">
        <?php the_content() ?>
    </div>
</section>

<!-- main slider content section -->
<section class="lg:bg-primary-100 py-12 lg:pb-[150px] mb flex flex-col">
    <div class="px-4 container mx-auto flex justify-between mb-8">
        <h4 class="text-xl lg:text-2xl text-neutral-800 VazirmatnBold">
            <?php the_field('gallery_slider_title') ?>
        </h4>
        <div
            class="hidden lg:flex gap-x-2 order-1 lg:order-2 justify-center lg:justify-start"
        >
            <button
                id="nextButton"
                type="button"
                class="p-1 flex justify-center items-center border border-primary-700 rounded"
            >
                <svg
                    xmlns="http://www.w3.org/2000/svg"
                    width="20"
                    height="20"
                    viewBox="0 0 20 20"
                    fill="none"
                >
                    <path
                        d="M7.5 15L12.5 10L7.5 5"
                        stroke="#444859"
                        stroke-width="1.5"
                        stroke-linecap="round"
                        stroke-linejoin="round"
                    />
                </svg>
            </button>
            <button
                id="prevButton"
                type="button"
                class="p-1 flex justify-center items-center border border-primary-700 rounded"
            >
                <svg
                    xmlns="http://www.w3.org/2000/svg"
                    width="20"
                    height="20"
                    viewBox="0 0 20 20"
                    fill="none"
                >
                    <path
                        d="M12.5 15L7.5 10L12.5 5"
                        stroke="#444859"
                        stroke-width="1.5"
                        stroke-linecap="round"
                        stroke-linejoin="round"
                    />
                </svg>
            </button>
        </div>
    </div>

    <swiper-container class="p-4 lg:p-0 w-full rounded" dir="ltr" loop="true">
        <?php

        // ACF - Gallery fields.
        $images = get_field('image_gallery_slider');

        if ($images) :
            // Grab each image.
            foreach ($images

                     as $image) :
                $image_id = $image['ID'];
                $image_src = $image['url'];
                $image_caption = $image['caption'];

                ?>
                <swiper-slide
                ><?php echo wp_get_attachment_image( $image_id, 'full' ); ?></swiper-slide>
            <?php
            endforeach;
        endif;
        ?>
        <!-- <swiper-slide
        ><img
                    class="rounded min-w-96"
                    src="<?php /*bloginfo('template_url'); */?>/img/newsDetails/sliderSection/2.png"
                    alt=""
            /></swiper-slide>
        <swiper-slide
        ><img
                    class="rounded min-w-96"
                    src="<?php /*bloginfo('template_url'); */?>/img/newsDetails/sliderSection/3.png"
                    alt=""
            /></swiper-slide>
        <swiper-slide
        ><img
                    class="rounded min-w-96"
                    src="<?php /*bloginfo('template_url'); */?>/img/newsDetails/sliderSection/4.png"
                    alt=""
            /></swiper-slide>
        <swiper-slide
        ><img
                    class="rounded min-w-96"
                    src="<?php /*bloginfo('template_url'); */?>/img/newsDetails/sliderSection/5.png"
                    alt=""
            /></swiper-slide>-->
    </swiper-container>

    <div
        class="flex lg:hidden gap-x-2 order-1 lg:order-2 justify-center lg:justify-start"
    >
        <button
            id="nextButtonMob"
            type="button"
            class="p-1 flex justify-center items-center border border-primary-700 rounded"
        >
            <svg
                xmlns="http://www.w3.org/2000/svg"
                width="20"
                height="20"
                viewBox="0 0 20 20"
                fill="none"
            >
                <path
                    d="M7.5 15L12.5 10L7.5 5"
                    stroke="#444859"
                    stroke-width="1.5"
                    stroke-linecap="round"
                    stroke-linejoin="round"
                />
            </svg>
        </button>
        <button
            id="prevButtonMob"
            type="button"
            class="p-1 flex justify-center items-center border border-primary-700 rounded"
        >
            <svg
                xmlns="http://www.w3.org/2000/svg"
                width="20"
                height="20"
                viewBox="0 0 20 20"
                fill="none"
            >
                <path
                    d="M12.5 15L7.5 10L12.5 5"
                    stroke="#444859"
                    stroke-width="1.5"
                    stroke-linecap="round"
                    stroke-linejoin="round"
                />
            </svg>
        </button>
    </div>
</section>
<script src="<?php bloginfo('template_url'); ?>/js/main.js"></script>
<script src="<?php bloginfo('template_url'); ?>/js/index/swiper-element-bundle.min.js"></script>
<script>
    const sliderInterval = document.getElementById("sliderInterval");
    const nextbtn = document.getElementById("next");
    const previusbtn = document.getElementById("previus");

    const images = [


        <?php

        // ACF - Gallery fields.
        $images2 = get_field('main_gallery_slider');

        if ($images2) :
        // Grab each image.
        foreach ($images2

        as $image2) :
        $image_id = $image2['ID'];
        $image_src = $image2['url'];
        $image_caption = $image2['caption'];

        ?>

        'url("<?php echo $image_src ?>")',
        <?php endforeach; endif; ?>
    ];

    let currentIndex = 0;
    sliderInterval.style.backgroundImage = images[0];

    // function changeBackground() {
    //   sliderInterval.style.backgroundImage = images[currentIndex];
    //   currentIndex = (currentIndex + 1) % images.length;
    // }

    nextbtn.addEventListener("click", () => {
        currentIndex++;
        if (currentIndex == images.length) {
            currentIndex = 0;
            sliderInterval.style.backgroundImage = images[currentIndex];
        }
        sliderInterval.style.backgroundImage = images[currentIndex];
    });
    previusbtn.addEventListener("click", () => {
        currentIndex--;
        if (currentIndex < 0) {
            currentIndex = images.length - 1;
            sliderInterval.style.backgroundImage = images[currentIndex];
        }
        sliderInterval.style.backgroundImage = images[currentIndex];
    });

    const swiperEl = document.querySelector("swiper-container");
    const nextButton = document.querySelector("#nextButton");
    const prevButton = document.querySelector("#prevButton");

    const nextButtonMob = document.querySelector("#nextButtonMob");
    const prevButtonMob = document.querySelector("#prevButtonMob");

    nextButton.addEventListener("click", () => {
        swiperEl.swiper.slideNext();
    });
    prevButton.addEventListener("click", () => {
        swiperEl.swiper.slidePrev();
    });

    nextButtonMob.addEventListener("click", () => {
        swiperEl.swiper.slideNext();
    });
    prevButtonMob.addEventListener("click", () => {
        swiperEl.swiper.slidePrev();
    });

    Object.assign(swiperEl, {
        slidesPerView: 1,

        breakpoints: {
            992: {
                slidesPerView: 3,
                spaceBetween: 20,
            },
        },
    });
    swiperEl.initialize();


    let slideIndex = 0;
    showSlides();

    function showSlides() {
        let i;
        let slides = document.getElementsByClassName("mySlides2");
        let dots = document.getElementsByClassName("dot");
        for (i = 0; i < slides.length; i++) {
            slides[i].style.display = "none";
        }
        slideIndex++;
        if (slideIndex > slides.length) {slideIndex = 1}
        for (i = 0; i < dots.length; i++) {
            dots[i].className = dots[i].className.replace(" active", "");
        }
        slides[slideIndex-1].style.display = "block";
        dots[slideIndex-1].className += " active";
        setTimeout(showSlides, 2000); // Change image every 2 seconds
    }

</script>
<?php get_footer(); ?>
