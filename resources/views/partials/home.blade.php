<div class="container" style="margin-top: 8rem">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    You are logged!
                    <div class="float-right">
                        <a href="{{ route ('index') }}" class="rightButton" aria-label="go to home page link">
                            <button class="btn btn-home" aria-label="go to home page btn">Home</button>
                        </a>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>