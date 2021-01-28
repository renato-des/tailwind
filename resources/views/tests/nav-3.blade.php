@extends('layouts.app')

@section('styles')
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>
@endsection

@section('content')
    {{-- <div class="h-24 bg-gradient-to-r from-caixa_blue-500 to-turquesa"></div>
    --}}
    {{-- <nav x-data="{open:false}" class="border-t border-turquesa-400 bg-caixa_blue-600">
        --}}
        <div>
            <nav x-data="{ open: false }" @keydown.window.escape="open = false" class="bg-caixa_blue-500">
                <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                    <div class="flex items-center justify-between h-16">
                        <div class="flex items-center">
                            <div class="flex-shrink-0">
                                <svg class="h-8 w-8" viewBox="0 0 512 512" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <g clip-path="url(#clip0)">
                                        <path
                                            d="M213.765 308.934V344.535L102.4 289.682V259.241L213.765 204.393V240.244L136.167 274.217L213.765 308.934ZM282.624 203.636L251.623 348.684C250.829 352.491 249.926 356.267 248.914 360.006C248.141 362.775 246.958 364.946 245.376 366.476C243.789 368.035 241.48 368.803 238.454 368.803C230.928 368.803 227.159 365.103 227.159 357.737C227.159 355.805 227.902 350.988 229.376 343.273L260.265 198.226C261.888 190.511 263.435 185.228 264.909 182.377C266.389 179.526 269.266 178.1 273.552 178.1C277.243 178.1 280.059 179.107 282.015 181.12C283.971 183.133 284.949 185.903 284.949 189.423C284.949 192.023 284.171 196.759 282.624 203.636ZM409.6 289.682L298.235 344.786V309.184L376.059 274.467L298.235 240.244V204.893L409.6 259.491V289.682Z"
                                            fill="white" />
                                        <path
                                            d="M481.28 0H30.72C22.5725 0 14.7588 3.67791 8.99768 10.2246C3.23656 16.7714 0 25.6506 0 34.9091L0 477.091C0 486.349 3.23656 495.229 8.99768 501.775C14.7588 508.322 22.5725 512 30.72 512H481.28C489.427 512 497.241 508.322 503.002 501.775C508.763 495.229 512 486.349 512 477.091V34.9091C512 25.6506 508.763 16.7714 503.002 10.2246C497.241 3.67791 489.427 0 481.28 0ZM404.48 23.2727C415.77 23.2727 424.96 33.7105 424.96 46.5455C424.96 59.3804 415.77 69.8182 404.48 69.8182C393.19 69.8182 384 59.3804 384 46.5455C384 33.7105 393.19 23.2727 404.48 23.2727ZM348.16 23.2727C359.45 23.2727 368.64 33.7105 368.64 46.5455C368.64 59.3804 359.45 69.8182 348.16 69.8182C336.87 69.8182 327.68 59.3804 327.68 46.5455C327.68 33.7105 336.87 23.2727 348.16 23.2727ZM481.28 477.091H30.72V93.0909H481.28V477.091ZM460.8 69.8182C449.51 69.8182 440.32 59.3804 440.32 46.5455C440.32 33.7105 449.51 23.2727 460.8 23.2727C472.09 23.2727 481.28 33.7105 481.28 46.5455C481.28 59.3804 472.09 69.8182 460.8 69.8182Z"
                                            fill="white" />
                                    </g>
                                    <defs>
                                        <clipPath id="clip0">
                                            <rect width="512" height="512" fill="white" />
                                        </clipPath>
                                    </defs>
                                </svg>
                            </div>
                            <div class="hidden md:block">
                                <div class="ml-10 flex items-baseline">
                                    <a href="#"
                                        class="px-3 py-2 rounded-md text-sm font-medium text-white bg-gray-900 focus:outline-none focus:text-white focus:bg-gray-700">Dashboard</a>
                                    <a href="#"
                                        class="ml-4 px-3 py-2 rounded-md text-sm font-medium text-gray-300 hover:text-white hover:bg-gray-700 focus:outline-none focus:text-white focus:bg-gray-700">Team</a>
                                    <a href="#"
                                        class="ml-4 px-3 py-2 rounded-md text-sm font-medium text-gray-300 hover:text-white hover:bg-gray-700 focus:outline-none focus:text-white focus:bg-gray-700">Projects</a>
                                    <a href="#"
                                        class="ml-4 px-3 py-2 rounded-md text-sm font-medium text-gray-300 hover:text-white hover:bg-gray-700 focus:outline-none focus:text-white focus:bg-gray-700">Calendar</a>
                                    <a href="#"
                                        class="ml-4 px-3 py-2 rounded-md text-sm font-medium text-gray-300 hover:text-white hover:bg-gray-700 focus:outline-none focus:text-white focus:bg-gray-700">Reports</a>
                                    <div x-data="{ open: false }" class="">
                                        <button @click="open = true"
                                            class="inline-flex ml-4 px-3 py-2 rounded-md  text-sm font-medium text-gray-300 hover:text-white focus:outline-none focus:text-white focus:bg-gray-700">
                                            DropDown
                                            <!-- Heroicon name: chevron-down -->
                                            <svg class="-mr-1 ml-2 h-5 w-5" xmlns="http://www.w3.org/2000/svg"
                                                viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                                <path fill-rule="evenodd"
                                                    d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                                    clip-rule="evenodd" />
                                            </svg>
                                        </button>
                                        <div x-show="open" @click.away="open = false"
                                            class="origin-top-right absolute right-0 mt-2 w-56 rounded-md shadow-lg bg-white ring-1 ring-black ring-opacity-5">
                                            <a href="#"
                                                class="block px-4 py-2 text-sm text-gray-700 hover:bg-blue-500 hover:text-gray-50"
                                                role="menuitem">Account settings</a> <a href="#"
                                                class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 hover:text-gray-900"
                                                role="menuitem">Account settings</a> <a href="#"
                                                class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 hover:text-gray-900"
                                                role="menuitem">Account settings</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="hidden md:block">
                            <div class="ml-4 flex items-center md:ml-6">
                                <button
                                    class="p-1 border-2 border-transparent text-gray-400 rounded-full hover:text-white focus:outline-none focus:text-white focus:bg-gray-700"
                                    aria-label="Notifications">
                                    <svg class="h-6 w-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M15 17h5l-1.405-1.405A2.032 2.032 0 0118 14.158V11a6.002 6.002 0 00-4-5.659V5a2 2 0 10-4 0v.341C7.67 6.165 6 8.388 6 11v3.159c0 .538-.214 1.055-.595 1.436L4 17h5m6 0v1a3 3 0 11-6 0v-1m6 0H9" />
                                    </svg>
                                </button>
                                <div @click.away="open = false" class="ml-3 relative" x-data="{ open: false }">
                                    <div>
                                        <button @click="open = !open"
                                            class="max-w-xs flex items-center text-sm rounded-full text-white focus:outline-none focus:shadow-solid"
                                            id="user-menu" aria-label="User menu" aria-haspopup="true"
                                            x-bind:aria-expanded="open">
                                            <img class="h-8 w-8 rounded-full"
                                                src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80"
                                                alt="" />
                                        </button>
                                    </div>
                                    <div x-show="open" x-transition:enter="transition ease-out duration-100"
                                        x-transition:enter-start="transform opacity-0 scale-95"
                                        x-transition:enter-end="transform opacity-100 scale-100"
                                        x-transition:leave="transition ease-in duration-75"
                                        x-transition:leave-start="transform opacity-100 scale-100"
                                        x-transition:leave-end="transform opacity-0 scale-95"
                                        class="origin-top-right absolute right-0 mt-2 w-48 rounded-md shadow-lg">
                                        <div class="py-1 rounded-md bg-white shadow-xs">
                                            <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Your
                                                Profile</a>
                                            <a href="#"
                                                class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Settings</a>
                                            <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Sign
                                                out</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="-mr-2 flex md:hidden">
                            <button @click="open = !open"
                                class="inline-flex items-center justify-center p-2 rounded-md text-gray-400 hover:text-white hover:bg-gray-700 focus:outline-none focus:bg-gray-700 focus:text-white"
                                x-bind:aria-label="open ? 'Close main menu' : 'Main menu'" x-bind:aria-expanded="open">
                                <svg class="h-6 w-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                                    <path x-bind:class="{'hidden': open, 'inline-flex': !open }" class="inline-flex"
                                        stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M4 6h16M4 12h16M4 18h16" />
                                    <path x-bind:class="{'hidden': !open, 'inline-flex': open }" class="hidden"
                                        stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M6 18L18 6M6 6l12 12" />
                                </svg>
                            </button>
                        </div>
                    </div>
                </div>
                <div x-bind:class="{'block': open, 'hidden': !open}" class="hidden md:hidden">
                    <div class="px-2 pt-2 pb-3 sm:px-3">
                        <a href="#"
                            class="block px-3 py-2 rounded-md text-base font-medium text-white bg-gray-900 focus:outline-none focus:text-white focus:bg-gray-700">Dashboard</a>
                        <a href="#"
                            class="mt-1 block px-3 py-2 rounded-md text-base font-medium text-gray-300 hover:text-white hover:bg-gray-700 focus:outline-none focus:text-white focus:bg-gray-700">Team</a>
                        <a href="#"
                            class="mt-1 block px-3 py-2 rounded-md text-base font-medium text-gray-300 hover:text-white hover:bg-gray-700 focus:outline-none focus:text-white focus:bg-gray-700">Projects</a>
                        <a href="#"
                            class="mt-1 block px-3 py-2 rounded-md text-base font-medium text-gray-300 hover:text-white hover:bg-gray-700 focus:outline-none focus:text-white focus:bg-gray-700">Calendar</a>
                        <a href="#"
                            class="mt-1 block px-3 py-2 rounded-md text-base font-medium text-gray-300 hover:text-white hover:bg-gray-700 focus:outline-none focus:text-white focus:bg-gray-700">Reports</a>
                        <!-- dropdown -->

                        <!-- dropdown -->
                    </div>
                    <div class="pt-4 pb-3 border-t border-gray-700">
                        <div class="flex items-center px-5">
                            <div class="flex-shrink-0">
                                <img class="h-10 w-10 rounded-full"
                                    src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80"
                                    alt="" />
                            </div>
                            <div class="ml-3">
                                <div class="text-base font-medium leading-none text-white">
                                    Tom Cook
                                </div>
                                <div class="mt-1 text-sm font-medium leading-none text-gray-400">
                                    tom@example.com
                                </div>
                            </div>
                        </div>
                        <div class="mt-3 px-2" role="menu" aria-orientation="vertical" aria-labelledby="user-menu"
                            role="menuitem">
                            <a href="#"
                                class="block px-3 py-2 rounded-md text-base font-medium text-gray-400 hover:text-white hover:bg-gray-700 focus:outline-none focus:text-white focus:bg-gray-700"
                                role="menuitem">Your Profile</a>
                            <a href="#"
                                class="mt-1 block px-3 py-2 rounded-md text-base font-medium text-gray-400 hover:text-white hover:bg-gray-700 focus:outline-none focus:text-white focus:bg-gray-700"
                                role="menuitem">Settings</a>
                            <a href="#"
                                class="mt-1 block px-3 py-2 rounded-md text-base font-medium text-gray-400 hover:text-white hover:bg-gray-700 focus:outline-none focus:text-white focus:bg-gray-700"
                                role="menuitem">Sign out</a>
                        </div>
                    </div>
                </div>
            </nav>
            <header class="bg-white shadow">
                <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                    <h1 class="text-3xl font-bold leading-tight text-gray-900">
                        All Posts
                    </h1>
                </div>
            </header>

        </div>
        <script>
            // function alpineInit() {
            //     return {
            //         isLoading: true,
            //         posts: [],
            //         currentUrl: null,
            //         firstUrl: "https://jsonplaceholder.typicode.com/posts?_page=1&_limit=15&_expand=user",
            //         nextUrl: null,
            //         prevUrl: null,
            //         lastUrl: null,
            //         total: null,
            //         currentPage: 1,
            //         perPage: 15,
            //         visiblePages: 3,
            //         totalPages() {
            //             return Math.round(this.total / this.perPage);
            //         },
            //         startPage() {
            //             if (this.currentPage == 1) {
            //                 return 1;
            //             }
            //             if (this.currentPage == this.totalPages()) {
            //                 return this.totalPages() - this.visiblePages + 1;
            //             }
            //             return this.currentPage - 1;
            //         },
            //         endPage() {
            //             return Math.min(
            //                 this.startPage() + this.visiblePages - 1,
            //                 this.totalPages()
            //             );
            //         },
            //         pages() {
            //             const range = [];
            //             for (let i = this.startPage(); i <= this.endPage(); i += 1) {
            //                 range.push({
            //                     name: i,
            //                     isActive: i == this.currentPage,
            //                     url: `https://jsonplaceholder.typicode.com/posts?_page=${i}&_limit=15&_expand=user`,
            //                 });
            //             }
            //             return range;
            //         },
            //         firstItem() {
            //             return this.perPage * this.currentPage - 15 + 1;
            //         },
            //         lastItem() {
            //             let lastItem = this.perPage * this.currentPage;
            //             if (lastItem > this.total) {
            //                 return this.total;
            //             }
            //             return this.perPage * this.currentPage;
            //         },
            //         init(url = this.firstUrl) {
            //             this.isLoading = true;
            //             this.currentUrl = url;
            //             let params = new URL(this.currentUrl).searchParams;
            //             this.currentPage = params.get("_page");
            //             this.perPage = params.get("_limit");
            //             fetch(`${this.currentUrl}`).then((response) => {
            //                 this.total = response.headers.get("x-total-count");
            //                 let formattedLinks = [];
            //                 let links = response.headers.get("link");
            //                 if (typeof links === "string") {
            //                     let extractedArr = links.split(", ");
            //                     extractedArr.forEach((val) => {
            //                         let values = val.split("; ");
            //                         let type = values[1].slice(5, -1);
            //                         let url = values[0].slice(1, -1);
            //                         formattedLinks[type] = url;
            //                     });
            //                     this.firstUrl = formattedLinks["first"];
            //                     this.prevUrl = formattedLinks.prev ?
            //                         formattedLinks["prev"] :
            //                         null;
            //                     this.nextUrl = formattedLinks.next ?
            //                         formattedLinks["next"] :
            //                         null;
            //                     this.lastUrl = formattedLinks["last"];
            //                 }
            //                 response.json().then((json) => {
            //                     this.isLoading = false;
            //                     this.posts = json;
            //                 });
            //             });
            //         },
            //     };
            // }

        </script>







    @endsection
