"""
Showcase csv reading with multi-line values using ';' as delimiter.
"""
import csv


with open('../multiline.csv') as csvfile:
    csvreader = csv.reader(csvfile, delimiter=';')
    for row in csvreader:
        print row


"""
$ python csv_reader.py
['column1', 'column2', 'column3']
['1', 'Multi line\ntext\nfield', 'last value']
['2', 'Multi line\ntext\nfield', 'last value']
['3', 'Multi line\ntext\nfield', 'last value']
"""
