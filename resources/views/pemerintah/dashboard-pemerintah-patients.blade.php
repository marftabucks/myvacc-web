@extends('layout')

@section('meta-title')
    MyVacc | Dashboard Pemerintah
@endsection

@section('content')
<div class="dashboard">
    <h1 class="heading-1 margin-bottom-xl">Dashboard</h1>

    <div class="tab">
        <a href="#" class="tab-link active">Patients</a>
        <a href="{{route('pemerintah-hospitals')}}" class="tab-link">Hospitals</a>
    </div>

    <table class="table table-striped">
        <thead>
            <tr>
                <th scope="col">Action</th>
                <th scope="col">Full Name</th>
                <th scope="col">NIK</th>
                <th scope="col">E-mail</th>
                <th scope="col">Photo</th>
                <th scope="col">Verivied</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($unverified_pasiens as $unverified_pasien)
            <tr>
                <td><form action="{{route('pemerintah-patients')}}" method="POST">
                    @csrf
                    <input type="hidden" id="id" name="id" value={{$unverified_pasien->id}}>
                    <button class="button button--green">Verify</button>
                </form></td>
                <td>{{$unverified_pasien->name}}</td>
                <td>{{$unverified_pasien->nik}}</td>
                <td>{{$unverified_pasien->email}}</td>
                <td><button class="button">View Photo</button></td>
                <td>Yes</td>
                {{-- <td>{{$unverified_pasien->verified}}</td> --}}
                
            </tr>
            @endforeach
            @foreach ($verified_pasiens as $verified_pasien)
            <tr>
                <td><form action="{{route('pemerintah-patients')}}" method="POST">
                    @csrf
                    <input type="hidden" name="id" value="{{$verified_pasien->id}}">
                    <button class="button button--red">Un-Verify</button>
                </form></td>
                <td>{{$verified_pasien->name}}</td>
                <td>{{$verified_pasien->nik}}</td>
                <td>{{$verified_pasien->email}}</td>
                <td><button class="button">View Photo</button></td>
                {{-- <td>{{$verified_pasien->verified}}</td> --}}
                <td>No</td>
                
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection