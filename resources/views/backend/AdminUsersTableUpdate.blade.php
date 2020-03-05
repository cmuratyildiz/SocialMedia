@extends('backend.AdminMasterPage.master')
@section('title','Kullanıcılar')
@section('head')
    <link rel="stylesheet" href="{{asset('asset/Admin/assets/plugin/datatables/media/css/dataTables.bootstrap4.min.css')}}">
    <link rel="stylesheet" href="{{asset('asset/Admin/assets/plugin/datatables/extensions/Responsive/css/responsive.bootstrap.min.css')}}">
    <style>
        .zoom-img {
            position: relative;
            margin: auto;
            overflow: hidden;
        }
        .zoom-img img {
            max-width: 100%;
            transition: all 2.0s;
            display: block;
            width: 100%;
            height: auto;
            transform: scale(1);
        }

        .zoom-img:hover img {
            transform: scale(1.9);
        }
    </style>
@endsection
@section('content')
    <div class="main-content">
        <div class="row small-spacing">
            <div class="col-xl-12 col-12">
                <div class="box-content card white">
                    <h4 class="box-title">Kişinin bilgileri</h4>
                    <!-- /.box-title -->
                    <div class="card-content">
                        <form class="form-horizontal" action="{{route('admin.users.update')}}" method="post">
                            @csrf
                            <div class="form-group">
                                <label for="inp-type-1" class="col-md-3 control-label">Adı</label>
                                <div class="col-md-9">
                                    <input type="text" name="name" class="form-control" id="inp-type-1" value="{{$user_details->name}}" >
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="inp-type-2" class="col-md-3 control-label">Soyadı</label>
                                <div class="col-md-9">
                                    <input type="text" name="lastname" class="form-control" id="inp-type-2" value="{{$user_details->lastname}}">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="inp-type-3" class="col-md-3 control-label">Telefon</label>
                                <div class="col-md-9">
                                    <input type="text" name="telephone" class="form-control" id="inp-type-3"  value="{{$user_details->telephone}}">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="inp-type-3" class="col-md-3 control-label">Takma Ad</label>
                                <div class="col-md-9">
                                    <input type="text" name="nickname" class="form-control" id="inp-type-3"  value="{{$user_details->nickname}}">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="inp-type-3" class="col-md-3 control-label">Email</label>
                                <div class="col-md-9">
                                    <input type="email" name="email" class="form-control" id="inp-type-3"  value="{{$user_details->email}}">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="inp-type-3" class="col-md-3 control-label">Fotoğraf</label>
                                <div class="col-md-9">
                                    <input type="file" name="photo" class="form-control" id="inp-type-3">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="inp-type-3" class="col-md-3 control-label">Şifre</label>
                                <div class="col-md-9">
                                    <input type="password" name="password" class="form-control" id="inp-type-3"  value="{{$user_details->password}}">
                                </div>
                            </div>
                            <div class="form-group">

                                <div class="col-md-9">
                                    <input type="hidden" name="id" class="form-control" id="inp-type-3"  value="{{$user_details->id}}">
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="col-md-9">
                                    <input type="submit" value="Güncelle" class="form-control" id="inp-type-3">
                                </div>
                            </div>
                        </form>
                    </div>
                    <!-- /.card-content -->
                </div>
                <!-- /.box-content card white -->
            </div>
        </div>
        <!-- /.row -->

        <!-- /.row small-spacing -->
        @include('backend.AdminMasterPage.head-nav-footer.foot')
    </div>
    <!-- /.row small-spacing -->

    @section('js')
        <script src="{{asset('asset/Admin/assets/scripts/datatables.demo.min.js')}}"></script>
        <script src="{{asset('asset/Admin/assets/plugin/datatables/media/js/jquery.dataTables.min.js')}}"></script>
        <script src="{{asset('asset/Admin/assets/plugin/datatables/media/js/dataTables.bootstrap4.min.js')}}"></script>
        <script src="{{asset('asset/Admin/assets/plugin/datatables/extensions/Responsive/js/dataTables.responsive.min.js')}}"></script>
        <script src="{{asset('asset/Admin/assets/plugin/datatables/extensions/Responsive/js/responsive.bootstrap.min.js')}}"></script>
        <script src="{{asset('asset/Admin/assets/scripts/datatables.demo.min.js')}}"></script>
    @endsection
</div>
@endsection