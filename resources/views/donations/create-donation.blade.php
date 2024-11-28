<x-app-layout>

    <main
<<<<<<< HEAD
        class="mt-5 flex flex-col content-center items-center justify-around rounded-lg p-4 pt-20 dark:bg-gray-700 md:ml-64">
        <div class="w-full max-w-lg rounded-md bg-white p-5">
=======
        class="flex h-auto min-h-screen items-center justify-center rounded-lg bg-white p-4 pt-20 dark:bg-gray-700 md:ml-64">
        <div class="w-full max-w-lg">
>>>>>>> ffc7a796285523ff73befb441997f9300b976541
            <div>
                <div class="flex items-center justify-center rounded-t p-4 dark:border-gray-600 md:p-5">
                    <h3 class="text-xl font-semibold text-gray-900 dark:text-white">
                        Make a Donation
                    </h3>
                </div>

                <form class="p-4 md:p-5" action="{{ route('donation.new') }}" method="POST">
                    @csrf
                    <div class="p-4 md:p-5">

                        <p class="text-md mb-4 font-bold text-black">Are you a registered community member?</p>
                        <div class="mb-3 flex items-center">
                            <input id="registered_member" type="radio" name="membership_status" value="is_member"
                                class="h-4 w-4 border-gray-300 focus:ring-2 focus:ring-blue-300 dark:border-gray-600 dark:bg-gray-700 dark:focus:bg-blue-600 dark:focus:ring-blue-600"
                                {{ old('membership_status') == 'is_member' ? 'checked' : 'checked' }}>
                            <label for="registered_member"
                                class="ms-2 block text-sm font-medium text-gray-900 dark:text-gray-300">
                                Yes, I am a registered community member
                            </label>
                        </div>
                        <div class="mb-4 flex items-center">
                            <input id="non_registered_member" type="radio" name="membership_status"
                                value="is_not_member"
                                class="h-4 w-4 border-gray-300 focus:ring-2 focus:ring-blue-300 dark:border-gray-600 dark:bg-gray-700 dark:focus:bg-blue-600 dark:focus:ring-blue-600"
                                {{ old('membership_status') == 'is_not_member' ? 'checked' : '' }}>
                            <label for="non_registered_member"
                                class="ms-2 block text-sm font-medium text-gray-900 dark:text-gray-300">
                                No, I am not a community member
                            </label>
                        </div>
                        @error('membership_status')
                            <small class="text-xs font-bold text-red-500">
                                {{ $message }}
                            </small>
                        @enderror
                        <hr>
                    </div>
                    {{-- Member Form --}}

                    <div class="mb-4 grid grid-cols-2 gap-4" id="member_donation">
                        <div class="col-span-2">
                            <label for="contributor_id"
                                class="mb-2 block text-sm font-medium text-gray-900 dark:text-white">Enter name or
                                Member ID number<span class="text-red-500">*</span></label>
                            <select name="contributor_id" id="contributor_id"
                                class="js-example-basic-single block w-full rounded-lg border border-gray-300 bg-gray-50 p-2.5 text-sm text-gray-900 focus:border-primary-600 focus:ring-primary-600 dark:border-gray-500 dark:bg-gray-600 dark:text-white dark:placeholder-gray-400 dark:focus:border-primary-500 dark:focus:ring-primary-500"
                                placeholder="Type member name or ID number">
                                <option value="" disabled selected>Type member name or ID number</option>
                                @foreach ($members as $member)
                                    <option value="{{ $member->id }}">
                                        {{ "{$member->name} - {$member->membership_id}" }}</option>
                                @endforeach
                            </select>
                            @error('contributor_id')
                                <small class="text-xs font-bold text-red-500">
                                    {{ $message }}
                                </small>
                            @enderror
                        </div>

                        <div class="col-span-2">
                            <label for="amount"
                                class="mb-2 block text-sm font-medium text-gray-900 dark:text-white">Amount<span
                                    class="text-red-500">*</span></label>
                            <input type="numeric" name="member_amount" id="amount"
                                class="block w-full rounded-lg border border-gray-300 bg-gray-50 p-2.5 text-sm text-gray-900 focus:border-primary-600 focus:ring-primary-600 dark:border-gray-500 dark:bg-gray-600 dark:text-white dark:placeholder-gray-400 dark:focus:border-primary-500 dark:focus:ring-primary-500"
                                placeholder="100" value="{{ old('amount') }}">
                            @error('amount')
                                <small class="text-xs font-bold text-red-500">
                                    {{ $message }}
                                </small>
                            @enderror
                        </div>
                        <div class="col-span-2">
                            <label for="purpose"
                                class="mb-2 block text-sm font-medium text-gray-900 dark:text-white">Purpose of
                                Donation</label>
                            <textarea id="purpose" name="purpose" rows="8"
                                class="block w-full rounded-lg border border-gray-300 bg-gray-50 p-2.5 text-sm text-gray-900 focus:border-primary-500 focus:ring-primary-500 dark:border-gray-600 dark:bg-gray-700 dark:text-white dark:placeholder-gray-400 dark:focus:border-primary-500 dark:focus:ring-primary-500"
                                placeholder="Purpose of Donation Here">{{ old('purpose') }}</textarea>
                        </div>

                    </div>
                    {{-- Non Member form --}}
                    <div class="mb-4 grid grid-cols-2 gap-4" id="non_member_donation">
                        <div class="col-span-2">
                            <label for="name"
                                class="mb-2 block text-sm font-medium text-gray-900 dark:text-white">Name of
                                Donor</label>
                            <input type="text" name="name" id="name"
                                class="block w-full rounded-lg border border-gray-300 bg-gray-50 p-2.5 text-sm text-gray-900 focus:border-primary-600 focus:ring-primary-600 dark:border-gray-500 dark:bg-gray-600 dark:text-white dark:placeholder-gray-400 dark:focus:border-primary-500 dark:focus:ring-primary-500"
                                placeholder="Type name of donor" value="{{ old('name') }}">

                            @error('name')
                                <small class="text-xs font-bold text-red-500">
                                    {{ $message }}
                                </small>
                            @enderror
                        </div>

                        <div class="col-span-2 sm:col-span-1" id="phone_number">
                            <label for="phone_number"
                                class="mb-2 block text-sm font-medium text-gray-900 dark:text-white">Phone Number<span
                                    class="text-red-500">*</span></label>
                            <input type="numeric" name="phone_number"
                                class="block w-full rounded-lg border border-gray-300 bg-gray-50 p-2.5 text-sm text-gray-900 focus:border-primary-600 focus:ring-primary-600 dark:border-gray-500 dark:bg-gray-600 dark:text-white dark:placeholder-gray-400 dark:focus:border-primary-500 dark:focus:ring-primary-500"
                                placeholder="024XXXXXXX" value="{{ old('phone_number') }}">
                            @error('phone_number')
                                <small class="text-xs font-bold text-red-500">
                                    {{ $message }}
                                </small>
                            @enderror
                        </div>
                        <div class="col-span-2 sm:col-span-1">
                            <label for="amount"
                                class="mb-2 block text-sm font-medium text-gray-900 dark:text-white">Amount<span
                                    class="text-red-500">*</span></label>
                            <input type="numeric" name="amount" id="amount"
                                class="block w-full rounded-lg border border-gray-300 bg-gray-50 p-2.5 text-sm text-gray-900 focus:border-primary-600 focus:ring-primary-600 dark:border-gray-500 dark:bg-gray-600 dark:text-white dark:placeholder-gray-400 dark:focus:border-primary-500 dark:focus:ring-primary-500"
                                placeholder="100" value="{{ old('amount') }}">
                            @error('amount')
                                <small class="text-xs font-bold text-red-500">
                                    {{ $message }}
                                </small>
                            @enderror
                        </div>
                        <div class="col-span-2">
                            <label for="purpose"
                                class="mb-2 block text-sm font-medium text-gray-900 dark:text-white">Purpose of
                                Donation</label>
                            <textarea id="purpose" rows="8" name="purpose"
                                class="block w-full rounded-lg border border-gray-300 bg-gray-50 p-2.5 text-sm text-gray-900 focus:border-primary-500 focus:ring-primary-500 dark:border-gray-600 dark:bg-gray-700 dark:text-white dark:placeholder-gray-400 dark:focus:border-primary-500 dark:focus:ring-primary-500"
                                placeholder="Purpose of Donation Here">{{ old('purpose') }}</textarea>
                        </div>

                    </div>


                    <button id="submit" type="submit"
                        class="inline-flex w-full items-center justify-center rounded-lg bg-blue-700 px-5 py-2.5 text-center text-sm font-medium text-white hover:bg-blue-800 focus:outline-none focus:ring-4 focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                        <svg class="-ms-1 me-1 h-5 w-5" fill="currentColor" viewBox="0 0 20 20"
                            xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd"
                                d="M10 5a1 1 0 011 1v3h3a1 1 0 110 2h-3v3a1 1 0 11-2 0v-3H6a1 1 0 110-2h3V6a1 1 0 011-1z"
                                clip-rule="evenodd"></path>
                        </svg>
                        Make a donation
                    </button>
                </form>
            </div>
        </div>
    </main>
</x-app-layout>

<script>
    $(document).ready(function() {
        $('.js-example-basic-single').select2();
    });
</script>

<script>
    const denominations = [
        ""
    ];

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


    function validateMail(email) {
        let reg = /^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/;
        console.log(email)
        if (email.toLowerCase().match(reg)) {
            return true;
        }
        return false
    }

    document.getElementById('amount').addEventListener('input', function(e) {
        // Replace any non-numeric character with an empty string
        this.value = this.value.replace(/[^0-9]/g, '');
    });


    document.addEventListener('DOMContentLoaded', () => {
        const contributorInput = document.getElementById('contributor_id');
        const phoneNumber = document.getElementById('phone_number');

        const amount = document.getElementById('amount')

        contributorInput.addEventListener('input', () => {
            const selectedValue = contributorInput.value;
            const options = Array.from(datalist.options).map(option => option.value);

            // Toggle display based on selection
            if (options.includes(selectedValue)) {
                phoneNumber.style.display = 'none';
                amount.classList.remove('sm:col-span-1');

            } else {
                phoneNumber.style.display = '';
                amount.classList.add('sm:col-span-1');
            }
        });
    });
</script>
<script>
    document.addEventListener('DOMContentLoaded', function() {
        const registeredMemberRadio = document.getElementById('registered_member');
        const nonRegisteredMemberRadio = document.getElementById('non_registered_member');
        const memberForm = document.getElementById('member_donation');
        const nonMemberForm = document.getElementById('non_member_donation');

        // Event listener to toggle forms
        function toggleForms() {
            if (registeredMemberRadio.checked) {
                memberForm.classList.remove('hidden');
                nonMemberForm.classList.add('hidden');
            } else {
                memberForm.classList.add('hidden');
                nonMemberForm.classList.remove('hidden');
            }
        }

        // Attach event listeners
        registeredMemberRadio.addEventListener('change', toggleForms);
        nonRegisteredMemberRadio.addEventListener('change', toggleForms);

        // Initial toggle
        toggleForms();
    });
</script>
