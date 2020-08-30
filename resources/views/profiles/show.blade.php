@extends('layouts.app')

@section('content')

<div class="lg:flex lg:justify-between">

    <div class="w-1/6">
        @include('_sidebar-links')
    </div>

    <header class="mx-2">
        <img class="mx-3 rounded-lg" src="/images/coverImage.jpg" alt="Cover Image" style="width: 800px;">
        <div class="flex justify-between items-center mb-4">
            <div class="m-3">
                <h1 class="font-bold text-2xl">{{$user->name}}</h1>
                <p class="text-sm">Joined {{$user->created_at->diffForHumans()}}</p>
            </div>
            <div class="flex my-4">
                @can ('edit',$user)
                    
            <a href="{{$user->path('edit')}}" class="border border-gray-300 shadow rounded-full py-2 px-4 mx-2 text-xs text-black">
                    Edit Profile
                </a>
                @endcan
                @if (current_user()->isnot($user))

                <form action="/profiles/{{$user->username}}/follow" method="POST">
                    @csrf
                    <button type="submit"
                        class="bg-blue-500 border shadow border-gray-300 rounded-full py-2 px-4 mr-3 text-xs text-white">
                        {{current_user()->following($user)? 'UnFollow me' : 'Follow me'}}
                    </button>
                </form>
                @endif
            </div>
        </div>

        <img src="https://i.pravatar.cc/150px?u={{$user->email}}" alt="Your Avatar" class="rounded-full" style="position: absolute;
        top: 325px;
        left: 42%;">

        <p class="text-sm mx-4" style="width: 800px; text-align:center">
            Lorem ipsum, dolor sit amet consectetur adipisicing elit.
            Quidem sit quia cumque architecto eum aperiam
            Lorem ipsum, dolor sit amet consectetur adipisicing elit.
            Quidem sit quia cumque architecto eum aperiam
            Lorem ipsum, dolor sit amet consectetur adipisicing elit.
            Quidem sit quia cumque architecto eum aperiam
        </p>


        <div class="p-4">
            @include('_timeline' , [
            'tweets' => $tweets
            ])

        </div>
    </header>

    <div>

    </div>

    <div class="w-1/6 rounded-lg bg-blue-100" style="height: fit-content">
        @include('_friends-link')
    </div>

</div>

@endsection
