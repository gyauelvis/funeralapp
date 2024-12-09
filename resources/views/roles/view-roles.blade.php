<x-app-layout>
    <main
        class="flex h-auto min-h-screen flex-col items-center justify-center rounded-lg p-14 pt-20 dark:bg-gray-700 md:ml-64">
        <div class="min-w-[800px] rounded-md bg-white p-4 pt-5 shadow-md">
            <table class="w-full text-left text-gray-500 rtl:text-right dark:text-gray-400">
                <div class="pb-4 dark:bg-gray-900">
                    <label for="table-search" class="sr-only">Search</label>
                    <div class="flex items-center justify-between">
                        <div class="mt-1">
                            <div
                                class="rtl:inset-r-0 pointer-events-none absolute inset-y-0 start-0 flex items-center ps-3">
                                <svg class="h-4 w-4 text-gray-500 dark:text-gray-400" aria-hidden="true"
                                    xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                        stroke-width="2" d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z" />
                                </svg>
                            </div>
                            <input type="text" id="table-search"
                                class="block w-80 rounded-lg border border-gray-300 bg-gray-50 ps-10 pt-2 text-sm text-gray-900 focus:border-blue-500 focus:ring-blue-500 dark:border-gray-600 dark:bg-gray-700 dark:text-white dark:placeholder-gray-400 dark:focus:border-blue-500 dark:focus:ring-blue-500"
                                placeholder="Search projects">
                        </div>
                        <div>
                            <a href="{{ route('role.create') }}"
                                class="mt-3 rounded-md bg-blue-600 px-3 py-2 text-white hover:bg-blue-500">
                                Add Role
                            </a>
                        </div>
                    </div>
                    <caption
                        class="bg-white p-5 text-left text-lg font-semibold text-gray-900 rtl:text-right dark:bg-gray-800 dark:text-white">
                        All Roles
                        <p class="mb-2 mt-1 text-sm font-normal text-gray-500 dark:text-gray-400">Browse the list of
                            all roles.</p>
                        {{ $roles->links() }}
                    </caption>
                    <thead class="bg-gray-50 text-xs uppercase text-gray-700 dark:bg-gray-700 dark:text-gray-400">
                        <tr>
                            <th scope="col" class="px-6 py-3">
                                Role Name
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Permissions
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Date Created
                            </th>
                            <th colspan="2" scope="col-2" class="px-6 py-3 text-center">
                                Action
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($roles as $role)
                            <tr class="border-b bg-white hover:bg-slate-100 dark:border-gray-700 dark:bg-gray-800">
                                <th scope="row"
                                    class="whitespace-nowrap px-6 py-4 font-medium text-gray-900 dark:text-white">
                                    <a href="{{ route('project.single', $role->id) }}"
                                        class="hover:font-bold hover:text-red-600">
                                        {{ $role->name }}
                                    </a>
                                </th>
                                <td class="px-6 py-4">
                                    {{ $role->description }}
                                </td>
                                <td class="px-6 py-4">
                                    {{ $role->created_at->toFormattedDateString() }}
                                </td>
                                <td class="px-6 py-4 text-left">
                                    <a href="{{ route('project.edit', $role->id) }}"
                                        class="font-medium text-blue-600 hover:underline dark:text-blue-500">Edit</a>
                                </td>
                                <td class="text-left">
                                    <form method="POST" action="{{ route('project.delete', $role->id) }}">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" onclick="return confirm('Are you sure?')"
                                            class="block px-4 py-2 text-center font-bold text-red-500 hover:text-red-700 dark:text-gray-300 dark:hover:bg-gray-700">Delete</button>
                                    </form>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan=43" class="mt-4 text-center">No roles added yet</td>
                            </tr>
                        @endforelse
                    </tbody>
            </table>
            <div
                class="w-full bg-white p-5 text-left text-lg font-semibold text-gray-900 rtl:text-right dark:bg-gray-800 dark:text-white">
                {{ $roles->links() }}
            </div>
        </div>
    </main>
</x-app-layout>
