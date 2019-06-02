---
category_name: medium
problem_code: ANKINTER
problem_name: 'Intervals and subarrays'
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
max_timelimit: '1'
source_sizelimit: '50000'
problem_author: code_master01
problem_tester: null
date_added: 1-06-2015
tags:
    - code_master01
    - snck151c
editorial_url: 'http://discuss.codechef.com/problems/ANKINTER'
time:
    view_start_date: 1433700900
    submit_start_date: 1433700900
    visible_start_date: 1433700900
    end_date: 1735669800
    current: 1493557462
layout: problem
---
All submissions for this problem are available.###  Read problems statements in [Mandarin Chinese ](http://www.codechef.com/download/translated/SNCK151C/mandarin/ANKINTER.pdf) , [Russian](http://www.codechef.com/download/translated/SNCK151C/russian/ANKINTER.pdf) and [Vietnamese](http://www.codechef.com/download/translated/SNCK151C/vietnamese/ANKINTER.pdf)

Chef Rahul likes those arrays that can be rearranged to form an **interval of values** - an increasing sequence where each element is greater than the previous by exactly one. For example:

- Rahul likes the array **\[3, 6, 5, 4\]** as it can be re-arranged to **\[3, 4, 5, 6\]**.
- Rahul doesn't like **\[1, 2, 4, 5\]** as no clear interval can be defined from these elements.

Given an array **a** of length **n**, your task is to write a program that counts the number of contiguous subarrays of **a** liked by Rahul that have length not less than **w**.

### Input:

The first line contains a single integer **T**, the number of test cases to follow. Each of the test cases contain exactly **2** lines.

The first line contains two space-separated integers **n** and **w**.

The next line contains exactly **n** space-separated integers, denoting the array **a**.

### Output:

You should output exactly **T** lines each containing answer for corresponding test case.

### Constraints:

- **1 ≤ T ≤ 105**
- **1 ≤ n ≤ 106**
- sum of **n** over all testcases does not exceed **106**
- **1 ≤ w ≤ n**
- **a** is a permutation of values **\[1, 2, 3 ... n\]**

### Example

**Input:**

<pre>2
3 1
2 3 1
6 3
6 1 5 3 4 2 
</pre>
**Output:**

<pre>
5
5  
</pre>
### Explanation

**Example case #1:**
The following **5** subarrays form an interval:

1. **\[2\]**
2. **\[3\]**
3. **\[1\]**
4. **\[2, 3\]**
5. **\[2, 3, 1\]**

**Example case #2:**
The following 5 subarrays form an interval:

1. **\[6, 1, 5, 3, 4, 2\]** forms **\[1..6\]**
2. **\[1, 5, 3, 4, 2\]** forms **\[1..5\]**
3. **\[5, 3, 4\]** forms **\[3..5\]**
4. **\[5, 3, 4, 2\]** forms **\[2..5\]**
5. **\[3, 4, 2\]** forms **\[2..4\]**

Note that **\[3, 4\]** also forms an interval but cannot be counted as its length is less than **w**(= 3).
