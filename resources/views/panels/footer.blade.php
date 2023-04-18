<!-- BEGIN: Footer-->
<footer
  class="{{$configData['mainFooterClass']}} @if($configData['isFooterFixed']=== true){{'footer-fixed'}}@else {{'footer-static'}} @endif @if($configData['isFooterDark']=== true) {{'footer-dark'}} @elseif($configData['isFooterDark']=== false) {{'footer-light'}} @else {{$configData['mainFooterColor']}} @endif">
  <div class="footer-copyright">
    <div class="container">
      <span>&copy; {{ Date::now()->year }} <a href="http://themeforest.net/user/pixinvent/portfolio?ref=pixinvent"
          target="_blank">BemAgro</a> {{ __('All rights reserved.') }}
      </span>
{{--      <span class="right hide-on-small-only">--}}
{{--        Design PIXINVENT | Engineer by <a href="https://github.com/SOSTheBlack" target="_blank">SOSTheBlack</a>--}}
{{--      </span>--}}
    </div>
  </div>
</footer>

<!-- END: Footer-->
