<?php

namespace RabbitMQ\Management\Entity;

class Message extends AbstractEntity
{
    public $payload_bytes;
    public $redelivered;
    public $exchange;
    public $routing_key;
    public $message_count;
    public $properties = array();
    public $payload;
    public $payload_encoding;
    
    protected function getJsonParameters()
    {
        return [];
    }
}
