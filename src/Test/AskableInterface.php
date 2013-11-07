<?php

namespace Test;

interface AskableInterface
{
    public function askQuestion();
    public function addQuestionToForm($formBuilder);
}
