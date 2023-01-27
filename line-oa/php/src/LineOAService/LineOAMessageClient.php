<?php
// GENERATED CODE -- DO NOT EDIT!

namespace LineOAService;

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
     * @param \LineOAService\GetMessageContentRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function GetMessageContent(\LineOAService\GetMessageContentRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/lineOAService.LineOAMessage/GetMessageContent',
        $argument,
        ['\LineOAService\GetMessageContentResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \LineOAService\SendMessageRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function SendMessage(\LineOAService\SendMessageRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/lineOAService.LineOAMessage/SendMessage',
        $argument,
        ['\LineOAService\SendMessageResponse', 'decode'],
        $metadata, $options);
    }

}
