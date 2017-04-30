---
category_name: hard
problem_code: FNCS
problem_name: 'Chef and Churu'
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
max_timelimit: '2.5'
source_sizelimit: '50000'
problem_author: devuy11
problem_tester: null
date_added: 6-10-2014
tags:
    - data
    - devuy11
    - fenwick
    - medium
    - nov14
    - segment
    - sqrt
editorial_url: 'http://discuss.codechef.com/problems/FNCS'
time:
    view_start_date: 1416216600
    submit_start_date: 1416216600
    visible_start_date: 1416216600
    end_date: 1735669800
    current: 1493556966
layout: problem
---
All submissions for this problem are available.###  Read problems statements in [Mandarin Chinese](http://www.codechef.com/download/translated/NOV14/mandarin/FNCS.pdf) and [Russian](http://www.codechef.com/download/translated/NOV14/russian/FNCS.pdf).

Chef has recently learnt Function and Addition. He is too exited to teach this to his friend Churu. Chef and Churu are very fast friends, they share their knowledge whenever they meet. Chef use to give a lot of exercises after he teaches some concept to Churu.

Chef has an array of **N** numbers. He also has **N** functions. Each function will return the sum of all numbers in the array from **Li** to **Ri**. So Chef asks churu a lot of queries which are of two types. 13. Type 1: Change the **xth** element of the array to **y**.
14. Type 2: Return the sum of all functions from **m** to **n**.

Now Churu has started to solve, but Chef realize that it is tough for him to decide whether Churu is correct or not. So he needs your help , will you help him out ? ### Input Format

First Line is the size of the array i.e. **N** 
Next Line contains **N** space separated numbers **Ai** denoting the array
Next N line follows denoting **Li** and **Ri** for each functions.
Next Line contains an integer **Q** , number of queries to follow.
Next **Q** line follows , each line containing a query of Type 1 or Type 2.
1 **x y** : denotes a type 1 query,where **x** and **y** are integers
2 **m n** : denotes a type 2 query where **m** and **n** are integers
### Output Format

For each query of type 2 , output as asked above.
### Constraints

1 ≤ N ≤ 105
1 ≤ Ai ≤ 109
1 ≤ Li ≤ N
Li ≤ Ri ≤ N
1 ≤ Q ≤ 105
1 ≤ x ≤ N
1 ≤ y ≤ 109
1 ≤ m ≤ N
m ≤ n ≤ N
### Subtask

- Subtask 1: N ≤ 1000 , Q ≤ 1000 , 10 points
- Subtask 2: R-L ≤ 10 , all x will be distinct ,10 points
- Subtask 3: Refer to constraints above , 80 points

### Sample Input

5
1 2 3 4 5
1 3
2 5
4 5
3 5
1 2
4
2 1 4
1 3 7
2 1 4
2 3 5
### Sample Output

41
53
28
### Explanation

Functions values initially : 
F\[1\] = 1+ 2 + 3 = 6
F\[2\] = 2 + 3 + 4 + 5 = 14
F\[3\] = 4+5 = 9
F\[4\] = 3+4+5 = 12
F\[5\] = 1+2 = 3
Query 1: F\[1\] + F\[2\] + F\[3\] + F\[4\] = 41
After Update , the Functions are :
F\[1\] = 10 , F\[2\] = 18 , F\[3\] = 9 , F\[4\] = 16 , F\[5\] = 3
Query 3: F\[1\] + F\[2\] + F\[3\] + F\[4\] = 53
Query 4: F\[3\]+F\[4\]+F\[5\] = 28