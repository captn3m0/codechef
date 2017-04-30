---
category_name: medium
problem_code: TREEPROD
problem_name: 'Product on Tree'
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
problem_tester: pushkarmishra
date_added: 13-11-2015
tags:
    - amitpandeykgp
    - dfs
    - dynamic
    - ltime30
    - tree
editorial_url: 'http://discuss.codechef.com/problems/TREEPROD'
time:
    view_start_date: 1448785800
    submit_start_date: 1448785800
    visible_start_date: 1448785800
    end_date: 1735669800
    current: 1493557949
layout: problem
---
All submissions for this problem are available.###  Read problems statements in [Mandarin Chinese](http://www.codechef.com/download/translated/LTIME30/mandarin/TREEPROD.pdf), [Russian](http://www.codechef.com/download/translated/LTIME30/russian/TREEPROD.pdf) and [Vietnamese](http://www.codechef.com/download/translated/LTIME30/vietnamese/TREEPROD.pdf)

Chef is going to leave his home town and shift to a new city. The new city contains exactly **N** houses. There are roads connecting the houses in such a way that there is exactly one way to go from a house to any other house. Length of each of the roads is known to Chef.

Chief is doing a lot of research before shifting to the new city. He wants to know how many pairs of houses (a,b) are there, such that if we multiply length of all the roads on the path from a to b, the product will be divisible by **M**.

### Input

- First line of the input contains a pair of integers **N** and **M**, where **N** denotes the number of houses.
- Each of the next **(N-1)** lines contains a triplet of numbers (a,b,c) which will denote that the length of the road between houses **a** and **b** is **c**.

### Output

A single integer denoting the number of pair of houses. ### Constraints

- **1 ≤ M ≤ 500**
- 1 ≤ weight of the road ≤ 109


**Subtask #1: 20 points**- **1 ≤ N ≤ 105**
- M is a prime

**Subtask #2: 20 points**- **1 ≤ N ≤ 1000**

**Subtask #3: 60 points**- **1 ≤ N ≤ 105**

### Example

```
<b>Input:</b>
4 2
1 3 4
1 2 4
1 4 4

<b>Output:</b>
6

```
### Explanation

If we multiply the lengths of the roads on the path between any pair of the vertices, it will be divisible by 2.