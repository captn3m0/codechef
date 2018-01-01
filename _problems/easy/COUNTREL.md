---
languages_supported:
    - NA
title: COUNTREL
category: NA
old_version: true
problem_code: COUNTREL
tags:
    - NA
layout: problem
---
###  All submissions for this problem are available. 

Let A be a set of the first **N** positive integers :A={1,2,3,4.........N} 
Let B be the set containing all the subsets of A.

Professor Eric is a mathematician who defined two kind of relations R1 and R2 on set B. 
The relations are defined as follows: 

R1={ (x,y) : x and y belong to B **and** x is not a subset of y **and** y is not a subset of x **and** the intersection of x and y is equal to empty set } 

R2={ (x,y) : x and y belong to B **and** x is not a subset of y **and** y is not a subset of x **and** the intersection of x and y is not equal to empty set }

Now given the number N,Professor Eric wants to know how many relations of kind R1 and R2 exists.Help him. 

 **NOTE :** (x,y) is the same as (y,x) ,i.e the pairs are **unordered**.

### Input format:

The first line contains the number of test cases T.Each of the test case is denoted by a single integer N.

### Output format:

Output T lines, one for each test case,containing two integers denoting the number of relations of kind R1 and R2 respectively, modulo 100000007.

### Example

<pre>
<b>Sample Input:</b>
3
1
2
3
<b>Sample Output:</b>
0 0
1 0
6 3
<b>Constraints:</b>
1 <= T <= 1000
1 <= N <= 10^18
<b>Explanation:</b>
Let A={1,2}
Then B={Phi,{1},{2},{1,2}}
Phi=Empty Set
So R1=Either {({1},{2})} or {({2},{1})}
and R2=No relation exists
So,there is 1 relation of kind R1 and 0 relation of kind R2.

</pre>