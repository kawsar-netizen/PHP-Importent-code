

Route::group(['prefix'=>'client/info','as'=> 'client.info.'],function(){
    Route::get('index',[ClientInfoController::class,'index'])->name('client_info');
    Route::get('create',[ClientInfoController::class,'create'])->name('client_create');
    Route::post('store',[ClientInfoController::class,'store'])->name('client_store');
    Route::get('edit/{id}',[ClientInfoController::class,'edit'])->name('client_edit');
    Route::post('update',[ClientInfoController::class,'update'])->name('client_update');

});
