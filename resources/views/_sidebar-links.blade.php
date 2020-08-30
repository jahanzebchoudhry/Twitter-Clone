<ul style="background-color: hotpink">
    <li>
        <a href="/tweets" class="font-bold text-lg mb-4 block">
            Home
        </a>
    </li>
    <li>
        <a href="/explore" class="font-bold text-lg mb-4 block">
            Explore
        </a>
    </li>
    <li>
    <a href="{{route('profile', auth()->user()->username )}}" class="font-bold text-lg mb-4 block">
            Profile
        </a>
    </li>
    <li>
        <form action="/logout" method="POST">
            @csrf
            <button class="font-bold text-lg">
                LogOut
            </button>
        </form>
    </li>
</ul>