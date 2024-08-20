<div class="topbar">
    <nav class="navbar navbar-expand-lg navbar-light">
       <div class="full">
          <button type="button" id="sidebarCollapse" class="sidebar_toggle"><i class="fa fa-bars"></i></button>
          <div class="logo_section">
             <a href="index.html"><img class="img-responsive" src="{{ asset('pluto-1.0.0') }}/images/logo/logo.png" alt="#" /></a>
          </div>
          <div class="right_topbar">
             <div class="icon_info">

                <ul class="user_profile_dd">
                   <li>
                      <a class="dropdown-toggle" data-toggle="dropdown"><img class="img-responsive rounded-circle" src="{{ asset('pluto-1.0.0') }}/images/layout_img/user_img.jpg" alt="#" /><span class="name_user">{{ Auth::user()->name }}</span></a>
                      <div class="dropdown-menu">
                        <x-dropdown-link :href="route('profile.edit')">
                            <i class="fa fa-user"></i> &nbsp;{{ __('Profile') }}
                        </x-dropdown-link>
                         {{-- <a class="dropdown-item" href="settings.html"><i class="fa fa-gear"></i> <span> Opsi</span></a>
                         <a class="dropdown-item" href="help.html"><i class="fa fa-question"></i> <span> Bantuan</span></a> --}}
                         <form method="POST" action="{{ route('logout') }}">
                            @csrf

                            <x-dropdown-link :href="route('logout')"
                                    onclick="event.preventDefault();
                                                this.closest('form').submit();">
                               <i class="fa fa-sign-out"></i> {{ __('Log Out') }}
                            </x-dropdown-link>
                        </form>
                      </div>
                   </li>
                </ul>
             </div>
          </div>
       </div>
    </nav>
 </div>
