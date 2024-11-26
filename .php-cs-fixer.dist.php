<?php

$finder = (new PhpCsFixer\Finder())
    ->in(__DIR__)
    ->exclude('var')
;

$config = new PhpCsFixer\Config();

return $config
    ->setRiskyAllowed(true)
    ->setRules([
        '@Symfony' => true,
        'align_multiline_comment' => ['comment_type' => 'phpdocs_only'],
        'array_indentation' => true,
        'assign_null_coalescing_to_coalesce_equal' => true,
        'blank_line_between_import_groups' => false,
        'braces_position' => ['allow_single_line_anonymous_functions' => true, 'allow_single_line_empty_anonymous_classes' => true],
        'cast_spaces' => true,
        'combine_consecutive_issets' => true,
        'combine_consecutive_unsets' => true,
        'concat_space' => ['spacing' => 'one'],
        'constant_case' => true,
        'control_structure_braces' => true,
        'control_structure_continuation_position' => ['position' => 'same_line'],
        'declare_equal_normalize' => ['space' => 'single'],
        'declare_parentheses' => true,
        'echo_tag_syntax' => false,
        'empty_loop_body' => true,
        'escape_implicit_backslashes' => true,
        'explicit_indirect_variable' => true,
        'explicit_string_variable' => true,
        'global_namespace_import' => ['import_classes' => true],
        'increment_style' => ['style' => 'post'],
        'is_null' => true,
        'list_syntax' => true,
        'logical_operators' => true,
        'method_chaining_indentation' => true,
        'modernize_strpos' => true,
        'modernize_types_casting' => true,
        'multiline_comment_opening_closing' => true,
        'multiline_whitespace_before_semicolons' => ['strategy' => 'new_line_for_chained_calls'],
        'no_alias_functions' => true,
        'no_extra_blank_lines' => true,
        'no_multiple_statements_per_line' => true,
        'no_superfluous_elseif' => true,
        'no_unneeded_control_parentheses' => ['statements' => ['break', 'continue', 'return', 'yield', 'yield_from']],
        'no_unneeded_final_method' => true,
        'no_useless_concat_operator' => false,
        'no_useless_else' => true,
        'no_useless_return' => true,
        'no_useless_sprintf' => true,
        'nullable_type_declaration_for_default_null_value' => true,
        'operator_linebreak' => true,
        'ordered_imports' => true,
        'ordered_traits' => true,
        'php_unit_construct' => true,
        'phpdoc_add_missing_param_annotation' => true,
        'phpdoc_align' => ['align' => 'left'],
        'return_assignment' => true,
        'self_accessor' => true,
        'self_static_accessor' => true,
        'set_type_to_cast' => true,
        'simplified_if_return' => true,
        'single_import_per_statement' => ['group_to_single_imports' => false],
        'single_quote' => true,
        'statement_indentation' => true,
        'static_lambda' => true,
        'strict_param' => true,
        'string_length_to_empty' => true,
        'string_line_ending' => true,
        'ternary_to_elvis_operator' => true,
        'ternary_to_null_coalescing' => true,
        'trailing_comma_in_multiline' => true,
        'use_arrow_functions' => true,
        'void_return' => true,
        'yoda_style' => ['equal' => false, 'identical' => false, 'less_and_greater' => false],
    ])
    ->setFinder($finder)
;
