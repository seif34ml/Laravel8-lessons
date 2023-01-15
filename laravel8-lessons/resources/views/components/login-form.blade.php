<section class="px-6 py-8 ">
    <h1 class="text-xl mt-8 font-bold mx-auto text-center mt-4 mb-4 underline"> Login</h1>
    <form action="/" class=" mx-auto flex flex-col w-2/5 items-center justify-between" method="POST" id="logForm">
       {{ csrf_field() }}

       <label class="mt-4 mb-3"  for="inputEmail" class="mt-4 mb-2">Email address</label>

@if ($errors->has('email'))
<input value="{{old('email')}}" style="border-color: red" type="email" name="email" id="inputEmail" class="form-control capitalize w-full py-4 px-4 bg-gray-100 border-2 rounded-md" placeholder="Email address" >

<span class="error mt-2 text-red-600 text-sm">{{ $errors->first('email')}}</span>
@else
<input value="{{old('email')}}" type="email" name="email" id="inputEmail" class="form-control capitalize w-full py-4 px-4 bg-gray-100 border-2 rounded-md" placeholder="Email address" >

@endif




       <label class="mt-4 mb-3"  for="inputPassword">Password</label>

       @if ($errors->has('password'))
       <input value="{{old('password')}}" style="border-color: red" type="password" name="password" id="inputPassword" class="form-control form-control capitalize w-full py-4 px-4 bg-gray-100 border-2 rounded-md" placeholder="Password">
       <span class="error mt-2 text-red-600 text-sm">{{ $errors->first('password') }}</span>
      @else
      <input value="{{old('password')}}" type="password" name="password" id="inputPassword" class="form-control form-control capitalize w-full py-4 px-4 bg-gray-100 border-2 rounded-md" placeholder="Password">

       @endif

       <button class="btn mt-4 bg-blue-500 ml-3 rounded-full text-xs font-semibold text-white uppercase py-3 px-5 btn-lg btn-primary btn-block btn-login text-uppercase font-weight-bold mb-2" type="submit">Sign In</button>
       <div class="text-center">have no account yet ?!!
       <a class="small text-blue-500" href="/register">Sign Up</a></div>
       </form>
   </section>
