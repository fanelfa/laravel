<!-- LEFT SIDEBAR -->
<div id="sidebar-nav" class="sidebar">
    <div class="sidebar-scroll">
        <nav>
            <ul class="nav">
                <li><a href="/dashboard" class="{{ (request()->segment(1)=='dashboard') ? 'active' : ''}}"><i class="lnr lnr-home"></i> <span>Dashboard</span></a></li>
                <li><a href="/siswa" class="{{ (request()->segment(1)=='siswa') ? 'active' : ''}}"><i class="lnr lnr-user"></i> <span>Siswa</span></a></li>
            </ul>
        </nav>
    </div>
</div>
<!-- END LEFT SIDEBAR -->