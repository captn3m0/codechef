---
category_name: hard
problem_code: ANUAAA
problem_name: 'Anup at Amrithapuri'
languages_supported:
    - ADA
    - ASM
    - BASH
    - BF
    - C
    - 'C99 strict'
    - CAML
    - CLOJ
    - CLPS
    - 'CPP 4.3.2'
    - 'CPP 4.9.2'
    - CPP14
    - CS2
    - D
    - ERL
    - FORT
    - FS
    - GO
    - HASK
    - ICK
    - ICON
    - JAVA
    - JS
    - 'LISP clisp'
    - 'LISP sbcl'
    - LUA
    - NEM
    - NICE
    - NODEJS
    - 'PAS fpc'
    - 'PAS gpc'
    - PERL
    - PERL6
    - PHP
    - PIKE
    - PRLG
    - PYTH
    - 'PYTH 3.4'
    - RUBY
    - SCALA
    - 'SCM guile'
    - 'SCM qobi'
    - ST
    - TCL
    - TEXT
    - WSPC
max_timelimit: '7'
source_sizelimit: '50000'
problem_author: anudeep2011
problem_tester: xiaodao
date_added: 6-01-2015
tags:
    - anudeep2011
    - cook54
    - medium
    - mo
editorial_url: 'http://discuss.codechef.com/problems/ANUAAA'
time:
    view_start_date: 1421609400
    submit_start_date: 1421609400
    visible_start_date: 1421609400
    end_date: 1735669800
    current: 1493556605
layout: problem
---
All submissions for this problem are available.###  Read problems statements in [Mandarin Chinese](http://www.codechef.com/download/translated/COOK54/mandarin/ANUAAA.pdf) and [Russian](http://www.codechef.com/download/translated/COOK54/russian/ANUAAA.pdf) as well.

### Problem description

Anup recently visited Amrithapuri for ACM ICPC regional contest. A student walked up to Anup, gave him a paper which had a long programming question on it and asked him to solve it by 18th of January, 2015. As Anup was busy with school kids, he posted the question as cook off question, asking wider community to solve that question. Following is the question:

<pre>
function f(A[0..N-1], L, R, P):
	if L > R:
		return f(A, R, L, P)
	ANSWER = 0
	C[] = A[L..R]
	for each subset S of C:
		G = GCD(S)
		for each prime factor PF of G:
			if PF == P:
				ANSWER = MAX(ANSWER, SIZE(S))
	return ANSWER

</pre>Clarifications:
Line 5 loops over all 2^(R-L+1) subsets.
GCD(S) returns the Greatest common divisor of all the elements in S.
SIZE(S) returns the number of elements in S.


Given: **N**, **M**, **A\[0..N-1\]**, **B\[0..M-1\]**
Required: 
![](http://www.codechef.com/download/COOK54/ANUAAA_1.gif)
Where **L = (B\[i\] + B\[j\]) % N
R = (B\[i\] - B\[j\] + N) % N**
As the answer can be large. Output it modulo 1000000007.

### Input

First line has two integer **N** and **M**. Second line has **N** space separated integers representing the array **A**. Third line has **M** space separated integers representing the array **B**.

### Output

Output single integer which is the required answer modulo 1000000007

### Constraints

- **1** ≤ **N** ≤ **100000**
- **1** ≤ **M** ≤ **500**
- **1** ≤ **A\[i\]** ≤ **100000**
- ≤ **B\[i\]** < **N**

### Example

<pre><b>Input:</b>
5 2
1 2 3 4 5
1 2

<b>Output:</b>
34

</pre>### Explanation
Here are the answers of few calls to function f()
f(A, 2, 0, 2) = 1
f(A, 2, 0, 5) = 0
f(A, 3, 4, 2) = 1
