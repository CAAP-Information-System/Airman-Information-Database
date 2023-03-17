@extends('airmens.layout')

@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Edit Client Details</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('airmens.index') }}"> Back</a>
            </div>
        </div>
    </div>

    @if ($errors->any())
        <div class="alert alert-danger">
            <strong>Whoops!</strong> There were some problems with your input.<br><br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('airmens.update',$airmen->id) }}" method="POST">
        @csrf
        @method('PUT')

         <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Last Name:</strong>
                    <input type="text" name="lname" value="{{ $airmen->lname }}" class="form-control">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>First name:</strong>
                    <input type="text" name="fname" value="{{ $airmen->fname }}" class="form-control">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Middle Name:</strong>
                    <input type="text" name="mname" value="{{ $airmen->mname }}" class="form-control">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Address:</strong>
                    <input type="text" name="address" value="{{ $airmen->address }}" class="form-control">
            </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                <strong>City:</strong>
                <input type="text" name="city" value="{{ $airmen->city }}" class="form-control">
            </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                <strong>Province:</strong>
                <input type="text" name="province" value="{{ $airmen->province }}" class="form-control">
            </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                <strong>Nationality:</strong>
                <input type="text" name="nationality" value="{{ $airmen->nationality }}" class="form-control">
            </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                <strong>Country:</strong>
                <input type="text" name="country" value="{{ $airmen->country }}" class="form-control">
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                <strong>Postal Code:</strong>
                <input type="text" name="postal" value="{{ $airmen->postal }}" class="form-control">
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                <strong>Mobile No.:</strong>
                <input type="text" name="mobile" value="{{ $airmen->mobile }}" class="form-control">
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                <strong>Phone No.:</strong>
                <input type="text" name="phone" value="{{ $airmen->phone }}" class="form-control">
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                <strong>Company/School:</strong>
                <input type="text" name="company" value="{{ $airmen->company }}" class="form-control">
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                <strong>Email Address:</strong>
                <input type="text" name="email" value="{{ $airmen->email }}" class="form-control">
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                <strong>Sex:</strong>
                <input type="text" name="sex" value="{{ $airmen->sex }}" class="form-control">
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                <strong>Height(cm):</strong>
                <input type="text" name="height" value="{{ $airmen->height }}" class="form-control">
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                <strong>Weight(kg):</strong>
                <input type="text" name="weight" value="{{ $airmen->weight }}" class="form-control">
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                <strong>Hair Color:</strong>
                <input type="text" name="hair" value="{{ $airmen->hair }}" class="form-control">
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                <strong>Eyes:</strong>
                <input type="text" name="eyes" value="{{ $airmen->eyes }}" class="form-control">
            </div>
        </div>
            <div class="col-xs-12 col-sm-12 col-md-12 text-center">
              <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </div>

    </form>
@endsection
