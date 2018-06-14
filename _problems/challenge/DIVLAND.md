---
category_name: challenge
problem_code: DIVLAND
problem_name: 'Division of Lands'
languages_supported:
    - C
    - CPP14
    - JAVA
    - PYTH
    - 'PYTH 3.5'
    - PYPY
    - CS2
    - 'PAS fpc'
    - 'PAS gpc'
    - RUBY
    - PHP
    - GO
    - NODEJS
    - HASK
    - SCALA
    - D
    - PERL
    - FORT
    - WSPC
    - ADA
    - CAML
    - ICK
    - BF
    - ASM
    - CLPS
    - PRLG
    - ICON
    - 'SCM qobi'
    - PIKE
    - ST
    - NICE
    - LUA
    - BASH
    - NEM
    - 'LISP sbcl'
    - 'LISP clisp'
    - 'SCM guile'
    - JS
    - ERL
    - TCL
    - PERL6
    - TEXT
    - 'SCM chicken'
    - CLOJ
    - FS
max_timelimit: '1'
source_sizelimit: '50000'
problem_author: 'witalij_hq '
problem_tester: xcwgf666
date_added: 23-02-2015
tags:
    - april15
    - challenge
    - witalij_hq
editorial_url: 'http://discuss.codechef.com/problems/DIVLAND'
time:
    view_start_date: 1428917400
    submit_start_date: 1428917400
    visible_start_date: 1428917400
    end_date: 1735669800
    current: 1525454468
is_direct_submittable: false
layout: problem
---
All submissions for this problem are available.###  Read problems statements in [Mandarin Chinese](http://www.codechef.com/download/translated/APRIL15/mandarin/DIVLAND.pdf) and [Russian](http://www.codechef.com/download/translated/APRIL15/russian/DIVLAND.pdf).

Time flies fast, Chef’s sons are getting older, stronger and higher. Chef has got two sons and they don’t go well with each other. Their relations are getting worse day by day. Concerned Chef has now decided to separate them. Chef is very rich and he has got **N** cities (**N** is even). His sons are all he has and he must divide the cities into his sons equally. There are some roads running between the cities. Chef has to destruct all the roads between cities of first and second sons. The destruction of road costis a lot of money. So Chef wants to save as much as he can. So you have to help Chef in finding out minimal cost to split cities to his sons.

### Input

First line contains two space separated integers **N**, **M** denoting the number of cities and the number of the roads respectively.

Each **ith** of the following **M** lines contains three integers **ai**, **bi** and **ci** denoting the road between the city with the number **ai** and the city with the number **bi**. The cost for it's destruction is **ci**.

### Output

In a single line, output **N / 2** numbers – the numbers of cities that will belong to the first son after the partition.

### Scoring

Your score will be sum of all **ci** of all edges that would be destroyed by Chef. Your score for the problem will be sum of scores for each test files.

Your solution will be tested against only on **20%** of the test files during the contest and will be rejudged against **100%** after the end of competition.

### Constraints

- **1** ≤ **N** ≤ **106**
- **1** ≤ **M** ≤ **106**
- 0 ≤ **ai, bi** < **N**
- **1** ≤ **ci** ≤ **109**

### Subtasks

Subtask 1:

- **1** ≤ **N** ≤ **100**
- **1** ≤ **M** ≤ **1000**

Subtask 2:

- **100** ≤ **N** ≤ **2\*104**
- **1000** ≤ **M** ≤ **2\*105**

Subtask 3:

- **2\*104** ≤ **N** ≤ **105**
- **2\*105** ≤ **M** ≤ **4\*105**

Subtask 4:

- **105** ≤ **N** ≤ **106**
- **4\*105** ≤ **M** ≤ **106**

### Example

<pre><b>Input:</b>
4 4
0 1 1 
1 2 2
2 3 3
3 0 4

<b>Output:</b>
1 2
</pre>### Test data generation

Four plans are used:

- Complete graph with random edge weights
- Complete bipartite graph with random edge weights
- Random tree
- Fully random graph

The first two sections subtasks are generated with the usage of all **4** of them, third section is generated with the usage only of the fourth plan, and fourth section is generated with the plans number **3** and **4**.
