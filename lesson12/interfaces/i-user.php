<?php

interface UserInterface
{
    public function getRole() :string;
    public function getPassword() :string;
    public function getIdentifier() :string;
}