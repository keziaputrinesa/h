<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="\css\bootstrap.min.css">
</head>
<body>
    <div class="container mt-5">
        <div class="card">
            <div class="card-header bg-primary text-white">
               <h2>JAWABAN</h2>
            </div>
            <div class="card-body">
            <p>nama : {{ $profile[$jawab]['nama'] }}</p>
            <p>kajur : {{ $profile[$jawab]['kajur'] }}</p>
            <p> kelas : {{ $profile[$jawab]['kelas'] }}</p>
            </div>
        </div>
    </div>
    

    <script src="\js\bootstrap.bundle.min.js"></script>i
</body>
</html>