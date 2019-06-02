---
category_name: easy
problem_code: ORACLCS
problem_name: 'Oracle Devu and Longest Common Subsequence'
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
problem_author: admin2
problem_tester: xcwgf666
date_added: 3-10-2015
tags:
    - admin2
    - dec15
    - lcs
    - simple
editorial_url: 'http://discuss.codechef.com/problems/ORACLCS'
time:
    view_start_date: 1450085400
    submit_start_date: 1450085400
    visible_start_date: 1450085400
    end_date: 1735669800
    current: 1493558217
layout: problem
---
All submissions for this problem are available.###  Read problems statements in [Mandarin Chinese](http://www.codechef.com/download/translated/DEC15/mandarin/ORACLCS.pdf), [Russian](http://www.codechef.com/download/translated/DEC15/russian/ORACLCS.pdf) and [Vietnamese](http://www.codechef.com/download/translated/DEC15/vietnamese/ORACLCS.pdf) as well.

Devu is a disastrous oracle: his predictions about various events of your life are horrifying. Instead of providing good luck, he "blesses" you with bad luck. The secret behind his wickedness is a hidden omen which is a string of length **m**. On your visit to him, you can ask a lot of questions about your future, each of which should be a string of length **m**. In total you asked him **n** such questions, denoted by strings **s1**, **s2**, ... , **sn** of length **m** each. Each of the question strings is composed of the characters 'a' and 'b' only.

Amount of bad luck this visit will bring you is equal to the length of longest common subsequence ([LCS](https://en.wikipedia.org/wiki/Longest_common_subsequence_problem)) of all the question strings and the hidden omen string. Of course, as the omen string is hidden, you are wondering what could be the least value of bad luck you can get.

Can you find out what could be the least bad luck you can get? Find it fast, before Devu tells you any bad omens.

### Input

The first line of the input contains an integer **T** denoting the number of test cases. The description of **T** test cases follows.

First line of each test case contains a single integer **n** denoting number of strings.

For each of next **n** lines, the **i**th line contains the string **si**.

### Output

For each test case, output a single integer corresponding to the answer of the problem. ### Constraints

- All the strings (including the hidden omen) contain the characters 'a' and 'b' only.

 **Subtask #1:** (40 points)

- **1** ≤ **T, n, m** ≤ **14**

 **Subtask #2:** (60 points)

- **1** ≤ **T, n, m** ≤ **100**

### Example

<pre><b>Input:</b>
<tt>3
2
ab
ba
2
aa
bb
3
aabb
abab
baab</tt>

<b>Output:</b>
<tt>1
0
2</tt>
</pre>
### Explanation

**In the first example**, the minimum value of LCS of all the strings is 1, the string by oracle can be one of these {aa, ab, ba, bb}.

**In the second example**, whatever string oracle has does not matter, LCS will always be zero.
