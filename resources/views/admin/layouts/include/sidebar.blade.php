<div class="sidebar sidebar-style-2">
    <div class="sidebar-wrapper scrollbar scrollbar-inner">
        <div class="sidebar-content">
            <div class="user">
                <div class="avatar-sm float-left mr-2">
                    <img src="{{ asset('admin') }}/assets/img/profile.jpg" alt="..." class="avatar-img rounded-circle">
                </div>
                <div class="info">
                    <a data-toggle="collapse" href="#collapseExample" aria-expanded="true">
                        <span>
                            {{ Auth::user()->name }}
                            <span class="user-level">{{ Auth::user()->email }}</span>
                            
                        </span>
                    </a>
                    <div class="clearfix"></div>
                </div>
            </div>
            <ul class="nav nav-primary">
                <li class="nav-item">
                    <a href="{{ route('admin.dashboard') }}">
                        <i class="fas fa-home"></i>
                        <p>Dashboard</p>	
                    </a>
                </li>
                <li class="nav-section">
                    <span class="sidebar-mini-icon">
                        <i class="fa fa-ellipsis-h"></i>
                    </span>
                    <h4 class="text-section">Components</h4>
                </li>
                
                <li class="nav-item">
                    <a data-toggle="collapse" href="#sidebarLayouts">
                        <i class="fas fa-th-list"></i>
                        <p>Data Master</p>
                        <span class="caret"></span>
                    </a>
                    <div class="collapse" id="sidebarLayouts">
                        <ul class="nav nav-collapse">
                            <li>
                                <a href="{{ route('siswa.index') }}">
                                    <span class="sub-item">Data Siswa</span>
                                </a>
                            </li>
                            <li>
                                <a href="{{ route('guru.index') }}">
                                    <span class="sub-item">Data Guru</span>
                                </a>
                            </li>
                            
                        </ul>
                    </div>
                </li>
                
                <li class="nav-item">
                    <a href="{{ route('post.index') }}">
                        <i class="fas fa-desktop"></i>
                        <p>Artikel</p>	
                    </a>
                </li>

                <li class="nav-item">
                    <a href="{{ route('gallery.index') }}">
                        <i class="fas fa-desktop"></i>
                        <p>Gallery</p>	
                    </a>
                </li>
            </ul>
        </div>
    </div>
</div>