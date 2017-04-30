---
category_name: easy
problem_code: AVGSHORT
problem_name: 'Short in Average'
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
max_timelimit: '5'
source_sizelimit: '50000'
problem_author: xcwgf666
problem_tester: harshil7924
date_added: 6-08-2016
tags:
    - bellman
    - easy
    - graph
    - ltime39
    - shortest
    - xcwgf666
editorial_url: 'http://discuss.codechef.com/problems/AVGSHORT'
time:
    view_start_date: 1472317200
    submit_start_date: 1472317200
    visible_start_date: 1472317200
    end_date: 1735669800
    current: 1493558107
layout: problem
---
All submissions for this problem are available.###  Read problems statements in [Mandarin Chinese](http://www.codechef.com/download/translated/LTIME39/mandarin/AVGSHORT.pdf), [Russian](http://www.codechef.com/download/translated/LTIME39/russian/AVGSHORT.pdf) and [Vietnamese](http://www.codechef.com/download/translated/LTIME39/vietnamese/AVGSHORT.pdf) as well.

There are a lot of problems related to the shortest paths. Nevertheless, there are not much problems, related to the shortest paths _in average_.

Consider a directed graph **G**, consisting of **N** nodes and **M** edges. Consider a walk from the node **A** to the node **B** in this graph. The average length of this walk will be total sum of weight of its' edges divided by number of edges. Every edge counts as many times as it appears in this path.

Now, your problem is quite simple. For the given graph and two given nodes, find out the shortest average length of the walk between these nodes. Please note, that the length of the walk need not to be finite, but average walk length will be.

### Input

The first line of the input contains an integer **T** denoting the number of test cases. The description of **T** test cases follows.

The first line of each test case contains a pair of space-separated integers **N** and **M** denoting the number of nodes and the number of edges in the graph.

Each of the following **M** lines contains a triple of space-separated integers **Xi Yi Zi**, denoting the arc, connecting the node **Xi** to the node **Yi** (but not vice-versa!) having the weight of **Zi**.

The next line contains a pair of space separated integers **A** and **B**, denoting the first and the last node of the path.

### Output

For each test case, output a single line containing the length of the shortest path _in average_.

If there is no path at all, output just **-1** on the corresponding line of the output.

### Constraints

- **1** ≤ **N** ≤ **500**
- **1** ≤ **M** ≤ **1000**
- **A** is not equal to **B**
- **1** ≤ **A**, **B**, **Xi**, **Yi** ≤ **N**
- **1** ≤ **Zi** ≤ **100**
- There are no self-loops and multiple edges in the graph.
- **1** ≤ sum of **N** over all test cases ≤ **10000**
- **1** ≤ sum of **M** over all test cases ≤ **20000**

### Subtasks

- **Subtask #1 (45 points)**: **1** ≤ **N** ≤ **10**, **1** ≤ **M** ≤ **20**; Your answer will be considered correct in case it has an absolute or relative error of no more than **10-2**.
- **Subtask #2 (55 points)**: no additional constraints; Your answer will be considered correct in case it has an absolute or relative error of no more than **10-6**.

### Example

```
<b>Input:</b>
<tt>2
3 3
1 2 1
2 3 2
3 2 3
1 3
3 3
1 2 10
2 3 1
3 2 1
1 3</tt>

<b>Output:</b>
<tt>1.5
1.0</tt>

```
### Explanation

**Example case 1.** The walk 1 -> 2 and 2 -> 3 has average length of 3/2 = 1.5. Any other walks in the graph will have more or equal average length than this.