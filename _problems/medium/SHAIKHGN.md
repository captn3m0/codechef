---
category_name: medium
problem_code: SHAIKHGN
problem_name: 'Funny gnomes'
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
problem_author: na2a
problem_tester: xcwgf666
date_added: 23-05-2016
tags:
    - aug16
    - bitset
    - medium
    - na2a
editorial_url: 'http://discuss.codechef.com/problems/SHAIKHGN'
time:
    view_start_date: 1471253400
    submit_start_date: 1471253400
    visible_start_date: 1471253400
    end_date: 1735669800
    current: 1493557931
layout: problem
---
All submissions for this problem are available.###  Read problems statements in [Mandarin Chinese](http://www.codechef.com/download/translated/AUG16/mandarin/SHAIKHGN.pdf), [Russian](http://www.codechef.com/download/translated/AUG16/russian/SHAIKHGN.pdf) and [Vietnamese](http://www.codechef.com/download/translated/AUG16/vietnamese/SHAIKHGN.pdf) as well.

Kekocity's population consist of **N** gnomes numbered with unique ids from **1** to **N**. As they are very joyful gnomes, they usually send jokes to their friends right after they get any (even if they knew it before) via their social network named as Mybeard. Mybeard became popular in the city because of message auto-deletion. It takes exactly one minute to read and resend joke to mates.

Mayor of Kekocity, Mr. Shaikhinidin, is interested in understanding how the jokes are spread. He gives you database of Mybeard social network, and wants you to answer some queries on it.

You will be given a list of friends for every gnome and **M** queries of the following type: Who will receive a message with joke after exactly **K** minutes, if the creator of joke was gnome with id **x**?

### Input

The first line contains a single integer **N** denoting the number of gnomes.

The next **N** lines contain the the matrix **g\[N\]\[N\]**. Each of the **i**-th line, will contain **N** space separated integers - **j**-th of those will denote **g\[i\]\[j\]**. If gnome **j** is friend of gnome **i**, then **g\[i\]\[j\]** is 1. Otherwise it will be zero. Plese note that the friendship relationship is not bidirectional, i.e. it might happen that g\[i\]\[j\] may not be equal to g\[j\]\[i\]. Also one can be friend of itself also, i.e. g\[i\]\[i\] may be equal to 1.

The next line contains a single integer **M** denoting the number of queries. The next **M** lines contain two integers **k** and **x** described above.

### Output

For each query, output two lines.

In the first line, output how many gnomes will know the joke after **k** minutes.

In the second line, print these ids (numbering) of these gnomes in increasing order. If no one will know the joke after **K** minutes, then print -1 in this line.

### Constraints

- **1** ≤ **N** ≤ **500**
- **1** ≤ **M** ≤ **500**
- ≤ **k** ≤ **109**
- **1** ≤ **x** ≤ **N**
- ≤ **g\[i\]\[j\]** ≤ **1**

###  Subtasks 

 **Subtask #1 : (10 points)** - **1** ≤ **N** ≤ **50**
- **1** ≤ **M** ≤ **50**
- ≤ **k** ≤ **50**

 **Subtask #2 : (15 points)** - Original constraints
- Every gnome has exactly one friend (for every i there is exactly one j such that g\[i\]\[j\] = 1. Note that j can be equal to i)

 **Subtask #3 : (30 points)** - **1** ≤ **N** ≤ **75**
- **1** ≤ **M** ≤ **75**
- ≤ **k** ≤ **109**

 **Subtask #4 : (45 points)** - Original constraints

### Example

```
<b>Input:</b>
<tt>5
0 1 0 0 0
0 0 1 1 0
1 0 0 0 0
0 0 0 1 0
0 0 0 0 0
4
3 1
10000 1
0 5
1 5</tt>

<b>Output:</b>
<tt>2
1 4
2
2 4
1
5
0
-1</tt>

```