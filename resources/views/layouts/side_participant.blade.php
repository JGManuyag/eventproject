<!doctype html>
<html>
<head>
<title>Wow Much Participants</title>
   
    @include('includes.head')

</head>

<body>

<header>
        @include('includes.participant')
</header>

    <div id="main">

    	<div id="sidebar" class="col-sm-1">
            
        </div>

        <!-- main content -->
        <div id="content" class="col-md-10">
            @yield('content')
        </div>

    </div>

</body>
</html>