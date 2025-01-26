<div>
    <livewire:action-table :searchPlaceholder="'Search products...'" :filterOptions="collect([['id' => 0, 'name' => 'All'], ['id' => 2, 'name' => 'foods']])" :createButtonText="'Add New Product'" :showFilter="true" />

    <div class="relative mt-8">
        <div class="overflow-x-auto">
            <table class="w-full text-sm text-left text-main-text dark:text-dark-main-text">
                <thead>
                    <tr class="px-3 bg-main-bg dark:bg-dark-main-bg text-sm">
                        <th class="rounded-s-md px-2 py-3 text-center">No</th>
                        <th class="px-2 py-3">Image</th>
                        <th class="px-2 py-3">Name</th>
                        <th class="px-2 py-3">Category</th>
                        <th class="px-2 py-3">Price</th>
                        <th class="rounded-e-md px-2 py-3"></th>
                    </tr>
                </thead>
                <tbody>
                    <tr class="h-2"></tr>
                    <tr class="px-3 bg-main-bg dark:bg-dark-main-bg text-sm">
                        <td class="rounded-s-md px-2 py-3 text-center">
                            1
                        </td>
                        <td class="px-2 py-3">
                            {{-- <div class="h-14 w-20 bg-gray-300 rounded-md"></div> --}}
                            <img src="{{ asset('storage/img/product2.jpg') }}" alt="product"
                                class="h-14 w-20 rounded-md object-cover">
                        </td>
                        <td class="px-2 py-3">
                            Vegetable Burger
                        </td>
                        <td class="px-2 py-3">
                            Burger
                        </td>
                        <td class="px-2 py-3">
                            IDR 19,000
                        </td>
                        <td class="rounded-e-md px-2 py-3">
                            <div x-data="{ isOpen: false }">
                                <button
                                    class="w-6 h-6 bg-gray-100 hover:bg-gray-200 border border-gray-300 text-main-text dark:text-dark-main-text rounded-md flex justify-center items-center cursor-pointer transition-all duration-300"
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
                </tbody>
            </table>
        </div>
    </div>
</div>
