<?php /* Template Name: آرشیو محصولات  */ ?>
<?php get_header(); ?>
<!-- content -->
<section class="relative">
    <div class="px-4 lg:px-28 lg:mx-auto">
        <div class="flex items-center py-5 lg:px-0">
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
            <a class="text-xs VazirmatnBold text-secondry-500" href="#"
            >محصولات</a
            >
        </div>
        <div class="pb-5 border-b border-primary-200">
            <h1 class="text-xl lg:text-2xl VazirmatnBold mb-2">محصولات</h1>
            <p class="text-sm lg:text-base VazirmatnLight text-justify">
                لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ، و با
                استفاده از طراحان گرافیک است، چاپگرها
            </p>
        </div>
        <div class="flex flex-col lg:gap-x-6 lg:flex-row lg:pt-11">
            <div class="basis-1/2 flex flex-col">
                <!-- MobileFilter -->
                <!-- MobileFilter -->
                
                <div
                        id="filterMenu"
                        class="fixed w-5/6 h-full p-4 opacity-1 opacity-0 invisible -right-full z-40 top-0 bg-white rounded transition-all duration-200"
                >
                    <div
                        id="closerAria"
                        class="fixed w-full h-full opacity-0 invisible -right-full z-30 top-0 bg-[#000000B2] rounded"
                ></div>
                    <div class="py-4 border-b">
                <span class="text-base text-neutral-700 VazirmatnBold"
                >فیلترها</span
                >
                        <span
                                id="deleteAll2"
                                class="text-xs float-left text-primary-500 hidden"
                        >حذف همه</span
                        >
                    </div>
                    <div class="pt-6 pb-2 px-2">
                        <form class="grid gap-4" action="#">
                            <?php
                            $taxonomyName = "product_category";
                            $parent_terms = get_terms($taxonomyName, array('parent' => 18, 'orderby' => 'slug', 'hide_empty' => false));


                            foreach ($parent_terms as $pterm) {
                            $termchildren = get_term_children( $pterm->term_id, $taxonomyName );
                            if( empty($termchildren)){
                            ?>
                            <div class="flex items-center checkedItem1 filter">
                                <input
                                        class="accent-secondry-500"
                                        type="checkbox"
                                        name=""
                                        id="1" rel="<?php echo $pterm->slug; ?>" onchange="change()"
                                />
                                <label
                                        class="text-sm ms-2 VazirmatnMedium text-neutral-600"
                                        for="1"
                                ><?php echo $pterm->name; ?></label
                                >
                            </div>
                            <?php  }else{ ?>


                            <div class="border-t">
                                <div>
                                    <div
                                            class="px-2 py-2 my-2 text-neutral-800 cursor-pointer text-sm VazirmatnBold rounded dropperFilter"
                                    >
                                    <?php echo $pterm->name; ?>
                                        <i class="float-left"> </i>
                                    </div>
                                    <ul
                                            class="h-0 overflow-y-auto transition-all duration-150 customScroll1"
                                    >
                                        <?php $terms = get_terms($taxonomyName, array('parent' => $pterm->term_id, 'orderby' => 'slug', 'hide_empty' => false));
                                        foreach ($terms as $term) { ?>
                                        <li
                                                class="py-2 text-sm hover:text-secondry-500 transition-colors duration-500"
                                        >
                                            <div class="flex items-center checkedItem filter">
                                                <input
                                                        class="accent-secondry-500 cursor-pointer"
                                                        type="checkbox"
                                                        name=""
                                                        id="27" rel="<?php echo $term->slug; ?>" onchange="change()"
                                                />
                                                <label
                                                        class="text-sm ms-2 VazirmatnMedium text-neutral-600 cursor-pointer"
                                                        for="27"
                                                ><?php echo $term->name ?></label
                                                >
                                            </div>
                                        </li>
                                       <?php } ?>
                                    </ul>
                                </div>


                            </div>
                            <?php } } ?>
                        </form>
                    </div>
                </div>


                <!-- MobileFilter -->

                <!-- desktop filter menu -->
                <div class="sticky top-0 pt-4">
                    <div class="flex pb-4 lg:border-b">
                <span id="filterMobileMenuToggle" class="ms-2 flex lg:hidden">
                  <i class="block lg:hidden me-2">
                    <svg
                            xmlns="http://www.w3.org/2000/svg"
                            width="24"
                            height="25"
                            viewBox="0 0 24 25"
                            fill="none"
                    >
                      <path
                              d="M22 3.5H2L10 12.96V19.5L14 21.5V12.96L22 3.5Z"
                              stroke="#444859"
                              stroke-width="1.5"
                              stroke-linecap="round"
                              stroke-linejoin="round"
                      />
                    </svg>
                  </i>
                  فیلترها</span
                >
                        <div class="hidden lg:flex items-center justify-between w-full">
                  <span class="text-base text-neutral-700 VazirmatnBold">
                    فیلترها</span
                  >
                            <span
                                    id="deleteAll1"
                                    class="hidden text-xs float-left text-primary-500 hover:cursor-pointer"
                            >حذف همه</span
                            >
                        </div>
                    </div>

                    <form class="hidden gap-4 mt-5 lg:grid" action="#">
                        <?php
                        $taxonomyName = "product_category";
                        $parent_terms = get_terms($taxonomyName, array('parent' => 18, 'orderby' => 'slug', 'hide_empty' => false));


                        foreach ($parent_terms as $pterm) {
                            $termchildren = get_term_children( $pterm->term_id, $taxonomyName );
                            if( empty($termchildren)){
                        ?>
                        <div class="flex items-center checkedItem filter">
                            <input
                                    class="accent-secondry-500 cursor-pointer"
                                    type="checkbox"
                                    name=""
                                    id="21" rel="<?php echo $pterm->slug ?>" onchange="change()"
                            />
                            <label
                                    class="text-sm ms-2 VazirmatnMedium text-neutral-600 cursor-pointer"
                                    for="21"
                            ><?php echo $pterm->name ?></label
                            >
                        </div>

                        <?php  }else{ ?>
                        <!-- dropper -->

                        <div class="hidden lg:block border-t">

                            <div>
                                <div
                                        class="px-2 py-2 my-2 text-neutral-800 cursor-pointer text-sm VazirmatnBold rounded dropperFilter"
                                >
                                   <?php echo $pterm->name ?>
                                    <i class="float-left"> </i>
                                </div>
                                <ul
                                        class="h-0 overflow-y-auto transition-all duration-150 customScroll1"
                                >
                                    <?php $terms = get_terms($taxonomyName, array('parent' => $pterm->term_id, 'orderby' => 'slug', 'hide_empty' => false));
                                    foreach ($terms as $term) { ?>
                                    <li
                                            class="py-2 text-sm hover:text-secondry-500 transition-colors duration-500"
                                    >
                                        <div class="flex items-center checkedItem filter">
                                            <input
                                                    class="accent-secondry-500 cursor-pointer"
                                                    type="checkbox"
                                                    name=""
                                                    id="27" rel="<?php echo $term->slug ?>" onchange="change()"
                                            />
                                            <label
                                                    class="text-sm ms-2 VazirmatnMedium text-neutral-600 cursor-pointer"
                                                    for="27"
                                            ><?php echo $term->name; ?></label
                                            >
                                        </div>
                                    </li>
                                 <?php  } ?>
                                </ul>
                            </div>


                        </div>
                        <?php } } ?>
                    </form>
                </div>
                <!-- desktop filter menu -->
            </div>
            <div
                    class="basis-8/12 grid grid-cols-2 md:grid-cols-3 2xl:grid-cols-4 gap-4 lg:gap-6 result"
            >
                <?php
                $taxonomyName = "product_category";
                $parent_terms2=get_terms([
                    'taxonomy' =>  $taxonomyName,
                    'hide_empty' => false,
                ]);
                
                 foreach ($parent_terms2 as $pterm2) {
                     $termchildren = get_term_children( $pterm2->term_id, $taxonomyName );
                            if( empty($termchildren)){
                $term_slug = $pterm2->slug;
                  $query = new wp_Query(array('post_type' => 'products','posts_per_page' => 12,

            'paged' => $paged, 'tax_query' => array(
                    array(
                        'taxonomy' => 'product_category',
                        'field'    => 'slug',
                        'terms'    => $term_slug,
                    ),
                ),)); ?>
                <?php if ($query->have_posts()) : while ($query->have_posts()) :

                $query->the_post(); ?>
                <div
                        class="p-4 shadow-md rounded h-fit hover:shadow-2xl hover:scale-105 transition-all duration-300 <?php echo $term_slug; ?>"
                >

                    <img
                            class="rounded w-full"
                            src="<?php the_post_thumbnail_url(); ?>"
                            alt=""
                    />
                    <h4
                            class="text-sm lg:text-base mt-2 VazirmatnBold text-neutral-800"
                    >
                        <?php the_title(); ?>
                    </h4>
                    <p class="text-xs lg:text-sm mb-5 text-neutral-800">
                        <?php echo wp_trim_words(get_the_excerpt(), 10); ?>
                    </p>
                    <a
                            class="flex text-white border border-transparent bg-primary-700 p-2 rounded justify-center items-center text-sm hover:bg-transparent hover:text-primary-700 hover:border-primary-700 transition-all duration-300"
                            href="<?php the_permalink(); ?>"
                    >اطلاعات بیشتر</a
                    >
                </div>
               <?php endwhile; endif; }  } ?>

            </div>
        </div>
    </div>
<?php
    $total_pages = $query ->max_num_pages;

    if ($total_pages > 1){
    ?>

    <?php
    $current_page = max(1, get_query_var('paged'));
    $links= paginate_links(array(
        'base' => get_pagenum_link(1) . '%_%',
        'format' => '/page/%#%',
        'current' => $current_page,
        'total' => $total_pages,
        'prev_text' => __('<button id="prevPage"><i class="fa fa-arrow-left"></i> قبلی</button>','multi'),
        'next_text' => __('<button id="nextPage">بعدی <i class="fa fa-arrow-right"></i></button>','multi'),
        'type'      => 'array',
    ));
    ?>
    
      
    <div
        class="flex gap-x-2 justify-center mt-10 mb-10 lg:mb-32 py-5 items-center bg-primary-100"
    >
        <?php
        foreach ($links as $link) : ?>
        <?php
       echo $link
       ?>
      <?php endforeach; } ?>
    </div>
</section>
<!-- content -->

<script src="<?php bloginfo('template_url'); ?>/js/main.js"></script>
<script>

    const filterMobileMenuToggle = document.querySelector(
        "#filterMobileMenuToggle"
    );
    const closerAria = document.querySelector("#closerAria");
    const filterMenu = document.querySelector("#filterMenu");
    const dropperFilter = document.querySelectorAll(".dropperFilter");
    const checkedItem = document.querySelectorAll(".checkedItem input");
    const deleteAll1 = document.querySelector("#deleteAll1");
    const checkedItem1 = document.querySelectorAll(".checkedItem1 input");
    const deleteAll2 = document.querySelector("#deleteAll2");

    filterMobileMenuToggle.addEventListener("click", () => {
        filterMenu.style.visibility = "visible";
        filterMenu.style.opacity = "1";
        filterMenu.style.right = "0%";

        closerAria.style.visibility = "collapse";
        closerAria.style.opacity = "1";
        closerAria.style.right = "0%";
    });


    closerAria.addEventListener("click", () => {
        filterMenu.style.opacity = "0";
        filterMenu.style.right = "-100%";

        closerAria.style.opacity = "0";
        closerAria.style.right = "-100%";
    });
    
    filterMenu.addEventListener("click", () => {
         closerAria.style.visibility = "visible";
        closerAria.style.opacity = "1";
        closerAria.style.right = "0%";
    });
    dropperFilter.forEach((li) => {
        li.addEventListener("click", () => {
            let ulElement = li.nextElementSibling;
            ulElement.classList.toggle("active2");

            let icon = li.querySelector("i");
            icon.classList.toggle("iconChangeFilter");
        });
    });
    checkedItem.forEach((item) => {
        item.addEventListener("change", () => {
            const checkedCount = Array.from(checkedItem).filter(
                (cb) => cb.checked
            ).length;

            if (checkedCount === 0) {
                deleteAll1.style.display = "none";
            }
            if (item.checked) {
                deleteAll1.style.display = "block";
            } else {
            }
        });
    });
    deleteAll1.addEventListener("click", () => {
        checkedItem.forEach((item) => {
            item.checked = false;
        });
        deleteAll1.style.display = "none";
    });

    checkedItem1.forEach((item) => {
        item.addEventListener("change", () => {
            const checkedCount = Array.from(checkedItem1).filter(
                (cb) => cb.checked
            ).length;

            if (checkedCount === 0) {
                deleteAll2.style.display = "none";
            }
            if (item.checked) {
                deleteAll2.style.display = "block";
            } else {
            }
        });
    });
    deleteAll2.addEventListener("click", () => {
        checkedItem1.forEach((item) => {
            item.checked = false;
        });
        deleteAll2.style.display = "none";
    });




function change() {
  var modelCbs = document.querySelectorAll(".filter input[type='checkbox']");
  var processorCbs = document.querySelectorAll(".processors input[type='checkbox']");
  var filters = {
    models: getClassOfCheckedCheckboxes(modelCbs),
    processors: getClassOfCheckedCheckboxes(processorCbs)
  };

  filterResults(filters);
}

function getClassOfCheckedCheckboxes(checkboxes) {
  var classes = [];

  if (checkboxes && checkboxes.length > 0) {
    for (var i = 0; i < checkboxes.length; i++) {
      var cb = checkboxes[i];

      if (cb.checked) {
        classes.push(cb.getAttribute("rel"));
      }
    }
  }

  return classes;
}

function filterResults(filters) {
  var rElems = document.querySelectorAll(".result div");
  var hiddenElems = [];

  if (!rElems || rElems.length <= 0) {
    return;
   
    
  }
  
   deleteAll1.addEventListener("click", () => {
        rElems.forEach((item) => {
            item.style.display ="block";
        });
        deleteAll1.style.display = "none";
    });

  for (var i = 0; i < rElems.length; i++) {
    var el = rElems[i];
    
    
     
    
    

    if (filters.models.length > 0) {
      var isHidden = true;

      for (var j = 0; j < filters.models.length; j++) {
        var filter = filters.models[j];

        if (el.classList.contains(filter)) {
          isHidden = false;
          break;
        }
      }

      if (isHidden) {
        hiddenElems.push(el);
      }
    }

    if (filters.processors.length > 0) {
      var isHidden = true;

      for (var j = 0; j < filters.processors.length; j++) {
        var filter = filters.processors[j];

        if (el.classList.contains(filter)) {
          isHidden = false;
          break;
        }
      }

      if (isHidden) {
        hiddenElems.push(el);
      }
    }
    
    
    
  }

  for (var i = 0; i < rElems.length; i++) {
    rElems[i].style.display = "block";
    
   
    
  }

  if (hiddenElems.length <= 0) {
    return;
  }

  for (var i = 0; i < hiddenElems.length; i++) {
    hiddenElems[i].style.display = "none";
    
    
    
    
  }
 
   
}












   
</script>
<?php get_footer(); ?>
