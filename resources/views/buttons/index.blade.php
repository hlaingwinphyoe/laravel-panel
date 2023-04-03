@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-12">

            <div class="mb-4">
                <h4>Original Button</h4>
                <button type="button" class="btn btn-primary">Primary</button>
                <button type="button" class="btn btn-secondary">Secondary</button>
                <button type="button" class="btn btn-success">Success</button>
                <button type="button" class="btn btn-danger">Danger</button>
                <button type="button" class="btn btn-warning">Warning</button>
                <button type="button" class="btn btn-info">Info</button>
                <button type="button" class="btn btn-light">Light</button>
                <button type="button" class="btn btn-dark">Dark</button>
            </div>

            <hr>

            <div class="mb-4">
                <h4>Border Button</h4>
                <button class="btn btn-border primary">Primary</button>
                <button class="btn btn-border secondary">Secondary</button>
                <button class="btn btn-border success">Success</button>
                <button class="btn btn-border danger">Danger</button>
                <button class="btn btn-border warning">Warning</button>
                <button class="btn btn-border info">Info</button>
                <button class="btn btn-border">Light</button>
                <button class="btn btn-border dark">Dark</button>

                <br>
                <br>

                <button class="btn btn-outline primary">Primary</button>
                <button class="btn btn-outline secondary">Secondary</button>
                <button class="btn btn-outline success">Success</button>
                <button class="btn btn-outline danger">Danger</button>
                <button class="btn btn-outline warning">Warning</button>
                <button class="btn btn-outline info">Info</button>
                <button class="btn btn-outline">Light</button>
                <button class="btn btn-outline dark">Dark</button>
            </div>

            <hr>

            <div class="mb-4">
                <h4>Float Button</h4>
                <button class="btn-float primary">Primary</button>
                <button class="btn-float secondary">Secondary</button>
                <button class="btn-float success">Success</button>
                <button class="btn-float danger">Danger</button>
                <button class="btn-float warning">Warning</button>
                <button class="btn-float info">Info</button>
                <button class="btn-float light">Light</button>
                <button class="btn-float dark">Dark</button>
            </div>
            
        </div>
    </div>
</div>
@endsection