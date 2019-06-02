---
category_name: hard
problem_code: INVBINCF
problem_name: 'Inverse Binomial Coefficient'
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
max_timelimit: '4'
source_sizelimit: '50000'
problem_author: anton_lunyov
problem_tester: laycurse
date_added: 11-03-2013
tags:
    - anton_lunyov
    - april13
    - factorial
    - hard
    - modulo
editorial_url: 'http://discuss.codechef.com/problems/INVBINCF'
time:
    view_start_date: 1366018200
    submit_start_date: 1366018200
    visible_start_date: 1366018200
    end_date: 1735669800
    current: 1493556731
layout: problem
---
All submissions for this problem are available.The binomial coefficient **C(N, K)** is defined as **N! / K! / (N − K)!** for **0 ≤ K ≤ N**.
 Here **N! = 1 \* 2 \* ... \* N** for **N ≥ 1**, and **0! = 1**./>

You are given integers **n** and **R**.
 You need to find the smallest **K** in the range **{0, 1, ..., 2n − 1}**, for which **C(2n − 1, K) mod 2n = R**.
 Here **A mod B** denotes the remainder of the division of **A** by **B**. If no such **K** exists output **-1**./>/>

### Input

The first line of the input contains an integer **T**, denoting the number of test cases.
 The description of **T** test cases follows.
 The only line of each test case contains two space-separated integers **n** and **R**./>/>

### Output

For each test case output the answer on the separate line.

### Constraints

- **1** ≤ **T** ≤ **100**
- **1** ≤ **n** ≤ **120**
- 0 ≤ **R** < **2n**

### Example

<pre>
<b>Input:</b>
4
1 0
1 1
3 7
4 3

<b>Output:</b>
-1
0
1
7
</pre>
### Explanation

**Example case 1.** We have **C(1, 0) = C(1, 1) = 1**. Hence **C(1, K) mod 2 ≠ 0** for all **K**. Therefore, the answer is **-1**.

**Example case 2.** Since **C(1, 0) mod 2 = 1**, the answer is 0.

**Example case 3.** Since **C(7, 0) mod 8 = 1 ≠ 7** and **C(7, 1) mod 8 = 7 mod 8 = 7**, the answer is **1**.

**Example case 4.** Here **C(15, 7) mod 16 = 15! / 7! / 8! mod 16 = 6435 mod 16 = 3**. It can be shown that for all smaller values of **K** we have **C(15, K) mod 16 ≠ 3**. Therefore, the answer is **7**.
