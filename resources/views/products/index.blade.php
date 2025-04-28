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
                    <div
                        style="width: 80%; margin: auto; background: rgb(250,250,250); padding: 20px; border-radius: 10px; ">
                        <div class="card">
                            <div class="card-header" style="display: flex; justify-content: space-between">
                                <p>Products</p>
                                <a href="{{ route('products.create') }}">New Product</a>
                            </div>
                            @if ($message = Session::get('success'))
                                <p>{{ $message }}</p>
                            @endif
                            <div class="card-body" style="width: 100%">
                                <table border="1" style="width: 100%">
                                    <tr>
                                        <th>Name</th>
                                        <th>Description</th>
                                        <th>Price</th>
                                        <th>Image</th>
                                        <th>Action</th>
                                    </tr>
                                    @foreach ($products as $product)
                                        <tr>
                                            <td>{{ $product->name }}</td>
                                            <td>{{ $product->description }}</td>
                                            <td>{{ $product->price }}</td>
                                            <td>{{ $product->image }}</td>
                                            <td>
                                                <a href="{{ route('products.edit', $product->id) }}">Edit</a>
                                                <form action="{{ route('products.destroy', $product->id) }}"
                                                    method="post" style="display: inline">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit"
                                                        onclick="return confirm('Sure?')">Delete</button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
