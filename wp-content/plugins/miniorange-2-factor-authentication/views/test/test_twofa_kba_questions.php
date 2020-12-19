<?php
    function mo2f_test_kba_security_questions( $user ) {
   ?>
        <h3><?php echo mo2f_lt( 'Test Security Questions( KBA )' ); ?></h3>
        <hr>
	<br>


    <form name="f" method="post" action="" id="mo2f_test_kba_form">
        <input type="hidden" name="option" value="mo2f_validate_kba_details"/>
		<input type="hidden" name="mo2f_validate_kba_details_nonce"
						value="<?php echo wp_create_nonce( "mo2f-validate-kba-details-nonce" ) ?>"/>
						
        <div id="mo2f_kba_content">
			<?php if ( isset( $_SESSION['mo_2_factor_kba_questions'] ) ) {
				echo $_SESSION['mo_2_factor_kba_questions'][0];
				?>
                <br>
                <input class="mo2f_table_textbox" style="width:227px;" type="text" name="mo2f_answer_1"
                       id="mo2f_answer_1" required="true" autofocus="true"
                       pattern="(?=\S)[A-Za-z0-9_@.$#&amp;+\-\s]{1,100}"
                       title="Only alphanumeric letters with special characters(_@.$#&amp;+-) are allowed."
                       autocomplete="off"><br><br>
				<?php
				echo $_SESSION['mo_2_factor_kba_questions'][1];
				?>
                <br>
                <input class="mo2f_table_textbox" style="width:227px;" type="text" name="mo2f_answer_2"
                       id="mo2f_answer_2" required="true" pattern="(?=\S)[A-Za-z0-9_@.$#&amp;+\-\s]{1,100}"
                       title="Only alphanumeric letters with special characters(_@.$#&amp;+-) are allowed."
                       autocomplete="off"><br><br>
				<?php
			}
			?>
        </div>
            <input type="button" name="back" id="go_back" class="mo_wpns_button mo_wpns_button1" value="<?php echo mo2f_lt( 'Back' ); ?>" />
        <input type="submit" name="validate" id="validate" class="mo_wpns_button mo_wpns_button1"
               value="<?php echo mo2f_lt( 'Validate Answers' ); ?>"/>

    </form>
    <form name="f" method="post" action="" id="mo2f_go_back_form">
        <input type="hidden" name="option" value="mo2f_go_back"/>
		<input type="hidden" name="mo2f_go_back_nonce"
						value="<?php echo wp_create_nonce( "mo2f-go-back-nonce" ) ?>"/>
    </form>
    <script>
        jQuery('#go_back').click(function () {
            jQuery('#mo2f_go_back_form').submit();
        });
    </script>
	<?php

}

?>