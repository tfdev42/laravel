<h1>List of tasks</h1>

@isset($name)
    <div>The name is {{ $name }}</div>     
@endisset

<div>
    @if(count($tasks))
        <div>There are tasks</div>        
    @else
        <div>There are no tasks!</div>
    @endif
</div>
