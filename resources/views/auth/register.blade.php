<x-Main>
    <form method="post" action="{{route('register')}}" class="row">
        @csrf
        <div class="mb-3 col-md-6 offset-md-3">
            <label class="form label">Username</label>
            <input type="text" name="name" class="form-control">
        </div>
        <div class="mb-3 col-md-6 offset-md-3">
            <label for="exampleInputEmail1" class="form-label">Email</label>
            <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
        </div>
        <div class="mb-3 col-md-6 offset-md-3">
            <label for="exampleInputPassword1" class="form-label">Password</label>
            <input type="password" name="password" class="form-control" id="exampleInputPassword1">
        </div>
        <div class="mb-3 col-md-6 offset-md-3">
            <label for="exampleInputPassword1" class="form-label">Password confirmation</label>
            <input type="password" name="password_confirmation" class="form-control" id="exampleInputPassword1">
        </div>
    <button type="submit" class="btn btn-secondary col-md-4 offset-md-4">Submit</button>
    </form>
</x-Main>