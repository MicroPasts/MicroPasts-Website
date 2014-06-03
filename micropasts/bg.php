<?php
  $bg = array(
      'http://micropasts.org/wp-content/uploads/2014/05/coins.jpg',
      'http://micropasts.org/wp-content/uploads/2014/05/terracotta5.jpeg',
      'http://micropasts.org/wp-content/uploads/2014/05/hoard.jpg',
      'http://micropasts.org/wp-content/uploads/2014/05/easter.jpeg',
      'http://micropasts.org/wp-content/uploads/2014/05/testaccio.jpg'
      );
  $i = rand(0, count($bg)-1);
  $selectedBg = $bg[$i];