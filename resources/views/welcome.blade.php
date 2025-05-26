<!DOCTYPE html>
<html lang="">

<head>
    <!-- Basic Meta Tags -->
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />

    <!-- SEO Meta Tags -->
    <meta name="keywords"
        content="medical test preparation , AceMed Experts,  usmle , medical school , test preparation" />

    <!-- Title -->
    <title>AceMed Experts</title>

    <!-- Favicon -->
    <link rel="icon" href="assets/images/favicon.png" type="image/x-icon" />
    <link rel="icon" type="image/png" href="{{ asset('assets/images/favicon-96x96.png') }}" sizes="96x96" />

    <!-- bootstrap icons -->
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.11.3/font/bootstrap-icons.min.css"
        integrity="sha512-dPXYcDub/aeb08c63jRq/k6GaKccl256JQy/AnOq7CAnEZ9FzSL9wSbcZkMp4R26vBsMLFYH4kQ67/bbV8XaCQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- CSS Files -->
    <!-- plugins Stylesheet -->
    <link rel="stylesheet" href="{{ asset('assets/css/plugins.css') }}" />
    <!-- Main Stylesheet -->
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}" />
</head>

<body>
    <!-- ================= Preloader Start ================= -->
    <div class="preloader">
        <div class="preloader-inner">
            <img src="{{ asset('assets/images/logo.png') }}" class="object-fit-contain" height="50px" width="200px"
                alt="logo" />
            <span class="loader border-0"></span>
        </div>
    </div>
    <!-- ================= Preloader End ================= -->

    <!-- ================= Scroll to top start ================= -->
    <div class="progress-wrap">
        <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
            <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98"></path>
        </svg>
    </div>
    <!-- ================= Scroll to top end ================= -->

    <!-- ================= Header Section Start ================= -->
    <header class="header section sticky">
        <div class="container">
            <div class="header__main">
                <a class='header__logo' href='{{ url('/') }}'>
                    <img src="{{ asset('assets/images/logo.png') }}" class="object-fit-contain" height="50px"
                        width="200px" alt="logo" />
                </a>
                <div class="header__main-menu">
                    <nav>
                        <ul>
                            <li>
                                <a href='#aboutUs'> About Us </a>
                            </li>
                            <li>
                                <a href='#ourServices'> Our Services </a>
                            </li>
                            <li>
                                <a href='#whyChooseUs'> Why Choose us </a>
                            </li>
                        </ul>
                    </nav>
                </div>
                <div class="header__menu-btns d-none d-lg-block">
                    <a class='agx-btn' href='https://wa.me/+447577314340' target="_blank">
                        <span>Get a Quote</span>
                        <span>
                            <i class="fa-regular fa-arrow-up-right"></i>
                            <i class="fa-regular fa-arrow-up-right"></i>
                        </span>
                    </a>
                </div>
                <div class="header__menu-btns d-flex align-items-center d-lg-none gap-2">
                    <button class="hamburger-menu" type="button" data-bs-toggle="offcanvas"
                        data-bs-target="#offcanvasRight" aria-controls="offcanvasRight">
                        <i class="fa-regular fa-bars"></i>
                    </button>
                </div>
            </div>
        </div>
    </header>
    <!-- ================= Header Section End ================= -->

    <!-- ================= Sidebar area start here ================= -->
    <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasRight">
        <div class="offcanvas-header">
            <h5 class="offcanvas-title">
                <a class='header__logo' href='{{ url('/') }}'>
                    <img src="{{ asset('assets/images/logo.png') }}" class="object-fit-contain" height="50px"
                        width="200px" alt="logo" />
                </a>
            </h5>
            <button type="button" class="hamburger-menu-close" data-bs-dismiss="offcanvas" aria-label="Close">
                <i class="fa-duotone fa-regular fa-xmark"></i>
            </button>
        </div>
        <div class="offcanvas-menu"></div>
        <div class="offcanvas-body">...</div>
    </div>
    <!-- ================= Sidebar area end here ================= -->
    <main>
        <!-- ================= Hero Section Start ================= -->
        <section class="hero-four section position-relative movement-wrapper overflow-hidden"
            data-bg-src="./assets/images/hero/hero-four-bg.png">
            <img src="{{ asset('assets/images/hero/hero-four-shape-1.png') }}" alt="shapr"
                class="hero-four__shape-1" />
            <div class="container">
                <div class="row g-4 justify-content-between align-items-end">
                    <div class="col-lg-7 col-xl-7">
                        <div class="hero-four__content">
                            <h1 class="title move-anim" data-delay="1.5">
                                <span class="title-l1 text-decoration-underline primary-text-color">
                                    AceMed Experts
                                </span>
                                <span class="me-2">Quiz? Exam? Assignment? We’ll Handle
                                    It</span>
                                <svg xmlns="http://www.w3.org/2000/svg" width="320" height="88"
                                    viewBox="0 0 159 44" fill="none">
                                    <path class="logo-path"
                                        d="M154.083 3.93757C153.715 3.78995 153.068 3.68104 151.981 3.83492C151.549 3.89604 150.767 4.29281 149.63 5.50834C148.545 6.66803 147.368 8.32031 146.101 10.3616C144.284 13.2874 142.403 16.8094 140.431 20.5012C139.642 21.9796 138.838 23.4852 138.017 24.9907C135.196 30.1678 132.183 35.3415 129.054 38.9276C127.49 40.7204 125.792 42.2418 123.954 43.1374C122.053 44.0633 119.964 44.3307 117.849 43.5083C116.93 43.151 116.184 42.566 115.662 41.7766C115.155 41.0099 114.921 40.146 114.841 39.2977C114.687 37.6482 115.091 35.7335 115.697 33.8145C116.779 30.3943 118.746 26.2608 120.649 22.264C120.897 21.7434 121.144 21.2251 121.387 20.7109C123.563 16.1186 125.461 11.902 126.061 8.83127C126.366 7.26842 126.251 6.38451 126.032 5.9551C125.92 5.73703 125.673 5.37757 124.501 5.32607C124.067 5.30701 123.354 5.51149 122.295 6.3661C121.26 7.20078 120.117 8.47867 118.873 10.1445C116.539 13.2711 114.086 17.4325 111.517 21.7912C111.347 22.0792 111.177 22.368 111.006 22.6575C108.289 27.264 105.446 32.0213 102.597 35.6247C101.171 37.4284 99.6833 39.0226 98.1403 40.1798C96.6066 41.3299 94.8577 42.1681 92.9506 42.1681C91.9988 42.1681 91.0369 41.9499 90.236 41.3428C89.4271 40.7298 89.004 39.8884 88.811 39.0575C88.4533 37.5178 88.795 35.6247 89.3124 33.7997C90.2274 30.5726 92.0436 26.4521 93.844 22.3676C94.1352 21.707 94.426 21.0472 94.7125 20.3924C96.8312 15.5498 98.7116 10.982 99.261 7.66088C99.541 5.9677 99.4024 4.9824 99.1397 4.49236C98.9986 4.22908 98.7087 3.85436 97.4702 3.85436C96.4941 3.85436 95.3457 4.24397 93.996 5.16278C92.6499 6.07924 91.2264 7.43956 89.742 9.16853C86.7696 12.6309 83.7797 17.2995 80.8585 22.0925C80.1908 23.188 79.5257 24.2919 78.8659 25.3869C76.6777 29.0187 74.548 32.5533 72.5774 35.3636C71.2935 37.1946 70.0115 38.8156 68.7545 39.9965C67.5682 41.111 66.0581 42.1681 64.327 42.1681C63.4216 42.1681 62.4949 41.8709 61.8154 41.1075C61.1973 40.413 60.9933 39.5621 60.9338 38.8599C60.8172 37.4831 61.1884 35.7561 61.6989 34.0143C62.5006 31.2788 63.8612 27.8406 65.2455 24.3425C65.66 23.2949 66.0767 22.242 66.4811 21.201C68.2836 16.5612 69.8414 12.1635 70.2551 8.96817C70.4662 7.33815 70.3279 6.3597 70.0768 5.86269C69.9742 5.65968 69.8659 5.56162 69.7493 5.49705C69.6174 5.424 69.3516 5.32796 68.8465 5.32796C66.8323 5.32796 64.5168 6.91994 61.8309 10.3467C59.2336 13.6606 56.7152 18.1283 54.1582 22.76C53.9832 23.0771 53.8079 23.3951 53.6324 23.7135C51.2855 27.9705 48.8998 32.2981 46.4757 35.6222C45.1695 37.4133 43.7862 39.0078 42.311 40.1688C40.8358 41.3298 39.1253 42.1681 37.2098 42.1681C36.2825 42.1681 35.3337 41.9698 34.5367 41.3927C33.718 40.8 33.2863 39.9726 33.0974 39.1449C32.7528 37.6348 33.1424 35.8038 33.6864 34.0833C34.6135 31.1515 36.3818 27.4284 38.1489 23.7078C38.5205 22.9254 38.892 22.143 39.2557 21.3682C41.4189 16.7594 43.303 12.4185 43.8155 9.23158C44.0742 7.62294 43.9173 6.67137 43.6282 6.16927C43.4324 5.82905 43.0081 5.39668 41.6276 5.32534C40.178 5.25042 38.2972 6.24279 35.8962 8.79444C33.5789 11.2571 31.1806 14.7326 28.6703 18.6312C27.8401 19.9204 26.9959 21.2591 26.1424 22.6123C24.4568 25.2849 22.7355 28.0142 21.0163 30.5319C18.4269 34.3239 15.7018 37.8531 12.854 40.2407C10.517 42.2002 7.96262 43.2762 5.62102 43.1938C3.13866 43.1064 1.09819 41.696 0.328798 39.2572C-0.388098 36.9849 0.0779203 34.1033 1.6231 30.9215C3.18816 27.6988 5.95914 23.9518 10.2425 19.7971C10.997 19.0653 12.2162 19.0692 12.9657 19.8059C13.7152 20.5426 13.7111 21.7331 12.9566 22.4649C8.88421 26.415 6.42274 29.815 5.10289 32.5327C3.76317 35.2914 3.69183 37.1438 4.00932 38.1502C4.27432 38.9902 4.84 39.4034 5.75974 39.4358C6.82024 39.4731 8.46393 38.965 10.3451 37.3878C12.7701 35.3546 15.2547 32.1909 17.812 28.4458C19.495 25.9812 21.1485 23.359 22.8097 20.7246C23.6726 19.3561 24.5377 17.9843 25.41 16.6297C27.9209 12.7302 30.4813 8.99107 33.0603 6.25025C35.5556 3.59843 38.5088 1.39849 41.8311 1.57018C44.1114 1.68803 45.962 2.5488 46.9854 4.32673C47.9157 5.94279 47.9226 7.93438 47.6201 9.81497C47.0103 13.6065 44.8719 18.4284 42.7567 22.9349C42.3679 23.7633 41.9793 24.5823 41.5973 25.3873C39.8321 29.1072 38.2086 32.5284 37.3662 35.1927C36.8368 36.8668 36.75 37.8608 36.8564 38.327C36.8609 38.3468 36.8653 38.3633 36.8693 38.3771C36.9292 38.3912 37.0364 38.4076 37.2098 38.4076C37.9308 38.4076 38.8096 38.0946 39.8942 37.241C40.9789 36.3873 42.1261 35.1036 43.3386 33.441C45.6159 30.3183 47.8907 26.1931 50.2797 21.8611C50.442 21.5668 50.6048 21.2716 50.7682 20.9757C53.2957 16.3973 55.9559 11.655 58.7726 8.06133C61.5008 4.5806 64.8347 1.56756 68.8465 1.56756C69.8479 1.56756 70.8062 1.75933 71.6489 2.22594C72.507 2.70101 73.124 3.39444 73.5305 4.19878C74.2974 5.71646 74.3121 7.61614 74.0759 9.43989C73.5952 13.1521 71.8575 17.9643 70.082 22.5347C69.649 23.6492 69.2131 24.7511 68.7869 25.8284C67.4187 29.2871 66.1507 32.4924 65.4015 35.0489C64.9659 36.5352 64.7714 37.5988 64.763 38.2708C65.058 38.1271 65.494 37.8413 66.0844 37.2866C67.0577 36.3722 68.165 35 69.3997 33.2391C71.2882 30.5459 73.3216 27.1717 75.4937 23.567C76.1656 22.4521 76.8508 21.3151 77.549 20.1695C80.4656 15.3841 83.5958 10.4742 86.7906 6.75281C88.39 4.88988 90.0619 3.25694 91.7934 2.07811C93.5215 0.901646 95.4332 0.093953 97.4702 0.093953C99.7167 0.093953 101.57 0.916541 102.552 2.74854C103.412 4.35378 103.377 6.36173 103.063 8.26046C102.424 12.1232 100.326 17.1338 98.2541 21.8696C97.9571 22.5486 97.6602 23.2226 97.3666 23.8892C95.5521 28.0094 93.8623 31.8466 93.024 34.803C92.523 36.5699 92.4377 37.67 92.5668 38.2257C92.5837 38.2987 92.6005 38.345 92.6127 38.3724C92.6622 38.387 92.7659 38.4076 92.9506 38.4076C93.68 38.4076 94.6148 38.0821 95.7945 37.1975C96.9648 36.3198 98.2197 35.008 99.5486 33.3269C102.21 29.9608 104.924 25.4337 107.669 20.7806C107.851 20.4716 108.034 20.1619 108.216 19.852C110.745 15.5605 113.298 11.2278 115.762 7.92891C117.083 6.15954 118.446 4.59339 119.841 3.4676C121.211 2.36175 122.85 1.48935 124.674 1.56946C126.809 1.66325 128.571 2.49987 129.479 4.27748C130.278 5.84374 130.192 7.75511 129.844 9.53593C129.137 13.1525 127.001 17.8169 124.883 22.2896C124.636 22.8094 124.39 23.3276 124.145 23.8429C122.219 27.892 120.375 31.7675 119.377 34.9237C118.81 36.7165 118.593 38.0571 118.677 38.9555C118.716 39.3811 118.817 39.6143 118.897 39.7363C118.963 39.8357 119.059 39.9312 119.274 40.0146C120.184 40.3688 121.121 40.3149 122.234 39.7726C123.409 39.2001 124.711 38.1066 126.123 36.4889C128.945 33.2539 131.784 28.4241 134.618 23.2243C135.397 21.7932 136.177 20.3329 136.954 18.8794C138.95 15.1414 140.922 11.4484 142.807 8.41223C144.121 6.2964 145.451 4.40057 146.787 2.97229C148.07 1.59985 149.624 0.368801 151.428 0.113398C152.942 -0.100914 154.34 -0.0254605 155.549 0.460232C156.803 0.964433 157.692 1.84698 158.244 2.93688C159.267 4.95583 159.101 7.61371 158.629 10.059C157.783 14.4426 155.612 19.667 154.102 23.3024C153.883 23.8293 153.678 24.3227 153.493 24.7754C153.098 25.7398 151.978 26.2094 150.99 25.8244C150.003 25.4393 149.522 24.3454 149.916 23.381C150.114 22.8969 150.328 22.3822 150.551 21.8431C152.078 18.1603 154.077 13.34 154.844 9.36277C155.296 7.01899 155.216 5.44031 154.792 4.60407C154.621 4.26637 154.404 4.06667 154.083 3.93757ZM92.6258 38.3983C92.6297 38.4029 92.6311 38.4058 92.6311 38.4058C92.6311 38.4058 92.629 38.4037 92.6258 38.3983Z" />
                                    <path class="logo-fill"
                                        d="M154.083 3.93757C153.715 3.78995 153.068 3.68104 151.981 3.83492C151.549 3.89604 150.767 4.29281 149.63 5.50834C148.545 6.66803 147.368 8.32031 146.101 10.3616C144.284 13.2874 142.403 16.8094 140.431 20.5012C139.642 21.9796 138.838 23.4852 138.017 24.9907C135.196 30.1678 132.183 35.3415 129.054 38.9276C127.49 40.7204 125.792 42.2418 123.954 43.1374C122.053 44.0633 119.964 44.3307 117.849 43.5083C116.93 43.151 116.184 42.566 115.662 41.7766C115.155 41.0099 114.921 40.146 114.841 39.2977C114.687 37.6482 115.091 35.7335 115.697 33.8145C116.779 30.3943 118.746 26.2608 120.649 22.264C120.897 21.7434 121.144 21.2251 121.387 20.7109C123.563 16.1186 125.461 11.902 126.061 8.83127C126.366 7.26842 126.251 6.38451 126.032 5.9551C125.92 5.73703 125.673 5.37757 124.501 5.32607C124.067 5.30701 123.354 5.51149 122.295 6.3661C121.26 7.20078 120.117 8.47867 118.873 10.1445C116.539 13.2711 114.086 17.4325 111.517 21.7912C111.347 22.0792 111.177 22.368 111.006 22.6575C108.289 27.264 105.446 32.0213 102.597 35.6247C101.171 37.4284 99.6833 39.0226 98.1403 40.1798C96.6066 41.3299 94.8577 42.1681 92.9506 42.1681C91.9988 42.1681 91.0369 41.9499 90.236 41.3428C89.4271 40.7298 89.004 39.8884 88.811 39.0575C88.4533 37.5178 88.795 35.6247 89.3124 33.7997C90.2274 30.5726 92.0436 26.4521 93.844 22.3676C94.1352 21.707 94.426 21.0472 94.7125 20.3924C96.8312 15.5498 98.7116 10.982 99.261 7.66088C99.541 5.9677 99.4024 4.9824 99.1397 4.49236C98.9986 4.22908 98.7087 3.85436 97.4702 3.85436C96.4941 3.85436 95.3457 4.24397 93.996 5.16278C92.6499 6.07924 91.2264 7.43956 89.742 9.16853C86.7696 12.6309 83.7797 17.2995 80.8585 22.0925C80.1908 23.188 79.5257 24.2919 78.8659 25.3869C76.6777 29.0187 74.548 32.5533 72.5774 35.3636C71.2935 37.1946 70.0115 38.8156 68.7545 39.9965C67.5682 41.111 66.0581 42.1681 64.327 42.1681C63.4216 42.1681 62.4949 41.8709 61.8154 41.1075C61.1973 40.413 60.9933 39.5621 60.9338 38.8599C60.8172 37.4831 61.1884 35.7561 61.6989 34.0143C62.5006 31.2788 63.8612 27.8406 65.2455 24.3425C65.66 23.2949 66.0767 22.242 66.4811 21.201C68.2836 16.5612 69.8414 12.1635 70.2551 8.96817C70.4662 7.33815 70.3279 6.3597 70.0768 5.86269C69.9742 5.65968 69.8659 5.56162 69.7493 5.49705C69.6174 5.424 69.3516 5.32796 68.8465 5.32796C66.8323 5.32796 64.5168 6.91994 61.8309 10.3467C59.2336 13.6606 56.7152 18.1283 54.1582 22.76C53.9832 23.0771 53.8079 23.3951 53.6324 23.7135C51.2855 27.9705 48.8998 32.2981 46.4757 35.6222C45.1695 37.4133 43.7862 39.0078 42.311 40.1688C40.8358 41.3298 39.1253 42.1681 37.2098 42.1681C36.2825 42.1681 35.3337 41.9698 34.5367 41.3927C33.718 40.8 33.2863 39.9726 33.0974 39.1449C32.7528 37.6348 33.1424 35.8038 33.6864 34.0833C34.6135 31.1515 36.3818 27.4284 38.1489 23.7078C38.5205 22.9254 38.892 22.143 39.2557 21.3682C41.4189 16.7594 43.303 12.4185 43.8155 9.23158C44.0742 7.62294 43.9173 6.67137 43.6282 6.16927C43.4324 5.82905 43.0081 5.39668 41.6276 5.32534C40.178 5.25042 38.2972 6.24279 35.8962 8.79444C33.5789 11.2571 31.1806 14.7326 28.6703 18.6312C27.8401 19.9204 26.9959 21.2591 26.1424 22.6123C24.4568 25.2849 22.7355 28.0142 21.0163 30.5319C18.4269 34.3239 15.7018 37.8531 12.854 40.2407C10.517 42.2002 7.96262 43.2762 5.62102 43.1938C3.13866 43.1064 1.09819 41.696 0.328798 39.2572C-0.388098 36.9849 0.0779203 34.1033 1.6231 30.9215C3.18816 27.6988 5.95914 23.9518 10.2425 19.7971C10.997 19.0653 12.2162 19.0692 12.9657 19.8059C13.7152 20.5426 13.7111 21.7331 12.9566 22.4649C8.88421 26.415 6.42274 29.815 5.10289 32.5327C3.76317 35.2914 3.69183 37.1438 4.00932 38.1502C4.27432 38.9902 4.84 39.4034 5.75974 39.4358C6.82024 39.4731 8.46393 38.965 10.3451 37.3878C12.7701 35.3546 15.2547 32.1909 17.812 28.4458C19.495 25.9812 21.1485 23.359 22.8097 20.7246C23.6726 19.3561 24.5377 17.9843 25.41 16.6297C27.9209 12.7302 30.4813 8.99107 33.0603 6.25025C35.5556 3.59843 38.5088 1.39849 41.8311 1.57018C44.1114 1.68803 45.962 2.5488 46.9854 4.32673C47.9157 5.94279 47.9226 7.93438 47.6201 9.81497C47.0103 13.6065 44.8719 18.4284 42.7567 22.9349C42.3679 23.7633 41.9793 24.5823 41.5973 25.3873C39.8321 29.1072 38.2086 32.5284 37.3662 35.1927C36.8368 36.8668 36.75 37.8608 36.8564 38.327C36.8609 38.3468 36.8653 38.3633 36.8693 38.3771C36.9292 38.3912 37.0364 38.4076 37.2098 38.4076C37.9308 38.4076 38.8096 38.0946 39.8942 37.241C40.9789 36.3873 42.1261 35.1036 43.3386 33.441C45.6159 30.3183 47.8907 26.1931 50.2797 21.8611C50.442 21.5668 50.6048 21.2716 50.7682 20.9757C53.2957 16.3973 55.9559 11.655 58.7726 8.06133C61.5008 4.5806 64.8347 1.56756 68.8465 1.56756C69.8479 1.56756 70.8062 1.75933 71.6489 2.22594C72.507 2.70101 73.124 3.39444 73.5305 4.19878C74.2974 5.71646 74.3121 7.61614 74.0759 9.43989C73.5952 13.1521 71.8575 17.9643 70.082 22.5347C69.649 23.6492 69.2131 24.7511 68.7869 25.8284C67.4187 29.2871 66.1507 32.4924 65.4015 35.0489C64.9659 36.5352 64.7714 37.5988 64.763 38.2708C65.058 38.1271 65.494 37.8413 66.0844 37.2866C67.0577 36.3722 68.165 35 69.3997 33.2391C71.2882 30.5459 73.3216 27.1717 75.4937 23.567C76.1656 22.4521 76.8508 21.3151 77.549 20.1695C80.4656 15.3841 83.5958 10.4742 86.7906 6.75281C88.39 4.88988 90.0619 3.25694 91.7934 2.07811C93.5215 0.901646 95.4332 0.093953 97.4702 0.093953C99.7167 0.093953 101.57 0.916541 102.552 2.74854C103.412 4.35378 103.377 6.36173 103.063 8.26046C102.424 12.1232 100.326 17.1338 98.2541 21.8696C97.9571 22.5486 97.6602 23.2226 97.3666 23.8892C95.5521 28.0094  93.8623 31.8466 93.024 34.803C92.523 36.5699 92.4377 37.67 92.5668 38.2257C92.5837 38.2987 92.6005 38.345 92.6127 38.3724C92.6622 38.387 92.7659 38.4076 92.9506 38.4076C93.68 38.4076 94.6148 38.0821 95.7945 37.1975C96.9648 36.3198 98.2197 35.008 99.5486 33.3269C102.21 29.9608 104.924 25.4337 107.669 20.7806C107.851 20.4716 108.034 20.1619 108.216 19.852C110.745 15.5605 113.298 11.2278 115.762 7.92891C117.083 6.15954 118.446 4.59339 119.841 3.4676C121.211 2.36175 122.85 1.48935 124.674 1.56946C126.809 1.66325 128.571 2.49987 129.479 4.27748C130.278 5.84374 130.192 7.75511 129.844 9.53593C129.137 13.1525 127.001 17.8169 124.883 22.2896C124.636 22.8094 124.39 23.3276 124.145 23.8429C122.219 27.892 120.375 31.7675 119.377 34.9237C118.81 36.7165 118.593 38.0571 118.677 38.9555C118.716 39.3811 118.817 39.6143 118.897 39.7363C118.963 39.8357 119.059 39.9312 119.274 40.0146C120.184 40.3688 121.121 40.3149 122.234 39.7726C123.409 39.2001 124.711 38.1066 126.123 36.4889C128.945 33.2539 131.784 28.4241 134.618 23.2243C135.397 21.7932 136.177 20.3329 136.954 18.8794C138.95 15.1414 140.922 11.4484 142.807 8.41223C144.121 6.2964 145.451 4.40057 146.787 2.97229C148.07 1.59985 149.624 0.368801 151.428 0.113398C152.942 -0.100914 154.34 -0.0254605 155.549 0.460232C156.803 0.964433 157.692 1.84698 158.244 2.93688C159.267 4.95583 159.101 7.61371 158.629 10.059C157.783 14.4426 155.612 19.667 154.102 23.3024C153.883 23.8293 153.678 24.3227 153.493 24.7754C153.098 25.7398 151.978 26.2094 150.99 25.8244C150.003 25.4393 149.522 24.3454 149.916 23.381C150.114 22.8969 150.328 22.3822 150.551 21.8431C152.078 18.1603 154.077 13.34 154.844 9.36277C155.296 7.01899 155.216 5.44031 154.792 4.60407C154.621 4.26637 154.404 4.06667 154.083 3.93757ZM92.6258 38.3983C92.6297 38.4029 92.6311 38.4058 92.6311 38.4058C92.6311 38.4058 92.629 38.4037 92.6258 38.3983Z" />
                                </svg>
                            </h1>
                            <p class="move-anim" data-delay="1.6">
                                We get it, medical school is overwhelming. Between lectures, clinicals, exams, and zero
                                time for yourself, staying ahead can feel impossible.
                                That’s where AceMed Experts steps in.
                            </p>
                            <div class="btn-group">
                                <a class='agx-btn v5' href='https://wa.me/+447577314340'>
                                    <span>Get Started</span>
                                    <span>
                                        <i class="fa-regular fa-arrow-up-right"></i>
                                        <i class="fa-regular fa-arrow-up-right"></i>
                                    </span>
                                </a>
                                <a class='agx-btn v5' href='https://wa.me/+447577314340'>
                                    <span>Schedule Call</span>
                                    <span>
                                        <i class="fa-regular fa-arrow-up-right"></i>
                                        <i class="fa-regular fa-arrow-up-right"></i>
                                    </span>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-5 col-xl-5">
                        <div class="hero-four__thumb position-relative">
                            <div class="position-absolute bottom-100 end-50 money-back-guarantee"
                                style="width: 160px;height:160px">
                                <img src="{{ asset('assets/images/money-back-guarantee.png') }}" alt=""
                                    class="">
                            </div>
                            <div class="circle-shape">
                                <svg xmlns="http://www.w3.org/2000/svg" width="41" height="42"
                                    viewBox="0 0 41 42" fill="none">
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                        d="M14.3251 21L0 25.6734L1.1752 29.305L15.5043 24.6401L6.65377 36.8663L9.73272 39.1115L18.5915 26.8898L18.5961 41.9988L22.4028 42L22.4074 26.8898L31.2655 39.1105L34.3458 36.8673L25.4946 24.6401L39.8226 29.3046L41 25.6738L26.6738 21L40.9989 16.3266L39.8237 12.695L25.4946 17.3599L34.3437 5.13564L34.3451 5.1337L31.2662 2.88854L22.4074 15.1102L22.4028 0.00118087L18.5961 0L18.5915 15.1102L9.73341 2.88949L6.65308 5.13275L15.5043 17.3599L1.17697 12.6956L0 16.3266L14.3251 21Z"
                                        fill="currentColor" />
                                </svg>
                            </div>
                            <div class="main-thumb">
                                <div class="rop-shape">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="88" height="80"
                                        viewBox="0 0 88 80" fill="none">
                                        <path
                                            d="M8.56129 1C1.86532 9.34568 -6.74619 29.8889 14.3002 45.2963C36.3389 61.4301 61.6508 51.0741 67.8684 42.4074C70.7381 38.4074 74.7557 24.4963 52.5634 22.1852C24.823 19.2963 5.81881 36.7031 10.4745 51.0741C14.5 63.5 32.6737 64 36.5 64C40.3263 64 77 62 86.9998 79"
                                            stroke="url(#paint0_linear_13427_3502)" />
                                        <defs>
                                            <linearGradient id="paint0_linear_13427_3502" x1="1"
                                                y1="1" x2="87" y2="85"
                                                gradientUnits="userSpaceOnUse">
                                                <stop offset="1" stop-color="#2c94ff" />
                                                <stop offset="1" stop-color="white" stop-opacity="0" />
                                            </linearGradient>
                                        </defs>
                                    </svg>
                                </div>
                                <div class="img-wrapper position-relative">
                                    <img src="{{ asset('assets/images/female-doc.png') }}" alt="hero-main-thumb" />
                                </div>
                                <div class="thumb-content move-item">
                                    <p class="h6">Success Rate</p>
                                    <h6 class="price h5">95%+ Achieved </h6>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- ================= Hero Section End ================= -->

        <!-- ================= About Section Start ================= -->
        <section id="about-us4" class="about-us4 section bg-color-1 section-padding-top-bottom overflow-hidden">
            <div id="aboutUs" class="container">
                <div class="row g-4 justify-content-between">
                    <div class="col-lg-6 col-xl-5">
                        <div class="about-us4__thumb gsap-pop" data-direction="left">
                            <img src="{{ asset('assets/images/girl-holding-degree.JPG') }}" alt="about-thumb"
                                class="w-100" />
                            <div class="about-us4__statistic bg-color-1">
                                <h2 class="info-count counter-item primary-text-color ">
                                    <span class="odometer" data-odometer-final="4">0</span>
                                    <em class="d-inline-block fst-normal">+</em>
                                </h2>
                                <p>Years of experience</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-xl-6">
                        <div class="about-us4__content">
                            <div class="section-header">
                                <span class="section-sub-title no-icon">At AceMed Experts,</span>
                                <h2 class="section-title move-anim primary-text-color ">
                                    What We Do
                                </h2>
                            </div>
                            <div class="content-info d-flex flex-column gap-5">
                                <p class="m-0">
                                    We provide high-impact academic support designed to help you:
                                </p>
                                <ul>
                                    <li class="mb-2"> <i class="bi bi-check-circle me-1 text-success"></i> Score
                                        90%+ in all your medical subjects </li>
                                    <li class="mb-2"> <i class="bi bi-check-circle me-1 text-success"></i> Ace your
                                        assignments, quizzes, midterms, and final exams</li>
                                    <li class="mb-2"> <i class="bi bi-check-circle me-1 text-success"></i> Get
                                        professional assistance to solve your exams with
                                        precision</li>
                                    <li class="mb-2"> <i class="bi bi-check-circle me-1 text-success"></i> Save
                                        time, reduce stress, and boost your academic confidence
                                    </li>
                                </ul>
                                <div class="btn-wrapper d-flex justify-content-between align-items-end">
                                    <a class='agx-btn v5 w-max' href='https://wa.me/+447577314340'>
                                        <span>Talk to Us</span>
                                        <span>
                                            <i class="fa-regular fa-arrow-up-right"></i>
                                            <i class="fa-regular fa-arrow-up-right"></i>
                                        </span>
                                    </a>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="145" height="150"
                                        viewBox="0 0 145 150" fill="none">
                                        <path opacity="0.1" fill-rule="evenodd" clip-rule="evenodd"
                                            d="M50.9631 75L1 91.4681L5.09886 104.265L55.0759 87.827L24.2071 130.91L34.9458 138.821L65.8434 95.7545L65.8596 148.996L79.1365 149L79.1527 95.7545L110.048 138.818L120.791 130.913L89.9202 87.827L139.893 104.264L144 91.4694L94.033 75L143.996 58.5319L139.897 45.7349L89.9202 62.173L120.784 19.097L120.789 19.0902L110.05 11.1787L79.1527 54.2455L79.1365 1.00416L65.8596 1L65.8434 54.2455L34.9482 11.182L24.2046 19.0868L55.0759 62.173L5.10503 45.7369L1 58.5319L50.9631 75Z"
                                            stroke="white" />
                                    </svg>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- ================= About Section End ================= -->

        <!-- ================= Marquee Section Start ================= -->
        <section class="marquee2 section bg-color-primary overflow-hidden gsap-pop" data-direction="bottom-right">
            <div class="container">
                <div class="swiper marquee__slider-common2">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide marquee-item">
                            <h5 class="primary-text-color">Anatomy</h5>
                        </div>
                        <div class="swiper-slide marquee-item">
                            <h5 class="primary-text-color">Pathology</h5>
                        </div>
                        <div class="swiper-slide marquee-item">
                            <h5 class="primary-text-color">Pharmacology</h5>
                        </div>
                        <div class="swiper-slide marquee-item">
                            <h5 class="primary-text-color">Internal Medicine</h5>
                        </div>
                        <div class="swiper-slide marquee-item">
                            <h5 class="primary-text-color">Physiology</h5>
                        </div>
                        <div class="swiper-slide marquee-item">
                            <h5 class="primary-text-color">Microbiology</h5>
                        </div>
                        <div class="swiper-slide marquee-item">
                            <h5 class="primary-text-color">Anatomy</h5>
                        </div>
                        <div class="swiper-slide marquee-item">
                            <h5 class="primary-text-color">Pathology</h5>
                        </div>
                        <div class="swiper-slide marquee-item">
                            <h5 class="primary-text-color">Pharmacology</h5>
                        </div>
                        <div class="swiper-slide marquee-item">
                            <h5 class="primary-text-color">Internal Medicine</h5>
                        </div>
                        <div class="swiper-slide marquee-item">
                            <h5 class="primary-text-color">Physiology</h5>
                        </div>
                        <div class="swiper-slide marquee-item">
                            <h5 class="primary-text-color">Microbiology</h5>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- ================= Marquee Section End ================= -->

        <!-- ================= Service Section Start ================= -->
        <section class="service4 bg-color-1 section-padding-top-bottom">
            <div id="ourServices" class="container">
                <div class="row section-header justify-content-between align-items-start row-padding-bottom">
                    <div class="col-lg-6 col-xl-6">
                        <h2 class="section-title move-anim">
                            Services you get from
                            <span class="primary-text-color">AceMed Experts</span>
                        </h2>
                    </div>
                    <div class="col-lg-6 col-xl-5">
                        <p class="ps-lg-3 ps-xxl-5 move-anim">
                            No fluff, just results. We handle your toughest academic challenges so you can breathe
                            easy.
                        </p>
                    </div>
                </div>
                <div class="row gx-4 gy-4 g-xxl-5 overflow-hidden justify-content-between">
                    <div class="col-lg-6 col-xl-7">
                        <div class="service4__thumb-container gsap-pop" data-direction="left">
                            <div class="service4__thumb bg-color-2 active">
                                <p>
                                    Struggling with daily quizzes or weekly assignments? Our experts solve them for you
                                    with top accuracy and guaranteed privacy.
                                </p>
                                <div class="thumb-wrapper overflow-hidden">
                                    <img src="{{ asset('assets/images/girl-looking-towards-camera.png') }}"
                                        alt="service-thumb" class="w-100 img-fluid" />
                                </div>
                            </div>
                            <div class="service4__thumb bg-color-2">
                                <p>
                                    We take care of your midterms and finals — fully handled by verified professionals
                                    to get you 90%+ results.
                                </p>
                                <div class="thumb-wrapper overflow-hidden">
                                    <img src="{{ asset('assets/images/girl-smiling-looking-towards-camera.png') }}"
                                        alt="service-thumb" class="w-100" />
                                </div>
                            </div>
                            <div class="service4__thumb bg-color-2">
                                <p>
                                    Deadline in 2 hours? Quiz due tonight? We’re online 24/7 for urgent academic help —
                                    fast and reliable.
                                </p>
                                <div class="thumb-wrapper overflow-hidden">
                                    <img src="{{ asset('assets/images/girl-sitting-before-laptop.png') }}"
                                        alt="service-thumb" class="w-100" />
                                </div>
                            </div>
                            <div class="service4__thumb bg-color-2">
                                <p>
                                    Everything is 100% private and secure. Your identity stays protected, always.
                                </p>
                                <div class="thumb-wrapper">
                                    <img src="{{ asset('assets/images/secure.png') }}" alt="service-thumb"
                                        class="w-100" />
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-xl-5">
                        <div class="service4__content gsap-pop" data-direction="right">
                            <div class="service4__list">
                                <div class="list-item gsap-pop">
                                    <h4 class="service-title d-flex align-items-center justify-content-between">
                                        Quiz & Assignment Help
                                    </h4>
                                </div>
                                <div class="list-item gsap-pop">
                                    <h4 class="service-title">Midterm & Final Exam Solutions</h4>
                                </div>
                                <div class="list-item gsap-pop">
                                    <h4 class="service-title">Last-Minute Help</h4>
                                </div>
                                <div class="list-item gsap-pop">
                                    <h4 class="service-title">Confidential & Safe</h4>
                                </div>
                            </div>
                            <a class='agx-btn v5 service-btn' href='https://wa.me/+447577314340'>
                                <span>Explore All</span>
                                <span>
                                    <i class="fa-regular fa-arrow-up-right"></i>
                                    <i class="fa-regular fa-arrow-up-right"></i>
                                </span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- ================= Service Section End ================= -->

        <!-- ================= Portfolio Section Start ================= -->
        <section class="portfolio4  section bg-color-2 section-padding-top-bottom">
            <div id="whyChooseUs" class="container">
                <div class="row g-4 section-header justify-content-between align-items-start row-padding-bottom">
                    <div class="col-md-12">
                        <h2 class="section-title move-anim">
                            Why Choose
                            <span class="primary-text-color">
                                AceMed Experts?
                            </span>
                        </h2>
                    </div>
                </div>
                <div class="row g-4 agx_screenfix_right">
                    <div class="col-lg-6 col-xl-5">
                        <div class="swiper portfolio4__slider active gsap-pop" data-direction="left">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                    <div class="portfolio4__box">
                                        <div class="portfolio-thumb">
                                            <img src="{{ asset('assets/images/guarantee.png') }}"
                                                alt="portfolio-active" class="w-100 d-block" />
                                        </div>
                                        <div class="portfolio-content">
                                            <h4 class="title"> 95%+ Grade Guarantee</h4>
                                            <p>
                                                We don’t just promise — we deliver. Our students consistently score 90%
                                                or higher in exams, quizzes, and assignments.
                                            </p>
                                            <a class='agx-btn v5' href='https://wa.me/+447577314340'>
                                                <span>Explore More</span>
                                                <span>
                                                    <i class="fa-regular fa-arrow-up-right"></i>
                                                    <i class="fa-regular fa-arrow-up-right"></i>
                                                </span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="portfolio4__box">
                                        <div class="portfolio-thumb">
                                            <img src="{{ asset('assets/images/experts.png') }}"
                                                alt="portfolio-active" class="w-100 d-block" />
                                        </div>
                                        <div class="portfolio-content">
                                            <h4 class="title">Verified Medical Experts</h4>
                                            <p>
                                                Every tutor is a qualified medical professional, carefully vetted to
                                                help you master complex topics with confidence.
                                            </p>
                                            <a class='agx-btn v5' href='https://wa.me/+447577314340'>
                                                <span>Explore More</span>
                                                <span>
                                                    <i class="fa-regular fa-arrow-up-right"></i>
                                                    <i class="fa-regular fa-arrow-up-right"></i>
                                                </span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="portfolio4__box">
                                        <div class="portfolio-thumb">
                                            <img src="{{ asset('assets/images/laptop.png') }}" alt="portfolio-active"
                                                class="w-100 d-block" />
                                        </div>
                                        <div class="portfolio-content">
                                            <h4 class="title">Instant Response via WhatsApp & Email</h4>
                                            <p>
                                                Got an urgent exam or last-minute doubt? Message us anytime — we reply
                                                within minutes, 24/7.
                                            </p>
                                            <a class='agx-btn v5' href='https://wa.me/+447577314340'>
                                                <span>Explore More</span>
                                                <span>
                                                    <i class="fa-regular fa-arrow-up-right"></i>
                                                    <i class="fa-regular fa-arrow-up-right"></i>
                                                </span>
                                            </a>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-xl-7">
                        <div class="swiper portfolio4__slider gsap-pop" data-direction="right">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                    <img src="{{ asset('assets/images/experts.png') }}" alt="portfolio-thumb" />
                                </div>
                                <div class="swiper-slide">
                                    <img src="{{ asset('assets/images/laptop.png') }}" alt="portfolio-thumb" />
                                </div>
                                <div class="swiper-slide">
                                    <img src="{{ asset('assets/images/guarantee.png') }}" alt="portfolio-thumb" />
                                </div>


                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12">
                                <div class="portfolio4__slider-footer">
                                    <div class="portfolio4__navigation">
                                        <div class="btn-prev">
                                            <i class="fa-regular fa-arrow-left"></i>
                                        </div>
                                        <div class="btn-next">
                                            <i class="fa-regular fa-arrow-right"></i>
                                        </div>
                                    </div>
                                    <div class="portfolio4__pagination"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- ================= Portfolio Section End ================= -->

        <!-- ================= Team Section Start ================= -->
        <section id="team3" class="team3 section bg-color-1 section-padding-top-bottom">
            <div class="container">
                <div class="row g-4 section-header align-items-start row-padding-bottom">
                    <div class="col-md-8 col-lg-8">
                        <h2 class="section-title move-anim">
                            Real Student Testimonials
                        </h2>
                    </div>
                    <div
                        class="col-md-4 col-lg-4 d-flex justify-content-center justify-content-md-end align-items-end">
                        <a href="https://wa.me/+447577314340" class="agx-btn v5">
                            <span>Secure My Spot</span>
                            <span>
                                <i class="fa-regular fa-arrow-up-right"></i>
                                <i class="fa-regular fa-arrow-up-right"></i>
                            </span>
                        </a>
                    </div>
                </div>
                <div class="row g-4">
                    <div class="col-md-6 col-lg-4">
                        <div class="team3__box gsap-pop">
                            <div class="team-thumb">
                                <img src="{{asset('assets/images/review-1.jpg')}}" alt="team-member" class="w-100" />
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4">
                        <div class="team3__box gsap-pop" data-delay="0.4">
                            <div class="team-thumb">
                                <img src="{{asset('assets/images/review-2.jpg')}}" alt="team-member" class="w-100" />
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4">
                        <div class="team3__box gsap-pop" data-delay="0.8">
                            <div class="team-thumb">
                                <img src="{{asset('assets/images/review-3.jpg')}}" alt="team-member" class="w-100" />
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>

    <footer class="footer section bg-color-2">
        <div class="footer-main2">
            <div class="container">
                <div class="row g-4 justify-content-between">
                    <div class="col-sm-4">
                        <div class="row">
                            <div class="col-12 col-lg-11 col-xxl-8">
                                <div class="footer-main2__content gsap-pop overflow-hidden">
                                    <img src="{{ asset('assets/images/logo.png') }}" class="object-fit-contain"
                                        height="50px" width="200px" alt="logo" />
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="footer-widgets ms-auto gsap-pop">
                            <div class="footer-links">
                                <h5 class="title">Quick Links</h5>
                                <ul class="custom-ul">
                                    <li>
                                        <a href='#aboutUs'>About Us</a>
                                    </li>
                                    <li>
                                        <a href='#ourServices'>Our Services</a>
                                    </li>
                                    <li>
                                        <a href='#whyChooseUs'>Why Choose Us</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="footer-widgets ms-auto gsap-pop" data-delay="0.8">
                            <div class="footer-links">
                                <h5 class="title">Contact</h5>
                                <ul class="custom-ul">
                                    <li>
                                        <i class="fa-solid fa-phone"></i>
                                        <a href="https://wa.me/+447577314340">+447577314340</a>
                                    </li>
                                    <li>
                                        <i class="fa-solid fa-envelope"></i>
                                        <a href="mailto:support@acemedexpert.com">support@acemedexpert.com</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-bottom v2">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="footer-bottom__content has-border-top">
                            <p class="copyright order-2 order-md-0">
                                <i class="fa-regular fa-copyright"></i>
                                <a href='{{ url('/') }}'>AceMed Experts</a>
                                <span class="agx-current-year"></span> | All Rights Reserved
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <!-- JS Files -->
    <!-- jQuery -->
    <script src="{{ asset('assets/js/vendor/jquery-3.7.1.min.js') }}"></script>

    <!-- Odometer JS -->
    <script src="{{ asset('assets/js/vendor/odometer.min.js') }}"></script>
    <script src="{{ asset('assets/js/vendor/viewport.jquery.js') }}"></script>

    <!-- Bootstrap -->
    <script src="{{ asset('assets/js/vendor/bootstrap.bundle.min.js') }}"></script>

    <!-- jQuery meanMenu -->
    <script src="{{ asset('assets/js/vendor/jquery.meanmenu.min.js') }}"></script>

    <!-- Swiper slider Plugin -->
    <script src="{{ asset('assets/js/vendor/swiper-bundle.min.js') }}"></script>

    <!-- Swiper slider Plugin -->
    <script src="{{ asset('assets/js/vendor/jquery.magnific-popup.min.js') }}"></script>

    <!-- GSAP -->
    <script src="{{ asset('assets/js/vendor/gsap.min.js') }}"></script>
    <script src="{{ asset('assets/js/vendor/ScrollTrigger.min.js') }}"></script>
    <script src="{{ asset('assets/js/vendor/ScrollToPlugin.min.js') }}"></script>
    <script src="{{ asset('assets/js/vendor/SplitText.min.js') }}"></script>
    <script src="{{ asset('assets/js/vendor/split-types.min.js') }}"></script>
    <script src="{{ asset('assets/js/vendor/lenis.min.js') }}"></script>

    <!-- BackToTop JavaScript File -->
    <script src="{{ asset('assets/js/vendor/backToTop.js') }}"></script>

    <!-- Main JavaScript File -->
    <script src="{{ asset('assets/js/main.js') }}"></script>
</body>

</html>
