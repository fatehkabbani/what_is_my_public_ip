<?php
function getPublicIP()
{
    $curl = curl_init();
    curl_setopt($curl, CURLOPT_URL, 'http://httpbin.org/ip');
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
    $output = curl_exec($curl);
    curl_close($curl);
    $ip = json_decode($output, true);
    return $ip['origin'];
} ?>
<!DOCTYPE html>
<html lang="en">
<link rel="stylesheet" href="style.css">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>

    </style>
</head>

<body>
    <div class="container">
        <label for="ip" id="ip-label">YOUR IPV4 IS: </label>
        <div class="input-container">
            <input value="<?php echo getPublicIP(); ?>" type="text" name="ip" id="ip" onclick="this.select();"
                disabled />
            <span class="input-span">copy</span>

        </div>
    </div>
    <script src="script.js">

    </script>
</body>

</html>