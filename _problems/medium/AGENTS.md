---
category_name: medium
problem_code: AGENTS
problem_name: 'Special Agents'
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
    - PYPY
    - PYTH
    - 'PYTH 3.4'
    - RUBY
    - SCALA
    - 'SCM chicken'
    - 'SCM guile'
    - 'SCM qobi'
    - ST
    - TCL
    - TEXT
    - WSPC
max_timelimit: '1'
source_sizelimit: '50000'
problem_author: kostya_by
problem_tester: stzgd
date_added: 16-03-2015
tags:
    - cook57
    - hard
    - kostya_by
    - linear
    - math
editorial_url: 'http://discuss.codechef.com/problems/AGENTS'
time:
    view_start_date: 1429470000
    submit_start_date: 1429470000
    visible_start_date: 1429470000
    end_date: 1735669800
    current: 1493557440
layout: problem
---
All submissions for this problem are available.###  Read problems statements in [Mandarin Chinese](http://www.codechef.com/download/translated/COOK57/mandarin/AGENTS.pdf) and [Russian](http://www.codechef.com/download/translated/COOK57/russian/AGENTS.pdf) as well.

A *special agent* is usually the title for a detective or investigator for a state, county, municipal, federal or tribal government who conducts criminal investigations and has arrest authority. An agent is a federal law enforcement officer with arrest authority but who does not conduct major criminal investigations or who may conduct investigations but does not have arrest authority. Special agents are distinctly able to do both.

Special agents are often involved in breaking secret ciphers. In this problem we'll consider one of the challenges that agents usually face while decrypting secret messages.

Quite often, decrypting involves solving equations. In this problem, it will be an integral equation. You are given two polynomials **Q(x) = q0 + q1 x + q2 x2 + ... + qn xn**(**qn** ≠ 0) and **T(x) = t0 + t1 x + t2 x2 + ... + tm xm**(**tm** ≠ 0) with integer coefficients. Your task is to solve an equation of the following form:

 ![](/download/extimages/ef52b01d7dd2d76e6f460c52e0ea848b.png)

To solve that equation means to find such a function **P(x)** that turns it into an equality for every real **x**. One can easily prove, that **P(x)** is a polynomial. Also, you may assume that such a polynomial always exists and unique.

### Input

The first line of the input contains an integer **K** denoting the number of test cases. The description of **K** test cases follows.

The first line of the test case description contains one integer **n** denoting the degree of polynomial **Q**.

The second line contains **n + 1** integers **q0**, **q1**, ..., **qn** denoting the coefficients of **Q**.

The third line contains one integer **m** denoting the degree of polynomial **T**.

The fourth line contains **m + 1** integers **t0**, **t1**, ..., **tm** denoting the coefficients of **T**.

### Output

For each query, output two lines: the first line contains one integer denoting the degree of polynom **P**, the second line contains the coefficients of **P** in the format described above with one exception: the coefficients may be real. Your answer will be accepted if the absolute error is not greater than 10-6.

It's guaranteed that the correct polynomial **P(x)** is not a zero polynomial.

### Constraints

18. 1 ≤ **K** ≤ 50
19. 0 ≤ **N** ≤ 50
20. 0 ≤ **M** ≤ 50
21. **|qi|**, **|ti|** ≤ 50
22. **qn** ≠ 0
23. **tm** ≠ 0
### Example

<pre><b>Input:</b>
1
1
1 2
0
5

<b>Output:</b>
1
-1.5 2

</pre>
### Explanation

In the sample case, we are given the following data:

![](/download/extimages/fb9f4d56106bc391ad1a5869cae0793d.png)

![](/download/extimages/4950faeb8c94ff6f607eed880a4fd6e2.png)

**P(x)** can be defined as following:

![](/download/extimages/5edfbd14cd32ee3924162aad243d04ad.png)

As we can see from the output, the answer is

![](/download/extimages/ed6c8882189de08f38678338830ef970.png)

We can simply replace **P(x)** with its value from the output to make sure, that all the equation solved correctly:

![](/download/extimages/c9ba63accb73a80cbece7216110beba1.png)
