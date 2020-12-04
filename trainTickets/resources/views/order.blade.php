@extends('layout.layout')

@section('title')Order @endsection

@section('main_content')

    <div class="col mt-2">
        <p>
            Train times and fares
            <span class="text-muted">
		<svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-chevron-right mx-3" fill="currentColor"
             xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd"
                                                      d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z"/></svg>
			Get tickets
		<svg width="1em" height="1em" viewBox="0 0 16 16" class="mx-3 bi bi-chevron-right" fill="currentColor"
             xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd"
                                                      d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z"/></svg>
			Pay
		<svg width="1em" height="1em" viewBox="0 0 16 16" class="mx-3 bi bi-chevron-right" fill="currentColor"
             xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd"
                                                      d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z"/></svg>

		</span>
        </p>
    </div>
    <hr style="margin-top: 0px;">
    <div class="container">
        <div class="mt-5 text-dark monospace">
            <div class="col-lg-6 col-md-6 col-sm-12">
                <p class="h3">
                @if(\Illuminate\Support\Facades\Auth::check())
                    <h1>
                        Authorized
                    </h1>
                @else
                    <h1>
                        Unauthorized
                    </h1>
                @endif

                @foreach($users as $user)
                    <h3>
                        {{$user->name}}
                    </h3>
                @endforeach

                <strong>SHYMKENT</strong> (SHY) to <strong>ALMATY</strong> (ALA)
                </p>
                <p>for <strong>1 adult</strong></p>
            </div>
        </div>
    </div>
    </div>
    <hr>
    <div style="background-color: #f5f5f5;">

        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <h5 class="mt-4">When you’re going out</h5>

                    <div class="col alert-secondary text-muted rounded text-right mt-4">
                        Tuesday 20th October 2020
                    </div>

                    <div class="row rounded bg-white mt-4">
                        <div>
                            <input type="radio" name="choose" value="ok" class="m-4">
                        </div>
                        <div>
                            <p>20:22 <br> SHY</p>
                        </div>

                        <div class="col-md-6">
                            <img src="src/img/line.png" alt="" style="width: 100%">
                            <p>8 hours</p>
                        </div>
                        <div>
                            <p>05:02<br> SHY</p>
                        </div>
                        <div>
                            <p class="ml-2">$35.60 <br> Single</p>
                        </div>
                    </div>


                    <div class="row rounded bg-white mt-4">
                        <div>
                            <input type="radio" name="choose" value="ok" class="m-4">
                        </div>
                        <div>
                            <p>18:15 <br> SHY</p>
                        </div>

                        <div class="col-md-6">
                            <img src="src/img/line.png" alt="" style="width: 100%">
                            <p>11 hours</p>
                        </div>
                        <div>
                            <p>07:35<br> SHY</p>
                        </div>
                        <div>
                            <p class="ml-2">$30.40 <br> Single</p>
                        </div>
                    </div>


                    <div class="row rounded bg-white mt-4">
                        <div>
                            <input type="radio" name="choose" value="ok" class="m-4">
                        </div>
                        <div>
                            <p>16:45 <br> SHY</p>
                        </div>

                        <div class="col-md-6">
                            <img src="src/img/line.png" alt="" style="width: 100%">
                            <p>16 hours</p>
                        </div>
                        <div>
                            <p>9:22<br> SHY</p>
                        </div>
                        <div>
                            <p class="ml-2">$25.50 <br> Single</p>
                        </div>
                    </div>

                    <div class="text-right mt-3">
                        Show later trains
                        <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-chevron-double-down"
                             fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd"
                                  d="M1.646 6.646a.5.5 0 0 1 .708 0L8 12.293l5.646-5.647a.5.5 0 0 1 .708.708l-6 6a.5.5 0 0 1-.708 0l-6-6a.5.5 0 0 1 0-.708z"/>
                            <path fill-rule="evenodd"
                                  d="M1.646 2.646a.5.5 0 0 1 .708 0L8 8.293l5.646-5.647a.5.5 0 0 1 .708.708l-6 6a.5.5 0 0 1-.708 0l-6-6a.5.5 0 0 1 0-.708z"/>
                        </svg>
                    </div>
                    <br>
                    <br>
                    <br>
                    <br>
                </div>
                <div class="col-md-6">
                    <h5 class="mt-4">No return added</h5>
                    <br>
                    <div class="form-group bg-white text-right mt-4">
                        <a href="" class="btn text-black" id="adding"><br>+ <br> Add a return
                            <br>
                            <br>
                            <br>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="footer fixed-bottom bg-white">
        <div class="container text-right mt-4 mb-4">
            <h3>
                Total to pay: £35.60
                <a href="reg.php">
                    <button class="btn-success btn ml-2">Next: Get tickets</button>
                </a>
            </h3>
        </div>
    </div>


@endsection
