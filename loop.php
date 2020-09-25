<?php

// no 1

function nambersatu()
{
    for($b=1; $b<=10; $b++ )
    {
    if($b>3 && $b<8)
    {
        continue;
    }
    echo $b,"\t";
    }
}nambersatu();

echo PHP_EOL;
// no 2

function namberdua()
{
    for($b=5; $b>=1; $b-- )
    {
    if( $b<3)
    {
        echo "*\t";
        continue;
    }
    echo $b,"\t";
    }

}namberdua();

echo PHP_EOL;

// no 3

function nambertiga()
{
    for($b=1; $b<=4; $b++ )
    {
    if(!$b %2==0)
    {
        echo $b,"a\t";
    }else
    {
        echo $b,"b\t";
    }
    
    }
}nambertiga();

echo PHP_EOL;

// no 4

function namberempat()
{
    for($a=1; $a<=7; $a++)
    {
    if($a>=4 && $a<=6)
    {
        echo "A\t";
        continue;
    }
    echo $a,"\t";
    }
}namberempat();

echo PHP_EOL;

// no 4
 


//echo PHP_EOL;

function namberlima()
{
    for($a=4; $a>=0; $a--)
    {
    
     if($a==2 || $a==0 )
     {
         echo "A"."\t";
         continue;
     }
    echo $a."\t";
    }
}namberlima();


 echo PHP_EOL;

function namberenam()
{
    for($a=0; $a<=4; $a++)
{
    
     if($a==0 || $a==1 )
     {
         echo "A"."\t";
         continue;
     }
    echo $a."\t";
}
}

for($a=0; $a<=4; $a++)
{
    
     if($a==0 || $a==1 )
     {
         echo "A"."\t";
         continue;
     }
    echo $a."\t";
}

// echo PHP_EOL;


// function namberEmpat()
// {
//     $b=1;
//     while($b<=7)
//     {
//         if($b>=4 && $b<=6)
//         {
//             echo "A  ";
//         }else{
//             echo $b," ";
//         }
//         $b++;
//     }
// }
// namberEmpat();




