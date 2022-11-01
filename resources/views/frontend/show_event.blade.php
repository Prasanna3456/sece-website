@extends('layouts.app')
@section('css')
    <link href="https://unpkg.com/filepond@^4/dist/filepond.css" rel="stylesheet" />
    <style>
        .filepond--panel-root {
            background-color: #121212;
        }

        .register_text {
            margin-top: 10px;
            /* font-family: "Cabin", sans-serif; */
            letter-spacing: 12px;
            text-indent: 12px;
            color: #ffffff;
            -webkit-animation: colorText 5s ease-out infinite, nudgeText 5s ease-out infinite;
            animation: colorText 5s ease-out infinite, nudgeText 5s ease-out infinite;
        }

        .mouse {
            background: #4e5559 linear-gradient(transparent 0%, transparent 50%, #ffffff 50%, #ffffff 100%);
            position: relative;
            width: 40px;
            height: 60px;
            border-radius: 100px;
            background-size: 100% 200%;
            -webkit-animation: colorSlide 5s linear infinite, nudgeMouse 5s ease-out infinite;
            animation: colorSlide 5s linear infinite, nudgeMouse 5s ease-out infinite;
        }

        .mouse:before,
        .mouse:after {
            content: "";
            position: absolute;
            top: 0;
            right: 0;
            bottom: 0;
            left: 0;
            margin: auto;
        }

        .mouse:before {
            width: 30px;
            height: 50px;
            background-color: #FF003C;
            border-radius: 100px;
        }

        .mouse:after {
            background-color: #ffffff;
            width: 8px;
            height: 8px;
            border-radius: 100%;
            -webkit-animation: trackBallSlide 5s linear infinite;
            animation: trackBallSlide 5s linear infinite;
        }

        @-webkit-keyframes colorSlide {
            0% {
                background-position: 0% 100%;
            }

            20% {
                background-position: 0% 0%;
            }

            21% {
                background-color: #4e5559;
            }

            29.99% {
                background-color: #ffffff;
                background-position: 0% 0%;
            }

            30% {
                background-color: #4e5559;
                background-position: 0% 100%;
            }

            50% {
                background-position: 0% 0%;
            }

            51% {
                background-color: #4e5559;
            }

            59% {
                background-color: #ffffff;
                background-position: 0% 0%;
            }

            60% {
                background-color: #4e5559;
                background-position: 0% 100%;
            }

            80% {
                background-position: 0% 0%;
            }

            81% {
                background-color: #4e5559;
            }

            90%,
            100% {
                background-color: #ffffff;
            }
        }

        @keyframes colorSlide {
            0% {
                background-position: 0% 100%;
            }

            20% {
                background-position: 0% 0%;
            }

            21% {
                background-color: #4e5559;
            }

            29.99% {
                background-color: #ffffff;
                background-position: 0% 0%;
            }

            30% {
                background-color: #4e5559;
                background-position: 0% 100%;
            }

            50% {
                background-position: 0% 0%;
            }

            51% {
                background-color: #4e5559;
            }

            59% {
                background-color: #ffffff;
                background-position: 0% 0%;
            }

            60% {
                background-color: #4e5559;
                background-position: 0% 100%;
            }

            80% {
                background-position: 0% 0%;
            }

            81% {
                background-color: #4e5559;
            }

            90%,
            100% {
                background-color: #ffffff;
            }
        }

        @-webkit-keyframes trackBallSlide {
            0% {
                opacity: 1;
                transform: scale(1) translateY(-20px);
            }

            6% {
                opacity: 1;
                transform: scale(0.9) translateY(5px);
            }

            14% {
                opacity: 0;
                transform: scale(0.4) translateY(40px);
            }

            15%,
            19% {
                opacity: 0;
                transform: scale(0.4) translateY(-20px);
            }

            28%,
            29.99% {
                opacity: 1;
                transform: scale(1) translateY(-20px);
            }

            30% {
                opacity: 1;
                transform: scale(1) translateY(-20px);
            }

            36% {
                opacity: 1;
                transform: scale(0.9) translateY(5px);
            }

            44% {
                opacity: 0;
                transform: scale(0.4) translateY(40px);
            }

            45%,
            49% {
                opacity: 0;
                transform: scale(0.4) translateY(-20px);
            }

            58%,
            59.99% {
                opacity: 1;
                transform: scale(1) translateY(-20px);
            }

            60% {
                opacity: 1;
                transform: scale(1) translateY(-20px);
            }

            66% {
                opacity: 1;
                transform: scale(0.9) translateY(5px);
            }

            74% {
                opacity: 0;
                transform: scale(0.4) translateY(40px);
            }

            75%,
            79% {
                opacity: 0;
                transform: scale(0.4) translateY(-20px);
            }

            88%,
            100% {
                opacity: 1;
                transform: scale(1) translateY(-20px);
            }
        }

        @keyframes trackBallSlide {
            0% {
                opacity: 1;
                transform: scale(1) translateY(-20px);
            }

            6% {
                opacity: 1;
                transform: scale(0.9) translateY(5px);
            }

            14% {
                opacity: 0;
                transform: scale(0.4) translateY(40px);
            }

            15%,
            19% {
                opacity: 0;
                transform: scale(0.4) translateY(-20px);
            }

            28%,
            29.99% {
                opacity: 1;
                transform: scale(1) translateY(-20px);
            }

            30% {
                opacity: 1;
                transform: scale(1) translateY(-20px);
            }

            36% {
                opacity: 1;
                transform: scale(0.9) translateY(5px);
            }

            44% {
                opacity: 0;
                transform: scale(0.4) translateY(40px);
            }

            45%,
            49% {
                opacity: 0;
                transform: scale(0.4) translateY(-20px);
            }

            58%,
            59.99% {
                opacity: 1;
                transform: scale(1) translateY(-20px);
            }

            60% {
                opacity: 1;
                transform: scale(1) translateY(-20px);
            }

            66% {
                opacity: 1;
                transform: scale(0.9) translateY(5px);
            }

            74% {
                opacity: 0;
                transform: scale(0.4) translateY(40px);
            }

            75%,
            79% {
                opacity: 0;
                transform: scale(0.4) translateY(-20px);
            }

            88%,
            100% {
                opacity: 1;
                transform: scale(1) translateY(-20px);
            }
        }

        @-webkit-keyframes nudgeMouse {
            0% {
                transform: translateY(0);
            }

            20% {
                transform: translateY(8px);
            }

            30% {
                transform: translateY(0);
            }

            50% {
                transform: translateY(8px);
            }

            60% {
                transform: translateY(0);
            }

            80% {
                transform: translateY(8px);
            }

            90% {
                transform: translateY(0);
            }
        }

        @keyframes nudgeMouse {
            0% {
                transform: translateY(0);
            }

            20% {
                transform: translateY(8px);
            }

            30% {
                transform: translateY(0);
            }

            50% {
                transform: translateY(8px);
            }

            60% {
                transform: translateY(0);
            }

            80% {
                transform: translateY(8px);
            }

            90% {
                transform: translateY(0);
            }
        }

        @-webkit-keyframes nudgeText {
            0% {
                transform: translateY(0);
            }

            20% {
                transform: translateY(2px);
            }

            30% {
                transform: translateY(0);
            }

            50% {
                transform: translateY(2px);
            }

            60% {
                transform: translateY(0);
            }

            80% {
                transform: translateY(2px);
            }

            90% {
                transform: translateY(0);
            }
        }

        @keyframes nudgeText {
            0% {
                transform: translateY(0);
            }

            20% {
                transform: translateY(2px);
            }

            30% {
                transform: translateY(0);
            }

            50% {
                transform: translateY(2px);
            }

            60% {
                transform: translateY(0);
            }

            80% {
                transform: translateY(2px);
            }

            90% {
                transform: translateY(0);
            }
        }

        @-webkit-keyframes colorText {
            21% {
                color: #4e5559;
            }

            30% {
                color: #ffffff;
            }

            51% {
                color: #4e5559;
            }

            60% {
                color: #ffffff;
            }

            81% {
                color: #4e5559;
            }

            90% {
                color: #ffffff;
            }
        }

        @keyframes colorText {
            21% {
                color: #4e5559;
            }

            30% {
                color: #ffffff;
            }

            51% {
                color: #4e5559;
            }

            60% {
                color: #ffffff;
            }

            81% {
                color: #4e5559;
            }

            90% {
                color: #ffffff;
            }
        }
    </style>
@endsection
@section('js')
    <script>
        function rulesDivFunction() {
            var x = document.getElementById("rulesDiv").querySelectorAll("ol");
            if (x) {
                console.log('found')
                x[0].classList.add("list-disc");
            } else {
                console.log('not found')
            }
        }
        rulesDivFunction();
    </script>
    <script src="https://unpkg.com/filepond-plugin-image-exif-orientation/dist/filepond-plugin-image-exif-orientation.js">
    </script>
    <script src="https://unpkg.com/filepond@^4/dist/filepond.js"></script>

    <script>
        // Get a reference to the file input element
        const inputElement = document.querySelector('input[type="file"]');
        // Create a FilePond instance
        FilePond.registerPlugin(FilePondPluginImageExifOrientation);
        const pond = FilePond.create(inputElement);
        FilePond.setOptions({
            server: {
                url: '{{ route('upload_id') }}',
                process: {
                    headers: {
                        'X-CSRF-TOKEN': '{{ csrf_token() }}'
                    },
                },
            }
        });
    </script>
@endsection
@section('content')
    <section class="text-gray-900 bg-[#121212] py-20 body-font bg-cover z-30"
        style="background-image: url('{{ asset('assets/img/bg-2.jpeg') }}') ">

        <div class="container mx-auto px-16 ">
            <div class="lg:max-w-screen-xl mx-auto my-5 flex flex-wrap justify-between">
                <div class="mx-auto ">
                    <img src="{{ asset('assets/img/sample-poster.jpg') }}" alt="poster" class="w-64 lg:w-96">
                </div>

                <div class="flex-grow md:ml-5 overflow-x-hidden bg-black bg-opacity-60 h-96 mt-5 lg:mt-0 md:mt-0 "
                    x-data="{ opentab: 1 }">
                    <ul
                        class="bg-black
                        flex flex-wrap text-xl uppercase  oswald-bold-500 tracking-wide font-medium text-center text-gray-500 border-b border-gray-200 sticky top-0">
                        <li class="mr-2 flex-auto">
                            <a :class="{ 'text-[#FF003C]': opentab === 1 }" @click="opentab = 1" aria-current="page"
                                class="inline-block p-4 cursor-pointer rounded-t-lg active">Description</a>
                        </li>
                        <li class="mr-2 flex-auto">
                            <a @click="opentab = 2" class="inline-block p-4  cursor-pointer hover:text-[#FF003c]"
                                :class="{ 'text-[#FF003C]': opentab === 2 }">Rules</a>
                        </li>
                        <li class="mr-2 flex-auto">
                            <a @click="opentab = 3" class="inline-block p-4 cursor-pointer  hover:text-[#FF003c]"
                                :class="{ 'text-[#FF003C]': opentab === 3 }">Contact</a>
                        </li>
                    </ul>

                    <div class="my-5 h-80 mx-5 text-white">
                        <div class="w-full" x-show="opentab === 1">
                            {!! $event->description !!}
                        </div>
                        <div class="text-gray-200 text-base w-full p-2" id="rulesDiv" x-show="opentab === 2">
                            {!! $event->rules !!}
                        </div>
                        <div class="text-gray-200 text-base w-full" x-show="opentab === 3">
                            {!! $event->contact !!}
                        </div>

                    </div>
                    <div>
                        {{-- <a href="#register_section"
                            class=" px-8 py-3 mx-3  oswald-bold-500 uppercase tracking-wide leading-5 text-white transition-colors duration-300 transform bg-[#FF003C]  hover:bg-[#FF2054] focus:outline-none">Register</a> --}}
                    </div>


                </div>
            </div>


        </div>
        <div class="mouse flex justify-center mx-auto  lg:mt-10"></div>
        <p class="register_text flex justify-center mx-auto">Scroll</p>
    </section>



    {{-- Register section --}}
    <section class="text-gray-900  body-font py-10"
        style="background-image: url('{{ asset('assets/img/bg_elements.png') }}') " id="register_section">
        <div class="max-w-4xl mx-5 md:mx-auto lg:mx-auto  border-2 border-[#C7002F] my-16">
            <h2
                class="text-3xl font-semibold  text-center text-[#111] uppercase bg-[#FF003C] h-16 flex items-center justify-center orbitron">
                Register</h2>

            <form class="p-6" action="{{ route('register_team') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <input type="hidden" name="event_id" value="{{ $event->id }}">
                <h2 class="text-2xl text-[#C7002F] orbitron tracking-wide capitalize">
                    Event registration fee : {{ $event->entry_fee }} Rs</h2>
                <div class="border-b-2 border-gray-200 my-6">
                    <div class="grid grid-cols-1 gap-6 mt-3 sm:grid-cols-2  orbitron uppercase">
                        <div class="my-2">
                            <label class="text-white font-semibold tracking-wide text-lg" for="username">Name</label>
                            <input id="username" type="text" name="name" autocomplete="nickname"
                                class=" text-white block w-full px-4 py-2 mt-2  bg-black border border-gray-200 rounded-md focus:border-[#C7002F] focus:ring-[#C7002F] focus:ring-opacity-40  focus:outline-none focus:ring"
                                required>
                        </div>
                        <div class="my-2">
                            <label class="text-white font-semibold tracking-wide text-lg" for="email">Email</label>
                            <input id="email" name="email" type="email"
                                class="block w-full px-4 py-2 mt-2 text-white bg-black border border-gray-200 rounded-md focus:border-[#C7002F] focus:ring-[#C7002F] focus:ring-opacity-40  focus:outline-none focus:ring"
                                required>
                        </div>
                    </div>

                    <div class="my-2 orbitron uppercase">
                        <label class="text-white font-semibold tracking-widest text-lg " for="username">Institution
                            name</label>
                        <input id="username" name="institution_name" type="text"
                            class="block w-full px-4 py-2 mt-2 text-white bg-black border border-gray-200 rounded-md focus:border-[#C7002F] focus:ring-[#C7002F] focus:ring-opacity-40  focus:outline-none focus:ring"
                            required>
                    </div>

                    <div class="grid grid-cols-1 gap-6 mt-4 sm:grid-cols-3  orbitron uppercase">
                        <div class="my-2">
                            <label class="text-white font-semibold tracking-wide text-lg" for="username">Course</label>
                            <input id="username" name="course" type="text" autocomplete="nickname"
                                class=" text-white block w-full px-4 py-2 mt-2  bg-black border border-gray-200 rounded-md focus:border-[#C7002F] focus:ring-[#C7002F] focus:ring-opacity-40  focus:outline-none focus:ring"
                                required>
                        </div>
                        <div class="my-2">
                            <label class="text-white font-semibold tracking-wide text-lg" for="email">Department </label>
                            <input id="department" name="department" type="text"
                                class="text-white block w-full px-4 py-2 mt-2  bg-black border border-gray-200 rounded-md focus:border-[#C7002F] focus:ring-[#C7002F] focus:ring-opacity-40  focus:outline-none focus:ring"
                                required>
                        </div>
                        <div class="my-2">
                            <label class="text-white font-semibold tracking-wide text-lg" for="email">Year &
                                Section</label>
                            <input id="year" name="year_and_section" type="text"
                                class="block w-full px-4 py-2 mt-2 text-white bg-black border border-gray-200 rounded-md focus:border-[#C7002F] focus:ring-[#C7002F] focus:ring-opacity-40  focus:outline-none focus:ring"
                                required>
                        </div>
                    </div>

                    <div class="grid grid-cols-1 gap-6 mt-4 sm:grid-cols-2  orbitron uppercase mb-3">
                        {{-- <div class="my-2">
                            <label class="text-white font-semibold tracking-wide text-lg" for="username">Phone number
                            </label>
                            <input id="username" name="phone_number" type="text" autocomplete="nickname"
                                class=" text-white block w-full px-4 py-2 mt-2  bg-black border border-gray-200 rounded-md focus:border-[#C7002F] focus:ring-[#C7002F] focus:ring-opacity-40  focus:outline-none focus:ring"
                                required>
                        </div> --}}
                        <div class="my-2">
                            <label class="text-white font-semibold tracking-wide text-lg" for="email">Whatsapp
                                number</label>
                            <input name="whatsapp_number" type="number" autocomplete="none"
                                class=" text-white block w-full px-4 py-2 mt-2  bg-black border border-gray-200 rounded-md focus:border-[#C7002F] focus:ring-[#C7002F] focus:ring-opacity-40  focus:outline-none focus:ring"
                                required>
                        </div>
                    </div>

                    <div class="my-2 orbitron uppercase mb-3">
                        <label class="text-white font-semibold tracking-wide text-lg" for="email">Upload your college
                            ID card</label>
                        <input type="file" name="college_id_card" required />
                    </div>


                    @if ($event->fifa_event)
                        <div class="my-2 orbitron uppercase">
                            <label class="text-white font-semibold tracking-wide text-lg" for="email">Do you have a PS4
                                Controller ?</label>
                            <select id="country" name="fifa_event" autocomplete="country-name"
                                class="text-white block w-full px-4 py-2 mt-2  bg-black border border-gray-200 rounded-md focus:border-[#C7002F] focus:ring-[#C7002F] focus:ring-opacity-40  focus:outline-none focus:ring"
                                required>
                                <option value="1">Yes</option>
                                <option value="0">No</option>
                            </select>
                        </div>
                    @endif

                    @if ($event->project_based_event)
                        <input type="hidden" name="project_based_event" value="1">
                        <div class="orbitron uppercase">
                            <div class="my-2 ">
                                <label class="text-white font-semibold tracking-wide text-lg" for="username">Project
                                    Title</label>
                                </label>
                                <input id="username" name="project_title" type="text" autocomplete="nickname"
                                    class=" text-white  block w-full px-4 py-2 mt-2  bg-black border border-gray-200 rounded-md focus:border-[#C7002F] focus:ring-[#C7002F] focus:ring-opacity-40  focus:outline-none focus:ring"
                                    required>
                            </div>
                            <div class="my-2 ">
                                <label class="text-white font-semibold tracking-wide text-lg" for="username">Project
                                    Abstract</label>
                                </label>
                                <textarea id="username" name="project_abstract" type="text" autocomplete="nickname"
                                    class=" text-white block w-full px-4 py-2 mt-2  bg-black border border-gray-200 rounded-md focus:border-[#C7002F] focus:ring-[#C7002F] focus:ring-opacity-40  focus:outline-none focus:ring"
                                    required></textarea>
                            </div>

                        </div>
                    @endif

                </div>




                @if ($event->max_team_members > 0)
                    <div class="orbitron uppercase">
                        <h2 class="text-white font-semibold tracking-wide text-lg" for="username">Team Members Details
                        </h2>
                        <div class="grid grid-cols-1 gap-6 mt-4 sm:grid-cols-2  ">
                            @for ($i = 0; $i < $event->max_team_members; $i++)
                                <div class="my-2">
                                    <label class="text-white font-semibold tracking-wide text-lg" for="username">Team
                                        Member
                                        {{ $i }} </label>
                                    <input id="username" name="team_member_names[]" type="text"
                                        autocomplete="nickname"
                                        class=" text-white block w-full px-4 py-2 mt-2  bg-black border border-gray-200 rounded-md focus:border-[#C7002F] focus:ring-[#C7002F] focus:ring-opacity-40  focus:outline-none focus:ring">
                                </div>
                            @endfor
                        </div>
                    </div>
                @endif

                <div>
                    <p class="text-white text-sm mt-2 tracking-wide">After submission you will be redirected to the payment
                        page</p>
                </div>
                <div class="flex justify-end mt-6">
                    <button type="submit"
                        class=" px-8 py-3 oswald-bold-500 uppercase tracking-wide leading-5 text-white transition-colors duration-300 transform bg-[#FF003C]  hover:bg-[#FF2054] focus:outline-none">Submit</button>
                </div>
            </form>
        </div>
    </section>

    <div
        class="z-50 inset-x-0 bottom-0 sticky flex justify-center bg-gradient-to-t from-black  pb-8 pointer-events-none dark:from-slate-900 absolute">
    </div>
@endsection
