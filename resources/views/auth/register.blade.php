@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('สมัครสมาชิก') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="user_name" class="col-md-4 col-form-label text-md-right">{{ __('ชื่อผู้ใช้งาน') }}</label>

                            <div class="col-md-6">
                                <input id="user_name" type="text" class="form-control{{ $errors->has('user_name') ? ' is-invalid' : '' }}" name="user_name" value="{{ old('user_name') }}" required autofocus>

                                @if ($errors->has('user_name'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('user_name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('รหัสผ่าน') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('ยืนยันรหัสผ่าน') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                            </div>
                        </div>

                        <div class="form-group row">
                          <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('ชื่อ') }}</label>

                          <div class="col-md-6">
                              <input id="name" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" required>

                              @if ($errors->has('name'))
                                  <span class="invalid-feedback" role="alert">
                                      <strong>{{ $errors->first('name') }}</strong>
                                  </span>
                              @endif
                          </div>
                        </div>

                        <div class="form-group row">
                          <label for="surname" class="col-md-4 col-form-label text-md-right">{{ __('นามสกุล') }}</label>

                          <div class="col-md-6">
                              <input id="surname" type="text" class="form-control{{ $errors->has('surname') ? ' is-invalid' : '' }}" name="surname" required>

                              @if ($errors->has('surname'))
                                  <span class="invalid-feedback" role="alert">
                                      <strong>{{ $errors->first('surname') }}</strong>
                                  </span>
                              @endif
                          </div>
                        </div>

                        <div class="form-group row">
                          <label for="tel" class="col-md-4 col-form-label text-md-right">{{ __('โทรศัพท์') }}</label>

                          <div class="col-md-6">
                              <input id="tel" type="text" class="form-control{{ $errors->has('tel') ? ' is-invalid' : '' }}" name="tel" required>

                              @if ($errors->has('tel'))
                                  <span class="invalid-feedback" role="alert">
                                      <strong>{{ $errors->first('tel') }}</strong>
                                  </span>
                              @endif
                          </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('สมัครสมาชิก') }}
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
