---
category_name: medium
problem_code: CIRCLE
problem_name: 'Minion Circle'
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
problem_author: piyushkumar
problem_tester: balajiganapath
date_added: 20-04-2014
tags:
    - dynamic
    - easy
    - ltime11
    - piyushkumar
    - prefix
editorial_url: 'http://discuss.codechef.com/problems/CIRCLE'
time:
    view_start_date: 1398587400
    submit_start_date: 1398587400
    visible_start_date: 1398587400
    end_date: 1735669800
    current: 1493557581
layout: problem
---
All submissions for this problem are available.###  Read problems statements in [Mandarin Chinese](http://www.codechef.com/download/translated/LTIME11/mandarin/CIRCLE.pdf) and [Russian](http://www.codechef.com/download/translated/LTIME11/russian/CIRCLE.pdf).

El Macho's army of mutated minions is marching towards Gru, the army is standing in a rectangular formation measuring **NxM**. The spray of antidotes done by Gru has turned some of the minions back to normal, but now they are trapped within the army of mutated ones. Formally, a normal minion is _"not trapped"_ if :

1\) either he is on one of the edges of the rectangle

2\) or one of his direct neighbors (directly in front/back of him, or left/right of him) is _not trapped_.



Any trapped minion will be killed by the mutated minions, which Gru cannot let happen. Gru will use his antidote ray to turn exactly one row and one column of the army to normal minions. If there are any normal minions in that row or column, they remain unaffected. Can Gru select a row and a column such that no normal minion remains trapped after the antidote ray?



**INPUT:**

First line contains **T**, number of testcases

Each testcase starts with a line containing two space separated integers **N** and **M**.

N lines follow, each containing M characters. jth character of the ith line is **"B"** if the minion at ith row and jth column in the army is mutated, **"W"** otherwise.



**OUTPUT:**

Print "YES or "NO" (quotes for clarity) to indicate wheather it is possible for Gru to save the trapped minions.



**CONSTRAINTS:**

1<=T<=10

30 points : 1<=N,M<=100

70 points : 1<=N,M<=1000



**SAMPLE INPUT:**

1

3 3

BBB

BWB

BBB



**SAMPLE OUTPUT:**

YES



**EXPLAINATION:**

Any row and column pair selected by Gru guarantees that the trapped minion does not remain trapped.
