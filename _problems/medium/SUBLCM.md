---
category_name: medium
problem_code: SUBLCM
problem_name: 'Subarray LCM'
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
max_timelimit: '2.5'
source_sizelimit: '50000'
problem_author: darkshadows
problem_tester: null
date_added: 23-06-2014
tags:
    - cook50
    - darkshadows
    - dynamic
    - lcm
    - math
    - medium
editorial_url: 'http://discuss.codechef.com/problems/SUBLCM'
time:
    view_start_date: 1411324200
    submit_start_date: 1411324200
    visible_start_date: 1411324200
    end_date: 1735669800
    current: 1493557976
layout: problem
---
All submissions for this problem are available.###  Read problems statements in [English](http://www.codechef.com/download/translated/COOK50/english/SUBLCM.pdf), [Mandarin Chinese](http://www.codechef.com/download/translated/COOK50/mandarin/SUBLCM.pdf) and [Russian](http://www.codechef.com/download/translated/COOK50/russian/SUBLCM.pdf) as well.

Given an array **A1,A2...AN**, you have to print the size of the largest contiguous subarray such that
[LCM](http://en.wikipedia.org/wiki/Least_common_multiple) of all integers in that subarray is equal to the product of all integers in that subarray.

Formally,
 For a subarray **Ai,Ai+1...Aj** where **1 ≤ i < j ≤ N** to be valid: **LCM(Ai,Ai+1...Aj)** should be equal to **Ai\*Ai+1\*...\*Aj**. You have to print the size of the largest valid subarray./>/>

If no subarray satisfies output **-1**.

**Note:**A single element is not considered a subarray according to definition in this problem.

### Input

First line contains **T**, the number of testcases. Each testcase consists of **N** in one line followed by **N** integers in next line.

### Output

For each testcase, print the required answer in one line.

### Constraints

- **1** ≤ **T** ≤ **50**
- **2** ≤ **N** ≤ **105**
- **1** ≤ **Ai** ≤ **106**

### Example

<pre><b>Input:</b>
3
2
7 2
4
2 2 3 4
3
2 2 4

<b>Output:</b>
2
2
-1

</pre>### Explanation
**Example case 1.**LCM(2,7)=2\*7. Therefore, subarray A1 to A2 satisfies.

**Example case 2.**The subarrays A2 to A3 and A3 to A4 are the maximum size possible.

**Example case 3.**No subarray will satisfy.
/>/>/>

**Warning: Use fast input/output. Large input files. Solutions may not pass in slower languages.

Update: Time limit for python=10s/>**
