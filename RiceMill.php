<html>
    <head>
        <meta charset="UTF-8">
        <title>Shakuni Pvt Ltd</title>
    </head>
    <body>
        <?php

        class RiceMill {

            private static $customers = array();
            private static $suppliers = array();
            private static $employees = array();
            private static $stocks = array();
            private static $admin;

            public static function getCustomerList() {
                return $this->customers;
            }

            public static function getSupplierList() {
                return $this->suppliers;
            }

            public static function getEmployeeList() {
                return $this->employees;
            }

            public static function getStocks() {
                return $this->stocks;
            }

            public static function getAdmin() {
                
            }

        }

        
        ?>
    </body>
</html>
