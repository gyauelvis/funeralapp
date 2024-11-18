<x-app-layout>
    <main class="p-4 min-h-screen md:ml-64 h-auto pt-20 bg-white rounded-lg dark:bg-gray-700 items-center justify-center flex">
        <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
            <div class="relative overflow-x-auto min-h-[400px]">
                <div class="flex items-center justify-between fixed flex-column flex-wrap md:flex-row space-y-4 md:space-y-0 pb-4 bg-white dark:bg-gray-900">
                    <div>
                        <button id="dropdownActionButton" data-dropdown-toggle="dropdownAction" class="inline-flex items-center text-gray-500 bg-white border border-gray-300 focus:outline-none hover:bg-gray-100 focus:ring-4 focus:ring-gray-100 font-medium rounded-lg text-sm px-3 py-1.5 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:bg-gray-700 dark:hover:border-gray-600 dark:focus:ring-gray-700" type="button">
                            <svg class="w-5 h-5" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M12 3c2.755 0 5.455.232 8.083.678.533.09.917.556.917 1.096v1.044a2.25 2.25 0 0 1-.659 1.591l-5.432 5.432a2.25 2.25 0 0 0-.659 1.591v2.927a2.25 2.25 0 0 1-1.244 2.013L9.75 21v-6.568a2.25 2.25 0 0 0-.659-1.591L3.659 7.409A2.25 2.25 0 0 1 3 5.818V4.774c0-.54.384-1.006.917-1.096A48.32 48.32 0 0 1 12 3Z" />
                            </svg>

                            <svg class="w-2.5 h-2.5 ms-2.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 4 4 4-4" />
                            </svg>
                        </button>

                        <div id="dropdownAction" class="z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow w-44 dark:bg-gray-700 dark:divide-gray-600">
                            <ul class="py-1 px-1 text-sm text-gray-700 dark:text-gray-200" aria-labelledby="dropdownActionButton">
                                <li>
                                    <input id="donor" onchange="filter('donor')" checked type="checkbox" value="donor" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                    <label for="donor" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Donors</label>
                                </li>
                                <li>
                                    <input id="member" onchange="filter('member')" checked type="checkbox" value="member" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                    <label for="member" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Members</label>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400 table-fixed">
                    <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400 sticky top-0">
                        <tr>
                            <th scope="col" class="px-6 py-3 w-52">Name</th>
                            <th scope="col" class="px-6 py-3">Phone Number</th>
                            <th scope="col" class="px-6 py-3">Surburb</th>
                            <th scope="col" class="px-6 py-3">Denomination</th>
                            <th scope="col" class="px-6 py-3">Member ID</th>
                            <th scope="col" class="px-6 py-3">Role</th>
                            <th scope="col" class="px-6 py-3">Actions</th>
                    </thead>
                    <tbody id="mem-table" class="divide-y divide-gray-200 dark:divide-gray-700">
                    </tbody>
                </table>
            </div>
        </div>


        <!-- Main modal -->
        <div id="crud-modal" tabindex="-1" aria-hidden="true" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
            <div class="relative p-4 w-full max-w-md max-h-full">
                <!-- Modal content -->
                <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                    <!-- Modal header -->
                    <div class="flex items-center justify-between p-4 md:p-5 border-b rounded-t dark:border-gray-600">
                        <h3 class="text-lg font-semibold text-gray-900 dark:text-white">
                            Update Member Information
                        </h3>
                        <button type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-toggle="crud-modal">
                            <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                            </svg>
                            <span class="sr-only">Close modal</span>
                        </button>
                    </div>

                    <!-- Modal body -->
                    <form class="p-4 md:p-5">
                        <div class="grid gap-4 mb-4 grid-cols-2">
                            <div class="col-span-2">
                                <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white" for="user_avatar">Upload Member Image</label>
                                <div class="flex justify-center">
                                    <div class="relative">
                                        <input class="hidden" type="file" id="user_avatar" name="user_avatar" accept="image/*" onchange="previewImage(this)">
                                        <label for="user_avatar" class="flex items-center justify-center w-32 h-32 rounded-full border border-gray-300 cursor-pointer bg-gray-50 dark:bg-gray-700 dark:border-gray-600 hover:bg-gray-100 dark:hover:bg-gray-600 overflow-hidden">
                                            <img id="preview" class="hidden w-full h-full object-cover">
                                            <div id="placeholder" class="text-center">
                                                <svg class="w-8 h-8 mb-1 text-gray-500 dark:text-gray-400 mx-auto" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6"></path>
                                                </svg>
                                                <span class="text-sm text-gray-500 dark:text-gray-400">Upload</span>
                                            </div>
                                        </label>
                                    </div>
                                </div>
                                <div class="mt-1 text-sm text-center text-gray-500 dark:text-gray-300" id="user_avatar_help">SVG, PNG, JPG or GIF (MAX. 800x400px)</div>
                            </div>
                            <div class="col-span-2 sm:col-span-1">
                                <label for="name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Name<span class="text-red-500">*</span></label>
                                <input type="text" name="name" id="name" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="Type name" required="">
                            </div>
                            <div class="col-span-2 sm:col-span-1">
                                <label for="phoneNumber" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Phone Number<span class="text-red-500">*</span></label>
                                <input type="number" name="phoneNumber" id="phoneNumber" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="02455900993" required="">
                                <div id="phoneNumberError" class="mt-1 text-xs text-red-500 dark:text-gray-300"></div>
                            </div>
                            <div class="col-span-2 sm:col-span-1">
                                <label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Email</label>
                                <input type="email" name="email" id="email" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="example@email.com" required>
                                <div id="emailError" class="mt-1 text-sm text-red-500 dark:text-gray-300"></div>
                            </div>
                            <div class="col-span-2 sm:col-span-1">
                                <label for="suburb" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Surburb</label>
                                <input type="text" name="suburb" id="surburb" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="Location in Community" required>
                                <div class="mt-1 text-sm text-red-500 dark:text-gray-300"></div>
                            </div>
                            <div class="col-span-2">
                                <label for="denomination" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Church Denomination</label>
                                <input list="denomination-list" type="text" name="denomination" id="denomination" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="Type Denomination">
                                <datalist id="denomination-list">
                                </datalist>
                            </div>
                        </div>
                        <button id="submit" type="submit" class="w-full text-white inline-flex items-center justify-center bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                            <svg class="me-1 -ms-1 w-5 h-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="size-6">
                                <path fill-rule="evenodd" d="M4.755 10.059a7.5 7.5 0 0 1 12.548-3.364l1.903 1.903h-3.183a.75.75 0 1 0 0 1.5h4.992a.75.75 0 0 0 .75-.75V4.356a.75.75 0 0 0-1.5 0v3.18l-1.9-1.9A9 9 0 0 0 3.306 9.67a.75.75 0 1 0 1.45.388Zm15.408 3.352a.75.75 0 0 0-.919.53 7.5 7.5 0 0 1-12.548 3.364l-1.902-1.903h3.183a.75.75 0 0 0 0-1.5H2.984a.75.75 0 0 0-.75.75v4.992a.75.75 0 0 0 1.5 0v-3.18l1.9 1.9a9 9 0 0 0 15.059-4.035.75.75 0 0 0-.53-.918Z" clip-rule="evenodd" />
                            </svg>

                            Update
                        </button>
                    </form>
                </div>
            </div>
        </div>

    </main>
</x-app-layout>

<script>
    const communityMembers = [{
            name: "Kwame Mensah",
            phoneNumber: "024 456 7890",
            email: "kwame.mensah@gmail.com",
            suburb: "East Legon",
            denomination: "Methodist",
            memberId: "MET-2024-001",
            role: "donor"
        },
        {
            name: "Abena Osei",
            phoneNumber: "050 123 4567",
            email: "abena.osei@yahoo.com",
            suburb: "Cantonments",
            denomination: "Presbyterian",
            memberId: "PRES-2024-002",
            role: "member"
        },
        {
            name: "Kojo Addo",
            phoneNumber: "027 891 2345",
            email: "k.addo@hotmail.com",
            suburb: "Tema",
            denomination: "Pentecost",
            memberId: "PENT-2024-003",
            role: "donor"
        },
        {
            name: "Efua Nyarko",
            phoneNumber: "055 678 9012",
            email: "efuanyarko@gmail.com",
            suburb: "Labone",
            denomination: "Catholic",
            memberId: "CATH-2024-004",
            role: "member"
        },
        {
            name: "Yaw Darkwa",
            phoneNumber: "020 345 6789",
            email: "yaw.darkwa@yahoo.com",
            suburb: "Accra New Town",
            denomination: "Baptist",
            memberId: "BAP-2024-005",
            role: "member"
        },
        {
            name: "Akua Sarpong",
            phoneNumber: "054 890 1234",
            email: "akua.sarpong@gmail.com",
            suburb: "Adenta",
            denomination: "Methodist",
            memberId: "MET-2024-006",
            role: "donor"
        },
        {
            name: "Kofi Ansah",
            phoneNumber: "023 567 8901",
            email: "kofi.ansah@outlook.com",
            suburb: "Dansoman",
            denomination: "Presbyterian",
            memberId: "PRES-2024-007",
            role: "member"
        },
        {
            name: "Ama Boateng",
            phoneNumber: "026 789 0123",
            email: "amaboat@gmail.com",
            suburb: "Teshie",
            denomination: "Pentecost",
            memberId: "PENT-2024-008",
            role: "donor"
        },
        {
            name: "Kwesi Owusu",
            phoneNumber: "057 234 5678",
            email: "kwesi.owusu@yahoo.com",
            suburb: "Osu",
            denomination: "Catholic",
            memberId: "CATH-2024-009",
            role: "member"
        },
        {
            name: "Adwoa Nkrumah",
            phoneNumber: "025 901 2345",
            email: "adwoa.nkrumah@gmail.com",
            suburb: "McCarthy Hill",
            denomination: "Baptist",
            memberId: "BAP-2024-010",
            role: "donor"
        }
    ];


    function populateTable(data = communityMembers) {
        const tableBody = document.getElementById('mem-table');
        tableBody.innerHTML = '';

        data.forEach((member, index) => {
            const row = document.createElement('tr');
            row.className = 'bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600';

            row.innerHTML = `
            <th scope="row" class="flex items-center px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                <img class="w-10 h-10 rounded-full" src="/logos/1731798570.jpg" alt="Profile image">
                <div class="ps-3">
                    <div class="text-base font-semibold">${member.name.length <= 15 ? member.name : member.name.slice(0,10)+'...'}</div>
                    <div class="font-normal text-gray-500">${member.email.length <= 20 ? member.email : member.email.slice(0,10)+'...'}</div>
                </div>
            </th>
            <td class="px-6 py-4">${member.phoneNumber}</td>
            <td class="px-6 py-4">${member.suburb}</td>
            <td class="px-6 py-4">${member.denomination}</td>
            <td class="px-6 py-4">${member.memberId}</td>
            <td class="px-6 py-4 uppercase">${member.role}</td>
            <td class="px-6 py-4 relative">
                <button class="action-button font-medium text-blue-600 dark:text-blue-500 p-1 rounded-full hover:bg-gray-100 dark:hover:bg-gray-700">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M12 6.75a.75.75 0 1 1 0-1.5.75.75 0 0 1 0 1.5ZM12 12.75a.75.75 0 1 1 0-1.5.75.75 0 0 1 0 1.5ZM12 18.75a.75.75 0 1 1 0-1.5.75.75 0 0 1 0 1.5Z" />
                    </svg>
                </button>
                <div class="popover hidden absolute right-0 mt-2 w-48 bg-white rounded-lg shadow-lg dark:bg-gray-800 dark:border-gray-700 border border-gray-200 z-50">
                    <ul class="py-1">
                        <li>
                            <a data-modal-target="crud-modal" data-modal-toggle="crud-modal" href="#" class="block px-4 py-2 text-gray-700 hover:bg-gray-100 dark:text-gray-300 dark:hover:bg-gray-700">Edit</a>
                        </li>
                        <li>
                            <a href="#" class="block px-4 py-2 text-gray-700 hover:bg-gray-100 dark:text-gray-300 dark:hover:bg-gray-700">Delete</a>
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
</script>