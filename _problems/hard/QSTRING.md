---
category_name: hard
problem_code: QSTRING
problem_name: 'Stringology is Magic'
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
max_timelimit: '1 - 10'
source_sizelimit: '50000'
problem_author: xiaodao
problem_tester: shangjingbo
date_added: 6-09-2014
tags:
    - medium
    - oct14
    - suffix
    - xiaodao
editorial_url: 'http://discuss.codechef.com/problems/QSTRING'
time:
    view_start_date: 1413192600
    submit_start_date: 1413192600
    visible_start_date: 1413192600
    end_date: 1735669800
    current: 1493556981
layout: problem
---
All submissions for this problem are available.###  Read problems statements in [Mandarin Chinese](http://www.codechef.com/download/translated/OCT14/mandarin/QSTRING.pdf) and [Russian](http://www.codechef.com/download/translated/OCT14/russian/QSTRING.pdf).

You have been given a string **T** with **n** lowercase letters **T\[1..n\]**. For each substrings **T\[l..r\]**, we can assign them two values, **k1** and **k2**, which are defined as following.

- **k1** is the number of different substrings which are lexicographically smaller than **T\[l..r\]**. There are **(n + 1) \* n / 2** substrings in total.
- **k2** indicates the number of substrings which are as same as **T\[l..r\]** but have smaller left subscript than **l**.

In this problem, you need to answer the following two queries:

- Select **k1** **k2**: report **l** and **r**, such that **T\[l..r\]** are assigned values **k1** and **k2**.
- Rank **l** **r**: output the assigned **k1** and **k2** of **T\[l..r\]**.

### Input

The first line contains a string **T** with **n** letters . The second line contains a number **m**, which represents for the totally number of queries.

Each of the following **m** lines contains a query. All queries are formed as "Select **k1** **k2**" or "Rank **l** **r**".

### Output

For each query, output the corresponding answer as the form "**l** **r**" or "**k1** **k2**" in a single line.

### Constraints

- **1** <= **n** <= **10^6**
- **1** <= **m** <= **10^6**
- **1** <= **l** <= **r** <= **n**
- **k1**, **k2** are legal
.


### Example

```
<b>Input:</b>
aa
6
Select 1 1
Select 1 2
Select 2 1
Rank 1 1
Rank 2 2
Rank 1 2

```
```
<b>Output:</b>
1 1
2 2
1 2
1 1
1 2
2 1

```