@section('title', __('New register'))

<div class="section">
    <div class="row card">

        <div class="fixed-action-btn">
            <a class="btn-floating btn-large red" href="{{ route('users.git-hub.new') }}">
                <i class="large material-icons">add</i>
            </a>
        </div>

        <form class="col s12">
            <div class="input-field col s12">
                <input wire:model.debounce.500ms="search" id="first_name" type="text" class="validate" placeholder="{{ __('Type to search') }}">
                <label for="first_name" class="active">{{ __('Search') }}</label>
            </div>
        </form>

        <h1>{{ $search }}</h1>
        @forelse($gitHubUsers as $gitHubUser)
            <div class="col s12 m3">
                <div class="card">
                    <div class="card-image">
                        <img src="{{ $gitHubUser->avatar_url }}">
                        <span class="card-title">{{ \Illuminate\Support\Str::title($gitHubUser->username)  }}</span>
                        <a class="btn-floating halfway-fab waves-effect waves-light red"><i
                                class="material-icons">edit</i></a>
                    </div>
                    <div class="card-content">
                        <p class="">{{ $gitHubUser->bio }}</p>
                    </div>
                </div>
            </div>
        @empty
            <div class="col s12">
                <div class="card-content">
                    <h4 class="center">{{ __('You do not have any registered user') }}</h4>
                </div>
            </div>
        @endforelse
{{--        <div class="col s12 right-align vertical-align-bottom">{{ $gitHubUsers->links() }}</div>--}}
    </div>
</div>

@section('page-script')
    <script>
        M.AutoInit();
        M.updateTextFields();
    </script>

@endsection
