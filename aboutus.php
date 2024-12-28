<?php  /* Template Name: درباره ما  */ ?>
<?php get_header() ?>
<!-- content -->
<section>
    <!-- breadCrumbs & title & buttoms -->
    <div class="py-7 lg:py-10 mb-10 p-4 container mx-auto">
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
            <a
                class="text-xs VazirmatnBold max-w-40 truncate text-secondry-500"
                href="#"
            ><?php the_title(); ?></a
            >
        </div>
        <div>
            <h1 class="text-xl lg:text-[32px] VazirmatnMedium text-neutral-800">
                <?php the_title(); ?>
            </h1>

            <?php $query = new wp_Query(array('post_type' => 'aboutus_setting')); ?>
            <?php if ($query->have_posts()) : while ($query->have_posts()) :
            $query->the_post(); ?>
            <div class="text-sm lg:text-base VazirmatnLight text-neutral-800 mt-7">
               <?php the_field('about_us_p_1') ?>
            </div>
        </div>
        <div class="flex gap-2 mt-10 justify-center lg:justify-start">
            <a
                href="<?php the_field('contactus_link') ?>"
                class="px-4 py-2 lg:py-4 lg:px-8 lg:flex justify-center items-center border rounded text-secondry-500 border-secondry-500 cursor-pointer"
            >صدای مشتریان</a
            >
            <a
                href="#"
                class="px-4 py-2 lg:py-4 lg:px-8 flex justify-center items-center border rounded bg-secondry-500 text-white border-secondry-500 hover:bg-transparent hover:text-secondry-500 transition-all duration-500 cursor-pointer"
            >تماس با واحد فروش</a
            >
        </div>
    </div>
    <!-- breadCrumbs & title & buttoms -->
</section>

<section class="bg-primary-900 p-4 py-16">
    <div class="container mx-auto">
        <h2 class="text-white text-xl lg:text-[32px] mb-10"><?php the_field('osool_title') ?></h2>
        <div class="flex flex-col lg:flex-row gap-6">
            <!-- img -->
            <div class="basis-1/2">
                <img
                    class="w-full h-full rounded"
                    src="<?php the_field('osool_image') ?>"
                    alt=""
                />
            </div>
            <!-- img -->

            <!-- details -->
            <div class="basis-1/2 flex flex-col gap-y-4 justify-between">
                <div class="text-sm lg:text-base VazirmatnLight  text-neutral-50 mt-2">
                    <?php the_field('osool_text') ?>
                </div>

            </div>
            <!-- details -->
        </div>
    </div>
</section>

<section class="p-4 container mx-auto py-20">
    <h2 class="text-neutral-800 text-xl lg:text-2xl mb-6 VazirmatnBold">
        معرفی شرکت تولیدی و صنعتی سامد
    </h2>
    <div class="text-neutral-800 text-sm lg:text-base text-justify">
        <?php the_field('introduction') ?>
    </div>
</section>

<section class="bg-primary-100 py-5 lg:pt-10 lg:pb-0">
    <div class="p-4 lg:p-0 container mx-auto lg:border-e border-secondry-500">
        <!-- title & line -->
        <div class="flex lg:h-[55px]">
            <div class="basis-3/5 h-full">
                <h3
                    class="text-neutral-800 text-xl lg:text-2xl VazirmatnBold w-full h-full flex items-end"
                >
                    جدول زمانی افتخارات ما
                </h3>
            </div>
            <!-- line -->
            <div
                class="hidden lg:block basis-2/5 border-t border-s border-secondry-500 w-full relative"
            >
                <div
                    class="w-5 h-5 absolute bg-secondry-500 rounded-full -right-[10px] bottom-0"
                ></div>
            </div>
            <!-- /line -->
        </div>
        <!-- title & line -->
        <div class="mt-3 text-base lg:text-xl text-neutral-800 mb-12 w-5/6">
        <?php the_field('adwords_text') ?>
        </div>
        <a
            id="hoverIcone"
            class="flex justify-center items-center bg-primary-700 text-white px-8 py-2 rounded w-full lg:w-fit hover:bg-transparent hover:text-primary-700 border border-primary-700 transition-all duration-300"
            href="<?php the_field('adwords_page_link') ?>"
        >
            مشاهده‌ی افتخارات
            <i class="ms-2">
                <svg
                    xmlns="http://www.w3.org/2000/svg"
                    width="25"
                    height="24"
                    viewBox="0 0 25 24"
                    fill="none"
                >
                    <path
                        class="transition-all duration-300"
                        d="M7.5 17V7M7.5 7H17.5M7.5 7L17.5 17"
                        stroke="white"
                        stroke-width="1.5"
                        stroke-linecap="round"
                        stroke-linejoin="round"
                    />
                </svg>
            </i>
        </a>
        <div class="lg:pb-12"></div>
    </div>
</section>

<section class="bg-white pb-10 lg:pb-24">
    <div class="p-4 lg:p-0 container mx-auto">
        <!-- line -->
        <div
            class="hidden lg:block h-24 border-b border-e border-secondry-500"
        ></div>
        <!-- line -->

        <!-- lists -->
        <div class="flex flex-col lg:flex-row gap-6 mt-10 lg:mt-24">

            <div class="basis-1/2 flex flex-col gap-y-10">
                <!-- list 1 -->
                <div>
                    <h3
                            class="text-neutral-800 text-xl lg:text-2xl VazirmatnMedium mb-5"
                    >
                        محصولات و تولیدات ما
                    </h3>
                  <?php the_field('product_text') ?>
                </div>
                <!-- list 2 -->
                <div>
                    <h3
                            class="text-neutral-800 text-xl lg:text-2xl VazirmatnMedium mb-5"
                    >
                        رزین های، فرم اوره (UFC) ، فرمالین و… 
                    </h3>
                    <?php the_field('product_text_3') ?>
                </div>
            </div>
            <!-- list 3 -->
            <div class="basis-1/2">
                <h3
                        class="text-neutral-800 text-xl lg:text-2xl VazirmatnMedium mb-5"
                >
                    محصولات و تولیدات ما
                </h3>
                <?php the_field('product_text_2') ?>
            </div>

        </div>
    </div>
</section>

<section class="bg-primary-100 pt-10 pb-20 lg:pt-16 lg:pb-[180px]">
    <div class="p-4 lg:p-0 container mx-auto">
        <!-- list -->
        <?php the_field('standards') ?>
        <hr class="my-8 border-primary-500" />
        <div>
            <h3
                class="text-neutral-800 text-base lg:text-xl VazirmatnMedium mb-5"
            >
                فهرست  مجوزها و پروانه‌ها:
            </h3>
            <?php the_field('permissions') ?>
        </div>
    </div>
</section>
<?php endwhile; endif; ?>
<!-- content -->


<?php get_footer() ?>
