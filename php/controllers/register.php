<?php

namespace controller\register;

function get()
{
  echo 'getが送信されました。';
  require_once SOURCE_BASE . 'views/register.php';
}

function post()
{
  echo 'postが送信されました。';
}
