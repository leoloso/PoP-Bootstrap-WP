<?php
require_once dirname(__FILE__).'/functions.php';

/**
 * Create the .env configuration files with default values for DEV/PROD environments
 */
addEnvVariablesToConfigFile([
    // PROD
    'USE_COMPONENT_MODEL_CACHE' => true,
    'ENABLE_EXTRA_ROUTES_BY_PARAMS' => false,
    'DISABLE_CUSTOM_CMS_CODE' => false,
    'ENABLE_CONFIG_BY_PARAMS' => false,
    'ENABLE_VERSION_BY_PARAMS' => false,
    'DISABLE_API' => false,
    'DISABLE_REST_API' => false,
    'DISABLE_GRAPHQL_API' => false,
    'EXTERNAL_SITES_RUN_SAME_SOFTWARE' => false,
    'ENABLE_SHOW_LOGS' => false,
    'REMOVE_FIELD_IF_DIRECTIVE_FAILED' => false,
    'STOP_DIRECTIVE_PIPELINE_EXECUTION_IF_DIRECTIVE_FAILED' => false,
    'DEFAULT_FEATURED_IMAGE_ID' => 0,
    'GOOGLE_TRANSLATE_API_KEY' => '',
    'DISABLE_CACHE_CONTROL' => false,
    'DEFAULT_CACHE_CONTROL_MAX_AGE' => 3600,
    'DISABLE_GUZZLE_OPERATORS' => false,
    'USE_PRIVATE_SCHEMA_MODE' => false,
    'DISABLE_GRAPHQL_API_FOR_POP' => false,
    'ADD_GLOBAL_FIELDS_TO_SCHEMA' => false,
    'ADD_SELF_FIELD_TO_SCHEMA' => false,
    'ADD_FULLSCHEMA_FIELD_TO_SCHEMA' => false,
    'ADD_SYSTEM_DIRECTIVES_TO_SCHEMA' => false,
    'ADD_EXTENDED_GRAPHQL_DIRECTIVES_TO_SCHEMA' => false,
    'USER_MUST_BE_LOGGED_IN_TO_TRANSLATE' => false,
    'ROLE_USER_MUST_HAVE_TO_TRANSLATE' => false,
    'ENABLE_SEMANTIC_VERSIONING_CONSTRAINTS_FOR_FIELDS' => false,
    'ADD_VERSION_TO_SCHEMA_FIELD_DESCRIPTION' => true,
], [
    // DEV
    'USE_COMPONENT_MODEL_CACHE' => false,
    'ENABLE_EXTRA_ROUTES_BY_PARAMS' => false,
    'DISABLE_CUSTOM_CMS_CODE' => false,
    'ENABLE_CONFIG_BY_PARAMS' => false,
    'ENABLE_VERSION_BY_PARAMS' => false,
    'DISABLE_API' => false,
    'DISABLE_REST_API' => false,
    'DISABLE_GRAPHQL_API' => false,
    'EXTERNAL_SITES_RUN_SAME_SOFTWARE' => false,
    'ENABLE_SHOW_LOGS' => true,
    'REMOVE_FIELD_IF_DIRECTIVE_FAILED' => false,
    'STOP_DIRECTIVE_PIPELINE_EXECUTION_IF_DIRECTIVE_FAILED' => false,
    'DEFAULT_FEATURED_IMAGE_ID' => 0,
    'GOOGLE_TRANSLATE_API_KEY' => '',
    'DISABLE_CACHE_CONTROL' => false,
    'DEFAULT_CACHE_CONTROL_MAX_AGE' => 3600,
    'DISABLE_GUZZLE_OPERATORS' => false,
    'USE_PRIVATE_SCHEMA_MODE' => false,
    'DISABLE_GRAPHQL_API_FOR_POP' => false,
    'ADD_GLOBAL_FIELDS_TO_SCHEMA' => false,
    'ADD_SELF_FIELD_TO_SCHEMA' => false,
    'ADD_FULLSCHEMA_FIELD_TO_SCHEMA' => false,
    'ADD_SYSTEM_DIRECTIVES_TO_SCHEMA' => false,
    'ADD_EXTENDED_GRAPHQL_DIRECTIVES_TO_SCHEMA' => false,
    'USER_MUST_BE_LOGGED_IN_TO_TRANSLATE' => false,
    'ROLE_USER_MUST_HAVE_TO_TRANSLATE' => false,
    'ENABLE_SEMANTIC_VERSIONING_CONSTRAINTS_FOR_FIELDS' => false,
    'ADD_VERSION_TO_SCHEMA_FIELD_DESCRIPTION' => true,
]);
