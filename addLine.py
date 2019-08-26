#!/usr/bin/env python3

import sys

def main():
    try:
        file = sys.argv[1]
        line = sys.argv[2]
    except Exception as e:
        print("Usage: {} <file> <line>".format(sys.argv[0]))
        return
    try:
        f = open(file, "r+")
    except FileNotFoundError:
        print("Cannot open file {} for reading and wrting".format(file))
        return
    except Exception as e:
        raise
    lines = f.readlines()
    lines = [line.strip() for line in lines]
    line = line.strip()
    if line in lines:
        print("Line {} already exists in file {}".format(line, file))
    else:
        f.write(line + "\n")

if __name__ == '__main__':
    main()
