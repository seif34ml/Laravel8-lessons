@props(['categories','currentCategory'])
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

            <input oninput="applySearch(event)" id="search"   type="text" name="search" placeholder="Find something"
                   class="bg-transparent placeholder-black font-semibold text-sm">

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
