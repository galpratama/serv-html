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
            <hr class="mx-8 lg:mx-16">

            <!-- breadcrumb -->
            <nav class="text-sm mt-8 mx-8 lg:mx-20" aria-label="Breadcrumb">
                <ol class="list-none p-0 inline-flex">
                    <li class="flex items-center">
                        <a href="#" class="text-gray-400">Programming & Tech</a>
                        <svg class="fill-current text-gray-400 w-3 h-3 mx-3" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512"><path d="M285.476 272.971L91.132 467.314c-9.373 9.373-24.569 9.373-33.941 0l-22.667-22.667c-9.357-9.357-9.375-24.522-.04-33.901L188.505 256 34.484 101.255c-9.335-9.379-9.317-24.544.04-33.901l22.667-22.667c9.373-9.373 24.569-9.373 33.941 0L285.475 239.03c9.373 9.372 9.373 24.568.001 33.941z"/></svg>
                    </li>
                    <li class="flex items-center">
                        <a href="#" class="font-medium">Website Developer</a>
                    </li>
                </ol>
            </nav>
            
        </div>

        <!-- details -->
        <section class="w-auth pt-6 pb-20 mx-auto lg:mx-12 px-4">
            <div class="grid md:grid-cols-12 gap-5">
                <main class="lg:col-span-8 md:col-span-12 p-4">
                    <!-- details heading -->
                    <div class="details-heading">
                        <h1 class="font-semibold text-2xl">I Will Design WordPress eCommerce Modules</h1>
                        <div class="my-3">
                            <?php include 'components/rating.php'; ?>
                        </div>
                    </div>
                    <div class="image-gallery bg-gray-100 p-3 rounded-lg my-4" x-data="gallery()" >
                        <img :src="featured" alt="" class="rounded-lg cursor-pointer w-100" data-lity>
                        <div class="flex overflow-x-scroll hide-scroll-bar dragscroll">
                            <div class="flex flex-nowrap mt-2">
                                <img :class="{'border-4 border-serv-button': active === 1}" @click="changeThumbnail('https://source.unsplash.com/_SgRNwAVNKw/1600x900/',1)" src="https://source.unsplash.com/_SgRNwAVNKw/250x160/" alt="" class="cursor-pointer rounded-lg inline-block w-36 mr-2">
                                <img :class="{'border-4 border-serv-button': active === 2}" @click="changeThumbnail('https://source.unsplash.com/GXNo-OJynTQ/1600x900/',2)" src="https://source.unsplash.com/GXNo-OJynTQ/250x160/" alt="" class="cursor-pointer rounded-lg inline-block w-36 mr-2">
                                <img :class="{'border-4 border-serv-button': active === 3}" @click="changeThumbnail('https://source.unsplash.com/x-HpilsdKEk/1600x900/',3)" src="https://source.unsplash.com/x-HpilsdKEk/250x160/" alt="" class="cursor-pointer rounded-lg inline-block w-36 mr-2">
                                <img :class="{'border-4 border-serv-button': active === 4}" @click="changeThumbnail('https://source.unsplash.com/hLit2zL-Dhk/1600x900/',4)" src="https://source.unsplash.com/hLit2zL-Dhk/250x160/" alt="" class="cursor-pointer rounded-lg inline-block w-36 mr-2">
                                <img :class="{'border-4 border-serv-button': active === 5}" @click="changeThumbnail('https://source.unsplash.com/i1VQZsU86ok/1600x900/',5)" src="https://source.unsplash.com/i1VQZsU86ok/250x160/" alt="" class="cursor-pointer rounded-lg inline-block w-36 mr-2">
                                <img :class="{'border-4 border-serv-button': active === 6}" @click="changeThumbnail('https://source.unsplash.com/iEiUITs149M/1600x900/',6)" src="https://source.unsplash.com/iEiUITs149M/250x160/" alt="" class="cursor-pointer rounded-lg inline-block w-36 mr-2">
                            </div>
                        </div>
                    </div>
                    <div class="content">
                        <div x-data="{ tab: window.location.hash ? window.location.hash.substring(1) : 'description' }" id="tab_wrapper">
                            <!-- The tabs navigation -->
                            <nav class="my-8" aria-label="navigation">
                                <a class="inline-block my-2 py-2 px-8 mr-2 font-medium rounded-xl" :class="{ 'bg-serv-bg text-white': tab === 'description','bg-serv-services-bg text-serv-bg' : tab !== 'description' }" @click.prevent="tab = 'description'; window.location.hash = 'description'" href="#">Description</a>
                                <a class="inline-block my-2 py-2 px-8 mr-2 font-medium rounded-xl" :class="{ 'bg-serv-bg text-white': tab === 'seller' ,'bg-serv-services-bg text-serv-bg' : tab !== 'seller' }" @click.prevent="tab = 'seller'; window.location.hash = 'seller'" href="#">About The Seller</a>
                                <a class="inline-block my-2 py-2 px-8 mr-2 font-medium rounded-xl" :class="{ 'bg-serv-bg text-white': tab === 'reviews' ,'bg-serv-services-bg text-serv-bg' : tab !== 'reviews' }" @click.prevent="tab = 'reviews'; window.location.hash = 'reviews'" href="#">Reviews</a>
                            </nav>

                            <!-- The tabs content -->
                            <div x-show="tab === 'description'" class="text-md leading-8">
                                <h2 class="text-xl font-semibold">About This <span class="text-serv-button">Services</span></h2>
                                <div class="content-description mt-4 mb-8">
                                    <p class="text-lg">
                                    I will design wordpress ecommerce modules, professional website for you using WordPress! With this Services
                                    </p>
                                </div>
                                <h3 class="text-lg font-semibold my-4">Why choose my Service?</h3>
                                <ul class="mb-4 list-check">
                                    <li class="pl-10 my-2">Fast delivery</li>
                                    <li class="pl-10 my-2">Wide plugin support within WordPress</li>
                                    <li class="pl-10 my-2">I can design logos and such for your website</li>
                                    <li class="pl-10 my-2">Easily Communicate with me</li>
                                </ul>
                                <p class="mb-4">
                                    If you only require modifications made to an existing WordPress website that you have, I have a different Services for that, which you can find on my profile!
                                </p>
                                <p class="font-medium mb-4">
                                    Contact me to get started!
                                </p>
                            </div>
                            <div x-show="tab === 'seller'">
                                <h2 class="text-xl font-semibold mb-4">About <span class="text-serv-button">Me</span></h2>
                                <p></p>
                            </div>
                            <div x-show="tab === 'reviews'">
                                <h2 class="text-xl font-semibold mb-4"><span class="text-serv-button">210</span> Happy Clients</h2>
                                <p></p>
                            </div>

                        </div>
                    </div>
                </main>
                <aside class="lg:col-span-4 md:col-span-12 md:pt-0 p-4">
                    Right section here
                </aside>
            </div>
        </section>
        <div class="pt-6 pb-20 mx-8 lg:mx-20">


            
        </div>

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