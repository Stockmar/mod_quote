<?php
/*
* Version           : 1.0
* Created by        : Jeppe Stockmar
* Email             : info@stockmar.dk
* Created on        : 04-15-2015
* URL               : http://stockmar.dk
* @copyright        : 2015 stockmar.dk
* License           : GPLv2 http://www.gnu.org/licenses/gpl-2.0.html
* 
*/
defined('_JEXEC') or die;

?>

<div class="quote-section">
    <h2><?php echo $header; ?></h2>
    <div id="cbp-qtrotator" class="cbp-qtrotator">
        <div class="cbp-qtcontent current">
            <?php  if (!empty($quote_1)) {  ?> 
            <blockquote>
               <?php echo $quote_1; ?>
                <footer>
                    <span class="name"><?php echo $name_1; ?></span>
                    <span class="title"> <?php echo $title_1; ?></span>
                </footer>
            </blockquote>
            <?php }; ?> 
        </div>
        <?php  if (!empty($quote_2)) {  ?> 
        <div class="cbp-qtcontent">
            <blockquote>
                <?php echo $quote_2; ?>
                <footer>
                    <span class="name"><?php echo $name_2; ?></span>
                    <span class="title"><?php echo $title_2; ?></span>
                </footer>
            </blockquote>
        </div>
        <?php }; ?> 
        <?php  if (!empty($quote_3)) {  ?> 
        <div class="cbp-qtcontent">
           <blockquote>
                <?php echo $quote_3; ?>
                <footer>
                    <span class="name"><?php echo $name_3; ?></span>
                    <span class="title"><?php echo $title_3; ?></span>
                </footer>
            </blockquote>
        </div>
        <?php }; ?> 
        <span class="cbp-qtprogress"></span>
    </div>
</div>