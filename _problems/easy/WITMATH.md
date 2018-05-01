---
category_name: easy
problem_code: WITMATH
problem_name: 'Witua and Math'
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
problem_tester: pieguy
date_added: 2-08-2012
tags:
    - Rubanenko
    - may13
    - miller
    - primenumbers
    - simple
editorial_url: 'http://discuss.codechef.com/problems/WITMATH'
time:
    view_start_date: 1368440876
    submit_start_date: 1368441000
    visible_start_date: 1368441000
    end_date: 1735669800
    current: 1493558197
layout: problem
---
All submissions for this problem are available.Witua is a little student from the University of Lviv. He enjoys studying math. Witua knows a lot of famous mathematicians like Eratosthenes, Pythagoras, Fermat, Diophantus, Furko, Gauss and so on. However, his favorite one is Euler. The only thing Witua likes more than Euler is [Euler’s totient function](http://en.wikipedia.org/wiki/Euler%27s_totient_function) **φ**. He is exploring the nature of this function. One of the steps of his work is finding φ(i)/i for all 2≤i≤**N**. He doesn’t need to know every such value, but Witua wonders for what value i, is φ(i)/i the maximum he can get? Help little student to find such i that φ(i)/i is maximum among all the 2≤i≤**N**.

### Input

The first line contains single integer **T** - the number of test cases. Each of the next T lines contains a single integer **N**.

### Output

 For every test case output i such that φ(i)/i is maximum among all i (2≤i≤**N**) in a separate line.

### Constrains

 **T** (1≤**T**≤500 )

 **N**(2≤**N**≤10^18)

### Example

<pre>
<b>Input:</b>
3
2
3
4

<b>Output:</b>
2
3
3

<b>Explanation</b>
<b>φ(2)/2=1/2
φ(3)/3=2/3
φ(4)/4=2/4</b>
</pre>