@extends('backend.AdminMasterPage.master')
@section('title','AdminPaneli')
@section('content')

    <div class="main-content">
        <div class="row small-spacing">
            <div class="col-md-6 col-xl-3 col-12">
                <div class="box-content">
                    <h4 class="box-title text-orange"><i class="fa fa-user"></i> Toplam kullanıcılar</h4>
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
                    <div class="content widget-stat">
                        <div id="traffic-sparkline-chart-3" class="left-content"></div>
                        <!-- /#traffic-sparkline-chart-3 -->
                        <div class="right-content">
                            <h2 class="counter text-danger">{{$total_users}} </h2>
                            <!-- /.counter -->
                            <p class="text text-danger">Aktif/pasif</p>
                            <!-- /.text -->
                        </div>
                        <!-- .right-content -->
                        <div><a href="{{route('admin.users')}}"><i class="fa fa-search"></i> görüntüle</a></div>
                    </div>
                    <!-- /.content widget-stat -->
                </div>
                <!-- /.box-content -->
            </div>
            <!-- /.col-md-6 col-xl-3 col-12 -->
            <div class="col-md-6 col-xl-3 col-12">
                <div class="box-content">
                    <h4 class="box-title text-info"><i class="fa fa-user"></i> Yeni Üyeler</h4>
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
                    <div class="content widget-stat">
                        <div id="traffic-sparkline-chart-1" class="left-content margin-top-15"></div>
                        <!-- /#traffic-sparkline-chart-1 -->
                        <div class="right-content">
                            <h2 class="counter text-info">{{$today_created_user}}</h2>
                            <!-- /.counter -->
                            <p class="text text-info">Son 24 saat</p>
                            <!-- /.text -->
                        </div>
                        <!-- .right-content -->
                        <div><a href=""><i class="fa fa-search"></i> görüntüle</a></div>
                    </div>
                    <!-- /.content widget-stat -->
                </div>
                <!-- /.box-content -->
            </div>
            <!-- /.col-md-6 col-xl-3 col-12 -->

            <div class="col-md-6 col-xl-3 col-12">
                <div class="box-content">
                    <h4 class="box-title text-success"><i class="fa fa-newspaper"></i>  Toplam paylaşımlar</h4>
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
                    <div class="content widget-stat">
                        <div id="traffic-sparkline-chart-2" class="left-content margin-top-10"></div>
                        <!-- /#traffic-sparkline-chart-2 -->
                        <div class="right-content">
                            <h2 class="counter text-success">{{$total_shares}}</h2>
                            <!-- /.counter -->
                            <p class="text text-success">Paylaşımlar</p>
                            <!-- /.text -->
                        </div>
                        <!-- .right-content -->
                        <div><a href=""><i class="fa fa-search"></i> görüntüle</a></div>
                    </div>
                    <!-- /.content widget-stat -->
                </div>
                <!-- /.box-content -->
            </div>
            <!-- /.col-xl-4 col-12 -->

            <div class="col-md-6 col-xl-3 col-12">
                <div class="box-content">
                    <h4 class="box-title text-orange">Tüm Kategoriler</h4>
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
                    <div class="content widget-stat">
                        <div id="traffic-sparkline-chart-3-custom" class="left-content"></div>
                        <!-- /#traffic-sparkline-chart-3 -->
                        <div class="right-content">
                            <h2 class="counter text-orange">{{$total_categories}} <i class="fa fa-angle-double-up"></i></h2>
                            <!-- /.counter -->
                            <p class="text text-orange">Kategoriler</p>
                            <!-- /.text -->
                        </div>
                        <!-- .right-content -->
                        <div><a href=""><i class="fa fa-search"></i> görüntüle</a></div>
                    </div>
                    <!-- /.content widget-stat -->
                </div>
                <!-- /.box-content -->
            </div>
            <!-- /.col-md-6 col-xl-3 col-12 -->
        </div>
        <!-- .row -->

        <!-- .row -->
        <div class="row small-spacing">
            <div class="col-xl-3 col-lg-6 col-12">
                <div class="box-content bg-success text-white">
                    <div class="statistics-box with-icon">
                        <i class="ico small far fa-gem"></i>
                        <p class="text text-white">SUCCESS</p>
                        <h2 class="counter">72943</h2>
                    </div>
                </div>
                <!-- /.box-content -->
            </div>
            <!-- /.col-xl-3 col-lg-6 col-12 -->
            <div class="col-xl-3 col-lg-6 col-12">
                <div class="box-content bg-info text-white">
                    <div class="statistics-box with-icon">
                        <i class="ico small fa fa-download"></i>
                        <p class="text text-white">DOWNLOAD</p>
                        <h2 class="counter">6382</h2>
                    </div>
                </div>
                <!-- /.box-content -->
            </div>
            <!-- /.col-xl-3 col-lg-6 col-12 -->
            <div class="col-xl-3 col-lg-6 col-12">
                <div class="box-content bg-danger text-white">
                    <div class="statistics-box with-icon">
                        <i class="ico small fa fa-bug"></i>
                        <p class="text text-white">FIXED BUG</p>
                        <h2 class="counter">12564</h2>
                    </div>
                </div>
                <!-- /.box-content -->
            </div>
            <!-- /.col-xl-3 col-lg-6 col-12 -->
            <div class="col-xl-3 col-lg-6 col-12">
                <div class="box-content bg-warning text-white">
                    <div class="statistics-box with-icon">
                        <i class="ico small fa fa-dollar-sign"></i>
                        <p class="text text-white">SALES</p>
                        <h2 class="counter">2,637</h2>
                    </div>
                </div>
                <!-- /.box-content -->
            </div>
            <!-- /.col-xl-3 col-lg-6 col-12 -->
        </div>
        <!-- .row -->

        <div class="row small-spacing">
            <div class="col-xl-4 col-12">
                <div class="box-content">
                    <h4 class="box-title">Son Paylaşımlar</h4>
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
                    <div class="review-list">
                        @foreach($last_shares as $last_share)
                        <div class="review-item">
                            <div class="top">
                                <div class="name">
                                    <img src="{{asset('avatar/'.$last_share->user->photo)}}" width="50px" alt="">
                                </div>
                                <div class="name">{{$last_share->user->name}}</div>
                                <!-- /.name -->
                                <div class="date">{{$last_share->date}}</div>
                                <!-- /.date -->
                                <div class="star-rating text-warning">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star-half-o"></i>
                                    <i class="fa fa-star-o"></i>
                                </div>
                                <!-- /.star-rating -->
                            </div>
                            <!-- /.top -->
                            <div class="desc">{{$last_share->description}}</div>
                            <!-- /.desc -->
                        </div>
                            @endforeach
                    </div>
                    <!-- /.review-list -->
                </div>
                <!-- /.box-content -->
            </div>
            <!-- /.col-xl-4 col-12 -->
            <div class="col-xl-4 col-12">
                <div class="box-content">
                    <h4 class="box-title">Activity</h4>
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
                    <div class="activity-list">
                        <div class="activity-item">
                            <div class="bar bg-primary">
                                <div class="dot bg-primary"></div>
                                <!-- /.dot -->
                            </div>
                            <!-- /.bar -->
                            <div class="content">
                                <div class="date">10 min</div>
                                <!-- /.date -->
                                <div class="text">
                                    Harry has finished "Amaza HTML" task
                                </div>
                                <!-- /.text -->
                            </div>
                            <!-- /.content -->
                        </div>
                        <!-- /.activity-item -->
                        <div class="activity-item">
                            <div class="bar bg-danger">
                                <div class="dot bg-danger"></div>
                                <!-- /.dot -->
                            </div>
                            <!-- /.bar -->
                            <div class="content">
                                <div class="date">15 min</div>
                                <!-- /.date -->
                                <div class="text">
                                    You completed your task
                                </div>
                                <!-- /.text -->
                            </div>
                            <!-- /.content -->
                        </div>
                        <!-- /.activity-item -->
                        <div class="activity-item">
                            <div class="bar bg-success">
                                <div class="dot bg-success"></div>
                                <!-- /.dot -->
                            </div>
                            <!-- /.bar -->
                            <div class="content">
                                <div class="date">30 min</div>
                                <!-- /.date -->
                                <div class="text">
                                    New updated has been installed
                                </div>
                                <!-- /.text -->
                            </div>
                            <!-- /.content -->
                        </div>
                        <!-- /.activity-item -->
                        <div class="activity-item">
                            <div class="bar bg-violet">
                                <div class="dot bg-violet"></div>
                                <!-- /.dot -->
                            </div>
                            <!-- /.bar -->
                            <div class="content">
                                <div class="date">1 hour ago</div>
                                <!-- /.date -->
                                <div class="text">Write some comments</div>
                                <!-- /.text -->
                            </div>
                            <!-- /.content -->
                        </div>
                        <!-- /.activity-item -->
                        <div class="activity-item">
                            <div class="bar bg-warning">
                                <div class="dot bg-warning"></div>
                                <!-- /.dot -->
                            </div>
                            <!-- /.bar -->
                            <div class="content">
                                <div class="date">1 day ago</div>
                                <!-- /.date -->
                                <div class="text">4 friends request accepted</div>
                                <!-- /.text -->
                            </div>
                            <!-- /.content -->
                        </div>
                        <!-- /.activity-item -->
                        <div class="activity-item">
                            <div class="bar bg-orange">
                                <div class="dot bg-orange"></div>
                                <!-- /.dot -->
                            </div>
                            <!-- /.bar -->
                            <div class="content">
                                <div class="date">6 days ago</div>
                                <!-- /.date -->
                                <div class="text">Betty has joined your team</div>
                                <!-- /.text -->
                            </div>
                            <!-- /.content -->
                        </div>
                        <!-- /.activity-item -->
                        <div class="activity-item">
                            <div class="bar bg-orange">
                                <div class="dot bg-orange"></div>
                                <div class="last-dot bg-orange"></div>
                                <!-- /.dot -->
                            </div>
                            <!-- /.bar -->
                            <div class="content">
                                <div class="date">12 days ago</div>
                                <!-- /.date -->
                                <div class="text">Daisy has joined your team</div>
                                <!-- /.text -->
                            </div>
                            <!-- /.content -->
                        </div>
                        <!-- /.activity-item -->
                    </div>
                    <!-- /.activity-list -->
                    <a href="#" class="activity-link">View all activity <i class="fa fa-angle-down"></i></a>
                </div>
                <!-- /.box-content -->
            </div>
            <!-- /.col-xl-4 col-12 -->
            <div class="col-xl-4 col-12">
                <div class="box-content js__todo_widget">
                    <h4 class="box-title">Todo</h4>
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
                    <div class="todo-list js__todo_list">
                        <div class="todo-item">
                            <div class="checkbox"><input type="checkbox" id="todo-1"><label for="todo-1">Task To Do 1</label></div>
                            <!-- /.checkbox -->
                        </div>
                        <!-- /.todo-item -->
                        <div class="todo-item">
                            <div class="checkbox primary"><input type="checkbox" id="todo-2"><label for="todo-2">Task To Do 2</label></div>
                            <!-- /.checkbox -->
                        </div>
                        <!-- /.todo-item -->
                        <div class="todo-item">
                            <div class="checkbox info"><input type="checkbox" checked id="todo-3"><label for="todo-3">Task To Do 3</label></div>
                            <!-- /.checkbox -->
                        </div>
                        <!-- /.todo-item -->
                        <div class="todo-item">
                            <div class="checkbox success"><input type="checkbox" id="todo-4"><label for="todo-4">Task To Do 4</label></div>
                            <!-- /.checkbox -->
                        </div>
                        <!-- /.todo-item -->
                        <div class="todo-item">
                            <div class="checkbox danger"><input type="checkbox" checked id="todo-5"><label for="todo-5">Task To Do 5</label></div>
                            <!-- /.checkbox -->
                        </div>
                        <!-- /.todo-item -->
                        <div class="todo-item">
                            <div class="checkbox success"><input type="checkbox" id="todo-6"><label for="todo-6">Task To Do 6</label></div>
                            <!-- /.checkbox -->
                        </div>
                        <!-- /.todo-item -->
                        <div class="todo-item">
                            <div class="checkbox success"><input type="checkbox" id="todo-7"><label for="todo-7">Task To Do 7</label></div>
                            <!-- /.checkbox -->
                        </div>
                        <!-- /.todo-item -->
                        <div class="todo-item">
                            <div class="checkbox success"><input type="checkbox" id="todo-8"><label for="todo-8">Task To Do 8</label></div>
                            <!-- /.checkbox -->
                        </div>
                        <!-- /.todo-item -->
                        <div class="todo-item">
                            <div class="checkbox success"><input type="checkbox" id="todo-9"><label for="todo-9">Task To Do 9</label></div>
                            <!-- /.checkbox -->
                        </div>
                        <!-- /.todo-item -->
                    </div>
                    <!-- /.todo-list -->
                    <div class="todo-form">
                        <div class="input-group">
                            <input type="text" placeholder="Add new task" class="form-control js__todo_value">
                            <div class="input-group-btn"><button type="button" class="btn btn-success no-border text-white js__todo_button waves-effect waves-light"><i class="fa fa-plus"></i></button></div>
                            <!-- /.input-group-btn -->
                        </div>
                        <!-- /.input-group -->
                    </div>
                    <!-- /.todo-form -->
                </div>
                <!-- /.box-content .js__todo_form -->
            </div>
            <!-- /.col-xl-4 col-12 -->
        </div>
        <!-- /.row -->

        @include('backend.AdminMasterPage.head-nav-footer.foot')
    </div>
    @endsection