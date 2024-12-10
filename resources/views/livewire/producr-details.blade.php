<div>
    <div class="flex gap-5 p-20">
        <img src="{{ asset('images/1.jpg') }}" alt="product-images" class="rounded-t-lg object-cover" height="400px"
            width="400px">
        <div>
        <h2 class="p-1 font-medium text-2xl line-clamp-2">Product Title</h2>
        <h2 class="p-1 text-gray-500 line-clamp-4">Lorem ipsum dolor sit amet consectetur, adipisicing elit. A eaque
            voluptatum odio non veniam, asperiores rem, facere harum eveniet exercitationem, totam laudantium error
            iusto dignissimos quos aliquam ad placeat quo.</h2>
        <div class="flex grap-10">
            <div class="bg-green-200 p-1 rounded-md">
                <h2 class="text-1xl">Outfit</h2>
            </div>
            <h2 class="text-2xl font-medium">Rp.300.000</h2>
        </div>
    <div class="my-3">
        <a
        class="flex gap-2 justify-center w-full rounded bg-green-600 px-12 py-2 text-center text-sm font-medium text-white shadow hover:bg-green-700 focus:outline-none focus:ring active-bg-green-500 sm:w-auto"
            href="#">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="size-5">
                <path
                    d="M1 1.75A.75.75 0 0 1 1.75 1h1.628a1.75 1.75 0 0 1 1.734 1.51L5.18 3a65.25 65.25 0 0 1 13.36 1.412.75.75 0 0 1 .58.875 48.645 48.645 0 0 1-1.618 6.2.75.75 0 0 1-.712.513H6a2.503 2.503 0 0 0-2.292 1.5H17.25a.75.75 0 0 1 0 1.5H2.76a.75.75 0 0 1-.748-.807 4.002 4.002 0 0 1 2.716-3.486L3.626 2.716a.25.25 0 0 0-.248-.216H1.75A.75.75 0 0 1 1 1.75ZM6 17.5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0ZM15.5 19a1.5 1.5 0 1 0 0-3 1.5 1.5 0 0 0 0 3Z" />
            </svg>
            <span> Add to cart</span>
        </a>
    </div>

    <!-- related products -->
    <div class="my-5 px-20 pt-5">
        <h5 class="text-2xl font-medium">Related Products</h5>
        <livewire:product-listing />
    </div>
</div>
