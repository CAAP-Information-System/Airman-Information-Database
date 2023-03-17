@extends('airmens.layout')
<!--
    TODO
    1. Rearrange the labels (per category)
    2. Display the information in a table format
    3. Design information
    4. Arrange the spacing of content
 -->

<head>
    <link rel="stylesheet" type="text/css" href="{{ url('css/show.css') }}">
</head>
@section('content')


<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2> Show client details</h2>
        </div>
        <div class="pull-right">
            <a class="btn btn-primary" href="{{ route('airmens.index') }}"> Back</a>
        </div>
    </div>
</div>

<div class="main">
    <div class="base-user">
        <img style="height: auto; width: 200px" src="/img/avatar.png" alt="">
        <div class="user-data">
            <div class="uname">
                {{ $airmen->lname }}, {{ $airmen->fname }} {{ $airmen->mname }}.
            </div>
            <div class="id-data">
                <div class="user-cont">{{ $airmen->company }}</div>
                <div class="user-cont">{{ $airmen->email }}</div>
            </div>
        </div>

    </div>
    <div class="card-grp">


        <!-- NAME CARD -->
        <div class="card-container">

            <div class="card-hdr">Basic Information</div>
            <hr>
            <table class="tbl">
                <tbody>
                    <tr>
                        <td> <label>Address:</label></td>
                        <td>{{ $airmen->address }}</td>
                    </tr>
                    <tr>
                        <td><label>City:</label></td>
                        <td>{{ $airmen->city }}</td>
                    </tr>
                    <tr>
                        <td><label>Province:</label></td>
                        <td>{{ $airmen->province }}</td>
                    </tr>
                    <tr>
                        <td><label>Country:</label></td>
                        <td>{{ $airmen->country }}</td>
                    </tr>
                    <tr>
                        <td><label>Postal Code:</label></td>
                        <td>{{ $airmen->postal }}</td>
                    </tr>
                    <tr>
                        <td> <label>Nationality:</label></td>
                        <td>{{ $airmen->nationality }}</td>
                    </tr>
                    <tr>
                        <td><label>Mobile Number:</label></td>
                        <td>{{ $airmen->mobile }}</td>
                    </tr>
                    <tr>
                        <td><label>Phone/Landline Number:</label></td>
                        <td>{{ $airmen->phone }}</td>
                    </tr>
                    <tr>
                        <td><label>Sex:</label></td>
                        <td>{{ $airmen->sex }}</td>
                    </tr>
                </tbody>
            </table>
        </div>

        <div>
            <div class="form-group">
                <label>Sex:</label>

            </div>
        </div>
        <div>
            <div class="form-group">
                <label>Height(cm):</label>
                {{ $airmen->height }}
            </div>
        </div>
        <div>
            <div class="form-group">
                <label>Weight(kg):</label>
                {{ $airmen->weight }}
            </div>
        </div>
        <div>
            <div class="form-group">
                <label>Hair Color:</label>
                {{ $airmen->hair }}
            </div>
        </div>
        <div>
            <div class="form-group">
                <label>Eyes:</label>
                {{ $airmen->eyes }}
            </div>
        </div>
        @endsection
