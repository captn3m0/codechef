---
category_name: easy
problem_code: SDSQUARE
problem_name: 'Square Digit Squares'
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
problem_author: div_adm
problem_tester: null
date_added: 4-10-2013
tags:
    - div_adm
    - nov13
    - simple
editorial_url: 'http://discuss.codechef.com/problems/SDSQUARE'
time:
    view_start_date: 1384162200
    submit_start_date: 1384162200
    visible_start_date: 1384162200
    end_date: 1735669800
    current: 1493558185
layout: problem
---
All submissions for this problem are available.###  Read problems statements in [Mandarin Chinese](http://www.codechef.com/download/translated/NOV13/mandarin/SDSQUARE.pdf) and [Russian](http://www.codechef.com/download/translated/NOV13/russian/SDSQUARE.PDF).

Recently Chef become very much interested in perfect squares. We all know Chef and his weird interests. Anyways Chef will be soon writing his masters thesis on perfect squares revealing what-not-known properties of perfect squares.

While doing his research, he happened to be confronted with some interesting perfect squares. These prefect squares consists only of digits which are themselves perfect squares. 0, 1, 4 and 9 are such digits. These are called perfect digits.

As we all know Chef also has habit of asking too many questions, he is asking- given two numbers a and b, how many perfect squares exists between these two numbers inclusive, that contains only perfect digits.

Input:

First line of input will contains T, number of test cases. Then T lines follows, each containing two positive integers a and b.

 Constraints:

T <= 500

1<= a <= b <= 10000000000

Output:

For each input, output number of perfect digit squares between given numbers.

Sample

**Input:**

2

1 10

100 10000

Output:

3

9
