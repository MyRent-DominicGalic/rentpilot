<?php 
use Cms\Classes\Page;
class Cms7a0f0b6a8c983e64d05fc5f2cc800b1627eef390b1426f0bde0b8ddcbf41a01aClass extends Cms\Classes\PageCode
{
public function onStart()
{
    // Adjust this to match your blueprint handle or entry model
    $this['post'] = \Tailor\Models\EntryRecord::inSection('Blog\Post')->where('slug', $this->param('slug'))->first();

    if (!$this['post']) {

        $page = Page::find('post');
        $baseSlug = trim(Str::before($page->url, '/:slug'), '/');

        $fullSlug = \Tailor\Models\EntryRecord::inSection('Content\Page')->where('slug', $baseSlug)->first()->fullslug;

        return Redirect::to(Url::to($fullSlug));
    }
}
}
