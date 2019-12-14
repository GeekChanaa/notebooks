<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Dashboard') }}</title>


    <link href="{{ asset('vendors/css/bootstrap-grid.min.css') }}" rel="stylesheet">
    <link href="{{ asset('vendors/css/bootstrap-reboot.min.css') }}" rel="stylesheet">
    <link href="{{ asset('vendors/css/jquery-jvectormap-2.0.3.css') }}" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.3/Chart.min.js"></script>
  <link href="{{ asset('/css/dashboard.css') }}" rel="stylesheet">



    <!-- Styles -->

</head>
<body>
  <nav class="navbar fixed-top navbar-expand-lg navbar-light bg-light">
      <a class="navbar-brand" href="#">
        <img class="logo-nav" src="{{asset('/img/dashboard/logo.png')}}" alt=""> Notebooks
      </a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item active">
            <a class="nav-link" href="{{url('/dashboard')}}">Dashboard <span class="sr-only">(current)</span></a>
          </li>

          <li class="nav-item dropdown">
            <a class="nav-link" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              <svg class="nav-img" version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
              	 viewBox="0 0 512 512" style="enable-background:new 0 0 512 512;" xml:space="preserve">
                <g>
                	<g>
                		<path d="M467.812,431.851l-36.629-61.056c-16.917-28.181-25.856-60.459-25.856-93.312V224c0-67.52-45.056-124.629-106.667-143.04
                			V42.667C298.66,19.136,279.524,0,255.993,0s-42.667,19.136-42.667,42.667V80.96C151.716,99.371,106.66,156.48,106.66,224v53.483
                			c0,32.853-8.939,65.109-25.835,93.291l-36.629,61.056c-1.984,3.307-2.027,7.403-0.128,10.752c1.899,3.349,5.419,5.419,9.259,5.419
                			H458.66c3.84,0,7.381-2.069,9.28-5.397C469.839,439.275,469.775,435.136,467.812,431.851z"/>
                	</g>
                </g>
                <g>
                	<g>
                		<path d="M188.815,469.333C200.847,494.464,226.319,512,255.993,512s55.147-17.536,67.179-42.667H188.815z"/>
                	</g>
                </g>
              </svg>
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
              <a class="dropdown-item" href="#">Action</a>
              <a class="dropdown-item" href="#">Another action</a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item" href="#">Something else here</a>
            </div>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              <svg class="nav-img" version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                	 viewBox="0 0 350 350" style="enable-background:new 0 0 350 350;" xml:space="preserve">
                <g>
                	<path d="M175,171.173c38.914,0,70.463-38.318,70.463-85.586C245.463,38.318,235.105,0,175,0s-70.465,38.318-70.465,85.587
                		C104.535,132.855,136.084,171.173,175,171.173z"/>
                	<path d="M41.909,301.853C41.897,298.971,41.885,301.041,41.909,301.853L41.909,301.853z"/>
                	<path d="M308.085,304.104C308.123,303.315,308.098,298.63,308.085,304.104L308.085,304.104z"/>
                	<path d="M307.935,298.397c-1.305-82.342-12.059-105.805-94.352-120.657c0,0-11.584,14.761-38.584,14.761
                		s-38.586-14.761-38.586-14.761c-81.395,14.69-92.803,37.805-94.303,117.982c-0.123,6.547-0.18,6.891-0.202,6.131
                		c0.005,1.424,0.011,4.058,0.011,8.651c0,0,19.592,39.496,133.08,39.496c113.486,0,133.08-39.496,133.08-39.496
                		c0-2.951,0.002-5.003,0.005-6.399C308.062,304.575,308.018,303.664,307.935,298.397z"/>
                </g>
              </svg>
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
              <a class="dropdown-item" href="#">Action</a>
              <a class="dropdown-item" href="#">Another action</a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item" href="#">Something else here</a>
            </div>
          </li>

        </ul>

      </div>
    </nav>
    <div class="row" id="body-row">
      <div id="sidebar-container" class="sidebar-expanded d-none d-md-block">
          <ul class="list-group">
            <div class="sidebar-header">
              <img id="pdp" class="sb-hp" src="{{url('/img/dashboard/pdp-prototype.jpg')}}" alt="">
            </div>
            <div class="sidebar-hcontent">
              <span class="name">Samantha</span>
              <span class="job">Manager </span>
              <div class="row col-12 text-center">
                <div class="col-lg-4">
                  <span>simo</span>
                </div>
                <div class="col-lg-4">
                  <span>simo</span>
                </div>
                <div class="col-lg-4">
                  <span>simo</span>
                </div>
              </div>
            </div>

          </ul>
          <ul class="list-group">
  			      <a href="#" data-toggle="sidebar-colapse" class="bg-dark list-group-item list-group-item-action d-flex align-items-center">
                  <div class="d-flex w-100 justify-content-start align-items-center">
                      <span id="collapse-icon" class="fa fa-2x mr-3"></span>
                      <span id="collapse-text" class="menu-collapsed">Collapse</span>
                  </div>
              </a>
              <a href="#submenu1" data-toggle="collapse" aria-expanded="false" class="bg-dark list-group-item list-group-item-action flex-column align-items-start">
                  <div class="d-flex w-100 justify-content-start align-items-center">
                      <span class="fa fa-dashboard fa-fw mr-3">
                      </span>
                      <span class="menu-collapsed">Data</span>

                  </div>
              </a>
              <div id='submenu1' class="collapse sidebar-submenu">
                  <a href="{{url('/dashboard/users')}}" class="list-group-item list-group-item-action bg-dark text-white">
                      <span class="menu-collapsed">Users</span>
                  </a>
                  <a href="{{url('/dashboard/notebooks')}}" class="list-group-item list-group-item-action bg-dark text-white">
                      <span class="menu-collapsed">Notebooks</span>
                  </a>

              </div>
              <a href="#submenu2" data-toggle="collapse" aria-expanded="false" class="bg-dark list-group-item list-group-item-action flex-column align-items-start">
                  <div class="d-flex w-100 justify-content-start align-items-center">
                      <span class="fa fa-dashboard fa-fw mr-3"></span>
                      <span class="menu-collapsed">Statistics</span>
                  <svg class="menu-icon" version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                     viewBox="0 0 55 55" style="enable-background:new 0 0 55 55;" xml:space="preserve">
                    <path d="M52.354,8.51C51.196,4.22,42.577,0,27.5,0C12.423,0,3.803,4.22,2.646,8.51C2.562,8.657,2.5,8.818,2.5,9v0.5V21v0.5V22v11
                    v0.5V34v12c0,0.162,0.043,0.315,0.117,0.451C3.798,51.346,14.364,55,27.5,55c13.106,0,23.655-3.639,24.875-8.516
                    C52.455,46.341,52.5,46.176,52.5,46V34v-0.5V33V22v-0.5V21V9.5V9C52.5,8.818,52.438,8.657,52.354,8.51z M50.421,33.985
                    c-0.028,0.121-0.067,0.241-0.116,0.363c-0.04,0.099-0.089,0.198-0.143,0.297c-0.067,0.123-0.142,0.246-0.231,0.369
                    c-0.066,0.093-0.141,0.185-0.219,0.277c-0.111,0.131-0.229,0.262-0.363,0.392c-0.081,0.079-0.17,0.157-0.26,0.236
                    c-0.164,0.143-0.335,0.285-0.526,0.426c-0.082,0.061-0.17,0.12-0.257,0.18c-0.226,0.156-0.462,0.311-0.721,0.463
                    c-0.068,0.041-0.141,0.08-0.212,0.12c-0.298,0.168-0.609,0.335-0.945,0.497c-0.043,0.021-0.088,0.041-0.132,0.061
                    c-0.375,0.177-0.767,0.351-1.186,0.519c-0.012,0.005-0.024,0.009-0.036,0.014c-2.271,0.907-5.176,1.67-8.561,2.17
                    c-0.017,0.002-0.034,0.004-0.051,0.007c-0.658,0.097-1.333,0.183-2.026,0.259c-0.113,0.012-0.232,0.02-0.346,0.032
                    c-0.605,0.063-1.217,0.121-1.847,0.167c-0.288,0.021-0.59,0.031-0.883,0.049c-0.474,0.028-0.943,0.059-1.429,0.076
                    C29.137,40.984,28.327,41,27.5,41s-1.637-0.016-2.432-0.044c-0.486-0.017-0.955-0.049-1.429-0.076
                    c-0.293-0.017-0.595-0.028-0.883-0.049c-0.63-0.046-1.242-0.104-1.847-0.167c-0.114-0.012-0.233-0.02-0.346-0.032
                    c-0.693-0.076-1.368-0.163-2.026-0.259c-0.017-0.002-0.034-0.004-0.051-0.007c-3.385-0.5-6.29-1.263-8.561-2.17
                    c-0.012-0.004-0.024-0.009-0.036-0.014c-0.419-0.168-0.812-0.342-1.186-0.519c-0.043-0.021-0.089-0.041-0.132-0.061
                    c-0.336-0.162-0.647-0.328-0.945-0.497c-0.07-0.04-0.144-0.079-0.212-0.12c-0.259-0.152-0.495-0.307-0.721-0.463
                    c-0.086-0.06-0.175-0.119-0.257-0.18c-0.191-0.141-0.362-0.283-0.526-0.426c-0.089-0.078-0.179-0.156-0.26-0.236
                    c-0.134-0.13-0.252-0.26-0.363-0.392c-0.078-0.092-0.153-0.184-0.219-0.277c-0.088-0.123-0.163-0.246-0.231-0.369
                    c-0.054-0.099-0.102-0.198-0.143-0.297c-0.049-0.121-0.088-0.242-0.116-0.363C4.541,33.823,4.5,33.661,4.5,33.5
                    c0-0.113,0.013-0.226,0.031-0.338c0.025-0.151,0.011-0.302-0.031-0.445v-7.424c0.028,0.026,0.063,0.051,0.092,0.077
                    c0.218,0.192,0.44,0.383,0.69,0.567C9.049,28.786,16.582,31,27.5,31c10.872,0,18.386-2.196,22.169-5.028
                    c0.302-0.22,0.574-0.447,0.83-0.678l0.001-0.001v7.424c-0.042,0.143-0.056,0.294-0.031,0.445c0.019,0.112,0.031,0.225,0.031,0.338
                    C50.5,33.661,50.459,33.823,50.421,33.985z M50.5,13.293v7.424c-0.042,0.143-0.056,0.294-0.031,0.445
                    c0.019,0.112,0.031,0.225,0.031,0.338c0,0.161-0.041,0.323-0.079,0.485c-0.028,0.121-0.067,0.241-0.116,0.363
                    c-0.04,0.099-0.089,0.198-0.143,0.297c-0.067,0.123-0.142,0.246-0.231,0.369c-0.066,0.093-0.141,0.185-0.219,0.277
                    c-0.111,0.131-0.229,0.262-0.363,0.392c-0.081,0.079-0.17,0.157-0.26,0.236c-0.164,0.143-0.335,0.285-0.526,0.426
                    c-0.082,0.061-0.17,0.12-0.257,0.18c-0.226,0.156-0.462,0.311-0.721,0.463c-0.068,0.041-0.141,0.08-0.212,0.12
                    c-0.298,0.168-0.609,0.335-0.945,0.497c-0.043,0.021-0.088,0.041-0.132,0.061c-0.375,0.177-0.767,0.351-1.186,0.519
                    c-0.012,0.005-0.024,0.009-0.036,0.014c-2.271,0.907-5.176,1.67-8.561,2.17c-0.017,0.002-0.034,0.004-0.051,0.007
                    c-0.658,0.097-1.333,0.183-2.026,0.259c-0.113,0.012-0.232,0.02-0.346,0.032c-0.605,0.063-1.217,0.121-1.847,0.167
                    c-0.288,0.021-0.59,0.031-0.883,0.049c-0.474,0.028-0.943,0.059-1.429,0.076C29.137,28.984,28.327,29,27.5,29
                    s-1.637-0.016-2.432-0.044c-0.486-0.017-0.955-0.049-1.429-0.076c-0.293-0.017-0.595-0.028-0.883-0.049
                    c-0.63-0.046-1.242-0.104-1.847-0.167c-0.114-0.012-0.233-0.02-0.346-0.032c-0.693-0.076-1.368-0.163-2.026-0.259
                    c-0.017-0.002-0.034-0.004-0.051-0.007c-3.385-0.5-6.29-1.263-8.561-2.17c-0.012-0.004-0.024-0.009-0.036-0.014
                    c-0.419-0.168-0.812-0.342-1.186-0.519c-0.043-0.021-0.089-0.041-0.132-0.061c-0.336-0.162-0.647-0.328-0.945-0.497
                    c-0.07-0.04-0.144-0.079-0.212-0.12c-0.259-0.152-0.495-0.307-0.721-0.463c-0.086-0.06-0.175-0.119-0.257-0.18
                    c-0.191-0.141-0.362-0.283-0.526-0.426c-0.089-0.078-0.179-0.156-0.26-0.236c-0.134-0.13-0.252-0.26-0.363-0.392
                    c-0.078-0.092-0.153-0.184-0.219-0.277c-0.088-0.123-0.163-0.246-0.231-0.369c-0.054-0.099-0.102-0.198-0.143-0.297
                    c-0.049-0.121-0.088-0.242-0.116-0.363C4.541,21.823,4.5,21.661,4.5,21.5c0-0.113,0.013-0.226,0.031-0.338
                    c0.025-0.151,0.011-0.302-0.031-0.445v-7.424c0.12,0.109,0.257,0.216,0.387,0.324c0.072,0.06,0.139,0.12,0.215,0.18
                    c0.3,0.236,0.624,0.469,0.975,0.696c0.073,0.047,0.155,0.093,0.231,0.14c0.294,0.183,0.605,0.362,0.932,0.538
                    c0.121,0.065,0.242,0.129,0.367,0.193c0.365,0.186,0.748,0.367,1.151,0.542c0.066,0.029,0.126,0.059,0.193,0.087
                    c0.469,0.199,0.967,0.389,1.485,0.573c0.143,0.051,0.293,0.099,0.44,0.149c0.412,0.139,0.838,0.272,1.279,0.401
                    c0.159,0.046,0.315,0.094,0.478,0.138c0.585,0.162,1.189,0.316,1.823,0.458c0.087,0.02,0.181,0.036,0.269,0.055
                    c0.559,0.122,1.139,0.235,1.735,0.341c0.202,0.036,0.407,0.07,0.613,0.104c0.567,0.093,1.151,0.178,1.75,0.256
                    c0.154,0.02,0.301,0.043,0.457,0.062c0.744,0.09,1.514,0.167,2.305,0.233c0.195,0.016,0.398,0.028,0.596,0.042
                    c0.633,0.046,1.28,0.084,1.942,0.114c0.241,0.011,0.481,0.022,0.727,0.031C25.712,18.979,26.59,19,27.5,19s1.788-0.021,2.65-0.05
                    c0.245-0.009,0.485-0.02,0.727-0.031c0.662-0.03,1.309-0.068,1.942-0.114c0.198-0.015,0.4-0.026,0.596-0.042
                    c0.791-0.065,1.561-0.143,2.305-0.233c0.156-0.019,0.303-0.042,0.457-0.062c0.599-0.078,1.182-0.163,1.75-0.256
                    c0.206-0.034,0.411-0.068,0.613-0.104c0.596-0.106,1.176-0.219,1.735-0.341c0.088-0.019,0.182-0.036,0.269-0.055
                    c0.634-0.142,1.238-0.297,1.823-0.458c0.163-0.045,0.319-0.092,0.478-0.138c0.441-0.129,0.867-0.262,1.279-0.401
                    c0.147-0.05,0.297-0.098,0.44-0.149c0.518-0.184,1.017-0.374,1.485-0.573c0.067-0.028,0.127-0.058,0.193-0.087
                    c0.403-0.176,0.786-0.356,1.151-0.542c0.125-0.064,0.247-0.128,0.367-0.193c0.327-0.175,0.638-0.354,0.932-0.538
                    c0.076-0.047,0.158-0.093,0.231-0.14c0.351-0.227,0.675-0.459,0.975-0.696c0.075-0.06,0.142-0.12,0.215-0.18
                    C50.243,13.509,50.38,13.402,50.5,13.293z M27.5,2c13.555,0,23,3.952,23,7.5s-9.445,7.5-23,7.5s-23-3.952-23-7.5S13.945,2,27.5,2z
                     M50.5,45.703c-0.014,0.044-0.024,0.089-0.032,0.135C49.901,49.297,40.536,53,27.5,53S5.099,49.297,4.532,45.838
                    c-0.008-0.045-0.019-0.089-0.032-0.131v-8.414c0.028,0.026,0.063,0.051,0.092,0.077c0.218,0.192,0.44,0.383,0.69,0.567
                    C9.049,40.786,16.582,43,27.5,43c10.872,0,18.386-2.196,22.169-5.028c0.302-0.22,0.574-0.447,0.83-0.678l0.001-0.001V45.703z"/>

                    </svg>
                  </div>
              </a>
              <div id='submenu2' class="collapse sidebar-submenu">
                  <a href="{{url('/dashboard/users/statistics')}}" class="list-group-item list-group-item-action bg-dark text-white">
                      <span class="menu-collapsed">Users</span>
                  </a>
                  <a href="{{url('/dashboard/notebooks/statistics')}}" class="list-group-item list-group-item-action bg-dark text-white">
                      <span class="menu-collapsed">Notebooks</span>
                  </a>

              </div>
          </ul>
      </div>
  </div>
  <div id="content" class="content-expanded">
    @yield('content')
  </div>


  <script src="{{asset('vendors/js/jquery-jvectormap-2.0.3.min.js')}}"></script>
    <script src="{{asset('js/dashboard.js')}}"></script>
    <script src="https://cdn.jsdelivr.net/npm/jvectormap@2.0.4/tests/assets/jquery-jvectormap-world-mill-en.js"></script>

    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
</body>
</html>
