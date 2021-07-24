<?php

class Language_heILTest extends LanguageTestBase
{
    protected function getLangInstance()
    {
        return new Stillat\Numeral\Languages\Language_heIL;
    }

    protected $formatTests = [
        [10000, '0,0.0000', '10,000.0000'],
        [10000.23, '0,0', '10,000'],
        [-10000, '0,0.0', '-10,000.0'],
        [10000.1234, '0.000', '10000.123'],
        [-10000, '(0,0.0000)', '(10,000.0000)'],
        [-0.23, '.00', '-.23'],
        [-0.23, '(.00)', '(.23)'],
        [0.23, '0.00000', '0.23000'],
        [1230974, '0.0a', '1.2\u05de\u05dc\u05d9\u05d5\u05df'],
        [1460, '0a', '1\u05d0\u05dc\u05e3'],
        [-104000, '0a', '-104\u05d0\u05dc\u05e3'],
        [1, '0o', '1'],
        [52, '0o', '52'],
        [23, '0o', '23'],
        [100, '0o', '100'],
        [1, '0[.]0', '1']
    ];

    protected $currencyTests = [
        [1000.234, '$0,0.00', '\u20aa1,000.23'],
        [-1000.234, '($0,0)', '(\u20aa1,000)'],
        [-1000.234, '$0.00', '-\u20aa1000.23'],
        [1230974, '($0.00a)', '\u20aa1.23\u05de\u05dc\u05d9\u05d5\u05df']
    ];

    protected $percentageTests = [
        [1,'0%','100%'],
        [0.974878234,'0.000%','97.488%'],
        [-0.43,'0%','-43%'],
        [0.43,'(0.000%)','43.000%']
    ];

    protected $unformatTests = [
        ['10,000.123',10000.123],
        ['(0.12345)',-0.12345],
        ['($1.23\u05de\u05dc\u05d9\u05d5\u05df)',-1230000],
        ['10\u05d0\u05dc\u05e3',10000],
        ['-10\u05d0\u05dc\u05e3',-10000],
        ['23',23],
        ['\u20aa10,000.00',10000],
        ['-76%',-0.76],
        ['2:23:57',8637]
    ];

}