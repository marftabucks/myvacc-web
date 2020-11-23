@extends('layout')

@section('meta-title')
    MyVacc | Dashboard (Patients)
@endsection

@section('content')
<div class="dashboard">
    <h1 class="heading-1 margin-bottom-xl">Dashboard</h1>

    <div class="tab">
        <a href="{{route('rs-quota')}}" class="tab-link">Daily Quota</a>
        <a href="#" class="tab-link active">Patients</a>
        <form action="" class="width-20 margin-left-auto" style="display:inline-block">
            <input type="date" name="date" id="date" class="input" min="" max="">
        </form>
    </div>

    <table class="table table-striped">
        <thead>
            <tr>
                <th scope="col">Queue No</th>
                <th scope="col">NIK</th>
                <th scope="col">Full Name</th>
                <th scope="col">E-mail</th>
                <th scope="col">Time</th>
            </tr>
        </thead>
        <tbody>
            @for ($i = 0; $i < 9; $i++)
            <tr>
                <td>{{$i + 1}}</td>
                <td>325345</td>
                <td>Setyawan Putra</td>
                <td>sputra@gmail.com</td>
                <td>17.00-18.00</td>
            </tr>
            @endfor
        </tbody>
    </table>
</div>
@endsection