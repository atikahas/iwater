@extends('layouts.sleek')
@section('users', 'active')


@section('content')
<div class="row">
    <div class="col-12">
        <div class="card card-default">
            <div class="card-header card-header-border-bottom d-flex justify-content-between">
                <h2>User Details</h2>
            </div>

            <div class="card-body">
                <a href="javascript:0" class="media text-secondary" data-toggle="modal" data-target="#modal-contact">
                    <img src="https://cdn-icons-png.flaticon.com/512/747/747545.png" class="mr-3 img-fluid rounded" style="max-height: 80px; max-width:auto;" alt="Avatar Image">
                    <div class="media-body">
                        <h5 class="mt-0 mb-2 text-dark">{{ $user->name }}</h5>
                        <ul class="list-unstyled">
                            <li class="d-flex mb-1">
                                <i class="mdi mdi-email mr-1"></i>
                                <span>{{ $user->email }}</span>
                            </li>
                            <li class="d-flex mb-1">
                                @if(!empty($user->getRoleNames()))
                                @foreach($user->getRoleNames() as $v)
                                    <label class="badge badge-success">{{ $v }}</label>
                                @endforeach
                                @endif
                            </li>
                        </ul>
                    </div>
                </a>
            </div> 
        </div>
    </div>
</div>
@endsection