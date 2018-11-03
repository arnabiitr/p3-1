@extends('layouts.master')
@section('title')
    Random Password Generator
@endsection

@section('content')
    <div class='row'>
        <h1>Random Password Generator</h1>
        <p>This website generates a random password based on your input.</p>
        <p>You need to specify length of the password and whether you want to use number and/or special character.</p>
        <div class='panel panel-default'>
            <div class='panel-body form-horizontal payment-form'>
                <form method='GET' action='/get-password'>

                    <fieldset>
                        <div class='field'>
                            <label class='col-sm-6 control-label'>Length of password (more than 2)</label>
                            <div class='col-sm-3'>
                                <input class='form-control'
                                       type='number'
                                       name='lengthOfPassword'
                                       value='{{ old('lengthOfPassword') }}'>
                            </div>
                        </div>
                        <div class='field'>
                            <label class='col-sm-6 control-label'>Include a special character</label>
                            <div class='col-sm-3'>
                                <select class='form-control' name='includeSpecialChar'>
                                    <option value='choose'>Choose one...</option>
                                    <option value='~' @if( old('includeSpecialChar') == '~') {{ 'selected' }} @endif>~</option>
                                    <option value='!' @if( old('includeSpecialChar') == '!') {{ 'selected' }} @endif>!</option>
                                    <option value='@' @if( old('includeSpecialChar') == '@') {{ 'selected' }} @endif>@</option>
                                    <option value='#' @if( old('includeSpecialChar') == '#') {{ 'selected' }} @endif>#</option>
                                    <option value='$' @if( old('includeSpecialChar') == '$') {{ 'selected' }} @endif>$</option>
                                    <option value='%' @if( old('includeSpecialChar') == '%') {{ 'selected' }} @endif>%</option>
                                    <option value='^' @if( old('includeSpecialChar') == '^') {{ 'selected' }} @endif>^</option>
                                    <option value='&' @if( old('includeSpecialChar') == '&') {{ 'selected' }} @endif>&</option>
                                    <option value='*' @if( old('includeSpecialChar') == '*') {{ 'selected' }} @endif>*</option>
                                </select>
                            </div>
                        </div>

                        <label class='col-sm-6 control-label'>Include a number</label>
                        <div class='col-sm-1'>
                            <input class='form-control' type='checkbox'
                                   name='includeNumber' {{ old('includeNumber') ? 'checked' : '' }} >
                        </div>
                    </fieldset>
                    <input type='submit' value='Generate password' class='btn btn-primary formButton'>
                </form>

                @if (count($errors) > 0)
                    <div class='error'>
                        @foreach ($errors->all() as $error)
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

            </div>
        </div>
    </div>
@endsection