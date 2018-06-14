---
category_name: challenge
problem_code: BYTEFOOD
problem_name: 'Food Shortage in Byteland'
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
    - kotlin
    - TEXT
    - 'SCM chicken'
    - CLOJ
    - COB
    - FS
max_timelimit: '1.45'
source_sizelimit: '50000'
problem_author: admin
problem_tester: null
date_added: 1-12-2008
tags:
    - admin
time:
    view_start_date: 1249546937
    submit_start_date: 1249546937
    visible_start_date: 1249546937
    end_date: 1735669800
    current: 1525199655
is_direct_submittable: false
layout: problem
---
All submissions for this problem are available.Fanatics from the BBFO blew up all the food factories in the Bytelandian capital! Hurry up! There is still some food left in shops. Some shops are located in the centre, others in the suburbs, so Johnny has to decide which of them are worth visiting. Some shops can be very big and have plenty of food in them, others may be so small that food dissappears from them at an alarming rate... So? Help Johnny buy as much food as possible. 

There are _n_ open shops, each of them located at position (_xi_,_yi_), for _i_=1,...,_n_, where 0 xi,_yi_

_fi_ = **max**{0, _ai_ - _bi_ \* _time_}where 0 ai bi time is the time (in minutes) that has elapsed from the moment Johnny left the house (assume that Johnny does not live in the same place as any shop). If Johnny decides to stay in a shop, he can buy at most _bi_ units of food per minute. Otherwise, he can move along the ortogonal system of streets of the city at a constant speed of unit distance per minute. Johnny only ever changes the action he is performing at the full minute. Because his family is slowly beginning to starve, he should be back at home not later than _m_ minutes after he left. Since there are thousands of starving families in the capital, Johnny can't spent more that 1 ci

### Input

The first line of input contains a single positive integer _t_ n m n lines consist of four integers _xi yi ai bi ci_ each, describing the position and the parameters of the function for food availability of the _i_-th shop. At the end of every test case comes a line with two integers_p q_ (between 0 and 250), corresponding to the x and y coordinates of the position of Johnny's house. 

All the input data are integers.

### Output

Process all test cases. The correct output for the _i_-th test case takes the following form: 
_i_ \[the number of the test case, in the input order\] 
_s m_ \[_s_ is the number of the target shop and _m_ > 0 is the number of minutes spent in it\]. 
At the end of the series of moves you should always write a line conisting of two zeros ('0 0'). 

All the output data should be integers.

### Scoring

The score of your program is the total amount of food that Johnny bought (summed over all the testcases in which he managed to come back home before the deadline).

### Example

<pre>
<b>Input</b>
4
2 20
0 0 100 5 5
10 0 200 10 10
5 0
2 20
0 0 180 15 10
10 0 200 20 10
5 0
4 101
0 0 1000 20 5
20 0 200 1 5
0 20 5000 200 5
20 20 300 5 10
10 10
1 15
1 0 10 1 5
5 0

<b>Output</b>
1
2 10
0 0
2
1 10
0 0
3
3 5
4 10
2 1
0 0
4
1 5
0 0

<b>Score</b>
Score = 1261
</pre>