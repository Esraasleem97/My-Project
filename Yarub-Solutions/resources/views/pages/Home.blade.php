@extends('layouts.app')
@section('content')
    {{--Section hero--}}
    <section class="overflow-hidden">
        <div class="hero-section">
            <div class="absolute h-full flex justify-center items-center w-screen z-10 text-white">
                <div class="text-center">
                    <div class="flex uppercase justify-center items-center tracking-space relative">
                        <p class="">programming</p>
                        <img src="img/lap.svg" alt="">
                        <p class="">2021</p>
                    </div>
                    <h1 class="text-8xl font-bold">It's time to Change</h1>
                    <p class="uppercase tracking-space text-center my-12">Front End Development</p>
                    <button class="btn btn-primary">Browse Now</button>
                </div>
            </div>
            <img src="img/hero2.png" class="img-hero" alt="">
        </div>
    </section>
    {{--About us--}}
    <section class="flex flex-wrap lg:flex-nowrap justify-center items-center w-full h-full mx-auto my-12 relative ">
        <div class="w-full lg:w-2/6 mx-1 relative img-Depart">
            <div class="absolute inset-0 text-white z-20 flex justify-center items-center h-full">
                <div class="flex flex-col">
                    <a href="#" class="text-2xl font-semibold relative a-section">OUR PROJECTS</a>
                    <div class="text-center">
                        <button class="btn btn-primary mt-10">Browse Now</button>
                    </div>
                </div>
            </div>
            <img src="img/p1.png" alt="" class="w-full h-104">
        </div>
        <div class="w-full lg:w-2/6 mx-1 relative img-Depart">
            <div class="absolute inset-0 text-white z-20 flex justify-center items-center h-full">
                <div class="flex flex-col">
                    <a href="#" class="text-2xl font-semibold relative a-section uppercase">programming languages</a>
                    <div class="text-center">
                        <button class="btn btn-primary mt-10">Browse Now</button>
                    </div>
                </div>
            </div>
            <img src="img/p4.jpg" alt="" class="w-full h-104">
        </div>
        <div class="w-full lg:w-2/6 mx-1 relative img-Depart">
            <div class="absolute inset-0 text-white z-20 flex justify-center items-center h-full">
                <div class="flex flex-col">
                    <a href="#" class="text-2xl font-semibold relative a-section uppercase">Frameworks</a>
                    <div class="text-center">
                        <button class="btn btn-primary mt-10">Browse Now</button>
                    </div>
                </div>
            </div>
            <img src="img/p5.webp" alt="" class="w-full h-104">
        </div>
    </section>

    {{--About us--}}
    <section class="w-full flex justify-between mb-12 items-center bg-gray-50">

        <div class="w-1/2 px-16 text-center">
            <h1 class="about">About Me</h1>
            <p class="text-justify leading-loose tracking-widest text-gray-600">
                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
            </p>
        </div>
        <div class="w-full lg:w-3/4 mx-1 relative img-Depart">
            <div class="absolute inset-0 text-white z-20 flex justify-center items-center h-full">
                <div class="flex flex-col">
                    <a href="#" class="text-2xl font-semibold relative a-section uppercase">Esra'a Saleem Sammour</a>
                    <div class="text-center">
                        <button class="btn btn-primary mt-10">About Me</button>
                    </div>
                </div>
            </div>
            <img src="img/p1.png" alt="" class="w-full">
        </div>
    </section>
{{--Contact us--}}
    <section class="overflow-hidden">
        <div class="contact-section">
            <div class="absolute h-full flex justify-center items-center w-screen z-10 text-white">
                <div class="text-center w-1/2">
                    <div class="flex uppercase justify-center items-center tracking-space relative">
                        <p class="">programming</p>
                        <img src="img/lap.svg" alt="">
                        <p class="">2021</p>
                    </div>
                    <form action="" class="relative form px-12 py-8">
                        <h1 class="text-7xl mb-12 text-left font-body">Contact Us</h1>
                        <div class="input-group">
                            <div class="input-label">
                                <label for="first_name">First Name <span class="text-red-600">*</span></label>
                                <input type="text" id="first_name" class="input">
                            </div>
                            <div class="input-label">
                                <label for="Last_name">Last Name <span class="text-red-600">*</span></label>
                                <input type="text" id="Last_name" class="input">
                            </div>
                            <div class="input-label">
                                <label for="email">E-mail Address <span class="text-red-600">*</span></label>
                                <input type="email" id="email" class="input">
                            </div>
                            <div class="input-label">
                                <label for="phone">Phone Number <span class="text-red-600">*</span></label>
                                <input type="text" id="phone" class="input">
                            </div>

                        </div>
                        <div class="input-label">
                            <label for="phone">Message <span class="text-red-600">*</span></label>
                            <textarea name="" id="" rows="6" class="input"></textarea>
                        </div>
                        <button class="btn btn-primary">Send</button>

                    </form>
                </div>
            </div>
            <img src="img/hero2.png" class="img-hero" alt="">
        </div>
    </section>
@endsection
