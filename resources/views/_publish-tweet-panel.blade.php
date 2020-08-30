<div class="border border-blue-500 rounded-lg mx-4 px-4 py-6">
    <form method="POST" action="/tweets">
        @csrf
        <textarea name="body" id="body" class="w-full" placeholder="Enter your tweets here...">
                </textarea>
        <hr class="my-4">
        <div class="flex justify-between">
            <img src="https://i.pravatar.cc/40px?u={{auth()->user()->email}}" alt="" class="rounded-full mr-4">

            <button type="submit" class="bg-blue-500 py-2 px-2 rounded-lg text-white">
                Publish tweet
            </button>
        </div>
        
        @error('body')
        <p class="text-red-500 text-sm">{{$message}}</p>
        @enderror
    </form>
</div>
