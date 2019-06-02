---
category_name: hard
problem_code: CHEFTRI4
problem_name: 'Chef and Triangles'
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
max_timelimit: '5'
source_sizelimit: '50000'
problem_author: mgch
problem_tester: tuananh93
date_added: 9-12-2016
tags:
    - ad
    - cook77
    - geometry
    - hard
    - mgch
editorial_url: 'https://discuss.codechef.com/problems/CHEFTRI4'
time:
    view_start_date: 1482085800
    submit_start_date: 1482085800
    visible_start_date: 1482085800
    end_date: 1735669800
    current: 1493556648
layout: problem
---
All submissions for this problem are available.###  Read problems statements in [Mandarin Chinese](http://www.codechef.com/download/translated/COOK77/mandarin/CHEFTRI4.pdf), [Russian](http://www.codechef.com/download/translated/COOK77/russian/CHEFTRI4.pdf) and [Vietnamese](http://www.codechef.com/download/translated/COOK77/vietnamese/CHEFTRI4.pdf) as well.

Can you make one big triangle using four triangles? You can gum up two figures by common side(for instance, you have 2 triangles (3, 4, 5), (3, 4, 5) you can make triangle (5, 5, 6) if gum them up with side 4, or (5, 5, 8) with side 3). Common side can be not equal.

### Input

First line of the input contains **T** - number of test cases. **T** test cases follows.

First line of each test case containing three positive integers - side of first triangle, second line - sides of second triangle, third - sides of third triangle, and fourth - sides of fourth triangle.

### Output

For each test case, output "Yes" if possible somehow to gum up triangles into big one, and "No" otherwise.

### Constraints

- **1** ≤ **T** ≤ **100000**
- **1** ≤ sides of each triangle ≤ **1000**

### Example

<pre><b>Input:</b>
4
3 4 5
5 4 3
3 4 5
4 3 5
238 185 87
109 87 28
156 109 53
303 156 153
37 20 19
80 60 100
72 80 136
37 136 164
259 210 91  
259 182 105   
168 117 75   
30 28 26

<b>Output:</b>
Yes
Yes
No
Yes

</pre>
### Explanation

**Example case 1.** We can obtain (6, 8, 10).

**Example case 2.** We can obtain (182, 303, 472).

**Example case 4.** We can obtain (168, 259, 259).
