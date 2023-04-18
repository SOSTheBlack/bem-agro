@section('title', __('GitHub'))

<div class="section">
    <div class="row card">

        <div class="fixed-action-btn">
            <a class="btn-floating btn-large red">
                <i class="large material-icons">add</i>
            </a>
        </div>

        <form class="col s12">
            <div class="input-field col s12">
                <input id="first_name" type="text" class="validate">
                <label for="first_name">{{ __('Search') }}</label>
            </div>
        </form>
        @forelse($gitHubUsers as $gitHubUser)
            <div class="col s12 m2">
                <div class="card">
                    <div class="card-image">
                        <img src="{{ $gitHubUser->avatar_url }}">
                        <span class="card-title">{{ \Illuminate\Support\Str::title($gitHubUser->username)  }}</span>
                        <a class="btn-floating halfway-fab waves-effect waves-light red"><i
                                class="material-icons">edit</i></a>
                    </div>
                    <div class="card-content">
                        <p>{{ $gitHubUser->bio }}</p>
                    </div>
                </div>
            </div>
            @empty
            <div class="col s12">
                    <div class="card-content">
                        <h4 class="center">{{ 'Você não possui nenhum usuário cadastrado' }}</h4>
                    </div>
            </div>
            @endforelse
        <div class="col s12 right-align vertical-align-bottom">{{ $gitHubUsers->links() }}</div>
    </div>
</div>
