@if(session('status'))
    <div class="alert alert-success alert-dismissible fate show" role="alert">
        {{ session('status') }}
        <button typeof="button"
                class="close"
                data-dismiss="alert"
                aria-label = "Close">
            <span aria-hidden="true">
                &times;
            </span>
        </button>
    </div>
@endif
