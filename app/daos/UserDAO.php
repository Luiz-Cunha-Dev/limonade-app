<?php 

namespace app\daos;

use app\models\UserModel;
use Exception;

/**
 * User DAO
 * 
 * Responsible for reading and writing data of user entity
 * 
 * @package app\daos
 */ 
class UserDao extends AbstractDAO {

    /**
     * Get all users
     * 
     * If it is null, returns an empty array
     * 
     * @return array users
     */
    public function getAllUsers() {

        try {
            $users = parent::getAllElements('user');

            if (empty($user)) {
                return array();
            }

            for ($i=0; $i < count($users); $i++) { 
                $users[$i] = new UserModel($users[$i]['idUser'], $users[$i]['name'], $users[$i]['lastName'], $users[$i]['email'], $users[$i]['nickname'], $users[$i]['password'], $users[$i]['salt'],
                $users[$i]['phone'], $users[$i]['birthDate'], $users[$i]['profilePicture'], $users[$i]['street'], $users[$i]['streetNumber'], $users[$i]['district'], $users[$i]['complement'],
                $users[$i]['postalCode'], $users[$i]['firstAccess'], $users[$i]['idCity'], $users[$i]['idUserType']);
            }

            return $users;
        } catch(Exception $e ) {
            throw $e;
        }

    }

    /**
     * Get a user by id
     * 
     * If it is null, returns an empty array
     * 
     * @param int $idUser id of the user
     * 
     * @return UserModel user
     */
    public function getUserById($idUser){

        try {
            $user = parent::getElementByParameter('user', 'idUser', $idUser);

            if (empty($user)) {
                return array();
            }

            $user = new UserModel($user['idUser'], $user['name'], $user['lastName'], $user['email'], $user['nickname'], $user['password'], 
            $user['phone'], $user['birthDate'], $user['profilePicture'], $user['street'], $user['streetNumber'], $user['district'], $user['complement'],
            $user['postalCode'], $user['firstAccess'], $user['idCity'], $user['idUserType']);

            return $user;
        } catch (Exception $e) {
            throw $e;
        }

    }

    /**
     * Get a user by email
     * 
     * If it is null, returns an empty array
     * 
     * @param string $emailUser email of the user
     * 
     * @return UserModel user
     */
    public function getUserByEmail($emailUser){

        try {
            $user = parent::getElementByParameter('user', 'email', $emailUser);

            if (empty($user)) {
                return array();
            }

            $user = new UserModel($user['idUser'], $user['name'], $user['lastName'], $user['email'], $user['nickname'], $user['password'], 
            $user['phone'], $user['birthDate'], $user['profilePicture'], $user['street'], $user['streetNumber'], $user['district'], $user['complement'],
            $user['postalCode'], $user['firstAccess'], $user['idCity'], $user['idUserType']);

            return $user;
        } catch (Exception $e) {
            throw $e;
        }

    }

    /**
     * Get a user by nickname
     * 
     * If it is null, returns an empty array
     * 
     * @param string $nicknameUser nickname of the user
     * 
     * @return UserModel user
     */
    public function getUserByNickname($nicknameUser){

        try {
            $user = parent::getElementByParameter('user', 'nickname', $nicknameUser);

            if (empty($user)) {
                return array();
            }

            $user = new UserModel($user['idUser'], $user['name'], $user['lastName'], $user['email'], $user['nickname'], $user['password'], 
            $user['phone'], $user['birthDate'], $user['profilePicture'], $user['street'], $user['streetNumber'], $user['district'], $user['complement'],
            $user['postalCode'], $user['firstAccess'], $user['idCity'], $user['idUserType']);

            return $user;
        } catch (Exception $e) {
            throw $e;
        }

    }

    /**
     * Insert an user
     * 
     * @param UserModel user to insert
     * 
     * @return boolean
     */
    public function insertUser($user){

        try {
            $user = $user->toArray();

            // Remove null values 
            
            $user = array_filter($user, function($value) {
                return !empty($value);
            });

            return parent::insertElement('user', $user);
        } catch (Exception $e) {
            throw $e;
        }

    }

    /**
     * Update an user
     * 
     * @param array $dataToUpdate data to insert ( ['columnName' => value] )
     * 
     * @param integer $idUser id of the user
     * 
     * @return boolean
     */
    public function updateUserById($dataToUpdate, $idUser){

        try {
            return parent::updateElementByParameter('user', 'idUser', $idUser, $dataToUpdate);
        } catch (Exception $e) {
            throw $e;
        }

    }

    /**
     * Delete an user
     * 
     * @param integer $idUser id of the user
     * 
     * @return boolean
     */
    public function deleteUserById($idUser){
        
        try {
            return parent::deleteElementByParameter('user', 'idUser', $idUser);
        } catch (Exception $e) {
            throw $e;
        }

    }

}
