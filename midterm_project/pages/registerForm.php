<?php
session_start();
include("../common/document_head.html");
?>
<head>
    <script src="../js/registrationFormValidate.js"></script>
</head>
<!--#include virtual="../common/document_head.html"-->
 <div class="row">
 <div class="row">
    <h1>Registration Form</h1>
</div>
    <form class="col s12" 
            id="registrationForm"
            onsubmit="return registrationFormValidate();"
            action="registerFormProcess.php"
            method="post">
      <div class="row">
        <div class="input-field col s6">
          <input placeholder="Placeholder" id="first_name" name="firstName" type="text" class="validate">
          <label for="first_name">First Name</label>
        </div>
        <div class="input-field col s6">
          <input id="last_name" type="text" name="lastName" class="validate">
          <label for="last_name">Last Name</label>
        </div>
      </div>
      <div class="row">
        <div class="input-field col s12">
          <input id="email" type="email" name="registrationEmail" class="validate">
          <label for="email">Email</label>
        </div>
      </div>
      <div class="row">
        <div class="input-field col s12">
          <input id="password" type="password" name="registrationPassword" class="validate">
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