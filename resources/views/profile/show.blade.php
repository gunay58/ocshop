@extends('master.master')

@section('content')
<div class="container">

    <h1>Profile</h1>
    <div class="table-responsive">
        <table class="table table-bordered table-striped table-hover">
            <thead>
                <tr>
                    <th>ID.</th> 
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>{{ $profile->id }}</td> 
                </tr>
            </tbody>
        </table>
    </div>

</div>
@endsection