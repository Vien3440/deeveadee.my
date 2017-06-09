
<section>
    
    <div class="container colorBack">
        <h1>Bienvenue chez nous !!  </h1>
        <h2> Liste de nos magasin </h2>
    </div>
    <div class="container colorBack">
        <?php
        foreach ($societes as $societe) {

            echo'
                <div class="col-sm-6 col-md-4">
                    <div class="thumbnail">
                        <a href="' . base_url() .'get/societe/'.$societe['id_societe'].'"><img src="..." alt="..."></a>
                            <div class="caption">
                                <h3>' . $societe['nom'].'</h3>
                                <p>'. $societe['ville'].'</p>
                            </div>
                    </div>
                </div>';
        }
        ?>
    </div>
</section>

