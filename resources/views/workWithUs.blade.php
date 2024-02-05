<x-Main>
    <div class="container my-5">
        <div class="row">
            <div class="col-12 col-md-6">
                <h1>Lavora con noi</h1>
            </div>
        </div>
    </div>
    <div class="container my-5">
        <div class="row">
            <div class="col-12 col-md-6">
                <h3>Lavora come Scrittore</h3>
                <p>Descrizione posto di lavoro</p>
                <h3>Lavora come Revisore</h3>
                <p>Descrizione posto di lavoro</p>
                <h3>Lavora come Amministratore</h3>
                <p>Descrizione posto di lavoro</p>
            </div>
            <div class="col-12 col-md-6">
                <form action="{{route('user.role.request')}}" method="POST">
                    @csrf
                    <div class="mb-3">
                        <label class="form-label h3">Per quale posizione vuoi candidarti?</label>
                        <select name="role" id="" class="form-control">
                            <option value="admin">Amministratore</option>
                            <option value="revisor">Revisore</option>
                            <option value="writer">Scrittore</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Inviaci la tua email</label>
                        <input type="email" class="form-control" name="email" @auth value="{{Auth::user()->email}}"@endauth>
                    </div>
                    <div class="mb-3">
                        <label class="form-control h5">Perchè dovremmo sceglierti?</label>
                        <textarea name="presentation" class="form-control" id="" cols="30" rows="10"></textarea>
                    </div>
                    <button class="btn btn-secondary">Invia candidatura</button>
                </form>
            </div>
        </div>
    </div>

</x-Main>