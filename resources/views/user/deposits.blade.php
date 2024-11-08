<!DOCTYPE html>
<html lang="en">
<head>
<title>Deposit Fund</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=0.8">
<script src="https://coinremitter.com/cdn-cgi/apps/head/xl8NLMevjgKxZisGOswwU7uaj5M.js"></script><link rel="shortcut icon" href="https://coinremitter.com/assets/img/favicon.ico" type="img/x-icon" />
<link href="https://coinremitter.com/assets/css/all.min.css" rel="stylesheet" type="text/css" />
<link href="https://coinremitter.com/assets/css/tailwind.min.css" rel="stylesheet">
</head>
<body class=" dark:bg-black bg-opacity-50 selection:bg-amber-500" style="font-family: 'Inter', sans-serif;scroll-behavior: smooth;">

<div class="wrapper-main xl:max-w-[750px] md:max-w-[750px] sm:max-w-[750px] max-w-[550px] mx-auto py-10">
<input type="hidden" id="start_time" value="2021-03-07 23:36:55">
<section class="invoice-data-table relative ">
<div class="top-box clearfix mb-2">
</div>
<div class="main-invoice-box border rounded-md">
<div class="main-box-invoice">
<div class="relative awaiting-payment pay-waiting-box" id="awaiting-payment">
<div class="invoice-top p-2 bg-amber-500 rounded-t-md  relative">
<p class="xl:text-lg sm:text-lg text-[16px] font-medium text-white text-center" id="header_div"></i>Awaiting For Payment Confirmation</p>
</div>
<div class="time-box xl:absolute sm:absolute absolute xl:top-[11px] xl:bottom-0 sm:top-[11px] sm:bottom-0 bottom-[7px] right-2 text-base font-semibold text-white">
<span id="hours"></span>
<span id="minutes"></span>
<span id="seconds"></span>
</div>
<div class="invoice-top p-0 bg-slate-600 bg-opacity-20 rounded-t-md absolute inset-0 w-0  xl:h-[45px] sm:h-[45px] h-[64px]" id="process_bar">
</div>
</div>
<div id="payment_status">
</div>
<div class="inner-box px-0 ">
<div class="data-menu clearfix p-4 ">
<div class="left float-left relative">
<img src="https://pngimg.com/uploads/bitcoin/bitcoin_PNG48.png" alt="btc" class="w-[40px] absolute top-1 left-0">
<div class="contain-box pl-14">
<h4 class="text-black font-medium text-lg">DepositFund</h4>
</div>
</div>
</div>

<div class="accordion py-3 px-3" id="accordionExample">
<div class="accordion-item bg-white border border-gray-200">
<h2 class="accordion-header mb-0 relative" id="headingOne">
<button class="relative w-full text-left py-3 px-5 text-base font-semibold bg-white border-0 rounded-lg transition focus:outline-none collapsed" 
type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
Payment Details
<img class="fas fa-chevron-down absolute right-4 top-2/4 -translate-y-2/4" src="https://static.thenounproject.com/png/1123247-200.png" style="width:20px;height:20px;">
</button>
</h2>
<div id="collapseOne" class="accordion-collapse collapse" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
<div class="accordion-body py-3 px-5 border-t">
<div class="list-content">
<ul>
<li class="mb-2">
<span class="inline-block text-black font-semibold text-sm w-32 ">Minimum Deposit:</span>
<span class="xl:inline-block md:inline-block sm:block block text-black font-medium text-sm"> 50 USD
</span>
</li>
<li class="mb-2">
<span class="inline-block text-black font-semibold text-sm w-32 ">Type		:</span>
<span class="xl:inline-block md:inline-block sm:block block text-black font-medium text-sm"> Cryptocurrency
</span>
</li>
<li class="mb-2">
<span class="inline-block text-black font-semibold text-sm w-32 ">Status		:</span>
<span class="xl:inline-block md:inline-block sm:block block text-black font-medium text-sm"> Waiting
</span>
</li>

</ul>
<div class="note-box py-2 text-center">
<p class="text-sm font-medium text-red-500">*<b> Note :</b>Make your deposit with any of the following methods.</p>
</div>
</div>
</div>
</div>
</div>
</div>
<div class="verify-box py-6 xl:px-6 sm:px-6 px-2 bg-gray-200 bg-opacity-40  relative">
<div id="payment_conform">
<div class="qr-code p-4 bg-white border rounded-xl h-[180px] w-[180px] mx-auto mb-5">
<img src="https://cdn-icons-png.flaticon.com/256/2976/2976464.png" alt="qr-code" class="w-[180px] cursor-pointer">
</div>
<div class="amount-box">
<div class="invoice-amount-box rounded-b-xl bg-white p-4 ">
<div class="input-box relative grid border bg-gray-200 bg-opacity-30 rounded-xl px-2 py-1.5">
<div class="pl-2 pr-10">
<label class="text-black mb-0 font-semibold text-lg">BITCOIN:</label>
<input class="pr-2 w-full bg-stone-100 bg-opacity-20 rounded-md outline-none text-sm font-medium text-ellipsis overflow-hidden" value="bc1q35fckwp2xmnv0yef68kc64wsp26jly9k83au40" disabled>
</div>
<i class="text-amber-500 absolute right-4 top-2/4 -translate-y-2/4 cursor-pointer" id="input-copy" data-clipboard-text="bc1q35fckwp2xmnv0yef68kc64wsp26jly9k83au40">copy</i>
</div><br>
<div class="input-box relative grid border bg-gray-200 bg-opacity-30 rounded-xl px-2 py-1.5">
<div class="pl-2 pr-10">
<label class="text-black mb-0 font-semibold text-lg">ETHEREUM:</label>
<input class="pr-2 w-full bg-stone-100 bg-opacity-20 rounded-md outline-none text-sm font-medium text-ellipsis overflow-hidden" value="0x8f8abf6e927febe1062b4a5837b3e855d7db84f2" disabled>
</div>
<i class="text-amber-500 absolute right-4 top-2/4 -translate-y-2/4 cursor-pointer" id="input-copy" data-clipboard-text="0x8f8abf6e927febe1062b4a5837b3e855d7db84f2">copy</i>
</div><br>
<div class="input-box relative grid border bg-gray-200 bg-opacity-30 rounded-xl px-2 py-1.5">
<div class="pl-2 pr-10">
<label class="text-black mb-0 font-semibold text-lg">USDTERC20:</label>
<input class="pr-2 w-full bg-stone-100 bg-opacity-20 rounded-md outline-none text-sm font-medium text-ellipsis overflow-hidden" value="0x8f8abf6e927febe1062b4a5837b3e855d7db84f2" disabled>
</div>
<i class="text-amber-500 absolute right-4 top-2/4 -translate-y-2/4 cursor-pointer" id="input-copy" data-clipboard-text="0x8f8abf6e927febe1062b4a5837b3e855d7db84f2">copy</i>
</div><br>
<div class="input-box relative grid border bg-gray-200 bg-opacity-30 rounded-xl px-2 py-1.5">
<div class="pl-2 pr-10">
<label class="text-black mb-0 font-semibold text-lg">USDTTRC20:</label>
<input class="pr-2 w-full bg-stone-100 bg-opacity-20 rounded-md outline-none text-sm font-medium text-ellipsis overflow-hidden" value="TRJjEr1LCnF5bnXEiz7euusjjs4U2hWiBb" disabled>
</div>
<i class="text-amber-500 absolute right-4 top-2/4 -translate-y-2/4 cursor-pointer" id="input-copy" data-clipboard-text="TRJjEr1LCnF5bnXEiz7euusjjs4U2hWiBb">copy</i>
</div>
<div class="note-box pt-2 text-center">
<p class="text-[14px] font-medium text-red-500 leading-[20px]">Once we confirm your payment and its verified, your account will be funded.</p>
</div>
</div>
</div>
</div>
<div id="payment_history">
<div class="payment-history mt-3">
</div>
<div class="amount-box xl:flex lg:flex md:flex sm:flex block justify-between mt-4 ">
<div class="income-box px-3 py-0 text-center w-full xl:mb-0 sm:mb-0 mb-3  xl:border-r-2 sm:border-r-2 border-r-0 ">
<label class="inline-block text-sm font-medium text-gray-500"></label>
<a href="javascript:window.location.reload(true)"><span class="block text-lg font-bold text-gray-800">CONFIRM</span></a>
</div>
<div class="spending-box px-3 py-0 text-center w-full ">
<label class="inline-block text-sm font-medium text-gray-500"></label>
<a href="javascript:history.back(-1)"><span class="block text-lg font-bold text-gray-800"><span id="pending_amount">BACK TO HOME</span></a>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</section>

</div>

<script type="text/javascript">
         var app_env = 'live';
</script>
<script type="text/javascript" src="https://coinremitter.com/assets/js/index.min.js?cmt=e92a63d2"></script>
<script src="https://coinremitter.com/assets/js/pay_invoice.min.js?cmt=e92a63d2"></script>
<script src="https://coinremitter.com/assets/js/moment.min.js?cmt=e92a63d2"></script>
</body>
</html>