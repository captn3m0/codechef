---
category_name: medium
problem_code: SEGSM
problem_name: 'Subsegment Sum'
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
max_timelimit: '1.5'
source_sizelimit: '50000'
problem_author: kr_abhinav
problem_tester: null
date_added: 26-03-2018
tags:
    - kr_abhinav
time:
    view_start_date: 1522873800
    submit_start_date: 1522873800
    visible_start_date: 1522873800
    end_date: 1735669800
    current: 1525198960
is_direct_submittable: false
layout: problem
---
All submissions for this problem are available.Given an array A = **A1**, **A2**, ..., **AL** and queries of 2 types:

- **Type 1** - represented as 1 **i** **v** meaning that you have to change **Ai** = **v** (change is carried on for further queries too)
- **Type 2** - represented as 2 and explained below

A subsegment **Al**, **Al+1**, ..., **Ar**, is called *interesting*, if for all i, such that l Ai is either equal to **Ai-1**, or it is equal to **Ai-1** + 1. A subsegment of length 1 is also considered to be interesting.

Consider another new array B, which has the elements of A, but in sorted, increasing order. Partition the array B into minimum number of interesting subsegments. You can prove that there is an unique way to do so. In each of those interesting subsegments, find the minimum frequency of an existing element, and add this minimum frequency over all the interesting subsegments in the partition. Output this sum as the answer to the query of Type 2.

Note: Since the input is large, it is recommended to use Fast I/O techniques.

### Input

- The first line contains a single integer, **L**, which is the length of the array
- The second line contains **L** space separated integers: **A1**, **A2**, ..., **AL**, which are the original values in the array.
- The third line contains a single integer, **Q**, which is the number of queries.
- The next **Q** lines denote queries as described above

### Output

- For each query of type 2 print the answer in a new line.

### Constraints

- 1 ≤ **L** ≤ 105
- 0 ≤ **Ai** ≤ 109
- 1 ≤ **Q** ≤ 5\*105
- 1 ≤ **i** ≤ **L**
- 1 ≤ **v** ≤ 109
- 1 ≤ Number of queries of type 2 ≤ 3\*105

### Example

<pre><b>Input:</b>
7
2 7 2 7 1 2 3
4
1 5 2
2
1 7 2
2

<b>Output:</b>
3 
7
</pre>
### Explanation

- Initially, array A = {2,7,2,7,1,2,3}.
- After the first query array A = {2,7,2,7,2,2,3}.
- For the second query, B = {2, 2, 2, 2, 3, 7, 7}. The way to break it into minimum number of interesting subsegments is to partition it into {2,2,2,2,3} and {7,7}. The minimum frequency in the first subsegment is 1 (because 3 appears once), and in the second subsegment, there is only one frequency, which is 2. Therefore, the answer for the second query is 1 + 2 = 3.
- After third query array A ={2,7,2,7,2,2,2}.
- For the second query, B = {2, 2, 2, 2, 2, 7, 7}. The way to break it into minimum number of interesting subsegments is to partition it into {2,2,2,2,2} and {7,7}. The minimum frequency in the first subsegment is 5 (it is the only frequency), and in the second subsegment, there is only one frequency, which is 2. Therefore, the answer for the second query is 5 + 2 = 7.
