@extends('layouts.app')

@section('title', 'Projects')

@section('content')
<div class="container py-5">

  <a class=" d-inline-block mb-3" href="{{route('admin.projects.create')}}">Add new project</a>

  <table class="table">
    <thead>
      <tr>
        <th>Title</th>
        <th>Repository</th>
        <th>Create date</th>
        <th>Last update</th>
        <th>Author</th>
        <th></th>
      </tr>
    </thead>
    <tbody>
      @forelse($projects as $project)
      <tr>
        <td>{{$project['title']}}</td>
        <td>{{$project['repository']}}</td>
        <td>{{$project['date_create']}}</td>
        <td>{{$project['last_update']}}</td>
        <td>{{$project['author']}}</td>
        <td>
          <a href="{{route('admin.projects.show', $project)}}">show</a> |
          <a href="{{route('admin.projects.edit', $project)}}">edit</a>

        </td>
      </tr>
      @empty
      <tr>
        <td colspan="100">
          Not any project found
        </td>
      </tr>
      @endforelse
    </tbody>
  </table>
</div>
@endsection