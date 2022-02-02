---
languages_supported:
    - NA
title: STREGGS
category: NA
old_version: true
problem_code: STREGGS
tags:
    - NA
layout: problem
---
###  All submissions for this problem are available. 

Chef Ciel has **N** strange eggs. The **i**-th egg is broken by tapping exactly **Ai** times. Ciel needs to break **K** eggs as soon as possible for cooking a rice omelet. However she has been put in an uncomfortable situation. Someone shuffled the eggs! Ciel knows the values **Ai**, however she doesn't know which egg is which. She'd like to minimize the worst-case number of taps. What is the minimal number?

### Input

The first line contains an integer **T**, the number of test cases. Then **T** test cases follow. The first line for each test case has 2 integers **N** and **K**. Then next line has **N** integers **A**1, **A**2, ..., **AN**.

### Output

For each test case, print the minimal number of taps for the worst-case.

### Constraints

1 &lt;= **T** &lt;= 10
 1 &lt;= **K** &lt;= **N** &lt;= 500
 1 &lt;= **Ai** &lt;= 1000000 (106)

### Sample Input

<pre>3
2 1
5 8
2 1
5 58
3 2
1 2 3
</pre>
### Sample Output

<pre>8
10
5
</pre>
### Output details

In the first case, if a egg isn't broken after 5 taps, she should continue to tap the same egg.

In the second case, if a egg isn't broken after 5 taps, she should tap another egg 5 times.
