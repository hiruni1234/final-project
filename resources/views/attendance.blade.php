@extends('layouts.main')

@section('pagename', 'Attendance Progress')

@section('content')

<html>
<title>W3.CSS</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<body>

<div class="w3-container">
    <h2>Attendance</h2>
    <p> You can see your attendance progress here .</p>

    <div class="w3-light-grey">
        <div id="myBar" class="w3-container w3-green" style="height:24px;width:1%"></div>
    </div>

    <button class="w3-button w3-light-grey" onclick="move()">Click Me</button>

    <script>
        function move() {
            var elem = document.getElementById("myBar");
            var width = 1;
            var id = setInterval(frame, 10);
            function frame() {
                if (width >= 100) {
                    clearInterval(id);
                } else {
                    width++;
                    elem.style.width = width + '%';
                }
            }
        }
    </script>
   <p>Your Progress</p><div class="w3-light-grey w3-xxlarge">
        <div class="w3-container w3-green" style="width:50%">50%</div>
    </div>
</div>

</body>
</html>

@endsection
