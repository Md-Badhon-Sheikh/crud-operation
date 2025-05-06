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
                <a href="/" class="btn bg-yellow-500 rounded text-white"> <i class="fa-solid fa-backward"></i> back</a>
                <a href="/create" class="btn bg-green-600 rounded text-white">Create New Post</a>
            </div>
        </section>

        @if(session('success'))
        <h2 class="text-green-600 text-center mt-7">{{session('success')}}</h2>

        @endif

        <!-- view table  -->

        <div class="flex flex-col mx-20 mt-5">
            <div class="-m-1.5 overflow-x-auto">
                <div class="p-1.5 min-w-full inline-block align-middle">
                    <div class="overflow-hidden">
                        <table class="min-w-full divide-y divide-gray-200 dark:divide-neutral-700">
                            <thead>
                                <tr>
                                    <th scope="col" class="px-6 py-3 text-start text-xs font-medium text-gray-500 uppercase dark:text-neutral-500">Id</th>
                                    <th scope="col" class="px-6 py-3 text-start text-xs font-medium text-gray-500 uppercase dark:text-neutral-500">Name</th>
                                    <th scope="col" class="px-6 py-3 text-start text-xs font-medium text-gray-500 uppercase dark:text-neutral-500">Email</th>
                                    <th scope="col" class="px-6 py-3 text-start text-xs font-medium text-gray-500 uppercase dark:text-neutral-500">Image</th>
                                    <th scope="col" class="px-6 py-3 text-start text-xs font-medium text-gray-500 uppercase dark:text-neutral-500">Action</th>
                                </tr>
                            </thead>
                            <tbody class="divide-y divide-gray-200 dark:divide-neutral-700">

                                @foreach ($posts as $post)

                                <tr class="hover:bg-gray-100 dark:hover:bg-neutral-700">
                                    <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-800 dark:text-neutral-200"> {{$post->id}} </td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-800 dark:text-neutral-200">{{$post->name}}</td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-800 dark:text-neutral-200">{{$post->email}}</td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-800 dark:text-neutral-200"> <img src="images/{{$post->image}}" width="50px" alt=""> </td>
                                    <td class="px-6 py-4 whitespace-nowrap text-start text-sm font-medium">
                                       <a href="{{route('edit', $post->id)}}" class="btn bg-green-600 px-4 py-1 rounded text-white">Edit</a>
                                       
                                       <a href="{{route('delete', $post->id)}}" class="btn bg-red-500 px-4 py-1 rounded text-white">Delete</a>
                                       
                                    </td>
                                </tr>

                                @endforeach

                            </tbody>
                        </table>
                        {{$posts -> links()}}
                    </div>
                </div>
            </div>
        </div>
    </main>
</body>

</html>