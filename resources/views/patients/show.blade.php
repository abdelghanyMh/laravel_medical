@extends('layout')
@section('title', 'Patients Management')
@section('header', 'Patient\'s profile')

@section('content')
    <div class="row">
        <div class="col-md-6">
            <!-- info non medical  box -->
            <div class="card card-primary">
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
                            <div class="form-group">
                                <label for="name">Name</label>
                                <input id="name" name="name" type="text" class="form-control" placeholder=" "
                                    value="{{ old('name', $patient->name) }}" />
                            </div>

                            <div class="form-group">
                                <label for="lastname">Lastname</label>
                                <input id="lastname" name="lastname" type="text" class="form-control"
                                    value="{{ old('lastname', $patient->lastname) }}" />
                            </div>

                            <div class="form-group">
                                <label for="noSSocial">Social security number</label>
                                <input id="noSSocial" name="noSSocial" type="text" class=" form-control"
                                    value="{{ old('noSSocial', $patient->noSSocial) }}" />
                            </div>

                            <div class="form-group">
                                <label for="dob">Date of birth</label>
                                <input type="date" name="dob" id="dob" class="form-control"
                                    value="{{ old('dob', $patient->dob) }}" required />
                            </div>

                            <div class="form-group">
                                <label for="email">Email</label>
                                <input id="email" name="email" type="text" class="form-control"
                                    value="{{ old('email', $patient->email) }}" />
                            </div>


                            <div class="form-group">
                                <label for="phone">Phone</label>
                                <input id="phone" name="phone" type="text" class="form-control"
                                    value="{{ old('phone', $patient->phone) }}" />
                            </div>

                            <div class="form-group">

                                <button type="submit" class="btn btn-primary">update</button>
                            </div>
                        </form>
                    </div>

                </div>
                <!-- /.card-body -->

            </div>
            <!-- /. info non medical -->

            <!-- Appointment  box -->
            <div class="card card-secondary">
                <div class="card-header">
                    <h3 class="card-title">Appointment</h3>

                    <div class="card-tools">
                        <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                            <i class="fas fa-minus"></i>
                        </button>

                    </div>
                </div>
                <div class="card-body" style="display: block;">

                    <div class="card-body">
                        <div class="row">
                            <div class="col-sm-12">
                                <table id="appointment_table"
                                    class="table table-bordered table-striped dataTable dtr-inline" role="grid"
                                    aria-describedby="example1_info">
                                    <thead>
                                        <tr role="row">
                                            <th class="sorting_asc" tabindex="0" aria-controls="example1" rowspan="1"
                                                colspan="1" aria-sort="ascending"
                                                aria-label="Rendering engine: activate to sort column descending">
                                                Date</th>
                                            <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1"
                                                colspan="1" aria-label="Browser: activate to sort column ascending">
                                                Start time</th>
                                            <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1"
                                                colspan="1" aria-label="Platform(s): activate to sort column ascending">
                                                end time</th>
                                            <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1"
                                                colspan="1"
                                                aria-label="Engine version: activate to sort column ascending">
                                                motivation</th>
                                            <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1"
                                                colspan="1" aria-label="CSS grade: activate to sort column ascending">
                                                actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @php
                                            $counter = 1;
                                        @endphp

                                        @foreach ($appointments as $appointment)
                                            <tr role="row" class="{{ $counter % 2 == 0 ? 'even' : 'odd' }}">
                                                <td class="dtr-control sorting_1" tabindex="0">
                                                    {{ $appointment['date'] }}</td>
                                                <td>{{ $appointment['start_time'] }}</td>
                                                <td>{{ $appointment['end_time'] }}</td>
                                                <td class="truncate">{{ $appointment['motivation'] }}</td>
                                                <td
                                                    style="padding-right: -3.25rem;border-right-width: 0px;height: 37px;width: 95.833px;">
                                                    TBD later
                                                    {{-- <a href="{{ route('scans.show', [$appointment->id]) }}"
                                            class="btn btn-profile btn-del"
                                            style="height: 41px;min-width: 46px;margin: 0px;padding: 0px;"
                                            title="preview"><i class="fas fa-external-link-alt"></i></a>

                                        <a href="{{ route('scans.download', $appointment->id) }}"
                                            class="btn btn-app btn-modify"
                                            style="height: 41px;min-width: 46px;margin: 0px;padding: 0px;">
                                            <i class="fas fa-download"></i>
                                        </a> --}}

                                                </td>
                                            </tr>
                                            @php
                                                $counter++;
                                            @endphp
                                        @endforeach
                                    </tbody>
                                </table>
                                <button type="button" class="  btn-success add-btn" data-toggle="modal"
                                    data-target="#modal_add_appointment">
                                    +
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /. Appointment  box -->

            <!-- Lettres d'Orientation Médicale  box -->
            <div class="card card-secondary">
                <div class="card-header">
                    <h3 class="card-title">Orientation Letters</h3>

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
                                <table id="orientationLtrs_table"
                                    class="table table-bordered table-striped dataTable dtr-inline" role="grid"
                                    aria-describedby="example1_info">
                                    <thead>
                                        <tr role="row">
                                            <th class="sorting_asc" tabindex="0" aria-controls="example1"
                                                rowspan="1" colspan="1" aria-sort="ascending"
                                                aria-label="Rendering engine: activate to sort column descending">
                                                Date
                                            </th>


                                            <th rowspan="1" colspan="1">
                                                Content
                                            </th>
                                            <th rowspan="1" colspan="1">
                                                action
                                            </th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @php
                                            $counter = 1;
                                        @endphp

                                        @foreach ($orientationLtrs as $ltr)
                                            <tr role="row" class="{{ $counter % 2 == 0 ? 'even' : 'odd' }}">
                                                <td class="dtr-control sorting_1" tabindex="0">
                                                    {{ $ltr['updated_at'] }}</td>
                                                <td class="truncate">{{ $ltr['content'] }}</td>
                                                <td>
                                                    <a href="{{ route('orientationLtr.show', [$ltr->id]) }}"
                                                        target="_blank" class="btn btn-default"><i
                                                            class="fa fa-print"></i>
                                                        Print</a>
                                                </td>
                                            </tr>
                                            @php
                                                $counter++;
                                            @endphp
                                        @endforeach
                                    </tbody>
                                </table>
                                <button type="button" class="  btn-success add-btn" data-toggle="modal"
                                    data-target="#modal-add-orientationLtr">
                                    +
                                </button>
                            </div>

                        </div>


                    </div>
                </div>
            </div>
            <!-- /.Lettres d'Orientation Médicale  box -->
        </div>
        <div class="col-md-6">
            <!-- info  medical  box -->
            <div class="card card-secondary">
                <div class="card-header">
                    <h3 class="card-title">Patient's medical information</h3>

                    <div class="card-tools">
                        <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                            <i class="fas fa-minus"></i>
                        </button>

                    </div>
                </div>
                <div id="infoMedical" class="card-body" style="display: block;">
                    <div class="card-body">
                        <form class="needs-validation" method="post"
                            action="{{ route('patients.update', [$patient]) }}" novalidate>
                            @csrf
                            @method('PUT')
                            <input id="name" name="name" type="text" class=" form-field__input"
                                placeholder=" " value="{{ old('name', $patient->name) }}" hidden />
                            <input id="lastname" name="lastname" type="text" class=" form-field__input"
                                value="{{ old('lastname', $patient->lastname) }}" hidden />
                            <input id="noSSocial" name="noSSocial" type="text" class=" form-field__input"
                                value="{{ old('noSSocial', $patient->noSSocial) }}" hidden />
                            <input type="date" name="dob" required value="{{ old('dob', $patient->dob) }}"
                                hidden />
                            <input id="email" name="email" type="text" class=" form-field__input"
                                value="{{ old('email', $patient->email) }}"hidden />
                            <input id="phone" name="phone" type="text" class=" form-field__input"
                                value="{{ old('phone', $patient->phone) }}" hidden />

                            <div class="form-group">
                                <label for="diseases">Diseases</label>
                                <input id="diseases" name="diseases" type="text" class=" form-control   "
                                    placeholder="malade1,malade2" value="{{ old('diseases', $patient->diseases) }}" />
                            </div>
                            <div class="form-group">
                                <label for="allergies">Allergies</label>
                                <input id="allergies" name="allergies" type="text" class=" form-control "
                                    placeholder="Allergie1,allergies"
                                    value="{{ old('allergies', $patient->allergies) }}" />
                            </div>
                            <div class="form-group">
                                <label for="antecedents">Antecedents</label>
                                <textarea name="antecedents" id="antecedents" cols="30" rows="5" class="form-control">{{ old('antecedents', $patient->antecedents) }}</textarea>
                            </div>

                            <div class="form-group">
                                <label for="comments">Comments</label>
                                <textarea name="comments" id="comments" cols="30" rows="5" class="form-control">{{ old('comments', $patient->comments) }}</textarea>
                            </div>
                            <div class="form-group">
                                <button type="submit" class="btn btn-primary">update</button>
                            </div>
                        </form>
                        <hr>

                    </div>

                </div>
                <!-- /.card-body -->

            </div>
            <!-- /. info  medical -->

            <!-- Prescription Médicale  box -->
            <div class="card card-secondary">
                <div class="card-header">
                    <h3 class="card-title">Medication prescriptions</h3>

                    <div class="card-tools">
                        <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                            <i class="fas fa-minus"></i>
                        </button>

                    </div>
                </div>
                <div class="card-body" style="display: block;">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-sm-12">
                                <table id="prescriptions_table"
                                    class="table table-bordered table-striped dataTable dtr-inline" role="grid"
                                    aria-describedby="example1_info">
                                    <thead>
                                        <tr role="row">
                                            <th class="sorting_asc" tabindex="0" aria-controls="example1"
                                                rowspan="1" colspan="1" aria-sort="ascending"
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
                                        @php
                                            $counter = 1;
                                        @endphp

                                        @foreach ($prescriptions as $prescription)
                                            <tr role="row" class="{{ $counter % 2 == 0 ? 'even' : 'odd' }}">
                                                <td class="dtr-control sorting_1" tabindex="0">
                                                    {{ $prescription['updated_at'] }}</td>
                                                <td>{{ $prescription['content'] }}</td>

                                                <td>
                                                    <a href="{{ route('prescriptions.print', [$prescription->id]) }}"
                                                        target="_blank" class="btn btn-default"><i
                                                            class="fa fa-print"></i>
                                                        Print</a>
                                                </td>
                                            </tr>
                                            @php
                                                $counter++;
                                            @endphp
                                        @endforeach
                                    </tbody>

                                </table>
                                <button type="button" class="  btn-success add-btn" data-toggle="modal"
                                    data-target="#modal_add_prescription">
                                    +
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /.Prescription Médicale  box -->

            <!--  Medical scans  box -->
            <div class="card card-secondary ">
                <div class="card-header">
                    <h3 class="card-title">Scans</h3>

                    <div class="card-tools">
                        <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                            <i class="fas fa-minus"></i>
                        </button>

                    </div>
                </div>
                <div class="card-body" style="display: block;">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-sm-12">
                                <table id="scans_info" class="table table-bordered table-striped dataTable dtr-inline"
                                    role="grid" aria-describedby="scans_info_info">
                                    <thead>
                                        <tr role="row">
                                            <th class="sorting_asc" tabindex="0" aria-controls="scans_info"
                                                rowspan="1" colspan="1" aria-sort="ascending"
                                                aria-label="Rendering engine: activate to sort column descending">
                                                Date</th>
                                            <th rowspan="1" colspan="1">type</th>
                                            <th rowspan="1" colspan="1">action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @php
                                            $counter = 1;
                                        @endphp
                                        @foreach ($scans as $scan)
                                            <tr role="row" class="{{ $counter % 2 == 0 ? 'even' : 'odd' }}">
                                                <td class="dtr-control sorting_1" tabindex="0">
                                                    {{ $scan['updated_at'] }}</td>
                                                <td>{{ $scan['type'] }}</td>
                                                <td
                                                    style="padding-right: -3.25rem;border-right-width: 0px;height: 37px;width: 95.833px;">

                                                    @php
                                                        $arr = explode('/', $scan->scan_path);
                                                        $name = end($arr);
                                                        $path = '/images/' . $name;
                                                    @endphp
                                                    <a href={{ $path }}
                                                        onclick="window.open(this.href, '_blank', 'left=50%,top=50%,width=500,height=500,toolbar=1,resizable=1'); return false;"
                                                        class="btn btn-profile btn-del"
                                                        style="height: 41px;min-width: 46px;margin: 0px;padding: 0px;"
                                                        title="preview"><i class="fas fa-external-link-alt"></i>
                                                        {{-- <img src="{{ url($path) }}" alt="Image" /> --}}
                                                    </a>


                                                    <a href="{{ route('scans.download', $scan->id) }}"
                                                        class="btn btn-app btn-modify"
                                                        style="height: 41px;min-width: 46px;margin: 0px;padding: 0px;">
                                                        <i class="fas fa-download"></i>
                                                    </a>
                                                </td>
                                            </tr>
                                            @php
                                                $counter++;
                                            @endphp
                                        @endforeach
                                    </tbody>
                                </table>
                                <button type="button" class="  btn-success add-btn" data-toggle="modal"
                                    data-target="#modal-scan">
                                    +
                                </button>
                            </div>

                        </div>


                    </div>
                </div>
            </div>
            <!-- /.Medical scans  box -->
        </div>

    </div>

    @include('modals._add_scan', ['patient' => $patient])
    @include('modals._add_orientationLtr', ['patient' => $patient])
    @include('modals._add_appointment')
    @include('modals._add_prescription', ['patient' => $patient])
@endsection
