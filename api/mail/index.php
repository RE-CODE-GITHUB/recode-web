<?php
  $text = $_POST["text"];
  $title = $_POST["title"];

  $cmd = "python send_mail.py {$title} {$text}";
  echo exec($cmd);

