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
        <div class="flex justify-between py-10">
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
                <h1 class="text-4xl uppercase font-bold mb-5 text-center md:text-left"><?php the_title(); ?></h1>
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

    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 120"><path fill="#E5E7EB" fill-opacity="1" d="M0,96L1440,32L1440,0L0,0Z"></path></svg>

<?php 
    }

    wp_reset_postdata();

?>




<!-- PRODUCTS SECTION -->

<section>

    <!-- HEADING FOR PRODUCTS -->
    <div class="container mx-auto bg-white">
      <div>
        <h1 class="text-4xl uppercase font-bold text-center">Winter Flowers</h1>
      </div>

      <!-- GRID FOR PRODUCT CARDS -->
      <div class="grid grid-cols-3 gap-4">
        <div class="flex flex-col justify-center items-center max-w-sm mx-auto my-8">
          <div style="background-image: url(https://images.unsplash.com/photo-1539185441755-769473a23570?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1951&q=80"
        class="bg-gray-300 h-64 w-72 rounded-lg shadow-md bg-cover bg-center"></div>
            <div class="bg-white w-56 -mt-10 shadow-lg rounded-lg overflow-hidden">
              <div class="py-2 text-center font-bold uppercase tracking-wide text-gray-800">Nike Revolt</div>
                <div class="flex items-center justify-between py-2 px-3 bg-gray-400">
                  <h1 class="text-gray-800 font-bold ">$129</h1>
                  <button class=" bg-gray-800 text-xs text-white px-2 py-1 font-semibold rounded uppercase hover:bg-gray-700">Add to cart</button>
              </div>
            </div>
         </div>
       </div>
    </div>
</section>





<?php get_footer(); ?>