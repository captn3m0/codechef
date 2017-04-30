---
category_name: hard
problem_code: SEZ
problem_name: 'Special Economic Zone'
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
problem_author: cgy4ever
problem_tester: kevinsogo
date_added: 20-04-2015
tags:
    - cgy4ever
    - lp
    - may15
    - medium
editorial_url: 'http://discuss.codechef.com/problems/SEZ'
time:
    view_start_date: 1431941400
    submit_start_date: 1431941400
    visible_start_date: 1431941400
    end_date: 1735669800
    current: 1493556846
layout: problem
---
All submissions for this problem are available.###  Read problems statements in [Mandarin Chinese](http://www.codechef.com/download/translated/MAY15/mandarin/SEZ.pdf) and [Russian](http://www.codechef.com/download/translated/MAY15/russian/SEZ.pdf).

Fox Ciel is the queen of Fox Kingdom. There are **n** cities and **m** bidirectional roads between them. Two cities are called neighbours if there is a road between them. She wants to select some of the cities to establish as SEZs (Special Economic Zones). Also she must ensure that no two neighbouring cities are SEZ's as it will hinders growth of both the cities.

People in SEZ will be happy due to huge employments opportunities. People living in a non SEZ city and having at least one neighbouring SEZ city will be unhappy due to jealousy.

Let **x** be the number of happy cities and **y** be the number of unhappy cities. Ciel's goal is to maximize the value of **(x - y)**. Please output the maximal value of **(x - y)**.

### Input

- There will be exactly one test case in a single test file.
- The first line will contain two space separated integers **n** and **m**.
- In the next **m** lines, each line will contain two space integers **u, v** denoting that there is a road between city **u** and **v**.
### Output

Print a single integer corresponding to the maximal value of **(x - y)**.

### Constraints

- **1 ≤ n ≤ 200**
- **1 ≤ m ≤ 400**
- There won't be any self-loop or repeated edges.

### Subtasks

- 5%: n <= 20
- 95%: no other constraints

### Example


```
<b>Input:</b>
6 5
1 2
2 3
4 5
5 6
6 4

<b>Output:</b>
1

```
### Explanation

Ciel will select city **1** and **3** as SEZ. So **x = 2** (city **1** and **3**), **y = 1** (city **2**), **x - y = 1**.