<!DOCTYPE html>
<html>
<head>
    <title>Contato</title>
</head>
<body>
    <h1>Nova Mensagem de Contato</h1>
    <p><strong>Nome:</strong> {{ $data['name'] }}</p>
    <p><strong>Email:</strong> {{ $data['email'] }}</p>
    <p><strong>Mensagem:</strong></p>
    <p>{{ $data['message'] }}</p>
</body>
</html>
