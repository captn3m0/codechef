---
category_name: medium
problem_code: CHEFEXQ
problem_name: 'Chef And Easy Xor Queries'
languages_supported:
    - ADA
    - ASM
    - BASH
    - BF
    - C
    - CAML
    - CLOJ
    - CLPS
    - COB
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
max_timelimit: '3'
source_sizelimit: '50000'
problem_author: yb4singh
problem_tester: null
date_added: 24-11-2017
tags:
    - dec17
    - yb4singh
editorial_url: 'https://discuss.codechef.com/problems/CHEFEXQ'
time:
    view_start_date: 1512984600
    submit_start_date: 1512984600
    visible_start_date: 1512984600
    end_date: 1735669800
    current: 1514816321
layout: problem
---
All submissions for this problem are available.### Read problems statements in [Mandarin chinese](http://www.codechef.com/download/translated/DEC17/mandarin/CHEFEXQ.pdf), [Russian](http://www.codechef.com/download/translated/DEC17/russian/CHEFEXQ.pdf) and [Vietnamese](http://www.codechef.com/download/translated/DEC17/vietnamese/CHEFEXQ.pdf) as well.

Chef always likes to play with arrays. He came up with a new term **_"magical subarray"_**. A subarray is called magical if its starting index is **1** (1-based indexing). Now, Chef has an array of **N** elements and 2 types of queries:

- **type 1:** Given two numbers **i** and **x**, the value at index **i** should be updated to **x**.
- **type 2:** Given two numbers **i** and **k**, your program should output the total number of _magical_ subarrays with the last index ≤ **i** in which the xor of all elements is equal to **k**.

### Input

- The first line of the input contains two integers **N** and **Q** denoting the number of elements in the array and the number of queries respectively.
- The second line contains **N** space-separated integers **A1, A2 ... AN** denoting the initial values of the array.
- Each of the following **Q** lines describes an operation. If the first integer is **1**, it means that the operation is of **type 1** and it will be followed by two integers **i** and **x**. If the first integer is **2**, it means that the operations is of **type 2** and it will be followed by two integers **i** and **k**.

### Output

For each operation of type 2, print the number of magical subarrays on a separate line.

### Constraints

- 1 ≤ **N, Q** ≤ 100,000
- 1 ≤ **A\[i\]** ≤ 1,000,000
- 1 ≤ **i** ≤ **N**
- 1 ≤ **x, k** ≤ 1,000,000

### Subtasks

**Subtask #1 (20 points):** 1 ≤ **N, Q** ≤ 1,000

**Subtask #2 (30 points):** 1 ≤ **N, Q** ≤ 10,000

**Subtask #3 (50 points):** original constraints

### Example

<pre><b>Input:</b>

5 3
1 1 1 1 1
2 5 1
1 3 2
2 5 1

<b>Output:</b>

3
1

</pre>