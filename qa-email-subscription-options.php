<?php


class pt_qa_email_subscription {

	public function allow_template($template)
	{
		return $template != 'admin';
	}

	public function admin_form(&$qa_content)
	{
		$saved = false;

		if (qa_clicked('pt_q2a_email_subscription_save_button')) {
			// prevent common errors by copying and pasting from Javascript
			$trimchars = "=;\"\' \t\r\n";
			qa_opt('pt_q2a_feedburner_sidebar_flag', trim((bool)qa_post_text('pt_q2a_feedburner_sidebar_flag'), $trimchars));
			qa_opt('pt_q2a_feedburner_sidebar', trim(qa_post_text('pt_q2a_feedburner_sidebar_field'), $trimchars));
			qa_opt('pt_q2a_feedburner_button_color', trim(qa_post_text('pt_q2a_feedburner_button_color_field'), $trimchars));

			$saved = true;
		}

		return array(
			'ok' => $saved ? 'Email subscription settings saved' : null,

			'fields' => array(
				array(
					'label' => 'Email subscription',
					'type' => 'checkbox',
					'value' => qa_html(qa_opt('pt_q2a_feedburner_sidebar_flag')),
					'tags' => 'name="pt_q2a_feedburner_sidebar_flag" ID="pt_q2a_feedburner_sidebar_flag"',
				),
				array(
					'label' => 'Google Feedburner ID:',
					'value' => qa_html(qa_opt('pt_q2a_feedburner_sidebar')),
					'tags' => 'name="pt_q2a_feedburner_sidebar_field"',
					'note' => 'Example: <i>prothoughts</i>, <a href="https://feedburner.google.com" target="_blank">Get Feedburner ID</a>',
				),
				array(
					'label' => 'Google  Feedburner Button Color:',
					'value' => qa_html(qa_opt('pt_q2a_feedburner_button_color')),
					'tags' => 'name="pt_q2a_feedburner_button_color_field"',
					'note' => 'Example: <i>#FF6600</i>',
				),
			),

			'buttons' => array(
				array(
					'label' => 'Save Changes',
					'tags' => 'name="pt_q2a_email_subscription_save_button"',
				),
			),
		);
	}

}
/*
	Omit PHP closing tag to help avoid accidental output
*/

