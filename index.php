<?php get_header(); ?>
<!-- content -->
<style>
    .image_hero{
        background-image:url('<?php bloginfo('template_url'); ?>/img/DJI_0013.webp');
    }
</style>
<section
    class="w-full h-auto bg-cover bg-center bg-no-repeat relative image_hero" data-bgimage="<?php bloginfo('template_url'); ?>/img/DJI_0013.webp"
>
  
    <div class="bg-[#12122599] opacity-100 w-full h-full absolute z-0"></div>

    <div class="lg:px-28 lg:mx-auto relative z-10 lg:h-3/5 h-2/6 pt-12">
        <div class="h-3/4 px-2 lg:ps-0">
            <h1 class="text-xl lg:text-4xl text-white VazirmatnMedium">
                چسب مشهد
            </h1>
            <h2
                class="text-2xl lg:text-5xl text-white lg:mt-2 VazirmatnExtraBold"
            >
                اتصال ناگسستنی در صنایع ایران
            </h2>
            <h3 class="text-sm lg:text-lg text-white">
                شرکت تولیدی و صنعتی سامد
            </h3>
            <h3 class="text-sm lg:text-lg text-white">۹۸-۵۱-۳۱۶۶۹+</h3>
        </div>
    </div>

    <div
            id="closerAriaSlider"
            class="fixed w-full h-full bg-[#000000b6] top-0 right-0 z-20 hidden justify-center items-center"
    >
       
        <swiper-container
                id="pol"
                class="mySwiper text-white h-auto lg:h-2/3 w-3/4 cursor-grab hidden"
                pagination="true"
                loop="true"
                pagination-type="fraction"
                dir="ltr"
        >
            
            
    
             <?php $query = new wp_Query(array('post_type' => 'slider_header_main')); ?>
            <?php if ($query->have_posts()) : while ($query->have_posts()) :
            $query->the_post(); ?>
            
            
            <swiper-slide class="flex justify-center items-center"
            >   <img class="m-1 basis-1/4 rounded cursor-pointer" src="<?php the_post_thumbnail_url(); ?>" alt="" srcset=""></swiper-slide>
 <?php endwhile; endif;  ?>
    

        </swiper-container>
 
        <img
                src=""
                class="hidden showSingleImage h-auto lg:h-2/3 w-3/4"
                alt=""
        />
       
    
        
    </div>

    <div
            class="lg:px-28 lg:mx-auto relative lg:h-2/5 h-auto pt-12 pb-10 lg:py-0"
    >
        <div class="flex flex-col lg:flex-row">
            <div
                    id="playCarusel"
                    class="flex lg:basis-1/6 items-center text-white text-lg order-last lg:order-none m-5 lg:m-0 cursor-pointer"
            >
                <i
                        class="bg-white hover:bg-primary-700 hover:cursor-pointer transition-all duration-500 rounded-full me-2 p-2"
                ><svg
                            xmlns="http://www.w3.org/2000/svg"
                            width="40"
                            height="41"
                            viewBox="0 0 40 41"
                            fill="none"
                    >
                        <path
                                d="M12.7737 6.08141C12.5743 5.93946 12.3397 5.85512 12.0956 5.83764C11.8515 5.82015 11.6072 5.87019 11.3897 5.98228C11.1721 6.09437 10.9896 6.26418 10.8621 6.4731C10.7347 6.68202 10.6671 6.922 10.667 7.16674V33.8334C10.6671 34.0781 10.7347 34.3181 10.8621 34.527C10.9896 34.736 11.1721 34.9058 11.3897 35.0179C11.6072 35.13 11.8515 35.18 12.0956 35.1625C12.3397 35.145 12.5743 35.0607 12.7737 34.9187L31.4403 21.5854C31.6132 21.4621 31.7541 21.2992 31.8513 21.1105C31.9485 20.9217 31.9992 20.7124 31.9992 20.5001C31.9992 20.2877 31.9485 20.0785 31.8513 19.8897C31.7541 19.7009 31.6132 19.5381 31.4403 19.4147L12.7737 6.08141Z"
                                fill="#D80100"
                        /></svg
                    ></i>
                نمایش همه
            </div>
            <div
            class="lg:basis-5/6 overflow-x-auto flex h-24 sm:h-28 md:h-32 lg:h-auto"
            id="showImages"
          >
              
                <?php $query = new wp_Query(array('post_type' => 'slider_header_main')); ?>
            <?php if ($query->have_posts()) : while ($query->have_posts()) :
            $query->the_post(); ?>
        <a class="example-image-link" href="<?php the_post_thumbnail_url(); ?>" data-lightbox="example-set">
             
  <img
              class="m-1 basis-1/4 rounded cursor-pointe example-image"
              src="<?php the_post_thumbnail_url(); ?>" width="200px" height="100px" fetchpriority="high"
              alt=""
              srcset=""
            /></a>
            <?php endwhile; endif; ?>
            
          </div>
        </div>
    </div>
</section>


<section class="bg-primary-900 w-full h-auto lg:pb-28">
    <div class="lg:px-28 lg:mx-auto">
        <div class="flex h-16 lg:h-1/6">
            <div class="basis-2/4 border-secondry-500 border-b border-e"></div>
            <div class="basis-2/4 border-secondry-500 border-b"></div>
        </div>

        <div class="flex lg:flex-row flex-col h-auto lg:h-3/6 mt-8">
            <div
                class="lg:basis-2/6 flex flex-col justify-between lg:me-6 lg:order-1 order-2 pt-5 px-6 lg:pt-0 lg:px-0"
            >
                <div>
                    <h2 class="VazirmatnBold text-lg lg:text-2xl text-white">
                        واحدهای تولیدی
                    </h2>
                    <p class="text-white text-sm pt-2">
                        لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ، و با
                        استفاده از طراحان گرافیک است، چاپگرها
                    </p>
                </div>

                <div class="flex py-6 lg:py-0 h-auto">
                    <ul class="w-full grid gap-2">
                        <?php
                        // Example argument that defines three posts per page.
                        $args = array(
                                'post_type' => 'productionunit',
                            'posts_per_page' => 5,


                        );

                        // Variable to call WP_Query.
                        $the_query = new WP_Query( $args );

                        if ( $the_query->have_posts() ) :

                        // Start the Loop
                        while ( $the_query->have_posts() ) : $the_query->the_post();
                        ?>
                        <li
                            id="hoverCustomColors"
                            class="py-2 rounded text-white lg:hover:text-white hover:text-primary-700 text-sm lg:text-base transition-all duration-200 hover:bg-white lg:hover:bg-secondry-500 hover:cursor-pointer"
                        >
                            <a href=" <?php the_permalink(); ?>" class="flex items-center">
                               <?php the_title(); ?>
                                <i class="ms-2">
                                    <svg
                                        class="stroke-white"
                                        xmlns="http://www.w3.org/2000/svg"
                                        width="24"
                                        height="24"
                                        viewBox="0 0 24 24"
                                        fill="none"
                                    >
                                        <path
                                            d="M7 17V7M7 7H17M7 7L17 17"
                                            stroke=""
                                            stroke-width="1.5"
                                            stroke-linecap="round"
                                            stroke-linejoin="round"
                                        /></svg
                                    ></i>
                            </a>
                        </li>
                        <?php


                        endwhile;
                        endif;
                        wp_reset_postdata();
                        ?>
                    </ul>
                </div>
            </div>

            <div
                id="sliderInterval"
                class="lg:order-2 order-1 transition-all duration-700 min-h-60 lg:min-h-full rounded mt-2 lg:basis-4/6 bg-cover bg-no-repeat bg-center"
                style="background-image: url(<?php bloginfo('template_url'); ?>/img/interval\ slider/1.jpg)"
            ></div>
        </div>
    </div>
</section>

<section class="bg-[#FFF] w-auto h-auto">
    <div class="lg:px-28 lg:mx-auto pb-36">
        <div class="px-4 mx-auto h-40 flex">
            <div class="h-5/6 w-24 border-s-2 border-b-2 border-black relative">
                <div
                    class="h-6 w-6 absolute -bottom-3 -left-3 bg-black rounded-full"
                ></div>
            </div>
            <?php $query = new wp_Query(array('post_type' => 'main_page')); ?>
            <?php if ($query->have_posts()) : while ($query->have_posts()) :
            $query->the_post(); ?>
            <div class="pb-4 lg:pb-3 flex items-end w-full">
                <div class="flex items-center w-full ms-8">
                    <div class="basis-1/2">
                        <a
                            href="#"
                            class="me-2 lg:me-5 text-base lg:text-2xl text-secondry-500 VazirmatnBold"
                        >اخبار</a
                        >
                        <a
                            href="<?php the_field('magezine_page_link') ?>"
                            class="text-base lg:text-2xl VazirmatnBold text-neutral-500 hover:text-black transition-colors duration-500"
                        >ماهنامه</a
                        >
                    </div>
                    <div id="showAll" class="flex justify-end basis-1/2">
                        <a
                            href="<?php the_field('news_page_link') ?>"
                            class="flex text-neutral-800 text-sm VazirmatnMedium transition-all duration-500"
                        >
                            نمایش همه
                            <i class="ms-2">
                                <svg
                                    xmlns="http://www.w3.org/2000/svg"
                                    width="20"
                                    height="20"
                                    viewBox="0 0 20 20"
                                    fill="none"
                                >
                                    <path
                                        class="transition-all duration-500"
                                        d="M5.83301 14.1668V5.8335M5.83301 5.8335H14.1663M5.83301 5.8335L14.1663 14.1668"
                                        stroke="#2E303B"
                                        stroke-width="1.5"
                                        stroke-linecap="round"
                                        stroke-linejoin="round"
                                    />
                                </svg>
                            </i>
                        </a>
                    </div>
                </div>
            </div>
            <?php endwhile; endif; ?>
        </div>

        <div
            class="mt-5 min-h-96 overflow-y-hidden overflow-x-auto flex lg:grid lg:grid-cols-4 lg:gap-6"
        >

            <?php
            // Example argument that defines three posts per page.
            $args = array(
                'posts_per_page' => 4,
                'post_type' => 'news',

            );

            // Variable to call WP_Query.
            $the_query = new WP_Query( $args );

            if ( $the_query->have_posts() ) :

            // Start the Loop
            while ( $the_query->have_posts() ) : $the_query->the_post();
            ?>
            <div
                id="animated"
                class="animated border border-pirmary-300 rounded p-4 m-2 lg:m-0"
            >
                <div class="h-5/6 bg-cover bg-no-repeat">
                    <div
                        class="bg-cover bg-center h-40 w-52 lg:w-auto rounded transition-all duration-700"
                        style="background-image: url(<?php the_post_thumbnail_url(); ?>)"
                    ></div>
                    <p class="pt-3 text-base transition-all duration-300">
                       <?php the_title(); ?>
                    </p>
                </div>

                <div class="h-1/6 flex items-end">
                    <a
                        href="<?php the_permalink(); ?>"
                        class="flex text-primary-500 hover:text-secondry-500 py-2 transition-color duration-500"
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
            </div>
            <?php endwhile; endif; ?>

        </div>
    </div>
</section>
<?php $query = new wp_Query(array('post_type' => 'main_page')); ?>
<?php if ($query->have_posts()) : while ($query->have_posts()) :
$query->the_post(); ?>
<section class="w-full h-auto bg-primary-100">
    <div class="lg:px-28 lg:mx-auto py-20">
        <div class="grid lg:grid-cols-2 lg:gap-4 h-auto">
            <div
                class="relative grid grid-cols-2 grid-rows-1 md:grid-rows-2 md:grid-cols-1 h-full bg-green-400"
            >
                <div class="flex flex-col md:flex-row md:items-center">
                    <div
                        class="hoverAnimated relative hover:bg-primary-800 flex flex-col justify-between bg-secondry-500 h-52 md:basis-1/3 border border-white px-4 py-8 transition-all duration-500"
                    >
                        <i class="transition-all duration-500">
                            <svg
                                xmlns="http://www.w3.org/2000/svg"
                                width="40"
                                height="41"
                                viewBox="0 0 40 41"
                                fill="none"
                            >
                                <path
                                    d="M25 20.5C24.885 20.5 24.775 20.5263 24.6625 20.5338L23.5475 17.1912C23.998 16.8444 24.3632 16.3989 24.6149 15.8891C24.8667 15.3793 24.9984 14.8186 25 14.25C25 12.1825 23.3175 10.5 21.25 10.5C19.1825 10.5 17.5 12.1825 17.5 14.25C17.5 14.725 17.5975 15.1763 17.76 15.595L14.3575 18.5113C13.7941 18.1803 13.1534 18.004 12.5 18C10.4325 18 8.75 19.6825 8.75 21.75C8.75 23.8175 10.4325 25.5 12.5 25.5C13.0883 25.4987 13.668 25.3586 14.1919 25.091C14.7158 24.8234 15.1691 24.4359 15.515 23.96L20.0187 25.31C20.0162 25.375 20 25.435 20 25.5C20 28.2575 22.2425 30.5 25 30.5C27.7575 30.5 30 28.2575 30 25.5C30 22.7425 27.7575 20.5 25 20.5ZM21.25 13C21.9388 13 22.5 13.5612 22.5 14.25C22.5 14.9387 21.9388 15.5 21.25 15.5C20.5612 15.5 20 14.9387 20 14.25C20 13.5612 20.5612 13 21.25 13ZM12.5 23C11.8112 23 11.25 22.4388 11.25 21.75C11.25 21.0612 11.8112 20.5 12.5 20.5C13.1887 20.5 13.75 21.0612 13.75 21.75C13.75 22.4388 13.1887 23 12.5 23ZM16.2312 21.565C16.2128 21.168 16.1314 20.7764 15.99 20.405L19.3925 17.4887C19.9358 17.8059 20.551 17.9793 21.18 17.9925L22.2863 21.3125C21.6571 21.7245 21.129 22.2731 20.7413 22.9175L16.2312 21.565ZM25 28C23.6213 28 22.5 26.8787 22.5 25.5C22.5 24.1213 23.6213 23 25 23C26.3787 23 27.5 24.1225 27.5 25.5C27.5 26.8775 26.3787 28 25 28Z"
                                    fill="white"
                                />
                                <path
                                    d="M34.37 12.8299L20 4.44738L9.38 10.6424L8.12 8.48238L19.37 1.91988C19.5612 1.80831 19.7786 1.74951 20 1.74951C20.2214 1.74951 20.4388 1.80831 20.63 1.91988L35.63 10.6699L34.37 12.8299ZM20.63 39.0799L19.37 36.9199L33.75 28.5324V15.4999H36.25V29.2499C36.2501 29.4684 36.1929 29.6831 36.0841 29.8726C35.9753 30.0621 35.8187 30.2198 35.63 30.3299L20.63 39.0799ZM15.62 36.8924L4.37 30.3299C4.18128 30.2198 4.02472 30.0621 3.91593 29.8726C3.80715 29.6831 3.74994 29.4684 3.75 29.2499V11.7499H6.25V28.5324L16.88 34.7324L15.62 36.8924Z"
                                    fill="white"
                                />
                            </svg>
                        </i>
                        <h3
                            class="translate-y-14 text-xl transition-all duration-500 text-white"
                        >
                            <?php the_field('box_image_tiltle_1') ?>
                        </h3>
                        <p
                            class="opacity-0 transition-all duration-500 text-white text-xs"
                        >
                            <?php the_field('box_image_text_1') ?>

                        </p>
                    </div>
                    <div
                        class="hoverAnimated relative hover:bg-primary-800 flex flex-col justify-between bg-secondry-600 h-52 md:basis-1/3 border border-white px-4 py-8 transition-all duration-500"
                    >
                        <i class="transition-all duration-500">
                            <svg
                                xmlns="http://www.w3.org/2000/svg"
                                width="40"
                                height="41"
                                viewBox="0 0 40 41"
                                fill="none"
                            >
                                <path
                                    d="M25 20.5C24.885 20.5 24.775 20.5263 24.6625 20.5338L23.5475 17.1912C23.998 16.8444 24.3632 16.3989 24.6149 15.8891C24.8667 15.3793 24.9984 14.8186 25 14.25C25 12.1825 23.3175 10.5 21.25 10.5C19.1825 10.5 17.5 12.1825 17.5 14.25C17.5 14.725 17.5975 15.1763 17.76 15.595L14.3575 18.5113C13.7941 18.1803 13.1534 18.004 12.5 18C10.4325 18 8.75 19.6825 8.75 21.75C8.75 23.8175 10.4325 25.5 12.5 25.5C13.0883 25.4987 13.668 25.3586 14.1919 25.091C14.7158 24.8234 15.1691 24.4359 15.515 23.96L20.0187 25.31C20.0162 25.375 20 25.435 20 25.5C20 28.2575 22.2425 30.5 25 30.5C27.7575 30.5 30 28.2575 30 25.5C30 22.7425 27.7575 20.5 25 20.5ZM21.25 13C21.9388 13 22.5 13.5612 22.5 14.25C22.5 14.9387 21.9388 15.5 21.25 15.5C20.5612 15.5 20 14.9387 20 14.25C20 13.5612 20.5612 13 21.25 13ZM12.5 23C11.8112 23 11.25 22.4388 11.25 21.75C11.25 21.0612 11.8112 20.5 12.5 20.5C13.1887 20.5 13.75 21.0612 13.75 21.75C13.75 22.4388 13.1887 23 12.5 23ZM16.2312 21.565C16.2128 21.168 16.1314 20.7764 15.99 20.405L19.3925 17.4887C19.9358 17.8059 20.551 17.9793 21.18 17.9925L22.2863 21.3125C21.6571 21.7245 21.129 22.2731 20.7413 22.9175L16.2312 21.565ZM25 28C23.6213 28 22.5 26.8787 22.5 25.5C22.5 24.1213 23.6213 23 25 23C26.3787 23 27.5 24.1225 27.5 25.5C27.5 26.8775 26.3787 28 25 28Z"
                                    fill="white"
                                />
                                <path
                                    d="M34.37 12.8299L20 4.44738L9.38 10.6424L8.12 8.48238L19.37 1.91988C19.5612 1.80831 19.7786 1.74951 20 1.74951C20.2214 1.74951 20.4388 1.80831 20.63 1.91988L35.63 10.6699L34.37 12.8299ZM20.63 39.0799L19.37 36.9199L33.75 28.5324V15.4999H36.25V29.2499C36.2501 29.4684 36.1929 29.6831 36.0841 29.8726C35.9753 30.0621 35.8187 30.2198 35.63 30.3299L20.63 39.0799ZM15.62 36.8924L4.37 30.3299C4.18128 30.2198 4.02472 30.0621 3.91593 29.8726C3.80715 29.6831 3.74994 29.4684 3.75 29.2499V11.7499H6.25V28.5324L16.88 34.7324L15.62 36.8924Z"
                                    fill="white"
                                />
                            </svg>
                        </i>
                        <h3
                            class="translate-y-14 text-xl transition-all duration-500 text-white"
                        >
                            <?php the_field('box_image_tiltle_2') ?>
                        </h3>
                        <p
                            class="opacity-0 transition-all duration-500 text-white text-xs"
                        >
                            <?php the_field('box_image_text_2') ?>

                        </p>
                    </div>
                    <div
                        class="hoverAnimated relative hover:bg-primary-800 flex flex-col justify-between bg-secondry-700 h-52 md:basis-1/3 border border-white px-4 py-8 transition-all duration-500"
                    >
                        <i class="transition-all duration-500">
                            <svg
                                xmlns="http://www.w3.org/2000/svg"
                                width="40"
                                height="41"
                                viewBox="0 0 40 41"
                                fill="none"
                            >
                                <path
                                    d="M25 20.5C24.885 20.5 24.775 20.5263 24.6625 20.5338L23.5475 17.1912C23.998 16.8444 24.3632 16.3989 24.6149 15.8891C24.8667 15.3793 24.9984 14.8186 25 14.25C25 12.1825 23.3175 10.5 21.25 10.5C19.1825 10.5 17.5 12.1825 17.5 14.25C17.5 14.725 17.5975 15.1763 17.76 15.595L14.3575 18.5113C13.7941 18.1803 13.1534 18.004 12.5 18C10.4325 18 8.75 19.6825 8.75 21.75C8.75 23.8175 10.4325 25.5 12.5 25.5C13.0883 25.4987 13.668 25.3586 14.1919 25.091C14.7158 24.8234 15.1691 24.4359 15.515 23.96L20.0187 25.31C20.0162 25.375 20 25.435 20 25.5C20 28.2575 22.2425 30.5 25 30.5C27.7575 30.5 30 28.2575 30 25.5C30 22.7425 27.7575 20.5 25 20.5ZM21.25 13C21.9388 13 22.5 13.5612 22.5 14.25C22.5 14.9387 21.9388 15.5 21.25 15.5C20.5612 15.5 20 14.9387 20 14.25C20 13.5612 20.5612 13 21.25 13ZM12.5 23C11.8112 23 11.25 22.4388 11.25 21.75C11.25 21.0612 11.8112 20.5 12.5 20.5C13.1887 20.5 13.75 21.0612 13.75 21.75C13.75 22.4388 13.1887 23 12.5 23ZM16.2312 21.565C16.2128 21.168 16.1314 20.7764 15.99 20.405L19.3925 17.4887C19.9358 17.8059 20.551 17.9793 21.18 17.9925L22.2863 21.3125C21.6571 21.7245 21.129 22.2731 20.7413 22.9175L16.2312 21.565ZM25 28C23.6213 28 22.5 26.8787 22.5 25.5C22.5 24.1213 23.6213 23 25 23C26.3787 23 27.5 24.1225 27.5 25.5C27.5 26.8775 26.3787 28 25 28Z"
                                    fill="white"
                                />
                                <path
                                    d="M34.37 12.8299L20 4.44738L9.38 10.6424L8.12 8.48238L19.37 1.91988C19.5612 1.80831 19.7786 1.74951 20 1.74951C20.2214 1.74951 20.4388 1.80831 20.63 1.91988L35.63 10.6699L34.37 12.8299ZM20.63 39.0799L19.37 36.9199L33.75 28.5324V15.4999H36.25V29.2499C36.2501 29.4684 36.1929 29.6831 36.0841 29.8726C35.9753 30.0621 35.8187 30.2198 35.63 30.3299L20.63 39.0799ZM15.62 36.8924L4.37 30.3299C4.18128 30.2198 4.02472 30.0621 3.91593 29.8726C3.80715 29.6831 3.74994 29.4684 3.75 29.2499V11.7499H6.25V28.5324L16.88 34.7324L15.62 36.8924Z"
                                    fill="white"
                                />
                            </svg>
                        </i>
                        <h3
                            class="translate-y-14 text-xl transition-all duration-500 text-white"
                        >
                            <?php the_field('box_image_tiltle_3') ?>                        </h3>
                        <p
                            class="opacity-0 transition-all duration-500 text-white text-xs"
                        >
                            <?php the_field('box_image_text_3') ?>

                        </p>
                    </div>
                </div>
                <div class="flex flex-col md:flex-row md:items-center">
                    <div
                        class="hoverAnimated relative hover:bg-primary-800 flex flex-col justify-between bg-secondry-700 h-52 md:basis-1/3 border border-white px-4 py-8 transition-all duration-500"
                    >
                        <i class="transition-all duration-500">
                            <svg
                                xmlns="http://www.w3.org/2000/svg"
                                width="40"
                                height="41"
                                viewBox="0 0 40 41"
                                fill="none"
                            >
                                <path
                                    d="M25 20.5C24.885 20.5 24.775 20.5263 24.6625 20.5338L23.5475 17.1912C23.998 16.8444 24.3632 16.3989 24.6149 15.8891C24.8667 15.3793 24.9984 14.8186 25 14.25C25 12.1825 23.3175 10.5 21.25 10.5C19.1825 10.5 17.5 12.1825 17.5 14.25C17.5 14.725 17.5975 15.1763 17.76 15.595L14.3575 18.5113C13.7941 18.1803 13.1534 18.004 12.5 18C10.4325 18 8.75 19.6825 8.75 21.75C8.75 23.8175 10.4325 25.5 12.5 25.5C13.0883 25.4987 13.668 25.3586 14.1919 25.091C14.7158 24.8234 15.1691 24.4359 15.515 23.96L20.0187 25.31C20.0162 25.375 20 25.435 20 25.5C20 28.2575 22.2425 30.5 25 30.5C27.7575 30.5 30 28.2575 30 25.5C30 22.7425 27.7575 20.5 25 20.5ZM21.25 13C21.9388 13 22.5 13.5612 22.5 14.25C22.5 14.9387 21.9388 15.5 21.25 15.5C20.5612 15.5 20 14.9387 20 14.25C20 13.5612 20.5612 13 21.25 13ZM12.5 23C11.8112 23 11.25 22.4388 11.25 21.75C11.25 21.0612 11.8112 20.5 12.5 20.5C13.1887 20.5 13.75 21.0612 13.75 21.75C13.75 22.4388 13.1887 23 12.5 23ZM16.2312 21.565C16.2128 21.168 16.1314 20.7764 15.99 20.405L19.3925 17.4887C19.9358 17.8059 20.551 17.9793 21.18 17.9925L22.2863 21.3125C21.6571 21.7245 21.129 22.2731 20.7413 22.9175L16.2312 21.565ZM25 28C23.6213 28 22.5 26.8787 22.5 25.5C22.5 24.1213 23.6213 23 25 23C26.3787 23 27.5 24.1225 27.5 25.5C27.5 26.8775 26.3787 28 25 28Z"
                                    fill="white"
                                />
                                <path
                                    d="M34.37 12.8299L20 4.44738L9.38 10.6424L8.12 8.48238L19.37 1.91988C19.5612 1.80831 19.7786 1.74951 20 1.74951C20.2214 1.74951 20.4388 1.80831 20.63 1.91988L35.63 10.6699L34.37 12.8299ZM20.63 39.0799L19.37 36.9199L33.75 28.5324V15.4999H36.25V29.2499C36.2501 29.4684 36.1929 29.6831 36.0841 29.8726C35.9753 30.0621 35.8187 30.2198 35.63 30.3299L20.63 39.0799ZM15.62 36.8924L4.37 30.3299C4.18128 30.2198 4.02472 30.0621 3.91593 29.8726C3.80715 29.6831 3.74994 29.4684 3.75 29.2499V11.7499H6.25V28.5324L16.88 34.7324L15.62 36.8924Z"
                                    fill="white"
                                />
                            </svg>
                        </i>
                        <h3
                            class="translate-y-14 text-xl transition-all duration-500 text-white"
                        >
                            <?php the_field('box_image_tiltle_4') ?>
                        </h3>
                        <p
                            class="opacity-0 transition-all duration-500 text-white text-xs"
                        >
                            <?php the_field('box_image_text_4') ?>

                        </p>
                    </div>
                    <div
                        class="hoverAnimated relative hover:bg-primary-800 flex flex-col justify-between bg-secondry-600 h-52 md:basis-1/3 border border-white px-4 py-8 transition-all duration-500"
                    >
                        <i class="transition-all duration-500">
                            <svg
                                xmlns="http://www.w3.org/2000/svg"
                                width="40"
                                height="41"
                                viewBox="0 0 40 41"
                                fill="none"
                            >
                                <path
                                    d="M25 20.5C24.885 20.5 24.775 20.5263 24.6625 20.5338L23.5475 17.1912C23.998 16.8444 24.3632 16.3989 24.6149 15.8891C24.8667 15.3793 24.9984 14.8186 25 14.25C25 12.1825 23.3175 10.5 21.25 10.5C19.1825 10.5 17.5 12.1825 17.5 14.25C17.5 14.725 17.5975 15.1763 17.76 15.595L14.3575 18.5113C13.7941 18.1803 13.1534 18.004 12.5 18C10.4325 18 8.75 19.6825 8.75 21.75C8.75 23.8175 10.4325 25.5 12.5 25.5C13.0883 25.4987 13.668 25.3586 14.1919 25.091C14.7158 24.8234 15.1691 24.4359 15.515 23.96L20.0187 25.31C20.0162 25.375 20 25.435 20 25.5C20 28.2575 22.2425 30.5 25 30.5C27.7575 30.5 30 28.2575 30 25.5C30 22.7425 27.7575 20.5 25 20.5ZM21.25 13C21.9388 13 22.5 13.5612 22.5 14.25C22.5 14.9387 21.9388 15.5 21.25 15.5C20.5612 15.5 20 14.9387 20 14.25C20 13.5612 20.5612 13 21.25 13ZM12.5 23C11.8112 23 11.25 22.4388 11.25 21.75C11.25 21.0612 11.8112 20.5 12.5 20.5C13.1887 20.5 13.75 21.0612 13.75 21.75C13.75 22.4388 13.1887 23 12.5 23ZM16.2312 21.565C16.2128 21.168 16.1314 20.7764 15.99 20.405L19.3925 17.4887C19.9358 17.8059 20.551 17.9793 21.18 17.9925L22.2863 21.3125C21.6571 21.7245 21.129 22.2731 20.7413 22.9175L16.2312 21.565ZM25 28C23.6213 28 22.5 26.8787 22.5 25.5C22.5 24.1213 23.6213 23 25 23C26.3787 23 27.5 24.1225 27.5 25.5C27.5 26.8775 26.3787 28 25 28Z"
                                    fill="white"
                                />
                                <path
                                    d="M34.37 12.8299L20 4.44738L9.38 10.6424L8.12 8.48238L19.37 1.91988C19.5612 1.80831 19.7786 1.74951 20 1.74951C20.2214 1.74951 20.4388 1.80831 20.63 1.91988L35.63 10.6699L34.37 12.8299ZM20.63 39.0799L19.37 36.9199L33.75 28.5324V15.4999H36.25V29.2499C36.2501 29.4684 36.1929 29.6831 36.0841 29.8726C35.9753 30.0621 35.8187 30.2198 35.63 30.3299L20.63 39.0799ZM15.62 36.8924L4.37 30.3299C4.18128 30.2198 4.02472 30.0621 3.91593 29.8726C3.80715 29.6831 3.74994 29.4684 3.75 29.2499V11.7499H6.25V28.5324L16.88 34.7324L15.62 36.8924Z"
                                    fill="white"
                                />
                            </svg>
                        </i>
                        <h3
                            class="translate-y-14 text-xl transition-all duration-500 text-white"
                        >
                            <?php the_field('box_image_tiltle_4') ?>                        </h3>
                        <p
                            class="opacity-0 transition-all duration-500 text-white text-xs"
                        >
                            <?php the_field('box_image_text_4') ?>

                        </p>
                    </div>
                    <div
                        class="hoverAnimated relative hover:bg-primary-800 flex flex-col justify-between bg-secondry-500 h-52 md:basis-1/3 border border-white px-4 py-8 transition-all duration-500"
                    >
                        <i class="transition-all duration-500">
                            <svg
                                xmlns="http://www.w3.org/2000/svg"
                                width="40"
                                height="41"
                                viewBox="0 0 40 41"
                                fill="none"
                            >
                                <path
                                    d="M25 20.5C24.885 20.5 24.775 20.5263 24.6625 20.5338L23.5475 17.1912C23.998 16.8444 24.3632 16.3989 24.6149 15.8891C24.8667 15.3793 24.9984 14.8186 25 14.25C25 12.1825 23.3175 10.5 21.25 10.5C19.1825 10.5 17.5 12.1825 17.5 14.25C17.5 14.725 17.5975 15.1763 17.76 15.595L14.3575 18.5113C13.7941 18.1803 13.1534 18.004 12.5 18C10.4325 18 8.75 19.6825 8.75 21.75C8.75 23.8175 10.4325 25.5 12.5 25.5C13.0883 25.4987 13.668 25.3586 14.1919 25.091C14.7158 24.8234 15.1691 24.4359 15.515 23.96L20.0187 25.31C20.0162 25.375 20 25.435 20 25.5C20 28.2575 22.2425 30.5 25 30.5C27.7575 30.5 30 28.2575 30 25.5C30 22.7425 27.7575 20.5 25 20.5ZM21.25 13C21.9388 13 22.5 13.5612 22.5 14.25C22.5 14.9387 21.9388 15.5 21.25 15.5C20.5612 15.5 20 14.9387 20 14.25C20 13.5612 20.5612 13 21.25 13ZM12.5 23C11.8112 23 11.25 22.4388 11.25 21.75C11.25 21.0612 11.8112 20.5 12.5 20.5C13.1887 20.5 13.75 21.0612 13.75 21.75C13.75 22.4388 13.1887 23 12.5 23ZM16.2312 21.565C16.2128 21.168 16.1314 20.7764 15.99 20.405L19.3925 17.4887C19.9358 17.8059 20.551 17.9793 21.18 17.9925L22.2863 21.3125C21.6571 21.7245 21.129 22.2731 20.7413 22.9175L16.2312 21.565ZM25 28C23.6213 28 22.5 26.8787 22.5 25.5C22.5 24.1213 23.6213 23 25 23C26.3787 23 27.5 24.1225 27.5 25.5C27.5 26.8775 26.3787 28 25 28Z"
                                    fill="white"
                                />
                                <path
                                    d="M34.37 12.8299L20 4.44738L9.38 10.6424L8.12 8.48238L19.37 1.91988C19.5612 1.80831 19.7786 1.74951 20 1.74951C20.2214 1.74951 20.4388 1.80831 20.63 1.91988L35.63 10.6699L34.37 12.8299ZM20.63 39.0799L19.37 36.9199L33.75 28.5324V15.4999H36.25V29.2499C36.2501 29.4684 36.1929 29.6831 36.0841 29.8726C35.9753 30.0621 35.8187 30.2198 35.63 30.3299L20.63 39.0799ZM15.62 36.8924L4.37 30.3299C4.18128 30.2198 4.02472 30.0621 3.91593 29.8726C3.80715 29.6831 3.74994 29.4684 3.75 29.2499V11.7499H6.25V28.5324L16.88 34.7324L15.62 36.8924Z"
                                    fill="white"
                                />
                            </svg>
                        </i>
                        <h3
                            class="translate-y-14 text-xl transition-all duration-500 text-white"
                        >
                            <?php the_field('box_image_tiltle_5') ?>
                        </h3>
                        <p
                            class="opacity-0 transition-all duration-500 text-white text-xs"
                        >
                            <?php the_field('box_image_text_5') ?>

                        </p>
                    </div>
                </div>
            </div>

            <div class="relative h-auto px-2 pb-12">
                <div
                    class="absolute border-s border-b border-secondry-700 h-full lg:h-5/6 bottom-0 w-16"
                >
                    <div
                        class="absolute -bottom-3 right-14 w-6 h-6 bg-secondry-700 rounded-full"
                    ></div>
                </div>
                <div class="pt-8 lg:pt-0 px-2 lg:px-0">
                    <h2 class="text-3xl VazirmatnBold text-neutral-800">
                        <?php the_field('samed_title') ?>
                    </h2>
                    <p class="pt-7 lg:px-2 text-justify text-neutral-800">
                        <?php the_field('samed_text') ?>

                    </p>
                </div>
                <div class="flex absolute -bottom-3 right-24">
                    <h4 class="text-secondry-500 me-3 VazirmatnBold">
                        صدای مشتریان:
                    </h4>
                    <h4 class="text-secondry-500 VazirmatnBold"><?php the_field('customer_sound') ?></h4>
                </div>
            </div>
        </div>
    </div>
</section>

<section>
    <div class="lg:px-28 lg:mx-auto py-32">
        <div class="flex flex-col lg:flex-row gap-6 h-5/6 lg:h-3/6">
            <div
                class="basis-1/2 bg-cover bg-center bg-no-repeat relative imgHover rounded"
                style="background-image: url(<?php the_field('text_box_image_1') ?>)"
            >
                <div
                    class="absolute w-full h-full opacity-0 bg-[#0C0B1D99] transition-all duration-500 rounded"
                ></div>
                <div>
                    <div
                        class="bg-[#FFFFFFCC] h-16 absolute bottom-8 w-full pt-3 px-3 transition-all duration-500"
                    >
                        <h3
                            class="flex items-center justify-between text-2xl VazirmatnBold"
                        >
                            <?php the_field('text_box_title_1') ?>
                            <i
                                class="p-2 bg-secondry-500 rounded transition-all duration-500"
                            >
                                <svg
                                    xmlns="http://www.w3.org/2000/svg"
                                    width="24"
                                    height="24"
                                    viewBox="0 0 24 24"
                                    fill="none"
                                >
                                    <path
                                        d="M7 17V7M7 7H17M7 7L17 17"
                                        stroke="white"
                                        stroke-width="1.5"
                                        stroke-linecap="round"
                                        stroke-linejoin="round"
                                    />
                                </svg>
                            </i>
                        </h3>
                        <p
                            class="txet-neutral-800 text-sm opacity-0 transition-all duration-500 mt-5 mb-2"
                        >
                            <?php the_field('text_box_text_1') ?>
                        </p>
                    </div>
                </div>
            </div>
            <div
                class="basis-1/2 bg-cover bg-center bg-no-repeat relative imgHover rounded"
                style="background-image: url(<?php the_field('text_box_image_2') ?>)"
            >
                <div
                    class="absolute w-full h-full opacity-0 bg-[#0C0B1D99] transition-all duration-500 rounded"
                ></div>
                <div>
                    <div
                        class="bg-[#FFFFFFCC] h-16 absolute bottom-8 w-full pt-3 px-3 transition-all duration-500"
                    >
                        <h3
                            class="flex items-center justify-between text-2xl VazirmatnBold"
                        >
                            <?php the_field('text_box_title_2') ?>
                            <i
                                class="p-2 bg-secondry-500 rounded transition-all duration-500"
                            >
                                <svg
                                    xmlns="http://www.w3.org/2000/svg"
                                    width="24"
                                    height="24"
                                    viewBox="0 0 24 24"
                                    fill="none"
                                >
                                    <path
                                        d="M7 17V7M7 7H17M7 7L17 17"
                                        stroke="white"
                                        stroke-width="1.5"
                                        stroke-linecap="round"
                                        stroke-linejoin="round"
                                    />
                                </svg>
                            </i>
                        </h3>
                        <p
                            class="txet-neutral-800 text-sm opacity-0 transition-all duration-500 mt-5 mb-2"
                        >
                            <?php the_field('text_box_text_2') ?>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section
    class="bg-center bg-cover bg-no-repeat"
    style="background-image: url(<?php bloginfo('template_url'); ?>/img/ABCD2418.webp)"
>
    <div class="lg:px-28 lg:mx-auto py-20 lg:pb-0 bg-[#FFFFFFD9]">
        <div class="relative flex flex-col justify-center px-4 lg:px-0">
            <h2 class="mb-6 text-3xl text-neutral-800 text-center VazirmatnBold">
                <?php the_field('get_know_us_title') ?>
            </h2>
            <p class="lg:text-2xl text-neutral-700 text-center">
                <?php the_field('get_know_us_text') ?>

            </p>
            <div class="flex justify-center">
                <a
                    id="hoverIcone"
                    href="<?php the_field('get_know_us_link') ?>"
                    class="flex border border-primary-700 bg-primary-700 hover:bg-transparent hover:text-primary-700 transition-all duration-500 w-full justify-center lg:w-fit py-4 px-8 rounded text-white mt-8"
                >
                    با ما بیشتر آشنا شوید
                    <i class="ms-2">
                        <svg
                            xmlns="http://www.w3.org/2000/svg"
                            width="25"
                            height="24"
                            viewBox="0 0 25 24"
                            fill="none"
                        >
                            <path
                                class="transition-all duration-500"
                                d="M7.5 17V7M7.5 7H17.5M7.5 7L17.5 17"
                                stroke="white"
                                stroke-width="1.5"
                                stroke-linecap="round"
                                stroke-linejoin="round"
                            /></svg
                        ></i>
                </a>
            </div>
            <h3 class="text-center mt-6 lg:mt-20 text-neutral-600">
                شرکت تولیدی و صنعتی سامد
            </h3>
            <h3 class="text-center mt-2 text-neutral-600"><?php the_field('telephone_number') ?></h3>
        </div>
    </div>

    <div class="hidden lg:flex h-24 relative justify-center bg-[#FFFFFFD9]">
        <div class="h-full border-t border-e border-secondry-500 w-24"></div>
        <div class="h-full border-t border-secondry-500 w-24"></div>
    </div>
</section>
<?php endwhile; endif; ?>

<section class="bg-neutral-50 h-auto">
    <div class="lg:px-28 lg:mx-auto pb-32">
        <div class="lg:border-e h-32 lg:w-1/2 border-secondry-500"></div>
        <div class="flex flex-col lg:flex-row h-auto lg:h-3/5">
            <div
                class="lg:border-e lg:border-b basis-1/2 h-auto lg:border-secondry-500 lg:pe-4 order-2 lg:order-1 px-4 pt-6 lg:px-0 lg:py-0"
            >
                <h3 class="text-3xl VazirmatnBold text-neutral-800">
                    <?php the_field('adwords_title') ?></h3>
                <h4 class="text-xl text-neutral-800 VazirmatnBold">
                    <?php the_field('adwords_subtitle') ?>
                </h4>
                <p class="mt-6 text-justify">
                    <?php the_field('adwords_text') ?>

                </p>
                <div class="mt-10 lg:mt-20">
                    <a
                        id="hoverIcone"
                        href="<?php the_field('adwords_page_link') ?>"
                        class="flex border border-primary-700 bg-primary-700 hover:bg-transparent hover:text-primary-700 transition-all duration-500 w-full justify-center lg:w-fit py-4 px-8 rounded text-white mt-8"
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
                                    class="transition-all duration-500"
                                    d="M7.5 17V7M7.5 7H17.5M7.5 7L17.5 17"
                                    stroke="white"
                                    stroke-width="1.5"
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                /></svg
                            ></i>
                    </a>
                </div>
            </div>
            <div
                dir="ltr"
                class="basis-1/2 grid gap-3 grid-cols-2 lg:grid-cols-3 h-auto lg:p-0 lg:pe-4 p-4 order-1 lg:order-2"
            >
                <?php $query = new wp_Query(array('post_type' => 'adwords','posts_per_page' => 6)); ?>
                <?php if ($query->have_posts()) : while ($query->have_posts()) :
                $query->the_post(); ?>
                <div
                    class="col-span-1 bg-[#21203B] flex justify-center transition-all duration-500 w-full h-full hover:w-5/6 hover:h-5/6"
                >
                    <img src="<?php the_post_thumbnail_url(); ?>" alt="" />
                </div>
                <?php endwhile; endif; ?>





            </div>
        </div>
    </div>
</section>
<script>
    <script>
// Check for IntersectionObserver support
if ('IntersectionObserver' in window) {
  document.addEventListener("DOMContentLoaded", function() {

    function handleIntersection(entries) {
      entries.map((entry) => {
        if (entry.isIntersecting) {
          // Item has crossed our observation
          // threshold - load src from data-src
          entry.target.style.backgroundImage = "url('"+entry.target.dataset.bgimage+"')";
          // Job done for this item - no need to watch it!
          observer.unobserve(entry.target);
        }
      });
    }

    const headers = document.querySelectorAll('.image_hero');
    const observer = new IntersectionObserver(
      handleIntersection,
      { rootMargin: "100px" }
    );
    headers.forEach(header => observer.observe(header));
  });
} else {
  // No interaction support? Load all background images automatically
  const headers = document.querySelectorAll('.image_hero');
  headers.forEach(header => {
    header.style.backgroundImage = "url('"+header.dataset.bgimage+"')";
  });
}
</script>
</script>
<?php get_footer(); ?>
