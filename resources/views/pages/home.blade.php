@extends('extends/layouts/page')


@section('pageName', 'Home')

@section('content')




    <div
        class="section-whoAreWe container mx-auto px-4 sm:px-6 lg:px-8 max-w-[1250px] pt-10 flex flex-column justify-center">

        <div class="sectionContent pt-[1.5rem]  container flex flex-col  md:flex-row">
            <div class="flex-1 images flex p-5 flex-col  lg:flex-row">
                <div class="flex-1  pr-4 sm:mb-4 lg:mb-0 hidden md:flex">
                    <div data-aos="fade" class="image-wrapper rounded-md overflow-hidden h-fit my-auto">
                        <img class="" src="{{ asset('/images/header-photo-02.jpeg') }}" alt="whoAreWe-photo-01">
                    </div>
                </div>
                <div class="flex-1">
                    <div data-aos="fade-up" class="image-wrapper rounded-md overflow-hidden h-fit my-auto hidden lg:flex ">
                        <img class="" src="{{ asset('/images/header-photo-03.webp') }}" alt="whoAreWe-photo-01">
                    </div>
                    <div data-aos="fade-up"
                        class="image-wrapper rounded-md overflow-hidden h-fit my-auto mt-4 md:w-full lg:w-1/2">
                        <img class="" src="{{ asset('/images/whoAreWe-01.avif') }}" alt="whoAreWe-photo-01">
                    </div>
                </div>
            </div>
            <div class=" flex-1 p-4  flex flex-col">
                <div class="">

                    <p class="  sectionTitle text-gray-700 subpixel-antialiased font-normal font-barlow uppercase text-xl">
                        who we
                        are?</p>
                    <h1 class="block capitalize">We are more than just a digital agency.</h1>
                </div>
                <p class="block mt-10 antialiased text-gray-500">Lorem ipsum dolor sit amet consectetur adipisicing
                    elit.
                    Perspiciatis,
                    mollitia autem
                    maiores odit quibusdam velit ipsum provident similique corrupti incidunt dicta molestiae unde

                </p>
                <div class="boxes  mt-8 grid gap-10 grid-cols-1 sm:grid-cols-3 md:grid-cols-2 lg:grid-cols-3">
                    <div class="boxItem h-[150px]  rounded-sm flex flex-col py-4 px-1 justify-around bg-gray-300 ">
                        <svg class="w-8 text-gray-600 mx-auto" xmlns="http://www.w3.org/2000/svg" fill="none"
                            viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M6 13.5V3.75m0 9.75a1.5 1.5 0 010 3m0-3a1.5 1.5 0 000 3m0 3.75V16.5m12-3V3.75m0 9.75a1.5 1.5 0 010 3m0-3a1.5 1.5 0 000 3m0 3.75V16.5m-6-9V3.75m0 3.75a1.5 1.5 0 010 3m0-3a1.5 1.5 0 000 3m0 9.75V10.5" />
                        </svg>

                        <p class="uppercase font-thin font-barlow text-center">Dynamic text, images with admin panel</p>

                    </div>
                    <div class="boxItem h-[150px]  rounded-sm flex flex-col py-4 justify-around bg-gray-300">
                        <svg class="w-8 text-gray-600 mx-auto" xmlns="http://www.w3.org/2000/svg" fill="none"
                            viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M10.5 1.5H8.25A2.25 2.25 0 006 3.75v16.5a2.25 2.25 0 002.25 2.25h7.5A2.25 2.25 0 0018 20.25V3.75a2.25 2.25 0 00-2.25-2.25H13.5m-3 0V3h3V1.5m-3 0h3m-3 18.75h3" />
                        </svg>
                        <p class="uppercase font-thin font-barlow text-center">Responsive Design</p>

                    </div>
                    <div class="boxItem h-[150px]  rounded-sm flex flex-col py-4 justify-around bg-gray-300">
                        <svg class="w-8 text-gray-600 mx-auto" xmlns="http://www.w3.org/2000/svg" fill="none"
                            viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M3.75 13.5l10.5-11.25L12 10.5h8.25L9.75 21.75 12 13.5H3.75z" />
                        </svg>

                        <p class="uppercase font-thin font-barlow text-center">High Performance</p>

                    </div>

                </div>
            </div>
        </div>

    </div>

    <div class="section-features  container mx-auto px-4 sm:px-6 lg:px-8 max-w-[1250px] pt-10 ">
        <div class="sectionTitle container relative z-10">
            <p
                class="sm:strokedText strokedText-2  text-center text-[7rem] sm:text-[12rem] text-teal-100 outline-gray-500 text-stroke font-barlow font-bold">
                Services
            </p>
            <p
                class="middleText text-center text-xl toCenter text-gray-600 font-barlow font-thin tracking-widest letter-wider">
                BEST
                FEATURES</p>
            <p class="bottomText text-center text-[3rem] sm:text-[5rem] font-barlow font-bold leading-4"> SERVICES.</p>
        </div>

        <div class="sectionContent  mt-32 grid  grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 py-8  ">
            <div class="border border-black h-80 overflow-hidden relative">
                <img class="h-full object-cover " src="{{ asset('/images/features-01.webp') }}" alt="">
                <div class="absolute inset-0 bg-black opacity-70 z-10"></div>
                <h1 class="font-bold capitalize z-20 text-white absolute top-14 left-5">Best of our features</h1>
                <button
                    class="font-thin uppercase border-2 border-gray-400 z-20 text-gray-200 absolute bottom-1/3 left-1/2 -translate-x-1/2 p-2 hover:border-white hover:text-white ease-in duration-300 stroke-white">see
                    all
                    services</button>
            </div>
            <div class="bg-zinc-50 h-80 p-8">
                <div class="flex mt-4 mb-8">
                    <svg class="mx-auto w-14 text-gray-500" xmlns="http://www.w3.org/2000/svg" fill="none"
                        viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M15.042 21.672L13.684 16.6m0 0l-2.51 2.225.569-9.47 5.227 7.917-3.286-.672zM12 2.25V4.5m5.834.166l-1.591 1.591M20.25 10.5H18M7.757 14.743l-1.59 1.59M6 10.5H3.75m4.007-4.243l-1.59-1.59" />
                    </svg>

                </div>
                <h3 class="text-center mb-6 font-bold">Graphic Design</h3>
                <p class="text-center text-gray-500 antialiased">Tempore corrupti temporibus fuga earum asperiores fugit
                    laudantium.
                </p>
            </div>
            <div class="bg-emerald-100 h-80 p-8">
                <div class="flex mt-4 mb-8">
                    <svg class="mx-auto w-14 text-gray-500 font-thin" xmlns="http://www.w3.org/2000/svg" fill="none"
                        viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M10.5 1.5H8.25A2.25 2.25 0 006 3.75v16.5a2.25 2.25 0 002.25 2.25h7.5A2.25 2.25 0 0018 20.25V3.75a2.25 2.25 0 00-2.25-2.25H13.5m-3 0V3h3V1.5m-3 0h3m-3 18.75h3" />
                    </svg>

                </div>
                <h3 class="text-center mb-6 font-bold">Web & <br />
                    Mobile Design</h3>
                <p class="text-center text-gray-500 antialiased">Tempore corrupti temporibus fuga earum asperiores
                    fugit
                    laudantium.
                </p>
            </div>
            <div class="bg-gray-50 h-80 p-8">
                <div class="flex mt-4 mb-8">

                    <svg class="mx-auto w-14 text-gray-500" xmlns="http://www.w3.org/2000/svg" fill="none"
                        viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M11.42 15.17L17.25 21A2.652 2.652 0 0021 17.25l-5.877-5.877M11.42 15.17l2.496-3.03c.317-.384.74-.626 1.208-.766M11.42 15.17l-4.655 5.653a2.548 2.548 0 11-3.586-3.586l6.837-5.63m5.108-.233c.55-.164 1.163-.188 1.743-.14a4.5 4.5 0 004.486-6.336l-3.276 3.277a3.004 3.004 0 01-2.25-2.25l3.276-3.276a4.5 4.5 0 00-6.336 4.486c.091 1.076-.071 2.264-.904 2.95l-.102.085m-1.745 1.437L5.909 7.5H4.5L2.25 3.75l1.5-1.5L7.5 4.5v1.409l4.26 4.26m-1.745 1.437l1.745-1.437m6.615 8.206L15.75 15.75M4.867 19.125h.008v.008h-.008v-.008z" />
                    </svg>

                </div>
                <h3 class="text-center mb-6 font-bold">Social
                    Media Marketing</h3>
                <p class="text-center text-gray-500 antialiased ">Tempore corrupti temporibus fuga earum asperiores
                    fugit
                    laudantium.
                </p>
            </div>

        </div>
        {{-- <svg xmlns="http://www.w3.org/2000/svg" width="510" height="119" viewBox="0 0 510 119"
            style="width: 92px;font-size: 25px;">
            <path
                d="M98.269,102.723c191.518,50.4,433.149-14.254,403.627-69.23C469.212-.827,218,3,94,25.5S-30.549,100.9,109.5,115c138.587,5.83,313.427-3.644,362.5-34.5,30.5-19.177,82.988-57.915-47-74.937"
                transform="translate(-0.645 -3.32)" fill="none" stroke="black" stroke-linecap="round"
                stroke-width="4"></path>
        </svg> --}}
    </div>


    <div class="section-clients container mx-auto p-8 max-w-[1250px] grid grid-cols-12 min-h-[350px] mt-32 ">
        <div class="col-span-12 lg:col-span-4 my-auto mx-auto lg:mx-0 text-center lg:text-left">
            <p class="uppercase font-thin letter-wider text-md stroke-current">clients</p>
            <h1 class="uppercase font-bold tracking-widest text-[80px] font-barlow leading-none mt-4">our<br /> clients.
            </h1>
        </div>
        <div
            class="boxItems col-span-12 lg:mt-0 mt-8 lg:col-span-8 grid md:grid-cols-4 sm:grid-cols-3 grid-cols-2 grid-rows-2 gap-y-10 justify-between ">
            <div class="boxItem rounded-xl border border-gray-400 h-36 w-36 flex relative mx-auto">
                <img class="m-auto w-24 duration-300 opacity-1 visible" src="{{ asset('/images/brand-example.png') }}"
                    alt="">
                <a href="#"
                    class="text-sm opacity-0 invisible absolute bottom-1/3 left-1/2 -translate-x-1/2 -translate-y-1/2 duration-300">www.burasi.com</a>
            </div>
            <div class="boxItem rounded-xl border border-gray-400 h-36 w-36 flex relative mx-auto">
                <img class="m-auto w-24 duration-300 opacity-1 visible" src="{{ asset('/images/brand-example.png') }}"
                    alt="">
                <a href="#"
                    class="text-sm opacity-0 invisible absolute bottom-1/3 left-1/2 -translate-x-1/2 -translate-y-1/2 duration-300">www.burasi.com</a>
            </div>
            <div class="boxItem rounded-xl border border-gray-400 h-36 w-36 flex relative mx-auto">
                <img class="m-auto w-24 duration-300 opacity-1 visible" src="{{ asset('/images/brand-example.png') }}"
                    alt="">
                <a href="#"
                    class="text-sm opacity-0 invisible absolute bottom-1/3 left-1/2 -translate-x-1/2 -translate-y-1/2 duration-300">www.burasi.com</a>
            </div>
            <div class="boxItem rounded-xl border border-gray-400 h-36 w-36 flex relative mx-auto">
                <img class="m-auto w-24 duration-300 opacity-1 visible" src="{{ asset('/images/brand-example.png') }}"
                    alt="">
                <a href="#"
                    class="text-sm opacity-0 invisible absolute bottom-1/3 left-1/2 -translate-x-1/2 -translate-y-1/2 duration-300">www.burasi.com</a>
            </div>
            <div class="boxItem rounded-xl border border-gray-400 h-36 w-36 flex relative  mx-auto">
                <img class="m-auto w-24 duration-300 opacity-1 visible" src="{{ asset('/images/brand-example.png') }}"
                    alt="">
                <a href="#"
                    class="text-sm opacity-0 invisible absolute bottom-1/3 left-1/2 -translate-x-1/2 -translate-y-1/2 duration-300">www.burasi.com</a>
            </div>
            <div class="boxItem rounded-xl border border-gray-400 h-36 w-36 flex relative  mx-auto">
                <img class="m-auto w-24 duration-300 opacity-1 visible" src="{{ asset('/images/brand-example.png') }}"
                    alt="">
                <a href="#"
                    class="text-sm opacity-0 invisible absolute bottom-1/3 left-1/2 -translate-x-1/2 -translate-y-1/2 duration-300">www.burasi.com</a>
            </div>
            <div class="boxItem rounded-xl border border-gray-400 h-36 w-36 flex relative mx-auto">
                <img class="m-auto w-24 duration-300 opacity-1 visible" src="{{ asset('/images/brand-example.png') }}"
                    alt="">
                <a href="#"
                    class="text-sm opacity-0 invisible absolute bottom-1/3 left-1/2 -translate-x-1/2 -translate-y-1/2 duration-300">www.burasi.com</a>
            </div>
            <div class="boxItem rounded-xl border border-gray-400 h-36 w-36 flex relative mx-auto">
                <img class="m-auto w-24 duration-300 opacity-1 visible" src="{{ asset('/images/brand-example.png') }}"
                    alt="">
                <a href="#"
                    class="text-sm opacity-0 invisible absolute bottom-1/3 left-1/2 -translate-x-1/2 -translate-y-1/2 duration-300">www.burasi.com</a>
            </div>

        </div>
    </div>
    <div class="bg-slate-300 w-full pb-8">
        <div class="section-blogs  container mx-auto px-4 sm:px-6 lg:px-8 max-w-[1250px] pt-10 min-h-[50rem] ">
            <div class="sectionTitle container relative z-10">
                <p
                    class="sm:strokedText strokedText-2  text-center text-[7rem] sm:text-[12rem] text-teal-100 outline-gray-500 text-stroke font-barlow font-bold">
                    blogs
                </p>
                <p
                    class="middleText text-center text-xl toCenter text-gray-600 font-barlow font-thin tracking-widest letter-wider">
                    lates news</p>
                <p class="bottomText text-center text-[3rem] sm:text-[5rem] font-barlow font-bold leading-4"> our blogs.
                </p>
            </div>
            <div
                class="sectionContent mt-32 grid gap-4  grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 py-8  min-h-[25rem] columns-4 px-4">
                <a class="blogItem bg-slate-100 rounded-3xl  relative" href="#">
                    <div class="imgWrapper rounded-3xl overflow-hidden mb-4 rounded-b-none h-[170px]"><img
                            src="{{ asset('/images/blog01.jpg') }}" alt=""></div>
                    <div class="blog-text px-4 ">
                        <div class="title">
                            <h3 class="uppercase font-barlow text-center font-bold">Tom Krizmanic speaks about Neutral
                                Design
                            </h3>
                        </div>
                        <div class="category text-white text-center flex justify-center my-4">
                            <p class="py-1 px-2 bg-red-700 rounded-2xl mx-1 text-xs">Design</p>
                            <p class="py-1 px-2 bg-red-700 rounded-2xl mx-1 text-xs">Design</p>
                            <p class="py-1 px-2 bg-red-700 rounded-2xl mx-1 text-xs">Design</p>
                        </div>
                        <div class="short-desc mb-4">Tom Krizmanic recently spoke about age-neutral design in the workplace
                            as
                            part
                            of a three-person</div>
                    </div>
                </a>
                <a class="blogItem bg-slate-100 rounded-3xl  relative" href="#">
                    <div class="imgWrapper rounded-3xl overflow-hidden mb-4 rounded-b-none h-[170px]"><img
                            src="{{ asset('/images/blog02.jpg') }}" alt=""></div>
                    <div class="blog-text px-4 ">
                        <div class="title">
                            <h3 class="uppercase font-barlow text-center font-bold">How to discover Yourself in 7 steps
                            </h3>
                        </div>
                        <div class="category text-white text-center flex justify-center my-4">
                            <p class="py-1 px-2 bg-red-700 rounded-2xl mx-1 text-xs">Planning</p>
                        </div>
                        <div class="short-desc mb-4">Suspendisse imperdiet quis elit vitae viverra. Suspendisse at ultrices
                            augue. Donec nec tristique augue. In eget viverra urna, a lobortis lacus. Morbi aliquam ornare
                            erat,
                            in tempor libero eleifend non</div>
                    </div>
                </a>
                <a class="blogItem bg-slate-100 rounded-3xl  relative" href="#">
                    <div class="imgWrapper rounded-3xl overflow-hidden mb-4 rounded-b-none h-[170px]"><img
                            src="{{ asset('/images/blog01.jpg') }}" alt=""></div>
                    <div class="blog-text px-4 ">
                        <div class="title">
                            <h3 class="uppercase font-barlow text-center font-bold">Tom Krizmanic speaks about Neutral
                                Design
                            </h3>
                        </div>
                        <div class="category text-white text-center flex justify-center my-4">
                            <p class="py-1 px-2 bg-red-700 rounded-2xl mx-1 text-xs">Design</p>
                            <p class="py-1 px-2 bg-red-700 rounded-2xl mx-1 text-xs">Design</p>
                            <p class="py-1 px-2 bg-red-700 rounded-2xl mx-1 text-xs">Design</p>
                        </div>
                        <div class="short-desc mb-4">Tom Krizmanic recently spoke about age-neutral design in the workplace
                            as
                            part
                            of a three-person</div>
                    </div>
                </a>
                <a class="blogItem bg-slate-100 rounded-3xl  relative" href="#">
                    <div class="imgWrapper rounded-3xl overflow-hidden mb-4 rounded-b-none h-[170px]"><img
                            src="{{ asset('/images/blog02.jpg') }}" alt=""></div>
                    <div class="blog-text px-4 ">
                        <div class="title">
                            <h3 class="uppercase font-barlow text-center font-bold">How to discover Yourself in 7 steps
                            </h3>
                        </div>
                        <div class="category text-white text-center flex justify-center my-4">
                            <p class="py-1 px-2 bg-red-700 rounded-2xl mx-1 text-xs">Planning</p>
                        </div>
                        <div class="short-desc mb-4">Suspendisse imperdiet quis elit vitae viverra. Suspendisse at ultrices
                            augue. Donec nec tristique augue. In eget viverra urna, a lobortis lacus. Morbi aliquam ornare
                            erat,
                            in tempor libero eleifend non</div>
                    </div>
                </a>


            </div>
        </div>
    </div>



@endsection
