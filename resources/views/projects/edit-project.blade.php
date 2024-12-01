<x-app-layout>

    <main <<<<<<< HEAD
        class="mt-5 flex flex-col content-center items-center justify-around rounded-lg p-4 pt-20 dark:bg-gray-700 md:ml-64">
        <div class="w-full max-w-lg rounded-md bg-white p-5">

            <div class="w-full max-w-lg">

                <div>
                    <div class="flex items-center justify-center rounded-t p-4 dark:border-gray-600 md:p-5">
                        <h3 class="text-xl font-semibold text-gray-900 dark:text-white">
                            Update Project
                        </h3>
                    </div>

                    <form class="p-4 md:p-5" action="{{ route('project.update', $project->id) }}" method="POST">
                        @csrf
                        @method('PUT')
                        <div class="mb-4 grid grid-cols-2 gap-4">

                            <div class="col-span-2">
                                <label for="name"
                                    class="mb-2 block text-sm font-medium text-gray-900 dark:text-white">Name<span
                                        class="text-red-500">*</span></label>
                                <input type="text" name="name"
                                    class="block w-full rounded-lg border border-gray-300 bg-gray-50 p-2.5 text-sm text-gray-900 focus:border-primary-600 focus:ring-primary-600 dark:border-gray-500 dark:bg-gray-600 dark:text-white dark:placeholder-gray-400 dark:focus:border-primary-500 dark:focus:ring-primary-500"
                                    placeholder="Eg. School Building" value="{{ old('name', $project->name) }}">
                                @error('name')
                                    <small class="text-xs font-bold text-red-500">
                                        {{ $message }}
                                    </small>
                                @enderror
                            </div>
                            <div class="col-span-2">
                                <label for="description"
                                    class="mb-2 block text-sm font-medium text-gray-900 dark:text-white">Description of
                                    Project</label>
                                <textarea id="description" name="description" rows="8"
                                    class="block w-full rounded-lg border border-gray-300 bg-gray-50 p-2.5 text-sm text-gray-900 focus:border-primary-500 focus:ring-primary-500 dark:border-gray-600 dark:bg-gray-700 dark:text-white dark:placeholder-gray-400 dark:focus:border-primary-500 dark:focus:ring-primary-500"
                                    placeholder="Description of project here">{{ old('description', $project->description) }}</textarea>
                            </div>

                        </div>
                        {{-- Non Member form --}}



                        <button id="submit" type="submit"
                            class="inline-flex w-full items-center justify-center rounded-lg bg-blue-700 px-5 py-2.5 text-center text-sm font-medium text-white hover:bg-blue-800 focus:outline-none focus:ring-4 focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                            <svg class="-ms-1 me-1 h-5 w-5" fill="currentColor" viewBox="0 0 20 20"
                                xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd"
                                    d="M10 5a1 1 0 011 1v3h3a1 1 0 110 2h-3v3a1 1 0 11-2 0v-3H6a1 1 0 110-2h3V6a1 1 0 011-1z"
                                    clip-rule="evenodd"></path>
                            </svg>
                            Update Project
                        </button>
                    </form>
                </div>
            </div>
    </main>
</x-app-layout>
