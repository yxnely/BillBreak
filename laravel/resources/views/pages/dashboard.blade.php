@extends('app')

@section('Application-Content')

<div class="container-fluid">
    <h3>This is the dashboard</h3>
    <section>
        <a href="{{ url('/notices/create') }}">Add a Roomate</a>&nbsp;&nbsp;|&nbsp;&nbsp;
        <a href="{{ url('/notices/create') }}">Add a Bill</a>
    </section>
    
</div>

@endsection