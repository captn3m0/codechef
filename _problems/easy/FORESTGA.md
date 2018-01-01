---
category_name: easy
problem_code: FORESTGA
problem_name: 'Forest Gathering'
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
problem_author: cenadar
problem_tester: kevinsogo
date_added: 20-02-2016
tags:
    - binary
    - cenadar
    - easy
    - may16
editorial_url: 'http://discuss.codechef.com/problems/FORESTGA'
time:
    view_start_date: 1463391000
    submit_start_date: 1463391000
    visible_start_date: 1463391000
    end_date: 1735669800
    current: 1493558147
layout: problem
---
All submissions for this problem are available.###  Read problems statements in [Mandarin Chinese](http://www.codechef.com/download/translated/MAY16/mandarin/FORESTGA.pdf), [Russian](http://www.codechef.com/download/translated/MAY16/russian/FORESTGA.pdf) and [Vietnamese](http://www.codechef.com/download/translated/MAY16/vietnamese/FORESTGA.pdf) as well.

Chef is the head of commercial logging industry that recently bought a farm containing **N** trees. You are given initial height of the i-th tree by **Hi** and the rate of growth of height as **Ri** meters per month. For simplicity, you can assume that all the trees are perfect cylinders of equal radius. This allows us to consider only the height of trees when we talk about the amount of wood.

In Chef's country, laws don't allow one to cut a tree partially, so one has to cut the tree completely for gathering wood. Also, laws prohibit cutting trees of heights (strictly) lower than **L** meters.

Today Chef received an order of **W** meters (of height) of wood. Chef wants to deliver this order as soon as possible. Find out how minimum number of months he should wait after which he will able to fulfill the order. You can assume that Chef's company's sawing machines are very efficient and take negligible amount of time to cut the trees.

### Input

There is a single test case per test file.

The first line of the input contains three space separated integers **N**, **W** and **L** denoting the number of trees in the farm, the amount of wood (in meters) that have to be gathered and the minimum allowed height of the tree to cut.

Each of next **N** lines contain two space separated integers denoting **Hi** and **Ri** respectively.

### Output

Output a single integer denoting the number of months that have to pass before Chef will be able to fulfill the order.

### Constraints

- **1** ≤ **N** ≤ **105**
- **1** ≤ **W**, **L** ≤ **1018**
- **1** ≤ **Hi**, **Ri** ≤ **109**

### Subtasks

- **Subtask #1 \[40 points\]:** **1 ≤**  **N**, **W**, **L** ≤ **104**
- **Subtask #2 \[60 points\]:** No additional constraints

### Example

<pre><b>Input:</b>
3 74 51
2 2
5 7
2 9

<b>Output:</b>
7

</pre>### Explanation
After **6** months, heights of each tree will be **14**, **47** and **56** respectively. Chef is allowed to cut only the third tree, sadly it is not enough to fulfill an order of 74 meters of wood.

After **7** months, heights of each tree will be **16**, **54** and **65** respectively. Now Chef is allowed to cut second and third trees. Cutting both of them would provide him **119** meters of wood, which is enough to fulfill the order.
