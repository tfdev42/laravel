<h1>List of tasks</h1>

@isset($name)
    <div>The name is {{ $name }}</div>     
@endisset

{{-- <div>
    @if(count($tasks))
        @foreach($tasks as $task)
            <div> {{ $task->title }} </div>
        @endforeach
        <div>There are tasks</div>        
    @else
        <div>There are no tasks!</div>
    @endif
</div> --}}

<div>
    @forelse($tasks as $task)
        <div>
            <a href="{{ route('tasks.show', ['id' => $task->id])}}">{{$task->title}}</a>
        </div>
        
    @empty
        <div>There are no tasks!</div>
    @endforelse
</div>
