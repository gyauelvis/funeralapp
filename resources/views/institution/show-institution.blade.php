<x-app-layout>
    <section id="wrapper" class="relative flex h-full min-h-full w-full max-w-screen-xl items-center justify-center">
        <div class="flex h-full w-full items-center justify-center">

            <div id="crud-modal" tabindex="-1" aria-hidden="true"
                class="z-50 flex h-[calc(100%-1rem)] max-h-full w-full items-center justify-center overflow-y-auto overflow-x-hidden md:inset-0">

                <div class="relative max-h-full w-full max-w-lg p-4">
                    <!-- Modal content -->
                    <div class="relative rounded-lg bg-white shadow dark:bg-gray-700">


                        @session('error')
                            <div class="rounded bg-red-500 p-3 text-sm text-white">
                                {{ $value }}
                            </div>
                        @endsession

                        <!-- Modal header -->
                        <div
                            class="flex items-center justify-between rounded-t border-b p-4 dark:border-gray-600 md:p-5">
                            <h3 class="text-lg font-semibold text-gray-900 dark:text-white">
                                Edit your institution
                            </h3>
                        </div>
                        <!-- Modal body -->
                        <form class="p-4 md:p-5" action="{{ route('institution.update', $institution->id) }}"
                            method="POST" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <div class="mb-4 grid grid-cols-2 gap-4">
                                <div class="col-span-2">
                                    <label class="mb-2 block text-sm font-medium text-gray-900 dark:text-white"
                                        for="logo">Upload Institution Logo</label>
                                    <div class="relative">
                                        <input class="hidden" value="{{ old('logo', $institution->logo) }}"
                                            type="file" id="logo" name="logo" accept="image/*"
                                            onchange="previewImage(this)">

                                        <label for="logo"
                                            class="flex h-32 w-32 cursor-pointer items-center justify-center overflow-hidden rounded-full border border-gray-300 bg-gray-50 hover:bg-gray-100 dark:border-gray-600 dark:bg-gray-700 dark:hover:bg-gray-600">

                                            <img id="preview" src={{ asset('logos/' . $institution->logo) }}
                                                class="h-full w-full object-cover">


                                        </label>
                                    </div>
                                    <div class="mt-1 text-sm text-gray-500 dark:text-gray-300" id="logo_help">
                                        SVG, PNG, JPG or GIF (MAX. 800x400px)</div>
                                    @error('logo')
                                        <small class="text-xs font-bold text-red-500">
                                            {{ $message }}
                                        </small>
                                    @enderror


                                </div>
                                <div class="col-span-2">
                                    <label for="name"
                                        class="mb-2 block text-sm font-medium text-gray-900 dark:text-white">Institution
                                        Name</label>
                                    <input type="text" name="name" id="name"
                                        class="focus:ring-primary-600 focus:border-primary-600 dark:focus:ring-primary-500 dark:focus:border-primary-500 block w-full rounded-lg border border-gray-300 bg-gray-50 p-2.5 text-sm text-gray-900 dark:border-gray-500 dark:bg-gray-600 dark:text-white dark:placeholder-gray-400"
                                        placeholder="Type institution name"
                                        value="{{ old('name', $institution->name) }}">
                                    @error('name')
                                        <small class="text-xs font-bold text-red-500">
                                            {{ $message }}
                                        </small>
                                    @enderror
                                </div>
                                <div class="col-span-2">
                                    <label for="name"
                                        class="mb-2 block text-sm font-medium text-gray-900 dark:text-white">Institution
                                        Slogan</label>
                                    <input type="text" name="slogan" id="slogan"
                                        class="focus:ring-primary-600 focus:border-primary-600 dark:focus:ring-primary-500 dark:focus:border-primary-500 block w-full rounded-lg border border-gray-300 bg-gray-50 p-2.5 text-sm text-gray-900 dark:border-gray-500 dark:bg-gray-600 dark:text-white dark:placeholder-gray-400"
                                        placeholder="Type institution slogan"
                                        value="{{ old('slogan', $institution->slogan) }}">
                                    @error('slogan')
                                        <small class="text-xs font-bold text-red-500">
                                            {{ $message }}
                                        </small>
                                    @enderror
                                </div>
                                <div class="col-span-2 sm:col-span-1">
                                    <label for="phone_number"
                                        class="mb-2 block text-sm font-medium text-gray-900 dark:text-white">Phone
                                        Number</label>
                                    <input type="number" name="phone_number" id="phone_number"
                                        class="focus:ring-primary-600 focus:border-primary-600 dark:focus:ring-primary-500 dark:focus:border-primary-500 block w-full rounded-lg border border-gray-300 bg-gray-50 p-2.5 text-sm text-gray-900 dark:border-gray-500 dark:bg-gray-600 dark:text-white dark:placeholder-gray-400"
                                        placeholder="024XXXXXXXXX"
                                        value="{{ old('phone_number', $institution->phone_number) }}">
                                    @error('phone_number')
                                        <small class="text-xs font-bold text-red-500">
                                            {{ $message }}
                                        </small>
                                    @enderror
                                </div>
                                <div class="col-span-2 sm:col-span-1">
                                    <label for="email"
                                        class="mb-2 block text-sm font-medium text-gray-900 dark:text-white">Email</label>
                                    <input type="email" name="email" id="email"
                                        class="focus:ring-primary-600 focus:border-primary-600 dark:focus:ring-primary-500 dark:focus:border-primary-500 block w-full rounded-lg border border-gray-300 bg-gray-50 p-2.5 text-sm text-gray-900 dark:border-gray-500 dark:bg-gray-600 dark:text-white dark:placeholder-gray-400"
                                        placeholder="example@email.com"
                                        value="{{ old('email', $institution->email) }}">
                                    @error('email')
                                        <small class="text-xs font-bold text-red-500">
                                            {{ $message }}
                                        </small>
                                    @enderror
                                </div>
                                <div class="col-span-2">
                                    <label for="address"
                                        class="mb-2 block text-sm font-medium text-gray-900 dark:text-white">Instition
                                        Address</label>
                                    <input type="text" name="address" id="address"
                                        class="focus:ring-primary-600 focus:border-primary-600 dark:focus:ring-primary-500 dark:focus:border-primary-500 block w-full rounded-lg border border-gray-300 bg-gray-50 p-2.5 text-sm text-gray-900 dark:border-gray-500 dark:bg-gray-600 dark:text-white dark:placeholder-gray-400"
                                        placeholder="Type institution address"
                                        value="{{ old('address', $institution->address) }}">
                                    @error('address')
                                        <small class="text-xs font-bold text-red-500">
                                            {{ $message }}
                                        </small>
                                    @enderror
                                </div>
                            </div>
                            <button type="submit"
                                class="inline-flex items-center rounded-lg bg-blue-700 px-5 py-2.5 text-center text-sm font-medium text-white hover:bg-blue-800 focus:outline-none focus:ring-4 focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                                <svg class="-ms-1 me-1 h-5 w-5" fill="currentColor" viewBox="0 0 20 20"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd"
                                        d="M10 5a1 1 0 011 1v3h3a1 1 0 110 2h-3v3a1 1 0 11-2 0v-3H6a1 1 0 110-2h3V6a1 1 0 011-1z"
                                        clip-rule="evenodd"></path>
                                </svg>
                                Update Institution
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>



</x-app-layout>

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
</script>
