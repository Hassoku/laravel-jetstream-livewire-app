<!DOCTYPE html>
<html lang="en">

<head>
   @include('layout.partials.head')

</head>


<body class="bg-gray-800 font-sans leading-normal tracking-normal mt-12">

    <!--Nav-->
 @include('layouts.partials.header')


    <div class="flex flex-col md:flex-row">

      

        <div class="main-content flex-1 bg-gray-100 mt-12 md:mt-2 pb-24 md:pb-5">
            <main>
                {{ $slot }}
            </main>




        </div>
    </div>


    @include('layouts.partials.scripts')

   @yield('scripts')


</body>

</html>
