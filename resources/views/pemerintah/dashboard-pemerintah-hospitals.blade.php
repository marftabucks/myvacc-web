@extends('layout')

@section('meta-title')
    MyVacc | Dashboard (Hospitals)
@endsection

@section('content')
<div class="dashboard">
    <h1 class="heading-1 margin-bottom-xl">Dashboard</h1>

    <div class="tab">
        <a href="{{route('pemerintah-patients')}}" class="tab-link">Patients</a>
        <a href="#" class="tab-link active">Hospitals</a>
    </div>

    <table class="table table-striped">
        <thead>
            <tr>
                <th scope="col">Action</th>
                <th scope="col">Hospital Name</th>
                <th scope="col">Province</th>
                <th scope="col">City / Regency</th>
                <th scope="col">Address</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($hospitals as $hospital)
                <tr>
                    <td><a href="{{route('rs-edit-profile')}}" class="button button--green">Edit</a></td>
                    <td>{{$hospital->name}}</td>
                    <td>{{$hospital->province}}</td>
                    <td>{{$hospital->city}}</td>
                    <td>{{$hospital->address}}</td>
                </tr>
            @endforeach
            
        </tbody>
    </table>
</div>
@endsection