<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://fonts.googleapis.com/css?family=Kodchasan&display=swap" rel="stylesheet">
    <title>Document</title>
</head>

<body>
    <img src="https://cdn.pixabay.com/photo/2013/07/12/12/58/mail-146645__480.png" alt="" width="50%" style="float:right;">
    <h2><span style="color:#ec9393;">Имя клиента:  </span> <h3><?php echo($data['name'])?></h3></h2>                          
    <h2><span style="color:#ec9393;">Телефон:  </span><h3><?php echo($data['phone']) ?></h3></h2>               
    <h2><span style="color:#ec9393;">Выбранные услуги: <br></span><h3><?php if (!empty($data['serviceOne'])) echo('•  '.$data['serviceOne']) ?></h3><h3><?php if (!empty($data['serviceTwo'])) echo('•  '.$data['serviceTwo']) ?></h3><h3><?php if (!empty($data['serviceThree'])) echo('•  '.$data['serviceThree']) ?><h3></h2>
</body>

</html>