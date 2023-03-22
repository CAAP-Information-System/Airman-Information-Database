@extends('officers.layout')
@section('content')
<div>
    test
    index

</div>
<div><a class="btn btn-success" href="{{ route('officers.create') }}">Create Officer</a></div>

<table>
    <tr>
        <th>1</th>
        <th>2</th>
        <th>3</th>
    </tr>
    @isset($endorsers)
    @foreach($endorsers as $officer)
    <tr>
        <td>{{ $officer->id }}</td>
        <td>{{ $officer->name }}</td>
        <td>{{ $officer->office }}</td>
    </tr>
    @endforeach
    @endisset
</table>
@endsection
