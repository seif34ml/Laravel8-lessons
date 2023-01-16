@props(["comments"])
<div class="flex flex-col">
   @foreach($comments as $comment)
     <div class="flex  my-4 ">
         <img class="w-12 mr-5 rounded-full h-12 " src="https://i.pravatar.cc/150?u={{$comment->user_id}}" alt="">
          <div class="bg-gray-100 w-9/12 py-4   rounded-md px-4">
            <div class="flex justify-between">
            <h1 class="text-sm font-bold mb-5 ">{{$comment->owner->name}}</h1>
            <p class="text-sm text-gray-400 italic ">{{$comment->created_at->diffForHumans()}}</p>
            </div>
            <span class="mb-5">{{$comment->comment}}</span>
          </div>
     </div>
   @endforeach
<div>
</div>
</div>
