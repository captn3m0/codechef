---
languages_supported:
    - NA
title: INSOMA2
category: NA
old_version: true
problem_code: INSOMA2
tags:
    - NA
layout: problem
---
###  All submissions for this problem are available. 

Magazines and newspapers often have letter matrices in which certain words need to be located. Umesh, a puzzle fanatic at IIT Roorkee, had an idea for a new kind of searching puzzle. In the letter matrix provided, words can be located along any set of diagonals, with repetition of past selected letters.

For example, in the letter matrix:

<pre>B X A X X<br></br>X A X X X<br></br>X B B X X<br></br>X A X A X<br></br>X X B X X<br></br><br></br><br></br>
</pre>
The string ABA can be found in 14 different ways – corresponding to the following locations:

<pre>A	        B	        A<br></br>(1,1)	(0,0)	(1,1)<br></br>(1,1)	(2,2)	(3,1)<br></br>(1,1)	(2,2)	(3,3)<br></br>(1,1)	(2,2)	(1,1)<br></br>(3,1)	(2,2)	(3,1)<br></br>(3,1)	(2,2)	(3,3)<br></br>(3,1)	(4,2)	(3,1)<br></br>(3,1)	(4,2)	(3,3)<br></br>(3,1)	(2,2)	(1,1)<br></br>(3,3)	(2,2)	(3,3)<br></br>(3,3)	(2,2)	(1,1)<br></br>(3,3)	(2,2)	(3,1)<br></br>(3,3)	(4,2)	(3,1)<br></br>(3,3)	(4,2)	(3,3)<br></br>
</pre>
 So, given a matrix of size NxN, you need to find out the total number of locations of a particular string. The input and output formats are as follows:

### Input

Line 1: N. 1 &lt;= N &lt;= 1000
 Line 2 to N+1: Elements of the NxN matrix in row major order (separated by a space)
 Line N+2: The string to search. Maximum length of this string will be N2.

### Output

Line 1: The number of ways in which the string can be found in the matrix.

### Example

<pre><b>Input:</b><br></br>5<br></br>B X A X X<br></br>X A X X X<br></br>X B B X X<br></br>X A X A X<br></br>X X B X X<br></br>ABA<br></br><br></br><b>Output:</b><br></br>14<br></br>
</pre>