# grpc-proto
for generate proto-file
- install protoc (protovol buffer) compiler
https://github.com/protocolbuffers/protobuf/releases

Quick start following by: 
https://grpc.io/docs/languages/go/quickstart/

Regenerate .proto file (Golang)
`protoc --go_out=. --go_opt=paths=source_relative \
    --go-grpc_out=. --go-grpc_opt=paths=source_relative \
    line-oa/service.proto`