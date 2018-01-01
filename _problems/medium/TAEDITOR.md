---
category_name: medium
problem_code: TAEDITOR
problem_name: 'Simple Editor'
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
problem_author: tuananh93
problem_tester: null
date_added: 3-07-2014
tags:
    - bit
    - ltime14
    - medium
    - segment
    - strings
    - tuananh93
editorial_url: 'http://discuss.codechef.com/problems/TAEDITOR'
time:
    view_start_date: 1406452500
    submit_start_date: 1406452500
    visible_start_date: 1406452500
    end_date: 1735669800
    current: 1493557941
layout: problem
---
All submissions for this problem are available.###  Read problems statements in [Mandarin Chinese](http://www.codechef.com/download/translated/LTIME14/mandarin/TAEDITOR.pdf).

In this problem you will have to implement a simple editor. The editor maintains the content of a string **S** and have two following functions:


"**+ i x**": insert a string **x** into the current string **S** after the **i**'th character of the **S** (we use 1-indexing in this problem). When **i** equals to  it mean we add **x** at the beginning of **S**.

"**? i len**": Print the sub-string of length **len** starting at position **i**'th of **S**.


At the beginning, the editor holds an empty string. There will be **Q** queries of the two types described above./>/>/>

### Input

The first line contains the integer **Q**.
Each line in the next **Q** lines contains one query.

### Output

For each query of the second type, print out the answer sub-string in one line.

### Constraints

- For the first type of query: 0 ≤ **i** ≤ |**S**|
- For the second type of query: 1 ≤ **i** ≤ |**S**| - **len** + 1

20 points

- **Q** ≤ 1000, |**S**| ≤ 1000, sum of value of all **len**s ≤ 1000:

30 points

- **Q** ≤ 10000, |**S**| ≤ 10000, sum of value of all **len**s ≤ 10000:

50 points

- **Q** ≤ 3×105, |**S**| ≤ 3×105, sum of value of all **len**s ≤ 3×105:

### Example

<pre><b>Input:</b>
5
+ 0 ab
+ 1 c
? 1 3
+ 2 dd
? 1 5

<b>Output:</b>
acb
acddb

</pre>### Explanation
- "+ 0 ab": S = "ab"
- "+ 1 c": S = "acb"
- "+ 2 dd": S = "acddb"
