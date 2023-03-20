@extends('airmens.layout')
<!--
    TODO LIST
    ✅  1. Change form structure
    ✅  2. Design header: change to 'Create client' instead
    ✅  3. Minimize input width
    ✅  4. Categorize form fields
    5. Arrange field containers depending on its category.

 -->

<head>
    <link rel="stylesheet" type="text/css" href="{{ url('css/create.css') }}">
</head>
@section('content')
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>Please enter information</h2>
        </div>
        <div class="pull-right">
            <a class="btn btn-primary" href="{{ route('airmens.index') }}">Go Back</a>
        </div>
    </div>
</div>

@if ($errors->any())
<div class="alert alert-danger">
    <label>Invalid Input!</label> There were some problems with your input.<br><br>
    <ul>
        @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
        @endforeach
    </ul>
</div>
@endif

<div class="main">
    <form class="create-form" action="{{ route('airmens.store') }}" method="POST">
        @csrf

        <fieldset class="form-field">

            <!--  -->

            <div class="name-grp">
                <p style="font-style: italic;">Please fill out the required fields <span class="required">*</span></p>
                <div class="grp-header">I. Applicant' Name</div>
                <div class="form-group">
                    <label class="form-lbl">Last Name:</label><span class="required">*</span>
                    <input id="inp-field" type="text" name="lname" class="name-field">
                </div>
                <div class="form-group">
                    <label class="form-lbl">First Name:</label><span class="required">*</span>
                    <input id="inp-field" type="text" name="fname" class="name-field">
                </div>
                <div class="form-group">
                    <label class="form-lbl">Middle Name:</label><span class="required">*</span>
                    <input id="inp-field" type="text" name="mname" class="name-field">
                </div>

            </div>
            <hr>

            <div class="address-grp">
                <div class="grp-header">II. Applicant's Address</div>
                <div class="form-group">
                    <label class="form-lbl">Address:</label><span class="required">*</span>
                    <input id="inp-field" type="text" name="address" class="address-field">
                </div>
                <div class="form-group">
                    <label class="form-lbl">City:</label><span class="required">*</span>
                    <input id="inp-field" type="text" name="city" class="address-field">
                </div>
                <div class="form-group">
                    <label class="form-lbl">Province:</label><span class="required">*</span>
                    <input id="inp-field" type="text" name="province" class="address-field">
                </div>

                <div class="form-group">
                    <label class="form-lbl">Postal Code:</label><span class="required">*</span>
                    <input id="inp-field" type="text" name="postal" class="address-field">
                </div>
                <div class="form-group">
                    <label class="form-lbl">Mobile No.:</label><span class="required">*</span>
                    <input id="inp-field" id="inp-num" type="text" name="mobile" class="address-field">
                </div>
                <div class="form-group">
                    <label class="form-lbl">Phone:</label><span class="required">*</span>
                    <input id="inp-field" id="inp-num" type="text" name="phone" class="address-field">
                </div>
                <div class="form-group">
                    <label class="form-lbl">Company/School:</label><span class="required">*</span>
                    <input id="inp-field" type="text" name="company" class="address-field">
                </div>
                <div class="form-group">
                    <label class="form-lbl">Email Address:</label><span class="required">*</span>
                    <input id="inp-field" type="text" name="email" class="address-field">
                </div>
            </div>
            <hr>


            <div class="nationality-grp">
                <div class="grp-header">III. Applicant's Nationality</div>
                <div class="form-group">
                    <label class="form-lbl">Nationality:</label><span class="required">*</span>
                    <input id="inp-field" type="text" name="nationality" class="nationality-field">
                </div>
                <div class="form-group">
                    <label class="form-lbl">Country:</label><span class="required">*</span>
                    <input id="inp-field" type="text" name="country" class="nationality-field">
                </div>
            </div>
            <hr>

            <div class="identity-grp">
                <div class="grp-header">IV. Applican's Identity</div>
                <div class="form-group-radio">
                    <label class="form-lbl">Sex:</label><span class="required">*</span>
                    Male
                    <input id="inp-field" type="radio" name="sex" class="" value="Male">
                    Female
                    <input id="inp-field" type="radio" name="sex" class="" value="Female">
                </div>
                <div class="form-group">
                    <label class="form-lbl">Height(cm):</label><span class="required">*</span>
                    <input id="inp-field" type="text" name="height" class="identity-field">
                </div>
                <div class="form-group">
                    <label class="form-lbl">Weight(kg):</label><span class="required">*</span>
                    <input id="inp-field" type="text" name="weight" class="identity-field">
                </div>
                <div class="form-group">
                    <label class="form-lbl">Hair Color:</label><span class="required">*</span>
                    <input id="inp-field" type="text" name="hair" class="identity-field">
                </div>
                <div class="form-group">
                    <label class="form-lbl">Eyes:</label><span class="required">*</span>
                    <input id="inp-field" type="text" name="eyes" class="identity-field">
                </div>
            </div>

            <div class="submit">
                <button class="submit-btn" type="submit">Submit</button>
            </div>
        </fieldset>

    </form>
</div>
@endsection
