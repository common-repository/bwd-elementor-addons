<?php
namespace BWDEBCreativeElementorBundle\Widgets;

use Elementor\Widget_Base;
use Elementor\Controls_Manager;

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

class BWDEB_BWDMFMasking extends Widget_Base {

	public function get_name() {
		return esc_html__( 'NameMapMasking', 'bwd-elementor-addons' );
	}

	public function get_title() {
		return esc_html__( 'Map Masking', 'bwd-elementor-addons' );
	}

	public function get_icon() {
		return 'bwdeb-elementor-bundle icon-mapmasking';
	}

	public function get_categories() {
		return [ 'bwdeb_general_category' ];
	}


	protected function register_controls() {
		$this->start_controls_section(
			'bwdmfm_masking_content_section',
			[
				'label' => esc_html__( 'Masking Content', 'bwd-elementor-addons' ),
				'tab' => Controls_Manager::TAB_CONTENT,
			]
		);
		$this->add_control(
			'bwdmfm_style_selection',
			[
				'label' => esc_html__( 'Your Country', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::SELECT,
				'default' => 'style193',
				'options' => [
					'style193' => esc_html__( 'World Map', 'bwd-elementor-addons' ),
					'style194' => esc_html__( 'World Map 2', 'bwd-elementor-addons' ),
					'style1' => esc_html__( 'Afghanistan (PRO)', 'bwd-elementor-addons' ),
					'style2' => esc_html__( 'Albania (PRO)', 'bwd-elementor-addons' ),
					'style3' => esc_html__( 'Andorra (PRO)', 'bwd-elementor-addons' ),
					'style4' => esc_html__( 'Argentina (PRO)', 'bwd-elementor-addons' ),
					'style5' => esc_html__( 'Armenia (PRO)', 'bwd-elementor-addons' ),
					'style6' => esc_html__( 'Australia (PRO)', 'bwd-elementor-addons' ),
					'style7' => esc_html__( 'Algeria (PRO)', 'bwd-elementor-addons' ),
					'style8' => esc_html__( 'Angola (PRO)', 'bwd-elementor-addons' ),
					'style9' => esc_html__( 'Antigua and Barbuda op (PRO)', 'bwd-elementor-addons' ),
					'style10' => esc_html__( 'Austria (PRO)', 'bwd-elementor-addons' ),
					'style11' => esc_html__( 'Azerbaijan (PRO)', 'bwd-elementor-addons' ),
					'style12' => esc_html__( 'Bahrain (PRO)', 'bwd-elementor-addons' ),
					'style13' => esc_html__( 'Bangladesh (PRO)', 'bwd-elementor-addons' ),
					'style14' => esc_html__( 'Barbados (PRO)', 'bwd-elementor-addons' ),
					'style15' => esc_html__( 'Bahamas (PRO)', 'bwd-elementor-addons' ),
					'style16' => esc_html__( 'Belgium (PRO)', 'bwd-elementor-addons' ),
					'style17' => esc_html__( 'Belarus (PRO)', 'bwd-elementor-addons' ),
					'style18' => esc_html__( 'Benin (PRO)', 'bwd-elementor-addons' ),
					'style19' => esc_html__( 'Bhutan (PRO)', 'bwd-elementor-addons' ),
					'style20' => esc_html__( 'Bolivia (PRO)', 'bwd-elementor-addons' ),
					'style21' => esc_html__( 'Bosnia and Herzegovina (PRO)', 'bwd-elementor-addons' ),
					'style22' => esc_html__( 'Botswana (PRO)', 'bwd-elementor-addons' ),
					'style23' => esc_html__( 'Brazil (PRO)', 'bwd-elementor-addons' ),
					'style24' => esc_html__( 'Brunei (PRO)', 'bwd-elementor-addons' ),
					'style25' => esc_html__( 'Bulgaria (PRO)', 'bwd-elementor-addons' ),
					'style26' => esc_html__( 'Burkina Faso (PRO)', 'bwd-elementor-addons' ),
					'style27' => esc_html__( 'Burundi (PRO)', 'bwd-elementor-addons' ),
					'style28' => esc_html__( 'Belize (PRO)', 'bwd-elementor-addons' ),
					'style29' => esc_html__( 'Cabo Verde (PRO)', 'bwd-elementor-addons' ),
					'style30' => esc_html__( 'Canada (PRO)', 'bwd-elementor-addons' ),
					'style31' => esc_html__( 'Central African Republic Africa (PRO)', 'bwd-elementor-addons' ),
					'style32' => esc_html__( 'Chad (PRO)', 'bwd-elementor-addons' ),
					'style33' => esc_html__( 'Côte D Ivoire (PRO)', 'bwd-elementor-addons' ),
					'style34' => esc_html__( 'China (PRO)', 'bwd-elementor-addons' ),
					'style35' => esc_html__( 'Colombia (PRO)', 'bwd-elementor-addons' ),
					'style36' => esc_html__( 'Comoros (PRO)', 'bwd-elementor-addons' ),
					'style37' => esc_html__( 'Congo Brazzaville (PRO)', 'bwd-elementor-addons' ),
					'style38' => esc_html__( 'Costa Rica (PRO)', 'bwd-elementor-addons' ),
					'style39' => esc_html__( 'Croatia (PRO)', 'bwd-elementor-addons' ),
					'style40' => esc_html__( 'Cuba (PRO)', 'bwd-elementor-addons' ),
					'style41' => esc_html__( 'Cyprus (PRO)', 'bwd-elementor-addons' ),
					'style42' => esc_html__( 'Czech Republic (PRO)', 'bwd-elementor-addons' ),
					'style43' => esc_html__( 'Colombia (PRO)', 'bwd-elementor-addons' ),
					'style44' => esc_html__( 'Cameroon (PRO)', 'bwd-elementor-addons' ),
					'style45' => esc_html__( 'Chile (PRO)', 'bwd-elementor-addons' ),
					'style46' => esc_html__( 'Democratic Republic of the Congo (PRO)', 'bwd-elementor-addons' ),
					'style47' => esc_html__( 'Denmark (PRO)', 'bwd-elementor-addons' ),
					'style48' => esc_html__( 'Djibouti (PRO)', 'bwd-elementor-addons' ),
					'style49' => esc_html__( 'Dominican Republic (PRO)', 'bwd-elementor-addons' ),
					'style50' => esc_html__( 'Dominica (PRO)', 'bwd-elementor-addons' ),
					'style51' => esc_html__( 'Ecuador (PRO)', 'bwd-elementor-addons' ),
					'style52' => esc_html__( 'Egypt (PRO)', 'bwd-elementor-addons' ),
					'style53' => esc_html__( 'El Salvador (PRO)', 'bwd-elementor-addons' ),
					'style54' => esc_html__( 'Equatorial Guinea (PRO)', 'bwd-elementor-addons' ),
					'style55' => esc_html__( 'Estonia (PRO)', 'bwd-elementor-addons' ),
					'style56' => esc_html__( 'Eswatini (PRO)', 'bwd-elementor-addons' ),
					'style57' => esc_html__( 'Ethiopia (PRO)', 'bwd-elementor-addons' ),
					'style58' => esc_html__( 'Eritrea (PRO)', 'bwd-elementor-addons' ),
					'style59' => esc_html__( 'Fiji (PRO)', 'bwd-elementor-addons' ),
					'style60' => esc_html__( 'Finland (PRO)', 'bwd-elementor-addons' ),
					'style61' => esc_html__( 'France (PRO)', 'bwd-elementor-addons' ),
					'style62' => esc_html__( 'Germany (PRO)', 'bwd-elementor-addons' ),
					'style63' => esc_html__( 'Gambia (PRO)', 'bwd-elementor-addons' ),
					'style64' => esc_html__( 'Greece (PRO)', 'bwd-elementor-addons' ),
					'style65' => esc_html__( 'Grenada (PRO)', 'bwd-elementor-addons' ),
					'style66' => esc_html__( 'Guatemala (PRO)', 'bwd-elementor-addons' ),
					'style67' => esc_html__( 'Guinea (PRO)', 'bwd-elementor-addons' ),
					'style68' => esc_html__( 'Guinea Bissau (PRO)', 'bwd-elementor-addons' ),
					'style69' => esc_html__( 'Guyana (PRO)', 'bwd-elementor-addons' ),
					'style70' => esc_html__( 'Gabon (PRO)', 'bwd-elementor-addons' ),
					'style71' => esc_html__( 'Ghana (PRO)', 'bwd-elementor-addons' ),
					'style72' => esc_html__( 'Georgia (PRO)', 'bwd-elementor-addons' ),
					'style73' => esc_html__( 'Haiti (PRO)', 'bwd-elementor-addons' ),
					'style74' => esc_html__( 'Holy See (PRO)', 'bwd-elementor-addons' ),
					'style75' => esc_html__( 'Honduras (PRO)', 'bwd-elementor-addons' ),
					'style76' => esc_html__( 'Hungary (PRO)', 'bwd-elementor-addons' ),
					'style77' => esc_html__( 'Iceland (PRO)', 'bwd-elementor-addons' ),
					'style78' => esc_html__( 'Indonesia (PRO)', 'bwd-elementor-addons' ),
					'style79' => esc_html__( 'Iran (PRO)', 'bwd-elementor-addons' ),
					'style80' => esc_html__( 'Iraq (PRO)', 'bwd-elementor-addons' ),
					'style81' => esc_html__( 'Ireland (PRO)', 'bwd-elementor-addons' ),
					'style82' => esc_html__( 'Israel (PRO)', 'bwd-elementor-addons' ),
					'style83' => esc_html__( 'Italy (PRO)', 'bwd-elementor-addons' ),
					'style84' => esc_html__( 'India (PRO)', 'bwd-elementor-addons' ),
					'style85' => esc_html__( 'Jamaica (PRO)', 'bwd-elementor-addons' ),
					'style86' => esc_html__( 'Japan (PRO)', 'bwd-elementor-addons' ),
					'style87' => esc_html__( 'Jordan (PRO)', 'bwd-elementor-addons' ),
					'style88' => esc_html__( 'Kazakhstan (PRO)', 'bwd-elementor-addons' ),
					'style89' => esc_html__( 'Kenya (PRO)', 'bwd-elementor-addons' ),
					'style90' => esc_html__( 'Kiribati (PRO)', 'bwd-elementor-addons' ),
					'style91' => esc_html__( 'Kuwait (PRO)', 'bwd-elementor-addons' ),
					'style92' => esc_html__( 'Kyrgyzstan (PRO)', 'bwd-elementor-addons' ),
					'style93' => esc_html__( 'Laos (PRO)', 'bwd-elementor-addons' ),
					'style94' => esc_html__( 'Latvia (PRO)', 'bwd-elementor-addons' ),
					'style95' => esc_html__( 'Lebanon (PRO)', 'bwd-elementor-addons' ),
					'style96' => esc_html__( 'Lesotho (PRO)', 'bwd-elementor-addons' ),
					'style97' => esc_html__( 'Libya (PRO)', 'bwd-elementor-addons' ),
					'style98' => esc_html__( 'Liechtenstein (PRO)', 'bwd-elementor-addons' ),
					'style99' => esc_html__( 'Lithuania (PRO)', 'bwd-elementor-addons' ),
					'style100' => esc_html__( 'Luxembourg (PRO)', 'bwd-elementor-addons' ),
					'style101' => esc_html__( 'Liberia (PRO)', 'bwd-elementor-addons' ),
					'style102' => esc_html__( 'Mali (PRO)', 'bwd-elementor-addons' ),
					'style103' => esc_html__( 'Malawi (PRO)', 'bwd-elementor-addons' ),
					'style104' => esc_html__( 'Malaysia (PRO)', 'bwd-elementor-addons' ),
					'style105' => esc_html__( 'Maldives (PRO)', 'bwd-elementor-addons' ),
					'style106' => esc_html__( 'Myanmar (PRO)', 'bwd-elementor-addons' ),
					'style107' => esc_html__( 'Mozambique (PRO)', 'bwd-elementor-addons' ),
					'style108' => esc_html__( 'Morocco (PRO)', 'bwd-elementor-addons' ),
					'style109' => esc_html__( 'Mauritius (PRO)', 'bwd-elementor-addons' ),
					'style110' => esc_html__( 'Micronesia (PRO)', 'bwd-elementor-addons' ),
					'style111' => esc_html__( 'Montenegro (PRO)', 'bwd-elementor-addons' ),
					'style112' => esc_html__( 'Mongolia (PRO)', 'bwd-elementor-addons' ),
					'style113' => esc_html__( 'Malta (PRO)', 'bwd-elementor-addons' ),
					'style114' => esc_html__( 'Mauritania (PRO)', 'bwd-elementor-addons' ),
					'style115' => esc_html__( 'Mexico (PRO)', 'bwd-elementor-addons' ),
					'style116' => esc_html__( 'Madagascar (PRO)', 'bwd-elementor-addons' ),
					'style117' => esc_html__( 'Moldova (PRO)', 'bwd-elementor-addons' ),
					'style118' => esc_html__( 'Monaco (PRO)', 'bwd-elementor-addons' ),
					'style119' => esc_html__( 'Marshall Islands (PRO)', 'bwd-elementor-addons' ),
					'style120' => esc_html__( 'Namibia (PRO)', 'bwd-elementor-addons' ),
					'style121' => esc_html__( 'Nauru (PRO)', 'bwd-elementor-addons' ),
					'style122' => esc_html__( 'Netherlands (PRO)', 'bwd-elementor-addons' ),
					'style123' => esc_html__( 'New Zealand (PRO)', 'bwd-elementor-addons' ),
					'style124' => esc_html__( 'Nicaragua (PRO)', 'bwd-elementor-addons' ),
					'style125' => esc_html__( 'Niger (PRO)', 'bwd-elementor-addons' ),
					'style126' => esc_html__( 'Nigeria (PRO)', 'bwd-elementor-addons' ),
					'style127' => esc_html__( 'Norway (PRO)', 'bwd-elementor-addons' ),
					'style128' => esc_html__( 'Nepal (PRO)', 'bwd-elementor-addons' ),
					'style129' => esc_html__( 'North Korea (PRO)', 'bwd-elementor-addons' ),
					'style130' => esc_html__( 'North Macedonia (PRO)', 'bwd-elementor-addons' ),
					'style131' => esc_html__( 'Oman (PRO)', 'bwd-elementor-addons' ),
					'style132' => esc_html__( 'Portugal (PRO)', 'bwd-elementor-addons' ),
					'style133' => esc_html__( 'Pakistan (PRO)', 'bwd-elementor-addons' ),
					'style134' => esc_html__( 'Palau (PRO)', 'bwd-elementor-addons' ),
					'style135' => esc_html__( 'Palestine State (PRO)', 'bwd-elementor-addons' ),
					'style136' => esc_html__( 'Poland (PRO)', 'bwd-elementor-addons' ),
					'style137' => esc_html__( 'Papua New Guinea (PRO)', 'bwd-elementor-addons' ),
					'style138' => esc_html__( 'Paraguay (PRO)', 'bwd-elementor-addons' ),
					'style139' => esc_html__( 'Peru (PRO)', 'bwd-elementor-addons' ),
					'style140' => esc_html__( 'Philipien (PRO)', 'bwd-elementor-addons' ),
					'style141' => esc_html__( 'Panama (PRO)', 'bwd-elementor-addons' ),
					'style142' => esc_html__( 'Qatar (PRO)', 'bwd-elementor-addons' ),
					'style143' => esc_html__( 'Romania (PRO)', 'bwd-elementor-addons' ),
					'style144' => esc_html__( 'Russia (PRO)', 'bwd-elementor-addons' ),
					'style145' => esc_html__( 'Rwanda (PRO)', 'bwd-elementor-addons' ),
					'style146' => esc_html__( 'Saint Vincent (PRO)', 'bwd-elementor-addons' ),
					'style147' => esc_html__( 'Saint Kitts (PRO)', 'bwd-elementor-addons' ),
					'style148' => esc_html__( 'Saint Lucia (PRO)', 'bwd-elementor-addons' ),
					'style149' => esc_html__( 'Samoa (PRO)', 'bwd-elementor-addons' ),
					'style150' => esc_html__( 'San Marino (PRO)', 'bwd-elementor-addons' ),
					'style151' => esc_html__( 'Sao Tome and Principe (PRO)', 'bwd-elementor-addons' ),
					'style152' => esc_html__( 'Saudi Arabia (PRO)', 'bwd-elementor-addons' ),
					'style153' => esc_html__( 'Senegal (PRO)', 'bwd-elementor-addons' ),
					'style154' => esc_html__( 'Serbia (PRO)', 'bwd-elementor-addons' ),
					'style155' => esc_html__( 'Seychelles (PRO)', 'bwd-elementor-addons' ),
					'style156' => esc_html__( 'Sierra Leone (PRO)', 'bwd-elementor-addons' ),
					'style157' => esc_html__( 'Singapur (PRO)', 'bwd-elementor-addons' ),
					'style158' => esc_html__( 'Slovakia (PRO)', 'bwd-elementor-addons' ),
					'style159' => esc_html__( 'Slovenia (PRO)', 'bwd-elementor-addons' ),
					'style160' => esc_html__( 'Solomon Islands (PRO)', 'bwd-elementor-addons' ),
					'style161' => esc_html__( 'Somalia (PRO)', 'bwd-elementor-addons' ),
					'style162' => esc_html__( 'South Africa (PRO)', 'bwd-elementor-addons' ),
					'style163' => esc_html__( 'South Sudan (PRO)', 'bwd-elementor-addons' ),
					'style164' => esc_html__( 'South Korea (PRO)', 'bwd-elementor-addons' ),
					'style165' => esc_html__( 'Spain (PRO)', 'bwd-elementor-addons' ),
					'style166' => esc_html__( 'Srilanka (PRO)', 'bwd-elementor-addons' ),
					'style167' => esc_html__( 'Sudan (PRO)', 'bwd-elementor-addons' ),
					'style168' => esc_html__( 'Suriname (PRO)', 'bwd-elementor-addons' ),
					'style169' => esc_html__( 'Sweden (PRO)', 'bwd-elementor-addons' ),
					'style170' => esc_html__( 'Switzerland (PRO)', 'bwd-elementor-addons' ),
					'style171' => esc_html__( 'Syria (PRO)', 'bwd-elementor-addons' ),
					'style172' => esc_html__( 'Tajikistan (PRO)', 'bwd-elementor-addons' ),
					'style173' => esc_html__( 'Tanzania (PRO)', 'bwd-elementor-addons' ),
					'style174' => esc_html__( 'Thailand (PRO)', 'bwd-elementor-addons' ),
					'style175' => esc_html__( 'Timor Leste (PRO)', 'bwd-elementor-addons' ),
					'style176' => esc_html__( 'Togo (PRO)', 'bwd-elementor-addons' ),
					'style177' => esc_html__( 'Tonga (PRO)', 'bwd-elementor-addons' ),
					'style178' => esc_html__( 'Trinidad and Tobago (PRO)', 'bwd-elementor-addons' ),
					'style179' => esc_html__( 'Tunisia (PRO)', 'bwd-elementor-addons' ),
					'style180' => esc_html__( 'Turkey (PRO)', 'bwd-elementor-addons' ),
					'style181' => esc_html__( 'Turkmenistan (PRO)', 'bwd-elementor-addons' ),
					'style182' => esc_html__( 'Tuvalu (PRO)', 'bwd-elementor-addons' ),
					'style183' => esc_html__( 'Uganda (PRO)', 'bwd-elementor-addons' ),
					'style184' => esc_html__( 'Ukraine (PRO)', 'bwd-elementor-addons' ),
					'style185' => esc_html__( 'United Arab Emirates (PRO)', 'bwd-elementor-addons' ),
					'style186' => esc_html__( 'United Kingdom (PRO)', 'bwd-elementor-addons' ),
					'style187' => esc_html__( 'United States of America (PRO)', 'bwd-elementor-addons' ),
					'style188' => esc_html__( 'Uruguay (PRO)', 'bwd-elementor-addons' ),
					'style189' => esc_html__( 'Uzbekistan (PRO)', 'bwd-elementor-addons' ),
					'style190' => esc_html__( 'Vanuatu (PRO)', 'bwd-elementor-addons' ),
					'style191' => esc_html__( 'Venezuela (PRO)', 'bwd-elementor-addons' ),
					'style192' => esc_html__( 'Vietnam (PRO)', 'bwd-elementor-addons' ),
					'style195' => esc_html__( 'Yemen (PRO)', 'bwd-elementor-addons' ),
					'style196' => esc_html__( 'Zambia (PRO)', 'bwd-elementor-addons' ),
					'style197' => esc_html__( 'Zimbabwe (PRO)', 'bwd-elementor-addons' ),
				],
				'description' => 'See <a class="bwdeb-pro-promotion-text" href="https://bwdelementoraddons.com/bwd-map-masking/" target="_blank"><b>Demo</b></a>. Get <a class="bwdeb-pro-promotion-text" href="https://bestwpdeveloper.com/pricing/" target="_blank"><b>Pro...</b></a>.',
			]
		);
		$this->add_control(
			'bwdmfm_masking_color',
			[
				'label' => esc_html__( 'Masking Color', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}}' => 'background: {{VALUE}}',
				],
			]
		);
		$this->add_responsive_control(
			'bwdmfm_masking_width',
			[
				'label' => esc_html__( 'Width', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::SLIDER,
                'size_units' => ['%', 'px', 'rem', 'em', 'vh'],
                'default' => [
                    'unit' => '%',
                    'size' => '100',
                ],
				'devices' => [ 'desktop', 'laptop', 'tablet', 'tablet_extra', 'mobile', 'mobile_extra' ],
				'selectors' => [
					'{{WRAPPER}} .bwdmfm-svg-map' => 'width: {{SIZE}}{{UNIT}};',
				],
			]
		);
		$this->add_responsive_control(
			'bwdmfm_masking_min_height',
			[
				'label' => esc_html__( 'Height', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::SLIDER,
                'size_units' => ['vh', 'px', 'rem', 'em', '%'],
                'default' => [
                    'unit' => 'vh',
                    'size' => '100',
                ],
				'devices' => [ 'desktop', 'laptop', 'tablet', 'tablet_extra', 'mobile', 'mobile_extra' ],
				'selectors' => [
					'{{WRAPPER}} .bwdmfm-svg-map' => 'height: {{SIZE}}{{UNIT}};',
				],
			]
		);
		$this->add_control(
			'bwdmfm_masking_position',
			[
				'label' => esc_html__( 'Masking Position', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::SELECT,
				'default' => 'default',
				'options' => [
					'default' => esc_html__( 'Default', 'bwd-elementor-addons' ),
					'center' => esc_html__( 'Center', 'bwd-elementor-addons' ),
					'top' => esc_html__( 'Top', 'bwd-elementor-addons' ),
					'bottom' => esc_html__( 'Bottom', 'bwd-elementor-addons' ),
					'left' => esc_html__( 'Left', 'bwd-elementor-addons' ),
					'right' => esc_html__( 'Right', 'bwd-elementor-addons' ),
					'auto' => esc_html__( 'Auto', 'bwd-elementor-addons' ),
				],
			]
		);
		$this->add_control(
			'bwdmfm_masking_size',
			[
				'label' => esc_html__( 'Masking Size', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::SELECT,
				'default' => 'default',
				'options' => [
					'default' => esc_html__( 'Default', 'bwd-elementor-addons' ),
					'auto' => esc_html__( 'Auto', 'bwd-elementor-addons' ),
					'contain' => esc_html__( 'Contain', 'bwd-elementor-addons' ),
					'cover' => esc_html__( 'Cover', 'bwd-elementor-addons' ),
				],
			]
		);
		$this->add_control(
			'bwdmfm_masking_repeat_mask',
			[
				'label' => esc_html__( 'Masking Repeat', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::SELECT,
				'default' => 'default',
				'options' => [
					'default' => esc_html__( 'Default', 'bwd-elementor-addons' ),
					'repeat' => esc_html__( 'Repeat', 'bwd-elementor-addons' ),
					'no-repeat' => esc_html__( 'No-Repeat', 'bwd-elementor-addons' ),
					'repeat-x' => esc_html__( 'Repeat-x', 'bwd-elementor-addons' ),
					'repeat-y' => esc_html__( 'Repeat-y', 'bwd-elementor-addons' ),
					'round' => esc_html__( 'Round', 'bwd-elementor-addons' ),
					'space' => esc_html__( 'Space', 'bwd-elementor-addons' ),
				],
			]
		);
		$this->end_controls_section();

		
		$this->start_controls_section(
			'bwdmfm_background_content_section',
			[
				'label' => esc_html__( 'Background Content', 'bwd-elementor-addons' ),
				'tab' => Controls_Manager::TAB_CONTENT,
			]
		);
		$this->add_control(
			'bwdmfm_masking_image',
			[
				'label' => esc_html__( 'Choose Image', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::MEDIA,
				'default' => [
					'url' => \Elementor\Utils::get_placeholder_image_src(),
				],
			]
		);
		$this->add_responsive_control(
			'bwdmfm_background_width',
			[
				'label' => esc_html__( 'Width', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::SLIDER,
                'size_units' => ['%', 'px', 'rem', 'em', 'vh'],
                'default' => [
                    'unit' => '%',
                    'size' => '100',
                ],
				'devices' => [ 'desktop', 'laptop', 'tablet', 'tablet_extra', 'mobile', 'mobile_extra' ],
				'selectors' => [
					'{{WRAPPER}} .bwdmfm-flag-img' => 'width: {{SIZE}}{{UNIT}};',
				],
			]
		);
		$this->add_responsive_control(
			'bwdmfm_background_min_height',
			[
				'label' => esc_html__( 'Height', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::SLIDER,
                'size_units' => ['vh', 'px', 'rem', 'em', '%'],
                'default' => [
                    'unit' => 'vh',
                    'size' => '100',
                ],
				'devices' => [ 'desktop', 'laptop', 'tablet', 'tablet_extra', 'mobile', 'mobile_extra' ],
				'selectors' => [
					'{{WRAPPER}} .bwdmfm-flag-img' => 'height: {{SIZE}}{{UNIT}};',
				],
			]
		);
		$this->add_control(
			'bwdmfm_masking_attachment',
			[
				'label' => esc_html__( 'Bg Attachment', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::SELECT,
				'default' => 'paralax',
				'options' => [
					'default' => esc_html__( 'Default', 'bwd-elementor-addons' ),
					'paralax' => esc_html__( 'Paralax', 'bwd-elementor-addons' ),
				],
			]
		);
		$this->add_control(
			'bwdmfm_background_position',
			[
				'label' => esc_html__( 'Background Position', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::SELECT,
				'default' => 'default',
				'options' => [
					'default' => esc_html__( 'Default', 'bwd-elementor-addons' ),
					'center' => esc_html__( 'Center', 'bwd-elementor-addons' ),
					'top' => esc_html__( 'Top', 'bwd-elementor-addons' ),
					'bottom' => esc_html__( 'Bottom', 'bwd-elementor-addons' ),
					'left' => esc_html__( 'Left', 'bwd-elementor-addons' ),
					'right' => esc_html__( 'Right', 'bwd-elementor-addons' ),
					'auto' => esc_html__( 'Auto', 'bwd-elementor-addons' ),
				],
			]
		);
		$this->add_control(
			'bwdmfm_background_size',
			[
				'label' => esc_html__( 'Background Size', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::SELECT,
				'default' => 'default',
				'options' => [
					'default' => esc_html__( 'Default', 'bwd-elementor-addons' ),
					'auto' => esc_html__( 'Auto', 'bwd-elementor-addons' ),
					'contain' => esc_html__( 'Contain', 'bwd-elementor-addons' ),
					'cover' => esc_html__( 'Cover', 'bwd-elementor-addons' ),
				],
			]
		);
		$this->add_control(
			'bwdmfm_background_repeat_masking',
			[
				'label' => esc_html__( 'Background Repeat', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::SELECT,
				'default' => 'default',
				'options' => [
					'default' => esc_html__( 'Default', 'bwd-elementor-addons' ),
					'repeat' => esc_html__( 'Repeat', 'bwd-elementor-addons' ),
					'no-repeat' => esc_html__( 'No-Repeat', 'bwd-elementor-addons' ),
					'repeat-x' => esc_html__( 'Repeat-x', 'bwd-elementor-addons' ),
					'repeat-y' => esc_html__( 'Repeat-y', 'bwd-elementor-addons' ),
					'round' => esc_html__( 'Round', 'bwd-elementor-addons' ),
					'space' => esc_html__( 'Space', 'bwd-elementor-addons' ),
				],
			]
		);
		$this->end_controls_section();

		$this->start_controls_section(
			'bwdmfm_masking_style_section',
			[
				'label' => esc_html__( 'Masking Style', 'bwd-elementor-addons' ),
				'tab' => Controls_Manager::TAB_STYLE,
			]
		);
		$this->add_responsive_control(
            'bwdmfm_masking_the_box_margin',
            [
                'label' => esc_html__('Margin', 'bwd-elementor-addons'),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', 'em', 'rem', '%'],
                'selectors' => [
                    '{{WRAPPER}} .bwdmfm-svg-map' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
		$this->add_responsive_control(
            'bwdmfm_masking_the_box_padding',
            [
                'label' => esc_html__('Padding', 'bwd-elementor-addons'),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', 'em', 'rem', '%'],
                'selectors' => [
                    '{{WRAPPER}} .bwdmfm-svg-map' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
		$this->end_controls_section();
	}
	protected function render() {
		$settings = $this->get_settings_for_display();
        if('style193' == $settings['bwdmfm_style_selection'] || 'style194' == $settings['bwdmfm_style_selection']){
        if('style193' === $settings['bwdmfm_style_selection']){
            ?>
            <div class="bwdmfm-svg-map 
			<?php if('center' === $settings['bwdmfm_masking_position']){ ?>bwdmfm-masking-position-default <?php } elseif('top' === $settings['bwdmfm_masking_position']){ ?>bwdmfm-masking-position-top <?php } elseif('bottom' === $settings['bwdmfm_masking_position']){ ?>bwdmfm-masking-position-bottom <?php } elseif('left' === $settings['bwdmfm_masking_position']){ ?>bwdmfm-masking-position-left <?php } elseif('right' === $settings['bwdmfm_masking_position']){ ?>bwdmfm-masking-position-right <?php } elseif('auto' === $settings['bwdmfm_masking_position']){ ?>bwdmfm-svg-margin <?php } ?> 
			<?php if('cover' === $settings['bwdmfm_masking_size']){ ?>bwdmfm-masking-size-default <?php } elseif('auto' === $settings['bwdmfm_masking_size']){ ?>bwdmfm-masking-size-auto <?php } elseif('contain' === $settings['bwdmfm_masking_size']){ ?>bwdmfm-masking-size-contain <?php } ?> 
			<?php if('no-repeat' === $settings['bwdmfm_masking_repeat_mask']){ ?>bwdmfm-masking-no-repeat-default <?php } elseif('repeat' === $settings['bwdmfm_masking_repeat_mask']){ ?>bwdmfm-masking-repeat <?php } elseif('repeat-x' === $settings['bwdmfm_masking_repeat_mask']){ ?>bwdmfm-masking-repeat-x <?php } elseif('repeat-y' === $settings['bwdmfm_masking_repeat_mask']){ ?>bwdmfm-masking-repeat-y <?php } elseif('round' === $settings['bwdmfm_masking_repeat_mask']){ ?>bwdmfm-masking-repeat-round <?php } elseif('space' === $settings['bwdmfm_masking_repeat_mask']){ ?>bwdmfm-masking-repeat-space <?php } ?>
			bwdmfm-masking-193">
				<div class="bwdmfm-flag-img 
				<?php if('paralax' === $settings['bwdmfm_masking_attachment']){ ?>bwdmfm_text_paralax <?php } ?> 
				<?php if('center' === $settings['bwdmfm_background_position']){ ?>bwdmfm-background-position-default <?php } elseif('top' === $settings['bwdmfm_background_position']){ ?>bwdmfm-background-position-top <?php } elseif('bottom' === $settings['bwdmfm_background_position']){ ?>bwdmfm-background-position-bottom <?php } elseif('left' === $settings['bwdmfm_background_position']){ ?>bwdmfm-background-position-left <?php } elseif('right' === $settings['bwdmfm_background_position']){ ?>bwdmfm-background-position-right <?php } elseif('auto' === $settings['bwdmfm_background_position']){ ?>bwdmfm-background-img <?php } ?> 
				<?php if('cover' === $settings['bwdmfm_background_size']){ ?>bwdmfm-background-default <?php } elseif('auto' === $settings['bwdmfm_background_size']){ ?>bwdmfm-background-auto <?php } elseif('contain' === $settings['bwdmfm_background_size']){ ?>bwdmfm-background-contain <?php } ?> 
				<?php if('no-repeat' === $settings['bwdmfm_background_repeat_masking']){ ?>bwdmfm-background-no-repeat-default <?php } elseif('repeat' === $settings['bwdmfm_background_repeat_masking']){ ?>bwdmfm-background-repeat <?php } elseif('repeat-x' === $settings['bwdmfm_background_repeat_masking']){ ?>bwdmfm-background-repeat-x <?php } elseif('repeat-y' === $settings['bwdmfm_background_repeat_masking']){ ?>bwdmfm-background-repeat-y <?php } elseif('round' === $settings['bwdmfm_background_repeat_masking']){ ?>bwdmfm-background-repeat-round <?php } elseif('space' === $settings['bwdmfm_background_repeat_masking']){ ?>bwdmfm-background-repeat-space <?php } ?>
				bwdmfm-flag-img-1" style="background-image: url(<?php echo esc_url($settings['bwdmfm_masking_image']['url']); ?>);"></div>
			</div>
		<?php
        } elseif('style194' === $settings['bwdmfm_style_selection']){
            ?>
            <div class="bwdmfm-svg-map 
			<?php if('center' === $settings['bwdmfm_masking_position']){ ?>bwdmfm-masking-position-default <?php } elseif('top' === $settings['bwdmfm_masking_position']){ ?>bwdmfm-masking-position-top <?php } elseif('bottom' === $settings['bwdmfm_masking_position']){ ?>bwdmfm-masking-position-bottom <?php } elseif('left' === $settings['bwdmfm_masking_position']){ ?>bwdmfm-masking-position-left <?php } elseif('right' === $settings['bwdmfm_masking_position']){ ?>bwdmfm-masking-position-right <?php } elseif('auto' === $settings['bwdmfm_masking_position']){ ?>bwdmfm-svg-margin <?php } ?> 
			<?php if('cover' === $settings['bwdmfm_masking_size']){ ?>bwdmfm-masking-size-default <?php } elseif('auto' === $settings['bwdmfm_masking_size']){ ?>bwdmfm-masking-size-auto <?php } elseif('contain' === $settings['bwdmfm_masking_size']){ ?>bwdmfm-masking-size-contain <?php } ?> 
			<?php if('no-repeat' === $settings['bwdmfm_masking_repeat_mask']){ ?>bwdmfm-masking-no-repeat-default <?php } elseif('repeat' === $settings['bwdmfm_masking_repeat_mask']){ ?>bwdmfm-masking-repeat <?php } elseif('repeat-x' === $settings['bwdmfm_masking_repeat_mask']){ ?>bwdmfm-masking-repeat-x <?php } elseif('repeat-y' === $settings['bwdmfm_masking_repeat_mask']){ ?>bwdmfm-masking-repeat-y <?php } elseif('round' === $settings['bwdmfm_masking_repeat_mask']){ ?>bwdmfm-masking-repeat-round <?php } elseif('space' === $settings['bwdmfm_masking_repeat_mask']){ ?>bwdmfm-masking-repeat-space <?php } ?>
			bwdmfm-masking-194">
				<div class="bwdmfm-flag-img 
				<?php if('paralax' === $settings['bwdmfm_masking_attachment']){ ?>bwdmfm_text_paralax <?php } ?> 
				<?php if('center' === $settings['bwdmfm_background_position']){ ?>bwdmfm-background-position-default <?php } elseif('top' === $settings['bwdmfm_background_position']){ ?>bwdmfm-background-position-top <?php } elseif('bottom' === $settings['bwdmfm_background_position']){ ?>bwdmfm-background-position-bottom <?php } elseif('left' === $settings['bwdmfm_background_position']){ ?>bwdmfm-background-position-left <?php } elseif('right' === $settings['bwdmfm_background_position']){ ?>bwdmfm-background-position-right <?php } elseif('auto' === $settings['bwdmfm_background_position']){ ?>bwdmfm-background-img <?php } ?> 
				<?php if('cover' === $settings['bwdmfm_background_size']){ ?>bwdmfm-background-default <?php } elseif('auto' === $settings['bwdmfm_background_size']){ ?>bwdmfm-background-auto <?php } elseif('contain' === $settings['bwdmfm_background_size']){ ?>bwdmfm-background-contain <?php } ?> 
				<?php if('no-repeat' === $settings['bwdmfm_background_repeat_masking']){ ?>bwdmfm-background-no-repeat-default <?php } elseif('repeat' === $settings['bwdmfm_background_repeat_masking']){ ?>bwdmfm-background-repeat <?php } elseif('repeat-x' === $settings['bwdmfm_background_repeat_masking']){ ?>bwdmfm-background-repeat-x <?php } elseif('repeat-y' === $settings['bwdmfm_background_repeat_masking']){ ?>bwdmfm-background-repeat-y <?php } elseif('round' === $settings['bwdmfm_background_repeat_masking']){ ?>bwdmfm-background-repeat-round <?php } elseif('space' === $settings['bwdmfm_background_repeat_masking']){ ?>bwdmfm-background-repeat-space <?php } ?>
				bwdmfm-flag-img-2" style="background-image: url(<?php echo esc_url($settings['bwdmfm_masking_image']['url']); ?>);"></div>
			</div>
		<?php
    }
	}else{
		echo '<h1 class="bwd_pro_notice">'.esc_html__('Ohh!!! It\'s ', 'bwd-elementor-addons').'<a href="https://bestwpdeveloper.com/pricing/" target="_blank"><b>'.esc_html__(' PRO...', 'bwd-elementor-addons').'</b></a></h1>';
	}
	}
}
