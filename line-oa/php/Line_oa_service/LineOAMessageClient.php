<?php
// GENERATED CODE -- DO NOT EDIT!

namespace Line_oa_service;

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
     * @param \Line_oa_service\GetMessageContentRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function GetMessageContent(\Line_oa_service\GetMessageContentRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/line_oa_service.LineOAMessage/GetMessageContent',
        $argument,
        ['\Line_oa_service\GetMessageContentResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Line_oa_service\SendMessageRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function SendMessage(\Line_oa_service\SendMessageRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/line_oa_service.LineOAMessage/SendMessage',
        $argument,
        ['\Line_oa_service\SendMessageResponse', 'decode'],
        $metadata, $options);
    }

}
