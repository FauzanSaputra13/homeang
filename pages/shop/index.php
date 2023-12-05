<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>HF | Shop</title>
  <link rel="stylesheet" href="../../css/styles.css">
  <script src="https://cdn.tailwindcss.com"></script>
  <link rel="shortcut icon" href="../../assets/homeng.jpg" />

</head>

<body>
  <?php
  include "../../components/header.php"
  ?>
  <div>
    <div class="min-h-screen flex flex-col justify-start items-center mb-[100px]">
      <!-- banner -->
      <div class="w-full bg-cover bg-no-repeat bg-center py-36" style="background-image: url('../../assets/images/banner-bg.jpg');">
        <div class="container">
          <h1 class="text-6xl text-gray-800 font-medium mb-4 capitalize">
            best collection for <br> home decoration
          </h1>
          <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Aperiam <br>
            accusantium perspiciatis, sapiente
            magni eos dolorum ex quos dolores odio</p>
          <div class="mt-12">
            <a href="#" class="bg-orange-600 border border-orange-600 text-white px-8 py-3 font-medium 
                    rounded-md hover:bg-transparent hover:text-orange-600">Shop Now</a>
          </div>
        </div>
      </div>
      <!-- ./banner -->

      <!-- LIST PRODUCT -->
      <div class="flex justify-center items-center w-full">

      </div>



      <div class="flex justify-start items-center w-[80%] mt-[30px]">
        <div class="flex w-full items-center">
          <span class="text-[1.5em] font-[600] whitespace-nowrap">
            SHOP
          </span>
          <hr class="h-[2px] bg-gray-300 w-full" />
        </div>
      </div>
      <div class="grid grid-cols-1 md:grid-cols-3 w-[90%]">
        <div class="h-full flex flex-col justify-start items-start w-full">
          <div class="flex flex-col bg-white rounded-lg p-5 shadow-2xl">
            <div class="w-full ">
              <form>
                <label htmlFor="search" class="mb-2 text-sm font-medium text-gray-900 sr-only dark:text-white">
                  Search
                </label>
                <div class="relative">
                  <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                    <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                      <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z" />
                    </svg>
                  </div>
                  <input type="search" id="search" class="block w-full p-4 pl-10 text-sm text-gray-900 border border-gray-300 rounded-lg bg-gray-50 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Search" required />
                  <button type="submit" class="text-white absolute right-2.5 bottom-2.5 bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-4 py-2 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                    Search
                  </button>
                </div>
              </form>
            </div>
            <div class="flex flex-col p-2">
              <span class="font-[500]">KATEGORI</span>
              <div class="flex flex-col p-2">
                <div class="flex items-center mb-4">
                  <input id="default-checkbox" type="checkbox" value="" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600" />
                  <label htmlFor="default-checkbox" class="ml-2 text-sm font-medium">
                    Art & Design
                  </label>
                </div>
                <div class="flex items-center">
                  <input id="checked-checkbox" type="checkbox" value="" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600" />
                  <label htmlFor="checked-checkbox" class="ml-2 text-sm font-medium ">
                    Technology
                  </label>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-span-2 flex flex-col justify-center items-center">
          <div class="grid grid-cols-2 md:grid-cols-4 gap-6">
            <div class="bg-white shadow rounded overflow-hidden group">
              <div class="relative">
                <img src="../../assets/images/products/product1.jpg" alt="product 1" class="w-full">
                <div class="absolute inset-0 bg-black bg-opacity-40 flex items-center 
                    justify-center gap-2 opacity-0 group-hover:opacity-100 transition">
                  <a href="#" class="text-white text-lg w-9 h-8 rounded-full bg-orange-600 flex items-center justify-center hover:bg-gray-800 transition" title="view product">
                    <i class="fa-solid fa-magnifying-glass"></i>
                  </a>
                  <a href="#" class="text-white text-lg w-9 h-8 rounded-full bg-orange-600 flex items-center justify-center hover:bg-gray-800 transition" title="add to wishlist">
                    <i class="fa-solid fa-heart"></i>
                  </a>
                </div>
              </div>
              <div class="pt-4 pb-3 px-4">
                <a href="#">
                  <h4 class="uppercase font-medium text-xl mb-2 text-gray-800 hover:text-orange-600 transition">Guyer
                    Chair</h4>
                </a>
                <div class="flex items-baseline mb-1 space-x-2">
                  <p class="text-xl text-orange-600 font-semibold">$45.00</p>
                  <p class="text-sm text-gray-400 line-through">$55.90</p>
                </div>
                <div class="flex items-center">
                  <div class="flex gap-1 text-sm text-yellow-400">
                    <span><i class="fa-solid fa-star"></i></span>
                    <span><i class="fa-solid fa-star"></i></span>
                    <span><i class="fa-solid fa-star"></i></span>
                    <span><i class="fa-solid fa-star"></i></span>
                    <span><i class="fa-solid fa-star"></i></span>
                  </div>
                  <div class="text-xs text-gray-500 ml-3">(150)</div>
                </div>
              </div>
              <a href="#" class="block w-full py-1 text-center text-white bg-orange-600 border border-orange-600 rounded-b hover:bg-transparent hover:text-orange-600 transition">Add
                to cart</a>
            </div>
            <div class="bg-white shadow rounded overflow-hidden group">
              <div class="relative">
                <img src="../../assets/images/products/product4.jpg" alt="product 1" class="w-full">
                <div class="absolute inset-0 bg-black bg-opacity-40 flex items-center 
                    justify-center gap-2 opacity-0 group-hover:opacity-100 transition">
                  <a href="#" class="text-white text-lg w-9 h-8 rounded-full bg-orange-600 flex items-center justify-center hover:bg-gray-800 transition" title="view product">
                    <i class="fa-solid fa-magnifying-glass"></i>
                  </a>
                  <a href="#" class="text-white text-lg w-9 h-8 rounded-full bg-orange-600 flex items-center justify-center hover:bg-gray-800 transition" title="add to wishlist">
                    <i class="fa-solid fa-heart"></i>
                  </a>
                </div>
              </div>
              <div class="pt-4 pb-3 px-4">
                <a href="#">
                  <h4 class="uppercase font-medium text-xl mb-2 text-gray-800 hover:text-orange-600 transition">Bed
                    King Size</h4>
                </a>
                <div class="flex items-baseline mb-1 space-x-2">
                  <p class="text-xl text-orange-600 font-semibold">$45.00</p>
                  <p class="text-sm text-gray-400 line-through">$55.90</p>
                </div>
                <div class="flex items-center">
                  <div class="flex gap-1 text-sm text-yellow-400">
                    <span><i class="fa-solid fa-star"></i></span>
                    <span><i class="fa-solid fa-star"></i></span>
                    <span><i class="fa-solid fa-star"></i></span>
                    <span><i class="fa-solid fa-star"></i></span>
                    <span><i class="fa-solid fa-star"></i></span>
                  </div>
                  <div class="text-xs text-gray-500 ml-3">(150)</div>
                </div>
              </div>
              <a href="#" class="block w-full py-1 text-center text-white bg-orange-600 border border-orange-600 rounded-b hover:bg-transparent hover:text-orange-600 transition">Add
                to cart</a>
            </div>
            <div class="bg-white shadow rounded overflow-hidden group">
              <div class="relative">
                <img src="../../assets/images/products/product2.jpg" alt="product 1" class="w-full">
                <div class="absolute inset-0 bg-black bg-opacity-40 flex items-center 
                    justify-center gap-2 opacity-0 group-hover:opacity-100 transition">
                  <a href="#" class="text-white text-lg w-9 h-8 rounded-full bg-orange-600 flex items-center justify-center hover:bg-gray-800 transition" title="view product">
                    <i class="fa-solid fa-magnifying-glass"></i>
                  </a>
                  <a href="#" class="text-white text-lg w-9 h-8 rounded-full bg-orange-600 flex items-center justify-center hover:bg-gray-800 transition" title="add to wishlist">
                    <i class="fa-solid fa-heart"></i>
                  </a>
                </div>
              </div>
              <div class="pt-4 pb-3 px-4">
                <a href="#">
                  <h4 class="uppercase font-medium text-xl mb-2 text-gray-800 hover:text-orange-600 transition">
                    Couple Sofa</h4>
                </a>
                <div class="flex items-baseline mb-1 space-x-2">
                  <p class="text-xl text-orange-600 font-semibold">$45.00</p>
                  <p class="text-sm text-gray-400 line-through">$55.90</p>
                </div>
                <div class="flex items-center">
                  <div class="flex gap-1 text-sm text-yellow-400">
                    <span><i class="fa-solid fa-star"></i></span>
                    <span><i class="fa-solid fa-star"></i></span>
                    <span><i class="fa-solid fa-star"></i></span>
                    <span><i class="fa-solid fa-star"></i></span>
                    <span><i class="fa-solid fa-star"></i></span>
                  </div>
                  <div class="text-xs text-gray-500 ml-3">(150)</div>
                </div>
              </div>
              <a href="#" class="block w-full py-1 text-center text-white bg-orange-600 border border-orange-600 rounded-b hover:bg-transparent hover:text-orange-600 transition">Add
                to cart</a>
            </div>
            <div class="bg-white shadow rounded overflow-hidden group">
              <div class="relative">
                <img src="../../assets/images/products/product3.jpg" alt="product 1" class="w-full">
                <div class="absolute inset-0 bg-black bg-opacity-40 flex items-center 
                    justify-center gap-2 opacity-0 group-hover:opacity-100 transition">
                  <a href="#" class="text-white text-lg w-9 h-8 rounded-full bg-orange-600 flex items-center justify-center hover:bg-gray-800 transition" title="view product">
                    <i class="fa-solid fa-magnifying-glass"></i>
                  </a>
                  <a href="#" class="text-white text-lg w-9 h-8 rounded-full bg-orange-600 flex items-center justify-center hover:bg-gray-800 transition" title="add to wishlist">
                    <i class="fa-solid fa-heart"></i>
                  </a>
                </div>
              </div>
              <div class="pt-4 pb-3 px-4">
                <a href="#">
                  <h4 class="uppercase font-medium text-xl mb-2 text-gray-800 hover:text-orange-600 transition">
                    Mattrass X</h4>
                </a>
                <div class="flex items-baseline mb-1 space-x-2">
                  <p class="text-xl text-orange-600 font-semibold">$45.00</p>
                  <p class="text-sm text-gray-400 line-through">$55.90</p>
                </div>
                <div class="flex items-center">
                  <div class="flex gap-1 text-sm text-yellow-400">
                    <span><i class="fa-solid fa-star"></i></span>
                    <span><i class="fa-solid fa-star"></i></span>
                    <span><i class="fa-solid fa-star"></i></span>
                    <span><i class="fa-solid fa-star"></i></span>
                    <span><i class="fa-solid fa-star"></i></span>
                  </div>
                  <div class="text-xs text-gray-500 ml-3">(150)</div>
                </div>
              </div>
              <a href="#" class="block w-full py-1 text-center text-white bg-orange-600 border border-orange-600 rounded-b hover:bg-transparent hover:text-orange-600 transition">Add
                to cart</a>
            </div>
            <div class="bg-white shadow rounded overflow-hidden group">
              <div class="relative">
                <img src="../../assets/images/products/product1.jpg" alt="product 1" class="w-full">
                <div class="absolute inset-0 bg-black bg-opacity-40 flex items-center 
                    justify-center gap-2 opacity-0 group-hover:opacity-100 transition">
                  <a href="#" class="text-white text-lg w-9 h-8 rounded-full bg-orange-600 flex items-center justify-center hover:bg-gray-800 transition" title="view product">
                    <i class="fa-solid fa-magnifying-glass"></i>
                  </a>
                  <a href="#" class="text-white text-lg w-9 h-8 rounded-full bg-orange-600 flex items-center justify-center hover:bg-gray-800 transition" title="add to wishlist">
                    <i class="fa-solid fa-heart"></i>
                  </a>
                </div>
              </div>
              <div class="pt-4 pb-3 px-4">
                <a href="#">
                  <h4 class="uppercase font-medium text-xl mb-2 text-gray-800 hover:text-orange-600 transition">Guyer
                    Chair</h4>
                </a>
                <div class="flex items-baseline mb-1 space-x-2">
                  <p class="text-xl text-orange-600 font-semibold">$45.00</p>
                  <p class="text-sm text-gray-400 line-through">$55.90</p>
                </div>
                <div class="flex items-center">
                  <div class="flex gap-1 text-sm text-yellow-400">
                    <span><i class="fa-solid fa-star"></i></span>
                    <span><i class="fa-solid fa-star"></i></span>
                    <span><i class="fa-solid fa-star"></i></span>
                    <span><i class="fa-solid fa-star"></i></span>
                    <span><i class="fa-solid fa-star"></i></span>
                  </div>
                  <div class="text-xs text-gray-500 ml-3">(150)</div>
                </div>
              </div>
              <a href="#" class="block w-full py-1 text-center text-white bg-orange-600 border border-orange-600 rounded-b hover:bg-transparent hover:text-orange-600 transition">Add
                to cart</a>
            </div>
            <div class="bg-white shadow rounded overflow-hidden group">
              <div class="relative">
                <img src="../../assets/images/products/product4.jpg" alt="product 1" class="w-full">
                <div class="absolute inset-0 bg-black bg-opacity-40 flex items-center 
                    justify-center gap-2 opacity-0 group-hover:opacity-100 transition">
                  <a href="#" class="text-white text-lg w-9 h-8 rounded-full bg-orange-600 flex items-center justify-center hover:bg-gray-800 transition" title="view product">
                    <i class="fa-solid fa-magnifying-glass"></i>
                  </a>
                  <a href="#" class="text-white text-lg w-9 h-8 rounded-full bg-orange-600 flex items-center justify-center hover:bg-gray-800 transition" title="add to wishlist">
                    <i class="fa-solid fa-heart"></i>
                  </a>
                </div>
              </div>
              <div class="pt-4 pb-3 px-4">
                <a href="#">
                  <h4 class="uppercase font-medium text-xl mb-2 text-gray-800 hover:text-orange-600 transition">Bed
                    King Size</h4>
                </a>
                <div class="flex items-baseline mb-1 space-x-2">
                  <p class="text-xl text-orange-600 font-semibold">$45.00</p>
                  <p class="text-sm text-gray-400 line-through">$55.90</p>
                </div>
                <div class="flex items-center">
                  <div class="flex gap-1 text-sm text-yellow-400">
                    <span><i class="fa-solid fa-star"></i></span>
                    <span><i class="fa-solid fa-star"></i></span>
                    <span><i class="fa-solid fa-star"></i></span>
                    <span><i class="fa-solid fa-star"></i></span>
                    <span><i class="fa-solid fa-star"></i></span>
                  </div>
                  <div class="text-xs text-gray-500 ml-3">(150)</div>
                </div>
              </div>
              <a href="#" class="block w-full py-1 text-center text-white bg-orange-600 border border-orange-600 rounded-b hover:bg-transparent hover:text-orange-600 transition">Add
                to cart</a>
            </div>
            <div class="bg-white shadow rounded overflow-hidden group">
              <div class="relative">
                <img src="../../assets/images/products/product2.jpg" alt="product 1" class="w-full">
                <div class="absolute inset-0 bg-black bg-opacity-40 flex items-center 
                    justify-center gap-2 opacity-0 group-hover:opacity-100 transition">
                  <a href="#" class="text-white text-lg w-9 h-8 rounded-full bg-orange-600 flex items-center justify-center hover:bg-gray-800 transition" title="view product">
                    <i class="fa-solid fa-magnifying-glass"></i>
                  </a>
                  <a href="#" class="text-white text-lg w-9 h-8 rounded-full bg-orange-600 flex items-center justify-center hover:bg-gray-800 transition" title="add to wishlist">
                    <i class="fa-solid fa-heart"></i>
                  </a>
                </div>
              </div>
              <div class="pt-4 pb-3 px-4">
                <a href="#">
                  <h4 class="uppercase font-medium text-xl mb-2 text-gray-800 hover:text-orange-600 transition">
                    Couple Sofa</h4>
                </a>
                <div class="flex items-baseline mb-1 space-x-2">
                  <p class="text-xl text-orange-600 font-semibold">$45.00</p>
                  <p class="text-sm text-gray-400 line-through">$55.90</p>
                </div>
                <div class="flex items-center">
                  <div class="flex gap-1 text-sm text-yellow-400">
                    <span><i class="fa-solid fa-star"></i></span>
                    <span><i class="fa-solid fa-star"></i></span>
                    <span><i class="fa-solid fa-star"></i></span>
                    <span><i class="fa-solid fa-star"></i></span>
                    <span><i class="fa-solid fa-star"></i></span>
                  </div>
                  <div class="text-xs text-gray-500 ml-3">(150)</div>
                </div>
              </div>
              <a href="#" class="block w-full py-1 text-center text-white bg-orange-600 border border-orange-600 rounded-b hover:bg-transparent hover:text-orange-600 transition">Add
                to cart</a>
            </div>
            <div class="bg-white shadow rounded overflow-hidden group">
              <div class="relative">
                <img src="../../assets/images/products/product3.jpg" alt="product 1" class="w-full">
                <div class="absolute inset-0 bg-black bg-opacity-40 flex items-center 
                    justify-center gap-2 opacity-0 group-hover:opacity-100 transition">
                  <a href="#" class="text-white text-lg w-9 h-8 rounded-full bg-orange-600 flex items-center justify-center hover:bg-gray-800 transition" title="view product">
                    <i class="fa-solid fa-magnifying-glass"></i>
                  </a>
                  <a href="#" class="text-white text-lg w-9 h-8 rounded-full bg-orange-600 flex items-center justify-center hover:bg-gray-800 transition" title="add to wishlist">
                    <i class="fa-solid fa-heart"></i>
                  </a>
                </div>
              </div>
              <div class="pt-4 pb-3 px-4">
                <a href="#">
                  <h4 class="uppercase font-medium text-xl mb-2 text-gray-800 hover:text-orange-600 transition">
                    Mattrass X</h4>
                </a>
                <div class="flex items-baseline mb-1 space-x-2">
                  <p class="text-xl text-orange-600 font-semibold">$45.00</p>
                  <p class="text-sm text-gray-400 line-through">$55.90</p>
                </div>
                <div class="flex items-center">
                  <div class="flex gap-1 text-sm text-yellow-400">
                    <span><i class="fa-solid fa-star"></i></span>
                    <span><i class="fa-solid fa-star"></i></span>
                    <span><i class="fa-solid fa-star"></i></span>
                    <span><i class="fa-solid fa-star"></i></span>
                    <span><i class="fa-solid fa-star"></i></span>
                  </div>
                  <div class="text-xs text-gray-500 ml-3">(150)</div>
                </div>
              </div>
              <a href="#" class="block w-full py-1 text-center text-white bg-orange-600 border border-orange-600 rounded-b hover:bg-transparent hover:text-orange-600 transition">Add
                to cart</a>
            </div>
          </div>
          
        </div>
      </div>
    </div>

  </div>

  <?php
  include "../../components/footer.php"
  ?>
</body>

</html>