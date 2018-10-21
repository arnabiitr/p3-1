@extends('layouts.master')

@section('output')
    @if (isset($hasErrors))
        <div class='error'>
            @foreach ($errors as $error)
                {{ $error }}
            @endforeach
        </div>
    @else
        @if (isset($password))
            <div class='output'>
                Generated password is: <?= $password ?>
            </div>
        @endif
    @endif
@endsection