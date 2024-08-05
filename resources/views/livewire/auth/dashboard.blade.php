<div>
    @section('content')
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h1>Dashboard</h1>
                    <p>Welcome to your dashboard, {{ auth()->user()->name }}!</p>
                </div>
            </div>
        </div>
    @stop
</div>