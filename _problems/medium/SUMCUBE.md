---
category_name: medium
problem_code: SUMCUBE
problem_name: 'Sum of Cubes'
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
    - 'CPP 6.3'
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
    - kotlin
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
    - 'PYTH 3.5'
    - RUBY
    - rust
    - SCALA
    - 'SCM chicken'
    - 'SCM guile'
    - 'SCM qobi'
    - ST
    - swift
    - TCL
    - TEXT
    - WSPC
max_timelimit: '5'
source_sizelimit: '50000'
problem_author: r_64
problem_tester: jingbo_adm
date_added: 4-08-2017
tags:
    - hard
    - maths
    - r_64
    - sept17
    - sqrt
editorial_url: 'https://discuss.codechef.com/problems/SUMCUBE'
time:
    view_start_date: 1505122200
    submit_start_date: 1505122200
    visible_start_date: 1505122200
    end_date: 1735669800
    current: 1514816839
layout: problem
---
All submissions for this problem are available.### Read problems statements in [mandarin chinese](http://www.codechef.com/download/translated/SEPT17/mandarin/SUMCUBE.pdf), [russian](http://www.codechef.com/download/translated/SEPT17/russian/SUMCUBE.pdf) and [vietnamese](http://www.codechef.com/download/translated/SEPT17/vietnamese/SUMCUBE.pdf) as well.

You are given an undirected graph **G** = (**V**, **E**). We define a function **f**(**s**) for **s** ⊆ **V** to be the number of edges in the [induced subgraph](https://en.wikipedia.org/wiki/Induced_subgraph) of **s**.

The problem asks you to calculate the sum of **f**(**s**)**k** over all **s** in **2|V|** subsets of **V**.

As the answer could be very large, output it modulo (**109+7**).

### Input

The first line of input contains an integer **T** denoting the number of test cases.

For each test case, the first line contains three space-separated integers **n** = |**V**|, **m** = |**E**| and **k**.

Then **m** lines follow, each line contains two space-separated integers **u**, **v** denoting an edge (**u**, **v**) is in **E**.

### Output

For each test case, output one line containing one integer, the answer modulo (**109+7**).

### Constraints

- **1** ≤ **T** ≤ **100**
- **2** ≤ **n** ≤ **105**
- 0 ≤ **m** ≤ **105**
- Sum of each of **n, m** over all test cases ≤ **3 \* 105**
- **1** ≤ **u, v** ≤ **n**.
- **1** ≤ **k** ≤ **3**.
- The graph is simple, i.e., doesn't contain self loops and multiple edges.

### Subtasks

- **Subtask #1 (8 points)**: **T, n ≤ 15**
- **Subtask #2 (7 points)**: **k = 1**
- **Subtask #3 (9 points)**: **k = 2**
- **Subtask #4 (15 points)**: 
    - **k = 3**.
    - Sum of **n** over all test cases ≤ **300**
    - Sum of **m** over all test cases ≤ **300**
- **Subtask #5 (24 points)**: 
    - **k = 3**.
    - Sum of **n** over all test cases ≤ **3000**
    - Sum of **m** over all test cases ≤ **3000**
- **Subtask #6 (37 points)**: Original Constraints

### Example

<pre>
<b>Input:</b>
3
3 3 1
1 2
2 3
3 1
4 5 2
1 2
2 3
3 4
4 1
2 4
5 4 3
1 2
1 3
1 4
2 5

<b>Output:</b>
6
56
194

</pre>
### Explanation

**Example case 1.**

**f**(emptyset) = **f**({1}) = **f**({2}) = **f**({3}) = 0;

**f**({1, 2}) = **f**({2, 3}) = **f**({3, 1}) = 1

**f**({1, 2, 3}) = 3.

So the answer is 1 + 1 + 1 + 3 = 6.

**Example case 2.**

The nonzero **f**'s are as follows

**f**({1, 2}) = **f**({2, 3}) = **f**({3, 4}) = **f**({4, 1}) = **f**({2, 4}) = 1

**f**({1, 2, 3}) = **f**({1, 3, 4}) = 2

**f**({1, 2, 4}) = **f**({2, 3, 4}) = 3

**f**({1, 2, 3, 4}) = 5

So the answer is 5 \* 12 + 2 \* 22 + 2 \* 32 + 52 = 56.
