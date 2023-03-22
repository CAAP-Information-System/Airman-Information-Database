@extends('officers.layout')
@section('content')
<div>
    <h3>Enter Officer</h3>
    <form action="{{ route('officers.store') }}" method="POST">
        @csrf
        <fieldset>
            <input type="text" name="name" id="" placeholder="enter name">
            <input type="text" name="office" id="" placeholder="enter office">
            <input type="text" name="position" id="" placeholder="enter position">
        </fieldset>
        <input type="submit" name="" id="">
    </form>

</div>
@endsection
