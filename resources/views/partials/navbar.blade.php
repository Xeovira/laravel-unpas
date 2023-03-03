 <!-- Navbar -->
 <nav class="relative flex w-full flex-nowrap items-center justify-between bg-blue-300 py-4 text-neutral-500 shadow-lg lg:flex-wrap lg:justify-start" data-te-navbar-ref>
     <div class="flex w-full flex-wrap items-center justify-between px-6">
         <div class="!visible hidden flex-grow basis-[100%] items-center lg:!flex lg:basis-auto" id="navbarSupportedContent3" data-te-collapse-item>
             <a class="text-xl text-black" href="#">Navbar</a>
             <ul class="list-style-none mr-auto flex flex-col pl-0 lg:flex-row" data-te-navbar-nav-ref>
                 <li class="lg:px-2" data-te-nav-item-ref>
                     <a class="p-0 {{ ($tittle === "Home") ? 'active' : '' }} [&.active]:text-black/90 text-neutral-500 focus-visible:text-red-400 hover:text-red-400 disabled:text-black/30 lg:px-2" aria-current="page" href="/" data-te-nav-link-ref>Home</a>


                 </li>
                 <li class="lg:pr-2" data-te-nav-item-ref>
                     <a class="p-0 {{ ($tittle === "About") ? 'active' : '' }}  [&.active]:text-black/90 text-neutral-500 focus-visible:text-red-400 hover:text-red-400 disabled:text-black/30 lg:px-2 " href="/about" data-te-nav-link-ref>About</a>


                 </li>
                 <li class="lg:pr-2" data-te-nav-item-ref>
                     <a class="p-0 {{ ($tittle === "Post") ? 'active' : '' }}  [&.active]:text-black/90 text-neutral-500 focus-visible:text-red-400 hover:text-red-400 disabled:text-black/30 lg:px-2 " href="/posts" data-te-nav-link-ref>Blog</a>
                 </li>
             </ul>
             <!-- Left links -->
         </div>
         <!-- Collapsible wrapper -->
     </div>
 </nav>
 <!-- End Navbar -->
