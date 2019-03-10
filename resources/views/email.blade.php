@extends('layouts.main')

@section('pagename', 'Email')

@section('content')
    <div class="container">

        <div class="row">
            <div class="col-md-12">

              @if (count($errors) > 0)
               <div class="alert alert-danger">
               <button type="button" class="close" data-dismiss="alert">×</button>
                 <ul>
              @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
              @endforeach
             </ul>
           </div>
       @endif

         @if ($message = Session::get('success'))
            <div class="alert alert-success alert-block">
               <button type="button" class="close" data-dismiss="alert">×</button>
           <strong>{{ $message }}</strong>
             </div>
           @endif

                <form method="POST" action="{{ route('sendEmail') }}">
                    {{ csrf_field() }}
                     <div class="form-group">
                        <label for="usr">Email Type: </label>
                           <select name="type">
                        <option value="Personal">Personal</option>
                        <option value="Official">Official</option>
                    </select>
                    </div>
                 
                    <div class="form-group">
                        <label for="usr">From:</label>
                        <input type="text" class="form-control" id="usr" name="from">
                    </div>
                    <div class="form-group">
                        <label for="sender">To:</label>
                        <input type="text" class="form-control" id="email" name="to">
                    </div>
                    <div class="form-group">
                        <label for="sender">Subject:</label>
                        <input type="text" class="form-control" id="email" name="subject">
                    </div>
                    <div class="form-group">
                        <label for="sender">Name:</label>
                        <input type="text" class="form-control" id="email" name="name">
                    </div>
                    <p>The form below contains a textarea for email:</p>
                    <form>
                        <div class="form-group">
                            <label for="comment">Text area:</label>
                            <textarea class="form-control" rows="5" id="comment" name="message"></textarea>
                        </div>
                        <div class="form-group">
                        <label for="sender">Address Line 1:</label>
                        <input type="text" class="form-control" id="email" name="address_line_1">
                    </div>
                    <div class="form-group">
                        <label for="sender">Address Line 2:</label>
                        <input type="text" class="form-control" id="email" name="address_line_2">
                    </div>
                      <div class="form-group">
                        <label for="sender">Address Line 3:</label>
                        <input type="text" class="form-control" id="email" name="address_line_3">
                    </div>
                    <div class="form-group">
                        <label for="sender">Address Line 4:</label>
                        <input type="text" class="form-control" id="email" name="address_line_4">
                    </div>
                    <div class="form-group">
                        <label for="sender">Contact Number:</label>
                        <input type="text" class="form-control" id="email" name="number">
                    </div>
                        <input type="submit" name="" class="pull-right" value="Send">
                    </form>

            </div>
        </div>

    </div>


@endsection
