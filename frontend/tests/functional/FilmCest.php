<?php

namespace frontend\tests\functional;

use frontend\tests\FunctionalTester;
use frontend\tests\fixtures\FilmFixture;

class FilmCest
{

    public function _fixtures()
    {
        return ['films' => FilmFixture::className()];
    }


    public function checkOpenFilmPage(FunctionalTester $I)
    {

        $I->amOnPage('film');
        $I->see('Films', 'h1');
        $I->seeLink('Create Film');
        $I->seeLink('ID');
        $I->seeLink('Film Name');
        $I->seeLink('Producer ID');
        $I->seeLink('Year');


        $I->see('Назад в будущее');
        $I->see('Бегущий по лезвию 2049');
        $I->see('Остров проклятых');

    }

    public function checkCreateFilmPage(FunctionalTester $I)
    {
        $I->amOnPage('film/create');
        $I->see('Create Film', 'h1');
    }

    public function checkCreateFilmEmptyFields(FunctionalTester $I)
    {
        $I->amOnPage('film/create');
        $I->click('Save');
        $I->seeValidationError('Film Name cannot be blank.');
        $I->seeValidationError('Year cannot be blank.');
    }

    public function checkCreateFilmNotEmpty(FunctionalTester $I)
    {
        $I->amOnPage('film/create');
        $I->fillField('Film Name', 'sdadasdasd');
        $I->fillField('Producer ID', 1111);
        $I->fillField('Year', 4123213);
        $I->click('Save');
        $I->see('Film Name');
        $I->see('Year');
        $I->see('Producer ID');
        $I->see('sdadasdasd');
        $I->see('1111');
        $I->see('4123213');
        $I->seeLink('Update');
        $I->seeLink('Delete');
    }

    public function checkUpdateFilm(FunctionalTester $I)
    {
        $I->amOnPage('film/create');
        $I->fillField('Film Name', 'sdadasdasd');
        $I->fillField('Producer ID', 1111);
        $I->fillField('Year', 4123213);
        $I->click('Save');
        $I->click('Update');
        $I->see('Update Film', 'h1');
        $I->fillField('Film Name', 'fffffff');
        $I->fillField('Producer ID', 2222);
        $I->fillField('Year', 333333);
        $I->click('Save');
        $I->see('fffffff');
        $I->see('2222');
        $I->see('333333');

    }

    public function checkDeleteFilm(FunctionalTester $I)
    {
        $I->amOnPage('film/view?id=1');

        $I->seeLink('Update');
        $I->seeLink('Delete');
        $I->see('Назад в будущее');
        $I->click('Delete');


//        $I->seeElement('.alert-error');
//        $I->wait(1);
//        $I->see('Are you sure you want to delete this item?', '.help-block');


    }



}
