<div class="container my-3">
    <div class="row">
        <div class="col-12">
            <h2>Richieste amministratore</h2>
            <x-admin-requests-table :adminRequests="$adminRequests" /> 
        </div>
    </div>
</div>
<hr>
<div class="container my-3">
    <div class="row">
        <div class="col-12">
            <h2>Richieste Revisore</h2>
            <x-revisor-requests-table :revisorRequests="$revisorRequests" /> 
        </div>
    </div>
</div>
<hr>
<div class="container my-3">
    <div class="row">
        <div class="col-12">
            <h2>Richieste scrittore</h2>
            <x-writer-requests-table :writerRequests="$writerRequests" /> 
        </div>
    </div>
</div>
