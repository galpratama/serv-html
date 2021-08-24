<!doctype html>
<html x-data="data()" lang="en">

<head>
    <?php include '../includes/dashboard/meta.php' ?>
    <?php include '../includes/dashboard/styles.php' ?>
    <title>Dashboard</title>
</head>

<body class="antialiased">
    <div class="flex h-screen bg-serv-services-bg" :class="{ 'overflow-hidden': isSideMenuOpen }">
        <?php include '../components/dashboard/menu/desktop.php' ?>

        <div x-show="isSideMenuOpen" x-transition:enter="transition ease-in-out duration-150" x-transition:enter-start="opacity-0" x-transition:enter-end="opacity-100" x-transition:leave="transition ease-in-out duration-150" x-transition:leave-start="opacity-100" x-transition:leave-end="opacity-0" class="fixed inset-0 z-10 flex items-end bg-black bg-opacity-50 sm:items-center sm:justify-center"></div>
        <?php include '../components/dashboard/menu/mobile.php' ?>

        <div class="flex flex-col flex-1 w-full">
            <?php include '../components/dashboard/header.php' ?>

            <main class="h-full overflow-y-auto">
                <div class="container mx-auto">
                    <div class="grid w-full gap-5 px-10 mx-auto md:grid-cols-12">
                        <div class="col-span-8">
                            <h2 class="mt-8 mb-1 text-2xl font-semibold text-gray-700">
                                My Orders
                            </h2>
                            <p class="text-sm text-gray-400">
                                3 Total Orders
                            </p>
                        </div>
                        <div class="col-span-4 lg:text-right">

                        </div>
                    </div>
                </div>
                <section class="container px-6 mx-auto mt-5">
                    <div class="grid gap-5 md:grid-cols-12">
                        <main class="col-span-12 p-4 md:pt-0">
                            <div class="px-6 py-2 mt-2 bg-white rounded-xl">
                                <table class="w-full" aria-label="Table">
                                    <thead>
                                        <tr class="text-sm font-normal text-left text-gray-900 border-b border-b-gray-600">
                                            <th class="py-4" scope="">Buyers Name</th>
                                            <th class="py-4" scope="">Service Details</th>
                                            <th class="py-4" scope="">Expires</th>
                                            <th class="py-4" scope="">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody class="bg-white">
                                        <tr class="text-gray-700 border-b">
                                            <td class="px-1 py-5 text-sm w-2/8">
                                                <div class="flex items-center text-sm">
                                                    <div class="relative w-10 h-10 mr-3 rounded-full md:block">
                                                        <img class="object-cover w-full h-full rounded-full" src="https://randomuser.me/api/portraits/men/6.jpg" alt="" loading="lazy" />
                                                        <div class="absolute inset-0 rounded-full shadow-inner" aria-hidden="true"></div>
                                                    </div>
                                                    <div>
                                                        <p class="font-medium text-black">Alexa Sara</p>
                                                        <p class="text-sm text-gray-400">UI Designer</p>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="w-2/6 px-1 py-5">
                                                <div class="flex items-center text-sm">
                                                    <div class="relative w-10 h-10 mr-3 rounded-full md:block">
                                                        <img class="object-cover w-full h-full rounded" src="https://randomuser.me/api/portraits/men/3.jpg" alt="" loading="lazy" />
                                                        <div class="absolute inset-0 rounded-full shadow-inner" aria-hidden="true"></div>
                                                    </div>
                                                    <div>
                                                        <p class="font-medium text-black">
                                                            Design WordPress <br>E-Commerce Modules
                                                        </p>
                                                    </div>
                                                </div>
                                            </td>

                                            <td class="px-1 py-5 text-xs text-red-500">
                                                <svg width="14" height="14" viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg" class="inline mb-1">
                                                    <path d="M7.0002 12.8332C10.2219 12.8332 12.8335 10.2215 12.8335 6.99984C12.8335 3.77818 10.2219 1.1665 7.0002 1.1665C3.77854 1.1665 1.16687 3.77818 1.16687 6.99984C1.16687 10.2215 3.77854 12.8332 7.0002 12.8332Z" stroke="#F26E6E" stroke-linecap="round" stroke-linejoin="round" />
                                                    <path d="M7 3.5V7L9.33333 8.16667" stroke="#F26E6E" stroke-linecap="round" stroke-linejoin="round" />
                                                </svg>

                                                3 days left
                                            </td>
                                            <td class="px-1 py-5 text-sm">
                                                <a href="/dashboard/services/details.php" class="px-4 py-2 mt-1 mr-2 text-center text-white rounded-xl bg-serv-email">
                                                    Details</a>
                                                <a href="/dashboard/orders/submit.php" class="px-4 py-2 mt-2 text-center text-white rounded-xl bg-serv-email">
                                                    Submit
                                                </a>
                                            </td>
                                        </tr>
                                        <tr class="text-gray-700 border-b">
                                            <td class="px-1 py-5 text-sm w-2/8">
                                                <div class="flex items-center text-sm">
                                                    <div class="relative w-10 h-10 mr-3 rounded-full md:block">
                                                        <img class="object-cover w-full h-full rounded-full" src="https://randomuser.me/api/portraits/men/10.jpg" alt="" loading="lazy" />
                                                        <div class="absolute inset-0 rounded-full shadow-inner" aria-hidden="true"></div>
                                                    </div>
                                                    <div>
                                                        <p class="font-medium text-black">Trisa Jenny</p>
                                                        <p class="text-sm text-gray-400">Icon Designer</p>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="w-2/6 px-1 py-5">
                                                <div class="flex items-center text-sm">
                                                    <div class="relative w-10 h-10 mr-3 rounded-full md:block">
                                                        <img class="object-cover w-full h-full rounded" src="https://randomuser.me/api/portraits/men/7.jpg" alt="" loading="lazy" />
                                                        <div class="absolute inset-0 rounded-full shadow-inner" aria-hidden="true"></div>
                                                    </div>
                                                    <div>
                                                        <p class="font-medium text-black">
                                                            Fix Any Issue on Your <br>
                                                            WordPress Website
                                                        </p>
                                                    </div>
                                                </div>
                                            </td>

                                            <td class="px-1 py-5 text-xs text-red-500">
                                                <svg width="14" height="14" viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg" class="inline mb-1">
                                                    <path d="M7.0002 12.8332C10.2219 12.8332 12.8335 10.2215 12.8335 6.99984C12.8335 3.77818 10.2219 1.1665 7.0002 1.1665C3.77854 1.1665 1.16687 3.77818 1.16687 6.99984C1.16687 10.2215 3.77854 12.8332 7.0002 12.8332Z" stroke="#F26E6E" stroke-linecap="round" stroke-linejoin="round" />
                                                    <path d="M7 3.5V7L9.33333 8.16667" stroke="#F26E6E" stroke-linecap="round" stroke-linejoin="round" />
                                                </svg>

                                                3 days left
                                            </td>
                                            <td class="px-1 py-5 text-sm">
                                                <a href="#" class="px-4 py-2 mt-2 text-left text-white rounded-xl bg-serv-button">
                                                    Accept
                                                </a>
                                                <a href="#" class="px-4 py-2 mt-2 text-left bg-white rounded-xl">
                                                    Reject
                                                </a>
                                            </td>
                                        </tr>
                                        <tr class="text-gray-700">
                                            <td class="px-1 py-5 text-sm w-2/8">
                                                <div class="flex items-center text-sm">
                                                    <div class="relative w-10 h-10 mr-3 rounded-full md:block">
                                                        <img class="object-cover w-full h-full rounded-full" src="https://randomuser.me/api/portraits/men/12.jpg" alt="" loading="lazy" />
                                                        <div class="absolute inset-0 rounded-full shadow-inner" aria-hidden="true"></div>
                                                    </div>
                                                    <div>
                                                        <p class="font-medium text-black">Joorudan</p>
                                                        <p class="text-sm text-gray-400">Full - Stack Developer</p>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="w-2/6 px-1 py-5">
                                                <div class="flex items-center text-sm">
                                                    <div class="relative w-10 h-10 mr-3 rounded-full md:block">
                                                        <img class="object-cover w-full h-full rounded" src="https://randomuser.me/api/portraits/men/5.jpg" alt="" loading="lazy" />
                                                        <div class="absolute inset-0 rounded-full shadow-inner" aria-hidden="true"></div>
                                                    </div>
                                                    <div>
                                                        <p class="font-medium text-black">
                                                            Create a UI Design <br>
                                                            for Your Application
                                                        </p>
                                                    </div>
                                                </div>
                                            </td>

                                            <td class="px-1 py-5 text-xs text-red-500">
                                                <svg width="14" height="14" viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg" class="inline mb-1">
                                                    <path d="M7.0002 12.8332C10.2219 12.8332 12.8335 10.2215 12.8335 6.99984C12.8335 3.77818 10.2219 1.1665 7.0002 1.1665C3.77854 1.1665 1.16687 3.77818 1.16687 6.99984C1.16687 10.2215 3.77854 12.8332 7.0002 12.8332Z" stroke="#F26E6E" stroke-linecap="round" stroke-linejoin="round" />
                                                    <path d="M7 3.5V7L9.33333 8.16667" stroke="#F26E6E" stroke-linecap="round" stroke-linejoin="round" />
                                                </svg>

                                                3 days left
                                            </td>
                                            <td class="px-1 py-5 text-sm">
                                                <a href="#" class="px-4 py-2 mt-2 text-left text-white rounded-xl bg-serv-button">
                                                    Accept
                                                </a>
                                                <a href="#" class="px-4 py-2 mt-2 text-left bg-white rounded-xl">
                                                    Reject
                                                </a>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </main>
                    </div>
                </section>
            </main>
        </div>
    </div>
    <?php include '../includes/dashboard/scripts.php' ?>
</body>

</html>