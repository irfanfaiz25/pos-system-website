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
                </tbody>
            </table>
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
                <div class="bg-white dark:bg-dark-main-bg px-6 pt-6 pb-4">
                    <h3 class="text-lg font-semibold leading-6 text-gray-900 dark:text-dark-main-text">
                        Add New Product
                    </h3>
                </div>

                <!-- Modal Body -->
                <div class="px-6 py-4">
                    <form>
                        <div class="mb-5">
                            <label for="name"
                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Product
                                Name</label>
                            <input type="text" id="name"
                                class="shadow-xs bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-orange-500 focus:border-orange-500 block w-full p-2.5 dark:bg-dark-main-bg dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-orange-500 dark:focus:border-orange-500 dark:shadow-xs-light"
                                placeholder="Burger" required />
                        </div>
                    </form>
                </div>

                <div
                    class="flex items-center justify-end space-x-2 p-4 md:p-5 border-t border-gray-200 rounded-b dark:border-gray-600">
                    <button type="button" wire:click='closeAddModal'
                        class="py-1.5 px-5 text-sm font-medium text-main-text dark:text-dark-main-text border border-gray-500 hover:bg-gray-500 hover:text-dark-main-text rounded-md">Cancel</button>
                    <button type="button"
                        class="text-white bg-secondary-bg hover:bg-secondary-bg/90 border border-main-border px-4 py-1.5 text-sm text-center rounded-md">Add</button>
                </div>
            </div>
        </div>
    </div>
</div>
