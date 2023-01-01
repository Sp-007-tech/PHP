<!--
(1)PHP switch statement is used to execute one statement with multiple conditions.
(2)syntax::: 
                switch(expression){
                    case value1:
                        ctbe;
                    break;
                    case value2:
                        ctbe;
                    break;
                    .
                    .
                    .
                    .
                    default:
                }

(4)Following are some important point about switch statement:
    (a)There are only one "default" for single switch statement.If you decalre more than one default you will get an fatel error.

    (b)Each case have "break" statement.

    (c)The break is an optional part,if you do not use it the all the statement will be executd after the match found.

    (d)We can use semicolon(;) instead of (:);
 -->



 <?php

 $num = 69;

 switch ($num){
     
    case  1:
          echo "The no. is 69"
    break;
     
    case  10:
        echo "The no. is 69"
    break;

    case  69:
       echo "The no. is 69"
    break;
     
    case  67:
       echo "The no. is 69"
    break;

default:
echo "Match not found."
  
 }

 ?>
