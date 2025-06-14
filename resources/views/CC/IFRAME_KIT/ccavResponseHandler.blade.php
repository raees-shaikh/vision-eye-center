@include('CC.Crypto')
<?php
	error_reporting(0);

	$workingKey=config('app.working_key');		//Working Key should be provided here.
	$encResponse=$_POST["encResp"];			//This is the response sent by the CCAvenue Server
	$rcvdString=cryptoDecrypt($encResponse,$workingKey);		//Crypto Decryption used as per the specified working key.
	$order_status="";
	$decryptValues=explode('&', $rcvdString);
	$dataSize=sizeof($decryptValues);
	$userEmail = explode('=',$decryptValues[18]);
	$userName = explode('=',$decryptValues[11]);
	$userMobile = explode('=',$decryptValues[17]);
	$userService = explode('=',$decryptValues[26]);
	$toAdmin = ['email' => $userEmail[1], 'name' => $userName[1], 'mobile' => $userMobile[1], 'service' => $userService[1]];
	$toAdmin['data']=[explode('=',$decryptValues[0]), explode('=',$decryptValues[1]),explode('=',$decryptValues[5])];
	// dd($toAdmin);
    echo "<center>";
	$payment_mode=null;
	$order_id=null;
	for($i = 0; $i < $dataSize; $i++)
	{
		$information=explode('=',$decryptValues[$i]);
		if($i==3) {
            $order_status = $information[1];
		}
	}
    $toPatient[0]=explode('=',$decryptValues[0]);
    $toPatient[1]=explode('=',$decryptValues[1]);
	$toPatient[2]=explode('=',$decryptValues[5]);
	$toPatient[3]= explode('=',$decryptValues[26]);
	session()->forget('data');
	// dd(session()->all());
	if($order_status==="Success")
	{
		echo "<div class=\"section-title\">
			<br>
			<h4>
				<svg width=\"1em\" height=\"1em\" viewBox=\"0 0 16 16\" class=\"bi bi-check-circle\" fill=\"green\" xmlns=\"http://www.w3.org/2000/svg\">
					<path fill-rule=\"evenodd\" d=\"M8 15A7 7 0 1 0 8 1a7 7 0 0 0 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z\"/>
					<path fill-rule=\"evenodd\" d=\"M10.97 4.97a.75.75 0 0 1 1.071 1.05l-3.992 4.99a.75.75 0 0 1-1.08.02L4.324 8.384a.75.75 0 1 1 1.06-1.06l2.094 2.093 3.473-4.425a.236.236 0 0 1 .02-.022z\"/>
					</svg>
					Payment Successful
					</h4>
					</div>";
	try {
		//code...
		Mail::to($userEmail[1])->send(new \App\Mail\Success($toPatient, null));
		Mail::to(env('MAIL_TO'))->send(new \App\Mail\Success(null, $toAdmin));		
		
		// echo "<p>Our team will contact you shortly. Please check your email for confirmation.</p>";
		echo '<div class="jumbotron custom-jumbotron text-center">
  <span><i class="flaticon-check-mark thankyou-check-icon"></i></span>
  <h1 class="display-3">Thank You!</h1>
  <p class="lead">Your Payment is Successfull. We will shortly confirm your appointment.</p>
  <hr>
</div>';

	} catch (\Exception $th) {
		// dd($th);
		// echo $th->getMessage();
		echo "<p>We are unable to send you an email confirmation at the moment. Please call us to confirm your appointment.</p>";
	}

	}
	else if($order_status==="Aborted")
	{
		echo "<br><h4>Something went wrong. Please try again.</h4>";

	}
	else if($order_status==="Failure")
	{
	    Mail::to($userEmail[1])->send(new \App\Mail\Failure);
        echo " <div class=\"section-title\">
                    <br>
                    <h4>
                        <svg width=\"1em\" height=\"1em\" viewBox=\"0 0 16 16\" class=\"bi bi-x-circle\" fill=\"red\" xmlns=\"http://www.w3.org/2000/svg\">
                          <path fill-rule=\"evenodd\" d=\"M8 15A7 7 0 1 0 8 1a7 7 0 0 0 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z\"/>
                          <path fill-rule=\"evenodd\" d=\"M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708z\"/>
                        </svg>

                        Payment Failed
					</h4>
					<p>Something went wrong. Please try again.</p>
                </div>";
				// echo "<table cellspacing=4 cellpadding=4>";
			
				// for($i = 0; $i < sizeof($toPatient); $i++)
				// {
				// 		echo '<tr><td>'.$toPatient[$i][0].'</td><td>'.$toPatient[$i][1].'</td></tr>';
				// }
			
				// echo "</table><br>";
	}
	else
	{
		echo "<br><h4>Security Error. Illegal access detected</h4>";

	}

	echo "<br><br>";

	echo "</center>";
    echo "<script>setTimeout(function(){ window.location.href = '" .route('contact')."'; }, 10000);</script>";
?>