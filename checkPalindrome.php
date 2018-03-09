/* https://codefights.com/arcade/intro/level-1/s5PbmwxfECC52PWyQ */

function checkPalindrome($inputString) {
$output = '';
    $x = str_split($inputString);
    $y = array_reverse($x);
    for($i=0;$i<count($x);$i++){
        if($x[$i] == $y[$i]){
            $output =  true;
        }else{
            $output =  false;
            break;
        }
    }
    return $output;
}
