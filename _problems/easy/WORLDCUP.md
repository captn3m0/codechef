---
category_name: easy
problem_code: WORLDCUP
problem_name: 'Strategy for the World Cup'
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
    - PYPY
    - PYTH
    - 'PYTH 3.4'
    - RUBY
    - SCALA
    - 'SCM chicken'
    - 'SCM guile'
    - 'SCM qobi'
    - ST
    - TCL
    - TEXT
    - WSPC
max_timelimit: '1'
source_sizelimit: '50000'
problem_author: devuy11
problem_tester: anudeep2011
date_added: 4-02-2015
tags:
    - combinatorics
    - cook55
    - devuy11
    - dynamic
    - maths
    - simple
editorial_url: 'http://discuss.codechef.com/problems/WORLDCUP'
time:
    view_start_date: 1424025020
    submit_start_date: 1424025020
    visible_start_date: 1735108720
    end_date: 1735669800
    current: 1493558197
layout: problem
---
###  Read problems statements in [Mandarin Chinese](http://www.codechef.com/download/translated/COOK55/mandarin/WORLDCUP.pdf) and [Russian](http://www.codechef.com/download/translated/COOK55/russian/WORLDCUP.pdf) as well.

Captain Dehatti from Bawanian village is making strategy to win the Fake Cricket World Cup organised in his village.

He want his team to score runs only in 4's and 6's because he believes that scoring any runs by running will make them tired.

He also wants that the team does not loose more than **L** wickets.

He now wonders in how many ways his team can score exactly **R** runs in **B** balls. Ofcourse, he assumes that the opponent bowling is awesome and will not concede any extra runs.

Formally, He wonders how many ways can his team score exactly **R** runs in **B** balls, given that each ball can result in 4, 6, 0 , or W(wicket wont add anything to score). Atmost **L** wicktes are allowed \[i.e. Atmost **L** 'W' can be there in B balls \].

**Note:** His batting order is fixed i.e. After each wicket , next player to come is fixed.

### Input

First line contains **T**, the number of test cases.

Each test case contains 3 space separated integers, **R, B and L**

### Output

For each test cases output the number of ways modulo 1e9+7 (i.e. 1000000007)

### Constraints

- **1 ≤ T ≤ 25000**
- **0 ≤ R ≤ 109**
- **1 ≤ B ≤ 300**
- **0 ≤ L ≤ 9**

### Example

```

<b>Input:</b><br></br>
6
10 2 9
6 2 9
6 1 9
4 1 9
5 1 9
10 3 9<br></br><b>Output:</b><br></br>
2
4
1
1
0
12

```
###  Explanation 

```

Explanation for the sample input 1:

All possible ways to face 2 deliveries:

00
04
06
0W
W0
W4
W6
WW
40
44
46
4W
60
64
66
6W

Only possible ways to win the match are 46 and 64. Hence answer is 2.

You need to consider all sample space i.e. 4^B

Note that the answer to R = 0 , B = 2 , W =1 is 3  [ 00 , 0W , W0 ]

```