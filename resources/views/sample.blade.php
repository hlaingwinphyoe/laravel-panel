@extends('layouts.app')
@section('title') Sample @endsection

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12 col-md-4">
                <div class="">
                    <h4>
                        Form Input
                    </h4>
                    <div class="">
                        <!-- Custom Form Control -->
                        <div class="form mb-4">
                            <input type="text" name="text" autocomplete="off" required />
                            <label for="text" class="label-name">
                                <span class="content-name">
                                  Your Text
                                </span>
                            </label>
                        </div>
                        <!-- Custom Form Control End -->
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop
