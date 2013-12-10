#!/usr/bin/env python

import csv
import json
import sys

# `data` will contain one item for each source in the graph.
data = []

def usage():
    print 'Usage:'
    print '\t./create_dag_data [DATAFILE] [OUTFILE]\n'

def main(argv):
    if len(argv) != 3:
        usage()
        exit(1)

    DATAFILE = argv[1]
    OUTFILE = argv[2]

    with open(DATAFILE) as datafile:
        datacsv = csv.DictReader(datafile)
        for row in datacsv:
            data.append({
                'src': row['DonorID'],
                'dst': row['RecipID'],
                # TODO Make sure I know what this value is.
                # The value we want is the percent of this pac's money
                # donated to the src pac.
                'pct': (float(row['pctgiventopacs']) / 100) * (float(row['pctgiventoall']) / 100) * 100,
                'amt': row['dontot'],
                'srcname': row['DonorName'],
                'dstname': row['RecipName']
            })

    with open(OUTFILE, 'w') as outfile:
        outfile.write(json.dumps(data))

if __name__ == '__main__':
    main(sys.argv)

