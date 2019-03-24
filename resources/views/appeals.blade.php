@extends('layouts.main')

@section('pagename', 'Appeals')

@section('content')



<form>


<div class="form-group">
                        <label for="usr">Frirst Name:</label>
                        <input type="text" class="form-control" id="usr" name="from">
                    </div>

<div class="form-group">
                        <label for="usr">Last name:</label>
                        <input type="text" class="form-control" id="usr" name="from">
                    </div>

                        <div class="form-group">
                            <label for="comment">Problem:</label>
                            <textarea class="form-control" rows="5" id="comment" name="message"></textarea>
                        </div>
                        <input type="submit" name="" class="pull-right" value="Send">

</form>
@endsection
