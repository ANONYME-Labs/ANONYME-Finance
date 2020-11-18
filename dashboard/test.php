<!DOCTYPE html>
<?php include('config.php'); ?>
<html>
<head>
  <title>First DApp</title>
</head>
<body>

  <h1>First DApp</h1>
  <label>FirstContract.getInteger</label>
  <br />
  <label id="myLabel"></label>

</body>
<script src="https://cdn.jsdelivr.net/npm/web3@1.2.6/dist/web3.min.js"></script>
<script>

const web3 = new Web3('http://localhost:8545');

const myContractAddress = "<?=$mainContractAddress; ?>";
const myAbi = <?=$mainContractABI; ?>;
const myContract = new web3.eth.Contract(myAbi, myContractAddress);

const htmlLabel = document.getElementById('myLabel');

myContract.methods.getInteger().call().then((jsonRpcResult) => {
  htmlLabel.innerHTML = jsonRpcResult;
});

</script>
</html>