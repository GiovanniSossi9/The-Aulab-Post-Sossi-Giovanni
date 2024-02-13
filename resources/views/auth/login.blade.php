<x-Main>
    <form method="post" action="{{route('login')}}" class="row">
        @csrf
        <div class="mb-3 col-md-6 offset-md-3">
            <label for="exampleInputEmail1" class="form-label">Email</label>
            <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">

        </div>
        <div class="mb-3 col-md-6 offset-md-3">
            <label for="exampleInputPassword1" class="form-label">Password</label>
            <input type="password" name="password" class="form-control" id="exampleInputPassword1">
        </div>
        <button type="submit" class="btn btn-secondary col-md-4 offset-md-4">Login</button>
    </form>
</x-Main>

