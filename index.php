<?php
/**
 * @package     Joomla.Site
 * @subpackage  Templates.Tom
 *
 * @copyright   Copyright (C) 2005 - 2015 Thomas Winterling All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */

defined('_JEXEC') or die;

/** @var JDocumentHtml $this */

$app  = JFactory::getApplication();
$user = JFactory::getUser();

// Output as HTML5
$this->setHtml5(true);

// Getting params from template
$params = $app->getTemplate(true)->params;

// Detecting Active Variables
$option   = $app->input->getCmd('option', '');
$view     = $app->input->getCmd('view', '');
$layout   = $app->input->getCmd('layout', '');
$task     = $app->input->getCmd('task', '');
$itemid   = $app->input->getCmd('Itemid', '');
$sitename = $app->get('sitename');

if ($task === 'edit' || $layout === 'form')
{
    $fullWidth = 1;
}
else
{
    $fullWidth = 0;
}

/* Template Params */
$heading = $params->get('heading');
$notice = $params->get('notice');
$headingColor = $params->get('heading-color');
$noticeColor = $params->get('notice-color');
$backgroundColor = $params->get('background-color');
$date = $params->get('date');
$dateColor = $params->get('date-color');


$document = JFactory::getDocument();
$document->addStyleSheet(JURI::base() . $this->template .'/wl-placeholder/css/style.css');


$style = '';


$style .= 'body .page h1 { 
color: '.$headingColor.';
}';

$style .= 'body { background: '.$backgroundColor.';}';

$style .= 'body .page p { color: '.$noticeColor.';}';

$style .= 'body .page #timer { color: '.$dateColor.';}';



$document->addStyleDeclaration( $style );

// Add Stylesheets
JHtml::_('stylesheet', 'style.css', array('version' => 'auto', 'relative' => true));

// Check for a custom js file
JHtml::_('script', 'scripts.js', array('version' => 'auto', 'relative' => true));

?>
<!DOCTYPE html>

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="<?php echo $this->language; ?>"
      lang="<?php echo $this->language; ?>" dir="<?php echo $this->direction; ?>">

<head>
    <jdoc:include type="head" />
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400" rel="stylesheet" type="text/css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
</head>
<body>
<section class="page">

    <h1>Neue Website</h1>

    <p class="beschreibung">Hier entsteht gerade eine neue Website.</p>

    <div id="timer"></div>

</section>

</body>
</html>