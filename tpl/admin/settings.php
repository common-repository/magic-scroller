<div class="wrap">
    <h1><?php _e('Settings' , 'magic-scroller'); ?></h1>
</div>

<form method="post">


<table class="form-table">
    <!-- 
    theme text domin: magic-scroller;
    !-->
        <tr valign="top">
            <th scope="row"><?php _e('Color Finder' , 'magic-scroller'); ?></th>
            <td>
                <input type="color">
            </td>
        </tr>

        <tr valign="top">
            <th scope="row"><?php _e('scrollbar color' , 'magic-scroller'); ?></th>
            <td>
                <input type="text" name="magic_scroller_sc_color" value="<?php echo ($magic_scroller_options['magic_scroller_sc_color']) ?  : ''; ?>" />
            </td>
        </tr>

        <tr valign="top">
            <th scope="row"><?php _e('scrollbar background color' , 'magic-scroller'); ?></th>
            <td>
                <input type="text" name="magic_scroller_back_sc_color" value="<?php echo ($magic_scroller_options['magic_scroller_back_sc_color']) ?  : ''; ?>" />
            </td>
        </tr>

        <tr valign="top">
            <th scope="row"><?php _e('scrollbar hover color' , 'magic-scroller'); ?></th>
            <td>
                <input type="text" name="magic_scroller_hover_back_sc_color" value="<?php echo ($magic_scroller_options['magic_scroller_hover_back_sc_color']) ?  : ''; ?>" />
            </td>
        </tr>

        <tr valign="top">
            <th scope="row"><?php _e('scrollbar with' , 'magic-scroller'); ?></th>
            <td>
                <input type="text" name="magic_scroller_sc_with" value="<?php echo ($magic_scroller_options['magic_scroller_sc_with']) ?  : ''; ?>" />
            </td>
        </tr>

        <tr valign="top">
            <th scope="row"><?php _e('scrollbar border radius' , 'magic-scroller'); ?></th>
            <td>
                <input type="text" name="magic_scroller_sc_border" value="<?php echo ($magic_scroller_options['magic_scroller_sc_border']) ?  : ''; ?>" />
            </td>
        </tr>

        </tr>
        <tr valign="top">
            <th scope="row"></th>
            <td>
            <input type="submit" class="button" name="savedata" value="<?php _e('save changes' , 'magic-scroller'); ?>"/>
            </td>
        </tr>
        
    </table>

</form>