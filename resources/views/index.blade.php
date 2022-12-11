@extends('layout')
@section('content')
<form action="form-submit" method="get">
    @csrf
    <input type="text" placeholder="name" name="name">
    <input type="text" placeholder="lastname" name="lname">
    @component('component.button',['class'=>'btn','title'=>'send'])@endcomponent

</form>
@endsection
