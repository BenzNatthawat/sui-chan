@extends('layouts.app')

@section('styles')
    <link rel="stylesheet" href="{{ asset('/js/jquery.Thailand.js/dist/jquery.Thailand.min.css') }}">
@endsection

@section('content')
    <div class="container">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ route('header.index') }}">หน้าแรก</a></li>
            <li class="breadcrumb-item active">เก็บข้อมูลลูกบ้าน</li>
        </ol>
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('เก็บข้อมูลลูกบ้าน') }}</div>

                    <div class="card-body">
                        <form action="{{ route('admin.store') }}" method="POST" enctype="multipart/form-data" id="address"
                            class="demo" autocomplete="off">
                            @csrf

                            <div class="form-group row">
                                <div class="col-md-2">
                                    <label for="inputState">คำนำหน้า</label>
                                    <select id="inputState"
                                        class="form-control{{ $errors->has('prefix') ? ' is-invalid' : '' }}" name="prefix">
                                        <option selected>ไม่ระบุ</option>
                                        <option value="นาย">นาย</option>
                                        <option value="นาง">นาง</option>
                                        <option value="นางสาว">นางสาว</option>
                                    </select>

                                    @if ($errors->has('prefix'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('prefix') }}</strong>
                                        </span>
                                    @endif
                                </div>

                                <div class="col-md-5">
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

                                <div class="col-md-5">
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
                                    <label for="cid">{{ __('เลขบัตรประชาชน') }}</label>

                                    <input id="cid" type="number"
                                        class="form-control{{ $errors->has('cid') ? ' is-invalid' : '' }}" name="cid"
                                        value="{{ old('cid') }}" required>

                                    @if ($errors->has('cid'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('cid') }}</strong>
                                        </span>
                                    @endif
                                </div>

                                <div class="col-md-6">
                                    <label for="inputState">เพศ</label>
                                    <select id="inputState"
                                        class="form-control{{ $errors->has('sex') ? ' is-invalid' : '' }}" name="sex">
                                        <option selected>ไม่ระบุ</option>
                                        <option value="ชาย">ชาย</option>
                                        <option value="หญิง">หญิง</option>
                                        <option value="เพศทางเลือก">เพศทางเลือก</option>
                                    </select>

                                    @if ($errors->has('sex'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('sex') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group row">
                                <div class="col-md-6">
                                    <label for="dob">{{ __('ว/ด/ป เกิด') }}</label>

                                    <input id="dob" name="dob"
                                        class="form-control{{ $errors->has('dob') ? ' is-invalid' : '' }}" type="date"
                                        value="{{ old('dob') }}" required>

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
                                    <textarea class="form-control" id="comment" rows="3" name="comment"></textarea>
                                </div>
                            </div>

                            <div class="form-group row mb-0">
                                <div class="col-md-6 offset-md-4">
                                    <button type="submit" class="btn btn-primary">
                                        {{ __('บันทึกข้อมูลลูกบ้าน') }}
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
