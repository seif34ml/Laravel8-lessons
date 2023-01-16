<x-layout>


    <section class="px-6 py-8">
        <x-headerandnav :categories="[]"/>

        <main class="max-w-6xl mx-auto mt-0 lg:mt-20 space-y-6">
          <div class="flex flex-col items-center justify-center">
              <img src="https://i.pravatar.cc/150?u={{$user->id}}" class="rounded-full w-12 h-12" alt="{{$user->name}}">
              <h1 class="text-lg font-semibold">{{$user->name}}</h1>
               <span class="text-base text-gray-400">{{count($user->posts)}} posts</span>
            </div>

            @foreach ($user->posts as $post)

            <x-post-card :post="$post"/>


       @endforeach
        </main>
     <x-footer/>

    </section>
</body>
</x-layout>
