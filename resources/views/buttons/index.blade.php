@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-12">

            <div class="mb-5">
                <h4>Custom Button 1</h4>
                <button type="button" class="btn btn-primary">Primary</button>
                <button type="button" class="btn btn-secondary">Secondary</button>
                <button type="button" class="btn btn-success">Success</button>
                <button type="button" class="btn btn-danger">Danger</button>
                <button type="button" class="btn btn-warning">Warning</button>
                <button type="button" class="btn btn-info">Info</button>
                <button type="button" class="btn btn-light">Light</button>
                <button type="button" class="btn btn-dark">Dark</button>
            </div>

            <div class="mb-5">
                <h4>Custom Button 2</h4>
                <button class="btn btn-border primary">Primary</button>
                <button class="btn btn-border secondary">Secondary</button>
                <button class="btn btn-border success">Success</button>
                <button class="btn btn-border danger">Danger</button>
                <button class="btn btn-border warning">Warning</button>
                <button class="btn btn-border info">Info</button>
                <button class="btn btn-border">Light</button>
                <button class="btn btn-border dark">Dark</button>
            </div>

            <div class="mb-5">
                <h4>Custom Button 3</h4>
                <button class="btn3-primary">Submit</button>
            </div>
            
        </div>
    </div>
</div>
@endsection