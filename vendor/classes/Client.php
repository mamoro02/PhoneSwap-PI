<?php

class Client
{
    private int $idClient;
    private int $accountName;
    private string $email;
    private string $password;
    private string $clientName;
    private string $sureName;
    private string $phoneNumber;

    public function __construct(int $idClient, int $accountName, string $email, string $password, string $clientName, string $sureName, string $phoneNumber)
    {
        $this->idClient = $idClient;
        $this->accountName = $accountName;
        $this->email = $email;
        $this->password = $password;
        $this->clientName = $clientName;
        $this->sureName = $sureName;
        $this->phoneNumber = $phoneNumber;
    }

    

    /**
     * Get the value of idClient
     */ 
    public function getIdClient()
    {
        return $this->idClient;
    }

    /**
     * Get the value of accountName
     */ 
    public function getAccountName()
    {
        return $this->accountName;
    }

    /**
     * Get the value of email
     */ 
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Get the value of password
     */ 
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * Get the value of clientName
     */ 
    public function getClientName()
    {
        return $this->clientName;
    }

    /**
     * Get the value of sureName
     */ 
    public function getSureName()
    {
        return $this->sureName;
    }

    /**
     * Get the value of phoneNumber
     */ 
    public function getPhoneNumber()
    {
        return $this->phoneNumber;
    }
}
