---
languages_supported:
    - NA
title: WEIGHT
category: NA
old_version: true
problem_code: WEIGHT
tags:
    - NA
layout: problem
---
###  All submissions for this problem are available. 

### Statement

Let us denote an **n** digit decimal number by a1a2a3...an with the condition that each ai should be between 0 and 9 inclusive except a1 which should be between 1 and 9 inclusive. The weight of such a number is defined as the sum of absolute difference between adjacent numbers. Precisely the weight can be defined as,
<pre>

	weight = 0
	For i = 1 to n-1
  		weight = weight + ABS(a<sub>i+1</sub> - a<sub>i</sub>)


</pre>
Here ABS is the absolute value of the argument.
Given *n* and a weight *w*, find all the *n* digit numbers having a weight *w*. Since the answer could be very large, print the answer modulo 1000007.

### Input Format:


The first line contains one integer **t**, the number of testcases. (1 &lt;= **t** &lt;= 150) 
This will be followed by **t** lines each consisting of numbers **n** and **w**.

### Constraints:


- 2 &lt;= **n** &lt;= 20
- 0 &lt;= **w** &lt;= 200


### Output Format:


For each test case print the answer modulo 1000007 in a separate line.

### Sample Input:


<pre>
2
10 0
2 1
</pre>
### Sample Output:


<pre>
9
17
</pre>