<?php
$temperature=30;

if ($temperature <= "20"){
echo "its really cold today";
} else if($temperature > 20 && $temperature < 30){ 
 echo "the weather is just perfect";
}else if($temperature >=30 && $temperature <40){
echo "its so hot today";
} else {
echo "am i in the sahara desert";
}

?>