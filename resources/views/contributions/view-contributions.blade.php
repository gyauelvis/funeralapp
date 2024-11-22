<x-app-layout>
    <main
        class="flex h-auto min-h-screen items-center justify-center rounded-lg bg-white p-14 pt-20 dark:bg-gray-700 md:ml-64">
        <table class="w-full text-left text-sm text-gray-500 shadow-md rtl:text-right dark:text-gray-400">
            <caption
                class="bg-white p-5 text-left text-lg font-semibold text-gray-900 rtl:text-right dark:bg-gray-800 dark:text-white">
                All Contributions
                <p class="mt-1 text-sm font-normal text-gray-500 dark:text-gray-400">Browse a list of
                    Flowbite products designed to help you work and play, stay organized, get answers, keep
                    in touch, grow your business, and more.</p>
                {{ $contributions->links() }}
            </caption>

            <thead class="bg-gray-50 text-xs uppercase text-gray-700 dark:bg-gray-700 dark:text-gray-400">
                <tr>
                    <th scope="col" class="px-6 py-3">
                        Amount
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Month
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Year
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Member
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Paid to
                    </th>
                    <th scope="col" class="px-6 py-3">
                        <span class="sr-only">Edit</span>
                    </th>
                </tr>
            </thead>
            <tbody>
                @foreach ($contributions as $contribution)
                    <tr class="border-b bg-white dark:border-gray-700 dark:bg-gray-800">
                        <th scope="row"
                            class="whitespace-nowrap px-6 py-4 font-medium text-gray-900 dark:text-white">
                            {{ $contribution->amount }}
                        </th>
                        <td class="px-6 py-4">
                            {{ $contribution->month }}
                        </td>
                        <td class="px-6 py-4">
                            {{ $contribution->year }}
                        </td>
                        <td class="px-6 py-4">
                            <a href="{{ route('member.single', $contribution->contributor_id) }}">
                                {{ $contribution->contributor_id }}
                            </a>
                        </td>
                        <td class="px-6 py-4">
                            <a href="{{ route('user.single', $contribution->user_id) }}">
                                {{ $contribution->user_id }}
                            </a>
                        </td>
                        <td class="px-6 py-4 text-right">
                            <a href="#"
                                class="font-medium text-blue-600 hover:underline dark:text-blue-500">Edit</a>
                        </td>
                        <td class="px-6 text-right">
                            <form method="POST" action="{{ route('contributor.delete', $contribution->id) }}">
                                @csrf
                                @method('DELETE')
                                <button type="submit" onclick="return confirm('Are you sure?')"
                                    class="block px-4 py-2 text-center font-bold text-red-500 hover:text-red-700 dark:text-gray-300 dark:hover:bg-gray-700">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach

            </tbody>

        </table>

    </main>
</x-app-layout>

{{-- <script>
    const communityMembers = [

        @foreach ($members as $member)
            {
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

            <th scope="row" class="flex items-center px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                <a href="/members/${member.memberId}">
                    <img class="w-10 h-10 rounded-full" src="/members_images/${member.member_image ?? '/logos/1731798570.jpg'}" alt="Profile image">
                </a>
                    <a href="/members/${member.memberId}">
                    <div class="ps-3">
                    <div class="text-base font-semibold">${member.name.length <= 15 ? member.name : member.name.slice(0,15)+'...'}</div>
                </div>
                </a>
            </th>

            <td class="px-6 py-4">${member.phoneNumber}</td>
            <td class="px-6 py-4">${member.suburb}</td>
            <td class="px-6 py-4">${member.denomination}</td>
            <td class="px-6 py-4">${member.membershipId}</td>
            <td class="px-6 py-4 relative">
                <button class="action-button font-medium text-blue-600 dark:text-blue-500 p-1 rounded-full hover:bg-gray-100 dark:hover:bg-gray-700">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M12 6.75a.75.75 0 1 1 0-1.5.75.75 0 0 1 0 1.5ZM12 12.75a.75.75 0 1 1 0-1.5.75.75 0 0 1 0 1.5ZM12 18.75a.75.75 0 1 1 0-1.5.75.75 0 0 1 0 1.5Z" />
                    </svg>
                </button>
                <div class="popover hidden absolute right-0 mt-2 w-48 bg-white rounded-lg shadow-lg dark:bg-gray-800 dark:border-gray-700 border border-gray-200 z-50">
                    <ul class="py-1">
                        <li>
                            <a href="/members/edit/${member.memberId}" class="block px-4 py-2 text-gray-700 hover:bg-gray-100 dark:text-gray-300 dark:hover:bg-gray-700">Edit</a>
                        </li>
                        <li>
                            <form method="POST" action="/members/${member.memberId}/delete">
                               @csrf
                               @method('DELETE')
                                <button type="submit" onclick="return confirm('Are you sure?')"  class="block px-4 py-2 text-gray-700 hover:bg-gray-100 dark:text-gray-300 dark:hover:bg-gray-700">Delete</button>
                            </form>

                        </li>
                    </ul>
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

                document.querySelectorAll('.popover').forEach(popover => {
                    if (popover !== e.target.nextElementSibling) {
                        popover.classList.add('hidden');
                    }
                });

                const popover = button.nextElementSibling;
                popover.classList.toggle('hidden');
            });
        });
    }

    // Your existing filter function
    function filter() {
        let data;
        if (document.getElementById('member').checked && document.getElementById('donor').checked) {
            data = communityMembers;
        } else if (document.getElementById('member').checked) {
            data = communityMembers.filter((member) => member.role === 'member');
        } else if (document.getElementById('donor').checked) {
            data = communityMembers.filter((member) => member.role === 'donor');
        } else {
            data = [];
        }
        populateTable(data);
    }

    // Initial table population
    populateTable();
</script> --}}
