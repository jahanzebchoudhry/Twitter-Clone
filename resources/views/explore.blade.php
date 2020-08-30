@extends('layouts.app')

@section('content')

<div class="lg:flex lg:justify-between">

    <div class="w-1/6">
        @include('_sidebar-links')
    </div>

    <div  style="width: 800px">
        @foreach ($users as $user)

        <a href="{{$user->path()}}" class="flex items-center mb-4">
            <img src="https://i.pravatar.cc/50px?u={{$user->email}}" alt="Your Avatar" class="rounded-full">
            <p class="font-bold text-lg p-2">{{'@'. $user->username}}</p>
        </a>
        @endforeach

        {{$users->links()}}

    </div>

    <div class="w-1/6 rounded-lg bg-blue-100" style="height: fit-content">
        @include('_friends-link')
    </div>

</div>

@endsection
