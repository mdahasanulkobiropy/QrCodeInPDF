<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <table class="table">
                    <thead>
                        <tr >
                            <th>Name</th>
                            <th>Email</th>
                            <th>Barcode</th>
                            <th>PdF</th>
                        </tr>
                    </thead>
                    <tbody>

                        @foreach ($users as $user)
                            <tr class="table">
                                <td>{{$user->name}}</td>
                                <td>{{$user->email}}</td>
                                <td>{!!DNS2D::getBarcodeHTML($user->email, 'QRCODE')!!}</td>
                                <td><a href="{{route('downloadPDF', $user->id)}}">Download PDF</a></td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>

            </div>
        </div>
    </div>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

</html>
