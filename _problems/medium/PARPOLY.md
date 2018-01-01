---
category_name: medium
problem_code: PARPOLY
problem_name: 'Polynomial Partition Function'
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
max_timelimit: '7'
source_sizelimit: '50000'
problem_author: laycurse
problem_tester: anton_lunyov
date_added: 2-09-2011
tags:
    - binomial
    - dynamic
    - june12
    - laycurse
    - medium
editorial_url: 'http://discuss.codechef.com/problems/PARPOLY'
time:
    view_start_date: 1339403708
    submit_start_date: 1339403708
    visible_start_date: 1339407000
    end_date: 1735669800
    current: 1493557845
layout: problem
---
All submissions for this problem are available.Chef Ciel is participating in an arithmetic contest now. Why? Because of the top prize for the contest, a limited edition kitchen knife.

But to win the contest she must calculate the values **f**(**M**, **N**, **X**) of the function named _polynomial partition function_. The polynomial partition function **f**(**M**, **N**, **X**) is defined by

![](http://www.codechef.com/download/PARPOLY.png)
where **P** is a given polynomial **P**(**x**) = **C****D** · **x****D** + **C****D**-1 · **x****D**-1 + ... + **C**1 · **x** + **C**0.

For example,

 **f**(1, 3, **X**) = **P**(3**X**)

 **f**(2, 3, **X**) = **P**(0) **P**(3**X**) + **P**(**X**) **P**(2**X**) + **P**(2**X**) **P**(**X**) + **P**(3**X**) **P**(0) = 2 **P**(**X**) **P**(2**X**) + 2 **P**(0) **P**(3**X**)

 **f**(3, 1, **X**) = **P**(0) **P**(0) **P**(**X**) + **P**(0) **P**(**X**) **P**(0) + **P**(**X**) **P**(0) **P**(0) = 3 **P**(0)2 **P**(**X**)

Ciel is a great chef. However, she is not very good at arithmetic. So she needs your help to make her win the contest. For the given values of **P**, **M**, **N** and **X**, your work is to calculate the value of **f**(**M**, **N**, **X**). The answer can be very large, so you should print the answer modulo 1000000007 (109+7), that is, you need to find the remainder of division of **f**(**M**, **N**, **X**) by 1000000007 (109+7).

### Input

The first line contains an integer **T**, the number of test cases. Then **T** test cases follow. The first line for each test case has 3 integers **M**, **N** and **X**. Then the next line has **D**+2 integers. The first integer denotes **D**, and the (**i**+1)-th integer denotes **C****i**-1.

### Output

For each test case, print the value of **f**(**M**, **N**, **X**) modulo 1000000007 (109+7).

### Constraints

1 ≤ **T** ≤ 4
1 ≤ **M** ≤ 400
1 ≤ **N** ≤ 800
0 ≤ **X** ≤ 1000000006 (109+6)
0 ≤ **D** ≤ 10
0 ≤ **C****i** ≤ 1000000006 (109+6)
If **D** ≠ 0, then **C****D** ≠ 0

### Sample Input

<pre>3
1 3 2
2 0 1 2
2 3 0
1 1 1
3 1 1
3 1 2 3 4
</pre>### Sample Output
<pre>78
4
30
</pre>### Explanation
In the first case, the polynomial is **P**(**x**) = 2 · **x**2 + **x**. The answer is **P**(3**X**) = **P**(6) = 2 · 36 + 6 = 78.
