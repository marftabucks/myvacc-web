@extends('layout')

@section('meta-title')
    MyVacc | Dashboard (Patients)
@endsection

@section('content')
<div class="dashboard">
    <h1 class="heading-1 margin-bottom-xl">Dashboard</h1>

    <div class="tab">
        <a href="#" class="tab-link active">Patients</a>
        <a href="/dashboard-pemerintah-hospitals" class="tab-link">Hospitals</a>
    </div>

    <table class="table table-striped">
        <thead>
            <tr>
                <th scope="col">Full Name</th>
                <th scope="col">NIK</th>
                <th scope="col">E-mail</th>
                <th scope="col">Photo</th>
                <th scope="col">Status</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            @for ($i = 0; $i < 3; $i++)
            <tr>
                <td>Setyawan Putra</td>
                <td>234235</td>
                <td>sputra@gmail.com</td>
                <td><button class="button">View Photo</button></td>
                <td>Unverified</td>
                <td><form action=""><button class="button button--green">Verify</button></form></td>
            </tr>
            @endfor
            @for ($i = 0; $i < 9; $i++)
            <tr>
                <td>Setyawan Putra</td>
                <td>234235</td>
                <td>sputra@gmail.com</td>
                <td><button class="button">View Photo</button></td>
                <td>Verified</td>
                <td><form action=""><button class="button button--green" disabled>Verify</button></form></td>
            </tr>
            @endfor
        </tbody>
    </table>
</div>
@endsection