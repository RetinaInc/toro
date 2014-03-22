<?php
/*
Template Name: CSS Test Page
*/
?>

<?php  get_header();?>

<!DOCTYPE html>

<html>
<head>
	<title></title>
</head>

<body>
	<div class="row">
		<div class="large-3 small-12 columns">
			<div class="bs-sidebar hidden-print">
				<ul class="nav nav-stacked bs-sidenav">
					<li class="dropdown">
						<a class="dropdown-toggle" data-toggle="dropdown">Dropdowns</a>

						<ul class="nav dropdown-menu">
							<li><a href="#dropdowns-example">Example</a></li>

							<li><a href="#dropdowns-alignment">Alignment options</a></li>

							<li><a href="#dropdowns-headers">Headers</a></li>

							<li><a href="#dropdowns-disabled">Disabled menu items</a></li>
						</ul>
					</li>

					<li class="dropdown">
						<a class="dropdown-toggle" data-toggle="dropdown" >Button groups</a>

						<ul class="nav dropdown-menu">
							<li><a href="#btn-groups-single">Basic example</a></li>

							<li><a href="#btn-groups-toolbar">Button toolbar</a></li>

							<li><a href="#btn-groups-sizing">Sizing</a></li>

							<li><a href="#btn-groups-nested">Nesting</a></li>

							<li><a href="#btn-groups-vertical">Vertical variation</a></li>

							<li><a href="#btn-groups-justified">Justified link variation</a></li>
						</ul>
					</li>

					<li class="dropdown">
						<a class="dropdown-toggle" data-toggle="dropdown" >Button dropdowns</a>

						<ul class="nav dropdown-menu">
							<li><a href="#btn-dropdowns-single">Single button dropdowns</a></li>

							<li><a href="#btn-dropdowns-split">Split button dropdowns</a></li>

							<li><a href="#btn-dropdowns-sizing">Sizing</a></li>

							<li><a href="#btn-dropdowns-dropup">Dropup variation</a></li>
						</ul>
					</li>

					<li class="dropdown">
						<a class="dropdown-toggle" data-toggle="dropdown" >Input groups</a>

						<ul class="nav dropdown-menu">
							<li><a href="#input-groups-basic">Basic example</a></li>

							<li><a href="#input-groups-sizing">Sizing</a></li>

							<li><a href="#input-groups-checkboxes-radios">Checkbox and radios addons</a></li>

							<li><a href="#input-groups-buttons">Button addons</a></li>

							<li><a href="#input-groups-buttons-dropdowns">Buttons with dropdowns</a></li>

							<li><a href="#input-groups-buttons-segmented">Segmented buttons</a></li>
						</ul>
					</li>

					<li class="dropdown">
						<a class="dropdown-toggle" data-toggle="dropdown">Navs</a>

						<ul  class="nav dropdown-menu">
							<li><a href="#nav-tabs">Tabs</a></li>

							<li><a href="#nav-pills">Pills</a></li>

							<li><a href="#nav-justified">Justified nav</a></li>

							<li><a href="#nav-disabled-links">Disabled links</a></li>

							<li><a href="#nav-dropdowns">Using dropdowns</a></li>
						</ul>
					</li>

					<li class="dropdown">
						<a class="dropdown-toggle" data-toggle="dropdown" >Navbar</a>

						<ul  class="nav dropdown-menu">
							<li><a href="#navbar-default">Default navbar</a></li>

							<li><a href="#navbar-forms">Forms</a></li>

							<li><a href="#navbar-buttons">Buttons</a></li>

							<li><a href="#navbar-text">Text</a></li>

							<li><a href="#navbar-links">Non-nav links</a></li>

							<li><a href="#navbar-component-alignment">Component alignment</a></li>

							<li><a href="#navbar-fixed-top">Fixed to top</a></li>

							<li><a href="#navbar-fixed-bottom">Fixed to bottom</a></li>

							<li><a href="#navbar-static-top">Static top</a></li>

							<li><a href="#navbar-inverted">Inverted navbar</a></li>
						</ul>
					</li>

					<li><a href="#breadcrumbs">Breadcrumbs</a></li>

					<li class="dropdown">
						<a class="dropdown-toggle" data-toggle="dropdown">Pagination</a>

						<ul  class="nav dropdown-menu">
							<li><a href="#pagination-default">Default pagination</a></li>

							<li><a href="#pagination-pager">Pager</a></li>
						</ul>
					</li>

					<li><a href="#labels">Labels</a></li>

					<li><a href="#badges">Badges</a></li>

					<li><a href="#jumbotron">Jumbotron</a></li>

					<li><a href="#page-header">Page header</a></li>

					<li>
						<a class="dropdown-toggle" data-toggle="dropdown" >Thumbnails</a>

						<ul  class="nav dropdown-menu">
							<li><a href="#thumbnails-default">Default example</a></li>

							<li><a href="#thumbnails-custom-content">Custom content</a></li>
						</ul>
					</li>

					<li>
						<a class="dropdown-toggle" data-toggle="dropdown" >Alerts</a>

						<ul  class="nav dropdown-menu">
							<li><a href="#alerts-examples">Examples</a></li>

							<li><a href="#alerts-dismissable">Dismissable alerts</a></li>

							<li><a href="#alerts-links">Links in alerts</a></li>
						</ul>
					</li>

					<li>
						<a class="dropdown-toggle" data-toggle="dropdown" >Progress bars</a>

						<ul  class="nav dropdown-menu">
							<li><a href="#progress-basic">Basic example</a></li>

							<li><a href="#progress-alternatives">Contextual alternatives</a></li>

							<li><a href="#progress-striped">Striped</a></li>

							<li><a href="#progress-animated">Animated</a></li>

							<li><a href="#progress-stacked">Stacked</a></li>
						</ul>
					</li>

					<li>
						<a class="dropdown-toggle" data-toggle="dropdown" >Media object</a>

						<ul  class="nav dropdown-menu">
							<li><a href="#media-default">Default media</a></li>

							<li><a href="#media-list">Media list</a></li>
						</ul>
					</li>

					<li>
						<a class="dropdown-toggle" data-toggle="dropdown" >List group</a>

						<ul  class="nav dropdown-menu">
							<li><a href="#list-group-basic">Basic example</a></li>

							<li><a href="#list-group-badges">Badges</a></li>

							<li><a href="#list-group-linked">Linked items</a></li>

							<li><a href="#list-group-custom-content">Custom content</a></li>
						</ul>
					</li>

					<li>
						<a class="dropdown-toggle" data-toggle="dropdown">Panels</a>

						<ul  class="nav dropdown-menu">
							<li><a href="#panels-basic">Basic example</a></li>

							<li><a href="#panels-heading">Panel with heading</a></li>

							<li><a href="#panels-alternatives">Contextual alternatives</a></li>

							<li><a href="#panels-tables">With tables</a></li>

							<li><a href="#panels-list-group">With list groups</a></li>
						</ul>
					</li>

					<li><a href="#wells">Wells</a></li>
				</ul>
			</div>
		</div><!-- END OF NAVIGATION -->

		<div class="large-9 small-12 columns">
			<!-- Dropdowns
  ================================================== -->

			<div class="bs-docs-section">
				<div class="page-header">
					<h1 id="dropdowns">Dropdowns</h1>
				</div>

				<p class="lead">Toggleable, contextual menu for displaying lists of links. Made interactive with the <a href="../javascript/#dropdowns">dropdown JavaScript plugin</a>.</p>

				<h3 id="dropdowns-example">Example</h3>

				<p>Wrap the dropdown's trigger and the dropdown menu within <code>.dropdown</code>, or another element that declares <code>position: relative;</code>. Then add the menu's HTML.</p>

				<div class="bs-example">
					<div class="dropdown clearfix">
						<button class="btn dropdown-toggle sr-only" data-toggle="dropdown" id="dropdownMenu1" type="button">Dropdown</button>

						<ul class="dropdown-menu">
							<li><a href="#" tabindex="-1">Action</a></li>

							<li><a href="#" tabindex="-1">Another action</a></li>

							<li><a href="#" tabindex="-1">Something else here</a></li>

							<li><a href="#" tabindex="-1">Separated link</a></li>
						</ul>
					</div>
				</div><!-- /example -->

				<div class="highlight">
					<pre>
<code class="html"><span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"dropdown"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;button</span> <span class="na">class=</span><span class="s">"btn dropdown-toggle sr-only"</span> <span class="na">type=</span><span class="s">"button"</span> <span class="na">id=</span><span class="s">"dropdownMenu1"</span> <span class="na">data-toggle=</span><span class="s">"dropdown"</span><span class="nt">&gt;</span>
	Dropdown
	<span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"caret"</span><span class="nt">&gt;&lt;/span&gt;</span>
  <span class="nt">&lt;/button&gt;</span>
  <span class="nt">&lt;ul</span> <span class="na">class=</span><span class="s">"dropdown-menu"</span> <span class="na">role=</span><span class="s">"menu"</span> <span class="na">aria-labelledby=</span><span class="s">"dropdownMenu1"</span><span class="nt">&gt;</span>
	<span class="nt">&lt;li</span> <span class="na">role=</span><span class="s">"presentation"</span><span class="nt">&gt;&lt;a</span> <span class="na">role=</span><span class="s">"menuitem"</span> <span class="na">tabindex=</span><span class="s">"-1"</span> <span class="na">href=</span><span class="s">"#"</span><span class="nt">&gt;</span>Action<span class="nt">&lt;/a&gt;&lt;/li&gt;</span>
	<span class="nt">&lt;li</span> <span class="na">role=</span><span class="s">"presentation"</span><span class="nt">&gt;&lt;a</span> <span class="na">role=</span><span class="s">"menuitem"</span> <span class="na">tabindex=</span><span class="s">"-1"</span> <span class="na">href=</span><span class="s">"#"</span><span class="nt">&gt;</span>Another action<span class="nt">&lt;/a&gt;&lt;/li&gt;</span>
	<span class="nt">&lt;li</span> <span class="na">role=</span><span class="s">"presentation"</span><span class="nt">&gt;&lt;a</span> <span class="na">role=</span><span class="s">"menuitem"</span> <span class="na">tabindex=</span><span class="s">"-1"</span> <span class="na">href=</span><span class="s">"#"</span><span class="nt">&gt;</span>Something else here<span class="nt">&lt;/a&gt;&lt;/li&gt;</span>
	<span class="nt">&lt;li</span> <span class="na">role=</span><span class="s">"presentation"</span> <span class="na">class=</span><span class="s">"divider"</span><span class="nt">&gt;&lt;/li&gt;</span>
	<span class="nt">&lt;li</span> <span class="na">role=</span><span class="s">"presentation"</span><span class="nt">&gt;&lt;a</span> <span class="na">role=</span><span class="s">"menuitem"</span> <span class="na">tabindex=</span><span class="s">"-1"</span> <span class="na">href=</span><span class="s">"#"</span><span class="nt">&gt;</span>Separated link<span class="nt">&lt;/a&gt;&lt;/li&gt;</span>
  <span class="nt">&lt;/ul&gt;</span>
<span class="nt">&lt;/div&gt;</span>
</code>
</pre>
				</div>

				<h3 id="dropdowns-alignment">Alignment options</h3>

				<p>Add <code>.pull-right</code> to a <code>.dropdown-menu</code> to right align the dropdown menu.</p>

				<div class="highlight">
					<pre>
<code class="html"><span class="nt">&lt;ul</span> <span class="na">class=</span><span class="s">"dropdown-menu pull-right"</span> <span class="na">role=</span><span class="s">"menu"</span> <span class="na">aria-labelledby=</span><span class="s">"dLabel"</span><span class="nt">&gt;</span>
  ...
<span class="nt">&lt;/ul&gt;</span>
</code>
</pre>
				</div>

				<h3 id="dropdowns-headers">Headers</h3>

				<p>Add a header to label sections of actions in any dropdown menu.</p>

				<div class="bs-example">
					<div class="dropdown clearfix">
						<button class="btn dropdown-toggle sr-only" data-toggle="dropdown" id="dropdownMenu2" type="button">Dropdown</button>

						<ul class="dropdown-menu">
							<li class="dropdown-header">Dropdown header</li>

							<li><a href="#" tabindex="-1">Action</a></li>

							<li><a href="#" tabindex="-1">Another action</a></li>

							<li><a href="#" tabindex="-1">Something else here</a></li>

							<li class="dropdown-header">Dropdown header</li>

							<li><a href="#" tabindex="-1">Separated link</a></li>
						</ul>
					</div>
				</div><!-- /example -->

				<div class="highlight">
					<pre>
<code class="html"><span class="nt">&lt;ul</span> <span class="na">class=</span><span class="s">"dropdown-menu"</span> <span class="na">role=</span><span class="s">"menu"</span> <span class="na">aria-labelledby=</span><span class="s">"dropdownMenu2"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;li</span> <span class="na">role=</span><span class="s">"presentation"</span> <span class="na">class=</span><span class="s">"dropdown-header"</span><span class="nt">&gt;</span>Dropdown header<span class="nt">&lt;/li&gt;</span>
  ...
  <span class="nt">&lt;li</span> <span class="na">role=</span><span class="s">"presentation"</span> <span class="na">class=</span><span class="s">"divider"</span><span class="nt">&gt;&lt;/li&gt;</span>
  <span class="nt">&lt;li</span> <span class="na">role=</span><span class="s">"presentation"</span> <span class="na">class=</span><span class="s">"dropdown-header"</span><span class="nt">&gt;</span>Dropdown header<span class="nt">&lt;/li&gt;</span>
  ...
<span class="nt">&lt;/ul&gt;</span>
</code>
</pre>
				</div>

				<h3 id="dropdowns-disabled">Disabled menu items</h3>

				<p>Add <code>.disabled</code> to a <code>&lt;li&gt;</code> in the dropdown to disable the link.</p>

				<div class="bs-example">
					<div class="dropdown clearfix">
						<button class="btn dropdown-toggle sr-only" data-toggle="dropdown" id="dropdownMenu3" type="button">Dropdown</button>

						<ul class="dropdown-menu">
							<li><a href="#" tabindex="-1">Regular link</a></li>

							<li class="disabled"><a href="#" tabindex="-1">Disabled link</a></li>

							<li><a href="#" tabindex="-1">Another link</a></li>
						</ul>
					</div>
				</div><!-- /example -->

				<div class="highlight">
					<pre>
<code class="html"><span class="nt">&lt;ul</span> <span class="na">class=</span><span class="s">"dropdown-menu"</span> <span class="na">role=</span><span class="s">"menu"</span> <span class="na">aria-labelledby=</span><span class="s">"dropdownMenu3"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;li</span> <span class="na">role=</span><span class="s">"presentation"</span><span class="nt">&gt;&lt;a</span> <span class="na">role=</span><span class="s">"menuitem"</span> <span class="na">tabindex=</span><span class="s">"-1"</span> <span class="na">href=</span><span class="s">"#"</span><span class="nt">&gt;</span>Regular link<span class="nt">&lt;/a&gt;&lt;/li&gt;</span>
  <span class="nt">&lt;li</span> <span class="na">role=</span><span class="s">"presentation"</span> <span class="na">class=</span><span class="s">"disabled"</span><span class="nt">&gt;&lt;a</span> <span class="na">role=</span><span class="s">"menuitem"</span> <span class="na">tabindex=</span><span class="s">"-1"</span> <span class="na">href=</span><span class="s">"#"</span><span class="nt">&gt;</span>Disabled link<span class="nt">&lt;/a&gt;&lt;/li&gt;</span>
  <span class="nt">&lt;li</span> <span class="na">role=</span><span class="s">"presentation"</span><span class="nt">&gt;&lt;a</span> <span class="na">role=</span><span class="s">"menuitem"</span> <span class="na">tabindex=</span><span class="s">"-1"</span> <span class="na">href=</span><span class="s">"#"</span><span class="nt">&gt;</span>Another link<span class="nt">&lt;/a&gt;&lt;/li&gt;</span>
<span class="nt">&lt;/ul&gt;</span>
</code>
</pre>
				</div>
			</div><!-- Button Groups
  ================================================== -->

			<div class="bs-docs-section">
				<div class="page-header">
					<h1 id="btn-groups">Button groups</h1>
				</div>

				<p class="lead">Group a series of buttons together on a single line with the button group. Add on optional JavaScript radio and checkbox style behavior with <a href="../javascript/#buttons">our buttons plugin</a>.</p>

				<div class="bs-callout bs-callout-info">
					<h4>Tooltips &amp; popovers in button groups require special setting</h4>

					<p>When using tooltips or popovers on elements within a <code>.btn-group</code>, you'll have to specify the option <code>container: 'body'</code> to avoid unwanted side effects (such as the element growing wider and/or losing its rounded corners when the tooltip or popover is triggered).</p>
				</div>

				<h3 id="btn-groups-single">Basic example</h3>

				<p>Wrap a series of buttons with <code>.btn</code> in <code>.btn-group</code>.</p>

				<div class="bs-example">
					<div class="btn-group" style="margin: 9px 0 5px;">
						<button class="btn btn-default" type="button">Left</button> <button class="btn btn-default" type="button">Middle</button> <button class="btn btn-default" type="button">Right</button>
					</div>
				</div>

				<div class="highlight">
					<pre>
<code class="html"><span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"btn-group"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;button</span> <span class="na">type=</span><span class="s">"button"</span> <span class="na">class=</span><span class="s">"btn btn-default"</span><span class="nt">&gt;</span>Left<span class="nt">&lt;/button&gt;</span>
  <span class="nt">&lt;button</span> <span class="na">type=</span><span class="s">"button"</span> <span class="na">class=</span><span class="s">"btn btn-default"</span><span class="nt">&gt;</span>Middle<span class="nt">&lt;/button&gt;</span>
  <span class="nt">&lt;button</span> <span class="na">type=</span><span class="s">"button"</span> <span class="na">class=</span><span class="s">"btn btn-default"</span><span class="nt">&gt;</span>Right<span class="nt">&lt;/button&gt;</span>
<span class="nt">&lt;/div&gt;</span>
</code>
</pre>
				</div>

				<h3 id="btn-groups-toolbar">Button toolbar</h3>

				<p>Combine sets of <code>&lt;div class="btn-group"&gt;</code> into a <code>&lt;div class="btn-toolbar"&gt;</code> for more complex components.</p>

				<div class="bs-example">
					<div class="btn-toolbar" style="margin: 0;">
						<div class="btn-group">
							<button class="btn btn-default" type="button">1</button> <button class="btn btn-default" type="button">2</button> <button class="btn btn-default" type="button">3</button> <button class="btn btn-default" type="button">4</button>
						</div>

						<div class="btn-group">
							<button class="btn btn-default" type="button">5</button> <button class="btn btn-default" type="button">6</button> <button class="btn btn-default" type="button">7</button>
						</div>

						<div class="btn-group">
							<button class="btn btn-default" type="button">8</button>
						</div>
					</div>
				</div>

				<div class="highlight">
					<pre>
<code class="html"><span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"btn-toolbar"</span> <span class="na">role=</span><span class="s">"toolbar"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"btn-group"</span><span class="nt">&gt;</span>...<span class="nt">&lt;/div&gt;</span>
  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"btn-group"</span><span class="nt">&gt;</span>...<span class="nt">&lt;/div&gt;</span>
  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"btn-group"</span><span class="nt">&gt;</span>...<span class="nt">&lt;/div&gt;</span>
<span class="nt">&lt;/div&gt;</span>
</code>
</pre>
				</div>

				<h3 id="btn-groups-sizing">Sizing</h3>

				<p>Instead of applying button sizing classes to every button in a group, just add <code>.btn-group-*</code> to the <code>.btn-group</code>.</p>

				<div class="bs-example">
					<div class="btn-toolbar">
						<div class="btn-group btn-group-lg">
							<button class="btn btn-default" type="button">Left</button> <button class="btn btn-default" type="button">Middle</button> <button class="btn btn-default" type="button">Right</button>
						</div>
					</div>

					<div class="btn-toolbar">
						<div class="btn-group">
							<button class="btn btn-default" type="button">Left</button> <button class="btn btn-default" type="button">Middle</button> <button class="btn btn-default" type="button">Right</button>
						</div>
					</div>

					<div class="btn-toolbar">
						<div class="btn-group btn-group-sm">
							<button class="btn btn-default" type="button">Left</button> <button class="btn btn-default" type="button">Middle</button> <button class="btn btn-default" type="button">Right</button>
						</div>
					</div>

					<div class="btn-toolbar">
						<div class="btn-group btn-group-xs">
							<button class="btn btn-default" type="button">Left</button> <button class="btn btn-default" type="button">Middle</button> <button class="btn btn-default" type="button">Right</button>
						</div>
					</div>
				</div>

				<div class="highlight">
					<pre>
<code class="html"><span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"btn-group btn-group-lg"</span><span class="nt">&gt;</span>...<span class="nt">&lt;/div&gt;</span>
<span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"btn-group"</span><span class="nt">&gt;</span>...<span class="nt">&lt;/div&gt;</span>
<span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"btn-group btn-group-sm"</span><span class="nt">&gt;</span>...<span class="nt">&lt;/div&gt;</span>
<span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"btn-group btn-group-xs"</span><span class="nt">&gt;</span>...<span class="nt">&lt;/div&gt;</span>
</code>
</pre>
				</div>

				<h3 id="btn-groups-nested">Nesting</h3>

				<p>Place a <code>.btn-group</code> within another <code>.btn-group</code> when you want dropdown menus mixed with a series of buttons.</p>

				<div class="bs-example">
					<div class="btn-group">
						<button class="btn btn-default" type="button">1</button> <button class="btn btn-default" type="button">2</button>

						<div class="btn-group">
							<button class="btn btn-default dropdown-toggle" data-toggle="dropdown" id="btnGroupDrop1" type="button">Dropdown</button>

							<ul class="dropdown-menu">
								<li><a href="#">Dropdown link</a></li>

								<li><a href="#">Dropdown link</a></li>
							</ul>
						</div>
					</div>
				</div>

				<div class="highlight">
					<pre>
<code class="html"><span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"btn-group"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;button</span> <span class="na">type=</span><span class="s">"button"</span> <span class="na">class=</span><span class="s">"btn btn-default"</span><span class="nt">&gt;</span>1<span class="nt">&lt;/button&gt;</span>
  <span class="nt">&lt;button</span> <span class="na">type=</span><span class="s">"button"</span> <span class="na">class=</span><span class="s">"btn btn-default"</span><span class="nt">&gt;</span>2<span class="nt">&lt;/button&gt;</span>

  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"btn-group"</span><span class="nt">&gt;</span>
	<span class="nt">&lt;button</span> <span class="na">type=</span><span class="s">"button"</span> <span class="na">class=</span><span class="s">"btn btn-default dropdown-toggle"</span> <span class="na">data-toggle=</span><span class="s">"dropdown"</span><span class="nt">&gt;</span>
	  Dropdown
	  <span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"caret"</span><span class="nt">&gt;&lt;/span&gt;</span>
	<span class="nt">&lt;/button&gt;</span>
	<span class="nt">&lt;ul</span> <span class="na">class=</span><span class="s">"dropdown-menu"</span><span class="nt">&gt;</span>
	  <span class="nt">&lt;li&gt;&lt;a</span> <span class="na">href=</span><span class="s">"#"</span><span class="nt">&gt;</span>Dropdown link<span class="nt">&lt;/a&gt;&lt;/li&gt;</span>
	  <span class="nt">&lt;li&gt;&lt;a</span> <span class="na">href=</span><span class="s">"#"</span><span class="nt">&gt;</span>Dropdown link<span class="nt">&lt;/a&gt;&lt;/li&gt;</span>
	<span class="nt">&lt;/ul&gt;</span>
  <span class="nt">&lt;/div&gt;</span>
<span class="nt">&lt;/div&gt;</span>
</code>
</pre>
				</div>

				<h3 id="btn-groups-vertical">Vertical variation</h3>

				<p>Make a set of buttons appear vertically stacked rather than horizontally.</p>

				<div class="bs-example">
					<div class="btn-group-vertical">
						<button class="btn btn-default" type="button">Button</button> <button class="btn btn-default" type="button">Button</button>

						<div class="btn-group">
							<button class="btn btn-default dropdown-toggle" data-toggle="dropdown" id="btnGroupVerticalDrop1" type="button">Dropdown</button>

							<ul class="dropdown-menu">
								<li><a href="#">Dropdown link</a></li>

								<li><a href="#">Dropdown link</a></li>
							</ul>
						</div><button class="btn btn-default" type="button">Button</button> <button class="btn btn-default" type="button">Button</button>

						<div class="btn-group">
							<button class="btn btn-default dropdown-toggle" data-toggle="dropdown" id="btnGroupVerticalDrop2" type="button">Dropdown</button>

							<ul class="dropdown-menu">
								<li><a href="#">Dropdown link</a></li>

								<li><a href="#">Dropdown link</a></li>
							</ul>
						</div>

						<div class="btn-group">
							<button class="btn btn-default dropdown-toggle" data-toggle="dropdown" id="btnGroupVerticalDrop3" type="button">Dropdown</button>

							<ul class="dropdown-menu">
								<li><a href="#">Dropdown link</a></li>

								<li><a href="#">Dropdown link</a></li>
							</ul>
						</div>

						<div class="btn-group">
							<button class="btn btn-default dropdown-toggle" data-toggle="dropdown" id="btnGroupVerticalDrop4" type="button">Dropdown</button>

							<ul class="dropdown-menu">
								<li><a href="#">Dropdown link</a></li>

								<li><a href="#">Dropdown link</a></li>
							</ul>
						</div>
					</div>
				</div>

				<div class="highlight">
					<pre>
<code class="html"><span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"btn-group-vertical"</span><span class="nt">&gt;</span>
  ...
<span class="nt">&lt;/div&gt;</span>
</code>
</pre>
				</div>

				<h3 id="btn-groups-justified">Justified link variation</h3>

				<p>Make a group of buttons stretch at the same size to span the entire width of its parent. Also works with button dropdowns within the button group.</p>

				<div class="bs-callout bs-callout-warning">
					<h4>Element-specific usage</h4>

					<p>This only works with <code>&lt;a&gt;</code> elements as the <code>&lt;button&gt;</code> doesn't pick up the styles we use to justify content (some <code>display: table-cell;</code>-fu).</p>
				</div>

				<div class="bs-example">
					<div class="btn-group btn-group-justified">
						<a class="btn btn-default">Left</a> <a class="btn btn-default">Middle</a> <a class="btn btn-default">Right</a>
					</div><br>

					<div class="btn-group btn-group-justified">
						<a class="btn btn-default">Left</a> <a class="btn btn-default">Middle</a>

						<div class="btn-group">
							<a class="btn btn-default dropdown-toggle" data-toggle="dropdown">Right dropdown</a>

							<ul class="dropdown-menu">
								<li><a href="#">Action</a></li>

								<li><a href="#">Another action</a></li>

								<li><a href="#">Something else here</a></li>

								<li><a href="#">Separated link</a></li>
							</ul>
						</div>
					</div>
				</div>

				<div class="highlight">
					<pre>
<code class="html"><span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"btn-group btn-group-justified"</span><span class="nt">&gt;</span>
  ...
<span class="nt">&lt;/div&gt;</span>
</code>
</pre>
				</div>
			</div><!-- Split button dropdowns
  ================================================== -->

			<div class="bs-docs-section">
				<div class="page-header">
					<h1 id="btn-dropdowns">Button dropdowns</h1>
				</div>

				<p class="lead">Use any button to trigger a dropdown menu by placing it within a <code>.btn-group</code> and providing the proper menu markup.</p>

				<div class="bs-callout bs-callout-danger">
					<h4>Plugin dependency</h4>

					<p>Button dropdowns require the <a href="../javascript/#dropdowns">dropdown plugin</a> to be included in your version of Bootstrap.</p>
				</div>

				<h3 id="btn-dropdowns-single">Single button dropdowns</h3>

				<p>Turn a button into a dropdown toggle with some basic markup changes.</p>

				<div class="bs-example">
					<div class="btn-group">
						<button class="btn btn-default dropdown-toggle" data-toggle="dropdown" type="button">Default <span class="caret"></span></button>

						<ul class="dropdown-menu">
							<li><a href="#">Action</a></li>

							<li><a href="#">Another action</a></li>

							<li><a href="#">Something else here</a></li>

							<li><a href="#">Separated link</a></li>
						</ul>
					</div><!-- /btn-group -->

					<div class="btn-group">
						<button class="btn btn-primary dropdown-toggle" data-toggle="dropdown" type="button">Primary <span class="caret"></span></button>

						<ul class="dropdown-menu">
							<li><a href="#">Action</a></li>

							<li><a href="#">Another action</a></li>

							<li><a href="#">Something else here</a></li>

							<li><a href="#">Separated link</a></li>
						</ul>
					</div><!-- /btn-group -->

					<div class="btn-group">
						<button class="btn btn-success dropdown-toggle" data-toggle="dropdown" type="button">Success <span class="caret"></span></button>

						<ul class="dropdown-menu">
							<li><a href="#">Action</a></li>

							<li><a href="#">Another action</a></li>

							<li><a href="#">Something else here</a></li>

							<li><a href="#">Separated link</a></li>
						</ul>
					</div><!-- /btn-group -->

					<div class="btn-group">
						<button class="btn btn-info dropdown-toggle" data-toggle="dropdown" type="button">Info <span class="caret"></span></button>

						<ul class="dropdown-menu">
							<li><a href="#">Action</a></li>

							<li><a href="#">Another action</a></li>

							<li><a href="#">Something else here</a></li>

							<li><a href="#">Separated link</a></li>
						</ul>
					</div><!-- /btn-group -->

					<div class="btn-group">
						<button class="btn btn-warning dropdown-toggle" data-toggle="dropdown" type="button">Warning <span class="caret"></span></button>

						<ul class="dropdown-menu">
							<li><a href="#">Action</a></li>

							<li><a href="#">Another action</a></li>

							<li><a href="#">Something else here</a></li>

							<li><a href="#">Separated link</a></li>
						</ul>
					</div><!-- /btn-group -->

					<div class="btn-group">
						<button class="btn btn-danger dropdown-toggle" data-toggle="dropdown" type="button">Danger <span class="caret"></span></button>

						<ul class="dropdown-menu">
							<li><a href="#">Action</a></li>

							<li><a href="#">Another action</a></li>

							<li><a href="#">Something else here</a></li>

							<li><a href="#">Separated link</a></li>
						</ul>
					</div><!-- /btn-group -->
				</div>

				<div class="highlight">
					<pre>
<code class="html"><span class="c">&lt;!-- Single button --&gt;</span>
<span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"btn-group"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;button</span> <span class="na">type=</span><span class="s">"button"</span> <span class="na">class=</span><span class="s">"btn btn-default dropdown-toggle"</span> <span class="na">data-toggle=</span><span class="s">"dropdown"</span><span class="nt">&gt;</span>
	Action <span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"caret"</span><span class="nt">&gt;&lt;/span&gt;</span>
  <span class="nt">&lt;/button&gt;</span>
  <span class="nt">&lt;ul</span> <span class="na">class=</span><span class="s">"dropdown-menu"</span> <span class="na">role=</span><span class="s">"menu"</span><span class="nt">&gt;</span>
	<span class="nt">&lt;li&gt;&lt;a</span> <span class="na">href=</span><span class="s">"#"</span><span class="nt">&gt;</span>Action<span class="nt">&lt;/a&gt;&lt;/li&gt;</span>
	<span class="nt">&lt;li&gt;&lt;a</span> <span class="na">href=</span><span class="s">"#"</span><span class="nt">&gt;</span>Another action<span class="nt">&lt;/a&gt;&lt;/li&gt;</span>
	<span class="nt">&lt;li&gt;&lt;a</span> <span class="na">href=</span><span class="s">"#"</span><span class="nt">&gt;</span>Something else here<span class="nt">&lt;/a&gt;&lt;/li&gt;</span>
	<span class="nt">&lt;li</span> <span class="na">class=</span><span class="s">"divider"</span><span class="nt">&gt;&lt;/li&gt;</span>
	<span class="nt">&lt;li&gt;&lt;a</span> <span class="na">href=</span><span class="s">"#"</span><span class="nt">&gt;</span>Separated link<span class="nt">&lt;/a&gt;&lt;/li&gt;</span>
  <span class="nt">&lt;/ul&gt;</span>
<span class="nt">&lt;/div&gt;</span>
</code>
</pre>
				</div>

				<h3 id="btn-dropdowns-split">Split button dropdowns</h3>

				<p>Similarly, create split button dropdowns with the same markup changes, only with a separate button.</p>

				<div class="bs-example">
					<div class="btn-group">
						<button class="btn btn-default" type="button">Default</button> <button class="btn btn-default dropdown-toggle" data-toggle="dropdown" type="button"><span class="sr-only">Toggle Dropdown</span><span class="caret"></span></button>

						<ul class="dropdown-menu">
							<li><a href="#">Action</a></li>

							<li><a href="#">Another action</a></li>

							<li><a href="#">Something else here</a></li>

							<li><a href="#">Separated link</a></li>
						</ul>
					</div><!-- /btn-group -->

					<div class="btn-group">
						<button class="btn btn-primary" type="button">Primary</button> <button class="btn btn-primary dropdown-toggle" data-toggle="dropdown" type="button"><span class="sr-only">Toggle Dropdown</span><span class="caret"></button>

						<ul class="dropdown-menu">
							<li><a href="#">Action</a></li>

							<li><a href="#">Another action</a></li>

							<li><a href="#">Something else here</a></li>

							<li><a href="#">Separated link</a></li>
						</ul>
					</div><!-- /btn-group -->

					<div class="btn-group">
						<button class="btn btn-success" type="button">Success</button> <button class="btn btn-success dropdown-toggle" data-toggle="dropdown" type="button"><span class="sr-only">Toggle Dropdown</span><span class="caret"></button>

						<ul class="dropdown-menu">
							<li><a href="#">Action</a></li>

							<li><a href="#">Another action</a></li>

							<li><a href="#">Something else here</a></li>

							<li><a href="#">Separated link</a></li>
						</ul>
					</div><!-- /btn-group -->

					<div class="btn-group">
						<button class="btn btn-info" type="button">Info</button> <button class="btn btn-info dropdown-toggle" data-toggle="dropdown" type="button"><span class="sr-only">Toggle Dropdown</span><span class="caret"></button>

						<ul class="dropdown-menu">
							<li><a href="#">Action</a></li>

							<li><a href="#">Another action</a></li>

							<li><a href="#">Something else here</a></li>

							<li><a href="#">Separated link</a></li>
						</ul>
					</div><!-- /btn-group -->

					<div class="btn-group">
						<button class="btn btn-warning" type="button">Warning</button> <button class="btn btn-warning dropdown-toggle" data-toggle="dropdown" type="button"><span class="sr-only">Toggle Dropdown</span><span class="caret"></button>

						<ul class="dropdown-menu">
							<li><a href="#">Action</a></li>

							<li><a href="#">Another action</a></li>

							<li><a href="#">Something else here</a></li>

							<li><a href="#">Separated link</a></li>
						</ul>
					</div><!-- /btn-group -->

					<div class="btn-group">
						<button class="btn btn-danger" type="button">Danger</button> <button class="btn btn-danger dropdown-toggle" data-toggle="dropdown" type="button"><span class="sr-only">Toggle Dropdown</span><span class="caret"></button>

						<ul class="dropdown-menu">
							<li><a href="#">Action</a></li>

							<li><a href="#">Another action</a></li>

							<li><a href="#">Something else here</a></li>

							<li><a href="#">Separated link</a></li>
						</ul>
					</div><!-- /btn-group -->
				</div>

				<div class="highlight">
					<pre>
<code class="html"><span class="c">&lt;!-- Split button --&gt;</span>
<span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"btn-group"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;button</span> <span class="na">type=</span><span class="s">"button"</span> <span class="na">class=</span><span class="s">"btn btn-danger"</span><span class="nt">&gt;</span>Action<span class="nt">&lt;/button&gt;</span>
  <span class="nt">&lt;button</span> <span class="na">type=</span><span class="s">"button"</span> <span class="na">class=</span><span class="s">"btn btn-danger dropdown-toggle"</span> <span class="na">data-toggle=</span><span class="s">"dropdown"</span><span class="nt">&gt;</span>
	<span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"caret"</span><span class="nt">&gt;&lt;/span&gt;</span>
	<span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"sr-only"</span><span class="nt">&gt;</span>Toggle Dropdown<span class="nt">&lt;/span&gt;</span>
  <span class="nt">&lt;/button&gt;</span>
  <span class="nt">&lt;ul</span> <span class="na">class=</span><span class="s">"dropdown-menu"</span> <span class="na">role=</span><span class="s">"menu"</span><span class="nt">&gt;</span>
	<span class="nt">&lt;li&gt;&lt;a</span> <span class="na">href=</span><span class="s">"#"</span><span class="nt">&gt;</span>Action<span class="nt">&lt;/a&gt;&lt;/li&gt;</span>
	<span class="nt">&lt;li&gt;&lt;a</span> <span class="na">href=</span><span class="s">"#"</span><span class="nt">&gt;</span>Another action<span class="nt">&lt;/a&gt;&lt;/li&gt;</span>
	<span class="nt">&lt;li&gt;&lt;a</span> <span class="na">href=</span><span class="s">"#"</span><span class="nt">&gt;</span>Something else here<span class="nt">&lt;/a&gt;&lt;/li&gt;</span>
	<span class="nt">&lt;li</span> <span class="na">class=</span><span class="s">"divider"</span><span class="nt">&gt;&lt;/li&gt;</span>
	<span class="nt">&lt;li&gt;&lt;a</span> <span class="na">href=</span><span class="s">"#"</span><span class="nt">&gt;</span>Separated link<span class="nt">&lt;/a&gt;&lt;/li&gt;</span>
  <span class="nt">&lt;/ul&gt;</span>
<span class="nt">&lt;/div&gt;</span>
</code>
</pre>
				</div>

				<h3 id="btn-dropdowns-sizing">Sizing</h3>

				<p>Button dropdowns work with buttons of all sizes.</p>

				<div class="bs-example">
					<div class="btn-toolbar">
						<div class="btn-group">
							<button class="btn btn-default btn-lg dropdown-toggle" data-toggle="dropdown" type="button">Large button</button>

							<ul class="dropdown-menu">
								<li><a href="#">Action</a></li>

								<li><a href="#">Another action</a></li>

								<li><a href="#">Something else here</a></li>

								<li><a href="#">Separated link</a></li>
							</ul>
						</div><!-- /btn-group -->
					</div><!-- /btn-toolbar -->

					<div class="btn-toolbar">
						<div class="btn-group">
							<button class="btn btn-default btn-sm dropdown-toggle" data-toggle="dropdown" type="button">Small button</button>

							<ul class="dropdown-menu">
								<li><a href="#">Action</a></li>

								<li><a href="#">Another action</a></li>

								<li><a href="#">Something else here</a></li>

								<li><a href="#">Separated link</a></li>
							</ul>
						</div><!-- /btn-group -->
					</div><!-- /btn-toolbar -->

					<div class="btn-toolbar">
						<div class="btn-group">
							<button class="btn btn-default btn-xs dropdown-toggle" data-toggle="dropdown" type="button">Extra small button</button>

							<ul class="dropdown-menu">
								<li><a href="#">Action</a></li>

								<li><a href="#">Another action</a></li>

								<li><a href="#">Something else here</a></li>

								<li><a href="#">Separated link</a></li>
							</ul>
						</div><!-- /btn-group -->
					</div><!-- /btn-toolbar -->
				</div><!-- /example -->

				<div class="highlight">
					<pre>
<code class="html"><span class="c">&lt;!-- Large button group --&gt;</span>
<span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"btn-group"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;button</span> <span class="na">class=</span><span class="s">"btn btn-default btn-lg dropdown-toggle"</span> <span class="na">type=</span><span class="s">"button"</span> <span class="na">data-toggle=</span><span class="s">"dropdown"</span><span class="nt">&gt;</span>
	Large button <span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"caret"</span><span class="nt">&gt;&lt;/span&gt;</span>
  <span class="nt">&lt;/button&gt;</span>
  <span class="nt">&lt;ul</span> <span class="na">class=</span><span class="s">"dropdown-menu"</span><span class="nt">&gt;</span>
	...
  <span class="nt">&lt;/ul&gt;</span>
<span class="nt">&lt;/div&gt;</span>

<span class="c">&lt;!-- Small button group --&gt;</span>
<span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"btn-group"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;button</span> <span class="na">class=</span><span class="s">"btn btn-default btn-sm dropdown-toggle"</span> <span class="na">type=</span><span class="s">"button"</span> <span class="na">data-toggle=</span><span class="s">"dropdown"</span><span class="nt">&gt;</span>
	Small button <span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"caret"</span><span class="nt">&gt;&lt;/span&gt;</span>
  <span class="nt">&lt;/button&gt;</span>
  <span class="nt">&lt;ul</span> <span class="na">class=</span><span class="s">"dropdown-menu"</span><span class="nt">&gt;</span>
	...
  <span class="nt">&lt;/ul&gt;</span>
<span class="nt">&lt;/div&gt;</span>

<span class="c">&lt;!-- Extra small button group --&gt;</span>
<span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"btn-group"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;button</span> <span class="na">class=</span><span class="s">"btn btn-default btn-xs dropdown-toggle"</span> <span class="na">type=</span><span class="s">"button"</span> <span class="na">data-toggle=</span><span class="s">"dropdown"</span><span class="nt">&gt;</span>
	Extra small button <span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"caret"</span><span class="nt">&gt;&lt;/span&gt;</span>
  <span class="nt">&lt;/button&gt;</span>
  <span class="nt">&lt;ul</span> <span class="na">class=</span><span class="s">"dropdown-menu"</span><span class="nt">&gt;</span>
	...
  <span class="nt">&lt;/ul&gt;</span>
<span class="nt">&lt;/div&gt;</span>
</code>
</pre>
				</div>

				<h3 id="btn-dropdowns-dropup">Dropup variation</h3>

				<p>Trigger dropdown menus above elements by adding <code>.dropup</code> to the parent.</p>

				<div class="bs-example">
					<div class="btn-toolbar">
						<div class="btn-group dropup">
							<button class="btn btn-default" type="button">Dropup</button> <button class="btn btn-default dropdown-toggle" data-toggle="dropdown" type="button"><span class="sr-only">Toggle Dropdown</span><span class="caret"></button>

							<ul class="dropdown-menu">
								<li><a href="#">Action</a></li>

								<li><a href="#">Another action</a></li>

								<li><a href="#">Something else here</a></li>

								<li><a href="#">Separated link</a></li>
							</ul>
						</div><!-- /btn-group -->

						<div class="btn-group dropup">
							<button class="btn btn-primary" type="button">Right dropup</button> <button class="btn btn-primary dropdown-toggle" data-toggle="dropdown" type="button"><span class="sr-only">Toggle Dropdown</span><span class="caret"></button>

							<ul class="dropdown-menu pull-right">
								<li><a href="#">Action</a></li>

								<li><a href="#">Another action</a></li>

								<li><a href="#">Something else here</a></li>

								<li><a href="#">Separated link</a></li>
							</ul>
						</div><!-- /btn-group -->
					</div>
				</div><!-- /example -->

				<div class="highlight">
					<pre>
<code class="html"><span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"btn-group dropup"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;button</span> <span class="na">type=</span><span class="s">"button"</span> <span class="na">class=</span><span class="s">"btn btn-default"</span><span class="nt">&gt;</span>Dropup<span class="nt">&lt;/button&gt;</span>
  <span class="nt">&lt;button</span> <span class="na">type=</span><span class="s">"button"</span> <span class="na">class=</span><span class="s">"btn btn-default dropdown-toggle"</span> <span class="na">data-toggle=</span><span class="s">"dropdown"</span><span class="nt">&gt;</span>
	<span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"caret"</span><span class="nt">&gt;&lt;/span&gt;</span>
	<span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"sr-only"</span><span class="nt">&gt;</span>Toggle Dropdown<span class="nt">&lt;/span&gt;</span>
  <span class="nt">&lt;/button&gt;</span>
  <span class="nt">&lt;ul</span> <span class="na">class=</span><span class="s">"dropdown-menu"</span><span class="nt">&gt;</span>
	<span class="c">&lt;!-- Dropdown menu links --&gt;</span>
  <span class="nt">&lt;/ul&gt;</span>
<span class="nt">&lt;/div&gt;</span>
</code>
</pre>
				</div>
			</div><!-- Input groups
  ================================================== -->

			<div class="bs-docs-section">
				<div class="page-header">
					<h1 id="input-groups">Input groups</h1>
				</div>

				<p class="lead">Extend form controls by adding text or buttons before, after, or on both sides of any text-based input. Use <code>.input-group</code> with an <code>.input-group-addon</code> to prepend or append elements to a <code>.form-control</code>.</p>

				<div class="bs-callout bs-callout-danger">
					<h4>Cross-browser compatibility</h4>

					<p>Avoid using <code>&lt;select&gt;</code> elements here as they cannot be fully styled in WebKit browsers.</p>
				</div>

				<div class="bs-callout bs-callout-info">
					<h4>Tooltips &amp; popovers in input groups require special setting</h4>

					<p>When using tooltips or popovers on elements within an <code>.input-group</code>, you'll have to specify the option <code>container: 'body'</code> to avoid unwanted side effects (such as the element growing wider and/or losing its rounded corners when the tooltip or popover is triggered).</p>
				</div>

				<div class="bs-callout bs-callout-info">
					<h4>Don't mix with form groups</h4>

					<p>Do not apply input group classes directly to form groups. An input group is an isolated component.</p>
				</div>

				<h2 id="input-groups-basic">Basic example</h2>

				<form class="bs-example bs-example-form">
					<div class="input-group">
						<span class="input-group-addon">@</span> <input class="form-control" placeholder="Username" type="text">
					</div><br>

					<div class="input-group">
						<input class="form-control" type="text"> <span class="input-group-addon">.00</span>
					</div><br>

					<div class="input-group">
						<span class="input-group-addon">$</span> <input class="form-control" type="text"> <span class="input-group-addon">.00</span>
					</div>
				</form>

				<div class="highlight">
					<pre>
<code class="html"><span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"input-group"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"input-group-addon"</span><span class="nt">&gt;</span>@<span class="nt">&lt;/span&gt;</span>
  <span class="nt">&lt;input</span> <span class="na">type=</span><span class="s">"text"</span> <span class="na">class=</span><span class="s">"form-control"</span> <span class="na">placeholder=</span><span class="s">"Username"</span><span class="nt">&gt;</span>
<span class="nt">&lt;/div&gt;</span>

<span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"input-group"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;input</span> <span class="na">type=</span><span class="s">"text"</span> <span class="na">class=</span><span class="s">"form-control"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"input-group-addon"</span><span class="nt">&gt;</span>.00<span class="nt">&lt;/span&gt;</span>
<span class="nt">&lt;/div&gt;</span>

<span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"input-group"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"input-group-addon"</span><span class="nt">&gt;</span>$<span class="nt">&lt;/span&gt;</span>
  <span class="nt">&lt;input</span> <span class="na">type=</span><span class="s">"text"</span> <span class="na">class=</span><span class="s">"form-control"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"input-group-addon"</span><span class="nt">&gt;</span>.00<span class="nt">&lt;/span&gt;</span>
<span class="nt">&lt;/div&gt;</span>
</code>
</pre>
				</div>

				<h2 id="input-groups-sizing">Sizing</h2>

				<p>Add the relative form sizing classes to the <code>.input-group</code> itself and contents within will automatically resize—no need for repeating the form control size classes on each element.</p>

				<form class="bs-example bs-example-form">
					<div class="input-group input-group-lg">
						<span class="input-group-addon">@</span> <input class="form-control" placeholder="Username" type="text">
					</div><br>

					<div class="input-group">
						<span class="input-group-addon">@</span> <input class="form-control" placeholder="Username" type="text">
					</div><br>

					<div class="input-group input-group-sm">
						<span class="input-group-addon">@</span> <input class="form-control" placeholder="Username" type="text">
					</div>
				</form>

				<div class="highlight">
					<pre>
<code class="html"><span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"input-group input-group-lg"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"input-group-addon"</span><span class="nt">&gt;</span>@<span class="nt">&lt;/span&gt;</span>
  <span class="nt">&lt;input</span> <span class="na">type=</span><span class="s">"text"</span> <span class="na">class=</span><span class="s">"form-control"</span> <span class="na">placeholder=</span><span class="s">"Username"</span><span class="nt">&gt;</span>
<span class="nt">&lt;/div&gt;</span>

<span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"input-group"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"input-group-addon"</span><span class="nt">&gt;</span>@<span class="nt">&lt;/span&gt;</span>
  <span class="nt">&lt;input</span> <span class="na">type=</span><span class="s">"text"</span> <span class="na">class=</span><span class="s">"form-control"</span> <span class="na">placeholder=</span><span class="s">"Username"</span><span class="nt">&gt;</span>
<span class="nt">&lt;/div&gt;</span>

<span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"input-group input-group-sm"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"input-group-addon"</span><span class="nt">&gt;</span>@<span class="nt">&lt;/span&gt;</span>
  <span class="nt">&lt;input</span> <span class="na">type=</span><span class="s">"text"</span> <span class="na">class=</span><span class="s">"form-control"</span> <span class="na">placeholder=</span><span class="s">"Username"</span><span class="nt">&gt;</span>
<span class="nt">&lt;/div&gt;</span>
</code>
</pre>
				</div>

				<h2 id="input-groups-checkboxes-radios">Checkboxes and radio addons</h2>

				<p>Place any checkbox or radio option within an input group's addon instead of text.</p>

				<form class="bs-example bs-example-form">
					<div class="row">
						<div class="col-lg-6">
							<div class="input-group">
								<span class="input-group-addon"><input type="checkbox"></span> <input class="form-control" type="text">
							</div><!-- /input-group -->
						</div><!-- /.col-lg-6 -->

						<div class="col-lg-6">
							<div class="input-group">
								<span class="input-group-addon"><input type="radio"></span> <input class="form-control" type="text">
							</div><!-- /input-group -->
						</div><!-- /.col-lg-6 -->
					</div><!-- /.row -->
				</form>

				<div class="highlight">
					<pre>
<code class="html"><span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"row"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"col-lg-6"</span><span class="nt">&gt;</span>
	<span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"input-group"</span><span class="nt">&gt;</span>
	  <span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"input-group-addon"</span><span class="nt">&gt;</span>
		<span class="nt">&lt;input</span> <span class="na">type=</span><span class="s">"checkbox"</span><span class="nt">&gt;</span>
	  <span class="nt">&lt;/span&gt;</span>
	  <span class="nt">&lt;input</span> <span class="na">type=</span><span class="s">"text"</span> <span class="na">class=</span><span class="s">"form-control"</span><span class="nt">&gt;</span>
	<span class="nt">&lt;/div&gt;</span><span class="c">&lt;!-- /input-group --&gt;</span>
  <span class="nt">&lt;/div&gt;</span><span class="c">&lt;!-- /.col-lg-6 --&gt;</span>
  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"col-lg-6"</span><span class="nt">&gt;</span>
	<span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"input-group"</span><span class="nt">&gt;</span>
	  <span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"input-group-addon"</span><span class="nt">&gt;</span>
		<span class="nt">&lt;input</span> <span class="na">type=</span><span class="s">"radio"</span><span class="nt">&gt;</span>
	  <span class="nt">&lt;/span&gt;</span>
	  <span class="nt">&lt;input</span> <span class="na">type=</span><span class="s">"text"</span> <span class="na">class=</span><span class="s">"form-control"</span><span class="nt">&gt;</span>
	<span class="nt">&lt;/div&gt;</span><span class="c">&lt;!-- /input-group --&gt;</span>
  <span class="nt">&lt;/div&gt;</span><span class="c">&lt;!-- /.col-lg-6 --&gt;</span>
<span class="nt">&lt;/div&gt;</span><span class="c">&lt;!-- /.row --&gt;</span>
</code>
</pre>
				</div>

				<h2 id="input-groups-buttons">Button addons</h2>

				<p>Buttons in input groups are a bit different and require one extra level of nesting. Instead of <code>.input-group-addon</code>, you'll need to use <code>.input-group-btn</code> to wrap the buttons. This is required due to default browser styles that cannot be overridden.</p>

				<form class="bs-example bs-example-form">
					<div class="row">
						<div class="col-lg-6">
							<div class="input-group">
								<span class="input-group-btn"><button class="btn btn-default" type="button"><span class="input-group-btn input-group-btn">Go!</span></button></span> <input class="form-control" type="text">
							</div><!-- /input-group -->
						</div><!-- /.col-lg-6 -->

						<div class="col-lg-6">
							<div class="input-group">
								<input class="form-control" type="text"> <span class="input-group-btn"><button class="btn btn-default" type="button"><span class="input-group-btn input-group-btn">Go!</span></button></span>
							</div><!-- /input-group -->
						</div><!-- /.col-lg-6 -->
					</div><!-- /.row -->
				</form>

				<div class="highlight">
					<pre>
<code class="html"><span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"row"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"col-lg-6"</span><span class="nt">&gt;</span>
	<span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"input-group"</span><span class="nt">&gt;</span>
	  <span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"input-group-btn"</span><span class="nt">&gt;</span>
		<span class="nt">&lt;button</span> <span class="na">class=</span><span class="s">"btn btn-default"</span> <span class="na">type=</span><span class="s">"button"</span><span class="nt">&gt;</span>Go!<span class="nt">&lt;/button&gt;</span>
	  <span class="nt">&lt;/span&gt;</span>
	  <span class="nt">&lt;input</span> <span class="na">type=</span><span class="s">"text"</span> <span class="na">class=</span><span class="s">"form-control"</span><span class="nt">&gt;</span>
	<span class="nt">&lt;/div&gt;</span><span class="c">&lt;!-- /input-group --&gt;</span>
  <span class="nt">&lt;/div&gt;</span><span class="c">&lt;!-- /.col-lg-6 --&gt;</span>
  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"col-lg-6"</span><span class="nt">&gt;</span>
	<span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"input-group"</span><span class="nt">&gt;</span>
	  <span class="nt">&lt;input</span> <span class="na">type=</span><span class="s">"text"</span> <span class="na">class=</span><span class="s">"form-control"</span><span class="nt">&gt;</span>
	  <span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"input-group-btn"</span><span class="nt">&gt;</span>
		<span class="nt">&lt;button</span> <span class="na">class=</span><span class="s">"btn btn-default"</span> <span class="na">type=</span><span class="s">"button"</span><span class="nt">&gt;</span>Go!<span class="nt">&lt;/button&gt;</span>
	  <span class="nt">&lt;/span&gt;</span>
	<span class="nt">&lt;/div&gt;</span><span class="c">&lt;!-- /input-group --&gt;</span>
  <span class="nt">&lt;/div&gt;</span><span class="c">&lt;!-- /.col-lg-6 --&gt;</span>
<span class="nt">&lt;/div&gt;</span><span class="c">&lt;!-- /.row --&gt;</span>
</code>
</pre>
				</div>

				<h2 id="input-groups-buttons-dropdowns">Buttons with dropdowns</h2>

				<form class="bs-example bs-example-form">
					<div class="row">
						<div class="col-lg-6">
							<div class="input-group">
								<div class="input-group-btn">
									<button class="btn btn-default dropdown-toggle" data-toggle="dropdown" type="button">Action</button>

									<ul class="dropdown-menu">
										<li><a href="#">Action</a></li>

										<li><a href="#">Another action</a></li>

										<li><a href="#">Something else here</a></li>

										<li><a href="#">Separated link</a></li>
									</ul>
								</div><!-- /btn-group -->
								<input class="form-control" type="text">
							</div><!-- /input-group -->
						</div><!-- /.col-lg-6 -->

						<div class="col-lg-6">
							<div class="input-group">
								<input class="form-control" type="text">

								<div class="input-group-btn">
									<button class="btn btn-default dropdown-toggle" data-toggle="dropdown" type="button">Action</button>

									<ul class="dropdown-menu pull-right">
										<li><a href="#">Action</a></li>

										<li><a href="#">Another action</a></li>

										<li><a href="#">Something else here</a></li>

										<li><a href="#">Separated link</a></li>
									</ul>
								</div><!-- /btn-group -->
							</div><!-- /input-group -->
						</div><!-- /.col-lg-6 -->
					</div><!-- /.row -->
				</form>

				<div class="highlight">
					<pre>
<code class="html"><span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"row"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"col-lg-6"</span><span class="nt">&gt;</span>
	<span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"input-group"</span><span class="nt">&gt;</span>
	  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"input-group-btn"</span><span class="nt">&gt;</span>
		<span class="nt">&lt;button</span> <span class="na">type=</span><span class="s">"button"</span> <span class="na">class=</span><span class="s">"btn btn-default dropdown-toggle"</span> <span class="na">data-toggle=</span><span class="s">"dropdown"</span><span class="nt">&gt;</span>Action <span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"caret"</span><span class="nt">&gt;&lt;/span&gt;&lt;/button&gt;</span>
		<span class="nt">&lt;ul</span> <span class="na">class=</span><span class="s">"dropdown-menu"</span><span class="nt">&gt;</span>
		  <span class="nt">&lt;li&gt;&lt;a</span> <span class="na">href=</span><span class="s">"#"</span><span class="nt">&gt;</span>Action<span class="nt">&lt;/a&gt;&lt;/li&gt;</span>
		  <span class="nt">&lt;li&gt;&lt;a</span> <span class="na">href=</span><span class="s">"#"</span><span class="nt">&gt;</span>Another action<span class="nt">&lt;/a&gt;&lt;/li&gt;</span>
		  <span class="nt">&lt;li&gt;&lt;a</span> <span class="na">href=</span><span class="s">"#"</span><span class="nt">&gt;</span>Something else here<span class="nt">&lt;/a&gt;&lt;/li&gt;</span>
		  <span class="nt">&lt;li</span> <span class="na">class=</span><span class="s">"divider"</span><span class="nt">&gt;&lt;/li&gt;</span>
		  <span class="nt">&lt;li&gt;&lt;a</span> <span class="na">href=</span><span class="s">"#"</span><span class="nt">&gt;</span>Separated link<span class="nt">&lt;/a&gt;&lt;/li&gt;</span>
		<span class="nt">&lt;/ul&gt;</span>
	  <span class="nt">&lt;/div&gt;</span><span class="c">&lt;!-- /btn-group --&gt;</span>
	  <span class="nt">&lt;input</span> <span class="na">type=</span><span class="s">"text"</span> <span class="na">class=</span><span class="s">"form-control"</span><span class="nt">&gt;</span>
	<span class="nt">&lt;/div&gt;</span><span class="c">&lt;!-- /input-group --&gt;</span>
  <span class="nt">&lt;/div&gt;</span><span class="c">&lt;!-- /.col-lg-6 --&gt;</span>
  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"col-lg-6"</span><span class="nt">&gt;</span>
	<span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"input-group"</span><span class="nt">&gt;</span>
	  <span class="nt">&lt;input</span> <span class="na">type=</span><span class="s">"text"</span> <span class="na">class=</span><span class="s">"form-control"</span><span class="nt">&gt;</span>
	  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"input-group-btn"</span><span class="nt">&gt;</span>
		<span class="nt">&lt;button</span> <span class="na">type=</span><span class="s">"button"</span> <span class="na">class=</span><span class="s">"btn btn-default dropdown-toggle"</span> <span class="na">data-toggle=</span><span class="s">"dropdown"</span><span class="nt">&gt;</span>Action <span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"caret"</span><span class="nt">&gt;&lt;/span&gt;&lt;/button&gt;</span>
		<span class="nt">&lt;ul</span> <span class="na">class=</span><span class="s">"dropdown-menu pull-right"</span><span class="nt">&gt;</span>
		  <span class="nt">&lt;li&gt;&lt;a</span> <span class="na">href=</span><span class="s">"#"</span><span class="nt">&gt;</span>Action<span class="nt">&lt;/a&gt;&lt;/li&gt;</span>
		  <span class="nt">&lt;li&gt;&lt;a</span> <span class="na">href=</span><span class="s">"#"</span><span class="nt">&gt;</span>Another action<span class="nt">&lt;/a&gt;&lt;/li&gt;</span>
		  <span class="nt">&lt;li&gt;&lt;a</span> <span class="na">href=</span><span class="s">"#"</span><span class="nt">&gt;</span>Something else here<span class="nt">&lt;/a&gt;&lt;/li&gt;</span>
		  <span class="nt">&lt;li</span> <span class="na">class=</span><span class="s">"divider"</span><span class="nt">&gt;&lt;/li&gt;</span>
		  <span class="nt">&lt;li&gt;&lt;a</span> <span class="na">href=</span><span class="s">"#"</span><span class="nt">&gt;</span>Separated link<span class="nt">&lt;/a&gt;&lt;/li&gt;</span>
		<span class="nt">&lt;/ul&gt;</span>
	  <span class="nt">&lt;/div&gt;</span><span class="c">&lt;!-- /btn-group --&gt;</span>
	<span class="nt">&lt;/div&gt;</span><span class="c">&lt;!-- /input-group --&gt;</span>
  <span class="nt">&lt;/div&gt;</span><span class="c">&lt;!-- /.col-lg-6 --&gt;</span>
<span class="nt">&lt;/div&gt;</span><span class="c">&lt;!-- /.row --&gt;</span>
</code>
</pre>
				</div>

				<h2 id="input-groups-buttons-segmented">Segmented buttons</h2>

				<form class="bs-example bs-example-form">
					<div class="row">
						<div class="col-lg-6">
							<div class="input-group">
								<div class="input-group-btn">
									<button class="btn btn-default" tabindex="-1" type="button">Action</button> <button class="btn btn-default dropdown-toggle" data-toggle="dropdown" tabindex="-1" type="button"><span class="sr-only">Toggle Dropdown</span></button>

									<ul class="dropdown-menu">
										<li><a href="#">Action</a></li>

										<li><a href="#">Another action</a></li>

										<li><a href="#">Something else here</a></li>

										<li><a href="#">Separated link</a></li>
									</ul>
								</div><input class="form-control" type="text">
							</div><!-- /.input-group -->
						</div><!-- /.col-lg-6 -->

						<div class="col-lg-6">
							<div class="input-group">
								<input class="form-control" type="text">

								<div class="input-group-btn">
									<button class="btn btn-default" tabindex="-1" type="button">Action</button> <button class="btn btn-default dropdown-toggle" data-toggle="dropdown" tabindex="-1" type="button"><span class="sr-only">Toggle Dropdown</span></button>

									<ul class="dropdown-menu pull-right">
										<li><a href="#">Action</a></li>

										<li><a href="#">Another action</a></li>

										<li><a href="#">Something else here</a></li>

										<li><a href="#">Separated link</a></li>
									</ul>
								</div>
							</div><!-- /.input-group -->
						</div><!-- /.col-lg-6 -->
					</div><!-- /.row -->
				</form>

				<div class="highlight">
					<pre>
<code class="html"><span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"input-group"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"input-group-btn"</span><span class="nt">&gt;</span>
	<span class="c">&lt;!-- Button and dropdown menu --&gt;</span>
  <span class="nt">&lt;/div&gt;</span>
  <span class="nt">&lt;input</span> <span class="na">type=</span><span class="s">"text"</span> <span class="na">class=</span><span class="s">"form-control"</span><span class="nt">&gt;</span>
<span class="nt">&lt;/div&gt;</span>

<span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"input-group"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;input</span> <span class="na">type=</span><span class="s">"text"</span> <span class="na">class=</span><span class="s">"form-control"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"input-group-btn"</span><span class="nt">&gt;</span>
	<span class="c">&lt;!-- Button and dropdown menu --&gt;</span>
  <span class="nt">&lt;/div&gt;</span>
<span class="nt">&lt;/div&gt;</span>
</code>
</pre>
				</div>
			</div><!-- Navs
  ================================================== -->

			<div class="bs-docs-section">
				<div class="page-header">
					<h1 id="nav">Navs</h1>
				</div>

				<p class="lead">Navs available in Bootstrap have shared markup, starting with the base <code>.nav</code> class, as well as shared states. Swap modifier classes to switch between each style.</p>

				<h2 id="nav-tabs">Tabs</h2>

				<p>Note the <code>.nav-tabs</code> class requires the <code>.nav</code> base class.</p>

				<div class="bs-example">
					<ul class="nav nav-tabs">
						<li class="active"><a href="#">Home</a></li>

						<li><a href="#">Profile</a></li>

						<li><a href="#">Messages</a></li>
					</ul>
				</div>

				<div class="highlight">
					<pre>
<code class="html"><span class="nt">&lt;ul</span> <span class="na">class=</span><span class="s">"nav nav-tabs"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;li</span> <span class="na">class=</span><span class="s">"active"</span><span class="nt">&gt;&lt;a</span> <span class="na">href=</span><span class="s">"#"</span><span class="nt">&gt;</span>Home<span class="nt">&lt;/a&gt;&lt;/li&gt;</span>
  <span class="nt">&lt;li&gt;&lt;a</span> <span class="na">href=</span><span class="s">"#"</span><span class="nt">&gt;</span>Profile<span class="nt">&lt;/a&gt;&lt;/li&gt;</span>
  <span class="nt">&lt;li&gt;&lt;a</span> <span class="na">href=</span><span class="s">"#"</span><span class="nt">&gt;</span>Messages<span class="nt">&lt;/a&gt;&lt;/li&gt;</span>
<span class="nt">&lt;/ul&gt;</span>
</code>
</pre>
				</div>

				<div class="bs-callout bs-callout-info">
					<h4>Requires JavaScript tabs plugin</h4>

					<p>For tabs with tabbable areas, you must use the <a href="../javascript/#tabs">tabs JavaScript plugin</a>.</p>
				</div>

				<h2 id="nav-pills">Pills</h2>

				<p>Take that same HTML, but use <code>.nav-pills</code> instead:</p>

				<div class="bs-example">
					<ul class="nav nav-pills">
						<li class="active"><a href="#">Home</a></li>

						<li><a href="#">Profile</a></li>

						<li><a href="#">Messages</a></li>
					</ul>
				</div>

				<div class="highlight">
					<pre>
<code class="html"><span class="nt">&lt;ul</span> <span class="na">class=</span><span class="s">"nav nav-pills"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;li</span> <span class="na">class=</span><span class="s">"active"</span><span class="nt">&gt;&lt;a</span> <span class="na">href=</span><span class="s">"#"</span><span class="nt">&gt;</span>Home<span class="nt">&lt;/a&gt;&lt;/li&gt;</span>
  <span class="nt">&lt;li&gt;&lt;a</span> <span class="na">href=</span><span class="s">"#"</span><span class="nt">&gt;</span>Profile<span class="nt">&lt;/a&gt;&lt;/li&gt;</span>
  <span class="nt">&lt;li&gt;&lt;a</span> <span class="na">href=</span><span class="s">"#"</span><span class="nt">&gt;</span>Messages<span class="nt">&lt;/a&gt;&lt;/li&gt;</span>
<span class="nt">&lt;/ul&gt;</span>
</code>
</pre>
				</div>

				<p>Pills are also vertically stackable. Just add <code>.nav-stacked</code>.</p>

				<div class="bs-example">
					<ul class="nav nav-pills nav-stacked" style="max-width: 300px;">
						<li class="active"><a href="#">Home</a></li>

						<li><a href="#">Profile</a></li>

						<li><a href="#">Messages</a></li>
					</ul>
				</div>

				<div class="highlight">
					<pre>
<code class="html"><span class="nt">&lt;ul</span> <span class="na">class=</span><span class="s">"nav nav-pills nav-stacked"</span><span class="nt">&gt;</span>
  ...
<span class="nt">&lt;/ul&gt;</span>
</code>
</pre>
				</div>

				<h2 id="nav-justified">Justified</h2>

				<p>Easily make tabs or pills equal widths of their parent at screens wider than 768px with <code>.nav-justified</code>. On smaller screens, the nav links are stacked.</p>

				<div class="bs-callout bs-callout-warning">
					<h4>Safari and responsive justified navs</h4>

					<p>Safari exhibits a bug in which resizing your browser horizontally causes rendering errors in the justified nav that are cleared upon refreshing. This bug is also shown in the <a href="../examples/justified-nav/">justified nav example</a>.</p>
				</div>

				<div class="bs-example">
					<ul class="nav nav-tabs nav-justified">
						<li class="active"><a href="#">Home</a></li>

						<li><a href="#">Profile</a></li>

						<li><a href="#">Messages</a></li>
					</ul><br>

					<ul class="nav nav-pills nav-justified">
						<li class="active"><a href="#">Home</a></li>

						<li><a href="#">Profile</a></li>

						<li><a href="#">Messages</a></li>
					</ul>
				</div>

				<div class="highlight">
					<pre>
<code class="html"><span class="nt">&lt;ul</span> <span class="na">class=</span><span class="s">"nav nav-tabs nav-justified"</span><span class="nt">&gt;</span>
  ...
<span class="nt">&lt;/ul&gt;</span>
<span class="nt">&lt;ul</span> <span class="na">class=</span><span class="s">"nav nav-pills nav-justified"</span><span class="nt">&gt;</span>
  ...
<span class="nt">&lt;/ul&gt;</span>
</code>
</pre>
				</div>

				<h2 id="nav-disabled-links">Disabled links</h2>

				<p>For any nav component (tabs, pills, or list), add <code>.disabled</code> for <strong>gray links and no hover effects</strong>.</p>

				<div class="bs-callout bs-callout-warning">
					<h4>Link functionality not impacted</h4>

					<p>This class will only change the <code>&lt;a&gt;</code>'s appearance, not its functionality. Use custom JavaScript to disable links here.</p>
				</div>

				<div class="bs-example">
					<ul class="nav nav-pills">
						<li><a href="#">Clickable link</a></li>

						<li><a href="#">Clickable link</a></li>

						<li class="disabled"><a href="#">Disabled link</a></li>
					</ul>
				</div>

				<div class="highlight">
					<pre>
<code class="html"><span class="nt">&lt;ul</span> <span class="na">class=</span><span class="s">"nav nav-pills"</span><span class="nt">&gt;</span>
  ...
  <span class="nt">&lt;li</span> <span class="na">class=</span><span class="s">"disabled"</span><span class="nt">&gt;&lt;a</span> <span class="na">href=</span><span class="s">"#"</span><span class="nt">&gt;</span>Disabled link<span class="nt">&lt;/a&gt;&lt;/li&gt;</span>
  ...
<span class="nt">&lt;/ul&gt;</span>
</code>
</pre>
				</div>

				<h2 id="nav-dropdowns">Using dropdowns</h2>

				<p>Add dropdown menus with a little extra HTML and the <a href="../javascript/#dropdowns">dropdowns JavaScript plugin</a>.</p>

				<h3>Tabs with dropdowns</h3>

				<div class="bs-example">
					<ul class="nav nav-tabs">
						<li class="active"><a href="#">Home</a></li>

						<li><a href="#">Help</a></li>

						<li class="dropdown">
							<a class="dropdown-toggle" data-toggle="dropdown" href="#">Dropdown</a>

							<ul class="dropdown-menu">
								<li><a href="#">Action</a></li>

								<li><a href="#">Another action</a></li>

								<li><a href="#">Something else here</a></li>

								<li><a href="#">Separated link</a></li>
							</ul>
						</li>
					</ul>
				</div>

				<div class="highlight">
					<pre>
<code class="html"><span class="nt">&lt;ul</span> <span class="na">class=</span><span class="s">"nav nav-tabs"</span><span class="nt">&gt;</span>
  ...
  <span class="nt">&lt;li</span> <span class="na">class=</span><span class="s">"dropdown"</span><span class="nt">&gt;</span>
	<span class="nt">&lt;a</span> <span class="na">class=</span><span class="s">"dropdown-toggle"</span> <span class="na">data-toggle=</span><span class="s">"dropdown"</span> <span class="na">href=</span><span class="s">"#"</span><span class="nt">&gt;</span>
	  Dropdown <span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"caret"</span><span class="nt">&gt;&lt;/span&gt;</span>
	<span class="nt">&lt;/a&gt;</span>
	<span class="nt">&lt;ul</span> <span class="na">class=</span><span class="s">"dropdown-menu"</span><span class="nt">&gt;</span>
	  ...
	<span class="nt">&lt;/ul&gt;</span>
  <span class="nt">&lt;/li&gt;</span>
  ...
<span class="nt">&lt;/ul&gt;</span>
</code>
</pre>
				</div>

				<h3>Pills with dropdowns</h3>

				<div class="bs-example">
					<ul class="nav nav-pills">
						<li class="active"><a href="#">Home</a></li>

						<li><a href="#">Help</a></li>

						<li class="dropdown">
							<a class="dropdown-toggle" data-toggle="dropdown" href="#">Dropdown</a>

							<ul class="dropdown-menu">
								<li><a href="#">Action</a></li>

								<li><a href="#">Another action</a></li>

								<li><a href="#">Something else here</a></li>

								<li><a href="#">Separated link</a></li>
							</ul>
						</li>
					</ul>
				</div><!-- /example -->

				<div class="highlight">
					<pre>
<code class="html"><span class="nt">&lt;ul</span> <span class="na">class=</span><span class="s">"nav nav-pills"</span><span class="nt">&gt;</span>
  ...
  <span class="nt">&lt;li</span> <span class="na">class=</span><span class="s">"dropdown"</span><span class="nt">&gt;</span>
	<span class="nt">&lt;a</span> <span class="na">class=</span><span class="s">"dropdown-toggle"</span> <span class="na">data-toggle=</span><span class="s">"dropdown"</span> <span class="na">href=</span><span class="s">"#"</span><span class="nt">&gt;</span>
	  Dropdown <span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"caret"</span><span class="nt">&gt;&lt;/span&gt;</span>
	<span class="nt">&lt;/a&gt;</span>
	<span class="nt">&lt;ul</span> <span class="na">class=</span><span class="s">"dropdown-menu"</span><span class="nt">&gt;</span>
	  ...
	<span class="nt">&lt;/ul&gt;</span>
  <span class="nt">&lt;/li&gt;</span>
  ...
<span class="nt">&lt;/ul&gt;</span>
</code>
</pre>
				</div>
			</div><!-- Navbar
  ================================================== -->

			<div class="bs-docs-section">
				<div class="page-header">
					<h1 id="navbar">Navbar</h1>
				</div>

				<h2 id="navbar-default">Default navbar</h2>

				<p>Navbars are responsive meta components that serve as navigation headers for your application or site. They begin collapsed (and are toggleable) in mobile views and become horizontal as the available viewport width increases.</p>

				<div class="bs-callout bs-callout-info">
					<h4>Customize the collapsing point</h4>

					<p>Depending on the content in your navbar, you might need to change the point at which your navbar switches between collapsed and horizontal mode. Customize the <code>@grid-float-breakpoint</code> variable or add your own media query.</p>
				</div>

				<div class="bs-callout bs-callout-danger">
					<h4>Requires JavaScript</h4>

					<p>If JavaScript is disabled and the viewport is narrow enough that the navbar collapses, it will be impossible to expand the navbar and view the content within the <code>.navbar-collapse</code>.</p>
				</div>

				<div class="bs-example">
					<nav class="navbar navbar-default">
						<!-- Brand and toggle get grouped for better mobile display -->

						<div class="navbar-header">
							<button class="navbar-toggle" data-target="#bs-example-navbar-collapse-1" data-toggle="collapse" type="button"><span class="sr-only">Toggle navigation</span></button> <a class="navbar-brand" href="#">Brand</a>
						</div><!-- Collect the nav links, forms, and other content for toggling -->

						<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
							<ul class="nav navbar-nav">
								<li class="active"><a href="#">Link</a></li>

								<li><a href="#">Link</a></li>

								<li class="dropdown">
									<a class="dropdown-toggle" data-toggle="dropdown" href="#">Dropdown</a>

									<ul class="dropdown-menu">
										<li><a href="#">Action</a></li>

										<li><a href="#">Another action</a></li>

										<li><a href="#">Something else here</a></li>

										<li><a href="#">Separated link</a></li>

										<li><a href="#">One more separated link</a></li>
									</ul>
								</li>
							</ul>

							<form class="navbar-form navbar-left">
								<div class="form-group">
									<input class="form-control" placeholder="Search" type="text">
								</div><button class="btn btn-default" type="submit">Submit</button>
							</form>

							<ul class="nav navbar-nav navbar-right">
								<li><a href="#">Link</a></li>

								<li class="dropdown">
									<a class="dropdown-toggle" data-toggle="dropdown" href="#">Dropdown</a>

									<ul class="dropdown-menu">
										<li><a href="#">Action</a></li>

										<li><a href="#">Another action</a></li>

										<li><a href="#">Something else here</a></li>

										<li><a href="#">Separated link</a></li>
									</ul>
								</li>
							</ul>
						</div><!-- /.navbar-collapse -->
					</nav>
				</div>

				<div class="highlight">
					<pre>
<code class="html"><span class="nt">&lt;nav</span> <span class="na">class=</span><span class="s">"navbar navbar-default"</span> <span class="na">role=</span><span class="s">"navigation"</span><span class="nt">&gt;</span>
  <span class="c">&lt;!-- Brand and toggle get grouped for better mobile display --&gt;</span>
  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"navbar-header"</span><span class="nt">&gt;</span>
	<span class="nt">&lt;button</span> <span class="na">type=</span><span class="s">"button"</span> <span class="na">class=</span><span class="s">"navbar-toggle"</span> <span class="na">data-toggle=</span><span class="s">"collapse"</span> <span class="na">data-target=</span><span class="s">"#bs-example-navbar-collapse-1"</span><span class="nt">&gt;</span>
	  <span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"sr-only"</span><span class="nt">&gt;</span>Toggle navigation<span class="nt">&lt;/span&gt;</span>
	  <span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"icon-bar"</span><span class="nt">&gt;&lt;/span&gt;</span>
	  <span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"icon-bar"</span><span class="nt">&gt;&lt;/span&gt;</span>
	  <span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"icon-bar"</span><span class="nt">&gt;&lt;/span&gt;</span>
	<span class="nt">&lt;/button&gt;</span>
	<span class="nt">&lt;a</span> <span class="na">class=</span><span class="s">"navbar-brand"</span> <span class="na">href=</span><span class="s">"#"</span><span class="nt">&gt;</span>Brand<span class="nt">&lt;/a&gt;</span>
  <span class="nt">&lt;/div&gt;</span>

  <span class="c">&lt;!-- Collect the nav links, forms, and other content for toggling --&gt;</span>
  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"collapse navbar-collapse"</span> <span class="na">id=</span><span class="s">"bs-example-navbar-collapse-1"</span><span class="nt">&gt;</span>
	<span class="nt">&lt;ul</span> <span class="na">class=</span><span class="s">"nav navbar-nav"</span><span class="nt">&gt;</span>
	  <span class="nt">&lt;li</span> <span class="na">class=</span><span class="s">"active"</span><span class="nt">&gt;&lt;a</span> <span class="na">href=</span><span class="s">"#"</span><span class="nt">&gt;</span>Link<span class="nt">&lt;/a&gt;&lt;/li&gt;</span>
	  <span class="nt">&lt;li&gt;&lt;a</span> <span class="na">href=</span><span class="s">"#"</span><span class="nt">&gt;</span>Link<span class="nt">&lt;/a&gt;&lt;/li&gt;</span>
	  <span class="nt">&lt;li</span> <span class="na">class=</span><span class="s">"dropdown"</span><span class="nt">&gt;</span>
		<span class="nt">&lt;a</span> <span class="na">href=</span><span class="s">"#"</span> <span class="na">class=</span><span class="s">"dropdown-toggle"</span> <span class="na">data-toggle=</span><span class="s">"dropdown"</span><span class="nt">&gt;</span>Dropdown <span class="nt">&lt;b</span> <span class="na">class=</span><span class="s">"caret"</span><span class="nt">&gt;&lt;/b&gt;&lt;/a&gt;</span>
		<span class="nt">&lt;ul</span> <span class="na">class=</span><span class="s">"dropdown-menu"</span><span class="nt">&gt;</span>
		  <span class="nt">&lt;li&gt;&lt;a</span> <span class="na">href=</span><span class="s">"#"</span><span class="nt">&gt;</span>Action<span class="nt">&lt;/a&gt;&lt;/li&gt;</span>
		  <span class="nt">&lt;li&gt;&lt;a</span> <span class="na">href=</span><span class="s">"#"</span><span class="nt">&gt;</span>Another action<span class="nt">&lt;/a&gt;&lt;/li&gt;</span>
		  <span class="nt">&lt;li&gt;&lt;a</span> <span class="na">href=</span><span class="s">"#"</span><span class="nt">&gt;</span>Something else here<span class="nt">&lt;/a&gt;&lt;/li&gt;</span>
		  <span class="nt">&lt;li</span> <span class="na">class=</span><span class="s">"divider"</span><span class="nt">&gt;&lt;/li&gt;</span>
		  <span class="nt">&lt;li&gt;&lt;a</span> <span class="na">href=</span><span class="s">"#"</span><span class="nt">&gt;</span>Separated link<span class="nt">&lt;/a&gt;&lt;/li&gt;</span>
		  <span class="nt">&lt;li</span> <span class="na">class=</span><span class="s">"divider"</span><span class="nt">&gt;&lt;/li&gt;</span>
		  <span class="nt">&lt;li&gt;&lt;a</span> <span class="na">href=</span><span class="s">"#"</span><span class="nt">&gt;</span>One more separated link<span class="nt">&lt;/a&gt;&lt;/li&gt;</span>
		<span class="nt">&lt;/ul&gt;</span>
	  <span class="nt">&lt;/li&gt;</span>
	<span class="nt">&lt;/ul&gt;</span>
	<span class="nt">&lt;form</span> <span class="na">class=</span><span class="s">"navbar-form navbar-left"</span> <span class="na">role=</span><span class="s">"search"</span><span class="nt">&gt;</span>
	  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"form-group"</span><span class="nt">&gt;</span>
		<span class="nt">&lt;input</span> <span class="na">type=</span><span class="s">"text"</span> <span class="na">class=</span><span class="s">"form-control"</span> <span class="na">placeholder=</span><span class="s">"Search"</span><span class="nt">&gt;</span>
	  <span class="nt">&lt;/div&gt;</span>
	  <span class="nt">&lt;button</span> <span class="na">type=</span><span class="s">"submit"</span> <span class="na">class=</span><span class="s">"btn btn-default"</span><span class="nt">&gt;</span>Submit<span class="nt">&lt;/button&gt;</span>
	<span class="nt">&lt;/form&gt;</span>
	<span class="nt">&lt;ul</span> <span class="na">class=</span><span class="s">"nav navbar-nav navbar-right"</span><span class="nt">&gt;</span>
	  <span class="nt">&lt;li&gt;&lt;a</span> <span class="na">href=</span><span class="s">"#"</span><span class="nt">&gt;</span>Link<span class="nt">&lt;/a&gt;&lt;/li&gt;</span>
	  <span class="nt">&lt;li</span> <span class="na">class=</span><span class="s">"dropdown"</span><span class="nt">&gt;</span>
		<span class="nt">&lt;a</span> <span class="na">href=</span><span class="s">"#"</span> <span class="na">class=</span><span class="s">"dropdown-toggle"</span> <span class="na">data-toggle=</span><span class="s">"dropdown"</span><span class="nt">&gt;</span>Dropdown <span class="nt">&lt;b</span> <span class="na">class=</span><span class="s">"caret"</span><span class="nt">&gt;&lt;/b&gt;&lt;/a&gt;</span>
		<span class="nt">&lt;ul</span> <span class="na">class=</span><span class="s">"dropdown-menu"</span><span class="nt">&gt;</span>
		  <span class="nt">&lt;li&gt;&lt;a</span> <span class="na">href=</span><span class="s">"#"</span><span class="nt">&gt;</span>Action<span class="nt">&lt;/a&gt;&lt;/li&gt;</span>
		  <span class="nt">&lt;li&gt;&lt;a</span> <span class="na">href=</span><span class="s">"#"</span><span class="nt">&gt;</span>Another action<span class="nt">&lt;/a&gt;&lt;/li&gt;</span>
		  <span class="nt">&lt;li&gt;&lt;a</span> <span class="na">href=</span><span class="s">"#"</span><span class="nt">&gt;</span>Something else here<span class="nt">&lt;/a&gt;&lt;/li&gt;</span>
		  <span class="nt">&lt;li</span> <span class="na">class=</span><span class="s">"divider"</span><span class="nt">&gt;&lt;/li&gt;</span>
		  <span class="nt">&lt;li&gt;&lt;a</span> <span class="na">href=</span><span class="s">"#"</span><span class="nt">&gt;</span>Separated link<span class="nt">&lt;/a&gt;&lt;/li&gt;</span>
		<span class="nt">&lt;/ul&gt;</span>
	  <span class="nt">&lt;/li&gt;</span>
	<span class="nt">&lt;/ul&gt;</span>
  <span class="nt">&lt;/div&gt;</span><span class="c">&lt;!-- /.navbar-collapse --&gt;</span>
<span class="nt">&lt;/nav&gt;</span>
</code>
</pre>
				</div>

				<div class="bs-callout bs-callout-danger">
					<h4>Plugin dependency</h4>

					<p>The responsive navbar requires the <a href="../javascript/#collapse">collapse plugin</a> to be included in your version of Bootstrap.</p>
				</div>

				<div class="bs-callout bs-callout-warning">
					<h4>Make navbars accessible</h4>

					<p>Be sure to add a <code>role="navigation"</code> to every navbar to help with accessibility.</p>
				</div>

				<h2 id="navbar-forms">Forms</h2>

				<p>Place form content within <code>.navbar-form</code> for proper vertical alignment and collapsed behavior in narrow viewports. Use the alignment options to decide where it resides within the navbar content.</p>

				<p>As a heads up, <code>.navbar-form</code> shares much of its code with <code>.form-inline</code> via mixin.</p>

				<div class="bs-example">
					<nav class="navbar navbar-default">
						<div class="navbar-header">
							<button class="navbar-toggle" data-target="#bs-example-navbar-collapse-2" data-toggle="collapse" type="button"><span class="sr-only">Toggle navigation</span></button> <a class="navbar-brand" href="#">Brand</a>
						</div>

						<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-2">
							<form class="navbar-form navbar-left">
								<div class="form-group">
									<input class="form-control" placeholder="Search" type="text">
								</div><button class="btn btn-default" type="submit">Submit</button>
							</form>
						</div>
					</nav>
				</div>

				<div class="highlight">
					<pre>
<code class="html"><span class="nt">&lt;form</span> <span class="na">class=</span><span class="s">"navbar-form navbar-left"</span> <span class="na">role=</span><span class="s">"search"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"form-group"</span><span class="nt">&gt;</span>
	<span class="nt">&lt;input</span> <span class="na">type=</span><span class="s">"text"</span> <span class="na">class=</span><span class="s">"form-control"</span> <span class="na">placeholder=</span><span class="s">"Search"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;/div&gt;</span>
  <span class="nt">&lt;button</span> <span class="na">type=</span><span class="s">"submit"</span> <span class="na">class=</span><span class="s">"btn btn-default"</span><span class="nt">&gt;</span>Submit<span class="nt">&lt;/button&gt;</span>
<span class="nt">&lt;/form&gt;</span>
</code>
</pre>
				</div>

				<div class="bs-callout bs-callout-danger">
					<h4>Always add labels</h4>

					<p>Screen readers will have trouble with your forms if you don't include a label for every input. For these inline navbar forms, you can hide the labels using the <code>.sr-only</code> class.</p>
				</div>

				<h2 id="navbar-buttons">Buttons</h2>

				<p>Add the <code>.navbar-btn</code> class to <code>&lt;button&gt;</code> elements not residing in a <code>&lt;form&gt;</code> to vertically center them in the navbar.</p>

				<div class="bs-example">
					<nav class="navbar navbar-default">
						<div class="navbar-header">
							<button class="navbar-toggle" data-target="#bs-example-navbar-collapse-3" data-toggle="collapse" type="button"><span class="sr-only">Toggle navigation</span></button> <a class="navbar-brand" href="#">Brand</a>
						</div>

						<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-3">
							<button class="btn btn-default navbar-btn" type="button">Sign in</button>
						</div>
					</nav>
				</div>

				<div class="highlight">
					<pre>
<code class="html"><span class="nt">&lt;button</span> <span class="na">type=</span><span class="s">"button"</span> <span class="na">class=</span><span class="s">"btn btn-default navbar-btn"</span><span class="nt">&gt;</span>Sign in<span class="nt">&lt;/button&gt;</span>
</code>
</pre>
				</div>

				<div class="bs-callout bs-callout-warning">
					<h4>Context-specific usage</h4>

					<p>Like the standard <a href="../css#buttons">button classes</a>, <code>.navbar-btn</code> can be used on <code>&lt;a&gt;</code> and <code>&lt;input&gt;</code> elements. However, neither <code>.navbar-btn</code> nor the standard button classes should be used on <code>&lt;a&gt;</code> elements within <code>.navbar-nav</code>.</p>
				</div>

				<h2 id="navbar-text">Text</h2>

				<p>Wrap strings of text in an element with <code>.navbar-text</code>, usually on a <code>&lt;p&gt;</code> tag for proper leading and color.</p>

				<div class="bs-example">
					<nav class="navbar navbar-default">
						<div class="navbar-header">
							<button class="navbar-toggle" data-target="#bs-example-navbar-collapse-4" data-toggle="collapse" type="button"><span class="sr-only">Toggle navigation</span></button> <a class="navbar-brand" href="#">Brand</a>
						</div>

						<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-4">
							<p class="navbar-text">Signed in as Mark Otto</p>
						</div>
					</nav>
				</div>

				<div class="highlight">
					<pre>
<code class="html"><span class="nt">&lt;p</span> <span class="na">class=</span><span class="s">"navbar-text"</span><span class="nt">&gt;</span>Signed in as Mark Otto<span class="nt">&lt;/p&gt;</span>
</code>
</pre>
				</div>

				<h2 id="navbar-links">Non-nav links</h2>

				<p>For folks using standard links that are not within the regular navbar navigation component, use the <code>.navbar-link</code> class to add the proper colors for the default and inverse navbar options.</p>

				<div class="bs-example">
					<nav class="navbar navbar-default">
						<div class="navbar-header">
							<button class="navbar-toggle" data-target="#bs-example-navbar-collapse-5" data-toggle="collapse" type="button"><span class="sr-only">Toggle navigation</span></button> <a class="navbar-brand" href="#">Brand</a>
						</div>

						<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-5">
							<p class="navbar-text navbar-right">Signed in as <a class="navbar-link" href="#">Mark Otto</a></p>
						</div>
					</nav>
				</div>

				<div class="highlight">
					<pre>
<code class="html"><span class="nt">&lt;p</span> <span class="na">class=</span><span class="s">"navbar-text navbar-right"</span><span class="nt">&gt;</span>Signed in as <span class="nt">&lt;a</span> <span class="na">href=</span><span class="s">"#"</span> <span class="na">class=</span><span class="s">"navbar-link"</span><span class="nt">&gt;</span>Mark Otto<span class="nt">&lt;/a&gt;&lt;/p&gt;</span>
</code>
</pre>
				</div>

				<h2 id="navbar-component-alignment">Component alignment</h2>

				<p>Align nav links, forms, buttons, or text, using the <code>.navbar-left</code> or <code>.navbar-right</code> utility classes. Both classes will add a CSS float in the specified direction. For example, to align nav links, put them in a separate <code>&lt;ul&gt;</code> with the respective utility class applied.</p>

				<p>These classes are mixin-ed versions of <code>.pull-left</code> and <code>.pull-right</code>, but they're scoped to media queries for easier handling of navbar components across device sizes.</p>

				<h2 id="navbar-fixed-top">Fixed to top</h2>

				<p>Add <code>.navbar-fixed-top</code>.</p>

				<div class="bs-example bs-navbar-top-example">
					<nav class="navbar navbar-default navbar-fixed-top">
						<!-- Brand and toggle get grouped for better mobile display -->

						<div class="navbar-header">
							<button class="navbar-toggle" data-target="#bs-example-navbar-collapse-6" data-toggle="collapse" type="button"><span class="sr-only">Toggle navigation</span></button> <a class="navbar-brand" href="#">Brand</a>
						</div><!-- Collect the nav links, forms, and other content for toggling -->

						<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-6">
							<ul class="nav navbar-nav">
								<li class="active"><a href="#">Home</a></li>

								<li><a href="#">Link</a></li>

								<li><a href="#">Link</a></li>
							</ul>
						</div><!-- /.navbar-collapse -->
					</nav>
				</div><!-- /example -->

				<div class="highlight">
					<pre>
<code class="html"><span class="nt">&lt;nav</span> <span class="na">class=</span><span class="s">"navbar navbar-default navbar-fixed-top"</span> <span class="na">role=</span><span class="s">"navigation"</span><span class="nt">&gt;</span>
  ...
<span class="nt">&lt;/nav&gt;</span>
</code>
</pre>
				</div>

				<div class="bs-callout bs-callout-danger">
					<h4>Body padding required</h4>

					<p>The fixed navbar will overlay your other content, unless you add <code>padding</code> to the top of the <code>&lt;body&gt;</code>. Try out your own values or use our snippet below. Tip: By default, the navbar is 50px high.</p>

					<div class="highlight">
						<pre>
<code class="css"><span class="nt">body</span> <span class="p">{</span> <span class="k">padding-top</span><span class="o">:</span> <span class="m">70px</span><span class="p">;</span> <span class="p">}</span>
</code>
</pre>
					</div>

					<p>Make sure to include this <strong>after</strong> the core Bootstrap CSS.</p>
				</div>

				<h2 id="navbar-fixed-bottom">Fixed to bottom</h2>

				<p>Add <code>.navbar-fixed-bottom</code> instead.</p>

				<div class="bs-example bs-navbar-bottom-example">
					<nav class="navbar navbar-default navbar-fixed-bottom">
						<!-- Brand and toggle get grouped for better mobile display -->

						<div class="navbar-header">
							<button class="navbar-toggle" data-target="#bs-example-navbar-collapse-7" data-toggle="collapse" type="button"><span class="sr-only">Toggle navigation</span></button> <a class="navbar-brand" href="#">Brand</a>
						</div><!-- Collect the nav links, forms, and other content for toggling -->

						<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-7">
							<ul class="nav navbar-nav">
								<li class="active"><a href="#">Home</a></li>

								<li><a href="#">Link</a></li>

								<li><a href="#">Link</a></li>
							</ul>
						</div><!-- /.navbar-collapse -->
					</nav>
				</div><!-- /example -->

				<div class="highlight">
					<pre>
<code class="html"><span class="nt">&lt;nav</span> <span class="na">class=</span><span class="s">"navbar navbar-default navbar-fixed-bottom"</span> <span class="na">role=</span><span class="s">"navigation"</span><span class="nt">&gt;</span>
  ...
<span class="nt">&lt;/nav&gt;</span>
</code>
</pre>
				</div>

				<div class="bs-callout bs-callout-danger">
					<h4>Body padding required</h4>

					<p>The fixed navbar will overlay your other content, unless you add <code>padding</code> to the bottom of the <code>&lt;body&gt;</code>. Try out your own values or use our snippet below. Tip: By default, the navbar is 50px high.</p>

					<div class="highlight">
						<pre>
<code class="css"><span class="nt">body</span> <span class="p">{</span> <span class="k">padding-bottom</span><span class="o">:</span> <span class="m">70px</span><span class="p">;</span> <span class="p">}</span>
</code>
</pre>
					</div>

					<p>Make sure to include this <strong>after</strong> the core Bootstrap CSS.</p>
				</div>

				<h2 id="navbar-static-top">Static top</h2>

				<p>Create a full-width navbar that scrolls away with the page by adding <code>.navbar-static-top</code>. Unlike the <code>.navbar-fixed-*</code> classes, you do not need to change any padding on the <code>body</code>.</p>

				<div class="bs-example bs-navbar-top-example">
					<nav class="navbar navbar-default navbar-static-top">
						<!-- Brand and toggle get grouped for better mobile display -->

						<div class="navbar-header">
							<button class="navbar-toggle" data-target="#bs-example-navbar-collapse-8" data-toggle="collapse" type="button"><span class="sr-only">Toggle navigation</span></button> <a class="navbar-brand" href="#">Brand</a>
						</div><!-- Collect the nav links, forms, and other content for toggling -->

						<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-8">
							<ul class="nav navbar-nav">
								<li class="active"><a href="#">Home</a></li>

								<li><a href="#">Link</a></li>

								<li><a href="#">Link</a></li>
							</ul>
						</div><!-- /.navbar-collapse -->
					</nav>
				</div><!-- /example -->

				<div class="highlight">
					<pre>
<code class="html"><span class="nt">&lt;nav</span> <span class="na">class=</span><span class="s">"navbar navbar-default navbar-static-top"</span> <span class="na">role=</span><span class="s">"navigation"</span><span class="nt">&gt;</span>
  ...
<span class="nt">&lt;/nav&gt;</span>
</code>
</pre>
				</div>

				<h2 id="navbar-inverted">Inverted navbar</h2>

				<p>Modify the look of the navbar by adding <code>.navbar-inverse</code>.</p>

				<div class="bs-example">
					<nav class="navbar navbar-inverse">
						<!-- Brand and toggle get grouped for better mobile display -->

						<div class="navbar-header">
							<button class="navbar-toggle" data-target="#bs-example-navbar-collapse-9" data-toggle="collapse" type="button"><span class="sr-only">Toggle navigation</span></button> <a class="navbar-brand" href="#">Brand</a>
						</div><!-- Collect the nav links, forms, and other content for toggling -->

						<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-9">
							<ul class="nav navbar-nav">
								<li class="active"><a href="#">Home</a></li>

								<li><a href="#">Link</a></li>

								<li><a href="#">Link</a></li>
							</ul>
						</div><!-- /.navbar-collapse -->
					</nav>
				</div><!-- /example -->

				<div class="highlight">
					<pre>
<code class="html"><span class="nt">&lt;nav</span> <span class="na">class=</span><span class="s">"navbar navbar-inverse"</span> <span class="na">role=</span><span class="s">"navigation"</span><span class="nt">&gt;</span>
  ...
<span class="nt">&lt;/nav&gt;</span>
</code>
</pre>
				</div>
			</div><!-- Breadcrumbs
  ================================================== -->

			<div class="bs-docs-section">
				<div class="page-header">
					<h1 id="breadcrumbs">Breadcrumbs</h1>
				</div>

				<p class="lead">Indicate the current page's location within a navigational hierarchy.</p>

				<p>Separators are automatically added in CSS through <code>:before</code> and <code>content</code>.</p>

				<div class="bs-example">
					<ol class="breadcrumb">
						<li class="active">Home</li>
					</ol>

					<ol class="breadcrumb">
						<li><a href="#">Home</a></li>

						<li class="active">Library</li>
					</ol>

					<ol class="breadcrumb" style="margin-bottom: 5px;">
						<li><a href="#">Home</a></li>

						<li><a href="#">Library</a></li>

						<li class="active">Data</li>
					</ol>
				</div>

				<div class="highlight">
					<pre>
<code class="html"><span class="nt">&lt;ol</span> <span class="na">class=</span><span class="s">"breadcrumb"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;li&gt;&lt;a</span> <span class="na">href=</span><span class="s">"#"</span><span class="nt">&gt;</span>Home<span class="nt">&lt;/a&gt;&lt;/li&gt;</span>
  <span class="nt">&lt;li&gt;&lt;a</span> <span class="na">href=</span><span class="s">"#"</span><span class="nt">&gt;</span>Library<span class="nt">&lt;/a&gt;&lt;/li&gt;</span>
  <span class="nt">&lt;li</span> <span class="na">class=</span><span class="s">"active"</span><span class="nt">&gt;</span>Data<span class="nt">&lt;/li&gt;</span>
<span class="nt">&lt;/ol&gt;</span>
</code>
</pre>
				</div>
			</div><!-- Pagination
  ================================================== -->

			<div class="bs-docs-section">
				<div class="page-header">
					<h1 id="pagination">Pagination</h1>
				</div>

				<p class="lead">Provide pagination links for your site or app with the multi-page pagination component, or the simpler <a href="#pagination-pager">pager alternative</a>.</p>

				<h2 id="pagination-default">Default pagination</h2>

				<p>Simple pagination inspired by Rdio, great for apps and search results. The large block is hard to miss, easily scalable, and provides large click areas.</p>

				<div class="bs-example">
					<ul class="pagination">
						<li><a href="#">«</a></li>

						<li><a href="#">1</a></li>

						<li><a href="#">2</a></li>

						<li><a href="#">3</a></li>

						<li><a href="#">4</a></li>

						<li><a href="#">5</a></li>

						<li><a href="#">»</a></li>
					</ul>
				</div>

				<div class="highlight">
					<pre>
<code class="html"><span class="nt">&lt;ul</span> <span class="na">class=</span><span class="s">"pagination"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;li&gt;&lt;a</span> <span class="na">href=</span><span class="s">"#"</span><span class="nt">&gt;</span><span class="ni">&amp;laquo;</span><span class="nt">&lt;/a&gt;&lt;/li&gt;</span>
  <span class="nt">&lt;li&gt;&lt;a</span> <span class="na">href=</span><span class="s">"#"</span><span class="nt">&gt;</span>1<span class="nt">&lt;/a&gt;&lt;/li&gt;</span>
  <span class="nt">&lt;li&gt;&lt;a</span> <span class="na">href=</span><span class="s">"#"</span><span class="nt">&gt;</span>2<span class="nt">&lt;/a&gt;&lt;/li&gt;</span>
  <span class="nt">&lt;li&gt;&lt;a</span> <span class="na">href=</span><span class="s">"#"</span><span class="nt">&gt;</span>3<span class="nt">&lt;/a&gt;&lt;/li&gt;</span>
  <span class="nt">&lt;li&gt;&lt;a</span> <span class="na">href=</span><span class="s">"#"</span><span class="nt">&gt;</span>4<span class="nt">&lt;/a&gt;&lt;/li&gt;</span>
  <span class="nt">&lt;li&gt;&lt;a</span> <span class="na">href=</span><span class="s">"#"</span><span class="nt">&gt;</span>5<span class="nt">&lt;/a&gt;&lt;/li&gt;</span>
  <span class="nt">&lt;li&gt;&lt;a</span> <span class="na">href=</span><span class="s">"#"</span><span class="nt">&gt;</span><span class="ni">&amp;raquo;</span><span class="nt">&lt;/a&gt;&lt;/li&gt;</span>
<span class="nt">&lt;/ul&gt;</span>
</code>
</pre>
				</div>

				<h3>Disabled and active states</h3>

				<p>Links are customizable for different circumstances. Use <code>.disabled</code> for unclickable links and <code>.active</code> to indicate the current page.</p>

				<div class="bs-example">
					<ul class="pagination">
						<li class="disabled"><a href="#">«</a></li>

						<li class="active"><a href="#">1 <span class="sr-only">(current)</span></a></li>

						<li><a href="#">2</a></li>

						<li><a href="#">3</a></li>

						<li><a href="#">4</a></li>

						<li><a href="#">5</a></li>

						<li><a href="#">»</a></li>
					</ul>
				</div>

				<div class="highlight">
					<pre>
<code class="html"><span class="nt">&lt;ul</span> <span class="na">class=</span><span class="s">"pagination"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;li</span> <span class="na">class=</span><span class="s">"disabled"</span><span class="nt">&gt;&lt;a</span> <span class="na">href=</span><span class="s">"#"</span><span class="nt">&gt;</span><span class="ni">&amp;laquo;</span><span class="nt">&lt;/a&gt;&lt;/li&gt;</span>
  <span class="nt">&lt;li</span> <span class="na">class=</span><span class="s">"active"</span><span class="nt">&gt;&lt;a</span> <span class="na">href=</span><span class="s">"#"</span><span class="nt">&gt;</span>1 <span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"sr-only"</span><span class="nt">&gt;</span>(current)<span class="nt">&lt;/span&gt;&lt;/a&gt;&lt;/li&gt;</span>
  ...
<span class="nt">&lt;/ul&gt;</span>
</code>
</pre>
				</div>

				<p>You can optionally swap out active or disabled anchors for <code>&lt;span&gt;</code> to remove click functionality while retaining intended styles.</p>

				<div class="highlight">
					<pre>
<code class="html"><span class="nt">&lt;ul</span> <span class="na">class=</span><span class="s">"pagination"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;li</span> <span class="na">class=</span><span class="s">"disabled"</span><span class="nt">&gt;&lt;span&gt;</span><span class="ni">&amp;laquo;</span><span class="nt">&lt;/span&gt;&lt;/li&gt;</span>
  <span class="nt">&lt;li</span> <span class="na">class=</span><span class="s">"active"</span><span class="nt">&gt;&lt;span&gt;</span>1 <span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"sr-only"</span><span class="nt">&gt;</span>(current)<span class="nt">&lt;/span&gt;&lt;/span&gt;&lt;/li&gt;</span>
  ...
<span class="nt">&lt;/ul&gt;</span>
</code>
</pre>
				</div>

				<h3>Sizing</h3>

				<p>Fancy larger or smaller pagination? Add <code>.pagination-lg</code> or <code>.pagination-sm</code> for additional sizes.</p>

				<div class="bs-example">
					<div>
						<ul class="pagination pagination-lg">
							<li><a href="#">«</a></li>

							<li><a href="#">1</a></li>

							<li><a href="#">2</a></li>

							<li><a href="#">3</a></li>

							<li><a href="#">4</a></li>

							<li><a href="#">5</a></li>

							<li><a href="#">»</a></li>
						</ul>
					</div>

					<div>
						<ul class="pagination">
							<li><a href="#">«</a></li>

							<li><a href="#">1</a></li>

							<li><a href="#">2</a></li>

							<li><a href="#">3</a></li>

							<li><a href="#">4</a></li>

							<li><a href="#">5</a></li>

							<li><a href="#">»</a></li>
						</ul>
					</div>

					<div>
						<ul class="pagination pagination-sm">
							<li><a href="#">«</a></li>

							<li><a href="#">1</a></li>

							<li><a href="#">2</a></li>

							<li><a href="#">3</a></li>

							<li><a href="#">4</a></li>

							<li><a href="#">5</a></li>

							<li><a href="#">»</a></li>
						</ul>
					</div>
				</div>

				<div class="highlight">
					<pre>
<code class="html"><span class="nt">&lt;ul</span> <span class="na">class=</span><span class="s">"pagination pagination-lg"</span><span class="nt">&gt;</span>...<span class="nt">&lt;/ul&gt;</span>
<span class="nt">&lt;ul</span> <span class="na">class=</span><span class="s">"pagination"</span><span class="nt">&gt;</span>...<span class="nt">&lt;/ul&gt;</span>
<span class="nt">&lt;ul</span> <span class="na">class=</span><span class="s">"pagination pagination-sm"</span><span class="nt">&gt;</span>...<span class="nt">&lt;/ul&gt;</span>
</code>
</pre>
				</div>

				<h2 id="pagination-pager">Pager</h2>

				<p>Quick previous and next links for simple pagination implementations with light markup and styles. It's great for simple sites like blogs or magazines.</p>

				<h3>Default example</h3>

				<p>By default, the pager centers links.</p>

				<div class="bs-example">
					<ul class="pager">
						<li><a href="#">Previous</a></li>

						<li><a href="#">Next</a></li>
					</ul>
				</div>

				<div class="highlight">
					<pre>
<code class="html"><span class="nt">&lt;ul</span> <span class="na">class=</span><span class="s">"pager"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;li&gt;&lt;a</span> <span class="na">href=</span><span class="s">"#"</span><span class="nt">&gt;</span>Previous<span class="nt">&lt;/a&gt;&lt;/li&gt;</span>
  <span class="nt">&lt;li&gt;&lt;a</span> <span class="na">href=</span><span class="s">"#"</span><span class="nt">&gt;</span>Next<span class="nt">&lt;/a&gt;&lt;/li&gt;</span>
<span class="nt">&lt;/ul&gt;</span>
</code>
</pre>
				</div>

				<h3>Aligned links</h3>

				<p>Alternatively, you can align each link to the sides:</p>

				<div class="bs-example">
					<ul class="pager">
						<li class="previous"><a href="#">← Older</a></li>

						<li class="next"><a href="#">Newer →</a></li>
					</ul>
				</div>

				<div class="highlight">
					<pre>
<code class="html"><span class="nt">&lt;ul</span> <span class="na">class=</span><span class="s">"pager"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;li</span> <span class="na">class=</span><span class="s">"previous"</span><span class="nt">&gt;&lt;a</span> <span class="na">href=</span><span class="s">"#"</span><span class="nt">&gt;</span><span class="ni">&amp;larr;</span> Older<span class="nt">&lt;/a&gt;&lt;/li&gt;</span>
  <span class="nt">&lt;li</span> <span class="na">class=</span><span class="s">"next"</span><span class="nt">&gt;&lt;a</span> <span class="na">href=</span><span class="s">"#"</span><span class="nt">&gt;</span>Newer <span class="ni">&amp;rarr;</span><span class="nt">&lt;/a&gt;&lt;/li&gt;</span>
<span class="nt">&lt;/ul&gt;</span>
</code>
</pre>
				</div>

				<h3>Optional disabled state</h3>

				<p>Pager links also use the general <code>.disabled</code> utility class from the pagination.</p>

				<div class="bs-example">
					<ul class="pager">
						<li class="previous disabled"><a href="#">← Older</a></li>

						<li class="next"><a href="#">Newer →</a></li>
					</ul>
				</div>

				<div class="highlight">
					<pre>
<code class="html"><span class="nt">&lt;ul</span> <span class="na">class=</span><span class="s">"pager"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;li</span> <span class="na">class=</span><span class="s">"previous disabled"</span><span class="nt">&gt;&lt;a</span> <span class="na">href=</span><span class="s">"#"</span><span class="nt">&gt;</span><span class="ni">&amp;larr;</span> Older<span class="nt">&lt;/a&gt;&lt;/li&gt;</span>
  <span class="nt">&lt;li</span> <span class="na">class=</span><span class="s">"next"</span><span class="nt">&gt;&lt;a</span> <span class="na">href=</span><span class="s">"#"</span><span class="nt">&gt;</span>Newer <span class="ni">&amp;rarr;</span><span class="nt">&lt;/a&gt;&lt;/li&gt;</span>
<span class="nt">&lt;/ul&gt;</span>
</code>
</pre>
				</div>
			</div><!-- Labels
  ================================================== -->

			<div class="bs-docs-section">
				<div class="page-header">
					<h1 id="labels">Labels</h1>
				</div>

				<p class="lead"></p>

				<h3>Example</h3>

				<div class="bs-example">
					<h1>Example heading <span class="label label-default">New</span></h1>

					<h2>Example heading <span class="label label-default">New</span></h2>

					<h3>Example heading <span class="label label-default">New</span></h3>

					<h4>Example heading <span class="label label-default">New</span></h4>

					<h5>Example heading <span class="label label-default">New</span></h5>

					<h6>Example heading <span class="label label-default">New</span></h6>
				</div>

				<div class="highlight">
					<pre>
<code class="html"><span class="nt">&lt;h3&gt;</span>Example heading <span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"label label-default"</span><span class="nt">&gt;</span>New<span class="nt">&lt;/span&gt;&lt;/h3&gt;</span>
</code>
</pre>
				</div>

				<h3>Available variations</h3>

				<p>Add any of the below mentioned modifier classes to change the appearance of a label.</p>

				<div class="bs-example">
					<span class="label label-default">Default</span> <span class="label label-primary">Primary</span> <span class="label label-success">Success</span> <span class="label label-info">Info</span> <span class="label label-warning">Warning</span> <span class="label label-danger">Danger</span>
				</div>

				<div class="highlight">
					<pre>
<code class="html"><span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"label label-default"</span><span class="nt">&gt;</span>Default<span class="nt">&lt;/span&gt;</span>
<span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"label label-primary"</span><span class="nt">&gt;</span>Primary<span class="nt">&lt;/span&gt;</span>
<span class="nt">&lt;spanspan&gt; <span class="na">class=</span><span class="s">"label label-success"</span><span class="nt">&gt;</span>Success<span class="nt">&lt;/span&gt;</span>
<span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"label label-info"</span><span class="nt">&gt;</span>Info<span class="nt">&lt;/span&gt;</span>
<span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"label label-warning"</span><span class="nt">&gt;</span>Warning<span class="nt">&lt;/span&gt;</span>
<span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"label label-danger"</span><span class="nt">&gt;</span>Danger<span class="nt">&lt;/span&gt;</span>
</span></code>
</pre>
				</div>
			</div><!-- Badges
  ================================================== -->

			<div class="bs-docs-section">
				<div class="page-header">
					<h1 id="badges">Badges</h1>
				</div>

				<p class="lead">Easily highlight new or unread items by adding a <code>&lt;span class="badge"&gt;</code> to links, Bootstrap navs, and more.</p>

				<div class="bs-example">
					<a href="#">Inbox <span class="badge">42</span></a>
				</div>

				<div class="highlight">
					<pre>
<code class="html"><span class="nt">&lt;a</span> <span class="na">href=</span><span class="s">"#"</span><span class="nt">&gt;</span>Inbox <span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"badge"</span><span class="nt">&gt;</span>42<span class="nt">&lt;/span&gt;&lt;/a&gt;</span>
</code>
</pre>
				</div>

				<h4>Self collapsing</h4>

				<p>When there are no new or unread items, badges will simply collapse (via CSS's <code>:empty</code> selector) provided no content exists within.</p>

				<div class="bs-callout bs-callout-danger">
					<h4>Cross-browser compatibility</h4>

					<p>Badges won't self collapse in Internet Explorer 8 because it lacks support for the <code>:empty</code> selector.</p>
				</div>

				<h4>Adapts to active nav states</h4>

				<p>Built-in styles are included for placing badges in active states in pill and list navigations.</p>

				<div class="bs-example">
					<ul class="nav nav-pills">
						<li class="active"><a href="#">Home <span class="badge">42</span></a></li>

						<li><a href="#">Profile</a></li>

						<li><a href="#">Messages <span class="badge">3</span></a></li>
					</ul><br>

					<ul class="nav nav-pills nav-stacked" style="max-width: 260px;">
						<li class="active"><a href="#"><span class="badge pull-right">42</span> Home</a></li>

						<li><a href="#">Profile</a></li>

						<li><a href="#"><span class="badge pull-right">3</span> Messages</a></li>
					</ul><br>
					<button class="btn btn-primary" type="button">Messages <span class="badge">4</span></button>
				</div>

				<div class="highlight">
					<pre>
<code class="html"><span class="nt">&lt;ul</span> <span class="na">class=</span><span class="s">"nav nav-pills nav-stacked"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;li</span> <span class="na">class=</span><span class="s">"active"</span><span class="nt">&gt;</span>
	<span class="nt">&lt;a</span> <span class="na">href=</span><span class="s">"#"</span><span class="nt">&gt;</span>
	  <span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"badge pull-right"</span><span class="nt">&gt;</span>42<span class="nt">&lt;/span&gt;</span>
	  Home
	<span class="nt">&lt;/a&gt;</span>
  <span class="nt">&lt;/li&gt;</span>
  ...
<span class="nt">&lt;/ul&gt;</span>
</code>
</pre>
				</div>
			</div><!-- Jumbotron
  ================================================== -->

			<div class="bs-docs-section">
				<div class="page-header">
					<h1 id="jumbotron">Jumbotron</h1>
				</div>

				<p>A lightweight, flexible component that can optionally extend the entire viewport to showcase key content on your site.</p>

				<div class="bs-example">
					<div class="jumbotron">
						<h1>Hello, world!</h1>

						<p>This is a simple hero unit, a simple jumbotron-style component for calling extra attention to featured content or information.</p>

						<p><a class="btn btn-primary btn-lg">Learn more</a></p>
					</div>
				</div>

				<div class="highlight">
					<pre>
<code class="html"><span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"jumbotron"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;h1&gt;</span>Hello, world!<span class="nt">&lt;/h1&gt;</span>
  <span class="nt">&lt;p&gt;</span>...<span class="nt">&lt;/p&gt;</span>
  <span class="nt">&lt;p&gt;&lt;a</span> <span class="na">class=</span><span class="s">"btn btn-primary btn-lg"</span> <span class="na">role=</span><span class="s">"button"</span><span class="nt">&gt;</span>Learn more<span class="nt">&lt;/a&gt;&lt;/p&gt;</span>
<span class="nt">&lt;/div&gt;</span>
</code>
</pre>
				</div>

				<p>To make the jumbotron full width, and without rounded corners, place it outside all <code>.container</code>s and instead add a <code>.container</code> within.</p>

				<div class="highlight">
					<pre>
<code class="html"><span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"jumbotron"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"container"</span><span class="nt">&gt;</span>
	...
  <span class="nt">&lt;/div&gt;</span>
<span class="nt">&lt;/div&gt;</span>
</code>
</pre>
				</div>
			</div><!-- Page header
  ================================================== -->

			<div class="bs-docs-section">
				<div class="page-header">
					<h1 id="page-header">Page header</h1>
				</div>

				<p>A simple shell for an <code>h1</code> to appropriately space out and segment sections of content on a page. It can utilize the <code>h1</code>'s default <code>small</code> element, as well as most other components (with additional styles).</p>

				<div class="bs-example">
					<div class="page-header">
						<h1>Example page header <small>Subtext for header</small></h1>
					</div>
				</div>

				<div class="highlight">
					<pre>
<code class="html"><span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"page-header"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;h1&gt;</span>Example page header <span class="nt">&lt;small&gt;</span>Subtext for header<span class="nt">&lt;/small&gt;&lt;/h1&gt;</span>
<span class="nt">&lt;/div&gt;</span>
</code>
</pre>
				</div>
			</div><!-- Thumbnails
  ================================================== -->

			<div class="bs-docs-section">
				<div class="page-header">
					<h1 id="thumbnails">Thumbnails</h1>
				</div>

				<p class="lead">Extend Bootstrap's <a href="../css/#grid">grid system</a> with the thumbnail component to easily display grids of images, videos, text, and more.</p>

				<h3 id="thumbnails-default">Default example</h3>

				<p>By default, Bootstrap's thumbnails are designed to showcase linked images with minimal required markup.</p>

				<div class="bs-example">
					<div class="row">
						<div class="col-xs-6 col-md-3">
							<a class="thumbnail" href="#"><img alt="Generic placeholder thumbnail" data-src="holder.js/100%x180"></a>
						</div>

						<div class="col-xs-6 col-md-3">
							<a class="thumbnail" href="#"><img alt="Generic placeholder thumbnail" data-src="holder.js/100%x180"></a>
						</div>

						<div class="col-xs-6 col-md-3">
							<a class="thumbnail" href="#"><img alt="Generic placeholder thumbnail" data-src="holder.js/100%x180"></a>
						</div>

						<div class="col-xs-6 col-md-3">
							<a class="thumbnail" href="#"><img alt="Generic placeholder thumbnail" data-src="holder.js/100%x180"></a>
						</div>
					</div>
				</div><!-- /.bs-example -->

				<div class="highlight">
					<pre>
<code class="html"><span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"row"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"col-xs-6 col-md-3"</span><span class="nt">&gt;</span>
	<span class="nt">&lt;a</span> <span class="na">href=</span><span class="s">"#"</span> <span class="na">class=</span><span class="s">"thumbnail"</span><span class="nt">&gt;</span>
	  <span class="nt">&lt;img</span> <span class="na">data-src=</span><span class="s">"holder.js/100%x180"</span> <span class="na">alt=</span><span class="s">"..."</span><span class="nt">&gt;</span>
	<span class="nt">&lt;/a&gt;</span>
  <span class="nt">&lt;/div&gt;</span>
  ...
<span class="nt">&lt;/div&gt;</span>
</code>
</pre>
				</div>

				<h3 id="thumbnails-custom-content">Custom content</h3>

				<p>With a bit of extra markup, it's possible to add any kind of HTML content like headings, paragraphs, or buttons into thumbnails.</p>

				<div class="bs-example">
					<div class="row">
						<div class="col-sm-6 col-md-4">
							<div class="thumbnail">
								<img alt="Generic placeholder thumbnail" data-src="holder.js/300x200">

								<div class="caption">
									<h3>Thumbnail label</h3>

									<p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>

									<p><a class="btn btn-primary" href="#">Button</a> <a class="btn btn-default" href="#">Button</a></p>
								</div>
							</div>
						</div>

						<div class="col-sm-6 col-md-4">
							<div class="thumbnail">
								<img alt="Generic placeholder thumbnail" data-src="holder.js/300x200">

								<div class="caption">
									<h3>Thumbnail label</h3>

									<p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>

									<p><a class="btn btn-primary" href="#">Button</a> <a class="btn btn-default" href="#">Button</a></p>
								</div>
							</div>
						</div>

						<div class="col-sm-6 col-md-4">
							<div class="thumbnail">
								<img alt="Generic placeholder thumbnail" data-src="holder.js/300x200">

								<div class="caption">
									<h3>Thumbnail label</h3>

									<p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>

									<p><a class="btn btn-primary" href="#">Button</a> <a class="btn btn-default" href="#">Button</a></p>
								</div>
							</div>
						</div>
					</div>
				</div><!-- /.bs-example -->

				<div class="highlight">
					<pre>
<code class="html"><span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"row"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"col-sm-6 col-md-4"</span><span class="nt">&gt;</span>
	<span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"thumbnail"</span><span class="nt">&gt;</span>
	  <span class="nt">&lt;img</span> <span class="na">data-src=</span><span class="s">"holder.js/300x200"</span> <span class="na">alt=</span><span class="s">"..."</span><span class="nt">&gt;</span>
	  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"caption"</span><span class="nt">&gt;</span>
		<span class="nt">&lt;h3&gt;</span>Thumbnail label<span class="nt">&lt;/h3&gt;</span>
		<span class="nt">&lt;p&gt;</span>...<span class="nt">&lt;/p&gt;</span>
		<span class="nt">&lt;p&gt;&lt;a</span> <span class="na">href=</span><span class="s">"#"</span> <span class="na">class=</span><span class="s">"btn btn-primary"</span> <span class="na">role=</span><span class="s">"button"</span><span class="nt">&gt;</span>Button<span class="nt">&lt;/a&gt;</span> <span class="nt">&lt;a</span> <span class="na">href=</span><span class="s">"#"</span> <span class="na">class=</span><span class="s">"btn btn-default"</span> <span class="na">role=</span><span class="s">"button"</span><span class="nt">&gt;</span>Button<span class="nt">&lt;/a&gt;&lt;/p&gt;</span>
	  <span class="nt">&lt;/div&gt;</span>
	<span class="nt">&lt;/div&gt;</span>
  <span class="nt">&lt;/div&gt;</span>
<span class="nt">&lt;/div&gt;</span>
</code>
</pre>
				</div>
			</div><!-- Alerts
  ================================================== -->

			<div class="bs-docs-section">
				<div class="page-header">
					<h1 id="alerts">Alerts</h1>
				</div>

				<p class="lead">Provide contextual feedback messages for typical user actions with the handful of available and flexible alert messages. For inline dismissal, use the <a href="../javascript/#alerts">alerts jQuery plugin</a>.</p>

				<h2 id="alerts-examples">Examples</h2>

				<p>Wrap any text and an optional dismiss button in <code>.alert</code> and one of the four contextual classes (e.g., <code>.alert-success</code>) for basic alert messages.</p>

				<div class="bs-callout bs-callout-info">
					<h4>No default class</h4>

					<p>Alerts don't have default classes, only base and modifier classes. A default gray alert doesn't make too much sense, so you're required to specify a type via contextual class. Choose from success, info, warning, or danger.</p>
				</div>

				<div class="bs-example">
					<div class="alert alert-success">
						<strong>Well done!</strong> You successfully read this important alert message.
					</div>

					<div class="alert alert-info">
						<strong>Heads up!</strong> This alert needs your attention, but it's not super important.
					</div>

					<div class="alert alert-warning">
						<strong>Warning!</strong> Best check yo self, you're not looking too good.
					</div>

					<div class="alert alert-danger">
						<strong>Oh snap!</strong> Change a few things up and try submitting again.
					</div>
				</div>

				<div class="highlight">
					<pre>
<code class="html"><span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"alert alert-success"</span><span class="nt">&gt;</span>...<span class="nt">&lt;/div&gt;</span>
<span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"alert alert-info"</span><span class="nt">&gt;</span>...<span class="nt">&lt;/div&gt;</span>
<span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"alert alert-warning"</span><span class="nt">&gt;</span>...<span class="nt">&lt;/div&gt;</span>
<span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"alert alert-danger"</span><span class="nt">&gt;</span>...<span class="nt">&lt;/div&gt;</span>
</code>
</pre>
				</div>

				<h2 id="alerts-dismissable">Dismissable alerts</h2>

				<p>Build on any alert by adding an optional <code>.alert-dismissable</code> and close button.</p>

				<div class="bs-example">
					<div class="alert alert-warning alert-dismissable">
						<button class="close" data-dismiss="alert" type="button">×</button> <strong>Warning!</strong> Best check yo self, you're not looking too good.
					</div>
				</div>

				<div class="highlight">
					<pre>
<code class="html"><span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"alert alert-warning alert-dismissable"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;button</span> <span class="na">type=</span><span class="s">"button"</span> <span class="na">class=</span><span class="s">"close"</span> <span class="na">data-dismiss=</span><span class="s">"alert"</span> <span class="na">aria-hidden=</span><span class="s">"true"</span><span class="nt">&gt;</span><span class="ni">&amp;times;</span><span class="nt">&lt;/button&gt;</span>
  <span class="nt">&lt;strong&gt;</span>Warning!<span class="nt">&lt;/strong&gt;</span> Best check yo self, you're not looking too good.
<span class="nt">&lt;/div&gt;</span>
</code>
</pre>
				</div>

				<div class="bs-callout bs-callout-warning">
					<h4>Ensure proper behavior across all devices</h4>

					<p>Be sure to use the <code>&lt;button&gt;</code> element with the <code>data-dismiss="alert"</code> data attribute.</p>
				</div>

				<h2 id="alerts-links">Links in alerts</h2>

				<p>Use the <code>.alert-link</code> utility class to quickly provide matching colored links within any alert.</p>

				<div class="bs-example">
					<div class="alert alert-success">
						<strong>Well done!</strong> You successfully read <a class="alert-link" href="#">this important alert message</a>.
					</div>

					<div class="alert alert-info">
						<strong>Heads up!</strong> This <a class="alert-link" href="#">alert needs your attention</a>, but it's not super important.
					</div>

					<div class="alert alert-warning">
						<strong>Warning!</strong> Best check yo self, you're <a class="alert-link" href="#">not looking too good</a>.
					</div>

					<div class="alert alert-danger">
						<strong>Oh snap!</strong> <a class="alert-link" href="#">Change a few things up</a> and try submitting again.
					</div>
				</div>

				<div class="highlight">
					<pre>
<code class="html"><span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"alert alert-success"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;a</span> <span class="na">href=</span><span class="s">"#"</span> <span class="na">class=</span><span class="s">"alert-link"</span><span class="nt">&gt;</span>...<span class="nt">&lt;/a&gt;</span>
<span class="nt">&lt;/div&gt;</span>
<span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"alert alert-info"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;a</span> <span class="na">href=</span><span class="s">"#"</span> <span class="na">class=</span><span class="s">"alert-link"</span><span class="nt">&gt;</span>...<span class="nt">&lt;/a&gt;</span>
<span class="nt">&lt;/div&gt;</span>
<span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"alert alert-warning"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;a</span> <span class="na">href=</span><span class="s">"#"</span> <span class="na">class=</span><span class="s">"alert-link"</span><span class="nt">&gt;</span>...<span class="nt">&lt;/a&gt;</span>
<span class="nt">&lt;/div&gt;</span>
<span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"alert alert-danger"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;a</span> <span class="na">href=</span><span class="s">"#"</span> <span class="na">class=</span><span class="s">"alert-link"</span><span class="nt">&gt;</span>...<span class="nt">&lt;/a&gt;</span>
<span class="nt">&lt;/div&gt;</span>
</code>
</pre>
				</div>
			</div><!-- Progress bars
  ================================================== -->

			<div class="bs-docs-section">
				<div class="page-header">
					<h1 id="progress">Progress bars</h1>
				</div>

				<p class="lead">Provide up-to-date feedback on the progress of a workflow or action with simple yet flexible progress bars.</p>

				<div class="bs-callout bs-callout-danger">
					<h4>Cross-browser compatibility</h4>

					<p>Progress bars use CSS3 transitions and animations to achieve some of their effects. These features are not supported in Internet Explorer 9 and below or older versions of Firefox. Opera 12 does not support animations.</p>
				</div>

				<h3 id="progress-basic">Basic example</h3>

				<p>Default progress bar.</p>

				<div class="bs-example">
					<div class="progress">
						<div class="progress-bar" style="width: 60%;">
							<span class="sr-only">60% Complete</span>
						</div>
					</div>
				</div>

				<div class="highlight">
					<pre>
<code class="html"><span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"progress"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"progress-bar"</span> <span class="na">role=</span><span class="s">"progressbar"</span> <span class="na">aria-valuenow=</span><span class="s">"60"</span> <span class="na">aria-valuemin=</span><span class="s">"0"</span> <span class="na">aria-valuemax=</span><span class="s">"100"</span> <span class="na">style=</span><span class="s">"width: 60%;"</span><span class="nt">&gt;</span>
	<span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"sr-only"</span><span class="nt">&gt;</span>60% Complete<span class="nt">&lt;/span&gt;</span>
  <span class="nt">&lt;/div&gt;</span>
<span class="nt">&lt;/div&gt;</span>
</code>
</pre>
				</div>

				<h3 id="progress-alternatives">Contextual alternatives</h3>

				<p>Progress bars use some of the same button and alert classes for consistent styles.</p>

				<div class="bs-example">
					<div class="progress">
						<div class="progress-bar progress-bar-success" style="width: 40%">
							<span class="sr-only">40% Complete (success)</span>
						</div>
					</div>

					<div class="progress">
						<div class="progress-bar progress-bar-info" style="width: 20%">
							<span class="sr-only">20% Complete</span>
						</div>
					</div>

					<div class="progress">
						<div class="progress-bar progress-bar-warning" style="width: 60%">
							<span class="sr-only">60% Complete (warning)</span>
						</div>
					</div>

					<div class="progress">
						<div class="progress-bar progress-bar-danger" style="width: 80%">
							<span class="sr-only">80% Complete (danger)</span>
						</div>
					</div>
				</div>

				<div class="highlight">
					<pre>
<code class="html"><span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"progress"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"progress-bar progress-bar-success"</span> <span class="na">role=</span><span class="s">"progressbar"</span> <span class="na">aria-valuenow=</span><span class="s">"40"</span> <span class="na">aria-valuemin=</span><span class="s">"0"</span> <span class="na">aria-valuemax=</span><span class="s">"100"</span> <span class="na">style=</span><span class="s">"width: 40%"</span><span class="nt">&gt;</span>
	<span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"sr-only"</span><span class="nt">&gt;</span>40% Complete (success)<span class="nt">&lt;/span&gt;</span>
  <span class="nt">&lt;/div&gt;</span>
<span class="nt">&lt;/div&gt;</span>
<span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"progress"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"progress-bar progress-bar-info"</span> <span class="na">role=</span><span class="s">"progressbar"</span> <span class="na">aria-valuenow=</span><span class="s">"20"</span> <span class="na">aria-valuemin=</span><span class="s">"0"</span> <span class="na">aria-valuemax=</span><span class="s">"100"</span> <span class="na">style=</span><span class="s">"width: 20%"</span><span class="nt">&gt;</span>
	<span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"sr-only"</span><span class="nt">&gt;</span>20% Complete<span class="nt">&lt;/span&gt;</span>
  <span class="nt">&lt;/div&gt;</span>
<span class="nt">&lt;/div&gt;</span>
<span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"progress"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"progress-bar progress-bar-warning"</span> <span class="na">role=</span><span class="s">"progressbar"</span> <span class="na">aria-valuenow=</span><span class="s">"60"</span> <span class="na">aria-valuemin=</span><span class="s">"0"</span> <span class="na">aria-valuemax=</span><span class="s">"100"</span> <span class="na">style=</span><span class="s">"width: 60%"</span><span class="nt">&gt;</span>
	<span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"sr-only"</span><span class="nt">&gt;</span>60% Complete (warning)<span class="nt">&lt;/span&gt;</span>
  <span class="nt">&lt;/div&gt;</span>
<span class="nt">&lt;/div&gt;</span>
<span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"progress"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"progress-bar progress-bar-danger"</span> <span class="na">role=</span><span class="s">"progressbar"</span> <span class="na">aria-valuenow=</span><span class="s">"80"</span> <span class="na">aria-valuemin=</span><span class="s">"0"</span> <span class="na">aria-valuemax=</span><span class="s">"100"</span> <span class="na">style=</span><span class="s">"width: 80%"</span><span class="nt">&gt;</span>
	<span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"sr-only"</span><span class="nt">&gt;</span>80% Complete<span class="nt">&lt;/span&gt;</span>
  <span class="nt">&lt;/div&gt;</span>
<span class="nt">&lt;/div&gt;</span>
</code>
</pre>
				</div>

				<h3 id="progress-striped">Striped</h3>

				<p>Uses a gradient to create a striped effect. Not available in IE8.</p>

				<div class="bs-example">
					<div class="progress progress-striped">
						<div class="progress-bar progress-bar-success" style="width: 40%">
							<span class="sr-only">40% Complete (success)</span>
						</div>
					</div>

					<div class="progress progress-striped">
						<div class="progress-bar progress-bar-info" style="width: 20%">
							<span class="sr-only">20% Complete</span>
						</div>
					</div>

					<div class="progress progress-striped">
						<div class="progress-bar progress-bar-warning" style="width: 60%">
							<span class="sr-only">60% Complete (warning)</span>
						</div>
					</div>

					<div class="progress progress-striped">
						<div class="progress-bar progress-bar-danger" style="width: 80%">
							<span class="sr-only">80% Complete (danger)</span>
						</div>
					</div>
				</div>

				<div class="highlight">
					<pre>
<code class="html"><span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"progress progress-striped"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"progress-bar progress-bar-success"</span> <span class="na">role=</span><span class="s">"progressbar"</span> <span class="na">aria-valuenow=</span><span class="s">"40"</span> <span class="na">aria-valuemin=</span><span class="s">"0"</span> <span class="na">aria-valuemax=</span><span class="s">"100"</span> <span class="na">style=</span><span class="s">"width: 40%"</span><span class="nt">&gt;</span>
	<span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"sr-only"</span><span class="nt">&gt;</span>40% Complete (success)<span class="nt">&lt;/span&gt;</span>
  <span class="nt">&lt;/div&gt;</span>
<span class="nt">&lt;/div&gt;</span>
<span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"progress progress-striped"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"progress-bar progress-bar-info"</span> <span class="na">role=</span><span class="s">"progressbar"</span> <span class="na">aria-valuenow=</span><span class="s">"20"</span> <span class="na">aria-valuemin=</span><span class="s">"0"</span> <span class="na">aria-valuemax=</span><span class="s">"100"</span> <span class="na">style=</span><span class="s">"width: 20%"</span><span class="nt">&gt;</span>
	<span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"sr-only"</span><span class="nt">&gt;</span>20% Complete<span class="nt">&lt;/span&gt;</span>
  <span class="nt">&lt;/div&gt;</span>
<span class="nt">&lt;/div&gt;</span>
<span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"progress progress-striped"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"progress-bar progress-bar-warning"</span> <span class="na">role=</span><span class="s">"progressbar"</span> <span class="na">aria-valuenow=</span><span class="s">"60"</span> <span class="na">aria-valuemin=</span><span class="s">"0"</span> <span class="na">aria-valuemax=</span><span class="s">"100"</span> <span class="na">style=</span><span class="s">"width: 60%"</span><span class="nt">&gt;</span>
	<span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"sr-only"</span><span class="nt">&gt;</span>60% Complete (warning)<span class="nt">&lt;/span&gt;</span>
  <span class="nt">&lt;/div&gt;</span>
<span class="nt">&lt;/div&gt;</span>
<span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"progress progress-striped"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"progress-bar progress-bar-danger"</span> <span class="na">role=</span><span class="s">"progressbar"</span> <span class="na">aria-valuenow=</span><span class="s">"80"</span> <span class="na">aria-valuemin=</span><span class="s">"0"</span> <span class="na">aria-valuemax=</span><span class="s">"100"</span> <span class="na">style=</span><span class="s">"width: 80%"</span><span class="nt">&gt;</span>
	<span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"sr-only"</span><span class="nt">&gt;</span>80% Complete (danger)<span class="nt">&lt;/span&gt;</span>
  <span class="nt">&lt;/div&gt;</span>
<span class="nt">&lt;/div&gt;</span>
</code>
</pre>
				</div>

				<h3 id="progress-animated">Animated</h3>

				<p>Add <code>.active</code> to <code>.progress-striped</code> to animate the stripes right to left. Not available in all versions of IE.</p>

				<div class="bs-example">
					<div class="progress progress-striped active">
						<div class="progress-bar" style="width: 45%">
							<span class="sr-only">45% Complete</span>
						</div>
					</div>
				</div>

				<div class="highlight">
					<pre>
<code class="html"><span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"progress progress-striped active"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"progress-bar"</span>  <span class="na">role=</span><span class="s">"progressbar"</span> <span class="na">aria-valuenow=</span><span class="s">"45"</span> <span class="na">aria-valuemin=</span><span class="s">"0"</span> <span class="na">aria-valuemax=</span><span class="s">"100"</span> <span class="na">style=</span><span class="s">"width: 45%"</span><span class="nt">&gt;</span>
	<span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"sr-only"</span><span class="nt">&gt;</span>45% Complete<span class="nt">&lt;/span&gt;</span>
  <span class="nt">&lt;/div&gt;</span>
<span class="nt">&lt;/div&gt;</span>
</code>
</pre>
				</div>

				<h3 id="progress-stacked">Stacked</h3>

				<p>Place multiple bars into the same <code>.progress</code> to stack them.</p>

				<div class="bs-example">
					<div class="progress">
						<div class="progress-bar progress-bar-success" style="width: 35%">
							<span class="sr-only">35% Complete (success)</span>
						</div>

						<div class="progress-bar progress-bar-warning" style="width: 20%">
							<span class="sr-only">20% Complete (warning)</span>
						</div>

						<div class="progress-bar progress-bar-danger" style="width: 10%">
							<span class="sr-only">10% Complete (danger)</span>
						</div>
					</div>
				</div>

				<div class="highlight">
					<pre>
<code class="html"><span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"progress"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"progress-bar progress-bar-success"</span> <span class="na">style=</span><span class="s">"width: 35%"</span><span class="nt">&gt;</span>
	<span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"sr-only"</span><span class="nt">&gt;</span>35% Complete (success)<span class="nt">&lt;/span&gt;</span>
  <span class="nt">&lt;/div&gt;</span>
  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"progress-bar progress-bar-warning"</span> <span class="na">style=</span><span class="s">"width: 20%"</span><span class="nt">&gt;</span>
	<span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"sr-only"</span><span class="nt">&gt;</span>20% Complete (warning)<span class="nt">&lt;/span&gt;</span>
  <span class="nt">&lt;/div&gt;</span>
  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"progress-bar progress-bar-danger"</span> <span class="na">style=</span><span class="s">"width: 10%"</span><span class="nt">&gt;</span>
	<span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"sr-only"</span><span class="nt">&gt;</span>10% Complete (danger)<span class="nt">&lt;/span&gt;</span>
  <span class="nt">&lt;/div&gt;</span>
<span class="nt">&lt;/div&gt;</span>
</code>
</pre>
				</div>
			</div><!-- Media object
  ================================================== -->

			<div class="bs-docs-section">
				<div class="page-header">
					<h1 id="media">Media object</h1>
				</div>

				<p class="lead">Abstract object styles for building various types of components (like blog comments, Tweets, etc) that feature a left- or right-aligned image alongside textual content.</p>

				<h3 id="media-default">Default media</h3>

				<p>The default media allow to float a media object (images, video, audio) to the left or right of a content block.</p>

				<div class="bs-example">
					<div class="media">
						<a class="pull-left" href="#"><img alt="Generic placeholder image" class="media-object" data-src="holder.js/64x64"></a>

						<div class="media-body">
							<h4 class="media-heading">Media heading</h4>Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.
						</div>
					</div>

					<div class="media">
						<a class="pull-left" href="#"><img alt="Generic placeholder image" class="media-object" data-src="holder.js/64x64"></a>

						<div class="media-body">
							<h4 class="media-heading">Media heading</h4>Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.

							<div class="media">
								<a class="pull-left" href="#"><img alt="Generic placeholder image" class="media-object" data-src="holder.js/64x64"></a>

								<div class="media-body">
									<h4 class="media-heading">Nested media heading</h4>Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.
								</div>
							</div>
						</div>
					</div>
				</div><!-- /.bs-example -->

				<div class="highlight">
					<pre>
<code class="html"><span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"media"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;a</span> <span class="na">class=</span><span class="s">"pull-left"</span> <span class="na">href=</span><span class="s">"#"</span><span class="nt">&gt;</span>
	<span class="nt">&lt;img</span> <span class="na">class=</span><span class="s">"media-object"</span> <span class="na">src=</span><span class="s">"..."</span> <span class="na">alt=</span><span class="s">"..."</span><span class="nt">&gt;</span>
  <span class="nt">&lt;/a&gt;</span>
  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"media-body"</span><span class="nt">&gt;</span>
	<span class="nt">&lt;h4</span> <span class="na">class=</span><span class="s">"media-heading"</span><span class="nt">&gt;</span>Media heading<span class="nt">&lt;/h4&gt;</span>
	...
  <span class="nt">&lt;/div&gt;</span>
<span class="nt">&lt;/div&gt;</span>
</code>
</pre>
				</div>

				<h3 id="media-list">Media list</h3>

				<p>With a bit of extra markup, you can use media inside list (useful for comment threads or articles lists).</p>

				<div class="bs-example">
					<ul class="media-list">
						<li class="media">
							<a class="pull-left" href="#"><img alt="Generic placeholder image" class="media-object" data-src="holder.js/64x64"></a>

							<div class="media-body">
								<h4 class="media-heading">Media heading</h4>

								<p>Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis.</p><!-- Nested media object -->

								<div class="media">
									<a class="pull-left" href="#"><img alt="Generic placeholder image" class="media-object" data-src="holder.js/64x64"></a>

									<div class="media-body">
										<h4 class="media-heading">Nested media heading</h4>Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. <!-- Nested media object -->

										<div class="media">
											<a class="pull-left" href="#"><img alt="Generic placeholder image" class="media-object" data-src="holder.js/64x64"></a>

											<div class="media-body">
												<h4 class="media-heading">Nested media heading</h4>Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis.
											</div>
										</div>
									</div>
								</div><!-- Nested media object -->

								<div class="media">
									<a class="pull-left" href="#"><img alt="Generic placeholder image" class="media-object" data-src="holder.js/64x64"></a>

									<div class="media-body">
										<h4 class="media-heading">Nested media heading</h4>Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis.
									</div>
								</div>
							</div>
						</li>

						<li class="media">
							<a class="pull-right" href="#"><img alt="Generic placeholder image" class="media-object" data-src="holder.js/64x64"></a>

							<div class="media-body">
								<h4 class="media-heading">Media heading</h4>Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis.
							</div>
						</li>
					</ul>
				</div>

				<div class="highlight">
					<pre>
<code class="html"><span class="nt">&lt;ul</span> <span class="na">class=</span><span class="s">"media-list"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;li</span> <span class="na">class=</span><span class="s">"media"</span><span class="nt">&gt;</span>
	<span class="nt">&lt;a</span> <span class="na">class=</span><span class="s">"pull-left"</span> <span class="na">href=</span><span class="s">"#"</span><span class="nt">&gt;</span>
	  <span class="nt">&lt;img</span> <span class="na">class=</span><span class="s">"media-object"</span> <span class="na">src=</span><span class="s">"..."</span> <span class="na">alt=</span><span class="s">"..."</span><span class="nt">&gt;</span>
	<span class="nt">&lt;/a&gt;</span>
	<span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"media-body"</span><span class="nt">&gt;</span>
	  <span class="nt">&lt;h4</span> <span class="na">class=</span><span class="s">"media-heading"</span><span class="nt">&gt;</span>Media heading<span class="nt">&lt;/h4&gt;</span>
	  ...
	<span class="nt">&lt;/div&gt;</span>
  <span class="nt">&lt;/li&gt;</span>
<span class="nt">&lt;/ul&gt;</span>
</code>
</pre>
				</div>
			</div><!-- List group
  ================================================== -->

			<div class="bs-docs-section">
				<div class="page-header">
					<h1 id="list-group">List group</h1>
				</div>

				<p class="lead">List groups are a flexible and powerful component for displaying not only simple lists of elements, but complex ones with custom content.</p>

				<h3 id="list-group-basic">Basic example</h3>

				<p>The most basic list group is simply an unordered list with list items, and the proper classes. Build upon it with the options that follow, or your own CSS as needed.</p>

				<div class="bs-example">
					<ul class="list-group">
						<li class="list-group-item">Cras justo odio</li>

						<li class="list-group-item">Dapibus ac facilisis in</li>

						<li class="list-group-item">Morbi leo risus</li>

						<li class="list-group-item">Porta ac consectetur ac</li>

						<li class="list-group-item">Vestibulum at eros</li>
					</ul>
				</div>

				<div class="highlight">
					<pre>
<code class="html"><span class="nt">&lt;ul</span> <span class="na">class=</span><span class="s">"list-group"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;li</span> <span class="na">class=</span><span class="s">"list-group-item"</span><span class="nt">&gt;</span>Cras justo odio<span class="nt">&lt;/li&gt;</span>
  <span class="nt">&lt;li</span> <span class="na">class=</span><span class="s">"list-group-item"</span><span class="nt">&gt;</span>Dapibus ac facilisis in<span class="nt">&lt;/li&gt;</span>
  <span class="nt">&lt;li</span> <span class="na">class=</span><span class="s">"list-group-item"</span><span class="nt">&gt;</span>Morbi leo risus<span class="nt">&lt;/li&gt;</span>
  <span class="nt">&lt;li</span> <span class="na">class=</span><span class="s">"list-group-item"</span><span class="nt">&gt;</span>Porta ac consectetur ac<span class="nt">&lt;/li&gt;</span>
  <span class="nt">&lt;li</span> <span class="na">class=</span><span class="s">"list-group-item"</span><span class="nt">&gt;</span>Vestibulum at eros<span class="nt">&lt;/li&gt;</span>
<span class="nt">&lt;/ul&gt;</span>
</code>
</pre>
				</div>

				<h3 id="list-group-badges">Badges</h3>

				<p>Add the badges component to any list group item and it will automatically be positioned on the right.</p>

				<div class="bs-example">
					<ul class="list-group">
						<li class="list-group-item"><span class="badge">14</span> Cras justo odio</li>

						<li class="list-group-item"><span class="badge">2</span> Dapibus ac facilisis in</li>

						<li class="list-group-item"><span class="badge">1</span> Morbi leo risus</li>
					</ul>
				</div>

				<div class="highlight">
					<pre>
<code class="html"><span class="nt">&lt;ul</span> <span class="na">class=</span><span class="s">"list-group"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;li</span> <span class="na">class=</span><span class="s">"list-group-item"</span><span class="nt">&gt;</span>
	<span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"badge"</span><span class="nt">&gt;</span>14<span class="nt">&lt;/span&gt;</span>
	Cras justo odio
  <span class="nt">&lt;/li&gt;</span>
<span class="nt">&lt;/ul&gt;</span>
</code>
</pre>
				</div>

				<h3 id="list-group-linked">Linked items</h3>

				<p>Linkify list group items by using anchor tags instead of list items (that also means a parent <code>&lt;div&gt;</code> instead of an <code>&lt;ul&gt;</code>). No need for individual parents around each element.</p>

				<div class="bs-example">
					<div class="list-group">
						<a class="list-group-item active" href="#">Cras justo odio</a> <a class="list-group-item" href="#">Dapibus ac facilisis in</a> <a class="list-group-item" href="#">Morbi leo risus</a> <a class="list-group-item" href="#">Porta ac consectetur ac</a> <a class="list-group-item" href="#">Vestibulum at eros</a>
					</div>
				</div>

				<div class="highlight">
					<pre>
<code class="html"><span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"list-group"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;a</span> <span class="na">href=</span><span class="s">"#"</span> <span class="na">class=</span><span class="s">"list-group-item active"</span><span class="nt">&gt;</span>
	Cras justo odio
  <span class="nt">&lt;/a&gt;</span>
  <span class="nt">&lt;a</span> <span class="na">href=</span><span class="s">"#"</span> <span class="na">class=</span><span class="s">"list-group-item"</span><span class="nt">&gt;</span>Dapibus ac facilisis in<span class="nt">&lt;/a&gt;</span>
  <span class="nt">&lt;a</span> <span class="na">href=</span><span class="s">"#"</span> <span class="na">class=</span><span class="s">"list-group-item"</span><span class="nt">&gt;</span>Morbi leo risus<span class="nt">&lt;/a&gt;</span>
  <span class="nt">&lt;a</span> <span class="na">href=</span><span class="s">"#"</span> <span class="na">class=</span><span class="s">"list-group-item"</span><span class="nt">&gt;</span>Porta ac consectetur ac<span class="nt">&lt;/a&gt;</span>
  <span class="nt">&lt;a</span> <span class="na">href=</span><span class="s">"#"</span> <span class="na">class=</span><span class="s">"list-group-item"</span><span class="nt">&gt;</span>Vestibulum at eros<span class="nt">&lt;/a&gt;</span>
<span class="nt">&lt;/div&gt;</span>
</code>
</pre>
				</div>

				<h3 id="list-group-custom-content">Custom content</h3>

				<p>Add nearly any HTML within, even for linked list groups like the one below.</p>

				<div class="bs-example">
					<div class="list-group">
						<a class="list-group-item active" href="#"></a>

						<h4 class="list-group-item-heading"><a class="list-group-item active" href="#">List group item heading</a></h4>

						<p class="list-group-item-text"><a class="list-group-item active" href="#">Donec id elit non mi porta gravida at eget metus. Maecenas sed diam eget risus varius blandit.</a></p><a class="list-group-item" href="#"></a>

						<h4 class="list-group-item-heading"><a class="list-group-item" href="#">List group item heading</a></h4>

						<p class="list-group-item-text"><a class="list-group-item" href="#">Donec id elit non mi porta gravida at eget metus. Maecenas sed diam eget risus varius blandit.</a></p><a class="list-group-item" href="#"></a>

						<h4 class="list-group-item-heading"><a class="list-group-item" href="#">List group item heading</a></h4>

						<p class="list-group-item-text"><a class="list-group-item" href="#">Donec id elit non mi porta gravida at eget metus. Maecenas sed diam eget risus varius blandit.</a></p>
					</div>
				</div>

				<div class="highlight">
					<pre>
<code class="html"><span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"list-group"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;a</span> <span class="na">href=</span><span class="s">"#"</span> <span class="na">class=</span><span class="s">"list-group-item active"</span><span class="nt">&gt;</span>
	<span class="nt">&lt;h4</span> <span class="na">class=</span><span class="s">"list-group-item-heading"</span><span class="nt">&gt;</span>List group item heading<span class="nt">&lt;/h4&gt;</span>
	<span class="nt">&lt;p</span> <span class="na">class=</span><span class="s">"list-group-item-text"</span><span class="nt">&gt;</span>...<span class="nt">&lt;/p&gt;</span>
  <span class="nt">&lt;/a&gt;</span>
<span class="nt">&lt;/div&gt;</span>
</code>
</pre>
				</div>
			</div><!-- Panels
  ================================================== -->

			<div class="bs-docs-section">
				<div class="page-header">
					<h1 id="panels">Panels</h1>
				</div>

				<p class="lead">While not always necessary, sometimes you need to put your DOM in a box. For those situations, try the panel component.</p>

				<h3 id="panels-basic">Basic example</h3>

				<p>By default, all the <code>.panel</code> does is apply some basic border and padding to contain some content.</p>

				<div class="bs-example">
					<div class="panel panel-default">
						<div class="panel-body">
							Basic panel example
						</div>
					</div>
				</div>

				<div class="highlight">
					<pre>
<code class="html"><span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"panel panel-default"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"panel-body"</span><span class="nt">&gt;</span>
	Basic panel example
  <span class="nt">&lt;/div&gt;</span>
<span class="nt">&lt;/div&gt;</span>
</code>
</pre>
				</div>

				<h3 id="panels-heading">Panel with heading</h3>

				<p>Easily add a heading container to your panel with <code>.panel-heading</code>. You may also include any <code>&lt;h1&gt;</code>-<code>&lt;h6&gt;</code> with a <code>.panel-title</code> class to add a pre-styled heading.</p>

				<div class="bs-example">
					<div class="panel panel-default">
						<div class="panel-heading">
							Panel heading without title
						</div>

						<div class="panel-body">
							Panel content
						</div>
					</div>

					<div class="panel panel-default">
						<div class="panel-heading">
							<h3 class="panel-title">Panel title</h3>
						</div>

						<div class="panel-body">
							Panel content
						</div>
					</div>
				</div>

				<div class="highlight">
					<pre>
<code class="html"><span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"panel panel-default"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"panel-heading"</span><span class="nt">&gt;</span>Panel heading without title<span class="nt">&lt;/div&gt;</span>
  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"panel-body"</span><span class="nt">&gt;</span>
	Panel content
  <span class="nt">&lt;/div&gt;</span>
<span class="nt">&lt;/div&gt;</span>

<span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"panel panel-default"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"panel-heading"</span><span class="nt">&gt;</span>
	<span class="nt">&lt;h3</span> <span class="na">class=</span><span class="s">"panel-title"</span><span class="nt">&gt;</span>Panel title<span class="nt">&lt;/h3&gt;</span>
  <span class="nt">&lt;/div&gt;</span>
  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"panel-body"</span><span class="nt">&gt;</span>
	Panel content
  <span class="nt">&lt;/div&gt;</span>
<span class="nt">&lt;/div&gt;</span>
</code>
</pre>
				</div>

				<h3 id="panels-footer">Panel with footer</h3>

				<p>Wrap buttons or secondary text in <code>.panel-footer</code>. Note that panel footers <strong>do not</strong> inherit colors and borders when using contextual variations as they are not meant to be in the foreground.</p>

				<div class="bs-example">
					<div class="panel panel-default">
						<div class="panel-body">
							Panel content
						</div>

						<div class="panel-footer">
							Panel footer
						</div>
					</div>
				</div>

				<div class="highlight">
					<pre>
<code class="html"><span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"panel panel-default"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"panel-body"</span><span class="nt">&gt;</span>
	Panel content
  <span class="nt">&lt;/div&gt;</span>
  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"panel-footer"</span><span class="nt">&gt;</span>Panel footer<span class="nt">&lt;/div&gt;</span>
<span class="nt">&lt;/div&gt;</span>
</code>
</pre>
				</div>

				<h3 id="panels-alternatives">Contextual alternatives</h3>

				<p>Like other components, easily make a panel more meaningful to a particular context by adding any of the contextual state classes.</p>

				<div class="bs-example">
					<div class="panel panel-primary">
						<div class="panel-heading">
							<h3 class="panel-title">Panel title</h3>
						</div>

						<div class="panel-body">
							Panel content
						</div>
					</div>

					<div class="panel panel-success">
						<div class="panel-heading">
							<h3 class="panel-title">Panel title</h3>
						</div>

						<div class="panel-body">
							Panel content
						</div>
					</div>

					<div class="panel panel-info">
						<div class="panel-heading">
							<h3 class="panel-title">Panel title</h3>
						</div>

						<div class="panel-body">
							Panel content
						</div>
					</div>

					<div class="panel panel-warning">
						<div class="panel-heading">
							<h3 class="panel-title">Panel title</h3>
						</div>

						<div class="panel-body">
							Panel content
						</div>
					</div>

					<div class="panel panel-danger">
						<div class="panel-heading">
							<h3 class="panel-title">Panel title</h3>
						</div>

						<div class="panel-body">
							Panel content
						</div>
					</div>
				</div>

				<div class="highlight">
					<pre>
<code class="html"><span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"panel panel-primary"</span><span class="nt">&gt;</span>...<span class="nt">&lt;/div&gt;</span>
<span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"panel panel-success"</span><span class="nt">&gt;</span>...<span class="nt">&lt;/div&gt;</span>
<span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"panel panel-info"</span><span class="nt">&gt;</span>...<span class="nt">&lt;/div&gt;</span>
<span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"panel panel-warning"</span><span class="nt">&gt;</span>...<span class="nt">&lt;/div&gt;</span>
<span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"panel panel-danger"</span><span class="nt">&gt;</span>...<span class="nt">&lt;/div&gt;</span>
</code>
</pre>
				</div>

				<h3 id="panels-tables">With tables</h3>

				<p>Add any non-bordered <code>.table</code> within a panel for a seamless design. If there is a <code>.panel-body</code>, we add an extra border to the top of the table for separation.</p>

				<div class="bs-example">
					<div class="panel panel-default">
						<!-- Default panel contents -->

						<div class="panel-heading">
							Panel heading
						</div>

						<div class="panel-body">
							<p>Some default panel content here. Nulla vitae elit libero, a pharetra augue. Aenean lacinia bibendum nulla sed consectetur. Aenean eu leo quam. Pellentesque ornare sem lacinia quam venenatis vestibulum. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
						</div><!-- Table -->

						<table class="table">
							<thead>
								<tr>
									<th>#</th>

									<th>First Name</th>

									<th>Last Name</th>

									<th>Username</th>
								</tr>
							</thead>

							<tbody>
								<tr>
									<td>1</td>

									<td>Mark</td>

									<td>Otto</td>

									<td>@mdo</td>
								</tr>

								<tr>
									<td>2</td>

									<td>Jacob</td>

									<td>Thornton</td>

									<td>@fat</td>
								</tr>

								<tr>
									<td>3</td>

									<td>Larry</td>

									<td>the Bird</td>

									<td>@twitter</td>
								</tr>
							</tbody>
						</table>
					</div>
				</div>

				<div class="highlight">
					<pre>
<code class="html"><span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"panel panel-default"</span><span class="nt">&gt;</span>
  <span class="c">&lt;!-- Default panel contents --&gt;</span>
  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"panel-heading"</span><span class="nt">&gt;</span>Panel heading<span class="nt">&lt;/div&gt;</span>
  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"panel-body"</span><span class="nt">&gt;</span>
	<span class="nt">&lt;p&gt;</span>...<span class="nt">&lt;/p&gt;</span>
  <span class="nt">&lt;/div&gt;</span>

  <span class="c">&lt;!-- Table --&gt;</span>
  <span class="nt">&lt;table</span> <span class="na">class=</span><span class="s">"table"</span><span class="nt">&gt;</span>
	...
  <span class="nt">&lt;/table&gt;</span>
<span class="nt">&lt;/div&gt;</span>
</code>
</pre>
				</div>

				<p>If there is no panel body, the component moves from panel header to table without interruption.</p>

				<div class="bs-example">
					<div class="panel panel-default">
						<!-- Default panel contents -->

						<div class="panel-heading">
							Panel heading
						</div><!-- Table -->

						<table class="table">
							<thead>
								<tr>
									<th>#</th>

									<th>First Name</th>

									<th>Last Name</th>

									<th>Username</th>
								</tr>
							</thead>

							<tbody>
								<tr>
									<td>1</td>

									<td>Mark</td>

									<td>Otto</td>

									<td>@mdo</td>
								</tr>

								<tr>
									<td>2</td>

									<td>Jacob</td>

									<td>Thornton</td>

									<td>@fat</td>
								</tr>

								<tr>
									<td>3</td>

									<td>Larry</td>

									<td>the Bird</td>

									<td>@twitter</td>
								</tr>
							</tbody>
						</table>
					</div>
				</div>

				<div class="highlight">
					<pre>
<code class="html"><span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"panel panel-default"</span><span class="nt">&gt;</span>
  <span class="c">&lt;!-- Default panel contents --&gt;</span>
  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"panel-heading"</span><span class="nt">&gt;</span>Panel heading<span class="nt">&lt;/div&gt;</span>

  <span class="c">&lt;!-- Table --&gt;</span>
  <span class="nt">&lt;table</span> <span class="na">class=</span><span class="s">"table"</span><span class="nt">&gt;</span>
	...
  <span class="nt">&lt;/table&gt;</span>
<span class="nt">&lt;/div&gt;</span>
</code>
</pre>
				</div>

				<h3 id="panels-list-group">With list groups</h3>

				<p>Easily include full-width <a href="#list-group">list groups</a> within any panel.</p>

				<div class="bs-example">
					<div class="panel panel-default">
						<!-- Default panel contents -->

						<div class="panel-heading">
							Panel heading
						</div>

						<div class="panel-body">
							<p>Some default panel content here. Nulla vitae elit libero, a pharetra augue. Aenean lacinia bibendum nulla sed consectetur. Aenean eu leo quam. Pellentesque ornare sem lacinia quam venenatis vestibulum. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
						</div><!-- List group -->

						<ul class="list-group">
							<li class="list-group-item">Cras justo odio</li>

							<li class="list-group-item">Dapibus ac facilisis in</li>

							<li class="list-group-item">Morbi leo risus</li>

							<li class="list-group-item">Porta ac consectetur ac</li>

							<li class="list-group-item">Vestibulum at eros</li>
						</ul>
					</div>
				</div>

				<div class="highlight">
					<pre>
<code class="html"><span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"panel panel-default"</span><span class="nt">&gt;</span>
  <span class="c">&lt;!-- Default panel contents --&gt;</span>
  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"panel-heading"</span><span class="nt">&gt;</span>Panel heading<span class="nt">&lt;/div&gt;</span>
  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"panel-body"</span><span class="nt">&gt;</span>
	<span class="nt">&lt;p&gt;</span>...<span class="nt">&lt;/p&gt;</span>
  <span class="nt">&lt;/div&gt;</span>

  <span class="c">&lt;!-- List group --&gt;</span>
  <span class="nt">&lt;ul</span> <span class="na">class=</span><span class="s">"list-group"</span><span class="nt">&gt;</span>
	<span class="nt">&lt;li</span> <span class="na">class=</span><span class="s">"list-group-item"</span><span class="nt">&gt;</span>Cras justo odio<span class="nt">&lt;/li&gt;</span>
	<span class="nt">&lt;li</span> <span class="na">class=</span><span class="s">"list-group-item"</span><span class="nt">&gt;</span>Dapibus ac facilisis in<span class="nt">&lt;/li&gt;</span>
	<span class="nt">&lt;li</span> <span class="na">class=</span><span class="s">"list-group-item"</span><span class="nt">&gt;</span>Morbi leo risus<span class="nt">&lt;/li&gt;</span>
	<span class="nt">&lt;li</span> <span class="na">class=</span><span class="s">"list-group-item"</span><span class="nt">&gt;</span>Porta ac consectetur ac<span class="nt">&lt;/li&gt;</span>
	<span class="nt">&lt;li</span> <span class="na">class=</span><span class="s">"list-group-item"</span><span class="nt">&gt;</span>Vestibulum at eros<span class="nt">&lt;/li&gt;</span>
  <span class="nt">&lt;/ul&gt;</span>
<span class="nt">&lt;/div&gt;</span>
</code>
</pre>
				</div>
			</div><!-- Wells
  ================================================== -->

			<div class="bs-docs-section">
				<div class="page-header">
					<h1 id="wells">Wells</h1>
				</div>

				<h3>Default well</h3>

				<p>Use the well as a simple effect on an element to give it an inset effect.</p>

				<div class="bs-example">
					<div class="well">
						Look, I'm in a well!
					</div>
				</div>

				<div class="highlight">
					<pre>
<code class="html"><span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"well"</span><span class="nt">&gt;</span>...<span class="nt">&lt;/div&gt;</span>
</code>
</pre>
				</div>

				<h3>Optional classes</h3>

				<p>Control padding and rounded corners with two optional modifier classes.</p>

				<div class="bs-example">
					<div class="well well-lg">
						Look, I'm in a large well!
					</div>
				</div>

				<div class="highlight">
					<pre>
<code class="html"><span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"well well-lg"</span><span class="nt">&gt;</span>...<span class="nt">&lt;/div&gt;</span>
</code>
</pre>
				</div>

				<div class="bs-example">
					<div class="well well-sm">
						Look, I'm in a small well!
					</div>
				</div>

				<div class="highlight">
					<pre>
<code class="html"><span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"well well-sm"</span><span class="nt">&gt;</span>...<span class="nt">&lt;/div&gt;</span>
</code>
</pre>
				</div>
			</div>
		</div>
	</div>
</body>
</html>

<?php  get_footer();?>