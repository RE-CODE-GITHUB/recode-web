<?php
  $text = $_POST["text"];
  $title = $_POST["title"];
  $userMail = $_POST["user_mail"];

  $cmd = "python send_mail.py {$userMail} {$title} {$text}";
  echo exec($cmd);

