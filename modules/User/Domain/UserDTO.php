<?php
namespace Modules\User\Domain;

final class UserDTO 
{
    protected $id;
    protected $name;
    protected $email;

    public function __construct(int $id, string $name, string $email)
    {
        $this->id = $id;
        $this->name = $name;
        $this->email = $email;
    }

    
}
