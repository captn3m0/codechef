---
category_name: medium
problem_code: ANUAHR
problem_name: 'Abhijeet and rectangles'
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
max_timelimit: '3'
source_sizelimit: '50000'
problem_author: anudeep2011
problem_tester: xiaodao
date_added: 15-01-2015
tags:
    - anudeep2011
    - cook54
    - data
    - medium
editorial_url: 'http://discuss.codechef.com/problems/ANUAHR'
time:
    view_start_date: 1421609400
    submit_start_date: 1421609400
    visible_start_date: 1421609400
    end_date: 1735669800
    current: 1493557470
layout: problem
---
All submissions for this problem are available.###  Read problems statements in [Mandarin Chinese](http://www.codechef.com/download/translated/COOK54/mandarin/ANUAHR.pdf) and [Russian](http://www.codechef.com/download/translated/COOK54/russian/ANUAHR.pdf) as well.

### Problem description

Abhijeet loves to play with rectangles. Today he has **N** rectangles of various sizes with him. He started to arrange them on the coordinate plane such that the area of intersection is maximized. However, he never rotated the rectangles he had, he only moved them here and there.

Abhijeet soon realized that the game was boring and decided to introduce a modification. He decided to remove atmost **M** of those rectangles and arrange others on coordinate plane such that the area of intersection is maximized.

Given the dimensions of **N** rectangles and **M**, can you answer maximum possible area of intersection with above rules?

**Note:** If all the rectangles are removed, the area of intersection is considered as 0.

### Input

The first line of the input contains an integer **T** denoting the number of test cases. The description of **T** test cases follows.First line of each test case has two integer **N** and **M**. **N** lines follow, each has two integers representing the length and breadth of the rectangle.

### Output

For each test case, output a single line containing the required answer.

### Constraints

- **1** ≤ **T** ≤ **105**
- **1** ≤ **N** ≤ **105**
- ≤ **M** ≤ **N**
- **1** ≤ **Rectangle Dimensions** ≤ **109**
- **1** ≤ **Sum of N over all test cases** ≤ **106**

### Example

<pre><b>Input:</b>
3
1 1
10 10
2 0
5 10
5 5
2 1
1 1
2 2

<b>Output:</b>
100
25
4

</pre>### Explanation
**Example case 1**

Abhijeet has only one rectangle. He can remove it, but then the area will be 0. Optimal way is not to remove it. Area = 10 \* 10 = 100

**Example case 2**

Abhijeet cannot remove any rectangles in this case. He can however, place them such that the smaller 5 by 5 rectangle is completely inside the larger 5 by 10 rectangle. Then the area of intersection is 5 \* 5 = 25

**Example case 3**

Abhijeet can remove atmost 1 rectangles in this case. He can remove the smaller rectangle of size 1 by 1. He is then left with 2 by 2 rectangle of area 4.
