---
category_name: challenge
problem_code: TOURBUS
problem_name: 'Byteland Tours'
languages_supported:
    - C
    - CPP14
    - JAVA
    - PYTH
    - 'PYTH 3.5'
    - CS2
    - 'PAS fpc'
    - 'PAS gpc'
    - RUBY
    - PHP
    - GO
    - NODEJS
    - HASK
    - SCALA
    - D
    - PERL
    - FORT
    - WSPC
    - ADA
    - CAML
    - ICK
    - BF
    - ASM
    - CLPS
    - PRLG
    - ICON
    - 'SCM qobi'
    - PIKE
    - ST
    - NICE
    - LUA
    - BASH
    - NEM
    - 'LISP sbcl'
    - 'LISP clisp'
    - 'SCM guile'
    - JS
    - ERL
    - TCL
    - PERL6
    - TEXT
    - CLOJ
    - FS
max_timelimit: '1'
source_sizelimit: '50000'
problem_author: pieguy
problem_tester: white_king
date_added: 28-11-2013
tags:
    - challenge
    - dynamic
    - greedy
    - heuristic
    - jan14
    - pieguy
    - search
editorial_url: 'http://discuss.codechef.com/problems/TOURBUS'
time:
    view_start_date: 1389605400
    submit_start_date: 1389605400
    visible_start_date: 1389605400
    end_date: 1735669800
    current: 1525454428
is_direct_submittable: false
layout: problem
---
All submissions for this problem are available.###  Read problems statements in [Mandarin Chinese ](http://www.codechef.com/download/translated/JAN14/mandarin/TOURBUS.pdf) and [Russian](http://www.codechef.com/download/translated/JAN14/russian/TOURBUS.pdf).

As part of a new program to attract tourists to Byteland, Chef has been placed in charge of organizing a series of bus tours around the city. There are **N** scenic locations (points on the plane) in Byteland (numbered 0 through **N-1**), and **M** bidirectional scenic roads, each of which connects two scenic locations via a straight line. Chef wishes to organize the tours according to the following rules:

- A tour is defined as sequence of locations, where a tour bus begins at the first location, and moves directly from each location to the next location in the sequence until it reaches the last location. There must be a scenic road between consecutive locations.
- A tour does not have to start and end at the same location, but it is allowed.
- A tour cannot visit the same location more than once, with the possible exception of the start/end location.
- A tour cannot cross itself. That is, none of the roads belonging to a tour may intersect.
- Each road must be visited by exactly one tour.

Setting up tours is expensive, so Chef wishes to minimize the total number of tours. Optimal solutions are not required, but solutions that use fewer tours will score more points (see the scoring section below). However, your solution must use at most **(N+M)/2** tours or else it will be judged Wrong Answer.

### Input

Input will begin with a line containing an integer **N**. Following this will be **N** lines containing the locations of the **N** scenic locations. Each location is given as a pair of integers, with the **i**-th line giving **x\_i** and **y\_i**, the respective **x** and **y** coordinates of the **i**-th scenic location. Following this will be **N** lines containing **N** characters each. The **i**-th character of the **j**-th line will be 'Y' if there is a scenic road connecting locations **i** and **j**, and 'N' otherwise.

### Output

First, print an integer **K**, the number of tours. Then print **K** tour descriptions. Each tour description should consist of an integer **L**, the length of the tour (in roads), followed by **L+1** integers, the ordinal numbers of the locations on the tour, in order.

### Scoring

Your score is **K\*N/M**. Lower scores will earn more points.

We have 50 official test files. You must correctly solve all test files to receive OK. During the contest, your overall score is the sum of the scores on the first 10 test files. After the contest, all solutions will be rescored by the sum of the scores on the rest 40 test files. Note, that public part of the tests can not contain some border cases.

### Constraints

- 20 ≤ **N** ≤ 50
- 0 ≤ **x\_i**, **y\_i** ≤ 100
- No three points will be collinear.
- The i-th character of the i-th row of the road descriptions will be 'N'.
- The i-th character of the j-th row of the road descriptions will equal the j-th character of the i-th row.
- Each city will be connected to at least one road.

### Sample Input

<pre>6
2 3
10 0
10 7
3 7
9 8
2 1
NNNYNY
NNYYNN
NYNYYN
YYYNYN
NNYYNY
YNNNYN
</pre>
### Sample Output

<pre>3
4 3 0 5 4 2
1 4 3
3 1 2 3 1

</pre>
This sample output would score **3\*6/8 = 2.25** points.

### Test Case Generation

**N** will be chosen randomly and uniformly between 20 and 50, inclusive. Each point's coordinates are chosen randomly and uniformly between 0 and 100, inclusive. If two points coincide or three points are collinear, the process is restarted (with the same value of **N**).

A real value **P** is chosen randomly and uniformly between 0.3 and 1.0. Between each pair of cities a road exists with probability **P**. If some city has no roads, the process is restarted (with the same value of **P**).
