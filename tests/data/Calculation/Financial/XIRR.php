<?php

// result, message, values, dates, guess

return [
    [
        '#NUM!',
        'If values and dates contain a different number of values, returns the #NUM! error value',
        [4000, -46000],
        ['2015-01-04'],
        0.1,
    ],
    [
        '#NUM!',
        'Expects at least one positive cash flow and one negative cash flow; otherwise returns the #NUM! error value',
        [-4000, -46000],
        ['2015-01-04', '2019-06-27'],
        0.1,
    ],
    [
        '#NUM!',
        'Expects at least one positive cash flow and one negative cash flow; otherwise returns the #NUM! error value',
        [4000, 46000],
        ['2015-01-04', '2019-06-27'],
        0.1,
    ],
    [
        '#VALUE!',
        'If any number in dates is not a valid date, returns the #VALUE! error value',
        [4000, -46000],
        ['2015-01-04', '2019X06-27'],
        0.1,
    ],
    [
        '#VALUE!',
        'If any entry in values is not numeric, returns the #VALUE! error value',
        ['y', -46000],
        ['2015-01-04', '2019-06-27'],
        0.1,
    ],
    [
        '#NUM!',
        'If values is not an array, returns the #NUM! error value',
        -46000,
        ['2015-01-04', '2019-06-27'],
        0.1,
    ],
    [
        '#NUM!',
        'If dates is not an array but values is, returns the #NUM! error value',
        [4000, -46000],
        '2015-01-04',
        0.1,
    ],
    [
        '#N/A',
        'If neither dates nor values is an array, returns the #N/A error value',
        4000,
        '2015-01-04',
        0.1,
    ],
    [
        '#VALUE!',
        'Return VALUE error if guess is non-numeric',
        [1893.67, 139947.43, 52573.25, 48849.74, 26369.16, -273029.18],
        ['2019-06-27', '2019-06-20', '2019-06-21', '2019-06-24', '2019-06-27', '2019-07-27'],
        'XYZ',
    ],
    [
        0.137963527441025,
        'Dates can be in any order after all',
        [1893.67, 139947.43, 52573.25, 48849.74, 26369.16, -273029.18],
        ['2019-06-27', '2019-06-20', '2019-06-21', '2019-06-24', '2019-06-27', '2019-07-27'],
        0.1,
    ],
    [
        0.77868869226873,
        'XIRR calculation #0 is incorrect',
        [4000, -46000],
        ['2015-04-01', '2019-06-27'],
        0.1,
    ],
    [
        0.137963527441025,
        'XIRR calculation #1 is incorrect',
        [139947.43, 1893.67, 52573.25, 48849.74, 26369.16, -273029.18],
        ['2019-06-20', '2019-06-27', '2019-06-21', '2019-06-24', '2019-06-27', '2019-07-27'],
        0.1,
    ],
    [
        0.09999999,
        'XIRR calculation #2 is incorrect',
        [100.0, -110.0],
        ['2019-06-12', '2020-06-11'],
        0.1,
    ],
    [
        3235.159644,
        'XIRR calculation #3 is incorrect',
        [1.0, 1893.67, 52573.25, 48849.74, 26369.16, -273029.18],
        ['2019-06-27', '2019-06-27', '2019-06-21', '2019-06-24', '2019-06-27', '2019-07-27'],
    ],
    [
        0.15467888,
        'XIRR calculation #4 is incorrect',
        [1893.67, 139947.43, 52573.25, 48849.74, 26369.16, -273029.18],
        ['2019-06-20', '2019-06-27', '2019-06-21', '2019-06-24', '2019-06-27', '2019-07-27'],
    ],
    [
        -0.197387315,
        'XIRR calculation #5 is incorrect',
        [-100, 20, 40, 25],
        ['2010-01-01', '2010-04-01', '2010-10-01', '2011-02-01'],
    ],
    [
        3.434984565,
        'XIRR calculation #6 is incorrect',
        [-10000, 2750, 4250, 3250, 2750, 46000],
        ['2008-01-01', '2008-03-01', '2008-10-30', '2009-02-15', '2009-04-01', '2009-06-01'],
    ],
    [
        0.13796353,
        'Substitute for guess=0',
        [139947.43, 1893.67, 52573.25, 48849.74, 26369.16, -273029.18],
        ['2019-06-20', '2019-06-27', '2019-06-21', '2019-06-24', '2019-06-27', '2019-07-27'],
        0.00000,
    ],
    [
        0.13796353,
        'Substitute when guess is empty cell',
        [139947.43, 1893.67, 52573.25, 48849.74, 26369.16, -273029.18],
        ['2019-06-20', '2019-06-27', '2019-06-21', '2019-06-24', '2019-06-27', '2019-07-27'],
        'C1',
    ],
    [
        '#NUM!',
        'Can\'t find a result2 that works after FINANCIAL_MAX_ITERATIONS tries, the #NUM! error value is returned',
        [-10000, 10000, -10000, 5],
        ['2010-01-15', '2010-04-16', '2010-07-16', '2010-10-15'],
    ],
    [
        -0.642307613,
        'See issue #2469 - non-convergence with initial guess',
        [55600, -51094.83],
        ['2021-11-24', '2021-12-24'],
    ],
    [
        -0.642307613,
        'See issue #2469 - non-convergence with initial guess equal to correct answer',
        [55600, -51094.83],
        ['2021-11-24', '2021-12-24'],
        -0.642307613,
    ],
    [
        'exception',
        'Only one argument should cause exception',
        ['2021-11-24', '2021-12-24'],
    ],
    [
        'exception',
        'No argument should cause exception',
    ],
    [
        0,
        'DeCampo One year no growth',
        [-1000, 1000],
        ['2010-01-01', '2011-01-01'],
    ],
    [
        0.1,
        'DeCampo One year growth',
        [-1000, 1100],
        ['2010-01-01', '2011-01-01'],
    ],
    [
        -0.1,
        'DeCampo One year decline',
        [-1000, 900],
        ['2010-01-01', '2011-01-01'],
    ],
    [
        0.1212676,
        'DeCampo vs spreadsheet',
        [-1000, -1000, -1000, -1000, 4300],
        ['2010-01-01', '2010-04-01', '2010-07-01', '2010-10-01', '2011-01-01'],
    ],
    [
        0.1212676,
        'DeCampo vs spreadsheet reordered',
        [-1000, 4300, -1000, -1000, -1000],
        ['2010-10-01', '2011-01-01', '2010-07-01', '2010-01-01', '2010-04-01'],
    ],
    [
        2.0,
        'DeCampo Over 100% growth',
        [-1000, 3000],
        ['2010-01-01', '2011-01-01'],
    ],
    [
        '#NUM!', // -1.0, DeCampo accounts for this case, Excel doesn't
        'DeCampo Total loss one year, agree with Excel not DeCampo',
        [-1000, 0],
        ['2010-01-01', '2011-01-01'],
    ],
    [
        '#NUM!', // -1.0, DeCampo accounts for this case, Excel doesn't
        'DeCampo Total loss two years, agree with Excel not DeCampo',
        [-1000, 0],
        ['2010-01-01', '2012-01-01'],
    ],
    [
        0.2504234710540838,
        'DeCampo Readme example',
        [-1000, -2500, -1000, 5050],
        ['2016-01-15', '2016-02-08', '2016-04-17', '2016-08-24'],
    ],
    [
        0.2126861,
        'DeCampo from nodejs',
        [-10000, 3027.25, 630.68, 2018.2, 1513.62, 1765.89, 4036.33, 4036.33, 1513.62, 1513.62, 2018.16, 1513.62, 1009.08, 1513.62, 1513.62, 1765.89, 1765.89, 22421.55],
        ['2000-05-24', '2000-06-05', '2001-04-09', '2004-02-24', '2005-03-18', '2006-02-15', '2007-01-10', '2007-11-14', '2008-12-17', '2010-01-15', '2011-01-14', '2012-02-03', '2013-01-18', '2014-01-24', '2015-01-30', '2016-01-22', '2017-01-20', '2017-06-05'],
    ],
    [
        '#NUM!', //-0.7640294,
        'DeCampo issue5a, agree with Excel not DeCampo',
        [-2610, -2589, -5110, -2550, -5086, -2561, -5040, -2552, -2530, 29520],
        ['2001-06-22', '2001-07-03', '2001-07-05', '2001-07-06', '2001-07-09', '2001-07-10', '2001-07-12', '2001-07-13', '2001-07-16', '2001-07-17'],
    ],
    [
        '#NUM!', //-0.8353404,
        'DeCampo issue5b, agree with Excel not DeCampo',
        [-2610, -2589, -5110, -2550, -5086, -2561, -5040, -2552, -2530, -9840, 38900],
        ['2001-06-22', '2001-07-03', '2001-07-05', '2001-07-06', '2001-07-09', '2001-07-10', '2001-07-12', '2001-07-13', '2001-07-16', '2001-07-17', '2001-07-18'],
    ],
    [
        412461.6383,
        'Python XIRR test line 20',
        [-100, 1000],
        ['2019-12-31', '2020-03-05'],
    ],
    [
        1.223853529e16,
        'Python XIRR test line 21',
        [-2236.3994659663, -47.3417585212, -46.52619316339632, 10424.74612565936, -13.077972551952],
        ['2017-12-16', '2017-12-26', '2017-12-29', '2017-12-31', '2017-12-20'],
    ],
    [
        '#NUM!', //-1,
        'Python XIRR test line 39, agree with Excel not Python',
        [18902, 83600, -5780, -4080, -56780, -2210, -2380, 33975, 23067.98, -1619.57],
        ['2016-04-06', '2016-05-04', '2016-05-12', '2017-05-08', '2017-07-03', '2018-05-07', '2019-05-06', '2019-10-01', '2020-03-13', '2020-05-07'],
    ],
];
