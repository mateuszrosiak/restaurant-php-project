<div class="shadow-lg rounded-lg">
    <a href="#">
        <img src="<?= $product['image']; ?>" alt="burger image" class="rounded-tl-lg rounded-tr-lg">
    </a>
    <div class="p-5">
        <h><a href="#"><?= htmlentities($product['name']); ?></a></h>
        <h6 class="text-gray-700"<?= htmlentities($product['price']); ?>$</h6>
        <div class=" flex flex-row my-3">
            <div class="border-2 border-gray-300 text-gray-400 rounded-md p-1 text-xs mr-1"><a href="#">xs</a></div>
            <div class="border-2 border-gray-300 text-gray-400 rounded-md p-1 text-xs mr-1"><a href="#">medium</a></div>
            <div class="border-2 border-gray-300 text-gray-400 rounded-md p-1 text-xs mr-1"><a href="#">xl</a></div>
        </div>

        <div class="flex flex-row my-4 justify-start">
            <button type="submit" class="mr-2 text-sm bg-gradient-to-r from-red-700 to-pink-500 text-gray-50 py-2 px-3 rounded-full flex fkex-row items-center hover:from-pink-600 hover:to-pink-600">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 mr-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 11V7a4 4 0 00-8 0v4M5 9h14l1 12H4L5 9z" />
                </svg>
                Add to basket
            </button>
            <a href="#" class="text-sm bg-indigo-600 hover:bg-purple-700 text-gray-50 py-2 px-3 rounded-full flex fkex-row items-center">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3" />
                </svg>
                Details
            </a>
        </div>
    </div>
</div>