---
category_name: easy
problem_code: CHSGMNTS
problem_name: 'Chef and Segments'
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
problem_author: antoniuk1
problem_tester: mugurelionut
date_added: 18-07-2015
tags:
    - antoniuk1
    - dynamic
    - july16
    - medium
editorial_url: 'http://discuss.codechef.com/problems/CHSGMNTS'
time:
    view_start_date: 1468402200
    submit_start_date: 1468402200
    visible_start_date: 1468402200
    end_date: 1735669800
    current: 1493558129
layout: problem
---
All submissions for this problem are available.###  Read problems statements in [Mandarin Chinese](http://www.codechef.com/download/translated/JULY16/mandarin/CHSGMNTS.pdf), [Russian](http://www.codechef.com/download/translated/JULY16/russian/CHSGMNTS.pdf) and [Vietnamese](http://www.codechef.com/download/translated/JULY16/vietnamese/CHSGMNTS.pdf) as well.

Chef has an array **A** consisting of **N** elements. He wants to find number of pairs of non-intersecting segments \[**a**, **b**\] and \[**c**, **d**\] (1 ≤ **a** ≤ **b** &lt; **c** ≤ **d** ≤ **N**) such there is no number that occurs in the subarray {**Aa**, **Aa+1**, ... , **Ab**} and {**Ac**, **Ac+1**, ... , **Ad**} simultaneously.

Help Chef to find this number.

### Input

- The first line of the input contains an integer **T** denoting the number of test cases. The description of **T** test cases follows.
- The first line of each test case contains a single integer **N** denoting the number of elements in the array.
- The second line contains **N** space-separated integers **A1**, **A2**, ..., **AN**.

### Output

- For each test case, output a single line containing one integer - number of pairs of non-intersecting segments.

### Constraints

- **1** ≤ **T** ≤ **5**
- **1** ≤ **N** ≤ **1000**
- **1** ≤ **Ai** ≤ **109**

### Subtasks

**Subtask 1 (7 points)**

- **1** ≤ **N** ≤ **20**

**Subtask 2 (34 points)**

- **1** ≤ **N** ≤ **300**

**Subtask 3 (59 points)**

- Original constraints

### Example

<pre><b>Input:</b>
2
3
1 2 3
4
1 2 1 2

<b>Output:</b>
5
4
</pre>
### Explanation

**Example case 1.**
All possible variants are correct: {\[1, 1\], \[2, 2\]}, {\[1, 1\], \[2, 3\]}, {\[1, 2\], \[3, 3\]}, {\[2, 2\], \[3, 3\]}, {\[1,1\], \[3, 3\]}.

**Example case 2.**
Correct segments: {\[1, 1\], \[2, 2\]}, {\[1, 1\], \[4, 4\]}, {\[2, 2\], \[3, 3\]}, {\[3, 3\], \[4, 4\]}.
