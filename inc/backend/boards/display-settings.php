<div class="apsc-boards-tabs" id="apsc-board-display-settings" style="display: none">
    <div class="apsc-tab-wrapper">
        
        <div class="apsc-option-inner-wrapper">
            <div class="apsc-option-field">
                <div class="apsc-option-inner-wrapper">
                    <label style="float:left;"><?php _e('Image Like', 'if-feed') ?></label>
                    <div class="apsc-option-field"><input type="checkbox" name="instagram[active]" value="1" class="apsc-counter-activation-trigger" <?php if(isset($apif_settings['active'])){?>checked="checked"<?php } ?>/><?php _e('Show/Hide', 'if-feed'); ?></div>
                </div>
            </div>
        </div>
       
        <div class="apsc-option-inner-wrapper">
            <label style="width:30%;"><?php _e('Choose Instagram Themes Layout', 'if-feed'); ?></label>
            <div class="apsc-option-field">
                <label>
                    <input type="radio" name="instagram[instagram_mosaic]" value="mosaic" <?php if($apif_settings['instagram_mosaic']=='mosaic'){?>checked="checked"<?php }?>/><?php _e('Mosaic layout', 'if-feed'); ?>
                    <div class="apsc-theme-image"><img src="<?php echo APIF_IMAGE_DIR.'/themes/massonary.png';?>"/></div>
                </label>
                <label>
                    <input type="radio" name="instagram[instagram_mosaic]" value="mosaic_lightview" <?php if($apif_settings['instagram_mosaic']=='mosaic_lightview'){?>checked="checked"<?php }?>/><?php _e('Mosaic LightBox Layout', 'if-feed'); ?>
                    <div class="apsc-theme-image"><img src="<?php echo APIF_IMAGE_DIR.'/themes/lightbox.png';?>"/></div>
                </label>
                <label>
                    <input type="radio" name="instagram[instagram_mosaic]" value="slider" <?php if($apif_settings['instagram_mosaic']=='slider'){?>checked="checked"<?php }?>/><?php _e('Slider Layout', 'if-feed'); ?>
                    <div class="apsc-theme-image"><img src="<?php echo APIF_IMAGE_DIR.'/themes/slider.png';?>"/></div>
                </label>                
            </div>
        </div>

    </div>
</div>