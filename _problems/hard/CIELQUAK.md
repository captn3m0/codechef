---
category_name: hard
problem_code: CIELQUAK
problem_name: 'Ciel and Earthquake'
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
max_timelimit: '8'
source_sizelimit: '50000'
problem_author: laycurse
problem_tester: anton_lunyov
date_added: 2-02-2012
tags:
    - hard
    - laycurse
    - march12
editorial_url: 'http://discuss.codechef.com/problems/CIELQUAK'
time:
    view_start_date: 1331461012
    submit_start_date: 1331461012
    visible_start_date: 1331458200
    end_date: 1735669800
    current: 1493556655
layout: problem
---
All submissions for this problem are available.The country in which Chef Ciel lives has many earthquakes. Since Ciel's restaurant is far away from an evacuation center, Ciel is afraid of earthquakes. So, Ciel would like to know the probability that Ciel can reach from Ciel's restaurant to the evacuation center when an earthquake occurs. Your task is calculating the probability under the following assumptions.

Ciel's city has **R**\***C** junctions (**i**, **j**) for 1 ≤ **i** ≤ **R**, 1 ≤ **j** ≤ **C**. There is a two-way road between the junctions (**r**1, **c**1) and (**r**2, **c**2) if and only if |**r**1 - **r**2| + |**c**1 - **c**2| = 1. When an earthquake occurs, each road is destroyed with probability **p**, and these events are statistically independent of each other. Ciel's restaurant is in the junction (1, 1), and the evacuation center is in the junction (**R**, **C**). Ciel only considers a big earthquake, so you can assume that **p** is not less than 0.1.

### Input

The first line contains an integer **T**, the number of test cases. Then **T** test cases follow. Each test case has 3 numbers **R**, **C** and **p**, where **R** and **C** are integers.

### Output

For each test case output the required probability. Your answer must have an absolute error no more than 0.000001 (10-6).

### Constraints

1 ≤ **T** ≤ 50
1 ≤ **R** ≤ 8
1 ≤ **C** ≤ 1000000000000000000 (1018)
0\.1 ≤ **p** ≤ 1
**p** has at most four digits after the decimal point.

### Sample Input

```
5
2 2 0.5
3 2 0.7
2 3 0.7
1 1 0.2
7 7 0.8
```
### Sample Output

```
0.4375
0.0768204
0.0768204
1
0.000003962379607
```