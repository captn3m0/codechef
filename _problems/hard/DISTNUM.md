---
category_name: hard
problem_code: DISTNUM
problem_name: 'Simple Queries'
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
problem_author: mgch
problem_tester: laycurse
date_added: 17-07-2015
tags:
    - 2d
    - aug15
    - fenwick
    - mgch
    - range
    - segment
    - sqrt
    - super
editorial_url: 'http://discuss.codechef.com/problems/DISTNUM'
time:
    view_start_date: 1439803800
    submit_start_date: 1439803800
    visible_start_date: 1439803800
    end_date: 1735669800
    current: 1493556690
layout: problem
---
All submissions for this problem are available.###  Read problems statements in [Mandarin Chinese](http://www.codechef.com/download/translated/AUG15/mandarin/DISTNUM.pdf) and [Russian](http://www.codechef.com/download/translated/AUG15/russian/DISTNUM.pdf).

Given an array **A** consisting of **N** positive integers, and **Q** queries on it. The queries can be of five types:

- **1 l r** - let **S** - sorted set of elements with indices between **l** and **r**. You need to find:
![](http://www.codechef.com/download/AUG15/DISTNUM.png)

- **2 x y** - assign the value **y** to element at position **x**.
- **3 x** - delete element at position **x** from array.
- **4 z y** - insert **y** after element at position **z**. If **z** equal 0 then **y** should insert before the first element.
- **5 l r** - count the number of distinct numbers in array between indices **l** and **r**.

All the indices in the queries are 1-based.

Array always contains at least one element.

### Input

The first line of input contains two integers **N** and **Q** denoting the number of elements in **A**, and the number of queries to be executed. The second line of input contains **N** integers denoting the array **A**. Each of the next **Q** lines contains one query.

### Output

For each query of **type 1** or **type 5**, output the answer to the query in a single line.

### Constraints

- **1** ≤ **N, Q** ≤ **105**
- **1** ≤ **A**i, **y** ≤ **109 + 6**
- **1** ≤ **x**  ≤ **|A|**
- **1** ≤ **l**  ≤  **r**  ≤ **|A|**
- ≤ **z**  ≤ **|A|**

### Example

<pre><b>Input:</b>
5 8
1 2 3 2 1
1 1 3
5 1 5
2 2 4
1 2 4
3 3
4 0 5
1 1 2
1 1 5

<b>Output:</b>
6
3
24
0
78

<b>Input:</b>
10 15
5 4 3 5 4 1 5 4 3 1
2 8 580347
4 6 503576
1 2 5
5 8 11
1 2 6
4 7 565239
3 6
3 11
3 3
2 9 674360
1 1 6
2 2 589693
4 5 236488
1 8 9
5 2 7


<b>Output:</b>
60
4
107
788510349
0
6


</pre>### Subtasks
- **Subtask 1:** **Q**\***N** ≤ 2\*107. **Points - 10**
- **Subtask 2:** Queries are of type 5 only. **Points - 5**
- **Subtask 3:** Queries are of type 1 only. **Points - 10**
- **Subtask 4:** Queries are of types 2, 5 only. **Points - 15**
- **Subtask 5:** Queries are of types 1, 2, 5 only. **N, Q** ≤ 50000 **Points - 15**
- **Subtask 6:** Queries are of types 2, 3, 4 only. **Points - 5**
- **Subtask 7:** **N, Q** ≤ 50000. **Points - 10**
- **Subtask 8:** Original constraints. **Points - 30**

### Explanation

**Query 1** Sorted set of elements with positions between 1 and 3 is S = {1, 2, 3}, ans = 1 \* 2 \* 3 = 6.

**Query 2** Set of elements with positions between 1 and 5 is S = {1, 2, 3}, ans = |S| = 3.

**Query 3** After this query A = {1, 4, 3, 2, 1}.

**Query 4** Sorted set of elements with positions between 2 and 4 is S = {2, 3, 4}, ans = 2 \* 3 \* 4 = 24.

**Query 5** After this query A = {1, 4, 2, 1}.

**Query 6** After this query A = {5, 1, 4, 2, 1}.

**Query 7** Sorted set of elements with positions between 1 and 2 is S = {1, 5}, ans = 0.

**Query 8** Sorted set of elements with positions between 1 and 5 is S = {1, 2, 4, 5}, ans = 1 \* 2 \* 4 + 1 \* 2 \* 5 + 2 \* 4 \* 5 + 1 \* 4 \* 5 = 78.
