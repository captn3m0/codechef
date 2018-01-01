---
category_name: easy
problem_code: STRSUB
problem_name: 'Count Substrings'
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
problem_author: darkshadows
problem_tester: laycurse
date_added: 18-04-2014
tags:
    - binary
    - darkshadows
    - dynamic
    - march15
    - simple
editorial_url: 'http://discuss.codechef.com/problems/STRSUB'
time:
    view_start_date: 1426498200
    submit_start_date: 1426498200
    visible_start_date: 1426498200
    end_date: 1735669800
    current: 1493558191
layout: problem
---
All submissions for this problem are available.###  Read problems statements in [Mandarin Chinese](http://www.codechef.com/download/translated/MARCH15/mandarin/STRSUB.pdf) and [Russian](http://www.codechef.com/download/translated/MARCH15/russian/STRSUB.pdf).

You are given a string **S** of length **N** consisting only of s and **1**s. You are also given an integer **K**.

You have to answer **Q** queries. In the **i**th query, two integers **Li** and **Ri** are given. Then you should print the number of substrings of **S\[L, R\]** which contain at most **K** s and at most **K** **1**s where **S\[L, R\]** denotes the substring from **L**th to **R**th characters of the string **S**. 
In other words, you have to count number of pairs **(i, j)** of integers such that **L ≤ i ≤ j ≤ R** such that no character in substring **S\[i, j\]** occurs more than **K** times.

### Input

The first line of input contains an integer **T**, denoting the number of test cases. Then **T** test cases follow.

The first line of each test case contains three space-separated integers **N**, **K** and **Q** as described in the problem. The second line contains a string **S** of length **N**. Then the next **Q** lines describe the query, where the **i**th line of them contains two space-separated integers **Li** and **Ri**.

### Output

For each query, print the required answer in a single line.

### Constraints and Subtasks

- **1 ≤ T ≤ 105**
- **1 ≤ K ≤ N ≤ 105**
- **1 ≤ Q ≤ 105**
- **1 ≤ Li ≤ Ri ≤ N**
- Sum of **N** over all test cases in one test file does not exceed **105**
- Sum of **Q** over all test cases in one test file does not exceed **105**
- **S** consists only of s and **1**s.

**Subtask 1: 10 points**

- Sum of **N** over all test cases in one test file does not exceed **100**

**Subtask 2: 10 points**

- **Q = 1**
- **1 ≤ K ≤ min(5, N)**

**Subtask 3: 20 points**

- **1 ≤ Q ≤ 10**

**Subtask 4: 60 points**

- Original constraints.

### Example

<pre><b>Input:</b>
1
8 2 3
01110000
1 4
2 4
5 8

<b>Output:</b>
8
5
7

</pre>### Explanation
**Query 1:** Consider substring **P = S\[1, 4\] = "0111"**.
Out of **10** total substrings of **P**, substrings **P\[1, 4\]** and **P\[2, 4\]** are not valid because both contain more than two **1**s.
 Other substrings contains at most two s and at most two **1**s, thus the answer is **8**./>/>

**Query 2:** Consider substring **P = S\[2, 4\] = "111"**.
Out of **6** total substrings of **P**, substrings **P\[1, 3\]** is not valid because it contains more than two 1s./>

**Query 3:** Consider substring **P = S\[5, 8\] = "0000"**.
Out of **10** total substrings of **P**, substrings **P\[1, 3\]**, **P\[1, 4\]** and **P\[2, 4\]** are not valid because all contain more than two s./>
