<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Jekyll v4.1.1">
    <title>Album example · Bootstrap</title>
	<link rel="stylesheet" href="bootstrap-4.5.3-dist/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<style type="text/css">
		body{
			margin: 0;
			background: rgb(43, 45, 60);
		}
		.card {
		    position: relative;
		    display: -ms-flexbox;
		    display: flex;
		    -ms-flex-direction: column;
		    flex-direction: column;
		    min-width: 0;
		    word-wrap: break-word;
		    background-color: #fff;
		    background-clip: border-box;
		    border: 1px solid rgba(0,0,0,.125);
		    border-radius: 4px;
		}
		.card-body {
		    -ms-flex: 1 1 auto;
		    flex: 1 1 auto;
		    min-height: 1px;
		    padding: 0px;
		}
		.card button.btn-block {
		    height: 55px;
		    padding: 10px 5px 10px 15px;
		    border: 0;
		}
		.padding-x{
			padding-left: 0;
			padding-right: 0;
		}
		.padding-x p{
			margin-top: 2px;
			margin-bottom: 0;
		}
		.padding-x i.fa.fa-angle-right{
			font-size: 22px;
		}

		.WalletCard:hover {
		    border-color: rgb(119, 192, 199);
		    box-shadow: rgba(119, 192, 199, 0.7) 0px 3px 15px 0px;
		}

		.UnlockWallet__background {
		    position: absolute;
		    bottom: -60px;
		    left: -100px;
		    width: 80%;
		    display: flex;
		    align-items: flex-end;
		}

		.UnlockWallet__background img {
		    height: auto;
		    width: 100%;
		    object-fit: cover;
		}
		@media (min-width: 768px){
			.container, .container-lg, .container-md, .container-sm {
			    max-width: 720px;
			}
		}

		@media(max-width: 768px){
			.card img {
			    width: 30px;
			}


			.col-md-4{
				margin-bottom: 15px;
			}
		}
	</style>
</head>
<body>
	<section class="py-5">
		<div class="container">
			<div class="row mb-4">
				<div class="col-sm-12 text-center">
					<h1 class="text-white">Welcome to Aave</h1>
					<p class="text-white">Connect your wallet and jump into DeFi</p>
				</div>
			</div>	
			<div class="row mb-4">
				<div class="col-md-4 col-sm-12 col-12">
					<div class="card WalletCard">
						<div class="card-body">
							<button class="btn-block" onclick="location.href='home.php';">
								<div class="row mx-0">
									<div class="col-md-2 col-sm-2 col-2 padding-x">
										<img src="images/portisIcon.8ea61b1a.svg">
									</div>
									<div class="col-md-8 col-sm-8 col-8 padding-x">
										<p>Brows Wallet</p>
									</div>
									<div class="col-md-2 col-sm-2 col-2 padding-x text-right">
										<i class="fa fa-angle-right" aria-hidden="true"></i>
									</div>
								</div>
							</button>
						</div>
					</div>
				</div>
				<div class="col-md-4 col-sm-12 col-12">
					<div class="card WalletCard">
						<div class="card-body">
							<button class="btn-block">
								<div class="row mx-0">
									<div class="col-md-2 col-sm-2 col-2 padding-x">
										<img src="images/portisIcon.8ea61b1a.svg">
									</div>
									<div class="col-md-8 col-sm-8 col-8 padding-x">
										<p>portis</p>
									</div>
									<div class="col-md-2 col-sm-2 col-2 padding-x text-right">
										<i class="fa fa-angle-right" aria-hidden="true"></i>
									</div>
								</div>
							</button>
						</div>
					</div>
				</div>
				<div class="col-md-4 col-sm-12 col-12">
					<div class="card WalletCard">
						<div class="card-body">
							<button class="btn-block">
								<div class="row mx-0">
									<div class="col-md-2 col-sm-2 col-2 padding-x">
										<img src="images/ledgerIcon.7d7f9752.svg">
									</div>
									<div class="col-md-8 col-sm-8 col-8 padding-x">
										<p>Ledger</p>
									</div>
									<div class="col-md-2 col-sm-2 col-2 padding-x text-right">
										<i class="fa fa-angle-right" aria-hidden="true"></i>
									</div>
								</div>
							</button>
						</div>
					</div>
				</div> 
			</div>
			<div class="row mb-4">
				<div class="col-md-4 col-sm-12 col-12">
					<div class="card WalletCard">
						<div class="card-body">
							<button class="btn-block">
								<div class="row mx-0">
									<div class="col-md-2 col-sm-2 col-2 padding-x">
										<img src="images/MEWIcon.8156a28a.svg">
									</div>
									<div class="col-md-8 col-sm-8 col-8 padding-x">
										<p>New Wallet</p>
									</div>
									<div class="col-md-2 col-sm-2 col-2 padding-x text-right">
										<i class="fa fa-angle-right" aria-hidden="true"></i>
									</div>
								</div>
							</button>
						</div>
					</div>
				</div>
				<div class="col-md-4 col-sm-12 col-12">
					<div class="card WalletCard">
						<div class="card-body">
							<button class="btn-block">
								<div class="row mx-0">
									<div class="col-md-2 col-sm-2 col-2 padding-x">
										<img src="images/coinbaseIcon.16d19c06.svg">
									</div>
									<div class="col-md-8 col-sm-8 col-8 padding-x">
										<p>Coin Base</p>
									</div>
									<div class="col-md-2 col-sm-2 col-2 padding-x text-right">
										<i class="fa fa-angle-right" aria-hidden="true"></i>
									</div>
								</div>
							</button>
						</div>
					</div>
				</div>
				<div class="col-md-4 col-sm-12 col-12">
					<div class="card WalletCard">
						<div class="card-body">
							<button class="btn-block">
								<div class="row mx-0">
									<div class="col-md-2 col-sm-2 col-2 padding-x">
										<img src="images/authereumIcon.bc298221.svg">
									</div>
									<div class="col-md-8 col-sm-8 col-8 padding-x">
										<p>Authereum</p>
									</div>
									<div class="col-md-2 col-sm-2 col-2 padding-x text-right">
										<i class="fa fa-angle-right" aria-hidden="true"></i>
									</div>
								</div>
							</button>
						</div>
					</div>
				</div> 
			</div>
			<div class="row mb-4">
				<div class="col-md-4 col-sm-12 col-12">
					<div class="card WalletCard">
						<div class="card-body">
							<button class="btn-block">
								<div class="row mx-0">
									<div class="col-md-2 col-sm-2 col-2 padding-x">
										<img src="images/walletConnectIcon.681085e5.svg">
									</div>
									<div class="col-md-8 col-sm-8 col-8 padding-x">
										<p>Wallet Connect</p>
									</div>
									<div class="col-md-2 col-sm-2 col-2 padding-x text-right">
										<i class="fa fa-angle-right" aria-hidden="true"></i>
									</div>
								</div>
							</button>
						</div>
					</div>
				</div>
				<div class="col-md-4 col-sm-12 col-12">
					<div class="card WalletCard">
						<div class="card-body">
							<button class="btn-block">
								<div class="row mx-0">
									<div class="col-md-2 col-sm-2 col-2 padding-x">
										<img src="images/torusIcon.ecd1b942.svg">
									</div>
									<div class="col-md-8 col-sm-8 col-8 padding-x">
										<p>Torus</p>
									</div>
									<div class="col-md-2 col-sm-2 col-2 padding-x text-right">
										<i class="fa fa-angle-right" aria-hidden="true"></i>
									</div>
								</div>
							</button>
						</div>
					</div>
				</div>
				<div class="col-md-4 col-sm-12 col-12">
					<div class="card WalletCard">
						<div class="card-body">
							<button class="btn-block">
								<div class="row mx-0">
									<div class="col-md-2 col-sm-2 col-2 padding-x">
										<img src="images/formaticIcon.b0738893.svg">
									</div>
									<div class="col-md-8 col-sm-8 col-8 padding-x">
										<p>Fortmatic</p>
									</div>
									<div class="col-md-2 col-sm-2 col-2 padding-x text-right">
										<i class="fa fa-angle-right" aria-hidden="true"></i>
									</div>
								</div>
							</button>
						</div>
					</div>
				</div> 
			</div>
		</div>
	</section>
	<section>
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<p class="jsx-298906993 text-center text-white"><b class="jsx-298906993">Disclaimer:</b> Wallets are provided by External Providers and by selecting you agree to Terms of those Providers. Your access to the wallet might be reliant on the External Provider being operational.</p>
				</div>
			</div>
		</div>
	</section>
	<div class="jsx-298906993 UnlockWallet__background"><img src="images/bgDark.66e06239.svg" alt="" class="jsx-298906993"></div>
	<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js"></script>
	<script src="bootstrap-4.5.3-dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>