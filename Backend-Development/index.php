<?php 
if(isset($_GET['uname'])) {
    $username=$_GET['uname'];
}
else {
    $username="Default user";
}

//single line comments

/* 
multiple
line 
comments
*/

//storage
$x=23434;
$asdsds_42423423;
$_dfssd;
$X="Values";

//input
$a = 'text based data';  //string
$b = 423234;             //integer
$ba = 3432423.234234;    //float
$c = '24234234';         //string
$d = true;               //boolean
$e = false;

$arr = [234234,"ffsdfsd",true,24.43434];                //index value array
$arr2= array(234234,"ffsdfsd",true,24.43434);           //index value array
$arr3 = ['stud_id'=>234234,'stud_name'=>"ffsdfsd",'enrolled'=>true,'marks'=>24.43434];   //key-value pair array

//output
echo "Hello World";     //returns void
$return - print("Hello World");   //returns int(1)

echo "String1","String2","...";
$x = "String1"."String2"."...";
print($x);

//operators
echo 'Arithmetic ops=>','+','-','*','/','%','++','--';   //arithmetic operators : int

echo 'Comparison ops=>','>','<','>=','<=','==','===','!=';   //arithmetic operators : boolean
$x=123;$y='123';
$x==$y;  //true
$x===$y; //false

echo 'logical ops=>','&&','||','!';   //logical operators : boolean
$x==$y && $x===$y;
$x='dollar X';
if($x) {}  //true
if(!$x) {} //false

echo 'Assignment ops=>','=','+=','-=','*=','/=','%=';   //assignment operators
$op = 10;
$op=$op+10;   $op+=10;
$op=$op%10;   $op%=10;

echo 'ternary/functional operator';
($x>10) ? print('true statement') : print('false statement');

//branching
$age=18;

if($age>=18) {
    print("Eligible to drive");
}

if($age>=18) {
    print("Eligible to drive");
} 
else {
    print("Not eligible to drive");
}

if($age>=18 && $age<=65) {
    print("Eligible to drive");
}
else if($age>=16 && $age<18) {
    print("Eligible to get learners' license");
}
else if($age>65) {
    print("Apply for retest");
}
else {
    print("Not eligible to drive");
}


$grade = 'B+';
switch($grade) {
    case 'A+':
        echo 'Marks between 95 to 100';
    case 'A':
        echo 'Marks between 95 to 100';
    case 'B+':
        echo 'Marks between 95 to 100';
    case 'F':
        echo "Marks between 0 and 40";
    default:
        echo "Please check grade value";
}

//looping - while , for and do...while loop
$i=000;
while($i<=100) {
    if($i%2==true) {
        echo $i;
    }
    $i++;
}

for($i=0;$i<=100;$i++) {
    if($i%2==true) {
        echo $i;
    }
}

$i=1000;
do {
    if($i%2==true) {
        echo $i;
    }
    $i++;
}
while($i<=100);


$arr = ['stud_id'=>234234,'stud_name'=>"ffsdfsd",'enrolled'=>true,'marks'=>3454543.34534];
foreach($arr as $value) {
    echo $value;
}

echo "<Br><br>";

//functions

print("123");            //in-built function
function add($a,$b) {    //user-defined functions
    return $a+$b;
}

echo add(23,45);     //function call
echo add(2,4); 

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    Hello World. My name is <?php echo $username ?>

    <form method="post" action="welcome.php">
        <input type="text" name="uname" placeholder="enter username" />
        <input type="password" name="pwd" placeholder="enter password" />
        <button type="submit">Submit</button>
    </form>
</body>
</html>