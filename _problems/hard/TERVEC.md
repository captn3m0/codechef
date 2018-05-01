---
category_name: hard
problem_code: TERVEC
problem_name: 'Terrible vectors'
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
problem_author: pavel1996
problem_tester: kevinsogo
date_added: 10-07-2015
tags:
    - hadamard
    - hard
    - matrices
    - paley
    - pavel1996
    - sept15
    - sylvesters
    - williamson
editorial_url: 'http://discuss.codechef.com/problems/TERVEC'
time:
    view_start_date: 1442223000
    submit_start_date: 1442223000
    visible_start_date: 1442223000
    end_date: 1735669800
    current: 1493556868
layout: problem
---
All submissions for this problem are available.###  Read problems statements in [Mandarin](http://www.codechef.com/download/translated/SEPT15/mandarin/TERVEC.pdf) and [Russian](http://www.codechef.com/download/translated/SEPT15/russian/TERVEC.pdf). Translations in Vietnamese to be uploaded soon.

You are given an integer **N**. Consider a vector **a** of length **N2** accessible via 0-based indexing.

Let's call the following transformation a **TVT-transformation** (Terrible Vector transformation).

![](https://s3.amazonaws.com/codechef_shared/download/SEPT15/TERVEC1.jpg)

We will call a vector **g** a _good_ vector if 
![](https://s3.amazonaws.com/codechef_shared/download/SEPT15/TERVEC2.jpg)

For some reason, you want to find a vector **a** of length **N2** such that it's elements are either **1** or **-1** and after applying **TVT-transformation** (i.e. **b**), it results in a good vector.

### Input

The first line of input contains an integer **T** denoting the number of test cases. Each test case is described by one line containing one integer **N**.

### Output

For each test case output one line with the word **NO** if it's not possible to find such vector. Otherwise output **YES** on the first line and **N2** space-separated integers (each either **-1** or **1**) on the second - the answer for this test case.

If there are multiple possible answers, output any one of them.

### Constraints

- **1** ≤ **T** ≤ **100**
- **1** ≤ **N** ≤ **100**

### Example

<pre><b>Input:</b>
2
1
2

<b>Output:</b>
YES
1
YES
1 1 1 -1

</pre>### Subtasks

**Subtask 1:(10 points)**

- **1** ≤ **N** ≤ **8**

**Subtask 2: (20 points)**

- **1** ≤ **N** ≤  **30**

**Subtask 3: (30 points)**

- **1** ≤ **N** ≤ **60**

**Subtask 4: (40 points)**

- **1** ≤ **N** ≤ **100**

### Explanation

Sample example 2: After **TVT-transformation**, the vector will transform to **(4, 0, 0, 4)** which is a good vector for **N = 2**
