<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Admin Tin tức 24H</title>


    @include('admin.layouts.partials.css')
</head>

<body>

    <div class="page-wrapper">


        <div class="main-container">

            @include('admin.layouts.partials.sidebar')


            <div class="app-container">


                @include('admin.layouts.partials.navbar')

                @yield('content')
                
            </div>


        </div>


    </div>

    @include('admin.layouts.partials.js')
</body>

</html>
