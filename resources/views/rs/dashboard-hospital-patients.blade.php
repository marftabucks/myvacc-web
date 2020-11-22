@extends('layout')

@section('meta-title')
    MyVacc | Dashboard (Patients)
@endsection

@section('content')
<div class="dashboard">
    <h1 class="heading-1 margin-bottom-xl">Dashboard</h1>

    <div class="tab">
        <a href="#" class="tab-link active">Daily Quota</a>
        <a href="/dashboard-pemerintah-hospitals" class="tab-link">Patients</a>
        <form action="">
            <select name="month" id="month" class="select">
                <option value="" selected hidden>Select month</option>
                <option value="">January</option>
            </select>
        </form>
    </div>

    <table class="table table-striped">
        <thead>
            <tr>
                <th scope="col">Date</th>
                <th scope="col">Quota</th>
            </tr>
        </thead>
        <tbody>
            @for ($i = 0; $i < 9; $i++)
            <tr>
                <td>December 1st 2020</td>
                <td>150/250</td>
            </tr>
            @endfor
        </tbody>
    </table>
</div>
@endsection