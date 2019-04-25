<style>
table, th, td {
border: 1px solid black;
padding: 1px;
text-align: center;
}
</style>


<?php

function apphead()
{
	$hrow[1] = array('<tr id="row1"><td id="abcdefg1" colspan="7">APPLICATION AND CRERTIFICATE FOR PAYMENT</td>','<td id="hijklmnopqrstu1" colspan="14"></td>', '<td id="vw2" colspan="2">PAGE ONE OF', '{pages}', '<td id="yz1" colspan="2">PAGES</td></tr>');
	$hrow[2] = array('<tr id="row2"><td id="ab2" colspan="2">TO OWNER:</td>', '<td id="cdefghi2" colspan="7"></td>','<td id="jk2" colspan="2">PROJECT:</td>', '<td id="lmnopqr2" colspan="7"></td>','<td id="qr2" colspan="2"></td>', '<td id="stu2" colspan="3">APPLICATION #:</td>', '<td id="vw2" colpsan="2"><input type=text name=sheet[application] value="{application}"></td>', '<td id="xyz2" colspan="3">Distribution to:</td></tr>');
	$hrow[3] = array('<tr id="row3"><td id="abcdefg345" colspan="7" rowspan="3"><textarea name="sheet[toowner]">{toowner}</textarea></td>', '', '', '<td id="jklmnop345" colspan="7" rowspan="3"><textarea name="sheet[project]">{project}</textarea></td>', '', '', '<td id="stu3" colspan="3">PERIOD TO:</td>', '<td id="vw3" colspan="2"><input type=text name="sheet[periodto]" value="{periodto}"></td>', '', '', '<td id="z3"></td></tr>');
	$hrow[4] = array('<tr id="row4"><td id="hi4" colspan="2"></td>', '<td id="qr4" colspan="2"></td>', '<td id="stu4" colspan="3">PROJECT NOS:</td>','<td id="vw4" colspan="2"><input type=text name="sheet[projectnos]" value="{projectnos}"></td>', '<td id="x4" colspan="1"><input type=text name="sheet[owner]" value="{owner}" size="3"></td>','<td id="yz4" colspan=2">Owner</td></tr>');
	$hrow[5] = array('<tr id="row5"><td id="hi5" colspan="2"></td>', '<td id="qrstuvw5" colspan="7"></td>', '<input type=text name="sheet[constmgr]" value="{constmgr}" size="3">', '<td id=yz5" colspan="2">Const. Mgr</td>');
	$hrow[6] = array('<tr id="row6"><td id="ab6" colspan="2">FROM CONTRACTOR:</td>', '<td id="cdefghi6" colspan="7"></td>','<td id="jk6" colspan="2">VIA ARCHITECT:</td>', '<td id="lmnopqr6" colspan="7"></td>','<td id="qr6" colspan="2"></td>', '<td id="stu6" colspan="3">CONTRACTG DATE:</td>', '<td id="vw6" colpsan="2"><input type=text name=sheet[contractdate] value="{contractdate}"></td>', '<td id="x6"><input type=text name="sheet[architect]" value="{architect}" size="3"></td>', '<td id="yz6" colspan="2">Architect</td></tr>');
	return $hrow;
}

function conhead($page)
{
	$hrow[1] = array('<tr id="row1"><td id="ab12" colspan="2" rowspan="2"><input type=hidden name=sheet[rows] value="{rows}" size="3">CONTINUATION SHEET</td>',  '<td id="c1"></td>',  '<td id="d1"></td>', '<td id="e1"></td>', '<td id="f1"></td>', '<td id="g1"></td>', '<td id="h1"></td>', '<td id="i1"></td>', '<td id="j1"></td>', '<td id="k1"></td>', '<td id="l1"></td></tr>');
	$hrow[2] = array('<tr id="row2"><td id="c2"></td>', '<td id="d2"></td>', '<td id="e2"></td>', '<td id="f2"></td>' , '<td id="g2">Page {page} Of</td>', '<td id="h2"><input type=text name="sheet[pages]" id="h2" size="3" value="{pages}"></td>', '<td id="ij2" colspan="2">Pages</td>',  '<td id="k2"></td>', '<td id="l2"></td></tr>');
	$hrow[3] = array('<tr id="row3"><td id="ab3" colspan="2">ATTACHMENT TO PAY APPLICATION</td>', '<td id="c3"></td>', '<td id="d3"></td>', '<td id="e3"></td>', '<td id="fgh3" colspan="3">APPLICATION NUMBER:</td>',  '<td id="i3">{application}</td>', '<td id="j3"></td>', '<td id="k3"></td>', '<td id="l3"></td></tr>');
	$hrow[4] = array('<tr id="row4"><td id="a4"></td>', '<td id="b4">PROJECT:</td>', '<td id="c4"></td>', '<td id="d4"></td>', '<td id="e4"></td>', '<td id="fgh4" colspan="3">APPLICATION DATE:</td>','<td id="i4"><input type=text name="sheet[applicationdate]" value="{applicationdate}" ></td>', '<td id="j4"></td>', '<td id="k4"></td>', '<td id="l4"></td></tr>');
	$hrow[5] = array('<tr id="row5"><td id="a5"></td>', '<td id="b5" rowspan="3"><textarea name="sheet[project]" rows="3">{project}</textarea></td>', '<td id="c5"></td>', '<td id="d5"></td>', '<td id="e5"></td>', '<td id="fgh5" colspan="3">PERIOD TO:</td>', '<td id="i5">{periodto}</td>', '<td id="j5"></td>', '<td id="k5"></td>', '<td id="l5"></td></tr>');
	$hrow[6] = array('<tr id="row6"><td id="a6"></td>',  '<td id="c6"></td>', '<td id="d6"></td>', '<td id="e6"></td>', '<td id="fgh6" colspan="3">ARCHITECT\'S PROJECT NO:</td>', '<td id="i6">{architect}</td>', '<td id="j6"></td>', '<td id="k6"></td>', '<td id="l6"></td></tr>');
	$hrow[7] = array('<tr id="row7"><td id="a7"></td>',  '<td id="cdefghijkl7" colspan="10"></td></tr>');
	$hrow[8] = array('<tr id="row8"><td id="a8">A</td>', '<td id="b8">B</td>', '<td id="c8">C</td>', '<td id="d8">D</td>', '<td id="e8">E</td>', '<td id="f8">F</td>', '<td id="gh8" colspan="2">G</td>',  '<td id="i8">H</td>', '<td id="j8">I</td>', '<td id="k8"></td>', '<td id="l8">J</td></tr>');
	$hrow[9] = array('<tr id="row9"><td id="a9">Item</td>', '<td id="b9">Description of Work</td>', '<td id="c9">Scheduled</td>', '<td id="de9" colspan="2">Work Completed</td>',  '<td id="f9">Materials</td>', '<td id="g9" >Total</td>', '<td id="h9">%<td id="i9">Balance</td>', '<td id="j9">Retainage</td>', '<td id="k9"></td>', '<td id="l9"></td></tr>');
	$hrow[10] = array('<tr id="row10"><td id="a10">No.</td>', '<td id="b10"></td>', '<td id="c10">Value</td>', '<td id="d10">From Previous</td>', '<td id="e10">This Period</td>', '<td id="f10">Presently</td>', '<td id="g10" >Completed</td>', '<td id="h10">(G/C)</td>', '<td id="i10">To Finish</td>', '<td id="j10">(If Variable</td>', '<td id="k10"></td>', '<td id="l10">Enter</td></tr>');
	$hrow[11] = array('<tr id="row11"><td id="a11"></td>', '<td id="b11"></td>', '<td id="c11"></td>', '<td id="d11">Application</td>', '<td id="e11"></td>', '<td id="f11">Stored</td>', '<td id="g11" >And Stored</td>', '<td id="h11"><td id="i11">(C - G)</td>', '<td id="j11">Rate)</td>', '<td id="k11"></td>', '<td id="l11">Variable</td></tr>');
	$hrow[12] = array('<tr id="row12"><td id="a12"></td>', '<td id="b12"></td>', '<td id="c12"></td>', '<td id="d12">(D + E)</td>', '<td id="e12"></td>', '<td id="f12">(Not In</td>', '<td id="g12" >To Date</td>', '<td id="h12"><td id="i12"></td>', '<td id="j12"></td>', '<td id="k12"></td>', '<td id="l12">Retainage</td></tr>');
	$hrow[13] = array('<tr id="row13"><td id="a13"></td>', '<td id="b13"></td>', '<td id="c13"></td>', '<td id="d13"></td>', '<td id="e13"></td>', '<td id="f13">D or E)</td>', '<td id="g13" >(D + E + F)</td>', '<td id="h13"></td>', '<td id="i12"></td>', '<td id="j12"></td>', '<td id="k12"></td>', '<td id="l12">Rate (%)</td></tr>');

	$hrow[29] =  array('{val}', 'SUBTOTALS PAGE {page}', '{val}', '{val}', '{val}', '{val}', '{val}', '{val}', '{val}' , '{val}' , '{val}' , '{val}');

return $hrow;
}

function collet($collet, $continuation, $page, $off, $row, $td='', $sheet='')
{
$cr = array('-', 'a', 'b', 'c', 'd', 'e', 'f', 'g', 'h', 'i', 'j', 'k', 'l', 'm', 'n', 'o', 'p', 'q', 'r', 's', 't', 'u', 'v', 'w', 'x', 'y', 'z');

	if ($td == '')
	{
		$str = '<tr id="row' . $off . '">';
	}
	else
	{
		$str = '';
	}
	$col = 1;
	foreach ($collet as $num=>$ev)
	{
		$let = $cr[$col];
		$vallet = $let . $row;
		$ev = str_replace('{page}', $page, $ev);
		$ev = str_replace('{row}', $row, $ev);
		$ev = str_replace('{col}', $col, $ev);
		if (isset($sheet) && $sheet != '')
		{
			foreach ($sheet as $key=>$val)
			{
				$ev = str_replace('{' . $key . '}', $sheet->$key, $ev);
			}
		}
		if (isset($continuation->$page->$row->$col))
		{
			$val = $continuation->$page->$row->$col;
		}
		else
		{
			$val = '';
		}
		$ev = str_replace('{val}', $val, $ev);
		if ($td == '' || strpos($ev, '<td') === FALSE)
		{
			$str .= '<td id="' . $vallet . '" colspan="1">' . $ev . '</td>';
		}
		else
		{
			$str .= $ev;
		}
		$col++;
	}
	if ($td == '')
	{
		$str .= '</tr>';
	}
	$str .= "\r\n";
return $str;
}
$conf = array('pages');

if (isset($sheet))
{
	foreach ($sheet as $key=>$val)
	{
		${$key} = $val;
	}
}

//page1
$page = 1;
echo '<table id="page'. $page . '">';
$hrow = apphead();
for ($off=1; $off< count($hrow) + 1; $off++)
{
	echo collet($hrow[$off], $continuation, $page, $off, $off, '1', $sheet);
}
echo '</table>';

for ($page=2; $page< $pages; $page++)
{
	echo '<table id="page' . $page . '">';
	$hrow = conhead($page);

	for ($off=1; $off < 14; $off++)
	{
		echo collet($hrow[$off], $continuation, $page, $off, $off, '1', $sheet);
	}		

$collet = array('a' => '{row}', 'b' => '<input type=text name="continuation[{page}][{row}][{col}]" value="{val}"  size="30">', 'c' => '<input type=text name="continuation[{page}][{row}][{col}]" value="{val}" maxlength="10" size="10">' , 'd' => '<input type=text name="continuation[{page}][{row}][{col}]" value="{val}" maxlength="10" size="10">', 'e' => '<input type=text name="continuation[{page}][{row}][{col}]" value="{val}" maxlength="10" size="10">', 'f' => '<input type=text name="continuation[{page}][{row}][{col}]" value="{val}" maxlength="10" size="10">', 'g' => '{val}', 'h' => '{val}', 'i' => '{val}', 'j' => '{val}', 'k' => '{val}', 'l' => '<input type=text name="continuation[{page}][{row}][{col}]" value="{val}" maxlength="5" size="5">');


for ($row=1; $row < $rows; $row++)
{
	$off = 14 + $row;

	echo collet($collet, $continuation, $page, $off, $row);
	
}
echo collet($hrow['29'], $continuation, $page, '29', '29');
echo '</table>';

}
$off++;
