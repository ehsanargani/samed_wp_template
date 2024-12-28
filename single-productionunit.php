<?php get_header(); ?>
<!-- content -->
<section class="relative lg:mb-10">
    <!-- breadCrumbs & title -->
    <div class="py-7 lg:pt-10 lg:pb-0 p-4 lg:px-0 container mx-auto">
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
            <a class="text-xs VazirmatnBold text-neutral-800" href="https://test3.faradev.ir/samed/fa/%d8%af%d8%b1%d8%a8%d8%a7%d8%b1%d9%87-%d9%85%d8%a7-2/"
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
                        stroke-width="1.5"
                        stroke-linecap="round"
                        stroke-linejoin="round"
                    />
                </svg>
            </i>
            <a class="text-xs VazirmatnBold text-neutral-800" href="https://test3.faradev.ir/samed/fa/%d9%88%d8%a7%d8%ad%d8%af-%d9%87%d8%a7%db%8c-%d8%aa%d9%88%d9%84%db%8c%d8%af%db%8c/"
            >واحدهای تولیدی</a
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
                class="text-xs VazirmatnBold max-w-60 truncate text-secondry-500"
                href="<?php the_permalink(); ?>"
            ><?php the_title() ?></a
            >
        </div>
        <div>
            <h1 class="text-xl lg:text-[32px] VazirmatnBold text-neutral-800">
                <?php the_title() ?>
            </h1>
            <p
                class="text-sm lg:text-base VazirmatnLight text-neutral-800 mt-4 lg:mt-6 lg:w-2/5"
            >
                <?php the_excerpt(); ?>
            </p>
        </div>
    </div>
    <!-- breadCrumbs & title -->
</section>

<section class="px-4 lg:p-0 xl:container mx-auto pb-20 lg:pb-[180px]">
    <div class="grid grid-cols-1 lg:grid-cols-2 gap-6">
        <?php
        $tolidigalleryimages=get_field('toliddi_gallery');
        if($tolidigalleryimages):
            foreach ($tolidigalleryimages

                     as $tolidigalleryimage) :
                $image_id = $tolidigalleryimage['ID'];
                $image_src = $tolidigalleryimage['url'];
                $image_caption = $tolidigalleryimage['caption'];
                ?>
                <img class="rounded" src="<?php echo $image_src; ?>" alt="" />
            <?php endforeach; endif; ?>
    </div>

    <hr class="border-secondry-500 my-8" />

    <div
        class="text-sm lg:text-base VazirmatnLight text-neutral-800 text-justify"
    >
        <?php the_content(); ?>
    </div>
</section>

<!-- content -->
<?php get_footer(); ?>

