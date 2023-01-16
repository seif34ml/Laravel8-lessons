@props(['post'])
<form class="flex flex-col " action='/post/{{$post->slug}}/comments' method="POST">
    @csrf
    <div class="flex">
    <img class=" mr-5 rounded-full w-12 h-12" src="https://i.pravatar.cc/150?u={{auth()->user()->id}}" alt="">

    @if ($errors->has('comment'))
    <textarea placeholder="leave comment here" class="border-red-900  border-2 mb-2 rounded-md h-20 w-full" name="comment" id="comment" cols="30" rows="10">
    </textarea>
    @else
    <textarea placeholder="leave comment here" class="border-grey-900  border-2 mb-2 rounded-md h-20 w-full" name="comment" id="comment" cols="30" rows="10">
      </textarea>
@endif


    </div>

  @if ($errors->has('comment'))
        <span style="margin-left: 68px" class=" block text-red-600">cannot be empty</span>
    @endif
    <input class=" bg-blue-500 rounded-full cursor-pointer text-white w-fit self-end py-3 px-5 font-semibold" type="submit" value="Comment">
</form>
