---
category_name: easy
problem_code: KSUM
problem_name: 'Maximum K Sums'
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
problem_author: ma5termind
problem_tester: xcwgf666
date_added: 12-03-2016
tags:
    - data
    - data
    - greedy
    - implementation
    - ltime35
    - ma5termind
    - sorting
editorial_url: 'http://discuss.codechef.com/problems/KSUM'
time:
    view_start_date: 1462036200
    submit_start_date: 1462036200
    visible_start_date: 1462036200
    end_date: 1735669800
    current: 1493558158
layout: problem
---
All submissions for this problem are available.###  Read problems statements in [Mandarin Chinese](http://www.codechef.com/download/translated/LTIME35/mandarin/KSUM.pdf), [Russian](http://www.codechef.com/download/translated/LTIME35/russian/KSUM.pdf) and [Vietnamese](http://www.codechef.com/download/translated/LTIME35/vietnamese/KSUM.pdf) as well.

Chef likes arrays a lot. Today, he found an array **A** consisting of **N** positive integers.

Let **L** denote the sorted (in non-increasing order) list of size **N\*(N+1)/2** containing the sums of all possible contiguous subarrays of **A**. Chef is interested in finding the first **K** elements from the list **L**. Can you help him in accomplishing this task?

### Input

There is only a single test case per input file.

The first line of input contains two space separated integer numbers **N** and **K** denoting the size of the array and the number of the maximal sums you need to find.

The following line contains **N** space separated integer numbers denoting the array **A**.

### Output

Output **K** space separated integers where the **ith** integer denotes the **ith** element of **L**.

### Constraints

**1. 1 ≤ N ≤ 105** **1. 1 ≤ K ≤ min(N\*(N+1)/2, 105)** **1. 1 ≤ Ai ≤ 109** 
### Subtasks

- Subtask 1 (47 pts) : **1 ≤ N ≤ 1000, 1 ≤ K ≤ min{N\*(N+1)/2, 105}**
- Subtask 2 (53 pts) : **1 ≤ N ≤ 105, 1 ≤ K ≤ min{N\*(N+1)/2, 105}**

### Example

<pre>
<b>Input 1</b>
<tt>3 4
1 3 4</tt>

<b>Output 1</b>
<tt>8 7 4 4</tt>

<b>Input 2</b>
<tt>3 3
10 2 7</tt>

<b>Output 2</b>
<tt>19 12 10</tt>

</pre>### Explanation
**Test 1:**
![](https://s3.amazonaws.com/hr-challenge-images/15909/1461161918-8d79d8843c-B.png "B.png")

The first **4** elements of it are **\[8, 7, 4, 4\]**.
