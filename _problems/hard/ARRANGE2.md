---
languages_supported:
    - NA
title: ARRANGE2
category: NA
old_version: true
problem_code: ARRANGE2
tags:
    - NA
layout: problem
---
###  All submissions for this problem are available. 

A number X is called Permut number if X and 2X ( both without leading zeroes ) have same number of digits and are permutations of each other. Given A and B, find the number of Permut numbers >= A and <= B.

Note : X is called permutation of Y if every digit ( 0 - 9 ) occurs same number of times in both the numbers ( maybe at different positions ).

Input :

The first line contains the number of test cases T. T lines follow, containing two integers A and B.

Output :

Output T lines, one for each test case containing the desired answer for the corresponding test case.

<pre>
Sample Input :
2
1 100
499875921 499875921

</pre><pre>
Sample Output :
0
1

</pre><pre>
Constraints :
1 <= T <= 10000
1 <= A <= B <= 10000000000 (10^10)
</pre>