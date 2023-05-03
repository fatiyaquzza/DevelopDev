<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <script src="../path/to/flowbite/dist/flowbite.min.js"></script>
    <title>Contact Us</title>
    <style>
        #menu-toggle:checked+#menu {
            display: block;
        }

        #dropdown-toggle:checked+#dropdown {
            display: block;
        }
    </style>

</head>

<body class="flex flex-col min-h-screen bg-sky-100">
    <x-header />
    <div class="container my-32 px-6 mx-auto">

        <section class="mb-12 text-gray-800">
            <div class="flex flex-wrap">
                <div class="grow-0 shrink-0 basis-auto mb-6 md:mb-0 w-full md:w-6/12 px-3 lg:px-6">
                    <h2 class="text-3xl font-bold mb-6">Contact us</h2>
                    <p class="text-gray-500 mb-6 text-justify">
                        We value your feedback and are always looking to improve our services. If you have <br>any
                        questions
                        or comments, please don't hesitate to contact us using the form.
                    </p>
                    <p class="text-blue-500 mb-2 mt-8 font-medium">Email Address</p>
                    <p class="text-gray-500 mb-6">Informatika@fmipa.usk.ac.id</p>
                    <p class="text-blue-500 mb-2 font-medium">Phone Number</p>
                    <p class="text-gray-500 mb-6">+62-851-01420565</p>
                    <p class="text-blue-500 mb-2 font-medium">Location</p>
                    <p class="text-gray-500 mb-6 leading-6">Gedung Fakultas MIPA, Blok A Lantai 3
                        <br>Jl. Syech Abdurrauf No. 3
                        <br>Kopelma Darussalam, Banda Aceh, 23111
                        <br>ACEH-INDONESIA
                    </p>
                </div>
                <div class="grow-0 shrink-0 basis-auto mb-12 md:mb-0 w-full md:w-6/12 px-3 lg:px-6 mt-6">
                    <form action="" method="post">
                        <div class="mb-6">
                            <label for="nama"
                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nama</label>
                            <input type="text" name="nama" id="nama"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                required>
                        </div>
                        <div class="mb-6">
                            <label for="email"
                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Email</label>
                            <input type="text" name="email" id="email"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                required>
                        </div>
                        <label for="message" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Your
                            message</label>
                        <textarea id="message" rows="6"
                            class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                            placeholder="Leave a comment..." required></textarea>

                        <div class="form-group form-check text-center mb-6 mt-8">
                            <input type="checkbox"
                                class="form-check-input appearance-none h-4 w-4 border border-gray-300 rounded-sm bg-white checked:bg-blue-600 checked:border-blue-600 focus:outline-none transition duration-200 mt-1 align-top bg-no-repeat bg-center bg-contain mr-2 cursor-pointer"
                                id="exampleCheck87" checked>
                            <label class="form-check-label inline-block text-gray-800" for="exampleCheck87">Send me a
                                copy of this
                                message</label>
                        </div>
                        <div class="flex flex-col items-center">
                            <button type="submit"
                                class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800 ">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </section>
       

    </div>
    
    <x-footer />
</body>

</html>
