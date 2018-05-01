---
category_name: easy
problem_code: STROPR
problem_name: 'Chef and Strange Operations'
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
max_timelimit: '2'
source_sizelimit: '50000'
problem_author: antoniuk1
problem_tester: iscsi
date_added: 23-01-2015
tags:
    - antoniuk1
    - combinatorics
    - easy
    - feb16
    - maths
editorial_url: 'http://discuss.codechef.com/problems/STROPR'
time:
    view_start_date: 1455528600
    submit_start_date: 1455528600
    visible_start_date: 1455528600
    end_date: 1735669800
    current: 1493558190
layout: problem
---
All submissions for this problem are available.###  Read problems statements in [Mandarin Chinese](http://www.codechef.com/download/translated/FEB16/mandarin/STROPR.pdf), [Russian](http://www.codechef.com/download/translated/FEB16/russian/STROPR.pdf) and [Vietnamese](http://www.codechef.com/download/translated/FEB16/vietnamese/STROPR.pdf) as well.

Chef has an array **A** consisting of **N** integers (1-based indexing). He asks you to perform the following operation **M** times:

<pre>
<pre>	<b>for</b> i = 2 to <b>N</b>:
		<b>A</b><sub>i</sub> = <b>A</b><sub>i</sub> + <b>A</b><sub>i-1</sub>
</pre>

</pre>
Your task is to find the **xth** element of the array (i.e., **Ax**) after performing the above operation **M** times. As the answer could be large, please output it modulo 109 + 7.

### Input

- The first line of input contains an integer **T** denoting the number of test cases.
- The first line of each test case contains three space-separated integers — **N**, **x**, and **M** — denoting the size of the array, index of the element you need to find, and the amount of times you need to repeat operation before finding the element, respectively. The second line contains **N** space-separated integers **A1**, **A2**, …, **AN**.

### Output

For each test case, output a single line containing one integer: **Ax** modulo 109 + 7.

### Constraints

- **1** ≤ **T** ≤ **10**
- **1** ≤ **x** ≤ **N** ≤ **105**
- **1** ≤ **M** ≤ **1018**
- **1** ≤ **Ai**  ≤ **1018**

### Subtasks

**Subtask 1 (8 points):**- **1 ≤ x ≤ min{2, N}**

 **Subtask 2 (24 points):**- **1 ≤ N \* M ≤ 106**

**Subtask 3 (68 points):**  No additional constraints ### Example

<pre><b>Input:</b>
2
3 2 3
1 2 3
3 3 3 
1 2 3

<b>Output:</b>
5
15
</pre>### Explanation

Values in the array **A**:

- Before the operations: **\[1, 2, 3\]**
- After the first operation: **\[1, 3, 6\]**
- After the second operation: **\[1, 4, 10\]**
- After the third operation: **\[1, 5, 15\]**

**Since input file can be fairly large (about 8 MB), it's recommended to use fast I/O (for example, in C++, use scanf/printf instead of cin/cout).**
