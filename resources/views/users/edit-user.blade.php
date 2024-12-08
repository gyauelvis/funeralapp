<x-app-layout>
    <main
        class="flex h-auto min-h-screen items-center justify-center rounded-lg bg-white p-4 pt-20 dark:bg-gray-700 md:ml-64">
        <div class="w-full max-w-lg">
            <div>
                <div class="flex items-center justify-between rounded-t p-4 dark:border-gray-600 md:p-5">
                    <h3 class="text-xl font-semibold text-gray-900 dark:text-white">
                        Edit New User
                    </h3>
                </div>
                <form class="p-4 md:p-5" action="{{ route('user.new') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="mb-4 grid grid-cols-2 gap-4">
                        <div class="col-span-2">
                            <label class="mb-2 block text-sm font-medium text-gray-900 dark:text-white"
                                for="user_avatar">Upload User Image</label>
                            <div class="flex justify-center">
                                <div class="relative">
                                    <input class="hidden" type="file" id="user_avatar" name="picture_path"
                                        accept="image/*" onchange="previewImage(this)">
                                    <label for="user_avatar"
                                        class="flex h-32 w-32 cursor-pointer items-center justify-center overflow-hidden rounded-full border border-gray-300 bg-gray-50 hover:bg-gray-100 dark:border-gray-600 dark:bg-gray-700 dark:hover:bg-gray-600">
                                        <img id="preview" class="hidden h-full w-full object-cover">
                                        <div id="placeholder" class="text-center">
                                            <svg class="mx-auto mb-1 h-8 w-8 text-gray-500 dark:text-gray-400"
                                                fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                    d="M12 6v6m0 0v6m0-6h6m-6 0H6"></path>
                                            </svg>
                                            <span class="text-sm text-gray-500 dark:text-gray-400">Upload</span>
                                        </div>
                                    </label>
                                </div>
                            </div>
                            <div class="mt-1 text-center text-sm text-gray-500 dark:text-gray-300"
                                id="user_avatar_help">SVG, PNG, JPG or GIF </div>
                            @error('picture_path')
                                <small class="text-xs font-bold text-red-500">
                                    {{ $message }}
                                </small>
                            @enderror
                        </div>

                        <div class="col-span-2">
                            <label for="name"
                                class="mb-2 block text-sm font-medium text-gray-900 dark:text-white">Name<span
                                    class="text-red-500">*</span></label>
                            <input type="text" name="name" id="name"
                                class="block w-full rounded-lg border border-gray-300 bg-gray-50 p-2.5 text-sm text-gray-900 focus:border-primary-600 focus:ring-primary-600 dark:border-gray-500 dark:bg-gray-600 dark:text-white dark:placeholder-gray-400 dark:focus:border-primary-500 dark:focus:ring-primary-500"
                                placeholder="Type name" value="{{ old('name') }}">
                            @error('name')
                                <small class="text-xs font-bold text-red-500">
                                    {{ $message }}
                                </small>
                            @enderror
                        </div>

                        <div class="col-span-2 sm:col-span-1">
                            <label for="phone_number"
                                class="mb-2 block text-sm font-medium text-gray-900 dark:text-white">Phone Number</label>
                            <input type="number" name="phone_number" id="phone_number"
                                class="block w-full rounded-lg border border-gray-300 bg-gray-50 p-2.5 text-sm text-gray-900 focus:border-primary-600 focus:ring-primary-600 dark:border-gray-500 dark:bg-gray-600 dark:text-white dark:placeholder-gray-400 dark:focus:border-primary-500 dark:focus:ring-primary-500"
                                placeholder="02455900993" value="{{ old('phone_number') }}">
                            @error('phone_number')
                                <small class="text-xs font-bold text-red-500">
                                    {{ $message }}
                                </small>
                            @enderror
                        </div>
                        <div class="col-span-2 sm:col-span-1">
                            <label for="email"
                                class="mb-2 block text-sm font-medium text-gray-900 dark:text-white">Email<span
                                    class="text-red-500">*</span></label>
                            <input type="email" name="email" id="email"
                                class="block w-full rounded-lg border border-gray-300 bg-gray-50 p-2.5 text-sm text-gray-900 focus:border-primary-600 focus:ring-primary-600 dark:border-gray-500 dark:bg-gray-600 dark:text-white dark:placeholder-gray-400 dark:focus:border-primary-500 dark:focus:ring-primary-500"
                                placeholder="Active user email" value="{{ old('email', $user->email) }}">
                            @error('email')
                                <small class="text-xs font-bold text-red-500">
                                    {{ $message }}
                                </small>
                            @enderror
                        </div>
                        <div class="col-span-2">
                            <label for="role"
                                class="mb-2 block text-sm font-medium text-gray-900 dark:text-white">Role<span
                                    class="text-red-500">*</span></label>
                            <select name="role" id="role"
                                class="block w-full rounded-lg border border-gray-300 bg-gray-50 p-2.5 text-sm text-gray-900 focus:border-primary-600 focus:ring-primary-600 dark:border-gray-500 dark:bg-gray-600 dark:text-white dark:placeholder-gray-400 dark:focus:border-primary-500 dark:focus:ring-primary-500">
                                <option value="" disabled selected>Select user role</option>
                                {{-- @foreach ($roles as)
                                    <option value="{{ old('role',['value']) }}">{{['name'] }}</option>
                                @endforeach --}}
                            </select>

                            @error('role')
                                <small class="text-xs font-bold text-red-500">
                                    {{ $message }}
                                </small>
                            @enderror
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
                        Edit User
                    </button>
                </form>
            </div>
        </div>
    </main>
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


    function validateMail(email) {
        let reg = /^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/;

        if (email.toLowerCase().match(reg)) {
            return true;
        }
        return false
    }
</script>
