---
category_name: easy
problem_code: DIVMAC
problem_name: 'Dividing Machine'
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
    - PYPY
    - PYTH
    - 'PYTH 3.4'
    - RUBY
    - SCALA
    - 'SCM chicken'
    - 'SCM guile'
    - 'SCM qobi'
    - ST
    - TCL
    - TEXT
    - WSPC
max_timelimit: '1 - 3'
source_sizelimit: '50000'
problem_author: kaizer
problem_tester: dpraveen
date_added: 5-07-2015
tags:
    - kaizer
    - medium
    - segment
    - sept16
editorial_url: 'http://discuss.codechef.com/problems/DIVMAC'
time:
    view_start_date: 1473931800
    submit_start_date: 1473931800
    visible_start_date: 1473931800
    end_date: 1735669800
    current: 1493558139
layout: problem
---
All submissions for this problem are available.###  Read problems statements in [Mandarin Chinese](http://www.codechef.com/download/translated/SEPT16/mandarin/DIVMAC.pdf), [Russian](http://www.codechef.com/download/translated/SEPT16/russian/DIVMAC.pdf) and [Vietnamese](http://www.codechef.com/download/translated/SEPT16/vietnamese/DIVMAC.pdf) as well.

Chef has created a _special dividing machine_ that supports the below given operations on an array of positive integers.

There are two operations that Chef implemented on the machine.

**Type 0 Operation**```

<pre>
<b>Update(L,R):</b>
	for i = L to R:
		a[i] = a[i] / LeastPrimeDivisor(a[i])
</pre>

<pre>
**Type 1 Operation**```

<pre>
<b>Get(L,R):</b>
	result = 1
	for i = L to R:
		result = max(result, LeastPrimeDivisor(a[i]))
	return result;
</pre>

</pre>
The function **LeastPrimeDivisor(x)** finds the smallest prime divisor of a number. If the number does not have any prime divisors, then it returns 1.

Chef has provided you an array of size **N**, on which you have to apply **M** operations using the special machine. Each operation will be one of the above given two types. Your task is to implement the _special dividing machine_ operations designed by Chef. Chef finds this task quite easy using his machine, do you too?

### Input

The first line of the input contains an integer **T** denoting the number of test cases. The description of **T** test cases follows.

The first line of each test case contains two space-separated integers **N**, **M**, denoting the size of array **A** and the number of queries correspondingly. The second line of each test case contains **N** space-separated integers **A1**, **A2**, ..., **AN** denoting the initial array for dividing machine.

Each of following **M** lines contain three space-separated integers  **type**, **L**, **R** - the type of operation (0 - **Update** operation, **1** - **Get** operation), and the arguments of function, respectively

### Output

For each test case, output answer of each query of type 1 (**Get** query) separated by space. Each test case from the same file should start from the new line.

### Constraints

- **1** ≤ **T** ≤ **100**
- **1** ≤ **Ai** ≤ **106**
- **1** ≤ **L** ≤ **R** ≤ **N**
- 0 ≤ **type** ≤ **1**
- Sum of **M** over all test cases in a single test file does not exceed **106**

### Subtasks

**Subtask #1: (10 points)**

- **1** ≤ **N**, **M** ≤ **103**

**Subtask #2: (25 points)**

- **1** ≤ **N**, **M** ≤ **105**
- **Ai** is a prime number.

**Subtask #3: (65 points)**

- **1** ≤ **N**, **M** ≤ **105**

### Example

<pre><b>Input:</b><tt>
2
6 7
2 5 8 10 3 44
1 2 6
0 2 3
1 2 6
0 4 6
1 1 6
0 1 6
1 4 6
2 2
1 3
0 2 2
1 1 2
</tt>
<b>Output:</b><tt>
5 3 5 11
1
</tt>
</pre>### Explanation

**Example case 1.**The states of array A after each **Update**-operation:

<pre>
<b>A:</b> = [2 1 4 10 3 44]
<b>A:</b> = [2 1 4 5 1 22]
<b>A:</b> = [1 1 2 1 1 11]
</pre>