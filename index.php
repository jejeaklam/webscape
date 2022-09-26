require('simple_html_dom.php');

$html = file_get_html('https://www.bi.go.id/id/moneter/informasi-kurs/transaksi-bi/Default.aspx');

$a=1;

foreach($html->find('#ctl00_PlaceHolderMain_biWebKursTransaksiBI_GridView1 tr') as $tr) {
	
	 if($a==25){
		echo 'Mata Uang: '.$tr->find('td',0) .'<br />'; 
		echo 'Nilai: '.$tr->find('td',1) .'<br />'; 
		echo 'Kurs Jual: '.$tr->find('td',2) .'<br />'; 
		echo 'Kurs Beli: '.$tr->find('td',3) .'<br />';  
		echo '<hr />';  
	 }
	 $a++;
}
