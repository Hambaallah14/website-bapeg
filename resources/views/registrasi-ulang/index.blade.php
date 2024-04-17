<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ url('css/login/style.css') }}">
    <link rel="icon" href="{{ url('images/logo-provsu.png') }}" type="image/x-icon">
    <title>{{ $title }}</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link href="{{ url('plugins/smartwizard/dist/css/smart_wizard_all.min.css') }}" rel="stylesheet" type="text/css" />
    {{-- <link href="https://cdn.jsdelivr.net/npm/smartwizard@6/dist/css/smart_wizard_all.min.css" rel="stylesheet" type="text/css" /> --}}

    

</head>
<body>
    <div class="row">
        <div class="col-md-9 bg-light mx-auto p-3 mt-3">
            <h4>Lengkapi Data</h4>
            <h6>Silahkan isi Formulir di bawah ini dengan lengkap dan benar.</h6>
        </div>

        <div class="col-md-9 bg-light mx-auto p-3 mt-3">
            <div id="smartwizard">
                <ul class="nav nav-progress">
                    <li class="nav-item">
                        <a class="nav-link" href="#step-1">
                            <div class="num">1</div>
                            Data Pribadi
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#step-2">
                            <div class="num">2</div>
                            Data Kepegawaian
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#step-3">
                            <div class="num">3</div>
                            Data Dokumen
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#step-4">
                            <div class="num">4</div>
                            Step Title
                        </a>
                    </li>
                </ul>

                <div class="tab-content">
                    <div id="step-1" class="tab-pane" role="tabpanel" aria-labelledby="step-1">
                        <form id="form-1" class="row row-cols-1 ms-5 me-5 needs-validation" novalidate>
                            <div class="col">
                              <label for="first-name" class="form-label">First name</label>
                              <input type="text" class="form-control" id="first-name" value="" required>
                              <div class="valid-feedback">
                                Looks good!
                              </div>
                              <div class="invalid-feedback">
                                Please provide first name.
                              </div>
                            </div>
                            <div class="col">
                              <label for="validationCustom02" class="form-label">Last name</label>
                              <input type="text" class="form-control" id="last-name" value="" required>
                              <div class="valid-feedback">
                                Looks good!
                              </div>
                              <div class="invalid-feedback">
                                Please provide last name.
                              </div>
                            </div>
                          </form>
                    </div>
                    <div id="step-2" class="tab-pane" role="tabpanel" aria-labelledby="step-2">
                        <input type="text" name="" id="" placeholder="Nama Lengkap">
                    </div>
                    <div id="step-3" class="tab-pane" role="tabpanel" aria-labelledby="step-3">
                        <input type="text" name="" id="" placeholder="Nama Lengkap">
                    </div>
                    <div id="step-4" class="tab-pane" role="tabpanel" aria-labelledby="step-4">
                        <input type="text" name="" id="" placeholder="Nama Lengkap">
                    </div>
                </div>

                <div class="progress">
                    <div class="progress-bar" role="progressbar" style="width: 0%" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
                  </div>
            </div>
        </div>
        
        <div class="col-md-9 bg-light mx-auto p-3 mt-3">
            <div class="footer clearfix mb-0 text-muted">
                <div class="float-start">
                    <p>2022 &copy; SI PENA PINTAR</p>
                </div>
    
                <div class="float-end">
                    <p>Created By BPSDM Provsu</p>
                </div>
            </div>
        </div>
    </div>
    <script src="{{ url('js/login/script.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    {{-- <script src="https://cdn.jsdelivr.net/npm/smartwizard@6/dist/js/jquery.smartWizard.min.js" type="text/javascript"></script> --}}
    <script src="{{ url('plugins/smartwizard/dist/js/jquery.smartWizard.min.js') }}" type="text/javascript"></script>
</body>
</html>