<?php

class ffLayoutsEmojiManager extends ffBasicObject {
/**********************************************************************************************************************/
/* OBJECTS
/**********************************************************************************************************************/
    /**
     * @var ffWPLayer
     */
    private $_WPLayer = null;

/**********************************************************************************************************************/
/* PRIVATE VARIABLES
/**********************************************************************************************************************/

/**********************************************************************************************************************/
/* CONSTRUCT
/**********************************************************************************************************************/
    public function __construct( ffWPLayer $WPLayer ) {
        $this->_setWPLayer( $WPLayer );
    }
/**********************************************************************************************************************/
/* PUBLIC FUNCTIONS
/**********************************************************************************************************************/
    public function unregisterEmojiAtLayoutAdminScreen() {
        if( $this->_getWPLayer()->is_admin() ) {
            $this->_getWPLayer()->add_action('admin_print_scripts', array( $this, 'actAdminPrintScripts' ), 1);
        }
    }
    public function actAdminPrintScripts() {
        $currentScreen = $this->_getWPLayer()->get_current_screen();
        $currentScreenId = $currentScreen->id;

        if( strpos( $currentScreenId, 'ff-layout') !== false || strpos( get_page_template(), 'page-onepage') !== false || $currentScreenId == 'page' ) {
            $this->_unregisterEmoji();
        }
    }
/**********************************************************************************************************************/
/* PUBLIC PROPERTIES
/**********************************************************************************************************************/

/**********************************************************************************************************************/
/* PRIVATE FUNCTIONS
/**********************************************************************************************************************/
    private function _unregisterEmoji() {
         remove_action( 'admin_print_scripts', 'print_emoji_detection_script' );
    }
/**********************************************************************************************************************/
/* PRIVATE GETTERS & SETTERS
/**********************************************************************************************************************/
    /**
     * @return ffWPLayer
     */
    private function _getWPLayer()
    {
        return $this->_WPLayer;
    }

    /**
     * @param ffWPLayer $WPLayer
     */
    private function _setWPLayer($WPLayer)
    {
        $this->_WPLayer = $WPLayer;
    }
}