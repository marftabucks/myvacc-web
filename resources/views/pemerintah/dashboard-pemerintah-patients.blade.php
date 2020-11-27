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
                <th scope="col">Verified</th>
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
                <td>
                    <button type="button" class="button" data-toggle="modal" data-target="#exampleModal">
                        View Photo
                    </button>
                </td>
                <td>Yes</td>

                <!-- Modal -->
                <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Patient's Photo</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <img src="{{ asset('assets/'.$unverified_pasien->selfie) }}" alt="" class="modal-photo">
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="cta cta--red" data-dismiss="modal">Close</button>
                            </div>
                        </div>
                    </div>
                </div>
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
                <td>
                    <button type="button" class="button" data-toggle="modal" data-target="#exampleModal">
                        View Photo
                    </button>
                </td>
                {{-- <td>{{$verified_pasien->verified}}</td> --}}
                <td>No</td>
                
                <!-- Modal -->
                <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Patient's Photo</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <img src="{{ asset('assets/'.$verified_pasien->selfie) }}" alt="" class="modal-photo">
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="cta cta--red" data-dismiss="modal">Close</button>
                            </div>
                        </div>
                    </div>
                </div>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection