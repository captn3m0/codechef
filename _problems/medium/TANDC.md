---
category_name: medium
problem_code: TANDC
problem_name: 'Tracy and Charlie'
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
max_timelimit: '1'
source_sizelimit: '50000'
problem_author: piyushkumar
problem_tester: null
date_added: 20-04-2014
tags:
    - easy
    - inverse
    - ltime11
    - math
    - piyushkumar
editorial_url: 'http://discuss.codechef.com/problems/TANDC'
time:
    view_start_date: 1398587400
    submit_start_date: 1398587400
    visible_start_date: 1398587400
    end_date: 1735669800
    current: 1493557976
layout: problem
---
All submissions for this problem are available.###  Read problems statements in [Mandarin Chinese](http://www.codechef.com/download/translated/LTIME11/mandarin/TANDC.pdf) and [Russian](http://www.codechef.com/download/translated/LTIME11/russian/TANDC.pdf).

Tracy is teaching Charlie maths via a game called N-Cube, which involves three sections involving N.

Tracy gives Charlie a number N, and Charlie makes a list of Nth powers of integers in increasing order (1N, 2N, 3N.. so on). This teaches him exponentiation. 

Then Charlie performs the following subtraction game N times : Take all pairs of consecutive numbers in the list and take their difference. These differences then form the new list for the next iteration of the game. Eg, if N was 6, the list proceeds as \[1, 64, 729, 4096 ... \] to \[63, 685, 3367 ...\], and so on 5 more times.

After the subtraction game, Charlie has to correctly tell Tracy the Nth element of the list. This number is the _value of the game_. 



After practice Charlie became an expert in the game. To challenge him more, Tracy will give two numbers **M** (where M is a prime) and **R** instead of just a single number N, and the game must start from **MR - 1** instead of N. Since the _value of the game_ can now become large, Charlie just have to tell the largest integer K such that M K  divides this number. Since even K can be large, output K modulo 1000000007 (109+7).



**INPUT:**

First line will contain **T**, number of testcases. Then the testcases follow

Each testcase contains of a single line of input, two integers **M R**



**OUTPUT:**

For each testcase, output in a single line answer given by Charlie to Tracy modulo 1000000007.



**CONSTRAINTS:**

1<=T<=1000

2<=M<=109

30 points : 1<=R<=10000

70 points : 1<=R<=109

M is a prime number



**SAMPLE INPUT:**

1

2 2



**SAMPLE OUTPUT:**

1



**EXPLANATION:**

This list is :
\[1,8,27,64,125..\] -> \[7,19,37,61..\] -> \[12,18,24..\] -> \[6,6,6..\]. Number of times 2 divides 6 is 1. Hence the answer is 1.