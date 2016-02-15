<!doctype html>
<html>
<head>
<title>Account</title>
    @include('includes.head')
</head>
<body>

<header>

        @include('includes.account')
    
</header>

<div class="container">

    <div id="main" class="row">

            @yield('content')

    </div>

    <footer class="row">
    
        <!--@include('includes.footer')-->
    
    </footer>

</div>
</body>
</html>