<?php
    
    class Pages extends Controller {
        public function Pages() {
            parent::Controller();
        }

        public function index() {
            $data = array(
                'title' => 'Home',
                'page' => 'pages/index'
            );

            $this->load->view( 'index', $data );
        }

        public function carry() {
            if ( !empty( $_GET['attachments'] ) ) {
                $JSON = rawurldecode( base64_decode( $_GET['attachments'] ) );
                $fileList = json_decode( $JSON, true );
                $files = $fileList['files'];
                $uid = $fileList['uid'];
            } else {
                $this->_unknown( 'carry_error' );
                return;
            }

            $data = array(
                'title' => 'Attachments',
                'page' => 'pages/carry',
                'files' => $files,
                'uid' => $uid
            );

            $this->load->view( 'index', $data );
        }

        // will be called if the user's request is invalid in the context of this 
        // controller
        public function _unknown( $request ) {
            $data = array(
                'title' => 'Not found',
                'page' => 'pages/not-found'
            );

            $this->load->view( 'index', $data );
        }

    }

