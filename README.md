MtGox-PHP-API-V2
================

MtGox Client for API v2

This repository contains the MtGox Client for API v2
and an example.php to demonstrate the MtGox API v2 methods.

This PHP Class is open-source and may be freely distributed.

Donations are welcome
BTC: 1ABoNpvdm1e6MEAJe115bCy394ZsDgi8NJ


Best regards,

Pathaksa Tongpitak


API Methods
================
* MtGoxClient::getInfo()
* MtGoxClient::getWalletHistory()
* MtGoxClient::setPair('BTCEUR')->getCurrency()
* MtGoxClient::orderAdd('bid',1000000,1340293 )
* MtGoxClient::orderCancel('4d484979-6237-4e66-b76d-4e8085a8b8be')
* MtGoxClient::getDepositAddress($description = null, $ipn = null)
* MtGoxClient::generateDepositAddress($account = '')
* MtGoxClient::getOrders()
* MtGoxClient::getTicker()
* MtGoxClient::getCurrency()
* MtGoxClient::orderQuote($type = 'ask', $amount = '100000000')
* MtGoxClient::orderBuy($amount = 0.0001, $price)
* MtGoxClient::orderSell($amount = 0.0001, $price)
* MtGoxClient::orderAdd($type, $amount = 0.0001, $price)
* MtGoxClient::orderCancel($orderId)
* MtGoxClient::generateDepositAddress($account)
* MtGoxClient::getDepositAddress($description = null, $ipn = null)
* MtGoxClient::getWalletHistory($currency = 'BTC', $page = 1)

Internal Methods
================
* MtGoxClient::setPair($pair = 'BTCUSD')
* MtGoxClient::checkRequired()
* MtGoxClient::error()