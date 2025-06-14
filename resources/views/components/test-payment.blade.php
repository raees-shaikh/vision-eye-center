@include('CC.Crypto')

<?php

	error_reporting(0);

	$working_key=config('app.working_key');//Shared by CCAVENUES
	$access_code=config('app.access_key');//Shared by CCAVENUES
	$merchant_data='';
	$tid = strtotime(now());

    $merchant_data.="tid=".$tid.'&';
    // $merchant_data.="billing_name=".$_REQUEST['name'].'&';
    // $merchant_data.="billing_email=".$_REQUEST['email'].'&';
    // $merchant_data.="billing_tel=".$_REQUEST['phone'].'&';
    
	foreach (session()->get('data') as $key => $value){
		$merchant_data.=$key.'='.$value.'&';
    }
    $data = $merchant_data;
	// dump($data);
	$encrypted_data=cryptoEncrypt($data,$working_key); // Method for encrypting the data.
    $test_url='https://test.ccavenue.com/transaction/transaction.do?command=initiateTransaction&encRequest='.$encrypted_data.'&access_code='.$access_code;
?>
<iframe src="<?php echo $test_url?>" style="margin: 0 5;" id="paymentFrame" width='700px' height="450" frameborder="0"
    scrolling="No">
</iframe>

<script type="text/javascript" src="{{ asset('iframe/jquery-1.7.2.js') }}"></script>
<script type="text/javascript">
    $(document).ready(function(){
        window.addEventListener('message', function(e) {
            $("#paymentFrame").css("height",e.data['newHeight']+'px');
        }, false);

    });
</script>