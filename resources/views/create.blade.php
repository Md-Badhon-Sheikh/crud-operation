<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/daisyui@5" rel="stylesheet" type="text/css" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css">
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    <script src="https://cdn.tailwindcss.com"></script>

    <title>Document</title>
</head>

<body>
    <main>
        <div class="navbar bg-base-100 shadow-sm">
            <div class="navbar-start">
                <div class="dropdown">
                    <div tabindex="0" role="button" class="btn btn-ghost lg:hidden">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h8m-8 6h16" />
                        </svg>
                    </div>
                    <ul
                        tabindex="0"
                        class="menu menu-sm dropdown-content bg-base-100 rounded-box z-1 mt-3 w-52 p-2 shadow">
                        <li><a>Home</a></li>
                        <li><a>About Us</a></li>
                        <li><a>Contact</a></li>
                    </ul>
                </div>
                <a class="btn btn-ghost text-xl">daisyUI</a>
            </div>
            <div class="navbar-center hidden lg:flex">
                <ul class="menu menu-horizontal px-1">
                    <li><a class="text-lg font-semibold ">Home</a></li>
                    <li><a class="text-lg font-semibold ">About Us</a></li>
                    <li><a class="text-lg font-semibold ">Contact</a></li>
                </ul>
            </div>
            <div class="navbar-end">

            </div>
        </div>
        <section class="mt-4 px-20 mx-auto">
            <div class="flex justify-between ">
                <a href="/" class="btn bg-green-600 rounded text-white"> <i class="fa-solid fa-backward"></i> Create</a>
                <a href="/" class="btn bg-green-600 rounded text-white">Back to home</a>
            </div>

            <div class="my-10 px-20">
               <form action="{{route('store')}}" method="POST" enctype="multipart/form-data">

                <div class="flex flex-col gap-4 border-2 border-green-600 py-5 px-8 rounded">
                    @csrf
                    <label for="name" class="font-semibold ">Name</label>
                    <input type="text" value="{{old('name')}}" name="name" class="border-2 border-gray-300 py-2 px-2 rounded">
                    @error('name')
                    <p class="text-red-500">{{$message}}</p>
                    @enderror


                    <label for="email" class="font-semibold ">Email</label>
                    <input type="email" value="{{old('email')}}" name="email" class="border-2 border-gray-300 py-2 px-2 rounded">
                    @error('email')
                    <p class="text-red-500">{{$message}}</p>
                    @enderror


                    <label for="image" class="font-semibold ">Image</label>
                    <input type="file" name="image" class="border-2 border-gray-300 py-2 px-2 rounded">
                    @error('image')
                    <p class="text-red-500">{{$message}}</p>
                    @enderror

                    <div>
                        <input type="submit" class="bg-green-500 text-white py-2 px-4 rounded font-semibold w-full mt-2">
                    </div>

                </div>
               </form>
            </div>
        </section>
    </main>
</body>

</html>