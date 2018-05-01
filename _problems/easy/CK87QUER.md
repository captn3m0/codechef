---
category_name: easy
problem_code: CK87QUER
problem_name: 'Chef and Weird Queries'
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
    - PERL6
    - TEXT
    - 'SCM chicken'
    - CLOJ
    - COB
    - FS
max_timelimit: '2'
source_sizelimit: '50000'
problem_author: saeed_sryhini
problem_tester: kingofnumbers
date_added: 20-10-2017
tags:
    - cook87
    - mhammad1
    - saeed_sryhini
    - simple
    - sorting
    - two
time:
    view_start_date: 1508697000
    submit_start_date: 1508697000
    visible_start_date: 1508697000
    end_date: 1735669800
    current: 1525198883
is_direct_submittable: false
layout: problem
---
All submissions for this problem are available.### Read problems statements in [Mandarin chinese](http://www.codechef.com/download/translated/COOK87/mandarin/CK87QUER.pdf), [Russian](http://www.codechef.com/download/translated/COOK87/russian/CK87QUER.pdf) and [Vietnamese](http://www.codechef.com/download/translated/COOK87/vietnamese/CK87QUER.pdf) as well.

When the final results for the employement competition were announced, Nour Eddin Ramadan was thrilled to find his name among the accepted co-Chefs.

However, after a while Nour started wasting time at the kitchen. He would usually spend hours talking to girls, and he even invited a girl to the kitchen pretending that he is the most valuable employer at Chef's restaurant.

When Chef found out about it, he decided that it was time to teach Nour a lesson. Before going home that night, Chef called Nour to his office and asked him to solve the following problem, saying that he better come to work tomorrow with a solution for it, or otherwise, it would be better if he doesn't come at all:

Given **T** queries, where each query contains a single number **Y**, Nour has to find the number of pairs **A** and **B**, such that the following equation holds true:

**A2 + B ≤ Y**

Where **A** is any **positive** integer, and **B** holds **(1 ≤ B ≤ 700)**.

Nour was really busy that night (Yeah he got that girl to go out with him after all!), and he asked for your help.

### Input

The first line contains **T** denoting the number of test cases.

**T** lines follows, Each line contains a single integer **Y** denoting the right side of the formula.

### Output

For each test print a single line, containing a single number, indicating the answer for the test.

### Constraints

- **1 ≤ T ≤ 105**
- **1 ≤ Y ≤ 1010**
- Note that **A** must be any **positive** integer, and **B** must hold **1** ≤ **B** ≤ **700**.

### Example

<pre><b>Input:</b>
4
2
3
4
10000000000

<b>Output:</b>
1
2
3
69999300

</pre>