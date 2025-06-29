<!DOCTYPE html>
<html lang="fr">
<head>
<meta charset="UTF-8">
<title>Message reçu</title>
<style>
body {
    font-family: Arial, Helvetica, sans-serif;
    background-color: #f9f9f9;
    padding: 30px 0;
    margin: 0;
}
.container {
    max-width: 600px;
    margin: 0 auto;
    background-color: #ffffff;
    border-radius: 8px;
    overflow: hidden;
    border: 1px solid #e0e0e0;
}
.header {
    background-color: #007BFF;
    color: #ffffff;
    text-align: center;
    padding: 30px 20px;
}
.header h2 {
    margin: 0;
    font-size: 24px;
}
.content {
    padding: 25px;
    color: #333333;
}
.content p {
    font-size: 15px;
    line-height: 1.5;
    margin: 10px 0;
}
.label {
    font-weight: bold;
    color: #555555;
}
.footer {
    text-align: center;
    font-size: 12px;
    color: #888888;
    padding: 20px;
    background-color: #f1f1f1;
}
.separator {
    border-bottom: 1px solid #eaeaea;
    margin: 20px 0;
}
</style>
</head>
<body>
    <div class="container">
        <div class="header">
            <h2>Nouveau message reçu</h2>
        </div>
        <div class="content">
            <p><span class="label">Nom :</span> {{ $data['name'] }}</p>
            <p><span class="label">Email :</span> {{ $data['email'] }}</p>
            <p><span class="label">Objet :</span> {{ $data['subject'] }}</p>
            <div class="separator"></div>
            <p><span class="label">Message :</span></p>
            <p>{{ $data['message'] }}</p>
        </div>
        <div class="footer">
            Ce message a été envoyé depuis le formulaire de contact de votre site.
        </div>
    </div>
</body>
</html>
