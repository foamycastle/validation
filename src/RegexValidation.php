<?php

namespace Foamycastle\Tools;

use Foamycastle\Tools\Validation;

class RegexValidation extends Validation
{
    protected string $expression;
    protected array $matches;
    public function __construct(protected readonly string $testString,string $expression='')
    {
        $this->expression = $expression;
    }

    function withExpression(string $expression):self
    {
        $this->expression = $expression;
        return $this;
    }
    function getMatches():array{
        return $this->matches ?? [];
    }
    public function validate($rules): bool
    {
        if($this->expression=='') return false;
        return preg_match($this->expression, $rules, $this->matches) >= 1;
    }

}