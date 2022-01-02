<?php
    $data = [
        [
            'divTitle' => 'mt-2',
            'title' => 'My Tasks',
            'mark' => '130 / 500',
            'divProgress' => 'mb-3',
            'bgProgress' => 'fusion-400',
            'valueProgress' => 65,
        ],
        [
            'divTitle' => '',
            'title' => 'Transfered',
            'mark' => '440 TB',
            'divProgress' => 'mb-3',
            'bgProgress' => 'success-500',
            'valueProgress' => 34,
        ],
        [
            'divTitle' => '',
            'title' => 'Bugs Squashed',
            'mark' => '77%',
            'divProgress' => 'mb-3',
            'bgProgress' => 'info-400',
            'valueProgress' => 77,
        ],
        [
            'divTitle' => '',
            'title' => 'User Testing',
            'mark' => '7 days',
            'divProgress' => 'mb-g',
            'bgProgress' => 'primary-300',
            'valueProgress' => 84,
        ],
    ];
?>
<!DOCTYPE html>
<html lang="en">
<head>
        <meta charset="utf-8">
        <title>
            Подготовительные задания к курсу
        </title>
        <meta name="description" content="Chartist.html">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no, user-scalable=no, minimal-ui">
        <link id="vendorsbundle" rel="stylesheet" media="screen, print" href="css/vendors.bundle.css">
        <link id="appbundle" rel="stylesheet" media="screen, print" href="css/app.bundle.css">
        <link id="myskin" rel="stylesheet" media="screen, print" href="css/skins/skin-master.css">
        <link rel="stylesheet" media="screen, print" href="css/statistics/chartist/chartist.css">
        <link rel="stylesheet" media="screen, print" href="css/miscellaneous/lightgallery/lightgallery.bundle.css">
        <link rel="stylesheet" media="screen, print" href="css/fa-solid.css">
        <link rel="stylesheet" media="screen, print" href="css/fa-brands.css">
        <link rel="stylesheet" media="screen, print" href="css/fa-regular.css">
    </head>
    <body class="mod-bg-1 mod-nav-link ">
        <main id="js-page-content" role="main" class="page-content">
            <div class="col-md-6">
                <div id="panel-1" class="panel">
                    <div class="panel-hdr">
                        <h2>
                            Задание
                        </h2>
                        <div class="panel-toolbar">
                            <button class="btn btn-panel waves-effect waves-themed" data-action="panel-collapse" data-toggle="tooltip" data-offset="0,10" data-original-title="Collapse"></button>
                            <button class="btn btn-panel waves-effect waves-themed" data-action="panel-fullscreen" data-toggle="tooltip" data-offset="0,10" data-original-title="Fullscreen"></button>
                        </div>
                    </div>
                    <div class="panel-container show">
                        <div class="panel-content">
                            <?php foreach ($data as $item) {?>
                            <div class="d-flex <?=$item['divTitle'];?>">
                                <?=$item['title'];?>
                                <span class="d-inline-block ml-auto"><?=$item['mark'];?></span>
                            </div>
                            <div class="progress progress-sm <?=$item['divProgress'];?>">
                                <div class="progress-bar bg-<?=$item['bgProgress'];?>" role="progressbar" style="width: <?=$item['valueProgress'];?>%;" aria-valuenow="<?=$item['valueProgress'];?>" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                            <?php }?>
                        </div>
                    </div>
                </div>
            </div>
        </main>
        

        <script src="js/vendors.bundle.js"></script>
        <script src="js/app.bundle.js"></script>
        <script>
            // default list filter
            initApp.listFilter($('#js_default_list'), $('#js_default_list_filter'));
            // custom response message
            initApp.listFilter($('#js-list-msg'), $('#js-list-msg-filter'));
        </script>
    </body>
</html>
