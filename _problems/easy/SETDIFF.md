---
category_name: easy
problem_code: SETDIFF
problem_name: 'Set Difference '
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
problem_author: amitpandeykgp
problem_tester: kevinsogo
date_added: 27-02-2015
tags:
    - amitpandeykgp
    - basic
    - easy
    - may15
editorial_url: 'http://discuss.codechef.com/problems/SETDIFF'
time:
    view_start_date: 1431941400
    submit_start_date: 1431941400
    visible_start_date: 1431941400
    end_date: 1735669800
    current: 1493558186
layout: problem
---
All submissions for this problem are available.###  Read problems statements in [Mandarin Chinese](http://www.codechef.com/download/translated/MAY15/mandarin/SETDIFF.pdf) and [Russian](http://www.codechef.com/download/translated/MAY15/russian/SETDIFF.pdf).

Churu is working as a data scientist in Coderpur. He works on a lot of data on the daily basis. One day, he found an interesting problem, which was very easy to solve for small data but was getting more complex with increasing number of data points. So, Churu needs your help in solving this problem.

 Given a set **S** of **N** non-negative integers (Some integers might occur more than once in the set), find out the value of **SETDIFF(S)**.

![Mountain View](/download/extimages/accad1ef4ade08d05cd52ee301870624.png)

Where **max(s)** represents the maximum value in set **s** whereas **min(s)** represents the minimum value in the set **s**.
As value of  **SETDIFF(S)** can be very large, print it modulo  **(109 + 7)** .

There might be repeated values in the set. For set **S** = **{1,2,2}**, consider that first 2 is not same as the second 2 and there will be two different subsets **{1,2}**. See last sample case for the more clarifications.

### Input

- First line of input contains an integer **T** denoting number of test cases.
- For each test case, first line will contain an integer **N** denoting number of elements in set **S**.
- Next line contains **N** space separated integers denoting the set **S**.

### Output

For each test case, print a single integer representing the answer of that test case.

### Note

Two subsets will be called different if there exists an index **i** such that **S\[i\]** occurs in one of the subset and not in another.

### Constraints

**Subtask #1: 20 points**

- **1 ≤ T ≤ 5, 1 ≤ N ≤ 1000, 0 ≤ value in set ≤ 109**

**Subtask #2: 25 points**

- **1 ≤ T ≤ 5, 1 ≤ N ≤ 105, 0 ≤ value in set ≤ 1000**

**Subtask #3: 55 points**

- **1 ≤ T ≤ 5, 1 ≤ N ≤ 105, 0 ≤ value in set ≤ 109**

### Example

<pre><b>Input:</b>
4
2
1 2
3
1 2 3
4
1 2 3 4
3
1 2 2

<b>Output:</b>
1
6 
23
3

</pre>### Explanation
For first case answer will be 2-1 = 1.

For the second case:

Subset = {1}, max(s)-min(s) = 0.
Subset = {2}, max(s)-min(s) = 0.
Subset = {3}, max(s)-min(s) = 0.
Subset = {1,2}, max(s)-min(s) = 1.
Subset = {2,3}, max(s)-min(s) = 1.
Subset = {1,3}, max(s)-min(s) = 2.
Subset = {1,2,3}, max(s)-min(s) = 2.
So the output will be 1+1+2+2 = 6.

In the last case, there are three subsets, {1,2}, {1,2} and {1,2,2} having max(s) - min(s) = 1 for each.
