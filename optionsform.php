<? 
$options = get_curly_quotes_options();
extract($options);
?>

<div class="wrap"><h2>No Curly Quotes Options</h2>

<form method="post" action="options.php">

<?php wp_nonce_field('update-options'); ?>

<table class="form-table">


<tr valign="top"><td width="20%"><h3>Post titles</h3></td><td valign="middle"> Curly quotes <b>on</b> <input type="radio" name="no_curly_quotes_title" value="on" <? if ($no_curly_quotes_title == "on") echo "checked"; ?> />&nbsp;&nbsp;&nbsp;<b>off</b> <input type="radio" name="no_curly_quotes_title" value="off" <? if ($no_curly_quotes_title == "off") echo "checked"; ?> /></td></tr>

<tr valign="top"><td width="20%"><h3>Post content</h3></td><td valign="middle"> Curly quotes <b>on</b> <input type="radio" name="no_curly_quotes_content" value="on" <? if ($no_curly_quotes_content == "on") echo "checked"; ?> />&nbsp;&nbsp;&nbsp;<b>off</b> <input type="radio" name="no_curly_quotes_content" value="off" <? if ($no_curly_quotes_content == "off") echo "checked"; ?> /></td></tr>

<tr valign="top"><td width="20%"><h3>Excerpt</h3></td><td valign="middle"> Curly quotes <b>on</b> <input type="radio" name="no_curly_quotes_excerpt" value="on" <? if ($no_curly_quotes_excerpt == "on") echo "checked"; ?> />&nbsp;&nbsp;&nbsp;<b>off</b> <input type="radio" name="no_curly_quotes_excerpt" value="off" <? if ($no_curly_quotes_excerpt == "off") echo "checked"; ?> /></td></tr>

<tr valign="top"><td width="20%"><h3>Comments text</h3></td><td valign="middle"> Curly quotes <b>on</b> <input type="radio" name="no_curly_quotes_comments" value="on" <? if ($no_curly_quotes_comments == "on") echo "checked"; ?> />&nbsp;&nbsp;&nbsp;<b>off</b> <input type="radio" name="no_curly_quotes_comments" value="off" <? if ($no_curly_quotes_comments == "off") echo "checked"; ?> /></td></tr>

<input type="hidden" name="action" value="update" />
<input type="hidden" name="page_options" value="no_curly_quotes_title, no_curly_quotes_content, no_curly_quotes_excerpt, no_curly_quotes_comments" />
<tr><td> </td><td><input type="submit" class="button-primary" value="<?php _e('Save Changes') ?>" /></td><td> </td></tr>

</table></form></div>