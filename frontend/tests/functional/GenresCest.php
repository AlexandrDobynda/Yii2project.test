<?php

namespace frontend\tests\functional;

use frontend\tests\FunctionalTester;

class GenresCest
{
    public function checkOpenGenresPage(FunctionalTester $I)
    {
        $I->amOnPage('genres');
        $I->see('Genres', 'h1');
        $I->seeLink('Create Genres');
        $I->seeLink('ID');
        $I->seeLink('Genre Name');

    }

    public function checkCreateGenresPage(FunctionalTester $I)
    {
        $I->amOnPage('genres/create');
        $I->see('Create Genres', 'h1');
    }

    public function checkCreateGenresEmptyFields(FunctionalTester $I)
    {
        $I->amOnPage('genres/create');
        $I->click('Save');
        $I->seeValidationError('Genre Name cannot be blank.');
    }

    public function checkCreateGenresNotEmpty(FunctionalTester $I)
    {
        $I->amOnPage('genres/create');
        $I->fillField('Genre Name', 'sdadasdasd');
        $I->click('Save');
        $I->see('Genre Name');
        $I->see('ID');
        $I->see('sdadasdasd');
        $I->seeLink('Update');
        $I->seeLink('Delete');
    }

    public function checkUpdateGenres(FunctionalTester $I)
    {
        $I->amOnPage('genres/create');
        $I->fillField('Genre Name', 'sdadasdasd');
        $I->click('Save');
        $I->click('Update');
        $I->see('Update Genres', 'h1');
        $I->fillField('Genre Name', 'fffffff');
        $I->click('Save');
        $I->see('fffffff');

    }
}
