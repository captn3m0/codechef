---
category_name: medium
problem_code: ABX03
problem_name: 'Four Friends'
languages_supported:
    - ADA
    - ASM
    - BASH
    - BF
    - C
    - CAML
    - CLOJ
    - CLPS
    - COB
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
max_timelimit: '2'
source_sizelimit: '50000'
problem_author: abx_2109
problem_tester: kingofnumbers
date_added: 27-11-2017
tags:
    - abx_2109
    - binary
    - dfs
    - inclusion
    - lca
    - ltime55
    - medium
editorial_url: 'https://discuss.codechef.com/problems/ABX03'
time:
    view_start_date: 1514653200
    submit_start_date: 1514653200
    visible_start_date: 1514653200
    end_date: 1735669800
    current: 1514817151
layout: problem
---
All submissions for this problem are available.### Read problems statements in [Mandarin chinese](http://www.codechef.com/download/translated/LTIME55/mandarin/ABX03.pdf), [Russian](http://www.codechef.com/download/translated/LTIME55/russian/ABX03.pdf) and [Vietnamese](http://www.codechef.com/download/translated/LTIME55/vietnamese/ABX03.pdf) as well.

Paavini, Nupur, Anchal and Ishita are four best friends and roommates. In their normal routine, they only study and study and do nothing else. But now that exams are over, they want to explore the town, so they went to the Trade Fair to eat.

The trade fair has **N** halls and it's represented by a tree with **N** vertices and **N-1** edges. Each edge contains exactly one restaurant offering only meals of one type at a fixed cost.

Since Bhavya and Kaushal didn't go along with them, they have asked **Q** queries. Each query is given as follows: The friends move from hall **U** to hall **V** along the shortest path. From each restaurant they encounter on this path, they will purchase exactly one meal in total if its cost **C** satisfies the following conditions:

- If **C** is a multiple of 2, **C** must be between **X1** and **Y1** inclusive.
- If **C** is a multiple of 3, **C** must be between **X2** and **Y2** inclusive.
- If **C** is a multiple of 5, **C** must be between **X3** and **Y3** inclusive.
- **C** must be a multiple of 2, 3 or 5.

For each query, compute the total cost of all meals bought when travelling from **U** to **V**. you have the answer the queries in online mode.

### Input

9. The first line of the input contains two space-separated integers **N** and **Q** denoting the number of halls and the number of queries respectively.
10. Each of the following **N-1** lines contains three space-separated integers **U**, **V** and **C** denoting an edge connecting halls **U** and **V** and containing a restaurant which provides a meal with cost **C**.
11. Each of the following **Q** lines contains eight space-separated integers **in1**, **in2**, **in3**, **in4**, **in5**, **in6**, **in7** and **in8** describing one query. Lets define **last** as the answer of the previous query modulo **100,000** (if it was the first query then **last** = 0), the parameters of the query can be calculated by: 
  - **U** = **in1** + **last**
  - **V** = **in2** + **last**
  - **X1** = **in3** + **last**
  - **Y1** = **in4** + **last**
  - **X2** = **in5** + **last**
  - **Y2** = **in6** + **last**
  - **X3** = **in7** + **last**
  - **Y3** = **in8** + **last**
### Output

For each query, print the answer to it on a separate line.

### Constraints

- 1 ≤ **N**, **Q** ≤ 50,000
- 1 ≤ **U**, **V** ≤ **N**
- 1 ≤ **C** ≤ 40,000
- 1 ≤ **Xi** ≤ **Y i** ≤ 40,000, for each 1 ≤ **i** ≤ 3

### Subtasks

**Subtask #1 (20 points):** 1 ≤ **N**, **Q** ≤ 1000

**Subtask #2 (80 points):** original constraints

### Example

<pre><b>Input:</b>

3 2
1 2 6
1 3 11
2 3 2 20 3 20 2 4
-4 -3 -4 14 -3 -1 -4 -2

<b>Output:</b>

6
0

</pre>### Explanation
For the first query, they will eat at the restaurant connecting halls 1 and 2; the cost of the meal there is 6.

For the second query, 6 is a multiple of 3, but according to the second condition, the cost of this meal isn't between 3 and 5. Hence they will not eat at any restaurant.
