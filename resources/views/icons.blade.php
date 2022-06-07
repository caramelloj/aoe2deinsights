@extends('layouts.app', ['class' => 'bg-default'])

@section('css')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css">
<link rel="stylesheet" href="https://cdn.datatables.net/1.12.1/css/dataTables.bootstrap4.min.css">

@endsection

@section('content')
<div class="header bg-gradient-primary py-7 py-lg-8">
    <div class="container">
        <div class="header-body text-center mt-7 mb-7">
            <div class="row justify-content-center">
                <div class="col-lg-5 col-md-6">
                    <h1 class="text-white">{{ __('Aoe 2 Insights by n1ck_arg') }}</h1>
                </div>
            </div>
        </div>
    </div>
    <div class="separator separator-bottom separator-skew zindex-100">
        <svg x="0" y="0" viewBox="0 0 2560 100" preserveAspectRatio="none" version="1.1" xmlns="http://www.w3.org/2000/svg">
            <polygon class="fill-default" points="2560 0 2560 100 0 100"></polygon>
        </svg>
    </div>
</div>


<div class="row">
    <div class="container" id="onevsone">
        <div>
            <ul class="nav nav-tabs" id="myTab" role="tablist">
                <li class="nav-item">
                  <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">RM 1vs1</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">RM TG</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" id="contact-tab" data-toggle="tab" href="#contact" role="tab" aria-controls="contact" aria-selected="false">EW</a>
                </li>
              </ul>
              <div class="tab-content" id="myTabContent">
                <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                        <div class="row">
                            <div class="container">
                                <br>
                                <div class="table-responsive">
                                    <table id="example" class="table align-items-center table-dark">
                                    <thead class="thead-dark">
                                        <tr>
                                            <th scope="col">Profile</th>
                                            <th scope="col">Rank</th>
                                            <th scope="col">Rating</th>
                                            <th scope="col">Name</th>
                                            <th scope="col">Clan</th>
                                            <th scope="col">Streak</th>
                                            <th scope="col">Games</th>
                                            <th scope="col">Wins</th>
                                            <th scope="col">Losses</th>
                                            <th scope="col">Drops</th>
                                        </tr>
                                    </thead>
                                    </table>
                                </div>
                            </div>
                        </div>

                </div>
                <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">QUE ASCO ME DA FRAN_ARG</div>
                <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">CRIMINAL ASCAMBO</div>
              </div>
        </div>
        <br>

    </div>
</div>

@endsection

@section('js')

    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.12.1/js/dataTables.bootstrap4.min.js"></script>
    <script>
        
        $('#example').DataTable({
            "columnDefs": [ {
              "targets": 0,
              "data": "players",
            
              "render": function ( data, type, row, meta ) {
                return '<a href={{ route('player.profile') }}/' + data + '><i class="ni ni-chart-pie-35"></i></a>';
              }
            }],
            "ajax": "{{ route('datatable.versus') }}",
            "columns": [
                    {data: 'profile_id'},
                    {data: 'rank'},
                    {data: 'rating'},
                    {data: 'name'},
                    {data: 'clan'},
/*                     {data: 'country'}, */
                    {data: 'streak'},
                    {data: 'games'},
                    {data: 'wins'},
                    {data: 'losses'},
                    {data: 'drops'},
            ],
        });

    </script>
@endsection