<?php get_header(); ?>

<!-- HERO SECTION -->

    <div class="w-full bg-cover bg-center" style="height:40rem; background-image: url(<?php the_post_thumbnail_url(); ?>);">
        <div class="flex items-center justify-center h-full w-full bg-gray-900 bg-opacity-50">
            <div class="text-center">
                <h1 class="text-white text-5xl font-extralight uppercase "><?php the_title(); ?>
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
        <div class="flex justify-center pt-5 mb:pt-20">
            <!-- IMAGE -->
              <div class="md:w-1/2 hidden md:block mt-16">
                <img
                alt="..."
                class="rounded-lg shadow-lg m-auto"
                src="<?php the_post_thumbnail_url('aboutUSSize')?>"
              />
              </div>
            <!-- TEXT -->
              <div class="md:pr-12 md:pl-8 ml-2 md:w-1/2 md:pt-16 pr-10">
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
                        <h4 class="text-base lg:text-lg">
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
                        <h4 class="text-base lg:text-lg">
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
                        <h4 class="text-base lg:text-lg">Money-back guarantee</h4>
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

<section id="products">

    <!-- HEADING FOR PRODUCTS -->
    <div class="container mx-auto bg-white">
      <div class="mb-9">
        <h1 class="text-4xl uppercase font-bold text-center">Winter Flowers</h1>
      </div>



      <!-- CUSTOM GRID FOR PRODUCT CARDS -->
<!-- 
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
       -->

        <div class="container mx-auto">
          <?php echo do_shortcode( '[products limit="3" columns="3" orderby="title" ]' ); ?>
        </div>



    </div>
</section>



<!-- LOCATION SECTION -->

<?php 

    $addressQuery = new WP_Query(array(
      'page_id' => 55,
    ));

    while($addressQuery->have_posts()){
      $addressQuery->the_post();
    

?>

<section id="location" class="relative bg-gray-200">
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 120">
      <path fill="#fff" fill-opacity="1" d="M0,32L1440,96L1440,0L0,0Z"></path>
    </svg>

      <div class="container mx-auto">
      <div>
        <h1 class="text-4xl uppercase font-bold text-center"><?php the_title(); ?></h1>
      </div>
      </div>

      <?php 
      
      // ACF fields

      $latitude     = get_field('latitiude');
      $longitude    = get_field('longitude');
      $city         = get_field('city');
      $address      = get_field('address');
      $phone_number = get_field('phone_number');
      $email        = get_field('email');
      
      ?>

      <div class="container mx-auto">

      <!-- leaflet map -->
      <div class="md:flex justify-between">
        <div class="md:w-1/2 mt-16">
          <div id="mapid" class="rounded-lg shadow-lg mx-auto mb-5"></div>

          <script type="text/javascript">
          var map = L.map('mapid').setView(
                    [<?php echo $latitude; ?>, <?php echo $longitude; ?>], 10);

          L.tileLayer('https://server.arcgisonline.com/ArcGIS/rest/services/World_Imagery/MapServer/tile/{z}/{y}/{x}', {
            attribution: 'FLOWERShop'
          }).addTo(map);

          L.marker([<?php echo $latitude; ?>, <?php echo $longitude; ?>])
          .addTo(map).bindPopup(
            'Our Shop'
          ).openPopup();
          </script> 
          </div>

        <!-- ADDRESS INFO -->
            <div class="md:w-1/2 ml-20 md:mt-36 text-center md:text-left space-y-10">
              <h4 class="text-xl">
                <span class="font-semibold">City:</span> <?php echo $city; ?>
              </h4>
              <h4 class="text-xl">
                <span class="font-semibold">Address:</span> <?php echo $address; ?>
              </h4>
              <h4 class="text-xl">
                <span class="font-semibold">Phone Number:</span> <?php echo $phone_number; ?>
              </h4>
              <h4 class="text-xl">
                <span class="font-semibold">Email:</span> <?php echo $email; ?>
              </h4>
            </div>
        </div>
      </div>

</section>

<?php }

    wp_reset_postdata();
?>





<?php get_footer(); ?>