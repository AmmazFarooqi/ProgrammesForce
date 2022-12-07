<?php
//Class Of Calculator task dated 1-12-22
class Calculator{
    //variables are defined here
    public $First_value, $Second_value, $operator;
    //Constructor is initialising 2 values and 1 operator for calculator
    public function __construct($First_value, $Second_value, $operator)
    {
        $this->First_value = $First_value;
        $this->Second_value = $Second_value;
        $this->operator = $operator;
    }
public function calculate_res()
{
    switch ($this->operator) {
        case '+':
            echo $this->First_value + $this->Second_value;
        break;
        case '*':
            echo $this->First_value * $this->Second_value;
        break;
        case '-':
            echo $this->First_value - $this->Second_value;
        break;
        case '/':
            if($this->Second_value==0){
                echo -1;
            }
            else{
                echo $this->First_value * $this->Second_value;
            }
        break;
    default:
        echo 0;
    }
        
}
}
//obejct of class &
// Calling calculate_res fuction
$calculator=new calculator(4,0,'/');
$calculator->calculate_res();

?>
