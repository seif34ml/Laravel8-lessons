<x-layout>


    <section class="px-6 py-8 ">


     <h1 class="text-xl mt-14 font-bold mx-auto text-center mt-8 mb-4 underline"> Login</h1>

     <form action="/login" class=" mx-auto flex flex-col w-2/5 items-center justify-between" method="POST" id="logForm">
        {{ csrf_field() }}

        <label class="mt-4 mb-3"  for="inputname" class="mt-4 mb-2">username</label>

        @if ($errors->has('name'))
        <input value="{{old('name')}}" style="border-color: red"  type="name" name="name" id="inputname" class="form-control capitalize w-full py-4 px-4 bg-gray-100 border-2 border-red rounded-md" placeholder="username" >
        <span class="error mt-2 text-red-600 text-sm">{{ $errors->first('name')}}</span>
        @else
        <input value="{{old('name')}}" type="name" name="name" id="inputname" class="form-control capitalize w-full py-4 px-4 bg-gray-100 border-2 rounded-md" placeholder="username" >
        @endif




        <label class="mt-4 mb-3"  for="inputPassword">Password</label>

        @if ($errors->has('password'))
        <input value="{{old('password')}}" style="border-color: red" type="password" name="password" id="inputPassword" class="form-control form-control capitalize w-full py-4 px-4 bg-gray-100 border-2 rounded-md" placeholder="Password">
        <span class="error mt-2 text-red-600 text-sm">{{ $errors->first('password') }}</span>
       @else
       <input value="{{old('password')}}" type="password" name="password" id="inputPassword" class="form-control form-control capitalize w-full py-4 px-4 bg-gray-100 border-2 rounded-md" placeholder="Password">

        @endif

        <button class="btn mt-4 bg-blue-500 ml-3 rounded-full text-xs font-semibold text-white uppercase py-3 px-5 btn-lg btn-primary btn-block btn-login text-uppercase font-weight-bold mb-2" type="submit">Sign In</button>
        <div class="text-center">If you have an account?
        <a class="small bg-blue-500" href="{{url('register')}}">Log In</a></div>
        </form>
    </section>
</x-layout>
