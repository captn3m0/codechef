---
category_name: hard
problem_code: SEAPERMS
problem_name: 'Sereja and Permutations'
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
max_timelimit: '2 - 8'
source_sizelimit: '50000'
problem_author: sereja
problem_tester: iscsi
date_added: 22-11-2015
tags:
    - feb16
    - medium
    - sereja
editorial_url: 'http://discuss.codechef.com/problems/SEAPERMS'
time:
    view_start_date: 1455528600
    submit_start_date: 1455528600
    visible_start_date: 1455528600
    end_date: 1735669800
    current: 1493556839
layout: problem
---
All submissions for this problem are available.###  Read problems statements in [Mandarin Chinese](http://www.codechef.com/download/translated/FEB16/mandarin/SEAPERMS.pdf), [Russian](http://www.codechef.com/download/translated/FEB16/russian/SEAPERMS.pdf) and [Vietnamese](http://www.codechef.com/download/translated/FEB16/vietnamese/SEAPERMS.pdf) as well.

Sereja has an array **A** of **N** integers: **A\[1\], A\[2\], …, A\[N\]**. Sereja also has an integer **D**.

Sereja calls a permutation **P\[1\], P\[2\], …, P\[N\]** as ***good*** if the following conditions hold.
**A\[P\[1\]\] + D > A\[P\[2\]\]**,
**A\[P\[2\]\] + D > A\[P\[3\]\]**,
⋮
**A\[P\[N-1\]\] + D > A\[P\[N\]\]**.

Sereja wants to sequentially perform **M** single-element replacement operations on the array. Each of these operations consists of choosing an index **p** of the array, and replacing **A\[p\]** with a new value **v**. Your task is to keep track of the number of ***good*** permutations **P\[1\], P\[2\], …, P\[N\]** after each operation.

### Input

The first line of input contains the integers **N** and **D** described above. The next line contains **N** integers **A\[1\], A\[2\], …, A\[N\]**. The line after this contains a single integer, **M**. Each of the next **M** lines contain two numbers **p** and **v**, implying that the new value of **A\[p\]** is **v**. ### Output

Output **M** lines. The **i**th line should contain the number of good permutations modulo **109 + 7** after we perform the **i**th replacement operation. ### Constraints

- **1** ≤ **N, M** ≤ **105**
- **1** ≤ **A\[i\], v** ≤ **109**
- **1** ≤ **D**  ≤ **1000**
- **1** ≤ **p** ≤ **N**

### Constraints

- **Subtask #1 :****N, M** ≤ **10** (10 points)
- **Subtask #2 :****N, M** ≤ **20** (10 points)
- **Subtask #3:** **N, M** ≤ **1000** (20 points)
- **Subtask #4:**  original constrains (60 points)

### Example

<pre><b>Input:</b>
3 3
1 2 3
2
1 2
3 5

<b>Output:</b>
6
2

</pre>
### Explanation

**Example case 1.** After the first replacement operation, all permutations will be good. However, after the second operation, **P\[1\]** must be **3**.
