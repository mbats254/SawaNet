@extends('layouts.admin')
@section('content')
    <div class="container wrapper">
        <div class="row">
            <div class="col-md-3">
                <div style="position: sticky; top: 55px">
                    <div class="content">
                        <h5 class="mb-2">Reports</h5>
                        <ul class="nav flex-column sidebar">
                            <li class="nav-item">
                                <a class="nav-link" href="#"><i data-feather="folder"></i>Products</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#"><i data-feather="truck"></i>Equipments</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#"><i data-feather="dollar-sign"></i>Payments</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#"><i data-feather="folder"></i>Orders</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#"><i data-feather="users"></i>Merchants</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#"><i data-feather="users"></i>Service Providers</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-md-9">
                @yield('reports')
            </div>
        </div>
    </div>
@endsection