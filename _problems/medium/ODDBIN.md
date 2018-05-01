---
languages_supported:
    - NA
title: ODDBIN
category: NA
old_version: true
problem_code: ODDBIN
tags:
    - NA
layout: problem
---
###  All submissions for this problem are available. 

If P(x) is a polynomial in x with integer coefficients, let W(P(x)) = number of odd coefficients of P(x).

Given a1, a2, ... , am, find W( (1+x)a1 + (1+x)a2 + ... + (1+x)am ).

### Input

First line contains TC, the number of test cases.
Each test case consists of a single line in the format: 
m a1 a2 ... am

### **Limits**

1 <= m <= 15
0 <= ai < 260
1 <= TC <= 1000

### Output

Output one line per test case, the value W( (1+x)a1 + (1+x)a2 + ... + (1+x)am ).

### Example

<pre><strong>Input:</strong> <br></br>4<br></br>1 1<br></br>1 3<br></br>2 1 3<br></br>3 1 2 3
<br></br><strong>Output:</strong> <br></br>2<br></br>4<br></br>2<br></br>2<br></br><br></br>
</pre>### Explanation

`(1+x) + (1+x)<sup>3</sup> = 2 + 4x + 3x<sup>2</sup> + x<sup>3</sup>. Hence the output for "2 1 3" is 2. (2 odd coefficients)<br></br>(1+x) + (1+x)<sup>2</sup> + (1+x)<sup>3</sup> = 3 + 6x + 4x<sup>2</sup> + x<sup>3</sup>. Hence the output for "3 1 2 3" is 2.<br></br>`
