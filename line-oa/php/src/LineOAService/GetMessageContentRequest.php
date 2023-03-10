<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: service.proto

namespace LineOAService;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>lineOAService.GetMessageContentRequest</code>
 */
class GetMessageContentRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>string messageId = 1;</code>
     */
    protected $messageId = '';
    /**
     * Generated from protobuf field <code>string channelId = 2;</code>
     */
    protected $channelId = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $messageId
     *     @type string $channelId
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Service::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>string messageId = 1;</code>
     * @return string
     */
    public function getMessageId()
    {
        return $this->messageId;
    }

    /**
     * Generated from protobuf field <code>string messageId = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setMessageId($var)
    {
        GPBUtil::checkString($var, True);
        $this->messageId = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string channelId = 2;</code>
     * @return string
     */
    public function getChannelId()
    {
        return $this->channelId;
    }

    /**
     * Generated from protobuf field <code>string channelId = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setChannelId($var)
    {
        GPBUtil::checkString($var, True);
        $this->channelId = $var;

        return $this;
    }

}

