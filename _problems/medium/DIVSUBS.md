---
category_name: medium
problem_code: DIVSUBS
problem_name: 'Divisible Subset'
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
problem_author: xcwgf666
problem_tester: stzgd
date_added: 25-04-2014
tags:
    - ltime12
    - pigeonhole
    - simple
    - xcwgf666
editorial_url: 'http://discuss.codechef.com/problems/DIVSUBS'
time:
    view_start_date: 1401006600
    submit_start_date: 1401006600
    visible_start_date: 1401006600
    end_date: 1735669800
    current: 1493557918
layout: problem
---
All submissions for this problem are available.###  Read problems statements in [Mandarin Chinese](http://www.codechef.com/download/translated/LTIME12/mandarin/DIVSUBS.pdf) and [Russian](http://www.codechef.com/download/translated/LTIME12/russian/DIVSUBS.pdf).

You are given a multiset of **N** integers. Please find such a nonempty subset of it that the sum of the subset's elements is divisible by **N**. Otherwise, state that this subset doesn't exist.

### Input

The first line of the input contains an integer **T** denoting the number of test cases. The description of **T** test cases follows. 

The first line of each test consists of a single integer **N** - the size of the multiset.

The second line of each test contains **N** single space separated integers - the multiset's elements.

### Output

For each test case output:

- **-1** if the required subset doesn't exist
- If the required subset exists, output two lines. Output the size of the subset on the first line and output the list of indices of the multiset's element that form the required subset. Of course, any number can be taken in the subset no more than once.

If there are several such subsets, you can output any.

### Constraints

- 1 <= The sum of **N** over all the test cases <= 105
- Each element of the multiset is a positive integer, not exceeding 109.
- 1 <= **N** <= 15 : 37 points.
- 1 <= **N** <= 1000 : 24 points.
- 1 <= **N** <= 105 : 39 points.

### Example

<pre><b>Input:</b>
1
3
4 6 10

<b>Output:</b>
1
2


</pre>### Explanation
We can pick {6} as the subset, then its sum is 6 and this is divisible by 3 - the size of the initial multiset.
