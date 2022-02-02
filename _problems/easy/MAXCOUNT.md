---
languages_supported:
    - NA
title: MAXCOUNT
category: NA
old_version: true
problem_code: MAXCOUNT
tags:
    - NA
layout: problem
---
###  All submissions for this problem are available. 

Given an array A of length N, your task is to find the element which repeats in A maximum number of times as well as the corresponding count. In case of ties, choose the smaller element first.

### Input

First line of input contains an integer T, denoting the number of test cases. Then follows description of T cases. Each case begins with a single integer N, the length of A. Then follow N space separated integers in next line. Assume that 1 &lt;= T &lt;= 100, 1 &lt;= N &lt;= 100 and for all i in \[1..N\] : 1 &lt;= A\[i\] &lt;= 10000

### Output

For each test case, output two space separated integers V &amp; C. V is the value which occurs maximum number of times and C is its count.

### Example

<pre>
<b>Input:</b>
2
5
1 2 3 2 5
6
1 2 2 1 1 2

<b>Output:</b>
2 2
1 3

<b>Description:</b>
In first case 2 occurs twice whereas all other elements occur only once. 
In second case, both 1 and 2 occur 3 times but 1 is smaller than 2.
</pre>