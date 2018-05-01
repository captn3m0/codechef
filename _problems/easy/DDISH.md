---
category_name: easy
problem_code: DDISH
problem_name: 'Delicious Dishes'
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
problem_author: Rubanenko
problem_tester: laycurse
date_added: 13-08-2012
tags:
    - Rubanenko
    - bruteforce
    - nov12
    - simple
    - simple
editorial_url: 'http://discuss.codechef.com/problems/DDISH'
time:
    view_start_date: 1352712600
    submit_start_date: 1352712600
    visible_start_date: 1352712600
    end_date: 1735669800
    current: 1493558135
layout: problem
---
All submissions for this problem are available.Chef is the owner of the loveliest restaurant in ChefTown. To make his work easier, all dishes are numbered by distinct positive integers, and you can order with this positive integer in Chef’s restaurant. Amazingly Chef has many kinds of recipes, so every positive integer denotes exactly one dish. To taste dish numbered with some integer C, you have to pay exactly C dollars.

Unfortunately not all the dishes are delicious. After years of working in his restaurant, Chef discovered that a dish is considered to be delicious if the number that denotes this dish consists of different digits. Let’s call such numbers “delicious numbers”. For example numbers 123, 1, 91, 102 are delicious but 122, 11, 900 are not.

Ira is a little girl from the University of Lublin and she’s fond of traveling. Tonight she stops in ChefTown and wants to have a meal at Chef’s restaurant. On the one hand she has R dollars in her pocket and she is ready to spend it, on the other hand she wants to seem rich, so she won’t spend less than L dollars. Of course, since she is a little girl, she wants to order just one dish. It is difficult to make a choice for Ira because of variety of dishes.Now she asks you to find out the number of delicious dishes Ira may order, considering her conditions.

### Input

First line contains single integer T (1 ≤ T ≤ 200000) – the number of test cases. Each test case consists of two positive integers in a line - L and R (1 ≤ L ≤ R ≤ 1018).

### Output

For every test case, output the answer on a separate line.

### Example

<pre>
<b>Input:</b>
2
5 13
1 100

<b>Output:</b>
8
90

</pre>### Explanation

For the first test Ira can order every dish from 5 to 13 except 11.
