@extends('layouts.app')
@section('content')
    <div class="container">
        @include('layouts.menu_header')
        <div class="row">
            <div class="col-md-12 ">
                <div class="panel panel-info">
                    <div class="panel-heading">
                        <div class="row">
                            <div class="col col-xs-6">
                                <h3 class="panel-title">ตารางรายชื่อสมาชิก</h3>
                            </div>
                            <div class="col col-xs-6 text-right">
                                <a href="{{ route('admin.create') }}"
                                    class="btn btn-sm btn-primary btn-create">เพิ่มสมาชิก</a>
                            </div>
                        </div>
                    </div>
                    <!--/.panel-heading-->
                    <div class="panel-body">
                        <div class="table-responsive">
                            <table class="table table-striped table-bordered table-list">
                                <thead>
                                    <tr>
                                        <th>ชื่อ - สกุล</th>
                                        <th>จังหวัด</th>
                                        <th>สิทธิการใช้งาน</th>
                                        <th>สถานะใช้งาน</th>
                                        <th>หมายเหตุ</th>
                                        <th>เครื่องมือ</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse ($accounts as $index => $account)
                                        <tr>
                                            <td>{{ $account->name }} {{ $account->surname }}</td>
                                            <td>{{ $account->province }}</td>
                                            <td>{{ $account->user ? $account->user->role : '-' }}</td>
                                            <td>{{ $account->user ? $account->user->status : '-' }}</td>
                                            <td>{{ $account->comment }}</td>
                                            <td>
                                                <a href="{{ url('admin') }}/{{ $account->id }}" class="btn btn-info btn-sm"><i
                                                        class="fa fa-eye"></i>แสดง</a>
                                                <a href="{{ url('admin') }}/{{ $account->id }}/edit"
                                                    class="btn btn-warning btn-sm"><i class="fa fa-pencil"></i>แก้ไข</a>
                                            </td>
                                        </tr>
                                    @empty
                                        <tr>
                                            <td colspan="6" class="text-center">ไม่มีข้อมูล</td>
                                        </tr>
                                    @endforelse
                                </tbody>
                            </table>
                            <!--/.table-->
                        </div>
                        <!--/.table-responsive-->
                    </div>
                    <!--/.panel-body-->
                    <div class="panel-footer">
                        <div class="row">
                            <div class="col col-xs-4"></div>
                            <div class="col col-xs-8">
                                <ul class="pull-right">
                                    {{ $accounts->links() }}
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <!--/.panel-->
            </div>
        </div>
    </div>
@endsection
