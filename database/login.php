<?php
    class database {
        private $server;
        private $user;
        private $pass;
        private $srvname;

        public function __construct(){
            $this->server = 'localhost';
            $this->user = 'root';
            $this->pass = '';
            $this->srvname = 'monitoreo';
        }

        public function connect (){
            $conn = new mysqli ($this->server,$this->user,$this->pass,$this->srvname);

            return $conn;
        }

    }