@extends('layout.master')
@section('Content')
@if(session('Note'))
<div class="alert alert-success">
    {{session('Note')}}
</div>
@endif
<div class="table-responsive">
<table class="table table-primary">
    <tbody>
        <thead>
            <tr>
                <th class=\"text-center\">ID</th>
                <th class=\"text-center\">Name</th>
                <th class=\"text-center\">Publisher</th>
                <th class=\"text-center\">Genre</th>
                <th class=\"text-center\">Price</th>
                <th class=\"text-center\">Edit</th>
            </tr>
        </thead>
    </tbody>
</table>
</div>

@foreach ($novels as $novel)
<div
    class="table-responsive"
>
    <table
        class="table table-primary"
    >
        <thead>
<tr>
    <td class="text-left">{{ $Novel->ID }}</td>
    <td class="text-left">{{ $Novel->Name }}</td>
    <td class="text-left">{{ $Novel->Publisher }}</td>
    <td class="text-left">{{ $Novel->Genre }}</td>
    <td class="text-left">{{ $Novel->Price }}</td>
    <td class="center">
        <a href="updateNovel/{{ $Novel->ID }}">
            <i class="fa fa-pencil fa-fw"></i> Edit
        </a>
    </td>
</tr>
        </thead>
    </table>
</div>
@endforeach
@endsection