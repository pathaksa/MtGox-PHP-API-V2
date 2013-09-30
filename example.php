<?php
/*
 * MtGox PHP API Client v2
 *
 * This is an example file to demonstrate the MtGox API v2 methods
 * which is created by Pathaksa Tongpitak and can be downloaded for free on Github:
 *
 * https://github.com/pathaksa/MtGox-PHP-API-V2
 *
 * This PHP Class is open-source and may be freely distributed.
 *
 * Donations are welcome
 * BTC: 1ABoNpvdm1e6MEAJe115bCy394ZsDgi8NJ
 *
 * @package MtGox PHP API Client v2
 * @author Pathaksa Tongpitak
 * @version 0.1
 * @access public
 * @date 30th september 2013
 * @license http://www.opensource.org/licenses/LGPL-3.0
 */

require_once("MtGoxClient.php");

// Replace the values with your real API Key and Secret which can be obtained from https://www.mtgox.com/security
$mtGoxClient = new MtGoxClient(
        "YOUR_API_KEY",
        "YOUR_API_SECRET"
    );

$result = $mtGoxClient->getInfo();
#$result = $mtGoxClient->getWalletHistory();
#$result = $mtGoxClient->setPair('BTCEUR')->getCurrency();
#$result = $mtGoxClient->orderAdd('bid',1000000,1340293 );
#$result = $mtGoxClient->orderCancel('4d484979-6237-4e66-b76d-4e8085a8b8be');
#$result = $mtGoxClient->getDepositAddress();
#$result = $mtGoxClient->generateDepositAddress();
#$result = $mtGoxClient->getOrders();
?>

<pre>
    <?php print_r($result);?>
</pre>