
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <table class="table table-bordered">
    <thead>
      <tr>
        <td><b> Name</b></td>
        <td><b> Email</b></td>
        <td><b> Barcode</b></td>     
      </tr>
      </thead>
      <tbody>
      <tr>
        <td>
          {{$user->name}}
        </td>
        <td>
          {{$user->email}}
        </td>
        <td>
            {!! DNS1D::getBarcodeSVG('4445645656', 'PHARMA2T',3,3)!!}
        </td>
      </tr>
      </tbody>
    </table>
  </body>
</html>