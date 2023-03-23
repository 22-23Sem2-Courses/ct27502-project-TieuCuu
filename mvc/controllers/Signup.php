<?php
class Signup extends Controller
{
    public $UserModel;

    function __construct()
    {
        $this->UserModel = $this->model('UserModel');
    }

    public function SayHi()
    {
        $this->view('master2', ['page' => 'signup']);
    }

    public function NewReg()
    {
        //1. get data KH nhập
        // if (isset($_POST["btnSignup"])) {
        //     $firstname = $_POST["firstname"];
        //     $username = $_POST["username"];
        //     $email = $_POST["email"];
        //     $password = $_POST["password"];
        //     $password = password_hash($password, PASSWORD_DEFAULT);
        //     $password_confirm = $_POST["password_confirm"];
        //     $terms = $_POST["terms"];
        // }
        if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['btnSignup'])) {

            // Sanitize POST data
            $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_SPECIAL_CHARS);

            $data = [
                'firstname' => trim($_POST['firstname']),
                'username' => trim($_POST['username']),
                'email' => trim($_POST['email']),
                'password' => trim($_POST['password']),
                'confirmPassword' => trim($_POST['confirmPassword']),
                'firstnameError' => '',
                'usernameError' => '',
                'emailError' => '',
                'passwordError' => '',
                'confirmPasswordError' => ''
            ];

            //print_r($data);

            $firstnameValidation = "/^[\p{L}'][ \p{L}'-]*[\p{L}]$/u";
            $nameValidation = "/^[a-zA-Z0-9]*$/";
            $passwordValidation = "/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[@$!%*?&])[A-Za-z\d@$!%*?&]{8,}$/";

            //Validate firstname
            if (empty($data['firstname'])) {
                $data['firstnameError'] = 'Please enter firstname.';
            } else if (!preg_match($firstnameValidation, $data['firstname'])) {
                $data['firstnameError'] = 'Invalid firstname.';
            }

            echo $firstnameValidation;
            echo preg_match($firstnameValidation, $data['firstname']);
            echo $data['firstname'];
            echo $data['firstnameError'];

            //Validate username on letters/numbers
            if (empty($data['username'])) {
                $data['usernameError'] = 'Please enter username.';
            } else if (!preg_match($nameValidation, $data['username'])) {
                $data['usernameError'] = 'Name can only contain letters and numbers.';
            }

            echo $data['username'];
            echo $data['usernameError'];

            //Validate email
            if (empty($data['email'])) {
                $data['emailError'] = 'Please enter email address.';
            } elseif (!filter_var($data['email'], FILTER_VALIDATE_EMAIL)) {
                $data['emailError'] = 'Please enter the correct format.';
            } else {
                //Check if email exist in database
                if ($this->UserModel->findUserByEmail($data['email'])) {
                    $data['emailError'] = 'Email is already taken.';
                }
            }

            //Validate password on length, numeric values
            if (empty($data['password'])) {
                $data['passwordError'] = 'Please enter password.';
            } elseif (strlen($data['password']) < 8) {
                $data['passwordError'] = 'Password must be at least 8 characters';
            } else if (!preg_match($passwordValidation, $data['password'])) {
                $data['passwordError'] = 'Password must be have at least one uppercase letter, one lowercase letter, one number and one special character.';
            }

            echo $data['passwordError'];


            //Validate password confirm
            if (empty($data['confirmPassword'])) {
                $data['confirmPasswordError'] = 'Please enter password.';
            } else {
                if ($data['password'] !== $data['confirmPassword']) {
                    $data['confirmPasswordError'] = 'Passwords do not match, please try again.';
                }
            }

            echo $data['password'];
            echo $data['confirmPassword'];
            echo $data['confirmPasswordError'];

            //make sure that errors are empty
            if (empty($data['firstnameError']) && empty($data['usernameError']) && empty($data['emailError']) && empty($data['passwordError']) && empty($data['confirmPasswordError'])) {

                $data['password'] = password_hash($data['password'], PASSWORD_DEFAULT);
            }
        }


        //2. insert vào bảng database
        //$result = $this->UserModel->InsertNewUser($firstname, $username, $email, $password);
        if ($this->UserModel->InsertNewUser($data)) {
        }




        //3. Show "OK/Fail" ra màn hình
        // $this->view("master2", [
        //     "page" => "signup",
        //     "result" => $result
        // ]);
    }
}
