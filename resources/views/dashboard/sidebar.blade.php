<nav id="sidebar">
    <div class="sidebar_blog_1">
       <div class="sidebar-header">
          <div class="logo_section">
             <a href="index.html"><img class="logo_icon img-responsive" src="{{ asset('pluto-1.0.0') }}/images/logo/logo_icon.png" alt="#" /></a>
          </div>
       </div>
       <div class="sidebar_user_info">
          <div class="icon_setting"></div>
          <div class="user_profle_side">
             <div class="user_img"><img class="img-responsive" src="{{ asset('pluto-1.0.0') }}/images/layout_img/user_img.jpg" alt="#" /></div>
             <div class="user_info">
                <h3 style="color: white">{{ Auth::user()->name}}</h3>
                {{-- <span style="color: white">{{ Auth::user()->role}}</span> --}}
                <p style="color: #cdd01e"><span class="online_animation" style="background: #cdd01e"></span> {{ Auth::user()->role}}</p>
             </div>
          </div>
       </div>
    </div>
    <div class="sidebar_blog_2">
       {{-- <h4>General</h4> --}}
       <ul class="list-unstyled components">
          <li class="active"><a href="{{route ('dashboard')}}"><i class="fa fa-dashboard yellow_color"></i> <span>Dashboard</span></a></li>
          </li>
          <li>
            <a href="#elements" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle"><i class="fa fa-table purple_color"></i> <span>Data Master</span></a>
            <ul class="collapse list-unstyled" id="elements">
               <li><a href="#"> <i class="fa fa-circle" style="font-size: 12px"></i> <span>Data User</span></a></li>
               <li><a href="#"><i class="fa fa-circle" style="font-size: 12px"></i> <span>Data Kamar</span></a></li>
               <li><a href="#"><i class="fa fa-circle" style="font-size: 12px"></i> <span>Data Pesanan</span></a></li>
               <li><a href="{{ route('dashboard.kategori.index')}}"><i class="fa fa-circle" style="font-size: 12px"></i> <span>Kategori</span></a></li>
               <li><a href="{{ route('dashboard.display.index')}}"><i class="fa fa-circle" style="font-size: 12px"></i> <span>Display</span></a></li>
            </ul>
         </li>
        <li>
            <a href="#element" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle"><i class="fa fa-clone red_color"></i> <span>Landing Page</span></a>
            <ul class="collapse list-unstyled" id="element">
               <li><a href="#"> <i class="fa fa-circle" style="font-size: 12px"></i> <span>Slider</span></a></li>
               <li><a href="#"> <i class="fa fa-circle" style="font-size: 12px"></i> <span>About Us</span></a></li>
               <li><a href="#"><i class="fa fa-circle" style="font-size: 12px"></i> <span>Services</span></a></li>
               <li><a href="#"><i class="fa fa-circle" style="font-size: 12px"></i> <span>Rooms</span></a></li>
            </ul>
         </li>
          <li><a></a></li>
          <li><a></a></li>
          <li><a></a></li>
          <li><a></a></li>
          <li><a></a></li>
          <li><a></a></li>
          <li><a></a></li>
          <li><a></a></li>
          <li><a></a></li>
          <li><a></a></li>
          <li><a></a></li>
          <li><a></a></li>
          {{-- <li>
             <a href="#element" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle"><i class="fa fa-diamond purple_color"></i> <span>Elements</span></a>
             <ul class="collapse list-unstyled" id="element">
                <li><a href="general_elements.html">> <span>General Elements</span></a></li>
                <li><a href="media_gallery.html">> <span>Media Gallery</span></a></li>
                <li><a href="icons.html">> <span>Icons</span></a></li>
                <li><a href="invoice.html">> <span>Invoice</span></a></li>
             </ul>
          </li>
          <li><a href="tables.html"><i class="fa fa-table purple_color2"></i> <span>Tables</span></a></li>
          <li>
             <a href="#apps" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle"><i class="fa fa-object-group blue2_color"></i> <span>Apps</span></a>
             <ul class="collapse list-unstyled" id="apps">
                <li><a href="email.html">> <span>Email</span></a></li>
                <li><a href="calendar.html">> <span>Calendar</span></a></li>
                <li><a href="media_gallery.html">> <span>Media Gallery</span></a></li>
             </ul>
          </li>
          <li><a href="price.html"><i class="fa fa-briefcase blue1_color"></i> <span>Pricing Tables</span></a></li>
          <li>
             <a href="contact.html">
             <i class="fa fa-paper-plane red_color"></i> <span>Contact</span></a>
          </li>
          <li class="active">
             <a href="#additional_page" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle"><i class="fa fa-clone yellow_color"></i> <span>Additional Pages</span></a>
             <ul class="collapse list-unstyled" id="additional_page">
                <li>
                   <a href="profile.html">> <span>Profile</span></a>
                </li>
                <li>
                   <a href="project.html">> <span>Projects</span></a>
                </li>
                <li>
                   <a href="login.html">> <span>Login</span></a>
                </li>
                <li>
                   <a href="404_error.html">> <span>404 Error</span></a>
                </li>
             </ul>
          </li>
          <li><a href="map.html"><i class="fa fa-map purple_color2"></i> <span>Map</span></a></li>
          <li><a href="charts.html"><i class="fa fa-bar-chart-o green_color"></i> <span>Charts</span></a></li> --}}
          <li>
            <form method="POST" action="{{ route('logout') }}">
                @csrf

                <x-dropdown-link :href="route('logout')"
                        onclick="event.preventDefault();
                                    this.closest('form').submit();">
                    <i class="fa fa-sign-out red_color"></i>{{ __('Log Out') }}
                </x-dropdown-link>
            </form>
          </li>
       </ul>
    </div>
 </nav>
