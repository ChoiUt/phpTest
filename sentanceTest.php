<?php

		$sentance = "In 1066 William the Conqueror, the Duke of Normandy (part of modern France), invaded and conquered England. The new conquerors (called the Normans) brought with them a kind of French, which became the language of the Royal Court, and the ruling and business classes. For a period there was a kind of linguistic class division, where the lower classes spoke English and the upper classes spoke French. In the 14th century English became dominant in Britain again, but with many French words added. This language is called Middle English. It was the language of the great poet Chaucer (c1340-1400), but it would still be difficult for native English speakers to understand today.";

		$word = "english";				
		echo $sentance;
		echo "</br>";
		echo "</br>";
		
		$a=mb_split("\.",$sentance);
		for($j=0; $j<count($a); $j++){
				SelectSentance($a[$j], $word);
		}
		
		function SelectSentance($sentance, $word){
			
			if(preg_match("/".$word."/i", $sentance))
				echo $sentance."."."</br>"."</br>";
			//else 
				//echo "can not be found."."</br>";	
	}
	
	

?>


<?php  
//���o���w��}�����e�A���x�s��text  
$text=file_get_contents('http://www.ipm.edu.mo/zh/highlights.php');  
  
//���o�Ĥ@��img���ҡA���x�s�ܰ}�Cmatch�]regex�y�k�P�W�z�P�q�^  
preg_match_all('#<img[^>]*>#i', $text, $imgTags);  
  
//�L�Xmatch
for ($i = 1; $i < count($imgTags[0]); $i++) {

	preg_match('/src="([^"]+)/i',$imgTags[0][$i], $imgage);
	
	$origImageSrc[]= "<img src='http://www.ipm.edu.mo/".replaceString($imgTags[0][$i]);
	print_r($origImageSrc);

	 function replaceString($text){
		 $ok= $text;
		 $ok=str_ireplace( "<img src='","", $ok)."</br>";
		 $ok=str_ireplace( "<img src=","", $ok)."</br>";	 
		 return $ok;
 }
?>  


 function groupCheck(s){
   var x=/^(\{(\{(\{\}|\(\)|\[\])*\}|\((\{\}|\(\)|\[\])*\)|\[(\{\}|\(\)|\[\])*\])*\})*(\[(\{(\{\}|\(\)|\[\])*\}|\((\{\}|\(\)|\[\])*\)|\[(\{\}|\(\)|\[\])*\])*\])*(\((\{(\{\}|\(\)|\[\])*\}|\((\{\}|\(\)|\[\])*\)|\[(\{\}|\(\)|\[\])*\])*\))*$/gi;
   if(s.length%2==1) 
     return false;
  else{
   if(x.test(s)){
     return true;
     }else{
     return false;
     }
  }
 }