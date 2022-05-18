encodedStr("have a nice day");

function encodedStr($str) {
	echo 'Input Text = '.$str.'<br><br>';
	$str = str_replace(' ', '', $str);
	echo 'Input Text without space = '.$str.'<br><br>';
	$len = strlen($str);
	$key = 0;
	$rows = floor(sqrt($len));
	$cols = ceil(sqrt($len));
	$sttr = '';

	$myArr = array_fill(0, $rows,array_fill(0, $cols, ""));

	for ($i = 0; $i < $rows; $i++)
	{
	    for ($j = 0; $j < $cols; $j++)
	    {
	        $myArr[$i][$j] = $str[$key];
	        $key++;
	    }
	}

	for ($i = 0; $i <= $rows; $i++)
	{
	    for ($j = 0; $j < $cols; $j++)
	    {
	    	$Arr = implode('',array_column($myArr, $i,$j));
	    	break;
	    }
	    $sttr .= $Arr.' ';
	}

	echo 'Output Text = '.$sttr;		
}
