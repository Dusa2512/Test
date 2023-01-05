<?php

class Cars
{

      function xinchao()
      {
            return (true);


      }

      function Hello()
      {
            return (true);

      }


}
$the_method = get_class_methods("Cars");

foreach ($the_method as $method)
      echo $method."<br>";


?>