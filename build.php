<?php

if ( file_put_contents(
       __DIR__ . '/packages.json',
       require ( __DIR__ . '/packages.php' )
     )
   ) {
  echo "Done!\n";
}
