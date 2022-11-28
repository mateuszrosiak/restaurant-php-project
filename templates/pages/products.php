<div class="py-20">
    <div class=" flex flex-row justify-between mb-5">
        <h2 class="text-3xl">Burgers</h2>
        <a href="#" class="text-xl flex flex-row">
            View All
            <svg xmlns="http://www.w3.org/2000/svg" class="h-7 w-5 ml-1"
                 fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round"
                      stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"/>
            </svg>
        </a>
    </div>


    <div class="grid grid-flow-row grid-cols-1 md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-10">
        <?php
        foreach ($params['products'] as $product) {
            if ($product['category_id'] == 2) {
                include(dirname(__DIR__, 1)
                        . "/components/_single-product.php");
            }
        }
        ?>
    </div>

    <div class=" flex flex-row justify-between mb-5 pt-20">
        <h2 class="text-3xl">Pizzas</h2>
        <a href="#" class="text-xl flex flex-row">
            View All
            <svg xmlns="http://www.w3.org/2000/svg" class="h-7 w-5 ml-1"
                 fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round"
                      stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"/>
            </svg>
        </a>
    </div>

    <div class="grid grid-flow-row grid-cols-1 md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-10">
        <?php
        foreach ($params['products'] as $product) {
            if ($product['category_id'] == 1) {
                include(dirname(__DIR__, 1)
                        . "/components/_single-product.php");
            }
        }
        ?>
    </div>

</div>