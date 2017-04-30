---
category_name: medium
problem_code: KFORK
problem_name: 'Knight Fork'
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
    - brute
    - ltime11
    - piyushkumar
    - simple
editorial_url: 'http://discuss.codechef.com/problems/KFORK'
time:
    view_start_date: 1398587400
    submit_start_date: 1398587400
    visible_start_date: 1398587400
    end_date: 1735669800
    current: 1493557709
layout: problem
---
All submissions for this problem are available.###  Read problems statements in [Mandarin Chinese](http://www.codechef.com/download/translated/LTIME11/mandarin/KFORK.pdf) and [Russian](http://www.codechef.com/download/translated/LTIME11/russian/KFORK1.pdf).

Forking is an important tactics in the game of chess. A piece is said to perform a fork if 

1\) It is on a safe square, i.e., the next move by the opponent does not kill the piece

2\) It targets atleast 2 of the opponents pieces in its next move. So even if the opponent moves one of his pieces to safety, one of his remaining pieces can be killed.



You are given an **NxN** board, containing **M** White Queens. Remember, a Queen can move vertically, horizontally and diagonally; and kills any opponents piece directly in these directions. A Knight has 8 possible moves from position (i,j), viz (i+1,j+2), (i+1,j-2), (i-1,j+2), (i-1,j-2), (i+2,j+1), (i+2,j-1), (i-2,j+1), (i-2,j-1) (while remaining inside the NxN board). You have to find out the number of unoccupied positions on the NxN board, where a Black Knight can be placed such that it forks atleast 2 Queens.



**INPUT:**

First line contains **T**, number of testcases

Each testcase starts with a line containing two integers **N** and **M**

Then M lines follow, ith line containing two space separated integers X\[i\] and Y\[i\], the coordinates of the ith Queen



**OUTPUT:**

For each testcase, output a single line containing the answer to the question



**CONSTRAINTS:**

1<=T<=10

1<=X\[i\],Y\[i\]<=N 

0<=M<=N\*N 

40 points : 1<=N<=8

60 points : 1<=N<=1000

No two queens can be in the same square.



**SAMPLE INPUT:**

1

5 2

1 1

3 1



**SAMPLE OUTPUT:**

1



**EXPLANATION:**

Only forking position is (2,3)