@extends('merchant.app')
@section('merchant')
    <div class="content">
        <div>
            {{-- <a href="{{ route('create.properties') }}" class="btn btn-info btn-sm float-right">Create</a> --}}
            <h5>{!! $property_details->name !!}</h5>
        </div>
        <div class="container">
            <div class="row">
              <div class="col-sm-4">

                    <img src="/land_photos/{!! $property_details->main_photo !!}" alt="" width="250px" title="">

              </div>
              <div class="row">
              <div class="col-s m-4">
                {{-- <h3>{!! $property_details->name !!}</h3> --}}
                <p><b>Property Size: </b>{!! $property_details->property_size !!} ACRES</p>
                <p><b>Features: </b>{!! $property_details->features !!}</p>
              </div>
              </div>
              {{-- <div class="row">
              <div class="col-sm-4">
                <h3>Map</h3>

              </div>
              </div> --}}
            </div>
          </div>

    </div>
@endsection
