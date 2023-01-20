
<?




include 'config.php';
session_start();
 error_reporting(0);

if(!isset($_COOKIE['bytrid']))
{ header('location:checkout.php'); }


 $whrvid = $_COOKIE['bytrid'];
// $whrvmal = $_COOKIE['bymail'];

$vwordr ="SELECT * FROM `waiting_orders` WHERE orderid='$whrvid'";
  $vwordrsq = mysqli_query($db,$vwordr);
$vwordrs= mysqli_fetch_assoc($vwordrsq);


$total_price = $vwordrs['total_price'].'00';


?>



















<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Pay BY Paymobe </title>
</head>
<body>
    <h1>
        For Payment Accept 
    </h1>
    



 <script> 
const API = 'ZXlKaGJHY2lPaUpJVXpVeE1pSXNJblI1Y0NJNklrcFhWQ0o5LmV5SmpiR0Z6Y3lJNklrMWxjbU5vWVc1MElpd2ljSEp2Wm1sc1pWOXdheUk2T1RBME1Dd2libUZ0WlNJNklqRTJOakl5TWpBd01USXVPREkxTXpRekluMC5IbDFveVhsbjdoLXh5bEw0R1MwNkdsa1dLSXhJRHN1T2x5U1ZvUVlrbnkxc3AwdEVxZjNDT1UyMnVCblo4eWV1allTZmoybEREdXlsOUdNdkFkUkJKUQ==';

////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
async function firststep () {

    let data = { "api_key": API }
    let request = await fetch('https://pakistan.paymob.com/api/auth/tokens' , {
        method : 'post',
        headers : { 'Content-Type' : 'application/json' },
        body : JSON.stringify(data)
    })
    let response = await request.json()
    let token = response.token
     // console.log(response)
     secstep(token)
}


/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
async function secstep (token) {
    let data = {
        "auth_token":  token,
        "delivery_needed": "false",
        "amount_cents": "100",
        "currency": "PKR",
        "items": [],
      }

    let request = await fetch('https://pakistan.paymob.com/api/ecommerce/orders' , {
        method : 'post',
        headers : { 'Content-Type' : 'application/json' },
        body : JSON.stringify(data)
    })

    let response = await request.json()
    let id = response.id
   // console.log(response.id)
   // alert(id + '[/]' + token);
    thirdstep(token , id)
}

///////////////////////////////////////////////////////////////////////////////////////////////////////////////// third step 
async function thirdstep (token , id) {
    // alert(id + '[/]' + token);
    let data = {
        "auth_token": token,
        "amount_cents": <? echo $total_price ?>, 
        "expiration": 3600, 
        "order_id": id,
        "billing_data": {
          "apartment": "803", 
          "email": "claudette09@exa.com", 
          "floor": "42", 
          "first_name": "Clifford", 
          "street": "Ethan Land", 
          "building": "8028", 
          "phone_number": "+86(8)9135210487", 
          "shipping_method": "PKG", 
          "postal_code": "01898", 
          "city": "Jaskolskiburgh", 
          "country": "CR", 
          "last_name": "Nicolas", 
          "state": "Utah"
        }, 
        "currency": "PKR", 
        "integration_id": 9493  ///// get from integraion id by login 
      }

    let request = await fetch('https://pakistan.paymob.com/api/acceptance/payment_keys' , {
        method : 'post',
        headers : { 'Content-Type' : 'application/json' },
        body : JSON.stringify(data)
    })
    let response = await request.json()
    let Thetoken = response.token
    // console.log(response.Thetoken);
    iframef(Thetoken);
}

///////////////////////////////////////////////////////////////////////////////////////////////////////////// iframe 
async function iframef (token) {
    window.location.href='https://pakistan.paymob.com/api/acceptance/iframes/33127?payment_token='+token ;
}
////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
firststep()


</script>

</body>
</html>