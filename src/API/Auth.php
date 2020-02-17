<?php
/**
 * Part of Arcsecond package
 *
 * Auth API
 *
 * @package arcsecond-laravel
 * @author Andrii Pushkar <zingeon1@gmail.com>
 * @access public
 */

namespace Zingeon\ArcsecondLaravel\API;


class Auth extends API
{

    /**
     * Check the credentials and return the REST Token if the credentials are valid and authenticated
     *
     * @param string $password
     * @param string|null $email
     * @param string|null $username
     * @return mixed
     */
    public function login($password, $email = null, $username = null) {
        $params = [];
        if(!is_null($email)) {
            $params['form_params']['email'] = $email;
        }

        if(!is_null($username)) {
            $params['form_params']['username'] = $username;
        }

        $params['form_params']['password'] = $password;

        return $this->post('auth/login/', $params);
    }

    /**
     * Logout: delete the Token object assigned to the current User object
     *
     * @return mixed
     */
    public function logout() {
        return $this->post('auth/logout/');
    }

    /**
     * Request for resetting password
     *
     * @param string $email
     * @return mixed
     */
    public function resetPassword($email) {

        $params['form_params']['email'] = $email;

        return $this->post('auth/password/reset/', $params);
    }

    /**
     * Set the new password after password reset e-mail link is confirmed
     *
     * @param string $newPassword
     * @param string $repeatNewPassword
     * @param string $uid
     * @param string $token
     * @return mixed
     */
    public function confirmResetPassword($newPassword, $repeatNewPassword, $uid, $token) {
        $params = [];

        $params['form_params']['new_password1'] = $newPassword;
        $params['form_params']['new_password2'] = $repeatNewPassword;
        $params['form_params']['uid'] = $uid;
        $params['form_params']['token'] = $token;

        return $this->post('auth/password/reset/confirm/', $params);
    }

    /**
     * Sign up a new user
     *
     * @param string $email
     * @param string $username
     * @param string $password
     * @param string $repeatPassword
     * @return mixed
     */
    public function signup($email, $username, $password, $repeatPassword) {
        $params = [];

        $params['form_params']['password1'] = $password;
        $params['form_params']['password2'] = $repeatPassword;
        $params['form_params']['email'] = $email;
        $params['form_params']['username'] = $username;

        return $this->post('auth/registration/', $params);
    }

    /**
     * Verify sign up operation
     *
     * @param string $key
     * @return mixed
     */

    public function signupVerifyEmail($key) {

        $params['form_params']['key'] = $key;

        return $this->post('auth/registration/verify-email/', $params);
    }

    /**
     * Verify token membership
     *
     * @return mixed
     */
    public function verifyTokenMembership() {
        return $this->post('auth/token-membership-verify/');
    }

    /**
     * Verify token
     *
     * @return mixed
     */
    public function verifyToken() {
        return $this->post('auth/token-verify/');
    }

    /**
     * Get an auth token
     *
     * @param string $username
     * @param string $password
     * @return mixed
     */
    public function token($username, $password) {
        $params = [];

        $params['form_params']['username'] = $username;
        $params['form_params']['password'] = $password;
        return $this->post('auth/token/', $params);
    }
}
