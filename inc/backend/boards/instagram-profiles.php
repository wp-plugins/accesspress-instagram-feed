<div class="apsc-boards-tabs" id="apsc-board-social-profile-settings">
    <div class="apsc-tab-wrapper"> 
        <!--Instagram-->
        <div class="apsc-option-outer-wrapper">
            <h4><?php _e('Instagram Feed', 'if-feed') ?></h4>
            <div class="apsc-option-extra">
                <div class="apsc-option-inner-wrapper">
                    <label><?php _e('Instagram Username', 'if-feed'); ?></label>
                    <div class="apsc-option-field">
                        <input type="text" name="instagram[username]" value="<?php echo esc_attr($apif_settings['username']);?>"/>
                        <div class="apsc-option-note"><?php _e('Please enter the instagram username', 'if-feed'); ?></div>
                    </div>
                </div>
                <div class="apsc-option-inner-wrapper">
                    <label><?php _e('Instagram User ID', 'if-feed'); ?></label>
                    <div class="apsc-option-field">
                        <input type="text" name="instagram[user_id]" value="<?php  echo esc_attr($apif_settings['user_id']);?>"/>
                        <div class="apsc-option-note"><?php _e('Please enter the instagram user ID.You can get this information from <a href="http://www.pinceladasdaweb.com.br/instagram/access-token/" target="_blank">http://www.pinceladasdaweb.com.br/instagram/access-token/</a>', 'if-feed'); ?></div>
                    </div>
                </div>
                <div class="apsc-option-inner-wrapper">
                    <label><?php _e('Instagram Access Token', 'if-feed'); ?></label>
                    <div class="apsc-option-field">
                        <input type="text" name="instagram[access_token]" value="<?php echo esc_attr($apif_settings['access_token']);?>"/>
                        <div class="apsc-option-note"><?php _e('Please enter the instagram Access Token.You can get this information from <a href="http://www.pinceladasdaweb.com.br/instagram/access-token/" target="_blank">http://www.pinceladasdaweb.com.br/instagram/access-token/</a>', 'if-feed'); ?></div>
                    </div>
                </div>
            </div>
        </div>
        <!--Instagram-->          
      </div>
</div>
