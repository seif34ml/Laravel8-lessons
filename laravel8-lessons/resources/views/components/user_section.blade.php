<div class="mt-8 md:mt-0 flex items-center justify-between">
    @auth
    <div class="flex justify-between items-center">
        <span>
            Welcome <span class="text-blue-500">
                <a href="/user/{{auth()->user()->id}}">
          {{auth()->user()->name}}</a>
            </span>
        </span>
        <a href="/logout" method="POST" class="bg-blue-500 ml-3 rounded-full text-xs font-semibold text-white uppercase py-3 px-5">
        logout </a>
   </div>
    @endauth

    @guest
    <a href="/register" class="text-xs font-bold uppercase">Register</a>
    @endguest
    <a href="#" class="bg-blue-500 ml-3 rounded-full text-xs font-semibold text-white uppercase py-3 px-5">
        Subscribe for Updates
    </a>
</div>
