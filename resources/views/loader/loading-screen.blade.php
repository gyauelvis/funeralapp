<x-app-layout>
    <main
        class="flex flex-col pt-20 h-auto min-h-screen items-center justify-center rounded-lg md:ml-64 bg-white dark:bg-gray-700">
        <span class="w-12 h-12 border-4 border-gray-200 border-b-blue-500 rounded-full inline-block box-border animate-spin"></span>

        <div class="relative overflow-x-auto sm:rounded-lg w-full max-h-screen overflow-scroll">
            <div class="border border-gray-100 mx-10 px-5 py-10 rounded-lg shadow">
            <div class="flex flex-col gap-4">
                <div class="flex sticky top-5 flex-column sm:flex-row flex-wrap space-y-4 sm:space-y-0 items-center justify-between pb-4">
                    <label for="table-search" class="sr-only">Search</label>
                    <div class="relative">
                        <div class="absolute inset-y-0 left-0 rtl:inset-r-0 rtl:right-0 flex items-center ps-3 pointer-events-none">
                            <svg class="w-5 h-5 text-gray-500 dark:text-gray-400" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z" clip-rule="evenodd"></path></svg>
                        </div>
                        <input type="text" id="table-search" class="block p-2 ps-10 text-sm text-gray-900 border border-gray-300 rounded-lg w-80 bg-gray-50 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Search for items">
                    </div>
                    <div>
                        <button id="dropdownRadioButton" data-dropdown-toggle="dropdownRadio" class="inline-flex items-center text-gray-500 bg-white border border-gray-300 focus:outline-none hover:bg-gray-100 focus:ring-4 focus:ring-gray-100 font-medium rounded-lg text-sm px-3 py-1.5 dark:bg-gray-800 dark:text-white dark:border-gray-600 dark:hover:bg-gray-700 dark:hover:border-gray-600 dark:focus:ring-gray-700" type="button">
                            <svg class="w-3 h-3 text-gray-500 dark:text-gray-400 me-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                                    <path d="M10 0a10 10 0 1 0 10 10A10.011 10.011 0 0 0 10 0Zm3.982 13.982a1 1 0 0 1-1.414 0l-3.274-3.274A1.012 1.012 0 0 1 9 10V6a1 1 0 0 1 2 0v3.586l2.982 2.982a1 1 0 0 1 0 1.414Z"/>
                                </svg>
                            Last 30 days
                            <svg class="w-2.5 h-2.5 ms-2.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 4 4 4-4"/>
                            </svg>
                        </button>
                        <!-- Dropdown menu -->
                        <div id="dropdownRadio" class="z-10 hidden w-48 bg-white divide-y divide-gray-100 rounded-lg shadow dark:bg-gray-700 dark:divide-gray-600" data-popper-reference-hidden="" data-popper-escaped="" data-popper-placement="top" style="position: absolute; inset: auto auto 0px 0px; margin: 0px; transform: translate3d(522.5px, 3847.5px, 0px);">
                            <ul class="p-3 space-y-1 text-sm text-gray-700 dark:text-gray-200" aria-labelledby="dropdownRadioButton">
                                <li>
                                    <div class="flex items-center p-2 rounded hover:bg-gray-100 dark:hover:bg-gray-600">
                                        <input id="filter-radio-example-1" type="radio" value="" name="filter-radio" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 dark:focus:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                        <label for="filter-radio-example-1" class="w-full ms-2 text-sm font-medium text-gray-900 rounded dark:text-gray-300">Last day</label>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                    
                </div>
                <div
                        class="bg-white px-5 text-left text-xl pb-5 font-semibold text-gray-900 rtl:text-right dark:bg-gray-800 dark:text-white">
                        All Members
                        <p class="mb-2 mt-1 text-sm font-normal text-gray-500 dark:text-gray-400">Browse the list of
                            all members.</p>
                        </div>
            </div>
            
            <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
                <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                    <tr>
                        <th scope="col" class="px-6 py-3">
                            Product name
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Color
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Category
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Price
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Actions
                        </th>
                    </tr>
                </thead>
                <tbody>
                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                        
                        <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                            Apple MacBook Pro 17"
                        </th>
                        <td class="px-6 py-4">
                            Silver
                        </td>
                        <td class="px-6 py-4">
                            Laptop
                        </td>
                        <td class="px-6 py-4">
                            $2999
                        </td>
                        <td class="px-6 py-4 relative">
                            <div class="relative">
                                <button class="action-button font-medium text-blue-600 dark:text-blue-500 p-1 rounded-full hover:bg-gray-100 dark:hover:bg-gray-700">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M12 6.75a.75.75 0 1 1 0-1.5.75.75 0 0 1 0 1.5ZM12 12.75a.75.75 0 1 1 0-1.5.75.75 0 0 1 0 1.5ZM12 18.75a.75.75 0 1 1 0-1.5.75.75 0 0 1 0 1.5Z" />
                                    </svg>
                                </button>
                                <div id="pop-over" class="popover hidden absolute top-full right-0 mt-2 w-48 bg-white opacity-100 rounded-lg dark:bg-gray-800 dark:border-gray-700 border border-gray-200 shadow-lg z-50">
                                    <ul class="py-1">
                                        <li>
                                            <a href="#" class="block px-4 py-2 text-gray-700 hover:bg-gray-100 dark:text-gray-300 dark:hover:bg-gray-700">
                                                Edit
                                            </a>
                                        </li>
                                        <li>
                                           
                                                <a href="#" class="block w-full text-left px-4 py-2 text-red-500 hover:bg-gray-100 dark:text-gray-300 dark:hover:bg-gray-700">
                                                    Delete
                                                </a>
                                        </li>
                                        <li>
                                            <a href="#" class="block px-4 py-2 text-gray-700 hover:bg-gray-100 dark:text-gray-300 dark:hover:bg-gray-700">
                                                View
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </td>
                    </tr>
                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                        
                        <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                            Apple MacBook Pro 17"
                        </th>
                        <td class="px-6 py-4">
                            Silver
                        </td>
                        <td class="px-6 py-4">
                            Laptop
                        </td>
                        <td class="px-6 py-4">
                            $2999
                        </td>
                        <td class="px-6 py-4 relative">
                            <div class="relative">
                                <button class="action-button font-medium text-blue-600 dark:text-blue-500 p-1 rounded-full hover:bg-gray-100 dark:hover:bg-gray-700">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M12 6.75a.75.75 0 1 1 0-1.5.75.75 0 0 1 0 1.5ZM12 12.75a.75.75 0 1 1 0-1.5.75.75 0 0 1 0 1.5ZM12 18.75a.75.75 0 1 1 0-1.5.75.75 0 0 1 0 1.5Z" />
                                    </svg>
                                </button>
                                <div id="pop-over" class="popover hidden absolute top-full right-0 mt-2 w-48 bg-white opacity-100 rounded-lg dark:bg-gray-800 dark:border-gray-700 border border-gray-200 shadow-lg z-50">
                                    <ul class="py-1">
                                        <li>
                                            <a href="#" class="block px-4 py-2 text-gray-700 hover:bg-gray-100 dark:text-gray-300 dark:hover:bg-gray-700">
                                                Edit
                                            </a>
                                        </li>
                                        <li>
                                           
                                                <a href="#" class="block w-full text-left px-4 py-2 text-red-500 hover:bg-gray-100 dark:text-gray-300 dark:hover:bg-gray-700">
                                                    Delete
                                                </a>
                                        </li>
                                        <li>
                                            <a href="#" class="block px-4 py-2 text-gray-700 hover:bg-gray-100 dark:text-gray-300 dark:hover:bg-gray-700">
                                                View
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </td>
                    </tr>
                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                        
                        <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                            Apple MacBook Pro 17"
                        </th>
                        <td class="px-6 py-4">
                            Silver
                        </td>
                        <td class="px-6 py-4">
                            Laptop
                        </td>
                        <td class="px-6 py-4">
                            $2999
                        </td>
                        <td class="px-6 py-4 relative">
                            <div class="relative">
                                <button class="action-button font-medium text-blue-600 dark:text-blue-500 p-1 rounded-full hover:bg-gray-100 dark:hover:bg-gray-700">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M12 6.75a.75.75 0 1 1 0-1.5.75.75 0 0 1 0 1.5ZM12 12.75a.75.75 0 1 1 0-1.5.75.75 0 0 1 0 1.5ZM12 18.75a.75.75 0 1 1 0-1.5.75.75 0 0 1 0 1.5Z" />
                                    </svg>
                                </button>
                                <div id="pop-over" class="popover hidden absolute top-full right-0 mt-2 w-48 bg-white opacity-100 rounded-lg dark:bg-gray-800 dark:border-gray-700 border border-gray-200 shadow-lg z-50">
                                    <ul class="py-1">
                                        <li>
                                            <a href="#" class="block px-4 py-2 text-gray-700 hover:bg-gray-100 dark:text-gray-300 dark:hover:bg-gray-700">
                                                Edit
                                            </a>
                                        </li>
                                        <li>
                                           
                                                <a href="#" class="block w-full text-left px-4 py-2 text-red-500 hover:bg-gray-100 dark:text-gray-300 dark:hover:bg-gray-700">
                                                    Delete
                                                </a>
                                        </li>
                                        <li>
                                            <a href="#" class="block px-4 py-2 text-gray-700 hover:bg-gray-100 dark:text-gray-300 dark:hover:bg-gray-700">
                                                View
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </td>
                    </tr>
                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                        
                        <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                            Apple MacBook Pro 17"
                        </th>
                        <td class="px-6 py-4">
                            Silver
                        </td>
                        <td class="px-6 py-4">
                            Laptop
                        </td>
                        <td class="px-6 py-4">
                            $2999
                        </td>
                        <td class="px-6 py-4 relative">
                            <div class="relative">
                                <button class="action-button font-medium text-blue-600 dark:text-blue-500 p-1 rounded-full hover:bg-gray-100 dark:hover:bg-gray-700">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M12 6.75a.75.75 0 1 1 0-1.5.75.75 0 0 1 0 1.5ZM12 12.75a.75.75 0 1 1 0-1.5.75.75 0 0 1 0 1.5ZM12 18.75a.75.75 0 1 1 0-1.5.75.75 0 0 1 0 1.5Z" />
                                    </svg>
                                </button>
                                <div id="pop-over" class="popover hidden absolute top-full right-0 mt-2 w-48 bg-white opacity-100 rounded-lg dark:bg-gray-800 dark:border-gray-700 border border-gray-200 shadow-lg z-50">
                                    <ul class="py-1">
                                        <li>
                                            <a href="#" class="block px-4 py-2 text-gray-700 hover:bg-gray-100 dark:text-gray-300 dark:hover:bg-gray-700">
                                                Edit
                                            </a>
                                        </li>
                                        <li>
                                           
                                                <a href="#" class="block w-full text-left px-4 py-2 text-red-500 hover:bg-gray-100 dark:text-gray-300 dark:hover:bg-gray-700">
                                                    Delete
                                                </a>
                                        </li>
                                        <li>
                                            <a href="#" class="block px-4 py-2 text-gray-700 hover:bg-gray-100 dark:text-gray-300 dark:hover:bg-gray-700">
                                                View
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </td>
                    </tr>
                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                        
                        <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                            Apple MacBook Pro 17"
                        </th>
                        <td class="px-6 py-4">
                            Silver
                        </td>
                        <td class="px-6 py-4">
                            Laptop
                        </td>
                        <td class="px-6 py-4">
                            $2999
                        </td>
                        <td class="px-6 py-4 relative">
                            <div class="relative">
                                <button class="action-button font-medium text-blue-600 dark:text-blue-500 p-1 rounded-full hover:bg-gray-100 dark:hover:bg-gray-700">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M12 6.75a.75.75 0 1 1 0-1.5.75.75 0 0 1 0 1.5ZM12 12.75a.75.75 0 1 1 0-1.5.75.75 0 0 1 0 1.5ZM12 18.75a.75.75 0 1 1 0-1.5.75.75 0 0 1 0 1.5Z" />
                                    </svg>
                                </button>
                                <div id="pop-over" class="popover hidden absolute top-full right-0 mt-2 w-48 bg-white opacity-100 rounded-lg dark:bg-gray-800 dark:border-gray-700 border border-gray-200 shadow-lg z-50">
                                    <ul class="py-1">
                                        <li>
                                            <a href="#" class="block px-4 py-2 text-gray-700 hover:bg-gray-100 dark:text-gray-300 dark:hover:bg-gray-700">
                                                Edit
                                            </a>
                                        </li>
                                        <li>
                                           
                                                <a href="#" class="block w-full text-left px-4 py-2 text-red-500 hover:bg-gray-100 dark:text-gray-300 dark:hover:bg-gray-700">
                                                    Delete
                                                </a>
                                        </li>
                                        <li>
                                            <a href="#" class="block px-4 py-2 text-gray-700 hover:bg-gray-100 dark:text-gray-300 dark:hover:bg-gray-700">
                                                View
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </td>
                    </tr>
                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                        
                        <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                            Apple MacBook Pro 17"
                        </th>
                        <td class="px-6 py-4">
                            Silver
                        </td>
                        <td class="px-6 py-4">
                            Laptop
                        </td>
                        <td class="px-6 py-4">
                            $2999
                        </td>
                        <td class="px-6 py-4 relative">
                            <div class="relative">
                                <button class="action-button font-medium text-blue-600 dark:text-blue-500 p-1 rounded-full hover:bg-gray-100 dark:hover:bg-gray-700">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M12 6.75a.75.75 0 1 1 0-1.5.75.75 0 0 1 0 1.5ZM12 12.75a.75.75 0 1 1 0-1.5.75.75 0 0 1 0 1.5ZM12 18.75a.75.75 0 1 1 0-1.5.75.75 0 0 1 0 1.5Z" />
                                    </svg>
                                </button>
                                <div id="pop-over" class="popover hidden absolute top-full right-0 mt-2 w-48 bg-white opacity-100 rounded-lg dark:bg-gray-800 dark:border-gray-700 border border-gray-200 shadow-lg z-50">
                                    <ul class="py-1">
                                        <li>
                                            <a href="#" class="block px-4 py-2 text-gray-700 hover:bg-gray-100 dark:text-gray-300 dark:hover:bg-gray-700">
                                                Edit
                                            </a>
                                        </li>
                                        <li>
                                           
                                                <a href="#" class="block w-full text-left px-4 py-2 text-red-500 hover:bg-gray-100 dark:text-gray-300 dark:hover:bg-gray-700">
                                                    Delete
                                                </a>
                                        </li>
                                        <li>
                                            <a href="#" class="block px-4 py-2 text-gray-700 hover:bg-gray-100 dark:text-gray-300 dark:hover:bg-gray-700">
                                                View
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </td>
                    </tr>
                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                        
                        <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                            Microsoft Surface Pro
                        </th>
                        <td class="px-6 py-4">
                            White
                        </td>
                        <td class="px-6 py-4">
                            Laptop PC
                        </td>
                        <td class="px-6 py-4">
                            $1999
                        </td>
                        <td class="px-6 py-4 relative">
                            <div class="relative">
                                <button class="action-button font-medium text-blue-600 dark:text-blue-500 p-1 rounded-full hover:bg-gray-100 dark:hover:bg-gray-700">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M12 6.75a.75.75 0 1 1 0-1.5.75.75 0 0 1 0 1.5ZM12 12.75a.75.75 0 1 1 0-1.5.75.75 0 0 1 0 1.5ZM12 18.75a.75.75 0 1 1 0-1.5.75.75 0 0 1 0 1.5Z" />
                                    </svg>
                                </button>
                                <div id="pop-over" class="popover hidden absolute top-full right-0 mt-2 w-48 bg-white opacity-100 rounded-lg dark:bg-gray-800 dark:border-gray-700 border border-gray-200 shadow-lg z-50">
                                    <ul class="py-1">
                                        <li>
                                            <a href="#" class="block px-4 py-2 text-gray-700 hover:bg-gray-100 dark:text-gray-300 dark:hover:bg-gray-700">
                                                Edit
                                            </a>
                                        </li>
                                        <li>
                                           
                                                <a href="#" class="block w-full text-left px-4 py-2 text-red-500 hover:bg-gray-100 dark:text-gray-300 dark:hover:bg-gray-700">
                                                    Delete
                                                </a>
                                        </li>
                                        <li>
                                            <a href="#" class="block px-4 py-2 text-gray-700 hover:bg-gray-100 dark:text-gray-300 dark:hover:bg-gray-700">
                                                View
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </td>
                    </tr>
                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                        
                        <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                            Magic Mouse 2
                        </th>
                        <td class="px-6 py-4">
                            Black
                        </td>
                        <td class="px-6 py-4">
                            Accessories
                        </td>
                        <td class="px-6 py-4">
                            $99
                        </td>
                        <td class="px-6 py-4 relative">
                            <div class="relative">
                                <button class="action-button font-medium text-blue-600 dark:text-blue-500 p-1 rounded-full hover:bg-gray-100 dark:hover:bg-gray-700">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M12 6.75a.75.75 0 1 1 0-1.5.75.75 0 0 1 0 1.5ZM12 12.75a.75.75 0 1 1 0-1.5.75.75 0 0 1 0 1.5ZM12 18.75a.75.75 0 1 1 0-1.5.75.75 0 0 1 0 1.5Z" />
                                    </svg>
                                </button>
                                <div id="pop-over" class="popover hidden absolute top-full right-0 mt-2 w-48 bg-white opacity-100 rounded-lg dark:bg-gray-800 dark:border-gray-700 border border-gray-200 shadow-lg z-50">
                                    <ul class="py-1">
                                        <li>
                                            <a href="#" class="block px-4 py-2 text-gray-700 hover:bg-gray-100 dark:text-gray-300 dark:hover:bg-gray-700">
                                                Edit
                                            </a>
                                        </li>
                                        <li>
                                           
                                                <a href="#" class="block w-full text-left px-4 py-2 text-red-500 hover:bg-gray-100 dark:text-gray-300 dark:hover:bg-gray-700">
                                                    Delete
                                                </a>
                                        </li>
                                        <li>
                                            <a href="#" class="block px-4 py-2 text-gray-700 hover:bg-gray-100 dark:text-gray-300 dark:hover:bg-gray-700">
                                                View
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </td>
                    </tr>
                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                        
                        <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                            Apple Watch
                        </th>
                        <td class="px-6 py-4">
                            Silver
                        </td>
                        <td class="px-6 py-4">
                            Accessories
                        </td>
                        <td class="px-6 py-4">
                            $179
                        </td>
                        <td class="px-6 py-4 relative">
                            <div class="relative">
                                <button class="action-button font-medium text-blue-600 dark:text-blue-500 p-1 rounded-full hover:bg-gray-100 dark:hover:bg-gray-700">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M12 6.75a.75.75 0 1 1 0-1.5.75.75 0 0 1 0 1.5ZM12 12.75a.75.75 0 1 1 0-1.5.75.75 0 0 1 0 1.5ZM12 18.75a.75.75 0 1 1 0-1.5.75.75 0 0 1 0 1.5Z" />
                                    </svg>
                                </button>
                                <div id="pop-over" class="popover hidden absolute top-full right-0 mt-2 w-48 bg-white opacity-100 rounded-lg dark:bg-gray-800 dark:border-gray-700 border border-gray-200 shadow-lg z-50">
                                    <ul class="py-1">
                                        <li>
                                            <a href="#" class="block px-4 py-2 text-gray-700 hover:bg-gray-100 dark:text-gray-300 dark:hover:bg-gray-700">
                                                Edit
                                            </a>
                                        </li>
                                        <li>
                                           
                                                <a href="#" class="block w-full text-left px-4 py-2 text-red-500 hover:bg-gray-100 dark:text-gray-300 dark:hover:bg-gray-700">
                                                    Delete
                                                </a>
                                        </li>
                                        <li>
                                            <a href="#" class="block px-4 py-2 text-gray-700 hover:bg-gray-100 dark:text-gray-300 dark:hover:bg-gray-700">
                                                View
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </td>
                    </tr>
                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                        
                        <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                            iPad
                        </th>
                        <td class="px-6 py-4">
                            Gold
                        </td>
                        <td class="px-6 py-4">
                            Tablet
                        </td>
                        <td class="px-6 py-4">
                            $699
                        </td>
                        <td class="px-6 py-4 relative">
                            <div class="relative">
                                <button class="action-button font-medium text-blue-600 dark:text-blue-500 p-1 rounded-full hover:bg-gray-100 dark:hover:bg-gray-700">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M12 6.75a.75.75 0 1 1 0-1.5.75.75 0 0 1 0 1.5ZM12 12.75a.75.75 0 1 1 0-1.5.75.75 0 0 1 0 1.5ZM12 18.75a.75.75 0 1 1 0-1.5.75.75 0 0 1 0 1.5Z" />
                                    </svg>
                                </button>
                                <div id="pop-over" class="popover hidden absolute top-full right-0 mt-2 w-48 bg-white opacity-100 rounded-lg dark:bg-gray-800 dark:border-gray-700 border border-gray-200 shadow-lg z-50">
                                    <ul class="py-1">
                                        <li>
                                            <a href="#" class="block px-4 py-2 text-gray-700 hover:bg-gray-100 dark:text-gray-300 dark:hover:bg-gray-700">
                                                Edit
                                            </a>
                                        </li>
                                        <li>
                                           
                                                <a href="#" class="block w-full text-left px-4 py-2 text-red-500 hover:bg-gray-100 dark:text-gray-300 dark:hover:bg-gray-700">
                                                    Delete
                                                </a>
                                        </li>
                                        <li>
                                            <a href="#" class="block px-4 py-2 text-gray-700 hover:bg-gray-100 dark:text-gray-300 dark:hover:bg-gray-700">
                                                View
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </td>
                    </tr>
                    <tr class="bg-white dark:bg-gray-800 hover:bg-gray-50 dark:hover:bg-gray-600">
                        <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                            Apple iMac 27"
                        </th>
                        <td class="px-6 py-4">
                            Silver
                        </td>
                        <td class="px-6 py-4">
                            PC Desktop
                        </td>
                        <td class="px-6 py-4">
                            $3999
                        </td>
                        <td class="px-6 py-4 relative">
                            <div class="relative">
                                <button class="action-button font-medium text-blue-600 dark:text-blue-500 p-1 rounded-full hover:bg-gray-100 dark:hover:bg-gray-700">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M12 6.75a.75.75 0 1 1 0-1.5.75.75 0 0 1 0 1.5ZM12 12.75a.75.75 0 1 1 0-1.5.75.75 0 0 1 0 1.5ZM12 18.75a.75.75 0 1 1 0-1.5.75.75 0 0 1 0 1.5Z" />
                                    </svg>
                                </button>
                                <div id="pop-over" class="popover hidden absolute top-full right-0 mt-2 w-48 bg-white opacity-100 rounded-lg dark:bg-gray-800 dark:border-gray-700 border border-gray-200 shadow-lg z-50">
                                    <ul class="py-1">
                                        <li>
                                            <a href="#" class="block px-4 py-2 text-gray-700 hover:bg-gray-100 dark:text-gray-300 dark:hover:bg-gray-700">
                                                Edit
                                            </a>
                                        </li>
                                        <li>
                                           
                                                <a href="#" class="block w-full text-left px-4 py-2 text-red-500 hover:bg-gray-100 dark:text-gray-300 dark:hover:bg-gray-700">
                                                    Delete
                                                </a>
                                        </li>
                                        <li>
                                            <a href="#" class="block px-4 py-2 text-gray-700 hover:bg-gray-100 dark:text-gray-300 dark:hover:bg-gray-700">
                                                View
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
        </div>
    </main>
    <section>



    </section>
</x-app-layout>

<script>
     document.querySelectorAll('.action-button').forEach(button => {
            button.addEventListener('click', (e) => {
                e.stopPropagation();
                const popover = button.nextElementSibling;

                // Close other popovers before opening the clicked one
                document.querySelectorAll('.popover').forEach(otherPopover => {
                    if (otherPopover !== popover) {
                        otherPopover.classList.add('hidden');
                    }
                });

                popover.classList.toggle('hidden');
            });
        });

        document.addEventListener('click', (e) => {
            if (!e.target.closest('.action-button')) {
                document.querySelectorAll('.popover').forEach(popover => {
                    popover.classList.add('hidden');
                });
            }
        });
</script>