@extends('layouts.app', ['title' => __('User Management')])

@section('content')
    @include('layouts.headers.cards')

    <div class="container-fluid mt--7">
        <div class="row">
            <div class="col">
                <div class="card shadow">
                    <div class="card-header border-0">
                        <div class="row align-items-center">
                            <div class="col-8">
                                <h3 class="mb-0">{{ __('Subscription Packages') }}</h3>
                            </div>
                            <div class="col-4 text-right">

                            </div>
                        </div>
                    </div>

                    <div class="col-12">
                        @if (session('status'))
                            <div class="alert alert-success alert-dismissible fade show" role="alert">
                                {{ session('status') }}
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                        @endif
                    </div>

                    <div class="table-responsive">
                        <table class="table align-items-center table-flush">
                            <thead class="thead-light">
                                <tr>
                                        <th></th>
                                        <th scope="col">Name</th>
                                        <th scope="col">Category</th>
                                        <th scope="col">Internet Speeds</th>
                                        <th scope="col">Price</th>
                                        <th></th>
                                    </tr>
                            </thead>
                            <tbody>
                                    @foreach($subscriptions as $subscription => $values)
                                    <tr>
                                     <td>{{ @++$i }}</td>
                                      <td>{!! $values->name !!}</td>
                                      <td>{!! $values->category !!}</td>
                                      <td>{!! $values->internet_speeds !!}</td>
                                      <td>{!! $values->price !!}</td>
                                      @if(\Auth::user()->admin !== null)
                                      <td><a href="#" class="btn btn-primary">Edit Package Details</a></td>
                                      @else
                                      <td><a href="{{ route('subscribe.package',[$values->uniqid]) }}" class="btn btn-primary">Subscribe to Package</a></td>

                                      @endif
                                    </tr>
                                    @endforeach

                            </tbody>
                        </table>
                    </div>
                    <div class="card-footer py-4">
                        <nav class="d-flex justify-content-end" aria-label="...">

                        </nav>
                    </div>
                </div>
            </div>
        </div>

        @include('layouts.footers.auth')
    </div>
@endsection

