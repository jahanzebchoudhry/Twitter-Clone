@extends('layouts.app')

@section('content')


<div class="lg:flex lg:justify-between">
    <div class="w-1/6">
        @include('_sidebar-links')
    </div>

    <div class="lg:flex-1 lg:max-10 lg:mb-10" style="width: 700px" >
        @include('_publish-tweet-panel')

        @include('_timeline')

    </div>

    <div class="w-1/6 rounded-lg bg-blue-100" style="height: fit-content">
        @include('_friends-link')
    </div>
</div>
@endsection
