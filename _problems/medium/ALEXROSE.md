---
category_name: medium
problem_code: ALEXROSE
problem_name: 'Roses for Alexey'
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
problem_author: rubanalexey
problem_tester: kevinsogo
date_added: 14-11-2016
tags:
    - rubanalexey
time:
    view_start_date: 1481535000
    submit_start_date: 1481535000
    visible_start_date: 1481535000
    end_date: 1735669800
    current: 1493557440
layout: problem
---
All submissions for this problem are available.###  Read problems statements in [Mandarin Chinese](http://www.codechef.com/download/translated/DEC16/mandarin/ALEXROSE.pdf), [Russian](http://www.codechef.com/download/translated/DEC16/russian/ALEXROSE.pdf) and [Vietnamese](http://www.codechef.com/download/translated/DEC16/vietnamese/ALEXROSE.pdf) as well.

It's Valentine's day today. Alexey's flower shop has received lots of orders of bouquets of roses. The shop provides bouquets that contain exactly **K** roses, all of equal length.

Alexey daily asks his delivery persons to obtain **N** newly-plucked fresh roses from the nearby garden. The lengths of these roses are given to you by an array **A** of size **N**. Now, he wants to make maximum number of bouquets from these roses. He can pick a rose and cut it to any length he wants. Note that the leftover part of a rose after cutting cannot be reused and will have to be thrown.

One can easily see that Alexey can create a maximum of **N / K** bouquets. It is guaranteed in the problem that **N** is divisible by **K**. For obtaining these many requests, he wants to cut as few roses as possible. Can you please tell what is the minimum number of roses that will need to be cut in order to get **N / K** bouquets?

### Input

The first line of input contains an integer **T** denoting the number of test cases. The description of **T** test cases follows.

The first line of each test case contains two space-separated integers **N** and **K**, denoting the number of roses and the number of roses in one bouquet.

The second line contains **N** space-separated integers **A1, A2, ..., AN** denoting the lengths of roses.

### Output

For each test case, output a single line containing the minimum number of roses that need to be cut.

### Constraints

- **1** ≤ **T** ≤ **10**
- **2** ≤ **N** ≤ **100 000**
- **1** ≤ **Ai** ≤ **1018**
- **1** ≤ **K** ≤ **N**
- **N % K = 0 for each test case**

### Subtasks

15. Subtask #1 (5 points) **1**  ≤ **T** ≤ **10,** **2** ≤ **N** ≤ **12**, **1** ≤ **Ai** ≤ **50**
16. Subtask #2 (15 points) **1**  ≤ **T** ≤ **10,** **2** ≤ **N** ≤ **100,** **1** ≤ **Ai** ≤ **100**
17. Subtask #3 (30 points) **1**  ≤ **T** ≤ **10,** **2** ≤ **N** ≤ **1000,** **1** ≤ **Ai** ≤ **100 000**
18. Subtask #4 (50 points) **original constraints**
### Example

<pre><b>Input:</b>
<tt>2
8 4
1 2 2 3 4 5 5 6
4 4
1 1 1 3
</tt>
<b>Output:</b>
<tt>5
1
</tt>
</pre>### Explanation

**Case 1:** Alexey cut two roses of length 5 to length 2 and get the first bouquet with each rose length being 2. The other roses with length 3,4,6 can be cut to length 1 and he gets the second bouquet in which each rose will be of length 1.

**Case 2:** The last rose can be cut to length 1. There will be a bouquet with each rose of length 1.
