@extends('layouts.app')
@section('content')
<section class="container">
    <h1>{{ $project->name }}</h1>
    <p>{{ $project->description }}</p>
    <h2>{{ $project->language }}</h2>
    <h3>{{ $project->type->name }}</h3>
    <img src="{{asset('storage/'.$project->image)}}" alt="{{ $project->name }}">
    @if(count($project->technologies) > 0)
    <div class="mb-3">
        <h4>Project technologies</h4>
        @foreach ($project->technologies as $technology)
            <a class="badge rounded-pill text-bg-success" href="{{route('admin.technologies.show', $technology->slug)}}">{{$technology->name}}</a>
        @endforeach

    </div>
@endif
</section>
@endsection
