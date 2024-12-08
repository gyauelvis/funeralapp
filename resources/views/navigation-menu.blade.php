<div class="bg-gray-50 antialiased dark:bg-gray-900">
    <nav
        class="fixed left-0 right-0 top-0 z-50 border-b border-gray-200 bg-white px-4 py-2.5 shadow dark:border-gray-700 dark:bg-gray-800">
        <div class="flex flex-wrap items-center justify-between">
            <div class="flex items-center justify-start">
                <button data-drawer-target="drawer-navigation" data-drawer-toggle="drawer-navigation"
                    aria-controls="drawer-navigation"
                    class="mr-2 cursor-pointer rounded-lg p-2 text-gray-600 hover:bg-red-500 hover:text-gray-900 focus:bg-gray-100 focus:ring-2 focus:ring-gray-100 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white dark:focus:bg-gray-700 dark:focus:ring-gray-700 md:hidden">
                    <svg aria-hidden="true" class="h-6 w-6" fill="currentColor" viewBox="0 0 20 20"
                        xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd"
                            d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h6a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z"
                            clip-rule="evenodd"></path>
                    </svg>
                    <svg aria-hidden="true" class="hidden h-6 w-6" fill="currentColor" viewBox="0 0 20 20"
                        xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd"
                            d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                            clip-rule="evenodd"></path>
                    </svg>
                    <span class="sr-only">Toggle sidebar</span>
                </button>
                <span
                    class="my-1 self-center whitespace-nowrap text-2xl font-semibold dark:text-white">{{ config('app.name', 'App') }}</span>
                </a>
            </div>
            <div class="flex items-center lg:order-2">


                <!-- Apps -->
                <button type="button"
                    class="size-7 mx-3 flex rounded-full bg-blue-800 text-sm focus:ring-4 focus:ring-gray-300 dark:focus:ring-gray-600 md:mr-0"
                    id="user-menu-button" aria-expanded="false" data-dropdown-toggle="dropdown">
                    <img class="h-7 w-7 rounded-full" src="{{ asset('profile.webp') }}" alt="user profile image">
                </button>
                <span class="ml-2 block text-sm font-semibold text-gray-900 dark:text-white">
                    {{ Auth::user()->name }}</span>
                <!-- Dropdown menu -->
                <div class="z-50 my-4 hidden w-56 list-none divide-y divide-gray-100 rounded-xl bg-white text-base shadow dark:divide-gray-600 dark:bg-gray-700"
                    id="dropdown">
                    <div class="px-4 py-3">
                        <span class="block text-sm font-semibold text-gray-900 dark:text-white">
                            {{ Auth::user()->name }}</span>
                        <span class="block truncate text-sm text-gray-900 dark:text-white">
                            {{ Auth::user()->email }}</span>
                    </div>
                    <div class="block px-4 py-2 text-xs text-gray-400">
                        {{ __('Manage Account') }}
                    </div>
                    <ul class="py-1 text-gray-700 dark:text-gray-300" aria-labelledby="dropdown">
                        <li>
                            <x-dropdown-link href="{{ route('profile.show') }}">
                                {{ __('My Profile') }}
                            </x-dropdown-link>
                        </li>
                    </ul>
                    <ul class="py-1 text-gray-700 dark:text-gray-300" aria-labelledby="dropdown">
                        <li>
                            <form method="POST" action="{{ route('logout') }}" x-data>
                                @csrf
                                <x-dropdown-link href="{{ route('logout') }}" @click.prevent="$root.submit();">
                                    {{ __('Log Out') }}
                                </x-dropdown-link>
                            </form>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </nav>

    <aside
        class="fixed left-0 top-0 z-40 h-screen w-64 -translate-x-full border-r border-gray-200 bg-white pt-14 transition-transform dark:border-gray-700 dark:bg-gray-800 md:translate-x-0"
        aria-label="Sidenav" id="drawer-navigation">
        <div class="h-full overflow-y-auto bg-black px-3 py-5 dark:bg-gray-800">
            <ul class="space-y-2 text-white">
                <li>
                    <a href="{{ url('/dashboard') }}"
                        class="{{ request()->routeIs('dashboard') ? 'border-r-4 border-red-500' : '' }} group flex items-center p-2 text-base font-medium text-white hover:bg-red-500 dark:text-white dark:hover:bg-gray-700">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                            class="size-6 text-white">
                            <path fill-rule="evenodd"
                                d="M3 6a3 3 0 0 1 3-3h2.25a3 3 0 0 1 3 3v2.25a3 3 0 0 1-3 3H6a3 3 0 0 1-3-3V6Zm9.75 0a3 3 0 0 1 3-3H18a3 3 0 0 1 3 3v2.25a3 3 0 0 1-3 3h-2.25a3 3 0 0 1-3-3V6ZM3 15.75a3 3 0 0 1 3-3h2.25a3 3 0 0 1 3 3V18a3 3 0 0 1-3 3H6a3 3 0 0 1-3-3v-2.25Zm9.75 0a3 3 0 0 1 3-3H18a3 3 0 0 1 3 3V18a3 3 0 0 1-3 3h-2.25a3 3 0 0 1-3-3v-2.25Z"
                                clip-rule="evenodd" />
                        </svg>

                        <span class="ml-3 text-white">Dashboard</span>
                    </a>
                </li>
                <li>
                    <a href="{{ route('member.create') }}"
                        class="{{ request()->routeIs('member.create') ? 'border-r-4 border-red-500' : '' }} group flex items-center p-2 text-base font-medium text-white hover:bg-red-500 dark:text-white dark:hover:bg-gray-700">
                        <svg class="h-6 w-6 flex-shrink-0 text-white transition duration-75 group-hover:text-white dark:text-gray-400 dark:group-hover:text-white"
                            xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="size-6">
                            <path
                                d="M11.25 4.533A9.707 9.707 0 0 0 6 3a9.735 9.735 0 0 0-3.25.555.75.75 0 0 0-.5.707v14.25a.75.75 0 0 0 1 .707A8.237 8.237 0 0 1 6 18.75c1.995 0 3.823.707 5.25 1.886V4.533ZM12.75 20.636A8.214 8.214 0 0 1 18 18.75c.966 0 1.89.166 2.75.47a.75.75 0 0 0 1-.708V4.262a.75.75 0 0 0-.5-.707A9.735 9.735 0 0 0 18 3a9.707 9.707 0 0 0-5.25 1.533v16.103Z" />
                        </svg>

                        <span class="ml-3 text-white">Register Member</span>
                    </a>
                </li>
                <li>

                    <a href="{{ route('members') }}"
                        class="{{ request()->routeIs('members') ? 'border-r-4 border-red-500' : '' }}transition group flex w-full items-center p-2 text-base font-medium duration-75 hover:bg-red-500 dark:text-white dark:hover:bg-gray-700">
                        <svg class="h-6 w-6 flex-shrink-0 text-white transition duration-75 group-hover:text-white dark:text-gray-400 dark:group-hover:text-white"
                            xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="size-6">
                            <path d="M12 15a3 3 0 1 0 0-6 3 3 0 0 0 0 6Z" />
                            <path fill-rule="evenodd"
                                d="M1.323 11.447C2.811 6.976 7.028 3.75 12.001 3.75c4.97 0 9.185 3.223 10.675 7.69.12.362.12.752 0 1.113-1.487 4.471-5.705 7.697-10.677 7.697-4.97 0-9.186-3.223-10.675-7.69a1.762 1.762 0 0 1 0-1.113ZM17.25 12a5.25 5.25 0 1 1-10.5 0 5.25 5.25 0 0 1 10.5 0Z"
                                clip-rule="evenodd" />
                        </svg>

                        <span class="ml-3 text-white">View Members</span>
                    </a>
                </li>
                <li>

                    <a href="{{ route('donors') }}"
                        class="{{ request()->routeIs('donors') ? 'border-r-4 border-red-500' : '' }} group flex w-full items-center p-2 text-base font-medium transition duration-75 hover:bg-red-500 dark:text-white dark:hover:bg-gray-700">

                        <svg class="h-6 w-6 flex-shrink-0 text-white transition duration-75 group-hover:text-white dark:text-gray-400 dark:group-hover:text-white"
                            xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="size-6">
                            <path d="M4.5 3.75a3 3 0 0 0-3 3v.75h21v-.75a3 3 0 0 0-3-3h-15Z" />
                            <path fill-rule="evenodd"
                                d="M22.5 9.75h-21v7.5a3 3 0 0 0 3 3h15a3 3 0 0 0 3-3v-7.5Zm-18 3.75a.75.75 0 0 1 .75-.75h6a.75.75 0 0 1 0 1.5h-6a.75.75 0 0 1-.75-.75Zm.75 2.25a.75.75 0 0 0 0 1.5h3a.75.75 0 0 0 0-1.5h-3Z"
                                clip-rule="evenodd" />
                        </svg>
                        <span class="ml-3 text-white">View Donors</span>
                    </a>
                </li>

                <li>
                    <a href="{{ route('payment.create') }}"
                        class="{{ request()->routeIs('payment.create') ? 'border-r-4 border-red-500' : '' }} group flex items-center p-2 text-base font-medium hover:bg-red-500 dark:text-white dark:hover:bg-gray-700">

                        <svg class="h-6 w-6 flex-shrink-0 text-white transition duration-75 group-hover:text-white dark:text-gray-400 dark:group-hover:text-white"
                            xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24">
                            <g fill="none">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2" d="M18 15v3m0 3v-3m0 0h-3m3 0h3" />
                                <path fill="currentColor" fill-rule="evenodd"
                                    d="M5 5a3 3 0 0 0-3 3v8a3 3 0 0 0 3 3h7.083A6 6 0 0 1 12 18c0-1.148.322-2.22.881-3.131A3 3 0 0 1 9 12a3 3 0 1 1 5.869.881A5.97 5.97 0 0 1 18 12c1.537 0 2.939.578 4 1.528V8a3 3 0 0 0-3-3zm7 6a1 1 0 1 0 0 2a1 1 0 0 0 0-2"
                                    clip-rule="evenodd" />
                            </g>
                        </svg>
                        <span class="ml-3 flex-1 whitespace-nowrap text-white">Receive Contribution</span>
                    </a>
                </li>
                <li>
                    <a href="{{ route('donation.create') }}"
                        class="{{ request()->routeIs('donation.create') ? 'border-r-4 border-red-500' : '' }} group flex items-center p-2 text-base font-medium hover:bg-red-500 dark:text-white dark:hover:bg-gray-700">

                        <svg aria-hidden="true"
                            class="h-6 w-6 flex-shrink-0 text-white transition duration-75 group-hover:text-white dark:text-gray-400 dark:group-hover:text-white"
                            xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                            class="size-6">
                            <path d="M12 7.5a2.25 2.25 0 1 0 0 4.5 2.25 2.25 0 0 0 0-4.5Z" />
                            <path fill-rule="evenodd"
                                d="M1.5 4.875C1.5 3.839 2.34 3 3.375 3h17.25c1.035 0 1.875.84 1.875 1.875v9.75c0 1.036-.84 1.875-1.875 1.875H3.375A1.875 1.875 0 0 1 1.5 14.625v-9.75ZM8.25 9.75a3.75 3.75 0 1 1 7.5 0 3.75 3.75 0 0 1-7.5 0ZM18.75 9a.75.75 0 0 0-.75.75v.008c0 .414.336.75.75.75h.008a.75.75 0 0 0 .75-.75V9.75a.75.75 0 0 0-.75-.75h-.008ZM4.5 9.75A.75.75 0 0 1 5.25 9h.008a.75.75 0 0 1 .75.75v.008a.75.75 0 0 1-.75.75H5.25a.75.75 0 0 1-.75-.75V9.75Z"
                                clip-rule="evenodd" />
                            <path
                                d="M2.25 18a.75.75 0 0 0 0 1.5c5.4 0 10.63.722 15.6 2.075 1.19.324 2.4-.558 2.4-1.82V18.75a.75.75 0 0 0-.75-.75H2.25Z" />
                        </svg>


                        <span class="ml-3 flex-1 whitespace-nowrap text-white">Receive Donation</span>

                    </a>
                </li>
                <li>

                    <a href="{{ route('payments') }}"
                        class="{{ request()->routeIs('payments') ? 'border-r-4 border-red-500' : '' }} group flex w-full items-center p-2 text-base font-medium transition duration-75 hover:bg-red-500 dark:text-white dark:hover:bg-gray-700">
                        <svg class="h-6 w-6 flex-shrink-0 text-white transition duration-75 group-hover:text-white dark:text-gray-400 dark:group-hover:text-white"
                            xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24">
                            <path fill="currentColor"
                                d="M2 6.75C2 5.784 2.784 5 3.75 5h13.5c.966 0 1.75.784 1.75 1.75v8.5A1.75 1.75 0 0 1 17.25 17H3.75A1.75 1.75 0 0 1 2 15.25zm3-.5v1a.75.75 0 0 1-.75.75h-1v1.5h1A2.25 2.25 0 0 0 6.5 7.25v-1zm5.5 7.25a2.25 2.25 0 1 0 0-4.5a2.25 2.25 0 0 0 0 4.5m-7.25.5h1a.75.75 0 0 1 .75.75v1h1.5v-1a2.25 2.25 0 0 0-2.25-2.25h-1zm12.75.75a.75.75 0 0 1 .75-.75h1v-1.5h-1a2.25 2.25 0 0 0-2.25 2.25v1H16zm0-7.5v-1h-1.5v1a2.25 2.25 0 0 0 2.25 2.25h1V8h-1a.75.75 0 0 1-.75-.75M4.401 18.5A3 3 0 0 0 7 20h10.25A4.75 4.75 0 0 0 22 15.25V10a3 3 0 0 0-1.5-2.599v7.849a3.25 3.25 0 0 1-3.25 3.25z" />
                        </svg>

                        <span class="ml-3 text-white">Funeral Contributions</span>
                    </a>
                </li>
                <li>

                    <a href="{{ route('donations') }}"
                        class="{{ request()->routeIs('donations') ? 'border-r-4 border-red-500' : '' }} group flex w-full items-center p-2 text-base font-medium transition duration-75 hover:bg-red-500 dark:text-white dark:hover:bg-gray-700">
                        <svg class="h-6 w-6 flex-shrink-0 text-white transition duration-75 group-hover:text-white dark:text-gray-400 dark:group-hover:text-white"
                            xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24">
                            <path fill="currentColor"
                                d="M11.997 15.48q-.668 0-1.14-.475t-.472-1.143t.475-1.14t1.144-.472t1.14.476t.472 1.143t-.476 1.14t-1.143.472M8.375 7.75h7.25L17.491 4H6.51zM8.631 20h6.738q1.93 0 3.28-1.351Q20 17.298 20 15.363q0-.808-.277-1.574t-.8-1.395L15.881 8.75H8.119l-3.042 3.644q-.523.629-.8 1.395Q4 14.554 4 15.363q0 1.935 1.351 3.286T8.631 20" />
                        </svg>

                        <span class="ml-3 text-white">Donations</span>
                    </a>
                </li>
            </ul>
            <ul class="relative mt-5 space-y-2 border-t border-red-200 pt-5 dark:border-red-700">
                <li>
                    <a href="#"
                        class="{{ request()->routeIs('roles') ? 'border-r-4 border-red-500' : '' }} group flex items-center p-2 text-base font-medium transition duration-75 hover:bg-red-500 dark:text-white dark:hover:bg-gray-700">
                        <svg aria-hidden="true"
                            class="h-6 w-6 flex-shrink-0 text-white transition duration-75 group-hover:text-white dark:text-gray-400 dark:group-hover:text-white"
                            xmlns="http://www.w3.org/2000/svg" width="1.08em" height="1em"
                            viewBox="0 0 1920 1792">
                            <path fill="currentColor"
                                d="m960 0l960 384v128h-128q0 26-20.5 45t-48.5 19H197q-28 0-48.5-19T128 512H0V384zM256 640h256v768h128V640h256v768h128V640h256v768h128V640h256v768h59q28 0 48.5 19t20.5 45v64H128v-64q0-26 20.5-45t48.5-19h59zm1595 960q28 0 48.5 19t20.5 45v128H0v-128q0-26 20.5-45t48.5-19z" />
                        </svg>
                        <span class="ml-3 text-white">Roles</span>
                    </a>
                </li>

                <li>
                    <a href="{{ route('user.create') }}"
                        class="{{ request()->routeIs('user.create') ? 'border-r-4 border-red-500' : '' }} group flex items-center p-2 text-base font-medium transition duration-75 hover:bg-red-500 dark:text-white dark:hover:bg-gray-700">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                            class="size-6 text-white">
                            <path
                                d="M5.25 6.375a4.125 4.125 0 1 1 8.25 0 4.125 4.125 0 0 1-8.25 0ZM2.25 19.125a7.125 7.125 0 0 1 14.25 0v.003l-.001.119a.75.75 0 0 1-.363.63 13.067 13.067 0 0 1-6.761 1.873c-2.472 0-4.786-.684-6.76-1.873a.75.75 0 0 1-.364-.63l-.001-.122ZM18.75 7.5a.75.75 0 0 0-1.5 0v2.25H15a.75.75 0 0 0 0 1.5h2.25v2.25a.75.75 0 0 0 1.5 0v-2.25H21a.75.75 0 0 0 0-1.5h-2.25V7.5Z" />
                        </svg>
                        <span class="ml-3 text-white">Create User</span>
                    </a>
                </li>
                <li>
                    <a href="{{ route('users') }}"
                        class="{{ request()->routeIs('users') ? 'border-r-4 border-red-500' : '' }} group flex items-center p-2 text-base font-medium transition duration-75 hover:bg-red-500 dark:text-white dark:hover:bg-gray-700">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                            class="size-6 text-white">
                            <path
                                d="M4.5 6.375a4.125 4.125 0 1 1 8.25 0 4.125 4.125 0 0 1-8.25 0ZM14.25 8.625a3.375 3.375 0 1 1 6.75 0 3.375 3.375 0 0 1-6.75 0ZM1.5 19.125a7.125 7.125 0 0 1 14.25 0v.003l-.001.119a.75.75 0 0 1-.363.63 13.067 13.067 0 0 1-6.761 1.873c-2.472 0-4.786-.684-6.76-1.873a.75.75 0 0 1-.364-.63l-.001-.122ZM17.25 19.128l-.001.144a2.25 2.25 0 0 1-.233.96 10.088 10.088 0 0 0 5.06-1.01.75.75 0 0 0 .42-.643 4.875 4.875 0 0 0-6.957-4.611 8.586 8.586 0 0 1 1.71 5.157v.003Z" />
                        </svg>
                        <span class="ml-3 text-white">View Users</span>
                    </a>
                </li>
                @if (Auth::user()->institution)
                    <li>
                        <a href="{{ route('institution.single', Auth::user()->institution_id) }}"
                            class="{{ request()->routeIs('institution.single') ? 'border-r-4 border-red-500' : '' }} group flex items-center p-2 text-base font-medium transition duration-75 hover:bg-red-500 dark:text-white dark:hover:bg-gray-700">

                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                                class="size-6 text-white">
                                <path
                                    d="M21.721 12.752a9.711 9.711 0 0 0-.945-5.003 12.754 12.754 0 0 1-4.339 2.708 18.991 18.991 0 0 1-.214 4.772 17.165 17.165 0 0 0 5.498-2.477ZM14.634 15.55a17.324 17.324 0 0 0 .332-4.647c-.952.227-1.945.347-2.966.347-1.021 0-2.014-.12-2.966-.347a17.515 17.515 0 0 0 .332 4.647 17.385 17.385 0 0 0 5.268 0ZM9.772 17.119a18.963 18.963 0 0 0 4.456 0A17.182 17.182 0 0 1 12 21.724a17.18 17.18 0 0 1-2.228-4.605ZM7.777 15.23a18.87 18.87 0 0 1-.214-4.774 12.753 12.753 0 0 1-4.34-2.708 9.711 9.711 0 0 0-.944 5.004 17.165 17.165 0 0 0 5.498 2.477ZM21.356 14.752a9.765 9.765 0 0 1-7.478 6.817 18.64 18.64 0 0 0 1.988-4.718 18.627 18.627 0 0 0 5.49-2.098ZM2.644 14.752c1.682.971 3.53 1.688 5.49 2.099a18.64 18.64 0 0 0 1.988 4.718 9.765 9.765 0 0 1-7.478-6.816ZM13.878 2.43a9.755 9.755 0 0 1 6.116 3.986 11.267 11.267 0 0 1-3.746 2.504 18.63 18.63 0 0 0-2.37-6.49ZM12 2.276a17.152 17.152 0 0 1 2.805 7.121c-.897.23-1.837.353-2.805.353-.968 0-1.908-.122-2.805-.353A17.151 17.151 0 0 1 12 2.276ZM10.122 2.43a18.629 18.629 0 0 0-2.37 6.49 11.266 11.266 0 0 1-3.746-2.504 9.754 9.754 0 0 1 6.116-3.985Z" />
                            </svg>

                            <span class="ml-3 text-white">My Community</span>
                        </a>
                    </li>
                @else
                    <li>
                        <a href="{{ route('institution.create') }}"
                            class="{{ request()->routeIs('institution.create') ? 'border-r-4 border-red-500' : '' }} group flex items-center p-2 text-base font-medium transition duration-75 hover:bg-red-500 dark:text-white dark:hover:bg-gray-700">

                            <svg aria-hidden="true"
                                class="h-6 w-6 flex-shrink-0 text-white transition duration-75 group-hover:text-white dark:text-gray-400 dark:group-hover:text-white"
                                xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                                class="size-6">
                                <path fill-rule="evenodd"
                                    d="M7.5 6a4.5 4.5 0 1 1 9 0 4.5 4.5 0 0 1-9 0ZM3.751 20.105a8.25 8.25 0 0 1 16.498 0 .75.75 0 0 1-.437.695A18.683 18.683 0 0 1 12 22.5c-2.786 0-5.433-.608-7.812-1.7a.75.75 0 0 1-.437-.695Z"
                                    clip-rule="evenodd" />
                            </svg>

                            <span class="ml-3 text-white">Create Institution</span>
                        </a>
                    </li>
                @endif
                <li>
                    <a href="{{ route('projects') }}"
                        class="{{ request()->routeIs('projects') ? 'border-r-4 border-red-500' : '' }} group flex items-center p-2 text-base font-medium transition duration-75 hover:bg-red-500 dark:text-white dark:hover:bg-gray-700">

                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                            class="size-5 text-white transition duration-75">
                            <path fill-rule="evenodd"
                                d="M12 6.75a5.25 5.25 0 0 1 6.775-5.025.75.75 0 0 1 .313 1.248l-3.32 3.319c.063.475.276.934.641 1.299.365.365.824.578 1.3.64l3.318-3.319a.75.75 0 0 1 1.248.313 5.25 5.25 0 0 1-5.472 6.756c-1.018-.086-1.87.1-2.309.634L7.344 21.3A3.298 3.298 0 1 1 2.7 16.657l8.684-7.151c.533-.44.72-1.291.634-2.309A5.342 5.342 0 0 1 12 6.75ZM4.117 19.125a.75.75 0 0 1 .75-.75h.008a.75.75 0 0 1 .75.75v.008a.75.75 0 0 1-.75.75h-.008a.75.75 0 0 1-.75-.75v-.008Z"
                                clip-rule="evenodd" />
                            <path
                                d="m10.076 8.64-2.201-2.2V4.874a.75.75 0 0 0-.364-.643l-3.75-2.25a.75.75 0 0 0-.916.113l-.75.75a.75.75 0 0 0-.113.916l2.25 3.75a.75.75 0 0 0 .643.364h1.564l2.062 2.062 1.575-1.297Z" />
                            <path fill-rule="evenodd"
                                d="m12.556 17.329 4.183 4.182a3.375 3.375 0 0 0 4.773-4.773l-3.306-3.305a6.803 6.803 0 0 1-1.53.043c-.394-.034-.682-.006-.867.042a.589.589 0 0 0-.167.063l-3.086 3.748Zm3.414-1.36a.75.75 0 0 1 1.06 0l1.875 1.876a.75.75 0 1 1-1.06 1.06L15.97 17.03a.75.75 0 0 1 0-1.06Z"
                                clip-rule="evenodd" />
                        </svg>

                        <span class="ml-3 text-white">View Projects</span>
                    </a>
                </li>
                <li>
                    <a href="#"
                        class="{{ request()->routeIs('member.create') ? 'border-r-4 border-red-500' : '' }} group flex items-center p-2 text-base font-medium transition duration-75 hover:bg-red-500 dark:text-white dark:hover:bg-gray-700">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                            class="size-5 text-white">
                            <path
                                d="M5.85 3.5a.75.75 0 0 0-1.117-1 9.719 9.719 0 0 0-2.348 4.876.75.75 0 0 0 1.479.248A8.219 8.219 0 0 1 5.85 3.5ZM19.267 2.5a.75.75 0 1 0-1.118 1 8.22 8.22 0 0 1 1.987 4.124.75.75 0 0 0 1.48-.248A9.72 9.72 0 0 0 19.266 2.5Z" />
                            <path fill-rule="evenodd"
                                d="M12 2.25A6.75 6.75 0 0 0 5.25 9v.75a8.217 8.217 0 0 1-2.119 5.52.75.75 0 0 0 .298 1.206c1.544.57 3.16.99 4.831 1.243a3.75 3.75 0 1 0 7.48 0 24.583 24.583 0 0 0 4.83-1.244.75.75 0 0 0 .298-1.205 8.217 8.217 0 0 1-2.118-5.52V9A6.75 6.75 0 0 0 12 2.25ZM9.75 18c0-.034 0-.067.002-.1a25.05 25.05 0 0 0 4.496 0l.002.1a2.25 2.25 0 1 1-4.5 0Z"
                                clip-rule="evenodd" />
                        </svg>

                        <span class="ml-3 text-white">Notifications</span>
                    </a>
                </li>
                <li>
                    <a href="#"
                        class="{{ request()->routeIs('member.create') ? 'border-r-4 border-red-500' : '' }} group flex items-center p-2 text-base font-medium transition duration-75 hover:bg-red-500 dark:text-white dark:hover:bg-gray-700">
                        <svg aria-hidden="true"
                            class="h-6 w-6 flex-shrink-0 text-white transition duration-75 group-hover:text-white dark:text-gray-400 dark:group-hover:text-white"
                            fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd"
                                d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-2 0c0 .993-.241 1.929-.668 2.754l-1.524-1.525a3.997 3.997 0 00.078-2.183l1.562-1.562C15.802 8.249 16 9.1 16 10zm-5.165 3.913l1.58 1.58A5.98 5.98 0 0110 16a5.976 5.976 0 01-2.516-.552l1.562-1.562a4.006 4.006 0 001.789.027zm-4.677-2.796a4.002 4.002 0 01-.041-2.08l-.08.08-1.53-1.533A5.98 5.98 0 004 10c0 .954.223 1.856.619 2.657l1.54-1.54zm1.088-6.45A5.974 5.974 0 0110 4c.954 0 1.856.223 2.657.619l-1.54 1.54a4.002 4.002 0 00-2.346.033L7.246 4.668zM12 10a2 2 0 11-4 0 2 2 0 014 0z"
                                clip-rule="evenodd"></path>
                        </svg>
                        <span class="ml-3 text-white">Help</span>
                    </a>
                </li>
                <li class="group relative">
                    <a href="#" id="dropDown"
                        class="relative flex w-full flex-row items-center justify-between gap-2 rounded-md px-2 py-4 text-sm font-medium text-gray-900 transition duration-150 hover:bg-red-500 dark:text-white dark:hover:bg-gray-700">
                        <div class="flex flex-row items-center gap-4">
                            <div class="h-8 w-8 rounded-full">
                                <img src="/logos/{{ Auth::user()->institution->logo }}" alt="Logo"
                                    class="h-full w-full object-cover">
                            </div>
                            <div class="flex flex-col">
                                <span class="inline-block text-xs font-medium text-white">
                                    {{ Auth::user()->institution->name }}
                                </span>
                                <span class="inline-block text-xs text-white">
                                    {{ Auth::user()->institution->address }}
                                </span>
                            </div>
                        </div>
                        <div>
                            <svg id="drop-icon" class="size-6 text-white transition-transform"
                                xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                stroke-width="1.5" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" d="m19.5 8.25-7.5 7.5-7.5-7.5" />
                            </svg>
                        </div>
                    </a>
                    <div
                        class="popover absolute right-0 top-full z-50 mt-2 hidden w-56 origin-top-right transform transition-all duration-300 ease-in-out">
                        <div
                            class="overflow-hidden rounded-lg border border-red-500 bg-red-500 shadow-xl dark:border-gray-700 dark:bg-gray-800">
                            <div class="py-1">
                                <a href="#"
                                    class="hover:text-dark block px-4 py-2 text-sm text-white transition duration-150 ease-in-out hover:bg-red-500 dark:text-gray-300 dark:hover:bg-gray-700 dark:hover:text-black">
                                    <div class="flex items-center gap-3">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-white"
                                            fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z" />
                                        </svg>
                                        Edit Institution
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </li>
            </ul>

        </div>

    </aside>
</div>

<script>
    document.getElementById('dropDown').addEventListener('click', function() {
        document.querySelector('.popover').classList.toggle('hidden');
        document.getElementById('drop-icon').classList.toggle('rotate-180')
    });

    document.getElementById('dropDown').addEventListener('blur', function() {
        document.getElementById('drop-icon').classList.replace('rotate-180', 'rotate-0');
        document.querySelector('.popover').classList.add('hidden');
    })
</script>
