<?php 

namespace app\models;

/**
 * Question Alternative model
 * 
 * Represents a questions alternative in the application
 * 
 * @package app\models
 */ 
class QuestionAlternativeModel {

    /**
     * Question alternative id
     * 
     * @var integer $idQuestionAlternative
     */
    private $idQuestionAlternative;

    /**
     * Do the question is correct?
     * 
     * @var boolean $isCorrect
     */
    private $isCorrect;

    /**
     * Question id
     * 
     * @var string $idQuestion
     */
    private $idQuestion;

    /**
     * Class constructor
     * 
     * @param integer $idQuestionAlternative question alternative id
     * @param boolean $isCorrect is alternative correct?
     * @param integer $idQuestion question id (fk)
     * @return QuestionAlternativeModel
     */
    public function __construct($idQuestionAlternative, $isCorrect, $idQuestion) {
        $this->idQuestionAlternative = $idQuestionAlternative;
        $this->isCorrect = $isCorrect;
        $this->idQuestion = $idQuestion;
        
    }

    /**
     * Get question alternative id
     * 
     * @return integer Returns question alternative id
     */
    public function getIdQuestionAlternative() {
        return $this->idQuestionAlternative;
    }

    /**
     * Get if alternative is correct
     * 
     * @return boolean Returns if alternative is correct?
     */
    public function getIsCorrect() {
        return $this->isCorrect;
    }

    /**
     * Get question id
     * 
     * @return integer Returns question id
     */
    public function getIdQuestion() {
        return $this->idQuestion;
    }

    /**
     * Set question alternative id
     * 
     * @param integer $idQuestionAlternative question alternative id
     */
    public function setIdQuestionAlternative($idQuestionAlternative) {
        $this->idQuestionAlternative = $idQuestionAlternative;
    }

    /**
     * Set if alternative is correct
     * 
     * @param boolean $isCorrect if alternative is correct?
     */
    public function setIsCorrect($isCorrect) {
        $this->isCorrect = $isCorrect;
    }

    /**
     * Set id question (fk)
     * 
     * @param integer $idQuestion question id
     */
    public function setIdQuestion($idQuestionType) {
        $this->idQuestion = $idQuestionType;
    }

    /**
     * Converts the question alternative to an array
     * 
     * @return array Returns the question alternative as an array
     */
    public function toArray() {
        return [
            'idQuestionAlternative' => $this->idQuestionAlternative,
            'isCorrect' => $this->isCorrect,
            'idQuestion' => $this->idQuestion,
        ];
    }

}
