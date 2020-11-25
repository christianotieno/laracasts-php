<?php

function dd($data) {
  die(var_dump($data));
}

function elibility($age) {
  if ($age <= 15) {
    echo "Not eligible";
  } else {
    echo "Eligible";
  }
}