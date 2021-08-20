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
                <div class="container grid px-10 mx-auto">
                    <h2 class="mt-8 mb-1 text-2xl font-semibold text-gray-700">
                        Overviews
                    </h2>
                    <p class="text-sm text-gray-400">
                        Monthly Reports
                    </p>
                </div>
                <section class="container px-6 mx-auto mt-5">
                    <div class="grid gap-5 md:grid-cols-12">
                        <main class="p-4 lg:col-span-7 md:col-span-12 md:pt-0">
                            <div class="sm:grid sm:h-32 sm:grid-flow-row sm:gap-4 sm:grid-cols-3">
                                <div class="flex flex-col justify-center px-4 py-4 mb-4 bg-white rounded-xl">
                                    <div>
                                        <div>
                                            <img src="/images/services-progress-icon.svg" alt="" class="w-8 h-8">
                                        </div>
                                        <p class="mt-2 text-2xl font-semibold text-left text-gray-800">3</p>
                                        <p class="text-sm text-left text-gray-500">
                                            Services <br class="hidden lg:block">
                                            On Progress
                                        </p>
                                    </div>
                                </div>
                                <div class="flex flex-col justify-center px-4 py-4 mb-4 bg-white rounded-xl">
                                    <div>
                                        <div>
                                            <img src="/images/services-completed-icon.svg" alt="" class="w-8 h-8">
                                        </div>
                                        <p class="mt-2 text-2xl font-semibold text-left text-gray-800">144</p>
                                        <p class="text-sm text-left text-gray-500">
                                            Services <br class="hidden lg:block">
                                            Completed
                                        </p>
                                    </div>
                                </div>
                                <div class="flex flex-col justify-center px-4 py-4 mb-4 bg-white rounded-xl">
                                    <div>
                                        <div>
                                            <img src="/images/new-freelancer-icon.svg" alt="" class="w-8 h-8">
                                        </div>
                                        <p class="mt-2 text-2xl font-semibold text-left text-gray-800">3</p>
                                        <p class="text-sm text-left text-gray-500">
                                            New Freelancer <br class="hidden lg:block">
                                            Work for You
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="p-6 mt-8 bg-white rounded-xl">
                                <div>
                                    <h2 class="mb-1 text-xl font-semibold">
                                        Latest Orders
                                    </h2>
                                    <p class="text-sm text-gray-400">
                                        3 Total Orders On Progress
                                    </p>
                                </div>
                                <table class="w-full mt-4" aria-label="Table">
                                    <thead>
                                        <tr class="text-sm font-normal text-left text-gray-900 border-b border-b-gray-600">
                                            <th class="py-4" scope="">Name</th>
                                            <th class="py-4" scope="">Services Name</th>
                                            <th class="py-4" scope="">Deadline</th>
                                        </tr>
                                    </thead>
                                    <tbody class="bg-white">
                                        <tr class="text-gray-700">
                                            <td class="w-1/3 px-1 py-5">
                                                <div class="flex items-center text-sm">
                                                    <div class="relative w-10 h-10 mr-3 rounded-full md:block">
                                                        <img class="object-cover w-full h-full rounded-full" src="https://randomuser.me/api/portraits/men/2.jpg" alt="" loading="lazy" />
                                                        <div class="absolute inset-0 rounded-full shadow-inner" aria-hidden="true"></div>
                                                    </div>
                                                    <div>
                                                        <p class="font-medium text-black">Siri Leaf</p>
                                                        <p class="text-sm text-yellow-400">On Progress</p>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="w-2/4 px-1 py-5">
                                                <div class="flex items-center text-sm">
                                                    <div class="relative w-10 h-10 mr-3 rounded-full md:block">
                                                        <img class="object-cover w-full h-full rounded" src="https://randomuser.me/api/portraits/men/3.jpg" alt="" loading="lazy" />
                                                        <div class="absolute inset-0 rounded-full shadow-inner" aria-hidden="true"></div>
                                                    </div>
                                                    <div>
                                                        <p class="font-medium text-black">
                                                            Design WordPress E-Commerce Modules
                                                        </p>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="px-1 py-5 text-xs text-red-500">
                                                <svg width="14" height="14" viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg" class="inline mb-1">
                                                    <path d="M7.0002 12.8332C10.2219 12.8332 12.8335 10.2215 12.8335 6.99984C12.8335 3.77818 10.2219 1.1665 7.0002 1.1665C3.77854 1.1665 1.16687 3.77818 1.16687 6.99984C1.16687 10.2215 3.77854 12.8332 7.0002 12.8332Z" stroke="#F26E6E" stroke-linecap="round" stroke-linejoin="round" />
                                                    <path d="M7 3.5V7L9.33333 8.16667" stroke="#F26E6E" stroke-linecap="round" stroke-linejoin="round" />
                                                </svg>

                                                1 May 2021
                                            </td>
                                        </tr>
                                        <tr class="text-gray-700">
                                            <td class="w-1/3 px-1 py-5">
                                                <div class="flex items-center text-sm">
                                                    <div class="relative w-10 h-10 mr-3 rounded-full md:block">
                                                        <img class="object-cover w-full h-full rounded-full" src="https://randomuser.me/api/portraits/men/4.jpg" alt="" loading="lazy" />
                                                        <div class="absolute inset-0 rounded-full shadow-inner" aria-hidden="true"></div>
                                                    </div>
                                                    <div>
                                                        <p class="font-medium text-black">Miles John</p>
                                                        <p class="text-sm text-yellow-400">On Progress</p>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="w-2/4 px-1 py-5">
                                                <div class="flex items-center text-sm">
                                                    <div class="relative w-10 h-10 mr-3 rounded-full md:block">
                                                        <img class="object-cover w-full h-full rounded" src="https://randomuser.me/api/portraits/men/5.jpg" alt="" loading="lazy" />
                                                        <div class="absolute inset-0 rounded-full shadow-inner" aria-hidden="true"></div>
                                                    </div>
                                                    <div>
                                                        <p class="font-medium text-black">
                                                            Fix Any Issue on Your WordPress Website
                                                        </p>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="px-1 py-5 text-xs text-red-500">
                                                <svg width="14" height="14" viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg" class="inline mb-1">
                                                    <path d="M7.0002 12.8332C10.2219 12.8332 12.8335 10.2215 12.8335 6.99984C12.8335 3.77818 10.2219 1.1665 7.0002 1.1665C3.77854 1.1665 1.16687 3.77818 1.16687 6.99984C1.16687 10.2215 3.77854 12.8332 7.0002 12.8332Z" stroke="#F26E6E" stroke-linecap="round" stroke-linejoin="round" />
                                                    <path d="M7 3.5V7L9.33333 8.16667" stroke="#F26E6E" stroke-linecap="round" stroke-linejoin="round" />
                                                </svg>

                                                1 May 2021
                                            </td>
                                        </tr>
                                        <tr class="text-gray-700">
                                            <td class="w-1/3 px-1 py-5">
                                                <div class="flex items-center text-sm">
                                                    <div class="relative w-10 h-10 mr-3 rounded-full md:block">
                                                        <img class="object-cover w-full h-full rounded-full" src="https://randomuser.me/api/portraits/men/6.jpg" alt="" loading="lazy" />
                                                        <div class="absolute inset-0 rounded-full shadow-inner" aria-hidden="true"></div>
                                                    </div>
                                                    <div>
                                                        <p class="font-medium text-black">Alexa Sara</p>
                                                        <p class="text-sm text-yellow-400">On Progress</p>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="w-2/4 px-1 py-5">
                                                <div class="flex items-center text-sm">
                                                    <div class="relative w-10 h-10 mr-3 rounded-full md:block">
                                                        <img class="object-cover w-full h-full rounded" src="https://randomuser.me/api/portraits/men/7.jpg" alt="" loading="lazy" />
                                                        <div class="absolute inset-0 rounded-full shadow-inner" aria-hidden="true"></div>
                                                    </div>
                                                    <div>
                                                        <p class="font-medium text-black">
                                                            Design WordPress E-Commerce Modules
                                                        </p>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="px-1 py-5 text-xs text-red-500">
                                                <svg width="14" height="14" viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg" class="inline mb-1">
                                                    <path d="M7.0002 12.8332C10.2219 12.8332 12.8335 10.2215 12.8335 6.99984C12.8335 3.77818 10.2219 1.1665 7.0002 1.1665C3.77854 1.1665 1.16687 3.77818 1.16687 6.99984C1.16687 10.2215 3.77854 12.8332 7.0002 12.8332Z" stroke="#F26E6E" stroke-linecap="round" stroke-linejoin="round" />
                                                    <path d="M7 3.5V7L9.33333 8.16667" stroke="#F26E6E" stroke-linecap="round" stroke-linejoin="round" />
                                                </svg>

                                                1 May 2021
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </main>
                        <aside class="p-4 lg:col-span-5 md:col-span-12 md:pt-0">
                            <div class="relative w-full h-56 m-auto text-white transition-transform transform bg-red-100 rounded-xl">

                                <img class="relative object-cover w-full h-full rounded-xl" src="/images/card-background.png" alt="">

                                <div class="absolute w-full px-8 top-8">
                                    <div class="flex justify-between">
                                        <div class="">
                                            <p class="font-light">
                                                Your Balance
                                                </h1>
                                            <p class="font-medium tracking-widest">
                                                Rp 21.000.000
                                            </p>
                                        </div>
                                        <img class="w-16 h-12" src="/images/visa-icon.svg" alt="" />
                                    </div>
                                    <div class="pt-6">
                                        <p class="font-medium tracking-more-wider">
                                            •••• •••• •••• •••• 0903
                                        </p>
                                    </div>
                                    <div class="pt-6">
                                        <div class="flex justify-between">
                                            <div class="">
                                                <p class="text-xs font-light">
                                                    VALID THRU
                                                    </h1>
                                                <p class="text-sm font-light">
                                                    05/25
                                                </p>
                                            </div>

                                            <div class="text-right">
                                                <svg width="60" height="26" viewBox="0 0 60 26" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M12.5 24.6562C15.5073 24.6562 18.2449 23.5019 20.2941 21.6122C18.2487 19.3866 17 16.4173 17 13.1562C17 9.89524 18.2487 6.92589 20.2941 4.70029C18.2449 2.81056 15.5073 1.65625 12.5 1.65625C6.14873 1.65625 1 6.80498 1 13.1562C1 19.5075 6.14873 24.6562 12.5 24.6562ZM12.5 25.6562C15.7826 25.6562 18.7696 24.391 21 22.3215C23.2304 24.391 26.2174 25.6562 29.5 25.6562C33.0345 25.6562 36.2264 24.1893 38.5 21.8309C40.7736 24.1893 43.9655 25.6562 47.5 25.6562C54.4036 25.6562 60 20.0598 60 13.1562C60 6.25269 54.4036 0.65625 47.5 0.65625C43.9655 0.65625 40.7736 2.12324 38.5 4.48156C36.2264 2.12324 33.0345 0.65625 29.5 0.65625C26.2174 0.65625 23.2304 1.92155 21 3.99102C18.7696 1.92155 15.7826 0.65625 12.5 0.65625C5.59644 0.65625 0 6.25269 0 13.1562C0 20.0598 5.59644 25.6562 12.5 25.6562ZM37.8331 5.23097C35.7381 3.02889 32.7794 1.65625 29.5 1.65625C26.4927 1.65625 23.7551 2.81056 21.7059 4.70029C23.7513 6.92589 25 9.89524 25 13.1562C25 16.4173 23.7513 19.3866 21.7059 21.6122C23.7551 23.5019 26.4927 24.6562 29.5 24.6562C32.7794 24.6562 35.7381 23.2836 37.8331 21.0815C36.0627 18.9246 35 16.1645 35 13.1562C35 10.148 36.0627 7.38793 37.8331 5.23097ZM38.5 20.3159C36.9352 18.3514 36 15.863 36 13.1562C36 10.4495 36.9352 7.96112 38.5 5.99663C40.0648 7.96112 41 10.4495 41 13.1562C41 15.863 40.0648 18.3514 38.5 20.3159ZM39.1669 21.0815C40.9373 18.9246 42 16.1645 42 13.1562C42 10.148 40.9373 7.38793 39.1669 5.23097C41.2619 3.02889 44.2206 1.65625 47.5 1.65625C53.8513 1.65625 59 6.80498 59 13.1562C59 19.5075 53.8513 24.6562 47.5 24.6562C44.2206 24.6562 41.2619 23.2836 39.1669 21.0815ZM24 13.1562C24 10.1724 22.8636 7.45399 21 5.41017C19.1364 7.45399 18 10.1724 18 13.1562C18 16.1401 19.1364 18.8585 21 20.9023C22.8636 18.8585 24 16.1401 24 13.1562Z" fill="white" fill-opacity="0.8" />
                                                </svg>

                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                            <div class="p-6 mt-8 bg-white rounded-xl">
                                <div>
                                    <h2 class="mb-1 text-xl font-semibold">
                                        Top Reviews
                                    </h2>
                                    <p class="text-sm text-gray-400">
                                        48 Total Reviews
                                    </p>
                                </div>
                                <table class="w-full" aria-label="Table">
                                    <thead>
                                        <tr class="text-sm font-normal text-left text-gray-900 border-b border-b-gray-600">
                                            <th class="py-4" scope=""></th>
                                            <th class="py-4" scope=""></th>
                                        </tr>
                                    </thead>
                                    <tbody class="bg-white">
                                    <tr class="text-gray-700">
                                            <td class="w-1/2 px-1 py-2">
                                                <div class="flex items-center text-sm">
                                                    <div class="relative w-10 h-10 mr-3 rounded-full md:block">
                                                        <img class="object-cover w-full h-full rounded-full" src="https://randomuser.me/api/portraits/men/2.jpg" alt="" loading="lazy" />
                                                        <div class="absolute inset-0 rounded-full shadow-inner" aria-hidden="true"></div>
                                                    </div>
                                                    <div>
                                                        <p class="font-medium text-black">Sarah Roses</p>
                                                        <p class="text-sm text-gray-400">1 May 2021</p>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="w-1/2 px-1 py-5 text-xs text-right text-red-500">
                                            <?php include '../components/dashboard/rating.php'; ?>
                                            </td>
                                        </tr>
                                        <tr class="text-gray-700">
                                            <td class="w-1/2 px-1 py-2">
                                                <div class="flex items-center text-sm">
                                                    <div class="relative w-10 h-10 mr-3 rounded-full md:block">
                                                        <img class="object-cover w-full h-full rounded-full" src="https://randomuser.me/api/portraits/men/3.jpg" alt="" loading="lazy" />
                                                        <div class="absolute inset-0 rounded-full shadow-inner" aria-hidden="true"></div>
                                                    </div>
                                                    <div>
                                                        <p class="font-medium text-black">Sarah Roses</p>
                                                        <p class="text-sm text-gray-400">1 May 2021</p>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="w-1/2 px-1 py-5 text-xs text-right text-red-500">
                                            <?php include '../components/dashboard/rating.php'; ?>
                                            </td>
                                        </tr>
                                        <tr class="text-gray-700">
                                            <td class="w-1/2 px-1 py-2">
                                                <div class="flex items-center text-sm">
                                                    <div class="relative w-10 h-10 mr-3 rounded-full md:block">
                                                        <img class="object-cover w-full h-full rounded-full" src="https://randomuser.me/api/portraits/men/4.jpg" alt="" loading="lazy" />
                                                        <div class="absolute inset-0 rounded-full shadow-inner" aria-hidden="true"></div>
                                                    </div>
                                                    <div>
                                                        <p class="font-medium text-black">Sarah Roses</p>
                                                        <p class="text-sm text-gray-400">1 May 2021</p>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="w-1/2 px-1 py-5 text-xs text-right text-red-500">
                                            <?php include '../components/dashboard/rating.php'; ?>
                                            </td>
                                        </tr>
                                        <tr class="text-gray-700">
                                            <td class="w-1/2 px-1 py-2">
                                                <div class="flex items-center text-sm">
                                                    <div class="relative w-10 h-10 mr-3 rounded-full md:block">
                                                        <img class="object-cover w-full h-full rounded-full" src="https://randomuser.me/api/portraits/men/5.jpg" alt="" loading="lazy" />
                                                        <div class="absolute inset-0 rounded-full shadow-inner" aria-hidden="true"></div>
                                                    </div>
                                                    <div>
                                                        <p class="font-medium text-black">Sarah Roses</p>
                                                        <p class="text-sm text-gray-400">1 May 2021</p>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="w-1/2 px-1 py-5 text-xs text-right text-red-500">
                                            <?php include '../components/dashboard/rating.php'; ?>
                                            </td>
                                        </tr>
                                        <tr class="text-gray-700">
                                            <td class="w-1/2 px-1 py-2">
                                                <div class="flex items-center text-sm">
                                                    <div class="relative w-10 h-10 mr-3 rounded-full md:block">
                                                        <img class="object-cover w-full h-full rounded-full" src="https://randomuser.me/api/portraits/men/6.jpg" alt="" loading="lazy" />
                                                        <div class="absolute inset-0 rounded-full shadow-inner" aria-hidden="true"></div>
                                                    </div>
                                                    <div>
                                                        <p class="font-medium text-black">Sarah Roses</p>
                                                        <p class="text-sm text-gray-400">1 May 2021</p>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="w-1/2 px-1 py-5 text-xs text-right text-red-500">
                                            <?php include '../components/dashboard/rating.php'; ?>
                                            </td>
                                        </tr>
                                        
                                    </tbody>
                                </table>
                            </div>
                        </aside>
                    </div>
                </section>
            </main>
        </div>
    </div>
    <?php include '../includes/dashboard/scripts.php' ?>
</body>

</html>