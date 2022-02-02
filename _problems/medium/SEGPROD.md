---
category_name: medium
problem_code: SEGPROD
problem_name: 'Product on the segment by modulo '
languages_supported:
    - ADA
    - ASM
    - BASH
    - BF
    - C
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
max_timelimit: '4'
source_sizelimit: '50000'
problem_author: altruist_
problem_tester: null
date_added: 22-08-2017
tags:
    - altruist_
    - medium
    - nov17
editorial_url: 'https://discuss.codechef.com/problems/SEGPROD'
time:
    view_start_date: 1510579800
    submit_start_date: 1510579800
    visible_start_date: 1510579800
    end_date: 1735669800
    current: 1514816024
layout: problem
---
All submissions for this problem are available.### Read problems statements in [Mandarin chinese](http://www.codechef.com/download/translated/NOV17/mandarin/SEGPROD.pdf), [Russian](http://www.codechef.com/download/translated/NOV17/russian/SEGPROD.pdf) and [Vietnamese](http://www.codechef.com/download/translated/NOV17/vietnamese/SEGPROD.pdf) as well.

Given an array  **A**  of  **N**  integers and an integer  **P**  ( not necessarily prime ). You are required to answer  **Q**  queries, **i**-th query is described by two numbers **Li, Ri**, the answer to the query is the product of all numbers in array A from index **Li** to index Ri modulo **P**. You have to answer the queries in online mode, that is you can't know a query before you answer all queries that are before it.

### Input

the first line contains one integer  **T** , the number of test-cases.

the first line of each test-case contains  **N, P, Q** .

the third line contains **N** space-separated integers, the of elements array  **A** .

the fourth line contains array **B** which consists of floor(Q/64) + 2 integers . Let's number the queries starting from 0. If **i** is divisible by 64 then:  **Li = (Bi / 64 + x) mod N, Ri = (Bi / 64 + 1 + x) mod n** .
Otherwise:  **Li = (Li-1 + x) mod N, Ri = (Ri-1 + x) mod N** . If  **Li &gt; Ri**  you should swap them. here x is equal to 0 if it's the first query, otherwise it's equal to the answer of the previous query plus 1 modulo **P**.

### Output

After each test-case you have to print one number - the value of x after the the last query modulo P

### Constraints

- **1** ≤ **T** ≤ **100**
- **1** ≤ **N** ≤ **106**
- **1** ≤ **Q** ≤ **2 \* 107**
- **2** ≤ **P** ≤ **109**
- 0 ≤  **A  i**  ≤ **109**
- 0 ≤ **B i**  ≤ **n - 1**
- The sum of **N** over all testcases does not exceed 106 and sum of **Q** over all testcases does not exceed 2 \* 107

### Subtasks

- **Subtask 1** (20 points) : **P** is prime and all numbers of A in range \[1; **P** - 1\]
- **Subtask 1** (20 points) : **P = **xk**** where x is prime and k is integer and all numbers of A in range \[1; **P** - 1\]
- **Subtask 3** (60 points) : Original constraints

### Example

<pre><b>Input:</b>
2
6 113 3
1 2 3 4 5 6
1 4
6 113 70
1 2 3 4 5 6
1 4 3


<b>Output:</b>
8
21
</pre>