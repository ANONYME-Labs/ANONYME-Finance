<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="x-ua-compatible" content="ie=edge" />
        <meta name="viewport" content="user-scalable=no,initial-scale=1,maximum-scale=1,minimum-scale=1,width=device-width,height=device-height" />
        <meta property="og:title" content="Compound | Dashboard" />
        <meta property="og:description" content="A simple, full featured dashboard, from the developers of Compound. Supply or borrow assets from the protocol, and participate in community governance." />
        <meta property="og:image" content="images/meta-tag.png" />
        <meta property="og:url" content="" />
        <meta name="twitter:card" content="summary_large_image" />
        <link rel="apple-touch-icon" sizes="192x192" href="<?php echo $siteURL."/".$siteFavicon; ?>" />
        
        <link rel="manifest" href="js/manifest.json" />
        <link rel="shortcut icon" href="images/favicon.ico" />
        <title><?php echo $siteName; ?></title>
        <meta name="description" content="A simple, full featured dashboard, from the developers of Compound. Supply or borrow assets from the protocol, and participate in community governance." />
        <link href="css/dapp.e295ff51.chunk.css" rel="stylesheet" />
    </head>
    <body>
        <noscript>
            You need to enable JavaScript to run this app. The Compound dApp is a distributed application to interact with the Compound Protocol on the Ethereum blockchain. This app requires JavaScript to run. If you are interested in
            learning more about Compound, please visit <a href="<?php echo $siteURL; ?>"><?php echo $siteURL; ?></a>.
        </noscript>
        <div id="main">
            <div id="borrow-interface-root">
                <header class="dapp">
                    <div class="container-large">
                        <div class="row align-middle">
                            <div class="col-xs-3"><a class="" rel="external" href="<?php echo $siteURL; ?>"><img width="95px" src="<?php echo $siteURL.''.$siteLogo; ?>" alt="" /></a></div>
                            <div class="col-xs-6 mobile-hide text-center links"><a class="active" href="/">Dashboard</a><a class="" href="vote.php">Vote</a></div>
                           <div class="col-xs-9 col-sm-3 text-right actions"><a id="connect-wallet" class="dapp button hollow mobile-hide">Connect Wallet</a>
                            <div class="col-xs-9 mobile-links"><a class="dapp button hollow mobile-links__link" href="vote.php">Vote</a></div>
                        </div>
                    </div>
                </header>