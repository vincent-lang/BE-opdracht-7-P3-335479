<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/css/app.css">
    <title>Document</title>
</head>

<body>
    <div class="background"><span></span><span></span><span></span><span></span><span></span><span></span><span></span><span></span><span></span><span></span></div>
    <div class="title">
        <h1>Leverancier Details</h1>
    </div>
    <div class="table-flex">
        <div class="table">
            <table>
                <thead>
                    <tr class="flex">
                        <th>Naam</th>
                        <th>Contactpersoon</th>
                        <th>Leveranciernummer</th>
                        <th>Mobiel</th>
                        <th>Straat</th>
                        <th>Huisnummer</th>
                        <th>Postcode</th>
                        <th>Stad</th>
                    </tr>
                </thead>
            </table>
        </div>
        <div class="table">
            <table>
                <tbody>
                    <tr class="flex">
                        <td>{{$leverancier->Naam}}</td>
                        <td>{{$leverancier->ContactPersoon}}</td>
                        <td>{{$leverancier->LeverancierNummer}}</td>
                        <td>{{$leverancier->Mobiel}}</td>
                        <td>{{$contact->Straat}}</td>
                        <td>{{$contact->Huisnummer}}</td>
                        <td>{{$contact->Postcode}}</td>
                        <td>{{$contact->Stad}}</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
    <div class="button-box">
        <div class="buttons">
            <a href="{{route('leveranciers.edit', [$leverancier->id, $contact->id])}}">Wijzig</a>
        </div>
        <div class="buttons">
            <a href="{{route('leveranciers.index')}}">Terug</a>
        </div>
        <div class="buttons">
            <a href="{{route('home')}}">Home</a>
        </div>
    </div>
</body>

</html>