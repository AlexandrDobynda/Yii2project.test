<?php namespace frontend\tests\functional;
use frontend\tests\FunctionalTester;

class ProducersCest
{
    public function checkOpen(FunctionalTester $I)
    {
        $I->amOnPage('producers');
        $I->see('Producers', 'h1');
        $I->seeLink('Create Producers');
        $I->seeLink('ID');
        $I->seeLink('Producer Name');

    }

    public function checkCreateProducersPage(FunctionalTester $I)
    {
        $I->amOnPage('producers/create');
        $I->see('Create Producers', 'h1');
    }

    public function checkCreateProducersEmptyFields(FunctionalTester $I)
    {
        $I->amOnPage('producers/create');
        $I->click('Save');
        $I->seeValidationError('Producer Name cannot be blank.');
    }

    public function checkCreateProducersNotEmpty(FunctionalTester $I)
    {
        $I->amOnPage('producers/create');
        $I->fillField('Producer Name', 'sdadasdasd');
        $I->click('Save');
        $I->see('Producer Name');
        $I->see('ID');
        $I->see('sdadasdasd');
        $I->seeLink('Update');
        $I->seeLink('Delete');
    }

    public function checkUpdateProducers(FunctionalTester $I)
    {
        $I->amOnPage('producers/create');
        $I->fillField('Producer Name', 'sdadasdasd');
        $I->click('Save');
        $I->click('Update');
        $I->see('Update Producers', 'h1');
        $I->fillField('Producer Name', 'fffffff');
        $I->click('Save');
        $I->see('fffffff');

    }
}
