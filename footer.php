<?php wp_footer(); ?>

<footer class="lg:px-28 px-2 lg:mx-auto pt-6 pb-10 bg-primary-900">
    <div class="flex flex-col lg:flex-row lg:items-center p-2 lg:p-0">
        <div class="pe-4 footer_logo">
           <a href="<?php echo home_url() ?>"><img src="<?php bloginfo('template_url'); ?>/img/Logo.png" alt="" /></a>
        </div>
        <?php $query = new wp_Query(array('post_type' => 'footer')); ?>
        <?php if ($query->have_posts()) : while ($query->have_posts()) :
        $query->the_post(); ?>
        <div>
            <h3 class="text-white text-xl my-2 VazirmatnBold">
                شرکت تولیدی و صنعتی سامد
            </h3>
            <p class="text-white text-sm mt-2 text-justify">
                <?php the_field('footer_text') ?>
            </p>
        </div>
        <?php endwhile; endif; ?>
    </div>

    <hr class="my-8 border-primary-700 mx-2 lg:mx-0" />

    <!-- linkLists and form submit -->
    <div class="grid gap-2 grid-cols-2 lg:grid-cols-6 p-2 lg:p-0">
        <div class="col-span-1 lg:col-span-1">
            <?php /* footer_1 navigation */
            wp_nav_menu( array(
                'theme_location' => 'footer_1',
                'depth' => 3,
                'container' => false,
                'menu_class' => '',
                'add_li_class'  =>'pb-5 text-sm text-white'

            ));
            ?>
        </div>
        <div class="col-span-1 lg:col-span-1">
            <?php /* footer_2 navigation */
            wp_nav_menu( array(
                'theme_location' => 'footer_2',
                'depth' => 3,
                'container' => false,
                'menu_class' => '',
                'add_li_class'  =>'pb-5 text-sm text-white'

            ));
            ?>
        </div>
        <div class="col-span-2 lg:col-span-1 my-2 lg:mt-0">
            <?php /* footer_3 navigation */
            wp_nav_menu( array(
                'theme_location' => 'footer_4',
                'depth' => 3,
                'container' => false,
                'menu_class' => '',
                'add_li_class'  =>'pb-5 text-sm text-white'

            ));
            ?>
        </div>
        <!-- form -->
        <div class="col-span-2 lg:col-span-3">



<?php
echo do_shortcode('[contact-form-7 id="5428814" title="صدای مشتری فوتر"]')
?>

            </div>
        </div>
    </div>
    <!-- linkLists and form submit -->

    <hr class="my-8 border-primary-700 mx-2 lg:mx-0" />
    <?php $query = new wp_Query(array('post_type' => 'contactus_setting')); ?>
    <?php if ($query->have_posts()) : while ($query->have_posts()) :
    $query->the_post(); ?>
    <div class="grid grid-cols-2 lg:grid-cols-3 px-2 lg:px-0">
        <div class="flex items-center col-span-2 lg:col-span-1">
            <i class="me-2">
                <svg
                    xmlns="http://www.w3.org/2000/svg"
                    width="24"
                    height="25"
                    viewBox="0 0 24 25"
                    fill="none"
                >
                    <path
                        d="M20 10.5C20 16.5 12 22.5 12 22.5C12 22.5 4 16.5 4 10.5C4 8.37827 4.84285 6.34344 6.34315 4.84315C7.84344 3.34285 9.87827 2.5 12 2.5C14.1217 2.5 16.1566 3.34285 17.6569 4.84315C19.1571 6.34344 20 8.37827 20 10.5Z"
                        stroke="white"
                        stroke-width="1.5"
                        stroke-linecap="round"
                        stroke-linejoin="round"
                    />
                    <path
                        d="M12 13.5C13.6569 13.5 15 12.1569 15 10.5C15 8.84315 13.6569 7.5 12 7.5C10.3431 7.5 9 8.84315 9 10.5C9 12.1569 10.3431 13.5 12 13.5Z"
                        stroke="white"
                        stroke-width="1.5"
                        stroke-linecap="round"
                        stroke-linejoin="round"
                    />
                </svg>
            </i>
            <h4 class="text-sm text-white">
                <?php the_field('address') ?>
            </h4>
        </div>
        <div class="flex items-center mt-2 lg:mt-0 lg:col-span-1">
            <i class="me-2">
                <svg
                    xmlns="http://www.w3.org/2000/svg"
                    width="24"
                    height="25"
                    viewBox="0 0 24 25"
                    fill="none"
                >
                    <path
                        d="M22.0004 17.4201V20.4201C22.0016 20.6986 21.9445 20.9743 21.8329 21.2294C21.7214 21.4846 21.5577 21.7137 21.3525 21.902C21.1473 22.0902 20.905 22.2336 20.6412 22.3228C20.3773 22.412 20.0978 22.4452 19.8204 22.4201C16.7433 22.0857 13.7874 21.0342 11.1904 19.3501C8.77425 17.8148 6.72576 15.7663 5.19042 13.3501C3.5004 10.7413 2.44866 7.77109 2.12042 4.6801C2.09543 4.40356 2.1283 4.12486 2.21692 3.86172C2.30555 3.59859 2.44799 3.35679 2.63519 3.15172C2.82238 2.94665 3.05023 2.78281 3.30421 2.67062C3.5582 2.55843 3.83276 2.50036 4.11042 2.5001H7.11042C7.59573 2.49532 8.06621 2.66718 8.43418 2.98363C8.80215 3.30008 9.0425 3.73954 9.11042 4.2201C9.23704 5.18016 9.47187 6.12282 9.81042 7.0301C9.94497 7.38802 9.97408 7.77701 9.89433 8.15098C9.81457 8.52494 9.62928 8.86821 9.36042 9.1401L8.09042 10.4101C9.51398 12.9136 11.5869 14.9865 14.0904 16.4101L15.3604 15.1401C15.6323 14.8712 15.9756 14.6859 16.3495 14.6062C16.7235 14.5264 17.1125 14.5556 17.4704 14.6901C18.3777 15.0286 19.3204 15.2635 20.2804 15.3901C20.7662 15.4586 21.2098 15.7033 21.527 16.0776C21.8441 16.4519 22.0126 16.9297 22.0004 17.4201Z"
                        stroke="white"
                        stroke-width="1.5"
                        stroke-linecap="round"
                        stroke-linejoin="round"
                    />
                </svg>
            </i>
            <h4 class="text-sm text-white"> <?php the_field('phone_number') ?></h4>
        </div>
        <div class="flex mt-2 lg:mt-0 lg:col-span-1 justify-end">
            <div class="flex items-center gap-x-2">
               <a href="<?php the_field('telegram') ?>" class="text-white">

                   <i>
                       <svg
                               xmlns="http://www.w3.org/2000/svg"
                               width="24"
                               height="25"
                               viewBox="0 0 24 25"
                               fill="none"
                       >
                           <path
                                   d="M12 2.5C6.48 2.5 2 6.98 2 12.5C2 18.02 6.48 22.5 12 22.5C17.52 22.5 22 18.02 22 12.5C22 6.98 17.52 2.5 12 2.5ZM16.64 9.3C16.49 10.88 15.84 14.72 15.51 16.49C15.37 17.24 15.09 17.49 14.83 17.52C14.25 17.57 13.81 17.14 13.25 16.77C12.37 16.19 11.87 15.83 11.02 15.27C10.03 14.62 10.67 14.26 11.24 13.68C11.39 13.53 13.95 11.2 14 10.99C14.0069 10.9582 14.006 10.9252 13.9973 10.8938C13.9886 10.8624 13.9724 10.8337 13.95 10.81C13.89 10.76 13.81 10.78 13.74 10.79C13.65 10.81 12.25 11.74 9.52 13.58C9.12 13.85 8.76 13.99 8.44 13.98C8.08 13.97 7.4 13.78 6.89 13.61C6.26 13.41 5.77 13.3 5.81 12.95C5.83 12.77 6.08 12.59 6.55 12.4C9.47 11.13 11.41 10.29 12.38 9.89C15.16 8.73 15.73 8.53 16.11 8.53C16.19 8.53 16.38 8.55 16.5 8.65C16.6 8.73 16.63 8.84 16.64 8.92C16.63 8.98 16.65 9.16 16.64 9.3Z"
                                   fill="white"
                           />
                       </svg>
                   </i>

               </a>
                <a href="<?php the_field('whatsapp') ?>"> <i>
                    <svg
                        xmlns="http://www.w3.org/2000/svg"
                        width="20"
                        height="19"
                        viewBox="0 0 20 19"
                        fill="none"
                    >
                        <mask
                            id="mask0_894_1970"
                            style="mask-type: luminance"
                            maskUnits="userSpaceOnUse"
                            x="0"
                            y="0"
                            width="20"
                            height="19"
                        >
                            <path d="M0.5 0H19.5V19H0.5V0Z" fill="white" />
                        </mask>
                        <g mask="url(#mask0_894_1970)">
                            <path
                                d="M11.79 0.140019L11.22 0.0600185C9.50693 -0.187324 7.75885 0.0573738 6.17954 0.765584C4.60023 1.47379 3.25476 2.61634 2.3 4.06002C1.28416 5.44 0.678585 7.07876 0.552979 8.78771C0.427373 10.4967 0.786836 12.2063 1.59 13.72C1.6722 13.8717 1.72337 14.0383 1.74054 14.21C1.75771 14.3817 1.74053 14.555 1.69 14.72C1.28 16.13 0.9 17.55 0.5 19.04L1 18.89C2.35 18.53 3.7 18.17 5.05 17.84C5.33494 17.7808 5.63112 17.8087 5.9 17.92C7.1112 18.5111 8.43482 18.8363 9.78205 18.8738C11.1293 18.9113 12.4689 18.6601 13.7111 18.1372C14.9533 17.6144 16.0692 16.8318 16.9841 15.8421C17.899 14.8525 18.5915 13.6785 19.0153 12.3992C19.4392 11.1198 19.5844 9.76456 19.4414 8.42442C19.2983 7.08429 18.8703 5.79026 18.1859 4.62917C17.5016 3.46809 16.5769 2.46681 15.4737 1.69254C14.3706 0.918273 13.1146 0.388923 11.79 0.140019ZM14.31 13.26C13.9466 13.5854 13.5034 13.8087 13.0256 13.907C12.5478 14.0054 12.0524 13.9754 11.59 13.82C9.49456 13.23 7.67661 11.9152 6.46 10.11C5.99529 9.47154 5.6217 8.77149 5.35 8.03002C5.20285 7.59979 5.17632 7.13749 5.27327 6.69325C5.37023 6.24902 5.58698 5.83981 5.9 5.51002C6.05239 5.31553 6.25981 5.17145 6.49526 5.09654C6.7307 5.02162 6.98325 5.01935 7.22 5.09002C7.42 5.14002 7.56 5.43002 7.74 5.65002C7.886 6.06302 8.057 6.46702 8.25 6.86002C8.39642 7.06053 8.45758 7.31082 8.42011 7.55626C8.38263 7.80169 8.24958 8.02234 8.05 8.17002C7.6 8.57002 7.67 8.90002 7.99 9.35002C8.69745 10.3692 9.6736 11.1723 10.81 11.67C11.13 11.81 11.37 11.84 11.58 11.51C11.67 11.38 11.79 11.27 11.89 11.15C12.47 10.42 12.29 10.43 13.21 10.83C13.503 10.953 13.787 11.097 14.06 11.26C14.33 11.42 14.74 11.59 14.8 11.83C14.8577 12.0904 14.8425 12.3616 14.7561 12.6139C14.6696 12.8662 14.5153 13.0898 14.31 13.26Z"
                                fill="white"
                            />
                        </g>
                    </svg>
                </i>

                </a>
                <a href="mailto:<?php the_field('email') ?>">
                <i>
                    <svg
                        xmlns="http://www.w3.org/2000/svg"
                        width="24"
                        height="25"
                        viewBox="0 0 24 25"
                        fill="none"
                    >
                        <path
                            d="M20 8.5L12 13.5L4 8.5V6.5L12 11.5L20 6.5M20 4.5H4C2.89 4.5 2 5.39 2 6.5V18.5C2 19.0304 2.21071 19.5391 2.58579 19.9142C2.96086 20.2893 3.46957 20.5 4 20.5H20C20.5304 20.5 21.0391 20.2893 21.4142 19.9142C21.7893 19.5391 22 19.0304 22 18.5V6.5C22 5.96957 21.7893 5.46086 21.4142 5.08579C21.0391 4.71071 20.5304 4.5 20 4.5Z"
                            fill="white"
                        />
                    </svg>
                </i>
                </a>
<a href="<?php the_field('instagram') ?>">
                <i>
                    <svg
                        xmlns="http://www.w3.org/2000/svg"
                        width="24"
                        height="25"
                        viewBox="0 0 24 25"
                        fill="none"
                    >
                        <path
                            d="M13.0276 2.5C14.1526 2.503 14.7236 2.509 15.2166 2.523L15.4106 2.53C15.6346 2.538 15.8556 2.548 16.1226 2.56C17.1866 2.61 17.9126 2.778 18.5496 3.025C19.2096 3.279 19.7656 3.623 20.3216 4.178C20.8303 4.67773 21.2238 5.28247 21.4746 5.95C21.7216 6.587 21.8896 7.313 21.9396 8.378C21.9516 8.644 21.9616 8.865 21.9696 9.09L21.9756 9.284C21.9906 9.776 21.9966 10.347 21.9986 11.472L21.9996 12.218V13.528C22.002 14.2574 21.9944 14.9868 21.9766 15.716L21.9706 15.91C21.9626 16.135 21.9526 16.356 21.9406 16.622C21.8906 17.687 21.7206 18.412 21.4746 19.05C21.2238 19.7175 20.8303 20.3223 20.3216 20.822C19.8219 21.3307 19.2171 21.7242 18.5496 21.975C17.9126 22.222 17.1866 22.39 16.1226 22.44L15.4106 22.47L15.2166 22.476C14.7236 22.49 14.1526 22.497 13.0276 22.499L12.2816 22.5H10.9726C10.2429 22.5026 9.51312 22.4949 8.78359 22.477L8.58959 22.471C8.3522 22.462 8.11487 22.4517 7.87759 22.44C6.81359 22.39 6.08759 22.222 5.44959 21.975C4.78242 21.7241 4.17804 21.3306 3.67859 20.822C3.16954 20.3224 2.7757 19.7176 2.52459 19.05C2.27759 18.413 2.10959 17.687 2.05959 16.622L2.02959 15.91L2.02459 15.716C2.00616 14.9868 1.99782 14.2574 1.99959 13.528V11.472C1.99682 10.7426 2.00416 10.0132 2.02159 9.284L2.02859 9.09C2.03659 8.865 2.04659 8.644 2.05859 8.378C2.10859 7.313 2.27659 6.588 2.52359 5.95C2.77529 5.2822 3.16982 4.67744 3.67959 4.178C4.17875 3.66955 4.78278 3.27607 5.44959 3.025C6.08759 2.778 6.81259 2.61 7.87759 2.56C8.14359 2.548 8.36559 2.538 8.58959 2.53L8.78359 2.524C9.51278 2.50623 10.2422 2.49857 10.9716 2.501L13.0276 2.5ZM11.9996 7.5C10.6735 7.5 9.40174 8.02678 8.46406 8.96447C7.52638 9.90215 6.99959 11.1739 6.99959 12.5C6.99959 13.8261 7.52638 15.0979 8.46406 16.0355C9.40174 16.9732 10.6735 17.5 11.9996 17.5C13.3257 17.5 14.5974 16.9732 15.5351 16.0355C16.4728 15.0979 16.9996 13.8261 16.9996 12.5C16.9996 11.1739 16.4728 9.90215 15.5351 8.96447C14.5974 8.02678 13.3257 7.5 11.9996 7.5ZM11.9996 9.5C12.3936 9.49993 12.7837 9.57747 13.1477 9.72817C13.5117 9.87887 13.8424 10.0998 14.1211 10.3783C14.3997 10.6569 14.6207 10.9875 14.7715 11.3515C14.9224 11.7154 15 12.1055 15.0001 12.4995C15.0002 12.8935 14.9226 13.2836 14.7719 13.6476C14.6212 14.0116 14.4003 14.3423 14.1218 14.621C13.8432 14.8996 13.5126 15.1206 13.1486 15.2714C12.7847 15.4223 12.3946 15.4999 12.0006 15.5C11.2049 15.5 10.4419 15.1839 9.87927 14.6213C9.31666 14.0587 9.00059 13.2956 9.00059 12.5C9.00059 11.7044 9.31666 10.9413 9.87927 10.3787C10.4419 9.81607 11.2049 9.5 12.0006 9.5M17.2506 6C16.9191 6 16.6011 6.1317 16.3667 6.36612C16.1323 6.60054 16.0006 6.91848 16.0006 7.25C16.0006 7.58152 16.1323 7.89946 16.3667 8.13388C16.6011 8.3683 16.9191 8.5 17.2506 8.5C17.5821 8.5 17.9001 8.3683 18.1345 8.13388C18.3689 7.89946 18.5006 7.58152 18.5006 7.25C18.5006 6.91848 18.3689 6.60054 18.1345 6.36612C17.9001 6.1317 17.5821 6 17.2506 6Z"
                            fill="white"
                        />
                    </svg>
                </i>
              </a>
            </div>
        </div>
    </div>
    <?php endwhile; endif; ?>
    <script type="text/javascript">
        var site_url = '<?php bloginfo('template_url'); ?>';

        const images = [
            <?php $query = new wp_Query(array('post_type' => 'image_slider')); ?>
            <?php if ($query->have_posts()) : while ($query->have_posts()) :
            $query->the_post(); ?>
            'url("<?php the_post_thumbnail_url('image_slider'); ?>")',

            <?php  endwhile; endif; ?>
        ];
let currentIndex = 0;

function changeBackground() {
  sliderInterval.style.backgroundImage = images[currentIndex];
  currentIndex = (currentIndex + 1) % images.length;
}

setInterval(changeBackground, 2000);
     showImages.forEach((image, index) => {
            image.addEventListener("click", () => {
                let showSingleImage = document.querySelector(".showSingleImage");
                closerAriaSlider.style.display = "flex";
                switch (index) {
                <?php $query = new wp_Query(array('post_type' => 'slider_header_main')); ?>
                <?php if ($query->have_posts()) : while ($query->have_posts()) :
                    $query->the_post(); $i=0 ?>
                    case <?php echo $i ?>:
                        showSingleImage.style.display = "none";
                        
                    <?php $i++; ?>

                        break;
                <?php  endwhile; endif; ?>
                    default:
                        break;
                }
            });
        });

    </script>
    <script src="<?php bloginfo('template_url'); ?>/js/main.js"></script>
</footer>
<script src="<?php bloginfo('template_url'); ?>/js/index/index.js"></script>
<script src="<?php bloginfo('template_url'); ?>/js/index/swiper-element-bundle.min.js"></script>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
<script src="<?php bloginfo('template_url'); ?>/js/lightbox-plus-jquery.min.js"></script>

<script>
jQuery(function ($) {

function resize() {
  if ($(window).width() < 700) {
    $('#dropDown').addClass('h-0 overflow-y-auto transition-all duration-150 customScroll').removeClass('w-full h-auto px-28 mx-auto py-12 invisible absolute z-30 right-0 sub-menu');
    
    $('.menu-item-has-children').addClass('px-2 py-3 mt-2 my-1 text-sm bg-primary-700 rounded dropper10').removeClass('flex');
  }
}

//watch window resize
$(window).on('resize', function() {
  resize()
});
$(document).ready(function() {

 $('.menu-item-has-children').on('click', function(){
    $(this).children('.customScroll').toggleClass('active2').removeClass('w-full h-auto px-28 mx-auto py-12 invisible absolute z-30 right-0 sub-menu');
}); 
});

    
});


    lightbox.option({
      'resizeDuration': 200,
      'wrapAround': true,
      'maxWidth':200	
    })

</script>





</body>
</html>
