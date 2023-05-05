<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php

$curl = curl_init();

curl_setopt_array($curl, array(
  CURLOPT_URL => 'https://api-m.sandbox.paypal.com/v2/checkout/orders',
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => '',
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 0,
  CURLOPT_FOLLOWLOCATION => true,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => 'POST',
  CURLOPT_POSTFIELDS =>'{
    "intent": "CAPTURE",
    "purchase_units": [
        {
            "items": [
                {
                    "name": "T-Shirt",
                    "description": "Green XL",
                    "quantity": "1",
                    "unit_amount": {
                        "currency_code": "USD",
                        "value": "100.00"
                    }
                }
            ],
            "amount": {
                "currency_code": "USD",
                "value": "100.00",
                "breakdown": {
                    "item_total": {
                        "currency_code": "USD",
                        "value": "100.00"
                    }
                }
            }
        }
    ],
    "application_context": {
        "return_url": "https://example.com/return",
        "cancel_url": "https://example.com/cancel"
    }
}',
  CURLOPT_HTTPHEADER => array(
    'Content-Type: application/json',
    'Prefer: return=representation',
    'PayPal-Request-Id: 96fb1dd3-c892-4fae-ba6e-04c8095f6610',
    'Authorization: Bearer A21AAJPUe6nu0k_jWqhgWYOJVng8hn4PzxvbaDLGSt7UPMhzZFO3orcPgQmmVG1gxNETDNCdfvVGdcPuVS_QtTyqxyF6LI5zw'
  ),
));

$response = curl_exec($curl);

curl_close($curl);
echo $response;

?>
</body>
</html>