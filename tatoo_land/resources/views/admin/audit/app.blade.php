@extends('layouts.admin')
@section('content')
    <div class="container wrapper">
        <div class="row">
            <div class="col-md-3">
                <div style="position: sticky; top: 60px">
                    <div class="content">
                        <h5 class="mb-2">Audit</h5>
                        <ul class="nav flex-column sidebar">
                            <li class="nav-item">
                                <a class="nav-link" href="#"><i data-feather="file"></i>Logs</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-md-9">
                @yield('audit')
            </div>
        </div>
    </div>
@endsection