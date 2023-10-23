@extends('layouts.app')

@section('content')

<div class="container my-5">

    <table class="table">
        <thead>
            <tr>
                <th scope="col">Id</th>
                <th scope="col">Titolo</th>
        <th scope="col">Descrizione</th>
        <th scope="col">Url</th>
        <th scope="col">Slug</th>
        <th scope="col"></th>
    </tr>
</thead>
<tbody>
    @forelse ($projects as $project)
    <tr>
        <th scope="row">{{$project->id}}</th>
        <td>{{$project->title}}</td>
        <td>{{$project->description}}</td>
        <td>{{$project->url}}</td>
        <td>{{$project->slug}}</td>
        <td>
            <a href="{{route("admin.projects.show", $project)}}">Show</a>
        </td>
    </tr>
    
    @empty
    <tr>
        <td coldspan="6">Non ci sono risultati</td>
    </tr>
        
    @endforelse
    
</tbody>
</table>
</div>
@endsection