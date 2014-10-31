<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<!--
 * CKFinder
 * ========
 * http://cksource.com/ckfinder
 * Copyright (C) 2007-2014, CKSource - Frederico Knabben. All rights reserved.
 *
 * The software, this file and its contents are subject to the CKFinder
 * License. Please read the license.txt file before using, installing, copying,
 * modifying or distribute this file or part of its contents. The contents of
 * this file is part of the Source Code of CKFinder.
-->
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<title>{{{ \Config::get('laravel-ckeditor::config.title') or '文件浏览' }}}</title>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="robots" content="noindex, nofollow" />
	<style type="text/css">
	/*
     * CKFinder
     * ========
     * http://cksource.com/ckfinder
     * Copyright (C) 2007-2014, CKSource - Frederico Knabben. All rights reserved.
     *
     * The software, this file and its contents are subject to the CKFinder
     * License. Please read the license.txt file before using, installing, copying,
     * modifying or distribute this file or part of its contents. The contents of
     * this file is part of the Source Code of CKFinder.
     *
     * Styles used in the samples pages.
     */

    html, body, h1, h2, h3, h4, h5, h6, div, span, blockquote, p, address, form, fieldset, img, ul, ol, dl, dt, dd, li, hr, table, td, th, strong, em, sup, sub, dfn, ins, del, q, cite, var, samp, code, kbd, tt, pre {
    	line-height: 1.5em;
    }

    body {
    	padding:10px 30px;
    }

    input, textarea, select, option, optgroup, button, td, th {
    	font-size: 100%;
    }

    pre,
    code,
    kbd,
    samp,
    tt{
      font-family: monospace,monospace;
      font-size: 1em;
    }

    h1.samples {
      color:#92B901;
      font-size:200%;
      font-weight:normal;
      margin: 0;
      padding: 0;
    }

    h2.samples {
      color:#000000;
      font-size:130%;
      margin: 0;
      padding: 0;
    }

    p, blockquote, address, form, pre, dl, h1.samples, h2.samples {
    	margin-bottom:15px;
    }

    ul.samples {
    	margin-bottom:15px;
    }

    .clear {
    	clear:both;
    }

    fieldset
    {
    	margin: 0;
    	padding: 10px;
    }

    body, input, textarea {
    	color: #333333;
    	font-family: Arial, Helvetica, sans-serif;
    }

    body {
    	font-size: 75%;
    }

    a.samples {
    	color: #92B901;
    	text-decoration:none;
    }

    a.samples:hover {
      text-decoration:underline;
    	color: #BED567;
    }

    form
    {
    	margin: 0;
    	padding: 0;
    }

    pre.samples
    {
    	background-color: #F7F7F7;
    	border: 1px solid #D7D7D7;
    	overflow: auto;
    	padding: 0.25em;
    }

    #alerts
    {
    	color: Red;
    }

    #footer {
    	clear: both;
    	padding-top: 10px;
    }
    #footer hr
    {
    	margin: 10px 0 15px 0;
    	height: 1px;
    	border: solid 1px gray;
    	border-bottom: none;
    }

    #footer p
    {
    	margin: 0 10px 10px 10px;
    	float: left;
    }

    #footer #copy
    {
    	float: right;
    }

    #outputSample
    {
    	width: 100%;
    	table-layout: fixed;
    }

    #outputSample thead th
    {
    	color: #dddddd;
    	background-color: #999999;
    	padding: 4px;
    	white-space: nowrap;
    }

    #outputSample tbody th
    {
    	vertical-align: top;
    	text-align: left;
    }

    #outputSample pre
    {
    	margin: 0;
    	padding: 0;
    	white-space: pre; /* CSS2 */
    	white-space: -moz-pre-wrap; /* Mozilla*/
    	white-space: -o-pre-wrap; /* Opera 7 */
    	white-space: pre-wrap; /* CSS 2.1 */
    	white-space: pre-line; /* CSS 3 (and 2.1 as well, actually) */
    	word-wrap: break-word; /* IE */
    }

    .description {
    	border: 1px dotted #B7B7B7;
    	margin-bottom: 10px;
    	padding: 20px 10px 20px;
    }

    label {
    	display: block;
    	margin-bottom:6px;
    }

	</style>
	<style type="text/css">

		/* By defining CKFinderFrame, you are able to customize the CKFinder frame style */
		.CKFinderFrame
		{
			border: solid 2px #e3e3c7;
			background-color: #f1f1e3;
		}

	</style>
	<script type="text/javascript">

// This is a sample function which is called when a file is selected in CKFinder.
function ShowFileInfo( fileUrl, data )
{
	var msg = 'The selected URL is: ' + fileUrl + '\n\n';
	// Display additional information available in the "data" object.
	// For example, the size of a file (in KB) is available in the data["fileSize"] variable.
	if ( fileUrl != data['fileUrl'] )
		msg += 'File url: ' + data['fileUrl'] + '\n';
	msg += 'File size: ' + data['fileSize'] + 'KB\n';
	msg += 'Last modified: ' + data['fileDate'];

	alert( msg );
}

	</script>
</head>
<body>
	<h1 class="samples">
		{{{ \Config::get('laravel-ckeditor::config.title') or '文件浏览' }}}
	</h1>
	<div class="description">
	</div>
	<p style="padding-left: 30px; padding-right: 30px;">
<?php

// You can use the "CKFinder" class to render CKFinder in a page:
$finder = new CKFinder() ;
$finder->BasePath = '/finder/' ;	// The path for the installation of CKFinder (default = "/ckfinder/").
$finder->SelectFunction = 'ShowFileInfo' ;
// The default height is 400.
$finder->Height = 600;
$finder->Create() ;

// It can also be done in a single line, calling the "static"
// Create( basePath, width, height, selectFunction ) function:
// CKFinder::CreateStatic( '../../', null, null, 'ShowFileInfo' ) ;

?>
	</p>
	<div id="footer">
		<hr />
		<p>
			CKFinder - Ajax File Manager - <a class="samples" href="http://cksource.com/ckfinder/">http://cksource.com/ckfinder</a>
		</p>
		<p id="copy">
			Copyright &copy; 2007-2014, <a class="samples" href="http://cksource.com/">CKSource</a> - Frederico Knabben. All rights reserved.
		</p>
	</div>
</body>
</html>
