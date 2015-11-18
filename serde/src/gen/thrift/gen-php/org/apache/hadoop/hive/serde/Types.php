<?php
namespace org\apache\hadoop\hive\serde;

/**
 * Autogenerated by Thrift Compiler (0.9.0)
 *
 * DO NOT EDIT UNLESS YOU ARE SURE THAT YOU KNOW WHAT YOU ARE DOING
 *  @generated
 */
use Thrift\Base\TBase;
use Thrift\Type\TType;
use Thrift\Type\TMessageType;
use Thrift\Exception\TException;
use Thrift\Exception\TProtocolException;
use Thrift\Protocol\TProtocol;
use Thrift\Exception\TApplicationException;


$GLOBALS['serde_CONSTANTS']['SERIALIZATION_LIB'] = "serialization.lib";

$GLOBALS['serde_CONSTANTS']['SERIALIZATION_CLASS'] = "serialization.class";

$GLOBALS['serde_CONSTANTS']['SERIALIZATION_FORMAT'] = "serialization.format";

$GLOBALS['serde_CONSTANTS']['SERIALIZATION_DDL'] = "serialization.ddl";

$GLOBALS['serde_CONSTANTS']['SERIALIZATION_NULL_FORMAT'] = "serialization.null.format";

$GLOBALS['serde_CONSTANTS']['SERIALIZATION_LAST_COLUMN_TAKES_REST'] = "serialization.last.column.takes.rest";

$GLOBALS['serde_CONSTANTS']['SERIALIZATION_SORT_ORDER'] = "serialization.sort.order";

$GLOBALS['serde_CONSTANTS']['SERIALIZATION_USE_JSON_OBJECTS'] = "serialization.use.json.object";

$GLOBALS['serde_CONSTANTS']['SERIALIZATION_ENCODING'] = "serialization.encoding";

$GLOBALS['serde_CONSTANTS']['FIELD_DELIM'] = "field.delim";

$GLOBALS['serde_CONSTANTS']['COLLECTION_DELIM'] = "colelction.delim";

$GLOBALS['serde_CONSTANTS']['LINE_DELIM'] = "line.delim";

$GLOBALS['serde_CONSTANTS']['MAPKEY_DELIM'] = "mapkey.delim";

$GLOBALS['serde_CONSTANTS']['QUOTE_CHAR'] = "quote.delim";

$GLOBALS['serde_CONSTANTS']['ESCAPE_CHAR'] = "escape.delim";

$GLOBALS['serde_CONSTANTS']['HEADER_COUNT'] = "skip.header.line.count";

$GLOBALS['serde_CONSTANTS']['FOOTER_COUNT'] = "skip.footer.line.count";

$GLOBALS['serde_CONSTANTS']['VOID_TYPE_NAME'] = "void";

$GLOBALS['serde_CONSTANTS']['BOOLEAN_TYPE_NAME'] = "boolean";

$GLOBALS['serde_CONSTANTS']['TINYINT_TYPE_NAME'] = "tinyint";

$GLOBALS['serde_CONSTANTS']['SMALLINT_TYPE_NAME'] = "smallint";

$GLOBALS['serde_CONSTANTS']['INT_TYPE_NAME'] = "int";

$GLOBALS['serde_CONSTANTS']['BIGINT_TYPE_NAME'] = "bigint";

$GLOBALS['serde_CONSTANTS']['FLOAT_TYPE_NAME'] = "float";

$GLOBALS['serde_CONSTANTS']['DOUBLE_TYPE_NAME'] = "double";

$GLOBALS['serde_CONSTANTS']['STRING_TYPE_NAME'] = "string";

$GLOBALS['serde_CONSTANTS']['CHAR_TYPE_NAME'] = "char";

$GLOBALS['serde_CONSTANTS']['VARCHAR_TYPE_NAME'] = "varchar";

$GLOBALS['serde_CONSTANTS']['DATE_TYPE_NAME'] = "date";

$GLOBALS['serde_CONSTANTS']['DATETIME_TYPE_NAME'] = "datetime";

$GLOBALS['serde_CONSTANTS']['TIMESTAMP_TYPE_NAME'] = "timestamp";

$GLOBALS['serde_CONSTANTS']['DECIMAL_TYPE_NAME'] = "decimal";

$GLOBALS['serde_CONSTANTS']['BINARY_TYPE_NAME'] = "binary";

$GLOBALS['serde_CONSTANTS']['LIST_TYPE_NAME'] = "array";

$GLOBALS['serde_CONSTANTS']['MAP_TYPE_NAME'] = "map";

$GLOBALS['serde_CONSTANTS']['STRUCT_TYPE_NAME'] = "struct";

$GLOBALS['serde_CONSTANTS']['UNION_TYPE_NAME'] = "uniontype";

$GLOBALS['serde_CONSTANTS']['LIST_COLUMNS'] = "columns";

$GLOBALS['serde_CONSTANTS']['LIST_COLUMN_TYPES'] = "columns.types";

$GLOBALS['serde_CONSTANTS']['TIMESTAMP_FORMATS'] = "timestamp.formats";

$GLOBALS['serde_CONSTANTS']['PrimitiveTypes'] = array(
  "void" => true,
  "boolean" => true,
  "tinyint" => true,
  "smallint" => true,
  "int" => true,
  "bigint" => true,
  "float" => true,
  "double" => true,
  "string" => true,
  "varchar" => true,
  "char" => true,
  "date" => true,
  "datetime" => true,
  "timestamp" => true,
  "decimal" => true,
  "binary" => true,
);

$GLOBALS['serde_CONSTANTS']['CollectionTypes'] = array(
  "array" => true,
  "map" => true,
);

$GLOBALS['serde_CONSTANTS']['IntegralTypes'] = array(
  "tinyint" => true,
  "smallint" => true,
  "int" => true,
  "bigint" => true,
);


