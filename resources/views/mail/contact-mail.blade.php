<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>SMARTYLEX </title>
</head>
<body>
    <h3> {{ $contenu['title'] }} </h3>
    <table border="1" cellpadding="10" cellspacing="0">
      <tr>
        <th>Nom du cabinet</th>
        <th>Représentant</th>
        <th>Email</th>
        <th>Téléphone</th>
        <th>Plan choisi</th>
      </tr>
      <tr>
        <td>{{ $contenu['cabinet'] }} </td>
        <td>{{ $contenu['user-name'] }} </td>
        <td>{{ $contenu['user-email'] }} </td>
        <td>{{ $contenu['telephone'] }} </td>
        <td>{{ $contenu['plan'] }} </td>
      </tr>
      
    </table><br>
    @if($contenu['message']=='')@else<b>Précision du client :</b>@endif 
    <p>{{ $contenu['message'] }}</p><br><br>

    <a href="https://www.smartylex.com"><img src="{{ $message->embed($contenu['image']) }}" alt="Image de 300px par 300px" ></a> 

    
</body>
</html>