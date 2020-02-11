<?php

Route::get('activities', function() {
//    $activities = new \Zingeon\ArcsecondLaravel\API\Activities();
    $arcsecond = new \Zingeon\ArcsecondLaravel\Arcsecond();
    var_dump( $arcsecond->activities()->setPage(1)->setPageSize(1)->getItems());die;
});
