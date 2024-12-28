<?php /* Template Name: خدمات  */ ?>
<?php get_header(); ?>
<!-- content -->
<section
    class="w-full h-auto bg-cover bg-center bg-no-repeat relative"
    style="background-image: url(<?php the_post_thumbnail_url(); ?>)"
>
    <?php $query = new wp_Query(array('post_type' => 'service_setting')); ?>
    <?php if ($query->have_posts()) : while ($query->have_posts()) :
    $query->the_post(); ?>
    <div class="bg-[#12122599] w-full h-full absolute z-0"></div>

    <div class="px-4 lg:px-28 lg:mx-auto relative pt-10 lg:pt-36">
        <h1
            class="text-white VazirmatnBold mb-2 text-[24px] lg:text-[40px] w-4/5 lg:w-full"
        >
           <?php the_field('service_title') ?>
        </h1>
        <div class="flex flex-col lg:flex-row w-1/2 h-[474px] lg:min-h-[450px]">
            <h3
                class="lg:basis-72 text-white text-xl lg:text-[32px] VazirmatnRegular"
            >
                <?php the_field('service_subtitle') ?>
            </h3>
            <div class="w-full h-svh lg:h-auto mt-4 borderGradient"></div>
        </div>
    </div>
</section>

<section class="bg-white">
    <div class="px-4 lg:px-28 lg:mx-auto h-auto">
        <div class="h-12 lg:h-16 flex">
            <div class="border-b border-e border-secondry-500 h-full w-full"></div>
            <div class="border-b border-secondry-500 h-full w-full"></div>
        </div>
        <div class="mt-8 mb-20 flex flex-col justify-center items-center">
            <div class="text-center text-neutral-800 text-base lg:text-xl lg:px-20">
                <?php the_field('service_desc') ?>
            </div>
            <a
                href="<?php the_field('aboutus_page_link') ?>"
                class="flex mt-5 text-secondry-500 w-fit text-sm justify-center items-center VazirmatnBold aService hover:text-neutral-800 transition-all duration-200 hover:scale-105"
            >
                اطلاعات بیشتر درباره‌ی ما
                <i class="ms-2">
                    <svg
                        xmlns="http://www.w3.org/2000/svg"
                        width="20"
                        height="21"
                        viewBox="0 0 20 21"
                        fill="none"
                    >
                        <path
                            d="M5.83337 14.6666V6.33325M5.83337 6.33325H14.1667M5.83337 6.33325L14.1667 14.6666"
                            stroke="#D80100"
                            stroke-width="1.5"
                            stroke-linecap="round"
                            stroke-linejoin="round"
                        />
                    </svg>
                </i>
            </a>
        </div>
    </div>
    <div class="flex bg-primary-100 justify-center items-center">
        <img src="<?php bloginfo('template_url'); ?>/img/service/banner.png" alt="" />
    </div>

    <div class="px-4 lg:px-28 pb-14 lg:pb-24 lg:mx-auto h-auto">
        <div class="my-6 lg:mt-12 lg:mb-6">
            <h2 class="text-neutral-900 text-xl lg:text-2xl VazirmatnBold">
              <?php the_field('service_title_1') ?>
            </h2>
        </div>
        <div class="flex flex-col lg:flex-row gap-x-6 gap-y-4 lg:gap-y-0">
            <div
                class="basis-1/2 order-2 lg:order-1 flex flex-col justify-between gap-4"
            >
                <div class="text-neutral-800 text-sm lg:text-base">
                  <?php the_field('service_desc_1') ?>
                </div>
                <a
                    id="hoverIcone"
                    href="<?php the_field('service_link_1') ?>"
                    class="transition-all duration-200 lg:w-fit px-5 flex justify-center items-center py-2 rounded border border-primary-700 text-white bg-primary-700 hover:bg-transparent hover:text-primary-700"
                >
                    مشاهده‌ی سایت
                    <i class="ms-2">
                        <svg
                            xmlns="http://www.w3.org/2000/svg"
                            width="24"
                            height="24"
                            viewBox="0 0 24 24"
                            fill="none"
                        >
                            <path
                                class="transition-all duration-200"
                                d="M7 17V7M7 7H17M7 7L17 17"
                                stroke="white"
                                stroke-width="1.5"
                                stroke-linecap="round"
                                stroke-linejoin="round"
                            />
                        </svg>
                    </i>
                </a>
            </div>
            <div class="basis-1/2 order-1 lg:order-2">
                <img
                    class="rounded lg:h-[350px] w-full"
                    src="<?php the_field('تصویر_خدمت_1') ?>"
                    alt=""
                />
            </div>
        </div>
    </div>
</section>

<section class="bg-primary-900 pb-40 lg:pb-48">
    <div class="flex justify-between">
        <div class="hidden lg:block ps-28">
            <div
                class="me-4 h-[154px] w-[53px] border-s-2 border-b-2 border-white relative"
            >
                <div
                    class="h-6 w-6 absolute -bottom-3 -left-6 bg-white rounded-full"
                ></div>
            </div>
        </div>
        <div class="flex">
            <div class="mt-6 lg:mt-16 p-4">
                <div class="mb-8">
                    <h3 class="mb-6 text-white VazirmatnBold text-2xl lg:text-[32px]">
                       <?php the_field('service_title_2') ?>
                    </h3>
                    <h3 class="text-white text-xl lg:text-2xl mb-4">
                        <?php the_field('service_subtitle_2') ?>
                    </h3>
                    <div class="text-white text-sm lg:text-base VazirmatnLight">
                        <?php the_field('service_desc_2') ?>
                    </div>
                </div>
                <div class="flex flex-col lg:grid grid-cols-2 gap-4">
                    <img class="rounded" src="<?php the_field('service_image_2') ?>" alt="" />
                    <img
                        class="rounded"
                        src="<?php the_field('image_service_2_2') ?>"
                        alt=""
                    />
                </div>
            </div>

            <div class="hidden lg:block">
                <img class="rotate-180" src="<?php bloginfo('template_url'); ?>/img/service/Earth.png" alt="" />
            </div>
        </div>
    </div>
</section>
<!-- content -->
<?php endwhile; endif; ?>
<?php get_footer(); ?>
