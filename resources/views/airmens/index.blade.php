@extends('airmens.layout')

@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>CAAP Airmen Information</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('airmens.create') }}"> Add Client</a>
            </div>
        </div>
    </div>

    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif

    <table class="table table-bordered">
        <tr>
            <th>No</th>
            <th>LName</th>
            <th>FName</th>
            <th>MName</th>
            <th>Address</th>
            <th>City</th>
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
                <td>{{ $airmen->mname }}</td>
                <td>{{ $airmen->address }}</td>
                <td>{{ $airmen->city }}</td>
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
            <td>
                <form action="{{ route('airmens.destroy',$airmen->id) }}" method="POST">

                    <a class="btn btn-info" href="{{ route('airmens.show',$airmen->id) }}">Show</a>

                    <a class="btn btn-primary" href="{{ route('airmens.edit',$airmen->id) }}">Edit</a>

                    @csrf
                    @method('DELETE')

                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
        @endisset
    </table>

    {!! $airmens->links() !!}

@endsection
