<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Page Audio</title>

    <!-- tailwind -->
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body>
    <div class="w-full h-full py-8 md:py-8">
        <div class="m-auto w-11/12 md:w-8/12 md:py-4 md:px-8 py-2 px-4 border space-y-3">

            <!-- header div -->
            <div class="flex items-center justify-between">


                <!-- header component -->
                <div class="flex items-center">
                    <h2 class="text-xl font-bold text-slate-800">Add Page: Audio</h2>
                </div>

                <!-- header component -->
                <div>
                    <button class="border border-cyan-500 bg-cyan-100 py-2 px-5 text-slate-500 hover:bg-cyan-200">Save Comic Page</button>
                    <button class="border border-gray-300 bg-gray-100 py-2 px-5 text-slate-500 hover:bg-gray-200">Cancel</button>
                </div>

            </div>
            <!-- end header div -->

            <!-- divider -->
            <div class="border-b"></div>
            <!-- end divider -->

            <!-- dialog -->
            <div class="border md:py-4 md:px-8 py-2 px-4 space-y-5">

                <!-- header component -->
                <div class="flex items-center">
                    <h2 class="text-xl text-slate-800">Dialog & SFX</h2>
                </div>

                <!-- create 2 columns -->
                <div class="inline-block align-top md:grid md:grid-cols-2 gap-4 space-y-4 md:space-y-0">

                    <!-- Comic image -->
                    <div class="border">
                        <img src="https://64.media.tumblr.com/a533502945edec63822989b77b319896/6500dfb2f7f4dfd2-2c/s500x750/73224cf7de0a0a64ef9ac18e8d58e317f7cf59a9.png" alt="Image">
                    </div>

                    <!-- placeholder for comic image controls -->
                    <div class="inline-block w-full align-top space-y-4">

                        <!-- image control button -->
                        <div>
                            <button class="border w-full border-gray-300 bg-gray-100 py-2 px-5 text-slate-500 hover:bg-gray-200">
                                Track Audio
                            </button>
                            <p class="text-red-400 px-2 text-sm">
                                <i>Track speech bubble or sfx in image</i>
                            </p>
                        </div>

                        <!-- Audio list division -->
                        <div class="border px-4 py-2 space-y-3">
                            <!-- header component -->
                            <div class="flex items-center">
                                <h2 class="text-md text-slate-800">Audio</h2>
                            </div>

                            <!-- divider -->
                            <div class="border-b"></div>
                            <!-- end divider -->

                            <!-- Audio list -->
                            <div class="space-y-2">

                                <!-- First list -->
                                <div class="border py-2 px-3 w-full flex justify-between">

                                    <div class="flex justify-start items-center gap-4">
                                        <div class="cursor-move">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                                <path stroke-linecap="round" stroke-linejoin="round" d="M4 6h16M4 12h16M4 18h16" />
                                            </svg>
                                        </div>
                                        <div class="flex justify-start items-center gap-3">
                                            <div>
                                                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                                    <path stroke-linecap="round" stroke-linejoin="round" d="M14.752 11.168l-3.197-2.132A1 1 0 0010 9.87v4.263a1 1 0 001.555.832l3.197-2.132a1 1 0 000-1.664z" />
                                                    <path stroke-linecap="round" stroke-linejoin="round" d="M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                                                </svg>
                                            </div>
                                            <div>
                                                Audio 1.mp3
                                            </div>
                                        </div>
                                    </div>

                                    <div class="flex justify-start items-center gap-4">
                                        <div>
                                            <svg xmlns="http://www.w3.org/2000/svg" class="cursor-pointer h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                                <path stroke-linecap="round" stroke-linejoin="round" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z" />
                                            </svg>
                                        </div>
                                        <div>
                                            <svg xmlns="http://www.w3.org/2000/svg" class="cursor-pointer h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                                <path stroke-linecap="round" stroke-linejoin="round" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                                            </svg>
                                        </div>
                                    </div>
                                </div>
                                <!-- end of first list -->

                                <!-- second list -->
                                <div class="border py-2 px-3 w-full flex justify-between">

                                    <div class="flex justify-start items-center gap-4">
                                        <div class="cursor-move">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                                <path stroke-linecap="round" stroke-linejoin="round" d="M4 6h16M4 12h16M4 18h16" />
                                            </svg>
                                        </div>
                                        <div class="flex justify-start items-center gap-3">
                                            <div>
                                                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                                    <path stroke-linecap="round" stroke-linejoin="round" d="M14.752 11.168l-3.197-2.132A1 1 0 0010 9.87v4.263a1 1 0 001.555.832l3.197-2.132a1 1 0 000-1.664z" />
                                                    <path stroke-linecap="round" stroke-linejoin="round" d="M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                                                </svg>
                                            </div>
                                            <div>
                                                Audio 1.mp3
                                            </div>
                                        </div>
                                    </div>

                                    <div class="flex justify-start items-center gap-4">
                                        <div>
                                            <svg xmlns="http://www.w3.org/2000/svg" class="cursor-pointer h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                                <path stroke-linecap="round" stroke-linejoin="round" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z" />
                                            </svg>
                                        </div>
                                        <div>
                                            <svg xmlns="http://www.w3.org/2000/svg" class="cursor-pointer h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                                <path stroke-linecap="round" stroke-linejoin="round" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                                            </svg>
                                        </div>
                                    </div>
                                </div>
                                <!-- end of second list -->

                            </div>
                            <!-- end audio list -->
                        </div>
                    </div>
                    <!-- end for  placeholder of image(comic) controls -->

                </div>


            </div>
            <!-- Dialog & SFX -->

            <!-- 2 columns below for background music and Settings -->
            <div class="inline-block space-y-3 md:space-y-0 md:grid md:grid-cols-2 gap-4 w-full">

                <div class="border p-4 space-y-4">
                    <!-- header component -->
                    <div class="flex items-center">
                        <h2 class="text-lg font-bold text-slate-800">Background Music</h2>
                    </div>

                    <div>
                        <audio controls class="w-full">
                            <source src="horse.ogg" type="audio/ogg">
                            <source src="horse.mp3" type="audio/mpeg">
                            Your browser does not support the audio element.
                        </audio>

                    </div>

                    <div class="flex justify-center w-full">
                        <button class="border border-gray-300 bg-gray-100 py-2 px-5 text-slate-500 hover:bg-gray-200">
                            Upload Music
                        </button>
                    </div>

                </div>

                <!-- second column -->
                <div class="border p-4 space-y-4">
                    <!-- header component -->
                    <div class="flex items-center">
                        <h2 class="text-lg font-bold text-slate-800">Settings</h2>
                    </div>

                    <div>
                        <div class="">
                            <div class="form-check form-switch">
                                <input class="form-check-input appearance-none w-9 rounded-full float-left h-5 align-top bg-white bg-no-repeat bg-contain bg-gray-300 focus:outline-none cursor-pointer shadow-sm" type="checkbox" role="switch" id="flexSwitchCheckChecked" checked>
                                <label class="form-check-label inline-block text-gray-800" for="flexSwitchCheckChecked"> Autoplay</label>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


        </div>
    </div>
</body>

</html>