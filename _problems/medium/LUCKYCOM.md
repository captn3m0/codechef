---
category_name: medium
problem_code: LUCKYCOM
problem_name: 'Little Elephant and CNSes'
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
max_timelimit: '3'
source_sizelimit: '50000'
problem_author: witua
problem_tester: anton_lunyov
date_added: 1-03-2012
tags:
    - cook22
    - medium
    - witua
editorial_url: 'http://discuss.codechef.com/problems/LUCKYCOM'
time:
    view_start_date: 1337540997
    submit_start_date: 1337540997
    visible_start_date: 1337539200
    end_date: 1735669800
    current: 1493557770
layout: problem
---
All submissions for this problem are available.A Little Elephant from the Zoo of Lviv likes _lucky strings_, i.e., the strings that consist only of the lucky digits **4** and **7**.

 The Little Elephant has **N** favorite strings **S1, S2, ..., SN** and the favorite number **K**. Each character in **Si** (**1 ≤ i ≤ N**) is either the lucky digit (**4** or **7**) or the question mark **?**.

Consider some non-decreasing lucky string **S**. In other words, **S** has one of the following forms: **444...444**, **777...777**, **444...444777...777**. The string **S** is called a  _CNS_ (plural form is CNSes) if we can replace some (possibly zero) number of question marks with the lucky digits in each of the string **S1, S2, ..., SN** in a such way that the total number of replacements for all strings does not exceed **K** and **S** is a subsequence of each of the strings derived after the replacement.

The Little Elephant wants to know the total number of all different non-empty CNSes. Help him to find this number.

**Notes.**

Let **S** be some string (possibly not lucky). Then - **|S|** denotes the length of the string **S**;
- **S\[i\]** (**1 ≤ i ≤ |S|**) denotes the **i**th character of **S** (the numeration of characters starts from **1**);


The string **T** is called a _subsequence_ of the string **S** if **T** can be derived from **S** by deleting some (possibly zero) number of characters without changing the order of the remaining characters. For example, **T = 474** is a subsequence of **S = 74477747??** since after deleting characters at positions **1, 2, 5, 6, 8, 9, 10** from **S** we obtain **T**. Note that, the empty string and the string **S** itself are always the subsequences of **S**.

### Input

The first line of the input file contains two space separated integers **N** and **K**, the number of strings in the set and the favorite number of the Little Elephant. Each of the following **N** lines contains one favorite string of the Little Elephant. Namely, **i**th line among these **N** lines contains the string **Si**.

### Output

 For each test case output a single line containing the answer for this test case.

### Constraints

1 ≤ **N** ≤ 7474

0 ≤ **K** ≤ 109

**Si** is non-empty for **1 ≤ i ≤ N**.

**|S1| + |S2| + ... + |SN|** ≤ 100000. In other words, the total length of all **N** strings does not exceed 100000.

 Each character in **Si** (**1 ≤ i ≤ N**) is either the lucky digit (**4** or **7**) or the question mark **?**.

### Example

<pre>
<b>Input:</b>
3 2
4447
47???74
4?77?

<b>Output:</b>
5


</pre>### Explanation
For the sample input all different CNSes are **4**, **7**, **44**, **47** and **447**. Note, that **444** is not a CNS since it requires at least 3 replacements of the question marks.
