@extends('layouts.app')

@section('content')

<div class="lg:flex lg:justify-between">

    <div class="w-1/6">
        @include('_sidebar-links')
    </div>

    
<form action="{{$user->path()}}" method="post" enctype="multipart/form-data" style="width:800px">
        @csrf
        @method('PUT') 

        <h1 class="font-bold text-lg mb-2">Edit your Profile</h1>
            <div class="mb-6">
                <label class="block mb-2 uppercase font-bold text-sm text-grey-300" for="name">
                    Name
                </label>
            <input class="border border-grey-300 p-2 w-full" type="text" name="name" id="name" value="{{$user->name}}" placeholder="Enter your Name" required>
            </div>
            @error('name')
                <p class="text-sm mb-2 text-red-300">
                    {{$message}}
                </p>
            @enderror

            <div class="mb-6">
                <label class="block mb-2 uppercase font-bold text-sm text-grey-300" for="username">
                    UserName
                </label>
                <input class="border border-grey-300 p-2 w-full" type="text" name="username" id="username" value="{{$user->username}}" placeholder="Enter your UserName" required>
            </div>
            @error('username')
                <p class="text-sm mb-2 text-red-300">
                    {{$message}}
                </p>
            @enderror

            <div class="mb-6">
                <label class="block mb-2 uppercase font-bold text-sm text-grey-300" for="avatar">
                    Avatar
                </label>
                <input class="border border-grey-300 p-2 w-full" type="file" name="avatar" id="avatar">
            </div>
            @error('avatar')
                <p class="text-sm mb-2 text-red-300">
                    {{$message}}
                </p>
            @enderror

            <div class="mb-6">
                <label class="block mb-2 uppercase font-bold text-sm text-grey-300" for="email">
                    Email
                </label>
                <input class="border border-grey-300 p-2 w-full" type="text" name="email" id="email" value="{{$user->email}}" placeholder="Enter your Email" required>
            </div>
            @error('email')
                <p class="text-sm mb-2 text-red-300">
                    {{$message}}
                </p>
            @enderror

            <div class="mb-6">
                <label class="block mb-2 uppercase font-bold text-sm text-grey-300" for="password">
                    Password
                </label>
                <input class="border border-grey-300 p-2 w-full" type="text" name="password" id="password" placeholder="Enter your Password" required>
            </div>
            @error('password')
                <p class="text-sm mb-2 text-red-300">
                    {{$message}}
                </p>
            @enderror

            <div class="mb-6">
                <label class="block mb-2 uppercase font-bold text-sm text-grey-300" for="password_confirmation">
                   Confirm Password
                </label>
                <input class="border border-grey-300 p-2 w-full" type="text" name="password_confirmation" id="password_confirmation" placeholder="Confirm your Password" required>
            </div>
            @error('password_confirmation')
                <p class="text-sm mb-2 text-red-300">
                    {{$message}}
                </p>
            @enderror

            <button class=" bg-blue-400 text-white text-lg rounded-lg p-2" type="submit">Submit</button>
            
        </form>

    <div class="w-1/6 rounded-lg bg-blue-100" style="height: fit-content">
        @include('_friends-link')
    </div>

</div>

@endsection
