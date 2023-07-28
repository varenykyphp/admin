<div class="container">
    <footer class="d-flex flex-wrap justify-content-between align-items-center py-3 my-4 border-top">
        <p class="col-md-4 mb-0 text-muted text-start">v{{ getenv('APP_VERSION') }}</p>

        <p>&nbsp;</p>

        <p class="text-end text-muted col-md-4 justify-content-end">{!! config('varenyky-admin.colophon') !!}</p>
    </footer>
</div>
