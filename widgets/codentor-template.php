<?php
namespace BWDEBCreativeElementorBundle\Widgets;

use Elementor\Widget_Base;
use Elementor\Controls_Manager;
use \Elementor\Plugin;

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

class BWDEB_CodEntor_Code_Widgete extends Widget_Base {

	public function get_name(){
		return esc_html__('CodEntorSyntaxHighlighter', 'bwd-elementor-addons' );
	}

	public function get_title(){
		return esc_html__( 'CodEntor Syntax Highlighter', 'bwd-elementor-addons' );
	}

	public function get_icon(){
		return 'bwdeb-elementor-bundle eicon-code-highlight';
	}

	public function get_categories(){
		return [ 'bwdeb_general_category' ];
	}

	public function get_style_depends(){
		return array('codentor-code-coy', 
			'codentor-code-dark', 
			'codentor-code-default', 
			'codentor-code-funky', 
			'codentor-code-okaidia', 
			'codentor-code-solarized-light', 
			'codentor-code-tomorrow-night', 
			'codentor-code-twilight',
			'codentor-cold-dark',
			'codentor-colddark-dark',
			'codentor-z-touch',
			'codentor-zonokai-theme',
			'codentor-vs-theme',
			'codentor-nord-theme',
			'codentor-holy-theme',
			'codentor-laserwave-theme',
			'codentor-lucario-theme',
			'codentor-night-owl',
			'codentor-atom-dark',
			'codentor-dracula-theme',
			'codentor-duotone-forest',
			'codentor-duotone-dark',
			'codentor-duotone-earth',
			'codentor-duotone-light',
			'codentor-duotone-sea',
			'codentor-duotone-space',
			'codentor-gruvbox-dark',
			'codentor-gruvbox-light',
			'codentor-ghcolors-theme',
			'codentor-a11y-dark-theme',
			'codentor-pojoaque',
			'codentor-shades-of-purple',
			'codentor-synthwave',
			'codentor-solarized-dark-atom',
			'codentor-material-dark',
			'codentor-material-light',
			'codentor-material-oceanic',
			'codentor-code-toolbar');
	}

	public function get_script_depends(){
		return array( 'codentor-code-prismjs', 'codentor-code-toolbarjs' );
	}

	protected function _register_controls(){

		$this->start_controls_section(
			'controls_section',
			[
				'label' => esc_html__( 'Code Syntex', 'bwd-elementor-addons' ),
				'tab' => Controls_Manager::TAB_CONTENT,
			]
		);
		$this->add_control(
			'codentor_theme',
			[
				'label' => esc_html__( 'Theme Style', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::SELECT,
				'options' => [
					'Default' => esc_html__( 'Default', 'bwd-elementor-addons' ),
					'Dark' => esc_html__( 'Dark', 'bwd-elementor-addons' ),
					'Okaidia' => esc_html__( 'Okaidia', 'bwd-elementor-addons' ),
					'Coy' => esc_html__( 'Coy (PRO)', 'bwd-elementor-addons' ),
					'Tomorrow Night' => esc_html__( 'Night (PRO)', 'bwd-elementor-addons' ),
					'Funky' => esc_html__( 'Funky (PRO)', 'bwd-elementor-addons' ),
					'Twilight' => esc_html__( 'Twilight (PRO)', 'bwd-elementor-addons' ),
					'Solarized Light' => esc_html__( 'Solarized Light (PRO)', 'bwd-elementor-addons' ),
					'Cold Dark' => esc_html__( 'Colddark Cold (PRO)', 'bwd-elementor-addons' ),
					'colddark-dark' => esc_html__( 'Colddark Dark (PRO)', 'bwd-elementor-addons' ),
					'z Touch' => esc_html__( 'Zeel Touch (PRO)', 'bwd-elementor-addons' ),
					'Zonokai Theme' => esc_html__( 'Zonokai Theme (PRO)', 'bwd-elementor-addons' ),
					'Vs Theme' => esc_html__( 'VS Theme (PRO)', 'bwd-elementor-addons' ),
					'Nord Theme' => esc_html__( 'Nord Theme (PRO)', 'bwd-elementor-addons' ),
					'Holy Theme' => esc_html__( 'Holy Theme (PRO)', 'bwd-elementor-addons' ),
					'Laserwave Theme' => esc_html__( 'Laserwave Theme (PRO)', 'bwd-elementor-addons' ),
					'Lucario Theme' => esc_html__( 'Lucario Theme (PRO)', 'bwd-elementor-addons' ),
					'Night Owl' => esc_html__( 'Night Owl (PRO)', 'bwd-elementor-addons' ),
					'Atom Dark' => esc_html__( 'Atom Dark (PRO)', 'bwd-elementor-addons' ),
					'Dracula Theme' => esc_html__( 'Dracula Theme (PRO)', 'bwd-elementor-addons' ),
					'Duotone-Forest' => esc_html__( 'Duotone Forest (PRO)', 'bwd-elementor-addons' ),
					'Duotone-Dark' => esc_html__( 'Duotone Dark (PRO)', 'bwd-elementor-addons' ),
					'Duotone-Earth' => esc_html__( 'Duotone Earth (PRO)', 'bwd-elementor-addons' ),
					'Duotone-Light' => esc_html__( 'Duotone Light (PRO)', 'bwd-elementor-addons' ),
					'Duotone-Sea' => esc_html__( 'Duotone Sea (PRO)', 'bwd-elementor-addons' ),
					'Duotone-Space' => esc_html__( 'Duotone Space (PRO)', 'bwd-elementor-addons' ),
					'A11y-Dark-Theme' => esc_html__( 'A11y Dark Theme (PRO)', 'bwd-elementor-addons' ),
					'gruvbox-dark' => esc_html__( 'Gruvbox Dark (PRO)', 'bwd-elementor-addons' ),
					'gruvbox-light' => esc_html__( 'Gruvbox Light (PRO)', 'bwd-elementor-addons' ),
					'ghcolors-theme' => esc_html__( 'Ghcolors Theme (PRO)', 'bwd-elementor-addons' ),
					'pojoaque' => esc_html__( 'Pojoaque (PRO)', 'bwd-elementor-addons' ),
					'shades-of-purple' => esc_html__( 'Shades Purple (PRO)', 'bwd-elementor-addons' ),
					'synthwave' => esc_html__( 'Synthwave (PRO)', 'bwd-elementor-addons' ),
					'solarized-dark-atom' => esc_html__( 'Solarized Dark Atom (PRO)', 'bwd-elementor-addons' ),
					'material-dark' => esc_html__( 'Material Dark (PRO)', 'bwd-elementor-addons' ),
					'material-light' => esc_html__( 'Material Light (PRO)', 'bwd-elementor-addons' ),
					'material-oceanic' => esc_html__( 'Material Oceanic (PRO)', 'bwd-elementor-addons' ),
				],
				'default' => 'Default',
				'description' => 'See <a class="bwdeb-pro-promotion-text" href="https://bwdelementoraddons.com/code-highlighter" target="_blank"><b>Demo</b></a>. Get <a class="bwdeb-pro-promotion-text" href="https://bestwpdeveloper.com/pricing/" target="_blank"><b>Pro...</b></a>.',
			]
		);
		$this->add_control(
			'codentor_language',
			[
				'label' => esc_html__( 'Select Language', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::SELECT,
				'options' => [
					'none' => esc_html__( 'None', 'bwd-elementor-addons' ),
					'abap' => esc_html__( 'abap', 'bwd-elementor-addons' ),
					'abnf' => esc_html__( 'abnf', 'bwd-elementor-addons' ),
					'actionscript' => esc_html__( 'actionscript', 'bwd-elementor-addons' ),
					'ada' => esc_html__( 'ada', 'bwd-elementor-addons' ),
					'adoc' => esc_html__( 'adoc', 'bwd-elementor-addons' ),
					'agda' => esc_html__( 'agda', 'bwd-elementor-addons' ),
					'al' => esc_html__( 'al', 'bwd-elementor-addons' ),
					'antlr4' => esc_html__( 'antlr4', 'bwd-elementor-addons' ),
					'apacheconf' => esc_html__( 'apacheconf', 'bwd-elementor-addons' ),
					'apex' => esc_html__( 'apex', 'bwd-elementor-addons' ),
					'apl' => esc_html__( 'apl', 'bwd-elementor-addons' ),
					'applescript' => esc_html__( 'applescript', 'bwd-elementor-addons' ),
					'aql' => esc_html__( 'aql', 'bwd-elementor-addons' ),
					'arduino' => esc_html__( 'arduino', 'bwd-elementor-addons' ),
					'arff' => esc_html__( 'arff', 'bwd-elementor-addons' ),
					'asciidoc' => esc_html__( 'asciidoc', 'bwd-elementor-addons' ),
					'asm6502' => esc_html__( 'asm6502', 'bwd-elementor-addons' ),
					'aspnet' => esc_html__( 'aspnet', 'bwd-elementor-addons' ),
					'atom' => esc_html__( 'atom', 'bwd-elementor-addons' ),
					'autohotkey' => esc_html__( 'autohotkey', 'bwd-elementor-addons' ),
					'autoit' => esc_html__( 'autoit', 'bwd-elementor-addons' ),
					'bash' => esc_html__( 'bash', 'bwd-elementor-addons' ),
					'basic' => esc_html__( 'basic', 'bwd-elementor-addons' ),
					'batch' => esc_html__( 'batch', 'bwd-elementor-addons' ),
					'bbcode' => esc_html__( 'bbcode', 'bwd-elementor-addons' ),
					'birb' => esc_html__( 'birb', 'bwd-elementor-addons' ),
					'bison' => esc_html__( 'bison', 'bwd-elementor-addons' ),
					'bnf' => esc_html__( 'bnf', 'bwd-elementor-addons' ),
					'brainfuck' => esc_html__( 'brainfuck', 'bwd-elementor-addons' ),
					'brightscript' => esc_html__( 'brightscript', 'bwd-elementor-addons' ),
					'bro' => esc_html__( 'bro', 'bwd-elementor-addons' ),
					'bsl' => esc_html__( 'bsl', 'bwd-elementor-addons' ),
					'c' => esc_html__( 'c', 'bwd-elementor-addons' ),
					'cil' => esc_html__( 'cil', 'bwd-elementor-addons' ),
					'clike' => esc_html__( 'clike', 'bwd-elementor-addons' ),
					'clojure' => esc_html__( 'clojure', 'bwd-elementor-addons' ),
					'cmake' => esc_html__( 'cmake', 'bwd-elementor-addons' ),
					'coffee' => esc_html__( 'coffee', 'bwd-elementor-addons' ),
					'coffeescript' => esc_html__( 'coffeescript', 'bwd-elementor-addons' ),
					'conc' => esc_html__( 'conc', 'bwd-elementor-addons' ),
					'concurnas' => esc_html__( 'concurnas', 'bwd-elementor-addons' ),
					'context' => esc_html__( 'context', 'bwd-elementor-addons' ),
					'cpp' => esc_html__( 'cpp', 'bwd-elementor-addons' ),
					'crystal' => esc_html__( 'crystal', 'bwd-elementor-addons' ),
					'cs' => esc_html__( 'cs', 'bwd-elementor-addons' ),
					'csharp' => esc_html__( 'csharp', 'bwd-elementor-addons' ),
					'csp' => esc_html__( 'csp', 'bwd-elementor-addons' ),
					'css' => esc_html__( 'css', 'bwd-elementor-addons' ),
					'cypher' => esc_html__( 'cypher', 'bwd-elementor-addons' ),
					'd' => esc_html__( 'd', 'bwd-elementor-addons' ),
					'dart' => esc_html__( 'dart', 'bwd-elementor-addons' ),
					'dataweave' => esc_html__( 'dataweave', 'bwd-elementor-addons' ),
					'dax' => esc_html__( 'dax', 'bwd-elementor-addons' ),
					'DFS' => esc_html__( 'DFS', 'bwd-elementor-addons' ),
					'dhall' => esc_html__( 'dhall', 'bwd-elementor-addons' ),
					'diff' => esc_html__( 'diff', 'bwd-elementor-addons' ),
					'django' => esc_html__( 'django', 'bwd-elementor-addons' ),
					'dns-zone' => esc_html__( 'dns-zone', 'bwd-elementor-addons' ),
					'dns-zone-file' => esc_html__( 'dns-zone-file', 'bwd-elementor-addons' ),
					'docker' => esc_html__( 'docker', 'bwd-elementor-addons' ),
					'dockerfile' => esc_html__( 'dockerfile', 'bwd-elementor-addons' ),
					'dotnet' => esc_html__( 'dotnet', 'bwd-elementor-addons' ),
					'ebnf' => esc_html__( 'ebnf', 'bwd-elementor-addons' ),
					'editorconfig' => esc_html__( 'editorconfig', 'bwd-elementor-addons' ),
					'eiffel' => esc_html__( 'eiffel', 'bwd-elementor-addons' ),
					'ejs' => esc_html__( 'ejs', 'bwd-elementor-addons' ),
					'elisp' => esc_html__( 'elisp', 'bwd-elementor-addons' ),
					'elixir' => esc_html__( 'elixir', 'bwd-elementor-addons' ),
					'elm' => esc_html__( 'elm', 'bwd-elementor-addons' ),
					'emacs' => esc_html__( 'emacs', 'bwd-elementor-addons' ),
					'emacs-lisp' => esc_html__( 'emacs-lisp', 'bwd-elementor-addons' ),
					'erb' => esc_html__( 'erb', 'bwd-elementor-addons' ),
					'erlang' => esc_html__( 'erlang', 'bwd-elementor-addons' ),
					'eta' => esc_html__( 'eta', 'bwd-elementor-addons' ),
					'etlua' => esc_html__( 'etlua', 'bwd-elementor-addons' ),
					'excel-formula' => esc_html__( 'excel-formula', 'bwd-elementor-addons' ),
					'extend' => esc_html__( 'extend', 'bwd-elementor-addons' ),
					'factor' => esc_html__( 'factor', 'bwd-elementor-addons' ),
					'firestore-security-rules' => esc_html__( 'firestore-security-rules', 'bwd-elementor-addons' ),
					'flow' => esc_html__( 'flow', 'bwd-elementor-addons' ),
					'fortran' => esc_html__( 'fortran', 'bwd-elementor-addons' ),
					'fsharp' => esc_html__( 'fsharp', 'bwd-elementor-addons' ),
					'ftl' => esc_html__( 'ftl', 'bwd-elementor-addons' ),
					'g4' => esc_html__( 'g4', 'bwd-elementor-addons' ),
					'gamemakerlanguage' => esc_html__( 'gamemakerlanguage', 'bwd-elementor-addons' ),
					'gcode' => esc_html__( 'gcode', 'bwd-elementor-addons' ),
					'gdscript' => esc_html__( 'gdscript', 'bwd-elementor-addons' ),
					'gedcom' => esc_html__( 'gedcom', 'bwd-elementor-addons' ),
					'gherkin' => esc_html__( 'gherkin', 'bwd-elementor-addons' ),
					'git' => esc_html__( 'git', 'bwd-elementor-addons' ),
					'gitignore' => esc_html__( 'gitignore', 'bwd-elementor-addons' ),
					'glsl' => esc_html__( 'glsl', 'bwd-elementor-addons' ),
					'gml' => esc_html__( 'gml', 'bwd-elementor-addons' ),
					'go' => esc_html__( 'go', 'bwd-elementor-addons' ),
					'graphql' => esc_html__( 'graphql', 'bwd-elementor-addons' ),
					'groovy' => esc_html__( 'groovy', 'bwd-elementor-addons' ),
					'haml' => esc_html__( 'haml', 'bwd-elementor-addons' ),
					'handlebars' => esc_html__( 'handlebars', 'bwd-elementor-addons' ),
					'haskell' => esc_html__( 'haskell', 'bwd-elementor-addons' ),
					'haxe' => esc_html__( 'haxe', 'bwd-elementor-addons' ),
					'hcl' => esc_html__( 'hcl', 'bwd-elementor-addons' ),
					'hgignore' => esc_html__( 'hgignore', 'bwd-elementor-addons' ),
					'hlsl' => esc_html__( 'hlsl', 'bwd-elementor-addons' ),
					'hpkp' => esc_html__( 'hpkp', 'bwd-elementor-addons' ),
					'hs' => esc_html__( 'hs', 'bwd-elementor-addons' ),
					'hsts' => esc_html__( 'hsts', 'bwd-elementor-addons' ),
					'html' => esc_html__( 'html', 'bwd-elementor-addons' ),
					'http' => esc_html__( 'http', 'bwd-elementor-addons' ),
					'ichigojam' => esc_html__( 'ichigojam', 'bwd-elementor-addons' ),
					'icon' => esc_html__( 'icon', 'bwd-elementor-addons' ),
					'iecst' => esc_html__( 'iecst', 'bwd-elementor-addons' ),
					'ignore' => esc_html__( 'ignore', 'bwd-elementor-addons' ),
					'inform7' => esc_html__( 'inform7', 'bwd-elementor-addons' ),
					'ini' => esc_html__( 'ini', 'bwd-elementor-addons' ),
					'insertBefore' => esc_html__( 'insertBefore', 'bwd-elementor-addons' ),
					'io' => esc_html__( 'io', 'bwd-elementor-addons' ),
					'j' => esc_html__( 'j', 'bwd-elementor-addons' ),
					'java' => esc_html__( 'java', 'bwd-elementor-addons' ),
					'javadoc' => esc_html__( 'javadoc', 'bwd-elementor-addons' ),
					'javadoclike' => esc_html__( 'javadoclike', 'bwd-elementor-addons' ),
					'javascript' => esc_html__( 'javascript', 'bwd-elementor-addons' ),
					'javastacktrace' => esc_html__( 'javastacktrace', 'bwd-elementor-addons' ),
					'jinja2' => esc_html__( 'jinja2', 'bwd-elementor-addons' ),
					'jolie' => esc_html__( 'jolie', 'bwd-elementor-addons' ),
					'jq' => esc_html__( 'jq', 'bwd-elementor-addons' ),
					'js' => esc_html__( 'js', 'bwd-elementor-addons' ),
					'jsdoc' => esc_html__( 'jsdoc', 'bwd-elementor-addons' ),
					'json' => esc_html__( 'json', 'bwd-elementor-addons' ),
					'json5' => esc_html__( 'json5', 'bwd-elementor-addons' ),
					'jsonp' => esc_html__( 'jsonp', 'bwd-elementor-addons' ),
					'jsstacktrace' => esc_html__( 'jsstacktrace', 'bwd-elementor-addons' ),
					'jsx' => esc_html__( 'jsx', 'bwd-elementor-addons' ),
					'julia' => esc_html__( 'julia', 'bwd-elementor-addons' ),
					'keyman' => esc_html__( 'keyman', 'bwd-elementor-addons' ),
					'kotlin' => esc_html__( 'kotlin', 'bwd-elementor-addons' ),
					'kt' => esc_html__( 'kt', 'bwd-elementor-addons' ),
					'kts' => esc_html__( 'kts', 'bwd-elementor-addons' ),
					'latex' => esc_html__( 'latex', 'bwd-elementor-addons' ),
					'latte' => esc_html__( 'latte', 'bwd-elementor-addons' ),
					'less' => esc_html__( 'less', 'bwd-elementor-addons' ),
					'lilypond' => esc_html__( 'lilypond', 'bwd-elementor-addons' ),
					'liquid' => esc_html__( 'liquid', 'bwd-elementor-addons' ),
					'lisp' => esc_html__( 'lisp', 'bwd-elementor-addons' ),
					'livescript' => esc_html__( 'livescript', 'bwd-elementor-addons' ),
					'llvm' => esc_html__( 'llvm', 'bwd-elementor-addons' ),
					'lolcode' => esc_html__( 'lolcode', 'bwd-elementor-addons' ),
					'lua' => esc_html__( 'lua', 'bwd-elementor-addons' ),
					'ly' => esc_html__( 'ly', 'bwd-elementor-addons' ),
					'makefile' => esc_html__( 'makefile', 'bwd-elementor-addons' ),
					'markdown' => esc_html__( 'markdown', 'bwd-elementor-addons' ),
					'markup' => esc_html__( 'markup', 'bwd-elementor-addons' ),
					'markup-templating' => esc_html__( 'markup-templating', 'bwd-elementor-addons' ),
					'mathml' => esc_html__( 'mathml', 'bwd-elementor-addons' ),
					'matlab' => esc_html__( 'matlab', 'bwd-elementor-addons' ),
					'md' => esc_html__( 'md', 'bwd-elementor-addons' ),
					'mel' => esc_html__( 'mel', 'bwd-elementor-addons' ),
					'mizar' => esc_html__( 'mizar', 'bwd-elementor-addons' ),
					'mongodb' => esc_html__( 'mongodb', 'bwd-elementor-addons' ),
					'monkey' => esc_html__( 'monkey', 'bwd-elementor-addons' ),
					'moon' => esc_html__( 'moon', 'bwd-elementor-addons' ),
					'moonscript' => esc_html__( 'moonscript', 'bwd-elementor-addons' ),
					'mscript' => esc_html__( 'mscript', 'bwd-elementor-addons' ),
					'n1ql' => esc_html__( 'n1ql', 'bwd-elementor-addons' ),
					'n4js' => esc_html__( 'n4js', 'bwd-elementor-addons' ),
					'n4jsd' => esc_html__( 'n4jsd', 'bwd-elementor-addons' ),
					'nand2tetris-hdl' => esc_html__( 'nand2tetris-hdl', 'bwd-elementor-addons' ),
					'nani' => esc_html__( 'nani', 'bwd-elementor-addons' ),
					'naniscript' => esc_html__( 'naniscript', 'bwd-elementor-addons' ),
					'nasm' => esc_html__( 'nasm', 'bwd-elementor-addons' ),
					'neon' => esc_html__( 'neon', 'bwd-elementor-addons' ),
					'nginx' => esc_html__( 'nginx', 'bwd-elementor-addons' ),
					'nim' => esc_html__( 'nim', 'bwd-elementor-addons' ),
					'nix' => esc_html__( 'nix', 'bwd-elementor-addons' ),
					'npmignore' => esc_html__( 'npmignore', 'bwd-elementor-addons' ),
					'nsis' => esc_html__( 'nsis', 'bwd-elementor-addons' ),
					'objc' => esc_html__( 'objc', 'bwd-elementor-addons' ),
					'objectivec' => esc_html__( 'objectivec', 'bwd-elementor-addons' ),
					'objectpascal' => esc_html__( 'objectpascal', 'bwd-elementor-addons' ),
					'ocaml' => esc_html__( 'ocaml', 'bwd-elementor-addons' ),
					'opencl' => esc_html__( 'opencl', 'bwd-elementor-addons' ),
					'oscript' => esc_html__( 'oscript', 'bwd-elementor-addons' ),
					'oz' => esc_html__( 'oz', 'bwd-elementor-addons' ),
					'parigp' => esc_html__( 'parigp', 'bwd-elementor-addons' ),
					'parser' => esc_html__( 'parser', 'bwd-elementor-addons' ),
					'pascal' => esc_html__( 'pascal', 'bwd-elementor-addons' ),
					'pascaligo' => esc_html__( 'pascaligo', 'bwd-elementor-addons' ),
					'pbfasm' => esc_html__( 'pbfasm', 'bwd-elementor-addons' ),
					'pcaxis' => esc_html__( 'pcaxis', 'bwd-elementor-addons' ),
					'pcode' => esc_html__( 'pcode', 'bwd-elementor-addons' ),
					'peoplecode' => esc_html__( 'peoplecode', 'bwd-elementor-addons' ),
					'perl' => esc_html__( 'perl', 'bwd-elementor-addons' ),
					'php' => esc_html__( 'php', 'bwd-elementor-addons' ),
					'phpdoc' => esc_html__( 'phpdoc', 'bwd-elementor-addons' ),
					'plsql' => esc_html__( 'plsql', 'bwd-elementor-addons' ),
					'powerquery' => esc_html__( 'powerquery', 'bwd-elementor-addons' ),
					'powershell' => esc_html__( 'powershell', 'bwd-elementor-addons' ),
					'pq' => esc_html__( 'pq', 'bwd-elementor-addons' ),
					'processing' => esc_html__( 'processing', 'bwd-elementor-addons' ),
					'prolog' => esc_html__( 'prolog', 'bwd-elementor-addons' ),
					'promql' => esc_html__( 'promql', 'bwd-elementor-addons' ),
					'properties' => esc_html__( 'properties', 'bwd-elementor-addons' ),
					'protobuf' => esc_html__( 'protobuf', 'bwd-elementor-addons' ),
					'pug' => esc_html__( 'pug', 'bwd-elementor-addons' ),
					'puppet' => esc_html__( 'puppet', 'bwd-elementor-addons' ),
					'pure' => esc_html__( 'pure', 'bwd-elementor-addons' ),
					'purebasic' => esc_html__( 'purebasic', 'bwd-elementor-addons' ),
					'purescript' => esc_html__( 'purescript', 'bwd-elementor-addons' ),
					'purs' => esc_html__( 'purs', 'bwd-elementor-addons' ),
					'px' => esc_html__( 'px', 'bwd-elementor-addons' ),
					'py' => esc_html__( 'py', 'bwd-elementor-addons' ),
					'python' => esc_html__( 'python', 'bwd-elementor-addons' ),
					'q' => esc_html__( 'q', 'bwd-elementor-addons' ),
					'qml' => esc_html__( 'qml', 'bwd-elementor-addons' ),
					'qore' => esc_html__( 'qore', 'bwd-elementor-addons' ),
					'r' => esc_html__( 'r', 'bwd-elementor-addons' ),
					'racket' => esc_html__( 'racket', 'bwd-elementor-addons' ),
					'rb' => esc_html__( 'rb', 'bwd-elementor-addons' ),
					'rbnf' => esc_html__( 'rbnf', 'bwd-elementor-addons' ),
					'reason' => esc_html__( 'reason', 'bwd-elementor-addons' ),
					'regex' => esc_html__( 'regex', 'bwd-elementor-addons' ),
					'renpy' => esc_html__( 'renpy', 'bwd-elementor-addons' ),
					'rest' => esc_html__( 'rest', 'bwd-elementor-addons' ),
					'rip' => esc_html__( 'rip', 'bwd-elementor-addons' ),
					'rkt' => esc_html__( 'rkt', 'bwd-elementor-addons' ),
					'roboconf' => esc_html__( 'roboconf', 'bwd-elementor-addons' ),
					'robot' => esc_html__( 'robot', 'bwd-elementor-addons' ),
					'robotframework' => esc_html__( 'robotframework', 'bwd-elementor-addons' ),
					'rpy' => esc_html__( 'rpy', 'bwd-elementor-addons' ),
					'rq' => esc_html__( 'rq', 'bwd-elementor-addons' ),
					'rss' => esc_html__( 'rss', 'bwd-elementor-addons' ),
					'ruby' => esc_html__( 'ruby', 'bwd-elementor-addons' ),
					'rust' => esc_html__( 'rust', 'bwd-elementor-addons' ),
					'sas' => esc_html__( 'sas', 'bwd-elementor-addons' ),
					'sass' => esc_html__( 'sass', 'bwd-elementor-addons' ),
					'scala' => esc_html__( 'scala', 'bwd-elementor-addons' ),
					'scheme' => esc_html__( 'scheme', 'bwd-elementor-addons' ),
					'scss' => esc_html__( 'scss', 'bwd-elementor-addons' ),
					'sh-session' => esc_html__( 'sh-session', 'bwd-elementor-addons' ),
					'shell' => esc_html__( 'shell', 'bwd-elementor-addons' ),
					'shell-session' => esc_html__( 'shell-session', 'bwd-elementor-addons' ),
					'shellsession' => esc_html__( 'shellsession', 'bwd-elementor-addons' ),
					'shortcode' => esc_html__( 'shortcode', 'bwd-elementor-addons' ),
					'sln' => esc_html__( 'sln', 'bwd-elementor-addons' ),
					'smali' => esc_html__( 'smali', 'bwd-elementor-addons' ),
					'smalltalk' => esc_html__( 'smalltalk', 'bwd-elementor-addons' ),
					'smarty' => esc_html__( 'smarty', 'bwd-elementor-addons' ),
					'sml' => esc_html__( 'sml', 'bwd-elementor-addons' ),
					'smlnj' => esc_html__( 'smlnj', 'bwd-elementor-addons' ),
					'sol' => esc_html__( 'sol', 'bwd-elementor-addons' ),
					'solidity' => esc_html__( 'solidity', 'bwd-elementor-addons' ),
					'solution-file' => esc_html__( 'solution-file', 'bwd-elementor-addons' ),
					'soy' => esc_html__( 'soy', 'bwd-elementor-addons' ),
					'sparql' => esc_html__( 'sparql', 'bwd-elementor-addons' ),
					'splunk-spl' => esc_html__( 'splunk-spl', 'bwd-elementor-addons' ),
					'sqf' => esc_html__( 'sqf', 'bwd-elementor-addons' ),
					'sql' => esc_html__( 'sql', 'bwd-elementor-addons' ),
					'ssml' => esc_html__( 'ssml', 'bwd-elementor-addons' ),
					'stan' => esc_html__( 'stan', 'bwd-elementor-addons' ),
					'stylus' => esc_html__( 'stylus', 'bwd-elementor-addons' ),
					'svg' => esc_html__( 'svg', 'bwd-elementor-addons' ),
					'swift' => esc_html__( 'swift', 'bwd-elementor-addons' ),
					't4' => esc_html__( 't4', 'bwd-elementor-addons' ),
					't4-cs' => esc_html__( 't4-cs', 'bwd-elementor-addons' ),
					't4-templating' => esc_html__( 't4-templating', 'bwd-elementor-addons' ),
					't4-vb' => esc_html__( 't4-vb', 'bwd-elementor-addons' ),
					'tap' => esc_html__( 'tap', 'bwd-elementor-addons' ),
					'tcl' => esc_html__( 'tcl', 'bwd-elementor-addons' ),
					'tex' => esc_html__( 'tex', 'bwd-elementor-addons' ),
					'textile' => esc_html__( 'textile', 'bwd-elementor-addons' ),
					'toml' => esc_html__( 'toml', 'bwd-elementor-addons' ),
					'trig' => esc_html__( 'trig', 'bwd-elementor-addons' ),
					'ts' => esc_html__( 'ts', 'bwd-elementor-addons' ),
					'tsconfig' => esc_html__( 'tsconfig', 'bwd-elementor-addons' ),
					'tsx' => esc_html__( 'tsx', 'bwd-elementor-addons' ),
					'tt2' => esc_html__( 'tt2', 'bwd-elementor-addons' ),
					'turtle' => esc_html__( 'turtle', 'bwd-elementor-addons' ),
					'twig' => esc_html__( 'twig', 'bwd-elementor-addons' ),
					'typescript' => esc_html__( 'typescript', 'bwd-elementor-addons' ),
					'typoscript' => esc_html__( 'typoscript', 'bwd-elementor-addons' ),
					'uc' => esc_html__( 'uc', 'bwd-elementor-addons' ),
					'unrealscript' => esc_html__( 'unrealscript', 'bwd-elementor-addons' ),
					'uscript' => esc_html__( 'uscript', 'bwd-elementor-addons' ),
					'vala' => esc_html__( 'vala', 'bwd-elementor-addons' ),
					'vb' => esc_html__( 'vb', 'bwd-elementor-addons' ),
					'vba' => esc_html__( 'vba', 'bwd-elementor-addons' ),
					'vbnet' => esc_html__( 'vbnet', 'bwd-elementor-addons' ),
					'velocity' => esc_html__( 'velocity', 'bwd-elementor-addons' ),
					'verilog' => esc_html__( 'verilog', 'bwd-elementor-addons' ),
					'vhdl' => esc_html__( 'vhdl', 'bwd-elementor-addons' ),
					'vim' => esc_html__( 'vim', 'bwd-elementor-addons' ),
					'visual-basic' => esc_html__( 'visual-basic', 'bwd-elementor-addons' ),
					'warpscript' => esc_html__( 'warpscript', 'bwd-elementor-addons' ),
					'wasm' => esc_html__( 'wasm', 'bwd-elementor-addons' ),
					'webmanifest' => esc_html__( 'webmanifest', 'bwd-elementor-addons' ),
					'wiki' => esc_html__( 'wiki', 'bwd-elementor-addons' ),
					'xeora' => esc_html__( 'xeora', 'bwd-elementor-addons' ),
					'xeoracube' => esc_html__( 'xeoracube', 'bwd-elementor-addons' ),
					'xls' => esc_html__( 'xls', 'bwd-elementor-addons' ),
					'xlsx' => esc_html__( 'xlsx', 'bwd-elementor-addons' ),
					'xml' => esc_html__( 'xml', 'bwd-elementor-addons' ),
					'xojo' => esc_html__( 'xojo', 'bwd-elementor-addons' ),
					'xquery' => esc_html__( 'xquery', 'bwd-elementor-addons' ),
					'yaml' => esc_html__( 'yaml', 'bwd-elementor-addons' ),
					'yang' => esc_html__( 'yang', 'bwd-elementor-addons' ),
					'yml' => esc_html__( 'yml', 'bwd-elementor-addons' ),
					'zig' => esc_html__( 'zig', 'bwd-elementor-addons' )
				],
				'default' => 'html'
			]
		);
		$this->add_control(
			'codentor_show_language',
			[
				'label' => esc_html__( 'Display Language', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::SWITCHER,
				'label_on' => esc_html__( 'Show', 'bwd-elementor-addons' ),
				'label_off' => esc_html__( 'Hide', 'bwd-elementor-addons' ),
				'default' => esc_html__( 'yes' ),
			]
		);
		$this->add_control(
			'codentor_show_line_numbers',
			[
				'label' => esc_html__( 'Line Numbers', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::SWITCHER,
				'label_on' => esc_html__( 'Show', 'bwd-elementor-addons' ),
				'label_off' => esc_html__( 'Hide', 'bwd-elementor-addons' ),
				'default' => esc_html__( 'yes' ),
			]
		);
		$this->add_control(
			'codentor_show_toolbar',
			[
				'label' => esc_html__( 'Copy to Clipboard', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::SWITCHER,
				'label_on' => esc_html__( 'Show', 'bwd-elementor-addons' ),
				'label_off' => esc_html__( 'Hide', 'bwd-elementor-addons' ),
				'default' => __( 'yes' ),
			]
		);
		$this->add_responsive_control(
			'codentor_font_size',
			[
				'label' => esc_html__( 'Font Size', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::SLIDER,
				'range' => [
					'px' => [
						'min' => 0,
						'max' => 100,
						'step' => 1,
					],
				],
				'selectors' => [
					'{{WRAPPER}} .codentor_wrap code.language-html' => 'font-size: {{SIZE}}{{UNIT}} !important;',
				],
			]
		);
		$this->add_responsive_control(
			'codentor_height',
			[
				'label' => esc_html__( 'Height', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::SLIDER,
				'range' => [
					'px' => [
						'min' => 0,
						'max' => 1000,
						'step' => 1,
					],
				],
				'selectors' => [
					'{{WRAPPER}} pre.codentor_wrap.line-numbers.theme-default.language-html' => 'height: {{SIZE}}{{UNIT}} !important;',
				],
			]
		);
		$this->add_control(
			'codentor_content',
			[
				'label' => esc_html__( 'Code', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::CODE,
				'language' => 'text',
				'default' => '<h1>This is my language.</h1>',
				'rows' => 10,
			]
		);
		$this->end_controls_section();
		$this->start_controls_section(
			'codentor_catpost_content_style',
			[
				'label' => esc_html__( 'Code Syntex Style', 'bwd-elementor-addons' ),
				'tab' => Controls_Manager::TAB_STYLE,
			]
		);
		$this->add_control(
			'codentor_punctuation_color',
			[
				'label' => esc_html__( 'Punctuation Color', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} pre.theme-default .token.punctuation' => 'color: {{VALUE}}',
				],
			]
		);
		$this->add_control(
			'codentor_comment_color',
			[
				'label' => esc_html__( 'Comment Color', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} pre.theme-default .token.comment' => 'color: {{VALUE}}',
				],
			]
		);
		$this->add_control(
			'codentor_property_color',
			[
				'label' => esc_html__( 'Property Color', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} pre.theme-default .token.property' => 'color: {{VALUE}}',
				],
			]
		);
		$this->add_control(
			'codentor_selector_color',
			[
				'label' => esc_html__( 'Selector Color', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} pre.theme-default .token.selector' => 'color: {{VALUE}}',
				],
			]
		);
		$this->add_control(
			'codentor_operator_color',
			[
				'label' => esc_html__( 'Operator Color', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} pre.theme-default .token.operator' => 'color: {{VALUE}}',
				],
			]
		);
		$this->add_control(
			'codentor_operator_bg_color',
			[
				'label' => esc_html__( 'Operator Background', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} pre.theme-default .token.operator' => 'background-color: {{VALUE}}',
				],
			]
		);
		$this->add_control(
			'codentor_keyword_color',
			[
				'label' => esc_html__( 'Keyword Color', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} pre.theme-default .token.keyword' => 'color: {{VALUE}}',
				],
			]
		);
		$this->add_control(
			'codentor_function_color',
			[
				'label' => esc_html__( 'Function Color', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} pre.theme-default .token.function' => 'color: {{VALUE}}',
				],
			]
		);
		$this->add_control(
			'codentor_variable_color',
			[
				'label' => esc_html__( 'Variable Color', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} pre.theme-default .token.variable' => 'color: {{VALUE}}',
				],
			]
		);
		$this->end_controls_section();
		$this->start_controls_section(
			'codentor_catpost_title_style',
			[
				'label' => esc_html__( 'Line Numbers', 'bwd-elementor-addons' ),
				'tab' => Controls_Manager::TAB_STYLE,
				'condition' => [
					'codentor_show_line_numbers' => 'yes'
				],
			]
		);
		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'codentor_title_typography',
				'selector' => '{{WRAPPER}} .line-numbers-rows span:before',
			]
		);
		$this->add_control(
			'codentor_title_color',
			[
				'label' => esc_html__( 'Color', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .line-numbers-rows span:before' => 'color: {{VALUE}} !important',
				],
			]
		);
		$this->add_control(
			'codentor_title_bg_color',
			[
				'label' => esc_html__( 'Background', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .line-numbers-rows' => 'background: {{VALUE}}',
				],
			]
		);
		$this->add_group_control(
			\Elementor\Group_Control_Border::get_type(),
			[
				'name' => 'codentor_border_right',
				'label' => esc_html__( 'Right Border', 'bwd-elementor-addons' ),
				'selector' => '{{WRAPPER}} .line-numbers-rows',
			]
		);
		$this->add_responsive_control(
			'codentor_titlee_border_radius',
			[
				'label' => esc_html__('Border Radius', 'bwd-elementor-addons'),
				'type' => Controls_Manager::DIMENSIONS,
				'size_units' => ['px', 'em', 'rem', '%'],
				'selectors' => [
					'{{WRAPPER}} .line-numbers-rows span:before' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}} !important;',
				],
			]
		);
		$this->add_responsive_control(
			'codentor_title_padding',
			[
				'label' => esc_html__('Padding', 'bwd-elementor-addons'),
				'type' => Controls_Manager::DIMENSIONS,
				'size_units' => ['px', 'em', 'rem', '%'],
				'selectors' => [
					'{{WRAPPER}} .line-numbers-rows span:before' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
			]
		);
		$this->add_responsive_control(
			'codentor_title_margin',
			[
				'label' => esc_html__('Margin', 'bwd-elementor-addons'),
				'type' => Controls_Manager::DIMENSIONS,
				'size_units' => ['px', 'em', 'rem', '%'],
				'selectors' => [
					'{{WRAPPER}} .line-numbers-rows span:before' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
			]
		);
		$this->end_controls_section();

		$this->start_controls_section(
			'codentor_catpost_description_style',
			[
				'label' => esc_html__( 'Copy Clipboard', 'bwd-elementor-addons' ),
				'tab' => Controls_Manager::TAB_STYLE,
				'condition' => [
					'codentor_show_toolbar' => 'yes',
				],
			]
		);
		// Hover control start for description
		$this->start_controls_tabs(
			'codentor_description_style_post'
		);
		$this->start_controls_tab(
			'codentor_description_normal_post',
			[
				'label' => esc_html__( 'Normal', 'bwd-elementor-addons' ),
			]
		);
		// Normal Controls
		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'codentor_description_typography',
				'selector' => '{{WRAPPER}} .codentor_toolbar .toolbar-item button',
			]
		);
		$this->add_control(
			'codentor_description_color',
			[
				'label' => esc_html__( 'Color', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .codentor_toolbar .toolbar-item button' => 'color: {{VALUE}}',
				],
			]
		);
		$this->add_control(
			'codentor_description_bg_color',
			[
				'label' => esc_html__( 'Background', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .codentor_toolbar .toolbar-item button' => 'background: {{VALUE}}',
				],
			]
		);
		$this->end_controls_tab();
		$this->start_controls_tab(
			'codentor_description_hover_tab',
			[
				'label' => esc_html__( 'Hover', 'bwd-elementor-addons' ),
			]
		);
		// Hover Controls
		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'codentor_description_hover_typography',
				'selector' => '{{WRAPPER}} .codentor_toolbar .toolbar-item button:hover',
			]
		);
		$this->add_control(
			'codentor_description_hover_color',
			[
				'label' => esc_html__( 'Hover Color', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .codentor_toolbar .toolbar-item button:hover' => 'color: {{VALUE}}',
				],
			]
		);
		$this->add_control(
			'codentor_description_hover_bg_color',
			[
				'label' => esc_html__( 'Background', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .codentor_toolbar .toolbar-item button:hover' => 'background: {{VALUE}}',
				],
			]
		);
		$this->end_controls_tab();
		$this->end_controls_tabs();
		// Hover Control End
		$this->add_group_control(
			\Elementor\Group_Control_Border::get_type(),
			[
				'name' => 'codentor_copy_border',
				'label' => esc_html__( 'Border', 'bwd-elementor-addons' ),
				'selector' => '{{WRAPPER}} .code-toolbar .codentor_toolbar .toolbar-item button',
				'separator' => 'before',
			]
		);
		$this->add_responsive_control(
			'codentor_desc_border_radius',
			[
				'label' => esc_html__('Border Radius', 'bwd-elementor-addons'),
				'type' => Controls_Manager::DIMENSIONS,
				'size_units' => ['px', 'em', 'rem', '%'],
				'selectors' => [
					'{{WRAPPER}} .codentor_toolbar .toolbar-item button' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}} !important;',
				],
			]
		);
		$this->add_responsive_control(
			'codentor_desc_padding',
			[
				'label' => esc_html__('Padding', 'bwd-elementor-addons'),
				'type' => Controls_Manager::DIMENSIONS,
				'size_units' => ['px', 'em', 'rem', '%'],
				'selectors' => [
					'{{WRAPPER}} .codentor_toolbar .toolbar-item button' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
			]
		);
		$this->add_responsive_control(
			'codentor_desc_margin',
			[
				'label' => esc_html__('Margin', 'bwd-elementor-addons'),
				'type' => Controls_Manager::DIMENSIONS,
				'size_units' => ['px', 'em', 'rem', '%'],
				'selectors' => [
					'{{WRAPPER}} .codentor_toolbar .toolbar-item button' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
			]
		);
		$this->end_controls_section();
		$this->start_controls_section(
			'codentor_language_btn_style',
			[
				'label' => esc_html__( 'Language Button', 'bwd-elementor-addons' ),
				'tab' => Controls_Manager::TAB_STYLE,
				'condition' => [
					'codentor_show_language' => 'yes'
				],
			]
		);
		// Hover control start for description
		$this->start_controls_tabs(
			'codentor_language_style'
		);
		$this->start_controls_tab(
			'codentor_language_btn_normal',
			[
				'label' => esc_html__( 'Normal', 'bwd-elementor-addons' ),
			]
		);
		// Normal Controls
		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'codentor_language_btn_typography',
				'selector' => '{{WRAPPER}} .code-toolbar div.codentor_language_type',
			]
		);
		$this->add_control(
			'codentor_language_btn_color',
			[
				'label' => esc_html__( 'Color', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .code-toolbar div.codentor_language_type' => 'color: {{VALUE}}',
				],
			]
		);
		$this->add_control(
			'codentor_language_btn_bg_color',
			[
				'label' => esc_html__( 'Background', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .code-toolbar div.codentor_language_type' => 'background: {{VALUE}}',
				],
			]
		);
		$this->end_controls_tab();
		$this->start_controls_tab(
			'codentor_language_btn_hover_tab',
			[
				'label' => esc_html__( 'Hover', 'bwd-elementor-addons' ),
			]
		);
		// Hover Controls
		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'codentor_language_btn_hover_typography',
				'selector' => '{{WRAPPER}} .code-toolbar div.codentor_language_type:hover',
			]
		);
		$this->add_control(
			'codentor_language_btn_hover_color',
			[
				'label' => esc_html__( 'Hover Color', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .code-toolbar div.codentor_language_type:hover' => 'color: {{VALUE}}',
				],
			]
		);
		$this->add_control(
			'codentor_language_btn_hover_bg_color',
			[
				'label' => esc_html__( 'Background', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .code-toolbar div.codentor_language_type:hover' => 'background: {{VALUE}}',
				],
			]
		);
		$this->end_controls_tab();
		$this->end_controls_tabs();
		// Hover Control End
		$this->add_group_control(
			\Elementor\Group_Control_Border::get_type(),
			[
				'name' => 'codentor_language_btn_border',
				'label' => esc_html__( 'Border', 'bwd-elementor-addons' ),
				'selector' => '{{WRAPPER}} .code-toolbar div.codentor_language_type',
				'separator' => 'before',
			]
		);
		$this->add_responsive_control(
			'codentor_language_btn_border_radius',
			[
				'label' => esc_html__('Border Radius', 'bwd-elementor-addons'),
				'type' => Controls_Manager::DIMENSIONS,
				'size_units' => ['px', 'em', 'rem', '%'],
				'selectors' => [
					'{{WRAPPER}} .code-toolbar div.codentor_language_type' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}} !important;',
				],
			]
		);
		$this->add_responsive_control(
			'codentor_language_btn_padding',
			[
				'label' => esc_html__('Padding', 'bwd-elementor-addons'),
				'type' => Controls_Manager::DIMENSIONS,
				'size_units' => ['px', 'em', 'rem', '%'],
				'selectors' => [
					'{{WRAPPER}} .code-toolbar div.codentor_language_type' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
			]
		);
		$this->add_responsive_control(
			'codentor_language_btn_margin',
			[
				'label' => esc_html__('Margin', 'bwd-elementor-addons'),
				'type' => Controls_Manager::DIMENSIONS,
				'size_units' => ['px', 'em', 'rem', '%'],
				'selectors' => [
					'{{WRAPPER}} .code-toolbar div.codentor_language_type' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
			]
		);
		$this->end_controls_section();

		$this->start_controls_section(
			'codentor_content_style',
			[
				'label' => esc_html__( 'Background', 'bwd-elementor-addons' ),
				'tab' => Controls_Manager::TAB_STYLE,
			]
		);
		// Hover control start for box
		$this->start_controls_tabs(
			'codentor_box_style_post'
		);
		$this->start_controls_tab(
			'codentor_box_normal_post',
			[
				'label' => esc_html__( 'Normal', 'bwd-elementor-addons' ),
			]
		);
		// Normal Controls
		$this->add_group_control(
			\Elementor\Group_Control_Background::get_type(),
			[
				'name' => 'codentor_box_bg_grediant_color',
				'label' => esc_html__( 'Background', 'bwd-elementor-addons' ),
				'types' => [ 'classic', 'gradient' ],
				'selector' => '{{WRAPPER}} .codentor_wrap',
			]
		);
		$this->add_group_control(
			\Elementor\Group_Control_Box_Shadow::get_type(),
			[
				'name' => 'codentor_box_boxshadow',
				'label' => esc_html__( 'Box Shadow', 'bwd-elementor-addons' ),
				'selector' => '{{WRAPPER}} .codentor_wrap',
			]
		);
		$this->add_group_control(
			\Elementor\Group_Control_Border::get_type(),
			[
				'name' => 'codentor_box_border',
				'label' => esc_html__( 'Border', 'bwd-elementor-addons' ),
				'selector' => '{{WRAPPER}} .codentor_wrap',
			]
		);
		$this->end_controls_tab();
		$this->start_controls_tab(
			'codentor_box_hover_tab',
			[
				'label' => esc_html__( 'Hover', 'bwd-elementor-addons' ),
			]
		);
		// Hover Controls
		$this->add_group_control(
			\Elementor\Group_Control_Background::get_type(),
			[
				'name' => 'codentor_box_bg_grediant_color_hover',
				'label' => esc_html__( 'Background', 'bwd-elementor-addons' ),
				'types' => [ 'classic', 'gradient', 'video' ],
				'selector' => '{{WRAPPER}} .codentor_wrap:hover',
			]
		);
		$this->add_group_control(
			\Elementor\Group_Control_Box_Shadow::get_type(),
			[
				'name' => 'codentor_box_boxshadow_hover',
				'label' => esc_html__( 'Box Shadow', 'bwd-elementor-addons' ),
				'selector' => '{{WRAPPER}} .codentor_wrap:hover',
			]
		);
		$this->add_group_control(
			\Elementor\Group_Control_Border::get_type(),
			[
				'name' => 'codentor_box_border_hover',
				'label' => esc_html__( 'Border', 'bwd-elementor-addons' ),
				'selector' => '{{WRAPPER}} .codentor_wrap:hover',
			]
		);
		$this->end_controls_tab();
		$this->end_controls_tabs();
		// Hover Control End

		$this->add_responsive_control(
			'codentor_the_box_border_radius',
			[
				'label' => esc_html__('Border Radius', 'bwd-elementor-addons'),
				'type' => Controls_Manager::DIMENSIONS,
				'separator' => 'before',
				'size_units' => ['px', 'em', 'rem', '%'],
				'selectors' => [
					'{{WRAPPER}} .codentor_wrap' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
			]
		);
		$this->add_responsive_control(
			'codentor_the_box_border_bottom',
			[
				'label' => esc_html__('Margin', 'bwd-elementor-addons'),
				'type' => Controls_Manager::DIMENSIONS,
				'size_units' => ['px', 'rem', '%'],
				'selectors' => [
					'{{WRAPPER}} .codentor_wrap' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
			]
		);
		$this->add_responsive_control(
			'codentor_box_padding',
			[
				'label' => esc_html__('Padding', 'bwd-elementor-addons'),
				'type' => Controls_Manager::DIMENSIONS,
				'size_units' => ['px', 'rem', '%'],
				'selectors' => [
					'{{WRAPPER}} .codentor_wrap' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
			]
		);
		$this->end_controls_section();
	}

	protected function render() {
		$display_all  = $this->get_settings_for_display();
		$codentor_language = $display_all ['codentor_language'];
		$codentor_theme = $display_all ['codentor_theme'];
		$codentor_show_line_numbers = $display_all ['codentor_show_line_numbers'];
		$codentor_show_toolbar = $display_all ['codentor_show_toolbar'];
		$codentor_content = htmlentities($display_all ['codentor_content']);
		$codentor_pre_classes = '';

		if('yes' === $codentor_show_line_numbers){
			$codentor_pre_classes .= "line-numbers ";
		}
		if('yes' !== $codentor_show_toolbar){
			$codentor_show_toolbar = "no";
		}
		if($codentor_theme == 'Default' || $codentor_theme == 'Dark' || $codentor_theme == 'Okaidia'){
			$codentor_pre_classes .= "theme-" . preg_replace('/\s+/', '-', strtolower($codentor_theme));
			$codentor_language_check = $display_all['codentor_show_language']?'<div class="codentor_language_type">'.esc_html($codentor_language).'</div>':'';
			echo '<pre class="codentor_wrap'. esc_attr($codentor_pre_classes).'" data-show-toolbar="'.esc_attr($codentor_show_toolbar).'">'.$codentor_language_check.'<code class="language-'.esc_attr($codentor_language).'">'.$codentor_content.'</code></pre>';	
			///////// For elementor edit page design css in filterable-popup.js
		}else{
			echo '<h1 class="bwd_pro_notice">'.esc_html__('Ohh!!! It\'s ', 'bwd-elementor-addons').'<a href="https://bestwpdeveloper.com/pricing/" target="_blank"><b>'.esc_html__(' PRO...', 'bwd-elementor-addons').'</b></a></h1>';
		}
	}
}