<?php
\Larakit\StaticFiles\Manager::package('larakit/sf-angular-animate')
    ->setSourceDir('public')
    ->usePackage('larakit/sf-angular')
    ->ngModule('ngAnimate')
    ->jsPackage('angular-animate.min.js');
