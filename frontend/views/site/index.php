<?php

/* @var $this yii\web\View */

$this->title = 'F&A Projects';
?>
<div class="site-index">
    
    <?php
    $image1 = ['content'=>'<img src="'.Yii::getAlias('@web/images/1.png').'">','caption' => '<h4>Amber Court</h4><p>Life Camp District</p>'];
    $image2 = ['content'=>'<img src="'.Yii::getAlias('@web/images/2.png').'">','caption' => '<h4>Amber Court</h4><p>Life Camp District</p>'];
    $image3 = ['content'=>'<img src="'.Yii::getAlias('@web/images/3.png').'">','caption' => '<h4>Amber Court</h4><p>Life Camp District</p>'];
    $image4 = ['content'=>'<img src="'.Yii::getAlias('@web/images/4.png').'">','caption' => '<h4>Amber Court</h4><p>Life Camp District</p>'];
    $images[]= $image1;
    $images[]= $image2;
    $images[]= $image3;
    $images[]= $image4;
    echo yii\bootstrap\Carousel::widget(['items'=>$images]); ?>

    <div class="body-content">

        <div class="row">
            <div class="col-lg-4">
                <h2>Amber Court</h2>

                <p>Located at Plot 814, Cadastral Zone: C02, Life Camp District, Abuja</p>
                <p>The proposed Amber Court has a land size of 2,721.63 square meters and will comprise of:</p>
                
                <ul>
                <li>2 units of 5 bedroom terrace houses both attached to a Boys Quarters.</li>
                <li>8 units of 4 bedroom terrace houses each attached to a Boys Quarters.</li>
                <li>Standby Generator System.</li>
                <li>24-hour Security Service including CCTV.</li>
                <li>Central Sewage Disposal System.</li>
                <li>Adequate car park.</li>    
                </ul>

                <p><a class="btn btn-default" href="http://www.yiiframework.com/doc/">Book an appointment &raquo;</a></p>
            </div>
            <div class="col-lg-4">
                <h2>Future Projects</h2>

                <p>Interested in future developments by F&amp;A Ltd?</p>

                <p><a class="btn btn-default" href="http://www.yiiframework.com/forum/">Register Here &raquo;</a></p>
            </div>
            <div class="col-lg-4">
                <h2>Photo Gallery</h2>

                <p>See more pictures in our Gallery</p>

                <p><a class="btn btn-default" href="http://www.yiiframework.com/extensions/">Gallery &raquo;</a></p>
            </div>
        </div>

    </div>
</div>
