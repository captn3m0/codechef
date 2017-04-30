---
category_name: hard
problem_code: ALMROW
problem_name: 'Bear and Almost Row'
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
max_timelimit: '2.5 - 7'
source_sizelimit: '50000'
problem_author: errichto
problem_tester: kingofnumbers
date_added: 24-03-2017
tags:
    - errichto
    - floyd
    - hard
    - ltime46
    - shortest
time:
    view_start_date: 1490461200
    submit_start_date: 1490461200
    visible_start_date: 1490461200
    end_date: 1735669800
    current: 1493556605
layout: problem
---
All submissions for this problem are available.###  Read problems statements in [Mandarin Chinese](http://www.codechef.com/download/translated/LTIME46/mandarin/ALMROW.pdf), [Russian](http://www.codechef.com/download/translated/LTIME46/russian/ALMROW.pdf) and [Vietnamese](http://www.codechef.com/download/translated/LTIME46/vietnamese/ALMROW.pdf) as well.

Bearland has **N** cities, numbered 1 through **N**. For every i between 1 and **N**-1 inclusive, there is a road between cities i and i+1. There **K** extra roads: the i-th of them connects two different cities **a**i and **b**i. So, there are **N**-1+**K** roads in total. All roads are bidirectional.

You can assume that every two cities are connected by at most one road.

Let f(s, t) denote the distance between cities s and t, i.e. the minimum possible number of roads needed to get from one city to the other.

Your task is to find the sum of f(s, t) over all pairs of cities (s, t) such that s

### Input

The first line of the input contains an integer **T** denoting the number of test cases. The description of **T** test cases follows.

The first line of each test case contains an integer **N** denoting the number of cities.

The second line contains an integer **K** denoting the number of extra roads. Note the unusual constraint for **K** (in the constraints section below).

The i-th of the following **K** lines contains two different integers **a**i and **b**i, denoting cities connected by the i-th road. All **N**-1+**K** roads will be distinct.

### Output

For each test case, output a single line containing one integer — the sum of f(s, t) over all pairs (s, t) such that s

### Constraints

- 1 ≤ **T** ≤ 1000
- 2 ≤ **N** ≤ 106
- 0 ≤ **K** ≤ 10
- 1 ≤ **a**i, **b**i ≤ **N**
- **a**i ≠**b**i
- All **N**-1+**K** roads will be distinct.

### Subtasks

- Subtask #1 (15 points): 2 ≤ **N** ≤ 40
- Subtask #2 (35 points): The sum of **N** in all test cases won't exceed 200,000.
- Subtask #3 (15 points): 0 ≤ **K** ≤ 1
- Subtask #4 (35 points): Original constraints.

### Example

```
<b>Input:</b>
4
4
2
1 3
4 1
5
1
2 5
20
3
1 7
3 12
17 19
1000000
0

<b>Output:</b>
7
16
891
166666666666500000

```
### Explanation

The provided example test contains **T** = 4 test cases. The following drawings show the situation for the first two test cases (extra roads are red):

![](https://codechef_shared.s3.amazonaws.com/uploads/2017/03/LTIME46/ALMROW.png)

In the first test case, there are 4 cities and 2 extra roads 1-3 and 4-1. So we have 5 roads in total: 1-2, 1-3, 1-4, 2-3, 3-4 (see the left drawing). The sought values are:

- f(1, 2) = f(1, 3) = f(1, 4) = f(2, 3) = f(3, 4) = 1
- f(2, 4) = 2

The answer is 1 + 1 + 1 + 1 + 1 + 2 = 7.