<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Assignment Page</title>

    <!-- Font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;600;700&display=swap" rel="stylesheet">

    <!-- Jqueey -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <!-- Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">


    <!-- CSS -->
    <!-- <link rel="stylesheet" href="./CSS/UploafField.css"> -->


    <!-- Tailwindcss -->
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://unpkg.com/flowbite@1.4.1/dist/flowbite.min.css" />
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    fontFamily: {
                        montserrat: ["Montserrat"],
                    },
                    colors: {
                        "dark-green": "#1E3F41",
                        "light-green": "#659093",
                        "cream": "#DDB07F",
                        "cgray": "#F5F5F5",
                    }
                }
            }
        }
    </script>
    <style>
        .in-active {
            width: 80px !important;
            padding: 20px 15px !important;
            transition: .5s ease-in-out;
        }

        .in-active ul li p {
            display: none !important;
        }

        .in-active ul li a {
            padding: 15px !important;
        }

        .in-active h2,
        .in-active h4,
        .in-active .logo-incareer {
            display: none !important;
        }

        .hidden {
            display: none !important;
        }

        .sidebar {
            transition: .5s ease-in-out;
        }
    </style>

</head>

<body>
    <div class="flex items-center">
        <!-- Left side (Sidebar) -->
        <div class="bg-white w-[350px] h-screen px-8 py-6 flex flex-col justify-between sidebar in-active">
            <!-- Top nav -->
            <div class="flex flex-col gap-y-6">
                <!-- Header -->
                <div class="flex items-center space-x-4 px-2">
                    <img src="Img/icons/toggle_icons.svg" alt="toggle_dashboard" class="w-8 cursor-pointer" id="btnToggle">
                    <img class="w-[150px] logo-incareer" src="./Img/logo/logo_primary.svg" alt="Logo In Career">
                </div>

                <hr class="border-[1px] border-opacity-50 border-[#93BFC1]">

                <!-- List Menus -->
                <div>
                    <ul class="flex flex-col gap-y-1">
                        <li>
                            <a href="" class="flex items-center gap-x-4 h-[50px] rounded-xl px-4 hover:bg-cream text-dark-green hover:text-white">
                                <img class="w-5" src="./Img/icons/home_icon.svg" alt="Dashboard Icon">
                                <p class="font-semibold">Dashboard</p>
                            </a>
                        </li>
                        <li>
                            <a href="#" class="flex items-center gap-x-4 h-[50px] rounded-xl px-4 bg-cream">
                                <img class="w-5" src="./Img/icons/course_icon.svg" alt="Course Icon">
                                <p class="text-white font-semibold">Courses</p>
                            </a>
                        </li>
                        <li>
                            <a href="" class="flex items-center gap-x-4 h-[50px] rounded-xl px-4 hover:bg-cream text-dark-green hover:text-white">
                                <img class="w-5" src="./Img/icons/discussion_icon.svg" alt="Forum Icon">
                                <p class="font-semibold">Forum Dicussion</p>
                            </a>
                        </li>
                        <li>
                            <a href="" class="flex items-center gap-x-4 h-[50px] rounded-xl px-4 hover:bg-cream text-dark-green hover:text-white">
                                <img class="w-5" src="./Img/icons/schedule_icon.svg" alt="Schedule Icon">
                                <p class="font-semibold">Schedule</p>
                            </a>
                        </li>
                        <li>
                            <a href="" class="flex items-center gap-x-4 h-[50px] rounded-xl px-4 hover:bg-cream text-dark-green hover:text-white">
                                <img class="w-5" src="./Img/icons/attendance_icon.svg" alt="Attendance Icon">
                                <p class="font-semibold">Attendance</p>
                            </a>
                        </li>
                        <li>
                            <a href="" class="flex items-center gap-x-4 h-[50px] rounded-xl px-4 hover:bg-cream text-dark-green hover:text-white">
                                <img class="w-5" src="./Img/icons/score_icon.svg" alt="Score Icon">
                                <p class="font-semibold">Score</p>
                            </a>
                        </li>
                        <li>
                            <a href="" class="flex items-center gap-x-4 h-[50px] rounded-xl px-4 hover:bg-cream text-dark-green hover:text-white">
                                <img class="w-5" src="./Img/icons/consult_icon.svg" alt="Consult Icon">
                                <p class="font-semibold">Consult</p>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
            <!-- Bottom nav -->
            <div>
                <ul class="flex flex-col ">
                    <li>
                        <a href="#" class="flex items-center gap-x-4 h-[50px] rounded-xl px-4 hover:bg-cream text-dark-green hover:text-white">
                            <img class="w-5" src="./Img/icons/help_icon.svg" alt="Help Icon">
                            <p class="font-semibold">Help</p>
                        </a>
                    </li>
                    <li>
                        <a href="#" class="flex items-center gap-x-4 h-[50px] rounded-xl px-4 hover:bg-cream text-dark-green hover:text-white">
                            <img class="w-5" src="./Img/icons/logout_icon.svg" alt="Log out Icon">
                            <p class="font-semibold">Log out</p>
                        </a>
                    </li>
                </ul>
            </div>
        </div>


        <!-- Right side -->
        <div class="bg-cgray w-full h-screen px-10 py-6 flex flex-col gap-y-6 overflow-y-scroll">
            <!-- Header / Profile -->
            <div class="flex items-center gap-x-4 justify-end">
                <img class="w-10" src="./Img/icons/default_profile.svg" alt="Profile Image">
                <p class="text-dark-green font-semibold">Mentor Name</p>
            </div>



            <!-- Topic Title -->
            <div class="flex justify-between">
                <div class="w-4"> <button type="button" class="text-dark-green inline-flex font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-2 mb-2 "><img class="w-5" src="./Img/icons/back_icons.svg" alt="Back Image">
                        <p class="ml-2"> Back</p>
                    </button></div>
                <div>
                    <p class="text-4xl text-dark-green font-semibold">Assignment Collection</p>
                </div>
                <div class="w-4">

                </div>


                <!-- <p class="text-2xl text-dark-green font-semibold">Session#1 Sub Topic Title</p>
                <p class="text-2xl text-dark-green font-semibold">Session#1 Sub Topic Title</p>
                <p class="text-2xl text-dark-green font-semibold">Session#1 Sub Topic Title</p> -->
            </div>

            <div>
                <p class="text-4xl text-dark-green font-semibold">Completed Assignment</p>
            </div>

            <!-- Table Assignment -->
            <div>
                <table class="shadow-lg bg-white rounded-xl" style="width: 100%">
                    <colgroup>
                        <col span="1" style="width: 10%">
                        <col span="1" style="width: 20%">
                        <col span="1" style="width: 10%">
                        <col span="1" style="width: 20%">
                        <col span="1" style="width: 10%">
                        <col span="1" style="width: 10%">

                    </colgroup>
                    <thead>
                        <tr class="text-dark-green">
                            <th class="border-b text-left px-4 py-2">No</th>
                            <th class="border-b text-center px-4 py-2">Name</th>
                            <th class="border-b text-center px-4 py-2">Published Date</th>
                            <th class="border-b text-center px-4 py-2">File</th>
                            <th class="border-b text-center px-4 py-2">Score</th>
                            <th class="border-b text-center px-4 py-2">Action</th>

                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="border-b px-4 py-2">Task1_Introduction</td>
                            <td class="border-b px-4 py-2 text-center">20-02-2022</td>
                            <td class="border-b px-4 py-2 text-center">28-02-2022</td>
                            <td class="border-b px-4 py-2 text-center">23:59</td>
                            <td class="border-b px-4 py-2 text-center ">0</td>
                            <td class="border-b px-4 py-2 "><img class="w-7 mx-auto cursor-pointer" src="./Img/icons/edit_icon.svg" alt="Edit Icon" type="button"></td>


                        </tr>

                    </tbody>
                </table>
            </div>

            <div class="mt-12">
                <p class="text-4xl text-dark-green font-semibold">Unfinished Assignment</p>
            </div>

            <!-- Table Assignment -->
            <div>
                <table class="shadow-lg bg-white rounded-xl" style="width: 100%">
                    <colgroup>
                        <col span="1" style="width: 10%">
                        <col span="1" style="width: 20%">
                        <col span="1" style="width: 10%">
                        <col span="1" style="width: 20%">
                        <col span="1" style="width: 10%">
                        <col span="1" style="width: 10%">

                    </colgroup>
                    <thead>
                        <tr class="text-dark-green">
                            <th class="border-b text-left px-4 py-2">No</th>
                            <th class="border-b text-center px-4 py-2">Name</th>
                            <th class="border-b text-center px-4 py-2">Published Date</th>
                            <th class="border-b text-center px-4 py-2">File</th>
                            <th class="border-b text-center px-4 py-2">Score</th>
                            <th class="border-b text-center px-4 py-2">Action</th>

                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="border-b px-4 py-2 text-red-600">Task1_Introduction</td>
                            <td class="border-b px-4 py-2 text-center text-red-600">20-02-2022</td>
                            <td class="border-b px-4 py-2 text-center text-red-600">28-02-2022</td>
                            <td class="border-b px-4 py-2 text-center text-red-600">23:59</td>
                            <td class="border-b px-4 py-2 text-center text-red-600">0</td>
                            <td class="border-b px-4 py-2 text-red-600"><img class="w-7 mx-auto cursor-pointer" src="./Img/icons/edit_icon.svg" alt="Edit Icon" type="button"></td>


                        </tr>

                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <!-- Main modal -->
    <div id="defaultModal" tabindex="-1" aria-hidden="true" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 w-full md:inset-0 h-modal md:h-full">
        <div class="relative p-4 w-full max-w-xl h-full md:h-auto">
            <!-- Modal content -->
            <div class="relative bg-white rounded-lg shadow ">
                <!-- Modal header -->
                <div class="flex justify-center items-start p-5 rounded-t ">
                    <h3 class="text-xl font-semibold text-gray-900 lg:text-2xl dark:text-dark">
                        Upload Submission
                    </h3>
                </div>
                <!-- Modal body -->
                <div class="px-6 space-y-6">
                    <form class="flex flex-col gap-y-4" action="" method="POST" enctype="multipart/form-data">
                        <div class="mt-1 flex justify-center px-6 pt-5 pb-6 border-2 border-gray-300 border rounded-md">
                            <div class="space-y-2 text-center">
                                <svg class="mx-auto h-20 w-20 text-gray-400" viewBox="0 0 150 150" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M118.75 56.25H93.75V18.75H56.25V56.25H31.25L75 106.25L118.75 56.25ZM25 118.75H125V131.25H25V118.75Z" fill="#DDB07F" />
                                </svg>
                                <div class="flex text-lg text-gray-600">
                                    <label for="file-upload" class="relative cursor-pointer bg-white rounded-md font-medium font-semibold hover:text-gray-500 focus-within:outline-none focus-within:ring-2 focus-within:ring-offset-2 focus-within:ring-gray-500">
                                        <span>Choose a file</span>
                                        <input id="file-upload" name="file-upload" type="file" class="sr-only dropzone" multiple>
                                    </label>
                                    <p class="pl-1">or drag it here</p>
                                </div>
                            </div>
                        </div>
                        <div class="flex justify-end p-6 space-x-2 rounded-b border-gray-200 dark:border-gray-600">
                            <button data-modal-toggle="defaultModal" type="button" class="text-gray-500 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded text-sm px-5 py-2.5 text-center hover:ring-2 hover:ring-gray-400">Close</button>
                            <button class="bg-dark-green text-[#F3D0AA] w-[120px] py-2 rounded font-medium ml-auto hover:bg-gray-800" type="submit" name="submit">Submit</button>
                        </div>
                    </form>

                </div>

            </div>
        </div>
    </div>
    <script src="https://unpkg.com/flowbite@1.4.1/dist/flowbite.js"></script>
    <script>
        let btnToggle = document.getElementById('btnToggle');
        let sidebar = document.querySelector('.sidebar');
        btnToggle.onclick = function() {
            sidebar.classList.toggle('in-active');
        }
    </script>


</body>

</html>