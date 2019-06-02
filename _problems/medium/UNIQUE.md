---
category_name: medium
problem_code: UNIQUE
problem_name: 'Chef and Uniqueness'
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
problem_author: shiplu
problem_tester: rustinpiece‎
date_added: 31-01-2014
tags:
    - cook43
    - hard
    - lcp
    - segment
    - shiplu
    - string
    - suffix
editorial_url: 'http://discuss.codechef.com/problems/UNIQUE'
time:
    view_start_date: 1392575400
    submit_start_date: 1392575400
    visible_start_date: 1392575400
    end_date: 1735669800
    current: 1493557976
layout: problem
---
All submissions for this problem are available.###  Read problems statements in [Mandarin Chinese](http://www.codechef.com/download/translated/COOK43/mandarin/UNIQUE.pdf) and [Russian](http://www.codechef.com/download/translated/COOK43/russian/UNIQUE.pdf) as well.

Today chef has decided to cook a string **S** of length **N**. But he will not just cook the whole string, but a unique substring of the given string **S**. A substring is unique if it occurs in the string **S** only once. Chef also does not like all the indices of a string. He wants a special index **i** to be in the unique substring. But the length of the unique substring should be minimized.

Chef wants your help to find an unique substring of minimum possible length which contains the index **i**. If there are several such substrings, chef will take the lexicographically smallest one. But chef has not told you the value of **i** yet. So you have to find the answer for all **i** (**1** to **N**).

### Input

Input contains a single line containing the string **S** of length **N** and it consists of lower case letters only.

### Output

Print **N** lines, where **i**-th line will contain two space separated integers **Pi** and **Li**. **Pi** is the starting position (**1**-indexed) and **Li** is the length of the shortest unique substring which contains the index **i**.

### Constraints

- **1** ≤ **N** ≤ **105**
- **S** contains only lower case letters.

### Example

<pre><b>Input:</b>
abcab

<b>Output:</b>
1 3
2 2
3 1
3 2
3 3

</pre>
### Explanation

**Example case 1.** 

i = 1, shortest unique substring is "abc"

i = 2, shortest unique substring is "bc"

i = 3, shortest unique substring is "c"

i = 4, shortest unique substring is "ca"

i = 5, shortest unique substring is "cab"
