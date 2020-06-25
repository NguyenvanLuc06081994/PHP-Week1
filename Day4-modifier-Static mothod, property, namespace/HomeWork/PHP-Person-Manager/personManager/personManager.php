
<?php

    class EmployeeManager{
        private $employees;

        public function __construct()
        {
            $this->employees = [];
        }

        public function add($employee)
        {
            array_push($this->employees,$employee);
        }

        public function getEmployee()
        {
            return $this->employees;
        }

        public function display()

        {
            echo "<table>";
            echo "<tr>";
            echo "<th>Ho</th>";
            echo "<th>ten</th>";
            echo "<th>ngay thang nam sinh</th>";
            echo "<th>dia chi</th>";
            echo "<th>vi tri</th>";
            echo "</tr>";
            foreach ($this->employees as $key => $employee){
                echo "<tr>";
                echo "<td>".$employee->getSurname()."</td>";
                echo "<td>".$employee->getName()."</td>";
                echo "<td>".$employee->getBirth()."</td>";
                echo "<td>".$employee->getAddress()."</td>";
                echo "<td>".$employee->getPosition()."</td>";
                echo "</tr>";
            }
            echo "</table>";
        }
        public function editEmployee($employee,$surname,$name,$birth,$address,$position)
        {
            $employee->setSurname($surname);
            $employee->setName($name);
            $employee->setBirth($birth);
            $employee->setAddress($address);
            $employee->setPosition($position);

        }


}


