---
category_name: easy
problem_code: CARVANS
problem_name: Carvans
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
max_timelimit: '2'
source_sizelimit: '50000'
problem_author: yellow_agony
problem_tester: gamabunta
date_added: 2-09-2012
tags:
    - cakewalk
    - cook26
    - simple
    - yellow_agony
editorial_url: 'http://discuss.codechef.com/problems/CARVANS'
time:
    view_start_date: 1348428125
    submit_start_date: 1348428125
    visible_start_date: 1348427700
    end_date: 1735669800
    current: 1493558113
layout: problem
---
All submissions for this problem are available.Most problems on CodeChef highlight chef's love for food and cooking but little is known about his love for racing sports. He is an avid Formula 1 fan. He went to watch this year's Indian Grand Prix at New Delhi. He noticed that one segment of the circuit was a long straight road. It was impossible for a car to overtake other cars on this segment. Therefore, a car had to lower down its speed if there was a slower car in front of it. While watching the race, Chef started to wonder how many cars were moving at their maximum speed.

Formally, you're given the maximum speed of N cars in the order they entered the long straight segment of the circuit. Each car prefers to move at its maximum speed. If that's not possible because of the front car being slow, it might have to lower its speed. It still moves at the fastest possible speed while avoiding any collisions. For the purpose of this problem, you can assume that the straight segment is infinitely long.

Count the number of cars which were moving at their maximum speed on the straight segment.

### Input

The first line of the input contains a single integer T denoting the number of test cases to follow. Description of each test case contains 2 lines. The first of these lines contain a single integer N, the number of cars. The second line contains N space separated integers, denoting the maximum speed of the cars in the order they entered the long straight segment.

### Output

For each test case, output a single line containing the number of cars which were moving at their maximum speed on the segment.

### Example

<pre>
<b>Input:</b>
3
1
10
3
8 3 6
5
4 5 1 2 3

<b>Output:</b>
1
2
2
</pre>
### Constraints

1 ≤ T ≤ 100
1 ≤ N ≤ 10,000
All speeds are distinct positive integers that fit in a 32 bit signed integer.
Each input file will not be larger than 4 MB (4,000,000,000 bytes) in size.

**WARNING!** The input files are very large. Use faster I/O.
