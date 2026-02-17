<?php

use CCDI\CDE\V2\Data\PreservationMethod;
use CCDI\Transformer\V0\PreservationMethodTransformer;
use PHPUnit\Framework\TestCase;

class PreservationMethodTransformerTest extends TestCase
{
    public function test_minus_20_degrees_input()
    {
        $this->assertTrue(PreservationMethod::validate('-20 degrees C'));
        $this->assertTrue(PreservationMethod::validate(PreservationMethodTransformer::transform('-20 degrees c', 'permissible_value')));
        $this->assertTrue(PreservationMethod::validate(PreservationMethodTransformer::transform('-20 Degrees C', 'permissible_value')));
    }

    public function test_minus_80_degrees_input()
    {
        $this->assertTrue(PreservationMethod::validate('-80 degrees C'));
        $this->assertTrue(PreservationMethod::validate(PreservationMethodTransformer::transform('-80 degrees c', 'permissible_value')));
        $this->assertTrue(PreservationMethod::validate(PreservationMethodTransformer::transform('-80 Degrees C', 'permissible_value')));
    }

    public function test_cryopreserved_input()
    {
        $this->assertTrue(PreservationMethod::validate('Cryopreserved'));
        $this->assertTrue(PreservationMethod::validate(PreservationMethodTransformer::transform('cryopreserved', 'permissible_value')));
        $this->assertTrue(PreservationMethod::validate(PreservationMethodTransformer::transform('CRYOPRESERVED', 'permissible_value')));
        $this->assertTrue(PreservationMethod::validate(PreservationMethodTransformer::transform('Cryopreserved', 'permissible_value')));
    }

    public function test_cytospin_slide_input()
    {
        $this->assertTrue(PreservationMethod::validate('Cytospin Slide'));
        $this->assertTrue(PreservationMethod::validate(PreservationMethodTransformer::transform('cytospin slide', 'permissible_value')));
        $this->assertTrue(PreservationMethod::validate(PreservationMethodTransformer::transform('CYTOSPIN SLIDE', 'permissible_value')));
        $this->assertTrue(PreservationMethod::validate(PreservationMethodTransformer::transform('Cytospin Slide', 'permissible_value')));
    }

    public function test_edta_input()
    {
        $this->assertTrue(PreservationMethod::validate('EDTA'));
        $this->assertTrue(PreservationMethod::validate(PreservationMethodTransformer::transform('edta', 'permissible_value')));
        $this->assertTrue(PreservationMethod::validate(PreservationMethodTransformer::transform('EDTA', 'permissible_value')));
        $this->assertTrue(PreservationMethod::validate(PreservationMethodTransformer::transform('Edta', 'permissible_value')));
    }

    public function test_ffpe_input()
    {
        $this->assertTrue(PreservationMethod::validate('FFPE'));
        $this->assertTrue(PreservationMethod::validate(PreservationMethodTransformer::transform('ffpe', 'permissible_value')));
        $this->assertTrue(PreservationMethod::validate(PreservationMethodTransformer::transform('FFPE', 'permissible_value')));
        $this->assertTrue(PreservationMethod::validate(PreservationMethodTransformer::transform('Ffpe', 'permissible_value')));
    }

    public function test_formalin_fixed_buffered_input()
    {
        $this->assertTrue(PreservationMethod::validate('Formalin Fixed - Buffered'));
        $this->assertTrue(PreservationMethod::validate(PreservationMethodTransformer::transform('formalin fixed - buffered', 'permissible_value')));
        $this->assertTrue(PreservationMethod::validate(PreservationMethodTransformer::transform('FORMALIN FIXED - BUFFERED', 'permissible_value')));
        $this->assertTrue(PreservationMethod::validate(PreservationMethodTransformer::transform('Formalin Fixed - Buffered', 'permissible_value')));
    }

    public function test_formalin_fixed_unbuffered_input()
    {
        $this->assertTrue(PreservationMethod::validate('Formalin Fixed - Unbuffered'));
        $this->assertTrue(PreservationMethod::validate(PreservationMethodTransformer::transform('formalin fixed - unbuffered', 'permissible_value')));
        $this->assertTrue(PreservationMethod::validate(PreservationMethodTransformer::transform('FORMALIN FIXED - UNBUFFERED', 'permissible_value')));
        $this->assertTrue(PreservationMethod::validate(PreservationMethodTransformer::transform('Formalin Fixed - Unbuffered', 'permissible_value')));
    }

    public function test_formalin_fixed_tissue_input()
    {
        $this->assertTrue(PreservationMethod::validate('Formalin Fixed Tissue'));
        $this->assertTrue(PreservationMethod::validate(PreservationMethodTransformer::transform('formalin fixed tissue', 'permissible_value')));
        $this->assertTrue(PreservationMethod::validate(PreservationMethodTransformer::transform('FORMALIN FIXED TISSUE', 'permissible_value')));
        $this->assertTrue(PreservationMethod::validate(PreservationMethodTransformer::transform('Formalin Fixed Tissue', 'permissible_value')));
    }

    public function test_fresh_input()
    {
        $this->assertTrue(PreservationMethod::validate('Fresh'));
        $this->assertTrue(PreservationMethod::validate(PreservationMethodTransformer::transform('fresh', 'permissible_value')));
        $this->assertTrue(PreservationMethod::validate(PreservationMethodTransformer::transform('FRESH', 'permissible_value')));
        $this->assertTrue(PreservationMethod::validate(PreservationMethodTransformer::transform('Fresh', 'permissible_value')));
    }

    public function test_fresh_dissociated_input()
    {
        $this->assertTrue(PreservationMethod::validate('Fresh Dissociated'));
        $this->assertTrue(PreservationMethod::validate(PreservationMethodTransformer::transform('fresh dissociated', 'permissible_value')));
        $this->assertTrue(PreservationMethod::validate(PreservationMethodTransformer::transform('FRESH DISSOCIATED', 'permissible_value')));
        $this->assertTrue(PreservationMethod::validate(PreservationMethodTransformer::transform('Fresh Dissociated', 'permissible_value')));
    }

    public function test_fresh_dissociated_single_cell_sorted_input()
    {
        $this->assertTrue(PreservationMethod::validate('Fresh Dissociated and Single Cell Sorted'));
        $this->assertTrue(PreservationMethod::validate(PreservationMethodTransformer::transform('fresh dissociated and single cell sorted', 'permissible_value')));
        $this->assertTrue(PreservationMethod::validate(PreservationMethodTransformer::transform('FRESH DISSOCIATED AND SINGLE CELL SORTED', 'permissible_value')));
        $this->assertTrue(PreservationMethod::validate(PreservationMethodTransformer::transform('Fresh Dissociated and Single Cell Sorted', 'permissible_value')));
    }

    public function test_fresh_dissociated_single_cell_sorted_plates_input()
    {
        $this->assertTrue(PreservationMethod::validate('Fresh Dissociated and Single Cell Sorted into Plates'));
        $this->assertTrue(PreservationMethod::validate(PreservationMethodTransformer::transform('fresh dissociated and single cell sorted into plates', 'permissible_value')));
        $this->assertTrue(PreservationMethod::validate(PreservationMethodTransformer::transform('FRESH DISSOCIATED AND SINGLE CELL SORTED INTO PLATES', 'permissible_value')));
        $this->assertTrue(PreservationMethod::validate(PreservationMethodTransformer::transform('Fresh Dissociated and Single Cell Sorted into Plates', 'permissible_value')));
    }

    public function test_frozen_input()
    {
        $this->assertTrue(PreservationMethod::validate('Frozen'));
        $this->assertTrue(PreservationMethod::validate(PreservationMethodTransformer::transform('frozen', 'permissible_value')));
        $this->assertTrue(PreservationMethod::validate(PreservationMethodTransformer::transform('FROZEN', 'permissible_value')));
        $this->assertTrue(PreservationMethod::validate(PreservationMethodTransformer::transform('Frozen', 'permissible_value')));
    }

    public function test_isopentane_input()
    {
        $this->assertTrue(PreservationMethod::validate('Isopentane'));
        $this->assertTrue(PreservationMethod::validate(PreservationMethodTransformer::transform('isopentane', 'permissible_value')));
        $this->assertTrue(PreservationMethod::validate(PreservationMethodTransformer::transform('ISOPENTANE', 'permissible_value')));
        $this->assertTrue(PreservationMethod::validate(PreservationMethodTransformer::transform('Isopentane', 'permissible_value')));
    }

    public function test_liquid_nitrogen_input()
    {
        $this->assertTrue(PreservationMethod::validate('Liquid Nitrogen'));
        $this->assertTrue(PreservationMethod::validate(PreservationMethodTransformer::transform('liquid nitrogen', 'permissible_value')));
        $this->assertTrue(PreservationMethod::validate(PreservationMethodTransformer::transform('LIQUID NITROGEN', 'permissible_value')));
        $this->assertTrue(PreservationMethod::validate(PreservationMethodTransformer::transform('Liquid Nitrogen', 'permissible_value')));
    }

    public function test_not_applicable_input()
    {
        $this->assertTrue(PreservationMethod::validate('Not Applicable'));
        $this->assertTrue(PreservationMethod::validate(PreservationMethodTransformer::transform('not applicable', 'permissible_value')));
        $this->assertTrue(PreservationMethod::validate(PreservationMethodTransformer::transform('NOT APPLICABLE', 'permissible_value')));
        $this->assertTrue(PreservationMethod::validate(PreservationMethodTransformer::transform('Not Applicable', 'permissible_value')));
    }

    public function test_not_reported_input()
    {
        $this->assertTrue(PreservationMethod::validate('Not Reported'));
        $this->assertTrue(PreservationMethod::validate(PreservationMethodTransformer::transform('not reported', 'permissible_value')));
        $this->assertTrue(PreservationMethod::validate(PreservationMethodTransformer::transform('NOT REPORTED', 'permissible_value')));
        $this->assertTrue(PreservationMethod::validate(PreservationMethodTransformer::transform('Not Reported', 'permissible_value')));
    }

    public function test_oct_input()
    {
        $this->assertTrue(PreservationMethod::validate('OCT'));
        $this->assertTrue(PreservationMethod::validate(PreservationMethodTransformer::transform('oct', 'permissible_value')));
        $this->assertTrue(PreservationMethod::validate(PreservationMethodTransformer::transform('OCT', 'permissible_value')));
        $this->assertTrue(PreservationMethod::validate(PreservationMethodTransformer::transform('Oct', 'permissible_value')));
    }

    public function test_rnalater_input()
    {
        $this->assertTrue(PreservationMethod::validate('RNALater'));
        $this->assertTrue(PreservationMethod::validate(PreservationMethodTransformer::transform('rnalater', 'permissible_value')));
        $this->assertTrue(PreservationMethod::validate(PreservationMethodTransformer::transform('RNALATER', 'permissible_value')));
        $this->assertTrue(PreservationMethod::validate(PreservationMethodTransformer::transform('RNALater', 'permissible_value')));
    }

    public function test_snap_frozen_input()
    {
        $this->assertTrue(PreservationMethod::validate('Snap Frozen'));
        $this->assertTrue(PreservationMethod::validate(PreservationMethodTransformer::transform('snap frozen', 'permissible_value')));
        $this->assertTrue(PreservationMethod::validate(PreservationMethodTransformer::transform('SNAP FROZEN', 'permissible_value')));
        $this->assertTrue(PreservationMethod::validate(PreservationMethodTransformer::transform('Snap Frozen', 'permissible_value')));
    }

    public function test_trizol_input()
    {
        $this->assertTrue(PreservationMethod::validate('TRIzol'));
        $this->assertTrue(PreservationMethod::validate(PreservationMethodTransformer::transform('trizol', 'permissible_value')));
        $this->assertTrue(PreservationMethod::validate(PreservationMethodTransformer::transform('TRIZOL', 'permissible_value')));
        $this->assertTrue(PreservationMethod::validate(PreservationMethodTransformer::transform('Trizol', 'permissible_value')));
    }

    public function test_unknown_input()
    {
        $this->assertTrue(PreservationMethod::validate('Unknown'));
        $this->assertTrue(PreservationMethod::validate(PreservationMethodTransformer::transform('unknown', 'permissible_value')));
        $this->assertTrue(PreservationMethod::validate(PreservationMethodTransformer::transform('UNKNOWN', 'permissible_value')));
        $this->assertTrue(PreservationMethod::validate(PreservationMethodTransformer::transform('Unknown', 'permissible_value')));
    }
}
