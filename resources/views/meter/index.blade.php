@extends('layouts.sleek')
@section('meter', 'active')

@section('content')
<div class="row">
    <div class="col-12">
        <div class="card card-default">
            <div class="card-header card-header-border-bottom d-flex justify-content-between">
                <h2>List Meter</h2>

                <a href="{{ route('users.create') }}" class="btn btn-outline-primary btn-sm text-uppercase">
                    <i class=" mdi mdi-account-plus-outline"></i> New Meter
                </a>
            </div>

            <div class="card-body">
                <table id="meter-table" class="table table-hover" style="width:100%">
                    <thead>
                        <tr>
                            <th>Serial Number</th>
                            <th>Type</th>
                            <th>Size (mm)</th>
                            <th>Age</th>
                            <th>Mileage</th>
                            <th>Installation Date</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($meter as $i => $m)
                        <tr>
                            <td>{{ $m->serial_number }}</td>
                            <td>{{ $m->meter_type }}</td>
                            <td>{{ $m->meter_size }}</td>
                            <td>{{ $m->meter_age }}</td>
                            <td>{{ $m->meter_mileage }}</td>
                            <td>{{ $m->meter_installation_date }}</td>
                            <td>
                                <button type="button" class="btn btn-outline-primary btn-sm" data-toggle="modal" data-target="#modal-{{ $i }}"><i class="mdi mdi-eye-outline"></i></button>

                                <div class="modal fade" id="modal-{{ $i }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLarge" aria-hidden="true">
                                    <div class="modal-dialog modal-lg" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLarge">Meter Details</h5>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>

                                            <div class="modal-body">
                                                <div class="invoice-wrapper  ">
                                                    <div class="d-flex justify-content-between">
                                                        <h2 class="text-dark font-weight-medium">{{ $m->serial_number }}</h2>
                                                    </div>

                                                    <div>
                                                        <table class="table table-bordered">
                                                            <tr>
                                                                <th>Type</th>
                                                                <td colspan="3">{{ $m->meter_type }}</td>
                                                            </tr>
                                                            <tr>
                                                                <th>Model</th>
                                                                <td>{{ $m->meter_model }}</td>
                                                                <th>Size (mm)</th>
                                                                <td>{{ $m->meter_size }}</td>
                                                            </tr>
                                                            <tr>
                                                                <th>Age</th>
                                                                <td>{{ $m->meter_age }}</td>
                                                                <th>Mileage</th>
                                                                <td>{{ $m->meter_mileage }}</td>
                                                            </tr>
                                                            <tr>
                                                                <th>Manufacturer</th>
                                                                <td colspan="3">{{ $m->meter_manufacturer }}</td>
                                                            </tr>
                                                            <tr>
                                                                <th>Region</th>
                                                                <td>{{ $m->region }}</td>
                                                                <th>Installation Date</th>
                                                                <td>{{ $m->meter_installation_date }}</td>
                                                            </tr>
                                                        </table>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-danger btn-pill" data-dismiss="modal">Close</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection

@section('script')
    <script>
        $(document).ready(function() {
            $('#meter-table').DataTable({
                order: [[ 1, 'desc' ]]
            });
        } );
    </script>
@endsection