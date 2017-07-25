@extends('layouts.base')

@section('title', 'List')

@section('content')
    <table class="table table-bordered" id="books-table">
        <thead>
            <tr>
                <th>Id</th>
                <th>Name</th>
                <th>Autor</th>
                <th>Category</th>
                <th>Published date</th>
                <th>Borrowed</th>
                <th>Actions</th>
            </tr>
        </thead>
    </table>
@stop
