---
category_name: challenge
problem_code: BFORG
problem_name: 'The Secret Fellowship of Byteland'
languages_supported:
    - C
    - CPP14
    - JAVA
    - PYTH
    - 'PYTH 3.5'
    - PYPY
    - CS2
    - 'PAS fpc'
    - 'PAS gpc'
    - RUBY
    - PHP
    - GO
    - NODEJS
    - HASK
    - rust
    - SCALA
    - swift
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
    - kotlin
    - TEXT
    - 'SCM chicken'
    - CLOJ
    - COB
    - FS
max_timelimit: '3.4'
source_sizelimit: '50000'
problem_author: admin
problem_tester: null
date_added: 1-12-2008
tags:
    - admin
time:
    view_start_date: 1232519266
    submit_start_date: 1232519266
    visible_start_date: 1232519266
    end_date: 1735669800
    current: 1525199500
is_direct_submittable: false
layout: problem
---
All submissions for this problem are available.The relationship between The University of Byteland and King Johnny was never a friendly one. The king was the easy-going, open-minded sort of person who is prepared to turn a blind eye to the embezzlement of public funds, but inwardly revolts at the thought of money going to waste, and supporting a university was to the king a perfect example of a waste of money. On the other hand, the chancellor of the university showed no tolerance whatsoever, and frequently stated in public that Byteland was being governed by a monarch who took terrible decisions when he was drunk and even worse ones when he was sober. After some time of bad-tempered coexistence, the king had had enough and decided to close down the university. However, the king's councillors advised against this move, suggesting it might cause social unrest. The king yielded to their advice, and instead established a law which banned all organisations, clubs and associations active at the university.

This action had a rather curious effect on the usually lazy students of the university. They had never before even thought of organising any sort of fellowship, but now they immediately decided they needed to set one up. And this is how the _Secret Fellowship_ came to life.

The main problem that faced the management of the Fellowship was to organise members' meetings in such a way as to minimise the risk to the participants. It was decided that the _n_ members of the fellowship should be split into _k_ secret divisions, each consisting of at least 2 members. All members belonging to the same division would then meet regularly, and they would take it in turns to host the meetings of the division in their houses.

But one more important factor has to be taken into account -- the laziness of students. It is therefore your task to form the divisions in such a way that the furthest distance a student may ever be asked to walk is as short as possible.

### Input

The first line of input contains a single integer t, the number of test cases (t=1000). t test cases follow.

Each test cases starts with a line containing two integers _n k_, denoting the number of students and the number of divisions to be formed, respectively (2knn lines contains two integers _xi yi_ each (-1000 xi,yi Output

For the _i_-th test case output a line with the text case _i_ Y or case _i_ N, specifying whether you wish to solve the given case. Then in the former case print exactly _k_ lines. Each line should start with integer _nj_ (_nj_>=2) and be followed by a space separated list of exactly _nj_ increasing integers _sjl_, denoting the students belonging to the _j_-th division, numbered in input order (1sjlnj must equal _n_.

### Score

The score awarded to your program is the total of scores for the test cases you chose to solve.

For each solved test case you will receive _diam_ / (_d_\*_k_) points, where _diam_ denotes the distance between the two furthest houses of members of the fellowship, and _d_ is the distance between the two furthest houses of members belonging to the same division.

### Example

<pre>
<b>Input:</b>
2
6 3
0 0
1 0
0 1
1 1
2 0
2 1
6 2
0 0
1 0
0 1
1 1
2 0
2 1
6 2
0 0
1 0
0 1
1 1
2 0
2 1

<b>Output:</b>
case 1 Y
3 1 2 4
3 3 5 6
case 2 Y
3 1 2 5
3 3 4 6
case 3 Y
2 1 3
4 2 4 5 6

<b>Score:</b>
1.849003

</pre>_Bonus info:_ If score = _xxx_._xxxaaa_, _aaa_ means the number of test cases with Y answer.
