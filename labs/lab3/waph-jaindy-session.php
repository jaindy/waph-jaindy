<?php
session_start();
if(isset($_session['views'])){
$_session['views']=$_session['views']+1;

}else{

$_session['views']=1;
}
echo "visites ". $_session['views']. "times"

?>

