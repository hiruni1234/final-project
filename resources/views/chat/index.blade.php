@extends('layouts.main')

@section('pagename', 'Friends')

@section('content')

    <section class="about-us-area mt-50 section-padding-100">
        <div class="container">
            <div class="row">
                {{--<div class="col-12">--}}
                <table class="table">
                    <tbody>
                    @forelse($friends as $friend)

                    <tr>
                        <td><img src="{{ url('img/pic3.jpg') }}" style="width: 50px; height: 50px; border: 1px solid green; border-radius: 50%"></td>
                        <td><a href="{{ route('chat.show', $friend->id) }}" class="panel-block" style="justify-content: space-between;">{{ $friend->name }}</a></td>
                        <onlineuser v-bind:friend="{{ $friend }}" v-bind:onlineusers="onlineUsers"></onlineuser>
                    </tr>

                    @empty
                        <div class="panel-block">
                            You don't have any friends
                        </div>
                    @endforelse

                    </tbody>
                </table>
                {{--@forelse($friends as $friend)--}}
                {{--<a href="{{ route('chat.show', $friend->id) }}" class="panel-block" style="justify-content: space-between;">--}}
                    {{--<div>{{ $friend->name }}</div>--}}
                    {{--<onlineuser v-bind:friend="{{ $friend }}" v-bind:onlineusers="onlineUsers"></onlineuser>--}}
                {{--</a>--}}
                {{--@empty--}}
                    {{--<div class="panel-block">--}}
                        {{--You don't have any friends--}}
                    {{--</div>--}}
                {{--@endforelse--}}
                {{--</div>--}}
            </div>
        </div>
    </section>


@endsection
