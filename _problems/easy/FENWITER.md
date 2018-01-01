---
category_name: easy
problem_code: FENWITER
problem_name: 'Fenwick Iterations'
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
problem_author: cenadar
problem_tester: alex_2oo8
date_added: 16-07-2015
tags:
    - bit
    - cenadar
    - easy
    - oct16
editorial_url: 'http://discuss.codechef.com/problems/FENWITER'
time:
    view_start_date: 1476696600
    submit_start_date: 1476696600
    visible_start_date: 1476696600
    end_date: 1735669800
    current: 1493558145
layout: problem
---
All submissions for this problem are available.###  Read problems statements in [Mandarin Chinese](http://www.codechef.com/download/translated/OCT16/mandarin/FENWITER.pdf), [Russian](http://www.codechef.com/download/translated/OCT16/russian/FENWITER.pdf) and [Vietnamese](http://www.codechef.com/download/translated/OCT16/vietnamese/FENWITER.pdf) as well.

Chef has just learned a new data structure - [Fenwick tree](https://en.wikipedia.org/wiki/Fenwick_tree). This data structure holds information about array of **N** elements and can process two types of operations:

- Add some value to **i**th element of the array
- Calculate sum of all elements on any prefix of the array

Both operations take O(log N) time. This data structure is also well known for its low memory usage. To be more precise, it needs exactly the same amount of memory as that of array. Given some array **A**, first we build data structure in some other array **T**. **Ti** stores the sum of the elements **Astart**, **Astart + 1**, ..., **Ai**. Index **start** is calculated with formula **start = Fdown(i) = (i & (i + 1))**. Here "&" denotes [bitwise **AND** operation](https://en.wikipedia.org/wiki/Bitwise_operation).

So, in order to find a sum of elements **A0**, **A1**, ..., **AL** you start with index **L** and calculate sum of **TL + TFdown(L)-1 + TFdown(Fdown(L)-1)-1 + ... + TFdown(Fdown(...(Fdown(L)-1)-1)-1**. Usually it is performed with cycle that goes from **L** down to  with function Fdown and sums some elements from T. Chef wants to verify that the time complexity to calculate sum of **A0**, **A1**, **A2**, ..., **AL** is **O(log L)**. In order to do so, he wonders how many times he has to access array **T** to calculate this sum. Help him to find this out.

Since Chef works with really big indices. The value of **L** can be very large and is provided to you in binary representation as concatenation of strings **L1**, **L2** repeated **N** times and string **L3**.

### Input

The first line of the input contains an integer **T** denoting the number of test cases. The description of **T** test cases follows.

The only line of each test case contains three non-empty strings **L1**, **L2**, **L3** and an integer **N**. Strings will contain only characters  and **1**. To obtain binary representation of index **L** concatenate **L1** with **L2** repeated **N** times and with **L3**. You are guaranteed that the index will be positive.

### Output

For each test case, output a single line containing number of times Fenwick tree data structure will access array **T** in order to compute sum of **A0**, **A1**, **A2**, ..., **AL**.

### Constraints

- **1** ≤ **T** ≤ **300**
- **1** ≤ **Length(Li)** ≤ **1000**
- **1** ≤ **N** ≤ **106**

### Subtasks

- Subtask #1 (20 points): **|L1| + |L2| \* N + |L3| ≤ 60**
- Subtask #2 (30 points): **1 ≤ T ≤ 30, 1 ≤ N ≤ 100**
- Subtask #3 (50 points): **No additional constraints**

### Example

<pre><b>Input:</b>
4
001 100 011 4
1000 1101 100 3
1010 001 101 4
010 101 000 4

<b>Output:</b>
6
12
8
10

</pre>