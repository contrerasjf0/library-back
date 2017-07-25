@extends('layouts.base')

@section('title', 'Remove')

@section('content')
    @component('components.buttoms.back')
    @endcomponent
    <div class="container__remove row">

        <h3>Remove Book</h3>
        @component('components.forms.bookRemove' , ['book' => $book])
        @endcomponent
@stop
