<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.0/css/bootstrap.min.css" integrity="sha512-P5MgMn1jBN01asBgU0z60Qk4QxiXo86+wlFahKrsQf37c9cro517WzVSPPV1tDKzhku2iJ2FVgL67wG03SGnNA==" crossorigin="anonymous" />
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Lista de paises</h1>
    <table class="table table-hover">
        <thead>
              <tr class="bg-dark">
                  <th class="text-warning">NOMBRE</th>
                  <th class="text-warning">CAPITAL</th>
                  <th class="text-warning">MONEDA</th>
                  <th class="text-warning" >POBLACION</th>
              </tr>
        <thead>
        <tbody>
            @foreach ($naciones as $nombre => $nacion )
                 <tr>
                     <th class="bg-secondary">{{ $nombre }} </th>
                     <th class="bg-secondary">{{ $nacion ['capital'] }} </th>
                     <th class="bg-secondary">{{ $nacion ['moneda'] }} </th>
                     <th class="bg-secondary">{{ $nacion ['poblacion'] }} </th>

                 </tr>

            @endforeach
        </tbody>
    </table>
</body>
</html>
