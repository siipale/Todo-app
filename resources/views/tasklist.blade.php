@include('layouts.app')
@if($data['tasks']->count() == 0)
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">No available tasks</div>
                <div class="card-body">

                </div>
            </div>
        </div>
    </div>
</div>
@endif

@foreach($data['tasks'] as $task)
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{Str::upper(($task->title))}}</div>
                <div class="card-body">
                     <p>
                    {{$task->description }}
                    </p>
                    <button>Done</button>
                </div>
            </div>
        </div>
    </div>
</div>
@endforeach
