<?php
/***********************************************************/
/* Cetemaster Services, Limited                            */
/* Copyright (c) 2010-2013. All Rights Reserved,           */
/* www.cetemaster.com.br / www.cetemaster.com              */
/***********************************************************/
/* File generated by Cetemaster PHP Template Engine        */
/* Cache file:                                             */
/* Cache generated in 14/09/2013 - 17:40h                  */
/***********************************************************/
/* This is a cache file generated by Effect Web 2.10.15    */
/* DO NOT EDIT DIRECTLY                                    */
/* The changes are not saved to the database automatically */
/***********************************************************/

class skin_others extends CTM_Command
{
	//============================================
	// Begin: error_page
	//============================================
	public function error_page() 
	{
		global $message_error;  // PHP Globals

		$CTM_HTML = NULL;
		$CTM_HTML .= "    <div class=\"box-content\">
    	<div class=\"header\"><span>{$this->lang->words['Error']['Title']}</span></div>
        <div class=\"error-box\">{$message_error}</div>
    </div>";
		return $CTM_HTML;
	}
	//============================================
	// End: error_page
	//============================================
	//============================================
	// Begin: global_login
	//============================================
	public function global_login() 
	{
		global $referer, $write_result;  // PHP Globals

		$CTM_HTML = NULL;
		$CTM_HTML .= "    <div class=\"box-content\">
    	<div class=\"header\"><span>{$this->lang->words['Auth']['Login']['Form']['Title']}</span></div>
        <form name=\"LoginMember\" id=\"LoginMember\" class=\"loginForm\">
        	".(!empty($referer) ? "<input type=\"hidden\" name=\"referer\" value=\"{$referer}\" />" : "<input type=\"hidden\" name=\"referer\" value=\"?app=core&amp;module=userpanel\" />")."
        	<table width=\"100%\" border=\"0\">
            	<tr>
                	<td><label>{$this->lang->words['Auth']['Login']['Form']['Login']}</label></td>
                    <td><input type=\"text\" name=\"username\" id=\"username\" onkeyup=\"this.value = this.value.toLowerCase();\" maxlength=\"10\" size=\"32\" /></td>
        		</tr>
                <tr>
                	<td><label>{$this->lang->words['Auth']['Login']['Form']['Password']}</label></td>
                    <td><input type=\"password\" name=\"password\" id=\"assword\" maxlength=\"10\" size=\"32\" /></td>
        		</tr>
                <tr>
                	<td></td>
                    <td><a href=\"javascript: void(0);\" onclick=\"CTM.Load('?/recovery/', 'content');\">{$this->lang->words['Auth']['Login']['Form']['Recovery']}</a></td>
        		</tr>
            </table>
            <br />
            <input type=\"button\" value=\"{$this->lang->words['Auth']['Login']['Form']['Button']}\" onclick=\"CTM.AjaxLoad('?app=core&amp;module=global&amp;section=login&amp;do=process','Command','LoginMember');\" class=\"btn\" />
        </form>
    </div>
    <div id=\"Command\">".(!empty($write_result) ? "{$write_result}" : NULL)."</div>";
		return $CTM_HTML;
	}
	//============================================
	// End: global_login
	//============================================
	//============================================
	// Begin: redirector
	//============================================
	public function redirector() 
	{
		global $redirector;  // PHP Globals

		$CTM_HTML = NULL;
		$CTM_HTML .= "<!DOCTYPE html PUBLIC \"-//W3C//DTD XHTML 1.0 Transitional//EN\" \"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd\">
<html xmlns=\"http://www.w3.org/1999/xhtml\">
<head>
<meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\" />
<meta http-equiv=\"refresh\" content=\"2; url={$redirector['referer']}\" />
<link href=\"{$this->vars['board_url']}{$this->vars['style_dirs']['skin_styles']}redirector.css\" rel=\"stylesheet\" type=\"text/css\" />
<title>{$this->lang->words['Redirector']['Title']}</title>
<script type='text/javascript'>
//<![CDATA[
// Fix Mozilla bug: #209020
if(navigator.product == \"Gecko\")
{
	navstring = navigator.userAgent.toLowerCase();
	geckonum = navstring.replace(/.*gecko\/(\d+)/, \"$1\");
	setTimeout(\"moz_redirect()\", 1500);
}
function moz_redirect()
{		
	var url_bit = \"{$redirector['referer']}\";
	window.location = url_bit.replace(new RegExp(\"&amp;\", \"g\"), \"&\");
}
//>
</script>
</head>
<body id=\"redirector\">
<div id=\"all\">
	<div class='box-content'>
		<div class=\"header\"><span>{$this->lang->words['Redirector']['SubTitle']}</span></div>
		<p>
			<strong>{$redirector['title']}</strong>
            {$redirector['message']}
			<br /><br />
			{$this->lang->words['Redirector']['Wait']}
			<br />
			<span class='desc'>(<a href=\"{$redirector['referer']}\">{$this->lang->words['Redirector']['Link']}</a>)</span>	
		</p>
	</div>
</div>
</body>
</html>";
		return $CTM_HTML;
	}
	//============================================
	// End: redirector
	//============================================

}
$callSkinCache = new skin_others();
$callSkinCache->registry();