---
category_name: easy
problem_code: DEFACING
problem_name: 'Defacing Score'
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
max_timelimit: '2.013'
source_sizelimit: '50000'
problem_author: laycurse
problem_tester: anton_lunyov
date_added: 2-01-2013
tags:
    - cook30
    - easy
    - greedy
    - laycurse
editorial_url: 'http://discuss.codechef.com/problems/DEFACING'
time:
    view_start_date: 1358709966
    submit_start_date: 1358709966
    visible_start_date: 1358709966
    end_date: 1735669800
    current: 1493558135
layout: problem
---
All submissions for this problem are available.All chefs in the Wolf town are scored by the government and receive the score at the beginning of every year. Now Dark Chef tries to deface his score. The score is shown with the following 7-segment display:

![](http://codechef.com/download/DEFACING1.png)Dark Chef can turn on some segments, but he can not turn off any segment. Thus, he can increase his score like as follows:

![](http://codechef.com/download/DEFACING2.png)Please, note that Dark Chef can add new 7-segment digits to the beginning or the end of his score. But he is not allowed to end up with the score having leading zeros (except when the score is zero itself, see example case **6**).

Now he has received the score **S**, and he wants to increase his score as much as possible. But the maximum possible score government could give is **M**. So his score must not exceed **M**. Your task is to calculate the maximum possible score he could get after defacing.

**Note.** The digit **"1"** can **not** be changed to the digit **"6"**, because in the representation of the digit **"1"** we have **right** **2** segments turned on, while for the digit **"6"** the upper-right segment must be turned off, see example case **12** for clarity. And, of course, the defaced score must be represented by the digits which have exactly the same form as shown in the above figure.

### Input

The first line of the input contains an integer **T** denoting the number of test cases. The description of **T** test cases follows. The only line of each test case contains two space separated integers **S** and **M**, Dark Chef's score and the maximum score the government could give respectively.

### Output

For each test case, output a single line containing the maximum possible score Dark Chef could get after defacing.

### Constraints

- **1** ≤ **T** ≤ **201301**
- 0 ≤ **S** ≤ **M** ≤ **20130120**
- Each positive integer in the input will be given without leading zeros
- If **S** or **M** is equal to zero, it will be given in the input as **"0"** (quotes for clarity)

### Example

<pre>
<b>Input:</b>
12
25 100
77 100
0 100
8 13
8 24
0 0
19 38
89375 9247529
804276 2857282
0 20130120
3284709 20130120
1 6

<b>Output:</b>
89
100
100
8
18
0
38
9189999
2809898
20130120
19889989
4
</pre>### Explanation

The first three example cases correspond to the figure in the problem statement.
