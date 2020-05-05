<nav class="navbar navbar-vertical fixed-left navbar-expand-md navbar-light bg-white" id="sidenav-main">
    <div class="container-fluid">
        <!-- Toggler -->
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#sidenav-collapse-main" aria-controls="sidenav-main" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <!-- Brand -->
        {{-- <a class="navbar-brand pt-0" href="/home">
            <img src="{{ asset('argon') }}/img/brand/blue.png" class="navbar-brand-img" alt="...">
        </a> --}}
        <!-- User -->
        <ul class="nav align-items-center d-md-none">
            <li class="nav-item dropdown">
                <a class="nav-link" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <div class="media align-items-center">
                        {{-- <span class="avatar avatar-sm rounded-circle">
                        {{-- <img alt="Image placeholder" src="{{ asset('argon') }}/img/theme/team-1-800x800.jpg"> --}}
                        </span> --}}
                    </div>
                </a>
                <div class="dropdown-menu dropdown-menu-arrow dropdown-menu-right">
                    <div class=" dropdown-header noti-title">
                        <h6 class="text-overflow m-0">{{ __('Welcome!') }}</h6>
                    </div>
                    {{-- <a href="{{ route('profile.edit') }}" class="dropdown-item">
                        <i class="ni ni-single-02"></i>
                        <span>{{ __('My profile') }}</span>
                    </a> --}}
                    <div class="dropdown-divider"></div>
                    <a href="{{ route('logout') }}" class="dropdown-item" onclick="event.preventDefault();
                    document.getElementById('logout-form').submit();">
                        <i class="ni ni-user-run"></i>
                        <span>{{ __('Logout') }}</span>
                    </a>
                </div>
            </li>
        </ul>
        <!-- Collapse -->
        <div class="collapse navbar-collapse" id="sidenav-collapse-main">
            <!-- Collapse header -->
            <div class="navbar-collapse-header d-md-none">
                <div class="row">
                    <div class="col-6 collapse-brand">
                        <a href="/user">
                            {{-- <img src="{{ asset('argon') }}/img/brand/blue.png"> --}}
                        </a>
                    </div>
                    <div class="col-6 collapse-close">
                        <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#sidenav-collapse-main" aria-controls="sidenav-main" aria-expanded="false" aria-label="Toggle sidenav">
                            <span></span>
                            <span></span>
                        </button>
                    </div>
                </div>
            </div>
            <!-- Form -->
            <form class="mt-4 mb-3 d-md-none">
                <div class="input-group input-group-rounded input-group-merge">
                    <input type="search" class="form-control form-control-rounded form-control-prepended" placeholder="{{ __('Search') }}" aria-label="Search">
                    <div class="input-group-prepend">
                        <div class="input-group-text">
                            <span class="fa fa-search"></span>
                        </div>
                    </div>
                </div>
            </form>
            <!-- Navigation -->
            @if(Auth::user()->password !== null)
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('home') }}">
                        <i class="fa fa-home text-primary"></i> {{ __('Home') }}
                    </a>
                </li>

                @if(\Auth::user()->role == 'principal' && \Auth::user()->status == 1)
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('add.new.teacher') }}">
                        <i class="fa fa-handshake text-primary"></i> {{ __('Add Teacher') }}
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="{{ route('add.student') }}" >
                        <i class="fa fa-tasks text-primary"></i>
                        <span class="nav-link-text text-primary">{{ __('Add Students') }}</span>
                    </a>

                                           </li>
                            {{-- <li class="nav-item">
                                <a class="nav-link" href="/masterclass">
			                        <i class="fa fa-chalkboard text-primary"></i> {{ __('Masterclass') }}
			                    </a>
                            </li> --}}
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('add.new.class') }}">
			                        <i class="fa fa-info text-primary"></i> {{ __('Add Class') }}
			                    </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('add.subjects') }}">
			                        <i class="fa fa-info text-primary"></i> {{ __('Add Subject') }}
			                    </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('select.teachers') }}">
			                        <i class="fa fa-info text-primary"></i> {{ __('Assign Teacher To Class') }}
			                    </a>
                            </li>
                            @elseif(\Auth::user()->teacher)
                                                    <li class="nav-item">
                                        <a class="nav-link" href="{{ route('select.class') }}">
                                            <i class="fa fa-info text-primary"></i> {{ __('Upload Assignment/Lesson') }}
                                        </a>
                                    </li>
                                @elseif(\Auth::user()->parent)
                                <li class="nav-item">
                                        <a class="nav-link" href="{{ route('children.array') }}">
                                            <i class="fa fa-info text-primary"></i> {{ __('Children Status') }}
                                        </a>
                                    </li>
                                    @elseif(\Auth::user()->admin)
                                <li class="nav-item">
                                        <a class="nav-link" href="{{ route('view.unapproved') }}">
                                            <i class="fa fa-info text-primary"></i> {{ __('Approve Account') }}
                                        </a>
                                    </li>
                                    @elseif(\Auth::user()->student)
                                <li class="nav-item">
                                        <a class="nav-link" href="{{ route('all.lessons') }}">
                                            <i class="fa fa-info text-primary"></i> {{ __('All Lessons') }}
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                            <a class="nav-link" href="{{ route('all.assignments') }}">
                                                <i class="fa fa-info text-primary"></i> {{ __('All Assignments') }}
                                            </a>
                                        </li>
                            @endif
                        </ul>
                        @endif
                    </div>
                </li>

                {{-- <li class="nav-item">
                    <a class="nav-link" href="{!! route('all_projects.show') !!}">
                        <i class="fa fa-users text-primary"></i> Grant Applications
                    </a>
                </li> --}}

                {{-- <li class="nav-item">
                    <a class="nav-link" href="/submission">
                        <i class="fa fa-users text-primary"></i> Submit Application
                    </a>
                </li> --}}

            </ul>
        </div>
    </div>
    <div class="modal" id="notification_modal" role="dialog" style="z-index:9999;">
            <div class="w3-modal-dialog">
              <!-- Modal content-->

              <div class="modal-content modal_modify" style="background-color:rgba(255,255,255,0.8);">
                <div class="modal-header w3-border-bottom">


                    <h4 id="response_id" ></h4>

                </div>
                </div>
              </div>
          </div>
</nav>
