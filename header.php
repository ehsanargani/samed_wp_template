<html lang="fa" dir="rtl">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title><?php bloginfo('name'); ?> | <?php is_front_page() ? bloginfo('description') : wp_title(''); ?></title>
    <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/src/output.css" />
    <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/src/lightbox.min.css" />
    <link rel="icon" type="image/x-icon" href="<?php bloginfo('template_url'); ?>/img/Logo.png" alt="" />
   

</head>
<style>
#dropDown1{
        top: 6.7rem;
    visibility: hidden;
    transition: all 0.5s ease;
}
</style>
<body>
<header class="bg-primary-900 lg:relative w-full sticky top-0 z-20">
    <div class="lg:px-28 lg:mx-auto h-auto">
        <!-- desktop Menu and navbar -->
        <div class="hidden lg:grid grid-cols-11">
            <div class="h-full flex justify-start items-center col-span-1">
                <a href="<?php echo home_url() ?>"><img src="<?php bloginfo('template_url'); ?>/img/Logo.png" width="70%" height="auto" alt="" /></a>
            </div>

            <div class="col-span-10">
                <div
                    class="flex justify-end h-auto border-b-2 border-primary-700 py-3"
                >
                    <i class="flex justify-center items-center me-3">
                        <svg
                            xmlns="http://www.w3.org/2000/svg"
                            width="24"
                            height="24"
                            viewBox="0 0 24 24"
                            fill="none"
                        >
                            <path
                                d="M22 12C22 17.5228 17.5228 22 12 22M22 12C22 6.47715 17.5228 2 12 2M22 12H2M12 22C6.47715 22 2 17.5228 2 12M12 22C9.43223 19.3038 8 15.7233 8 12C8 8.27674 9.43223 4.69615 12 2M12 22C14.5678 19.3038 16 15.7233 16 12C16 8.27674 14.5678 4.69615 12 2M2 12C2 6.47715 6.47715 2 12 2"
                                stroke="#737993"
                                stroke-width="1.5"
                                stroke-linecap="round"
                                stroke-linejoin="round"
                            /></svg
                        ></i>
                 <form action="<?php echo home_url(); ?>" role="search" class="flex p-2 m-0 bg-primary-800 rounded-sm" >
                        <i class="me-2">
                            <svg
                                xmlns="http://www.w3.org/2000/svg"
                                width="20"
                                height="20"
                                viewBox="0 0 20 20"
                                fill="none"
                            >
                                <path
                                    d="M9.16667 15.8333C12.8486 15.8333 15.8333 12.8486 15.8333 9.16667C15.8333 5.48477 12.8486 2.5 9.16667 2.5C5.48477 2.5 2.5 5.48477 2.5 9.16667C2.5 12.8486 5.48477 15.8333 9.16667 15.8333Z"
                                    stroke="#737993"
                                    stroke-width="1.5"
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                />
                                <path
                                    d="M17.4998 17.5001L13.9165 13.9167"
                                    stroke="#737993"
                                    stroke-width="1.5"
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                />
                            </svg>
                        </i>
                        <input
                            type="text"
                            class="bg-transparent text-sm w-52 outline-none placeholder:text-neutral-500 text-neutral-500"

                            placeholder="جستجو" value="<?php echo get_search_query() ?>" name="s" title="<?php echo esc_attr_x( 'Search for:', 'label' ) ?>"
                        />
                    </form>
                </div>

                <nav class="h-auto hidden lg:block">
                    <ul class="flex">

                        <li
                                id="liDroper"
                                class="flex justify-center items-center transition-all duration-500 text-primary-200 hover:border-secondry-500 border-b-2 border-b-transparent"
                        >
                            <a
                                    href="https://test3.faradev.ir/samed/fa/%d9%85%d8%ad%d8%b5%d9%88%d9%84%d8%a7%d8%aa/"
                                    class="flex p-2 items-center text-sm transition-all duration-500"
                            >
                                محصولات
                                <i class="ms-2">
                                    <svg
                                            xmlns="http://www.w3.org/2000/svg"
                                            width="24"
                                            height="24"
                                            viewBox="0 0 24 24"
                                            fill="none"
                                    >
                                        <path
                                                d="M6 9L12 15L18 9"
                                                stroke-width="1.5"
                                                stroke-linecap="round"
                                                stroke-linejoin="round"
                                        /></svg></i
                                ></a>
                            <div
                                    id="dropDown"
                                    class="w-full h-auto px-28 mx-auto py-12 invisible absolute z-30 right-0"
                            >

                                <div class="grid grid-cols-2 lg:grid-cols-4 gap-6">
                                    <?php
                                    $taxonomyName = "product_category";
                                    $parent_terms = get_terms($taxonomyName, array('parent'=>18,'orderby'    =>'date', 
    'order'      => 'ASC',
    'hide_empty' => true,
    ));
                                    
                                    foreach ($parent_terms as $pterm) {

                                        ?>
                                        <div class="">
                                            <div class="pb-2">
                                                <h3 class="text-sm VazirmatnBold text-white">
                                                    <?php echo $pterm->name ?>
                                                </h3>
                                                <p class="text-xs VazirmatnLight mt-2">
                                                    <?php echo $pterm->description ?>
                                                </p>
                                            </div>
                                            <hr class="my-3 border-[#343469]" />
                                            <div>
                                                <ul>
                                                    <?php $terms = get_terms($taxonomyName, array('parent' => $pterm->term_id, 'orderby' => 'slug',
                                                    'order'      => 'DESC','hide_empty' => true));
                                                    foreach ($terms as $term) { ?>
                                                        <li
                                                                class=" menu-item p-2 text-white text-sm hover:text-secondry-500 cursor-pointer transition-colors duration-500"
                                                        >
                                                            <a href="<?php echo get_term_link($term->term_id) ?>"><?php echo $term->name ?></a>
                                                        </li>
                                                    <?php } ?>
                                                </ul>
                                            </div>
                                        </div>

                                    <?php } ?>



                                    <div class="p-2 bg-[#222244] rounded">
                                        <div
                                                class="bg-cover bg-center w-full h-full"
                                                style="background-image: url(<?php bloginfo('template_url'); ?>/img/801\ 1.png)"
                                        ></div>
                                    </div>
                                </div>
                            </div>
                        </li>
    <li
                  id="liDroper"
                  class="flex justify-center items-center transition-all duration-500 text-[#DCDCED] hover:border-[#D80100] border-b-2 border-b-transparent text-primary-200"
                >
                  <a
                    href="#"
                    class="flex p-2 items-center text-sm transition-all duration-500"
                  >
                    درباره ما
                    <i class="ms-2">
                      <svg
                        xmlns="http://www.w3.org/2000/svg"
                        width="24"
                        height="24"
                        viewBox="0 0 24 24"
                        fill="none"
                      >
                        <path
                          d="M6 9L12 15L18 9"
                          stroke-width="1.5"
                          stroke-linecap="round"
                          stroke-linejoin="round"
                        /></svg></i
                  >
                  </a>
                  <div
                    id="dropDown"
                    class="w-full h-auto px-28 mx-auto py-12 invisible absolute z-30 right-0"
                  >
                    <div class="grid grid-cols-2 lg:grid-cols-6 gap-6">
                      <div class="col-span-2">
                       
                        
                        <div>
                            
                             <?php /* Primary navigation */
                        wp_nav_menu( array(
                            'theme_location' => 'aboutus',
                            'depth' => 3,
                            'container' => false,
                             'add_li_class'  =>'p-2 text-white text-sm hover:text-[#D80100] cursor-pointer transition-colors duration-500'
                            ));
                            ?>
                            
                            
                         
                        </div>
                      </div>

                      <div class="col-span-4 p-2 bg-[#222244] rounded">
                        <div
                          class="bg-cover bg-center w-full min-h-80"
                          style="background-image: url(<?php bloginfo('template_url'); ?>/img/DJI_0112\ dropper.png)"
                        ></div>
                      </div>
                    </div>
                  </div>
                </li>

                        <?php /* Primary navigation */
                        wp_nav_menu( array(
                            'theme_location' => 'primary1',
                            'depth' => 3,
                            'container' => false,
                            'menu_class' => 'flex',
                            'add_a_class'     => 'flex p-2 items-center text-sm transition-all duration-500',
                            'add_li_class'  => 'flex justify-center items-center me-2 transition-all duration-500 text-primary-200 hover:cursor-pointer hover:text-secondry-500 hover:border-secondry-500 border-b-2 border-b-transparent',
                            'walker' => new Child_Wrap()
                           
                            

                        ));
                        ?>
                    </ul>
                </nav>
            </div>
        </div>
        <!-- desktop Menu and navbar -->

        <!-- mobileMenu -->

        <div class="lg:hidden grid grid-cols-2 py-2 px-3">
            <div class="">
                <img class="w-7 h-10" src="<?php bloginfo('template_url'); ?>/img/Logo.png" alt="" />
            </div>
            <div class="flex justify-end items-center">
                <i id="menuToggler">
                    <svg
                        xmlns="http://www.w3.org/2000/svg"
                        width="24"
                        height="24"
                        viewBox="0 0 24 24"
                        fill="none"
                    >
                        <path
                            d="M17 6.1001H3"
                            stroke="white"
                            stroke-width="1.25"
                            stroke-linecap="round"
                            stroke-linejoin="round"
                        />
                        <path
                            d="M21 12.1001H3"
                            stroke="white"
                            stroke-width="1.25"
                            stroke-linecap="round"
                            stroke-linejoin="round"
                        />
                        <path
                            d="M15.1 18H3"
                            stroke="white"
                            stroke-width="1.25"
                            stroke-linecap="round"
                            stroke-linejoin="round"
                        />
                    </svg>
                </i>
            </div>
        </div>

        <div
                id="mobileMenu"
                class="invisible px-4 py-4 fixed w-full flex flex-col justify-between opacity-0 transition-all duration-300 z-0 right-0"
        >
            <menu class="overflow-y-auto">
                <ul class="text-white">
                    <li class="text-base">
                        <a
                                class="flex px-2 pb-7 border-b border-primary-700 w-full"
                                href="./products.html"
                        >محصولات</a
                        >

                        <!-- droppers -->
                        <?php
                                    $taxonomyName = "product_category";
                                    $parent_terms = get_terms($taxonomyName, array('parent'=>18,'orderby'    =>'date', 
    'order'      => 'ASC',
    'hide_empty' => true,));

                                    foreach ($parent_terms as $pterm) {
                                        ?>
                        <div>
                            <div
                                    class="px-2 py-3 mt-2 my-1 text-sm bg-primary-700 rounded dropper plusIcone"
                            >
                               <?php echo $pterm->name; ?>
                                <i class="float-left"> </i>
                            </div>
                            <ul
                                    class="h-0 overflow-y-auto transition-all duration-150 customScroll"
                            >
                                <?php $terms = get_terms($taxonomyName, array('parent' => $pterm->term_id, 'orderby' => 'slug', 'hide_empty' => true));
                                foreach ($terms as $term) { ?>
                                <li
                                        class="py-2 text-sm hover:text-secondry-500 transition-colors duration-500"
                                >
                                    <a href="<?php echo get_term_link($term->term_id) ?>"><?php echo $term->name; ?></a>
                                </li>
                               <?php } ?>
                            </ul>
                        </div>

                     <?php } ?>

                        <!-- droppers -->
                    </li>
                </ul>
                <?php /* Primary navigation */
                wp_nav_menu( array(
                    'theme_location' => 'mobile',
                    'depth' => 3,
                    'container' => false,
                    'menu_class' => 'text-white',
                    'add_a_class'     => 'px-3',
                    'add_li_class'  => 'py-2 border-b border-primary-700 text-base hover:bg-secondry-500 transition-all duration-500 rounded',
                 


                ));
                ?>
                </ul>
            </menu>

            <div
                    class="pt-4 flex max-h-fit flex-col border-t border-secondry-500"
            >
                <div class="flex">
                    <i class="me-2 flex items-center">
                        <svg
                                xmlns="http://www.w3.org/2000/svg"
                                width="24"
                                height="24"
                                viewBox="0 0 24 24"
                                fill="none"
                        >
                            <path
                                    d="M20 10C20 16 12 22 12 22C12 22 4 16 4 10C4 7.87827 4.84285 5.84344 6.34315 4.34315C7.84344 2.84285 9.87827 2 12 2C14.1217 2 16.1566 2.84285 17.6569 4.34315C19.1571 5.84344 20 7.87827 20 10Z"
                                    stroke="white"
                                    stroke-width="1.5"
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                            />
                            <path
                                    d="M12 13C13.6569 13 15 11.6569 15 10C15 8.34315 13.6569 7 12 7C10.3431 7 9 8.34315 9 10C9 11.6569 10.3431 13 12 13Z"
                                    stroke="white"
                                    stroke-width="1.5"
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                            />
                        </svg>
                    </i>
                    <h3 class="text-white text-sm w-3/4">
                        ایران - مشهد - کیلومتر ۲۷ بزرگراه آسیایی (جاده مشهد - قوچان)
                    </h3>
                </div>

                <div class="grid grid-cols-2 mt-3">
                    <div class="col-span-1 flex text-white">
                        <i class="me-2">
                            <svg
                                    xmlns="http://www.w3.org/2000/svg"
                                    width="24"
                                    height="24"
                                    viewBox="0 0 24 24"
                                    fill="none"
                            >
                                <path
                                        d="M21.9999 16.9201V19.9201C22.0011 20.1986 21.944 20.4743 21.8324 20.7294C21.7209 20.9846 21.5572 21.2137 21.352 21.402C21.1468 21.5902 20.9045 21.7336 20.6407 21.8228C20.3769 21.912 20.0973 21.9452 19.8199 21.9201C16.7428 21.5857 13.7869 20.5342 11.1899 18.8501C8.77376 17.3148 6.72527 15.2663 5.18993 12.8501C3.49991 10.2413 2.44818 7.27109 2.11993 4.1801C2.09494 3.90356 2.12781 3.62486 2.21643 3.36172C2.30506 3.09859 2.4475 2.85679 2.6347 2.65172C2.82189 2.44665 3.04974 2.28281 3.30372 2.17062C3.55771 2.05843 3.83227 2.00036 4.10993 2.0001H7.10993C7.59524 1.99532 8.06572 2.16718 8.43369 2.48363C8.80166 2.80008 9.04201 3.23954 9.10993 3.7201C9.23656 4.68016 9.47138 5.62282 9.80993 6.5301C9.94448 6.88802 9.9736 7.27701 9.89384 7.65098C9.81408 8.02494 9.6288 8.36821 9.35993 8.6401L8.08993 9.9101C9.51349 12.4136 11.5864 14.4865 14.0899 15.9101L15.3599 14.6401C15.6318 14.3712 15.9751 14.1859 16.3491 14.1062C16.723 14.0264 17.112 14.0556 17.4699 14.1901C18.3772 14.5286 19.3199 14.7635 20.2799 14.8901C20.7657 14.9586 21.2093 15.2033 21.5265 15.5776C21.8436 15.9519 22.0121 16.4297 21.9999 16.9201Z"
                                        stroke="white"
                                        stroke-width="1.5"
                                        stroke-linecap="round"
                                        stroke-linejoin="round"
                                />
                            </svg>
                        </i>
                        ۹۸-۵۱-۳۱۶۶۹+
                    </div>
                    <div class="col-span-1 flex gap-x-2 justify-end items-center">
                        <i>
                            <svg
                                    xmlns="http://www.w3.org/2000/svg"
                                    width="24"
                                    height="24"
                                    viewBox="0 0 24 24"
                                    fill="none"
                            >
                                <path
                                        d="M12 2C6.48 2 2 6.48 2 12C2 17.52 6.48 22 12 22C17.52 22 22 17.52 22 12C22 6.48 17.52 2 12 2ZM16.64 8.8C16.49 10.38 15.84 14.22 15.51 15.99C15.37 16.74 15.09 16.99 14.83 17.02C14.25 17.07 13.81 16.64 13.25 16.27C12.37 15.69 11.87 15.33 11.02 14.77C10.03 14.12 10.67 13.76 11.24 13.18C11.39 13.03 13.95 10.7 14 10.49C14.0069 10.4582 14.006 10.4252 13.9973 10.3938C13.9886 10.3624 13.9724 10.3337 13.95 10.31C13.89 10.26 13.81 10.28 13.74 10.29C13.65 10.31 12.25 11.24 9.52 13.08C9.12 13.35 8.76 13.49 8.44 13.48C8.08 13.47 7.4 13.28 6.89 13.11C6.26 12.91 5.77 12.8 5.81 12.45C5.83 12.27 6.08 12.09 6.55 11.9C9.47 10.63 11.41 9.79 12.38 9.39C15.16 8.23 15.73 8.03 16.11 8.03C16.19 8.03 16.38 8.05 16.5 8.15C16.6 8.23 16.63 8.34 16.64 8.42C16.63 8.48 16.65 8.66 16.64 8.8Z"
                                        fill="white"
                                />
                            </svg>
                        </i>
                        <i>
                            <svg
                                    xmlns="http://www.w3.org/2000/svg"
                                    width="20"
                                    height="20"
                                    viewBox="0 0 20 20"
                                    fill="none"
                            >
                                <mask
                                        id="mask0_749_1570"
                                        style="mask-type: luminance"
                                        maskUnits="userSpaceOnUse"
                                        x="0"
                                        y="0"
                                        width="20"
                                        height="20"
                                >
                                    <path d="M0.5 0.5H19.5V19.5H0.5V0.5Z" fill="white" />
                                </mask>
                                <g mask="url(#mask0_749_1570)">
                                    <path
                                            d="M11.79 0.640019L11.22 0.560019C9.50693 0.312676 7.75885 0.557374 6.17954 1.26558C4.60023 1.97379 3.25476 3.11634 2.3 4.56002C1.28416 5.94 0.678585 7.57876 0.552979 9.28771C0.427373 10.9967 0.786836 12.7063 1.59 14.22C1.6722 14.3717 1.72337 14.5383 1.74054 14.71C1.75771 14.8817 1.74053 15.055 1.69 15.22C1.28 16.63 0.9 18.05 0.5 19.54L1 19.39C2.35 19.03 3.7 18.67 5.05 18.34C5.33494 18.2808 5.63112 18.3087 5.9 18.42C7.1112 19.0111 8.43482 19.3363 9.78205 19.3738C11.1293 19.4113 12.4689 19.1601 13.7111 18.6372C14.9533 18.1144 16.0692 17.3318 16.9841 16.3421C17.899 15.3525 18.5915 14.1785 19.0153 12.8992C19.4392 11.6198 19.5844 10.2646 19.4414 8.92442C19.2983 7.58429 18.8703 6.29026 18.1859 5.12917C17.5016 3.96809 16.5769 2.96681 15.4737 2.19254C14.3706 1.41827 13.1146 0.888923 11.79 0.640019ZM14.31 13.76C13.9466 14.0854 13.5034 14.3087 13.0256 14.407C12.5478 14.5054 12.0524 14.4754 11.59 14.32C9.49456 13.73 7.67661 12.4152 6.46 10.61C5.99529 9.97154 5.6217 9.27149 5.35 8.53002C5.20285 8.09979 5.17632 7.63749 5.27327 7.19325C5.37023 6.74902 5.58698 6.33981 5.9 6.01002C6.05239 5.81553 6.25981 5.67145 6.49526 5.59654C6.7307 5.52162 6.98325 5.51935 7.22 5.59002C7.42 5.64002 7.56 5.93002 7.74 6.15002C7.886 6.56302 8.057 6.96702 8.25 7.36002C8.39642 7.56053 8.45758 7.81082 8.42011 8.05626C8.38263 8.30169 8.24958 8.52234 8.05 8.67002C7.6 9.07002 7.67 9.40002 7.99 9.85002C8.69745 10.8692 9.6736 11.6723 10.81 12.17C11.13 12.31 11.37 12.34 11.58 12.01C11.67 11.88 11.79 11.77 11.89 11.65C12.47 10.92 12.29 10.93 13.21 11.33C13.503 11.453 13.787 11.597 14.06 11.76C14.33 11.92 14.74 12.09 14.8 12.33C14.8577 12.5904 14.8425 12.8616 14.7561 13.1139C14.6696 13.3662 14.5153 13.5898 14.31 13.76Z"
                                            fill="white"
                                    />
                                </g>
                            </svg>
                        </i>
                        <i>
                            <svg
                                    xmlns="http://www.w3.org/2000/svg"
                                    width="24"
                                    height="24"
                                    viewBox="0 0 24 24"
                                    fill="none"
                            >
                                <path
                                        d="M13.0281 2C14.1531 2.003 14.7241 2.009 15.2171 2.023L15.4111 2.03C15.6351 2.038 15.8561 2.048 16.1231 2.06C17.1871 2.11 17.9131 2.278 18.5501 2.525C19.2101 2.779 19.7661 3.123 20.3221 3.678C20.8308 4.17773 21.2243 4.78247 21.4751 5.45C21.7221 6.087 21.8901 6.813 21.9401 7.878C21.9521 8.144 21.9621 8.365 21.9701 8.59L21.9761 8.784C21.9911 9.276 21.9971 9.847 21.9991 10.972L22.0001 11.718V13.028C22.0025 13.7574 21.9948 14.4868 21.9771 15.216L21.9711 15.41C21.9631 15.635 21.9531 15.856 21.9411 16.122C21.8911 17.187 21.7211 17.912 21.4751 18.55C21.2243 19.2175 20.8308 19.8223 20.3221 20.322C19.8223 20.8307 19.2176 21.2242 18.5501 21.475C17.9131 21.722 17.1871 21.89 16.1231 21.94L15.4111 21.97L15.2171 21.976C14.7241 21.99 14.1531 21.997 13.0281 21.999L12.2821 22H10.9731C10.2433 22.0026 9.5136 21.9949 8.78408 21.977L8.59008 21.971C8.35269 21.962 8.11535 21.9517 7.87808 21.94C6.81408 21.89 6.08808 21.722 5.45008 21.475C4.78291 21.2241 4.17852 20.8306 3.67908 20.322C3.17003 19.8224 2.77619 19.2176 2.52508 18.55C2.27808 17.913 2.11008 17.187 2.06008 16.122L2.03008 15.41L2.02508 15.216C2.00665 14.4868 1.99831 13.7574 2.00008 13.028V10.972C1.99731 10.2426 2.00465 9.5132 2.02208 8.784L2.02908 8.59C2.03708 8.365 2.04708 8.144 2.05908 7.878C2.10908 6.813 2.27708 6.088 2.52408 5.45C2.77577 4.7822 3.1703 4.17744 3.68008 3.678C4.17923 3.16955 4.78327 2.77607 5.45008 2.525C6.08808 2.278 6.81308 2.11 7.87808 2.06C8.14408 2.048 8.36608 2.038 8.59008 2.03L8.78408 2.024C9.51327 2.00623 10.2427 1.99857 10.9721 2.001L13.0281 2ZM12.0001 7C10.674 7 9.40223 7.52678 8.46455 8.46447C7.52687 9.40215 7.00008 10.6739 7.00008 12C7.00008 13.3261 7.52687 14.5979 8.46455 15.5355C9.40223 16.4732 10.674 17 12.0001 17C13.3262 17 14.5979 16.4732 15.5356 15.5355C16.4733 14.5979 17.0001 13.3261 17.0001 12C17.0001 10.6739 16.4733 9.40215 15.5356 8.46447C14.5979 7.52678 13.3262 7 12.0001 7ZM12.0001 9C12.394 8.99993 12.7842 9.07747 13.1482 9.22817C13.5122 9.37887 13.8429 9.5998 14.1215 9.87833C14.4002 10.1569 14.6212 10.4875 14.772 10.8515C14.9229 11.2154 15.0005 11.6055 15.0006 11.9995C15.0006 12.3935 14.9231 12.7836 14.7724 13.1476C14.6217 13.5116 14.4008 13.8423 14.1223 14.121C13.8437 14.3996 13.513 14.6206 13.1491 14.7714C12.7851 14.9223 12.395 14.9999 12.0011 15C11.2054 15 10.4424 14.6839 9.87976 14.1213C9.31715 13.5587 9.00108 12.7956 9.00108 12C9.00108 11.2044 9.31715 10.4413 9.87976 9.87868C10.4424 9.31607 11.2054 9 12.0011 9M17.2511 5.5C16.9196 5.5 16.6016 5.6317 16.3672 5.86612C16.1328 6.10054 16.0011 6.41848 16.0011 6.75C16.0011 7.08152 16.1328 7.39946 16.3672 7.63388C16.6016 7.8683 16.9196 8 17.2511 8C17.5826 8 17.9005 7.8683 18.135 7.63388C18.3694 7.39946 18.5011 7.08152 18.5011 6.75C18.5011 6.41848 18.3694 6.10054 18.135 5.86612C17.9005 5.6317 17.5826 5.5 17.2511 5.5Z"
                                        fill="white"
                                />
                            </svg>
                        </i>
                    </div>
                </div>
            </div>
        </div>

        <!-- mobileMenu -->
    </div>
</header>
<?php include_once( ABSPATH . 'wp-admin/includes/plugin.php' ); ?>

<?php wp_head(); ?>


