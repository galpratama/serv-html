<!doctype html>
<html lang="en">

<head>
    <?php include 'includes/meta.php' ?>
    <?php include 'includes/styles.php' ?>
    <title>Serv</title>
</head>

<body class="antialiased">
    <div class="relative">
        <!-- top -->
        <div class="hero-bg">
            <!-- header -->
            <?php include 'components/navbar.php' ?>

            <!-- hero -->
            <div class="hero">
                <div class="mx-auto flex pt-16 pb-16 lg:pb-20 lg:px-24 md:px-16 sm:px-8 px-8 lg:flex-row flex-col">
                    <!-- Left Column -->
                    <div
                        class="lg:flex-grow lg:w-1/2 flex flex-col lg:items-start lg:text-left mb-3 md:mb-12 lg:mb-0 items-center text-center">
                        <h1
                            class="text-black-1 lg:leading-normal sm:text-4xl lg:text-5xl text-3xl mb-5 font-semibold lg:mt-20">
                            Finish Your Project With <br class="lg:block hidden">
                            Ours Best Freelancers
                        </h1>
                        <p class="text-lg leading-relaxed text-serv-text font-light tracking-wide mb-10 lg:mb-18 ">
                            Temukan ribuan pekerja remote yang <br class="lg:block hidden">
                            memiliki skills dan pengalaman terbaik <br class="lg:block hidden">
                            untuk membantu anda.
                        </p>
                        <div
                            class="md:flex contents items-center mx-auto lg:mx-0 lg:flex justify-center lg:space-x-8 md:space-x-2 space-x-0">
                            <button class="bg-serv-button text-white text-lg py-4 px-12 my-2 rounded-lg" onclick="toggleModal('registerModal')">
                                Get Started
                            </button>
                        </div>
                    </div>
                    <!-- Right Column -->
                    <div class="w-full lg:w-1/2 text-center lg:justify-start justify-center flex pr-0">
                        <img class="bottom-0 lg:block lg:right-24 md:right-16 sm:right-8 right-8 w-75"
                            src="hero-image.png" alt="" />
                    </div>
                </div>
                <div class="lg:mb-20 mb-10 flex sm:space-x-4 space-x-1">
                    <div class="flex-1 flex items-center justify-center py-3 px-6">
                        <img src="brand-logo/netflix.svg" alt="">
                    </div>
                    <div class="flex-1 flex items-center justify-center py-3 px-6">
                        <img src="brand-logo/amazon.svg" alt="">
                    </div>
                    <div class="flex-1 flex items-center justify-center py-3 px-6">
                        <img src="brand-logo/uber.svg" alt="">
                    </div>
                    <div class="flex-1 flex items-center justify-center py-3 px-6">
                        <img src="brand-logo/grab.svg" alt="">
                    </div>
                    <div class="flex-1 flex items-center justify-center py-3 px-6">
                        <img src="brand-logo/google.svg" alt="">
                    </div>
                </div>
            </div>
        </div>

        <!-- content -->
        <div class="content">
            <!-- services -->
            <div class="bg-serv-services-bg overflow-hidden">
                <div class="pt-16 pb-16 lg:pb-20 lg:pl-24 md:pl-16 sm:pl-8 pl-8 mx-auto">
                    <div class="flex flex-col w-full">
                        <h2 class="sm:text-2xl text-xl tracking-wider font-semibold mb-5 text-medium-black">
                            Featured Services</h2>
                    </div>
                    <div class="flex overflow-x-scroll pb-10 hide-scroll-bar dragscroll -mx-3">
                        <div class="flex flex-nowrap">
                            <div class="inline-block px-3">
                                <div class="w-96 h-auto overflow-hidden md:p-5 p-4 bg-white rounded-2xl inline-block">
                                    <div class="flex items-center space-x-2 mb-6">
                                        <!--Author's profile photo-->
                                        <img class="w-14 h-14 object-cover object-center rounded-full mr-1"
                                            src="https://randomuser.me/api/portraits/men/54.jpg" alt="random user" />
                                        <div>
                                            <!--Author name-->
                                            <p class="text-gray-900 font-semibold text-lg">Alex Jones</p>
                                            <p class="text-serv-text font-light text-md">
                                                Website Developer
                                            </p>
                                        </div>
                                    </div>

                                    <!--Banner image-->
                                    <img class="rounded-2xl w-full"
                                        src="https://images.unsplash.com/photo-1603349206295-dde20617cb6a?ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=750&q=80
                                                                                                                                                                                                                                                                      " />

                                    <!--Title-->
                                    <h1 class="font-semibold text-gray-900 text-lg mt-1 leading-normal py-4">
                                        I Will Design WordPress eCommerce
                                        Modules
                                    </h1>
                                    <!--Description-->
                                    <div class="max-w-full">
                                        <p class="rating text-lg font-light text-serv-text">
                                            <svg width="26" height="24" viewBox="0 0 26 24" fill="none"
                                                class="inline  align-text-bottom" xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M12.0489 0.927052C12.3483 0.00574112 13.6517 0.00573993 13.9511 0.927051L16.1432 7.67376C16.2771 8.08578 16.661 8.36475 17.0943 8.36475H24.1882C25.1569 8.36475 25.5597 9.60436 24.7759 10.1738L19.0369 14.3435C18.6864 14.5981 18.5397 15.0495 18.6736 15.4615L20.8657 22.2082C21.1651 23.1295 20.1106 23.8956 19.3269 23.3262L13.5878 19.1565C13.2373 18.9019 12.7627 18.9019 12.4122 19.1565L6.67312 23.3262C5.88941 23.8956 4.83493 23.1295 5.13428 22.2082L7.32642 15.4615C7.46029 15.0495 7.31363 14.5981 6.96315 14.3435L1.22405 10.1738C0.440337 9.60436 0.843112 8.36475 1.81184 8.36475H8.90575C9.33897 8.36475 9.72293 8.08578 9.8568 7.67376L12.0489 0.927052Z"
                                                    fill="#FFBF47" />
                                            </svg>
                                            <svg width="26" height="24" viewBox="0 0 26 24" fill="none"
                                                class="inline align-sub" xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M12.0489 0.927052C12.3483 0.00574112 13.6517 0.00573993 13.9511 0.927051L16.1432 7.67376C16.2771 8.08578 16.661 8.36475 17.0943 8.36475H24.1882C25.1569 8.36475 25.5597 9.60436 24.7759 10.1738L19.0369 14.3435C18.6864 14.5981 18.5397 15.0495 18.6736 15.4615L20.8657 22.2082C21.1651 23.1295 20.1106 23.8956 19.3269 23.3262L13.5878 19.1565C13.2373 18.9019 12.7627 18.9019 12.4122 19.1565L6.67312 23.3262C5.88941 23.8956 4.83493 23.1295 5.13428 22.2082L7.32642 15.4615C7.46029 15.0495 7.31363 14.5981 6.96315 14.3435L1.22405 10.1738C0.440337 9.60436 0.843112 8.36475 1.81184 8.36475H8.90575C9.33897 8.36475 9.72293 8.08578 9.8568 7.67376L12.0489 0.927052Z"
                                                    fill="#FFBF47" />
                                            </svg>
                                            <svg width="26" height="24" viewBox="0 0 26 24" fill="none"
                                                class="inline align-sub" xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M12.0489 0.927052C12.3483 0.00574112 13.6517 0.00573993 13.9511 0.927051L16.1432 7.67376C16.2771 8.08578 16.661 8.36475 17.0943 8.36475H24.1882C25.1569 8.36475 25.5597 9.60436 24.7759 10.1738L19.0369 14.3435C18.6864 14.5981 18.5397 15.0495 18.6736 15.4615L20.8657 22.2082C21.1651 23.1295 20.1106 23.8956 19.3269 23.3262L13.5878 19.1565C13.2373 18.9019 12.7627 18.9019 12.4122 19.1565L6.67312 23.3262C5.88941 23.8956 4.83493 23.1295 5.13428 22.2082L7.32642 15.4615C7.46029 15.0495 7.31363 14.5981 6.96315 14.3435L1.22405 10.1738C0.440337 9.60436 0.843112 8.36475 1.81184 8.36475H8.90575C9.33897 8.36475 9.72293 8.08578 9.8568 7.67376L12.0489 0.927052Z"
                                                    fill="#FFBF47" />
                                            </svg>
                                            <svg width="26" height="24" viewBox="0 0 26 24" fill="none"
                                                class="inline align-sub" xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M12.0489 0.927052C12.3483 0.00574112 13.6517 0.00573993 13.9511 0.927051L16.1432 7.67376C16.2771 8.08578 16.661 8.36475 17.0943 8.36475H24.1882C25.1569 8.36475 25.5597 9.60436 24.7759 10.1738L19.0369 14.3435C18.6864 14.5981 18.5397 15.0495 18.6736 15.4615L20.8657 22.2082C21.1651 23.1295 20.1106 23.8956 19.3269 23.3262L13.5878 19.1565C13.2373 18.9019 12.7627 18.9019 12.4122 19.1565L6.67312 23.3262C5.88941 23.8956 4.83493 23.1295 5.13428 22.2082L7.32642 15.4615C7.46029 15.0495 7.31363 14.5981 6.96315 14.3435L1.22405 10.1738C0.440337 9.60436 0.843112 8.36475 1.81184 8.36475H8.90575C9.33897 8.36475 9.72293 8.08578 9.8568 7.67376L12.0489 0.927052Z"
                                                    fill="#FFBF47" />
                                            </svg>
                                            <svg width="26" height="24" viewBox="0 0 26 24" fill="none"
                                                class="inline align-sub" xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M12.0489 0.927052C12.3483 0.00574112 13.6517 0.00573993 13.9511 0.927051L16.1432 7.67376C16.2771 8.08578 16.661 8.36475 17.0943 8.36475H24.1882C25.1569 8.36475 25.5597 9.60436 24.7759 10.1738L19.0369 14.3435C18.6864 14.5981 18.5397 15.0495 18.6736 15.4615L20.8657 22.2082C21.1651 23.1295 20.1106 23.8956 19.3269 23.3262L13.5878 19.1565C13.2373 18.9019 12.7627 18.9019 12.4122 19.1565L6.67312 23.3262C5.88941 23.8956 4.83493 23.1295 5.13428 22.2082L7.32642 15.4615C7.46029 15.0495 7.31363 14.5981 6.96315 14.3435L1.22405 10.1738C0.440337 9.60436 0.843112 8.36475 1.81184 8.36475H8.90575C9.33897 8.36475 9.72293 8.08578 9.8568 7.67376L12.0489 0.927052Z"
                                                    fill="#FFBF47" />
                                            </svg>
                                            (210)
                                        </p>
                                    </div>

                                    <div class="text-center mt-5 flex justify-between w-full">
                                        <span
                                            class="text-serv-text mr-3 inline-flex items-center leading-none text-md py-1 ">
                                            Harga dimulai dari:
                                        </span>
                                        <span
                                            class="text-serv-button inline-flex items-center leading-none text-md font-semibold">
                                            Rp 120.000
                                        </span>
                                    </div>
                                </div>
                            </div>

                            <div class="inline-block px-3">
                                <div class="w-96 h-auto overflow-hidden md:p-5 p-4 bg-white rounded-2xl inline-block">
                                    <div class="flex items-center space-x-2 mb-6">
                                        <!--Author's profile photo-->
                                        <img class="w-14 h-14 object-cover object-center rounded-full mr-1"
                                            src="https://randomuser.me/api/portraits/men/54.jpg" alt="random user" />
                                        <div>
                                            <!--Author name-->
                                            <p class="text-gray-900 font-semibold text-lg">Alex Jones</p>
                                            <p class="text-serv-text font-light text-md">
                                                Website Developer
                                            </p>
                                        </div>
                                    </div>

                                    <!--Banner image-->
                                    <img class="rounded-2xl w-full"
                                        src="https://images.unsplash.com/photo-1603349206295-dde20617cb6a?ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=750&q=80
                                                                                                                                                                                                                                                                      " />

                                    <!--Title-->
                                    <h1 class="font-semibold text-gray-900 text-lg mt-1 leading-normal py-4">
                                        I Will Design WordPress eCommerce
                                        Modules
                                    </h1>
                                    <!--Description-->
                                    <div class="max-w-full">
                                        <p class="rating text-lg font-light text-serv-text">
                                            <svg width="26" height="24" viewBox="0 0 26 24" fill="none"
                                                class="inline  align-text-bottom" xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M12.0489 0.927052C12.3483 0.00574112 13.6517 0.00573993 13.9511 0.927051L16.1432 7.67376C16.2771 8.08578 16.661 8.36475 17.0943 8.36475H24.1882C25.1569 8.36475 25.5597 9.60436 24.7759 10.1738L19.0369 14.3435C18.6864 14.5981 18.5397 15.0495 18.6736 15.4615L20.8657 22.2082C21.1651 23.1295 20.1106 23.8956 19.3269 23.3262L13.5878 19.1565C13.2373 18.9019 12.7627 18.9019 12.4122 19.1565L6.67312 23.3262C5.88941 23.8956 4.83493 23.1295 5.13428 22.2082L7.32642 15.4615C7.46029 15.0495 7.31363 14.5981 6.96315 14.3435L1.22405 10.1738C0.440337 9.60436 0.843112 8.36475 1.81184 8.36475H8.90575C9.33897 8.36475 9.72293 8.08578 9.8568 7.67376L12.0489 0.927052Z"
                                                    fill="#FFBF47" />
                                            </svg>
                                            <svg width="26" height="24" viewBox="0 0 26 24" fill="none"
                                                class="inline align-sub" xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M12.0489 0.927052C12.3483 0.00574112 13.6517 0.00573993 13.9511 0.927051L16.1432 7.67376C16.2771 8.08578 16.661 8.36475 17.0943 8.36475H24.1882C25.1569 8.36475 25.5597 9.60436 24.7759 10.1738L19.0369 14.3435C18.6864 14.5981 18.5397 15.0495 18.6736 15.4615L20.8657 22.2082C21.1651 23.1295 20.1106 23.8956 19.3269 23.3262L13.5878 19.1565C13.2373 18.9019 12.7627 18.9019 12.4122 19.1565L6.67312 23.3262C5.88941 23.8956 4.83493 23.1295 5.13428 22.2082L7.32642 15.4615C7.46029 15.0495 7.31363 14.5981 6.96315 14.3435L1.22405 10.1738C0.440337 9.60436 0.843112 8.36475 1.81184 8.36475H8.90575C9.33897 8.36475 9.72293 8.08578 9.8568 7.67376L12.0489 0.927052Z"
                                                    fill="#FFBF47" />
                                            </svg>
                                            <svg width="26" height="24" viewBox="0 0 26 24" fill="none"
                                                class="inline align-sub" xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M12.0489 0.927052C12.3483 0.00574112 13.6517 0.00573993 13.9511 0.927051L16.1432 7.67376C16.2771 8.08578 16.661 8.36475 17.0943 8.36475H24.1882C25.1569 8.36475 25.5597 9.60436 24.7759 10.1738L19.0369 14.3435C18.6864 14.5981 18.5397 15.0495 18.6736 15.4615L20.8657 22.2082C21.1651 23.1295 20.1106 23.8956 19.3269 23.3262L13.5878 19.1565C13.2373 18.9019 12.7627 18.9019 12.4122 19.1565L6.67312 23.3262C5.88941 23.8956 4.83493 23.1295 5.13428 22.2082L7.32642 15.4615C7.46029 15.0495 7.31363 14.5981 6.96315 14.3435L1.22405 10.1738C0.440337 9.60436 0.843112 8.36475 1.81184 8.36475H8.90575C9.33897 8.36475 9.72293 8.08578 9.8568 7.67376L12.0489 0.927052Z"
                                                    fill="#FFBF47" />
                                            </svg>
                                            <svg width="26" height="24" viewBox="0 0 26 24" fill="none"
                                                class="inline align-sub" xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M12.0489 0.927052C12.3483 0.00574112 13.6517 0.00573993 13.9511 0.927051L16.1432 7.67376C16.2771 8.08578 16.661 8.36475 17.0943 8.36475H24.1882C25.1569 8.36475 25.5597 9.60436 24.7759 10.1738L19.0369 14.3435C18.6864 14.5981 18.5397 15.0495 18.6736 15.4615L20.8657 22.2082C21.1651 23.1295 20.1106 23.8956 19.3269 23.3262L13.5878 19.1565C13.2373 18.9019 12.7627 18.9019 12.4122 19.1565L6.67312 23.3262C5.88941 23.8956 4.83493 23.1295 5.13428 22.2082L7.32642 15.4615C7.46029 15.0495 7.31363 14.5981 6.96315 14.3435L1.22405 10.1738C0.440337 9.60436 0.843112 8.36475 1.81184 8.36475H8.90575C9.33897 8.36475 9.72293 8.08578 9.8568 7.67376L12.0489 0.927052Z"
                                                    fill="#FFBF47" />
                                            </svg>
                                            <svg width="26" height="24" viewBox="0 0 26 24" fill="none"
                                                class="inline align-sub" xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M12.0489 0.927052C12.3483 0.00574112 13.6517 0.00573993 13.9511 0.927051L16.1432 7.67376C16.2771 8.08578 16.661 8.36475 17.0943 8.36475H24.1882C25.1569 8.36475 25.5597 9.60436 24.7759 10.1738L19.0369 14.3435C18.6864 14.5981 18.5397 15.0495 18.6736 15.4615L20.8657 22.2082C21.1651 23.1295 20.1106 23.8956 19.3269 23.3262L13.5878 19.1565C13.2373 18.9019 12.7627 18.9019 12.4122 19.1565L6.67312 23.3262C5.88941 23.8956 4.83493 23.1295 5.13428 22.2082L7.32642 15.4615C7.46029 15.0495 7.31363 14.5981 6.96315 14.3435L1.22405 10.1738C0.440337 9.60436 0.843112 8.36475 1.81184 8.36475H8.90575C9.33897 8.36475 9.72293 8.08578 9.8568 7.67376L12.0489 0.927052Z"
                                                    fill="#FFBF47" />
                                            </svg>
                                            (210)
                                        </p>
                                    </div>

                                    <div class="text-center mt-5 flex justify-between w-full">
                                        <span
                                            class="text-serv-text mr-3 inline-flex items-center leading-none text-md py-1 ">
                                            Harga dimulai dari:
                                        </span>
                                        <span
                                            class="text-serv-button inline-flex items-center leading-none text-md font-semibold">
                                            Rp 120.000
                                        </span>
                                    </div>
                                </div>
                            </div>

                            <div class="inline-block px-3">
                                <div class="w-96 h-auto overflow-hidden md:p-5 p-4 bg-white rounded-2xl inline-block">
                                    <div class="flex items-center space-x-2 mb-6">
                                        <!--Author's profile photo-->
                                        <img class="w-14 h-14 object-cover object-center rounded-full mr-1"
                                            src="https://randomuser.me/api/portraits/men/54.jpg" alt="random user" />
                                        <div>
                                            <!--Author name-->
                                            <p class="text-gray-900 font-semibold text-lg">Alex Jones</p>
                                            <p class="text-serv-text font-light text-md">
                                                Website Developer
                                            </p>
                                        </div>
                                    </div>

                                    <!--Banner image-->
                                    <img class="rounded-2xl w-full"
                                        src="https://images.unsplash.com/photo-1603349206295-dde20617cb6a?ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=750&q=80
                                                                                                                                                                                                                                                                      " />

                                    <!--Title-->
                                    <h1 class="font-semibold text-gray-900 text-lg mt-1 leading-normal py-4">
                                        I Will Design WordPress eCommerce
                                        Modules
                                    </h1>
                                    <!--Description-->
                                    <div class="max-w-full">
                                        <p class="rating text-lg font-light text-serv-text">
                                            <svg width="26" height="24" viewBox="0 0 26 24" fill="none"
                                                class="inline  align-text-bottom" xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M12.0489 0.927052C12.3483 0.00574112 13.6517 0.00573993 13.9511 0.927051L16.1432 7.67376C16.2771 8.08578 16.661 8.36475 17.0943 8.36475H24.1882C25.1569 8.36475 25.5597 9.60436 24.7759 10.1738L19.0369 14.3435C18.6864 14.5981 18.5397 15.0495 18.6736 15.4615L20.8657 22.2082C21.1651 23.1295 20.1106 23.8956 19.3269 23.3262L13.5878 19.1565C13.2373 18.9019 12.7627 18.9019 12.4122 19.1565L6.67312 23.3262C5.88941 23.8956 4.83493 23.1295 5.13428 22.2082L7.32642 15.4615C7.46029 15.0495 7.31363 14.5981 6.96315 14.3435L1.22405 10.1738C0.440337 9.60436 0.843112 8.36475 1.81184 8.36475H8.90575C9.33897 8.36475 9.72293 8.08578 9.8568 7.67376L12.0489 0.927052Z"
                                                    fill="#FFBF47" />
                                            </svg>
                                            <svg width="26" height="24" viewBox="0 0 26 24" fill="none"
                                                class="inline align-sub" xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M12.0489 0.927052C12.3483 0.00574112 13.6517 0.00573993 13.9511 0.927051L16.1432 7.67376C16.2771 8.08578 16.661 8.36475 17.0943 8.36475H24.1882C25.1569 8.36475 25.5597 9.60436 24.7759 10.1738L19.0369 14.3435C18.6864 14.5981 18.5397 15.0495 18.6736 15.4615L20.8657 22.2082C21.1651 23.1295 20.1106 23.8956 19.3269 23.3262L13.5878 19.1565C13.2373 18.9019 12.7627 18.9019 12.4122 19.1565L6.67312 23.3262C5.88941 23.8956 4.83493 23.1295 5.13428 22.2082L7.32642 15.4615C7.46029 15.0495 7.31363 14.5981 6.96315 14.3435L1.22405 10.1738C0.440337 9.60436 0.843112 8.36475 1.81184 8.36475H8.90575C9.33897 8.36475 9.72293 8.08578 9.8568 7.67376L12.0489 0.927052Z"
                                                    fill="#FFBF47" />
                                            </svg>
                                            <svg width="26" height="24" viewBox="0 0 26 24" fill="none"
                                                class="inline align-sub" xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M12.0489 0.927052C12.3483 0.00574112 13.6517 0.00573993 13.9511 0.927051L16.1432 7.67376C16.2771 8.08578 16.661 8.36475 17.0943 8.36475H24.1882C25.1569 8.36475 25.5597 9.60436 24.7759 10.1738L19.0369 14.3435C18.6864 14.5981 18.5397 15.0495 18.6736 15.4615L20.8657 22.2082C21.1651 23.1295 20.1106 23.8956 19.3269 23.3262L13.5878 19.1565C13.2373 18.9019 12.7627 18.9019 12.4122 19.1565L6.67312 23.3262C5.88941 23.8956 4.83493 23.1295 5.13428 22.2082L7.32642 15.4615C7.46029 15.0495 7.31363 14.5981 6.96315 14.3435L1.22405 10.1738C0.440337 9.60436 0.843112 8.36475 1.81184 8.36475H8.90575C9.33897 8.36475 9.72293 8.08578 9.8568 7.67376L12.0489 0.927052Z"
                                                    fill="#FFBF47" />
                                            </svg>
                                            <svg width="26" height="24" viewBox="0 0 26 24" fill="none"
                                                class="inline align-sub" xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M12.0489 0.927052C12.3483 0.00574112 13.6517 0.00573993 13.9511 0.927051L16.1432 7.67376C16.2771 8.08578 16.661 8.36475 17.0943 8.36475H24.1882C25.1569 8.36475 25.5597 9.60436 24.7759 10.1738L19.0369 14.3435C18.6864 14.5981 18.5397 15.0495 18.6736 15.4615L20.8657 22.2082C21.1651 23.1295 20.1106 23.8956 19.3269 23.3262L13.5878 19.1565C13.2373 18.9019 12.7627 18.9019 12.4122 19.1565L6.67312 23.3262C5.88941 23.8956 4.83493 23.1295 5.13428 22.2082L7.32642 15.4615C7.46029 15.0495 7.31363 14.5981 6.96315 14.3435L1.22405 10.1738C0.440337 9.60436 0.843112 8.36475 1.81184 8.36475H8.90575C9.33897 8.36475 9.72293 8.08578 9.8568 7.67376L12.0489 0.927052Z"
                                                    fill="#FFBF47" />
                                            </svg>
                                            <svg width="26" height="24" viewBox="0 0 26 24" fill="none"
                                                class="inline align-sub" xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M12.0489 0.927052C12.3483 0.00574112 13.6517 0.00573993 13.9511 0.927051L16.1432 7.67376C16.2771 8.08578 16.661 8.36475 17.0943 8.36475H24.1882C25.1569 8.36475 25.5597 9.60436 24.7759 10.1738L19.0369 14.3435C18.6864 14.5981 18.5397 15.0495 18.6736 15.4615L20.8657 22.2082C21.1651 23.1295 20.1106 23.8956 19.3269 23.3262L13.5878 19.1565C13.2373 18.9019 12.7627 18.9019 12.4122 19.1565L6.67312 23.3262C5.88941 23.8956 4.83493 23.1295 5.13428 22.2082L7.32642 15.4615C7.46029 15.0495 7.31363 14.5981 6.96315 14.3435L1.22405 10.1738C0.440337 9.60436 0.843112 8.36475 1.81184 8.36475H8.90575C9.33897 8.36475 9.72293 8.08578 9.8568 7.67376L12.0489 0.927052Z"
                                                    fill="#FFBF47" />
                                            </svg>
                                            (210)
                                        </p>
                                    </div>

                                    <div class="text-center mt-5 flex justify-between w-full">
                                        <span
                                            class="text-serv-text mr-3 inline-flex items-center leading-none text-md py-1 ">
                                            Harga dimulai dari:
                                        </span>
                                        <span
                                            class="text-serv-button inline-flex items-center leading-none text-md font-semibold">
                                            Rp 120.000
                                        </span>
                                    </div>
                                </div>
                            </div>

                            <div class="inline-block px-3">
                                <div class="w-96 h-auto overflow-hidden md:p-5 p-4 bg-white rounded-2xl inline-block">
                                    <div class="flex items-center space-x-2 mb-6">
                                        <!--Author's profile photo-->
                                        <img class="w-14 h-14 object-cover object-center rounded-full mr-1"
                                            src="https://randomuser.me/api/portraits/men/54.jpg" alt="random user" />
                                        <div>
                                            <!--Author name-->
                                            <p class="text-gray-900 font-semibold text-lg">Alex Jones</p>
                                            <p class="text-serv-text font-light text-md">
                                                Website Developer
                                            </p>
                                        </div>
                                    </div>

                                    <!--Banner image-->
                                    <img class="rounded-2xl w-full"
                                        src="https://images.unsplash.com/photo-1603349206295-dde20617cb6a?ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=750&q=80
                                                                                                                                                                                                                                                                      " />

                                    <!--Title-->
                                    <h1 class="font-semibold text-gray-900 text-lg mt-1 leading-normal py-4">
                                        I Will Design WordPress eCommerce
                                        Modules
                                    </h1>
                                    <!--Description-->
                                    <div class="max-w-full">
                                        <p class="rating text-lg font-light text-serv-text">
                                            <svg width="26" height="24" viewBox="0 0 26 24" fill="none"
                                                class="inline  align-text-bottom" xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M12.0489 0.927052C12.3483 0.00574112 13.6517 0.00573993 13.9511 0.927051L16.1432 7.67376C16.2771 8.08578 16.661 8.36475 17.0943 8.36475H24.1882C25.1569 8.36475 25.5597 9.60436 24.7759 10.1738L19.0369 14.3435C18.6864 14.5981 18.5397 15.0495 18.6736 15.4615L20.8657 22.2082C21.1651 23.1295 20.1106 23.8956 19.3269 23.3262L13.5878 19.1565C13.2373 18.9019 12.7627 18.9019 12.4122 19.1565L6.67312 23.3262C5.88941 23.8956 4.83493 23.1295 5.13428 22.2082L7.32642 15.4615C7.46029 15.0495 7.31363 14.5981 6.96315 14.3435L1.22405 10.1738C0.440337 9.60436 0.843112 8.36475 1.81184 8.36475H8.90575C9.33897 8.36475 9.72293 8.08578 9.8568 7.67376L12.0489 0.927052Z"
                                                    fill="#FFBF47" />
                                            </svg>
                                            <svg width="26" height="24" viewBox="0 0 26 24" fill="none"
                                                class="inline align-sub" xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M12.0489 0.927052C12.3483 0.00574112 13.6517 0.00573993 13.9511 0.927051L16.1432 7.67376C16.2771 8.08578 16.661 8.36475 17.0943 8.36475H24.1882C25.1569 8.36475 25.5597 9.60436 24.7759 10.1738L19.0369 14.3435C18.6864 14.5981 18.5397 15.0495 18.6736 15.4615L20.8657 22.2082C21.1651 23.1295 20.1106 23.8956 19.3269 23.3262L13.5878 19.1565C13.2373 18.9019 12.7627 18.9019 12.4122 19.1565L6.67312 23.3262C5.88941 23.8956 4.83493 23.1295 5.13428 22.2082L7.32642 15.4615C7.46029 15.0495 7.31363 14.5981 6.96315 14.3435L1.22405 10.1738C0.440337 9.60436 0.843112 8.36475 1.81184 8.36475H8.90575C9.33897 8.36475 9.72293 8.08578 9.8568 7.67376L12.0489 0.927052Z"
                                                    fill="#FFBF47" />
                                            </svg>
                                            <svg width="26" height="24" viewBox="0 0 26 24" fill="none"
                                                class="inline align-sub" xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M12.0489 0.927052C12.3483 0.00574112 13.6517 0.00573993 13.9511 0.927051L16.1432 7.67376C16.2771 8.08578 16.661 8.36475 17.0943 8.36475H24.1882C25.1569 8.36475 25.5597 9.60436 24.7759 10.1738L19.0369 14.3435C18.6864 14.5981 18.5397 15.0495 18.6736 15.4615L20.8657 22.2082C21.1651 23.1295 20.1106 23.8956 19.3269 23.3262L13.5878 19.1565C13.2373 18.9019 12.7627 18.9019 12.4122 19.1565L6.67312 23.3262C5.88941 23.8956 4.83493 23.1295 5.13428 22.2082L7.32642 15.4615C7.46029 15.0495 7.31363 14.5981 6.96315 14.3435L1.22405 10.1738C0.440337 9.60436 0.843112 8.36475 1.81184 8.36475H8.90575C9.33897 8.36475 9.72293 8.08578 9.8568 7.67376L12.0489 0.927052Z"
                                                    fill="#FFBF47" />
                                            </svg>
                                            <svg width="26" height="24" viewBox="0 0 26 24" fill="none"
                                                class="inline align-sub" xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M12.0489 0.927052C12.3483 0.00574112 13.6517 0.00573993 13.9511 0.927051L16.1432 7.67376C16.2771 8.08578 16.661 8.36475 17.0943 8.36475H24.1882C25.1569 8.36475 25.5597 9.60436 24.7759 10.1738L19.0369 14.3435C18.6864 14.5981 18.5397 15.0495 18.6736 15.4615L20.8657 22.2082C21.1651 23.1295 20.1106 23.8956 19.3269 23.3262L13.5878 19.1565C13.2373 18.9019 12.7627 18.9019 12.4122 19.1565L6.67312 23.3262C5.88941 23.8956 4.83493 23.1295 5.13428 22.2082L7.32642 15.4615C7.46029 15.0495 7.31363 14.5981 6.96315 14.3435L1.22405 10.1738C0.440337 9.60436 0.843112 8.36475 1.81184 8.36475H8.90575C9.33897 8.36475 9.72293 8.08578 9.8568 7.67376L12.0489 0.927052Z"
                                                    fill="#FFBF47" />
                                            </svg>
                                            <svg width="26" height="24" viewBox="0 0 26 24" fill="none"
                                                class="inline align-sub" xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M12.0489 0.927052C12.3483 0.00574112 13.6517 0.00573993 13.9511 0.927051L16.1432 7.67376C16.2771 8.08578 16.661 8.36475 17.0943 8.36475H24.1882C25.1569 8.36475 25.5597 9.60436 24.7759 10.1738L19.0369 14.3435C18.6864 14.5981 18.5397 15.0495 18.6736 15.4615L20.8657 22.2082C21.1651 23.1295 20.1106 23.8956 19.3269 23.3262L13.5878 19.1565C13.2373 18.9019 12.7627 18.9019 12.4122 19.1565L6.67312 23.3262C5.88941 23.8956 4.83493 23.1295 5.13428 22.2082L7.32642 15.4615C7.46029 15.0495 7.31363 14.5981 6.96315 14.3435L1.22405 10.1738C0.440337 9.60436 0.843112 8.36475 1.81184 8.36475H8.90575C9.33897 8.36475 9.72293 8.08578 9.8568 7.67376L12.0489 0.927052Z"
                                                    fill="#FFBF47" />
                                            </svg>
                                            (210)
                                        </p>
                                    </div>

                                    <div class="text-center mt-5 flex justify-between w-full">
                                        <span
                                            class="text-serv-text mr-3 inline-flex items-center leading-none text-md py-1 ">
                                            Harga dimulai dari:
                                        </span>
                                        <span
                                            class="text-serv-button inline-flex items-center leading-none text-md font-semibold">
                                            Rp 120.000
                                        </span>
                                    </div>
                                </div>
                            </div>

                            <div class="inline-block px-3">
                                <div class="w-96 h-auto overflow-hidden md:p-5 p-4 bg-white rounded-2xl inline-block">
                                    <div class="flex items-center space-x-2 mb-6">
                                        <!--Author's profile photo-->
                                        <img class="w-14 h-14 object-cover object-center rounded-full mr-1"
                                            src="https://randomuser.me/api/portraits/men/54.jpg" alt="random user" />
                                        <div>
                                            <!--Author name-->
                                            <p class="text-gray-900 font-semibold text-lg">Alex Jones</p>
                                            <p class="text-serv-text font-light text-md">
                                                Website Developer
                                            </p>
                                        </div>
                                    </div>

                                    <!--Banner image-->
                                    <img class="rounded-2xl w-full"
                                        src="https://images.unsplash.com/photo-1603349206295-dde20617cb6a?ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=750&q=80
                                                                                                                                                                                                                                                                      " />

                                    <!--Title-->
                                    <h1 class="font-semibold text-gray-900 text-lg mt-1 leading-normal py-4">
                                        I Will Design WordPress eCommerce
                                        Modules
                                    </h1>
                                    <!--Description-->
                                    <div class="max-w-full">
                                        <p class="rating text-lg font-light text-serv-text">
                                            <svg width="26" height="24" viewBox="0 0 26 24" fill="none"
                                                class="inline  align-text-bottom" xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M12.0489 0.927052C12.3483 0.00574112 13.6517 0.00573993 13.9511 0.927051L16.1432 7.67376C16.2771 8.08578 16.661 8.36475 17.0943 8.36475H24.1882C25.1569 8.36475 25.5597 9.60436 24.7759 10.1738L19.0369 14.3435C18.6864 14.5981 18.5397 15.0495 18.6736 15.4615L20.8657 22.2082C21.1651 23.1295 20.1106 23.8956 19.3269 23.3262L13.5878 19.1565C13.2373 18.9019 12.7627 18.9019 12.4122 19.1565L6.67312 23.3262C5.88941 23.8956 4.83493 23.1295 5.13428 22.2082L7.32642 15.4615C7.46029 15.0495 7.31363 14.5981 6.96315 14.3435L1.22405 10.1738C0.440337 9.60436 0.843112 8.36475 1.81184 8.36475H8.90575C9.33897 8.36475 9.72293 8.08578 9.8568 7.67376L12.0489 0.927052Z"
                                                    fill="#FFBF47" />
                                            </svg>
                                            <svg width="26" height="24" viewBox="0 0 26 24" fill="none"
                                                class="inline align-sub" xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M12.0489 0.927052C12.3483 0.00574112 13.6517 0.00573993 13.9511 0.927051L16.1432 7.67376C16.2771 8.08578 16.661 8.36475 17.0943 8.36475H24.1882C25.1569 8.36475 25.5597 9.60436 24.7759 10.1738L19.0369 14.3435C18.6864 14.5981 18.5397 15.0495 18.6736 15.4615L20.8657 22.2082C21.1651 23.1295 20.1106 23.8956 19.3269 23.3262L13.5878 19.1565C13.2373 18.9019 12.7627 18.9019 12.4122 19.1565L6.67312 23.3262C5.88941 23.8956 4.83493 23.1295 5.13428 22.2082L7.32642 15.4615C7.46029 15.0495 7.31363 14.5981 6.96315 14.3435L1.22405 10.1738C0.440337 9.60436 0.843112 8.36475 1.81184 8.36475H8.90575C9.33897 8.36475 9.72293 8.08578 9.8568 7.67376L12.0489 0.927052Z"
                                                    fill="#FFBF47" />
                                            </svg>
                                            <svg width="26" height="24" viewBox="0 0 26 24" fill="none"
                                                class="inline align-sub" xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M12.0489 0.927052C12.3483 0.00574112 13.6517 0.00573993 13.9511 0.927051L16.1432 7.67376C16.2771 8.08578 16.661 8.36475 17.0943 8.36475H24.1882C25.1569 8.36475 25.5597 9.60436 24.7759 10.1738L19.0369 14.3435C18.6864 14.5981 18.5397 15.0495 18.6736 15.4615L20.8657 22.2082C21.1651 23.1295 20.1106 23.8956 19.3269 23.3262L13.5878 19.1565C13.2373 18.9019 12.7627 18.9019 12.4122 19.1565L6.67312 23.3262C5.88941 23.8956 4.83493 23.1295 5.13428 22.2082L7.32642 15.4615C7.46029 15.0495 7.31363 14.5981 6.96315 14.3435L1.22405 10.1738C0.440337 9.60436 0.843112 8.36475 1.81184 8.36475H8.90575C9.33897 8.36475 9.72293 8.08578 9.8568 7.67376L12.0489 0.927052Z"
                                                    fill="#FFBF47" />
                                            </svg>
                                            <svg width="26" height="24" viewBox="0 0 26 24" fill="none"
                                                class="inline align-sub" xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M12.0489 0.927052C12.3483 0.00574112 13.6517 0.00573993 13.9511 0.927051L16.1432 7.67376C16.2771 8.08578 16.661 8.36475 17.0943 8.36475H24.1882C25.1569 8.36475 25.5597 9.60436 24.7759 10.1738L19.0369 14.3435C18.6864 14.5981 18.5397 15.0495 18.6736 15.4615L20.8657 22.2082C21.1651 23.1295 20.1106 23.8956 19.3269 23.3262L13.5878 19.1565C13.2373 18.9019 12.7627 18.9019 12.4122 19.1565L6.67312 23.3262C5.88941 23.8956 4.83493 23.1295 5.13428 22.2082L7.32642 15.4615C7.46029 15.0495 7.31363 14.5981 6.96315 14.3435L1.22405 10.1738C0.440337 9.60436 0.843112 8.36475 1.81184 8.36475H8.90575C9.33897 8.36475 9.72293 8.08578 9.8568 7.67376L12.0489 0.927052Z"
                                                    fill="#FFBF47" />
                                            </svg>
                                            <svg width="26" height="24" viewBox="0 0 26 24" fill="none"
                                                class="inline align-sub" xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M12.0489 0.927052C12.3483 0.00574112 13.6517 0.00573993 13.9511 0.927051L16.1432 7.67376C16.2771 8.08578 16.661 8.36475 17.0943 8.36475H24.1882C25.1569 8.36475 25.5597 9.60436 24.7759 10.1738L19.0369 14.3435C18.6864 14.5981 18.5397 15.0495 18.6736 15.4615L20.8657 22.2082C21.1651 23.1295 20.1106 23.8956 19.3269 23.3262L13.5878 19.1565C13.2373 18.9019 12.7627 18.9019 12.4122 19.1565L6.67312 23.3262C5.88941 23.8956 4.83493 23.1295 5.13428 22.2082L7.32642 15.4615C7.46029 15.0495 7.31363 14.5981 6.96315 14.3435L1.22405 10.1738C0.440337 9.60436 0.843112 8.36475 1.81184 8.36475H8.90575C9.33897 8.36475 9.72293 8.08578 9.8568 7.67376L12.0489 0.927052Z"
                                                    fill="#FFBF47" />
                                            </svg>
                                            (210)
                                        </p>
                                    </div>

                                    <div class="text-center mt-5 flex justify-between w-full">
                                        <span
                                            class="text-serv-text mr-3 inline-flex items-center leading-none text-md py-1 ">
                                            Harga dimulai dari:
                                        </span>
                                        <span
                                            class="text-serv-button inline-flex items-center leading-none text-md font-semibold">
                                            Rp 120.000
                                        </span>
                                    </div>
                                </div>
                            </div>

                        </div>

                    </div>
                </div>
            </div>

            <!-- call to action -->
            <div class="py-10 lg:py-24 flex lg:flex-row flex-col items-center cta-bg">
                <!-- Left Column -->
                <div class="w-full lg:w-1/2 text-center justify-center flex lg:mb-0 mb-12">
                    <a href="https://www.youtube.com/watch?v=dQw4w9WgXcQ" data-lity>
                        <img id="hero" src="images/video-placeholder.png" alt="" class="p-5" />
                    </a>
                </div>
                <!-- Right Column -->
                <div class="lg:w-1/2 w-full flex flex-col lg:items-start items-center lg:text-left text-center">
                    <h2 class="md:text-4xl text-3xl font-semibold mb-10 lg:leading-normal text-medium-black">
                        Increase Productivity. <br>
                        Save Your Time & Budget.
                    </h2>
                    <p class="text-lg leading-relaxed text-serv-text font-light mb-10 lg:mb-18">
                        Temukan ribuan pekerja remote yang <br class="lg:block hidden">
                        memiliki skills dan pengalaman terbaik <br class="lg:block hidden">
                        untuk membantu anda.
                    </p>
                    <button
                        class="bg-serv-button px-10 py-4 text-base text-white font-semibold rounded-xl cursor-pointer focus:outline-none tracking-wide">
                        Learn More
                    </button>
                </div>
            </div>
        </div>

        <!-- footer -->
        <?php include 'components/footer.php' ?>
    </div>
    
    <?php include 'components/modals/login.php' ?>
    <?php include 'components/modals/register.php' ?>

    <?php include 'includes/scripts.php' ?>
</body>

</html>