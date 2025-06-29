<?php


use Elementor\Widget_Base;
use Elementor\Controls_Manager;
use \Elementor\Utils;
use \Elementor\Control_Media;

use \Elementor\Group_Control_Border;
use \Elementor\Group_Control_Box_Shadow;
use \Elementor\Group_Control_Text_Shadow;
use \Elementor\Group_Control_Typography;
use \Elementor\Core\Schemes\Typography;
use \Elementor\Group_Control_Background;


/**
 * EWA Elementor Heading Widget.
 *
 * Elementor widget that inserts heading into the page
 *
 * @since 1.0.0
 */
class Elementor_Teams_Widget extends \Elementor\Widget_Base {

	/**
	 * Get widget name.
	 *
	 * Retrieve heading  widget name.
	 *
	 * @since 1.0.0
	 * @access public
	 *
	 * @return string Widget name.
	 */
	public function get_name() {
		return 'team-widget-for-elementor';
	}

	/**
	 * Get widget title.
	 *
	 * Retrieve heading widget title.
	 *
	 * @since 1.0.0
	 * @access public
	 *
	 * @return string Widget title.
	 */
	public function get_title() {
		return esc_html__( 'Team Widget', 'team-widget-for-elementor' );
	}

	/**
	 * Get widget icon.
	 *
	 * Retrieve heading  widget icon.
	 *
	 * @since 1.0.0
	 * @access public
	 *
	 * @return string Widget icon.
	 */
	public function get_icon() {
		return 'eicon-user-circle-o';
	}

	/**
	 * Get widget categories.
	 *
	 * Retrieve the list of categories the heading widget belongs to.
	 *
	 * @since 1.0.0
	 * @access public
	 *
	 * @return array Widget categories.
	 */
	public function get_categories() {
		return [ 'elementor-team-cat' ];
	}

	/**
	 * Register heading widget controls.
	 *
	 * Adds different input fields to allow the user to change and customize the widget settings.
	 *
	 * @since 1.0.0
	 * @access protected
	 */
	protected function _register_controls() {
		
		// start of the Content tab section
	   $this->start_controls_section(
	       'content-section',
		    [
		        'label' => esc_html__('Content','team-widget-for-elementor'),
				'tab'   => \Elementor\Controls_Manager::TAB_CONTENT,
		   
		    ]
	    );
		
		// Team Card Layout
		$this->add_control(
			'team_layout',
			[
				'label' => esc_html__( 'Select Layout', 'team-widget-for-elementor' ),
				'type' => \Elementor\Controls_Manager::SELECT,
				'default' => 'team-style-1',
				'options' => [
					'team-style-1' => esc_html__( 'Team Style 1', 'team-widget-for-elementor' ),
					'team-style-2' => esc_html__( 'Team Style 2', 'team-widget-for-elementor' ),
					'team-style-3' => esc_html__( 'Team Style 3', 'team-widget-for-elementor' ),
					'team-style-4' => esc_html__( 'Team Style 4', 'team-widget-for-elementor' ),
					'team-style-5' => esc_html__( 'Team Style 5', 'team-widget-for-elementor' ),
					'team-style-6' => esc_html__( 'Team Style 6', 'team-widget-for-elementor' ),
					'team-style-7' => esc_html__( 'Team Style 7', 'team-widget-for-elementor' ),
					'team-style-8' => esc_html__( 'Team Style 8', 'team-widget-for-elementor' ),
				],
			]
		);

		// Team Image
		$this->add_control(
			'team_image',
			[
				'label' => esc_html__( 'Choose Image', 'team-widget-for-elementor' ),
				'type' => \Elementor\Controls_Manager::MEDIA,
				'default' => [
					'url' => \Elementor\Utils::get_placeholder_image_src(),
				],
				'separator' => 'before',
			]
		);

		// Team Name
		$this->add_control(
			'team_name',
			[
				'label' => esc_html__( 'Name', 'team-widget-for-elementor' ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'default' => esc_html__( 'John Doe', 'team-widget-for-elementor' ),
				'placeholder' => esc_html__( 'Type your name here', 'team-widget-for-elementor' ),
				'separator' => 'before',
				'label_block' => true
			]
		);

		// Team Designation
		$this->add_control(
			'team_designation',
			[
				'label' => esc_html__( 'Designtion', 'team-widget-for-elementor' ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'default' => esc_html__( 'Web Developer', 'team-widget-for-elementor' ),
				'placeholder' => esc_html__( 'Type your designation here', 'team-widget-for-elementor' ),
				'separator' => 'before',
				'label_block' => true
			]
		);

		$this->add_control(
			'team_link',
			[
				'label' => esc_html__( 'Team Link', 'plugin-name' ),
				'type' => \Elementor\Controls_Manager::URL,
				'placeholder' => esc_html__( 'https://your-link.com', 'plugin-name' ),
				'default' => [
					'url' => '#',
					'is_external' => true,
					'nofollow' => true,
					'custom_attributes' => '',
				],
				'label_block' => true,
			]
		);

		$this->add_control(
			'number',
			[
				'label' => esc_html__( 'Phone Number', 'plugin-name' ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'default' => esc_html__( '+1 800-123-1234', 'plugin-name' ),
				'label_block' => true,
			]
		);

		$this->add_control(
			'more_options',
			[
				'label' => esc_html__( 'Team Social', 'plugin-name' ),
				'type' => \Elementor\Controls_Manager::HEADING,
				'separator' => 'before',
			]
		);



		$this->add_control(
			'facebook',
			[
				'label' => esc_html__( 'Facebook', 'plugin-name' ),
				'type' => \Elementor\Controls_Manager::URL,
				'placeholder' => esc_html__( 'https://your-link.com', 'plugin-name' ),
				'default' => [
					'url' => '#',
					'is_external' => true,
					'nofollow' => true,
					'custom_attributes' => '',
				],
				'label_block' => true,
			]
		);

		$this->add_control(
			'twitter',
			[
				'label' => esc_html__( 'Twitter', 'plugin-name' ),
				'type' => \Elementor\Controls_Manager::URL,
				'placeholder' => esc_html__( 'https://your-link.com', 'plugin-name' ),
				'default' => [
					'url' => '#',
					'is_external' => true,
					'nofollow' => true,
					'custom_attributes' => '',
				],
				'label_block' => true,
			]
		);

		$this->add_control(
			'linkedin',
			[
				'label' => esc_html__( 'Linkedin', 'plugin-name' ),
				'type' => \Elementor\Controls_Manager::URL,
				'placeholder' => esc_html__( 'https://your-link.com', 'plugin-name' ),
				'default' => [
					'url' => '#',
					'is_external' => true,
					'nofollow' => true,
					'custom_attributes' => '',
				],
				'label_block' => true,
			]
		);

		$this->add_control(
			'instagram',
			[
				'label' => esc_html__( 'Instagram', 'plugin-name' ),
				'type' => \Elementor\Controls_Manager::URL,
				'placeholder' => esc_html__( 'https://your-link.com', 'plugin-name' ),
				'label_block' => true,
			]
		);

		$this->add_control(
			'pinterest',
			[
				'label' => esc_html__( 'Pinterest', 'plugin-name' ),
				'type' => \Elementor\Controls_Manager::URL,
				'placeholder' => esc_html__( 'https://your-link.com', 'plugin-name' ),
				'label_block' => true,
			]
		);

		$this->add_control(
			'youtube',
			[
				'label' => esc_html__( 'Youtube', 'plugin-name' ),
				'type' => \Elementor\Controls_Manager::URL,
				'placeholder' => esc_html__( 'https://your-link.com', 'plugin-name' ),
				'label_block' => true,
			]
		);

		$this->add_control(
			'tiktok',
			[
				'label' => esc_html__( 'Tiktok', 'plugin-name' ),
				'type' => \Elementor\Controls_Manager::URL,
				'placeholder' => esc_html__( 'https://your-link.com', 'plugin-name' ),
				'label_block' => true,
			]
		);

		$this->add_control(
			'github',
			[
				'label' => esc_html__( 'Github', 'plugin-name' ),
				'type' => \Elementor\Controls_Manager::URL,
				'placeholder' => esc_html__( 'https://your-link.com', 'plugin-name' ),
				'label_block' => true,
			]
		);

		$this->add_control(
			'whatsapp',
			[
				'label' => esc_html__( 'Whatsapp', 'plugin-name' ),
				'type' => \Elementor\Controls_Manager::URL,
				'placeholder' => esc_html__( 'https://your-link.com', 'plugin-name' ),
				'label_block' => true,
			]
		);

		$this->add_control(
			'behance',
			[
				'label' => esc_html__( 'Behance', 'plugin-name' ),
				'type' => \Elementor\Controls_Manager::URL,
				'placeholder' => esc_html__( 'https://your-link.com', 'plugin-name' ),
				'label_block' => true,
			]
		);

		$this->add_control(
			'custom',
			[
				'label' => esc_html__( 'Custom', 'plugin-name' ),
				'type' => \Elementor\Controls_Manager::URL,
				'placeholder' => esc_html__( 'https://your-link.com', 'plugin-name' ),
				'label_block' => true,
			]
		);


		
		$this->end_controls_section();
		// end of the Content tab section




		
		// ====================Start of Style tab section==================//

		
		$this->start_controls_section(
			'image_style',
			[
				'label' => esc_html__('Image', 'plugin-name'),
				'tab'   => Controls_Manager::TAB_STYLE,
			]
		);
		
		
		$this->add_responsive_control(
			'imagestyle_height',
			[
				'label'       => esc_html__('Height', 'plugin-name'),
				'type'        => Controls_Manager::SLIDER,
				'size_units'  => ['px', '%'],  // Allow px and percentage units
				'description' => esc_html__('Choose height in px or %', 'plugin-name'),
				'selectors'   => [
					'{{WRAPPER}} .ft-image' => 'height: {{SIZE}}{{UNIT}};', // Dynamic unit
				],
				'default'     => [
					'unit'  => 'px',  // Default unit is px
				  
				],
			]
		);
		
		$this->add_responsive_control(
			'imagestyle_width',
			[
				'label'       => esc_html__('Width', 'plugin-name'),
				'type'        => Controls_Manager::SLIDER,
				'size_units'  => ['px', '%'],  // Allow px and percentage units
				'description' => esc_html__('Choose width in px or %', 'plugin-name'),
				'selectors'   => [
					'{{WRAPPER}} .ft-image' => 'width: {{SIZE}}{{UNIT}};', // Dynamic unit
				],
				'default'     => [
					'unit'  => 'px',  // Default unit is px
				   
				],
			]
		);
		
		$this->add_responsive_control(
			'imagestyle_border_radius',
			[
				'label'      => __('Border Radius', 'plugin-name'),
				'type'       => Controls_Manager::DIMENSIONS,
				'size_units' => ['px', '%'],
				'selectors'  => [
					'{{WRAPPER}} .ft-image' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};'
				]
			]
		);
		
		
		$this->end_controls_section();


		$this->start_controls_section(
			'team_names',
			[
				'label' => esc_html__('Name', 'plugin-name'),
				'tab'   => Controls_Manager::TAB_STYLE,
			]
		);


		$this->add_group_control(
			Group_Control_Typography::get_type(),
			[
				'label'    => esc_html__('Typography', 'plugin-name'),
				'name'     => 'name_typ',
				'selector' => '{{WRAPPER}} .ft-name',
		
			]
		);
		
		$this->add_control(
			'name_color',
			[
				'label'     => esc_html__('Color', 'plugin-name'),
				'type'      => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .ft-name' => 'color: {{VALUE}} !important;',
				],
			]
		);
		$this->add_responsive_control(
			'name_margin',
			[
				'label' => esc_html__( 'Margin', 'plugin-name' ),
				'type' => \Elementor\Controls_Manager::DIMENSIONS,
				'size_units' => [ 'px', '%', 'em' ],
				'selectors' => [
					'{{WRAPPER}} .ft-name' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}} !important;',
				],
			]
		);
		
		$this->add_responsive_control(
			'name_padding',
			[
				'label'      => __('Padding', 'plugin-name'),
				'type'       => Controls_Manager::DIMENSIONS,
				'size_units' => ['px', '%'],
				'selectors'  => [
					'{{WRAPPER}} .ft-name' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}} !important;'
				]
			]
		);
		
		
		$this->end_controls_section();  


		$this->start_controls_section(
			'designation_style',
			[
				'label' => esc_html__('Designation', 'plugin-name'),
				'tab'   => Controls_Manager::TAB_STYLE,
			]
		);
		
		$this->add_group_control(
			Group_Control_Typography::get_type(),
			[
				'label'    => esc_html__('Typography', 'plugin-name'),
				'name'     => 'designation_typ',
				'selector' => '{{WRAPPER}} .ft-designation',
		
			]
		);
		
		$this->add_control(
			'designation_color',
			[
				'label'     => esc_html__('Color', 'plugin-name'),
				'type'      => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .ft-designation' => 'color: {{VALUE}} !important;',
				],
			]
		);

		$this->add_responsive_control(
			'designation_margin',
			[
				'label' => esc_html__( 'Margin', 'plugin-name' ),
				'type' => \Elementor\Controls_Manager::DIMENSIONS,
				'size_units' => [ 'px', '%', 'em' ],
				'selectors' => [
					'{{WRAPPER}} .ft-designation' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}} !important;',
				],
			]
		);
		
		$this->add_responsive_control(
			'designation_padding',
			[
				'label'      => __('Padding', 'plugin-name'),
				'type'       => Controls_Manager::DIMENSIONS,
				'size_units' => ['px', '%'],
				'selectors'  => [
					'{{WRAPPER}} .ft-designation' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}} !important;'
				]
			]
		);
		
		
		
		$this->end_controls_section();


		$this->start_controls_section(
			'social_contentt',
			[
				'label' => esc_html__('Social', 'plugin-name'),
				'tab'   => Controls_Manager::TAB_STYLE,
			]
		);

		$this->add_control(
			'social_icon_color',
			[
				'label' => esc_html__( 'Icon Color', 'plugin-name' ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .single-team1 .team-image .social-area .social-links a i' => 'color: {{VALUE}} !important',
					'{{WRAPPER}} .team-card .team-content .social-list li .social-area .icon i' => 'color: {{VALUE}} !important',
					'{{WRAPPER}} .team-card2 .team-img .social-list li a' => 'color: {{VALUE}} !important',
					'{{WRAPPER}} .social-list a i' => 'color: {{VALUE}} !important',
					'{{WRAPPER}} .transpi__team-item .social_icon a' => 'color: {{VALUE}} !important',
					'{{WRAPPER}} .social-btn a' => 'color: {{VALUE}} !important',
					'{{WRAPPER}} .trans-social li a' => 'color: {{VALUE}} !important',
				],
			]
		);

		$this->add_control(
			'social_icon_color_hover',
			[
				'label' => esc_html__( 'Icon Hover Color', 'plugin-name' ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .single-team1 .team-image .social-area .social-links a i:hover' => 'color: {{VALUE}} !important',
					'{{WRAPPER}} .team-card .team-content .social-list li .social-area .icon:hover i' => 'color: {{VALUE}} !important',
					'{{WRAPPER}} .team-card2 .team-img .social-list li a:hover' => 'color: {{VALUE}} !important',
					'{{WRAPPER}} .social-list a:hover i' => 'color: {{VALUE}} !important',
					'{{WRAPPER}} .transpi__team-item .social_icon a:hover' => 'color: {{VALUE}} !important',
					'{{WRAPPER}} .social-btn a:hover i' => 'color: {{VALUE}} !important',
					'{{WRAPPER}} .trans-social li a:hover' => 'color: {{VALUE}} !important',
				],
			]
		);

		$this->add_control(
			'social_icon_color_background',
			[
				'label' => esc_html__( 'Icon Background ', 'plugin-name' ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .single-team1 .team-image .social-area .social-links a i' => 'background: {{VALUE}} !important',
					'{{WRAPPER}} .team-card .team-content .social-list li .social-area .icon' => 'background: {{VALUE}} !important',
					'{{WRAPPER}} .team-card2 .team-img .social-list li a' => 'background: {{VALUE}} !important',
					'{{WRAPPER}} .social-list a' => 'background: {{VALUE}} !important',
					'{{WRAPPER}} .transpi__team-item .social_icon a' => 'background: {{VALUE}} !important',
					'{{WRAPPER}} .social-btn a' => 'background: {{VALUE}} !important',
					'{{WRAPPER}} .trans-social li a' => 'background: {{VALUE}} !important',
				],
			]
		);

		$this->add_control(
			'social_icon_color_background_hover',
			[
				'label' => esc_html__( 'Icon Hove Background ', 'plugin-name' ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .single-team1 .team-image .social-area .social-links a i:hover' => 'background: {{VALUE}} !important',
					'{{WRAPPER}} .team-card .team-content .social-list li .social-area .icon:hover' => 'background: {{VALUE}} !important',
					'{{WRAPPER}} .team-card2 .team-img .social-list li a:hover' => 'background: {{VALUE}} !important',
					'{{WRAPPER}} .social-list a:hover' => 'background: {{VALUE}} !important',
					'{{WRAPPER}} .transpi__team-item .social_icon a:hover' => 'background: {{VALUE}} !important',
					'{{WRAPPER}} .social-btn a:hover' => 'background: {{VALUE}} !important',
					'{{WRAPPER}} .trans-social li a:hover' => 'background: {{VALUE}} !important',
				],
			]
		);

		$this->add_control(
			'social_label_color',
			[
				'label' => esc_html__( 'label Color', 'plugin-name' ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .social-title' => 'color: {{VALUE}} !important',
				],
			]
		);

		$this->add_control(
			'social_label_color_background',
			[
				'label' => esc_html__( 'label Backgroud Color', 'plugin-name' ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .social-title' => 'background: {{VALUE}} !important',
				],
			]
		);
		
		
		$this->end_controls_section();  


		$this->start_controls_section(
			'number_contentt',
			[
				'label' => esc_html__('Number', 'plugin-name'),
				'tab'   => Controls_Manager::TAB_STYLE,
			]
		);
		
		
		$this->add_group_control(
			Group_Control_Typography::get_type(),
			[
				'label'    => esc_html__('Typography', 'plugin-name'),
				'name'     => 'social_typ',
				'selector' => '{{WRAPPER}} .ft-number',
		
			]
		);

		
		$this->add_control(
			'social_color',
			[
				'label'     => esc_html__('Color', 'plugin-name'),
				'type'      => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .ft-number' => 'color: {{VALUE}} !important;',
				],
			]
		);


		$this->add_responsive_control(
			'social_margin',
			[
				'label' => esc_html__( 'Margin', 'plugin-name' ),
				'type' => \Elementor\Controls_Manager::DIMENSIONS,
				'size_units' => [ 'px', '%', 'em' ],
				'selectors' => [
					'{{WRAPPER}} .ft-number' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}} !important;',
				],
			]
		);

		
		$this->add_responsive_control(
			'social_padding',
			[
				'label'      => __('Padding', 'plugin-name'),
				'type'       => Controls_Manager::DIMENSIONS,
				'size_units' => ['px', '%'],
				'selectors'  => [
					'{{WRAPPER}} .ft-number' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}} !important;'
				]
			]
		);
		
		$this->end_controls_section();  


	}

	/**
	 * Render heading  widget output on the frontend.
	 *
	 * Written in PHP and used to generate the final HTML.
	 *
	 * @since 1.0.0
	 * @access protected
	 */
	protected function render() {
		// get our input from the widget settings.
		$settings = $this->get_settings_for_display();	
		$team_layout = $settings['team_layout'];
		$team_image = $settings['team_image'];
		$team_name = $settings['team_name'];
		$team_designation = $settings['team_designation'];
		

		switch ($team_layout) {
			case "team-style-1":
				include( __DIR__ . '/parts/team-1.php' );
				break;
			case "team-style-2":
				include( __DIR__ . '/parts/team-2.php' );
				break;
			case "team-style-3":
				include( __DIR__ . '/parts/team-3.php' );
				break;
			case "team-style-4":
				include( __DIR__ . '/parts/team-4.php' );
				break;
			case "team-style-5":
				include( __DIR__ . '/parts/team-5.php' );
				break;
			case "team-style-6":
				include( __DIR__ . '/parts/team-6.php' );
				break;
			case "team-style-7":
				include( __DIR__ . '/parts/team-7.php' );
				break;
			case "team-style-8":
				include( __DIR__ . '/parts/team-8.php' );
				break;
			default:
			include( __DIR__ . '/parts/team-1.php' );
			}
	}
}