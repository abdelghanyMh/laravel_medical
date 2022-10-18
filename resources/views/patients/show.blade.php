@extends('layout')
@section('title', 'Patients Management')
@section('header', 'Patients list')

@section('content')
    <!-- info non medical  box -->
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Patient information</h3>

            <div class="card-tools">
                <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                    <i class="fas fa-minus"></i>
                </button>

            </div>
        </div>
        <div class="card-body" style="display: block;">

            <div class="card-body">
                <form class="needs-validation" method="post" action="{{ route('patients.update', [$patient]) }}"
                    novalidate>
                    @csrf
                    @method('PUT')
                    <div class="row">
                        <div class="col-sm-3">
                            name </div>
                        <div class="col-sm-9">
                            <div class="form-field__control ">
                                <input id="name" name="name" type="text" class=" form-field__input"
                                    placeholder=" " value="{{ old('name', $patient->name) }}" />
                            </div>
                        </div>
                    </div>
                    <hr>

                    <div class="row">
                        <div class="col-sm-3">
                            <h6 class="mb-0">lastname</h6>
                        </div>
                        <div class="col-sm-9">
                            <div class="form-field__control ">
                                <input id="lastname" name="lastname" type="text" class=" form-field__input"
                                    value="{{ old('lastname', $patient->lastname) }}" />
                            </div>
                        </div>
                    </div>
                    <hr>

                    <div class="row">
                        <div class="col-sm-3">
                            <h6 class="mb-0">social security
                                number</h6>
                        </div>
                        <div class="col-sm-9">
                            <div class="form-field__control ">
                                <input id="noSSocial" name="noSSocial" type="text" class=" form-field__input"
                                    value="{{ old('noSSocial', $patient->noSSocial) }}" />
                            </div>
                        </div>
                    </div>
                    <hr>

                    <div class="row">
                        <div class="col-sm-3">
                            <h6 class="mb-0">Date of birth </h6>
                        </div>
                        <div class="col-sm-9">
                            <div class="form-field__control ">
                                <input type="date" name="dob" required value="{{ old('dob', $patient->dob) }}" />
                            </div>
                        </div>
                    </div>
                    <hr>

                    <div class="row">
                        <div class="col-sm-3">
                            <h6 class="mb-0">email</h6>
                        </div>
                        <div class="col-sm-9">
                            <div class="form-field__control ">
                                <input id="email" name="email" type="text" class=" form-field__input"
                                    value="{{ old('email', $patient->email) }}" />
                            </div>
                        </div>
                    </div>
                    <hr>


                    <div class="row">
                        <div class="col-sm-3">
                            <h6 class="mb-0">phone</h6>
                        </div>
                        <div class="col-sm-9">
                            <div class="form-field__control ">
                                <input id="phone" name="phone" type="text" class=" form-field__input"
                                    value="{{ old('phone', $patient->phone) }}" />
                            </div>
                        </div>
                    </div>
                    <hr>
                    <div class="row">

                        <div class="col-sm-9">
                            <button type="submit" class="btn btn-primary">update</button>
                        </div>
                    </div>
                </form>
            </div>

        </div>
        <!-- /.card-body -->

    </div>
    <!-- /. info non medical -->

    <!-- info  medical  box -->
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Infos Medical</h3>

            <div class="card-tools">
                <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                    <i class="fas fa-minus"></i>
                </button>

            </div>
        </div>
        <div id="infoMedical" class="card-body" style="display: block;">

            <div class="card-body">
                <form class="needs-validation" method="post" action="{{ route('patients.update', [$patient]) }}"
                    novalidate>
                    @csrf
                    @method('PUT')
                    <input id="name" name="name" type="text" class=" form-field__input" placeholder=" "
                        value="{{ old('name', $patient->name) }}" hidden />
                    <input id="lastname" name="lastname" type="text" class=" form-field__input"
                        value="{{ old('lastname', $patient->lastname) }}" hidden />
                    <input id="noSSocial" name="noSSocial" type="text" class=" form-field__input"
                        value="{{ old('noSSocial', $patient->noSSocial) }}" hidden />
                    <input type="date" name="dob" required value="{{ old('dob', $patient->dob) }}" hidden />
                    <input id="email" name="email" type="text" class=" form-field__input"
                        value="{{ old('email', $patient->email) }}"hidden />
                    <input id="phone" name="phone" type="text" class=" form-field__input"
                        value="{{ old('phone', $patient->phone) }}" hidden />

                    <div class="row">
                        <div class="col-sm-3">
                            <h6 class="mb-0">diseases</h6>
                        </div>
                        <div class="col-sm-9">
                            <div class="form-field__control ">
                                <input id="diseases" name="diseases" type="text" class=" form-field__input"
                                    placeholder="malade1,malade2" value="{{ old('diseases', $patient->diseases) }}" />
                            </div>
                        </div>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-sm-3">
                            <h6 class="mb-0">Allergies</h6>
                        </div>
                        <div class="col-sm-9">
                            <div class="form-field__control ">
                                <input id="allergies" name="allergies" type="text" class=" form-field__input"
                                    placeholder="Allergie1,allergies"
                                    value="{{ old('allergies', $patient->allergies) }}" />
                            </div>
                        </div>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-sm-3">
                            <h6 class="mb-0">antecedents</h6>
                        </div>
                        <div class="col-sm-9">
                            <div class="form-field__control">
                                <textarea name="antecedents" id="antecedents" cols="30" rows="5" class=" form-field__input ">
                               {{ old('antecedents', $patient->antecedents) }}
                            </textarea>

                            </div>
                        </div>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-sm-3">
                            <h6 class="mb-0">comments</h6>
                        </div>
                        <div class="col-sm-9">
                            <div class="form-field__control">
                                <textarea name="comments" id="comments" cols="30" rows="5" class=" form-field__input ">
                               {{ old('comments', $patient->comments) }}
                            </textarea>

                            </div>
                        </div>
                    </div>
                    <hr>
                    <div class="row">

                        <div class="col-sm-9">
                            <button type="submit" class="btn btn-primary">update</button>
                        </div>
                    </div>
                </form>
                <hr>
                <div class="row">
                    <div class="col-sm-3">
                        <h6 class="mb-0">imagerie</h6>
                    </div>
                    <div class="col-sm-9">
                        <form method='post' enctype='multipart/form-data'>
                            <table id="table">

                                <tbody>
                                    <tr class="add_row">

                                        <td><input class="file" name='files[]' type='file' />
                                        </td>
                                    </tr>
                                </tbody>
                                <tfoot>
                                    <tr>
                                        <td colspan="4"><button class="btn btn-success" type="button" id="add"
                                                title='Add new file' />add</button></td>
                                    </tr>
                                    <tr>

                                        <td>
                                            <hr>
                                            <button id="upload" class="btn btn-primary submit" name="btnSubmit"
                                                type='submit'>update</button>
                                        </td>
                                    </tr>
                                </tfoot>
                            </table>
                        </form>
                        <br><br><br><br>
                    </div>
                </div>

            </div>

        </div>
        <!-- /.card-body -->

    </div>
    <!-- /. info  medical -->

    <!-- Prescription Médicale  box -->
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Prescriptions</h3>

            <div class="card-tools">
                <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                    <i class="fas fa-minus"></i>
                </button>

            </div>
        </div>
        <div id="infoMedical" class="card-body" style="display: block;">
            <div class="card-body">
                <div class="row">
                    <div class="col-sm-12">
                        <table id="example1" class="table table-bordered table-striped dataTable dtr-inline"
                            role="grid" aria-describedby="example1_info">
                            <thead>
                                <tr role="row">
                                    <th class="sorting_asc" tabindex="0" aria-controls="example1" rowspan="1"
                                        colspan="1" aria-sort="ascending"
                                        aria-label="Rendering engine: activate to sort column descending">
                                        Date</th>


                                    <th rowspan="1" colspan="1">
                                        <!-- ligne de prescription -->

                                    </th>
                                    <th rowspan="1" colspan="1">
                                        <!-- ligne de prescription -->
                                        action
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr role="row" class="even">

                                    <td>02/30/2021</td>
                                    <td>medicament:dose moment_pris duree... </td>
                                    <td>
                                        <a href="prescription-print.html" target="_blank" class="btn btn-default"><i
                                                class="fa fa-print"></i>
                                            Print</a>
                                    </td>
                                </tr>
                                <tr role="row" class="odd">

                                    <td>01/20/2021</td>
                                    <td>medicament:dose moment_pris duree... </td>
                                    <td>
                                        <a href="prescription-print.html" target="_blank" class="btn btn-default"><i
                                                class="fa fa-print"></i>
                                            Print</a>
                                    </td>
                                </tr>


                        </table>
                        <button type="button" class="  btn-success add-btn" data-toggle="modal"
                            data-target="#modal-prescription">
                            +
                        </button>
                    </div>

                </div>


            </div>
        </div>
    </div>
    <!-- /.Prescription Médicale  box -->

    <!-- Lettres d'Orientation Médicale  box -->
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Lettres d'Orientation</h3>

            <div class="card-tools">
                <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                    <i class="fas fa-minus"></i>
                </button>

            </div>
        </div>
        <div id="infoMedical" class="card-body" style="display: block;">

            <div class="card-body">
                <div class="row">
                    <div class="col-sm-12">
                        <table id="example1" class="table table-bordered table-striped dataTable dtr-inline"
                            role="grid" aria-describedby="example1_info">
                            <thead>
                                <tr role="row">
                                    <th class="sorting_asc" tabindex="0" aria-controls="example1" rowspan="1"
                                        colspan="1" aria-sort="ascending"
                                        aria-label="Rendering engine: activate to sort column descending">
                                        Date
                                    </th>


                                    <th rowspan="1" colspan="1">
                                        <!-- Contenu de lettre -->
                                        Contenu
                                    </th>
                                    <th rowspan="1" colspan="1">
                                        action
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr role="row" class="even">

                                    <td>02/30/2021</td>
                                    <td>cher professeur Permettez moi de vous adresser le
                                        patient....</td>
                                    <td>
                                        <a href="prescription-print.html" target="_blank" class="btn btn-default"><i
                                                class="fa fa-print"></i>
                                            Print</a>
                                    </td>
                                </tr>
                                <tr role="row" class="odd">

                                    <td>01/20/2021</td>
                                    <td>cher professeur Permettez moi de vous adresser le
                                        patient....</td>

                                    <td>
                                        <a href="prescription-print.html" target="_blank" class="btn btn-default"><i
                                                class="fa fa-print"></i>
                                            Print</a>
                                    </td>
                                </tr>


                        </table>
                        <button type="button" class="  btn-success add-btn" data-toggle="modal"
                            data-target="#modal-orientation">
                            +
                        </button>
                    </div>

                </div>


            </div>
        </div>
    </div>
    <!-- /.Lettres d'Orientation Médicale  box -->

    <!-- rendez-vous  box -->
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Rendez-vous</h3>

            <div class="card-tools">
                <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                    <i class="fas fa-minus"></i>
                </button>

            </div>
        </div>
        <div id="infoMedical" class="card-body" style="display: block;">

            <div class="card-body">
                <div class="row">
                    <div class="col-sm-12">
                        <table id="example1" class="table table-bordered table-striped dataTable dtr-inline"
                            role="grid" aria-describedby="example1_info">
                            <thead>
                                <tr role="row">
                                    <th class="sorting_asc" tabindex="0" aria-controls="example1" rowspan="1"
                                        colspan="1" aria-sort="ascending"
                                        aria-label="Rendering engine: activate to sort column descending">
                                        Date</th>
                                    <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1"
                                        colspan="1" aria-label="Browser: activate to sort column ascending">
                                        Heure Début</th>
                                    <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1"
                                        colspan="1" aria-label="Platform(s): activate to sort column ascending">
                                        Heure fin</th>
                                    <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1"
                                        colspan="1" aria-label="Engine version: activate to sort column ascending">
                                        Motif</th>
                                    <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1"
                                        colspan="1" aria-label="CSS grade: activate to sort column ascending">
                                        actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr role="row" class="odd">
                                    <td class="dtr-control sorting_1" tabindex="0">nom prenom
                                    </td>
                                    <td>16/04/1999</td>
                                    <td>4.30 am</td>
                                    <td>5.00 am </td>
                                    <td><a href="prescription-print.html" target="_blank" class="btn btn-default"><i
                                                class="fa fa-print"></i>
                                            Print</a></td>
                                </tr>
                                <tr role="row" class="even">
                                    <td class="dtr-control sorting_1" tabindex="0">nom prenom
                                    </td>
                                    <td>16/04/2021</td>
                                    <td>4.30 am</td>
                                    <td>5.00 am </td>
                                    <td><a href="prescription-print.html" target="_blank" class="btn btn-default"><i
                                                class="fa fa-print"></i>
                                            Print</a></td>
                                </tr>

                        </table>
                        <button type="button" class="  btn-success add-btn" data-toggle="modal"
                            data-target="#modal-rendez-vous">
                            +
                        </button>
                    </div>

                </div>


            </div>
        </div>
    </div>
    <!-- /.rendez-vous  box -->

@endsection
