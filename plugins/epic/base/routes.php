<?php

use Tailor\Models\EntryRecord as EntryRecord;


Route::get('api/reset-sorting/{siteId}', function ($siteId) {

  (new EntryRecord)::inSection('Content\Page')->resetTreeNesting();

  Site::withContext($siteId, function() {
      (new EntryRecord)::inSection('Content\Page')->resetTreeNesting();
  });

  return "YES";
});
