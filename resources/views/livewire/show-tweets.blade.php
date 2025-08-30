<div>
    {{$content}}
    <hr>

    <form wire:submit.prevent="create" method="post">
        <input type="text" wire:model="content" name="content">
        <button type="submit">Tweet</button>
        @error('content')
            <ul>
                <li>{{ $message }}</li>
            </ul>
        @enderror
    </form>

    <hr>
    @foreach ($tweets as $tweet)
        <h2>{{$tweet->user->name}}</h2>
        <p>{{$tweet->content}}</p>
    @endforeach
    {{ $tweets->links() }}
</div>
