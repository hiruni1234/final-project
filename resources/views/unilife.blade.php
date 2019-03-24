@extends('layouts.main')

@section('pagename', 'Uni Life')

@section('content')
   

    <div class="row">
        <div class="col-md-12">

            <div style="background-image: url('../img/pic15.jpg');  background-repeat: no-repeat; background-size: cover; width: 100%; height: 500px">
            </div>
           
            <h1>Experience our vibrant university life at NIE</h1>
            <h2>Become a part of global comminity</h2>
        </div>
    </div>
    <div class="row">
        <div class="col-md-8">
            <img src="{{ url('img/pic18.jpg') }}"style= "width: 700px; height: 500px background-size: cover;" >
        </div>

        <div class="col-md-4">

        </div>
    </div>
    <p>NIE Students come from all over the world to live and learn at NIE University. Our student body represents 110 nations. They form an ambitious campus community whose internationality is unprecedented in Sri Lanka. NIE University’s green and tree-shaded 50-acre campus provides much more than buildings for teaching and research.</p>


    <h2>Share memories for life time</h2>
    <div class="row">
        <div class="col-md-8">
            <img src="{{ url('img/pic4.jpg') }}" style="width: 700px; height: 500px">
        </div>

        <div class="col-md-4">

        </div>
    </div>
    <P>NIE University does not only offer an excellent academic education but also many opportunities for student activities outside of the classroom. The variety of over 50 student clubs and more than 100 student-driven events during the year such as cultural festivals like the Deepavali Festival of Lights or Sri Lankan New Year, and educational events like Country Information Days, are the hallmark of our vibrant campus community.</P>


    <h2>Arts</h2>
    <div class="row">
        <div class="col-md-8">
            <img src="{{ url('img/pic33.jpg') }}" style="width: 700px; height: 500px">
        </div>

        <div class="col-md-4">

        </div>
    </div>
    <P>The arts scene is a vibrant part of student life at NIE University. Facilities such as TheaterSpace and MusicLab – created and built by students – bring together students who want to be a part of the performing arts. From concerts by J-Capella, the university choir, to theater plays and annual big shows like “Piano to Forte”, the “Oriental Dance Show” or the “Spotlight” talent show to the Culinary Club – there is something for everyone’s artistic side.</P>

    <h2>Personal Development</h2>
    <div class="row">
        <div class="col-md-8">
            <img src="{{ url('img/pic34.jpg') }}" style="width: 700px; height: 500px">
        </div>

        <div class="col-md-4">

        </div>
    </div>
    <P>What binds all these extracurricular activities is a chance for students to be engaged and become responsible community members from the first day they arrive. All Campus Life activities are driven by students and born out of creativity, initiative, and passion to make things happen. </P>

    <h2>Sports</h2>
    <div class="row">
        <div class="col-md-8">
            <img src="{{ url('img/pic17.jpg') }}" style="width: 700px; height: 500px">
        </div>

        <div class="col-md-4">

        </div>
    </div>
    <P>Sports are the one of main thing for the personal development.Here in NIE you have chance to join different kind of sports like swimming ,cricket , rugby  ,netball, basket ball ,table tenis ,badminton , hokey ec.</P>

    <h2>Commiunity</h2>
    <div class="row">
        <div class="col-md-8">
            <img src="{{ url('img/pic35.jpg') }}" style="width: 700px; height: 500px">
        </div>

        <div class="col-md-4">

        </div>
    </div>
    <P>At NIE we provide varieties of community. like</P>
    <ul>
        <li>Computer Science club</li>
        <li>Music Club</li>
        <li>Social Science Club</li>
        <li>Sports club</li>
        <li>Arts Club</li>
        <li>Science Club</li>
    </ul>
<!DOCTYPE html>
<html>
<style>
#div1 {
  font-size:48px;
}
</style>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<body>

<div id="div1" class="fa"></div>

<script>
function hand() {
  var a;
  a = document.getElementById("div1");
  a.innerHTML = "&#xf25a;";
  setTimeout(function () {
      a.innerHTML = "&#xf256;";
    }, 500);
  setTimeout(function () {
      a.innerHTML = "&#xf259;";
    }, 1000);
  setTimeout(function () {
      a.innerHTML = "&#xf256;";
    }, 1500);
}
hand();
setInterval(hand, 2000);
</script>


</body>
</html>

@endsection
