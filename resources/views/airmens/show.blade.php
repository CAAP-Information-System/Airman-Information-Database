@extends('airmens.layout')
<!--
    TODO
    ✅  1. Rearrange the labels (per category)
    ✅  2. Display the information in a table format
    ⛔     3. Design information
    ✅  4. Arrange the spacing of content
 -->

<head>
    <link rel="stylesheet" type="text/css" href="{{ url('css/airmen/show.css') }}">
</head>
@section('content')


<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>Airman Information</h2>
        </div>
        <div class="pull-right">
            <a class="btn btn-primary" href="{{ route('airmens.index') }}"> Back</a>
        </div>
    </div>
</div>

<div class="main">
    <div class="base-user">
        <!-- image is null for the mean time since no backend for image display yet -->
        <img style="height: auto; width: 200px" src="/img/avatar.png" alt="">
        <div class="user-data">
            <div class="pel">
                PEL NO. {{ $airmen->id }}
            </div>
            <div class="uname">
                {{ $airmen->lname }}, {{ $airmen->fname }} {{ $airmen->mname }}
            </div>
            <div class="id-data">
                <div class="user-cont">{{ $airmen->company }}</div>
                <div class="">{{ $airmen->email }}</div>
            </div>
        </div>


    </div>
    <div class="transaction-btn">
        <a  class="btn btn-success" href="{{ route('transactions.index') }}">Create Transaction</a>
    </div>

    <div class="row">
        <!-- NAME CARD -->
        <div class="col">
            <div class="card-container-details">

                <div class="card-hdr">Basic Information</div>
                <hr>
                <table class="tbl">
                    <tbody>
                        <th class="section-hdr">
                            Location
                        </th>
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
                        <th class="section-hdr">
                            Contact Information
                        </th>
                        <tr>
                            <td><label>Mobile Number:</label></td>
                            <td>{{ $airmen->mobile }}</td>
                        </tr>
                        <tr>
                            <td><label>Telephone Number:</label></td>
                            <td>{{ $airmen->phone }}</td>
                        </tr>
                        <th class="section-hdr">
                            Identity
                        </th>
                        <tr>
                            <td> <label>Nationality:</label></td>
                            <td>{{ $airmen->nationality }}</td>
                        </tr>
                        <tr>
                            <td><label>Sex:</label></td>
                            <td>{{ $airmen->sex }}</td>
                        </tr>
                        <tr>
                            <td><label>Height(cm):</label></td>
                            <td>{{ $airmen->height }}</td>
                        </tr>
                        <tr>
                            <td><label>Weight(kg):</label></td>
                            <td>{{ $airmen->weight }}</td>
                        </tr>
                        <tr>
                            <td><label>Hair Color:</label></td>
                            <td>{{ $airmen->hair }}</td>
                        </tr>
                        <tr>
                            <td><label>Eyes:</label></td>
                            <td>{{ $airmen->eyes }}</td>
                        </tr>
                    </tbody>
                </table>
                <hr>
            </div>
        </div>
        <div class="col">

            <div class="card-container-lcd">
                <div class="hdr-notice">TO BE FILLED OUT BY LCD OFFICER (Data reflected in the License)</div>
                <div class="card-lcd">
                    <form action="">
                        <div class="field-set-lcd">
                            <div class="fieldgrp">
                                <label>Types of License:</label>
                                <div>N/A</div>
                            </div>
                            <div class="fieldgrp">
                                <label>License No:</label>
                                <div>N/A</div>
                            </div>
                            <div class="fieldgrp">
                                <label>Date of Issuance:</label>
                                <div>N/A</div>
                            </div>
                            <div class="fieldgrp">
                                <label>List of Ratings:</label>
                                <div>N/A</div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    @endsection
