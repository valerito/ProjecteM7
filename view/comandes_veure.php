<?php
    include_once $_SERVER["DOCUMENT_ROOT"]."/ProjecteM7/view/menu.php";
?>
<div id="contenido" class="span8 offset2 hero-unit">
	<h2>Proveidors</h2>
        <?php
            foreach ($llistaComandes as $key => $comandes) {
                
                echo 'Client: '.$comandes->getClient()->getNomContacte().'<br/>';
                echo 'Adreça destinatari: '.$comandes->getAdrecaDestinatari().'<br/>';
                echo 'Ciutat destinatari: '.$comandes->getCiutatDestinatari().'<br/>';
                echo 'Codi postal destinatari: '.$comandes->getCodPostalDestinatari().'<br/>';
                echo 'Data comanda: '.$comandes->getDataComanda().'<br/>';
                echo 'Data entrega: '.$comandes->getDataEntrega().'<br/>';
                echo 'Data enviament: '.$comandes-> getDataEnviament().'<br/>';
                echo 'Data destinatari: '.$comandes->getDestinatari().'<br/>';
                echo 'Forma pagament: '.$comandes->getFormaEnviament().'<br/>';
                echo 'Pais destinatari: '.$comandes->getPaisDestinatari().'<br/>';
                
                echo '<hr/>';
            }
        ?>
</div>

<?php
include $_SERVER["DOCUMENT_ROOT"]."/ProjecteM7/view/footer.php";
?>
