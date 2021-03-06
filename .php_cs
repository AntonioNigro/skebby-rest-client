<?php

$finder = PhpCsFixer\Finder::create()
    ->in(__DIR__)
    ->exclude(['var'])
;

return PhpCsFixer\Config::create()
    ->setFinder($finder)
    ->setRules([
        '@PSR2' => true,
        'psr0' => false,
        'array_syntax' => ['syntax' => 'short'],
        'concat_space' => ['spacing' => 'none'],
        'lowercase_cast' => true,
        'lowercase_constants' => true,
        'lowercase_keywords' => true,
        'no_trailing_comma_in_singleline_array' => true,
        'no_unused_imports' => true,
        'not_operator_with_successor_space' => true,
        'ordered_imports' => true,
    ])
;
