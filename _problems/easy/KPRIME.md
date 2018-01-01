---
category_name: easy
problem_code: KPRIME
problem_name: 'Count K-Primes'
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
problem_author: vamsi_kavala
problem_tester: gamabunta
date_added: 3-06-2013
tags:
    - july13
    - memoization
    - sieve
    - simple
    - vamsi_kavala
editorial_url: 'http://discuss.codechef.com/problems/KPRIME'
time:
    view_start_date: 1373880775
    submit_start_date: 1373880775
    visible_start_date: 1373880775
    end_date: 1735669800
    current: 1493558158
layout: problem
---
All submissions for this problem are available.Alice and Bob are studying for their class test together. The topic of the test is _Prime Numbers_. The preparation is getting too boring for their liking. To make it interesting, they turn it into a game. The winner will get an ice-cream treat from the other.

The game is called _Count K-Primes_. A number is a **k**-prime if it has exactly **k** _distinct_ prime factors. The game is quite simple. Alice will give three numbers **A**, **B** & **K** to Bob. Bob needs to tell Alice the number of **K**-prime numbers between **A** & **B** (both inclusive). If Bob gives the correct answer, he gets a point. If not, Alice gets a point. They play this game **T** times.

Bob hasn't prepared so well. But he really wants to win the game. He wants you to tell him the correct answer.

### Input

First line of input contains a single integer **T**, the number of times they play. Each game is described in a single line containing the three numbers **A**,**B** & **K**.

### Output

For each game, output on a separate line the number of **K**-primes between **A** & **B**.

### Constraints:

**1 ≤ T ≤ 10000**
**2 ≤ A ≤ B ≤ 100000**
**1 ≤ K ≤ 5**

### Example:

<pre>
<b>Input</b>
4
2 5 1
4 10 2
14 15 2
2 20 3

<b>Output</b>
4
2
2
0


</pre>