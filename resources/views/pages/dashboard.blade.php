@section('title', __('Dashboard'))

<div class="section">
    <div class="card">
        <div class="card-content">
            <p class="caption mb-0">
                Sample blank page for getting start!! Created and designed by Google, Material Design is a design
                language that combines the classic principles of successful design along with innovation and
                technology.
            </p>
        </div>
    </div>
</div>


@section('page-script')
    <script>
        // 'rounded' is the class I'm applying to the toast
        M.toast({html: '{{ __('Welcome') }} {{ auth()->user()->name }}', classes: 'green left'});
    </script>
@endsection
