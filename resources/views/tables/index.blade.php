@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-12">
            {{ $dataTable->table() }}
        </div>
    </div>
</div>
@push('scripts')
    {{ $dataTable->scripts(attributes: ['type' => 'module']) }}
@endpush
@endsection