<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Form Submission</title>
</head>
<body>
    <h1>Új üzenet az ajánlatkérés űrlapról</h1>
    <p><strong>Név:</strong> {{ $data['name'] }}</p>
    <p><strong>CégNév:</strong> {{ $data['company'] }}</p>
    <p><strong>Email:</strong> {{ $data['email'] }}</p>
    <p><strong>Telefon:</strong> {{ $data['phone'] }}</p>
    <p><strong>Szolgáltatás:</strong> {{ $data['service'] ?? '' }}</p>
    <p><strong>Rendelkezik 1 lezárt üzleti évvel:</strong> {{ $data['3522631_select_Rendelkezel1lezartuzletievvel'] ?? 'Nem megadott' }}</p>
    <p><strong>Cég székhelye:</strong> {{ $data['3522631_select_Cegszekhelye'] ?? 'Nem megadott' }}</p>
    <p><strong>Rendelkezik már webáruházzal:</strong> {{ $data['3522631_select_Rendelkezelmarwebaruhazzal'] ?? 'Nem megadott' }}</p>
    <p><strong>Rövid leírása, üzenet:</strong> {{ $data['message'] ?? '' }}</p>
</body>
</html>
