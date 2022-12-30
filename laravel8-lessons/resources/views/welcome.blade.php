<x-layout>


    <section class="px-6 py-8">
        <x-headerandnav :categories="[]"/>

        <main class="max-w-6xl mx-auto mt-0 lg:mt-20 space-y-6">
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
                   <a class="small text-blue-500" href="{{url('registration')}}">Sign Up</a></div>
                   </form>
               </section>
        </main>

        <footer class="bg-gray-100 border border-black border-opacity-5 rounded-xl text-center py-16 px-10 mt-16">
            <img src="../images/lary-newsletter-icon.svg" alt="" class="mx-auto -mb-6" style="width: 145px;">
            <h5 class="text-3xl">Stay in touch with the latest posts</h5>
            <p class="text-sm mt-3">Promise to keep the inbox clean. No bugs.</p>

            <div class="mt-10">
                <div class="relative inline-block mx-auto lg:bg-gray-200 rounded-full">

                    <form method="POST" action="#" class="lg:flex text-sm">
                        <div class="lg:py-3 lg:px-5 flex items-center">
                            <label for="email" class="hidden lg:inline-block">
                                <img src="../images/mailbox-icon.svg" alt="mailbox letter">
                            </label>

                            <input id="email" type="text" placeholder="Your email address"
                                   class="lg:bg-transparent py-2 lg:py-0 pl-4 focus-within:outline-none">
                        </div>

                        <button type="submit"
                                class="transition-colors duration-300 bg-blue-500 hover:bg-blue-600 mt-4 lg:mt-0 lg:ml-3 rounded-full text-xs font-semibold text-white uppercase py-3 px-8"
                        >
                            Subscribe
                        </button>
                    </form>
                </div>
            </div>
        </footer>
    </section>
</body>
</x-layout>
