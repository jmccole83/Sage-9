<footer class="content-info">
  <div class="container">
    @php // dynamic_sidebar('sidebar-footer') @endphp
    @if (has_nav_menu('primary_navigation'))
      {!! wp_nav_menu($primarymenu) !!}
    @endif
    <div class="lower-footer">
      <p class="small">Copyright {!! get_bloginfo('name', 'display') !!} &copy; {!! the_date('Y') !!} All rights reserved | <a href="/privacy-polixy">Privacy Policy</a></p>
    </div>
  </div>
</footer>
