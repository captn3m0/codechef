---
category_name: medium
problem_code: SEQUAT2
problem_name: 'Sebi and the equation 2'
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
max_timelimit: '3'
source_sizelimit: '50000'
problem_author: 'iscsi '
problem_tester: kevinsogo
date_added: 18-07-2016
tags:
    - bitwise
    - cook76
    - iscsi
    - medium
    - sieve
editorial_url: 'http://discuss.codechef.com/problems/SEQUAT2'
time:
    view_start_date: 1479666600
    submit_start_date: 1479666600
    visible_start_date: 1479666600
    end_date: 1735669800
    current: 1493557976
layout: problem
---
All submissions for this problem are available.###  Read problems statements in [Mandarin Chinese](http://www.codechef.com/download/translated/COOK76/mandarin/SEQUAT2.pdf), [Russian](http://www.codechef.com/download/translated/COOK76/russian/SEQUAT2.pdf) and [Vietnamese](http://www.codechef.com/download/translated/COOK76/vietnamese/SEQUAT2.pdf) as well.

Sebi's father gives him a maths question every night after dinner which he has to solve before sleeping. Today's question is as follows.

There are four integers **A, B, C, N**. Consider the following equation in two non-negative integer variables **x** and **y**`<pre><b>x * y = (x | y) * (x & y) + A * x + B * y + C</b></pre>`where **|** denotes [bitwise OR](https://en.wikipedia.org/wiki/Bitwise_operation#OR) and **&** denotes [bitwise AND](https://en.wikipedia.org/wiki/Bitwise_operation#AND) operation.

Sebi's father asks him to consider solutions such that **x, y** don't exceed **N**. Let **X** be the sum of **x**'s for all solutions **(x, y)** and **Y** be the sum of **y**'s for all solutions **(x, y)**.

Its already very late in night. He is very sleepy, he thinks that if you can help him in telling the answer of the problem, he will just tell the answer to his father and sleep. Can you please help him?

### Input

The first line of the input contains an integer **T** denoting the number of test cases.

Each of the next **T** lines contains four space separated integers, denoting **A, B, C, N** as defined in the statement.

### Output

Output a **T** line containing two space separated integers **X** and **Y**.

### Constraints

- **1** ≤ **T** ≤ **60**
- **1** ≤ **N** ≤ **100000**
- **1** ≤ **A, B, C** ≤ **10000**

### Example 1

<pre><b>Input:</b>
1
1 1 4 9

<b>Output:</b>
12 12
</pre>
### Example 2

<pre><b>Input:</b>
1 
1 1 3 5

<b>Output:</b>
7 7
</pre>
### Explanation

**Example 1.**

There are two solutions - (3, 9) and (9, 3). For example, (9, 3) is a solution because: 9 | 3 = 11 and 9 & 3 = 1, so 9 \* 3 = 11 \* 1 + 1 \* 9 + 1 \* 3 + 4.

The value of **X** will be 3 + 9 = 12, and where **Y** will be 9 + 3 = 12.

**Example 2.**

The solutions of the equation is (2, 5) and (5, 2). So, **X = 7** and **Y = 7**.
