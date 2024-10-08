<?php

class CustomerDAO
{

    public function __construct()
    {
    }

    protected function getByEmail($email)
    {
        $sql = 'SELECT * FROM `customer` WHERE email=?';
        $stmt = DB::getInstance()->prepare($sql);
        $stmt->execute([$email]);
        return $stmt->fetchAll(PDO::FETCH_CLASS, "Customer");
    }

    protected function getByCid($cid)
    {
        $sql = 'SELECT * FROM `customer` WHERE `customer`.`cid`=?';
        $stmt = DB::getInstance()->prepare($sql);
        $stmt->execute([$cid]);
        return $stmt->fetchAll(PDO::FETCH_CLASS, "Customer");
    }

    protected function getAll()
    {
        $sql = 'SELECT * FROM `customer`';
        $stmt = DB::getInstance()->prepare($sql);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_CLASS, "Customer");
    }

    protected function insert(Customer $customer)
    {
        $sql = 'INSERT INTO `customer` (`fullname`, `email`, `phone` , `address` , `citycode` , `bday` ,  `password`, ) VALUES (?, ?, ?, ?, ?, ?, ?)';
        $stmt = DB::getInstance()->prepare($sql);
        $exec = $stmt->execute(
            array(
            $customer->getFullName(),
            $customer->getEmail(),
            $customer->getPhone(),
            $customer->getAddress(),
            $customer->getCitycode(),
            $customer->getBday(),
            $customer->getPassword(),
           
            )
        );
        return $exec;
    }

    protected function update(Customer $customer)
    {
        $query = "UPDATE customer SET fullname = :fullname, password = :password, phone = :phone WHERE cid = :cid;";
        $stmt = DB::getInstance()->prepare($query);
        $exec = $stmt->execute([
            'fullname'  => $customer->getFullName(),
            'password'  => $customer->getPassword(),
            'phone'     => $customer->getPhone(),
            'cid'       => $customer->getId()
        ]);
        return $exec;    
    }

    protected function delete(Customer $customer)
    {
        $sql = 'DELETE FROM `customer` WHERE `customer`.`cid` = ?';
        $stmt = DB::getInstance()->prepare($sql);
        $exec = $stmt->execute([$customer->getId()]);
        return $exec;
    }

    /**
     * @param $email
     * @return string 1 if exists, otherwise it returns 0
     */
    protected function isCustomerExists($email) {
        $sql = 'SELECT COUNT(email) AS isEmailExist FROM customer WHERE email = ?';
        $stmt = DB::getInstance()->prepare($sql);
        $stmt->execute([$email]);
        return  (int) $stmt->fetchColumn();
    }

    /**
     * @param $email
     * @return int: 1 if admin email, otherwise 0 (regular customer)
     */
    protected function isAdminCount($email) {
        $sql = 'SELECT COUNT(cid) FROM customer WHERE email = ? AND isadmin = 1';
        $stmt = DB::getInstance()->prepare($sql);
        $stmt->execute([$email]);
        return  (int) $stmt->fetchColumn();
    }
}
