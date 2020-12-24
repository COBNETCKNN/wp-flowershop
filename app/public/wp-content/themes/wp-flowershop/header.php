<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php bloginfo('name');?></title>
    <?php 
    // WP hook for loading files
        wp_head() ?>
</head>
<body>
    <body <?php body_class(); ?>>


    <nav class="bg-gray-200">
        <div class="container mx-auto px-6 py-3 bg-grey-400 ">
            <div class="md:flex md:items-center md:justify-between">
                <div class="flex justify-between items-center">
                    <div class="text-xl font-semibold text-gray-700">
                        <a href="#" class="text-pink-400 text-xl font-bold md:text-2xl">FLOWERS<span class="text-green-900">hop</span></a>
                    </div>

                    <!-- Mobile menu button -->
                    <div class="flex md:hidden">
                        <button type="button" class="text-gray-500 hover:text-gray-600 focus:outline-none focus:text-gray-600" aria-label="toggle menu">
                            <svg viewBox="0 0 24 24" class="h-6 w-6 fill-current">
                                <path fill-rule="evenodd" d="M4 5h16a1 1 0 0 1 0 2H4a1 1 0 1 1 0-2zm0 6h16a1 1 0 0 1 0 2H4a1 1 0 0 1 0-2zm0 6h16a1 1 0 0 1 0 2H4a1 1 0 0 1 0-2z"></path>
                            </svg>
                        </button>
                    </div>
                </div>

                <!-- Mobile Menu open: "block", Menu closed: "hidden" -->
                <div class="hidden -mx-4 md:flex md:items-center">
                    <a href="#" class="block mx-4 mt-2 md:mt-0 text-sm text-gray-700 capitalize hover:text-pink-600">About Us</a>
                    <a href="#" class="block mx-4 mt-2 md:mt-0 text-sm text-gray-700 capitalize hover:text-pink-600">Products</a>
                    <a href="#" class="block mx-4 mt-2 md:mt-0 text-sm text-gray-700 capitalize hover:text-pink-600">Location</a>
                    <a href="#" class="block mx-4 mt-2 md:mt-0 text-sm text-gray-700 capitalize hover:text-pink-600">Contact Us</a>
                </div>
            </div>
        </div>
    </nav>


