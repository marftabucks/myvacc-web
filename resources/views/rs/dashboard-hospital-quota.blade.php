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
        <!-- Button trigger modal -->
        <button type="button" class="button button--white margin-left-auto margin-bottom-xs" data-toggle="modal" data-target="#exampleModal">
            Add Quota
        </button>
    </div>

    <table class="table table-striped">
        <thead>
            <tr>
                <th scope="col">Date</th>
                <th scope="col">Quota</th>
                <th scope="col">Available</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($quotas as $quota)
                <tr>
                    <td>{{$quota->date}}</td>
                    <td>{{$quota->quota}}</td>
                    <td>{{$quota->available}}</td>
                </tr>
            @endforeach
        </tbody>
    </table>

    

    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Add Quota</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <form action="{{route('rs-quota')}}" method="POST" style="display:inline-block">
            <div class="modal-body">
                    @csrf
                    <div class="form__input width-100">
                        <p class="text-regular">Date</p>
                        <input type="date" name="date" id="date" class="input" min="" max="" required>
                    </div>
                    <div class="form__input width-100">
                        <p class="text-regular">Quota</p>
                        <input type="integer" name="quota" id="quota" class="input" min="1" max="" required>
                    </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="cta cta--red" data-dismiss="modal">Close</button>
                <input type="submit" value="Add" class="cta cta--secondary">
            </div>
        </form>
        </div>
    </div>
    </div>
</div>
@endsection