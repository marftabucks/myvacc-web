@extends('layout')

@section('meta-title')
    MyVacc | Vaccination Registration
@endsection

@section('content')
<div class="vaccination-form">
    <div class="container container--left container--xl">
        <h2 class="heading-2 margin-bottom-xs align-self-center">Vaccination Form</h1>
        <p class="status status--success margin-bottom-xl">Your account is verified</p>

        <p>NAMA : {{auth()->user()->name}}</p>
        <p>RS : {{$hospital->name}}</p>

        <table class="table table-striped">
            <thead>
                <tr>
                    <th scope="col">Date</th>
                    <th scope="col">Available</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($quotas as $quota)
                <tr>
                    <td>{{$quota->date}}</td>
                    <td>{{$quota->available}}</td>
                    <td><form action="" method="POST">
                        @csrf
                        <input type="hidden" id="id" name="id" value={{$unverified_pasien->id}}>
                        <button class="button button--green">Verify</button>
                    </form></td>
                    
                </tr>
                @endforeach
            </tbody>
        </table>
        
    </div>
</div>
@endsection