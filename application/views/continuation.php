<?php
if (!isset($rows) || !isset($pages))
{
	$rows = '29';
	$pages = '1';
}
for ($page=0; $page< $pages; $page++)
{
	echo '

<table id="page' . $page . '">
<tr id="row1"><td id="ab12 colspan="2" rowspan="2">CONTINUATION SHEET</td><td id="c1"></td><td id="d1"></td><td id="e1"></td><td id="f1"></td><td id="g1"></td><td id="h1"></td><td id="i1"></td><td id="j1"></td><td id="k1"></td><td id="l1"></td></tr>
<tr id="row2"><td id="c2"></td><td id="d2"></td><td id="e2"></td><td id="f2"></td><td id="g2">Page 2 Of<td id="h2"><input type=text name="h2" id="h2" length="3"></td><td id="ij2" colspan="2">Pages</td><td id="k2"></td><td id="l2"></td></tr>
<tr id="row3"><td id="ab3" colspan="2">ATTACHMENT TO PAY APPLICATION</td><td id="c3"></td><td id="d3"></td><td id="e3"></td><td id="fgh3" colspan="3">APPLICATION NUMBER:</td><td id="i3"></td><td id="j3"></td><td id="k3"></td><td id="l3"></td></tr>
<tr id="row4"><td id="a4"></td><td id="b4">PROJECT:</td><td id="c4"></td><td id="d4"></td><td id="e4"></td><td id="fgh4" colspan="3">APPLICATION DATE:</td><td id="i4"><input type=text name="i4"></td><td id="j4"></td><td id="k4"></td><td id="l4"></td></tr>
<tr id="row5"><td id="a5"></td><td id="b5"></td><td id="c5"></td><td id="d5"></td><td id="e5"></td><td id="fgh5" colspan="3">PERIOD TO:</td><td id="i5"></td><td id="j5"></td><td id="k5"></td><td id="l5"></td></tr>
<tr id="row6"><td id="a6"></td><td id="b6"></td><td id="c6"></td><td id="d6"></td><td id="e6"></td><td id="fgh6" colspan="3">ARCHITECT\'S PROJECT NO:</td><td id="i6"></td><td id="j6"></td><td id="k6"></td><td id="l6"></td></tr>
<tr id="row7"><td id="a7"></td><td id="b7"></td><td id="c7"></td><td id="d7"></td><td id="e7"></td><td id="fgh7" colspan="3"></td><td id="i7"></td><td id="j7"></td><td id="k7"></td><td id="l7"></td></tr>
<tr id="row8"><td id="a8">A</td><td id="b8">B</td><td id="c8">C</td><td id="d8">D</td><td id="e8">E</td><td id="f8">F</td><td id="gh8" colspan="2">G</td><td id="i8">H</td><td id="j8">I</td><td id="k8"></td><td id="l8">J</td></tr>
<tr id="row9"><td id="a9">Item</td><td id="b9">Description of Work</td><td id="c9">Scheduled</td><td id="de9" colspan="2">Work Completed</td><td id="f9">Materials</td><td id="g9" >Total</td><td id="h9">%<td id="i9">Balance</td><td id="j9">Retainage</td><td id="k9"></td><td id="l9"></td></tr>
<tr id="row10"><td id="a10">No.</td><td id="b10"></td><td id="c10">Value</td><td id="d10">From Previous</td><td id="e10">This Period</td><td id="f10">Presently</td><td id="g10" >Completed</td><td id="h10">(G/C)<td id="i10">To Finish</td><td id="j1-">(If Variable</td><td id="k10"></td><td id="l10">Item</td></tr>
<tr id="row11"><td id="a11"></td><td id="b11"></td><td id="c11"></td><td id="d11">Application</td><td id="e11"></td><td id="f11">Stored</td><td id="g11" >And Stored</td><td id="h11"><td id="i11">)C - G)</td><td id="j11">Rate)</td><td id="k11"></td><td id="l11">Variable</td></tr>
<tr id="row12"><td id="a12"></td><td id="b12"></td><td id="c12"></td><td id="d12">(D + E)</td><td id="e12"></td><td id="f12">(Not In</td><td id="g12" >To Date</td><td id="h12"><td id="i12"></td><td id="j12"></td><td id="k12"></td><td id="l12">Retainage</td></tr>
<tr id="row13"><td id="a13"></td><td id="b13"></td><td id="c13"></td><td id="d13"></td><td id="e13"></td><td id="f13">D or E)</td><td id="g13" >(D + E + F)</td><td id="h1e"><td id="i12"></td><td id="j12"></td><td id="k12"></td><td id="l12">Rate (%)</td></tr>';
$collet = array('a' => 'row', 'b' => '<input type=text name="$vallet">', 'c' => '<input type=text name="$vallet">' , 'd' => '$page[$j][$de]', 'e' => '<input type=text name="$vallet">', 'f' => '<input type=text name="$vallet">', 'g' => '$d+$e+$f', 'h' => '$g/$c', 'i' => '$c-$g', 'j' => '$g*$j', 'k' => '$k', 'l' => '<input type=text name="$vallet">');
for ($row=1; $row < $rows; $row++)
{
	$off = 14 + $row;

	echo '<tr id="row' . $off . '">';
	foreach ($collet as $let=>$ev)
	{
		$vallet = $let . $row;
		if (!isset(${$vallet}) && isset(${$ev}))
		{
			${$vallet} = ${$ev};
		}
		else
		{
			${$vallet} = str_replace('$vallet', $vallet, $ev);
		}
		echo '<td id="' . $vallet . '">' . ${$vallet} . '</td>';
	}
	echo '</tr>' . "\r\n";
}

echo '</table>';
}