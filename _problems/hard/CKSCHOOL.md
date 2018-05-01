---
languages_supported:
    - NA
title: CKSCHOOL
category: NA
old_version: true
problem_code: CKSCHOOL
tags:
    - NA
layout: problem
---
###  All submissions for this problem are available. 

Did you know that the famous chef Ramsay gets paid around 23 million US dollars a year ? Yes, you heard it right, thats over 100 crore Indian Rupees a year. Having read this in News paper, Mr.Nagulu from Hyderabad decides to get his two sons join a Culinary school. There are **N** schools in total, with varying distances **D** from his home and with varying fee **F** they collect. As the number of schools is huge, he would like to prepare a list of preferred schools before he starts his school hunt.

Mr.Nagulu prefers school X over school Y if X is at a distance less than or equal to Y and X collects fees less than or equal to Y. Also, a school cannot be preferred over itself Consider a set A of schools: a school X is termed 'Special A' if there is no school in A that is preferred over X. 'Max Special A' is the maximal subset of A such that every school in 'Max Special A' is 'Special A'. He wants to consider only some schools, based on how much fee he can pay and at most how far he can send his sons. But, he has a lot of such queries for you, each of them specifying 3 conditions, **maxDistance** ( he can send his sons not farther than maxDistance ), **maxFee** ( he can pay at most maxFee ) and **minFee** ( he wants to pay at least minFee ; you know... Indian father, prestige issues ! ;-) ).

In each of his queries, he wants you to consider only a set S of schools that satisfy the given 3 conditions and all you need to do is just count the maximum number of schools that can be in a 'Max Special S'.

### Notes

If school X has distanceX & feeX and school Y has distanceY & feeY, then Mr.Nagulu prefers school X over school Y if and only if ( distanceX <= distanceY AND feeX <= feeY ). You can assume that no two schools have both distance and fee equal. Also, a school can not be preferred over itself.

### Input

First line contains an integer N ( total number of schools 1 <= **N** <= 100,000 ). Each of the next N lines contains D F ( D is the distance and F is the fee of each school, 1 <= **D**, **F** <= 1,000,000,000 and no two schools have both distance and fee equal. ) Next line has an integer Q ( number of queries 1 <= Q <= 100,000 ). Each of the next Q lines describe a query, having maxDistance minFee maxFee ( as described in the problem, 1 <= **maxDistance**, **minFee**, **maxFee** <= 1,000,000,000 and minFee <= maxFee ).

### Output

For each query, print the answer in a new line.

### Example

<pre>
<b>Input:</b>
5
1 1
2 2
4 3
3 4
1 5
5
5 3 4
5 4 6
5 1 4
3 1 4
4 2 6

<b>Output:</b>
2
2
1
1
2
</pre>
**Explanation :**  Listing the schools in 'Max Special S' for each of the queries in the given sample case. Schools are listed in (distance, fee) pairs.
5 3 4 --> (4,3) (3,4) ; 
5 4 6 --> (3,4) (1,5) ; 
5 1 4 --> (1,1) ; This school is preferred over all other schools ;
3 1 4 --> (1,1) ; 
4 2 6 --> (2,2) (1,5) ; (2,2) is preferred over (3,4) and (4,3)


_**Warning :**  Large input / output. You may have to use efficient input / output methods if you are using languages with heavy input / output overload. Eg: Prefer using scanf/printf to cin/cout for C/C++_

_**Note :** There are multiple test sets, and the judge shows the sum of the time taken over all test sets of your submission, if Accepted. Time limit on each test set is 3 sec_
