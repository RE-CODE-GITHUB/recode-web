<?php
  $title = $_POST["title"];
  $text = $_POST["text"];

  $cmd = "python send_mail.py {$title} {$text}";
  echo exec($cmd);

