<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pinnapple - Number 1 Shop</title>
    <script src="https://cdn.tailwindcss.com"></script>
    
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        'primary-red': '#D13A48', /* Used for Checkout, Add to Cart, etc. */
                        'placeholder-bg': '#f7f7f7', /* Light background for placeholders */
                        'placeholder-fill': '#ccc', /* Grey color for abstract shapes */
                    }
                }
            }
        }
    </script>
    
    

    <style>
        .shape {
            position: absolute;
            background-color: var(--tw-placeholder-fill);
            opacity: 0.7;
        }
        .shape-1 { 
            width: 100px;
            height: 100px;
            clip-path: polygon(50% 0%, 0% 100%, 100% 100%);
            top: 10%;
            left: 20%;
            transform: rotate(180deg);
        }
        .shape-2 { 
            width: 80px;
            height: 80px;
            clip-path: polygon(
                50% 0%, 61% 35%, 98% 35%, 68% 57%, 79% 91%, 50% 70%, 21% 91%, 32% 57%, 2% 35%, 39% 35%
            );
            bottom: 25%;
            left: 10%;
        }
        .shape-3 { 
            width: 120px;
            height: 120px;
            border-radius: 15px;
            bottom: 10%;
            right: 5%;
        }
    </style>
</head>
<body class="font-sans text-gray-800">

    <header class="border-b border-gray-200">
    <div class="container mx-auto px-4 sm:px-6 lg:px-8 flex justify-between items-center py-4">
        
        <div class="flex items-center gap-x-1"> 
            <div class="w-12 h-12 rounded-md bg-gradient-to-br from-blue-600 to-cyan-400 text-white flex items-center justify-center text-lg font-bold">
            <img src="asset/2960679-2182.png">
        </div>  
            
            <div class="text-lg font-semibold">Convenience<br/><span class="text-sm text-gray-500">Store</span></div>
        </div>
        <div class="flex items-center space-x-4">
            <div class="relative flex items-center border border-gray-300 rounded-md pr-1">
                <input type="text" placeholder="Search Product" class="py-2 pl-3 pr-10 text-sm focus:outline-none rounded-l-md w-64">
                <i class="fas fa-search absolute right-10 text-gray-400"></i>
                <i class="fas fa-sliders-h text-primary-red text-lg cursor-pointer px-2 border-l border-gray-300"></i>
            </div>
           
        </div>
    </div>
</header>

    <main class="container mx-auto px-4 sm:px-6 lg:px-8 mt-6">
        <div class="text-sm text-gray-500 mb-6">
            <a href="#" class="hover:text-primary-red">Home</a> / 
            <a href="#" class="hover:text-primary-red">Categories</a> / 
            <a href="#" class="hover:text-primary-red">Fruits</a> / 
            <span class="font-semibold">Pinnapple</span>
        </div>

        <div class="grid grid-cols-1 lg:grid-cols-3 gap-10">
            
            <div class="lg:col-span-2 flex flex-col md:flex-row gap-8">
                
                <div class="bg-placeholder-bg flex-1 min-h-[400px] rounded-lg relative flex justify-center items-center overflow-hidden">
                    <div class="image-shapes relative w-3/5 h-3/5">
                        <div class="shape shape-1 bg-placeholder-fill"></div>
                        <div class="shape shape-2 bg-placeholder-fill"></div>
                        <div class="shape shape-3 bg-placeholder-fill"></div>
                    </div>
                </div>

                <div class="flex-1 pt-4">
                    <h2 class="text-3xl font-medium mb-4">Pinnapple</h2>
                    
                    <div class="pb-4 border-b border-gray-200 mb-4">
                        <span class="text-xl font-bold">Price</span>
                        <span class="ml-4 text-xl">...</span> 
                    </div>

                    <ul class="list-none text-gray-600 mb-4">
                        <li class="mb-1">• Details</li>
                        <li class="mb-1">• Details</li>
                        <li class="mb-1">• Details</li>
                    </ul>
                    
                    <div class="inline-block bg-green-100 text-green-700 text-xs font-bold px-3 py-1 rounded mb-4">FREE SHIPPING</div>

                    <div class="text-gray-800 font-medium mb-6">
                        <i class="fas fa-check-circle text-green-500 mr-2"></i> In stock
                    </div>
                    
                    <div class="flex items-center space-x-3">
                        <label for="qty" class="text-sm font-bold">QTY</label>
                        <div class="flex border border-gray-300 rounded-md overflow-hidden">
                            <button class="bg-gray-100 px-3 py-2 text-lg hover:bg-gray-200 border-r border-gray-300">-</button>
                            <input type="text" id="qty" value="1" readonly class="w-12 text-center text-base focus:outline-none">
                            <button class="bg-gray-100 px-3 py-2 text-lg hover:bg-gray-200 border-l border-gray-300">+</button>
                        </div>
                        
                        <button class="bg-primary-red text-white font-bold px-6 py-2.5 rounded-md uppercase hover:bg-red-700 transition duration-150">
                            ADD TO CART
                        </button>
                        <button class="border border-primary-red text-primary-red p-3 rounded-md hover:bg-primary-red/10 transition duration-150">
                            <i class="fa-regular fa-heart"></i>
                        </button>
                    </div>
                </div>
            </div>

            <aside class="lg:col-span-1 pt-4">
                <div class="border border-primary-red rounded-xl p-5 shadow-lg">
                    <h3 class="text-xl font-medium mb-4 text-primary-red border-b border-gray-200 pb-3">Your Cart</h3>
                    
                    <div class="flex justify-between items-center pb-4 border-b border-dashed border-gray-300 mb-4">
                        <div class="flex items-center space-x-3">
                            <div class="w-12 h-12 bg-placeholder-bg rounded-md"></div>
                            <div>
                                <p class="font-semibold">Pinnapple</p>
                                <p class="text-sm text-gray-500">3 x Price</p>
                            </div>
                        </div>
                        <span class="text-lg text-gray-400 cursor-pointer hover:text-primary-red">×</span>
                    </div>

                    <div class="flex justify-between font-bold pt-2">
                        <span>Sub Total:</span>
                        <span class="text-gray-800">Price</span>
                    </div>

                    <div class="flex space-x-3 mt-5">
                        <button class="flex-1 py-3 text-sm font-bold border border-gray-300 rounded-md uppercase hover:bg-gray-50 transition duration-150">
                            VIEW CART
                        </button>
                        <button class="flex-1 py-3 text-sm font-bold bg-primary-red text-white rounded-md uppercase hover:bg-red-700 transition duration-150">
                            CHECKOUT
                        </button>
                    </div>
                </div>
            </aside>
        </div>

        <section class="mt-16 pb-12">
            <h2 class="text-xl font-medium mb-6">RELATED PRODUCTS</h2>
            <div class="grid grid-cols-2 sm:grid-cols-3 md:grid-cols-4 lg:grid-cols-5 gap-6">
                
                <div class="text-center">
                    <div class="bg-placeholder-bg h-48 rounded-lg mb-3 relative flex justify-center items-center overflow-hidden">
                        <div class="image-shapes relative w-3/5 h-3/5">
                            <div class="shape shape-1 bg-placeholder-fill !w-10 !h-10"></div>
                            <div class="shape shape-2 bg-placeholder-fill !w-8 !h-8"></div>
                            <div class="shape shape-3 bg-placeholder-fill !w-12 !h-12"></div>
                        </div>
                    </div>
                    <p class="font-bold text-gray-800">Price</p>
                </div>

                <div class="text-center">
                    <div class="bg-placeholder-bg h-48 rounded-lg mb-3 relative flex justify-center items-center"></div>
                    <p class="font-bold text-gray-800">Price</p>
                </div>
                <div class="text-center">
                    <div class="bg-placeholder-bg h-48 rounded-lg mb-3 relative flex justify-center items-center"></div>
                    <p class="font-bold text-gray-800">Price</p>
                </div>
                <div class="text-center">
                    <div class="bg-placeholder-bg h-48 rounded-lg mb-3 relative flex justify-center items-center"></div>
                    <p class="font-bold text-gray-800">Price</p>
                </div>
                <div class="text-center hidden lg:block">
                    <div class="bg-placeholder-bg h-48 rounded-lg mb-3 relative flex justify-center items-center"></div>
                    <p class="font-bold text-gray-800">Price</p>
                </div>

            </div>
        </section>

    </main>
</body>
</html>