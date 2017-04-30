---
category_name: hard
problem_code: LEBOXES
problem_name: 'Little Elephant and Boxes'
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
max_timelimit: '4'
source_sizelimit: '50000'
problem_author: witua
problem_tester: subra
date_added: 8-04-2012
tags:
    - hard
    - may12
    - witua
editorial_url: 'http://discuss.codechef.com/problems/LEBOXES'
time:
    view_start_date: 1336723200
    submit_start_date: 1336723200
    visible_start_date: 1336728600
    end_date: 1735669800
    current: 1493556752
layout: problem
---
All submissions for this problem are available.Little Elephant from Zoo of Lviv has **n** boxes. He don't know what is in the boxes, but he thinks that **i-th** box (0-based numeration) contains **Vi** dollars. The probability that **i-th** box will contain money is **Pi** percents. Instead of money **i-th** box may contain a single diamond (with the probability **100-Pi** percents).

There are **m** things to buy, numbered from  to **m-1**, **j-th** thing costs exactly **Cj** dollars plus **Dj** diamonds. Little Elephant is very smart and if he has some number of dollars and diamonds he will always buy the maximal possible number of things he can afford. Note that there is just one copy of all **m** things.

Help Little Elephant to find the expected number of things he will buy.

### Input

First line of the input contains single integer **T** - the number of test cases. **T** test cases follow. First line of each test case contains pair of integers **n** and **m**. Next **n** lines of each test case contain pairs of integers **Vi** and **Pi**, one pair per line. Next **m** lines of each test case contain pairs of integers **Cj** and **Dj**, one pair per line.

### Output

In **T** lines print **T** real numbers - the answers for the corresponding test cases. Round each number to **4** digits after decimal point.

### Constraints

1 <= **T** <= 5

2 <= **n** <= 30

1 <= **m** <= 30

1 <= **Vi**, **Cj** <= 10^7

0 <= **Dj** <= 30

0 <= **Pi** <= 100

### Example

```

<b>Input:</b>
2
2 2
2 50
2 100
2 0
2 0
2 2
2 100
2 50
0 2
0 1

<b>Output:</b>
1.5000
0.5000


```