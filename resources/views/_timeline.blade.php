<div class="border border-gray-400 rounded-lg my-4 p-4" style="width: 821px;
margin-left: 15px;">
    @forelse ($tweets as $tweet)
        @include('_news-feed')
        
    @empty
    <p class="p-4">
        No Tweets yet.      

    </p>
    @endforelse


    {{$tweets->links()}}
  </div>