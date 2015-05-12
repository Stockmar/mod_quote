<?php
/*
* Version			: 1.0
* Created by		: Jeppe Stockmar
* Email				: info@stockmar.dk
* Created on		: 16-04-2015
* URL				: http://stockmar.dk
* @copyright		: 2015 stockmar.dk
* License 			: GPLv2 http://www.gnu.org/licenses/gpl-2.0.html
* <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
*/

defined('_JEXEC') or die;

// Include the helper.
 require_once __DIR__ . '/helper.php';

// Load the method jquery script.
JHtml::_('jquery.framework');

$doc 	=& JFactory::getDocument();
$user 	= JFactory::getUser();
$header	= 		$params->get('header');


$quote_1 = $params->get('quote_1');
$quote_2 = $params->get('quote_2');
$quote_3 = $params->get('quote_3');

$name_1 = $params->get('name_1');
$name_2 = $params->get('name_2');
$name_3 = $params->get('name_3');

$title_1 = $params->get('title_1');
$title_2 = $params->get('title_2');
$title_3 = $params->get('title_3');

$qtprogress = $params->get('qtprogress');
$quotescolor = $params->get('QUOTES-COLOR');
$quotesname = $params->get('QUOTES-NAME');
$fontsize = $params->get('fontsize');


// add the stylesheet
$doc->addStylesheet( JURI::root(true) . '/modules/mod_quote/css/style.min.css' );

$style = 
	'
	.cbp-qtprogress{'
		.'background: '.$qtprogress.';
	}
	.cbp-qtrotator blockquote p{'
		.'color: '.$quotescolor.';'.
		'font-size:'.$fontsize.'px;
	}
	footer{'
		.'color: '.$quotesname.';
	}
	';

$doc->addStyleDeclaration( $style );

$doc->addScriptDeclaration('
	(function($) {
		    $(document).ready(function() {
	        //Quotes rotator
	        var divs = $(\'.cbp-qtcontent\');
	        
	        function fade() {
	            var current = $(\'.current\');
	            var currentIndex = divs.index(current),
	                nextIndex = currentIndex + 1;
	            
	            if (nextIndex >= divs.length) {
	                nextIndex = 0;
	            }
	            
	            var next = divs.eq(nextIndex);
	            
	            next.stop().fadeIn(1500, function() {
	                $(this).addClass(\'current\');
	            });
	            
	            current.stop().fadeOut(1500, function() {
	                $(this).removeClass(\'current\');
	                _startProgress()
	                setTimeout(fade, 8000);
	            });
	        }
	        
	        function _startProgress(){
	            $(".cbp-qtprogress").removeAttr(\'style\');
	            $(".cbp-qtprogress").animate({
	                width:"100%",
	            } , 8000);
	        }
	        
	        _startProgress()
	        setTimeout(fade, 8000);
	    });
	})(jQuery);
');
$hello = modHelloWorldHelper::getHello($params);
require(JModuleHelper::getLayoutPath('mod_quote'));
?>