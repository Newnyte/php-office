<?php

namespace PhpOffice\PhpSpreadsheetTests\Calculation\Functions\LookupRef;

use PhpOffice\PhpSpreadsheet\Calculation\Calculation;
use PhpOffice\PhpSpreadsheet\Calculation\Functions;
use PhpOffice\PhpSpreadsheet\Calculation\LookupRef;
use PHPUnit\Framework\TestCase;

class ColumnsTest extends TestCase
{
    protected function setUp(): void
    {
        Functions::setCompatibilityMode(Functions::COMPATIBILITY_EXCEL);
    }

    /**
     * @dataProvider providerCOLUMNS
     *
     * @param mixed $expectedResult
     */
    public function testCOLUMNS($expectedResult, ...$args): void
    {
        $result = LookupRef::COLUMNS(...$args);
        self::assertEquals($expectedResult, $result);
    }

    public function providerCOLUMNS(): array
    {
        return require 'tests/data/Calculation/LookupRef/COLUMNS.php';
    }

    /**
     * @dataProvider providerColumnsArray
     */
    public function testColumnsArray(int $expectedResult, string $argument): void
    {
        $calculation = Calculation::getInstance();

        $formula = "=COLUMNS({$argument})";
        $result = $calculation->_calculateFormulaValue($formula);
        self::assertEquals($expectedResult, $result);
    }

    public function providerColumnsArray(): array
    {
        return [
            [
                3,
                '{1,2,3;4,5,6}',
            ],
            [
                5,
                '{1,2,3,4,5}',
            ],
            [
                1,
                '{1;2;3;4;5}',
            ],
        ];
    }
}
