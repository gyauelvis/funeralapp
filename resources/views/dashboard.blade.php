<x-app-layout>
    <main class="h-auto p-4 pt-20 md:ml-64">
        <div class="container mx-auto">
            <h1 class="mb-8 text-3xl font-bold text-gray-800">Community Dashboard</h1>
            <div class="mb-8 grid grid-cols-1 gap-6 sm:grid-cols-2 lg:grid-cols-4">
                <div
                    class="transform rounded-xl bg-white shadow-lg transition-all duration-300 hover:-translate-y-2 hover:shadow-xl">
                    <div class="flex flex-col p-6">
                        <div class="mb-4 flex items-center justify-between">
                            <div class="rounded-full bg-blue-50 p-3">
                                <svg class="h-8 w-8 text-blue-600" xmlns="http://www.w3.org/2000/svg" fill="none"
                                    viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M2.25 18.75a60.07 60.07 0 0 1 15.797 2.101c.727.198 1.453-.342 1.453-1.096V18.75M3.75 4.5v.75A.75.75 0 0 1 3 6h-.75m0 0v-.375c0-.621.504-1.125 1.125-1.125H20.25M2.25 6v9m18-10.5v.75c0 .414.336.75.75.75h.75m-1.5-1.5h.375c.621 0 1.125.504 1.125 1.125v9.75c0 .621-.504 1.125-1.125 1.125h-.375m1.5-1.5H21a.75.75 0 0 0-.75.75v.75m0 0H3.75m0 0h-.375a1.125 1.125 0 0 1-1.125-1.125V15m1.5 1.5v-.75A.75.75 0 0 0 3 15h-.75M15 10.5a3 3 0 1 1-6 0 3 3 0 0 1 6 0Zm3 0h.008v.008H18V10.5Zm-12 0h.008v.008H6V10.5Z" />
                                </svg>
                            </div>
                            <a href="#" id="card-drop-down-icon" class="relative z-50">
                                <svg class="size-6 text-gray-500" xmlns="http://www.w3.org/2000/svg" fill="none"
                                    viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="m19.5 8.25-7.5 7.5-7.5-7.5" />
                                </svg>
                            </a>
                            <div id="card-drop-down"
                                class="absolute -right-5 top-16 z-50 hidden w-44 divide-y divide-gray-100 rounded-lg bg-white shadow dark:bg-gray-700">
                                <ul class="py-2 text-sm text-gray-700 dark:text-gray-200"
                                    aria-labelledby="dropdownDefaultButton">
                                    <li wire:model.live='date_sort'>
                                        <a href="#"
                                            class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Today</a>
                                    </li>
                                    <li>
                                        <a href="#"
                                            class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">This
                                            Week</a>
                                    </li>
                                    <li>
                                        <a href="#"
                                            class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">This
                                            Month</a>
                                    </li>
                                    <li>
                                        <a href="#"
                                            class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">This
                                            Year</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="mb-2 text-2xl font-bold text-gray-800">
                            {{ Number::currency($payments->where('payment_type', 'DONATION')->sum('amount'), 'GHS') }}
                        </div>
                        <div class="text-sm text-gray-500">Total Amount of Donations</div>
                    </div>
                </div>
                <div
                    class="relative z-20 transform rounded-xl bg-white shadow-lg transition-all duration-300 hover:-translate-y-2 hover:shadow-xl">
                    <div class="flex flex-col p-6">
                        <div class="mb-4 flex items-center justify-between">
                            <div class="rounded-full bg-green-50 p-3">
                                <svg class="size-8 text-green-600" xmlns="http://www.w3.org/2000/svg"
                                    viewBox="0 0 24 24" width="24" height="24" color="currentColor"
                                    fill="none">
                                    <path
                                        d="M16 14C16 14.8284 16.6716 15.5 17.5 15.5C18.3284 15.5 19 14.8284 19 14C19 13.1716 18.3284 12.5 17.5 12.5C16.6716 12.5 16 13.1716 16 14Z"
                                        stroke="currentColor" stroke-width="1.5" />
                                    <path
                                        d="M18.9 8C18.9656 7.67689 19 7.34247 19 7C19 4.23858 16.7614 2 14 2C11.2386 2 9 4.23858 9 7C9 7.34247 9.03443 7.67689 9.10002 8"
                                        stroke="currentColor" stroke-width="1.5" />
                                    <path
                                        d="M7 7.99324H16C18.8284 7.99324 20.2426 7.99324 21.1213 8.87234C22 9.75145 22 11.1663 22 13.9961V15.9971C22 18.8269 22 20.2418 21.1213 21.1209C20.2426 22 18.8284 22 16 22H10C6.22876 22 4.34315 22 3.17157 20.8279C2 19.6557 2 17.7692 2 13.9961V11.9952C2 8.22211 2 6.33558 3.17157 5.16344C4.11466 4.2199 5.52043 4.03589 8 4H10"
                                        stroke="currentColor" stroke-width="1.5" stroke-linecap="round" />
                                </svg>
                            </div>
                            <a href="#" id="card-drop-down-icon" class="relative z-50">
                                <svg class="size-6 text-gray-500" xmlns="http://www.w3.org/2000/svg" fill="none"
                                    viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="m19.5 8.25-7.5 7.5-7.5-7.5" />
                                </svg>
                            </a>
                            <div id="card-drop-down"
                                class="absolute -right-5 top-16 z-50 hidden w-44 divide-y divide-gray-100 rounded-lg bg-white shadow dark:bg-gray-700">
                                <ul class="py-2 text-sm text-gray-700 dark:text-gray-200"
                                    aria-labelledby="dropdownDefaultButton">
                                    <li>
                                        <a href="#"
                                            class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Today</a>
                                    </li>
                                    <li>
                                        <a href="#"
                                            class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">This
                                            Week</a>
                                    </li>
                                    <li>
                                        <a href="#"
                                            class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">This
                                            Month</a>
                                    </li>
                                    <li>
                                        <a href="#"
                                            class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">This
                                            Year</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="mb-2 text-2xl font-bold text-gray-800">
                            {{ $payments->where('payment_type', 'CONTRIBUTION')->sum('amount') < 0 ? 'GHS ---' : Number::currency($payments->where('payment_type', 'CONTRIBUTION')->sum('amount'), 'GHS') }}
                        </div>
                        <div class="text-sm text-gray-500">Total Development Levy</div>
                    </div>
                </div>
                <div
                    class="transform overflow-hidden rounded-xl bg-white shadow-lg transition-all duration-300 hover:-translate-y-2 hover:shadow-xl">
                    <div class="flex flex-col p-6">
                        <div class="mb-4 flex items-center justify-between">
                            <div class="rounded-full bg-purple-50 p-3">
                                <svg class="h-8 w-8 text-purple-600" xmlns="http://www.w3.org/2000/svg" fill="none"
                                    viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M18 18.72a9.094 9.094 0 0 0 3.741-.479 3 3 0 0 0-4.682-2.72m.94 3.198.001.031c0 .225-.012.447-.037.666A11.944 11.944 0 0 1 12 21c-2.17 0-4.207-.576-5.963-1.584A6.062 6.062 0 0 1 6 18.719m12 0a5.971 5.971 0 0 0-.941-3.197m0 0A5.995 5.995 0 0 0 12 12.75a5.995 5.995 0 0 0-5.058 2.772m0 0a3 3 0 0 0-4.681 2.72 8.986 8.986 0 0 0 3.74.477m.94-3.197a5.971 5.971 0 0 0-.94 3.197M15 6.75a3 3 0 1 1-6 0 3 3 0 0 1 6 0Zm6 3a2.25 2.25 0 1 1-4.5 0 2.25 2.25 0 0 1 4.5 0Zm-13.5 0a2.25 2.25 0 1 1-4.5 0 2.25 2.25 0 0 1 4.5 0Z" />
                                </svg>
                            </div>
                        </div>
                        <div class="mb-2 text-2xl font-bold text-gray-800">{{ $members->count() }}</div>
                        <div class="text-sm text-gray-500">Registered Community Members</div>
                    </div>
                </div>
                <div
                    class="transform overflow-hidden rounded-xl bg-white shadow-lg transition-all duration-300 hover:-translate-y-2 hover:shadow-xl">
                    <div class="flex flex-col p-6">
                        <div class="mb-4 flex items-center justify-between">
                            <div class="rounded-full bg-red-50 p-3">
                                <svg class="size-8 text-red-600" xmlns="http://www.w3.org/2000/svg" fill="none"
                                    viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M15.75 6a3.75 3.75 0 1 1-7.5 0 3.75 3.75 0 0 1 7.5 0ZM4.501 20.118a7.5 7.5 0 0 1 14.998 0A17.933 17.933 0 0 1 12 21.75c-2.676 0-5.216-.584-7.499-1.632Z" />
                                </svg>

                            </div>
                        </div>
                        <div class="mb-2 text-2xl font-bold text-gray-800">{{ $users->count() }}</div>
                        <div class="text-sm text-gray-500">Total Users Created</div>
                    </div>
                </div>
            </div>

            <div class="grid grid-cols-3 gap-6">
                <div class="overflow-hidden rounded-xl bg-white shadow-lg">
                    <div class="p-6">
                        <div class="mb-6 flex items-center justify-between">
                            <h5 class="text-xl font-bold text-gray-800">Community Members</h5>
                            <a href="{{ route('members') }}"
                                class="text-sm font-medium text-blue-600 hover:underline">
                                View all
                            </a>
                        </div>
                        @if ($members->count() < 5)
                            <div class="flex items-center justify-center text-center">Data is collating...</div>
                        @else
                            <div class="space-y-4">
                                <ul id="communityMember" class="divide-y divide-gray-200">
                                    @foreach ($members->take(5) as $member)
                                        <li class="py-3 sm:py-4">
                                            <a href="{{ route('member.single', $member->id) }}">
                                                <div class="grid grid-cols-8">
                                                    <div class="col-span-6 min-w-0 flex-1">
                                                        <p
                                                            class="truncate text-sm font-medium text-gray-900 dark:text-white">
                                                            {{ $member->name }}
                                                        </p>
                                                        <p class="truncate text-sm text-gray-500 dark:text-gray-400">
                                                            {{ $member->phone_number }}
                                                        </p>
                                                    </div>
                                                    <div
                                                        class="col-span-2 inline-flex items-center text-base text-sm font-semibold text-gray-900 dark:text-white">
                                                        {{ $member->created_at->toFormattedDateString() }}
                                                    </div>
                                                </div>
                                            </a>
                                        </li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif
                    </div>
                </div>
                <div class="rounded-xl bg-white shadow-lg">
                    <div class="p-6">
                        <div class="relative mb-6 flex items-center justify-between">
                            <h5 class="text-xl font-bold text-gray-800" id="overview-title"></h5>
                            <a href="#" id="monthly-drop-down-icon"
                                class="text-sm font-medium transition hover:underline">
                                <svg id="drop-icon-overview" class="size-6 text-blue-600 transition-transform"
                                    xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke-width="1.5" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="m19.5 8.25-7.5 7.5-7.5-7.5" />
                                </svg>
                            </a>
                            <div id="monthly-drop-down"
                                class="absolute -right-20 top-5 z-50 hidden w-44 divide-y divide-gray-100 rounded-lg bg-white shadow dark:bg-gray-700">
                                <ul class="py-2 text-sm text-gray-700 dark:text-gray-200"
                                    aria-labelledby="dropdownDefaultButton">
                                    <li>
                                        <a onclick="populateMonthlyOverview(true)" href="#"
                                            class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Donations</a>
                                    </li>
                                    <li>
                                        <a href="#" onclick="populateMonthlyOverview(false)"
                                            class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Contributions</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="space-y-4">
                            @if ($members->count() < 5)
                                <div class="text-center">Data is collating...</div>
                            @else
                                <ul id="monthly-overview" class="divide-y divide-gray-200">

                                </ul>
                            @endif
                        </div>
                    </div>
                </div>

                <div class="rounded-xl bg-white shadow-lg">
                    <div class="p-6">
                        <div class="relative mb-6 flex items-center justify-between">
                            <h5 class="text-xl font-bold text-gray-800" id="year-overview-title"></h5>
                            <a href="#" id="monthly-drop-down-icon"
                                class="text-sm font-medium transition hover:underline">
                                <svg id="drop-icon-overview" class="size-6 text-blue-600 transition-transform"
                                    xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke-width="1.5" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="m19.5 8.25-7.5 7.5-7.5-7.5" />
                                </svg>
                            </a>
                            <div id="monthly-drop-down"
                                class="absolute -right-20 top-5 z-50 hidden w-44 divide-y divide-gray-100 rounded-lg bg-white shadow dark:bg-gray-700">
                                <ul class="py-2 text-sm text-gray-700 dark:text-gray-200"
                                    aria-labelledby="dropdownDefaultButton">
                                    <li>
                                        <a onclick="populateMonthlyOverview(true)" href="#"
                                            class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Donations</a>
                                    </li>
                                    <li>
                                        <a href="#" onclick="populateMonthlyOverview(false)"
                                            class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Contributions</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="space-y-4">
                            @if ($members->count() < 5)
                                <div class="text-center">Data is collating...</div>
                            @else
                                <ul id="yearly-overview" class="divide-y divide-gray-200">

                                </ul>
                            @endif

                        </div>
                    </div>
                </div>

            </div>
        </div>
    </main>
</x-app-layout>

<script>
    document.querySelectorAll('#card-drop-down-icon').forEach(icon => {
        icon.addEventListener('click', function() {
            icon.classList.add('rotate-180');
            icon.nextElementSibling.classList.toggle('hidden');
        })
    })

    document.querySelectorAll('#card-drop-down-icon').forEach(dropDown => {
        dropDown.addEventListener('blur', function() {
            dropDown.nextElementSibling.classList.add('hidden');
            dropDown.classList.remove('rotate-180');
        })
    })

    const monthOverview = [{
        month: 'January',
        donations: 1000,
        funeralWages: 2000,
        communityMembers: 1000,
        donors: 500
    }, {
        month: 'February',
        donations: 1500,
        funeralWages: 2500,
        communityMembers: 1200,
        donors: 600
    }, {
        month: 'March',
        donations: 2000,
        funeralWages: 3000,
        communityMembers: 1500,
        donors: 700
    }, {
        month: 'April',
        donations: 2500,
        funeralWages: 3500,
        communityMembers: 2000,
        donors: 800
    }]

    const yearlyOverview = [{
        year: 2022,
        donations: 25000,
        funeralWages: 35000,
        communityMembers: 5000,
        donors: 2500
    }, {
        year: 2023,
        donations: 45000,
        funeralWages: 55000,
        communityMembers: 8000,
        donors: 4000
    }, {
        year: 2023,
        donations: 45000,
        funeralWages: 55000,
        communityMembers: 8000,
        donors: 4000
    }, {
        year: 2024,
        donations: 72000,
        funeralWages: 85000,
        communityMembers: 12000,
        donors: 6000
    }];

    const populateYearlyOverview = (isDonor) => {
        const monthlyOverview = document.getElementById('yearly-overview');
        const overviewTitle = document.getElementById('year-overview-title');
        if (isDonor) {
            overviewTitle.innerHTML = 'Yearly Donations';
        } else {
            overviewTitle.innerHTML = 'Yearly Contribution';
        }
        monthlyOverview.innerHTML = '';
        yearlyOverview.forEach(year => {
            const li = document.createElement('li');
            li.className = 'py-4 hover:bg-gray-50 transition-colors duration-200';
            li.innerHTML = `<div class="flex items-center justify-between">
            <div>
                <p class="text-sm font-medium text-gray-900 mb-1">
                    ${year.year}
                </p>
                <p class="text-sm text-gray-500">
                    ${!isDonor ? year.communityMembers : year.donors}
                </p>
            </div>
            <div class="text-sm font-semibold text-gray-800">
                GH₵ ${!isDonor ? year.funeralWages : year.donations}
            </div>
        </div>`
            monthlyOverview.appendChild(li);
        });
    }

    populateYearlyOverview(false);

    const populateMonthlyOverview = (isDonor) => {
        const monthlyOverview = document.getElementById('monthly-overview');
        const overviewTitle = document.getElementById('overview-title');
        if (isDonor) {
            overviewTitle.innerHTML = 'Monthly Donations';
        } else {
            overviewTitle.innerHTML = 'Monthly Contribution';
        }
        monthlyOverview.innerHTML = '';
        monthOverview.forEach(month => {
            const li = document.createElement('li');
            li.className = 'py-4 hover:bg-gray-50 transition-colors duration-200';
            li.innerHTML = `<div class="flex items-center justify-between">
                <div>
                    <p class="text-sm font-medium text-gray-900 mb-1">
                        ${month.month}
                    </p>
                    <p class="text-sm text-gray-500">
                        ${!isDonor ? month.communityMembers : month.donors}
                    </p>
                </div>
                <div class="text-sm font-semibold text-gray-800">
                    GH₵ ${!isDonor ? month.funeralWages : month.donations}
                </div>
            </div>`
            monthlyOverview.appendChild(li);
        });
    }

    populateMonthlyOverview(false);

    document.querySelectorAll('#monthly-drop-down-icon').forEach(icon => {
        icon.addEventListener('click', function() {
            icon.classList.add('rotate-180');
            icon.nextElementSibling.classList.toggle('hidden');
        })
    })

    document.querySelectorAll('#monthly-drop-down-icon').forEach(dropDown => {
        dropDown.addEventListener('blur', function() {
            dropDown.nextElementSibling.classList.add('hidden');
            dropDown.classList.remove('rotate-180');
        })
    })
</script>
