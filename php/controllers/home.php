<?php

namespace controller\home;

function get()
{
  require_once SOURCE_BASE . 'views/home.php';
  // echo 'HOME > GETが送信されました。';
}

function post()
{
  echo 'HOME > POSTが送信されました。';
}
