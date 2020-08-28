<?php


interface InterfaceRule
{
    public function check(...$args): bool;
}