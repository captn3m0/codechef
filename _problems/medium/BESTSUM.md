---
languages_supported:
    - NA
title: BESTSUM
category: NA
old_version: true
problem_code: BESTSUM
tags:
    - NA
layout: problem
---
###  All submissions for this problem are available. 

 Given a sequence of positive integers *a1*, *a2*, , *aN*, and 1 *i* *j* *N*, the partial sum from *i* to *j* is *ai* + *ai+1* + + *aj*.

 In this problem, you will be given such a sequence and two integers *P* and *K*. Your task is to find the smallest partial sum modulo *P* that is at least *K*.

For example, consider the following sequence of integers:

<pre>
    12     13     15     11     16     26     11

</pre>
 Here *N* = 7. Suppose *K* = 2 and *P* = 17. Then, the answer is 2 because 11+16+26 = 53 and 53 mod 17 is 2. On the other hand, if *K* = 0 the answer is 0 since 15 + 11 + 16 + 26 = 68 and 68 mod 17 is 0.

Input format

The first line contains three integers *N*, *K* and *P*. This is followed by *N* lines each containing a single integer.

You may assume 1 *N* 100000.

Output format

A single integer indicating the minimum possible segment sum modulo *P* that is at least *K*.

Example:

Sample Input

<pre>
7 2 17
12
13
15
11
16
26
11
</pre>
Sample Output

<pre>
2
</pre>