@extends('layouts.main')
@section('title','ثبت قولنامه ها')
@section('content')

    <div class="container p-0 m-0 position-absolute mx-auto text-center">
        <div class="row p-0 m-0">
            <div class="col my-2">
                <h1 class="text-center d-inline-block my-3 my-md-3 text-white">سامانه ثبت قولنامه</h1>
            </div>
        </div>

        <div class="container p-5 m-0 w-auto mx-auto">
            <div class="row p-0 m-0">
                <div class="col-2 mx-auto col-lg-3 my-0 p-0">
                    <a href="{{route('record')}}" class="text-white">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                             class="bi bi-check2-square mx-lg-3 col-lg-4"
                             viewBox="0 0 16 16">
                            <path
                                d="M3 14.5A1.5 1.5 0 0 1 1.5 13V3A1.5 1.5 0 0 1 3 1.5h8a.5.5 0 0 1 0 1H3a.5.5 0 0 0-.5.5v10a.5.5 0 0 0 .5.5h10a.5.5 0 0 0 .5-.5V8a.5.5 0 0 1 1 0v5a1.5 1.5 0 0 1-1.5 1.5H3z"/>
                            <path
                                d="m8.354 10.354 7-7a.5.5 0 0 0-.708-.708L8 9.293 5.354 6.646a.5.5 0 1 0-.708.708l3 3a.5.5 0 0 0 .708 0z"/>
                        </svg>
                        <br>
                        <h5 class="text-center d-lg-none d-inline-block pt-2 mx-auto text-decoration-underline">ثبت</h5>
                        <h3 class="text-center d-lg-inline-block d-none pt-4 mx-auto text-decoration-underline">ثبت</h3>
                    </a>
                </div>
                <div class="col-2 mx-auto col-lg-3 my-0 p-0">
                    <a href="{{route('search')}}" class="text-white">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                             class="bi bi-search mx-lg-3 col-lg-4" viewBox="0 0 16 16">
                            <path
                                d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z"/>
                        </svg>
                        <br>
                        <h5 class="text-center d-lg-none d-inline-block mx-auto pt-2 text-decoration-underline">جستوجو</h5>
                        <h3 class="text-center d-lg-inline-block d-none mx-auto pt-4 text-decoration-underline">جستوجو</h3>
                    </a>
                </div>
                <div class="col-2 mx-auto col-lg-3 my-0 p-0">
                    <a href="{{route('show')}}" class="text-white">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                             class="bi bi-card-list mx-lg-3 col-lg-4"
                             viewBox="0 0 16 16">
                            <path
                                d="M14.5 3a.5.5 0 0 1 .5.5v9a.5.5 0 0 1-.5.5h-13a.5.5 0 0 1-.5-.5v-9a.5.5 0 0 1 .5-.5h13zm-13-1A1.5 1.5 0 0 0 0 3.5v9A1.5 1.5 0 0 0 1.5 14h13a1.5 1.5 0 0 0 1.5-1.5v-9A1.5 1.5 0 0 0 14.5 2h-13z"/>
                            <path
                                d="M5 8a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 0 1h-7A.5.5 0 0 1 5 8zm0-2.5a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 0 1h-7a.5.5 0 0 1-.5-.5zm0 5a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 0 1h-7a.5.5 0 0 1-.5-.5zm-1-5a.5.5 0 1 1-1 0 .5.5 0 0 1 1 0zM4 8a.5.5 0 1 1-1 0 .5.5 0 0 1 1 0zm0 2.5a.5.5 0 1 1-1 0 .5.5 0 0 1 1 0z"/>
                        </svg>
                        <br>
                        <h5 class="text-center d-lg-none d-inline-block mx-auto pt-2 text-decoration-underline">قراردادها</h5>
                        <h3 class="text-center d-lg-inline-block d-none mx-auto pt-4 text-decoration-underline">قراردادها</h3>
                    </a>
                </div>
                <div class="col-2 mx-auto col-lg-3 my-0 p-0">
                    <form action="{{route('logout')}}" method="post" id="khoroj">
                        @csrf
                    </form>
                    <a onclick="document.getElementById('khoroj').submit()" href="#" class="text-white pointer-event">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                             class="bi bi-box-arrow-left mx-lg-3 col-lg-4" viewBox="0 0 16 16">
                            <path fill-rule="evenodd"
                                  d="M6 12.5a.5.5 0 0 0 .5.5h8a.5.5 0 0 0 .5-.5v-9a.5.5 0 0 0-.5-.5h-8a.5.5 0 0 0-.5.5v2a.5.5 0 0 1-1 0v-2A1.5 1.5 0 0 1 6.5 2h8A1.5 1.5 0 0 1 16 3.5v9a1.5 1.5 0 0 1-1.5 1.5h-8A1.5 1.5 0 0 1 5 12.5v-2a.5.5 0 0 1 1 0v2z"/>
                            <path fill-rule="evenodd"
                                  d="M.146 8.354a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L1.707 7.5H10.5a.5.5 0 0 1 0 1H1.707l2.147 2.146a.5.5 0 0 1-.708.708l-3-3z"/>
                        </svg>
                        <br>
                        <h5 class="text-center d-lg-none d-inline-block mx-auto pt-2 text-decoration-underline">خروج</h5>
                        <h3 class="text-center d-lg-inline-block d-none mx-auto pt-4 text-decoration-underline">خروج</h3>
                    </a>
                </div>
            </div>
        </div>

    </div>

@endsection
