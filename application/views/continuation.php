
<style>
input, textarea {

background-color: yellow;
}
b {
color:blue;
}
table, th, td {
#border: 1px solid black;
border-collapse: 0px;
padding: 0px;
cellpadding: 0px;
text-align: center;
background-color: white;
font-size: 10px;
}
#nopqrstuvwxyz1014, #nz2731 {
font-size: 8px;
}

#p1row1 td {
border-bottom: 2px solid black;

}

#defghijklmnopqrs10 {
font-size:18px;
background-color: yellow;
}

#p1row10 td {
border-bottom: 2px solid black;
}
#row2 td {
border-bottom: 2px solid black;
}
#ab12 {
border-bottom: 2px solid black;
}

#ijkl16, #ijkl17, #ijkl18 {
background-color: gray;
text-align : right;
border: 1px solid black;

} 

#uvwxyz20 {
border: 0px;
}

#opqrstu17{
border-bottom: 1px solid black;
}

#wxy17 {
background-color: yellow;
border-bottom: 1px solid black;

}

#pqrst19, #pqrst20 {
background-color: yellow;
border-bottom: 1px solid black;
}


#vw2, #vw3, #vw4, #vw6, #abcdefg345, #abcdefg789, #jklmnop345, #jklmnop789 {
text-align: left;
background-color: yellow;
}
#x6, #x5, #x4, #x7, #x8, #ijkl15, #b21,#b23{
border: 1px solid black;
background-color: yellow;

}
#uvw2 {
text-align: right;
}
#yz1,#b5 {
text-align: left;
#x2 {
background-color: white;
}
#x2 input {
background-color: white;
}
</style>


<?php

function apphead()
{
	$hrow[1] = array('<tr id="p1row1"><td id="abcdefg1" colspan="7"><input type=hidden name="sheet[JobID]" value="{JobID}"><b>APPLICATION AND CRERTIFICATE FOR PAYMENT</b></td>','<td id="hijklmnopqrst1" colspan="13"></td>', '<td id="uvw2" colspan="3">PAGE ONE OF', '<td id="x2"><input type=text name="sheet[pages]" " size="1" value="{pages}"></td>', '<td id="yz1" colspan="2">PAGES</td></tr>');
	$hrow[2] = array('<tr id="p1row2"><td id="abc2" colspan="3">TO OWNER:</td>', '<td id="defghi2" colspan="6"></td>','<td id="jkl2" colspan="3">PROJECT:</td>', '<td id="mnopqr2" colspan="6"></td>', '<td id="stu2" colspan="3">APPLICATION #:</td>', '<td id="vw2" colspan="2"><input type=text name=sheet[application] value="{application}"></td>', '<td id="xyz2" colspan="3">Distribution to:</td></tr>');
	$hrow[3] = array('<tr id="row3"><td id="abcdefg345" colspan="7" rowspan="3">{toowner}</td>', '', '', '<td id="jklmnop345" colspan="7" rowspan="3">{project}</td>', '', '', '<td id="stu3" colspan="3">PERIOD TO:</td>', '<td id="vw3" colspan="2"><input type=text name="sheet[periodto]" value="{periodto}"></td>', '', '', '<td id="z3"></td></tr>');
	$hrow[4] = array('<tr id="row4"><td id="hi4" colspan="2"></td>', '<td id="qr4" colspan="2"></td>', '<td id="stu4" colspan="3">PROJECT NOS:</td>','<td id="vw4" colspan="2"><input type=text name="sheet[projectnos]" value="{projectnos}"></td>', '<td id="x4" colspan="1"><input type=text name="sheet[owner]" value="{owner}" size="1"></td>','<td id="yz4" colspan=2">Owner</td></tr>');
	$hrow[5] = array('<tr id="row5"><td id="hi5" colspan="2"></td>', '<td id="qrstuvw5" colspan="7"></td>', '<td id="x5"><input type=text name="sheet[constmgr]" value="{constmgr}" size="1"></td>', '<td id=yz5" colspan="2">Const. Mgr</td>');
	$hrow[6] = array('<tr id="row6"><td id="abc6" colspan="3">FROM CONTRACTOR:</td>', '<td id="defghi6" colspan="6"></td>','<td id="jkl6" colspan="3">VIA ARCHITECT:</td>', '<td id="mnopqr6" colspan="6"></td>', '<td id="stu6" colspan="3">CONTRACT DATE:</td>', '<td id="vw6" colspan="2"><input type=text name=sheet[contractdate] value="{contractdate}"></td>', '<td id="x6"><input type=text name="sheet[architect]" value="{architect}" size="1"></td>', '<td id="yz6" colspan="2">Architect</td></tr>');
	$hrow[7] = array('<tr id="row7"><td id="abcdefg789" colspan="7" rowspan="3">{fromcontractor}</td>', '', '', '<td id="jklmnop345" colspan="7" rowspan="3"><textarea name="sheet[viaarchitect]" rows="3" cols="40">{viaarchitect}</textarea></td>', '<td id="qrstuvw7" colspan="7"></td>', '<td id="x7"><input type=text name="sheet[contractor]" value="{contractor}" size="1"></td>', '<td id="yz7" colspan="2">Contractor</td></tr>');
	$hrow[8] = array('<tr id="row8"><td id="hi8" colspan="2"></td>', '<td id="qrstuvw8" colspan="7"></td>', '<td id="x8"><input type=text name="sheet[other]" value="{other}" size="1"></td>', '<td id="yz8" colspan="2"></td></tr>');
	$hrow[9] = array('<tr id="row9"><td id="hi9" colspan="2"></td>','<td id="qrstuvwxyz9" colspan="10"></td></tr>');
	$hrow[10] = array('<tr id="p1row10"><td id="abc10" colspan="3">CONTRACT FOR:</td>','<td id="defghijklmnopqrs10" colspan="16"><input type=text name="sheet[contractfor]" value="{contractfor}" size="59"></td>', '<td id="tuvwxyz10" colspan="7" ></td></tr>'); 
	$hrow[11] = array('<tr id="row11"><td id="abcdefghijl11" colspan="12">CONTRACTOR\'S APPLICATION FOR PAYMENT</td>','<td id="m11" colspan="1"></td>', '<td id="nopqrstuvwxyz1014" colspan="13" rowspan="4"> <style="font-size:6px;">The undersigned Contractor certifies that to the best of the Contractor\'s knowledge, information and belief the Work covered by this<br> Application for Payment has been completed in accordance with the Contract Documents, that all amounts have been paid by the Contractor<br> for Work for which previous Certificates for Payment were issued and payments received from the Owner, and that current payment shown<br> therein is now due.</td></tr>');								$hrow[12] = array('<tr id="row12"><td id="abcdefghijkl12" colspan="12">Application is made for payment, as shown below, in connection with the Contract.</td>', '<td></td></tr>');	
	$hrow[13] = array('<tr id="row13"><td id="abcdefghijkl13" colspan="12">Continuation Sheet is attached.											</td>', '<td></td></tr>');
	$hrow[14] = array('<tr id="row14"><td id="abcdefghijkl14" colspan="12"></td>', '<td></td></tr>');
	$hrow[15] = array('<tr id="row15"><td id="abcdefg15" colspan="7">1. ORIGINAL CONTRACT SUM-----------------------						</td>', '<td id="h15">$</td>','<td id="ijkl15" colspan="4">{originalcontract}</td>','<td id="m15"></td>', '<td id="nopqrstuvwxyz15" colspan="13">CONTRACTOR:		</td></tr>');
	$hrow[16] = array('<tr id="row16"><td id="abcdefg16" colspan="7">2. Net change by Change Orders------------------$					</td>', '<td id="h16">$</td>','<td id="ijkl16" colspan="4">{netchange}</td>','<td id="m16"></td>', '<td id="nopqrstuvwxyz16" colspan="13">		</td></tr>');
	$hrow[17] = array('<tr id="row17"><td id="abcdefg17" colspan="7">3. CONTRACT SUM TO DATE (Line 1 +/- 2)</td>', '<td id="h17">$</td>','<td id="ijkl17" colspan="4">{contractsum}</td>','<td id="m17"></td>', '<td id="n16">By:</td>','<td id="opqrstu17" colspan="7"></td>', '<td id="v17">Date:</td>','<td id="wxy17" colspan="3"><input type=text name="sheet[contractordate]" value="{contractordate}" size="10"></td>','<td></td></tr>');
	$hrow[18] = array('<tr id="row18"><td id="abcdefgh18" colspan="7">4. TOTAL COMPLETED & STORED TO DATE-$							</td>', '<td id="h17">$</td>', '<td id="ijkl18" colspan="4">{totalcompleted}</td>','<td id="m22" colspan="1"></td>', '<td id="nopqrstuvwxyz18" colspan="13"></td></tr>');
	$hrow[19] = array('<tr id="row19"><td id="ah19" colspan="8">	(Column G on Continuation Sheet)							</td>', '<td id="ijkl19" colspan="4"></td>','<td id="m22" colspan="1"></td>', '<td id="no19" colspan="2">State Of</td>', '<td id="pqrst19" colspan="5"><input type=text name="sheet[stateof]" value="{stateof}">', '<td id="uvwxyz19" colspan="6"></td></tr>');
	$hrow[20] = array('<tr id="row20"><td id="ab20" colspan="2">5. RETAINAGE:</td>','<td id="cdefghijkl20" colspan="10"></td>','<td id="m22" colspan="1"></td>','<td id="no20" colspan="2">County Of:</td>','<td id="pqrst20" colspan="5"><input type=text name="sheet[countyof]" value="{countyof}"></td>','<td id="uvwxyz20" colspan="6"></td></tr>');
	$hrow[21] = array('<tr id="row21"><td id="a21" colspan="1">a.</td>','<td id="b21" colspan="1"><input type=text name="sheet[percentcompleted]" value="{percentcompleted}" size="3"></td>','<td id="cde21" colspan="3">Of Completed Work</td>','<td id="f21" colspan="1"></td><td id="g21" colspan="1">$</td>','<td id="hij21" colspan="3">{completedwork}</td>','<td id="kl21" colspan="2"></td>','<td id="m22" colspan="1"></td>','<td id="nopqr21" colspan="5">Subscribed and sworn to before</td>','<td id="stuvwxyz21" colspan="8"></td></tr>');
	$hrow[22] = array('<tr id="row22"><td id="a22" colspan="1"></td>','<td id="bcdef22" colspan="5">(Columns D + E on Continuation Sheet)</td>','<td id="ghijkl22" colspan="6"></td>','<td id="m22" colspan="1"></td>','<td id="n22">me this</td>','<td id="o22"></td>','<td id="p22"><input type=text name="sheet[methis]" value="{methis}" size="3"><td id="qr22" colspan="2">day of</td>','<td id="stuv22" colspan="4"><input type=text name="sheet[dayof]"></td>','<td id="wxyz22" colspan="4"></td></tr>');
	$hrow[23] = array('<tr id="row23"><td id="a23">b.</td><td id="b23"><input type=text name="sheet[percentstored]" value="{percentstored}" size="3"></td>','<td id="cde23" colspan="3">of Stored Material</td>','<td id="f23"></td>','<td id="g23">$</td>','<td id="hij23" colspan="3">{storedmaterial}</td>','<td id="kl23" colspan="2"></td>','<td id="m23"></td>','<td id="nopqrstuvwxyz23" colspan="13"></td></tr>');
	$hrow[24] = array('<tr id="row24"><td id="a24"></td><td id="bcdef24" colspan="5">(Column F on Continuation Sheet)</td>','<td id="ghijkl24" colspan="6">','<td id="m24"></td>','<td id="no24" colspan="2">Notary Public</td>','<td id="pqrstuv24" colspan="7"><input type=text name="sheet[notarypublic]" value="{notarypublic}"></td>','<td id="wxyz24" colspan="4"></td></tr>');
	$hrow[25] = array('<tr id="row25"><td id="abcdef25" colspan="6">Total Retainage (Line 5a + 5b) or</td>','<td id="ghijkl24" colspan="6"></td>','<td id="m25"></td>','<td id="nopqr24" colspan="5">My Commission Expires:</td>','<td id="stuvw24" colspan="5"><input type=text name=sheet"[commissionexpires]" value="{commissionexpires}"></td>','<td id="xyz25" colspan="3"></td></tr>');
	$hrow[26] = array('<tr id="row26"><td id="abcdefg26" colspan="7">Total in Column I of Continuation Sheet--------						</td>','<td id="h26">$</td>','<td id="ijkl26" colspan="4">{totalretainage}</td>','<td id="m26"></td>','<td id="nopqrst26" colspan="7">CERTIFICATE FOR PAYMENT						</td>','<td id="uvwxyz26" colspan="6"></td></tr>');
	$hrow[27] = array('<tr id="row27"><td id="abcdefg27" colspan="7">6. TOTAL EARNED LESS RETAINAGE-----------						</td>','<td id="h27">$</td>','<td id="ijkl26" colspan="4">{lessretainage}</td>','<td id="m27"></td>','<td id="nz2731" colspan="13" rowspan="5">
	In accordance with Contract Documents, based on on-site observations and the data comprising application, the Architect certifies to the<br>
	Owner that to the best of the Architect\'s knowledge, information and belief the Work has progressed as indicated, the quality of the Work is<br>
	in accordance with the Contract Documents, and the Contractor is entitled to payment of the AMOUNT CERTIFIED.		</td></tr>');		
	$hrow[28] = array('<tr id="row28"><td id="a28"></td>','<td id="bcde26" colspan="4">(Line 4 less Line 5 Total)</td>','<td id="fghijkl28" colspan=7"></td>','<td id="m28"></td></tr>');
	$hrow[29] = array('<tr id="row29"><td id="abcdefg29" colspan="7">7. Less Previous Certificates for Payment</td>','<td id="hijkl29" colspan="5"></td>','<td id="m29"></td></tr>');
	$hrow[30] = array('<tr id="row30"><td id="a30"></td>','<td id="bcdefg30" colspan="6">(Line 6 from prior Certificate)-------------------$					</td>','<td id="h30">$</td>','<td id="ijkl30" colspan="4"><input type=text name="sheet[priorcertificate]" value="{priorcertificate}"></td>','<td id="m30"></td></tr>');
	$hrow[31] = array('<tr id="row31"><td id="abcdefg31" colspan="7">8. CURRENT PAYMENT DUE--------------------------$						</td>','<td id="h31">$</td>','<td id="ijkl31" colspan="4"><input type=text name="sheet[paymentdue]" value="{paymentdue}"></td>','<td id="m31"></td></tr>');
	$hrow[32] = array('<tr id="row32"><td id="abcdefg32" colspan="7">9. BALANCE TO FINISH, INCLUDING RETAINAGE</td>','<td id="hijkl32" colspan="5"></td>','<td id="m32"></td>','<td id="nopqrst32" colspan="7">AMOUNT CERTIFIED ---------------------------------- $</td>','<td id="uvwxyz32" colspan="6">___________________</td></tr>');
	$hrow[33] = array('<tr id="row33"><td id="abcdef33" colspan="6">(Line 3 less Line 6)</td>','<td id="g33">$</td>','<td id="hijkl33" colspan="5">{balancetofinish}</td>','<td id="m33"></td>','<td id="nz3334" rowspan="2" colspan="13">
	(Attach explanation if amount certified differs from the amount applied for.  Initial all figures on this application and on the Continuation Sheet<BR>
	that are changed to conform to the amount certified.)</td></tr>');	
	$hrow[34] = array('<tr id="row34"><td id="al34" colspan="12"></td>','<td id="m34"></td></tr>');
	$hrow[35] = array('<tr id="row35"><td id="abcdef35" colspan="6">CHANGE ORDER SUMMARY					</td>','<td id="ghi35" colspan="3">ADDITIONS		</td>','<td id="jkl35" colspan="3">DEDUCTIONS		</td>','<td id="m35"></td>','<td id="nop35" colspan="3">ARCHITECT:</td>','<td id="qrstuvwxyz35" colspan="10"></td></tr>');
	$hrow[36] = array('<tr id="row36"><td id="abcdef36" colspan="6">Total changes approved in previous months by Owner					</td>','<td id="ghi36" colspan="3"><input type=text name="sheet[totaladditions]" value="{totaladditions}"></td>','<td id="jkl36" colspan="3"><input type=text name="sheet[totaldeductions]" value="{totaldeductions}"></td>','<td id="m36"></td>','<td id="n36">By:</td>','<td id="opqrstuv36" colspan="8">________________</td>','<td id="w36">Date:</td>','<td id="xyz36" colspan="36">_______</td></tr>');
	$hrow[37] = array('<tr id="row37"><td id="abcdef37" colspan="6">Totals approved this month</td>','<td id="ghi37" colspan="3">{monthadditions}</td>','<td id="jkl37" colspan="3">{monthdeductions}></td>','<td id="m37"></td>', '<td id="nz3739" rowspan="3" colspan="13">This Certificate is not negotiable.  The AMOUNT CERTIFIED is payable only to the Contractor named herein.  Issuance, payment and acceptance of payment are without prejudice to any rights of the Owner of Contractor under this Contract.</td></tr>');
	$hrow[38] = array('<tr id="row38"><td id="abcdef38" colspan="6">Totals</td>','<td id="ghi38" colspan="3">{totalsadditions}</td>','<td id="jkl38" colspan="3">{totalsdeductions}</td>','<td id="m38"></td></tr>');
	$hrow[39] = array('<tr id="row39"><td id="abcdef39" colspan="6">NET CHANGES by Change Order					</td>','<td id="ghijkl38" colspan="6">{netchange}</td><td id="m39"></td><td id="nopqrstuvwxyz39" colspan="13"></td></tr>');
	$hrow[40] = array('<tr id="row40"><td id="az40" colspan="26"</td></tr>');
												
												
												
												
												
	return $hrow;
}

function conhead($page)
{
	$hrow[1] = array('<tr id="row1"><td id="ab12" colspan="2" rowspan="2"><input type=hidden name=sheet[rows] value="{rows}" size="3"><b>CONTINUATION SHEET</b></td>',  '<td id="c1"></td>',  '<td id="d1"></td>', '<td id="e1"></td>', '<td id="f1"></td>', '<td id="g1"></td>', '<td id="h1"></td>', '<td id="i1"></td>', '<td id="j1"></td>', '<td id="k1"></td>', '<td id="l1">1</td></tr>');
	$hrow[2] = array('<tr id="row2"><td id="c2"></td>', '<td id="d2"></td>', '<td id="e2"></td>', '<td id="f2"></td>' , '<td id="g2">Page {page} Of</td>', '<td id="h2">{pages}</td>', '<td id="i2" >Pages</td>',  '<td id="jkl2" colspan="3"></td></tr>');
	$hrow[3] = array('<tr id="row3"><td id="ab3" colspan="2">ATTACHMENT TO PAY APPLICATION</td>', '<td id="c3"></td>', '<td id="d3"></td>', '<td id="e3"></td>', '<td id="fgh3" colspan="3">APPLICATION NUMBER:</td>',  '<td id="i3">{application}</td>', '<td id="j3"></td>', '<td id="k3"></td>', '<td id="l3"></td></tr>');
	$hrow[4] = array('<tr id="row4"><td id="a4"></td>', '<td id="b4">PROJECT:</td>', '<td id="c4"></td>', '<td id="d4"></td>', '<td id="e4"></td>', '<td id="fgh4" colspan="3">APPLICATION DATE:</td>','<td id="i4"><input type=text name="sheet[applicationdate]" value="{applicationdate}" ></td>', '<td id="j4"></td>', '<td id="k4"></td>', '<td id="l4"></td></tr>');
	$hrow[5] = array('<tr id="row5"><td id="a5"></td>', '<td id="b5" rowspan="3">{project}</td>', '<td id="c5"></td>', '<td id="d5"></td>', '<td id="e5"></td>', '<td id="fgh5" colspan="3">PERIOD TO:</td>', '<td id="i5">{periodto}</td>', '<td id="j5"></td>', '<td id="k5"></td>', '<td id="l5"></td></tr>');
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
		while (strpos($ev, '{') !== FALSE && strpos($ev, '}') !== FALSE)
		{
			$pos1 = strpos($ev, '{');
			$pos2 = strpos($ev, '}');
	
			$ev = substr($ev, 0, $pos1) . substr($ev, $pos2+1, strlen($ev));
		}

		if ($td == '' || strpos($ev, '<td') === FALSE)
		{
			$str .= '<td id="' . $page . $vallet . '" colspan="1">' . $ev . '</td>';
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
echo '<table id="page'. $page . '" width="1200px">';
$hrow = apphead();
for ($off=1; $off< count($hrow) + 1; $off++)
{
	echo collet($hrow[$off], $continuation, $page, $off, $off, '1', $sheet);
}
echo '</table>';

for ($page=2; $page<= $pages; $page++)
{
	echo '<table id="page' . $page . '" width="1200px">';
	$hrow = conhead($page);

	for ($off=1; $off < 14; $off++)
	{
		echo collet($hrow[$off], $continuation, $page, $off, $off, '1', $sheet);
	}		

$collet = array('a' => '{val}', 'b' => '<input type=text name="continuation[{page}][{row}][{col}]" value="{val}"  size="29">', 'c' => '<input type=text name="continuation[{page}][{row}][{col}]" value="{val}" size="8">' , 'd' => '<input type=text name="continuation[{page}][{row}][{col}]" value="{val}" size="8">', 'e' => '<input type=text name="continuation[{page}][{row}][{col}]" value="{val}"  size="8">', 'f' => '<input type=text name="continuation[{page}][{row}][{col}]" value="{val}"  size="8">', 'g' => '{val}', 'h' => '{val}', 'i' => '{val}', 'j' => '{val}', 'k' => '{val}', 'l' => '<input type=text name="continuation[{page}][{row}][{col}]" value="{val}" size="1">');


for ($row=1; $row < $rows; $row++)
{
	$off = 14 + $row;

	echo collet($collet, $continuation, $page, $off, $row);
	
}
echo collet($hrow['29'], $continuation, $page, '29', '29');
echo '</table>';

}
$off++;

