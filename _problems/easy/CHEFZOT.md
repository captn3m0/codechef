---
category_name: easy
problem_code: CHEFZOT
problem_name: 'Chef and Subarray'
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
problem_author: berezin
problem_tester: shiplu
date_added: 18-03-2014
tags:
    - ad
    - berezin
    - cakewalk
    - june14
editorial_url: 'http://discuss.codechef.com/problems/CHEFZOT'
time:
    view_start_date: 1402911000
    submit_start_date: 1402911000
    visible_start_date: 1402911000
    end_date: 1735669800
    current: 1493558213
layout: problem
---
All submissions for this problem are available.###  Read problems statements in [Mandarin Chinese](http://www.codechef.com/download/translated/JUNE14/mandarin/CHEFZOT1.pdf) and [Russian](http://www.codechef.com/download/translated/JUNE14/russian/CHEFZOT.pdf).

Chef loves research! Now he is looking for subarray of maximal length with non-zero product.

Chef has an array **A** with **N** elements: **A1**, **A2**, ..., **AN**.

Subarray **Aij** of array **A** is elements from index **i** to index **j**: **Ai**, **Ai+1**, ..., **Aj**.

Product of subarray **Aij** is product of all its elements (from **ith** to **jth**).

### Input

- First line contains sinlge integer **N** denoting the number of elements.
- Second line contains **N** space-separated integers **A1**, **A2**, ..., **AN** denoting the elements of array.

### Output

- In a single line print single integer - the maximal length of subarray with non-zero product.

### Constraints

- **1** ≤ **N** ≤ **100000**
- ≤ **Ai** ≤ **10000**

### Example

<pre><b>Input:</b>
6
1 0 2 3 0 4

<b>Output:</b>
2

<b>Input:</b>
1
0

<b>Output:</b>
0

<b>Input:</b>
3
1 0 1

<b>Output:</b>
1

</pre>### Explanation
For the first sample subarray is: {2, 3}.

For the second sample there are no subbarays with non-zero product.

For the third sample subbarays is {1}, (the first element, or the third one).
