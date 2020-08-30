<div class="flex border-b">
    <div class="flex-shrink-0 m-4">
        <a href="{{route('profile', $tweet->user)}}">
            <img src="https://i.pravatar.cc/50px?u={{$tweet->user->email}}" alt="Your Avatar" class="rounded-full">

        </a>
    </div>
    
    <div class="m-4">
        <a href="{{route('profile', $tweet->user)}}">

            <h5 class="font-bold text-lg">{{$tweet->user->name}}</h5>
        </a>

        <p class="text-sm">{{$tweet->body}}</p>

        <div class="flex ">
            <form action="/tweets/{{$tweet->id}}/like" method="POST">
                @csrf
                <div class="flex items-center {{$tweet->isLikedBy(current_user())? 'text-blue-400': 'text-gray-600'}}">
                <button>
                    
                    <i class="fa fa-thumbs-up mr-1 fa-xs {{$tweet->isLikedBy(current_user())? 'text-blue-400': 'text-gray-600'}}"
                        aria-hidden="true"></i>

                    <span>
                        {{$tweet->likes ?: 0}}
                    </span>
                </button>

                </div>
                
            </form>

            <form action="/tweets/{{$tweet->id}}/like" method="POST">
                @csrf
                @method('DELETE')

                <div
                
                    class="flex items-center {{$tweet->isDislikedBy(current_user())? 'text-red-400': 'text-gray-600'}}">
                <button>

                    <i class="fa fa-thumbs-down fa-xs ml-3 mr-1 mt-1 {{$tweet->isDislikedBy(current_user())? 'text-red-400': 'text-gray-600'}}"
                        aria-hidden="true"></i>

                    <span>
                        {{$tweet->dislikes ?: 0}}
                    </span>
                </button>

                </div>

            </form>


        </div>

    </div>


</div>
