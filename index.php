

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>

    <title>Output</title>
</head>
<body>
    <?php
        $person = new FormInfoClass();
        $person->setFirstName($_POST["fname"]);
        $person->setLastName($_POST["lname"]);
        $person->setMiddleInitial($_POST["mi"]);
        $person->setAge($_POST["age"]);
        $person->setContactNo($_POST["contact"]);
        $person->setEmail($_POST["email"]); 
        $person->setAddress($_POST["address"]);

    ?>
    <div class="max-w-md mx-auto bg-white shadow-md rounded-lg overflow-hidden mt-6 p-6">
        <h2 class="text-xl font-bold text-gray-800 mb-4 text-center">Person Information</h2>
        <div class="space-y-2">
            <div class="flex gap-3">
                <span class="font-medium text-gray-600">First Name:</span>
                <span class="text-gray-800"><?php echo htmlspecialchars($person->getFirstName()); ?></span>
            </div>
            <div class="flex gap-3">
                <span class="font-medium text-gray-600">Last Name:</span>
                <span class="text-gray-800"><?php echo htmlspecialchars($person->getLastName()); ?></span>
            </div>
            <div class="flex gap-3">
                <span class="font-medium text-gray-600">Middle Initial:</span>
                <span class="text-gray-800"><?php echo htmlspecialchars($person->getMiddleInitial()); ?></span>
            </div>
            <div class="flex gap-3">
                <span class="font-medium text-gray-600">Age:</span>
                <span class="text-gray-800"><?php echo htmlspecialchars($person->getAge()); ?></span>
            </div>
            <div class="flex gap-3">
                <span class="font-medium text-gray-600">Contact Number:</span>
                <span class="text-gray-800"><?php echo htmlspecialchars($person->getContactNo()); ?></span>
            </div>
            <div class="flex gap-3">
                <span class="font-medium text-gray-600">Email:</span>
                <span class="text-gray-800"><?php echo htmlspecialchars($person->getEmail()); ?></span>
            </div>
            <div class="flex gap-3">
                <span class="font-medium text-gray-600">Address:</span>
                <span class="text-gray-800"><?php echo htmlspecialchars($person->getAddress()); ?></span>
            </div>
        </div>
    </div>
</body>
</html>
<?php
    class FormInfoClass{
        private $last_name;
        private $first_name;
        private $middle_initial;
        private $age;
        private $contact_no;
        private $email;
        private $address;
        
        // Getter and Setter for last_name
        public function getLastName() {
            return $this->last_name;
        }

        public function setLastName($last_name) {
            $this->last_name = $last_name;
        }

        // Getter and Setter for first_name
        public function getFirstName() {
            return $this->first_name;
        }

        public function setFirstName($first_name) {
            $this->first_name = $first_name;
        }

        // Getter and Setter for middle_initial
        public function getMiddleInitial() {
            return $this->middle_initial;
        }

        public function setMiddleInitial($middle_initial) {
            $this->middle_initial = $middle_initial;
        }

        // Getter and Setter for age
        public function getAge() {
            return $this->age;
        }

        public function setAge($age) {
            $this->age = $age;
        }

        // Getter and Setter for contact_no
        public function getContactNo() {
            return $this->contact_no;
        }

        public function setContactNo($contact_no) {
            $this->contact_no = $contact_no;
        }

        // Getter and Setter for email
        public function getEmail() {
            return $this->email;
        }

        public function setEmail($email) {
            $this->email = $email;
        }

        // Getter and Setter for address
        public function getAddress() {
            return $this->address;
        }

        public function setAddress($address) {
            $this->address = $address;
        }
    }
?>