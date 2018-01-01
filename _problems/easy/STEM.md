---
category_name: easy
problem_code: STEM
problem_name: 'Word Stem'
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
problem_author: shangjingbo
problem_tester: null
date_added: 9-10-2015
tags:
    - cook63
    - easy
    - hashmaps
    - shangjingbo
    - strings
editorial_url: 'http://discuss.codechef.com/problems/STEM'
time:
    view_start_date: 1445193000
    submit_start_date: 1445193000
    visible_start_date: 1445193000
    end_date: 1735669800
    current: 1493558190
layout: problem
---
All submissions for this problem are available.###  Read problems statements in [Mandarin Chinese](http://www.codechef.com/download/translated/COOK63/mandarin/STEM.pdf) and [Russian](http://www.codechef.com/download/translated/COOK63/russian/STEM.pdf) as well.

Given **n** words **w**\[**1**..**n**\], which originate from the same stem (e.g. grace, graceful, disgraceful, gracefully), we are interested in the original stem. To simplify the problem, we define the stem as the longest consecutive substring that occurs in all the **n** words. If there are ties, we will choose the smallest one in the alphabetical (lexicographic) order.

### Input

The first line contains an integer **T** denoting the total number of test cases.

In each test cases, the first line contains an integer **n** denoting the number of words. In the second line, **n** words **w**\[**1**..**n**\] consisting of lower case characters are given as a single space-spearated list.

### Output

For each test case, output the stem in a new line.

### Constraints

- **1** <= **T** <= **10**
- **1** <= **n** <= **10**
- **1** <= |**w**\[**i**\]| <= **20**

### Example

<pre><b>Input:</b>
1
4
grace graceful disgraceful gracefully
<b>Output:</b>
grace

</pre>### Explanation
The stem is grace.
