<?php
/**
 * Helper class for Hello World! module
 * 
 * @package    Joomla.Tutorials
 * @subpackage Modules
 * @link http://docs.joomla.org/J3.x:Creating_a_simple_module/Developing_a_Basic_Module
 * @license        GNU/GPL, see LICENSE.php
 * mod_helloworld is free software. This version may have been modified pursuant
 * to the GNU General Public License, and as distributed it includes or
 * is derivative of works licensed under the GNU General Public License or
 * other free or open source software licenses.
 */
$db = JFactory::getDbo();
$query = $db->getQuery(true);
echo $query;

class ModHelloInStArAm
{
    /**
     * Retrieves the hello message
     *
     * @param   array  $params An object containing the module parameters
     *
     * @access public
     */    
    public static function getHello($params)
    {
        return ' ';
    }
}


                    $usernameinsta      = $params->get('username');
                    $videos                   = $params->get('video'); 
                    $like                        = $params->get('like');
                    $comments             = $params->get('comments');   
                    $countinsta             = $params->get('counterinsta');
                    $captions                = $params->get('captions'); 
                    $urls                        = $params->get('urls');
                    $clientid                   = $params->get('clientid'); 
?>