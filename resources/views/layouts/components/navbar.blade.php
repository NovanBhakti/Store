<header class="fixed inset-x-0 top-0 z-50">
    <nav class="flex items-center justify-between p-2 md:px-4 backdrop-blur-md shadow-sm" aria-label="Global"
        id="app">
        <div class="flex lg:flex-1">
            <a href="#" class="-m-1.5 p-1.5">
                <span class="sr-only">Your Company</span>
                <img class="h-8 w-auto" src="https://tailwindui.com/img/logos/mark.svg?color=indigo&shade=600"
                    alt="">
            </a>
        </div>
        <div class="flex lg:hidden " id="show">
            <button type="button"
                class="-m-2.5 inline-flex items-center justify-center rounded-md p-2.5 text-gray-700">
                <span class="sr-only">Open main menu</span>
                <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                    aria-hidden="true">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
                </svg>
            </button>
        </div>
        <div class="hidden lg:flex lg:gap-x-12" data-hs-scrollspy="#scrollspy-1"
            data-hs-scrollspy-scrollable-parent="#scrollspy-scrollable-parent-1"
            class="flex flex-col gap-5 mt-5 sm:flex-row sm:items-center sm:justify-end sm:mt-0 sm:pl-5 [--scrollspy-offset:220] md:[--scrollspy-offset:70]">
            <a href="/" class="text-sm font-semibold leading-6 text-gray-900 hover:text-purple">Home</a>
            <a href="/contact" class="text-sm font-semibold leading-6 text-gray-900 hover:text-purple">Timeline</a>
            <a href="/marketplace"
                class="text-sm font-semibold leading-6 text-gray-900 hover:text-purple">Marketplace</a>
            <a href="#fourth" class="text-sm font-semibold leading-6 text-gray-900 hover:text-purple">Company</a>
            @auth
                @if (Auth::user()->Role == 'admin')
                    <a href="#" class="text-sm font-semibold leading-6 text-gray-900">Pendaftar</a>
                @endif
            @endauth
        </div>
        @guest
            <div class="hidden lg:flex lg:flex-1 lg:justify-end">
                <a href="/login">
                    <button
                        class="text-sm font-semibold leading-6 bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 mx-2 rounded-full"
                        id="loginLink">
                        Login
                    </button></a>
                <a href="/register">
                    <button
                        class="text-sm font-semibold leading-6 bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-full"
                        id="registerLink">
                        Register
                    </button></a>
            </div>
        @endguest
        @auth
            @if (Auth::user()->Role == 'member' || Auth::user()->Role == 'admin')
                <div class="hidden lg:flex lg:flex-1 lg:justify-end">
                    <div class="relative justify-center -bottom-2">
                        <button id="dropdownMessageButton" data-dropdown-toggle="dropdownMessage"
                            class="inline-flex items-center text-sm font-medium text-center text-gray-500 focus:outline-none"
                            type="button">
                            <svg width="20px" height="20px" viewBox="0 0 24 24" fill="currentColor"
                                xmlns="http://www.w3.org/2000/svg">
                                <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                                <g id="SVGRepo_iconCarrier">
                                    <rect x="4" y="6" width="16" height="12" rx="2" stroke="currentColor"
                                        stroke-width="2"></rect>
                                    <path d="M4 9L11.1056 12.5528C11.6686 12.8343 12.3314 12.8343 12.8944 12.5528L20 9"
                                        stroke="#FFFFFF" stroke-width="2"></path>
                                </g>
                            </svg>

                            <div class="relative flex">
                                <div
                                    class="relative inline-flex w-3 h-3 bg-red-500 border-2 border-white rounded-full -top-2 right-3 dark:border-gray-900 animate-[bounce_1s_ease-in-out_infinite]">
                                </div>
                            </div>
                        </button>

                        <!-- Dropdown menu -->
                        <div id="dropdownMessage"
                            class="z-20 hidden w-full max-w-sm bg-white divide-y divide-gray-100 rounded-lg shadow dark:bg-gray-800 dark:divide-gray-700 -bottom-150 right-6 fixed"
                            aria-labelledby="dropdownMessageButton">
                            <div
                                class="block px-4 py-2 font-medium text-center text-gray-700 rounded-t-lg bg-gray-50 dark:bg-gray-800 dark:text-white">
                                Messages
                            </div>
                            <div class="divide-y divide-gray-100 dark:divide-gray-700">
                                <a href="#" class="flex px-4 py-3 hover:bg-gray-100 dark:hover:bg-gray-700">
                                    <div class="flex-shrink-0">
                                        <img class="rounded-full w-11 h-11" src="/docs/images/people/profile-picture-1.jpg"
                                            alt="Jese image">
                                        <div
                                            class="absolute flex items-center justify-center w-5 h-5 ml-6 -mt-5 bg-blue-600 border border-white rounded-full dark:border-gray-800">
                                            <svg class="w-2 h-2 text-white" aria-hidden="true"
                                                xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 18 18">
                                                <path
                                                    d="M1 18h16a1 1 0 0 0 1-1v-6h-4.439a.99.99 0 0 0-.908.6 3.978 3.978 0 0 1-7.306 0 .99.99 0 0 0-.908-.6H0v6a1 1 0 0 0 1 1Z" />
                                                <path
                                                    d="M4.439 9a2.99 2.99 0 0 1 2.742 1.8 1.977 1.977 0 0 0 3.638 0A2.99 2.99 0 0 1 13.561 9H17.8L15.977.783A1 1 0 0 0 15 0H3a1 1 0 0 0-.977.783L.2 9h4.239Z" />
                                            </svg>
                                        </div>
                                    </div>
                                    <div class="w-full pl-3">
                                        <div class="text-gray-500 text-sm mb-1.5 dark:text-gray-400">New message from <span
                                                class="font-semibold text-gray-900 dark:text-white">Jese Leos</span>: "Hey,
                                            what's up? All set for the presentation?"</div>
                                        <div class="text-xs text-blue-600 dark:text-blue-500">a few moments ago</div>
                                    </div>
                                </a>
                                <a href="#" class="flex px-4 py-3 hover:bg-gray-100 dark:hover:bg-gray-700">
                                    <div class="flex-shrink-0">
                                        <img class="rounded-full w-11 h-11" src="/docs/images/people/profile-picture-2.jpg"
                                            alt="Joseph image">
                                        <div
                                            class="absolute flex items-center justify-center w-5 h-5 ml-6 -mt-5 bg-gray-900 border border-white rounded-full dark:border-gray-800">
                                            <svg class="w-2 h-2 text-white" aria-hidden="true"
                                                xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                                                viewBox="0 0 20 18">
                                                <path
                                                    d="M6.5 9a4.5 4.5 0 1 0 0-9 4.5 4.5 0 0 0 0 9ZM8 10H5a5.006 5.006 0 0 0-5 5v2a1 1 0 0 0 1 1h11a1 1 0 0 0 1-1v-2a5.006 5.006 0 0 0-5-5Zm11-3h-2V5a1 1 0 0 0-2 0v2h-2a1 1 0 1 0 0 2h2v2a1 1 0 0 0 2 0V9h2a1 1 0 1 0 0-2Z" />
                                            </svg>
                                        </div>
                                    </div>
                                    <div class="w-full pl-3">
                                        <div class="text-gray-500 text-sm mb-1.5 dark:text-gray-400"><span
                                                class="font-semibold text-gray-900 dark:text-white">Joseph Mcfall</span>
                                            and
                                            <span class="font-medium text-gray-900 dark:text-white">5 others</span> started
                                            following you.
                                        </div>
                                        <div class="text-xs text-blue-600 dark:text-blue-500">10 minutes ago</div>
                                    </div>
                                </a>
                                <a href="#" class="flex px-4 py-3 hover:bg-gray-100 dark:hover:bg-gray-700">
                                    <div class="flex-shrink-0">
                                        <img class="rounded-full w-11 h-11"
                                            src="/docs/images/people/profile-picture-3.jpg" alt="Bonnie image">
                                        <div
                                            class="absolute flex items-center justify-center w-5 h-5 ml-6 -mt-5 bg-red-600 border border-white rounded-full dark:border-gray-800">
                                            <svg class="w-2 h-2 text-white" aria-hidden="true"
                                                xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                                                viewBox="0 0 20 18">
                                                <path
                                                    d="M17.947 2.053a5.209 5.209 0 0 0-3.793-1.53A6.414 6.414 0 0 0 10 2.311 6.482 6.482 0 0 0 5.824.5a5.2 5.2 0 0 0-3.8 1.521c-1.915 1.916-2.315 5.392.625 8.333l7 7a.5.5 0 0 0 .708 0l7-7a6.6 6.6 0 0 0 2.123-4.508 5.179 5.179 0 0 0-1.533-3.793Z" />
                                            </svg>
                                        </div>
                                    </div>
                                    <div class="w-full pl-3">
                                        <div class="text-gray-500 text-sm mb-1.5 dark:text-gray-400"><span
                                                class="font-semibold text-gray-900 dark:text-white">Bonnie Green</span> and
                                            <span class="font-medium text-gray-900 dark:text-white">141 others</span> love
                                            your
                                            story. See it and view more stories.
                                        </div>
                                        <div class="text-xs text-blue-600 dark:text-blue-500">44 minutes ago</div>
                                    </div>
                                </a>
                                <a href="#" class="flex px-4 py-3 hover:bg-gray-100 dark:hover:bg-gray-700">
                                    <div class="flex-shrink-0">
                                        <img class="rounded-full w-11 h-11"
                                            src="/docs/images/people/profile-picture-4.jpg" alt="Leslie image">
                                        <div
                                            class="absolute flex items-center justify-center w-5 h-5 ml-6 -mt-5 bg-green-400 border border-white rounded-full dark:border-gray-800">
                                            <svg class="w-2 h-2 text-white" aria-hidden="true"
                                                xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                                                viewBox="0 0 20 18">
                                                <path
                                                    d="M18 0H2a2 2 0 0 0-2 2v9a2 2 0 0 0 2 2h2v4a1 1 0 0 0 1.707.707L10.414 13H18a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2Zm-5 4h2a1 1 0 1 1 0 2h-2a1 1 0 1 1 0-2ZM5 4h5a1 1 0 1 1 0 2H5a1 1 0 0 1 0-2Zm2 5H5a1 1 0 0 1 0-2h2a1 1 0 0 1 0 2Zm9 0h-6a1 1 0 0 1 0-2h6a1 1 0 1 1 0 2Z" />
                                            </svg>
                                        </div>
                                    </div>
                                    <div class="w-full pl-3">
                                        <div class="text-gray-500 text-sm mb-1.5 dark:text-gray-400"><span
                                                class="font-semibold text-gray-900 dark:text-white">Leslie
                                                Livingston</span>
                                            mentioned you in a comment: <span class="font-medium text-blue-500"
                                                href="#">@bonnie.green</span> what do you say?</div>
                                        <div class="text-xs text-blue-600 dark:text-blue-500">1 hour ago</div>
                                    </div>
                                </a>
                                <a href="#" class="flex px-4 py-3 hover:bg-gray-100 dark:hover:bg-gray-700">
                                    <div class="flex-shrink-0">
                                        <img class="rounded-full w-11 h-11"
                                            src="/docs/images/people/profile-picture-5.jpg" alt="Robert image">
                                        <div
                                            class="absolute flex items-center justify-center w-5 h-5 ml-6 -mt-5 bg-purple-500 border border-white rounded-full dark:border-gray-800">
                                            <svg class="w-2 h-2 text-white" aria-hidden="true"
                                                xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                                                viewBox="0 0 20 14">
                                                <path
                                                    d="M11 0H2a2 2 0 0 0-2 2v10a2 2 0 0 0 2 2h9a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2Zm8.585 1.189a.994.994 0 0 0-.9-.138l-2.965.983a1 1 0 0 0-.685.949v8a1 1 0 0 0 .675.946l2.965 1.02a1.013 1.013 0 0 0 1.032-.242A1 1 0 0 0 20 12V2a1 1 0 0 0-.415-.811Z" />
                                            </svg>
                                        </div>
                                    </div>
                                    <div class="w-full pl-3">
                                        <div class="text-gray-500 text-sm mb-1.5 dark:text-gray-400"><span
                                                class="font-semibold text-gray-900 dark:text-white">Robert Brown</span>
                                            posted
                                            a new video: Glassmorphism - learn how to implement the new design trend.</div>
                                        <div class="text-xs text-blue-600 dark:text-blue-500">3 hours ago</div>
                                    </div>
                                </a>
                            </div>
                            <a href="#"
                                class="block py-2 text-sm font-medium text-center text-gray-900 rounded-b-lg bg-gray-50 hover:bg-gray-100 dark:bg-gray-800 dark:hover:bg-gray-700 dark:text-white">
                                <div class="inline-flex items-center ">
                                    <svg class="w-4 h-4 mr-2 text-gray-500 dark:text-gray-400" aria-hidden="true"
                                        xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 14">
                                        <path
                                            d="M10 0C4.612 0 0 5.336 0 7c0 1.742 3.546 7 10 7 6.454 0 10-5.258 10-7 0-1.664-4.612-7-10-7Zm0 10a3 3 0 1 1 0-6 3 3 0 0 1 0 6Z" />
                                    </svg>
                                    View all
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="relative justify-center -bottom-2">
                        <button id="dropdownNotificationButton" data-dropdown-toggle="dropdownNotification"
                            class="inline-flex items-center text-sm font-medium text-center text-gray-500 focus:outline-none"
                            type="button">
                            <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                fill="currentColor" viewBox="0 0 14 20">
                                <path
                                    d="M12.133 10.632v-1.8A5.406 5.406 0 0 0 7.979 3.57.946.946 0 0 0 8 3.464V1.1a1 1 0 0 0-2 0v2.364a.946.946 0 0 0 .021.106 5.406 5.406 0 0 0-4.154 5.262v1.8C1.867 13.018 0 13.614 0 14.807 0 15.4 0 16 .538 16h12.924C14 16 14 15.4 14 14.807c0-1.193-1.867-1.789-1.867-4.175ZM3.823 17a3.453 3.453 0 0 0 6.354 0H3.823Z" />
                            </svg>
                            <div class="relative flex">
                                <div
                                    class="relative inline-flex w-3 h-3 bg-red-500 border-2 border-white rounded-full -top-2 right-3 dark:border-gray-900 animate-[bounce_1s_ease-in-out_infinite]">
                                </div>
                            </div>
                        </button>

                        <!-- Dropdown menu -->
                        <div id="dropdownNotification"
                            class="z-20 hidden w-full max-w-sm bg-white divide-y divide-gray-100 rounded-lg shadow dark:bg-gray-800 dark:divide-gray-700 -bottom-150 right-6 fixed"
                            aria-labelledby="dropdownNotificationButton">
                            <div
                                class="block px-4 py-2 font-medium text-center text-gray-700 rounded-t-lg bg-gray-50 dark:bg-gray-800 dark:text-white">
                                Notifications
                            </div>
                            <div class="divide-y divide-gray-100 dark:divide-gray-700">
                                <a href="#" class="flex px-4 py-3 hover:bg-gray-100 dark:hover:bg-gray-700">
                                    <div class="flex-shrink-0">
                                        <img class="rounded-full w-11 h-11"
                                            src="/docs/images/people/profile-picture-1.jpg" alt="Jese image">
                                        <div
                                            class="absolute flex items-center justify-center w-5 h-5 ml-6 -mt-5 bg-blue-600 border border-white rounded-full dark:border-gray-800">
                                            <svg class="w-2 h-2 text-white" aria-hidden="true"
                                                xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                                                viewBox="0 0 18 18">
                                                <path
                                                    d="M1 18h16a1 1 0 0 0 1-1v-6h-4.439a.99.99 0 0 0-.908.6 3.978 3.978 0 0 1-7.306 0 .99.99 0 0 0-.908-.6H0v6a1 1 0 0 0 1 1Z" />
                                                <path
                                                    d="M4.439 9a2.99 2.99 0 0 1 2.742 1.8 1.977 1.977 0 0 0 3.638 0A2.99 2.99 0 0 1 13.561 9H17.8L15.977.783A1 1 0 0 0 15 0H3a1 1 0 0 0-.977.783L.2 9h4.239Z" />
                                            </svg>
                                        </div>
                                    </div>
                                    <div class="w-full pl-3">
                                        <div class="text-gray-500 text-sm mb-1.5 dark:text-gray-400">New message from <span
                                                class="font-semibold text-gray-900 dark:text-white">Jese Leos</span>: "Hey,
                                            what's up? All set for the presentation?"</div>
                                        <div class="text-xs text-blue-600 dark:text-blue-500">a few moments ago</div>
                                    </div>
                                </a>
                                <a href="#" class="flex px-4 py-3 hover:bg-gray-100 dark:hover:bg-gray-700">
                                    <div class="flex-shrink-0">
                                        <img class="rounded-full w-11 h-11"
                                            src="/docs/images/people/profile-picture-2.jpg" alt="Joseph image">
                                        <div
                                            class="absolute flex items-center justify-center w-5 h-5 ml-6 -mt-5 bg-gray-900 border border-white rounded-full dark:border-gray-800">
                                            <svg class="w-2 h-2 text-white" aria-hidden="true"
                                                xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                                                viewBox="0 0 20 18">
                                                <path
                                                    d="M6.5 9a4.5 4.5 0 1 0 0-9 4.5 4.5 0 0 0 0 9ZM8 10H5a5.006 5.006 0 0 0-5 5v2a1 1 0 0 0 1 1h11a1 1 0 0 0 1-1v-2a5.006 5.006 0 0 0-5-5Zm11-3h-2V5a1 1 0 0 0-2 0v2h-2a1 1 0 1 0 0 2h2v2a1 1 0 0 0 2 0V9h2a1 1 0 1 0 0-2Z" />
                                            </svg>
                                        </div>
                                    </div>
                                    <div class="w-full pl-3">
                                        <div class="text-gray-500 text-sm mb-1.5 dark:text-gray-400"><span
                                                class="font-semibold text-gray-900 dark:text-white">Joseph Mcfall</span>
                                            and
                                            <span class="font-medium text-gray-900 dark:text-white">5 others</span> started
                                            following you.
                                        </div>
                                        <div class="text-xs text-blue-600 dark:text-blue-500">10 minutes ago</div>
                                    </div>
                                </a>
                                <a href="#" class="flex px-4 py-3 hover:bg-gray-100 dark:hover:bg-gray-700">
                                    <div class="flex-shrink-0">
                                        <img class="rounded-full w-11 h-11"
                                            src="/docs/images/people/profile-picture-3.jpg" alt="Bonnie image">
                                        <div
                                            class="absolute flex items-center justify-center w-5 h-5 ml-6 -mt-5 bg-red-600 border border-white rounded-full dark:border-gray-800">
                                            <svg class="w-2 h-2 text-white" aria-hidden="true"
                                                xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                                                viewBox="0 0 20 18">
                                                <path
                                                    d="M17.947 2.053a5.209 5.209 0 0 0-3.793-1.53A6.414 6.414 0 0 0 10 2.311 6.482 6.482 0 0 0 5.824.5a5.2 5.2 0 0 0-3.8 1.521c-1.915 1.916-2.315 5.392.625 8.333l7 7a.5.5 0 0 0 .708 0l7-7a6.6 6.6 0 0 0 2.123-4.508 5.179 5.179 0 0 0-1.533-3.793Z" />
                                            </svg>
                                        </div>
                                    </div>
                                    <div class="w-full pl-3">
                                        <div class="text-gray-500 text-sm mb-1.5 dark:text-gray-400"><span
                                                class="font-semibold text-gray-900 dark:text-white">Bonnie Green</span> and
                                            <span class="font-medium text-gray-900 dark:text-white">141 others</span> love
                                            your
                                            story. See it and view more stories.
                                        </div>
                                        <div class="text-xs text-blue-600 dark:text-blue-500">44 minutes ago</div>
                                    </div>
                                </a>
                                <a href="#" class="flex px-4 py-3 hover:bg-gray-100 dark:hover:bg-gray-700">
                                    <div class="flex-shrink-0">
                                        <img class="rounded-full w-11 h-11"
                                            src="/docs/images/people/profile-picture-4.jpg" alt="Leslie image">
                                        <div
                                            class="absolute flex items-center justify-center w-5 h-5 ml-6 -mt-5 bg-green-400 border border-white rounded-full dark:border-gray-800">
                                            <svg class="w-2 h-2 text-white" aria-hidden="true"
                                                xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                                                viewBox="0 0 20 18">
                                                <path
                                                    d="M18 0H2a2 2 0 0 0-2 2v9a2 2 0 0 0 2 2h2v4a1 1 0 0 0 1.707.707L10.414 13H18a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2Zm-5 4h2a1 1 0 1 1 0 2h-2a1 1 0 1 1 0-2ZM5 4h5a1 1 0 1 1 0 2H5a1 1 0 0 1 0-2Zm2 5H5a1 1 0 0 1 0-2h2a1 1 0 0 1 0 2Zm9 0h-6a1 1 0 0 1 0-2h6a1 1 0 1 1 0 2Z" />
                                            </svg>
                                        </div>
                                    </div>
                                    <div class="w-full pl-3">
                                        <div class="text-gray-500 text-sm mb-1.5 dark:text-gray-400"><span
                                                class="font-semibold text-gray-900 dark:text-white">Leslie
                                                Livingston</span>
                                            mentioned you in a comment: <span class="font-medium text-blue-500"
                                                href="#">@bonnie.green</span> what do you say?</div>
                                        <div class="text-xs text-blue-600 dark:text-blue-500">1 hour ago</div>
                                    </div>
                                </a>
                                <a href="#" class="flex px-4 py-3 hover:bg-gray-100 dark:hover:bg-gray-700">
                                    <div class="flex-shrink-0">
                                        <img class="rounded-full w-11 h-11"
                                            src="/docs/images/people/profile-picture-5.jpg" alt="Robert image">
                                        <div
                                            class="absolute flex items-center justify-center w-5 h-5 ml-6 -mt-5 bg-purple-500 border border-white rounded-full dark:border-gray-800">
                                            <svg class="w-2 h-2 text-white" aria-hidden="true"
                                                xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                                                viewBox="0 0 20 14">
                                                <path
                                                    d="M11 0H2a2 2 0 0 0-2 2v10a2 2 0 0 0 2 2h9a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2Zm8.585 1.189a.994.994 0 0 0-.9-.138l-2.965.983a1 1 0 0 0-.685.949v8a1 1 0 0 0 .675.946l2.965 1.02a1.013 1.013 0 0 0 1.032-.242A1 1 0 0 0 20 12V2a1 1 0 0 0-.415-.811Z" />
                                            </svg>
                                        </div>
                                    </div>
                                    <div class="w-full pl-3">
                                        <div class="text-gray-500 text-sm mb-1.5 dark:text-gray-400"><span
                                                class="font-semibold text-gray-900 dark:text-white">Robert Brown</span>
                                            posted
                                            a new video: Glassmorphism - learn how to implement the new design trend.</div>
                                        <div class="text-xs text-blue-600 dark:text-blue-500">3 hours ago</div>
                                    </div>
                                </a>
                            </div>
                            <a href="#"
                                class="block py-2 text-sm font-medium text-center text-gray-900 rounded-b-lg bg-gray-50 hover:bg-gray-100 dark:bg-gray-800 dark:hover:bg-gray-700 dark:text-white">
                                <div class="inline-flex items-center ">
                                    <svg class="w-4 h-4 mr-2 text-gray-500 dark:text-gray-400" aria-hidden="true"
                                        xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 14">
                                        <path
                                            d="M10 0C4.612 0 0 5.336 0 7c0 1.742 3.546 7 10 7 6.454 0 10-5.258 10-7 0-1.664-4.612-7-10-7Zm0 10a3 3 0 1 1 0-6 3 3 0 0 1 0 6Z" />
                                    </svg>
                                    View all
                                </div>
                            </a>
                        </div>
                    </div>
                    <a href="{{ route('logout') }}"
                        class="text-sm font-semibold leading-6 bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 mx-2 rounded-full">Log
                        Out </a>
                </div>
            @endif
        @endauth
    </nav>

    <!-- Mobile menu, show/hide based on menu open state. -->
    <div class="lg:hidden test " role="dialog" aria-modal="true" id="hide">
        <!-- Background backdrop, show/hide based on slide-over state. -->
        <div class="fixed inset-0 z-50 "></div>
        <div
            class="fixed inset-y-0 right-0 z-50 w-full overflow-y-auto bg-white px-6 py-6 sm:max-w-sm sm:ring-1 sm:ring-gray-900/10 animate-[fade-in-right_1s_ease-in-out]">
            <div class="flex items-center justify-between">
                <a href="#" class="-m-1.5 p-1.5">
                    <span class="sr-only ">Your Company</span>
                    <img class="h-8 w-auto" src="https://tailwindui.com/img/logos/mark.svg?color=indigo&shade=600"
                        alt="">
                </a>
                <button type="button" class="-m-2.5 rounded-md p-2.5 text-gray-700">
                    <span class="sr-only ">Close menu</span>
                    <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                        stroke="currentColor" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>
            <div class="mt-6 flow-root">
                <div class="-my-6 divide-y divide-gray-500/10">
                    <div class="space-y-2 py-6">
                        <a href="#"
                            class="-mx-3 block rounded-lg px-3 py-2 text-base font-semibold leading-7 text-gray-900 hover:bg-gray-50">Product</a>
                        <a href="#"
                            class="-mx-3 block rounded-lg px-3 py-2 text-base font-semibold leading-7 text-gray-900 hover:bg-gray-50">Features</a>
                        <a href="#"
                            class="-mx-3 block rounded-lg px-3 py-2 text-base font-semibold leading-7 text-gray-900 hover:bg-gray-50">Marketplace</a>
                        <a href="#"
                            class="-mx-3 block rounded-lg px-3 py-2 text-base font-semibold leading-7 text-gray-900 hover:bg-gray-50">Company</a>
                    </div>
                    @guest
                        <div class="py-6">
                            <a href="/login"
                                class="-mx-3 block rounded-lg px-3 py-2.5 text-base font-semibold leading-7 text-gray-900 hover:bg-gray-50">Log
                                in</a>
                            <a href="/register"
                                class="-mx-3 block rounded-lg px-3 py-2.5 text-base font-semibold leading-7 text-gray-900 hover:bg-gray-50">Register</a>
                        </div>
                    @endguest
                    @auth
                        @if (Auth::user()->Role == 'member' || Auth::user()->Role == 'admin')
                            <div class="py-6">
                                <span class="absolute right-2 h-3 w-3">
                                    <span
                                        class="animate-ping absolute inline-flex h-full w-full rounded-full bg-sky-400 opacity-75"></span>
                                    <span class="relative inline-flex rounded-full h-3 w-3 bg-sky-500"></span>
                                </span>
                                <a href=""
                                    class="-mx-3 block rounded-lg px-3 py-2.5 text-base font-semibold leading-7 text-gray-900 hover:bg-gray-50">Notifications</a>

                                <a href="{{ route('logout') }}"
                                    class="-mx-3 block rounded-lg px-3 py-2.5 text-base font-semibold leading-7 text-gray-900 hover:bg-gray-50">Log
                                    out</a>
                            </div>
                        @endif
                    @endauth
                </div>
            </div>
        </div>
    </div>
    @yield('content')
</header>
@include('layouts.components.script')
<script>
    $(document).ready(function() {
        $("#show").click(function() {
            $(".test").show();
        });
        $("#hide").click(function() {
            $(".test").hide();
        });
    });


    $(document).ready(function() {

        var isLoginPage = window.location.pathname === '/login';
        var isRegisterPage = window.location.pathname === '/register';

        var loginLink = $('#loginLink');
        var RegisterLink = $('#registerLink');

        if (isLoginPage) {
            loginLink.hide();
        }

        if (isRegisterPage) {
            RegisterLink.hide();
        }
        changePage();
    });

    $("#nav").scrollspy({
        offset: -75
    });


    const app = document.getElementById("#app");

    function showLoading() {
        app.innerHTML = `
        <div class="fixed top-0 left-0 w-full h-full flex items-center justify-center bg-opacity-50 bg-gray-900 z-50">
            <div class="loader ease-linear rounded-full border-8 border-t-8 border-gray-200 h-16 w-16"></div>
        </div>
    `;
    }

    function changePage() {
        showLoading();
        setTimeout(() => {
            app.innerHTML = `
            <h1 class="text-4xl font-bold text-center mt-16">loading</h1>
        `;
        }, 2000);
    }
    window.addEventListener('load', changePage);
</script>

<script>
    // document.addEventListener('DOMContentLoaded', function() {
    //     const dropdownButton = document.getElementById('dropdownNotificationButton');
    //     const dropdownMenu = document.getElementById('dropdownNotification');
    //     const dropdownButtonMessage = document.getElementById('dropdownMessageButton');
    //     const dropdownMenuMessage = document.getElementById('dropdownMessage');

    //     dropdownButton.addEventListener('click', function() {
    //         console.log("Button clicked");
    //         dropdownMenu.classList.animate(
    //             'hidden');
    //     });
    //     dropdownButtonMessage.addEventListener('click', function() {
    //         console.log("Button clicked");
    //         dropdownMenuMessage.classList.toggle(
    //             'hidden');
    //     });
    // });

    $(document).ready(function() {
        $("#dropdownMessageButton").click(function() {
            $("#dropdownMessage").animate({
                height: 'toggle'
            });
        });
        $("#dropdownNotificationButton").click(function() {
            $("#dropdownNotification").animate({
                height: 'toggle'
            });
        });
    });
</script>
