var fs = require('fs');
var CsvReadableStream = require('csv-reader');

var inputStream = fs.createReadStream('multiline.csv', 'utf8');

inputStream
    .pipe(CsvReadableStream({ delimiter: ';' }))
    .on('data', function (row) {
        console.log('A row arrived: ', row);
    })
    .on('end', function (data) {
        console.log('No more rows!');
    });


/*
$ node node/csv_reader.js

A row arrived:  [ 'column1', 'column2', 'column3' ]
A row arrived:  [ '1', 'Multi line\ntext\nfield', 'last value' ]
A row arrived:  [ '2', 'Multi line\ntext\nfield', 'last value' ]
A row arrived:  [ '3', 'Multi line\ntext\nfield', 'last value' ]
No more rows!
*/
