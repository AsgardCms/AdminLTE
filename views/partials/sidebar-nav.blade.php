<!-- Left side column. contains the logo and sidebar -->
<aside class="left-side sidebar-offcanvas">
    <a href="{{ URL::route('dashboard.index') }}" class="logo">
        <?php if (isset($sitename)): ?>
        {{ $sitename }}
        <?php endif; ?>
    </a>
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
        {!! $sidebar->groupLess()->render() !!}
    </section>
    <!-- /.sidebar -->
</aside>
