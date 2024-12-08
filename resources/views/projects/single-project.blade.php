<x-app-layout>
    <main
        class="flex min-h-screen bg-gradient-to-br from-gray-50 to-gray-100 p-6 pt-20 dark:from-gray-800 dark:to-gray-900 md:ml-64">
        <div class="container mx-auto max-w-6xl">
            <div class="flex flex-col gap-6 lg:flex-row">
                <!-- Profile Card -->
                <section class="w-full lg:w-1/3">
                    <div
                        class="overflow-hidden rounded-2xl bg-white shadow-lg transition-all hover:shadow-xl dark:bg-gray-800">
                        <!-- Profile Header -->

                        <!-- Profile Content -->
                        <div class="pt-5">
                            <!-- Name and Contact -->
                            <div class="px-6 pb-6">
                                <div class="text-center">
                                    <h4>Project Name</h4>
                                    <h2 class="text-2xl font-bold text-gray-900 dark:text-white">{{ $project->name }}
                                    </h2>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>

                <!-- Stats Cards -->
                <section class="flex w-full flex-col gap-6 lg:w-2/3">
                    <!-- Payment Card -->
                    <div class="rounded-2xl bg-white p-6 shadow-lg transition-all hover:shadow-xl dark:bg-gray-800">
                        <div class="flex items-center gap-3">
                            <svg class="h-8 w-8 text-blue-500" xmlns="http://www.w3.org/2000/svg" fill="none"
                                viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M2.25 18.75a60.07 60.07 0 0115.797 2.101c.727.198 1.453-.342 1.453-1.096V18.75M3.75 4.5v.75A.75.75 0 013 6h-.75m0 0v-.375c0-.621.504-1.125 1.125-1.125H20.25M2.25 6v9m18-10.5v.75c0 .414.336.75.75.75h.75m-1.5-1.5h.375c.621 0 1.125.504 1.125 1.125v9.75c0 .621-.504 1.125-1.125 1.125h-.375m1.5-1.5H21a.75.75 0 00-.75.75v.75m0 0H3.75m0 0h-.375a1.125 1.125 0 01-1.125-1.125V15m1.5 1.5v-.75A.75.75 0 003 15h-.75M15 10.5a3 3 0 11-6 0 3 3 0 016 0zm3 0h.008v.008H18V10.5zm-12 0h.008v.008H6V10.5z" />
                            </svg>
                            <h2 class="text-2xl font-bold text-gray-900 dark:text-white">Payment Summary</h2>
                        </div>

                        <div class="mt-6 grid gap-4 sm:grid-cols-1">


                            <div class="rounded-xl bg-green-50 p-4 dark:bg-green-900/20">
                                <div class="text-sm font-medium text-green-600 dark:text-green-400">Total Donation</div>
                                <div class="mt-2 text-2xl font-bold text-green-700 dark:text-green-300">GH₵
                                    {{ $project->contributions->sum('amount') }}</div>
                            </div>
                        </div>
                    </div>

                    <!-- Debt Card -->
                    {{-- <div class="rounded-2xl bg-white p-6 shadow-lg transition-all hover:shadow-xl dark:bg-gray-800">
                        <div class="flex items-center gap-3">
                            <svg class="h-8 w-8 text-red-500" xmlns="http://www.w3.org/2000/svg" fill="none"
                                viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M12 6v12m-3-2.818l.879.659c1.171.879 3.07.879 4.242 0 1.172-.879 1.172-2.303 0-3.182C13.536 12.219 12.768 12 12 12c-.725 0-1.45-.22-2.003-.659-1.106-.879-1.106-2.303 0-3.182s2.9-.879 4.006 0l.415.33M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                            </svg>
                            <h2 class="text-2xl font-bold text-gray-900 dark:text-white">Debt Summary</h2>
                        </div>

                        <div class="mt-6">
                            <div class="rounded-xl bg-red-50 p-4 dark:bg-red-900/20">
                                <div class="text-sm font-medium text-red-600 dark:text-red-400">Total Debt</div>
                                <div class="mt-2 text-2xl font-bold text-red-700 dark:text-red-300">GH₵ 200.00</div>
                            </div>

                            <div class="mt-4">
                                <div class="text-sm font-medium text-gray-600 dark:text-gray-400">Outstanding Months
                                </div>
                                <div class="mt-2 flex flex-wrap gap-2">
                                    <span
                                        class="rounded-full bg-red-100 px-3 py-1 text-sm font-medium text-red-700 dark:bg-red-900/40 dark:text-red-300">January</span>
                                    <span
                                        class="rounded-full bg-red-100 px-3 py-1 text-sm font-medium text-red-700 dark:bg-red-900/40 dark:text-red-300">March</span>
                                    <span
                                        class="rounded-full bg-red-100 px-3 py-1 text-sm font-medium text-red-700 dark:bg-red-900/40 dark:text-red-300">June</span>
                                </div>
                            </div>
                        </div>
                    </div> --}}
                </section>
            </div>
        </div>
    </main>
</x-app-layout>
