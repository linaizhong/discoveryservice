<?php // Copyright (c) 2012, SWITCH - Serving Swiss Universities

// WAYF localized language strings
// Make sure to use HTML entities instead of plain UTF-8 characters for 
// non-ASCII characters if you are using the Embedded WAYF. It could be that the
// Embedded WAYF is used on non-UTF8 web pages, which then could cause 
// encoding issues

// English, default
$langStrings['en'] = array (
'title' => 'AAF - Select your organisation',
'header' => 'Login through your organisation',
'about_federation' => 'About AAF',
'about_organisation' => 'About AAF',
'faq' => 'FAQ',
'help' => 'Help',
'privacy' => 'Privacy',
'make_selection' => 'You must select a valid Organisation.',
'settings' => 'Default Organisation for this web browser',
'permanent_select_header' => 'Permanently set your Organisation',
'permanent_cookie' => 'On this page you can set a <strong>default Organisation</strong> for this web browser. Setting a default Organisation will henceforth redirect you directly to your Organisation when you access AAF services. Please consult the Help available on this page if you require additional information about this setting',
'permanent_cookie_notice' => 'A default setting for your Organisation has the effect that you don\'t need to select your Organisation anymore when accessing AAF services with this web browser. The default setting is:',
'permanent_cookie_note' => 'You can reset the default setting by going to: %s',
'delete_permanent_cookie_button' => 'Reset',
'goto_sp' => 'Save and continue to your Organisation',
'permanently_remember_selection' => 'Remember my organisation permanently and skip this selection from now on',
'confirm_permanent_selection' => 'By clicking OK below you will no longer need to select your Organisation every time you attempt to login to a service of the Australian Access Federation. If you are unsure please select Cancel and consult the Help available on this page for further information.',
'save_button' => 'Save',
'access_host' => 'In order to access the <b>\'%s\'</b> please select or search for your Organisation from the list below:',
'select_idp' => 'Select the organisation you are affiliated with',
'search_idp' => 'Type the name of the organisation you are affiliated with',
'remember_selection' => 'Remember my organisation for this web browser session only',
'additional_info' => '<table border="0"><tr><td width="14"><a href="http://www.aaf.edu.au/" target="_blank"><img src="/discovery/images/aaf_button_small.png" alt="AAF" border="0"></a></td><td><p class="switchaai">Your organisation\'s identity is now accepted in more places. Look for this logo to access participating services.</p></td></tr></table>',
'invalid_user_idp' => 'There may be an error in the data you just submitted.<br>The value of your input <b>\'%s\'</b> is invalid.<br>Only the following values are allowed:',
'contact_assistance' => 'Please contact <a href="mailto:support@aaf.edu.au">support@aaf.edu.au</a> for assistance.',
'no_arguments' => 'No arguments received!',
'arguments_missing' => 'The web server received an invalid query because there are some arguments missing<br>The following arguments were received:',
'valid_request_description' => 'A valid request needs at least the arguments <b>shire</b> and <b>target</b> with valid values. Optionally the arguments <b>providerID</b>, <b>origin</b> and <b>redirect</b> can be supplied to automtically redirect the web browser to a Organisation and to do that automatically for the current web browser session',
'valid_saml2_request_description' => 'A valid SAML2 request needs at least the arguments <b>entityID</b> and <b>return</b> with valid values. Instead of the <b>return</b> argument, metadata for the Service Provider can include a <b>DiscoveryResponse</b> endpoint. Optionally the arguments <b>isPassive</b>, <b>policy</b> and <b>returnIDParam</b> can be supplied to automtically redirect the web browser to a Organisation and to do that automatically for the current web browser session',
'invalid_query' => 'Error: Invalid Query',
'select_button' => 'Select',
'login' => 'Login',
'login_with' => 'Login with:',
'other_federation' => 'From other federations',
'logged_in' => 'You are already authenticated. <a href=\"%s\">Proceed</a>.',
'most_used' => 'Most often used Organisations',
'invalid_return_url' => 'The return URL <b>\'%s\'</b> is not a valid URL.',
'unverified_return_url' => 'The return URL <b>\'%s\'</b> could not be verified for Service Provider <b>\'%s\'</b>.',
'unknown_sp' => 'The Service Provider <b>\'%s\'</b> could not be found in metadata and is therefore unknown.',
'no_idp_found' => 'No Organisation found for this search text',
'no_idp_available' => 'No Home Organisation available',

);

?>
