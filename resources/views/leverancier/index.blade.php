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
        <h1>Overzicht leveranciers</h1>
    </div>
    <div class="table">
        <table>
            <thead>
                <tr>
                    <th>Naam</th>
                    <th>Contactpersoon</th>
                    <th>Leveranciernummer</th>
                    <th>Mobiel</th>
                    <th>LeverancierDetails</th>
                </tr>
            </thead>
            <tbody>
                @foreach($leveranciers as $leverancier)
                <tr>
                    <td>{{$leverancier->Naam}}</td>
                    <td>{{$leverancier->ContactPersoon}}</td>
                    <td>{{$leverancier->LeverancierNummer}}</td>
                    <td>{{$leverancier->Mobiel}}</td>
                    <td>
                        <a href="{{route('leveranciers.wijzig', [$leverancier->id, $leverancier->contact->id])}}">
                            <img class="small-img" src="/img/potlood.png" alt="potlood.png">
                        </a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    <div class="button-box-leverancier">
        <div class="buttons">
            <a href="{{route('home')}}">Home</a>
        </div>
    </div>
</body>

</html>