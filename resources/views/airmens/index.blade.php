@extends('airmens.layout')
<!--
    TODO LIST:
    1. Reconstruct grid layout
    ✅  2. Spacing of contents
    ✅  3. Edit add client button
    4. Design table
    5. Create search function

 -->

<head>
    <link rel="stylesheet" type="text/css" href="{{ url('css/airmen/index.css') }}">
</head>

@section('content')
<div class="main">
    <div class=" add">
        <a class="btn btn-success" href="{{ route('airmens.create') }}"> Add Client</a>
    </div>

    @if ($message = Session::get('success'))
    <div class="alert alert-success">
        <p>{{ $message }}</p>
    </div>
    @endif
    <!-- <form action="{{ route('airmens.index') }}" method="GET">
        <input type="text" name="search" required />
        <button type="submit">Search</button>
    </form> -->
    <table class="table">
        <tr>
            <th>PEL No</th>
            <th>Last Name</th>
            <th>First Name</th>
            <th>Email Address</th>
            <th>Mobile Number</th>
            <th>Province</th>
            <!-- <th>Nationality</th>
            <th>Country</th>
            <th>Postal Code</th>
            <th>Mobile</th>
            <th>Phone</th>
            <th>Company</th>
            <th>Email</th>
            <th>Sex</th>
            <th>Height</th>
            <th>Weight</th>
            <th>Hair</th>
            <th>Eyes</th> -->
            <th width="280px">Action</th>
        </tr>
        @isset($airmens)
        @foreach($airmens as $airmen)
        <tr>
            <td>{{ ++$i }}</td>
            <td>{{ $airmen->lname }}</td>
            <td>{{ $airmen->fname }}</td>
            <td style="text-transform: none;">{{ $airmen->email }}</td>
            <td>{{ $airmen->mobile }}</td>
            <td>{{ $airmen->province }}</td>
            <!-- <td>{{ $airmen->nationality }}</td>
                <td>{{ $airmen->country }}</td>
                <td>{{ $airmen->postal }}</td>
                <td>{{ $airmen->mobile }}</td>
                <td>{{ $airmen->phone }}</td>
                <td>{{ $airmen->company }}</td>
                <td>{{ $airmen->email }}</td>
                <td>{{ $airmen->sex }}</td>
                <td>{{ $airmen->height }}</td>
                <td>{{ $airmen->weight }}</td>
                <td>{{ $airmen->hair }}</td>
                <td>{{ $airmen->eyes }}</td> -->

            <!-- CRUD ACTIONS -->
            <td style="text-transform: none;">
                <form class="btn-form" action="{{ route('airmens.destroy',$airmen->id) }}" method="POST">
                    <a class="btn btn-secondary" href="{{ route('airmens.show',$airmen->id) }}">Show</a>
                    <a class="btn btn-primary" href="{{ route('airmens.edit',$airmen->id) }}">Edit</a>
                    @csrf
                    @method('DELETE')
                    <button class="btn btn-danger" type="submit">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
        @endisset
    </table>

</div>


{!! $airmens->links() !!}

@endsection
