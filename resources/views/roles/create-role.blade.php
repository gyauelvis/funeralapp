<x-app-layout>

    <main class="flex h-auto min-h-screen items-center justify-center rounded-lg p-4 pt-20 dark:bg-gray-700 md:ml-64">
        <div class="w-full max-w-lg">
            <div class="rounded-md bg-white">
                <div class="flex items-center justify-between rounded-t p-4 dark:border-gray-600 md:p-5">
                    <h3 class="text-xl font-semibold text-gray-900 dark:text-white">
                        Create a Role
                    </h3>
                </div>
                <form class="p-4 md:p-5" action="{{ route('role.new') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="mb-4 grid grid-cols-2 gap-4">
                        <div class="col-span-2">
                            <label for="name"
                                class="mb-2 block text-sm font-medium text-gray-900 dark:text-white">Role Name<span
                                    class="text-red-500">*</span></label>
                            <input type="text" name="name" id="name"
                                class="block w-full rounded-lg border border-gray-300 bg-gray-50 p-2.5 text-sm text-gray-900 focus:border-primary-600 focus:ring-primary-600 dark:border-gray-500 dark:bg-gray-600 dark:text-white dark:placeholder-gray-400 dark:focus:border-primary-500 dark:focus:ring-primary-500"
                                placeholder="eg. Admin" value="{{ old('name') }}">
                            @error('name')
                                <small class="text-xs font-bold text-red-500">
                                    {{ $message }}
                                </small>
                            @enderror
                        </div>
                        <div class="col-span-2">
                            <label for="Color"
                                class="mb-2 block text-sm font-medium text-gray-900 dark:text-white">Color</label>
                            <input type="color" name="color" id="color"
                                class="block w-full rounded-lg border border-gray-300 bg-gray-50 p-2.5 text-sm text-gray-900 focus:border-primary-600 focus:ring-primary-600 dark:border-gray-500 dark:bg-gray-600 dark:text-white dark:placeholder-gray-400 dark:focus:border-primary-500 dark:focus:ring-primary-500"
                                value="{{ old('color') }}">
                            @error('color')
                                <small class="text-xs font-bold text-red-500">
                                    {{ $message }}
                                </small>
                            @enderror
                        </div>
                        <div class="col-span-2">
                            {{-- <label for="name"
                                class="mb-2 block text-sm font-medium text-gray-900 dark:text-white">Enter name or
                                Member ID number<span class="text-red-500">*</span></label> --}}
                            {{-- <select name="contributor_id" id="contributor_id"
                                class="block w-full rounded-lg border border-gray-300 bg-gray-50 p-2.5 text-sm text-gray-900 focus:border-primary-600 focus:ring-primary-600 dark:border-gray-500 dark:bg-gray-600 dark:text-white dark:placeholder-gray-400 dark:focus:border-primary-500 dark:focus:ring-primary-500"
                                placeholder="Type member name or ID number">
                                <option>Type member name or ID number</option>
                                @foreach ($members as $member)
                                    <option value="{{ $member->id }}">
                                        {{ "{$member->name} - {$member->membership_id}" }}</option>
                                @endforeach
                            </select> --}}

                            <label for="permissions">Select Permissions</label>
                            @forelse ($permissions as $permission)
                                <div class="mb-4 flex items-center">
                                    <input id="{{ $permission->name }}" name="permissions" type="checkbox"
                                        value="{{ $permission->id }}"
                                        class="h-4 w-4 rounded border-gray-300 bg-gray-100 text-blue-600 focus:ring-2 focus:ring-blue-500 dark:border-gray-600 dark:bg-gray-700 dark:ring-offset-gray-800 dark:focus:ring-blue-600">
                                    <label for="{{ $permission->name }}"
                                        class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">{{ $permission->name }}</label>
                                </div>

                            @empty
                                <p class="bg-gray-400 px-2 py-1 text-black">There are not permissions yet</p>
                            @endforelse

                            @error('contributor_id')
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
                        Create role
                    </button>
                </form>
            </div>
        </div>
    </main>
</x-app-layout>
<script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.min.js"></script>
<link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
