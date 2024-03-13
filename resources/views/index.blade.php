@extends('layouts.app')

@section('content')
<div class="background-image grid grid-cols-1 m-auto">
    <div class="flex text-gray-100 pt-10">
        <div class="m-auto pt-4 pb-16 sm:m-auto w-4/5 block text-center">
            <h1 class="sm:text-white text-5xl uppercase font-bold text-shadow-md pb-14">
                Looking for heaven on earth?
            </h1>
            <a href="/blog" class="text-center bg-indigo-300 hover:bg-indigo-100 hover:text-indigo-300 text-white-700 py-2 px-4 font-bold text-xl uppercase">
                Read More
            </a>
        </div>
    </div>
</div>

<div class="sm:grid grid-cols-2 gap-20 w-4/5 mx-auto py-15 border-b border-gray-200">
    <div>
        <img src="https://www.relaxingjourneys.co.nz/wp-content/uploads/2018/11/ft-blog-exploring-waitomo-glowworm-caves.jpg" width="700" alt="">
    </div>

    <div class="m-auto sm:m-auto text-left w-4/5 block">
        <h2 class="text-3xl font-extrabold text-gray-600">
            Struggling to find the perfect place to visit this year?

        </h2>

        <p class="font-extrabold text-gray-600 text-s py-8">
            Well, look no further.
        </p>


        <p class="pb-9 text-gray-500 text-s">
            We're sure you'll find some inspiration from our blogs, or feel free to share your own go-to holiday locations!
        </p>

        <a href="/blog" class="uppercase bg-blue-500 text-gray-100 text-s font-extrabold py-3 px-8 rounded-3xl">
            Find Out More
        </a>
    </div>
</div>

<div class="text-center p-15 bg-black text-white">
    <h2 class="text-2xl pb-5 text-l">
        I'm an expert in...
    </h2>

    <span class="font-extrabold block text-4xl py-1">
        Ux Design
    </span>
    <span class="font-extrabold block text-4xl py-1">
        Project Management
    </span>
    <span class="font-extrabold block text-4xl py-1">
        Digital Strategy
    </span>
    <span class="font-extrabold block text-4xl py-1">
        Backend Development
    </span>
</div>

<div class="text-center py-15">
    <span class="uppercase text-s text-gray-400">
        Blog
    </span>

    <h2 class="text-4xl font-bold py-10">
        Recent Posts
    </h2>

    <p class="m-auto w-4/5 text-gray-500">
        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cumque exercitationem saepe enim veritatis, eos temporibus quaerat facere consectetur qui.
    </p>
</div>

<div class="sm:grid grid-cols-2 w-4/5 m-auto">
    <div class="flex bg-indigo-500 text-gray-100 pt-10">
        <div class="m-auto pt-4 pb-16 sm:m-auto w-4/5 block">
            <span class="uppercase text-xs">
                Daniel Smith
            </span>

            <h3 class="text-xl font-bold py-10">
                Last year I went to Jervis Bay in Australia, and it was one of the most profound experiences of my entire life.
            </h3>

            <a href="" class="uppercase bg-transparent border-2 border-gray-100 text-gray-100 text-xs font-extrabold py-3 px-5 rounded-3xl">
                Find Out More
            </a>
        </div>
    </div>
    <div>
        <img src="https://www.illawarramercury.com.au/images/transform/v1/crop/frm/TimAB2MTHanvQWPwhBc6mp/a5ce26e5-b875-415e-9f00-e08e06d2d5e9.JPG/r0_0_6000_4000_w6000_h4000_fmax.jpg" alt="">
    </div>
</div>
@endsection