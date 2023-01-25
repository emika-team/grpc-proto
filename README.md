# GRPC-proto
Install protoc (protovol buffer) compiler
- https://github.com/protocolbuffers/protobuf/releases

Quick start following by: 
- https://grpc.io/docs/languages/go/quickstart/

Regenerate .proto file (Golang)
```sh
cd line-oa
protoc --go_out=./go --go_opt=paths=source_relative \
--go-grpc_out=./go --go-grpc_opt=paths=source_relative \
service.proto
```

Regenerate .proto file (PHP)
```sh
protoc --proto_path=line-oa   --php_out=line-oa/php   --grpc_out=line-oa/php   --plugin=protoc-gen-grpc=/home/chi2oma/protoc-21.12-linux-x86_64/bin/grpc_php_plugin   ./line-oa/service.proto
```
> Note: Install `--plugin=protoc-gen-grpc=bins/opt/grpc_php_plugin` : https://github.com/grpc/grpc/blob/v1.50.0/src/php/README.md
