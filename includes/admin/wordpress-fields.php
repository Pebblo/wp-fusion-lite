<?php

// Contains default names and types for standard WordPress fields. Can be filtered with wpf_meta_fields

$wp_fields['first_name'] = array(
	'type'  => 'text',
	'label' => 'First Name',
);

$wp_fields['last_name'] = array(
	'type'  => 'text',
	'label' => 'Last Name',
);

$wp_fields['user_email'] = array(
	'type'  => 'text',
	'label' => 'E-mail Address',
);

$wp_fields['display_name'] = array(
	'type'  => 'text',
	'label' => 'Profile Display Name'
);

$wp_fields['nickname'] = array(
	'type'  => 'text',
	'label' => 'Nickname',
);

$wp_fields['user_login'] = array(
	'type'  => 'text',
	'label' => 'Username',
);

$wp_fields['user_id'] = array(
	'type'  => 'integer',
	'label' => 'User ID',
);

$wp_fields['role'] = array(
	'type'  => 'text',
	'label' => 'User Role',
);

$wp_fields['user_pass'] = array(
	'type'  => 'text',
	'label' => 'Password',
);

$wp_fields['country'] = array(
	'type'  => 'select',
	'label' => 'Country/Region',
);

$wp_fields['description'] = array(
	'type'  => 'textarea',
	'label' => 'Biography',
);

$wp_fields['facebook'] = array(
	'type'  => 'text',
	'label' => 'Facebook Page'
);

$wp_fields['twitter'] = array(
	'type'  => 'text',
	'label' => 'Twitter'
);

$wp_fields['google_plus'] = array(
	'type'  => 'text',
	'label' => 'Google+'
);

$wp_fields['user_url'] = array(
	'type'  => 'text',
	'label' => 'Website (URL)'
);

$wp_fields['job_title'] = array(
	'type'  => 'text',
	'label' => 'Job Title',
);

$wp_fields['leadsource'] = array(
	'type'  => 'text',
	'label' => 'Lead Source',
	'group' => 'leadsource'
);

$wp_fields['utm_campaign'] = array(
	'type'  => 'text',
	'label' => 'Google Analytics Campaign',
	'group' => 'leadsource'
);

$wp_fields['utm_source'] = array(
	'type'  => 'text',
	'label' => 'Google Analytics Source',
	'group' => 'leadsource'
);

$wp_fields['utm_medium'] = array(
	'type'  => 'text',
	'label' => 'Google Analytics Medium',
	'group' => 'leadsource'
);