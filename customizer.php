<?php

if (  class_exists( 'Kirki' ) ) {
	if (  class_exists( 'Kirki\Panel' ) ) {
    new \Kirki\Panel(
		'top-main-header',
		[
			'priority'    => 10,
			'title'       => esc_html__( 'Customize Header', 'kirki' ),
			'description' => esc_html__( 'You can change your header from here', 'kirki' ),
		]
	);
	new \Kirki\Section(
		'top-main-header-name',
		[
			'title'       => esc_html__( 'Your Name', 'kirki' ),
			'description' => esc_html__( 'Write your own name in the textbox to change webiste title', 'kirki' ),
			'panel'       => 'top-main-header',
			'priority'    => 160,
		]
	);
	new \Kirki\Field\Text(
		[
			'settings' => 'name-header-change',
			'label'    => esc_html__( 'Text Control', 'kirki' ),
			'section'  => 'top-main-header-name',
			'default'  => esc_html__( 'Jack draw', 'kirki' ),
			'priority' => 10,
		]
	);

	if (  class_exists( 'Kirki\Panel' ) ) {
		new \Kirki\Panel(
			'hero1',
			[
				'priority'    => 10,
				'title'       => esc_html__( 'Customize Hero section', 'kirki' ),
				'description' => esc_html__( 'Change the hero section of your website', 'kirki' ),
			]
		);
		new \Kirki\Section(
			'hero2',
			[
				'title'       => esc_html__( 'Job title', 'kirki' ),
				'description' => esc_html__( 'Write the profession you persue', 'kirki' ),
				'panel'       => 'hero1',
				'priority'    => 160,
			]
		);
		new \Kirki\Section(
			'about-description',
			[
				'title'       => esc_html__( 'About Description', 'kirki' ),
				'description' => esc_html__( 'Write summary about who you are and your technical knowledge', 'kirki' ),
				'panel'       => 'hero1',
				'priority'    => 160,
			]
		);
		new \Kirki\Section(
			'hero-lottie',
			[
				'title'       => esc_html__( 'Hero lottie', 'kirki' ),
				'description' => esc_html__( 'Change the lottie animation by replacing the json file url', 'kirki' ),
				'panel'       => 'hero1',
				'priority'    => 160,
			]
		);
		new \Kirki\Field\Text(
			[
				'settings' => 'hero3',
				'label'    => esc_html__( 'Text Control', 'kirki' ),
				'section'  => 'hero2',
				'default'  => esc_html__( 'job title', 'kirki' ),
				'priority' => 10,
			]
		);
		new \Kirki\Field\Textarea(
			[
				'settings'    => 'hero4',
				'label'       => esc_html__( 'Textarea Control', 'kirki' ),
				'section'     => 'about-description',
				'default'     => esc_html__( 'This is a default value This is a default value This is a default value This is a default value', 'kirki' ),
			]
		);
		new \Kirki\Field\URL(
			[
				'settings' => 'hero-json',
				'label'    => esc_html__( 'URL Control', 'kirki' ),
				'section'  => 'hero-lottie',
				'priority' => 10,
				'default'  => 'https://assets7.lottiefiles.com/packages/lf20_4LvxLr0cIF.json',
			]
		);
		new \Kirki\Panel(
			'skill1',
			[
				'priority'    => 10,
				'title'       => esc_html__( 'Skill', 'kirki' ),
				'description' => esc_html__( 'Make changes in the skill section', 'kirki' ),
			]
		);
		new \Kirki\Section(
			'card1',
			[
				'title'       => esc_html__( 'Card one', 'kirki' ),
				'description' => esc_html__( 'Make changes in first skill card', 'kirki' ),
				'panel'       => 'skill1',
				'priority'    => 160,
			]
		);
		new \Kirki\Section(
			'card2',
			[
				'title'       => esc_html__( 'Card two', 'kirki' ),
				'description' => esc_html__( 'Make changes in second skill card', 'kirki' ),
				'panel'       => 'skill1',
				'priority'    => 160,
			]
		);
		new \Kirki\Section(
			'card3',
			[
				'title'       => esc_html__( 'Card three', 'kirki' ),
				'description' => esc_html__( 'Make changes in third skill card', 'kirki' ),
				'panel'       => 'skill1',
				'priority'    => 160,
			]
		);
		new \Kirki\Section(
			'card4',
			[
				'title'       => esc_html__( 'Card Four', 'kirki' ),
				'description' => esc_html__( 'Make changes in fourth skill card', 'kirki' ),
				'panel'       => 'skill1',
				'priority'    => 160,
			]
		);
		new \Kirki\Section(
			'card5',
			[
				'title'       => esc_html__( 'Card Five', 'kirki' ),
				'description' => esc_html__( 'Make changes in fifth skill card', 'kirki' ),
				'panel'       => 'skill1',
				'priority'    => 160,
			]
		);
		new \Kirki\Section(
			'card6',
			[
				'title'       => esc_html__( 'Card Six', 'kirki' ),
				'description' => esc_html__( 'Make changes in last skill card', 'kirki' ),
				'panel'       => 'skill1',
				'priority'    => 160,
			]
		);
		new \Kirki\Field\Text(
			[
				'settings' => 'card-heading-1',
				'label'    => esc_html__( 'Skill Title', 'kirki' ),
				'section'  => 'card1',
				'default'  => esc_html__( 'default one', 'kirki' ),
				'priority' => 10,
			]
		);
		new \Kirki\Field\Textarea(
			[
				'settings'    => 'card-area-1',
				'label'       => esc_html__( 'Skill Description', 'kirki' ),
				'section'     => 'card1',
				'default'     => esc_html__( 'This is a default value This is a default value', 'kirki' ),
			]
		);
		new \Kirki\Field\Text(
			[
				'settings' => 'card-heading-2',
				'label'    => esc_html__( 'Skill Title', 'kirki' ),
				'section'  => 'card2',
				'default'  => esc_html__( 'default one', 'kirki' ),
				'priority' => 10,
			]
		);
		new \Kirki\Field\Textarea(
			[
				'settings'    => 'card-area-2',
				'label'       => esc_html__( 'Skill Description', 'kirki' ),
				'section'     => 'card2',
				'default'     => esc_html__( 'This is a default value This is a default value', 'kirki' ),
			]
		);
		new \Kirki\Field\Text(
			[
				'settings' => 'card-heading-3',
				'label'    => esc_html__( 'Skill Title', 'kirki' ),
				'section'  => 'card3',
				'default'  => esc_html__( 'default one', 'kirki' ),
				'priority' => 10,
			]
		);
		new \Kirki\Field\Textarea(
			[
				'settings'    => 'card-area-3',
				'label'       => esc_html__( 'Skill Description', 'kirki' ),
				'section'     => 'card3',
				'default'     => esc_html__( 'This is a default value This is a default value', 'kirki' ),
			]
		);
		new \Kirki\Field\Text(
			[
				'settings' => 'card-heading-4',
				'label'    => esc_html__( 'Skill Title', 'kirki' ),
				'section'  => 'card4',
				'default'  => esc_html__( 'default one', 'kirki' ),
				'priority' => 10,
			]
		);
		new \Kirki\Field\Textarea(
			[
				'settings'    => 'card-area-4',
				'label'       => esc_html__( 'Skill Description', 'kirki' ),
				'section'     => 'card4',
				'default'     => esc_html__( 'This is a default value This is a default value', 'kirki' ),
			]
		);
		new \Kirki\Field\Text(
			[
				'settings' => 'card-heading-5',
				'label'    => esc_html__( 'Skill Title', 'kirki' ),
				'section'  => 'card5',
				'default'  => esc_html__( 'default one', 'kirki' ),
				'priority' => 10,
			]
		);
		new \Kirki\Field\Textarea(
			[
				'settings'    => 'card-area-5',
				'label'       => esc_html__( 'Skill Description', 'kirki' ),
				'section'     => 'card5',
				'default'     => esc_html__( 'This is a default value This is a default value', 'kirki' ),
			]
		);
		new \Kirki\Field\Text(
			[
				'settings' => 'card-heading-6',
				'label'    => esc_html__( 'Skill Title', 'kirki' ),
				'section'  => 'card6',
				'default'  => esc_html__( 'default one', 'kirki' ),
				'priority' => 10,
			]
		);
		new \Kirki\Field\Textarea(
			[
				'settings'    => 'card-area-6',
				'label'       => esc_html__( 'Skill Description', 'kirki' ),
				'section'     => 'card6',
				'default'     => esc_html__( 'This is a default value This is a default value', 'kirki' ),
			]
		);

		new \Kirki\Panel(
			'portfoliop',
			[
				'priority'    => 10,
				'title'       => esc_html__( 'Portfolio', 'kirki' ),
				'description' => esc_html__( 'Make changes in portfolio section', 'kirki' ),
			]
		);
		new \Kirki\Section(
			'p1',
			[
				'title'       => esc_html__( 'Item one', 'kirki' ),
				'description' => esc_html__( 'Make changes in your project items', 'kirki' ),
				'panel'       => 'portfoliop',
				'priority'    => 160,
			]
		);
		new \Kirki\Section(
			'p1',
			[
				'title'       => esc_html__( 'Item one', 'kirki' ),
				'description' => esc_html__( 'Make changes in first project item', 'kirki' ),
				'panel'       => 'portfoliop',
				'priority'    => 160,
			]
		);
		new \Kirki\Section(
			'p2',
			[
				'title'       => esc_html__( 'Item two', 'kirki' ),
				'description' => esc_html__( 'Make changes in second project item', 'kirki' ),
				'panel'       => 'portfoliop',
				'priority'    => 160,
			]
		);
		new \Kirki\Section(
			'p3',
			[
				'title'       => esc_html__( 'Item three', 'kirki' ),
				'description' => esc_html__( 'Make changes in third project item', 'kirki' ),
				'panel'       => 'portfoliop',
				'priority'    => 160,
			]
		);
		new \Kirki\Section(
			'p4',
			[
				'title'       => esc_html__( 'Item four', 'kirki' ),
				'description' => esc_html__( 'Make changes in fourth project item', 'kirki' ),
				'panel'       => 'portfoliop',
				'priority'    => 160,
			]
		);
		new \Kirki\Section(
			'p5',
			[
				'title'       => esc_html__( 'Item Five', 'kirki' ),
				'description' => esc_html__( 'Make changes in fifth project item', 'kirki' ),
				'panel'       => 'portfoliop',
				'priority'    => 160,
			]
		);
		new \Kirki\Section(
			'p6',
			[
				'title'       => esc_html__( 'Item six', 'kirki' ),
				'description' => esc_html__( 'Make changes in last project item', 'kirki' ),
				'panel'       => 'portfoliop',
				'priority'    => 160,
			]
		);
		new \Kirki\Field\Checkbox_Switch(
			[
				'settings'    => 'item1',
				'label'       => esc_html__( 'Show/Hide Project one', 'kirki' ),
				'description' => esc_html__( 'Turn this switch on and off to show or hide project item one', 'kirki' ),
				'section'     => 'p1',
				'default'     => 'on',
				'choices'     => [
					'on'  => esc_html__( 'Enable', 'kirki' ),
					'off' => esc_html__( 'Disable', 'kirki' ),
				],
			]
		);
		new \Kirki\Field\Checkbox_Switch(
			[
				'settings'    => 'item2',
				'label'       => esc_html__( 'Show/Hide Project two', 'kirki' ),
				'description' => esc_html__( 'Turn this switch on and off to show or hide project item', 'kirki' ),
				'section'     => 'p2',
				'default'     => 'on',
				'choices'     => [
					'on'  => esc_html__( 'Enable', 'kirki' ),
					'off' => esc_html__( 'Disable', 'kirki' ),
				],
			]
		);
		new \Kirki\Field\Checkbox_Switch(
			[
				'settings'    => 'item3',
				'label'       => esc_html__( 'Show/Hide Project three', 'kirki' ),
				'description' => esc_html__( 'Turn this switch on and off to show or hide project item', 'kirki' ),
				'section'     => 'p3',
				'default'     => 'on',
				'choices'     => [
					'on'  => esc_html__( 'Enable', 'kirki' ),
					'off' => esc_html__( 'Disable', 'kirki' ),
				],
			]
		);
		new \Kirki\Field\Checkbox_Switch(
			[
				'settings'    => 'item4',
				'label'       => esc_html__( 'Show/Hide Project four', 'kirki' ),
				'description' => esc_html__( 'Turn this switch on and off to show or hide project item', 'kirki' ),
				'section'     => 'p4',
				'default'     => 'on',
				'choices'     => [
					'on'  => esc_html__( 'Enable', 'kirki' ),
					'off' => esc_html__( 'Disable', 'kirki' ),
				],
			]
		);
		new \Kirki\Field\Checkbox_Switch(
			[
				'settings'    => 'item5',
				'label'       => esc_html__( 'Show/Hide Project five', 'kirki' ),
				'description' => esc_html__( 'Turn this switch on and off to show or hide project item', 'kirki' ),
				'section'     => 'p5',
				'default'     => 'on',
				'choices'     => [
					'on'  => esc_html__( 'Enable', 'kirki' ),
					'off' => esc_html__( 'Disable', 'kirki' ),
				],
			]
		);
		new \Kirki\Field\Checkbox_Switch(
			[
				'settings'    => 'item6',
				'label'       => esc_html__( 'Show/Hide Project last', 'kirki' ),
				'description' => esc_html__( 'Turn this switch on and off to show or hide project item', 'kirki' ),
				'section'     => 'p6',
				'default'     => 'on',
				'choices'     => [
					'on'  => esc_html__( 'Enable', 'kirki' ),
					'off' => esc_html__( 'Disable', 'kirki' ),
				],
			]
		);
		new \Kirki\Field\Image(
			[
				'settings'    => 'image-item1',
				'label'       => esc_html__( 'Change Display Image', 'kirki' ),
				'description' => esc_html__( 'You can upload your own image here', 'kirki' ),
				'section'     => 'p1',
				'default'     => get_template_directory_uri() . '/assets/images/demo.png',
			]
		);
		new \Kirki\Field\Image(
			[
				'settings'    => 'image-item2',
				'label'       => esc_html__( 'Change Display Image', 'kirki' ),
				'description' => esc_html__( 'You can upload your own image here', 'kirki' ),
				'section'     => 'p2',
				'default'     => get_template_directory_uri() . '/assets/images/demo.png',
			]
		);
		new \Kirki\Field\Image(
			[
				'settings'    => 'image-item3',
				'label'       => esc_html__( 'Change Display Image', 'kirki' ),
				'description' => esc_html__( 'You can upload your own image here', 'kirki' ),
				'section'     => 'p3',
				'default'     => get_template_directory_uri() . '/assets/images/demo.png',
			]
		);
		new \Kirki\Field\Image(
			[
				'settings'    => 'image-item4',
				'label'       => esc_html__( 'Change Display Image', 'kirki' ),
				'description' => esc_html__( 'You can upload your own image here', 'kirki' ),
				'section'     => 'p4',
				'default'     => get_template_directory_uri() . '/assets/images/demo.png',
			]
		);
		new \Kirki\Field\Image(
			[
				'settings'    => 'image-item5',
				'label'       => esc_html__( 'Change Display Image', 'kirki' ),
				'description' => esc_html__( 'You can upload your own image here', 'kirki' ),
				'section'     => 'p5',
				'default'     => get_template_directory_uri() . '/assets/images/demo.png',
			]
		);
		new \Kirki\Field\Image(
			[
				'settings'    => 'image-item6',
				'label'       => esc_html__( 'Change Display Image', 'kirki' ),
				'description' => esc_html__( 'You can upload your own image here', 'kirki' ),
				'section'     => 'p6',
				'default'     => get_template_directory_uri() . '/assets/images/demo.png',
			]
		);
		new \Kirki\Field\Image(
			[
				'settings'    => 'icon1-item6',
				'label'       => esc_html__( 'Change First icon ', 'kirki' ),
				'description' => esc_html__( 'You can upload your icon here', 'kirki' ),
				'section'     => 'p6',
				'default'     => get_template_directory_uri() . '/assets/images/icon.png',
			]
		);
		new \Kirki\Field\Image(
			[
				'settings'    => 'icon2-item6',
				'label'       => esc_html__( 'Change second icon', 'kirki' ),
				'description' => esc_html__( 'You can upload your icon here', 'kirki' ),
				'section'     => 'p6',
				'default'     => get_template_directory_uri() . '/assets/images/icon.png',
			]
		);
		new \Kirki\Field\Image(
			[
				'settings'    => 'icon3-item6',
				'label'       => esc_html__( 'Change third icon', 'kirki' ),
				'description' => esc_html__( 'You can upload your icon here', 'kirki' ),
				'section'     => 'p6',
				'default'     => get_template_directory_uri() . '/assets/images/icon.png',
			]
		);
		new \Kirki\Field\Image(
			[
				'settings'    => 'icon1-item5',
				'label'       => esc_html__( 'Change First icon ', 'kirki' ),
				'description' => esc_html__( 'You can upload your icon here', 'kirki' ),
				'section'     => 'p5',
				'default'     => get_template_directory_uri() . '/assets/images/icon.png',
			]
		);
		new \Kirki\Field\Image(
			[
				'settings'    => 'icon2-item5',
				'label'       => esc_html__( 'Change second icon', 'kirki' ),
				'description' => esc_html__( 'You can upload your icon here', 'kirki' ),
				'section'     => 'p5',
				'default'     => get_template_directory_uri() . '/assets/images/icon.png',
			]
		);
		new \Kirki\Field\Image(
			[
				'settings'    => 'icon3-item5',
				'label'       => esc_html__( 'Change third icon', 'kirki' ),
				'description' => esc_html__( 'You can upload your icon here', 'kirki' ),
				'section'     => 'p5',
				'default'     => get_template_directory_uri() . '/assets/images/icon.png',
			]
		);
		new \Kirki\Field\Image(
			[
				'settings'    => 'icon1-item4',
				'label'       => esc_html__( 'Change First icon', 'kirki' ),
				'description' => esc_html__( 'You can upload your icon here', 'kirki' ),
				'section'     => 'p4',
				'default'     => get_template_directory_uri() . '/assets/images/icon.png',
			]
		);
		new \Kirki\Field\Image(
			[
				'settings'    => 'icon2-item4',
				'label'       => esc_html__( 'Change second icon', 'kirki' ),
				'description' => esc_html__( 'You can upload your icon here', 'kirki' ),
				'section'     => 'p4',
				'default'     => get_template_directory_uri() . '/assets/images/icon.png',
			]
		);
		new \Kirki\Field\Image(
			[
				'settings'    => 'icon3-item4',
				'label'       => esc_html__( 'Change third icon', 'kirki' ),
				'description' => esc_html__( 'You can upload your icon here', 'kirki' ),
				'section'     => 'p4',
				'default'     => get_template_directory_uri() . '/assets/images/icon.png',
			]
		);
		new \Kirki\Field\Image(
			[
				'settings'    => 'icon1-item3',
				'label'       => esc_html__( 'Change First icon ', 'kirki' ),
				'description' => esc_html__( 'You can upload your icon here', 'kirki' ),
				'section'     => 'p3',
				'default'     => get_template_directory_uri() . '/assets/images/icon.png',
			]
		);
		new \Kirki\Field\Image(
			[
				'settings'    => 'icon2-item3',
				'label'       => esc_html__( 'Change second icon', 'kirki' ),
				'description' => esc_html__( 'You can upload your icon here', 'kirki' ),
				'section'     => 'p3',
				'default'     => get_template_directory_uri() . '/assets/images/icon.png',
			]
		);
		new \Kirki\Field\Image(
			[
				'settings'    => 'icon3-item3',
				'label'       => esc_html__( 'Change third icon', 'kirki' ),
				'description' => esc_html__( 'You can upload your icon here', 'kirki' ),
				'section'     => 'p3',
				'default'     => get_template_directory_uri() . '/assets/images/icon.png',
			]
		);
		new \Kirki\Field\Image(
			[
				'settings'    => 'icon1-item2',
				'label'       => esc_html__( 'Change First icon ', 'kirki' ),
				'description' => esc_html__( 'You can upload your icon here', 'kirki' ),
				'section'     => 'p2',
				'default'     => get_template_directory_uri() . '/assets/images/icon.png',
			]
		);
		new \Kirki\Field\Image(
			[
				'settings'    => 'icon2-item2',
				'label'       => esc_html__( 'Change second icon', 'kirki' ),
				'description' => esc_html__( 'You can upload your icon here', 'kirki' ),
				'section'     => 'p2',
				'default'     => get_template_directory_uri() . '/assets/images/icon.png',
			]
		);
		new \Kirki\Field\Image(
			[
				'settings'    => 'icon3-item2',
				'label'       => esc_html__( 'Change third icon', 'kirki' ),
				'description' => esc_html__( 'You can upload your icon here', 'kirki' ),
				'section'     => 'p2',
				'default'     => get_template_directory_uri() . '/assets/images/icon.png',
			]
		);
		new \Kirki\Field\Image(
			[
				'settings'    => 'icon1-item1',
				'label'       => esc_html__( 'Change First icon ', 'kirki' ),
				'description' => esc_html__( 'You can upload your icon here', 'kirki' ),
				'section'     => 'p1',
				'default'     => get_template_directory_uri() . '/assets/images/icon.png',
			]
		);
		new \Kirki\Field\Image(
			[
				'settings'    => 'icon2-item1',
				'label'       => esc_html__( 'Change second icon', 'kirki' ),
				'description' => esc_html__( 'You can upload your icon here', 'kirki' ),
				'section'     => 'p1',
				'default'     => get_template_directory_uri() . '/assets/images/icon.png',
			]
		);
		new \Kirki\Field\Image(
			[
				'settings'    => 'icon3-item1',
				'label'       => esc_html__( 'Change third icon', 'kirki' ),
				'description' => esc_html__( 'You can upload your icon here', 'kirki' ),
				'section'     => 'p1',
				'default'     => get_template_directory_uri() . '/assets/images/icon.png',
			]
		);
		new \Kirki\Field\Image(
			[
				'settings'    => 'popup1-item3',
				'label'       => esc_html__( 'Change first popup image', 'kirki' ),
				'description' => esc_html__( 'Upload your own popup image here', 'kirki' ),
				'section'     => 'p3',
				'default'     => get_template_directory_uri() . '/assets/images/demo.png',
			]
		);
		new \Kirki\Field\Image(
			[
				'settings'    => 'popup2-item3',
				'label'       => esc_html__( 'Change second popup image', 'kirki' ),
				'description' => esc_html__( 'Upload your own popup image here', 'kirki' ),
				'section'     => 'p3',
				'default'     => get_template_directory_uri() . '/assets/images/demo.png',
			]
		);
		new \Kirki\Field\Image(
			[
				'settings'    => 'popup1-item1',
				'label'       => esc_html__( 'Change first popup image', 'kirki' ),
				'description' => esc_html__( 'Upload your own popup image here', 'kirki' ),
				'section'     => 'p1',
				'default'     => get_template_directory_uri() . '/assets/images/demo.png',
			]
		);
		new \Kirki\Field\Image(
			[
				'settings'    => 'popup2-item1',
				'label'       => esc_html__( 'Change second popup image', 'kirki' ),
				'description' => esc_html__( 'Upload your own popup image here', 'kirki' ),
				'section'     => 'p1',
				'default'     => get_template_directory_uri() . '/assets/images/demo.png',
			]
		);
		new \Kirki\Field\Image(
			[
				'settings'    => 'popup1-item2',
				'label'       => esc_html__( 'Change first popup image', 'kirki' ),
				'description' => esc_html__( 'Upload your own popup image here', 'kirki' ),
				'section'     => 'p2',
				'default'     => get_template_directory_uri() . '/assets/images/demo.png',
			]
		);
		new \Kirki\Field\Image(
			[
				'settings'    => 'popup2-item2',
				'label'       => esc_html__( 'Change second popup image', 'kirki' ),
				'description' => esc_html__( 'Upload your own popup image here', 'kirki' ),
				'section'     => 'p2',
				'default'     => get_template_directory_uri() . '/assets/images/demo.png',
			]
		);
		new \Kirki\Field\Image(
			[
				'settings'    => 'popup1-item4',
				'label'       => esc_html__( 'Change first popup image', 'kirki' ),
				'description' => esc_html__( 'Upload your own popup image here', 'kirki' ),
				'section'     => 'p4',
				'default'     => get_template_directory_uri() . '/assets/images/demo.png',
			]
		);
		new \Kirki\Field\Image(
			[
				'settings'    => 'popup2-item4',
				'label'       => esc_html__( 'Change second popup image', 'kirki' ),
				'description' => esc_html__( 'Upload your own popup image here', 'kirki' ),
				'section'     => 'p4',
				'default'     => get_template_directory_uri() . '/assets/images/demo.png',
			]
		);
		new \Kirki\Field\Image(
			[
				'settings'    => 'popup1-item5',
				'label'       => esc_html__( 'Change first popup image', 'kirki' ),
				'description' => esc_html__( 'Upload your own popup image here', 'kirki' ),
				'section'     => 'p5',
				'default'     => get_template_directory_uri() . '/assets/images/demo.png',
			]
		);
		new \Kirki\Field\Image(
			[
				'settings'    => 'popup2-item5',
				'label'       => esc_html__( 'Change second popup image', 'kirki' ),
				'description' => esc_html__( 'Upload your own popup image here', 'kirki' ),
				'section'     => 'p5',
				'default'     => get_template_directory_uri() . '/assets/images/demo.png',
			]
		);
		new \Kirki\Field\Image(
			[
				'settings'    => 'popup1-item6',
				'label'       => esc_html__( 'Change first popup image', 'kirki' ),
				'description' => esc_html__( 'Upload your own popup image here', 'kirki' ),
				'section'     => 'p6',
				'default'     => get_template_directory_uri() . '/assets/images/demo.png',
			]
		);
		new \Kirki\Field\Image(
			[
				'settings'    => 'popup2-item6',
				'label'       => esc_html__( 'Change second popup image', 'kirki' ),
				'description' => esc_html__( 'Upload your own popup image here', 'kirki' ),
				'section'     => 'p6',
				'default'     => get_template_directory_uri() . '/assets/images/demo.png',
			]
		);
		new \Kirki\Field\Textarea(
			[
				'settings'    => 'popuptext1',
				'label'       => esc_html__( 'Change Popup description', 'kirki' ),
				'section'     => 'p1',
				'default'     => esc_html__( 'This is a default value , This is a default value', 'kirki' ),
			]
		);
		new \Kirki\Field\Textarea(
			[
				'settings'    => 'popuptext2',
				'label'       => esc_html__( 'Change Popup description', 'kirki' ),
				'section'     => 'p2',
				'default'     => esc_html__( 'This is a default value , This is a default value', 'kirki' ),
			]
		);
		new \Kirki\Field\Textarea(
			[
				'settings'    => 'popuptext3',
				'label'       => esc_html__( 'Change Popup description', 'kirki' ),
				'section'     => 'p3',
				'default'     => esc_html__( 'This is a default value , This is a default value', 'kirki' ),
			]
		);
		new \Kirki\Field\Textarea(
			[
				'settings'    => 'popuptext4',
				'label'       => esc_html__( 'Change Popup description', 'kirki' ),
				'section'     => 'p4',
				'default'     => esc_html__( 'This is a default value , This is a default value', 'kirki' ),
			]
		);
		new \Kirki\Field\Textarea(
			[
				'settings'    => 'popuptext5',
				'label'       => esc_html__( 'Change Popup description', 'kirki' ),
				'section'     => 'p5',
				'default'     => esc_html__( 'This is a default value , This is a default value', 'kirki' ),
			]
		);
		new \Kirki\Field\Textarea(
			[
				'settings'    => 'popuptext6',
				'label'       => esc_html__( 'Change Popup description', 'kirki' ),
				'section'     => 'p6',
				'default'     => esc_html__( 'This is a default value , This is a default value', 'kirki' ),
			]
		);
		new \Kirki\Panel(
			'xpp',
			[
				'priority'    => 10,
				'title'       => esc_html__( 'Experience', 'kirki' ),
				'description' => esc_html__( 'Make changes in experience section', 'kirki' ),
			]
		);
		new \Kirki\Section(
			'xps1',
			[
				'title'       => esc_html__( 'Experience One', 'kirki' ),
				'description' => esc_html__( 'Change first experience', 'kirki' ),
				'panel'       => 'xpp',
				'priority'    => 160,
			]
		);
		new \Kirki\Section(
			'xps2',
			[
				'title'       => esc_html__( 'Experience two', 'kirki' ),
				'description' => esc_html__( 'Change second experience', 'kirki' ),
				'panel'       => 'xpp',
				'priority'    => 160,
			]
		);
		new \Kirki\Section(
			'xps3',
			[
				'title'       => esc_html__( 'Experience three', 'kirki' ),
				'description' => esc_html__( 'Change third experience', 'kirki' ),
				'panel'       => 'xpp',
				'priority'    => 160,
			]
		);
		new \Kirki\Section(
			'xps4',
			[
				'title'       => esc_html__( 'Experience Four', 'kirki' ),
				'description' => esc_html__( 'Change fourth experience', 'kirki' ),
				'panel'       => 'xpp',
				'priority'    => 160,
			]
		);
		new \Kirki\Section(
			'xps5',
			[
				'title'       => esc_html__( 'Experience Five', 'kirki' ),
				'description' => esc_html__( 'Change last experience', 'kirki' ),
				'panel'       => 'xpp',
				'priority'    => 160,
			]
		);
		new \Kirki\Field\Checkbox_Switch(
			[
				'settings'    => 'switch_xp1',
				'label'       => esc_html__( 'Show/Hide experience', 'kirki' ),
				'description' => esc_html__( 'Turn the switch on or off', 'kirki' ),
				'section'     => 'xps1',
				'default'     => 'on',
				'choices'     => [
					'on'  => esc_html__( 'Enable', 'kirki' ),
					'off' => esc_html__( 'Disable', 'kirki' ),
				],
			]
		);
		new \Kirki\Field\Checkbox_Switch(
			[
				'settings'    => 'switch_xp2',
				'label'       => esc_html__( 'Show/Hide experience', 'kirki' ),
				'description' => esc_html__( 'Turn the switch on or off', 'kirki' ),
				'section'     => 'xps2',
				'default'     => 'on',
				'choices'     => [
					'on'  => esc_html__( 'Enable', 'kirki' ),
					'off' => esc_html__( 'Disable', 'kirki' ),
				],
			]
		);
		new \Kirki\Field\Checkbox_Switch(
			[
				'settings'    => 'switch_xp3',
				'label'       => esc_html__( 'Show/Hide experience', 'kirki' ),
				'description' => esc_html__( 'Turn the switch on or off', 'kirki' ),
				'section'     => 'xps3',
				'default'     => 'on',
				'choices'     => [
					'on'  => esc_html__( 'Enable', 'kirki' ),
					'off' => esc_html__( 'Disable', 'kirki' ),
				],
			]
		);
		new \Kirki\Field\Checkbox_Switch(
			[
				'settings'    => 'switch_xp4',
				'label'       => esc_html__( 'Show/Hide experience', 'kirki' ),
				'description' => esc_html__( 'Turn the switch on or off', 'kirki' ),
				'section'     => 'xps4',
				'default'     => 'on',
				'choices'     => [
					'on'  => esc_html__( 'Enable', 'kirki' ),
					'off' => esc_html__( 'Disable', 'kirki' ),
				],
			]
		);
		new \Kirki\Field\Checkbox_Switch(
			[
				'settings'    => 'switch_xp5',
				'label'       => esc_html__( 'Show/Hide experience', 'kirki' ),
				'description' => esc_html__( 'Turn the switch on or off', 'kirki' ),
				'section'     => 'xps5',
				'default'     => 'on',
				'choices'     => [
					'on'  => esc_html__( 'Enable', 'kirki' ),
					'off' => esc_html__( 'Disable', 'kirki' ),
				],
			]
		);
	
		new \Kirki\Field\Text(
			[
				'settings' => 'xph1',
				'label'    => esc_html__( 'Change Work title', 'kirki' ),
				'section'  => 'xps1',
				'default'  => esc_html__( 'default value', 'kirki' ),
				'priority' => 10,
			]
		);
		new \Kirki\Field\Text(
			[
				'settings' => 'xpc1',
				'label'    => esc_html__( 'Change company info', 'kirki' ),
				'section'  => 'xps1',
				'default'  => esc_html__( ' default value', 'kirki' ),
				'priority' => 10,
			]
		);
		new \Kirki\Field\Text(
			[
				'settings' => 'xpd1',
				'label'    => esc_html__( 'Change Date', 'kirki' ),
				'section'  => 'xps1',
				'default'  => esc_html__( 'default ', 'kirki' ),
				'priority' => 10,
			]
		);
		new \Kirki\Field\Textarea(
			[
				'settings'    => 'xpp1',
				'label'       => esc_html__( 'Change Description', 'kirki' ),
				'section'     => 'xps1',
				'default'     => esc_html__( 'This is a default value', 'kirki' ),
			]
		);
		new \Kirki\Field\Text(
			[
				'settings' => 'xph2',
				'label'    => esc_html__( 'Change Work title', 'kirki' ),
				'section'  => 'xps2',
				'default'  => esc_html__( 'default value', 'kirki' ),
				'priority' => 10,
			]
		);
		new \Kirki\Field\Text(
			[
				'settings' => 'xpc2',
				'label'    => esc_html__( 'Change company info', 'kirki' ),
				'section'  => 'xps2',
				'default'  => esc_html__( ' default value', 'kirki' ),
				'priority' => 10,
			]
		);
		new \Kirki\Field\Text(
			[
				'settings' => 'xpd2',
				'label'    => esc_html__( 'Change Date', 'kirki' ),
				'section'  => 'xps2',
				'default'  => esc_html__( 'default ', 'kirki' ),
				'priority' => 10,
			]
		);
		new \Kirki\Field\Textarea(
			[
				'settings'    => 'xpp2',
				'label'       => esc_html__( 'Change Description', 'kirki' ),
				'section'     => 'xps2',
				'default'     => esc_html__( 'This is a default value', 'kirki' ),
			]
		);
		new \Kirki\Field\Text(
			[
				'settings' => 'xph3',
				'label'    => esc_html__( 'Change Work title', 'kirki' ),
				'section'  => 'xps3',
				'default'  => esc_html__( 'default value', 'kirki' ),
				'priority' => 10,
			]
		);
		new \Kirki\Field\Text(
			[
				'settings' => 'xpc3',
				'label'    => esc_html__( 'Change company info', 'kirki' ),
				'section'  => 'xps3',
				'default'  => esc_html__( ' default value', 'kirki' ),
				'priority' => 10,
			]
		);
		new \Kirki\Field\Text(
			[
				'settings' => 'xpd3',
				'label'    => esc_html__( 'Change Date', 'kirki' ),
				'section'  => 'xps3',
				'default'  => esc_html__( 'default ', 'kirki' ),
				'priority' => 10,
			]
		);
		new \Kirki\Field\Textarea(
			[
				'settings'    => 'xpp3',
				'label'       => esc_html__( 'Change Description', 'kirki' ),
				'section'     => 'xps3',
				'default'     => esc_html__( 'This is a default value', 'kirki' ),
			]
		);

		new \Kirki\Field\Text(
			[
				'settings' => 'xph4',
				'label'    => esc_html__( 'Change Work title', 'kirki' ),
				'section'  => 'xps4',
				'default'  => esc_html__( 'default value', 'kirki' ),
				'priority' => 10,
			]
		);
		new \Kirki\Field\Text(
			[
				'settings' => 'xpc4',
				'label'    => esc_html__( 'Change company info', 'kirki' ),
				'section'  => 'xps4',
				'default'  => esc_html__( ' default value', 'kirki' ),
				'priority' => 10,
			]
		);
		new \Kirki\Field\Text(
			[
				'settings' => 'xpd4',
				'label'    => esc_html__( 'Change Date', 'kirki' ),
				'section'  => 'xps4',
				'default'  => esc_html__( 'default ', 'kirki' ),
				'priority' => 10,
			]
		);
		new \Kirki\Field\Textarea(
			[
				'settings'    => 'xpp4',
				'label'       => esc_html__( 'Change Description', 'kirki' ),
				'section'     => 'xps4',
				'default'     => esc_html__( 'This is a default value', 'kirki' ),
			]
		);

		new \Kirki\Field\Text(
			[
				'settings' => 'xph5',
				'label'    => esc_html__( 'Change Work title', 'kirki' ),
				'section'  => 'xps5',
				'default'  => esc_html__( 'default value', 'kirki' ),
				'priority' => 10,
			]
		);
		new \Kirki\Field\Text(
			[
				'settings' => 'xpc5',
				'label'    => esc_html__( 'Change company info', 'kirki' ),
				'section'  => 'xps5',
				'default'  => esc_html__( ' default value', 'kirki' ),
				'priority' => 10,
			]
		);
		new \Kirki\Field\Text(
			[
				'settings' => 'xpd5',
				'label'    => esc_html__( 'Change Date', 'kirki' ),
				'section'  => 'xps5',
				'default'  => esc_html__( 'default ', 'kirki' ),
				'priority' => 10,
			]
		);
		new \Kirki\Field\Textarea(
			[
				'settings'    => 'xpp5',
				'label'       => esc_html__( 'Change Description', 'kirki' ),
				'section'     => 'xps5',
				'default'     => esc_html__( 'This is a default value', 'kirki' ),
			]
		);
		new \Kirki\Panel(
			'fp',
			[
				'priority'    => 10,
				'title'       => esc_html__( 'Footer', 'kirki' ),
				'description' => esc_html__( 'Make changes in footer', 'kirki' ),
			]
		);
		new \Kirki\Section(
			'fs',
			[
				'title'       => esc_html__( 'Change Copyright', 'kirki' ),
				'description' => esc_html__( 'CHange the ending copyright', 'kirki' ),
				'panel'       => 'fp',
				'priority'    => 160,
			]
		);
		new \Kirki\Field\Text(
			[
				'settings' => 'footer_bye',
				'label'    => esc_html__( 'Your Copyright statement', 'kirki' ),
				'section'  => 'fs',
				'default'  => esc_html__( 'Copyright Rights | Your name', 'kirki' ),
				'priority' => 10,
			]
		);
	
	
}
}
}
