<?php get_header(); ?>
<section class="pb-20 lg:pb-40 lg:pt-10">
    <div class="lg:px-28 lg:mx-auto">
        <div class="pt-5 px-4 lg:px-0">
            <div class="lg:px-0 flex items-center pb-5">
                <a class="text-xs VazirmatnBold text-[#2E303B]" href="<?php echo home_url() ?>"
                >صفحه اصلی</a
                >
                <i>
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
                <a class="text-xs VazirmatnBold text-[#2E303B]" href="https://test3.faradev.ir/samed/fa/%d9%85%d8%ad%d8%b5%d9%88%d9%84%d8%a7%d8%aa/">محصولات</a>
                <i>
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
                <a class="text-xs VazirmatnBold text-[#D80100]" href="#"
                ><?php the_title(); ?></a
                >
            </div>
            <h1
                class="text-xl lg:text-2xl lg:px-0 mb-5 border-b VazirmatnBold pb-5"
            >
                <?php the_title(); ?>
            </h1>
        </div>

         <div class="flex flex-col lg:flex-row lg:gap-x-6 lg:pt-6">
          <div
            class="px-4 flex flex-col lg:px-0 lg:basis-1/2 order-2 lg:order-1"
          >
            <div
              class="tabNaviagation [&>button]:bg-primary-100 [&>button]:rounded [&>button]:px-5 [&>button]:py-3 [&>button]:transition-all text-[16px] font-[500] text-neutral-800 mb-4 grid-flow-col justify-stretch gap-4 hidden lg:grid"
            >
              <button>درباره محصول</button>
              <button class="activeExpantion">کاربرد</button>
              <button>اطلاعات فنی</button>
              <button>بسته بندی</button>
            </div>
            <div class="detailsOnDesktop hidden lg:block">
              <div
                class="aboutProduct text-[16px] text-justify font-[300] vazirmatnLight"
              >
                چسب چوب 801 دارای نشان ملی استاندارد ایران با غلظت مناسب بر پایه
                پلی وینیل استات امولسیونی، دارای چسبندگی قوی و مقاومت به رطوبت
                متوسط می باشد و پس از خشک شدن شفاف و بیرنگ می گردد.
              </div>
              <div
                class="productPerformance text-[16px] text-justify font-[300] vazirmatnLight activeContentOnDesktop"
              >
                برای چسباندن هر نوع چوب و فرآورده های چوبی (نئوپان، فیبر و تخته
                های چندلایی) مناسب است و در صنعت مبلمان و دکوراسیون خانگی نیز
                استفاده می شود.
              </div>
              <div class="detailsList">
                <ul class="grid lg:grid-cols-2">
                  <li class="py-2 lg:py-4 border-b">
                    <span class="text-neutral-700 text-sm VazirmatnLight"
                      >رنگ:</span
                    >
                    <span class="text-neutral-800 text-sm VazirmatnBold"
                      >سفید</span
                    >
                  </li>
                  <li class="py-2 lg:py-4 border-b">
                    <span class="text-neutral-700 text-sm VazirmatnLight"
                      >درصد مواد جامد:</span
                    >
                    <span class="text-neutral-800 text-sm VazirmatnBold"
                      >حداقل ۳۱</span
                    >
                  </li>
                  <li class="py-2 lg:py-4 border-b">
                    <span class="text-neutral-700 text-sm VazirmatnLight"
                      >استحکام فشاری:</span
                    >
                    <span class="text-neutral-800 text-sm VazirmatnBold"
                      >Min . ۹۰ kg/cm۲ </span
                    >
                  </li>
                  <li class="py-2 lg:py-4 border-b">
                    <span class="text-neutral-700 text-sm VazirmatnLight"
                      >شرایط نگهداری چسب:</span
                    >
                    <span class="text-neutral-800 text-sm VazirmatnBold"
                      >دمای ۵ تا ۳۵ درجه سانتیگراد</span
                    >
                  </li>
                  <li class="py-2 lg:py-4 border-b">
                    <span class="text-neutral-700 text-sm VazirmatnLight"
                      >غلظت(ویسکوزیته):</span
                    >
                    <span class="text-neutral-800 text-sm VazirmatnBold"
                      >حداقل ۱۲۰۰۰ (سانتی پوآز)</span
                    >
                  </li>
                  <li class="py-2 lg:py-4 border-b">
                    <span class="text-neutral-700 text-sm VazirmatnLight"
                      >دمای کاربرد:</span
                    >
                    <span class="text-neutral-800 text-sm VazirmatnBold"
                      >بالاتر از ۷ درجه سانتیگراد </span
                    >
                  </li>
                  <li class="py-2 lg:py-4 border-b">
                    <span class="text-neutral-700 text-sm VazirmatnLight"
                      >فشار لازم برای چسباندن:</span
                    >
                    <span class="text-neutral-800 text-sm VazirmatnBold"
                      >۰.۲ – ۲ bar</span
                    >
                  </li>
                  <li class="py-2 lg:py-4 border-b">
                    <span class="text-neutral-700 text-sm VazirmatnLight"
                      >زمان فشار برای چسباندن:</span
                    >
                    <span class="text-neutral-800 text-sm VazirmatnBold"
                      >۸ تا ۱۲ دقیقه</span
                    >
                  </li>
                  <li class="py-2 lg:py-4">
                    <span class="text-neutral-700 text-sm VazirmatnLight"
                      >مقدار مصرف:</span
                    >
                    <span class="text-neutral-800 text-sm VazirmatnBold"
                      >۱۵۰ تا ۲۰۰ گرم در مترمربع</span
                    >
                  </li>
                </ul>
              </div>
              <div class="packing">
                <div class="px-3 py-2 grid grid-cols-4 gap-4">
                  <div class="flex flex-col gap-4">
                    <div class="p-2 rounded border border-primary-100">
                      <img
                        class="w-100 h-100"
                        src="<?php the_field('hajmbastebandiimage_1'); ?>"
                        alt=""
                      />
                    </div>
                    <span class="text-[14px] text-neutral-600 text-center"
                      ><?php the_field('hajmbastebandi1') ?>
                    </span>
                  </div>
                  <div class="flex flex-col gap-4">
                    <div class="p-2 rounded border border-primary-100">
                      <img
                        class="w-100 h-100"
                        src="<?php the_field('hajmbastebandiimage_2'); ?>"
                        alt=""
                      />
                    </div>
                    <span class="text-[14px] text-neutral-600 text-center"
                      ><?php the_field('hajmbastebandi2') ?>
                    </span>
                  </div>
                  <div class="flex flex-col gap-4">
                    <div class="p-2 rounded border border-primary-100">
                      <img
                        class="w-100 h-100"
                        src="<?php the_field('hajmbastebandiimage_3'); ?>"
                        alt=""
                      />
                    </div>
                    <span class="text-[14px] text-neutral-600 text-center"
                      ><?php the_field('hajmbastebandi3') ?>
                    </span>
                  </div>
                  <div class="flex flex-col gap-4">
                    <div class="p-2 rounded border border-primary-100">
                      <img
                        class="w-100 h-100"
                        src="<?php the_field('hajmbastebandiimage_4'); ?>"
                        alt=""
                      />
                    </div>
                    <span class="text-[14px] text-neutral-600 text-center"
                      ><?php the_field('hajmbastebandi4') ?>
                    </span>
                  </div>
                </div>
              </div>
            </div>
            <div class="detialsOnMobile flex flex-col gap-0 mt-6 lg:hidden">
              <div class="expantionPanel">
                <div
                  class="py-2 px-5 bg-primary-100 rounded flex justify-between text-neutral-600 transition-all"
                >
                  <span class="text-[16px]">درباره محصول</span>
                  <i
                    class="icon-add flex justify-center items-center text-[20px]"
                  >
                  </i>
                </div>
                <div class="px-3 py-2">
                  <p class="text-[14px] text-neutral-600 font-300 text-justify">
                   <?php the_field('product_about'); ?>.
                  </p>
                </div>
              </div>
              <div class="expantionPanel">
                <div
                  class="py-2 px-5 bg-primary-100 rounded flex justify-between text-neutral-600 transition-all"
                >
                  <span class="text-[16px]">کاربرد محصول</span>
                  <i
                    class="icon-add flex justify-center items-center text-[20px]"
                  >
                  </i>
                </div>
                <div class="px-3 py-2">
                  <p class="text-[14px] text-neutral-600 font-300 text-justify">
              <?php the_field('product_application') ?>.
                  </p>
                </div>
              </div>
              <div class="expantionPanel">
                <div
                  class="py-2 px-5 bg-primary-100 rounded flex justify-between text-neutral-600 transition-all"
                >
                  <span class="text-[16px]">اطلاعات فنی</span>
                  <i
                    class="icon-add flex justify-center items-center text-[20px]"
                  >
                  </i>
                </div>
                <div class="px-3 py-2">
                  <ul class="grid lg:grid-cols-2">
                    <li class="py-2 lg:py-4 border-b">
                      <span class="text-neutral-700 text-sm VazirmatnLight"
                        >رنگ:</span
                      >
                      <span class="text-neutral-800 text-sm VazirmatnBold"
                        >س<?php the_field('color') ?></span
                      >
                    </li>
                    <li class="py-2 lg:py-4 border-b">
                      <span class="text-neutral-700 text-sm VazirmatnLight"
                        >درصد مواد جامد:</span
                      >
                      <span class="text-neutral-800 text-sm VazirmatnBold"
                        ><?php the_field('jamed') ?></span
                      >
                    </li>
                    <li class="py-2 lg:py-4 border-b">
                      <span class="text-neutral-700 text-sm VazirmatnLight"
                        >استحکام فشاری:</span
                      >
                      <span class="text-neutral-800 text-sm VazirmatnBold"
                        ><?php the_field('estehkamfeshari') ?></span
                      >
                    </li>
                    <li class="py-2 lg:py-4 border-b">
                      <span class="text-neutral-700 text-sm VazirmatnLight"
                        >شرایط نگهداری چسب:</span
                      >
                      <span class="text-neutral-800 text-sm VazirmatnBold"
                        ><?php the_field('sharayetnegahdarichasb') ?></span
                      >
                    </li>
                    <li class="py-2 lg:py-4 border-b">
                      <span class="text-neutral-700 text-sm VazirmatnLight"
                        >غلظت(ویسکوزیته):</span
                      >
                      <span class="text-neutral-800 text-sm VazirmatnBold"
                        ><?php the_field('ghelzat') ?></span
                      >
                    </li>
                    <li class="py-2 lg:py-4 border-b">
                      <span class="text-neutral-700 text-sm VazirmatnLight"
                        >دمای کاربرد:</span
                      >
                      <span class="text-neutral-800 text-sm VazirmatnBold"
                        ><?php the_field('damayekarbord') ?></span
                      >
                    </li>
                    <li class="py-2 lg:py-4 border-b">
                      <span class="text-neutral-700 text-sm VazirmatnLight"
                        >فشار لازم برای چسباندن:</span
                      >
                      <span class="text-neutral-800 text-sm VazirmatnBold"
                        ><?php the_field('fesharchasbandan') ?></span
                      >
                    </li>
                    <li class="py-2 lg:py-4 border-b">
                      <span class="text-neutral-700 text-sm VazirmatnLight"
                        >زمان فشار برای چسباندن:</span
                      >
                      <span class="text-neutral-800 text-sm VazirmatnBold"
                        > <?php the_field('zamanfeshar') ?> </span
                      >
                    </li>
                    <li class="py-2 lg:py-4">
                      <span class="text-neutral-700 text-sm VazirmatnLight"
                        >مقدار مصرف:</span
                      >
                      <span class="text-neutral-800 text-sm VazirmatnBold"
                        > <?php the_field('meghdarmasraf') ?></span
                      >
                    </li>
                  </ul>
                </div>
              </div>
              <div class="expantionPanel">
                <div
                  class="py-2 px-5 bg-primary-100 rounded flex justify-between text-neutral-600 transition-all"
                >
                  <span class="text-[16px]">بسته بندی</span>
                  <i
                    class="icon-add flex justify-center items-center text-[20px]"
                  >
                  </i>
                </div>
                <div class="px-3 py-2 grid grid-cols-2 gap-4">
                  <div class="flex flex-col gap-4">
                    <div class="p-2 rounded border border-primary-100">
                      <img
                        class="w-100 h-100"
                        src="<?php the_post_thumbnail_url(); ?>"
                        alt=""
                      />
                    </div>
                    <span class="text-[14px] text-neutral-600"
                      ><?php the_field('hajmbastebandi3') ?>
                    </span>
                  </div>
                  <div class="flex flex-col gap-4">
                    <div class="p-2 rounded border border-primary-100">
                      <img
                        class="w-100 h-100"
                        src="./img/details/9ee9dcf541c0e06412ad6434927b8af1.png"
                        alt=""
                      />
                    </div>
                    <span class="text-[14px] text-neutral-600"
                      ><?php the_field('hajmbastebandi4') ?>
                    </span>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="flex flex-col gap-y-6 lg:basis-1/2 order-1 lg:order-2">
            <div class="bg-primary-100 p-4 rounded">
              <img
                class="w-full rounded"
                src="<?php the_post_thumbnail_url(); ?>"
                alt=""
              />
            </div>
          </div>
        </div>
        <div
          class="bg-primary-100 rounded p-2 flex flex-col lg:flex-row gap-2 justify-between mt-12"
        >
          <div class="flex flex-col gap-2">
            <p class="text-neutral-700 text-xs lg:text-base VazirmatnRegular">
              برای اطلاعات بیشتر و سفارشات خود با ما تماس بگیرید
            </p>
            <span class="text-neutral-700 text-base VazirmatnBold"
              >۹۸-۵۱-۳۱۶۶۹</span
            >
          </div>
          <a
            id="callUs"
            class="bg-secondry-500 text-white py-2 lg:py-0 flex rounded justify-center items-center lg:w-48 border border-transparent hover:bg-transparent hover:text-secondry-500 hover:border-secondry-500 transition-all duration-200"
            href="#"
          >
            تماس بگیرید
            <i>
              <svg
                xmlns="http://www.w3.org/2000/svg"
                width="25"
                height="24"
                viewBox="0 0 25 24"
                fill="none"
              >
                <path
                  d="M7.5 17V7M7.5 7H17.5M7.5 7L17.5 17"
                  stroke="white"
                  stroke-width="1.5"
                  stroke-linecap="round"
                  stroke-linejoin="round"
                />
              </svg>
            </i>
          </a>
        </div>
    </div>
</section>
<?php get_footer(); ?>
<script>
        const expantionPanels = document.querySelectorAll('.expantionPanel');
        const tabNaviagationBtns = document.querySelectorAll(
          '.tabNaviagation > button'
        );
        const detailsOnDesktop = document.querySelectorAll(
          '.detailsOnDesktop > div'
        );

        expantionPanels.forEach((panel, index) => {
          panel.children[0].addEventListener('click', () => {
            panel.children[0].querySelector('i').classList.toggle('icon-add');
            panel.children[0].querySelector('i').classList.toggle('icon-minus');
            panel.children[0].classList.toggle('activeExpantion');

            panel.children[1].classList.toggle('activeContent');
          });
        });

        tabNaviagationBtns.forEach((btn, index) => {
          btn.addEventListener('click', () => {
            detailsOnDesktop.forEach((item) => {
              item.classList.remove('activeContentOnDesktop');
            });
            tabNaviagationBtns.forEach((rmActive) => {
              rmActive.classList.remove('activeExpantion');
            });

            detailsOnDesktop[index].classList.add('activeContentOnDesktop');

            btn.classList.add('activeExpantion');
          });
        });
      </script>
