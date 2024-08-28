<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/** @var yii\web\View $this */
/** @var frontend\models\Dokter $model */

//$this->title = $model->kd_dokter;
$this->params['breadcrumbs'][] = ['label' => 'Dokters', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<section class="ftco-section" id="doctor-section">
			<div class="container-fluid px-5">
				<div class="row justify-content-center mb-5 pb-2">
          <div class="col-md-8 text-center heading-section ftco-animate">
            <h2 class="mb-4">Dokter Kami</h2>
            </div>
        </div>	
				<div class="row">
					
					<?php 
                                        foreach ($model as $dok){
                                        ?>
					<div class="col-md-6 col-lg-3 ftco-animate">
						<div class="staff">
							<div class="img-wrap d-flex align-items-stretch">
								<div class="img align-self-stretch" style="background-image: url(theme/mediplus/img/raymon1.jpg);"></div>
							</div>
							<div class="text pt-3 text-center">
								<h3 class="mb-2"><?=$dok->nm_dokter?></h3>
                                                                <span class="position mb-2"><?=$dok->spesialis->nm_sps?></span>
								<div class="faded">
									
									<ul class="ftco-social text-center">
		                <li class="ftco-animate"><a href="#"><span class="icon-twitter"></span></a></li>
		                <li class="ftco-animate"><a href="#"><span class="icon-facebook"></span></a></li>
		                <li class="ftco-animate"><a href="#"><span class="icon-google-plus"></span></a></li>
		                <li class="ftco-animate"><a href="#"><span class="icon-instagram"></span></a></li>
		              </ul>
                                                                    <?php 
                                                                     if($dok->kd_sps == 'S0001'){
                                                                         echo "";
                                                                     }
                                                                     else{
                                                                    ?>
		              <p><a href="#" class="btn" style="color:white;">Book now</a></p>
                              <?php
                                                                     }
                              ?>
	              </div>
							</div>
						</div>
					</div>
                                    <?php
                                    
                                        }
                                        ?>
					
				</div>
			</div>
		</section>