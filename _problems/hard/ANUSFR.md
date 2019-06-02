---
category_name: hard
problem_code: ANUSFR
problem_name: 'Substring and five rules'
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
max_timelimit: '2'
source_sizelimit: '50000'
problem_author: anudeep2011
problem_tester: kostya_by
date_added: 1-10-2014
tags:
    - anudeep2011
    - cook51
    - greedy
    - hard
    - segment
    - two
editorial_url: 'http://discuss.codechef.com/problems/ANUSFR'
time:
    view_start_date: 1413744000
    submit_start_date: 1413744000
    visible_start_date: 1413744000
    end_date: 1735669800
    current: 1493556613
layout: problem
---
All submissions for this problem are available.###  Read problems statements in [Mandarin Chinese](http://www.codechef.com/download/translated/COOK51/mandarin/ANUSFR.pdf) and [Russian](http://www.codechef.com/download/translated/COOK51/russian/ANUSFR.pdf) as well.

Given a string **S**. You need to find a substring which satisfies the following conditions and output its start and end positions in the string **S**.

- Has exactly **x** different characters in it.
- Length of substring is atleast **minLength** and atmost **maxLength**.
- substring's start position is greater than or equal to **L**.
- substring's end position is less than or equal to **R**.

If there are multiple substrings that satisfy above conditions, choose the one that has least start position. If there are still multiple substrings, choose the one that has least end position. See output section for more details

### Input

First line of input contains the string **S**
The second line of the input contains an integer **Q** denoting the number of queries.
Only line of each query contains 5 space separated integers, **x**, **minLength**, **maxLength**, **L**, **R**

### Output

For each query, output one line with 2 space separated integers, start and end positions of substring in S. If there is no valid solution output "-1 -1" instead

### Constraints

- **1** ≤ **|S| (Length of S)** ≤ **10^5**
- **S contains only lower case english alphabet ('a' - 'z')**
- **1** ≤ **Q** ≤ **10^5**
- **1** ≤ **x** ≤ **26**
- **1** ≤ **minLength** ≤ **maxLength** ≤ **|S|**
- 0 ≤ **L** ≤ **R** ≤ **|S|-1**

### Example

<pre><b>Input</b>
abcc
3
2 1 3 0 3
2 3 3 0 3
1 2 2 0 2

<b>Output</b>
0 1
1 3
-1 -1
</pre>
### Explanation

**Testcase #1**
We need a substring with 2 different characters, of length 1 or 2 or 3 and in between S\[0..3\].
S\[0..1\] = "ab", which has 2 different characters, length 2, and is in between S\[0..3\]

**Testcase #2**
Here we need the length to be 3.
S\[1..3\] = "bcc", has 2 different characters, length 3, and is in between S\[0..3\]
