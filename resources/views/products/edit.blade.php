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
                    <div class="car" style="width: 80%; margin: auto; background: rgb('250,250,250')">
                        <h1>Edit Product</h1>
                        <form action="{{ route('products.update', $product->id) }}" method="post">
                            @csrf
                            @method('PUT')
                            <div class="row">
                                <div class="form-group">
                                    <label for="">Name <strong style="color: red">*</strong></label>
                                    <input type="text" name="name" value="{{ $product->name }}">
                                </div>
                                <div class="form-group">
                                    <label for="">Description</label>
                                    <textarea name="description" id="" cols="30" rows="10">{{ $product->description }}</textarea>
                                </div>
                                <div class="form-group">
                                    <label for="">Price <strong style="color: red">*</strong></label>
                                    <input type="text" name="price" value="{{ $product->price }}">
                                </div>
                                <div class="form-group">
                                    <label for="">image</label>
                                    <input type="file" name="image">
                                </div>
                                <button type="submit">Update Product</button>
                            </div>
                            <a href="{{ route('products.index') }}">Back</a>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
