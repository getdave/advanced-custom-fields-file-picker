<?php

namespace ACFFilePicker;

use \ACFFilePicker\Field;
use \Mockery;
use \phpmock\mockery\PHPMockery;

/**
 * acf_render_field_setting global overide
 *
 * works because we're in the same namespace
 */
function acf_render_field_setting($field, $args) {
    return ACF_File_Picker_Test::$functions->acf_render_field_setting($field, $args);
}


class ACF_File_Picker_Test extends \PHPUnit_Framework_TestCase {

	/**
	 * Mocked Global Functions
	 */
	public static $functions;


	public function setUp() {
    	self::$functions = Mockery::mock();
    }

	public function tearDown() {
        // see Mockery's documentation for why we do this
        Mockery::close();
    }


	public function test_it_has_correct_defaults_set() {

		// create field
		$subject = new Field();		
		$this->assertEquals( $subject->name, "file_picker" );
		$this->assertEquals( $subject->label, "File Picker" );
		$this->assertEquals( $subject->category, "choice" );
		
	}

	
	public function test_it_creates_field_settings() {
	
		
		$field_stub = array(
			'type' 		=> 'file_picker',
			'prefix' 	=> 'foobar'
		);		


		self::$functions->shouldReceive('acf_render_field_setting')
			->with( $field_stub, Mockery::subset( array( 
				'label'			=> __('File Location','acf-file_picker'),
				'type' 			=> 'text',
				'name' 			=> 'file_location'
			) ) )
			->once();

		self::$functions->shouldReceive('acf_render_field_setting')
			->with( $field_stub, Mockery::subset( array( 
				'label'				=> __('File Glob Pattern','acf-file_picker'),
				'type' 				=> 'text',
				'name' 				=> 'file_glob'
			) ) )
			->once();
		
		
		$subject = new Field();		 
		$subject->render_field_settings($field_stub);		
		
	}

	/*
	public function test_it_renders_field_html() {
			$subject = new Field();	
			$subjec->render_field();	 
		}
	*/
	
	
}