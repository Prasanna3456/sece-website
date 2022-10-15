@extends('layouts.app')

@section('content')
    <section class="text-gray-900 bg-[#121212]  body-font py-16 bg-cover z-30 -mt-20"
        style="background-image: url('{{ asset('assets/img/bg-2.jpg') }}') ">>
        <div class="container mx-auto px-16 py-16 flex flex-col md:flex-row">
            <div class="flex-none mx-auto">
                <img src="{{ asset('assets/img/sample-poster.jpg') }}" alt="poster" class="w-64 lg:w-96">
            </div>

            <div class="md:ml-24" x-data="{ opentab: 1 }">
                <ul
                    class="flex flex-wrap text-xl uppercase  oswald-bold-500 tracking-wide font-medium text-center text-gray-500 border-b border-gray-200">
                    <li class="mr-2 flex-auto">
                        <a  :class="{ 'text-[#FF003C]': opentab === 1 }" @click="opentab = 1"
                            aria-current="page" class="inline-block p-4 cursor-pointer rounded-t-lg active">Profile</a>
                    </li>
                    <li class="mr-2 flex-auto">
                        <a  @click="opentab = 2" class="inline-block p-4  cursor-pointer hover:text-[#FF003c]"
                            :class="{ 'text-[#FF003C]': opentab === 2 }">Dashboard</a>
                    </li>
                    <li class="mr-2 flex-auto">
                        <a  @click="opentab = 3" class="inline-block p-4 cursor-pointer  hover:text-[#FF003c]"
                            :class="{ 'text-[#FF003C]': opentab === 3 }">Settings</a>
                    </li>
                    <li class="mr-2 flex-auto">
                        <a  @click="opentab = 4" class="inline-block p-4 cursor-pointer  hover:text-[#FF003c]"
                            :class="{ 'text-[#FF003C]': opentab === 4 }">Contacts</a>
                    </li>
                </ul>

                <div class="my-5 h-2/5 ">
                    <p class="text-gray-200 text-base" x-show="opentab === 1">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Est, expedita iusto culpa cumque
                        consectetur qui tempora natus animi id quasi quam doloribus commodi, repellendus harum esse dicta.
                        Incidunt, accusamus fugiat.
                    </p>
                    <p class="text-gray-200 text-base" x-show="opentab === 2">
                        Tab 2 ipsum dolor sit amet consectetur adipisicing elit. Est, expedita iusto culpa cumque
                        consectetur qui tempora natus animi id quasi quam doloribus commodi, repellendus harum esse dicta.
                        Incidunt, accusamus fugiat.
                    </p>
                    <p class="text-gray-200 text-base" x-show="opentab === 3">
                        Tab 3 Lorem ipsum dolor sit amet consectetur adipisicing elit. Est, expedita iusto culpa cumque
                        consectetur qui tempora natus animi id quasi quam doloribus commodi, repellendus harum esse dicta.
                        Incidunt, accusamus fugiat.
                    </p>
                    <p class="text-gray-200 text-base" x-show="opentab === 4">
                        Tab 4 Lorem ipsum dolor sit amet consectetur adipisicing elit. Est, expedita iusto culpa cumque
                        consectetur qui tempora natus animi id quasi quam doloribus commodi, repellendus harum esse dicta.
                        Incidunt, accusamus fugiat.
                    </p>

                </div>

                <div>
                    <a href="#register_section" class=" px-8 py-3 oswald-bold-500 uppercase tracking-wide leading-5 text-white transition-colors duration-300 transform bg-[#FF003C]  hover:bg-[#FF2054] focus:outline-none">Register</a>
                </div>

            </div>

        </div>
    </section>

    {{-- Register section --}}
<section class="text-gray-900  body-font py-10" style="background-image: url('{{ asset('assets/img/bg_elements.png') }}') " id="register_section">
    {{-- <div class="overlay"></div> --}}
    {{-- <h1 class="sm:text-5xl text-5xl text-[#FF003C] lg:text-[110px]  px-5 py-5 lg:py-0   oswald-bold-800 uppercase">Register</h1> --}}

    <div class="max-w-4xl mx-5 md:mx-auto lg:mx-auto  border-2 border-[#C7002F] my-16">
        <h2 class="text-3xl font-semibold  text-center text-[#111] uppercase bg-[#FF003C] h-16 flex items-center justify-center orbitron">Register</h2>

        <form class="p-6">
            <div class="border-b-2 border-gray-200 my-6">
                <div class="grid grid-cols-1 gap-6 mt-3 sm:grid-cols-2  orbitron uppercase">
                    <div class="my-2">
                        <label class="text-white font-semibold tracking-wide text-lg" for="username">Name</label>
                        <input id="username" type="text" autocomplete="nickname" class=" text-white block w-full px-4 py-2 mt-2 text-gray-700 bg-black border border-gray-200 rounded-md focus:border-[#C7002F] focus:ring-[#C7002F] focus:ring-opacity-40  focus:outline-none focus:ring">
                    </div>
                    <div class="my-2">
                        <label class="text-white font-semibold tracking-wide text-lg" for="email">Email</label>
                        <input id="email" type="email" class="block w-full px-4 py-2 mt-2 text-gray-700 bg-black border border-gray-200 rounded-md focus:border-[#C7002F] focus:ring-[#C7002F] focus:ring-opacity-40  focus:outline-none focus:ring">
                    </div>
                </div>

                <div class="my-2">
                    <label class="text-white font-semibold tracking-widest text-lg orbitron uppercase" for="username">Institution name</label>
                    <input id="username" type="text" class="block w-full px-4 py-2 mt-2 text-gray-700 bg-black border border-gray-200 rounded-md focus:border-[#C7002F] focus:ring-[#C7002F] focus:ring-opacity-40  focus:outline-none focus:ring">
                </div>

                <div class="grid grid-cols-1 gap-6 mt-4 sm:grid-cols-3  orbitron uppercase">
                    <div class="my-2">
                        <label class="text-white font-semibold tracking-wide text-lg" for="username">Course</label>
                        <input id="username" type="text" autocomplete="nickname" class=" text-white block w-full px-4 py-2 mt-2 text-gray-700 bg-black border border-gray-200 rounded-md focus:border-[#C7002F] focus:ring-[#C7002F] focus:ring-opacity-40  focus:outline-none focus:ring">
                    </div>
                    <div class="my-2">
                        <label class="text-white font-semibold tracking-wide text-lg" for="email">Department </label>
                        <input id="email" type="email" class="block w-full px-4 py-2 mt-2 text-gray-700 bg-black border border-gray-200 rounded-md focus:border-[#C7002F] focus:ring-[#C7002F] focus:ring-opacity-40  focus:outline-none focus:ring">
                    </div>
                    <div class="my-2">
                        <label class="text-white font-semibold tracking-wide text-lg" for="email">Year & Section</label>
                        <input id="email" type="email" class="block w-full px-4 py-2 mt-2 text-gray-700 bg-black border border-gray-200 rounded-md focus:border-[#C7002F] focus:ring-[#C7002F] focus:ring-opacity-40  focus:outline-none focus:ring">
                    </div>
                </div>

                <div class="grid grid-cols-1 gap-6 mt-4 sm:grid-cols-2  orbitron uppercase mb-3">
                    <div class="my-2">
                        <label class="text-white font-semibold tracking-wide text-lg" for="username">Phone number </label>
                        <input id="username" type="text" autocomplete="nickname" class=" text-white block w-full px-4 py-2 mt-2 text-gray-700 bg-black border border-gray-200 rounded-md focus:border-[#C7002F] focus:ring-[#C7002F] focus:ring-opacity-40  focus:outline-none focus:ring">
                    </div>
                    <div class="my-2">
                        <label class="text-white font-semibold tracking-wide text-lg" for="email">Whatsapp number</label>
                        <input id="email" type="email" class="block w-full px-4 py-2 mt-2 text-gray-700 bg-black border border-gray-200 rounded-md focus:border-[#C7002F] focus:ring-[#C7002F] focus:ring-opacity-40  focus:outline-none focus:ring">
                    </div>
                </div>
            </div>





            <div class="orbitron uppercase">
                <h2 class="text-white font-semibold tracking-wide text-lg" for="username">Team Members Details </h2>
                <div class="grid grid-cols-1 gap-6 mt-4 sm:grid-cols-2  ">
                @for ($i = 1; $i < 3; $i++)
                    <div class="my-2">
                        <label class="text-white font-semibold tracking-wide text-lg" for="username">Team Member {{ $i }} </label>
                        <input id="username" type="text" autocomplete="nickname" class=" text-white block w-full px-4 py-2 mt-2 text-gray-700 bg-black border border-gray-200 rounded-md focus:border-[#C7002F] focus:ring-[#C7002F] focus:ring-opacity-40  focus:outline-none focus:ring">
                    </div>
                    @endfor
                </div>
            </div>

            <div class="flex justify-end mt-6">
                <a href="#register_section" class=" px-8 py-3 oswald-bold-500 uppercase tracking-wide leading-5 text-white transition-colors duration-300 transform bg-[#FF003C]  hover:bg-[#FF2054] focus:outline-none">Submit</a>
            </div>
        </form>
    </div>
</section>
@endsection
