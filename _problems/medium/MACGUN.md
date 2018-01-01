---
category_name: medium
problem_code: MACGUN
problem_name: 'Machine Gun'
languages_supported:
    - ADA
    - ASM
    - BASH
    - BF
    - C
    - 'C99 strict'
    - CAML
    - CLOJ
    - CLPS
    - 'CPP 4.3.2'
    - 'CPP 4.9.2'
    - CPP14
    - CS2
    - D
    - ERL
    - FORT
    - FS
    - GO
    - HASK
    - ICK
    - ICON
    - JAVA
    - JS
    - 'LISP clisp'
    - 'LISP sbcl'
    - LUA
    - NEM
    - NICE
    - NODEJS
    - 'PAS fpc'
    - 'PAS gpc'
    - PERL
    - PERL6
    - PHP
    - PIKE
    - PRLG
    - PYTH
    - 'PYTH 3.4'
    - RUBY
    - SCALA
    - 'SCM guile'
    - 'SCM qobi'
    - ST
    - TCL
    - TEXT
    - WSPC
max_timelimit: '15'
source_sizelimit: '50000'
problem_author: anhdq
problem_tester: laycurse
date_added: 16-07-2012
tags:
    - anhdq
    - aug12
    - graph
    - matching
    - medium
editorial_url: 'http://discuss.codechef.com/problems/MACGUN'
time:
    view_start_date: 1344677892
    submit_start_date: 1344677892
    visible_start_date: 1344677400
    end_date: 1735669800
    current: 1493557770
layout: problem
---
All submissions for this problem are available.Country X has a military zone framed as a grid of size MxN. Each point of the grid could be free, occupied by a machine gun or by a protector.

A machine gun at point (x, y) could automatically attack other guns at points (x-2, y-2), (x-2, y+2), (x+2, y-2) and (x+2, y+2). So we could not put two guns at points which make them destroy each others, unless there is a protector exactly in the middle. Eg.: We could put two guns at point (x, y) and (x+2, y+2) if and only if there is a protector at point (x+1, y+1).

Given a map with some points which has been occupied by guns or protectors, your task is to find out the greatest number of guns to add to this map satisfying rules above. Note that we can put a machine gun at a free point, but we cannot remove any machine gun and protector, and we cannot add protectors.

### Input

There are several test cases, each formed as follows:

- The first line contains two positive integer M, N.
- Next M lines, each contains N characters (no spaces) of {'F', 'G', 'P'} (ASCII: #70, #71, #80), the j-th character of the i-th line represents the point (i-1, j-1) on the map: 'F' is a free point, 'G' is occupied by a machine gun and 'P' is occupied by a protector.

The input is ended with M = N = 0.

### Output

For each test case, output on a line the greatest number of guns which can be added the given map.

### Constraints

1 ≤ M, N ≤ 700
In the given map, any two machine guns do not attack each other.
The sum of MxN does not exceed 490000 in one judge file.

### Example

<pre>
<b>Input:</b>
3 4
FPFP
PFPP
GFGF
5 3
FPF
FFF
FGG
PFP
FPF
0 0

<b>Output:</b>
3
6


</pre>