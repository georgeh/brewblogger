<?php

namespace BrewBlogger\Recipe\Entity\Recipe;


/**
 * Recipe
 *
 */
class Recipe
{
    /**
     * @var string
     *
     */
    private $brewname;

    /**
     * @var string
     *
     */
    private $brewstyle;

    /**
     * @var string
     *
     */
    private $brewsource;

    /**
     * @var string
     *
     */
    private $brewyield;

    /**
     * @var string
     *
     */
    private $brewmethod;

    /**
     * @var string
     *
     */
    private $brewlink1;

    /**
     * @var string
     *
     */
    private $brewlink1name;

    /**
     * @var string
     *
     */
    private $brewlink2;

    /**
     * @var string
     *
     */
    private $brewlink2name;

    /**
     * @var string
     *
     */
    private $brewnotes;

    /**
     * @var string
     *
     */
    private $brewextract1;

    /**
     * @var string
     *
     */
    private $brewextract1weight;

    /**
     * @var string
     *
     */
    private $brewextract2;

    /**
     * @var string
     *
     */
    private $brewextract2weight;

    /**
     * @var string
     *
     */
    private $brewextract3;

    /**
     * @var string
     *
     */
    private $brewextract3weight;

    /**
     * @var string
     *
     */
    private $brewextract4;

    /**
     * @var string
     *
     */
    private $brewextract4weight;

    /**
     * @var string
     *
     */
    private $brewextract5;

    /**
     * @var string
     *
     */
    private $brewextract5weight;

    /**
     * @var string
     *
     */
    private $brewgrain1;

    /**
     * @var string
     *
     */
    private $brewgrain1weight;

    /**
     * @var string
     *
     */
    private $brewgrain2;

    /**
     * @var string
     *
     */
    private $brewgrain2weight;

    /**
     * @var string
     *
     */
    private $brewgrain3;

    /**
     * @var string
     *
     */
    private $brewgrain3weight;

    /**
     * @var string
     *
     */
    private $brewgrain4;

    /**
     * @var string
     *
     */
    private $brewgrain4weight;

    /**
     * @var string
     *
     */
    private $brewgrain5;

    /**
     * @var string
     *
     */
    private $brewgrain5weight;

    /**
     * @var string
     *
     */
    private $brewgrain6;

    /**
     * @var string
     *
     */
    private $brewgrain6weight;

    /**
     * @var string
     *
     */
    private $brewgrain7;

    /**
     * @var string
     *
     */
    private $brewgrain7weight;

    /**
     * @var string
     *
     */
    private $brewgrain8;

    /**
     * @var string
     *
     */
    private $brewgrain8weight;

    /**
     * @var string
     *
     */
    private $brewgrain9;

    /**
     * @var string
     *
     */
    private $brewgrain9weight;

    /**
     * @var string
     *
     */
    private $brewgrain10;

    /**
     * @var string
     *
     */
    private $brewgrain10weight;

    /**
     * @var string
     *
     */
    private $brewgrain11;

    /**
     * @var string
     *
     */
    private $brewgrain11weight;

    /**
     * @var string
     *
     */
    private $brewgrain12;

    /**
     * @var string
     *
     */
    private $brewgrain12weight;

    /**
     * @var string
     *
     */
    private $brewgrain13;

    /**
     * @var string
     *
     */
    private $brewgrain13weight;

    /**
     * @var string
     *
     */
    private $brewgrain14;

    /**
     * @var string
     *
     */
    private $brewgrain14weight;

    /**
     * @var string
     *
     */
    private $brewgrain15;

    /**
     * @var string
     *
     */
    private $brewgrain15weight;

    /**
     * @var string
     *
     */
    private $brewaddition1;

    /**
     * @var string
     *
     */
    private $brewaddition1amt;

    /**
     * @var string
     *
     */
    private $brewaddition2;

    /**
     * @var string
     *
     */
    private $brewaddition2amt;

    /**
     * @var string
     *
     */
    private $brewaddition3;

    /**
     * @var string
     *
     */
    private $brewaddition3amt;

    /**
     * @var string
     *
     */
    private $brewaddition4;

    /**
     * @var string
     *
     */
    private $brewaddition4amt;

    /**
     * @var string
     *
     */
    private $brewaddition5;

    /**
     * @var string
     *
     */
    private $brewaddition5amt;

    /**
     * @var string
     *
     */
    private $brewaddition6;

    /**
     * @var string
     *
     */
    private $brewaddition6amt;

    /**
     * @var string
     *
     */
    private $brewaddition7;

    /**
     * @var string
     *
     */
    private $brewaddition7amt;

    /**
     * @var string
     *
     */
    private $brewaddition8;

    /**
     * @var string
     *
     */
    private $brewaddition8amt;

    /**
     * @var string
     *
     */
    private $brewaddition9;

    /**
     * @var string
     *
     */
    private $brewaddition9amt;

    /**
     * @var string
     *
     */
    private $brewmisc1name;

    /**
     * @var string
     *
     */
    private $brewmisc2name;

    /**
     * @var string
     *
     */
    private $brewmisc3name;

    /**
     * @var string
     *
     */
    private $brewmisc4name;

    /**
     * @var string
     *
     */
    private $brewmisc1type;

    /**
     * @var string
     *
     */
    private $brewmisc2type;

    /**
     * @var string
     *
     */
    private $brewmisc3type;

    /**
     * @var string
     *
     */
    private $brewmisc4type;

    /**
     * @var string
     *
     */
    private $brewmisc1use;

    /**
     * @var string
     *
     */
    private $brewmisc2use;

    /**
     * @var string
     *
     */
    private $brewmisc3use;

    /**
     * @var string
     *
     */
    private $brewmisc4use;

    /**
     * @var string
     *
     */
    private $brewmisc1time;

    /**
     * @var string
     *
     */
    private $brewmisc2time;

    /**
     * @var string
     *
     */
    private $brewmisc3time;

    /**
     * @var string
     *
     */
    private $brewmisc4time;

    /**
     * @var string
     *
     */
    private $brewmisc1amount;

    /**
     * @var string
     *
     */
    private $brewmisc2amount;

    /**
     * @var string
     *
     */
    private $brewmisc3amount;

    /**
     * @var string
     *
     */
    private $brewmisc4amount;

    /**
     * @var string
     *
     */
    private $brewhops1;

    /**
     * @var string
     *
     */
    private $brewhops1weight;

    /**
     * @var string
     *
     */
    private $brewhops1ibu;

    /**
     * @var string
     *
     */
    private $brewhops1time;

    /**
     * @var string
     *
     */
    private $brewhops2;

    /**
     * @var string
     *
     */
    private $brewhops2weight;

    /**
     * @var string
     *
     */
    private $brewhops2ibu;

    /**
     * @var string
     *
     */
    private $brewhops2time;

    /**
     * @var string
     *
     */
    private $brewhops3;

    /**
     * @var string
     *
     */
    private $brewhops3weight;

    /**
     * @var string
     *
     */
    private $brewhops3ibu;

    /**
     * @var string
     *
     */
    private $brewhops3time;

    /**
     * @var string
     *
     */
    private $brewhops4;

    /**
     * @var string
     *
     */
    private $brewhops4weight;

    /**
     * @var string
     *
     */
    private $brewhops4ibu;

    /**
     * @var string
     *
     */
    private $brewhops4time;

    /**
     * @var string
     *
     */
    private $brewhops5;

    /**
     * @var string
     *
     */
    private $brewhops5weight;

    /**
     * @var string
     *
     */
    private $brewhops5ibu;

    /**
     * @var string
     *
     */
    private $brewhops5time;

    /**
     * @var string
     *
     */
    private $brewhops6;

    /**
     * @var string
     *
     */
    private $brewhops6weight;

    /**
     * @var string
     *
     */
    private $brewhops6ibu;

    /**
     * @var string
     *
     */
    private $brewhops6time;

    /**
     * @var string
     *
     */
    private $brewhops7;

    /**
     * @var string
     *
     */
    private $brewhops7weight;

    /**
     * @var string
     *
     */
    private $brewhops7ibu;

    /**
     * @var string
     *
     */
    private $brewhops7time;

    /**
     * @var string
     *
     */
    private $brewhops8;

    /**
     * @var string
     *
     */
    private $brewhops8weight;

    /**
     * @var string
     *
     */
    private $brewhops8ibu;

    /**
     * @var string
     *
     */
    private $brewhops8time;

    /**
     * @var string
     *
     */
    private $brewhops9;

    /**
     * @var string
     *
     */
    private $brewhops9weight;

    /**
     * @var string
     *
     */
    private $brewhops9ibu;

    /**
     * @var string
     *
     */
    private $brewhops9time;

    /**
     * @var string
     *
     */
    private $brewhops1use;

    /**
     * @var string
     *
     */
    private $brewhops2use;

    /**
     * @var string
     *
     */
    private $brewhops3use;

    /**
     * @var string
     *
     */
    private $brewhops4use;

    /**
     * @var string
     *
     */
    private $brewhops5use;

    /**
     * @var string
     *
     */
    private $brewhops6use;

    /**
     * @var string
     *
     */
    private $brewhops7use;

    /**
     * @var string
     *
     */
    private $brewhops8use;

    /**
     * @var string
     *
     */
    private $brewhops9use;

    /**
     * @var string
     *
     */
    private $brewhops1type;

    /**
     * @var string
     *
     */
    private $brewhops2type;

    /**
     * @var string
     *
     */
    private $brewhops3type;

    /**
     * @var string
     *
     */
    private $brewhops4type;

    /**
     * @var string
     *
     */
    private $brewhops5type;

    /**
     * @var string
     *
     */
    private $brewhops6type;

    /**
     * @var string
     *
     */
    private $brewhops7type;

    /**
     * @var string
     *
     */
    private $brewhops8type;

    /**
     * @var string
     *
     */
    private $brewhops9type;

    /**
     * @var string
     *
     */
    private $brewhops1form;

    /**
     * @var string
     *
     */
    private $brewhops2form;

    /**
     * @var string
     *
     */
    private $brewhops3form;

    /**
     * @var string
     *
     */
    private $brewhops4form;

    /**
     * @var string
     *
     */
    private $brewhops5form;

    /**
     * @var string
     *
     */
    private $brewhops6form;

    /**
     * @var string
     *
     */
    private $brewhops7form;

    /**
     * @var string
     *
     */
    private $brewhops8form;

    /**
     * @var string
     *
     */
    private $brewhops9form;

    /**
     * @var string
     *
     */
    private $brewhops10;

    /**
     * @var string
     *
     */
    private $brewhops10weight;

    /**
     * @var string
     *
     */
    private $brewhops10ibu;

    /**
     * @var string
     *
     */
    private $brewhops10time;

    /**
     * @var string
     *
     */
    private $brewhops10use;

    /**
     * @var string
     *
     */
    private $brewhops10type;

    /**
     * @var string
     *
     */
    private $brewhops10form;

    /**
     * @var string
     *
     */
    private $brewhops11;

    /**
     * @var string
     *
     */
    private $brewhops11weight;

    /**
     * @var string
     *
     */
    private $brewhops11ibu;

    /**
     * @var string
     *
     */
    private $brewhops11time;

    /**
     * @var string
     *
     */
    private $brewhops11use;

    /**
     * @var string
     *
     */
    private $brewhops11type;

    /**
     * @var string
     *
     */
    private $brewhops11form;

    /**
     * @var string
     *
     */
    private $brewhops12;

    /**
     * @var string
     *
     */
    private $brewhops12weight;

    /**
     * @var string
     *
     */
    private $brewhops12ibu;

    /**
     * @var string
     *
     */
    private $brewhops12time;

    /**
     * @var string
     *
     */
    private $brewhops12use;

    /**
     * @var string
     *
     */
    private $brewhops12type;

    /**
     * @var string
     *
     */
    private $brewhops12form;

    /**
     * @var string
     *
     */
    private $brewhops13;

    /**
     * @var string
     *
     */
    private $brewhops13weight;

    /**
     * @var string
     *
     */
    private $brewhops13ibu;

    /**
     * @var string
     *
     */
    private $brewhops13time;

    /**
     * @var string
     *
     */
    private $brewhops13use;

    /**
     * @var string
     *
     */
    private $brewhops13type;

    /**
     * @var string
     *
     */
    private $brewhops13form;

    /**
     * @var string
     *
     */
    private $brewhops14;

    /**
     * @var string
     *
     */
    private $brewhops14weight;

    /**
     * @var string
     *
     */
    private $brewhops14ibu;

    /**
     * @var string
     *
     */
    private $brewhops14time;

    /**
     * @var string
     *
     */
    private $brewhops14use;

    /**
     * @var string
     *
     */
    private $brewhops14type;

    /**
     * @var string
     *
     */
    private $brewhops14form;

    /**
     * @var string
     *
     */
    private $brewhops15;

    /**
     * @var string
     *
     */
    private $brewhops15weight;

    /**
     * @var string
     *
     */
    private $brewhops15ibu;

    /**
     * @var string
     *
     */
    private $brewhops15time;

    /**
     * @var string
     *
     */
    private $brewhops15use;

    /**
     * @var string
     *
     */
    private $brewhops15type;

    /**
     * @var string
     *
     */
    private $brewhops15form;

    /**
     * @var string
     *
     */
    private $brewyeast;

    /**
     * @var string
     *
     */
    private $brewyeastman;

    /**
     * @var string
     *
     */
    private $brewyeastform;

    /**
     * @var string
     *
     */
    private $brewyeasttype;

    /**
     * @var string
     *
     */
    private $brewyeastamount;

    /**
     * @var string
     *
     */
    private $brewlabelimage;

    /**
     * @var string
     *
     */
    private $brewog;

    /**
     * @var string
     *
     */
    private $brewfg;

    /**
     * @var string
     *
     */
    private $brewprocedure;

    /**
     * @var string
     *
     */
    private $brewprimary;

    /**
     * @var string
     *
     */
    private $brewprimarytemp;

    /**
     * @var string
     *
     */
    private $brewsecondary;

    /**
     * @var string
     *
     */
    private $brewsecondarytemp;

    /**
     * @var string
     *
     */
    private $brewtertiary;

    /**
     * @var string
     *
     */
    private $brewtertiarytemp;

    /**
     * @var string
     *
     */
    private $brewlager;

    /**
     * @var string
     *
     */
    private $brewlagertemp;

    /**
     * @var string
     *
     */
    private $brewage;

    /**
     * @var string
     *
     */
    private $brewagetemp;

    /**
     * @var float
     *
     */
    private $brewbitterness;

    /**
     * @var string
     *
     */
    private $brewibuformula;

    /**
     * @var float
     *
     */
    private $brewlovibond;

    /**
     * @var string
     *
     */
    private $brewcolorformula;

    /**
     * @var string
     *
     */
    private $brewbrewerid;

    /**
     * @var integer
     *
     */
    private $brewboiltime;

    /**
     * @var string
     *
     */
    private $brewfeatured;

    /**
     * @var integer
     *
     */
    private $brewmashprofile;

    /**
     * @var integer
     *
     */
    private $brewwaterprofile;

    /**
     * @var integer
     *
     */
    private $brewyeastprofile;

    /**
     * @var string
     *
     */
    private $brewarchive;

    /**
     * @var integer
     *
     */
    private $id;


    /**
     * @param string $recipe
     */
    public function __construct($recipe)
    {
      $this->id = $recipe['id'];
      $this->brewname = $recipe['brewName'];
      $this->brewstyle = $recipe['brewStyle'];
      $this->brewsource = $recipe['brewSource'];
      $this->brewyield = $recipe['brewYield'];
      $this->brewmethod = $recipe['brewMethod'];
      $this->brewlink1 = $recipe['brewLink1'];
      $this->brewlink1name = $recipe['brewLink1Name'];
      $this->brewlink2 = $recipe['brewLink2'];
      $this->brewlink2name = $recipe['brewLink2Name'];
      $this->brewnotes = $recipe['brewNotes'];
      $this->brewextract1 = $recipe['brewExtract1'];
      $this->brewextract1weight = $recipe['brewExtract1Weight'];
      $this->brewextract2 = $recipe['brewExtract2'];
      $this->brewextract2weight = $recipe['brewExtract2Weight'];
      $this->brewextract3 = $recipe['brewExtract3'];
      $this->brewextract3weight = $recipe['brewExtract3Weight'];
      $this->brewextract4 = $recipe['brewExtract4'];
      $this->brewextract4weight = $recipe['brewExtract4Weight'];
      $this->brewextract5 = $recipe['brewExtract5'];
      $this->brewextract5weight = $recipe['brewExtract5Weight'];
      $this->brewgrain1 = $recipe['brewGrain1'];
      $this->brewgrain1weight = $recipe['brewGrain1Weight'];
      $this->brewgrain2 = $recipe['brewGrain2'];
      $this->brewgrain2weight = $recipe['brewGrain2Weight'];
      $this->brewgrain3 = $recipe['brewGrain3'];
      $this->brewgrain3weight = $recipe['brewGrain3Weight'];
      $this->brewgrain4 = $recipe['brewGrain4'];
      $this->brewgrain4weight = $recipe['brewGrain4Weight'];
      $this->brewgrain5 = $recipe['brewGrain5'];
      $this->brewgrain5weight = $recipe['brewGrain5Weight'];
      $this->brewgrain6 = $recipe['brewGrain6'];
      $this->brewgrain6weight = $recipe['brewGrain6Weight'];
      $this->brewgrain7 = $recipe['brewGrain7'];
      $this->brewgrain7weight = $recipe['brewGrain7Weight'];
      $this->brewgrain8 = $recipe['brewGrain8'];
      $this->brewgrain8weight = $recipe['brewGrain8Weight'];
      $this->brewgrain9 = $recipe['brewGrain9'];
      $this->brewgrain9weight = $recipe['brewGrain9Weight'];
      $this->brewgrain10 = $recipe['brewGrain10'];
      $this->brewgrain10weight = $recipe['brewGrain10Weight'];
      $this->brewgrain11 = $recipe['brewGrain11'];
      $this->brewgrain11weight = $recipe['brewGrain11Weight'];
      $this->brewgrain12 = $recipe['brewGrain12'];
      $this->brewgrain12weight = $recipe['brewGrain12Weight'];
      $this->brewgrain13 = $recipe['brewGrain13'];
      $this->brewgrain13weight = $recipe['brewGrain13Weight'];
      $this->brewgrain14 = $recipe['brewGrain14'];
      $this->brewgrain14weight = $recipe['brewGrain14Weight'];
      $this->brewgrain15 = $recipe['brewGrain15'];
      $this->brewgrain15weight = $recipe['brewGrain15Weight'];
      $this->brewaddition1 = $recipe['brewAddition1'];
      $this->brewaddition1amt = $recipe['brewAddition1Amt'];
      $this->brewaddition2 = $recipe['brewAddition2'];
      $this->brewaddition2amt = $recipe['brewAddition2Amt'];
      $this->brewaddition3 = $recipe['brewAddition3'];
      $this->brewaddition3amt = $recipe['brewAddition3Amt'];
      $this->brewaddition4 = $recipe['brewAddition4'];
      $this->brewaddition4amt = $recipe['brewAddition4Amt'];
      $this->brewaddition5 = $recipe['brewAddition5'];
      $this->brewaddition5amt = $recipe['brewAddition5Amt'];
      $this->brewaddition6 = $recipe['brewAddition6'];
      $this->brewaddition6amt = $recipe['brewAddition6Amt'];
      $this->brewaddition7 = $recipe['brewAddition7'];
      $this->brewaddition7amt = $recipe['brewAddition7Amt'];
      $this->brewaddition8 = $recipe['brewAddition8'];
      $this->brewaddition8amt = $recipe['brewAddition8Amt'];
      $this->brewaddition9 = $recipe['brewAddition9'];
      $this->brewaddition9amt = $recipe['brewAddition9Amt'];
      $this->brewmisc1name = $recipe['brewMisc1Name'];
      $this->brewmisc1type = $recipe['brewMisc1Type'];
      $this->brewmisc1use = $recipe['brewMisc1Use'];
      $this->brewmisc1time = $recipe['brewMisc1Time'];
      $this->brewmisc1amount = $recipe['brewMisc1Amount'];
      $this->brewmisc2name = $recipe['brewMisc2Name'];
      $this->brewmisc2type = $recipe['brewMisc2Type'];
      $this->brewmisc2use = $recipe['brewMisc2Use'];
      $this->brewmisc2time = $recipe['brewMisc2Time'];
      $this->brewmisc2amount = $recipe['brewMisc2Amount'];
      $this->brewmisc3name = $recipe['brewMisc3Name'];
      $this->brewmisc3type = $recipe['brewMisc3Type'];
      $this->brewmisc3use = $recipe['brewMisc3Use'];
      $this->brewmisc3time = $recipe['brewMisc3Time'];
      $this->brewmisc3amount = $recipe['brewMisc3Amount'];
      $this->brewmisc4name = $recipe['brewMisc4Name'];
      $this->brewmisc4type = $recipe['brewMisc4Type'];
      $this->brewmisc4use = $recipe['brewMisc4Use'];
      $this->brewmisc4time = $recipe['brewMisc4Time'];
      $this->brewmisc4amount = $recipe['brewMisc4Amount'];
      $this->brewhops1 = $recipe['brewHops1'];
      $this->brewhops1weight = $recipe['brewHops1Weight'];
      $this->brewhops1ibu = $recipe['brewHops1IBU'];
      $this->brewhops1time = $recipe['brewHops1Time'];
      $this->brewhops1use = $recipe['brewHops1Use'];
      $this->brewhops1type = $recipe['brewHops1Type'];
      $this->brewhops1form = $recipe['brewHops1Form'];
      $this->brewhops2 = $recipe['brewHops2'];
      $this->brewhops2weight = $recipe['brewHops2Weight'];
      $this->brewhops2ibu = $recipe['brewHops2IBU'];
      $this->brewhops2time = $recipe['brewHops2Time'];
      $this->brewhops2use = $recipe['brewHops2Use'];
      $this->brewhops2type = $recipe['brewHops2Type'];
      $this->brewhops2form = $recipe['brewHops2Form'];
      $this->brewhops3 = $recipe['brewHops3'];
      $this->brewhops3weight = $recipe['brewHops3Weight'];
      $this->brewhops3ibu = $recipe['brewHops3IBU'];
      $this->brewhops3time = $recipe['brewHops3Time'];
      $this->brewhops3use = $recipe['brewHops3Use'];
      $this->brewhops3type = $recipe['brewHops3Type'];
      $this->brewhops3form = $recipe['brewHops3Form'];
      $this->brewhops4 = $recipe['brewHops4'];
      $this->brewhops4weight = $recipe['brewHops4Weight'];
      $this->brewhops4ibu = $recipe['brewHops4IBU'];
      $this->brewhops4time = $recipe['brewHops4Time'];
      $this->brewhops4use = $recipe['brewHops4Use'];
      $this->brewhops4type = $recipe['brewHops4Type'];
      $this->brewhops4form = $recipe['brewHops4Form'];
      $this->brewhops5 = $recipe['brewHops5'];
      $this->brewhops5weight = $recipe['brewHops5Weight'];
      $this->brewhops5ibu = $recipe['brewHops5IBU'];
      $this->brewhops5time = $recipe['brewHops5Time'];
      $this->brewhops5use = $recipe['brewHops5Use'];
      $this->brewhops5type = $recipe['brewHops5Type'];
      $this->brewhops5form = $recipe['brewHops5Form'];
      $this->brewhops6 = $recipe['brewHops6'];
      $this->brewhops6weight = $recipe['brewHops6Weight'];
      $this->brewhops6ibu = $recipe['brewHops6IBU'];
      $this->brewhops6time = $recipe['brewHops6Time'];
      $this->brewhops6use = $recipe['brewHops6Use'];
      $this->brewhops6type = $recipe['brewHops6Type'];
      $this->brewhops6form = $recipe['brewHops6Form'];
      $this->brewhops7 = $recipe['brewHops7'];
      $this->brewhops7weight = $recipe['brewHops7Weight'];
      $this->brewhops7ibu = $recipe['brewHops7IBU'];
      $this->brewhops7time = $recipe['brewHops7Time'];
      $this->brewhops7use = $recipe['brewHops7Use'];
      $this->brewhops7type = $recipe['brewHops7Type'];
      $this->brewhops7form = $recipe['brewHops7Form'];
      $this->brewhops8 = $recipe['brewHops8'];
      $this->brewhops8weight = $recipe['brewHops8Weight'];
      $this->brewhops8ibu = $recipe['brewHops8IBU'];
      $this->brewhops8time = $recipe['brewHops8Time'];
      $this->brewhops8use = $recipe['brewHops8Use'];
      $this->brewhops8type = $recipe['brewHops8Type'];
      $this->brewhops8form = $recipe['brewHops8Form'];
      $this->brewhops9 = $recipe['brewHops9'];
      $this->brewhops9weight = $recipe['brewHops9Weight'];
      $this->brewhops9ibu = $recipe['brewHops9IBU'];
      $this->brewhops9time = $recipe['brewHops9Time'];
      $this->brewhops9use = $recipe['brewHops9Use'];
      $this->brewhops9type = $recipe['brewHops9Type'];
      $this->brewhops9form = $recipe['brewHops9Form'];
      $this->brewhops10 = $recipe['brewHops10'];
      $this->brewhops10weight = $recipe['brewHops10Weight'];
      $this->brewhops10ibu = $recipe['brewHops10IBU'];
      $this->brewhops10time = $recipe['brewHops10Time'];
      $this->brewhops10use = $recipe['brewHops10Use'];
      $this->brewhops10type = $recipe['brewHops10Type'];
      $this->brewhops10form = $recipe['brewHops10Form'];
      $this->brewhops11 = $recipe['brewHops11'];
      $this->brewhops11weight = $recipe['brewHops11Weight'];
      $this->brewhops11ibu = $recipe['brewHops11IBU'];
      $this->brewhops11time = $recipe['brewHops11Time'];
      $this->brewhops11use = $recipe['brewHops11Use'];
      $this->brewhops11type = $recipe['brewHops11Type'];
      $this->brewhops11form = $recipe['brewHops11Form'];
      $this->brewhops12 = $recipe['brewHops12'];
      $this->brewhops12weight = $recipe['brewHops12Weight'];
      $this->brewhops12ibu = $recipe['brewHops12IBU'];
      $this->brewhops12time = $recipe['brewHops12Time'];
      $this->brewhops12use = $recipe['brewHops12Use'];
      $this->brewhops12type = $recipe['brewHops12Type'];
      $this->brewhops12form = $recipe['brewHops12Form'];
      $this->brewhops13 = $recipe['brewHops13'];
      $this->brewhops13weight = $recipe['brewHops13Weight'];
      $this->brewhops13ibu = $recipe['brewHops13IBU'];
      $this->brewhops13time = $recipe['brewHops13Time'];
      $this->brewhops13use = $recipe['brewHops13Use'];
      $this->brewhops13type = $recipe['brewHops13Type'];
      $this->brewhops13form = $recipe['brewHops13Form'];
      $this->brewhops14 = $recipe['brewHops14'];
      $this->brewhops14weight = $recipe['brewHops14Weight'];
      $this->brewhops14ibu = $recipe['brewHops14IBU'];
      $this->brewhops14time = $recipe['brewHops14Time'];
      $this->brewhops14use = $recipe['brewHops14Use'];
      $this->brewhops14type = $recipe['brewHops14Type'];
      $this->brewhops14form = $recipe['brewHops14Form'];
      $this->brewhops15 = $recipe['brewHops15'];
      $this->brewhops15weight = $recipe['brewHops15Weight'];
      $this->brewhops15ibu = $recipe['brewHops15IBU'];
      $this->brewhops15time = $recipe['brewHops15Time'];
      $this->brewhops15use = $recipe['brewHops15Use'];
      $this->brewhops15type = $recipe['brewHops15Type'];
      $this->brewhops15form = $recipe['brewHops15Form'];
      $this->brewyeast = $recipe['brewYeast'];
      $this->brewyeastman = $recipe['brewYeastMan'];
      $this->brewyeastform = $recipe['brewYeastForm'];
      $this->brewyeasttype = $recipe['brewYeastType'];
      $this->brewyeastamount = $recipe['brewYeastAmount'];
      $this->brewlabelimage = $recipe['brewLabelImage'];
      $this->brewog = $recipe['brewOG'];
      $this->brewfg = $recipe['brewFG'];
      $this->brewprocedure = $recipe['brewProcedure'];
      $this->brewprimary = $recipe['brewPrimary'];
      $this->brewprimarytemp = $recipe['brewPrimaryTemp'];
      $this->brewsecondary = $recipe['brewSecondary'];
      $this->brewsecondarytemp = $recipe['brewSecondaryTemp'];
      $this->brewtertiary = $recipe['brewTertiary'];
      $this->brewtertiarytemp = $recipe['brewTertiaryTemp'];
      $this->brewlager = $recipe['brewLager'];
      $this->brewlagertemp = $recipe['brewLagerTemp'];
      $this->brewage = $recipe['brewAge'];
      $this->brewagetemp = $recipe['brewAgeTemp'];
      $this->brewbitterness = $recipe['brewBitterness'];
      $this->brewibuformula = $recipe['brewIBUFormula'];
      $this->brewlovibond = $recipe['brewLovibond'];
      $this->brewcolorformula = $recipe['brewColorFormula'];
      $this->brewbrewerid = $recipe['brewBrewerID'];
      $this->brewboiltime = $recipe['brewBoilTime'];
      $this->brewfeatured = $recipe['brewFeatured'];
      $this->brewmashprofile = $recipe['brewMashProfile'];
      $this->brewwaterprofile = $recipe['brewWaterProfile'];
      $this->brewyeastprofile = $recipe['brewYeastProfile'];
      $this->brewarchive = $recipe['brewArchive'];
    }

    /**
     * Set brewname
     *
     * @param string $brewname
     */
    public function setBrewname($brewname)
    {
        $this->brewname = $brewname;

    }

    /**
     * Get brewname
     *
     * @return string
     */
    public function getBrewname()
    {
        return $this->brewname;
    }

    /**
     * Set brewstyle
     *
     * @param string $brewstyle
     */
    public function setBrewstyle($brewstyle)
    {
        $this->brewstyle = $brewstyle;

    }

    /**
     * Get brewstyle
     *
     * @return string
     */
    public function getBrewstyle()
    {
        return $this->brewstyle;
    }

    /**
     * Set brewsource
     *
     * @param string $brewsource
     */
    public function setBrewsource($brewsource)
    {
        $this->brewsource = $brewsource;

    }

    /**
     * Get brewsource
     *
     * @return string
     */
    public function getBrewsource()
    {
        return $this->brewsource;
    }

    /**
     * Set brewyield
     *
     * @param string $brewyield
     */
    public function setBrewyield($brewyield)
    {
        $this->brewyield = $brewyield;

    }

    /**
     * Get brewyield
     *
     * @return string
     */
    public function getBrewyield()
    {
        return $this->brewyield;
    }

    /**
     * Set brewmethod
     *
     * @param string $brewmethod
     */
    public function setBrewmethod($brewmethod)
    {
        $this->brewmethod = $brewmethod;

    }

    /**
     * Get brewmethod
     *
     * @return string
     */
    public function getBrewmethod()
    {
        return $this->brewmethod;
    }

    /**
     * Set brewlink1
     *
     * @param string $brewlink1
     */
    public function setBrewlink1($brewlink1)
    {
        $this->brewlink1 = $brewlink1;

    }

    /**
     * Get brewlink1
     *
     * @return string
     */
    public function getBrewlink1()
    {
        return $this->brewlink1;
    }

    /**
     * Set brewlink1name
     *
     * @param string $brewlink1name
     */
    public function setBrewlink1name($brewlink1name)
    {
        $this->brewlink1name = $brewlink1name;

    }

    /**
     * Get brewlink1name
     *
     * @return string
     */
    public function getBrewlink1name()
    {
        return $this->brewlink1name;
    }

    /**
     * Set brewlink2
     *
     * @param string $brewlink2
     */
    public function setBrewlink2($brewlink2)
    {
        $this->brewlink2 = $brewlink2;

    }

    /**
     * Get brewlink2
     *
     * @return string
     */
    public function getBrewlink2()
    {
        return $this->brewlink2;
    }

    /**
     * Set brewlink2name
     *
     * @param string $brewlink2name
     */
    public function setBrewlink2name($brewlink2name)
    {
        $this->brewlink2name = $brewlink2name;

    }

    /**
     * Get brewlink2name
     *
     * @return string
     */
    public function getBrewlink2name()
    {
        return $this->brewlink2name;
    }

    /**
     * Set brewnotes
     *
     * @param string $brewnotes
     */
    public function setBrewnotes($brewnotes)
    {
        $this->brewnotes = $brewnotes;

    }

    /**
     * Get brewnotes
     *
     * @return string
     */
    public function getBrewnotes()
    {
        return $this->brewnotes;
    }

    /**
     * Set brewextract1
     *
     * @param string $brewextract1
     */
    public function setBrewextract1($brewextract1)
    {
        $this->brewextract1 = $brewextract1;

    }

    /**
     * Get brewextract1
     *
     * @return string
     */
    public function getBrewextract1()
    {
        return $this->brewextract1;
    }

    /**
     * Set brewextract1weight
     *
     * @param string $brewextract1weight
     */
    public function setBrewextract1weight($brewextract1weight)
    {
        $this->brewextract1weight = $brewextract1weight;

    }

    /**
     * Get brewextract1weight
     *
     * @return string
     */
    public function getBrewextract1weight()
    {
        return $this->brewextract1weight;
    }

    /**
     * Set brewextract2
     *
     * @param string $brewextract2
     */
    public function setBrewextract2($brewextract2)
    {
        $this->brewextract2 = $brewextract2;

    }

    /**
     * Get brewextract2
     *
     * @return string
     */
    public function getBrewextract2()
    {
        return $this->brewextract2;
    }

    /**
     * Set brewextract2weight
     *
     * @param string $brewextract2weight
     */
    public function setBrewextract2weight($brewextract2weight)
    {
        $this->brewextract2weight = $brewextract2weight;

    }

    /**
     * Get brewextract2weight
     *
     * @return string
     */
    public function getBrewextract2weight()
    {
        return $this->brewextract2weight;
    }

    /**
     * Set brewextract3
     *
     * @param string $brewextract3
     */
    public function setBrewextract3($brewextract3)
    {
        $this->brewextract3 = $brewextract3;

    }

    /**
     * Get brewextract3
     *
     * @return string
     */
    public function getBrewextract3()
    {
        return $this->brewextract3;
    }

    /**
     * Set brewextract3weight
     *
     * @param string $brewextract3weight
     */
    public function setBrewextract3weight($brewextract3weight)
    {
        $this->brewextract3weight = $brewextract3weight;

    }

    /**
     * Get brewextract3weight
     *
     * @return string
     */
    public function getBrewextract3weight()
    {
        return $this->brewextract3weight;
    }

    /**
     * Set brewextract4
     *
     * @param string $brewextract4
     */
    public function setBrewextract4($brewextract4)
    {
        $this->brewextract4 = $brewextract4;

    }

    /**
     * Get brewextract4
     *
     * @return string
     */
    public function getBrewextract4()
    {
        return $this->brewextract4;
    }

    /**
     * Set brewextract4weight
     *
     * @param string $brewextract4weight
     */
    public function setBrewextract4weight($brewextract4weight)
    {
        $this->brewextract4weight = $brewextract4weight;

    }

    /**
     * Get brewextract4weight
     *
     * @return string
     */
    public function getBrewextract4weight()
    {
        return $this->brewextract4weight;
    }

    /**
     * Set brewextract5
     *
     * @param string $brewextract5
     */
    public function setBrewextract5($brewextract5)
    {
        $this->brewextract5 = $brewextract5;

    }

    /**
     * Get brewextract5
     *
     * @return string
     */
    public function getBrewextract5()
    {
        return $this->brewextract5;
    }

    /**
     * Set brewextract5weight
     *
     * @param string $brewextract5weight
     */
    public function setBrewextract5weight($brewextract5weight)
    {
        $this->brewextract5weight = $brewextract5weight;

    }

    /**
     * Get brewextract5weight
     *
     * @return string
     */
    public function getBrewextract5weight()
    {
        return $this->brewextract5weight;
    }

    /**
     * Set brewgrain1
     *
     * @param string $brewgrain1
     */
    public function setBrewgrain1($brewgrain1)
    {
        $this->brewgrain1 = $brewgrain1;

    }

    /**
     * Get brewgrain1
     *
     * @return string
     */
    public function getBrewgrain1()
    {
        return $this->brewgrain1;
    }

    /**
     * Set brewgrain1weight
     *
     * @param string $brewgrain1weight
     */
    public function setBrewgrain1weight($brewgrain1weight)
    {
        $this->brewgrain1weight = $brewgrain1weight;

    }

    /**
     * Get brewgrain1weight
     *
     * @return string
     */
    public function getBrewgrain1weight()
    {
        return $this->brewgrain1weight;
    }

    /**
     * Set brewgrain2
     *
     * @param string $brewgrain2
     */
    public function setBrewgrain2($brewgrain2)
    {
        $this->brewgrain2 = $brewgrain2;

    }

    /**
     * Get brewgrain2
     *
     * @return string
     */
    public function getBrewgrain2()
    {
        return $this->brewgrain2;
    }

    /**
     * Set brewgrain2weight
     *
     * @param string $brewgrain2weight
     */
    public function setBrewgrain2weight($brewgrain2weight)
    {
        $this->brewgrain2weight = $brewgrain2weight;

    }

    /**
     * Get brewgrain2weight
     *
     * @return string
     */
    public function getBrewgrain2weight()
    {
        return $this->brewgrain2weight;
    }

    /**
     * Set brewgrain3
     *
     * @param string $brewgrain3
     */
    public function setBrewgrain3($brewgrain3)
    {
        $this->brewgrain3 = $brewgrain3;

    }

    /**
     * Get brewgrain3
     *
     * @return string
     */
    public function getBrewgrain3()
    {
        return $this->brewgrain3;
    }

    /**
     * Set brewgrain3weight
     *
     * @param string $brewgrain3weight
     */
    public function setBrewgrain3weight($brewgrain3weight)
    {
        $this->brewgrain3weight = $brewgrain3weight;

    }

    /**
     * Get brewgrain3weight
     *
     * @return string
     */
    public function getBrewgrain3weight()
    {
        return $this->brewgrain3weight;
    }

    /**
     * Set brewgrain4
     *
     * @param string $brewgrain4
     */
    public function setBrewgrain4($brewgrain4)
    {
        $this->brewgrain4 = $brewgrain4;

    }

    /**
     * Get brewgrain4
     *
     * @return string
     */
    public function getBrewgrain4()
    {
        return $this->brewgrain4;
    }

    /**
     * Set brewgrain4weight
     *
     * @param string $brewgrain4weight
     */
    public function setBrewgrain4weight($brewgrain4weight)
    {
        $this->brewgrain4weight = $brewgrain4weight;

    }

    /**
     * Get brewgrain4weight
     *
     * @return string
     */
    public function getBrewgrain4weight()
    {
        return $this->brewgrain4weight;
    }

    /**
     * Set brewgrain5
     *
     * @param string $brewgrain5
     */
    public function setBrewgrain5($brewgrain5)
    {
        $this->brewgrain5 = $brewgrain5;

    }

    /**
     * Get brewgrain5
     *
     * @return string
     */
    public function getBrewgrain5()
    {
        return $this->brewgrain5;
    }

    /**
     * Set brewgrain5weight
     *
     * @param string $brewgrain5weight
     */
    public function setBrewgrain5weight($brewgrain5weight)
    {
        $this->brewgrain5weight = $brewgrain5weight;

    }

    /**
     * Get brewgrain5weight
     *
     * @return string
     */
    public function getBrewgrain5weight()
    {
        return $this->brewgrain5weight;
    }

    /**
     * Set brewgrain6
     *
     * @param string $brewgrain6
     */
    public function setBrewgrain6($brewgrain6)
    {
        $this->brewgrain6 = $brewgrain6;

    }

    /**
     * Get brewgrain6
     *
     * @return string
     */
    public function getBrewgrain6()
    {
        return $this->brewgrain6;
    }

    /**
     * Set brewgrain6weight
     *
     * @param string $brewgrain6weight
     */
    public function setBrewgrain6weight($brewgrain6weight)
    {
        $this->brewgrain6weight = $brewgrain6weight;

    }

    /**
     * Get brewgrain6weight
     *
     * @return string
     */
    public function getBrewgrain6weight()
    {
        return $this->brewgrain6weight;
    }

    /**
     * Set brewgrain7
     *
     * @param string $brewgrain7
     */
    public function setBrewgrain7($brewgrain7)
    {
        $this->brewgrain7 = $brewgrain7;

    }

    /**
     * Get brewgrain7
     *
     * @return string
     */
    public function getBrewgrain7()
    {
        return $this->brewgrain7;
    }

    /**
     * Set brewgrain7weight
     *
     * @param string $brewgrain7weight
     */
    public function setBrewgrain7weight($brewgrain7weight)
    {
        $this->brewgrain7weight = $brewgrain7weight;

    }

    /**
     * Get brewgrain7weight
     *
     * @return string
     */
    public function getBrewgrain7weight()
    {
        return $this->brewgrain7weight;
    }

    /**
     * Set brewgrain8
     *
     * @param string $brewgrain8
     */
    public function setBrewgrain8($brewgrain8)
    {
        $this->brewgrain8 = $brewgrain8;

    }

    /**
     * Get brewgrain8
     *
     * @return string
     */
    public function getBrewgrain8()
    {
        return $this->brewgrain8;
    }

    /**
     * Set brewgrain8weight
     *
     * @param string $brewgrain8weight
     */
    public function setBrewgrain8weight($brewgrain8weight)
    {
        $this->brewgrain8weight = $brewgrain8weight;

    }

    /**
     * Get brewgrain8weight
     *
     * @return string
     */
    public function getBrewgrain8weight()
    {
        return $this->brewgrain8weight;
    }

    /**
     * Set brewgrain9
     *
     * @param string $brewgrain9
     */
    public function setBrewgrain9($brewgrain9)
    {
        $this->brewgrain9 = $brewgrain9;

    }

    /**
     * Get brewgrain9
     *
     * @return string
     */
    public function getBrewgrain9()
    {
        return $this->brewgrain9;
    }

    /**
     * Set brewgrain9weight
     *
     * @param string $brewgrain9weight
     */
    public function setBrewgrain9weight($brewgrain9weight)
    {
        $this->brewgrain9weight = $brewgrain9weight;

    }

    /**
     * Get brewgrain9weight
     *
     * @return string
     */
    public function getBrewgrain9weight()
    {
        return $this->brewgrain9weight;
    }

    /**
     * Set brewgrain10
     *
     * @param string $brewgrain10
     */
    public function setBrewgrain10($brewgrain10)
    {
        $this->brewgrain10 = $brewgrain10;

    }

    /**
     * Get brewgrain10
     *
     * @return string
     */
    public function getBrewgrain10()
    {
        return $this->brewgrain10;
    }

    /**
     * Set brewgrain10weight
     *
     * @param string $brewgrain10weight
     */
    public function setBrewgrain10weight($brewgrain10weight)
    {
        $this->brewgrain10weight = $brewgrain10weight;

    }

    /**
     * Get brewgrain10weight
     *
     * @return string
     */
    public function getBrewgrain10weight()
    {
        return $this->brewgrain10weight;
    }

    /**
     * Set brewgrain11
     *
     * @param string $brewgrain11
     */
    public function setBrewgrain11($brewgrain11)
    {
        $this->brewgrain11 = $brewgrain11;

    }

    /**
     * Get brewgrain11
     *
     * @return string
     */
    public function getBrewgrain11()
    {
        return $this->brewgrain11;
    }

    /**
     * Set brewgrain11weight
     *
     * @param string $brewgrain11weight
     */
    public function setBrewgrain11weight($brewgrain11weight)
    {
        $this->brewgrain11weight = $brewgrain11weight;

    }

    /**
     * Get brewgrain11weight
     *
     * @return string
     */
    public function getBrewgrain11weight()
    {
        return $this->brewgrain11weight;
    }

    /**
     * Set brewgrain12
     *
     * @param string $brewgrain12
     */
    public function setBrewgrain12($brewgrain12)
    {
        $this->brewgrain12 = $brewgrain12;

    }

    /**
     * Get brewgrain12
     *
     * @return string
     */
    public function getBrewgrain12()
    {
        return $this->brewgrain12;
    }

    /**
     * Set brewgrain12weight
     *
     * @param string $brewgrain12weight
     */
    public function setBrewgrain12weight($brewgrain12weight)
    {
        $this->brewgrain12weight = $brewgrain12weight;

    }

    /**
     * Get brewgrain12weight
     *
     * @return string
     */
    public function getBrewgrain12weight()
    {
        return $this->brewgrain12weight;
    }

    /**
     * Set brewgrain13
     *
     * @param string $brewgrain13
     */
    public function setBrewgrain13($brewgrain13)
    {
        $this->brewgrain13 = $brewgrain13;

    }

    /**
     * Get brewgrain13
     *
     * @return string
     */
    public function getBrewgrain13()
    {
        return $this->brewgrain13;
    }

    /**
     * Set brewgrain13weight
     *
     * @param string $brewgrain13weight
     */
    public function setBrewgrain13weight($brewgrain13weight)
    {
        $this->brewgrain13weight = $brewgrain13weight;

    }

    /**
     * Get brewgrain13weight
     *
     * @return string
     */
    public function getBrewgrain13weight()
    {
        return $this->brewgrain13weight;
    }

    /**
     * Set brewgrain14
     *
     * @param string $brewgrain14
     */
    public function setBrewgrain14($brewgrain14)
    {
        $this->brewgrain14 = $brewgrain14;

    }

    /**
     * Get brewgrain14
     *
     * @return string
     */
    public function getBrewgrain14()
    {
        return $this->brewgrain14;
    }

    /**
     * Set brewgrain14weight
     *
     * @param string $brewgrain14weight
     */
    public function setBrewgrain14weight($brewgrain14weight)
    {
        $this->brewgrain14weight = $brewgrain14weight;

    }

    /**
     * Get brewgrain14weight
     *
     * @return string
     */
    public function getBrewgrain14weight()
    {
        return $this->brewgrain14weight;
    }

    /**
     * Set brewgrain15
     *
     * @param string $brewgrain15
     */
    public function setBrewgrain15($brewgrain15)
    {
        $this->brewgrain15 = $brewgrain15;

    }

    /**
     * Get brewgrain15
     *
     * @return string
     */
    public function getBrewgrain15()
    {
        return $this->brewgrain15;
    }

    /**
     * Set brewgrain15weight
     *
     * @param string $brewgrain15weight
     */
    public function setBrewgrain15weight($brewgrain15weight)
    {
        $this->brewgrain15weight = $brewgrain15weight;

    }

    /**
     * Get brewgrain15weight
     *
     * @return string
     */
    public function getBrewgrain15weight()
    {
        return $this->brewgrain15weight;
    }

    /**
     * Set brewaddition1
     *
     * @param string $brewaddition1
     */
    public function setBrewaddition1($brewaddition1)
    {
        $this->brewaddition1 = $brewaddition1;

    }

    /**
     * Get brewaddition1
     *
     * @return string
     */
    public function getBrewaddition1()
    {
        return $this->brewaddition1;
    }

    /**
     * Set brewaddition1amt
     *
     * @param string $brewaddition1amt
     */
    public function setBrewaddition1amt($brewaddition1amt)
    {
        $this->brewaddition1amt = $brewaddition1amt;

    }

    /**
     * Get brewaddition1amt
     *
     * @return string
     */
    public function getBrewaddition1amt()
    {
        return $this->brewaddition1amt;
    }

    /**
     * Set brewaddition2
     *
     * @param string $brewaddition2
     */
    public function setBrewaddition2($brewaddition2)
    {
        $this->brewaddition2 = $brewaddition2;

    }

    /**
     * Get brewaddition2
     *
     * @return string
     */
    public function getBrewaddition2()
    {
        return $this->brewaddition2;
    }

    /**
     * Set brewaddition2amt
     *
     * @param string $brewaddition2amt
     */
    public function setBrewaddition2amt($brewaddition2amt)
    {
        $this->brewaddition2amt = $brewaddition2amt;

    }

    /**
     * Get brewaddition2amt
     *
     * @return string
     */
    public function getBrewaddition2amt()
    {
        return $this->brewaddition2amt;
    }

    /**
     * Set brewaddition3
     *
     * @param string $brewaddition3
     */
    public function setBrewaddition3($brewaddition3)
    {
        $this->brewaddition3 = $brewaddition3;

    }

    /**
     * Get brewaddition3
     *
     * @return string
     */
    public function getBrewaddition3()
    {
        return $this->brewaddition3;
    }

    /**
     * Set brewaddition3amt
     *
     * @param string $brewaddition3amt
     */
    public function setBrewaddition3amt($brewaddition3amt)
    {
        $this->brewaddition3amt = $brewaddition3amt;

    }

    /**
     * Get brewaddition3amt
     *
     * @return string
     */
    public function getBrewaddition3amt()
    {
        return $this->brewaddition3amt;
    }

    /**
     * Set brewaddition4
     *
     * @param string $brewaddition4
     */
    public function setBrewaddition4($brewaddition4)
    {
        $this->brewaddition4 = $brewaddition4;

    }

    /**
     * Get brewaddition4
     *
     * @return string
     */
    public function getBrewaddition4()
    {
        return $this->brewaddition4;
    }

    /**
     * Set brewaddition4amt
     *
     * @param string $brewaddition4amt
     */
    public function setBrewaddition4amt($brewaddition4amt)
    {
        $this->brewaddition4amt = $brewaddition4amt;

    }

    /**
     * Get brewaddition4amt
     *
     * @return string
     */
    public function getBrewaddition4amt()
    {
        return $this->brewaddition4amt;
    }

    /**
     * Set brewaddition5
     *
     * @param string $brewaddition5
     */
    public function setBrewaddition5($brewaddition5)
    {
        $this->brewaddition5 = $brewaddition5;

    }

    /**
     * Get brewaddition5
     *
     * @return string
     */
    public function getBrewaddition5()
    {
        return $this->brewaddition5;
    }

    /**
     * Set brewaddition5amt
     *
     * @param string $brewaddition5amt
     */
    public function setBrewaddition5amt($brewaddition5amt)
    {
        $this->brewaddition5amt = $brewaddition5amt;

    }

    /**
     * Get brewaddition5amt
     *
     * @return string
     */
    public function getBrewaddition5amt()
    {
        return $this->brewaddition5amt;
    }

    /**
     * Set brewaddition6
     *
     * @param string $brewaddition6
     */
    public function setBrewaddition6($brewaddition6)
    {
        $this->brewaddition6 = $brewaddition6;

    }

    /**
     * Get brewaddition6
     *
     * @return string
     */
    public function getBrewaddition6()
    {
        return $this->brewaddition6;
    }

    /**
     * Set brewaddition6amt
     *
     * @param string $brewaddition6amt
     */
    public function setBrewaddition6amt($brewaddition6amt)
    {
        $this->brewaddition6amt = $brewaddition6amt;

    }

    /**
     * Get brewaddition6amt
     *
     * @return string
     */
    public function getBrewaddition6amt()
    {
        return $this->brewaddition6amt;
    }

    /**
     * Set brewaddition7
     *
     * @param string $brewaddition7
     */
    public function setBrewaddition7($brewaddition7)
    {
        $this->brewaddition7 = $brewaddition7;

    }

    /**
     * Get brewaddition7
     *
     * @return string
     */
    public function getBrewaddition7()
    {
        return $this->brewaddition7;
    }

    /**
     * Set brewaddition7amt
     *
     * @param string $brewaddition7amt
     */
    public function setBrewaddition7amt($brewaddition7amt)
    {
        $this->brewaddition7amt = $brewaddition7amt;

    }

    /**
     * Get brewaddition7amt
     *
     * @return string
     */
    public function getBrewaddition7amt()
    {
        return $this->brewaddition7amt;
    }

    /**
     * Set brewaddition8
     *
     * @param string $brewaddition8
     */
    public function setBrewaddition8($brewaddition8)
    {
        $this->brewaddition8 = $brewaddition8;

    }

    /**
     * Get brewaddition8
     *
     * @return string
     */
    public function getBrewaddition8()
    {
        return $this->brewaddition8;
    }

    /**
     * Set brewaddition8amt
     *
     * @param string $brewaddition8amt
     */
    public function setBrewaddition8amt($brewaddition8amt)
    {
        $this->brewaddition8amt = $brewaddition8amt;

    }

    /**
     * Get brewaddition8amt
     *
     * @return string
     */
    public function getBrewaddition8amt()
    {
        return $this->brewaddition8amt;
    }

    /**
     * Set brewaddition9
     *
     * @param string $brewaddition9
     */
    public function setBrewaddition9($brewaddition9)
    {
        $this->brewaddition9 = $brewaddition9;

    }

    /**
     * Get brewaddition9
     *
     * @return string
     */
    public function getBrewaddition9()
    {
        return $this->brewaddition9;
    }

    /**
     * Set brewaddition9amt
     *
     * @param string $brewaddition9amt
     */
    public function setBrewaddition9amt($brewaddition9amt)
    {
        $this->brewaddition9amt = $brewaddition9amt;

    }

    /**
     * Get brewaddition9amt
     *
     * @return string
     */
    public function getBrewaddition9amt()
    {
        return $this->brewaddition9amt;
    }

    /**
     * Set brewmisc1name
     *
     * @param string $brewmisc1name
     */
    public function setBrewmisc1name($brewmisc1name)
    {
        $this->brewmisc1name = $brewmisc1name;

    }

    /**
     * Get brewmisc1name
     *
     * @return string
     */
    public function getBrewmisc1name()
    {
        return $this->brewmisc1name;
    }

    /**
     * Set brewmisc2name
     *
     * @param string $brewmisc2name
     */
    public function setBrewmisc2name($brewmisc2name)
    {
        $this->brewmisc2name = $brewmisc2name;

    }

    /**
     * Get brewmisc2name
     *
     * @return string
     */
    public function getBrewmisc2name()
    {
        return $this->brewmisc2name;
    }

    /**
     * Set brewmisc3name
     *
     * @param string $brewmisc3name
     */
    public function setBrewmisc3name($brewmisc3name)
    {
        $this->brewmisc3name = $brewmisc3name;

    }

    /**
     * Get brewmisc3name
     *
     * @return string
     */
    public function getBrewmisc3name()
    {
        return $this->brewmisc3name;
    }

    /**
     * Set brewmisc4name
     *
     * @param string $brewmisc4name
     */
    public function setBrewmisc4name($brewmisc4name)
    {
        $this->brewmisc4name = $brewmisc4name;

    }

    /**
     * Get brewmisc4name
     *
     * @return string
     */
    public function getBrewmisc4name()
    {
        return $this->brewmisc4name;
    }

    /**
     * Set brewmisc1type
     *
     * @param string $brewmisc1type
     */
    public function setBrewmisc1type($brewmisc1type)
    {
        $this->brewmisc1type = $brewmisc1type;

    }

    /**
     * Get brewmisc1type
     *
     * @return string
     */
    public function getBrewmisc1type()
    {
        return $this->brewmisc1type;
    }

    /**
     * Set brewmisc2type
     *
     * @param string $brewmisc2type
     */
    public function setBrewmisc2type($brewmisc2type)
    {
        $this->brewmisc2type = $brewmisc2type;

    }

    /**
     * Get brewmisc2type
     *
     * @return string
     */
    public function getBrewmisc2type()
    {
        return $this->brewmisc2type;
    }

    /**
     * Set brewmisc3type
     *
     * @param string $brewmisc3type
     */
    public function setBrewmisc3type($brewmisc3type)
    {
        $this->brewmisc3type = $brewmisc3type;

    }

    /**
     * Get brewmisc3type
     *
     * @return string
     */
    public function getBrewmisc3type()
    {
        return $this->brewmisc3type;
    }

    /**
     * Set brewmisc4type
     *
     * @param string $brewmisc4type
     */
    public function setBrewmisc4type($brewmisc4type)
    {
        $this->brewmisc4type = $brewmisc4type;

    }

    /**
     * Get brewmisc4type
     *
     * @return string
     */
    public function getBrewmisc4type()
    {
        return $this->brewmisc4type;
    }

    /**
     * Set brewmisc1use
     *
     * @param string $brewmisc1use
     */
    public function setBrewmisc1use($brewmisc1use)
    {
        $this->brewmisc1use = $brewmisc1use;

    }

    /**
     * Get brewmisc1use
     *
     * @return string
     */
    public function getBrewmisc1use()
    {
        return $this->brewmisc1use;
    }

    /**
     * Set brewmisc2use
     *
     * @param string $brewmisc2use
     */
    public function setBrewmisc2use($brewmisc2use)
    {
        $this->brewmisc2use = $brewmisc2use;

    }

    /**
     * Get brewmisc2use
     *
     * @return string
     */
    public function getBrewmisc2use()
    {
        return $this->brewmisc2use;
    }

    /**
     * Set brewmisc3use
     *
     * @param string $brewmisc3use
     */
    public function setBrewmisc3use($brewmisc3use)
    {
        $this->brewmisc3use = $brewmisc3use;

    }

    /**
     * Get brewmisc3use
     *
     * @return string
     */
    public function getBrewmisc3use()
    {
        return $this->brewmisc3use;
    }

    /**
     * Set brewmisc4use
     *
     * @param string $brewmisc4use
     */
    public function setBrewmisc4use($brewmisc4use)
    {
        $this->brewmisc4use = $brewmisc4use;

    }

    /**
     * Get brewmisc4use
     *
     * @return string
     */
    public function getBrewmisc4use()
    {
        return $this->brewmisc4use;
    }

    /**
     * Set brewmisc1time
     *
     * @param string $brewmisc1time
     */
    public function setBrewmisc1time($brewmisc1time)
    {
        $this->brewmisc1time = $brewmisc1time;

    }

    /**
     * Get brewmisc1time
     *
     * @return string
     */
    public function getBrewmisc1time()
    {
        return $this->brewmisc1time;
    }

    /**
     * Set brewmisc2time
     *
     * @param string $brewmisc2time
     */
    public function setBrewmisc2time($brewmisc2time)
    {
        $this->brewmisc2time = $brewmisc2time;

    }

    /**
     * Get brewmisc2time
     *
     * @return string
     */
    public function getBrewmisc2time()
    {
        return $this->brewmisc2time;
    }

    /**
     * Set brewmisc3time
     *
     * @param string $brewmisc3time
     */
    public function setBrewmisc3time($brewmisc3time)
    {
        $this->brewmisc3time = $brewmisc3time;

    }

    /**
     * Get brewmisc3time
     *
     * @return string
     */
    public function getBrewmisc3time()
    {
        return $this->brewmisc3time;
    }

    /**
     * Set brewmisc4time
     *
     * @param string $brewmisc4time
     */
    public function setBrewmisc4time($brewmisc4time)
    {
        $this->brewmisc4time = $brewmisc4time;

    }

    /**
     * Get brewmisc4time
     *
     * @return string
     */
    public function getBrewmisc4time()
    {
        return $this->brewmisc4time;
    }

    /**
     * Set brewmisc1amount
     *
     * @param string $brewmisc1amount
     */
    public function setBrewmisc1amount($brewmisc1amount)
    {
        $this->brewmisc1amount = $brewmisc1amount;

    }

    /**
     * Get brewmisc1amount
     *
     * @return string
     */
    public function getBrewmisc1amount()
    {
        return $this->brewmisc1amount;
    }

    /**
     * Set brewmisc2amount
     *
     * @param string $brewmisc2amount
     */
    public function setBrewmisc2amount($brewmisc2amount)
    {
        $this->brewmisc2amount = $brewmisc2amount;

    }

    /**
     * Get brewmisc2amount
     *
     * @return string
     */
    public function getBrewmisc2amount()
    {
        return $this->brewmisc2amount;
    }

    /**
     * Set brewmisc3amount
     *
     * @param string $brewmisc3amount
     */
    public function setBrewmisc3amount($brewmisc3amount)
    {
        $this->brewmisc3amount = $brewmisc3amount;

    }

    /**
     * Get brewmisc3amount
     *
     * @return string
     */
    public function getBrewmisc3amount()
    {
        return $this->brewmisc3amount;
    }

    /**
     * Set brewmisc4amount
     *
     * @param string $brewmisc4amount
     */
    public function setBrewmisc4amount($brewmisc4amount)
    {
        $this->brewmisc4amount = $brewmisc4amount;

    }

    /**
     * Get brewmisc4amount
     *
     * @return string
     */
    public function getBrewmisc4amount()
    {
        return $this->brewmisc4amount;
    }

    /**
     * Set brewhops1
     *
     * @param string $brewhops1
     */
    public function setBrewhops1($brewhops1)
    {
        $this->brewhops1 = $brewhops1;

    }

    /**
     * Get brewhops1
     *
     * @return string
     */
    public function getBrewhops1()
    {
        return $this->brewhops1;
    }

    /**
     * Set brewhops1weight
     *
     * @param string $brewhops1weight
     */
    public function setBrewhops1weight($brewhops1weight)
    {
        $this->brewhops1weight = $brewhops1weight;

    }

    /**
     * Get brewhops1weight
     *
     * @return string
     */
    public function getBrewhops1weight()
    {
        return $this->brewhops1weight;
    }

    /**
     * Set brewhops1ibu
     *
     * @param string $brewhops1ibu
     */
    public function setBrewhops1ibu($brewhops1ibu)
    {
        $this->brewhops1ibu = $brewhops1ibu;

    }

    /**
     * Get brewhops1ibu
     *
     * @return string
     */
    public function getBrewhops1ibu()
    {
        return $this->brewhops1ibu;
    }

    /**
     * Set brewhops1time
     *
     * @param string $brewhops1time
     */
    public function setBrewhops1time($brewhops1time)
    {
        $this->brewhops1time = $brewhops1time;

    }

    /**
     * Get brewhops1time
     *
     * @return string
     */
    public function getBrewhops1time()
    {
        return $this->brewhops1time;
    }

    /**
     * Set brewhops2
     *
     * @param string $brewhops2
     */
    public function setBrewhops2($brewhops2)
    {
        $this->brewhops2 = $brewhops2;

    }

    /**
     * Get brewhops2
     *
     * @return string
     */
    public function getBrewhops2()
    {
        return $this->brewhops2;
    }

    /**
     * Set brewhops2weight
     *
     * @param string $brewhops2weight
     */
    public function setBrewhops2weight($brewhops2weight)
    {
        $this->brewhops2weight = $brewhops2weight;

    }

    /**
     * Get brewhops2weight
     *
     * @return string
     */
    public function getBrewhops2weight()
    {
        return $this->brewhops2weight;
    }

    /**
     * Set brewhops2ibu
     *
     * @param string $brewhops2ibu
     */
    public function setBrewhops2ibu($brewhops2ibu)
    {
        $this->brewhops2ibu = $brewhops2ibu;

    }

    /**
     * Get brewhops2ibu
     *
     * @return string
     */
    public function getBrewhops2ibu()
    {
        return $this->brewhops2ibu;
    }

    /**
     * Set brewhops2time
     *
     * @param string $brewhops2time
     */
    public function setBrewhops2time($brewhops2time)
    {
        $this->brewhops2time = $brewhops2time;

    }

    /**
     * Get brewhops2time
     *
     * @return string
     */
    public function getBrewhops2time()
    {
        return $this->brewhops2time;
    }

    /**
     * Set brewhops3
     *
     * @param string $brewhops3
     */
    public function setBrewhops3($brewhops3)
    {
        $this->brewhops3 = $brewhops3;

    }

    /**
     * Get brewhops3
     *
     * @return string
     */
    public function getBrewhops3()
    {
        return $this->brewhops3;
    }

    /**
     * Set brewhops3weight
     *
     * @param string $brewhops3weight
     */
    public function setBrewhops3weight($brewhops3weight)
    {
        $this->brewhops3weight = $brewhops3weight;

    }

    /**
     * Get brewhops3weight
     *
     * @return string
     */
    public function getBrewhops3weight()
    {
        return $this->brewhops3weight;
    }

    /**
     * Set brewhops3ibu
     *
     * @param string $brewhops3ibu
     */
    public function setBrewhops3ibu($brewhops3ibu)
    {
        $this->brewhops3ibu = $brewhops3ibu;

    }

    /**
     * Get brewhops3ibu
     *
     * @return string
     */
    public function getBrewhops3ibu()
    {
        return $this->brewhops3ibu;
    }

    /**
     * Set brewhops3time
     *
     * @param string $brewhops3time
     */
    public function setBrewhops3time($brewhops3time)
    {
        $this->brewhops3time = $brewhops3time;

    }

    /**
     * Get brewhops3time
     *
     * @return string
     */
    public function getBrewhops3time()
    {
        return $this->brewhops3time;
    }

    /**
     * Set brewhops4
     *
     * @param string $brewhops4
     */
    public function setBrewhops4($brewhops4)
    {
        $this->brewhops4 = $brewhops4;

    }

    /**
     * Get brewhops4
     *
     * @return string
     */
    public function getBrewhops4()
    {
        return $this->brewhops4;
    }

    /**
     * Set brewhops4weight
     *
     * @param string $brewhops4weight
     */
    public function setBrewhops4weight($brewhops4weight)
    {
        $this->brewhops4weight = $brewhops4weight;

    }

    /**
     * Get brewhops4weight
     *
     * @return string
     */
    public function getBrewhops4weight()
    {
        return $this->brewhops4weight;
    }

    /**
     * Set brewhops4ibu
     *
     * @param string $brewhops4ibu
     */
    public function setBrewhops4ibu($brewhops4ibu)
    {
        $this->brewhops4ibu = $brewhops4ibu;

    }

    /**
     * Get brewhops4ibu
     *
     * @return string
     */
    public function getBrewhops4ibu()
    {
        return $this->brewhops4ibu;
    }

    /**
     * Set brewhops4time
     *
     * @param string $brewhops4time
     */
    public function setBrewhops4time($brewhops4time)
    {
        $this->brewhops4time = $brewhops4time;

    }

    /**
     * Get brewhops4time
     *
     * @return string
     */
    public function getBrewhops4time()
    {
        return $this->brewhops4time;
    }

    /**
     * Set brewhops5
     *
     * @param string $brewhops5
     */
    public function setBrewhops5($brewhops5)
    {
        $this->brewhops5 = $brewhops5;

    }

    /**
     * Get brewhops5
     *
     * @return string
     */
    public function getBrewhops5()
    {
        return $this->brewhops5;
    }

    /**
     * Set brewhops5weight
     *
     * @param string $brewhops5weight
     */
    public function setBrewhops5weight($brewhops5weight)
    {
        $this->brewhops5weight = $brewhops5weight;

    }

    /**
     * Get brewhops5weight
     *
     * @return string
     */
    public function getBrewhops5weight()
    {
        return $this->brewhops5weight;
    }

    /**
     * Set brewhops5ibu
     *
     * @param string $brewhops5ibu
     */
    public function setBrewhops5ibu($brewhops5ibu)
    {
        $this->brewhops5ibu = $brewhops5ibu;

    }

    /**
     * Get brewhops5ibu
     *
     * @return string
     */
    public function getBrewhops5ibu()
    {
        return $this->brewhops5ibu;
    }

    /**
     * Set brewhops5time
     *
     * @param string $brewhops5time
     */
    public function setBrewhops5time($brewhops5time)
    {
        $this->brewhops5time = $brewhops5time;

    }

    /**
     * Get brewhops5time
     *
     * @return string
     */
    public function getBrewhops5time()
    {
        return $this->brewhops5time;
    }

    /**
     * Set brewhops6
     *
     * @param string $brewhops6
     */
    public function setBrewhops6($brewhops6)
    {
        $this->brewhops6 = $brewhops6;

    }

    /**
     * Get brewhops6
     *
     * @return string
     */
    public function getBrewhops6()
    {
        return $this->brewhops6;
    }

    /**
     * Set brewhops6weight
     *
     * @param string $brewhops6weight
     */
    public function setBrewhops6weight($brewhops6weight)
    {
        $this->brewhops6weight = $brewhops6weight;

    }

    /**
     * Get brewhops6weight
     *
     * @return string
     */
    public function getBrewhops6weight()
    {
        return $this->brewhops6weight;
    }

    /**
     * Set brewhops6ibu
     *
     * @param string $brewhops6ibu
     */
    public function setBrewhops6ibu($brewhops6ibu)
    {
        $this->brewhops6ibu = $brewhops6ibu;

    }

    /**
     * Get brewhops6ibu
     *
     * @return string
     */
    public function getBrewhops6ibu()
    {
        return $this->brewhops6ibu;
    }

    /**
     * Set brewhops6time
     *
     * @param string $brewhops6time
     */
    public function setBrewhops6time($brewhops6time)
    {
        $this->brewhops6time = $brewhops6time;

    }

    /**
     * Get brewhops6time
     *
     * @return string
     */
    public function getBrewhops6time()
    {
        return $this->brewhops6time;
    }

    /**
     * Set brewhops7
     *
     * @param string $brewhops7
     */
    public function setBrewhops7($brewhops7)
    {
        $this->brewhops7 = $brewhops7;

    }

    /**
     * Get brewhops7
     *
     * @return string
     */
    public function getBrewhops7()
    {
        return $this->brewhops7;
    }

    /**
     * Set brewhops7weight
     *
     * @param string $brewhops7weight
     */
    public function setBrewhops7weight($brewhops7weight)
    {
        $this->brewhops7weight = $brewhops7weight;

    }

    /**
     * Get brewhops7weight
     *
     * @return string
     */
    public function getBrewhops7weight()
    {
        return $this->brewhops7weight;
    }

    /**
     * Set brewhops7ibu
     *
     * @param string $brewhops7ibu
     */
    public function setBrewhops7ibu($brewhops7ibu)
    {
        $this->brewhops7ibu = $brewhops7ibu;

    }

    /**
     * Get brewhops7ibu
     *
     * @return string
     */
    public function getBrewhops7ibu()
    {
        return $this->brewhops7ibu;
    }

    /**
     * Set brewhops7time
     *
     * @param string $brewhops7time
     */
    public function setBrewhops7time($brewhops7time)
    {
        $this->brewhops7time = $brewhops7time;

    }

    /**
     * Get brewhops7time
     *
     * @return string
     */
    public function getBrewhops7time()
    {
        return $this->brewhops7time;
    }

    /**
     * Set brewhops8
     *
     * @param string $brewhops8
     */
    public function setBrewhops8($brewhops8)
    {
        $this->brewhops8 = $brewhops8;

    }

    /**
     * Get brewhops8
     *
     * @return string
     */
    public function getBrewhops8()
    {
        return $this->brewhops8;
    }

    /**
     * Set brewhops8weight
     *
     * @param string $brewhops8weight
     */
    public function setBrewhops8weight($brewhops8weight)
    {
        $this->brewhops8weight = $brewhops8weight;

    }

    /**
     * Get brewhops8weight
     *
     * @return string
     */
    public function getBrewhops8weight()
    {
        return $this->brewhops8weight;
    }

    /**
     * Set brewhops8ibu
     *
     * @param string $brewhops8ibu
     */
    public function setBrewhops8ibu($brewhops8ibu)
    {
        $this->brewhops8ibu = $brewhops8ibu;

    }

    /**
     * Get brewhops8ibu
     *
     * @return string
     */
    public function getBrewhops8ibu()
    {
        return $this->brewhops8ibu;
    }

    /**
     * Set brewhops8time
     *
     * @param string $brewhops8time
     */
    public function setBrewhops8time($brewhops8time)
    {
        $this->brewhops8time = $brewhops8time;

    }

    /**
     * Get brewhops8time
     *
     * @return string
     */
    public function getBrewhops8time()
    {
        return $this->brewhops8time;
    }

    /**
     * Set brewhops9
     *
     * @param string $brewhops9
     */
    public function setBrewhops9($brewhops9)
    {
        $this->brewhops9 = $brewhops9;

    }

    /**
     * Get brewhops9
     *
     * @return string
     */
    public function getBrewhops9()
    {
        return $this->brewhops9;
    }

    /**
     * Set brewhops9weight
     *
     * @param string $brewhops9weight
     */
    public function setBrewhops9weight($brewhops9weight)
    {
        $this->brewhops9weight = $brewhops9weight;

    }

    /**
     * Get brewhops9weight
     *
     * @return string
     */
    public function getBrewhops9weight()
    {
        return $this->brewhops9weight;
    }

    /**
     * Set brewhops9ibu
     *
     * @param string $brewhops9ibu
     */
    public function setBrewhops9ibu($brewhops9ibu)
    {
        $this->brewhops9ibu = $brewhops9ibu;

    }

    /**
     * Get brewhops9ibu
     *
     * @return string
     */
    public function getBrewhops9ibu()
    {
        return $this->brewhops9ibu;
    }

    /**
     * Set brewhops9time
     *
     * @param string $brewhops9time
     */
    public function setBrewhops9time($brewhops9time)
    {
        $this->brewhops9time = $brewhops9time;

    }

    /**
     * Get brewhops9time
     *
     * @return string
     */
    public function getBrewhops9time()
    {
        return $this->brewhops9time;
    }

    /**
     * Set brewhops1use
     *
     * @param string $brewhops1use
     */
    public function setBrewhops1use($brewhops1use)
    {
        $this->brewhops1use = $brewhops1use;

    }

    /**
     * Get brewhops1use
     *
     * @return string
     */
    public function getBrewhops1use()
    {
        return $this->brewhops1use;
    }

    /**
     * Set brewhops2use
     *
     * @param string $brewhops2use
     */
    public function setBrewhops2use($brewhops2use)
    {
        $this->brewhops2use = $brewhops2use;

    }

    /**
     * Get brewhops2use
     *
     * @return string
     */
    public function getBrewhops2use()
    {
        return $this->brewhops2use;
    }

    /**
     * Set brewhops3use
     *
     * @param string $brewhops3use
     */
    public function setBrewhops3use($brewhops3use)
    {
        $this->brewhops3use = $brewhops3use;

    }

    /**
     * Get brewhops3use
     *
     * @return string
     */
    public function getBrewhops3use()
    {
        return $this->brewhops3use;
    }

    /**
     * Set brewhops4use
     *
     * @param string $brewhops4use
     */
    public function setBrewhops4use($brewhops4use)
    {
        $this->brewhops4use = $brewhops4use;

    }

    /**
     * Get brewhops4use
     *
     * @return string
     */
    public function getBrewhops4use()
    {
        return $this->brewhops4use;
    }

    /**
     * Set brewhops5use
     *
     * @param string $brewhops5use
     */
    public function setBrewhops5use($brewhops5use)
    {
        $this->brewhops5use = $brewhops5use;

    }

    /**
     * Get brewhops5use
     *
     * @return string
     */
    public function getBrewhops5use()
    {
        return $this->brewhops5use;
    }

    /**
     * Set brewhops6use
     *
     * @param string $brewhops6use
     */
    public function setBrewhops6use($brewhops6use)
    {
        $this->brewhops6use = $brewhops6use;

    }

    /**
     * Get brewhops6use
     *
     * @return string
     */
    public function getBrewhops6use()
    {
        return $this->brewhops6use;
    }

    /**
     * Set brewhops7use
     *
     * @param string $brewhops7use
     */
    public function setBrewhops7use($brewhops7use)
    {
        $this->brewhops7use = $brewhops7use;

    }

    /**
     * Get brewhops7use
     *
     * @return string
     */
    public function getBrewhops7use()
    {
        return $this->brewhops7use;
    }

    /**
     * Set brewhops8use
     *
     * @param string $brewhops8use
     */
    public function setBrewhops8use($brewhops8use)
    {
        $this->brewhops8use = $brewhops8use;

    }

    /**
     * Get brewhops8use
     *
     * @return string
     */
    public function getBrewhops8use()
    {
        return $this->brewhops8use;
    }

    /**
     * Set brewhops9use
     *
     * @param string $brewhops9use
     */
    public function setBrewhops9use($brewhops9use)
    {
        $this->brewhops9use = $brewhops9use;

    }

    /**
     * Get brewhops9use
     *
     * @return string
     */
    public function getBrewhops9use()
    {
        return $this->brewhops9use;
    }

    /**
     * Set brewhops1type
     *
     * @param string $brewhops1type
     */
    public function setBrewhops1type($brewhops1type)
    {
        $this->brewhops1type = $brewhops1type;

    }

    /**
     * Get brewhops1type
     *
     * @return string
     */
    public function getBrewhops1type()
    {
        return $this->brewhops1type;
    }

    /**
     * Set brewhops2type
     *
     * @param string $brewhops2type
     */
    public function setBrewhops2type($brewhops2type)
    {
        $this->brewhops2type = $brewhops2type;

    }

    /**
     * Get brewhops2type
     *
     * @return string
     */
    public function getBrewhops2type()
    {
        return $this->brewhops2type;
    }

    /**
     * Set brewhops3type
     *
     * @param string $brewhops3type
     */
    public function setBrewhops3type($brewhops3type)
    {
        $this->brewhops3type = $brewhops3type;

    }

    /**
     * Get brewhops3type
     *
     * @return string
     */
    public function getBrewhops3type()
    {
        return $this->brewhops3type;
    }

    /**
     * Set brewhops4type
     *
     * @param string $brewhops4type
     */
    public function setBrewhops4type($brewhops4type)
    {
        $this->brewhops4type = $brewhops4type;

    }

    /**
     * Get brewhops4type
     *
     * @return string
     */
    public function getBrewhops4type()
    {
        return $this->brewhops4type;
    }

    /**
     * Set brewhops5type
     *
     * @param string $brewhops5type
     */
    public function setBrewhops5type($brewhops5type)
    {
        $this->brewhops5type = $brewhops5type;

    }

    /**
     * Get brewhops5type
     *
     * @return string
     */
    public function getBrewhops5type()
    {
        return $this->brewhops5type;
    }

    /**
     * Set brewhops6type
     *
     * @param string $brewhops6type
     */
    public function setBrewhops6type($brewhops6type)
    {
        $this->brewhops6type = $brewhops6type;

    }

    /**
     * Get brewhops6type
     *
     * @return string
     */
    public function getBrewhops6type()
    {
        return $this->brewhops6type;
    }

    /**
     * Set brewhops7type
     *
     * @param string $brewhops7type
     */
    public function setBrewhops7type($brewhops7type)
    {
        $this->brewhops7type = $brewhops7type;

    }

    /**
     * Get brewhops7type
     *
     * @return string
     */
    public function getBrewhops7type()
    {
        return $this->brewhops7type;
    }

    /**
     * Set brewhops8type
     *
     * @param string $brewhops8type
     */
    public function setBrewhops8type($brewhops8type)
    {
        $this->brewhops8type = $brewhops8type;

    }

    /**
     * Get brewhops8type
     *
     * @return string
     */
    public function getBrewhops8type()
    {
        return $this->brewhops8type;
    }

    /**
     * Set brewhops9type
     *
     * @param string $brewhops9type
     */
    public function setBrewhops9type($brewhops9type)
    {
        $this->brewhops9type = $brewhops9type;

    }

    /**
     * Get brewhops9type
     *
     * @return string
     */
    public function getBrewhops9type()
    {
        return $this->brewhops9type;
    }

    /**
     * Set brewhops1form
     *
     * @param string $brewhops1form
     */
    public function setBrewhops1form($brewhops1form)
    {
        $this->brewhops1form = $brewhops1form;

    }

    /**
     * Get brewhops1form
     *
     * @return string
     */
    public function getBrewhops1form()
    {
        return $this->brewhops1form;
    }

    /**
     * Set brewhops2form
     *
     * @param string $brewhops2form
     */
    public function setBrewhops2form($brewhops2form)
    {
        $this->brewhops2form = $brewhops2form;

    }

    /**
     * Get brewhops2form
     *
     * @return string
     */
    public function getBrewhops2form()
    {
        return $this->brewhops2form;
    }

    /**
     * Set brewhops3form
     *
     * @param string $brewhops3form
     */
    public function setBrewhops3form($brewhops3form)
    {
        $this->brewhops3form = $brewhops3form;

    }

    /**
     * Get brewhops3form
     *
     * @return string
     */
    public function getBrewhops3form()
    {
        return $this->brewhops3form;
    }

    /**
     * Set brewhops4form
     *
     * @param string $brewhops4form
     */
    public function setBrewhops4form($brewhops4form)
    {
        $this->brewhops4form = $brewhops4form;

    }

    /**
     * Get brewhops4form
     *
     * @return string
     */
    public function getBrewhops4form()
    {
        return $this->brewhops4form;
    }

    /**
     * Set brewhops5form
     *
     * @param string $brewhops5form
     */
    public function setBrewhops5form($brewhops5form)
    {
        $this->brewhops5form = $brewhops5form;

    }

    /**
     * Get brewhops5form
     *
     * @return string
     */
    public function getBrewhops5form()
    {
        return $this->brewhops5form;
    }

    /**
     * Set brewhops6form
     *
     * @param string $brewhops6form
     */
    public function setBrewhops6form($brewhops6form)
    {
        $this->brewhops6form = $brewhops6form;

    }

    /**
     * Get brewhops6form
     *
     * @return string
     */
    public function getBrewhops6form()
    {
        return $this->brewhops6form;
    }

    /**
     * Set brewhops7form
     *
     * @param string $brewhops7form
     */
    public function setBrewhops7form($brewhops7form)
    {
        $this->brewhops7form = $brewhops7form;

    }

    /**
     * Get brewhops7form
     *
     * @return string
     */
    public function getBrewhops7form()
    {
        return $this->brewhops7form;
    }

    /**
     * Set brewhops8form
     *
     * @param string $brewhops8form
     */
    public function setBrewhops8form($brewhops8form)
    {
        $this->brewhops8form = $brewhops8form;

    }

    /**
     * Get brewhops8form
     *
     * @return string
     */
    public function getBrewhops8form()
    {
        return $this->brewhops8form;
    }

    /**
     * Set brewhops9form
     *
     * @param string $brewhops9form
     */
    public function setBrewhops9form($brewhops9form)
    {
        $this->brewhops9form = $brewhops9form;

    }

    /**
     * Get brewhops9form
     *
     * @return string
     */
    public function getBrewhops9form()
    {
        return $this->brewhops9form;
    }

    /**
     * Set brewhops10
     *
     * @param string $brewhops10
     */
    public function setBrewhops10($brewhops10)
    {
        $this->brewhops10 = $brewhops10;

    }

    /**
     * Get brewhops10
     *
     * @return string
     */
    public function getBrewhops10()
    {
        return $this->brewhops10;
    }

    /**
     * Set brewhops10weight
     *
     * @param string $brewhops10weight
     */
    public function setBrewhops10weight($brewhops10weight)
    {
        $this->brewhops10weight = $brewhops10weight;

    }

    /**
     * Get brewhops10weight
     *
     * @return string
     */
    public function getBrewhops10weight()
    {
        return $this->brewhops10weight;
    }

    /**
     * Set brewhops10ibu
     *
     * @param string $brewhops10ibu
     */
    public function setBrewhops10ibu($brewhops10ibu)
    {
        $this->brewhops10ibu = $brewhops10ibu;

    }

    /**
     * Get brewhops10ibu
     *
     * @return string
     */
    public function getBrewhops10ibu()
    {
        return $this->brewhops10ibu;
    }

    /**
     * Set brewhops10time
     *
     * @param string $brewhops10time
     */
    public function setBrewhops10time($brewhops10time)
    {
        $this->brewhops10time = $brewhops10time;

    }

    /**
     * Get brewhops10time
     *
     * @return string
     */
    public function getBrewhops10time()
    {
        return $this->brewhops10time;
    }

    /**
     * Set brewhops10use
     *
     * @param string $brewhops10use
     */
    public function setBrewhops10use($brewhops10use)
    {
        $this->brewhops10use = $brewhops10use;

    }

    /**
     * Get brewhops10use
     *
     * @return string
     */
    public function getBrewhops10use()
    {
        return $this->brewhops10use;
    }

    /**
     * Set brewhops10type
     *
     * @param string $brewhops10type
     */
    public function setBrewhops10type($brewhops10type)
    {
        $this->brewhops10type = $brewhops10type;

    }

    /**
     * Get brewhops10type
     *
     * @return string
     */
    public function getBrewhops10type()
    {
        return $this->brewhops10type;
    }

    /**
     * Set brewhops10form
     *
     * @param string $brewhops10form
     */
    public function setBrewhops10form($brewhops10form)
    {
        $this->brewhops10form = $brewhops10form;

    }

    /**
     * Get brewhops10form
     *
     * @return string
     */
    public function getBrewhops10form()
    {
        return $this->brewhops10form;
    }

    /**
     * Set brewhops11
     *
     * @param string $brewhops11
     */
    public function setBrewhops11($brewhops11)
    {
        $this->brewhops11 = $brewhops11;

    }

    /**
     * Get brewhops11
     *
     * @return string
     */
    public function getBrewhops11()
    {
        return $this->brewhops11;
    }

    /**
     * Set brewhops11weight
     *
     * @param string $brewhops11weight
     */
    public function setBrewhops11weight($brewhops11weight)
    {
        $this->brewhops11weight = $brewhops11weight;

    }

    /**
     * Get brewhops11weight
     *
     * @return string
     */
    public function getBrewhops11weight()
    {
        return $this->brewhops11weight;
    }

    /**
     * Set brewhops11ibu
     *
     * @param string $brewhops11ibu
     */
    public function setBrewhops11ibu($brewhops11ibu)
    {
        $this->brewhops11ibu = $brewhops11ibu;

    }

    /**
     * Get brewhops11ibu
     *
     * @return string
     */
    public function getBrewhops11ibu()
    {
        return $this->brewhops11ibu;
    }

    /**
     * Set brewhops11time
     *
     * @param string $brewhops11time
     */
    public function setBrewhops11time($brewhops11time)
    {
        $this->brewhops11time = $brewhops11time;

    }

    /**
     * Get brewhops11time
     *
     * @return string
     */
    public function getBrewhops11time()
    {
        return $this->brewhops11time;
    }

    /**
     * Set brewhops11use
     *
     * @param string $brewhops11use
     */
    public function setBrewhops11use($brewhops11use)
    {
        $this->brewhops11use = $brewhops11use;

    }

    /**
     * Get brewhops11use
     *
     * @return string
     */
    public function getBrewhops11use()
    {
        return $this->brewhops11use;
    }

    /**
     * Set brewhops11type
     *
     * @param string $brewhops11type
     */
    public function setBrewhops11type($brewhops11type)
    {
        $this->brewhops11type = $brewhops11type;

    }

    /**
     * Get brewhops11type
     *
     * @return string
     */
    public function getBrewhops11type()
    {
        return $this->brewhops11type;
    }

    /**
     * Set brewhops11form
     *
     * @param string $brewhops11form
     */
    public function setBrewhops11form($brewhops11form)
    {
        $this->brewhops11form = $brewhops11form;

    }

    /**
     * Get brewhops11form
     *
     * @return string
     */
    public function getBrewhops11form()
    {
        return $this->brewhops11form;
    }

    /**
     * Set brewhops12
     *
     * @param string $brewhops12
     */
    public function setBrewhops12($brewhops12)
    {
        $this->brewhops12 = $brewhops12;

    }

    /**
     * Get brewhops12
     *
     * @return string
     */
    public function getBrewhops12()
    {
        return $this->brewhops12;
    }

    /**
     * Set brewhops12weight
     *
     * @param string $brewhops12weight
     */
    public function setBrewhops12weight($brewhops12weight)
    {
        $this->brewhops12weight = $brewhops12weight;

    }

    /**
     * Get brewhops12weight
     *
     * @return string
     */
    public function getBrewhops12weight()
    {
        return $this->brewhops12weight;
    }

    /**
     * Set brewhops12ibu
     *
     * @param string $brewhops12ibu
     */
    public function setBrewhops12ibu($brewhops12ibu)
    {
        $this->brewhops12ibu = $brewhops12ibu;

    }

    /**
     * Get brewhops12ibu
     *
     * @return string
     */
    public function getBrewhops12ibu()
    {
        return $this->brewhops12ibu;
    }

    /**
     * Set brewhops12time
     *
     * @param string $brewhops12time
     */
    public function setBrewhops12time($brewhops12time)
    {
        $this->brewhops12time = $brewhops12time;

    }

    /**
     * Get brewhops12time
     *
     * @return string
     */
    public function getBrewhops12time()
    {
        return $this->brewhops12time;
    }

    /**
     * Set brewhops12use
     *
     * @param string $brewhops12use
     */
    public function setBrewhops12use($brewhops12use)
    {
        $this->brewhops12use = $brewhops12use;

    }

    /**
     * Get brewhops12use
     *
     * @return string
     */
    public function getBrewhops12use()
    {
        return $this->brewhops12use;
    }

    /**
     * Set brewhops12type
     *
     * @param string $brewhops12type
     */
    public function setBrewhops12type($brewhops12type)
    {
        $this->brewhops12type = $brewhops12type;

    }

    /**
     * Get brewhops12type
     *
     * @return string
     */
    public function getBrewhops12type()
    {
        return $this->brewhops12type;
    }

    /**
     * Set brewhops12form
     *
     * @param string $brewhops12form
     */
    public function setBrewhops12form($brewhops12form)
    {
        $this->brewhops12form = $brewhops12form;

    }

    /**
     * Get brewhops12form
     *
     * @return string
     */
    public function getBrewhops12form()
    {
        return $this->brewhops12form;
    }

    /**
     * Set brewhops13
     *
     * @param string $brewhops13
     */
    public function setBrewhops13($brewhops13)
    {
        $this->brewhops13 = $brewhops13;

    }

    /**
     * Get brewhops13
     *
     * @return string
     */
    public function getBrewhops13()
    {
        return $this->brewhops13;
    }

    /**
     * Set brewhops13weight
     *
     * @param string $brewhops13weight
     */
    public function setBrewhops13weight($brewhops13weight)
    {
        $this->brewhops13weight = $brewhops13weight;

    }

    /**
     * Get brewhops13weight
     *
     * @return string
     */
    public function getBrewhops13weight()
    {
        return $this->brewhops13weight;
    }

    /**
     * Set brewhops13ibu
     *
     * @param string $brewhops13ibu
     */
    public function setBrewhops13ibu($brewhops13ibu)
    {
        $this->brewhops13ibu = $brewhops13ibu;

    }

    /**
     * Get brewhops13ibu
     *
     * @return string
     */
    public function getBrewhops13ibu()
    {
        return $this->brewhops13ibu;
    }

    /**
     * Set brewhops13time
     *
     * @param string $brewhops13time
     */
    public function setBrewhops13time($brewhops13time)
    {
        $this->brewhops13time = $brewhops13time;

    }

    /**
     * Get brewhops13time
     *
     * @return string
     */
    public function getBrewhops13time()
    {
        return $this->brewhops13time;
    }

    /**
     * Set brewhops13use
     *
     * @param string $brewhops13use
     */
    public function setBrewhops13use($brewhops13use)
    {
        $this->brewhops13use = $brewhops13use;

    }

    /**
     * Get brewhops13use
     *
     * @return string
     */
    public function getBrewhops13use()
    {
        return $this->brewhops13use;
    }

    /**
     * Set brewhops13type
     *
     * @param string $brewhops13type
     */
    public function setBrewhops13type($brewhops13type)
    {
        $this->brewhops13type = $brewhops13type;

    }

    /**
     * Get brewhops13type
     *
     * @return string
     */
    public function getBrewhops13type()
    {
        return $this->brewhops13type;
    }

    /**
     * Set brewhops13form
     *
     * @param string $brewhops13form
     */
    public function setBrewhops13form($brewhops13form)
    {
        $this->brewhops13form = $brewhops13form;

    }

    /**
     * Get brewhops13form
     *
     * @return string
     */
    public function getBrewhops13form()
    {
        return $this->brewhops13form;
    }

    /**
     * Set brewhops14
     *
     * @param string $brewhops14
     */
    public function setBrewhops14($brewhops14)
    {
        $this->brewhops14 = $brewhops14;

    }

    /**
     * Get brewhops14
     *
     * @return string
     */
    public function getBrewhops14()
    {
        return $this->brewhops14;
    }

    /**
     * Set brewhops14weight
     *
     * @param string $brewhops14weight
     */
    public function setBrewhops14weight($brewhops14weight)
    {
        $this->brewhops14weight = $brewhops14weight;

    }

    /**
     * Get brewhops14weight
     *
     * @return string
     */
    public function getBrewhops14weight()
    {
        return $this->brewhops14weight;
    }

    /**
     * Set brewhops14ibu
     *
     * @param string $brewhops14ibu
     */
    public function setBrewhops14ibu($brewhops14ibu)
    {
        $this->brewhops14ibu = $brewhops14ibu;

    }

    /**
     * Get brewhops14ibu
     *
     * @return string
     */
    public function getBrewhops14ibu()
    {
        return $this->brewhops14ibu;
    }

    /**
     * Set brewhops14time
     *
     * @param string $brewhops14time
     */
    public function setBrewhops14time($brewhops14time)
    {
        $this->brewhops14time = $brewhops14time;

    }

    /**
     * Get brewhops14time
     *
     * @return string
     */
    public function getBrewhops14time()
    {
        return $this->brewhops14time;
    }

    /**
     * Set brewhops14use
     *
     * @param string $brewhops14use
     */
    public function setBrewhops14use($brewhops14use)
    {
        $this->brewhops14use = $brewhops14use;

    }

    /**
     * Get brewhops14use
     *
     * @return string
     */
    public function getBrewhops14use()
    {
        return $this->brewhops14use;
    }

    /**
     * Set brewhops14type
     *
     * @param string $brewhops14type
     */
    public function setBrewhops14type($brewhops14type)
    {
        $this->brewhops14type = $brewhops14type;

    }

    /**
     * Get brewhops14type
     *
     * @return string
     */
    public function getBrewhops14type()
    {
        return $this->brewhops14type;
    }

    /**
     * Set brewhops14form
     *
     * @param string $brewhops14form
     */
    public function setBrewhops14form($brewhops14form)
    {
        $this->brewhops14form = $brewhops14form;

    }

    /**
     * Get brewhops14form
     *
     * @return string
     */
    public function getBrewhops14form()
    {
        return $this->brewhops14form;
    }

    /**
     * Set brewhops15
     *
     * @param string $brewhops15
     */
    public function setBrewhops15($brewhops15)
    {
        $this->brewhops15 = $brewhops15;

    }

    /**
     * Get brewhops15
     *
     * @return string
     */
    public function getBrewhops15()
    {
        return $this->brewhops15;
    }

    /**
     * Set brewhops15weight
     *
     * @param string $brewhops15weight
     */
    public function setBrewhops15weight($brewhops15weight)
    {
        $this->brewhops15weight = $brewhops15weight;

    }

    /**
     * Get brewhops15weight
     *
     * @return string
     */
    public function getBrewhops15weight()
    {
        return $this->brewhops15weight;
    }

    /**
     * Set brewhops15ibu
     *
     * @param string $brewhops15ibu
     */
    public function setBrewhops15ibu($brewhops15ibu)
    {
        $this->brewhops15ibu = $brewhops15ibu;

    }

    /**
     * Get brewhops15ibu
     *
     * @return string
     */
    public function getBrewhops15ibu()
    {
        return $this->brewhops15ibu;
    }

    /**
     * Set brewhops15time
     *
     * @param string $brewhops15time
     */
    public function setBrewhops15time($brewhops15time)
    {
        $this->brewhops15time = $brewhops15time;

    }

    /**
     * Get brewhops15time
     *
     * @return string
     */
    public function getBrewhops15time()
    {
        return $this->brewhops15time;
    }

    /**
     * Set brewhops15use
     *
     * @param string $brewhops15use
     */
    public function setBrewhops15use($brewhops15use)
    {
        $this->brewhops15use = $brewhops15use;

    }

    /**
     * Get brewhops15use
     *
     * @return string
     */
    public function getBrewhops15use()
    {
        return $this->brewhops15use;
    }

    /**
     * Set brewhops15type
     *
     * @param string $brewhops15type
     */
    public function setBrewhops15type($brewhops15type)
    {
        $this->brewhops15type = $brewhops15type;

    }

    /**
     * Get brewhops15type
     *
     * @return string
     */
    public function getBrewhops15type()
    {
        return $this->brewhops15type;
    }

    /**
     * Set brewhops15form
     *
     * @param string $brewhops15form
     */
    public function setBrewhops15form($brewhops15form)
    {
        $this->brewhops15form = $brewhops15form;

    }

    /**
     * Get brewhops15form
     *
     * @return string
     */
    public function getBrewhops15form()
    {
        return $this->brewhops15form;
    }

    /**
     * Set brewyeast
     *
     * @param string $brewyeast
     */
    public function setBrewyeast($brewyeast)
    {
        $this->brewyeast = $brewyeast;

    }

    /**
     * Get brewyeast
     *
     * @return string
     */
    public function getBrewyeast()
    {
        return $this->brewyeast;
    }

    /**
     * Set brewyeastman
     *
     * @param string $brewyeastman
     */
    public function setBrewyeastman($brewyeastman)
    {
        $this->brewyeastman = $brewyeastman;

    }

    /**
     * Get brewyeastman
     *
     * @return string
     */
    public function getBrewyeastman()
    {
        return $this->brewyeastman;
    }

    /**
     * Set brewyeastform
     *
     * @param string $brewyeastform
     */
    public function setBrewyeastform($brewyeastform)
    {
        $this->brewyeastform = $brewyeastform;

    }

    /**
     * Get brewyeastform
     *
     * @return string
     */
    public function getBrewyeastform()
    {
        return $this->brewyeastform;
    }

    /**
     * Set brewyeasttype
     *
     * @param string $brewyeasttype
     */
    public function setBrewyeasttype($brewyeasttype)
    {
        $this->brewyeasttype = $brewyeasttype;

    }

    /**
     * Get brewyeasttype
     *
     * @return string
     */
    public function getBrewyeasttype()
    {
        return $this->brewyeasttype;
    }

    /**
     * Set brewyeastamount
     *
     * @param string $brewyeastamount
     */
    public function setBrewyeastamount($brewyeastamount)
    {
        $this->brewyeastamount = $brewyeastamount;

    }

    /**
     * Get brewyeastamount
     *
     * @return string
     */
    public function getBrewyeastamount()
    {
        return $this->brewyeastamount;
    }

    /**
     * Set brewlabelimage
     *
     * @param string $brewlabelimage
     */
    public function setBrewlabelimage($brewlabelimage)
    {
        $this->brewlabelimage = $brewlabelimage;

    }

    /**
     * Get brewlabelimage
     *
     * @return string
     */
    public function getBrewlabelimage()
    {
        return $this->brewlabelimage;
    }

    /**
     * Set brewog
     *
     * @param string $brewog
     */
    public function setBrewog($brewog)
    {
        $this->brewog = $brewog;

    }

    /**
     * Get brewog
     *
     * @return string
     */
    public function getBrewog()
    {
        return $this->brewog;
    }

    /**
     * Set brewfg
     *
     * @param string $brewfg
     */
    public function setBrewfg($brewfg)
    {
        $this->brewfg = $brewfg;

    }

    /**
     * Get brewfg
     *
     * @return string
     */
    public function getBrewfg()
    {
        return $this->brewfg;
    }

    /**
     * Set brewprocedure
     *
     * @param string $brewprocedure
     */
    public function setBrewprocedure($brewprocedure)
    {
        $this->brewprocedure = $brewprocedure;

    }

    /**
     * Get brewprocedure
     *
     * @return string
     */
    public function getBrewprocedure()
    {
        return $this->brewprocedure;
    }

    /**
     * Set brewprimary
     *
     * @param string $brewprimary
     */
    public function setBrewprimary($brewprimary)
    {
        $this->brewprimary = $brewprimary;

    }

    /**
     * Get brewprimary
     *
     * @return string
     */
    public function getBrewprimary()
    {
        return $this->brewprimary;
    }

    /**
     * Set brewprimarytemp
     *
     * @param string $brewprimarytemp
     */
    public function setBrewprimarytemp($brewprimarytemp)
    {
        $this->brewprimarytemp = $brewprimarytemp;

    }

    /**
     * Get brewprimarytemp
     *
     * @return string
     */
    public function getBrewprimarytemp()
    {
        return $this->brewprimarytemp;
    }

    /**
     * Set brewsecondary
     *
     * @param string $brewsecondary
     */
    public function setBrewsecondary($brewsecondary)
    {
        $this->brewsecondary = $brewsecondary;

    }

    /**
     * Get brewsecondary
     *
     * @return string
     */
    public function getBrewsecondary()
    {
        return $this->brewsecondary;
    }

    /**
     * Set brewsecondarytemp
     *
     * @param string $brewsecondarytemp
     */
    public function setBrewsecondarytemp($brewsecondarytemp)
    {
        $this->brewsecondarytemp = $brewsecondarytemp;

    }

    /**
     * Get brewsecondarytemp
     *
     * @return string
     */
    public function getBrewsecondarytemp()
    {
        return $this->brewsecondarytemp;
    }

    /**
     * Set brewtertiary
     *
     * @param string $brewtertiary
     */
    public function setBrewtertiary($brewtertiary)
    {
        $this->brewtertiary = $brewtertiary;

    }

    /**
     * Get brewtertiary
     *
     * @return string
     */
    public function getBrewtertiary()
    {
        return $this->brewtertiary;
    }

    /**
     * Set brewtertiarytemp
     *
     * @param string $brewtertiarytemp
     */
    public function setBrewtertiarytemp($brewtertiarytemp)
    {
        $this->brewtertiarytemp = $brewtertiarytemp;

    }

    /**
     * Get brewtertiarytemp
     *
     * @return string
     */
    public function getBrewtertiarytemp()
    {
        return $this->brewtertiarytemp;
    }

    /**
     * Set brewlager
     *
     * @param string $brewlager
     */
    public function setBrewlager($brewlager)
    {
        $this->brewlager = $brewlager;

    }

    /**
     * Get brewlager
     *
     * @return string
     */
    public function getBrewlager()
    {
        return $this->brewlager;
    }

    /**
     * Set brewlagertemp
     *
     * @param string $brewlagertemp
     */
    public function setBrewlagertemp($brewlagertemp)
    {
        $this->brewlagertemp = $brewlagertemp;

    }

    /**
     * Get brewlagertemp
     *
     * @return string
     */
    public function getBrewlagertemp()
    {
        return $this->brewlagertemp;
    }

    /**
     * Set brewage
     *
     * @param string $brewage
     */
    public function setBrewage($brewage)
    {
        $this->brewage = $brewage;

    }

    /**
     * Get brewage
     *
     * @return string
     */
    public function getBrewage()
    {
        return $this->brewage;
    }

    /**
     * Set brewagetemp
     *
     * @param string $brewagetemp
     */
    public function setBrewagetemp($brewagetemp)
    {
        $this->brewagetemp = $brewagetemp;

    }

    /**
     * Get brewagetemp
     *
     * @return string
     */
    public function getBrewagetemp()
    {
        return $this->brewagetemp;
    }

    /**
     * Set brewbitterness
     *
     * @param float $brewbitterness
     */
    public function setBrewbitterness($brewbitterness)
    {
        $this->brewbitterness = $brewbitterness;

    }

    /**
     * Get brewbitterness
     *
     * @return float
     */
    public function getBrewbitterness()
    {
        return $this->brewbitterness;
    }

    /**
     * Set brewibuformula
     *
     * @param string $brewibuformula
     */
    public function setBrewibuformula($brewibuformula)
    {
        $this->brewibuformula = $brewibuformula;

    }

    /**
     * Get brewibuformula
     *
     * @return string
     */
    public function getBrewibuformula()
    {
        return $this->brewibuformula;
    }

    /**
     * Set brewlovibond
     *
     * @param float $brewlovibond
     */
    public function setBrewlovibond($brewlovibond)
    {
        $this->brewlovibond = $brewlovibond;

    }

    /**
     * Get brewlovibond
     *
     * @return float
     */
    public function getBrewlovibond()
    {
        return $this->brewlovibond;
    }

    /**
     * Set brewcolorformula
     *
     * @param string $brewcolorformula
     */
    public function setBrewcolorformula($brewcolorformula)
    {
        $this->brewcolorformula = $brewcolorformula;

    }

    /**
     * Get brewcolorformula
     *
     * @return string
     */
    public function getBrewcolorformula()
    {
        return $this->brewcolorformula;
    }

    /**
     * Set brewbrewerid
     *
     * @param string $brewbrewerid
     */
    public function setBrewbrewerid($brewbrewerid)
    {
        $this->brewbrewerid = $brewbrewerid;

    }

    /**
     * Get brewbrewerid
     *
     * @return string
     */
    public function getBrewbrewerid()
    {
        return $this->brewbrewerid;
    }

    /**
     * Set brewboiltime
     *
     * @param integer $brewboiltime
     */
    public function setBrewboiltime($brewboiltime)
    {
        $this->brewboiltime = $brewboiltime;

    }

    /**
     * Get brewboiltime
     *
     * @return integer
     */
    public function getBrewboiltime()
    {
        return $this->brewboiltime;
    }

    /**
     * Set brewfeatured
     *
     * @param string $brewfeatured
     */
    public function setBrewfeatured($brewfeatured)
    {
        $this->brewfeatured = $brewfeatured;

    }

    /**
     * Get brewfeatured
     *
     * @return string
     */
    public function getBrewfeatured()
    {
        return $this->brewfeatured;
    }

    /**
     * Set brewmashprofile
     *
     * @param integer $brewmashprofile
     */
    public function setBrewmashprofile($brewmashprofile)
    {
        $this->brewmashprofile = $brewmashprofile;

    }

    /**
     * Get brewmashprofile
     *
     * @return integer
     */
    public function getBrewmashprofile()
    {
        return $this->brewmashprofile;
    }

    /**
     * Set brewwaterprofile
     *
     * @param integer $brewwaterprofile
     */
    public function setBrewwaterprofile($brewwaterprofile)
    {
        $this->brewwaterprofile = $brewwaterprofile;

    }

    /**
     * Get brewwaterprofile
     *
     * @return integer
     */
    public function getBrewwaterprofile()
    {
        return $this->brewwaterprofile;
    }

    /**
     * Set brewyeastprofile
     *
     * @param integer $brewyeastprofile
     */
    public function setBrewyeastprofile($brewyeastprofile)
    {
        $this->brewyeastprofile = $brewyeastprofile;

    }

    /**
     * Get brewyeastprofile
     *
     * @return integer
     */
    public function getBrewyeastprofile()
    {
        return $this->brewyeastprofile;
    }

    /**
     * Set brewarchive
     *
     * @param string $brewarchive
     */
    public function setBrewarchive($brewarchive)
    {
        $this->brewarchive = $brewarchive;

    }

    /**
     * Get brewarchive
     *
     * @return string
     */
    public function getBrewarchive()
    {
        return $this->brewarchive;
    }

    /**
     * Get id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }
}
