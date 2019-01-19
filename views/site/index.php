<?php

/* @var $this yii\web\View */

$this->title = 'My Yii Application';
?>
<div class="site-index">

    <div class="jumbotron">
        <h1>Shape Detector</h1>

      <!-- <p class="lead">You have successfully created your Yii-powered application.</p> -->

        <p><a class="btn btn-lg btn-success" href="http://www.yiiframework.com">Start Detecting</a></p>
    </div>

    <div class="body-content">

        <div class="row">
            <div class="col-lg-3">
                <h2>Upload Shapes</h2>

                <p> </p>

                <p><a class="btn btn-default" href="index.php?r=shape%2Fcreate">Shapes &raquo;</a></p>
            </div>
            <div class="col-lg-3">
                <h2>Upload Maps</h2>

                <p> </p>

                <p><a class="btn btn-default" href="index.php?r=map%2Fupload">Maps&raquo;</a></p>
            </div>
            <div class="col-lg-3">
                <h2>Uploaded Shapes</h2>
                <p><a class="btn btn-default" href="index.php?r=shape">View &raquo;</a></p>
            </div>
            <div class="col-lg-3">
                <h2>Uploaded Maps</h2>
                <p><a class="btn btn-default" href="index.php?r=map">View &raquo;</a></p>
            </div>
        </div>

    </div>
</div>
