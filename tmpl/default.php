<?php 
/**
 * @package     Joomla.Site
 * @subpackage  mod_articles_category
 *
 * @copyright   Copyright (C) 2005 - 2015 Open Source Matters, Inc. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */

defined('_JEXEC') or die;
// -- PARAMETRI
// $value = $params->get('value');
// $pretext = $params->get('pretext');
// $link = $params->get('link');

JHtml::stylesheet(JURI::root().'modules/mod_scshinsta/tmpl/css/style.css');
JHtml::script(Juri::base() . 'modules/mod_scshinsta/tmpl/js/instagramLite.js');
JHtml::script(Juri::base() . 'modules/mod_scshinsta/tmpl/js/jquery.min.js');

?>

<div id="scshinsta">
				<ul class="il-foodnetwork"></ul>
				
				<a href="#" class="il-foodnetwork-load-more il-load-more" title="Load more images from Instagram">بیشتر ...</a>
				
</div>
		<script src="./modules/mod_scshinsta/tmpl/js/jquery.min.js"></script>
		
		<script src="./modules/mod_scshinsta/tmpl/js/instagramLite.js"></script>

		<script>
			$('.il-foodnetwork').instagramLite({
				username: '<?php echo $usernameinsta;?>',
				clientID: '<?php echo $clientid;?>',
				urls: <?php echo $urls ;?>,
				limit: <?php echo intval($countinsta);?>,
				load_more: '.il-foodnetwork-load-more',
				captions: <?php echo $captions ;?>,
				likes: <?php echo $like ;?>,
				videos: <?php echo $videos ;?>,
				comments_count: <?php echo $comments ;?>,
				success: function() {
				
					console.log('درخواست شما موفقیت آمیز بود');
				},
				error: function(errorCode, errorMessage) {
				
					console.log('شما با مشکلی برخورد کردید');
				
					if(errorCode && errorMessage) {
				
						alert(errorCode +': '+ errorMessage);
					
					}
					
				}
			});
			
		
		</script>