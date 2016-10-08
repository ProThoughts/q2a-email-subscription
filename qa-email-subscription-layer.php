<?php


class qa_html_theme_layer extends qa_html_theme_base {

        function sidebar()
        {
           qa_html_theme_base::sidebar();

		   if (qa_opt('pt_q2a_feedburner_sidebar_flag')) 
		   {
					?>
						<form style="border:1px solid #ccc;padding:3px;text-align:center;background-color:#ffffff" action="https://feedburner.google.com/fb/a/mailverify" method="post" target="popupwindow" onsubmit="window.open('https://feedburner.google.com/fb/a/mailverify?uri=<?php echo qa_html(qa_opt('pt_q2a_feedburner_sidebar')) ?>', 'popupwindow', 'scrollbars=yes,width=550,height=520');return true"><p>Enter your email address:</p><p><input type="text" style="width:140px" name="email"/></p><input type="hidden" value="<?php echo qa_html(qa_opt('pt_q2a_feedburner_sidebar')) ?>" name="uri"/><input type="hidden" name="loc" value="en_US"/><input type="submit" value="Subscribe" style="color:white;background-color:<?php echo qa_html(qa_opt('pt_q2a_feedburner_button_color')) ?>; border: none;" /></form>
					<?php	
		   }                     
        }
		// End of sidebar()
		
}
/*
	Omit PHP closing tag to help avoid accidental output
*/
