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
        <h1>Wijzig Leveranciergegevens</h1>
        <form action="{{route('leveranciers.store', [$leverancier->id, $contact->id])}}" method="post">
            @csrf
            @method('put')
            <div class="section">
                <label for="Naam">Naam:</label>
                <input type="text" name="Naam" value="{{$leverancier->Naam}}" required />
            </div>
            <div class="section">
                <label for="ContactPersoon">ContactPersoon:</label>
                <input type="text" name="ContactPersoon" value="{{$leverancier->ContactPersoon}}" required />
            </div>
            <div class="section">
                <label for="LeverancierNummer">LeverancierNummer:</label>
                <input type="text" name="LeverancierNummer" value="{{$leverancier->LeverancierNummer}}" required />
            </div>
            <div class="section">
                <label for="Mobiel">Mobiel:</label>
                <input type="text" name="Mobiel" value="{{$leverancier->Mobiel}}" required />
            </div>
            <div class="section">
                <label for="Straat">Straat:</label>
                <input type="text" name="Straat" value="{{$contact->Straat}}" required />
            </div>
            <div class="section">
                <label for="Huisnummer">Huisnummer:</label>
                <input type="text" name="Huisnummer" value="{{$contact->Huisnummer}}" required />
            </div>
            <div class="section">
                <label for="Postcode">Postcode:</label>
                <input type="text" name="Postcode" value="{{$contact->Postcode}}" required />
            </div>
            <div class="section">
                <label for="Stad">Stad:</label>
                <input type="text" name="Stad" value="{{$contact->Stad}}" required />
            </div>
            <div class="section submit">
                <input id="submit" type="submit" value="Sla op">
                <div class="buttons">
                    <a href="{{route('leveranciers.wijzig', [$leverancier->id, $contact->id])}}">Terug</a>
                </div>
                <div class="buttons">
                    <a href="{{route('home')}}">Home</a>
                </div>
            </div>
        </form>
    </div>
    @if(session()->has('succes'))
    <h3 class="succes-text">
        {{session('succes')}}
    </h3>
    <script>
        setTimeout(function() {
            window.location.href = "{{route('leveranciers.wijzig', [$leverancier->id, $contact->id])}}";
        }, 3000);
    </script>
    @endif
</body>

</html>