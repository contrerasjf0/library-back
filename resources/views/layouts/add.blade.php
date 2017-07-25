@extends('layouts.base')

@section('title', 'Add')

@section('content')
    @component('components.buttoms.back')
    @endcomponent
    <div class="container__add row">
        <h3>Add Book</h3>

        @component('components.forms.book')
           @slot('context')
                Add
           @endslot
        @endcomponent
    </div>
@stop
