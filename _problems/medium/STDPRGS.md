---
category_name: medium
problem_code: STDPRGS
problem_name: 'Estimating progress'
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
max_timelimit: '2 - 5'
source_sizelimit: '50000'
problem_author: pavel1996
problem_tester: xcwgf666
date_added: 28-09-2015
tags:
    - ltime29
    - medium
    - mo
    - pavel1996
editorial_url: 'http://discuss.codechef.com/problems/STDPRGS'
time:
    view_start_date: 1445761800
    submit_start_date: 1445761800
    visible_start_date: 1445761800
    end_date: 1735669800
    current: 1493557933
layout: problem
---
All submissions for this problem are available.###  Read problems statements in [Mandarin Chinese](http://www.codechef.com/download/translated/LTIME29/mandarin/STDPRGS.pdf) and [Russian](http://www.codechef.com/download/translated/LTIME29/russian/STDPRGS.pdf)

Leha is a usual student at 'The Usual University for Usual Students'. Sometimes he studies hard; at other times he plays truant and gets busy with other things besides academics. He has already studied at the university for **N** months. For the **i**th month (1 ≤ **i** ≤ **N**), he has received some non-negative integer grade **A\[i\]**.

Now he wants to analyse his progress for some periods of his university education. An arbitrary period, defined by two positive integers **L** and **R**, begins at Leha's **L**th month at the university and ends at the **R**th. The analysis is performed via the following steps.
1\. Write down all the grades for each month from **L** to **R** and sort them. Let's call the sorted list **S**.
2\. Calculate the sum of squared differences of consecutive elements in **S**, that is, **(S\[2\] - S\[1\])2 + (S\[3\] - S\[2\])2 + ... + (S\[R-L+1\] - S\[R-L\])2**.

### Input

The first line contains one integer **N** — the number of months Leha has already studied at the university.

The second line contains **N** integers — list **A** of Leha's grades.

The third line contains one integer **M** — the number of periods Leha is interested in analyzing.

Each of the following **M** lines contain two integers **L** and **R** describing each period.

### Output

For each query, output one integer — the result of the progress analysis for the corresponding period.

### Constraints

- **1** ≤ **N, M** ≤ **5\*104**
- ≤ **A\[i\]** ≤ **106**

### Subtasks

- Subtask 1 (19 points) **1** ≤ **N, M** ≤ **200**, **time limit = 2 sec**
- Subtask 2 (31 points) **1** ≤ **N, M** ≤ **10 000**, **time limit = 2 sec**
- Subtask 3 (26 points)  ≤ **A\[i\]** ≤ **100**, **time limit = 5 sec**
- Subtask 4 (24 points) no additional constraints, , **time limit = 5 sec**

### Example

```
<b>Input:</b>
<tt>5
1 3 2 4 5
5
1 5
1 4
2 4
3 3
3 5</tt>

<b>Output:</b>
<tt>4
3
2
0
5</tt>


```
**Explanation**
The first query: sorted array looks like **(1, 2, 3, 4, 5)** and the answer is calculated as **(2-1)2 + (3-2)2 + (4-3)2 + (5-4)2 = 4**
The second query: sorted array looks like **(1, 2, 3, 4)** and the answer is calculated as **(2-1)2 + (3-2)2 + (4-3)2 = 3**
The last query: sorted array looks like **(2, 4, 5)** and the answer is calculated as **(4-2)2 + (5-4)2 = 5**