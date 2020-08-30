<h1 class="font-bold text-xl m-4">Followings</h1>

<ul>
    @forelse (auth()->user()->follows as $user)
    <li>
        <div>
            <a href="{{route('profile', $user)}}" class="flex items-center text-sm mx-3 my-4">

                <img src="https://i.pravatar.cc/40px?u={{$user->email}}" alt="Avatar" class="rounded-full mr-4">
                {{$user->name}}
            </a>
        </div>
    </li>

    @empty

    <p class="p-4">
        No following yet.

    </p>
    @endforelse

</ul>
