@extends('transactions.layout')


@section('content')
<div>Create Transaction</div>
<div class="">
    <form action="" method="POST">
        @csrf
        <div class="fieldset">
            <div class="fld-grp">
                <label>Transaction Type</label>
                <select name="ttype" id="">
                    <option value="">---Select Option---</option>
                    <option value="ktp">Knowledge Test Permit</option>
                    <option value="ktr">Knowledge Test Report</option>
                    <option value="med">Medical Clearance</option>
                    <option value="pst">Professional Skills Test</option>
                    <option value="ept">English Proficiency Test</option>
                    <option value="lp">Licensing Process</option>
                    <option value="la">License Approval</option>
                </select>
            </div>
        </div>
    </form>
</div>

@endsection
