---
category_name: hard
problem_code: EVILBOOK
problem_name: 'Evil Book'
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
problem_author: laycurse
problem_tester: anton_lunyov
date_added: 16-09-2011
tags:
    - hard
    - laycurse
    - march12
editorial_url: 'http://discuss.codechef.com/problems/EVILBOOK'
time:
    view_start_date: 1331461098
    submit_start_date: 1331461098
    visible_start_date: 1331458200
    end_date: 1735669800
    current: 1493556704
layout: problem
---
All submissions for this problem are available.Chef Ciel got enormous cooking power from the _Evil Book_. Instead, Ciel must devote 666 magical power to the Evil Book.

Other than Ciel, there are **N** chefs in the world. The **i**-th chef has **Ci** cooking power and **Mi** magical power. Ciel may get **Mi** magical power by defeating the **i**-th chef in a cooking battle, which needs **Ci** effort. After that, the **i**-th chef's magical power **Mi** becomes 0.

The Evil Book can help her, if she gives **X** magical power to the Evil Book. That is, by consuming **X** magical power, she can choose some **i** and multiply by 1/3 both the **i**-th chef's cooking power **Ci** and his magical power **Mi**. Note that she can't take the help of the Evil Book unless she has at least **X** magical power.

Firstly, Ciel has no magical power. What's the minimum total effort for collecting at least 666 magical power?

### Input

The first line contains an integer **T**, the number of test cases. Then **T** test cases follow. Each test case contains **N**+1 lines. The first line for each test case has 2 integers **N** and **X**. The (**i**+1)-th line for each test case has 2 integers **Ci** and **Mi**.

### Output

For each test case, print the minimum total effort (rounded to the nearest integer) for collecting at least 666 magical power. If it is impossible to collect 666 magical power, print "impossible" without quotes.

### Constraints

1 ≤ **T** ≤ 5
1 ≤ **N** ≤ 10
10 ≤ **X** < 666
0 ≤ **Ci** ≤ 1000000000 (109)
0 ≤ **Mi** ≤ 1000000000 (109)

### Sample Input

```
4
4 10
1 30
110 500
200 700
190 800
2 665
1 250
2 415
2 10
1000000000 1000000000
1000000000 1000000000
2 10
1000000000 1000000000
0 130
```
### Sample Output

```
168
impossible
1000000000
1882
```
### Output details

In the first case, the optimal way is the following.

Initially, Ciel's magical power = 0, Total effort = 0
**C**1 = 1, **M**1 = 30
**C**2 = 110, **M**2 = 500
**C**3 = 200, **M**3 = 700
**C**4 = 190, **M**4 = 800

After defeating the 1st chef:
Ciel's magical power = 30, Total effort = 1
**C**1 = 1, **M**1 = 0
**C**2 = 110, **M**2 = 500
**C**3 = 200, **M**3 = 700
**C**4 = 190, **M**4 = 800

After using 3 helps of the Evil Book (**i** = 2, 3, 4):
Ciel's magical power = 0, Total effort = 1
**C**1 = 1, **M**1 = 0
**C**2 = 36+2/3, **M**2 = 166+2/3
**C**3 = 66+2/3, **M**3 = 233+1/3
**C**4 = 63+1/3, **M**4 = 266+2/3

After defeating the 2nd, 3rd and 4th chefs:
Ciel's magical power = 666+2/3, Total effort = 167+2/3 (1 + 36+2/3 + 66+2/3 + 63+1/3)
**C**1 = 10, **M**1 = 0
**C**2 = 36+2/3, **M**2 = 0
**C**3 = 66+2/3, **M**3 = 0
**C**4 = 63+1/3, **M**4 = 0

In the fourth case, Ciel should defeat the 2nd chef at first. Then, after using 12 helps of the Evil Book, the 1st chef's cooking power and magical power become 109 / 312 = 1881.67642...