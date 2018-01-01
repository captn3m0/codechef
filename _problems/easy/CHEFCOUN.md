---
category_name: easy
problem_code: CHEFCOUN
problem_name: 'Counter Test For CHEFSUM'
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
    - 'CPP 6.3'
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
    - kotlin
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
    - PYPY
    - PYTH
    - 'PYTH 3.5'
    - RUBY
    - rust
    - SCALA
    - 'SCM chicken'
    - 'SCM guile'
    - 'SCM qobi'
    - ST
    - swift
    - TCL
    - TEXT
    - WSPC
max_timelimit: '1'
source_sizelimit: '50000'
problem_author: admin2
problem_tester: alex_2oo8
date_added: 1-09-2017
tags:
    - admin2
    - oct17
    - simple
editorial_url: 'https://discuss.codechef.com/problems/CHEFCOUN'
time:
    view_start_date: 1508146200
    submit_start_date: 1508146200
    visible_start_date: 1508146200
    end_date: 1735669800
    current: 1514815996
layout: problem
---
All submissions for this problem are available.### Read problems statements in [mandarin chinese](http://www.codechef.com/download/translated/OCT17/mandarin/CHEFCOUN.pdf) and [vietnamese](http://www.codechef.com/download/translated/OCT17/vietnamese/CHEFCOUN.pdf) as well.

Once Chef was writing test data for the problem [CHEFSUM](https://codechef.com/problems/CHEFSUM). For your convenience, the summary of this problem is provided as below.

You are given an array **a** of size **n**. Let **prefSum\[i\]** denote the sum of first **i** elements and **sufSum\[i\]** denote the sum of last **n - i + 1** elements of the array **a**. You have to find the least index **i** such that value of **prefSum\[i\] + sufSum\[i\]** is the minimum possible. The bounds/constraints on **n** could be as large as 105.

A newbie programmer was trying to solve this problem. He didn't take care of the fact that the values of **prefSum\[i\] + sufSum\[i\]** might not fit into _unsigned int_ data type. He wrote the following C++ code to solve the problem.

<pre>
<pre>int wrongSolver(std::vector <unsigned int> a) {
	int n = a.size();
	std::vector<unsigned int> prefSum(n), sufSum(n);
	prefSum[0] = a[0];
	for (int i = 1; i = 0; i--) {
		sufSum[i] = sufSum[i + 1] + a[i];
	}
	unsigned int mn = prefSum[0] + sufSum[0];
	int where = 1;
	for (int i = 1; i 
</pre>
</pre>
Assume that an _unsigned int_ is 4 bytes long, i.e. it stores values from  up to **232 - 1**. Addition of two unsigned int's **x** and **y** is done as **(x + y) modulo 232**. This way, you can see that whenever the value of an unsigned int exceeds the maximum possible value (**232 - 1**), it wraps around.

Chef as a problem setter knows that the above program should not get an AC. Hence, he wants to generate a counter case to fail this solution. He asks your help in generating such a counter case.

### Input

The first line of the input contains an integer **T** denoting the number of test cases.

The only line of each test case contains a single integer **n** denoting the number of integers in the array **a**.

### Output

For each test case, output **n** space separated integers in a line denoting the content of array **a** for which the above program will give a wrong answer.

### Constraints

- **1** ≤ **T** ≤ **10**

### Subtasks

- **Subtask #1 : (50 points)**  **99991** ≤ **n** ≤ **105**, **1** ≤ **ai** ≤ **2 \* 109**
- **Subtask #2 : (50 points)**  **99991** ≤ **n** ≤ **105**, **1** ≤ **ai** ≤ **105**
