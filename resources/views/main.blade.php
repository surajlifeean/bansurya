<!DOCTYPE html>
<html lang="en">

@include('_head')

@include('_nav')

<body>


<div class="container">

@yield('content')

</div>

@include('_footer')


@include('_javascript')


@yield('scripts')


</body>

</html>
