tocbot-plugin
===============

##A simple TOC Implementation for October CMS


This plugin includes Tocbot on your pages. Add the component to your page and render it with the component tag:

```php
{% component 'toc' %}
```

I have wrapped many of Tocbot's settings into selectable options. JQuery not required.  Tocbot has a large amount
of settings.  For specific setting implementation, please check the Tocbot documentation at
 https://tscanlin.github.io/tocbot/

You target a div class using the Capture div class option.  You then select a div class in which the TOC will render.
If you disable auto ID's, you must id your own headings.:

<p> TOC render div example.  TOC renders in this element</p>

```
<div class="js-toc toc-list toc-link"></div>

```

<p> Capture Div Example </p>

```
<div class="my-content ">
<h1>Hello</h1>
    <h2>Hello</h2>
    <h3>Hello</h3>
<h1>Hello</h1>
<h1>Hello</h1>
    <h1>Hello</h1>
    <h1>Hello</h1>
    <h1>Hello</h1>
    <h1>Hello</h1>
</div>
```
Link to Github Repository
<a href="https://tscanlin.github.io/tocbot/">https://tscanlin.github.io/tocbot/</a>
