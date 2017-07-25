@extends('layouts.base')

@section('title', 'Edit')

@section('content')
        @component('components.buttoms.back')
        @endcomponent
    <div class="container__add row">
        

        <h3>Edit Book</h3>
        
        @component('components.forms.book' , ['book' => $book])
           @slot('context')
                Edit
           @endslot
        @endcomponent
    </div>
@stop