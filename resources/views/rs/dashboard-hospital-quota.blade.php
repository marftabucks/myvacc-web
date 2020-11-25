@extends('layout')

@section('meta-title')
    MyVacc | Dashboard (Daily Quota)
@endsection

@section('content')
<div class="dashboard">
    <h1 class="heading-1 margin-bottom-xl">Dashboard</h1>

    <div class="tab">
        <a href="#" class="tab-link active">Daily Quota</a>
        <a href="{{route('rs-patients')}}" class="tab-link">Patients</a>
        <form action="" class="width-20 margin-left-auto" style="display:inline-block">
            <select name="month" id="month" class="select">
                <option value="" selected hidden>Select month</option>
                <option value="">January</option>
                <option value="">February</option>
                <option value="">March</option>
                <option value="">April</option>
                <option value="">May</option>
                <option value="">June</option>
                <option value="">July</option>
                <option value="">August</option>
                <option value="">September</option>
                <option value="">October</option>
                <option value="">November</option>
                <option value="">December</option>
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

    <h1>ADD QUOTA</h1>
    <form action="" class="width-20 margin-left-auto" style="display:inline-block">
        <div class="form__input width-50">
            <p class="text-regular">Date</p>
            <input type="date" name="date" id="date" class="input" min="" max="" required>
        </div>
        <div class="form__input width-50">
            <p class="text-regular">Quota</p>
            <input type="integer" name="quota" id="quota" class="input" min="" max="" required>
        </div>
        <input type="submit" value="Add" class="cta cta--secondary margin-bottom-xs">
    </form>
    
</div>
@endsection