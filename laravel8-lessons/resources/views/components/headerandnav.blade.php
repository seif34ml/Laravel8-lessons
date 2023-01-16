@props(['categories','currentCategory'])

<nav class="md:flex md:justify-between md:items-center">
    <div class=" ">
        <a href="/">
            <img src="../images/logo.svg" alt="Laracasts Logo" width="165" height="16">
        </a>
    </div>
   <x-user_section>
   </x-user_section>
</nav>

<header class="max-w-xl mx-auto mt-20 text-center">
  <x-user_title/>

    @if($categories!==[])
  <x-categories :categories="$categories" :currentCategory="$currentCategory" />
    @endif
</header>
