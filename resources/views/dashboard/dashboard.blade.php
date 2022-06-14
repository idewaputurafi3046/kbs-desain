<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" type="text/css" href="{{ asset('/css/app.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('/css/style.css') }}">
    {{-- <link rel="stylesheet" type="text/css" href="{{ asset('/css/main.css') }}"> --}}
    <link rel="stylesheet" type="text/css" href="{{ asset('/css/font/material-design-iconic-font.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('/css/font/font-awesome.min.css') }}">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i" rel="stylesheet">
    <link href="/css/select2/select2.min.css" rel="stylesheet" media="all">
    
    <title>KBS</title>
  </head>
  <body>
    <div class="d-flex p-0 container-fluid">
      <div class="d-flex flex-column bd-highlight sidebar">
        <div class="d-flex flex-column bd-highlight justify-content-center align-items-center mb-5 profile">
          <div class="mb-2 bd-highlight" style="margin-top: -48px;">
            <i class="bi bi-person-circle icon-user"></i>
          </div>
          <div class="px-1 bd-highlight font-user">Wijaya Putra</div>
          <div class="px-1 bd-highlight">Admin</div>
        </div>
        <div class="d-flex flex-column bd-highlight mt-5">
          <div class="p-0 bd-highlight">
            <button type="button" class="px-3 list-group-item list-group-item-action btn-nav active" aria-current="true">
              <div class="d-flex bd-highlight">
                <div class="p-2 w-100 bd-highlight">
                  <i class="bi bi-speedometer2 pe-2 "></i>
                  Dashboard
                </div>
                <div class="p-2 flex-shrink-1 bd-highlight">
                  <i class="bi bi-chevron-right"></i>
                </div>
              </div>
            </button>
            <button type="button" class="px-3 list-group-item list-group-item-action btn-nav">
              <div class="d-flex bd-highlight">
                <div class="p-2 w-100 bd-highlight font-sidebar">
                  <i class="bi bi-clipboard-data pe-2 font-sidebar"></i>
                  Database Website
                </div>
                <div class="p-2 flex-shrink-1 bd-highlight">
                  <i class="bi bi-chevron-right"></i>
                </div>
              </div>
            </button>
            <button type="button" class="px-3 list-group-item list-group-item-action btn-nav">
              <div class="d-flex bd-highlight">
                <div class="p-2 ms-4 w-100 bd-highlight font-sidebar">
                  <i class="bi bi-plus-circle-fill pe-2 font-sidebar"></i>
                  Tambah Database Website
                </div>
                <div class="p-2 flex-shrink-1 bd-highlight">
                  <i class="bi bi-chevron-right "></i>
                </div>
              </div>
            </button>
            <button type="button" class="px-3 list-group-item list-group-item-action btn-nav">
              <div class="d-flex bd-highlight">
                <div class="p-2 w-100 bd-highlight font-sidebar">
                  <i class="bi bi-table pe-2 font-sidebar"></i>
                  Tabel Aplikasi dan OPD
                </div>
                <div class="p-2 flex-shrink-1 bd-highlight">
                  <i class="bi bi-chevron-right"></i>
                </div>
              </div>
            </button>
            <button type="button" class="px-3 list-group-item list-group-item-action btn-nav">
              <div class="d-flex bd-highlight">
                <div class="p-2 ms-4 w-100 bd-highlight font-sidebar">
                  <i class="bi bi-plus-circle-fill pe-2 font-sidebar"></i>
                  Tambah Master Aplikasi
                </div>
                <div class="p-2 flex-shrink-1 bd-highlight">
                  <i class="bi bi-chevron-right "></i>
                </div>
              </div>
            </button>
            <button type="button" class="px-3 list-group-item list-group-item-action btn-nav">
              <div class="d-flex bd-highlight">
                <div class="p-2 w-100 bd-highlight font-sidebar">
                  <i class="bi bi-grid-1x2-fill pe-2 font-sidebar"></i>
                  Embed Aplikasi
                </div>
                <div class="p-2 flex-shrink-1 bd-highlight">
                  <i class="bi bi-chevron-right"></i>
                </div>
              </div>
            </button>
            <button type="button" class="px-3 list-group-item list-group-item-action btn-nav">
              <div class="d-flex bd-highlight">
                <div class="p-2 ms-4 w-100 bd-highlight font-sidebar">
                  <i class="bi bi-plus-circle-fill pe-2 font-sidebar"></i>
                  Tambah Aplikasi Embed
                </div>
                <div class="p-2 flex-shrink-1 bd-highlight">
                  <i class="bi bi-chevron-right "></i>
                </div>
              </div>
            </button>
            <button type="button" class="px-3 list-group-item list-group-item-action btn-nav">
              <div class="d-flex bd-highlight">
                <div class="p-2 w-100 bd-highlight font-sidebar">
                  <i class="bi bi-gear-fill pe-2 font-sidebar"></i>
                  Setting
                </div>
                <div class="p-2 flex-shrink-1 bd-highlight">
                  <i class="bi bi-chevron-right"></i>
                </div>
              </div>
            </button>
            <button type="button" class="px-3 list-group-item list-group-item-action btn-nav">
              <div class="d-flex bd-highlight">
                <div class="p-2 w-100 bd-highlight font-sidebar">
                  <i class="bi bi-box-arrow-left pe-2 font-sidebar"></i>
                  Keluar
                </div>
                <div class="p-2 flex-shrink-1 bd-highlight">
                  <i class="bi bi-chevron-right"></i>
                </div>
              </div>
            </button>
          </div>

        </div>
      </div>
      <div class="d-flex flex-column bd-highlight content">
        <div class="p-2 bd-highlight">
          <div class="d-flex align-items-center bd-highlight">
            <div class="flex-grow-1 justify-content-center bd-highlight search">
              <form class="d-flex py-2 px-3">
                <input class="form-control me-2 search-admin" type="search" placeholder="Telurusi website ini" aria-label="Search">
                <button class="btn btn-outline btn-search-admin" type="submit">
                  <i class="bi bi-search icon-search"></i>
                </button>
              </form>
            </div>
            <div class="px-2 pe-3 d-flex justify-content-center bd-highlight">
              <i class="bi bi-bell-fill icon-bell"></i>
            </div>
          </div>
        </div>
        <div class="ps-4 bd-highlight">
          <div class="d-flex align-items-center bd-highlight header">
            <span class="judul-dashboard">Dashboard</span>
            <span class="judul-dashboard px-3">|</span>
            <span class="subjudul-dashboard">Statistik Pengakses Website</span>
          </div>
          <div>
            <div class="rec-up align-items-center d-flex"></div>
            <div class="rectangle align-items-center">
              <form class="form">
                <div class="row mb-3">
                  <label for="inputEmail3" class="col-sm-2 col-form-label text-dark judul">Nama Laporan :</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control input">
                  </div>
                </div>
                <div class="row mb-3">
                  <label for="inputPassword3" class="col-sm-2 col-form-label text-dark judul">Group Laporan :</label>
                  <div class="col-sm-10 dropdown">
                    <select name="fms" id="FMS">
                      <option value="FMS">FMS</option>
                      <option value="URL">URL</option>
                    </select>
                  </div>
                </div>
                <button type="submit" class="btn btn-primary">Sign in</button>
              </form>
            </div>
          </div>
          
        </div>
        <div class="p-2 bd-highlight"></div>
      </div>
    </div>



    <!-- Bootstrap JS -->
    <script type="text/javascript" src="{{ asset('/js/app.js') }}"></script>
    <script src="/css/select2/select2.min.js"></script>

  </body>
</html>