<div>
    <livewire:action-table :searchPlaceholder="'Search products...'" :filterOptions="$categories" :createButtonText="'Add New Product'" :showFilter="true" />

    <div class="relative mt-8">
        <div class="overflow-x-auto">
            <table class="w-full text-sm text-left text-main-text dark:text-dark-main-text">
                <thead>
                    <tr class="px-3 bg-main-bg dark:bg-dark-main-bg text-sm">
                        <th class="rounded-s-md px-2 py-3 text-center">No</th>
                        <th class="px-2 py-3">Image</th>
                        <th class="px-2 py-3">Name</th>
                        <th class="px-2 py-3">Description</th>
                        <th class="px-2 py-3">Category</th>
                        <th class="px-2 py-3">Price</th>
                        <th class="rounded-e-md px-2 py-3"></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($products as $product)
                        <tr class="h-2"></tr>
                        <tr class="px-3 bg-main-bg dark:bg-dark-main-bg text-sm">
                            <td class="rounded-s-md px-2 py-3 text-center">
                                {{ ($products->currentPage() - 1) * $products->perPage() + $loop->iteration }}
                            </td>
                            <td class="px-2 py-3">
                                @if ($product->image_path)
                                    <img src="{{ asset($product->image_path) }}" alt="{{ $product->name }}"
                                        class="h-14 w-20 rounded-md object-cover">
                                @else
                                    <div
                                        class="h-14 w-20 bg-gray-200 rounded-md shadow-sm flex justify-center items-center">
                                        <i class="fa-regular fa-image text-gray-400"></i>
                                    </div>
                                @endif
                            </td>
                            <td class="px-2 py-3">
                                {{ $product->name ?? '-' }}
                            </td>
                            <td class="px-2 py-3">
                                {{ $product->description ?? '-' }}
                            </td>
                            <td class="px-2 py-3">
                                {{ $product->category->name ?? '-' }}
                            </td>
                            <td class="px-2 py-3">
                                @rupiah($product->price)
                            </td>
                            <td class="rounded-e-md px-2 py-3">
                                <div x-data="{ isOpen: false }">
                                    <button
                                        class="w-6 h-6 bg-gray-100 dark:bg-dark-tertiary-bg hover:bg-gray-200 border border-gray-300 text-main-text dark:text-dark-main-text rounded-md flex justify-center items-center cursor-pointer transition-all duration-300"
                                        @click="isOpen = !isOpen">
                                        <i class="fa-solid text-sm transition-transform duration-300"
                                            :class="isOpen ? 'fa-ellipsis rotate-90' : 'fa-ellipsis'"></i>
                                    </button>
                                    <ul role="menu" x-show="isOpen" @click.away="isOpen = false"
                                        class="absolute mt-2 right-16 z-50 min-w-36 max-w-72 overflow-auto rounded-lg border border-slate-200 bg-main-bg p-1.5 shadow-lg focus:outline-none transition-all duration-500">
                                        <li role="menuitem"
                                            class="cursor-pointer rounded-md text-main-text dark:text-dark-main-text flex w-full text-sm items-center p-3 transition-all hover:bg-gray-100 focus:bg-gray-100">
                                            <i class="fa-solid fa-pencil text-blue-500 pr-2"></i>
                                            Edit
                                        </li>
                                        <li role="menuitem"
                                            class="cursor-pointer rounded-md text-main-text dark:text-dark-main-text flex w-full text-sm items-center p-3 transition-all hover:bg-gray-100 focus:bg-gray-100">
                                            <i class="fa-solid fa-trash text-rose-500 pr-2"></i>
                                            Delete
                                        </li>
                                    </ul>
                                </div>
                            </td>
                        </tr>
                    @endforeach

                </tbody>
            </table>
        </div>

        <div class="mt-4">
            {{ $products->links('vendor.livewire.tailwind') }}
        </div>
    </div>

    {{-- add modal --}}
    <div x-show="$wire.showAddModal" x-transition:enter="transition ease-out duration-300"
        x-transition:enter-start="opacity-0" x-transition:enter-end="opacity-100"
        x-transition:leave="transition ease-in duration-200" x-transition:leave-start="opacity-100"
        x-transition:leave-end="opacity-0" class="fixed inset-0 z-50 overflow-y-auto" style="display: none;">
        <!-- Backdrop -->
        <div class="fixed inset-0 bg-black/75" aria-hidden="true" wire:click='closeAddModal'></div>

        <!-- Modal Container -->
        <div class="flex items-center justify-center min-h-screen px-4 pt-4 pb-20 text-center sm:block sm:p-0">
            <!-- Modal Content -->
            <div x-show="$wire.showAddModal" x-transition:enter="transition ease-out duration-300"
                x-transition:enter-start="opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95"
                x-transition:enter-end="opacity-100 translate-y-0 sm:scale-100"
                x-transition:leave="transition ease-in duration-200"
                x-transition:leave-start="opacity-100 translate-y-0 sm:scale-100"
                x-transition:leave-end="opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95"
                class="inline-block align-bottom bg-white dark:bg-dark-main-bg rounded-lg text-left overflow-hidden shadow-xl transform transition-all sm:my-8 sm:align-middle sm:max-w-3xl sm:w-full">
                <!-- Modal Header -->
                <div class="bg-white dark:bg-dark-main-bg px-6 pt-6 pb-4 relative">
                    <button type="button" wire:click='closeAddModal'
                        class="absolute top-4 right-4 text-gray-400 hover:text-gray-500">
                        <i class="fa-solid fa-xmark text-lg"></i>
                    </button>
                    <h3 class="text-lg font-semibold leading-6 text-gray-900 dark:text-dark-main-text">
                        Add New Product
                    </h3>
                </div>

                <!-- Modal Body -->
                <form enctype="multipart/form-data" wire:submit='handleAddProduct'>
                    <div class="px-6 py-4 font-normal text-sm">
                        <div class="mb-5">
                            <label for="image"
                                class="block mb-1 text-sm font-medium text-gray-900 dark:text-white">Product
                                Image</label>
                            <div class="flex items-center space-x-4">
                                @if ($image)
                                    <div
                                        class="w-52 h-24 bg-gray-100 dark:bg-dark-tertiary-bg rounded-lg flex items-center justify-center overflow-hidden">
                                        <img src="{{ $image->temporaryUrl() }}" id="preview" alt="Preview"
                                            class="w-full h-full object-cover">
                                    </div>
                                @else
                                    <div
                                        class="w-52 h-24 bg-gray-100 dark:bg-dark-tertiary-bg rounded-lg shadow-sm flex justify-center items-center">
                                        <i class="fa-regular fa-image text-lg text-gray-400"></i>
                                    </div>
                                @endif

                                <input wire:model='image' type="file" id="image" accept="image/*"
                                    class="shadow-xs bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg block w-full p-2.5 dark:bg-dark-main-bg dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:shadow-xs-light" />
                            </div>
                        </div>

                        <div class="mb-2">
                            <label for="name"
                                class="block mb-1 text-sm font-medium text-gray-900 dark:text-white">Product
                                Name</label>
                            <input wire:model='name' type="text" id="name"
                                class="shadow-xs bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg block w-full p-2.5 dark:bg-dark-main-bg dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark dark:shadow-xs-light"
                                placeholder="Burger" />
                        </div>
                        <div class="mb-2">
                            <label for="description"
                                class="block mb-1 text-sm font-medium text-gray-900 dark:text-white">
                                Description
                            </label>
                            <textarea wire:model='description' name="description" id="description"
                                class="shadow-xs bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg block w-full p-2.5 dark:bg-dark-main-bg dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:shadow-xs-light"
                                rows="3"></textarea>
                        </div>
                        <div class="mb-2">
                            <label for="category"
                                class="block mb-1 text-sm font-medium text-gray-900 dark:text-white">
                                Category
                            </label>
                            <select wire:model.live.debounce.300ms='categoryId' id="category"
                                class="shadow-xs bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg block w-full p-2.5 dark:bg-dark-main-bg dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:shadow-xs-light font-normal">
                                <option value="" selected>--choose category--</option>
                                @foreach ($categories as $category)
                                    <option value="{{ $category->id }}">{{ $category->name }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="mb-2">
                            <label for="price"
                                class="block mb-1 text-sm font-medium text-gray-900 dark:text-white">
                                Price
                            </label>
                            <input wire:model='price' type="text" id="price"
                                class="shadow-xs bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg block w-full p-2.5 dark:bg-dark-main-bg dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark dark:shadow-xs-light"
                                placeholder="10000" />
                        </div>
                    </div>

                    <div
                        class="flex items-center justify-end space-x-2 p-4 md:p-5 border-t border-gray-200 rounded-b dark:border-gray-600">
                        <button type="button" wire:click='closeAddModal'
                            class="py-1.5 px-5 text-sm font-medium text-main-text dark:text-dark-main-text border border-gray-500 hover:bg-gray-500 hover:text-dark-main-text rounded-md">Cancel</button>
                        <button type="submit"
                            class="text-white bg-secondary-bg hover:bg-secondary-bg/90 border border-main-border px-4 py-1.5 text-sm text-center rounded-md">Add</button>
                    </div>
                </form>

            </div>
        </div>
    </div>
</div>
