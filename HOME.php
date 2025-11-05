<?php
session_start();

// --- PRODUCT DATA ARRAYS ---
// Define the Hero Product data
$heroProduct = [
    'name' => 'Premium Chocolate Bar',
    'price' => 45.50, // Use numeric format
    'rating' => '5.0',
    'reviews' => '200+',
    'detail' => 'Rich, dark chocolate with sea salt flakes.',
    'image' => 'asset/chocolate.png' // Ensure this path is correct
];

// Define the Popular Product data 
$popularProducts = [
    [
        'name' => 'Organic Fresh Milk',
        'price' => 3.50,
        'rating' => '4.9',
        'image' => 'asset/milk.png'
    ],
    [
        'name' => 'Crunchy Potato Chips',
        'price' => 1.99,
        'rating' => '4.5',
        'image' => 'asset/chips.png'
    ],
    [
        'name' => 'Fresh Lettuce Head',
        'price' => 2.25,
        'rating' => '4.7',
        'image' => 'asset/lettuce.png'
    ],
    [
        'name' => 'Assorted Gummy Bears',
        'price' => 4.00,
        'rating' => '4.6',
        'image' => 'asset/gummy.png'
    ],
];

// Calculate total cart price
// Uses the null coalescing operator (?? []) to safely handle empty carts
$cartTotal = array_sum(array_column($_SESSION['cart'] ?? [], 'price'));

?>
<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width,initial-scale=1" />
  <title>Number 1 Shop — Mock</title>
  <link rel="stylesheet" href="style.css">

  <script src="https://cdn.tailwindcss.com"></script>
  <script>
    // Tailwind theme extension
    tailwind.config = {
      theme: {
        extend: {
          colors: {
            primary: '#b94a4a',
            accent: '#e86d6d',
            sidebar: '#f4f7fb',
            soft: '#f7f7f9',
            outline: '#e8e8ea'
          },
          fontFamily: {
            body: ['"PT Serif"', 'Georgia', 'serif'],
            ui: ['Inter', 'system-ui', 'Arial']
          },
          boxShadow: {
            'soft-lg': '0 14px 30px rgba(9,18,40,0.08)',
            'card': '0 10px 20px rgba(9,18,40,0.06)'
          }
        }
      }
    }
  </script>

  
</head>
<body class="min-h-screen antialiased text-gray-800">

  <div class="mx-auto max-w-screen-xl px-4 py-8 grid grid-cols-12 gap-6">
    <aside class="col-span-12 md:col-span-3 lg:col-span-2">
      <div class="sticky top-6">
        <div class="bg-white border border-blue-300 rounded-xl p-4 shadow-sm flex flex-col h-full">
          <div class="flex items-center gap-3 mb-6">
            <div class="w-12 h-12 rounded-lg bg-gradient-to-br from-blue-600 to-cyan-400 text-white flex items-center justify-center text-lg font-bold"><img src="asset/2960679-2182.png"></div>
            <div>
              <div class="text-lg font-semibold">Convenience<br/><span class="text-sm text-gray-500">Store</span></div>
            </div>
          </div>

          <nav class="flex-1">
            <ul class="space-y-3">
              <li><a href="#" class="flex items-center gap-3 px-2 py-2 rounded-lg hover:bg-gray-50"><span class="w-9 h-9 flex items-center justify-center rounded-md bg-white border text-gray-600">🏠</span><span class="text-sm font-medium">Home</span></a></li>
              <li><a href="#" class="flex items-center gap-3 px-2 py-2 rounded-lg hover:bg-gray-50"><span class="w-9 h-9 flex items-center justify-center rounded-md bg-white border text-gray-600">🔎</span><span class="text-sm font-medium">Explore</span></a></li>
              <li><a href="#" class="flex items-center gap-3 px-2 py-2 rounded-lg hover:bg-gray-50"><span class="w-9 h-9 flex items-center justify-center rounded-md bg-white border text-gray-600">💾</span><span class="text-sm font-medium">Whishlist </span></a></li>
              <li><a href="#" class="flex items-center gap-3 px-2 py-2 rounded-lg hover:bg-gray-50"><span class="w-9 h-9 flex items-center justify-center rounded-md bg-white border text-gray-600">🛒</span><span class="text-sm font-medium">Cart</span></a></li>
              <li><a href="#" class="flex items-center gap-3 px-2 py-2 rounded-lg hover:bg-gray-50"><span class="w-9 h-9 flex items-center justify-center rounded-md bg-white border text-gray-600">💼</span><span class="text-sm font-medium">Selling</span></a></li>
              <li><a href="#" class="flex items-center gap-3 px-2 py-2 rounded-lg hover:bg-gray-50"><span class="w-9 h-9 flex items-center justify-center rounded-md bg-white border text-gray-600">👤</span><span class="text-sm font-medium">Profile</span></a></li>
              <li><a href="#" class="flex items-center gap-3 px-2 py-2 rounded-lg hover:bg-gray-50"><span class="w-9 h-9 flex items-center justify-center rounded-md bg-white border text-gray-600">📜</span><span class="text-sm font-medium">Preach History</span></a></li>
              <li><a href="#" class="flex items-center gap-3 px-2 py-2 rounded-lg hover:bg-gray-50"><span class="w-9 h-9 flex items-center justify-center rounded-md bg-white border text-gray-600">✉️</span><span class="text-sm font-medium">Contact us</span></a></li>
              <li><a href="#" class="flex items-center gap-3 px-2 py-2 rounded-lg hover:bg-gray-50"><span class="w-9 h-9 flex items-center justify-center rounded-md bg-white border text-gray-600">⚙️</span><span class="text-sm font-medium">Setting</span></a></li>
            </ul>
          </nav>

          <div class="mt-4"></div>
          <div class="mt-6">
            <div class="bg-gradient-to-br from-red-200 to-red-400 text-white rounded-2xl p-4 shadow-soft-lg relative overflow-hidden">
              <div class="flex items-start gap-3">
                <div class="w-10 h-10 rounded-full bg-white/20 flex items-center justify-center text-2xl">＋</div>
                <div>
                  <div class="text-sm font-semibold">Need Help</div>
                  <p class="text-xs mt-1 opacity-90">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                </div>
              </div>
              <button class="mt-4 bg-white text-red-600 text-sm font-semibold px-3 py-2 rounded-md shadow">Customer Service</button>
              <div class="absolute -right-6 -bottom-8 w-40 h-40 rounded-full bg-white/10 transform rotate-12"></div>
            </div>
          </div>
        </div>
      </div>
    </aside>

    <main class="col-span-12 md:col-span-6 lg:col-span-7">
      <div class="flex items-center justify-between mb-6">
        <div>
          <h1 class="text-2xl font-bold" style="font-family: 'PT Serif', Georgia, serif;">Convenience Store</h1>
          <div class="text-xs text-gray-500">No.1 Shop</div>
        </div>
        <div class="flex items-center gap-3">
          <div class="relative">
            <input type="search" placeholder="Search Product" class="w-72 md:w-96 px-3 py-2 rounded-full border border-gray-200 shadow-sm focus:outline-none" />
            <button class="absolute right-1 top-1/2 -translate-y-1/2 bg-white px-3 py-1 rounded-full border border-gray-200">🔍</button>
          </div>
          <button class="w-9 h-9 rounded-md bg-white border shadow-sm">✉️</button>
          <button class="w-9 h-9 rounded-md bg-white border shadow-sm">🔔</button>
          <button class="w-9 h-9 rounded-md bg-white border shadow-sm">👤</button>
        </div>
      </div>

      <div class="bg-white rounded-2xl shadow-card p-6 mb-6 relative">
        <div class="grid grid-cols-12 gap-6 items-center">
          <div class="col-span-12 md:col-span-4 lg:col-span-3">
            <div class="img-placeholder w-full h-40 md:h-44 rounded-xl flex items-center justify-center bg-gray-100">
                <img src="<?= $heroProduct['image'] ?>" alt="<?= $heroProduct['name'] ?>" class="w-full h-full object-cover rounded-xl" />
            </div>
          </div>

          <div class="col-span-12 md:col-span-8 lg:col-span-6">
            <div class="flex items-center justify-between">
              <div>
                <h3 class="text-lg font-semibold"><?= $heroProduct['name'] ?></h3>
                <div class="flex items-center gap-2 mt-2">
                  <div class="flex -space-x-1">
                    <?php for ($i = 0; $i < floor($heroProduct['rating']); $i++): ?><span class="text-yellow-400">★</span><?php endfor; ?>
                  </div>
                  <div class="text-xs text-gray-400">(<?= $heroProduct['reviews'] ?> Reviews)</div>
                </div>
                <p class="mt-3 text-sm text-gray-600"><?= $heroProduct['detail'] ?></p>
              </div>

              <div class="text-right">
                <div class="text-sm text-gray-400">Price</div>
                <div class="text-xl font-semibold text-red-600 mt-2">$<?= number_format($heroProduct['price'], 2) ?></div>
              </div>
            </div>

            <div class="mt-4 flex items-center gap-3">
                <form id="hero-add-form" action="ADDTOCART.php" method="POST">
                    <input type="hidden" name="product_name" value="<?= $heroProduct['name'] ?>">
                    <input type="hidden" name="product_price" value="<?= $heroProduct['price'] ?>">
                    <input type="hidden" name="action_type" value="add_to_cart">
                    
                    <button type="submit" class="flex items-center gap-2 border border-gray-200 rounded-md px-3 py-2 text-gray-700">
                        <span class="text-sm"> Add to cart</span>
                    </button>
                </form>

                <form action="ADDTOCART.php" method="POST">
                    <input type="hidden" name="product_name" value="<?= $heroProduct['name'] ?>">
                    <input type="hidden" name="product_price" value="<?= $heroProduct['price'] ?>">
                    <input type="hidden" name="action_type" value="buy_now">
                    
                    <button type="submit" class="bg-primary text-white px-4 py-2 rounded-md text-sm font-semibold shadow">
                        Buy Now
                    </button>
                </form>

              <button class="ml-2 w-10 h-10 flex items-center justify-center border rounded-lg text-gray-600">♡</button>
            </div>
          </div>

          <div class="hidden lg:block col-span-3"></div>
        </div>
      </div>

      <section class="mb-8">
        <div class="flex items-center justify-between mb-4">
          <h2 class="text-lg font-semibold">Explore The Popular Product</h2>
          <a href="#" class="text-sm text-gray-500">See all</a>
        </div>

        <div class="grid grid-cols-2 sm:grid-cols-3 md:grid-cols-4 lg:grid-cols-4 gap-4">
          
          <?php foreach ($popularProducts as $product): ?>
              <div class="bg-white rounded-xl p-4 shadow-card flex flex-col">
                  <div class="img-placeholder w-full h-36 rounded-lg mb-3 bg-gray-100">
                      <img src="<?= $product['image'] ?>" alt="<?= $product['name'] ?>" class="w-full h-full object-cover rounded-lg" />
                  </div>
                  <div class="flex-1">
                      <div class="text-sm font-medium"><?= $product['name'] ?></div>
                      <div class="text-xs text-gray-500">$<?= number_format($product['price'], 2) ?></div>
                  </div>
                  <div class="mt-3 flex items-center justify-between">
                      <div class="text-xs text-green-500">★ <?= $product['rating'] ?></div>
                      
                      <form action="ADDTOCART.php" method="POST">
                          <input type="hidden" name="product_name" value="<?= $product['name'] ?>">
                          <input type="hidden" name="product_price" value="<?= $product['price'] ?>">
                          <input type="hidden" name="action_type" value="add_to_cart">

                          <button type="submit" class="w-8 h-8 rounded-full bg-red-100 text-red-600 flex items-center justify-center">
                              ＋
                          </button>
                      </form>
                  </div>
              </div>
          <?php endforeach; ?>
          
        </div>
      </section>

      <section class="mb-8 grid grid-cols-1 md:grid-cols-2 gap-4">
        <div class="bg-white rounded-xl p-4 shadow-card flex items-center gap-4">
          <div class="w-14 h-14 img-placeholder rounded-lg"></div>
          <div>
            <div class="text-sm font-semibold">Popular top 10 Product</div>
            <div class="text-xs text-gray-500">Price・Orders & reviews</div>
          </div>
        </div>
        <div class="bg-white rounded-xl p-4 shadow-card flex items-center gap-4">
          <div class="w-14 h-14 img-placeholder rounded-lg"></div>
          <div>
            <div class="text-sm font-semibold">Newest Sellers</div>
            <div class="text-xs text-gray-500">Price・Orders & reviews</div>
          </div>
        </div>
      </section>
    </main>

    <aside class="col-span-12 md:col-span-3 lg:col-span-3">
      <div class="sticky top-6 space-y-6">
        
        <div class="bg-gradient-to-br from-red-200 to-red-400 text-white rounded-2xl p-4 shadow-soft-lg">
            <div class="text-lg font-semibold mb-2">Shopping Cart</div>
            <div class="space-y-2 max-h-40 overflow-y-auto pr-1">
                <?php if (empty($_SESSION['cart'])): ?>
                    <p class="text-sm opacity-90">Your cart is empty.</p>
                <?php else: ?>
                    <?php foreach ($_SESSION['cart'] as $index => $item): ?>
                        <div class="flex items-center justify-between text-sm">
                            <span class="truncate pr-2"><?= htmlspecialchars($item['name']) ?></span>
                            <div class="flex items-center gap-2">
                                <span>$<?= number_format($item['price'], 2) ?></span>
                                
                                <a href="REMOVEFROMCART.php?index=<?= $index ?>" 
                                   class="text-xs text-white/70 hover:text-white leading-none">
                                    [x]
                                </a>
                            </div>
                        </div>
                    <?php endforeach; ?>
                <?php endif; ?>
            </div>
            
            <hr class="my-3 border-white/50" />
            <div class="flex items-center justify-between font-bold text-lg">
                <span>Total:</span>
                <span>$<?= number_format($cartTotal, 2) ?></span>
            </div>

            <a href="checkout.php" class="block text-center mt-3 bg-white text-primary text-sm font-semibold px-3 py-2 rounded-md shadow">
                Proceed to Checkout
            </a>
        </div>


        <div class="bg-white rounded-2xl p-4 shadow-card">
          <div class="flex items-center justify-between mb-3">
            <h3 class="text-sm font-semibold">Daily Deals</h3>
            <a href="#" class="text-xs text-gray-400">View All</a>
          </div>

          <div class="space-y-3 max-h-72 overflow-auto pr-2">
            <div class="flex items-center gap-3"><div class="w-12 h-12 img-placeholder rounded-md"></div><div class="flex-1"><div class="text-sm font-medium">Product</div><div class="text-xs text-gray-400">Details</div></div><div class="text-sm text-gray-500">$45.5</div></div>
            <div class="flex items-center gap-3"><div class="w-12 h-12 img-placeholder rounded-md"></div><div class="flex-1"><div class="text-sm font-medium">Product</div><div class="text-xs text-gray-400">Details</div></div><div class="text-sm text-gray-500">$45.5</div></div>
            <div class="flex items-center gap-3"><div class="w-12 h-12 img-placeholder rounded-md"></div><div class="flex-1"><div class="text-sm font-medium">Product</div><div class="text-xs text-gray-400">Details</div></div><div class="text-sm text-gray-500">$45.5</div></div>
            <div class="flex items-center gap-3"><div class="w-12 h-12 img-placeholder rounded-md"></div><div class="flex-1"><div class="text-sm font-medium">Product</div><div class="text-xs text-gray-400">Details</div></div><div class="text-sm text-gray-500">$45.5</div></div>
            <div class="flex items-center gap-3"><div class="w-12 h-12 img-placeholder rounded-md"></div><div class="flex-1"><div class="text-sm font-medium">Product</div><div class="text-xs text-gray-400">Details</div></div><div class="text-sm text-gray-500">$45.5</div></div>
            <div class="flex items-center gap-3"><div class="w-12 h-12 img-placeholder rounded-md"></div><div class="flex-1"><div class="text-sm font-medium">Product</div><div class="text-xs text-gray-400">Details</div></div><div class="text-sm text-gray-500">$45.5</div></div>
          </div>
        </div>
      </div>
    </aside>
  </div>
 <script src="script.js"></script>
</body>
</html>