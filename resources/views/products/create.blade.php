<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <h1 class="text-2xl font-semibold text-center text-gray-800 mb-6">Create New Product</h1>
                    <form action="{{ route('products.store') }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="space-y-6">
                            <!-- Product Name -->
                            <div class="form-group">
                                <label for="name" class="block text-gray-700 dark:text-gray-300">Name <span
                                        class="text-red-500">*</span></label>
                                <input type="text" name="name" id="name"
                                    class="w-full p-3 border border-gray-300 rounded-lg shadow-sm focus:outline-none focus:ring-2 focus:ring-indigo-500"
                                    required>
                            </div>

                            <!-- Product Description -->
                            <div class="form-group">
                                <label for="description"
                                    class="block text-gray-700 dark:text-gray-300">Description</label>
                                <textarea name="description" id="description" cols="30" rows="5"
                                    class="w-full p-3 border border-gray-300 rounded-lg shadow-sm focus:outline-none focus:ring-2 focus:ring-indigo-500"></textarea>
                            </div>

                            <!-- Product Price -->
                            <div class="form-group">
                                <label for="price" class="block text-gray-700 dark:text-gray-300">Price <span
                                        class="text-red-500">*</span></label>
                                <input type="text" name="price" id="price"
                                    class="w-full p-3 border border-gray-300 rounded-lg shadow-sm focus:outline-none focus:ring-2 focus:ring-indigo-500"
                                    required>
                            </div>

                            <!-- Product Image -->
                            <div class="form-group">
                                <label for="image" class="block text-gray-700 dark:text-gray-300">Image</label>
                                <input type="file" name="image" id="image"
                                    class="w-full p-3 border border-gray-300 rounded-lg shadow-sm focus:outline-none focus:ring-2 focus:ring-indigo-500">
                            </div>

                            <!-- Buttons -->
                            <div class="flex items-center justify-between">
                                <button type="submit"
                                    class="bg-indigo-600 text-white px-6 py-3 rounded-lg hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-indigo-500">Save
                                    Product</button>
                                <a href="{{ route('products.index') }}"
                                    class="text-indigo-600 hover:text-indigo-700 focus:outline-none focus:ring-2 focus:ring-indigo-500">Back</a>
                            </div>
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>
</x-app-layout>
