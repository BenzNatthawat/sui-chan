@extends('layouts.app')

@section('styles')
    <link rel="stylesheet" href="{{ asset('/js/jquery.Thailand.js/dist/jquery.Thailand.min.css') }}">
@endsection

@section('content')
    <div class="container">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ url('master.index') }}">หน้าแรก</a></li>
            <li class="breadcrumb-item active">สร้างผู้ดูแลระบบตำบล</li>
        </ol>
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('สร้างผู้ดูแลระบบตำบล') }}</div>

                    <div class="card-body">
                        <form action="{{ route('manager_header.store') }}" method="POST" enctype="multipart/form-data"
                            id="address" class="demo" autocomplete="off">
                            @csrf

                            <div class="form-group row">
                                <div class="col-md-6">
                                    <label for="user_name">{{ __('ชื่อผู้ใช้งาน') }}</label>

                                    <input id="user_name" type="text"
                                        class="form-control{{ $errors->has('user_name') ? ' is-invalid' : '' }}"
                                        name="user_name" value="{{ old('user_name') }}" required autofocus>

                                    @if ($errors->has('user_name'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('user_name') }}</strong>
                                        </span>
                                    @endif
                                    <span class="invalid-feedback" role="alert" id="error-user_name"></span>
                                </div>

                                <div class="col-md-6">
                                    <label for="password">{{ __('รหัสผ่าน') }}</label>

                                    <input id="password" type="password" autocomplete="off"
                                        class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}"
                                        name="password" required>

                                    @if ($errors->has('password'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('password') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group row">
                                <div class="col-md-6">
                                    <label for="name">{{ __('ชื่อ') }}</label>

                                    <input id="name" type="text"
                                        class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name"
                                        value="{{ old('name') }}" required>

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
                                        name="surname" value="{{ old('surname') }}" required>

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

                                    <input id="dob" name="dob"
                                        class="form-control{{ $errors->has('dob') ? ' is-invalid' : '' }}" type="date"
                                        value="2011-08-19" value="{{ old('dob') }}" required>

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
                                        value="{{ old('tel') }}" required>

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
                                        name="district" value="{{ old('district') }}" required>

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
                                        value="{{ old('amphoe') }}" required>

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
                                        name="province" value="{{ old('province') }}" required>

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
                                        name="zipcode" value="{{ old('zipcode') }}" required>

                                    @if ($errors->has('zipcode'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('zipcode') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group row">
                                <div class="col-md-12">
                                    <label for="comment">หมายเหตุ</label>
                                    <textarea class="form-control" id="comment" rows="3"
                                        name="comment">{{ old('comment') ? old('comment') : $account->comment }}</textarea>
                                </div>
                            </div>

                            <div class="form-group row mb-0">
                                <div class="col-md-6 offset-md-4">
                                    <button type="submit" class="btn btn-primary">
                                        {{ __('สร้างผู้ดูแลระบบตำบล') }}
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

@section('scripts')
    <script type="text/javascript" src="{{ asset('https://code.jquery.com/jquery-3.2.1.min.js') }}">
    </script>
    <script type="text/javascript" src="{{ asset('/js/jquery.Thailand.js/dependencies/JQL.min.js') }}">
    </script>
    <script type="text/javascript" src="{{ asset('/js/jquery.Thailand.js/dependencies/typeahead.bundle.js') }}">
    </script>
    <script type="text/javascript" src="{{ asset('/js/jquery.Thailand.js/dist/jquery.Thailand.min.js') }}"></script>
@endsection

@section('scripts_footer')
    <script type="text/javascript">
        $.Thailand({
            database: "{{ asset('/js/jquery.Thailand.js/database/db.json') }}",
            $district: $('#address [name="district"]'),
            $amphoe: $('#address [name="amphoe"]'),
            $province: $('#address [name="province"]'),
            $zipcode: $('#address [name="zipcode"]'),
        });

    </script>
@endsection
