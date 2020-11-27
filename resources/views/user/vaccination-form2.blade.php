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
        {{-- <div class="form__input width-100">
            <p class="text-regular">Date</p>
            <input type="date" name="date" id="date" class="input" min="" max="" required>
        </div> --}}
        {{-- <div class="form__input--horizontal">
            
            <div class="form__input width-45">
                <p class="text-regular">Time</p>
                <select name="time" id="time" class="select" required>
                    <option value="" selected hidden>Select time</option>
                    <option value="08:00:00">08.00 - 09.00</option>
                    <option value="09:00:00">09.00 - 10.00</option>
                    <option value="10:00:00">10.00 - 11.00</option>
                </select>
            </div>
        </div> --}}
    </div>
</div>
@endsection