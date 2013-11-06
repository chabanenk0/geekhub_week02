geekhub_week02
==============

OOP test for GeekHub Week2 (class for asking test question in a quiz)

This project contains a class for test question for quiz.
The abstract class has the name TestQuestion
It has sub-classes: 
- OneCaseTestQuestion (only the one answer is allowed) It has subclasses:
    It can display choises with variants in ComboBox and with variants in the group of RadioButtons)
- MultiCaseTestQuestion (multiple choices are allowed)
   It can display choices by the group of checkboxes and with multiselect list)
- MultiCaseTestQuestionOwnVariant (same as the above-mentioned, but it has textbox with "own variant")
- OwnTestQuestionVariant (displays a textarea, where user can write his answer as text)

It has interfaces Askable (method askQuestion()), Checkable (methods checkRightAnswer() ) and Updatable (methods addToDatabase())

To be continued...

20131105
For running tests type a command:
vendor/bin/phpunit

Authors: 1) Dmitry Chabanenko 2)....
