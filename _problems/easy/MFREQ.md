---
category_name: easy
problem_code: MFREQ
problem_name: 'Most Frequent Element'
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
problem_author: kevind
problem_tester: null
date_added: 7-02-2017
tags:
    - kevind
time:
    view_start_date: 1487496600
    submit_start_date: 1487496600
    visible_start_date: 1487496600
    end_date: 1735669800
    current: 1493558214
layout: problem
---
All submissions for this problem are available.###  Read problems statements in [Mandarin Chinese](http://www.codechef.com/download/translated/FEB17/mandarin/MAKETRI.pdf), [Russian](http://www.codechef.com/download/translated/FEB17/russian/MAKETRI.pdf) and [Vietnamese](http://www.codechef.com/download/translated/FEB17/vietnamese/MAKETRI.pdf) as well.


Given an array of size **n**, you have to answer queries of the form : **L R k** . For each query, you have to find an element which occurs **consecutively** in the subarray **\[L,R\]** more than or equal to **k** times. **k** will always be greater than **floor((R-L+1)/2)**. If no such element exists, print -1.

### Input

First line of the input contains 2 space separated **N** and **M**, denoting the size of the array and the number of queries.

The next line contains **N** space separated integers, where the **i**-th integer **Ai** denotes the **ith** element of the array.

Each of the next M lines contains 3 integers space separated integers **L, R and k**.

### Output

Output M lines where each line contains the answer to the **i**-th query.

### Constraints

- **1** ≤ **N, M** **≤ 105**
- **1** ≤ **L** ≤ **R** ≤ **N**
- **floor((R-L+1)/2)** k ≤ **R-L+1**
- ≤ **Ai** ≤ **109**

### Subtasks

**Subtask #1 (10 points):**

- **1** ≤ **Ai** ≤ **3**
- **1** ≤ **M** ≤ **10**
 
**Subtask #2 (30 points):**

- **1** ≤ **N** ≤ **1000**

**Subtask #3 (60 points):**

- **No other constraints**

### Example

<pre><b>Input:</b>
<tt>5 1
1 2 2 2 2
1 5 3
</tt>

<b>Output:</b>
<tt>2</tt>

</pre>### Explanation
The element 2 occurs more than 3 times in the range \[1,5\].
