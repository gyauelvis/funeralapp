<x-app-layout>
    <main
        class="flex h-auto min-h-screen items-center justify-center rounded-lg md:ml-64 bg-white dark:bg-gray-700">
        <div class="relative shadow-md sm:rounded-lg p-5 bg-white dark:bg-gray-700 mx-5">
            <div class="relative min-h-[400px]">
                <div
                    class="flex-column fixed flex flex-wrap items-center justify-between space-y-4 bg-white pb-4 dark:bg-gray-900 md:flex-row md:space-y-0">
                    <div>

                        <div id="dropdownAction"
                            class="z-50 hidden w-44 divide-y divide-gray-100 rounded-lg bg-white shadow dark:divide-gray-600 dark:bg-gray-700">
                            <ul class="px-1 py-1 text-sm text-gray-700 dark:text-gray-200"
                                aria-labelledby="dropdownActionButton">
                                <li>
                                    <input id="donor" onchange="filter('donor')" checked type="checkbox"
                                        value="donor"
                                        class="h-4 w-4 rounded border-gray-300 bg-gray-100 text-blue-600 focus:ring-2 focus:ring-blue-500 dark:border-gray-600 dark:bg-gray-700 dark:ring-offset-gray-800 dark:focus:ring-blue-600">
                                    <label for="donor"
                                        class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Donors</label>
                                </li>
                                <li>
                                    <input id="member" onchange="filter('member')" checked type="checkbox"
                                        value="member"
                                        class="h-4 w-4 rounded border-gray-300 bg-gray-100 text-blue-600 focus:ring-2 focus:ring-blue-500 dark:border-gray-600 dark:bg-gray-700 dark:ring-offset-gray-800 dark:focus:ring-blue-600">
                                    <label for="member"
                                        class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Members</label>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <table class="w-full table-fixed text-left text-sm rtl:text-right -z-50 rounded-full">
                    <div class="flex flex-row justify-between">
                        <div class="relative mt-1">
                            <div class="rtl:inset-r-0 pointer-events-none absolute inset-y-0 start-0 flex items-center ps-3">
                                <svg class="h-4 w-4 text-gray-500 dark:text-gray-400" aria-hidden="true"
                                    xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                        stroke-width="2" d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z" />
                                </svg>
                            </div>
                            <input type="text" id="table-search"
                                class="block w-80 rounded-lg border border-gray-300 bg-gray-50 ps-10 pt-2 text-sm text-gray-900 focus:border-blue-500 focus:ring-blue-500 dark:border-gray-600 dark:bg-gray-700 dark:text-white dark:placeholder-gray-400 dark:focus:border-blue-500 dark:focus:ring-blue-500"
                                placeholder="Search for items">
                        </div>
                        <button id="dropdownActionButton" data-dropdown-toggle="dropdownAction"
                            class="relative inline-flex items-center rounded-lg border border-gray-300 bg-white px-3 py-1.5 text-sm font-medium text-gray-500 hover:bg-gray-100 focus:outline-none focus:ring-4 focus:ring-gray-100 dark:border-gray-600 dark:bg-gray-800 dark:text-gray-400 dark:hover:border-gray-600 dark:hover:bg-gray-700 dark:focus:ring-gray-700"
                            type="button">
                            <svg class="h-5 w-5" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                stroke-width="1.5" stroke="currentColor" class="size-6">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M12 3c2.755 0 5.455.232 8.083.678.533.09.917.556.917 1.096v1.044a2.25 2.25 0 0 1-.659 1.591l-5.432 5.432a2.25 2.25 0 0 0-.659 1.591v2.927a2.25 2.25 0 0 1-1.244 2.013L9.75 21v-6.568a2.25 2.25 0 0 0-.659-1.591L3.659 7.409A2.25 2.25 0 0 1 3 5.818V4.774c0-.54.384-1.006.917-1.096A48.32 48.32 0 0 1 12 3Z" />
                            </svg>

                            <svg class="ms-2.5 h-2.5 w-2.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                fill="none" viewBox="0 0 10 6">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2" d="m1 1 4 4 4-4" />
                            </svg>
                        </button>

                    </div>
                    <caption
                        class="bg-white p-5 text-left text-lg font-semibold text-gray-900 rtl:text-right dark:bg-gray-800 dark:text-white">
                        All Members
                        <p class="mb-2 mt-1 text-sm font-normal text-gray-500 dark:text-gray-400">Browse the list of
                            all members.</p>
                    </caption>
                    <thead
                        class="sticky top-0 bg-gray-50 text-xs uppercase text-gray-700 dark:bg-gray-700 dark:text-gray-400 z-0">
                        <tr>
                            <th scope="col" class="w-52 px-6 py-3">Name</th>
                            <th scope="col" class="px-6 py-3">Phone Number</th>
                            <th scope="col" class="px-6 py-3">Surburb</th>
                            <th scope="col" class="px-6 py-3">Denomination</th>
                            <th scope="col" class="px-6 py-3">Member ID</th>
                            <th scope="col" class="px-6 py-3">Actions</th>
                    </thead>
                    <tbody id="mem-table" class="divide-y divide-gray-200 dark:divide-gray-700">
                    </tbody>
                </table>
            </div>
        </div>

    </main>
</x-app-layout>

<script>
    const communityMembers = [

        @foreach($members as $member) {
            memberId: "{{ $member->id }}",
            member_image: "{{ $member->picture_path }}",
            name: "{{ $member->name }}",
            phoneNumber: "{{ $member->phone_number }}",
            email: "{{ $member->name }}",
            suburb: "{{ $member->suburb }}",
            denomination: "{{ $member->denomination }}",
            membershipId: "{{ $member->membership_id }}",
            role: "{{ $member->name }}"
        },
        @endforeach


    ];

    function populateTable(data = communityMembers) {
        const tableBody = document.getElementById('mem-table');
        tableBody.innerHTML = '';

        data.forEach((member, index) => {
            const row = document.createElement('tr');
            row.className =
                'bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600';

            row.innerHTML = `
            <td scope="row" class="flex items-center px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                <a href="/members/${member.memberId}">
                    <img class="w-10 h-10 rounded-full" src="/members_images/${member.member_image ?? '1732102263.jpg'}" alt="image">
                </a>
                    <a href="/members/${member.memberId}">
                    <div class="ps-3">
                    <div class="text-base font-semibold">${member.name.length <= 15 ? member.name : member.name.slice(0,15)+'...'}</div>
                </div>
                </a>
            </td>

            <td class="px-6 py-4">${member.phoneNumber}</td>
            <td class="px-6 py-4">${member.suburb}</td>
            <td class="px-6 py-4">${member.denomination}</td>
            <td class="px-6 py-4">${member.membershipId}</td>
            <td class="px-6 py-4 relative">
                <div class="relative">
                    <button class="action-button font-medium text-blue-600 dark:text-blue-500 p-1 rounded-full hover:bg-gray-100 dark:hover:bg-gray-700">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M12 6.75a.75.75 0 1 1 0-1.5.75.75 0 0 1 0 1.5ZM12 12.75a.75.75 0 1 1 0-1.5.75.75 0 0 1 0 1.5ZM12 18.75a.75.75 0 1 1 0-1.5.75.75 0 0 1 0 1.5Z" />
                        </svg>
                    </button>
                    <div class="popover hidden absolute top-full right-0 mt-2 w-48 bg-white opacity-100 rounded-lg dark:bg-gray-800 dark:border-gray-700 border border-gray-200 shadow-lg z-50">
                        <ul class="py-1">
                            <li>
                                <a href="/members/edit/${member.memberId}" class="block px-4 py-2 text-gray-700 hover:bg-gray-100 dark:text-gray-300 dark:hover:bg-gray-700">
                                    Edit
                                </a>
                            </li>
                            <li>
                                <form method="POST" action="/members/${member.memberId}/delete">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" onclick="return confirm('Are you sure?')" class="block w-full text-left px-4 py-2 text-red-500 hover:bg-gray-100 dark:text-gray-300 dark:hover:bg-gray-700">
                                        Delete
                                    </button>
                                </form>
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
        `;

            tableBody.appendChild(row);
        });

        setupPopovers();
    }

    function setupPopovers() {
        document.addEventListener('click', (e) => {
            if (!e.target.closest('.action-button')) {
                document.querySelectorAll('.popover').forEach(popover => {
                    popover.classList.add('hidden');
                });
            }
        });

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
    }

    populateTable();

    // Your existing filter function
    // function filter() {
    //     let data;
    //     if (document.getElementById('member').checked && document.getElementById('donor').checked) {
    //         data = communityMembers;
    //     } else if (document.getElementById('member').checked) {
    //         data = communityMembers.filter((member) => member.role === 'member');
    //     } else if (document.getElementById('donor').checked) {
    //         data = communityMembers.filter((member) => member.role === 'donor');
    //     } else {
    //         data = [];
    //     }
    //     populateTable(data);
    // }

    populateTable();
</script>