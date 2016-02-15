<!doctype html>
<html>
<head>
<title>Attendee</title>
    @include('includes.head')
</head>
<body>

<header>
        @include('includes.header')
</header>

<div>

    <div id="main" class="col-sm-15">

    <div id="sidebar" class="col-sm-1">
            
        </div>

        <!-- sidebar content -->
        <div id="sidebar" class="col-sm-2">
            @include('includes.side_attendee')
        </div>
<br><br><br><br>
        <!-- main content -->
        <div id="content" class="col-md-8">
            @yield('content')
        </div>

    </div>

    <footer class="row">
        <!--@include('includes.footer')-->
    </footer>

</div>
</body>
</html>