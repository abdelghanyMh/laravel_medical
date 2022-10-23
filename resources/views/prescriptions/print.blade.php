<html lang="en">
<!-- TODO change the css add header  ...-->

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>print </title>

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&amp;display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{ asset('plugins/fontawesome-free/css/all.min.css') }}">

    <!-- Theme style -->
    <link rel="stylesheet" href="{{ asset('css/adminlte.min.css') }}">

    <style>
        body,
        html {
            min-height: 53%;
            max-width: 62%;
            margin: 0 auto;
        }

        .page-header {
            padding-top: 19px;
            padding-bottom: 28px;
        }

        #logo {
            padding-left: 27px;
        }

        #date {
            padding-right: 25px;
        }

        #nomLabel {
            width: 24%;
        }

        #nom {
            width: 17%;
        }

        #prenomLabel {
            width: 31%;
        }

        #prescritionBody {
            width: 100%;
        }

        @media print {
            body {
                min-height: 520.467px;
                max-width: 536.4px;
                margin: 0 auto;
            }

            .page-header {
                padding-top: 19px;
                padding-bottom: 28px;
            }

            #logo {
                padding-left: 27px;
            }

            #date {
                padding-right: 25px;
            }

            #nomLabel {
                width: 24%;
            }

            #nom {
                width: 17%;
            }

            #prenomLabel {
                width: 31%;
            }

            #prescritionBody {
                width: 100%;
            }
        }
    </style>
</head>



<body>
    <div class="wrapper">
        <!-- Main content -->
        <section class="invoice">
            <!-- title row -->
            <div class="row">
                <div class="col-12">
                    <h2 class="page-header">
                        <i id="logo" class="fas fa-globe"></i> Clinique Tlemcen
                        <small
                            class="float-right">Date:{{ date('Y-m-d', strtotime($prescription['updated_at'])) }}</small>
                    </h2>
                </div>
                <!-- /.col -->
            </div>




            <div class="table-responsive">
                <table class="table">
                    <tbody>
                        <tr>
                            <th id="nomLabel">name:</th>
                            <td id="nom">{{ $patient->name }}</td>
                            <th id="prenomLabel">last name:</th>
                            <td>{{ $patient->lastname }}</td>
                        </tr>

                        <tr>
                            <th>phone:</th>
                            <td>{{ $patient->phone }}</td>

                            <th>Date of birth:</th>
                            <td>{{ $patient->dob }}</td>


                        </tr>
                        <tr>
                            <td colspan="4">
                                <textarea id="prescritionBody" cols="29" rows="13">{{ $prescription->content }}</textarea>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <!-- /.row -->
        </section>
        <!-- /.content -->
    </div>

    <!-- Page specific script -->
    <script>
        window.addEventListener("load", window.print());
    </script>
</body>

</html>
