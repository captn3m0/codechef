---
category_name: hard
problem_code: APRPS
problem_name: 'Irrational Root'
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
    - SCALA
    - 'SCM chicken'
    - 'SCM guile'
    - 'SCM qobi'
    - ST
    - TCL
    - TEXT
    - WSPC
max_timelimit: '4'
source_sizelimit: '50000'
problem_author: chemthan
problem_tester: null
date_added: 7-02-2017
tags:
    - chemthan
    - fft
    - hard
    - july17
    - math
    - ntt
editorial_url: 'https://discuss.codechef.com/problems/APRPS'
time:
    view_start_date: 1500283800
    submit_start_date: 1500283800
    visible_start_date: 1500283800
    end_date: 1735669800
    current: 1514816601
layout: problem
---
All submissions for this problem are available.###  Read problems statements in [Mandarin Chinese](http://www.codechef.com/download/translated/JULY17/mandarin/APRPS.pdf) and [Vietnamese](http://www.codechef.com/download/translated/JULY17/vietnamese/APRPS.pdf) as well.

It is well-known that **∑sqrt(ai), ai ∈ N** is a root of some **integer-coefficient** polynomial. For example: **sqrt(2)** is a root of polynomial: **x2 − 2**. Now, your task is to find not only such polynomial but also the minimal one. When comparing two polynomials, firstly, we consider their degree and then the coefficient of the highest term, and then the second highest term and so on.

 (Note that we consider only polynomial with the coefficient of highest term is positive) ### Input

First line contains an integer **T** denotes the number of testcases. Each testcase is described by an integer **n** and followed by **n** space-seperated integers **ai**.

### Output:

Each testcase print an integer **k** denotes the degree of polynomial in a single line. Then next line print **k + 1**  space-seperated integers modolo **109 + 7**, coefficients from lowest to highest term.

### Constraints

**1 ≤ T ≤ 5, 1 ≤ n ≤ 15**

**ai** are **n** distinct primes, **1 ≤ ai ≤ 109**

### Subtasks

- Subtask #1: **(10 points)**: n ≤ 3
- Subtask #2: **(20 points)**: n ≤ 5
- Subtask #3: **(30 points)**: n ≤ 10
- Subtask #4: **(40 points)**: n ≤ 15

### Example

<pre><b>Input:</b>
<p>
2
1
2
2
2 3
</p>
<b>Output:</b>
<p>
2
1000000005 0 1
4
1 0 999999997 0 1
</p>
</pre>
### Explanation

The first polynomial is **x2 − 2**, and the second one is **x4 − 10x2 + 1**.
