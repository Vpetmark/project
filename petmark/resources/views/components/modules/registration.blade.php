
<div class="p-6">
    <form method="POST" action="{{ route('product.store') }}">
        @csrf
        <div class="mb-6">
            <label for="product" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray">
                Product Name
            </label>
            <input type="text" id="product" name="product"
                class="bg-white-50 border border-white-300 text-white-900 text-sm rounded-lg focus:border-blue-500 block w-full p-2.5 dark:bg-white-700 dark:text-black"
                placeholder="Enter Product Name here.." />
            @error('product')
                <i style+"color: red"> {{ $message}}</i>
                @enderror
        </div>

        <div class="mb-6">
            <label for="description" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray">
                Product Description
            </label>
            <textarea rows="5" id="description" name="description"
                class="bg-white-50 border border-white-300 text-white-900 text-sm rounded-lg focus:border-blue-500 block w-full p-2.5 dark:bg-white-700 dark:text-black"
                placeholder="Enter Description here.."></textarea>
            @error('description')
            <i style="color: red"> {{ $message }}</i>
            @enderror
        </div>

        <div class="grid gap-6 mb-6 md:grid-cols-2">
            <div>
                <label for="price" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray">
                    Product Price
                </label>
                <input type="number" id="price" name="price"
                    class="bg-white-50 border border-white-300 text-white-900 text-sm rounded-lg focus:border-blue-500 block w-full p-2.5 dark:bg-white-700 dark:text-black"
                    placeholder="0.00" />
                @error('price')
            <i style="color: red"> {{ $message }}</i>
            @enderror
            </div>
            <div>
                <label for="quantity" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray">
                    Product Quantity
                </label>
                <input type="number" id="quantity" name="quantity"
                    class="bg-white-50 border border-white-300 text-white-900 text-sm rounded-lg focus:border-blue-500 block w-full p-2.5 dark:bg-white-700 dark:text-black"
                    placeholder="0" />
                 @error('quantity')
            <i style="color: red"> {{ $message }}</i>
            @enderror
            </div>
        </div>
        <hr>
   <br>
<button type="submit"
    class="text-gray-900 block bg-white border border-gray-300 focus:outline-none
    hover:bg-gray-100 focus:ring-4 focus:ring-gray-100 font-medium rounded-full text-lg w-full p-2.5 me-2 mb-2">
    Submit Registration
</button>
