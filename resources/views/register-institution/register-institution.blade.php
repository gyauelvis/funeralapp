<x-guest-layout>
    <main class="min-h-screen w-full flex items-center justify-center p-4">
        <div class="w-full max-w-lg">
            <div class="bg-white rounded-lg shadow dark:bg-gray-700">
                <div class="flex items-center justify-between p-4 md:p-5 border-b rounded-t dark:border-gray-600">
                    <h3 class="text-lg font-semibold text-gray-900 dark:text-white">
                        Register Your Institution
                    </h3>
                </div>
                <form class="p-4 md:p-5">
                    <div class="grid gap-4 mb-4 grid-cols-2">
                        <div class="col-span-2">
                            <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white" for="user_avatar">Upload Logo</label>
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
                        <div class="col-span-2">
                            <label for="name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Institution Name</label>
                            <input type="text" name="name" id="name" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="Type institution name" required="">
                        </div>
                        <div class="col-span-2 sm:col-span-1">
                            <label for="phoneNumber" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Phone Number</label>
                            <input type="number" name="phoneNumber" id="phoneNumber" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="02455900993" required="">
                            <div id="phoneNumberError" class="mt-1 text-xs text-red-500 dark:text-gray-300"></div>
                        </div>
                        <div class="col-span-2 sm:col-span-1">
                            <label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Email</label>
                            <input type="email" name="email" id="email" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="example@email.com" required>
                            <div id="emailError" class="mt-1 text-sm text-red-500 dark:text-gray-300"></div>
                        </div>
                        <div class="col-span-2">
                            <label for="address" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Institution Address</label>
                            <input type="text" name="address" id="address" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="Type institution address">
                        </div>
                    </div>
                    <button id="submit" type="submit" class="w-full text-white inline-flex items-center justify-center bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                        <svg class="me-1 -ms-1 w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" d="M10 5a1 1 0 011 1v3h3a1 1 0 110 2h-3v3a1 1 0 11-2 0v-3H6a1 1 0 110-2h3V6a1 1 0 011-1z" clip-rule="evenodd"></path>
                        </svg>
                        Register Institution
                    </button>
                </form>
            </div>
        </div>
    </main>
</x-guest-layout>

<script>
    function previewImage(input) {
        const preview = document.getElementById('preview');
        const placeholder = document.getElementById('placeholder');

        if (input.files && input.files[0]) {
            const reader = new FileReader();

            reader.onload = function(e) {
                preview.src = e.target.result;
                preview.classList.remove('hidden');
                placeholder.classList.add('hidden');
            }

            reader.readAsDataURL(input.files[0]);
        } else {
            preview.classList.add('hidden');
            placeholder.classList.remove('hidden');
        }
    }

    document.getElementById('submit').addEventListener('click', (e) => {
        e.preventDefault();
        const formData = {
            insitutionName: document.getElementById('name').value,
            logo: document.getElementById('user_avatar').files[0],
            email: document.getElementById('email').value,
            phoneNumber: document.getElementById('phoneNumber').value,
            address: document.getElementById('address').value
        }
        if (formData.phoneNumber.length < 10)
            document.getElementById('phoneNumberError').innerText = 'Phone number must be 10 digits or more';

        if (!validateMail(formData.email))
            document.getElementById('emailError').innerText = 'Invalid email address';

        console.log(formData);
    });

    function validateMail(email) {
        let reg = /^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/;
        console.log(email)
        if (email.toLowerCase().match(reg)) {
            return true;
        }
        return false
    }
</script>