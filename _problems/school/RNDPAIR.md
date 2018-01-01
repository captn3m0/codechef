---
category_name: school
problem_code: RNDPAIR
problem_name: 'Random Pair'
languages_supported:
    - ADA
    - ASM
    - BASH
    - BF
    - C
    - CAML
    - CLOJ
    - CLPS
    - COB
    - 'CPP 4.3.2'
    - 'CPP 6.3'
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
    - kotlin
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
    - 'PYTH 3.5'
    - RUBY
    - rust
    - SCALA
    - 'SCM chicken'
    - 'SCM guile'
    - 'SCM qobi'
    - ST
    - swift
    - TCL
    - TEXT
    - WSPC
max_timelimit: '1'
source_sizelimit: '50000'
problem_author: kingofnumbers
problem_tester: amrmahmoud
date_added: 18-11-2017
tags:
    - cakewalk
    - cook88
    - kingofnumbers
    - kingofnumbers
    - likecs
    - probability
editorial_url: 'https://discuss.codechef.com/problems/RNDPAIR'
time:
    view_start_date: 1511116200
    submit_start_date: 1511116200
    visible_start_date: 1511116200
    end_date: 1735669800
    current: 1514816562
layout: problem
---
All submissions for this problem are available.### Read problems statements in [Russian](http://www.codechef.com/download/translated/COOK88/russian/RNDPAIR.pdf) and [Vietnamese](http://www.codechef.com/download/translated/COOK88/vietnamese/RNDPAIR.pdf) as well.

Chefu is Chef's little brother, he is 12 years old and he is new to competitive programming.

Chefu is practicing very hard to become a very skilled competitive programmer and win gold medal in IOI.

Now Chefu is participating in a contest and the problem that he is trying to solve states:

Given an array **A** of **N** integers, find any **i**, **j** such that **i** j and **Ai** + **Aj** is maximum possible

unfortunately, there's no much time left before the end of the contest, so Chefu doesn't have time to think of correct solution, so instead, he wrote a solution that selects a random pair (**i**,  **j**) (**i** j) and output **Ai** + **Aj**. each pair is equiprobable to be selected.

Now Chefu wants your help to calculate the probability that his solution will pass a particular input.

### Input

First line contains an integer **T** denoting the number of test-cases.

First line of each test-case contains a single integer **N**

Second line of each test-case contains **N** space-separated integers **A1** **A2** ... **AN**

### Output

For each test-case output a single line containing a single number denoting the probability that Chefu's solution to output a correct answer. your answer will be accepted if the absolute difference between it and correct answer is less than 1e-6

### Constraints

16. **1** ≤ **T** ≤ **100**
17. **2** ≤ **N** ≤ **100**
18. **1** ≤ **Ai** ≤ **1,000**
### Example

<pre><b>Input:</b>
3
4
3 3 3 3
6
1 1 1 2 2 2
4
1 2 2 3

<b>Output:</b>
1.00000000
0.20000000
0.33333333

</pre>