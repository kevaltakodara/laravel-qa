<?php

Route::resource('question','QuestionsController')->except(['show']);

Route::get('/question/{slug}','QuestionsController@show')->name('question.show');
