<?php

namespace Zingeon\ArcsecondLaravel\API;


class Auth extends API
{

    public function login($password, $email = null, $username = null) {
        $params = [];
        if(!is_null($email)) {
            $params['form_params']['email'] = $email;
        }

        if(!is_null($username)) {
            $params['form_params']['username'] = $username;
        }

        $params['form_params']['password'] = $password;

        return $this->_post('auth/login/', $params);
    }

    public function logout() {
        return $this->_post('auth/logout/');
    }

    public function resetPassword($email) {

        $params['form_params']['email'] = $email;

        return $this->_post('auth/password/reset/', $params);
    }

    public function confirmResetPassword($newPassword, $repeatNewPassword, $uid, $token) {
        $params = [];

        $params['form_params']['new_password1'] = $newPassword;
        $params['form_params']['new_password2'] = $repeatNewPassword;
        $params['form_params']['uid'] = $uid;
        $params['form_params']['token'] = $token;

        return $this->_post('auth/password/reset/confirm/', $params);
    }

    public function signup($email, $username, $password, $repeatPassword) {
        $params = [];

        $params['form_params']['password1'] = $password;
        $params['form_params']['password2'] = $repeatPassword;
        $params['form_params']['email'] = $email;
        $params['form_params']['username'] = $username;

        return $this->_post('auth/registration/', $params);
    }

    public function signupVerifyEmail($key) {

        $params['form_params']['key'] = $key;

        return $this->_post('auth/registration/verify-email/', $params);
    }

    public function verifyTokenMembership() {
        return $this->_post('auth/token-membership-verify/');
    }

    public function verifyToken() {
        return $this->_post('auth/token-verify/');
    }

    public function token($username, $password) {
        $params = [];

        $params['form_params']['username'] = $username;
        $params['form_params']['password'] = $password;
        return $this->_post('auth/token/', $params);
    }
}
