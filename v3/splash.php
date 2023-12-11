<?php ?>

<style>
  body {
    background-color: #f9f5ec;
    overflow: hidden;
  }
  .body {
    background-color: #f9f5ec;
    width: 100%;
    height: 95vh;
    display: flex;
    justify-content: center;
    align-items: center;
  }
  .myItem {
    display: flex;
    flex-direction: column;
    justify-content: center;
    text-align: center;
  }
  .myItem span {
    font-size: 50px;
    margin-top: 10px;
  }
</style>
<div class="container-fluid body">
  <div class="myItem">
    <img src="./img/logo2.png" alt="" />
    <span>loading ...</span>
  </div>
</div>


<?php require_once('footer.php'); ?>
