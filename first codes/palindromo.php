<?PHP 
function isPalindromo($word){
	$reverted = implode(array_reverse(str_split($word)));
	if (strcasecmp($word, $reverted) == 0){
		return "yes";
	}else{
		return "no";
	}
}
echo isPalindromo("cascata")//=> no
echo isPalindromo("natan")//=> yes
?>