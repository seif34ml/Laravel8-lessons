<x-layout>
    <section class="px-6 py-8">
        <x-headerandnav  :categories="$categories"/>


        <main class="max-w-6xl mx-auto mt-10 lg:mt-20 space-y-6">
           <x-post-card-featured :post="$post" />
           <x-commentspanel :post="$post" />
           <x-commentform :post="$post" />
        </main>

<x-footer/>
</x-layout>
