---
category_name: easy
problem_code: L56AVG
problem_name: 'Chef and Average on a Tree'
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
    - rust
    - SCALA
    - swift
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
    - kotlin
    - PERL6
    - TEXT
    - 'SCM chicken'
    - CLOJ
    - COB
    - FS
max_timelimit: '1 - 3'
source_sizelimit: '50000'
problem_author: kefaa
problem_tester: mgch
date_added: 18-01-2018
tags:
    - binary
    - easy
    - kefaa
    - ltime56
    - taran_1407
    - tree
editorial_url: 'https://discuss.codechef.com/problems/L56AVG'
time:
    view_start_date: 1517073000
    submit_start_date: 1517073000
    visible_start_date: 1517073000
    end_date: 1735669800
    current: 1525198937
is_direct_submittable: false
layout: problem
---
All submissions for this problem are available.### Read problems statements in [Mandarin chinese](http://www.codechef.com/download/translated/LTIME56/mandarin/L56AVG.pdf), [Russian](http://www.codechef.com/download/translated/LTIME56/russian/L56AVG.pdf) and [Vietnamese](http://www.codechef.com/download/translated/LTIME56/vietnamese/L56AVG.pdf) as well.

Chef has a tree with **N** nodes. Each node of the tree has an integer weight associated with it.

Let's define the _cost of a sequence_ of numbers as the arithmetic mean of all elements of the sequence.

Next, let's define the _cost of a path_ in the tree as the cost of the sequence of weights of all nodes belonging to the path. (It's possible for a path to contain only one node.)

A set of paths in the tree is called a _correct path decomposition_ if each node of the tree belongs to exactly one of the paths from this set. The _cost_ of a correct decomposition is defined as the minimum of costs of all paths in this decomposition.

Chef would like to find the maximum cost of a correct decomposition. Can you help him?

### Input

- The first line of the input contains a single integer **T** denoting the number of test cases. The description of **T** test cases follows.
- The first line of each test case contains a single integer **N**.
- The second line contains **N** space-separated integers **A1, A2, ..., AN** denoting the weights of nodes of the tree.
- Each of the following **N-1** lines contains two space-separated integers **x** and **y** denoting an edge between nodes **x** and **y**.

### Output

For each test case, print the maximum possible cost among all correct decompositions. You answer will be considered correct if its absolute error does not exceed 10-6.

### Constraints

- 1 ≤ **T** ≤ 20
- 1 ≤ **N** ≤ 100,000
- 1 ≤ sum of **N** over all test cases ≤ 200,000
- 1 ≤ **Ai** ≤ 100,000

### Subtasks

**Subtask #1 (15 points, time limit 1 second):**

- 1 ≤ **N** ≤ 200
- 1 ≤ sum of **N** over all testcases ≤ 400
- for each **i** (1 < **i** ≤ **N**), there is an edge connecting nodes **i** and **i-1**

**Subtask #2 (35 points, time limit 1 second):**

- 1 ≤ **N** ≤ 200
- 1 ≤ sum of **N** over all test cases ≤ 400

**Subtask #3 (50 points, time limit 3 seconds):** original constraints

### Example

<pre><b>Input:</b>
	
2
2
2 3
1 2
5
4 3 5 2 1
5 3
1 3
2 1
3 4

<b>Output:</b>

2.5000000
2.6666667
</pre>###  Explanation 

![https://codechef_shared.s3.amazonaws.com/download/upload/LTIME56/AVG-sample.png](https://codechef_shared.s3.amazonaws.com/download/upload/LTIME56/AVG-sample.png)**Example case 1:** It's better to use one path containing both nodes (blue in the picture above) rather than keep each node in a separate one-node path, since the first way gives decomposition cost equal to (**A1** + **A2**) / 2 = (2+3) / 2 = 2.5, while the second one gives decomposition cost min(**A1** / 1, **A2** / 1) = min(2 / 1, 3 / 1) = 2.

**Example case 2:** It's optimal to decompose the tree into three paths (coloured red, green and yellow in the picture). This way, the red path has cost (**A3** + **A4** + **A5**) / 3 = (5 + 2 + 1) / 3 = 8 / 3 = 2.6666667, the green path has cost **A1** = 4 and the yellow path has cost **A2** = 3. Thus, the cost of this decomposition is 2.6666667.

It's possible to merge the green and yellow paths into one path with cost 3.5 without changing the decomposition cost. Any other decomposition has smaller cost.

### Note

: The multiplier for Python has been decreased from 5 to 3.
