<?php
if (!defined('ABSPATH')) {
    exit; // Exit if accessed directly.
}
if (!osf_is_contactform7_activated()) {
    return;
}
use Elementor\Controls_Manager;
use Elementor\Group_Control_Typography;
use Elementor\Group_Control_Box_Shadow;
use Elementor\Group_Control_Border;

class OSF_Elementor_ContactForm7 extends Elementor\Widget_Base {

    public function get_name() {
        return 'opal-contactform7';
    }

    public function get_title() {
        return __('Opal Contact Form', 'maisonco-core');
    }

    public function get_categories() {
        return array('opal-addons');
    }

    public function get_icon() {
        return 'eicon-form-horizontal';
    }

	public function get_script_depends() {
		return ['magnific-popup'];
	}

	public function get_style_depends() {
		return ['magnific-popup'];
	}


    protected function register_controls() {
        $this->start_controls_section(
            'contactform7',
            [
                'label' => __('General', 'maisonco-core'),
                'tab'   => Controls_Manager::TAB_CONTENT,
            ]
        );
        $cf7 = get_posts('post_type="wpcf7_contact_form"&numberposts=-1');
        $contact_forms[''] = __('Please select form', 'maisonco-core');
        if ($cf7) {
            foreach ($cf7 as $cform) {
                $contact_forms[$cform->ID] = $cform->post_title;
            }
        } else {
            $contact_forms[0] = __('No contact forms found', 'maisonco-core');
        }

        $this->add_control(
            'cf_id',
            [
                'label'   => __('Select contact form', 'maisonco-core'),
                'type'    => Controls_Manager::SELECT,
                'options' => $contact_forms,
                'default' => ''
            ]
        );

        $this->add_control(
            'form_name',
            [
                'label'   => __('Form name', 'maisonco-core'),
                'type'    => Controls_Manager::TEXT,
                'default' => __('Contact form', 'maisonco-core'),
            ]
        );
        $this->end_controls_section();
        $this->start_controls_section(
            'section_lable_style',
            [
                'label' => __( 'Lable', 'maisonco-core' ),
                'tab' => Controls_Manager::TAB_STYLE,
            ]
        );
        $this->add_group_control(
            Group_Control_Typography::get_type(),
            [
                'name'     => 'label_typography',
                'selector' => '{{WRAPPER}} .wpcf7 .wpcf7-form label,{{WRAPPER}} .wpcf7 .wpcf7-form .wpcf7-list-item-label',
            ]
        );
        $this->add_control(
            'label_color',
            [
                'label' => __( 'Color', 'maisonco-core' ),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .wpcf7 .wpcf7-form label ,{{WRAPPER}} .wpcf7 .wpcf7-form .wpcf7-list-item-label' => 'color: {{VALUE}};',
                ],
            ]
        );
        $this->end_controls_section();
        $this->start_controls_section(
            'section_input_style',
            [
                'label' => __( 'Input', 'maisonco-core' ),
                'tab' => Controls_Manager::TAB_STYLE,
            ]
        );
        $this->add_group_control(
            Group_Control_Typography::get_type(),
            [
                'name'     => 'input_typography',
                'selector' => '{{WRAPPER}} .wpcf7 .wpcf7-form input:not([type="submit"]), {{WRAPPER}} .wpcf7-form textarea',
            ]
        );

        $this->add_control(
            'input_color_placeholder',
            [
                'label' => __( 'Placeholder Color', 'maisonco-core' ),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .wpcf7 .wpcf7-form input::placeholder, {{WRAPPER}} .wpcf7-form textarea::placeholder' => 'color: {{VALUE}}',
                ],
            ]
        );

        $this->add_control(
            'input_color',
            [
                'label' => __( 'Color', 'maisonco-core' ),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .wpcf7 .wpcf7-form input:not([type="submit"]), {{WRAPPER}} .wpcf7-form textarea' => 'color: {{VALUE}};',
                ],
            ]
        );

        $this->start_controls_tabs( 'tabs_input_style' );

        $this->start_controls_tab(
            'tab_input_normal',
            [
                'label' => __( 'Normal', 'maisonco-core' ),
            ]
        );

        $this->add_control(
            'input_background_color',
            [
                'label' => __( 'Background Color', 'maisonco-core' ),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .wpcf7 .wpcf7-form input:not([type="submit"]), {{WRAPPER}} .wpcf7-form textarea' => 'background-color: {{VALUE}};',
                ],
            ]
        );


        $this->end_controls_tab();

        $this->start_controls_tab(
            'tab_input_hover',
            [
                'label' => __( 'Hover', 'maisonco-core' ),
            ]
        );

        $this->add_control(
            'input_background_color_hover',
            [
                'label' => __( 'Background Color', 'maisonco-core' ),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .wpcf7 .wpcf7-form input:not([type="submit"]):hover, {{WRAPPER}} .wpcf7-form textarea:hover' => 'background-color: {{VALUE}};',
                ],
            ]
        );

        $this->add_control(
            'input_border_bottom_color_hover',
            [
                'label' => __( 'Border Bottom Color', 'maisonco-core' ),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .wpcf7 .wpcf7-form-control-wrap:after' => 'background-color: {{VALUE}};',
                ],
            ]
        );

        $this->add_responsive_control(
            'input_border_bottom_width',
            [
                'label'      => __( 'Border Bottom Width', 'maisonco-core' ),
                'type'       => Controls_Manager::SLIDER,
                'range'      => [
                    'px' => [
                        'min' => 0,
                        'max' => 10,
                    ],
                ],
                'size_units' => [ 'px'],
                'selectors'  => [
                    '{{WRAPPER}} .wpcf7 .wpcf7-form-control-wrap:after' => 'height: {{SIZE}}{{UNIT}};',
                ],
            ]
        );

        $this->end_controls_tab();

        $this->start_controls_tab(
            'tab_input_focus',
            [
                'label' => __( 'Focus', 'maisonco-core' ),
            ]
        );

        $this->add_control(
            'input_background_color_focus',
            [
                'label' => __( 'Background Color', 'maisonco-core' ),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .wpcf7 .wpcf7-form input:not([type="submit"]):focus, {{WRAPPER}} .wpcf7-form textarea:focus' => 'background-color: {{VALUE}};',
                ],
            ]
        );

        $this->add_control(
            'input_border_bottom_color_focus',
            [
                'label' => __( 'Border Color', 'maisonco-core' ),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .wpcf7 .wpcf7-form input:not([type="submit"]):focus, {{WRAPPER}} .wpcf7-form textarea:focus' => 'border-color: {{VALUE}};',
                ],
            ]
        );

        $this->end_controls_tab();

        $this->end_controls_tabs();

        $this->add_group_control(
            Group_Control_Border::get_type(),
            [
                'name'        => 'border_input',
                'placeholder' => '1px',
                'default'     => '1px',
                'selector'    => '{{WRAPPER}} .wpcf7 .wpcf7-form input:not([type="submit"]), {{WRAPPER}} .wpcf7-form textarea',
                'separator'   => 'before',
            ]
        );

        $this->add_control(
            'input_border_radius',
            [
                'label'      => __( 'Border Radius', 'maisonco-core' ),
                'type'       => Controls_Manager::DIMENSIONS,
                'size_units' => [ 'px', '%' ],
                'selectors'  => [
                    '{{WRAPPER}} .wpcf7 .wpcf7-form input:not([type="submit"]), {{WRAPPER}} .wpcf7-form textarea' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );

        $this->add_responsive_control(
            'input_padding',
            [
                'label'      => __( 'Padding', 'maisonco-core' ),
                'type'       => Controls_Manager::DIMENSIONS,
                'size_units' => [ 'px', 'em', '%' ],
                'selectors'  => [
                    '{{WRAPPER}} .wpcf7 .wpcf7-form input:not([type="submit"]), {{WRAPPER}} .wpcf7-form textarea' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
        $this->add_responsive_control(
            'input_margin',
            [
                'label'      => __( 'Margin', 'maisonco-core' ),
                'type'       => Controls_Manager::DIMENSIONS,
                'size_units' => [ 'px', 'em', '%' ],
                'selectors'  => [
                    '{{WRAPPER}} .wpcf7 .wpcf7-form .wpcf7-text, {{WRAPPER}} .wpcf7-form .wpcf7-textarea' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );

        $this->end_controls_section();

        $this->start_controls_section(
            'section_button_style',
            [
                'label' => __( 'Button', 'maisonco-core' ),
                'tab' => Controls_Manager::TAB_STYLE,
            ]
        );

        $this->add_control(
            'button_type',
            [
                'label' => __( 'Type', 'maisonco-core' ),
                'type' => Controls_Manager::SELECT,
                'default' => '',
                'options' => [
                    '' => __( 'Primary', 'maisonco-core' ),
                    'secondary' => __( 'Secondary', 'maisonco-core' ),
                ],
                'prefix_class' => 'elementor-button-',
            ]
        );

        $this->add_group_control(
            Group_Control_Typography::get_type(),
            [
                'name' => 'button_typography',
                'selector' => '{{WRAPPER}} .wpcf7 .wpcf7-form input[type="submit"], {{WRAPPER}} button',
            ]
        );

        $this->start_controls_tabs( 'tabs_button_style' );

        $this->start_controls_tab(
            'tab_button_normal',
            [
                'label' => __( 'Normal', 'maisonco-core' ),
            ]
        );

        $this->add_control(
            'button_text_color',
            [
                'label' => __( 'Text Color', 'maisonco-core' ),
                'type' => Controls_Manager::COLOR,
                'default' => '',
                'selectors' => [
                    '{{WRAPPER}} .wpcf7 .wpcf7-form input[type="submit"], {{WRAPPER}} button' => 'color: {{VALUE}};',
                ],
            ]
        );
        $this->add_control(
            'background_color',
            [
                'label' => __( 'Background Color', 'maisonco-core' ),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .wpcf7 .wpcf7-form input[type="submit"], {{WRAPPER}} button' => 'background-color: {{VALUE}};',
                ],
            ]
        );

        $this->end_controls_tab();

        $this->start_controls_tab(
            'tab_button_hover',
            [
                'label' => __( 'Hover', 'maisonco-core' ),
            ]
        );

        $this->add_control(
            'hover_color',
            [
                'label' => __( 'Text Color', 'maisonco-core' ),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .wpcf7 .wpcf7-form input[type="submit"]:hover, {{WRAPPER}} button:hover' => 'color: {{VALUE}};',
                ],
            ]
        );

        $this->add_control(
            'button_background_hover_color',
            [
                'label' => __( 'Background Color', 'maisonco-core' ),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .wpcf7 .wpcf7-form input[type="submit"]:hover, {{WRAPPER}} button:hover' => 'background-color: {{VALUE}};',
                ],
            ]
        );

        $this->add_control(
            'button_hover_border_color',
            [
                'label' => __( 'Border Color', 'maisonco-core' ),
                'type' => Controls_Manager::COLOR,
                'condition' => [
                    'border_border!' => '',
                ],
                'selectors' => [
                    '{{WRAPPER}} .wpcf7 .wpcf7-form input[type="submit"]:hover, {{WRAPPER}} button:hover' => 'border-color: {{VALUE}};',
                ],
            ]
        );

        $this->add_control(
            'hover_animation',
            [
                'label' => __( 'Hover Animation', 'maisonco-core' ),
                'type' => Controls_Manager::HOVER_ANIMATION,
            ]
        );

        $this->end_controls_tab();

        $this->end_controls_tabs();

        $this->add_group_control(
            Group_Control_Border::get_type(),
            [
                'name' => 'border',
                'placeholder' => '1px',
                'default' => '1px',
                'selector' => '{{WRAPPER}} .wpcf7 .wpcf7-form input[type="submit"], {{WRAPPER}} button',
                'separator' => 'before',
            ]
        );

        $this->add_control(
            'button_border_radius',
            [
                'label' => __( 'Border Radius', 'maisonco-core' ),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => [ 'px', '%' ],
                'selectors' => [
                    '{{WRAPPER}} .wpcf7 .wpcf7-form input[type="submit"], {{WRAPPER}} button' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );

        $this->add_group_control(
            Group_Control_Box_Shadow::get_type(),
            [
                'name' => 'button_box_shadow',
                'selector' => '{{WRAPPER}} .wpcf7 .wpcf7-form input[type="submit"], {{WRAPPER}} button',
            ]
        );
        $this->add_responsive_control(
            'align',
            [
                'label' => __( 'Alignment', 'maisonco-core' ),
                'type' => Controls_Manager::CHOOSE,
                'options' => [
                    'left'    => [
                        'title' => __( 'Left', 'maisonco-core' ),
                        'icon' => 'eicon-text-align-left',
                    ],
                    'center' => [
                        'title' => __( 'Center', 'maisonco-core' ),
                        'icon' => 'eicon-text-align-center',
                    ],
                    'right' => [
                        'title' => __( 'Right', 'maisonco-core' ),
                        'icon' => 'eicon-text-align-right',
                    ],
                    'justify' => [
                        'title' => __( 'Justified', 'maisonco-core' ),
                        'icon' => 'eicon-text-align-justify',
                    ],
                ],
                'prefix_class' => 'elementor%s-align-',
                'default' => '',
            ]
        );
        $this->add_responsive_control(
            'text_padding',
            [
                'label' => __( 'Padding', 'maisonco-core' ),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => [ 'px', 'em', '%' ],
                'selectors' => [
                    '{{WRAPPER}} input[type="submit"]' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );

        $this->add_responsive_control(
            'text_margin',
            [
                'label' => __( 'Margin', 'maisonco-core' ),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => [ 'px', 'em', '%' ],
                'selectors' => [
                    '{{WRAPPER}} input[type="submit"]' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
    }

    protected function render() {
        $settings = $this->get_settings_for_display();
        if(!$settings['cf_id']){
            return;
        }
        $args['id']    = $settings['cf_id'];
        $args['title'] = $settings['form_name'];

        echo osf_do_shortcode('contact-form-7', $args);
    }
}
$widgets_manager->register(new OSF_Elementor_ContactForm7());