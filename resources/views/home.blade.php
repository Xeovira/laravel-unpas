<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Home</title>
    @vite('resources/css/app.css')
</head>

<body>
    <!-- Navbar -->
    <nav class="relative flex w-full flex-nowrap items-center justify-between bg-blue-300 py-4 text-neutral-500 shadow-lg hover:text-neutral-700 focus:text-neutral-700 lg:flex-wrap lg:justify-start" data-te-navbar-ref>
        <div class="flex w-full flex-wrap items-center justify-between px-6">
            <div class="!visible hidden flex-grow basis-[100%] items-center lg:!flex lg:basis-auto" id="navbarSupportedContent3" data-te-collapse-item>
                <a class="text-xl text-black" href="#">Navbar</a>
                <!-- Left links -->
                <ul class="list-style-none mr-auto flex flex-col pl-0 lg:flex-row" data-te-navbar-nav-ref>
                    <li class="lg:px-2" data-te-nav-item-ref>
                        <a class="active disabled:text-black/30 lg:px-2 [&.active]:text-black/90 dark:[&.active]:text-neutral-400" aria-current="page" href="#" data-te-nav-link-ref>Home</a>
                    </li>
                    <li class="lg:pr-2" data-te-nav-item-ref>
                        <a class="p-0 text-neutral-500 hover:text-neutral-700 focus:text-neutral-700 disabled:text-black/30 lg:px-2 [&.active]:text-black/90 dark:[&.active]:text-neutral-400" href="#" data-te-nav-link-ref>Features</a>
                    </li>
                    <li class="lg:pr-2" data-te-nav-item-ref>
                        <a class="p-0 text-neutral-500 hover:text-neutral-700 focus:text-neutral-700 disabled:text-black/30 lg:px-2 [&.active]:text-black/90 dark:[&.active]:text-neutral-400" href="#" data-te-nav-link-ref>Pricing</a>
                    </li>
                    <li class="lg:pr-2" data-te-nav-link-ref>
                        <a class="text-black/30 lg:px-2 [&.active]:text-black/90 dark:[&.active]:text-neutral-400">Disabled</a>
                    </li>
                </ul>
                <!-- Left links -->
            </div>

            <!-- Collapsible wrapper -->
        </div>
    </nav>
    <!-- End Navbar -->

    <div class="m-5">
        <h1 class="text-5xl">Hello World</h1>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous">
    </script>
</body>

</html>