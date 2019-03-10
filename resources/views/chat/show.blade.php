@extends('layouts.main')

@section('pagename', 'Chat')

@section('content')

    <link rel="stylesheet" type="text/css" href="{{ url('css/style1.css') }}">

    <section class="about-us-area mt-50 section-padding-50">
        <div class="container">
            <div class="row">
                <div class ="col-12">

                    <div class="container">

                        <div class="row">

                            <div class="chatbox">
                                {{ $friend->name }}
                                <div class="chatlogs">


                                    <div class="chat friend">

                                        <div class="user-photo"><img src="{{ url('img/pic3.jpg') }}" style="width: 50px; height: 50px; border: 1px solid green; border-radius: 50%"></div>
                                        <div class="chat-message"> <p class="chat-message">what's up, brother...!</p></div>
                                    </div>
                                    <div class="chat self">

                                        <div class="user-photo"><img src="{{ url('img/pic3.jpg') }}" style="width: 50px; height: 50px; border: 1px solid green; border-radius: 50%"></div>
                                        <div class="chat-message"><p class="chat-message">what's up,...!</p></div>
                                    </div>
                                    <div class="chat friend">

                                        <div class="user-photo"><img src="{{ url('img/pic3.jpg') }}" style="width: 50px; height: 50px; border: 1px solid green; border-radius: 50%"></div>
                                        <div class="chat-message"><p class="chat-message">Hello! how are you ?</p></div>
                                    </div>
                                    <div class="chat friend">

                                        <div class="user-photo"><img src="{{ url('img/pic3.jpg') }}" style="width: 50px; height: 50px; border: 1px solid green; border-radius: 50%"></div>
                                        <div class="chat-message"> <p class="chat-message">what's up, brother...!</p></div>
                                    </div>
                                    <div class="chat self">

                                        <div class="user-photo"><img src="{{ url('img/pic3.jpg') }}" style="width: 50px; height: 50px; border: 1px solid green; border-radius: 50%"></div>
                                        <div class="chat-message"><p class="chat-message">what's up,...!</p></div>
                                    </div>
                                    <div class="chat friend">

                                        <div class="user-photo"><img src="{{ url('img/pic3.jpg') }}" style="width: 50px; height: 50px; border: 1px solid green; border-radius: 50%"></div>
                                        <div class="chat-message"><p class="chat-message">Hello! how are you ?</p></div>
                                    </div>
                                    <div class="chat friend">

                                        <div class="user-photo"><img src="{{ url('img/pic3.jpg') }}" style="width: 50px; height: 50px; border: 1px solid green; border-radius: 50%"></div>
                                        <div class="chat-message"><p class="chat-message">Hello! how are you ?</p></div>
                                    </div>
                                    <div class="chat friend">

                                        <div class="user-photo"><img src="{{ url('img/pic3.jpg') }}" style="width: 50px; height: 50px; border: 1px solid green; border-radius: 50%"></div>
                                        <div class="chat-message"><p class="chat-message">Hello! how are you ?</p></div>
                                    </div>
                                    <div class="chat friend">

                                        <div class="user-photo"><img src="{{ url('img/pic3.jpg') }}" style="width: 50px; height: 50px; border: 1px solid green; border-radius: 50%"></div>
                                        <div class="chat-message"><p class="chat-message">Hello! how are you ?</p></div>
                                    </div>
                                    <div class="chat friend">

                                        <div class="user-photo"><img src="{{ url('img/pic3.jpg') }}" style="width: 50px; height: 50px; border: 1px solid green; border-radius: 50%"></div>
                                        <div class="chat-message"><p class="chat-message">Hello! how are you ?</p></div>
                                    </div>
                                    <div class="chat friend">

                                        <div class="user-photo"><img src="{{ url('img/pic3.jpg') }}" style="width: 50px; height: 50px; border: 1px solid green; border-radius: 50%"></div>
                                        <div class="chat-message"><p class="chat-message">Hello! how are you ?</p></div>
                                    </div>

                                    <div class="chat-form">
                                        <textarea></textarea>
                                        <button>Send</button>

                                    </div>
                                </div>
                                <a href="{{ url('/chat') }}" class="is-link"><i class="fa fa-arrow-left"></i> Go Back</a>

                            </div>
                            <chat v-bind:chats="chats" v-bind:userid="{{ Auth::user()->id }}" v-bind:friendid="{{ $friend->id }}"></chat>
                        </div>
                    </div>
    </section>




@endsection
