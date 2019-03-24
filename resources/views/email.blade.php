@extends('layouts.main')

@section('pagename', 'Email')

@section('content')
    <div class="container">
      <!--creating the mail view form-->
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
               <!--sending submission request to send email to send method-->
                <form method="POST" action="{{ url('/sendemail/send') }}">
                    <input type="hidden" name="email" value="test@test.com">
                    {{ csrf_field() }}
                     <div class="form-group">
                        <label for="usr">Email Type: </label>
                           <select name="type">
                        <option value="Personal">Personal</option>
                        <option value="Official">Official</option>
                         <option value="Official">Letters</option>
                          <option value="Official">Complaints</option>
                          <option value="Official">Inquiry</option>
                          <option value="Official">Acknowledgements</option>


                    </select>
                    </div>

                    <div class="form-group">
                        <label for="usr">From:</label>
                        <input type="text" class="form-control" name="from">
                    </div>

                    <div class="form-group">
                        <label for="usr">To:</label>
                        <input type="text" class="form-control" name="To">
                    </div>
                    <div class="form-group">
                        <label for="usr">Greeting:</label>
                        <input type="text" class="form-control" name="Greeting">
                    </div>
                    <div class="form-group">
                        <label for="sender">Subject:</label>
                        <input type="text" class="form-control" name="subject">
                    </div>
                    <div class="form-group">
                        <label for="sender">Name:</label>
                        <input type="text" class="form-control" name="name">
                    </div>
                    <div class="form-group">
                        <label for="usr">Index Number:</label>
                        <input type="text" class="form-control" name="index_number">
                    </div>
                    <div class="form-group">
                        <label for="usr">Your problem:</label>
                        <input type="text" class="form-control" name="your_problem">
                    </div>
                    <p>The form below contains a textarea for email:</p>
                        <div class="form-group">
                            <label for="comment">Text area:</label>
                            <textarea class="form-control" rows="5" name="message"></textarea>
                        </div>
                        <div class="form-group">
                        <label for="sender">Address Line 1:</label>
                        <input type="text" class="form-control" name="address_line_1">
                    </div>
                    <div class="form-group">
                        <label for="sender">Address Line 2:</label>
                        <input type="text" class="form-control" name="address_line_2">
                    </div>
                      <div class="form-group">
                        <label for="sender">Address Line 3:</label>
                        <input type="text" class="form-control" name="address_line_3">
                    </div>
                    <div class="form-group">
                        <label for="sender">Address Line 4:</label>
                        <input type="text" class="form-control" name="address_line_4">
                    </div>
                    <div class="form-group">
                        <label for="sender">Contact Number:</label>
                        <input type="text" class="form-control" name="number">
                    </div>
                    <div class="form-group">
                        <label for="sender">Logo:</label>
                        <input type="text" class="form-control" name="logo">
                    </div>
                        <input type="submit" name="" class="pull-right" value="Send">
                    </form>
            </div>
        </div>

    </div>


@endsection
