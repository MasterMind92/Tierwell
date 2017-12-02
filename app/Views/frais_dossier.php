<?php 

require_once(dirname(__FILE__).'\..\ressources\lib\html2pdf\html2pdf.class.php');

// get the HTML
ob_start();
?>    


<style type="text/css">


</style>




<page>
	Testcule
</page>	
	


	<?php      
    
    $content = ob_get_clean();




try
    {
        // init HTML2PDF
        $html2pdf = new HTML2PDF('P', 'A4', 'fr', true, 'UTF-8', array(0, 0, 0, 0));


         // convert
        $html2pdf->writeHTML($content);
        // send the PDF
        $html2pdf->Output('frais-dossier.pdf');
    }
    catch(HTML2PDF_exception $e) {
        echo $e;
        exit;
    }
?>