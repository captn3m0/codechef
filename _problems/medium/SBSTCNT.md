---
category_name: medium
problem_code: SBSTCNT
problem_name: 'Weird Queries'
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
max_timelimit: '4'
source_sizelimit: '50000'
problem_author: utkarsh_lath
problem_tester: null
date_added: 8-07-2016
tags:
    - utkarsh_lath
time:
    view_start_date: 1468063200
    submit_start_date: 1468063200
    visible_start_date: 1468063200
    end_date: 1735669800
    current: 1493557892
layout: problem
---
All submissions for this problem are available.###  Read problems statements in [Mandarin Chinese](http://www.codechef.com/download/translated/SNCKFL16/mandarin/SBSTCNT.pdf), [Russian](http://www.codechef.com/download/translated/SNCKFL16/russian/SBSTCNT.pdf) and [Vietnamese](http://www.codechef.com/download/translated/SNCKFL16/vietnamese/SBSTCNT.pdf) as well.

You are given a list of **M** positive numbers, **A0**, **A1**, ..., **AM-1**. You have to answer **Q** queries. Each query has four parameters, **l, r, n, k**. Given a query with parameters **l, r, n, k** here is how to compute the answer:

- Let **(B1, B2 ..., Bd) = (Al, Al+1, ... ,Ar)**, where **d = r-l+1**.
- Let **S** = set of all points **(x1, x2, ..., xd)** in **d**-dimensional space such that **0 < xi ≤ Bi**.
- For **x, y ∈ S**, define **dist(x, y) = min1 ≤ i ≤ d | xi - yi |**
- The answer is number of subsets of **S** of size exactly **n** such that distance (denoted by above defined **dist** function) between any two points is at least **k**.

### Input

The first line of input contains two integers, **M** and **Q**. The second line contains **M** space-separated integers **A0**, **A1**, ..., **AM-1** denoting the array **A**. The next **Q** lines contain one query each. Each query consists of a single line having the four space separated integers **l, r, n, k** in this order.

### Output

For each query, output a single line containing the answer modulo **1000000007 (109 + 7)**.

### Constraints

- **1** ≤ **M** ≤ **5 × 105**
- **1** ≤ **Q** ≤ **3 × 105**
- **1** ≤ **Ai** ≤ **105**
- **∑ 0 ≤ i < M Ai** ≤ **3 × 106**
- For each query,  ≤ **l** ≤ **r** < **M**
- **1** ≤ **k** ≤ **105**
- ≤ **n** ≤ **105**

### Example

```
<b>Input:</b>
5 2
4 5 4 6 2
0 3 1 1
2 2 2 3

<b>Output:</b>
480
1

```
### Explanation

For the first query, the answer is 4 \* 5 \* 4 \* 6, because we just have to choose one coordinate from each dimension.
For the second query, the array **B = \[4\]** and you have to pick two positive integers less than or equal to 4 such that the distance between them is 3 or more. There is only way to do this: pick 1 and 4.