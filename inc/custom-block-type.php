<?php

function register_custom_block() {
	if(function_exists('acf_register_block_type'))
	{
		$url = get_template_directory();
		acf_register_block_type(array(
			'name' => 'slider',
			'title' => 'Slider',
			'description' => 'Slider z obrazkami / video',
			'render_template' => $url.'/parts/blocks/slider.php',
			'category' => 'media',
			'icon' => 'images-alt2',
			'keywords' => array('slider', 'carousel'),
			'supports' => array(
				'anchor' => true,
				'customClassName' => true
			)
		));
		acf_register_block_type(array(
			'name' => 'heading',
			'title' => 'Tytuł',
			'description' => 'Tytuł sekcji z opisem',
			'render_template' => $url.'/parts/blocks/heading.php',
			'category' => 'theme-blocks',
			'icon' => 'heading',
			'keywords' => array('tytuł', 'opis'),
			'supports' => array(
				'anchor' => true,
				'customClassName' => true
			)
		));
		acf_register_block_type(array(
			'name' => 'slogan',
			'title' => 'Slogan',
			'description' => 'Dodawanie sloganów',
			'render_template' => $url.'/parts/blocks/slogan.php',
			'category' => 'common',
			'icon' => 'format-image',
			'keywords' => array('opis', 'slogan'),
			'supports' => array(
				'anchor' => true,
				'customClassName' => true
			)
		));
		acf_register_block_type(array(
			'name' => 'slider_offer',
			'title' => 'Slider ofertowy',
			'description' => 'Slider z ofertą',
			'render_template' => $url.'/parts/blocks/slider-offer.php',
			'category' => 'layout',
			'icon' => 'slides',
			'keywords' => array('slider', 'oferta'),
			'supports' => array(
				'anchor' => true,
				'customClassName' => true
			)
		));
		acf_register_block_type(array(
			'name' => 'slider_products',
			'title' => 'Slider produktowy',
			'description' => 'Slider z produktami',
			'render_template' => $url.'/parts/blocks/slider-products.php',
			'category' => 'widgets',
			'icon' => 'cart',
			'keywords' => array('slider', 'produkty'),
			'supports' => array(
				'anchor' => true,
				'customClassName' => true
			)
		));
		acf_register_block_type(array(
			'name' => 'slider_gallery',
			'title' => 'Slider galeria',
			'description' => 'Slider z galerią produktów',
			'render_template' => $url.'/parts/blocks/slider-gallery.php',
			'category' => 'layout',
			'icon' => 'images-alt2',
			'keywords' => array('slider', 'produkty', 'galeria'),
			'supports' => array(
				'anchor' => true,
				'customClassName' => true
			)
		));
		acf_register_block_type(array(
			'name' => 'slider_box',
			'title' => 'Slider boksów',
			'description' => 'Slider boksów opisowych',
			'render_template' => $url.'/parts/blocks/slider-box.php',
			'category' => 'layout',
			'icon' => 'megaphone',
			'keywords' => array('slider', 'box', 'opis'),
			'supports' => array(
				'anchor' => true,
				'customClassName' => true
			)
		));
		acf_register_block_type(array(
			'name' => 'slider_txt',
			'title' => 'Slider tesktowy',
			'description' => 'Slider tesktowy ze zdjęciem',
			'render_template' => $url.'/parts/blocks/slider-txt.php',
			'category' => 'layout',
			'icon' => 'megaphone',
			'keywords' => array('slider', 'tesktowy', 'zdjęcie'),
			'supports' => array(
				'anchor' => true,
				'customClassName' => true
			)
		));
		acf_register_block_type(array(
			'name' => 'slider_testimonial',
			'title' => 'Slider opinii',
			'description' => 'Slider opinii klientów',
			'render_template' => $url.'/parts/blocks/slider-testimonial.php',
			'category' => 'layout',
			'icon' => 'megaphone',
			'keywords' => array('opinie', 'slider'),
			'supports' => array(
				'anchor' => true,
				'customClassName' => true
			)
		));
		acf_register_block_type(array(
			'name' => 'banner_info',
			'title' => 'Baner informacyjny',
			'description' => 'Baner informacyjny z opisem',
			'render_template' => $url.'/parts/blocks/banner-info.php',
			'category' => 'layout',
			'icon' => 'megaphone',
			'keywords' => array('baner', 'informacja'),
			'supports' => array(
				'anchor' => true,
				'customClassName' => true
			)
		));
		acf_register_block_type(array(
			'name' => 'banner_txt',
			'title' => 'Baner tekstowy',
			'description' => 'Baner tekstowy',
			'render_template' => $url.'/parts/blocks/banner-txt.php',
			'category' => 'layout',
			'icon' => 'megaphone',
			'keywords' => array('baner', 'opis'),
			'supports' => array(
				'anchor' => true,
				'customClassName' => true
			)
		));
		acf_register_block_type(array(
			'name' => 'contact',
			'title' => 'Kontakt',
			'description' => 'Sekcja kontaktowa z formularzem',
			'render_template' => $url.'/parts/blocks/contact.php',
			'category' => 'widgets',
			'icon' => 'email',
			'keywords' => array('kontakt', 'formularz', 'email', 'telefon'),
			'supports' => array(
				'anchor' => true,
				'customClassName' => true
			)
		));
	}
}
add_action('acf/init', 'register_custom_block');