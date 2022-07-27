@extends('layouts.app')
@section('content')
<div class="dark:bg-gray-900">
    <div class="container mx-auto py-9 md:py-12 lg:py-24">
        <div class="flex flex-col lg:flex-row justify-center items-strech mx-4">
            <div class="lg:w-4/12 flex justify-center items-center">
                <div>
                    <h1 class="dark:text-white text-4xl md:text-5xl xl:text-6xl font-semibold text-gray-900 w-7/12">Voyages</h1>
                    <p class="dark:text-gray-300 md:w-7/12 lg:w-11/12 xl:w-10/12 mt-4 lg:mt-5 text-base leading-normal text-gray-600">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using.</p>
                </div>
            </div>
            <div class="lg:w-8/12 mt-6 md:mt-8 lg:mt-0">
                <div class="relative w-full h-full">
                    <img src="https://i.ibb.co/gmV2mLr/pexels-maksim-goncharenok-4352247-1-1-1.png" alt="A lounge sofa" role="img" class="w-full h-full relative hidden lg:block" />
                    <img src="https://i.ibb.co/Mhgkt2f/pexels-maksim-goncharenok-4352247-1-1-1.png" alt="A lounge sofa" role="img" class="w-full h-full lg:hidden" />
                    <div class="hidden lg:block absolute bottom-0 right-0 bg-red-200 w-1/2">
                        <button class="dark:hover:bg-gray-800 dark:bg-white dark:hover:text-gray-50 dark:text-gray-800 bg-gray-800 text-xl xl:text-2xl font-medium text-white flex justify-between w-full items-center p-5 xl:p-6 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-gray-800 hover:bg-gray-700">
                            Discover More
                            <div>
                                <img class="dark:hidden" src="https://tuk-cdn.s3.amazonaws.com/can-uploader/hero-II-svg1.svg" alt="arrow">
                            <img class="dark:block hidden" src="https://tuk-cdn.s3.amazonaws.com/can-uploader/hero-II-svg1dark.svg" alt="arrow">
                            </div>
                        </button>
                    </div>
                </div>
                <div class="mt-6 md:mt-8 lg:hidden">
                    <button class="dark:hover:bg-gray-800 dark:bg-white dark:hover:text-gray-50 dark:text-gray-800 bg-gray-800 text-base md:text-xl font-semibold leading-tight text-white flex justify-between items-center px-5 py-4 lg:py-7 lg:px-7 w-full md:w-5/12 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-gray-800 hover:bg-gray-700">
                        Discover More
                        <div>
                            <img class="dark:hidden" src="https://tuk-cdn.s3.amazonaws.com/can-uploader/hero-II-svg1.svg" alt="arrow">
                            <img class="dark:block hidden" src="https://tuk-cdn.s3.amazonaws.com/can-uploader/hero-II-svg1dark.svg" alt="arrow">
                        </div>
                    </button>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
