<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: riak_yokozuna.proto

namespace Basho\Riak\Api\Pb\Message;

use Google\Protobuf\Internal\DescriptorPool;
use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

class RpbYokozunaIndex extends \Google\Protobuf\Internal\Message
{
    private $name = '';
    private $schema = '';
    private $n_val = 0;

    public function getName()
    {
        return $this->name;
    }

    public function setName($var)
    {
        GPBUtil::checkString($var, False);
        $this->name = $var;
    }

    public function getSchema()
    {
        return $this->schema;
    }

    public function setSchema($var)
    {
        GPBUtil::checkString($var, False);
        $this->schema = $var;
    }

    public function getNVal()
    {
        return $this->n_val;
    }

    public function setNVal($var)
    {
        GPBUtil::checkUint32($var);
        $this->n_val = $var;
    }

}

class RpbYokozunaIndexGetReq extends \Google\Protobuf\Internal\Message
{
    private $name = '';

    public function getName()
    {
        return $this->name;
    }

    public function setName($var)
    {
        GPBUtil::checkString($var, False);
        $this->name = $var;
    }

}

class RpbYokozunaIndexGetResp extends \Google\Protobuf\Internal\Message
{
    private $index;

    public function getIndex()
    {
        return $this->index;
    }

    public function setIndex(&$var)
    {
        GPBUtil::checkRepeatedField($var, GPBType::MESSAGE, \Basho\Riak\Api\Pb\Message\RpbYokozunaIndex::class);
        $this->index = $var;
    }

}

class RpbYokozunaIndexPutReq extends \Google\Protobuf\Internal\Message
{
    private $index = null;
    private $timeout = 0;

    public function getIndex()
    {
        return $this->index;
    }

    public function setIndex(&$var)
    {
        GPBUtil::checkMessage($var, \Basho\Riak\Api\Pb\Message\RpbYokozunaIndex::class);
        $this->index = $var;
    }

    public function getTimeout()
    {
        return $this->timeout;
    }

    public function setTimeout($var)
    {
        GPBUtil::checkUint32($var);
        $this->timeout = $var;
    }

}

class RpbYokozunaIndexDeleteReq extends \Google\Protobuf\Internal\Message
{
    private $name = '';

    public function getName()
    {
        return $this->name;
    }

    public function setName($var)
    {
        GPBUtil::checkString($var, False);
        $this->name = $var;
    }

}

class RpbYokozunaSchema extends \Google\Protobuf\Internal\Message
{
    private $name = '';
    private $content = '';

    public function getName()
    {
        return $this->name;
    }

    public function setName($var)
    {
        GPBUtil::checkString($var, False);
        $this->name = $var;
    }

    public function getContent()
    {
        return $this->content;
    }

    public function setContent($var)
    {
        GPBUtil::checkString($var, False);
        $this->content = $var;
    }

}

class RpbYokozunaSchemaPutReq extends \Google\Protobuf\Internal\Message
{
    private $schema = null;

    public function getSchema()
    {
        return $this->schema;
    }

    public function setSchema(&$var)
    {
        GPBUtil::checkMessage($var, \Basho\Riak\Api\Pb\Message\RpbYokozunaSchema::class);
        $this->schema = $var;
    }

}

class RpbYokozunaSchemaGetReq extends \Google\Protobuf\Internal\Message
{
    private $name = '';

    public function getName()
    {
        return $this->name;
    }

    public function setName($var)
    {
        GPBUtil::checkString($var, False);
        $this->name = $var;
    }

}

class RpbYokozunaSchemaGetResp extends \Google\Protobuf\Internal\Message
{
    private $schema = null;

    public function getSchema()
    {
        return $this->schema;
    }

    public function setSchema(&$var)
    {
        GPBUtil::checkMessage($var, \Basho\Riak\Api\Pb\Message\RpbYokozunaSchema::class);
        $this->schema = $var;
    }

}

$pool = DescriptorPool::getGeneratedPool();

$pool->internalAddGeneratedFile(hex2bin(
    "0ac5050a137269616b5f796f6b6f7a756e612e70726f746f121962617368" .
    "6f2e7269616b2e6170692e70622e6d657373616765223f0a10527062596f" .
    "6b6f7a756e61496e646578120c0a046e616d6518012001280c120e0a0673" .
    "6368656d6118022001280c120d0a056e5f76616c18032001280d22260a16" .
    "527062596f6b6f7a756e61496e646578476574526571120c0a046e616d65" .
    "18012001280c22550a17527062596f6b6f7a756e61496e64657847657452" .
    "657370123a0a05696e64657818012003280b322b2e626173686f2e726961" .
    "6b2e6170692e70622e6d6573736167652e527062596f6b6f7a756e61496e" .
    "64657822650a16527062596f6b6f7a756e61496e64657850757452657112" .
    "3a0a05696e64657818012001280b322b2e626173686f2e7269616b2e6170" .
    "692e70622e6d6573736167652e527062596f6b6f7a756e61496e64657812" .
    "0f0a0774696d656f757418022001280d22290a19527062596f6b6f7a756e" .
    "61496e64657844656c657465526571120c0a046e616d6518012001280c22" .
    "320a11527062596f6b6f7a756e61536368656d61120c0a046e616d651801" .
    "2001280c120f0a07636f6e74656e7418022001280c22570a17527062596f" .
    "6b6f7a756e61536368656d61507574526571123c0a06736368656d611801" .
    "2001280b322c2e626173686f2e7269616b2e6170692e70622e6d65737361" .
    "67652e527062596f6b6f7a756e61536368656d6122270a17527062596f6b" .
    "6f7a756e61536368656d61476574526571120c0a046e616d651801200128" .
    "0c22580a18527062596f6b6f7a756e61536368656d614765745265737012" .
    "3c0a06736368656d6118012001280b322c2e626173686f2e7269616b2e61" .
    "70692e70622e6d6573736167652e527062596f6b6f7a756e61536368656d" .
    "6142290a17636f6d2e626173686f2e7269616b2e70726f746f627566420e" .
    "5269616b596f6b6f7a756e615042620670726f746f33"
));
