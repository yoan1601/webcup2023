<?php
    defined('BASEPATH') OR exit('No direct script access allowed');

    class DbAccessor_client extends CI_Model {

        public function searchClient($subName) {

            $customer = array();

            $sql = "select * from customer where first_name like '%s%s%s'";

            $sql = sprintf($sql, '%', $subName, '%s');

            $query = $this->db->query($sql);

            foreach($query->result_array() as $row) {
                $customer [] = $row;
            }

            return $customer;
        }

        public function getClient ($id) {

            $sql = 'SELECT * FROM customer WHERE customer_id = %d';

            $sql = sprintf($sql, $id);
            
            $query = $this->db->query($sql);

            $row = $query->row_array();

            return $row;

        }
        
        public function getAllClients () {

            $customer = array();

            $query = $this->db->query('SELECT * FROM customer');

            foreach($query->result_array() as $row) {
                $customer [] = $row;
            }

            return $customer;

        }

        public function getInterClients ($min = 0, $max = 599) {

            $customer = array();

            $sql = 'SELECT * FROM customer WHERE customer_id >= %d and customer_id <= %d';

            $sql = sprintf($sql, $min, $max);

            //echo($max);

            $query = $this->db->query($sql);

            foreach($query->result_array() as $row) {
                $customer [] = $row;
            }

            return $customer;

        }

    }

?>