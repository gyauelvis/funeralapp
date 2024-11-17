<x-app-layout>
    <main class="p-4 min-h-screen md:ml-64 h-auto pt-20 bg-white rounded-lg dark:bg-gray-700 items-center justify-center flex">
        <div class="w-full max-w-lg">
            <div>
                <div class="flex items-center justify-between p-4 md:p-5 rounded-t dark:border-gray-600">
                    <h3 class="text-xl font-semibold text-gray-900 dark:text-white">
                        Register Donor
                    </h3>
                </div>
                <form class="p-4 md:p-5 relative">
                    <div class="grid gap-4 mb-4 grid-cols-2">
                        <div class="col-span-2 sm:col-span-1">
                            <label for="name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Name<span class="text-red-500">*</span></label>
                            <input type="text" name="name" id="name" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="Type name" required="">
                        </div>
                        <div class="col-span-2 sm:col-span-1">
                            <label for="phoneNumber" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Phone Number<span class="text-red-500">*</span></label>
                            <input type="number" name="phoneNumber" id="phoneNumber" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="02455900993" required="">
                            <div id="phoneNumberError" class="mt-1 text-xs text-red-500 dark:text-gray-300"></div>
                        </div>
                        <div class="col-span-2">
                            <label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Email</label>
                            <input type="email" name="email" id="email" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="example@email.com" required>
                            <div id="emailError" class="mt-1 text-sm text-red-500 dark:text-gray-300"></div>
                        </div>
                        <div class="sm:col-span-2">
                            <label for="purpose" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Purpose of Donation</label>
                            <textarea id="purpose" rows="8" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-primary-500 focus:border-primary-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="Purpose of Donation Here"></textarea>
                        </div>
                    </div>
                    <button id="submit" type="submit" class="w-full text-white inline-flex items-center justify-center bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                        <svg class="me-1 -ms-1 w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" d="M10 5a1 1 0 011 1v3h3a1 1 0 110 2h-3v3a1 1 0 11-2 0v-3H6a1 1 0 110-2h3V6a1 1 0 011-1z" clip-rule="evenodd"></path>
                        </svg>
                        Register
                    </button>

                   

                </form>
            </div>
        </div>

        
    </main>
</x-app-layout>


<script>
    const denominations = [
        "Roman Catholic Church",
        "Presbyterian Church of Ghana",
        "Methodist Church Ghana",
        "Anglican Church",
        "Pentecost Church",
        "Charismatic Churches",
        "Seventh-day Adventist Church",
        "Church of Jesus Christ of Latter-day Saints",
        "Apostolic Church Ghana",
        "Assemblies of God",
        "Evangelical Presbyterian Church",
        "International Central Gospel Church",
        "Lighthouse Chapel International",
        "Perez Chapel International",
        "Royalhouse Chapel International",
        "Church of Christ",
        "Global Evangelical Church",
        "Christ Embassy",
        "Deeper Christian Life Ministry",
        "Action Chapel International",
        "Christ Apostolic Church International",
        "African Methodist Episcopal (AME)",
        "Jehovah's Witnesses",
        "Redeemed Christian Church of God",
        "Calvary Charismatic Centre (CCC)",
        "Resurrection Power New Generation Church"
    ];

    function populateDenominations() {
        denominations.map(denomination => {
            return (
                document.getElementById('denomination-list').innerHTML += `<option value="${denomination}">${denomination}</option>`
            )
        });
    }
    populateDenominations();


    document.getElementById('submit').addEventListener('click', (e) => {
        e.preventDefault();
        const formData = {
            name: document.getElementById('name').value,
            phoneNumber: document.getElementById('phoneNumber').value,
            purposeOfDonation: document.getElementById('purpose').value,
            isMember: false
        }
        if (formData.phoneNumber.length < 10)
            document.getElementById('phoneNumberError').innerText = 'Phone number must be 10 digits or more';
        console.log(formData);
        document.getElementById('popup-modal').classList.remove('hidden');
    });
</script>