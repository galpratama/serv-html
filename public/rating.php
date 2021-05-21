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
        <div>
            <!-- header -->
            <?php isset($_GET['auth']) ? include 'components/navbar/auth.php' : include 'components/navbar/guest.php' ?>
            
        </div>

        <!-- success -->
        <section class="w-auto flex min-h-[85vh] pt-6 pb-20 mx-auto lg:mx-12 px-4">
            <div class="m-auto h-auto">

                <div class="text-center">
                    <h1 class="text-3xl font-bold mb-4">Give a Rating</h1>
                    <p class="leading-8 text-serv-text mb-8">
                    Give an honest review of your experience <br class="lg:block hidden">
                    working with our Freelancer 
                    </p>
                </div>

                <div class="border w-full h-auto overflow-hidden md:p-7 p-4 bg-white rounded-2xl inline-block">
                    <div class="flex items-center space-x-2 mb-6">
                        <!--Author's profile photo-->
                        <img class="w-14 h-14 object-cover object-center rounded-full mr-1"
                            src="https://randomuser.me/api/portraits/men/1.jpg" alt="random user" />
                        <div>
                            <!--Author name-->
                            <p class="text-gray-900 font-semibold text-lg">Alex Jones</p>
                            <p class="text-serv-text font-light text-md">
                                Website Developer
                            </p>
                        </div>
                    </div>

                    <!--Banner image-->
                    <div class="md:flex">
                        <div class="md:flex-1 w-fullflex-grow">
                            <img class="rounded-2xl md:max-w-xs"
                            src="https://via.placeholder.com/750x500" alt="placeholder" />
                        </div>
                        <div class="md:flex-1 md:w-72 md:px-5 mt-4">
                            <span class="inline-flex items-center justify-center px-3 py-2 text-sm font-medium leading-none bg-serv-green-badge text-serv-button rounded-full">
                                Complete
                            </span>
                            <!--Title-->
                            <h1 class="font-semibold text-gray-900 text-xl leading-normal py-3">
                                I Will Design WordPress eCommerce
                                Modules
                            </h1>

                            <div class="text-center flex justify-between w-full mb-2">
                                <span
                                    class="text-serv-button inline-flex items-center leading-none text-md font-semibold">
                                    Rp 120.000
                                </span>
                            </div>
                        </div>
                    </div>
                    <hr class="my-6">
                    <div class="flex mb-5">
                        <div class="flex-1">
                            <h2 class="text-xl font-semibold">Give Best Review</h2>
                        </div>
                        <div class="flex-1 text-right">
                            <p class="rating text-md font-light text-serv-text">
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
                                        fill="#D0D0D0" />
                                </svg>
                                <svg width="26" height="24" viewBox="0 0 26 24" fill="none"
                                    class="inline align-sub" xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M12.0489 0.927052C12.3483 0.00574112 13.6517 0.00573993 13.9511 0.927051L16.1432 7.67376C16.2771 8.08578 16.661 8.36475 17.0943 8.36475H24.1882C25.1569 8.36475 25.5597 9.60436 24.7759 10.1738L19.0369 14.3435C18.6864 14.5981 18.5397 15.0495 18.6736 15.4615L20.8657 22.2082C21.1651 23.1295 20.1106 23.8956 19.3269 23.3262L13.5878 19.1565C13.2373 18.9019 12.7627 18.9019 12.4122 19.1565L6.67312 23.3262C5.88941 23.8956 4.83493 23.1295 5.13428 22.2082L7.32642 15.4615C7.46029 15.0495 7.31363 14.5981 6.96315 14.3435L1.22405 10.1738C0.440337 9.60436 0.843112 8.36475 1.81184 8.36475H8.90575C9.33897 8.36475 9.72293 8.08578 9.8568 7.67376L12.0489 0.927052Z"
                                        fill="#D0D0D0" />
                                </svg>
                            </p>
                        </div>
                    </div>
                    <textarea rows="8" class="w-full border-0 px-5 py-4 text-gray-700 bg-serv-services-bg rounded-xl mb-5" id="review" name="review" type="text" required="" placeholder="Tell us your experience working with Alex Jones" aria-label="Review"></textarea>
                    <div class="text-right mb-3">
                        <a href="index.php?auth" class="text-serv-bg text-lg font-medium py-3 px-12 my-2 rounded-xl text-center">
                            Cancel
                        </a>
                        <a href="success.php?auth" class="bg-serv-button text-white text-lg font-semibold py-3 px-12 my-2 rounded-xl text-center">
                            Send Review
                        </a>
                    </div>
                </div>
            </div>
        </section>

        <!-- footer -->
        <?php include 'components/footer.php' ?>
    </div>
    
    <?php include 'components/modals/login.php' ?>
    <?php include 'components/modals/register.php' ?>

    <?php include 'includes/scripts.php' ?>
    <script>
        function gallery() {
            return { 
                featured: 'https://source.unsplash.com/_SgRNwAVNKw/1600x900/', 
                active: 1,
                changeThumbnail: function (url,position) {
                    this.featured = url;
                    this.active = position;
                }
            }
        }
    </script>
</body>

</html>