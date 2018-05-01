---
category_name: medium
problem_code: LEFEED
problem_name: 'Andrew and the Birthday'
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
problem_author: witua
problem_tester: laycurse
date_added: 20-03-2012
tags:
    - cook33
    - medium
    - probability
    - witua
editorial_url: 'http://discuss.codechef.com/problems/LEFEED'
time:
    view_start_date: 1366569000
    submit_start_date: 1366569000
    visible_start_date: 1728420179
    end_date: 1735669800
    current: 1493557740
layout: problem
---
Today is Andrew's birthday.

He has invited **N** friends for celebrating it, and now he needs to prepare the table for them. All his friends will be sitting in a row on the seats numbered from **1** to **N**, inclusive. There are **M** different types of meatballs (numbered from **1** to **M**, inclusive). Andrew is going to serve meatballs of exactly one type at each of the seats.

You are an given array **A** of **N** integers in range **\[0, M\]**. **Ai = 0** means that Andrew is not sure which type of meatballs he should serve at seat **i**. So, in this case, we consider seat **i** will be served meatballs of types from **1** to **M** with equal probability. Otherwise, **Ai ≥ 1** means that seat **i** will be served meatballs of type **Ai**.

It's very important for Andrew to know, what is the expected maximal number of consecutively sitting friends with the same type of meatballs served at their seats. Help Andrew to find this number.

### Input

The first line of the input contains an integer **T**, denoting the number of test cases. The description of **T** test cases follows. The first line of each test case contains two space-separated integers **N** and **M**. The second line contains **N** space-separated integers **A1**, **A2**, ..., **AN**.

### Output

For each test case, output a real number, denoting the expected value of maximal number of consecutively sitting friends with the same type of meatballs served to their seats.

The output values will be considered as correct if and only if they have the absolute errors at most **10−6**.

### Constraints

- **1** ≤ **T** ≤ **10**
- **1** ≤ **N, M** ≤ **50**
- 0 ≤ **Ai** ≤ **M**

### Example

<pre><b>Input:</b>
2
2 2
0 0
4 7
0 1 1 0

<b>Output:</b>
1.500000000
2.285714286
</pre>### Explanation

**Example case 1**: There are **4** possibilities (with equal probability) of the serving as follows.
**1 1** : maximal number of consecutive seats with the same type = **2**
**1 2** : maximal number of consecutive seats with the same type = **1**
**2 1** : maximal number of consecutive seats with the same type = **1**
**2 2** : maximal number of consecutive seats with the same type = **2**
Therefore the answer is **2 \* (1/4) + 1 \* (1/4) + 1 \* (1/4) + 2 \* (1/4) = 1.5**.

**Example case 2**: There are **49** possibilities of the serving. Among these, the patterns with maximal number of consecutive seats with the same type = **3** are the following **12** patterns
**1 1 1 x**, where **x = 2, 3, ..., 7**
**x 1 1 1**, where **x = 2, 3, ..., 7**
and the pattern with maximal number of consecutive seats with the same type = **4** is the following **1** pattern
**1 1 1 1**
In other **36** patterns, maximal number of consecutive seats with the same type = **2**. Therefore the answer is **2 \* (36/49) + 3 \* (12/49) + 4 \* (1/49) ≈ 2.2857**.
