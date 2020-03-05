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
            transform: scale(3);
        }
    </style>
@endsection
@section('content')
<div class="main-content">
    <div class="row small-spacing">
        <div class="col-12">
            <div class="box-content">
                <h4 class="box-title">Kullanıcı Verileri</h4>
                <!-- /.box-title -->
                <div class="dropdown js__drop_down">
                    <a href="#" class="dropdown-icon glyphicon glyphicon-option-vertical js__drop_down_button"></a>
                    <ul class="sub-menu">
                        <li><a href="#">Action</a></li>
                        <li><a href="#">Another action</a></li>
                        <li><a href="#">Something else there</a></li>
                        <li class="split"></li>
                        <li><a href="#">Separated link</a></li>
                    </ul>
                    <!-- /.sub-menu -->
                </div>
                <!-- /.dropdown js__dropdown -->
                <table id="example" class="table table-striped table-bordered display" style="width:100%">
                    <thead>
                    <tr>
                        <th>Adı</th>
                        <th>Soyadı</th>
                        <th>Takma ad</th>
                        <th>Email</th>
                        <th>Telefon</th>
                        <th>Fotoğraf</th>
                        <th>Düzenle</th>
                        <th>Sil</th>
                    </tr>
                    </thead>

                    <tfoot>
                    <tr>
                        <th>Adı</th>
                        <th>Soyadı</th>
                        <th>Takma ad</th>
                        <th>Email</th>
                        <th>Telefon</th>
                        <th>Fotoğraf</th>
                        <th>Düzenle</th>
                        <th>Sil</th>
                    </tr>
                    </tfoot>
                    <tbody>
                    @foreach($total_user_info as $total_users)
                    <tr>
                        <th>{{$total_users->name}}</th>
                        <th>{{$total_users->lastname}}</th>
                        <th>{{$total_users->nickname}}</th>
                        <th>{{$total_users->email}}</th>
                        <th>{{$total_users->telephone}}</th>
                        <th class="zoom-img"><img src="{{asset('avatar/'.$total_users->photo)}}" width="50px" alt=""></th>
                        <th><a href="{{route('admin.users.info',$total_users->id)}}"><input type="submit" class="btn btn-success"  value="düzenle"></a></th>
                        <th><a href="{{route('admin.users.destory',$total_users->id)}}"><input type="submit" class="btn btn-danger"  value="sil"></a></th>
                    </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            <!-- /.box-content -->
        </div>
        <!-- /.col-12 -->

    </div>
    <!-- /.row small-spacing -->
    @include('backend.AdminMasterPage.head-nav-footer.foot')
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