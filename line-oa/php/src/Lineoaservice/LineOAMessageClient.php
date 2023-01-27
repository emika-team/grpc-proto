<?php
// GENERATED CODE -- DO NOT EDIT!

namespace Lineoaservice;

/**
 */
class LineOAMessageClient extends \Grpc\BaseStub {

    /**
     * @param string $hostname hostname
     * @param array $opts channel options
     * @param \Grpc\Channel $channel (optional) re-use channel object
     */
    public function __construct($hostname, $opts, $channel = null) {
        parent::__construct($hostname, $opts, $channel);
    }

    /**
     * @param \Lineoaservice\GetMessageContentRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function GetMessageContent(\Lineoaservice\GetMessageContentRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/lineoaservice.LineOAMessage/GetMessageContent',
        $argument,
        ['\Lineoaservice\GetMessageContentResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Lineoaservice\SendMessageRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function SendMessage(\Lineoaservice\SendMessageRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/lineoaservice.LineOAMessage/SendMessage',
        $argument,
        ['\Lineoaservice\SendMessageResponse', 'decode'],
        $metadata, $options);
    }

}
