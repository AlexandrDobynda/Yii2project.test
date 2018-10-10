<?php namespace frontend\tests\functional;

use frontend\tests\fixtures\ProducersFixture;
use frontend\tests\FunctionalTester;


class ProducersCest
{

    public function _fixtures()
    {
        return ['producers' => ProducersFixture::className()];
    }

    public function checkOpenProducersPage(FunctionalTester $I)
    {
        $I->amOnPage('producers');
        $I->see('Producers', 'h1');
        $I->seeLink('Create Producers');
        $I->seeLink('ID');
        $I->seeLink('Producer Name');

        $I->see('Питер Джексон');
        $I->see('Андрес Мускетти');
        $I->see('Мартин Скорсезе');

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

    public function checkUpdateProducer1(FunctionalTester $I)
    {
        $I->amOnPage('producers/view?id=1');
        $I->see('Питер Джексон');

        $I->click('Update');
        $I->see('Update Producers', 'h1');
        $I->fillField('Producer Name', 'fffffff');
        $I->click('Save');
        $I->see('fffffff');
        $I->dontSee('Питер Джексон');

        $I->amOnPage('producers');
        $I->dontSee('Питер Джексон');

    }
}
