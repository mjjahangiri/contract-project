@if ($message = Session::get('success'))

    <div class="alert alert-success alert-block position-absolute bottom-0 start-0 ms-5 mb-4 pe-5" style="z-index: 9">

        <button type="button" class="btn-close float-start me-5" data-bs-dismiss="alert" aria-label="Close"></button>

        <strong>{{ $message }}</strong>

    </div>

@endif



@if ($message = Session::get('error'))

    <div class="alert alert-danger alert-block position-absolute bottom-0 start-0 ms-5 mb-4 pe-5" style="z-index: 9">

        <button type="button" class="btn-close float-start me-5" data-bs-dismiss="alert" aria-label="Close"></button>

        <strong>{{ $message }}</strong>

    </div>

@endif



@if ($message = Session::get('warning'))

    <div class="alert alert-warning alert-block position-absolute bottom-0 start-0 ms-5 mb-4 pe-5" style="z-index: 9">

        <button type="button" class="btn-close float-start me-5" data-bs-dismiss="alert" aria-label="Close"></button>

        <strong>{{ $message }}</strong>

    </div>

@endif



@if ($message = Session::get('info'))

    <div class="alert alert-info alert-block position-absolute bottom-0 start-0 ms-5 mb-4 pe-5" style="z-index: 9">

        <button type="button" class="btn-close float-start me-5" data-bs-dismiss="alert" aria-label="Close"></button>

        <strong>{{ $message }}</strong>

    </div>

@endif



@if ($errors->any())

    <div class="alert alert-danger position-absolute bottom-0 start-0 ms-5 mb-4 pe-5" style="z-index: 9">

        <button type="button" class="btn-close float-start me-5" data-bs-dismiss="alert" aria-label="Close"></button>

        خطایی رخ داده است

    </div>

@endif
