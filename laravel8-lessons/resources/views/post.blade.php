<x-layout>
    <section class="px-6 py-8">
        <x-headerandnav />


        <main class="max-w-6xl mx-auto mt-10 lg:mt-20 space-y-6">
           <x-post-card-featured :post="$post" />
        </main>

<x-footer/>
</x-layout>
