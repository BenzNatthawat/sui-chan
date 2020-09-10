@extends('layouts.app')
@section('content')
    <div class="container">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ route('home') }}">หน้าแรก</a></li>
            <li class="breadcrumb-item active">แก้ไขข้อมูลส่วนตัว</li>
        </ol>
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('แก้ไขข้อมูลส่วนตัว') }}</div>

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
                        <form method="POST" action="{{ route('profile.update', ['id' => Auth::user()->id]) }}">
                            @csrf
                            @method('PUT')
                            <div class="form-group row">
                                <div class="col-md-6">
                                    <label for="name">{{ __('ชื่อ') }}</label>

                                    <input id="name" type="text"
                                        class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name"
                                        value="{{ $auth->account->name }}" required>

                                    @if ($errors->has('name'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('name') }}</strong>
                                        </span>
                                    @endif
                                </div>

                                <div class="col-md-6">
                                    <label for="surname">{{ __('นามสกุล') }}</label>

                                    <input id="surname" type="text"
                                        class="form-control{{ $errors->has('surname') ? ' is-invalid' : '' }}"
                                        value="{{ $auth->account->surname }}" name="surname" required>

                                    @if ($errors->has('surname'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('surname') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group row">
                                <div class="col-md-6">
                                    <label for="dob">{{ __('ว/ด/ป เกิด') }}</label>

                                    <input id="dob" type="text"
                                        class="form-control{{ $errors->has('dob') ? ' is-invalid' : '' }}" name="dob"
                                        value="{{ $auth->account->dob }}" required>

                                    @if ($errors->has('dob'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('dob') }}</strong>
                                        </span>
                                    @endif
                                </div>

                                <div class="col-md-6">
                                    <label for="tel">{{ __('โทรศัพท์') }}</label>

                                    <input id="tel" type="text"
                                        class="form-control{{ $errors->has('tel') ? ' is-invalid' : '' }}" name="tel"
                                        value="{{ $auth->account->tel }}" required>

                                    @if ($errors->has('tel'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('tel') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group row">
                                <div class="col-md-6">
                                    <label for="district">{{ __('ตำบล') }}</label>

                                    <input id="district" type="text"
                                        class="form-control{{ $errors->has('district') ? ' is-invalid' : '' }}"
                                        value="{{ $auth->account->district }}" name="district" required>

                                    @if ($errors->has('district'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('district') }}</strong>
                                        </span>
                                    @endif
                                </div>

                                <div class="col-md-6">
                                    <label for="amphoe">{{ __('อำเภอ') }}</label>

                                    <input id="amphoe" type="text"
                                        class="form-control{{ $errors->has('amphoe') ? ' is-invalid' : '' }}" name="amphoe"
                                        value="{{ $auth->account->amphoe }}" required>

                                    @if ($errors->has('amphoe'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('amphoe') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group row">
                                <div class="col-md-6">
                                    <label for="province">{{ __('จังหวัด') }}</label>

                                    <input id="province" type="text"
                                        class="form-control{{ $errors->has('province') ? ' is-invalid' : '' }}"
                                        value="{{ $auth->account->province }}" name="province" required>

                                    @if ($errors->has('province'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('province') }}</strong>
                                        </span>
                                    @endif
                                </div>

                                <div class="col-md-6">
                                    <label for="zipcode">{{ __('เลขไปรษณีย์') }}</label>

                                    <input id="zipcode" type="text"
                                        class="form-control{{ $errors->has('zipcode') ? ' is-invalid' : '' }}"
                                        value="{{ $auth->account->zipcode }}" name="zipcode" required>

                                    @if ($errors->has('zipcode'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('zipcode') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group row mb-0">
                                <div class="col-md-12 text-center">
                                    <button type="submit" class="btn btn-primary">
                                        {{ __('บันทึกข้อมูล') }}
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
