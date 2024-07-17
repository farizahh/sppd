<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign In</title>
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.css" rel="stylesheet" />
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.js"></script>
</head>

<body>
    <section id="signin">
        <div class="flex flex-col items-center justify-center px-6 py-8 mx-auto md:h-screen lg:py-0">
            <div class="w-full bg-white rounded-lg shadow md:mt-0 sm:max-w-md xl:p-0">
                <div class="p-6 space-y-1">
                    <img src="assets/img/logo.png" class="w-[103px] h-[130px] mx-auto" alt="">
                    <h1 class="text-3xl font-bold text-zinc-800 text-center">
                        LOGIN
                    </h1>
                    <p class="text-zinc-800 text-2xl font-bold text-center">Dashboard SPPD</p>
                    <form class="space-y-4 md:space-y-6" action="#">
                        <div>
                            <label for="email" class="block mb-2 text-sm font-normal text-zinc-800">Email</label>
                            <input type="email" name="email" id="email" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 placeholder-gray-300" placeholder="Masukkan Email yang telah terdaftar..." required="">
                        </div>
                        <div>
                            <label for="password" class="block mb-2 text-sm font-normal text-zinc-800">Kata Sandi</label>
                            <div class="relative">
                                <input type="password" name="password" id="password" placeholder="Masukkan Kata Sandi.." class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 placeholder-gray-300" required="">
                                <i class="fa-solid fa-eye-slash" onclick="togglePassword()"></i>
                            </div>
                            <script src="assets/js/script.js"></script>
                        </div>
                        <div class="flex items-center justify-between">
                            <a href="#" class="text-sm font-normal text-zinc-800 hover:underline">Lupa Kata Sandi?</a>
                        </div>
                        <div class="flex items-center justify-between">
                            <div class="flex items-start text-sm">
                                <div class="flex items-center h-5">
                                    <input id="remember" aria-describedby="remember" type="checkbox" class="w-4 h-4 border border-gray-300 rounded bg-gray-50 focus:ring-3 focus:ring-primary-300" required="">
                                    <label for="remember" class="text-zinc-800 ml-3">Tetap Masuk</label>
                                </div>
                                <div class="ml-36">
                                    <button type="button" class="text-zinc-800 bg-[#D6F170] hover:bg-lime-300 focus:ring-4 focus:ring-lime-300 font-medium rounded-lg text-sm px-10 py-2.5 me-2 mb-2 focus:outline-none" onclick="window.location.href = 'user.php';">Login</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
</body>

</html>