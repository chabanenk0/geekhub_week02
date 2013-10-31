<?php

namespace Test;

use Test\OneCaseTestQuestion;
use Test\MultiCaseTestQuestion;
use Symfony\Component\Form\Forms;

class Test 
{
    protected $questions = array(); // array of AbstractTestQuestion's

    protected $scales = array();

    public function clearQuestions()
    {
        $this->questions=array();
    }

    public function addQuestion(AbstractTestQuestion $newQuestion)
    {
        array_push($this->questions, $newQuestion);
    }

    public function askQuestions()
    {
        $formFactory = Forms::createFormFactory();
        $twig= new Twig();
        $formBuilder = $formFactory->createBuilder();
        $formBuilder->add("mytest","hidden", array("value"=>"mytest"));
        $formBuilder->add("q1","text", array("value"=>"mytext1"));
        $formBuilder->add("q2","text", array("value"=>"mytext2"));
        $form=$formBuilder->getForm();
        $questionsText = "<form method=POST action='index.php'>\n<input type=hidden name=mytest value=mytest>\n";

        foreach ($this->questions as $question) {
            $questionsText=$questionsText.$question->askQuestion();
        }
        //$questionsText = $questionsText."<input type=submit value='ok'></form>";
        $questionsText=$twig->render("new.html.twig",array('form'=>$form->createView()));

        return $questionsText;
    }

    public function addScale($newScale)
    {
        if ($newScale instanceof Scale) {
            array_push($this->scales, $newScale);
        }
    }
    public function getScales()
    {
        return $this->scales;
    }

    public function calculateScales($request)
    {
        foreach ($this->questions as $currentQuestion) {
            $currentQuestion->calculateScore($request);
        }
    }

}

?>