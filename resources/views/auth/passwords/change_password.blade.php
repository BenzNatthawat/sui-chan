@extends('layouts.app')
@section('content')
    <div class="container">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ route('master.index') }}">หน้าแรก</a></li>
            <li class="breadcrumb-item active">เปลี่ยนรหัสผ่าน</li>
        </ol>
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header">{{ __('เปลี่ยนรหัสผ่าน') }}</div>

                    <div class="card-body">
                        @if (session('error'))
                            <div class="alert alert-danger">
                                {{ session('error') }}
                            </div>
                        @endif
                        @if (session('success'))
                            <div class="alert alert-success">
                                {{ session('success') }}
                            </div>
                        @endif
                        <form method="POST" action="{{ route('change_password.update', ['id' => Auth::user()->id]) }}">
                            @csrf
                            @method('PUT')
                            <div class="form-group row">
                                <div class="col-md-12">
                                    <label for="current-password">{{ __('รหัสผ่านเก่า') }}</label>

                                    <input id="current-password" type="password"
                                        class="form-control{{ $errors->has('current-password') ? ' is-invalid' : '' }}"
                                        name="current-password" required autofocus>

                                    @if ($errors->has('current-password'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('current-password') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-md-12">
                                    <label for="new-password">{{ __('รหัสผ่านใหม่') }}</label>

                                    <input id="new-password" type="password"
                                        class="form-control{{ $errors->has('new-password') ? ' is-invalid' : '' }}"
                                        name="new-password" required autofocus>

                                    @if ($errors->has('new-password'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('new-password') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-md-12">
                                    <label for="new-password_confirmation">{{ __('ยืนยันรหัสผ่านใหม่') }}</label>

                                    <input id="new-password_confirmation" type="password"
                                        class="form-control{{ $errors->has('new-password_confirmation') ? ' is-invalid' : '' }}"
                                        name="new-password_confirmation" required autofocus>

                                    @if ($errors->has('new-password_confirmation'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('new-password_confirmation') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group row mb-0">
                                <div class="col-md-6 offset-md-4">
                                    <button type="submit" class="btn btn-primary">
                                        {{ __('เปลี่ยนรหัสผ่าน') }}
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
