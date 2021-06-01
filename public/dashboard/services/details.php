<!doctype html>
<html x-data="data()" lang="en">

<head>
    <?php include '../../includes/dashboard/meta.php' ?>
    <?php include '../../includes/dashboard/styles.php' ?>
    <title>Service Details</title>
</head>

<body class="antialiased">
    <div class="flex h-screen bg-serv-services-bg" :class="{ 'overflow-hidden': isSideMenuOpen }">
        <?php include '../../components/dashboard/menu/desktop.php' ?>

        <div x-show="isSideMenuOpen" x-transition:enter="transition ease-in-out duration-150" x-transition:enter-start="opacity-0" x-transition:enter-end="opacity-100" x-transition:leave="transition ease-in-out duration-150" x-transition:leave-start="opacity-100" x-transition:leave-end="opacity-0" class="fixed inset-0 z-10 flex items-end bg-black bg-opacity-50 sm:items-center sm:justify-center"></div>
        <?php include '../../components/dashboard/menu/mobile.php' ?>

        <div class="flex flex-col flex-1 w-full">
            <?php include '../../components/dashboard/header.php' ?>

            <main class="h-full overflow-y-auto">
                <div class="container px-6 mx-auto grid">
                    <h2 class="mt-6 mb-1 text-2xl font-semibold text-gray-700">
                        My Services
                    </h2>
                    <p class="text-sm text-gray-400">
                        Details Service
                    </p>
                </div>
            </main>
        </div>
    </div>
    <?php include '../../includes/dashboard/scripts.php' ?>
</body>

</html>