@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">USER Dashboard</div>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif

                        {{--@component('components.who')--}}
                        {{--@endcomponent--}}

                        <form method="POST" action="{{ route('user.diagnosis.store') }}">
                            @csrf
                            <div class="form-group">
                                <label for="doctor_id">Doctor ID</label>
                                <input name="doctor_id" type="text" class="form-control" id="doctor_id"
                                       placeholder="Doctor ID">
                            </div>
                            <div class="form-group">
                                <label for="pet_name">Pet Name</label>
                                <input name="pet_name" type="text" class="form-control" id="pet_name"
                                       placeholder="Pet Name">
                            </div>
                            <div class="form-group">
                                <label for="diagnosis">Diagnosis</label>
                                <textarea class="form-control" name="diagnosis" id="diagnosis" cols="30" rows="5"
                                          placeholder="Enter all diagnosis">
                                </textarea>
                            </div>
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
