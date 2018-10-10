<?php namespace frontend\tests\functional;
use frontend\tests\FunctionalTester;

class FilmGenreCest
{
    public function checkOpen(FunctionalTester $I)
    {
        $I->amOnPage('film-genre');
        $I->see('Film Genres', 'h1');
        $I->seeLink('Create Film Genre');
        $I->seeLink('ID');
        $I->seeLink('Film ID');
        $I->seeLink('Genre ID');

    }

    public function checkCreateFilmGenresPage(FunctionalTester $I)
    {
        $I->amOnPage('film-genre/create');
        $I->see('Create Film Genre', 'h1');
    }

    public function checkCreateFilmGenresEmptyFields(FunctionalTester $I)
    {
        $I->amOnPage('film-genre/create');
        $I->click('Save');
        $I->dontSeeValidationError('Film ID cannot be blank.');
        $I->dontSeeValidationError('Genre ID cannot be blank.');
    }

    public function checkCreateFilmGenresNotEmpty(FunctionalTester $I)
    {
        $I->amOnPage('film-genre/create');
        $I->fillField('Film ID', 1111);
        $I->fillField('Genre ID', 2222);
        $I->click('Save');
        $I->see('Film ID');
        $I->see('Genre ID');
        $I->see(1111);
        $I->see(2222);
        $I->seeLink('Update');
        $I->seeLink('Delete');
    }

    public function checkUpdateFilmGenres(FunctionalTester $I)
    {
        $I->amOnPage('film-genre/create');
        $I->fillField('Film ID', 1111);
        $I->fillField('Genre ID', 2222);
        $I->click('Save');
        $I->click('Update');
        $I->see('Update Film Genre', 'h1');
        $I->fillField('Film ID', 33);
        $I->fillField('Genre ID', 44);
        $I->click('Save');
        $I->see('33');
        $I->see('44');

    }
}
