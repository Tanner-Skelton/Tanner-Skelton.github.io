<?php 
session_start();
include("../common/document_head.html");
?>
<head>
    <script src="../js/loginFormValidate.js"></script>
</head>
<div class="row">
    <div class="row">
        <h4> LOGIN </h4>
    </div>
    <form class="col s12" 
            id="loginForm"
            onsubmit="return loginFormValidate();"
            action="loginFormProcess.php"
            method="post">
        <div class="row">
        <div class="input-field col s6">
          <input id="email" name="loginEmail" type="text" class="validate">
          <label for="email">Email</label>
        </div>
      <div class="row">
        <div class="input-field col s12">
          <input id="password" type="password" name="loginPassword" class="validate">
          <label for="password">Password</label>
        </div>
      </div>
      <div class="row">
        <input class="btn waves-effect waves-light" type="submit">
        </input>
      </div>
    </form>
</div>

</html>