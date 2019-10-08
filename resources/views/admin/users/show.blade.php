@extends('admin.layouts.app', ['page' => 'users'])

@section('btnBlock')
    @include ('admin.users._nav_user', ['page' => ''])
@stop


@section('content')

    <div class="row">
        <div class="col-md-3">

            <!-- Profile Image -->
            <div class="box box-primary">
                <div class="box-body box-profile">

                    <div class="">
                        @if($user->avatar)
                            @if($user->avatar->isActive())
                                <span class="badge bg-success">
                                    {{ $user->avatar->statusAvatar()[$user->avatar->status] }}
                                </span>
                            @elseif($user->avatar->isModeration())
                                <span class="badge bg-warning">
                                    {{ $user->avatar->statusAvatar()[$user->avatar->status] }}
                                </span>
                            @elseif($user->avatar->isNotMatch())
                                <span class="badge bg-danger">
                                    {{ $user->avatar->statusAvatar()[$user->avatar->status] }}
                                </span>
                            @endif
                        @endif
                    </div>

                    @if($user->avatar && Storage::disk('public')->exists('user/avatar/medium/'.$user->avatar->image))
                        @if($user->avatar->isModeration() || $user->avatar->isNotMatch())
                            <img src="{{ $user->avatar !== null ? Storage::disk('public')->url('user/avatar/blur/'.$user->avatar->image) : 'https://vk.com/images/dquestion_app_widget_1_b.png'}}" class="profile-user-img img-responsive img-circle" alt="...">
                        @else
                            <img src="{{ $user->avatar !== null ? Storage::disk('public')->url('user/avatar/medium/'.$user->avatar->image) : 'https://vk.com/images/dquestion_app_widget_1_b.png'}}" class="profile-user-img img-responsive img-circle" alt="...">
                        @endif
                    @else
                        <img src="https://vk.com/images/dquestion_app_widget_1_b.png" class="profile-user-img img-responsive img-circle " alt="...">
                    @endif

                    <h3 class="profile-username text-center">
                        {{ $user->name }}
                    </h3>

                    <p class="text-muted text-center">{{ $user->forename??'—' }} {{ $user->surname??'—' }}</p>

                    <p class="text-muted text-center">

                        @if ($user->isWait())
                            <span class="badge bg-warning">{{ $user->statusList()[$user->status] }}</span>
                        @endif
                        @if ($user->isActive())
                            <span class="badge bg-green-gradient">{{ $user->statusList()[$user->status] }}</span>
                        @endif
                        @if($groups = $user->groups)
                            @foreach($groups as $group)
                                <span class="badge bg-secondary font-weight-light small">{{ $group->name }}</span>
                            @endforeach
                        @endif
                    </p>

                    @if($user->avatar)
                        <div class="d-flex flex-row ">
                            <form method="POST" action="{{ route('admin.users.avatar.not.match', $user->avatar) }}" class="mr-1">
                                @csrf
                                <button class="btn btn-sm btn-danger" data-toggle="tooltip" data-placement="top" title="{{ $user->avatar->statusAvatar()['not_match'] }}"><i class="fas fa-ban"></i></button>
                            </form>
                            <form method="POST" action="{{ route('admin.users.avatar.active', $user->avatar) }}" class="mr-1">
                                @csrf
                                <button class="btn btn-sm btn-primary" data-toggle="tooltip" data-placement="top" title="{{ $user->avatar->statusAvatar()['active'] }}"><i class="fas fa-check"></i></button>
                            </form>
                        </div>
                    @endif

                    <ul class="list-group list-group-unbordered">
                        <li class="list-group-item">
                            <b>Город</b> <a class="pull-right">{{ $user->city??'—' }}</a>
                        </li>
                        <li class="list-group-item">
                            <b>{{__('register.EMailAddress')}}</b> <a class="pull-right">{{ $user->email }}</a>
                        </li>
                        <li class="list-group-item">
                            <b>{{__('fillable.Phone')}}</b> <a class="pull-right">{{ $user->userPhoneChar($user) }}</a>
                        </li>

                    </ul>

                    <div class="btn-group w-100 ">
                        <button type="button" class="btn btn-primary btn-sm dropdown-toggle btn-block " data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            {{__('fillable.Edit')}}
                        </button>
                        <div class="dropdown-menu dropdown-menu-left rounded-0 w-100">
                            <a href="{{ route('admin.users.edit', $user) }}" class="btn bg-transparent btn-block text-left btn-sm rounded-0 text-black" style="text-align: left"><i class="fal fa-pen mr-2"></i> {{ __('button.Edit') }}</a>

                            @if ($user->isWait())
                                <div class="form-group mb-0">
                                    <form method="POST" action="{{ route('admin.users.verify', $user) }}" class="">
                                        @csrf
                                        <button class="btn bg-transparent btn-block text-left btn-sm rounded-0" onclick="return confirm('Вы хотите подтвердить аккаунт?')" style="text-align: left"><i class="fal fa-check  mr-2"></i> {{__('menu.Verify')}}</button>
                                    </form>
                                </div>
                            @endif

                            <div class="form-group mb-0">
                                <form method="POST" action="{{ route('admin.users.destroy', $user) }}" class="">
                                    @csrf
                                    @method('DELETE')
                                    <button class="btn bg-transparent btn-block  btn-sm rounded-0" onclick="return confirm('Удалить Пользователя?')" style="text-align: left"><i class="fal fa-trash mr-2"></i> {{__('button.Delete')}}</button>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="form-group mb-0 w-100 ">
                        <form method="POST" action="{{ route('admin.users.verify_owner', $user) }}" class="">
                            @csrf
                            <button class="btn btn-block btn-success w-100 my-1 btn-sm rounded" onclick="return confirm('Владелец уже проверен?')" @if(!empty($user->isVerifiedOwner())) disabled @endif><i class="fal fa-check  mr-2"></i> {{__('Сделать владельца провереным')}}</button>
                        </form>
                    </div>

                </div>
                <!-- /.box-body -->
            </div>
            <!-- /.box -->

            <!-- About Me Box -->
            <div class="box box-primary">
                <div class="box-header with-border">
                    <h3 class="box-title">О себе</h3>
                </div>
                <!-- /.box-header -->
                <div class="box-body">
                    <p class="text-muted">
                        {{ $user->about??'—' }}
                    </p>
                </div>
                <!-- /.box-body -->
            </div>
            <!-- /.box -->
        </div>
        <!-- /.col -->
        <div class="col-md-9 d-none">
            <div class="nav-tabs-custom">
                <ul class="nav nav-tabs">
                    <li class="active"><a href="#activity" data-toggle="tab">Activity</a></li>
                    <li><a href="#timeline" data-toggle="tab">Timeline</a></li>
                    <li><a href="#settings" data-toggle="tab">Settings</a></li>
                </ul>
                <div class="tab-content">
                    <div class="active tab-pane" id="activity">
                        <!-- Post -->
                        <div class="post">
                            <div class="user-block">
                                <img class="img-circle img-bordered-sm" src="../../dist/img/user1-128x128.jpg" alt="user image">
                                <span class="username">
                          <a href="#">Jonathan Burke Jr.</a>
                          <a href="#" class="pull-right btn-box-tool"><i class="fa fa-times"></i></a>
                        </span>
                                <span class="description">Shared publicly - 7:30 PM today</span>
                            </div>
                            <!-- /.user-block -->
                            <p>
                                Lorem ipsum represents a long-held tradition for designers,
                                typographers and the like. Some people hate it and argue for
                                its demise, but others ignore the hate as they create awesome
                                tools to help create filler text for everyone from bacon lovers
                                to Charlie Sheen fans.
                            </p>
                            <ul class="list-inline">
                                <li><a href="#" class="link-black text-sm"><i class="fa fa-share margin-r-5"></i> Share</a></li>
                                <li><a href="#" class="link-black text-sm"><i class="fa fa-thumbs-o-up margin-r-5"></i> Like</a>
                                </li>
                                <li class="pull-right">
                                    <a href="#" class="link-black text-sm"><i class="fa fa-comments-o margin-r-5"></i> Comments
                                        (5)</a></li>
                            </ul>

                            <input class="form-control input-sm" type="text" placeholder="Type a comment">
                        </div>
                        <!-- /.post -->

                        <!-- Post -->
                        <div class="post clearfix">
                            <div class="user-block">
                                <img class="img-circle img-bordered-sm" src="../../dist/img/user7-128x128.jpg" alt="User Image">
                                <span class="username">
                          <a href="#">Sarah Ross</a>
                          <a href="#" class="pull-right btn-box-tool"><i class="fa fa-times"></i></a>
                        </span>
                                <span class="description">Sent you a message - 3 days ago</span>
                            </div>
                            <!-- /.user-block -->
                            <p>
                                Lorem ipsum represents a long-held tradition for designers,
                                typographers and the like. Some people hate it and argue for
                                its demise, but others ignore the hate as they create awesome
                                tools to help create filler text for everyone from bacon lovers
                                to Charlie Sheen fans.
                            </p>

                            <form class="form-horizontal">
                                <div class="form-group margin-bottom-none">
                                    <div class="col-sm-9">
                                        <input class="form-control input-sm" placeholder="Response">
                                    </div>
                                    <div class="col-sm-3">
                                        <button type="submit" class="btn btn-danger pull-right btn-block btn-sm">Send</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <!-- /.post -->

                        <!-- Post -->
                        <div class="post">
                            <div class="user-block">
                                <img class="img-circle img-bordered-sm" src="../../dist/img/user6-128x128.jpg" alt="User Image">
                                <span class="username">
                          <a href="#">Adam Jones</a>
                          <a href="#" class="pull-right btn-box-tool"><i class="fa fa-times"></i></a>
                        </span>
                                <span class="description">Posted 5 photos - 5 days ago</span>
                            </div>
                            <!-- /.user-block -->
                            <div class="row margin-bottom">
                                <div class="col-sm-6">
                                    <img class="img-responsive" src="../../dist/img/photo1.png" alt="Photo">
                                </div>
                                <!-- /.col -->
                                <div class="col-sm-6">
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <img class="img-responsive" src="../../dist/img/photo2.png" alt="Photo">
                                            <br>
                                            <img class="img-responsive" src="../../dist/img/photo3.jpg" alt="Photo">
                                        </div>
                                        <!-- /.col -->
                                        <div class="col-sm-6">
                                            <img class="img-responsive" src="../../dist/img/photo4.jpg" alt="Photo">
                                            <br>
                                            <img class="img-responsive" src="../../dist/img/photo1.png" alt="Photo">
                                        </div>
                                        <!-- /.col -->
                                    </div>
                                    <!-- /.row -->
                                </div>
                                <!-- /.col -->
                            </div>
                            <!-- /.row -->

                            <ul class="list-inline">
                                <li><a href="#" class="link-black text-sm"><i class="fa fa-share margin-r-5"></i> Share</a></li>
                                <li><a href="#" class="link-black text-sm"><i class="fa fa-thumbs-o-up margin-r-5"></i> Like</a>
                                </li>
                                <li class="pull-right">
                                    <a href="#" class="link-black text-sm"><i class="fa fa-comments-o margin-r-5"></i> Comments
                                        (5)</a></li>
                            </ul>

                            <input class="form-control input-sm" type="text" placeholder="Type a comment">
                        </div>
                        <!-- /.post -->
                    </div>
                    <!-- /.tab-pane -->
                    <div class="tab-pane" id="timeline">
                        <!-- The timeline -->
                        <ul class="timeline timeline-inverse">
                            <!-- timeline time label -->
                            <li class="time-label">
                        <span class="bg-red">
                          10 Feb. 2014
                        </span>
                            </li>
                            <!-- /.timeline-label -->
                            <!-- timeline item -->
                            <li>
                                <i class="fa fa-envelope bg-blue"></i>

                                <div class="timeline-item">
                                    <span class="time"><i class="fa fa-clock-o"></i> 12:05</span>

                                    <h3 class="timeline-header"><a href="#">Support Team</a> sent you an email</h3>

                                    <div class="timeline-body">
                                        Etsy doostang zoodles disqus groupon greplin oooj voxy zoodles,
                                        weebly ning heekya handango imeem plugg dopplr jibjab, movity
                                        jajah plickers sifteo edmodo ifttt zimbra. Babblely odeo kaboodle
                                        quora plaxo ideeli hulu weebly balihoo...
                                    </div>
                                    <div class="timeline-footer">
                                        <a class="btn btn-primary btn-xs">Read more</a>
                                        <a class="btn btn-danger btn-xs">Delete</a>
                                    </div>
                                </div>
                            </li>
                            <!-- END timeline item -->
                            <!-- timeline item -->
                            <li>
                                <i class="fa fa-user bg-aqua"></i>

                                <div class="timeline-item">
                                    <span class="time"><i class="fa fa-clock-o"></i> 5 mins ago</span>

                                    <h3 class="timeline-header no-border"><a href="#">Sarah Young</a> accepted your friend request
                                    </h3>
                                </div>
                            </li>
                            <!-- END timeline item -->
                            <!-- timeline item -->
                            <li>
                                <i class="fa fa-comments bg-yellow"></i>

                                <div class="timeline-item">
                                    <span class="time"><i class="fa fa-clock-o"></i> 27 mins ago</span>

                                    <h3 class="timeline-header"><a href="#">Jay White</a> commented on your post</h3>

                                    <div class="timeline-body">
                                        Take me to your leader!
                                        Switzerland is small and neutral!
                                        We are more like Germany, ambitious and misunderstood!
                                    </div>
                                    <div class="timeline-footer">
                                        <a class="btn btn-warning btn-flat btn-xs">View comment</a>
                                    </div>
                                </div>
                            </li>
                            <!-- END timeline item -->
                            <!-- timeline time label -->
                            <li class="time-label">
                        <span class="bg-green">
                          3 Jan. 2014
                        </span>
                            </li>
                            <!-- /.timeline-label -->
                            <!-- timeline item -->
                            <li>
                                <i class="fa fa-camera bg-purple"></i>

                                <div class="timeline-item">
                                    <span class="time"><i class="fa fa-clock-o"></i> 2 days ago</span>

                                    <h3 class="timeline-header"><a href="#">Mina Lee</a> uploaded new photos</h3>

                                    <div class="timeline-body">
                                        <img src="http://placehold.it/150x100" alt="..." class="margin">
                                        <img src="http://placehold.it/150x100" alt="..." class="margin">
                                        <img src="http://placehold.it/150x100" alt="..." class="margin">
                                        <img src="http://placehold.it/150x100" alt="..." class="margin">
                                    </div>
                                </div>
                            </li>
                            <!-- END timeline item -->
                            <li>
                                <i class="fa fa-clock-o bg-gray"></i>
                            </li>
                        </ul>
                    </div>
                    <!-- /.tab-pane -->

                    <div class="tab-pane" id="settings">
                        <form class="form-horizontal">
                            <div class="form-group">
                                <label for="inputName" class="col-sm-2 control-label">Name</label>

                                <div class="col-sm-10">
                                    <input type="email" class="form-control" id="inputName" placeholder="Name">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="inputEmail" class="col-sm-2 control-label">Email</label>

                                <div class="col-sm-10">
                                    <input type="email" class="form-control" id="inputEmail" placeholder="Email">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="inputName" class="col-sm-2 control-label">Name</label>

                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="inputName" placeholder="Name">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="inputExperience" class="col-sm-2 control-label">Experience</label>

                                <div class="col-sm-10">
                                    <textarea class="form-control" id="inputExperience" placeholder="Experience"></textarea>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="inputSkills" class="col-sm-2 control-label">Skills</label>

                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="inputSkills" placeholder="Skills">
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-sm-offset-2 col-sm-10">
                                    <div class="checkbox">
                                        <label>
                                            <input type="checkbox"> I agree to the <a href="#">terms and conditions</a>
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-sm-offset-2 col-sm-10">
                                    <button type="submit" class="btn btn-danger">Submit</button>
                                </div>
                            </div>
                        </form>
                    </div>
                    <!-- /.tab-pane -->
                </div>
                <!-- /.tab-content -->
            </div>
            <!-- /.nav-tabs-custom -->
        </div>
        <!-- /.col -->
    </div>


@endsection
