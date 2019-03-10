<!DOCTYPE html>
<html lang="en">


@include('shared._head')

<body>
<!-- ##### Preloader ##### -->
<div id="preloader">
    <i class="circle-preloader"></i>
</div>

@include('shared._header')
<!-- ##### Breadcumb Area Start ##### -->
<div>

    <div class="top-popular-courses-area mt-50 section-padding-100-70">
        <div class="container">
            @yield('content')
        </div>
    </div>




</div>

<!-- ##### Footer Area Start ##### -->

@include('shared._fotter')

</body>

</html>
