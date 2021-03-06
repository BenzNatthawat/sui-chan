@extends('layouts.app')
@section('content')
    <div class="container">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ route('header.index') }}">หน้าแรก</a></li>
            <li class="breadcrumb-item active">รายละเอียดข้อมูลสมาชิก</li>
        </ol>
        <div class="row">
            <div class="col-md-12 ">
                <div class="panel panel-info">
                    <div class="panel-heading">
                        <div class="row">
                            <div class="col col-xs-6">
                                <h3 class="panel-title">รายละเอียดข้อมูล</h3>
                            </div>
                        </div>
                    </div>
                    <!--/.panel-heading-->
                    <div class="panel-body">
                        <div class="table-responsive">
                            <table class="table table-hover">
                                <tbody>
                                    @isset($account->user)
                                        <tr>
                                            <td colspan="2" class="bg-secondary text-center"><b>ข้อมูลผู้ใช้งาน</b></td>
                                        </tr>
                                        <tr>
                                            <td>ชื่อ</td>
                                            <td>{{ $account->user->user_name }}</td>
                                        </tr>
                                        <tr>
                                            <td>สิทธิการใช้งาน</td>
                                            <td>{{ $account->user->role }}</td>
                                        </tr>
                                        <tr>
                                            <td>สถานะการใช้งาน</td>
                                            <td>{{ $account->user->status }}</td>
                                        </tr>
                                    @endisset
                                    <tr>
                                        <td colspan="2" class="bg-secondary text-center"><b>ข้อมูลส่วนตัว</b></td>
                                    </tr>
                                    <tr>
                                        <td>เลขบัตรประชาชน</td>
                                        <td>{{ $account->cid ? $account->cid : '-' }}</td>
                                    </tr>
                                    <tr>
                                        <td>ชื่อ - สกุล</td>
                                        <td>{{ $account->name }} {{ $account->surname }}</td>
                                    </tr>
                                    <tr>
                                        <td>วันเกิด</td>
                                        <td>{{ $account->dob }}</td>
                                    </tr>
                                    <tr>
                                        <td colspan="2" class="bg-secondary text-center"><b>ที่อยู่</b></td>
                                    </tr>
                                    <tr>
                                        <td>ตำบล</td>
                                        <td>{{ $account->amphoe }}</td>
                                    </tr>
                                    <tr>
                                        <td>อำเภอ</td>
                                        <td>{{ $account->district }}</td>
                                    </tr>
                                    <tr>
                                        <td>จังหวัด</td>
                                        <td>{{ $account->province }}</td>
                                    </tr>
                                    <tr>
                                        <td>เลขไปรษณีย์</td>
                                        <td>{{ $account->zipcode }}</td>
                                    </tr>
                                    <tr>
                                        <td>หมายเหตุ</td>
                                        <td>{{ $account->comment ? $account->comment : '-' }}</td>
                                    </tr>
                                </tbody>
                            </table>
                            <!--/.table-->
                        </div>
                        <!--/.table-responsive-->
                    </div>
                    <!--/.panel-body-->
                </div>
                <!--/.panel-->
            </div>
        </div>
    </div>
@endsection
