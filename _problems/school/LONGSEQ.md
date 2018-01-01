---
category_name: school
problem_code: LONGSEQ
problem_name: 'Chef and digits of a number'
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
problem_author: chandubaba
problem_tester: dpraveen
date_added: 24-01-2016
tags:
    - ad
    - cakewalk
    - chandubaba
    - sept16
    - string
editorial_url: 'http://discuss.codechef.com/problems/LONGSEQ'
time:
    view_start_date: 1473931800
    submit_start_date: 1473931800
    visible_start_date: 1473931800
    end_date: 1735669800
    current: 1492506750
layout: problem
---
All submissions for this problem are available.###  Read problems statements in [Mandarin Chinese](http://www.codechef.com/download/translated/SEPT16/mandarin/LONGSEQ.pdf), [Russian](http://www.codechef.com/download/translated/SEPT16/russian/LONGSEQ.pdf) and [Vietnamese](http://www.codechef.com/download/translated/SEPT16/vietnamese/LONGSEQ.pdf) as well.

Chef has a number **D** containing only digits 0's and 1's. He wants to make the number to have all the digits same. For that, he will change **exactly** one digit, i.e. from 0 to 1 or from 1 to 0. If it is possible to make all digits equal (either all 0's or all 1's) by flipping exactly 1 digit then output "Yes", else print "No" (quotes for clarity)

### Input

 The first line will contain an integer **T** representing the number of test cases.

Each test case contain a number made of only digits 1's and 0's on newline

### Output

 Print T lines with a "Yes" or a "No", depending on whether its possible to make it all 0s or 1s or not.

### Constraints

**Subtask #1: (40 points)**- **1** ≤ **T** ≤ **50**
- **1** ≤ **Length of the number D** ≤ **50**

 **Subtask #2: (60 points)**- **1** ≤ **T** ≤ **10**
- **1** ≤ **Length of the number D** ≤ **105**

### Example

<pre><b>Input:</b>
2
101
11
<b>Output:</b>
Yes
No

</pre>### Explanation
**Example case 1.** In 101, the 0 can be flipped to make it all 1..

**Example case 2.** No matter whichever digit you flip, you will not get the desired string.
