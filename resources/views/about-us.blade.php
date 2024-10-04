@extends('layouts.app')
@section('title', 'About Us')
@section('content')

<div class="relative">
    <img src="img/about-us-banner.png" alt="About Us Banner" class="mx-auto w-full lg:h-auto h-[177px] object-cover">
    <div class="absolute inset-0 flex flex-col items-center justify-center text-white p-4">
        <h1 class="text-2xl lg:text-[40px] lg:mb-3 mb-[6px]">About Us</h1>
        <span class="text-base lg:text-2xl text-center">Lorem ipsum dolor sit amet consectetur.</span>
    </div>
</div>



<section class="container mx-auto lg:px-16 px-4 lg:mt-6 mt-[14px]">
    <div class="flex gap-3 items-center">
        <a href="/" class="lg:text-base text-sm text-customGray">Home</a>
        <svg width="8" height="14" viewBox="0 0 8 14" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M6.66667 6.9852L0 13.3488L0.651163 14L8 6.9852L0.651163 0L0 0.621565L6.66667 6.9852Z" fill="#3C3B3B"/>
            </svg>
            <span class="lg:text-base text-sm text-customGray">About Us</span>
    </div>

     <!-- Overview Section -->
     <div class="grid lg:grid-cols-2 py-14 lg:py-28">
        <div class="lg:px-[114px]  lg:mt-[48px]">
            <h2 class="text-2xl lg:text-[42px] font-bold text-customGray mb-[14px] lg:mb-[42px]">Overview</h2>
            <p class="text-xl lg:text-lg mt-4 lg:mt-10 text-[#666666]">Lorem ipsum dolor sit amet consectetur. Volutpat tortor convallis donec</p>
        </div>
        <div class="text-base lg:mt-0 mt-6">
            <p class="text-[#666666] leading-8 mb-6 lg:mb-9">
                Lorem ipsum dolor sit amet consectetur. Placerat nunc ut in lectus. Volutpat erat donec fringilla nibh purus tellus et. Facilisis eget tincidunt nisl id. Nunc consequat turpis mattis nunc aliquam ac tortor mauris. Porttitor eleifend amet id non lectus cras ultrices.
            </p>
            <p class="text-[#666666] leading-8">
                Lorem ipsum dolor sit amet consectetur. Placerat nunc ut in lectus. Volutpat erat donec fringilla nibh purus tellus et. Facilisis eget tincidunt nisl id. Nunc consequat turpis mattis nunc aliquam ac tortor mauris. Porttitor eleifend amet id non lectus cras ultrices.
            </p>
        </div>
    </div>

    <div class="lg:mb-28">
        <div class="grid lg:grid-cols-2 lg:gap-8">
         <div class="relative lg:px-24 md:mb-0 mb-24">
             <!-- First image -->
             <img src="img/Rectangle 120.png" alt="Our Mission Image 1"
                  class="object-cover h-[256px] w-[216px] lg:h-[335px] lg:w-[262px] z-10">
             <!-- Second image overlapping the first -->
             <img src="img/Rectangle21.png" alt="Our Mission Image 2"
                  class="drop-shadow-lg object-cover h-[256px] w-[216px] lg:h-[335px] lg:w-[262px] absolute lg:left-[300px] left-[80px] top-[70px] z-20">
         </div>

         <div class="flex flex-col justify-center">
             <h2 class="text-2xl lg:text-[42px] font-bold mb-[14px] lg:mb-[42px] text-customGray">
                 Our Mission
             </h2>
             <p class="text-base text-[#666666] leading-7">
                 Lorem ipsum dolor sit amet consectetur. Placerat nunc id in lorem. Vulputate erat donec fringilla etiam purus nibh in.
                 Faucibus eget tincidunt ridiculus et id. Nunc nonummy turpis mattis metus vulputate eu tristique hendrerit. Placerat efficitur
                 erat id non laoreet vitae cura ultricies. Magna non bibendum egestas pretium sed non tincidunt. Orna aliquam ac non lorem maecenas.
             </p>
         </div>
        </div>
    </div>


    <!-- Our Vision Section -->
    <div class="lg:px-[114px] gap-8 lg:py-28 py-14">
        <div class="grid lg:grid-cols-2 items-center">
            <div class="lg:order-first order-last lg:pr-8">
                <h2 class="text-2xl lg:text-[42px] font-bold mb-[14px] lg:mb-[42px] text-customGray lg:mt-0 mt-6">Our Vision</h2>
                <p class="text-[#666666] text-base leading-7 lg:leading-8">
                    Lorem ipsum dolor sit amet consectetur. Volutpat tortor convallis donec elementum sollicitudin tincidunt donec facilisis. Fermentum varius aenean amet sem non neque faucibus laoreet placerat. Convallis posuere augue diam enim sagittis leo. Ultricies pellentesque et volutpat adipiscing pellentesque vitae felis. Placerat ut ipsum aliquam aenean. Quis enim turpis arcu vel erat at hendrerit sit auctor. Vitae eget consectetur arcu eget mattis molestie auctor est.
                </p>
            </div>
            <div class="grid grid-cols-2 gap-4">
                <img src="img/OurVision-1.png" alt="Our Vision Image 1" class="w-full h-auto object-cover">
                <img src="img/OurVision-2.png" alt="Our Vision Image 2" class="w-full h-auto object-cover">
                <img src="img/OurVision-3.png" alt="Our Vision Image 3" class="w-full col-span-2 h-auto object-cover">
            </div>
        </div>
    </div>

</section>

<section class="lg:mb-28 mb-14">
    <div class="w-full lg:h-[586px] h-[208px] bg-fixed bg-no-repeat bg-cover flex items-center justify-center"
        style="background-image: url('img/about-us-banner-2.png');">
        <div class="text-center text-white">
            <p class="text-base lg:text-[42px] lg:w-[922px] w-[322px] lg:leading-[47.72px] leading-[18.18px]">
                Lorem ipsum dolor sit amet consectetur. Dignissim morbi
            </p>
        </div>
    </div>
</section>



<section id="Achievements" class="container mx-auto lg:px-16 px-4">
    <div class="flex flex-col items-center justify-center">
        <span class="lg:text-[42px] text-2xl font-bold leading-tight tracking-tight text-center text-customGray mb-3">
            Meet Our Team
        </span>
        <div class="flex items-center justify-center text-center text-[#666666] lg:text-2xl text-base lg:mb-[42px] mb-6">
            Lorem ipsum dolor sit amet consectetur. In lacinia quisque.
        </div>
    </div>

    <div class="swiper lg:mb-14 mb-7">
        <!-- Wrapper -->
        <div class="swiper-wrapper">
            <!-- Slides -->
            @foreach ($achievement->achievement_images_details as $achievement)
                <div class="swiper-slide flex flex-col items-center justify-center">
                    <!-- Image wrapped in a circle -->
                    <div class="w-[216px] h-[216px] rounded-full bg-gray-300 flex items-center justify-center">
                        <img src="{{ Storage::url($achievement['image']) }}" alt="{{ $achievement['image_title'] }}"
                            class="w-full h-full object-cover rounded-full">
                    </div>
                    <!-- Title -->
                    <span class="mt-3 mb-[6px] text-lg font-semibold text-customGray">{{ $achievement['image_title'] }}</span>
                    <!-- Subtitle -->
                    <span class="text-[#666666]">{{ $achievement['image_sub_title'] }}</span>
                </div>
            @endforeach
        </div>
        <!-- Navigation buttons -->
        <div class="flex justify-center items-center mt-10 space-x-10 block lg:hidden">
            <div class="swiper-button-prev bg-white border border-primary cursor-pointer">
                <!-- Previous button content -->
            </div>
            <div class="swiper-button-next bg-white border border-primary cursor-pointer">
                <!-- Next button content -->
            </div>
        </div>

    </div>
</section>






@endsection
<script type="module">
    import Swiper from 'https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.mjs'

    const swiper = new Swiper('.swiper', {
        loop: true, // Enable looping
        navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev',
        },
        slidesPerView: 4, // Default to show 5 slides

        breakpoints: {
            // Mobile devices
            320: {
                slidesPerView: 1, // Show 1 slide for mobile
            },
            // Small tablets
            480: {
                slidesPerView: 2, // Show 2 slides for small tablets
            },
            // Tablets
            640: {
                slidesPerView: 3, // Show 3 slides for tablets
            },
            // Small desktops
            768: {
                slidesPerView: 3, // Show 4 slides for small desktops
            },
            // Large desktops
            1024: {
                slidesPerView: 4, // Show 5 slides for large desktops
            },
        },
    });
</script>
<style>
    .swiper-button-next,
    .swiper-button-prev {

        border: none !important;

    }

    /* Override Swiper navigation buttons */
    .swiper-button-next,
    .swiper-button-prev {
        position: relative !important;
        /* Ensures relative positioning */
        top: auto !important;
        /* Removes any top alignment */
        /* Add both margin-top values */
        margin-top: none !important;
        /* Override with static value */
        cursor: pointer;
        display: flex;
        align-items: center;
        justify-content: center;
        color: #2A4D69 !important;
        /* Maintain button color */
    }

    .swiper-wrapper {
        position: relative;
        width: 100%;
        height: auto !important;
        z-index: 1;
        display: flex;
        transition-property: transform;
        transition-timing-function: var(--swiper-wrapper-transition-timing-function, initial);
        box-sizing: content-box;
    }


    .swiper-button-next:after,
    .swiper-button-prev:after {
        font-family: swiper-icons;
        text-transform: none !important;
        letter-spacing: 0;
        font-variant: initial;
        line-height: 1;
        font-size: 18px !important;
    }
</style>
