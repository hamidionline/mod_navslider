<?php 
// No direct access
defined('_JEXEC') or die; 
?>

<div id='navslider-container'>
    <div id='navslider-control-bar' class='navslider-shadow--bottom'>     
        <div id='navslider-control-bar-categories'>
            <p class="navslider-text_category navslider-noselect">Category</p>
            <select id='navslider-control-bar-select' class="navslider-noselect">
                <?php            
                for ($i = 0; $i < count($categories); $i++) {                  
                    echo "<option value=" . $categories[$i]['id'] . ">" . $categories[$i]['title'] . "</option>";
                }
                    ?>
            </select> 
            <img alt='Enlarge Button' src="<?php echo JURI::root() . 'modules/' . $module->module?>/imgs/right_arrow.png" class="navslider-enlarge_button navslider-noselect"/>
            <p class="navslider-text_tags navslider-noselect">Tags</p>
        </div>        
        <div id='navslider-control-bar-tags'>            
            <?php
                for ($i = 0; $i < count($tags); $i++)
                    echo "<p onclick='onTagClicked(this)' data-id='" . $tags[$i]['id'] . "' class='navslider-noselect'>" . $tags[$i]['title'] . "</p>";
            ?>
        </div>
    </div>

    <div id='navslider-outer' class="navslider-compact">
        <div id='navslider'>
            <div class="navslider-showbox navslider-hide">
              <div class="navslider-loader">
                <svg class="navslider-circular" viewBox="25 25 50 50">
                  <circle class="navslider-path" cx="50" cy="50" r="20" fill="none" stroke-width="2" stroke-miterlimit="10"/>
                </svg>
              </div>
            </div>
            <div id='navslider-articles'>                
               
            </div>
        </div>
    </div>
</div>
