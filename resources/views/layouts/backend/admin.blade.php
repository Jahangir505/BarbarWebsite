<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Admin</title>
    <link rel="stylesheet" type="text/css" href="{{asset('backend')}}/css/main.css">
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  </head>
  <body class="app sidebar-mini rtl">
    <header class="app-header"><a class="app-header__logo" href="index.html">Vali</a>
      <a class="app-sidebar__toggle" href="#" data-toggle="sidebar" aria-label="Hide Sidebar"></a>
      <ul class="app-nav">
        <li class="app-search">
          <input class="app-search__input" type="search" placeholder="Search">
          <button class="app-search__button"><i class="fa fa-search"></i></button>
        </li>
        <li class="dropdown"><a class="app-nav__item" href="#" data-toggle="dropdown" aria-label="Show notifications"><i class="fa fa-bell-o fa-lg"></i></a>
          <ul class="app-notification dropdown-menu dropdown-menu-right">
            <li class="app-notification__title">You have 4 new notifications.</li>
            <div class="app-notification__content">
              <li><a class="app-notification__item" href="javascript:;"><span class="app-notification__icon"><span class="fa-stack fa-lg"><i class="fa fa-circle fa-stack-2x text-primary"></i><i class="fa fa-envelope fa-stack-1x fa-inverse"></i></span></span>
                  <div>
                    <p class="app-notification__message">Lisa sent you a mail</p>
                    <p class="app-notification__meta">2 min ago</p>
                  </div></a></li>
              <li><a class="app-notification__item" href="javascript:;"><span class="app-notification__icon"><span class="fa-stack fa-lg"><i class="fa fa-circle fa-stack-2x text-danger"></i><i class="fa fa-hdd-o fa-stack-1x fa-inverse"></i></span></span>
                  <div>
                    <p class="app-notification__message">Mail server not working</p>
                    <p class="app-notification__meta">5 min ago</p>
                  </div></a></li>
              <li><a class="app-notification__item" href="javascript:;"><span class="app-notification__icon"><span class="fa-stack fa-lg"><i class="fa fa-circle fa-stack-2x text-success"></i><i class="fa fa-money fa-stack-1x fa-inverse"></i></span></span>
                  <div>
                    <p class="app-notification__message">Transaction complete</p>
                    <p class="app-notification__meta">2 days ago</p>
                  </div></a></li>
              <div class="app-notification__content">
                <li><a class="app-notification__item" href="javascript:;"><span class="app-notification__icon"><span class="fa-stack fa-lg"><i class="fa fa-circle fa-stack-2x text-primary"></i><i class="fa fa-envelope fa-stack-1x fa-inverse"></i></span></span>
                    <div>
                      <p class="app-notification__message">Lisa sent you a mail</p>
                      <p class="app-notification__meta">2 min ago</p>
                    </div></a></li>
                <li><a class="app-notification__item" href="javascript:;"><span class="app-notification__icon"><span class="fa-stack fa-lg"><i class="fa fa-circle fa-stack-2x text-danger"></i><i class="fa fa-hdd-o fa-stack-1x fa-inverse"></i></span></span>
                    <div>
                      <p class="app-notification__message">Mail server not working</p>
                      <p class="app-notification__meta">5 min ago</p>
                    </div></a></li>
                <li><a class="app-notification__item" href="javascript:;"><span class="app-notification__icon"><span class="fa-stack fa-lg"><i class="fa fa-circle fa-stack-2x text-success"></i><i class="fa fa-money fa-stack-1x fa-inverse"></i></span></span>
                    <div>
                      <p class="app-notification__message">Transaction complete</p>
                      <p class="app-notification__meta">2 days ago</p>
                    </div></a></li>
              </div>
            </div>
            <li class="app-notification__footer"><a href="#">See all notifications.</a></li>
          </ul>
        </li>
        <!-- User Menu-->
        <li class="dropdown"><a class="app-nav__item" href="#" data-toggle="dropdown" aria-label="Open Profile Menu"><i class="fa fa-user fa-lg"></i></a>
          <ul class="dropdown-menu settings-menu dropdown-menu-right">
            <li><a class="dropdown-item" href="page-user.html"><i class="fa fa-cog fa-lg"></i> Settings</a></li>
            <li><a class="dropdown-item" href="page-user.html"><i class="fa fa-user fa-lg"></i> Profile</a></li>
            <li><a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();"><i class="fa fa-sign-out fa-lg"></i> Logout</a></li>
          </ul>
        </li>
      </ul>
    </header>
    <!-- Sidebar menu-->
    <div class="app-sidebar__overlay" data-toggle="sidebar"></div>
    <aside class="app-sidebar">
      <div class="app-sidebar__user"><img class="app-sidebar__user-avatar" src="{{asset('backend')}}/avater.jpg" width="40" alt="User Image">
        <div>
          <p class="app-sidebar__user-name">{{Auth::user()->name}}</p>
          <p class="app-sidebar__user-designation">Frontend Developer</p>
        </div>
      </div>
      <ul class="app-menu">
        <li><a class="app-menu__item {{Request::is('admin') ? 'active': ''}}" href="{{url('admin')}}"><i class="app-menu__icon fa fa-dashboard"></i><span class="app-menu__label">Dashboard</span></a></li>
         @if(Auth::user()->role_id==1)
        <li><a class="app-menu__item {{Request::is('admin/user') ? 'active': ''}}" href="{{url('admin/user')}}"><i class="app-menu__icon fa fa-users"></i><span class="app-menu__label">Users</span></a></li>

          <li class="treeview"><a class="app-menu__item" href="#" data-toggle="treeview"><i class="app-menu__icon fa fa-cogs"></i><span class="app-menu__label">Manage Site</span><i class="treeview-indicator fa fa-angle-right"></i></a>
                <ul class="treeview-menu">
                          <li><a class="app-menu__item {{Request::is('admin/about') ? 'active': ''}}" href="{{route('about.index')}}"><i class="app-menu__icon fa fa-comments"></i><span class="app-menu__label">About Us</span></a></li>
                          <li><a class="app-menu__item {{Request::is('admin/banner') ? 'active': ''}}" href="{{route('banner.index')}}"><i class="app-menu__icon fa fa-map-signs"></i><span class="app-menu__label">Banner</span></a></li>
                          <li><a class="app-menu__item {{Request::is('admin/contact') ? 'active': ''}}" href="{{url('admin/contact')}}"><i class="app-menu__icon fa fa-comments"></i><span class="app-menu__label">Contact-us</span></a></li>
                          <li><a class="app-menu__item {{Request::is('admin/facts') ? 'active': ''}}" href="{{route('facts.index')}}"><i class="app-menu__icon fa fa-bandcamp"></i><span class="app-menu__label">Facts</span></a></li>
                          <li><a class="app-menu__item {{Request::is('admin/factgrid') ? 'active': ''}}" href="{{route('factgrid.index')}}"><i class="app-menu__icon fa fa-trophy"></i><span class="app-menu__label">Success</span></a></li>
                          <li><a class="app-menu__item {{Request::is('admin/reservation') ? 'active': ''}}" href="{{url('admin/reservation')}}"><i class="app-menu__icon fa fa-asterisk"></i><span class="app-menu__label">Reservation</span></a></li>
                          <li><a class="app-menu__item {{Request::is('admin/manage/social') ? 'active': ''}}" href="{{url('admin/manage/social')}}"><i class="app-menu__icon fa fa-pencil-square"></i><span class="app-menu__label">Social & Address</span></a></li>
                          <li><a class="app-menu__item {{Request::is('admin/slider*') ? 'active': ''}}" href="{{route('slider.index')}}"><i class="app-menu__icon fa fa-sliders"></i><span class="app-menu__label">Slider</span></a></li>
                          <li><a class="app-menu__item {{Request::is('admin/team*') ? 'active': ''}}" href="{{route('team.index')}}"><i class="app-menu__icon fa fa-users"></i><span class="app-menu__label">Team</span></a></li>
                          <li><a class="app-menu__item {{Request::is('admin/gallery*') ? 'active': ''}}" href="{{route('gallery.index')}}"><i class="app-menu__icon fa fa-image"></i><span class="app-menu__label">Gallery</span></a></li>
                          <li><a class="app-menu__item {{Request::is('admin/service*') ? 'active': ''}}" href="{{route('service.index')}}"><i class="app-menu__icon fa fa-money"></i><span class="app-menu__label">Price</span></a></li>
                          <li><a class="app-menu__item {{Request::is('admin/service-on*') ? 'active': ''}}" href="{{route('service-on.index')}}"><i class="app-menu__icon fa fa-cog"></i><span class="app-menu__label">Service</span></a></li>
                </ul>
            </li>
            @endif

        <li><a class="app-menu__item" href="{{url('/')}}" target="_blank"><i class="app-menu__icon fa fa-globe"></i><span class="app-menu__label">Live site</span></a></li>
        <li><a class="app-menu__item" href="{{url('admin')}}"><i class="app-menu__icon fa fa-recycle"></i><span class="app-menu__label">Recycle</span></a></li>

        <li><a class="app-menu__item  " href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();"><i class="app-menu__icon fa fa-sign-out"></i>  <span class="app-menu__label">Logout</span></a></li>
          <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
            @csrf
          </form>

      </ul>
    </aside>
     @yield('content')
    <!-- Essential javascripts for application to work-->
    <script src="{{asset('backend')}}/js/jquery-3.2.1.min.js"></script>
    <script src="{{asset('backend')}}/js/popper.min.js"></script>
    <script src="{{asset('backend')}}/js/bootstrap.min.js"></script>
    <script src="{{asset('backend')}}/js/main.js"></script>
    <!-- The javascript plugin to display page loading on top-->
    <script src="{{asset('backend')}}/js/plugins/pace.min.js"></script>
    <!-- Page specific javascripts-->
    <script type="text/javascript" src="{{asset('backend')}}/js/plugins/chart.js"></script>
    <script type="text/javascript" src="{{asset('backend')}}/js/plugins/jquery.dataTables.min.js"></script>
    <script type="text/javascript" src="{{asset('backend')}}/js/plugins/dataTables.bootstrap.min.js"></script>
    <script type="text/javascript">$('#sampleTable').DataTable();</script>

    <script type="text/javascript">
      var data = {
      	labels: ["January", "February", "March", "April", "May"],
      	datasets: [
      		{
      			label: "My First dataset",
      			fillColor: "rgba(220,220,220,0.2)",
      			strokeColor: "rgba(220,220,220,1)",
      			pointColor: "rgba(220,220,220,1)",
      			pointStrokeColor: "#fff",
      			pointHighlightFill: "#fff",
      			pointHighlightStroke: "rgba(220,220,220,1)",
      			data: [65, 59, 80, 81, 56]
      		},
      		{
      			label: "My Second dataset",
      			fillColor: "rgba(151,187,205,0.2)",
      			strokeColor: "rgba(151,187,205,1)",
      			pointColor: "rgba(151,187,205,1)",
      			pointStrokeColor: "#fff",
      			pointHighlightFill: "#fff",
      			pointHighlightStroke: "rgba(151,187,205,1)",
      			data: [28, 48, 40, 19, 86]
      		}
      	]
      };
      var pdata = [
      	{
      		value: 300,
      		color: "#46BFBD",
      		highlight: "#5AD3D1",
      		label: "Complete"
      	},
      	{
      		value: 50,
      		color:"#F7464A",
      		highlight: "#FF5A5E",
      		label: "In-Progress"
      	}
      ]

      var ctxl = $("#lineChartDemo").get(0).getContext("2d");
      var lineChart = new Chart(ctxl).Line(data);

      var ctxp = $("#pieChartDemo").get(0).getContext("2d");
      var pieChart = new Chart(ctxp).Pie(pdata);
    </script>

  </body>
</html>
