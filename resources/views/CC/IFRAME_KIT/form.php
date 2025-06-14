
<form method="get" id="payment" name="customerData" action="/teleconsultation/test/payment">
    @csrf
    <table width="40%" height="100" border='1' align="center"><caption><font size="4" color="blue"><b>Integration Kit</b></font></caption></table>
    <table width="40%" height="100" border='1' align="center">
        <td>Parameter Name:</td><td>Parameter Value:</td>
        <td colspan="2"> Compulsory information</td>
        <td>TID	:</td><td><input type="text" value="{{ strtotime(now()) }}" name="tid" id="tid" readonly /></td>
        <td>Merchant Id	:</td><td><input type="text" name="merchant_id" value="273318"/></td>
        <td>Order Id	:</td><td><input type="text" name="order_id" value="123654789"/></td>
        <td>Amount	:</td><td><input type="text" name="amount" value="1.00"/></td>
        <td>Currency	:</td><td><input type="text" name="currency" value="INR"/></td>
        <td>Redirect URL	:</td><td><input type="text" name="redirect_url" value="{{ config('app.url') }}/teleconsultation/response/></td>
			 		<td>Cancel URL	:</td><td><input type="text" name="cancel_url" value="{{ config('app.url')}}/teleconsultation/response"/></td>
        <td>Language	:</td><td><input type="text" name="language" value="EN"/></td>
        <td colspan="2">Billing information(optional):</td>
        <td>Billing Name	:</td><td><input type="text" name="billing_name" value="Charli"/></td>
        <td>Billing Address	:</td><td><input type="text" name="billing_address" value="Room no 1101, near Railway station Ambad"/></td>
        <td>Billing City	:</td><td><input type="text" name="billing_city" value="Indore"/></td>
        <td>Billing State	:</td><td><input type="text" name="billing_state" value="MP"/></td>
        <td>Billing Zip	:</td><td><input type="text" name="billing_zip" value="425001"/></td>
        <td>Billing Country	:</td><td><input type="text" name="billing_country" value="India"/></td>
        <td>Billing Tel	:</td><td><input type="text" name="billing_tel" value="9876543210"/></td>
        <td>Billing Email	:</td><td><input type="text" name="billing_email" value="test@test.com"/></td>
        <td colspan="2">Shipping information(optional)</td>
        <td>Shipping Name	:</td><td><input type="text" name="delivery_name" value="Chaplin"/></td>
        <td>Shipping Address	:</td><td><input type="text" name="delivery_address" value="room no.701 near bus stand"/></td>
        <td>shipping City	:</td><td><input type="text" name="delivery_city" value="Hyderabad"/></td>
        <td>shipping State	:</td><td><input type="text" name="delivery_state" value="Andhra"/></td>
        <td>shipping Zip	:</td><td><input type="text" name="delivery_zip" value="425001"/></td>
        <td>shipping Country	:</td><td><input type="text" name="delivery_country" value="India"/></td>
        <td>Shipping Tel	:</td><td><input type="text" name="delivery_tel" value="9876543210"/></td>
        <td>Merchant Param1	:</td><td><input type="text" name="merchant_param1" value="additional Info."/></td>
        <td>Merchant Param2	:</td><td><input type="text" name="merchant_param2" value="additional Info."/></td>
        <td>Merchant Param3	:</td><td><input type="text" name="merchant_param3" value="additional Info."/></td>
        <td>Merchant Param4	:</td><td><input type="text" name="merchant_param4" value="additional Info."/></td>
        <td>Merchant Param5	:</td><td><input type="text" name="merchant_param5" value="additional Info."/></td>
        <td>Promo Code	:</td><td><input type="text" name="promo_code" value=""/></td>
        <td>Vault Info.	:</td><td><input type="text" name="customer_identifier" value=""/></td>
        <td>Integration Type	:</td><td><input type="text" name="integration_type" value="iframe_normal"/></td>
        <<INPUT TYPE="submit" value="CheckOut"></td>
</form>
<?php

return "<script>
        document.writeln($('#payment').serialize());
</script>";
?>
