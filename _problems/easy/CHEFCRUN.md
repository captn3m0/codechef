---
category_name: easy
problem_code: CHEFCRUN
problem_name: 'Chef and Circle Run'
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
max_timelimit: '2'
source_sizelimit: '50000'
problem_author: berezin
problem_tester: xcwgf666
date_added: 13-10-2015
tags:
    - aug16
    - berezin
    - easy
    - prefix
editorial_url: 'http://discuss.codechef.com/problems/CHEFCRUN'
time:
    view_start_date: 1471253400
    submit_start_date: 1471253400
    visible_start_date: 1471253400
    end_date: 1735669800
    current: 1493558118
layout: problem
---
All submissions for this problem are available.###  Read problems statements in [Mandarin Chinese](http://www.codechef.com/download/translated/AUG16/mandarin/CHEFCRUN.pdf), [Russian](http://www.codechef.com/download/translated/AUG16/russian/CHEFCRUN.pdf) and [Vietnamese](http://www.codechef.com/download/translated/AUG16/vietnamese/CHEFCRUN.pdf) as well.

Chef likes to play with graphs a lot. Today he created a graph in the following way. He first lays down **N** nodes in a circle. The nodes nodes are numbered from **1** to **N**, in the clockwise order, i.e. the node **2** is followed by **1**, **3** is followed by **2**, and **1** is followed by **N**. Two vertices are said to be adjacent if they don't have an intermediate vertex placed between them. There is an edge between each adjacent pair of vertices, so there are total **N** such edges. Each edge has an integer associated with it (may be negative).

Chef wants to find a **walk** from node **start** to node **end** using the above described edges. Chef has to pay cost for each edge in the walk equal to the integer associated with the edge. He wants to minimize the total cost he will incur. Also, Chef does not like to move through an edge more than twice. Find out minimum cost that Chef has to pay.

Note that a walk from a node **u** to **v** can contain repeated vertices in it. Please refer to [link](http://mathworld.wolfram.com/Walk.html) for a formal definition.

### Input

The first line of the input contains an integer **T** denoting the number of test cases. The description of **T** test cases follows.

The first line of each test case contains a single integer **N** denoting the number of nodes.

The second line contains **N** space-separated integers **R1**, **R2**, ..., **RN** denoting the integer of the rib from node **i** to node **(i % N) + 1**. Note that **RN** is an integer on a rib from node **N** to node **1**.

The third line contains two integers **start** and **end** denoting the first and the last node of the walk.

### Output

For each test case, output a single line containing the minimal possible cost Chef need to pay.

### Constraints

- **-106** ≤ **Ri** ≤ **106**
- **1** ≤ **start** end ≤ **N**

### Subtasks

- **Subtask #1 (20 points):** **1** ≤ sum of **N** ≤ **20**; **1** ≤ **N** ≤ **8**
- **Subtask #2 (30 points):** **1** ≤ sum of all **N** ≤ **103**; **1** ≤ **N** ≤ **200**
- **Subtask #3 (50 points):** **1** ≤ sum of all **N** ≤ **106**; **1** ≤ **N** ≤ **2 × 105**

### Example

```

<b>Input:</b>
<tt>2
4
1 2 1 1
1 3
5
-5 100 100 100 2
1 5</tt>

<b>Output:</b>
<tt>2
-8</tt>

```
### Explanation

**Example case 1.** Chef's walk starts with node 1. He goes to node **4** by incurring a cost of 1. Then from node 4, he goes to node 3 by incurring a cost of 1 more. Total cost incurred is 2.

**Example case 2.** Chef goes from **1** to **2** by incurring a cost of **-5**. Then from **2** to **1** using the edge **second time** and incurring cost of **-5** again. Now, he can not use the edge between 1 and 2 again, as he has traversed the edge already twice. Now he will go from node 1 to node 4 by paying a cost of 2. Total sum of costs incurred is -5 + -5 + 2 = -8. This is the minimum possible cost that Chef can have.