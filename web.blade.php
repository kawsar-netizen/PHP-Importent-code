
############################################ Corporate Bill Report by Kawsar ####################################
Route::group(['prefix'=>'report/corporate/bill','as'=> 'corporate.report.'],function(){
    Route::get('index',[CorporateBillReportController::class,'index'])->name('bill');
    Route::get('corporate/bill/report',[CorporateBillReportController::class,'bill_show'])->name('bill_show');
});

############################################ Corporate Bill Report ####################################
