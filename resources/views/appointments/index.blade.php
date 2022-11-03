@extends('layout')
@section('title', 'Appointment Management')
@section('header', 'Appointment list')

@section('content')
    <div class="card">
        <div class="card-body">
            <div id="appointment_table_wrapper" class="dataTables_wrapper dt-bootstrap4">

                <div class="row">
                    <div class="col-sm-12">
                        <table id="appointment_table" class="table table-bordered table-striped dataTable dtr-inline"
                            role="grid" aria-describedby="example1_info">
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
                                        colspan="1" aria-label="Engine version: activate to sort column ascending">
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

                    </div>
                </div>
            </div>
            <div class="add-btn-container">
                <button type="button" class="  btn-success add-btn" data-toggle="modal"
                    data-target="#modal_add_appointment">
                    +
                </button>
            </div>
        </div>
        <!-- /.card-body -->
    </div>
    <!-- /.card -->
    @include('modals._add_appointment')

@endsection
