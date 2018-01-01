---
category_name: medium
problem_code: CHEFD
problem_name: 'Chef and medium problem 2'
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
max_timelimit: '1'
source_sizelimit: '50000'
problem_author: furko
problem_tester: stzgd
date_added: 17-09-2014
tags:
    - bit
    - furko
    - ltime16
    - medium
    - sets
editorial_url: 'http://discuss.codechef.com/problems/CHEFD'
time:
    view_start_date: 1411893000
    submit_start_date: 1411893000
    visible_start_date: 1411893000
    end_date: 1735669800
    current: 1493557521
layout: problem
---
All submissions for this problem are available.###  Read problems statements in [Mandarin Chinese](http://www.codechef.com/download/translated/LTIME16/mandarin/CHEFD.pdf) and [Russian](http://www.codechef.com/download/translated/LTIME16/russian/CHEFD.pdf).

Chef has an array containing **N** integers. You have to make **M** queries. Each query has one of the two types:

- **1 l r p** - Select all the numbers having indices between **l** and **r** (inclusive) that are divisible by **p** and divide them by **p**,
   where **p** is in set {2, 3, 5}.
- **2 l d** - Modify the **l**-th number in the array to **d**.

Please help Chef in finding out the array after all the **M** queries.

### Input

The first line of the input contains a single integer **N** denoting the number of integers in given array.

The second line contains **N** space-separated integers **A1**, **A2**, ..., **AN** denoting the given array.

Next line contains a single integer **M** denoting the number of queries.

Each of the following **M** lines describes a single query in the format given in the statement.

### Output

 Output a single line containing **N** integers denoting the array after all the **M** queries.

### Constraints

- 1 ≤ **M** ≤ 105
- 1 ≤ **l** ≤ **r** ≤ **N**
- 1 ≤ **Ai** ≤ 109
- In each query of first type, **p** is in set {2, 3, 5}
- Subtask 1 (20 points): 1 ≤ **N** ≤ 100
- Subtask 2 (35 points): 1 ≤ **N** ≤ 105, there is no query of second type
- Subtask 3 (45 points): 1 ≤ **N** ≤ 105

### Example

<pre>
<b>Input:</b>
3
1 2 3
5
1 2 2 2
1 2 2 2
2 2 3
1 2 3 3
2 1 5

<b>Output:</b>
5 1 1

</pre>