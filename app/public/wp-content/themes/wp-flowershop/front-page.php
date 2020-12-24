<?php get_header(); ?>

<!-- HERO SECTION -->

    <div class="w-full bg-cover bg-center" style="height:40rem; background-image: url(<?php the_post_thumbnail_url(); ?>);">
        <div class="flex items-center justify-center h-full w-full bg-gray-900 bg-opacity-50">
            <div class="text-center">
                <h1 class="text-white text-5xl font-semibold uppercase "><?php the_title(); ?>
                <h2 class="text-pink-300 font-extralight text-3xl"><?php the_content(); ?></h2>
            </div>
        </div>
    </div>

<!-- ABOUT US SECTION -->


<?php 

  $aboutUsQuery = new WP_Query(array(
    'page_id' => 16
  ));

  while($aboutUsQuery->have_posts()){
    $aboutUsQuery->the_post();


?>

<section id="about-us" class="relative bg-gray-200">
    <div class="container mx-auto px-4 felx justify-center">
        <div class="flex justify-between py-20">
            <!-- IMAGE -->
              <div class="md:w-1/2 hidden md:block mx-auto">
                <img
                alt="..."
                class="rounded-lg shadow-lg lg:ml-40" width="400" height="400"
                src="<?php the_post_thumbnail_url('aboutUSSize')?>"
              />
              </div>
            <!-- TEXT -->
              <div class="md:pr-12 md:pl-8 ml-2 md:w-1/2 md:pt-10 pr-10">
                <h1 class="text-4xl uppercase font-bold mb-5"><?php the_title(); ?></h1>
                <h3 class="lg:pr-24"><?php the_content(); ?></h3>
                <ul class="list-none mt-6">
                  <li class="py-2">
                    <div class="flex items-center">
                      <div>
                        <span
                          class="font-semibold inline-block py-3 mr-3 text-orange-500"
                          ><i class="fas fa-shipping-fast fa-2x text-pink-400"></i
                        ></span>
                      </div>
                      <div>
                        <h4 class="text-xl">
                          Free Shipping for Everyone
                        </h4>
                      </div>
                    </div>
                  </li>
                  <li class="py-2">
                    <div class="flex items-center">
                      <div>
                        <span
                          class="font-semibold inline-block py-3 mr-3 text-orange-500"
                          ><i class="fas fa-truck-loading fa-2x text-pink-400"></i
                        ></span>
                      </div>
                      <div>
                        <h4 class="text-xl">
                          Same-Day Delivery
                        </h4>
                      </div>
                    </div>
                  </li>
                  <li class="py-2">
                    <div class="flex items-center">
                      <div>
                        <span
                          class="font-semibold inline-block py-3 mr-3 text-orange-500"
                          ><i class="fas fa-money-bill-alt fa-2x text-pink-400"></i
                        ></span>
                      </div>
                      <div>
                        <h4 class="text-xl">Money-back guarantee</h4>
                      </div>
                    </div>
                  </li>
                </ul>
              </div>
            </div>
        </div>
    </div>
</section>


<?php 
    }

    wp_reset_postdata();

?>


<!-- PRODUCTS SECTION -->



<?php get_footer(); ?>