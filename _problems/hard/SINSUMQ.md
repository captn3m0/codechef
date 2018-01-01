---
languages_supported:
    - NA
title: SINSUMQ
category: NA
old_version: true
problem_code: SINSUMQ
tags:
    - NA
layout: problem
---
###  All submissions for this problem are available. 

 You are given a sequence of integers **A0, A1, ..., AN-1**. Initially **Ai=i** for all **i**. You need to perform some strange queries with it. Each query has the form **"L R D"** where **0 <= L <= R < N** and **D** is an integer. If **D=0** then you need to find the sum of sines of the numbers **AL, AL+1, ..., AR** that is **sin AL + ... + sin AR**. Otherwise you need to add **D** to the numbers **AL, AL+1, ..., AR**.

### Input

 The first line contains two positive integers **N** and **Q**. Here, **N <= 109** is the length of the initial sequence and **Q <= 100000** is the number of queries you need to perform with it. The next **Q** lines describe queries, one per line. The **i**'th such line contains three integers **L**, **R** and **D**. Here **0 <= L <= R < N** and **-10000 <= D <= 10000**.

### Output

 The output consists of answers for all queries where **D=0**. For each such query you must produce a line with the corresponding sines sum. Answers within an absolute error of **10-6** will be accepted.

### Example

<pre>
<b>Input:</b>
5 6
0 4 0
0 2 1
3 4 2
0 4 0
2 3 -1
1 4 0

<b>Output:</b>
1.1350859
0.65354865
0.782376860


</pre>