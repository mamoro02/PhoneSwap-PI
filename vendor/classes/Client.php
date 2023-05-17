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
}
