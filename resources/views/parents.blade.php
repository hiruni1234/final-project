@extends('layouts.main')

@section('pagename', 'Parents portal')

@section('content')
    <div class="row">
        <div class="col-md-12">

            <div style="background-image: url('../img/pic36.jpg');  background-repeat: no-repeat; background-size: cover; width: 100%; height: 500px">
            </div>
            <!-- Load icon library -->
            <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

            <!-- The form -->
            <form class="example" action="action_page.php">
                <input type="text" placeholder="Search.." name="search">
                <button type="submit"><i class="fa fa-search"></i></button>
            </form>

            <h1>Dress code for students</h1>




@endsection
