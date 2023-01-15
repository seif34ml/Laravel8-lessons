@props(['categories','currentCategory'])

<nav class="md:flex md:justify-between md:items-center">
    <div class=" ">
        <a href="/">
            <img src="../images/logo.svg" alt="Laracasts Logo" width="165" height="16">
        </a>
    </div>

    <div class="mt-8 md:mt-0 flex items-center justify-between">
        @auth
        <div class="flex justify-between items-center">
            <span>
                Welcome <span class="text-blue-500">
              {{auth()->user()->name}}
                </span>
            </span>
            <a href="/logout" method="POST" class="bg-blue-500 ml-3 rounded-full text-xs font-semibold text-white uppercase py-3 px-5">
            logout
        </a>
    </div>
        @endauth
        @guest
        <a href="/register" class="text-xs font-bold uppercase">Register</a>
        @endguest
        <a href="#" class="bg-blue-500 ml-3 rounded-full text-xs font-semibold text-white uppercase py-3 px-5">
            Subscribe for Updates
        </a>
    </div>
</nav>

<header class="max-w-xl mx-auto mt-20 text-center">
    <h1 class="text-4xl">
        <span class="text-blue-500">Laravel8 lessons</span>
    </h1>

    <h2 class="inline-flex mt-2">By Seif Amr<img src="../images/lary-head.svg"
                                                       alt="Head of Lary the mascot"></h2>

    <p class="text-sm mt-4 ">
        lessons that makes you a master of laravel
    </p>
    @if($categories!==[])
    <div class="flex justify-between mt-8">
        <!--  Category -->
        <div style="width: 136px; height:36px" x-data="{open:false}" x-on:click="open=!open" class="relative flex lg:inline-flex items-center bg-gray-100 rounded-xl">




             <select class=" select w-full h-full rounded-xl" value="{{request('category')}}"  onchange="filter(event)"  >

                <option  value="%">All</option>
                @foreach($categories as $category)

                  <option value="{{$category->id}}">{{$category->name}}</option>
               @endforeach
             </select>


                <g fill="none" fill-rule="evenodd">
                    <path stroke="#000" stroke-opacity=".012" stroke-width=".5" d="M21 1v20.16H.84V1z">
                    </path>
                    <path fill="#222"
                          d="M13.854 7.224l-3.847 3.856 3.847 3.856-1.184 1.184-5.04-5.04 5.04-5.04z"></path>
                </g>
                </svg>
        </div>

        <div class="relative flex lg:inline-flex items-center bg-gray-100 rounded-xl px-3 py-2">
            <form method="GET" action="/">
                <input id="search" onclick="applySearch()"  type="text" name="search" placeholder="Find something"
                       class="bg-transparent placeholder-black font-semibold text-sm">
            </form>
        </div>
        <svg class="transform -rotate-90 absolute pointer-events-none" style="right: 12px;" width="22"
             height="22" viewBox="0 0 22 22">
            <g fill="none" fill-rule="evenodd">
                <path stroke="#000" stroke-opacity=".012" stroke-width=".5" d="M21 1v20.16H.84V1z">
                </path>
                <path fill="#222"
                      d="M13.854 7.224l-3.847 3.856 3.847 3.856-1.184 1.184-5.04-5.04 5.04-5.04z"></path>
            </g>
        </svg>

        <!-- Other Filters -->



    </div>
    @endif
</header>
